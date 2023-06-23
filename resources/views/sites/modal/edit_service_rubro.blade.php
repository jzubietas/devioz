<div id="EditServiceRubroModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">Actualizar servicio en Rubro</h5>
                <button type="button" aria-label="Close" class="close btn btn-md btn-icon btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i></button>
            </div>

            <div id="successAlert" class="alert alert-success d-none" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>

            <form method="POST" id="editServiceRubroForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editServiceRubroValidationErrorsBox"></div>
                    <input type="hidden" name="servicerubro_id" id="IdServiceRubro">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6 d-flex">
                            <div class="col-sm-4 col-md-6 pl-0 form-group">
                                <label>Imagen Servicio de Rubro: <span class="text-danger">(1280 x 800 pixeles)</span></label>
                                <br>
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> Seleccione
                                    <input type="file" name="photoSr" id="srImage" class="d-none" >
                                </label>
                            </div>
                            <div class="col-sm-3 preview-image-video-container float-right mt-1">
                                <img alt="" id='edit_preview_photo_sr' class="img-thumbnail user-img user-profile-img profilePicture"
                                     src="{{asset('img/logo/logo-cc.png')}}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="srTitle">Titulo:</label><span class="required">*</span>
                            <input type="text" name="srTitle" id="srTitle" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="srText">Texto:</label><span class="required">*</span>
                            <input type="text" name="srText" id="srText" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnSrEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Actualizar</button>
                        <button type="button" class="btn btn-secondary ml-1 edit-cancel-margin margin-left-5" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('js')

    <script>
        $( document ).ready(function() {
            console.log( "ready!" );

            const myModalService = (document.getElementById('EditServiceRubroModal'));

            myModalService.addEventListener('hidden.bs.modal', function () {
                $("#srTitle").val('')
                $("#srText").val('')
            })

            myModalService.addEventListener('show.bs.modal', function (event) {
                const buttonservice = $(event.relatedTarget);
                const service = buttonservice.data('servicerubro');
                console.log("servicio id es :"+service)
                $('#IdServiceRubro').val(service)
                $('#srTitle').val(buttonservice.data('title'))
                $('#srText').val(buttonservice.data('text'))
            })

            $(document).on('change', '#srImage', function () {
                let ext = $(this).val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) === -1) {
                    $(this).val('');
                    $('#editProfileValidationErrorsBox').
                    html(
                        'The profile image must be a file of type: jpeg, jpg, png.').
                    show();
                } else {
                    displayPhoto(this, '#edit_preview_photo_sr');
                }
            });

            window.displayPhoto = function (input, selector) {
                let displayPreview = true
                if (input.files && input.files[0]) {
                    let reader = new FileReader()
                    reader.onload = function (e) {
                        let image = new Image()
                        image.src = e.target.result
                        image.onload = function () {
                            $(selector).attr('src', e.target.result)
                            displayPreview = true
                        }
                    }
                    if (displayPreview) {
                        reader.readAsDataURL(input.files[0])
                        $(selector).show()
                    }
                }
            }

            $(document).on('submit', '#editServiceRubroForm', function (event) {
                event.preventDefault();

                const formData = new FormData();
                //formData.append('keyHomePhoto', 'HomePhoto');
                const fileField = document.getElementById('srImage');
                if (fileField.files[0]) {
                    formData.append('photo', fileField.files[0]);
                }
                formData.append('servicerubro',$('#IdServiceRubro').val());
                formData.append('title', document.querySelector('#srTitle').value);
                formData.append('text', document.querySelector('#srText').value);

                const loadingButton = jQuery(this).find('#btnSrEditSave');
                loadingButton.button('loading');
                $.ajax({
                    url: "{{ route('servicesrubro.update') }}",
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: async function success(response) {
                        console.log(response);
                        if (Object.keys(response).indexOf('errors') !== -1) {
                            console.log(" existe errores");
                            const errorAlert = document.querySelector('#errorAlert');

                            let html_text = '<ul>';

                            for await (const $error of response["errors"]) {
                                html_text += '<li>' + $error + '</li>';
                                break;
                            }
                            html_text += '</ul>';
                            errorAlert.innerHTML = html_text;
                            errorAlert.classList.remove('d-none');
                            setTimeout(function () {
                                // Remove the alert element from the DOM
                                errorAlert.classList.add('d-none');
                            }, 5000);
                        }

                        if (Object.keys(response).indexOf('success') !== -1) {
                            console.log(response);
                            console.log(response["photo"]);
                            document.getElementById("edit_preview_photo_sr").src = response["photo"];

                            $("#servicerubroTitle_"+response["identity"]).html(response["title"]);
                            $("#servicerubroText_"+response["identity"]).html(response["text"]);

                            $("#servicerubro_edit_"+response["identity"]).attr('data-tool',response["identity"])
                            $("#servicerubro_edit_"+response["identity"]).attr('data-title',response["title"])
                            $("#servicerubro_edit_"+response["identity"]).attr("data-text",response["text"])

                            const successAlert = document.getElementById('successAlert');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                successAlert.classList.add('d-none');
                            }, 500);

                            $('#EditServiceRubroModal').modal('hide');
                            document.getElementById("servicerubroImg_"+response["identity"]).src = response["photo"];
                        }
                    },
                    error: function error(result) {
                        //console.log(result);
                    },
                    complete: function complete() {
                        //loadingButton.button('reset');
                    }
                });
            });
        });
    </script>
@endpush
