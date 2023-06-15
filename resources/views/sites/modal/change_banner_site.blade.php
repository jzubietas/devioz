<div id="EditSiteBannerModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">Actualizar datos de banner</h5>

                <button type="button" aria-label="Close" class="close btn btn-md btn-icon btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i></button>
            </div>
            <form method="POST" id="editSiteBannerForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editSiteBannerValidationErrorsBox"></div>
                    <input type="hidden" name="user_id" id="sbUserId">
                    <input type="hidden" name="rubro" id="sbRubro">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6 d-flex">
                            <div class="col-sm-4 col-md-6 pl-0 form-group">
                                <label>Banner Image: <span class="text-danger">(1484 x 530 pixeles)</span></label>
                                <br>
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> Seleccione
                                    <input type="file" name="photo" id="sbImage" class="d-none" >
                                </label>
                            </div>
                            <div class="col-sm-3 preview-image-video-container float-right mt-1">
                                <img id='edit_preview_photo_sb' class="img-thumbnail user-img user-profile-img profilePicture"
                                     src="{{asset('img/logo/logo-cc.png')}}"/>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnSbEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Actualizar</button>
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

            const myBannerSiteApplication = (document.getElementById('EditSiteBannerModal'));

            myBannerSiteApplication.addEventListener('hidden.bs.modal', function (event) {
              $("#sbRubro").val('');
            })

            myBannerSiteApplication.addEventListener('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var sitebanner = button.data('rubro');
                $('#sbRubro').val(sitebanner)
            })

            $(document).on('change', '#sbImage', function () {
                let ext = $(this).val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    $(this).val('');
                    $('#editSiteBannerValidationErrorsBox').
                    html(
                        'The profile image must be a file of type: jpeg, jpg, png.').
                    show();
                } else {
                    displayPhoto(this, '#edit_preview_photo_sb');
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

            $(document).on('submit', '#editSiteBannerForm', function (event) {
                event.preventDefault();

                const formData = new FormData();
                const rubro = document.getElementById('sbRubro');
                formData.append('keySitePhoto', 'SitePhoto');
                formData.append('keySiteRubro', rubro);
                const fileField = document.getElementById('sbImage');                
                if (fileField.files[0]) {
                    formData.append('photo', fileField.files[0]);
                }               
                const loadingButton = jQuery(this).find('#btnSbEditSave');
                loadingButton.button('loading');
                $.ajax({
                    url: "{{ route('site.changeBanner') }}",
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
                            var errorAlert = document.querySelector('#errorAlert');

                            var html_text = '<ul>';

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
                            document.getElementById("edit_preview_photo_sb").src = response["photo"];

                            const successAlert = document.getElementById('successAlert');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                successAlert.classList.add('d-none');
                            }, 5000);

                            $('#EditSiteBannerModal').modal('hide');
                            //cambiar el banner con la imagen
                            document.getElementByClassName("site_banner_img").src = response["photo"];
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
