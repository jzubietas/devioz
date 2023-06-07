<div id="EditNosotrosModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Nosotros</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>

            <div class="alert alert-primary d-none" role="alert">
                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-secondary d-none" role="alert">
                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div id="successAlertNosotros" class="alert alert-success d-none" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div id="errorAlertNosotros" class="alert alert-danger d-none" role="alert">
                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-warning d-none" role="alert">
                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-info d-none" role="alert">
                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-light d-none" role="alert">
                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-dark d-none" role="alert">
                A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>

            <form method="POST" id="editNosotrosForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editNosotrosValidationErrorsBox"></div>
                    <input type="hidden" name="user_id" id="usUserId">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="usTitle">Titulo:</label><span class="required">*</span>
                            <input type="text" name="usTitle" id="usTitle" class="form-control" required autofocus tabindex="1" value="{{ $usTitle }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="usText">Texto:</label><span class="required">*</span>
                            <input type="text" name="usText" id="usText" class="form-control" required autofocus tabindex="1" value="{{ $usText }}">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnUsEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Save</button>
                        <button type="button" class="btn btn-light ml-1 edit-cancel-margin margin-left-5"
                                data-dismiss="modal">Cancel
                        </button>
                    </div>
                </div>
            </form>
            <p id="log"></p>
        </div>
    </div>
</div>

@push('js')

    <script>
        $( document ).ready(function() {
            console.log( "ready!" );

            $('#EditNosotrosModal').on('hidden.bs.modal', function (event) {
                $("#motivo").val('')
                $("#anulacion_password").val('')
                $("#attachments").val(null)
            })

            $('#EditNosotrosModal').on('show.bs.modal', function (event) {
//cuando abre el form de anular pedido
                var button = $(event.relatedTarget)
                //var idunico = button.data('cliente')
            })

            $(document).on('submit', '#editNosotrosForm', function (event) {
                event.preventDefault();
                console.log("Nosotros")

                var formData = new FormData()

                let userId = $('#editProfileUserId').val();
                var loadingButton = jQuery(this).find('#btnPrEditSave');
                loadingButton.button('loading');

                formData.append('keyUsTitle', 'usTitle');
                formData.append('valueUsTitle', $("#usTitle").val());
                formData.append('keyUsText', 'usText');
                formData.append('valueUsText', $("#usText").val());

                $.ajax({
                    url: "{{ route('settings.store-setting') }}",
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
                            //console.log(" existe erroes");
                            var errorAlert = document.querySelector('#errorAlertNosotros');

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
                            console.log(" existe success");
                            //console.log(response);
                            //console.log(response["value"]);
                            //document.getElementById("edit_preview_photo_pf").src = response["avatar"];
                            $("#txtusTitle").html(response["valueUsTitle"]);
                            $("#txtusText").html(response["valueUsText"]);

                            var successAlert = document.getElementById('successAlertNosotros');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                // Remove the alert element from the DOM
                                successAlert.classList.add('d-none');
                                $('#EditNosotrosModal').modal('hide');
                            }, 5000);

                            //$('#EditNosotrosModal').modal('hide');

                            //
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
