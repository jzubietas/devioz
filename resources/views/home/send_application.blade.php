<div id="SendApplicationModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-center">Formulario de solicitud</h5>
                <button type="button" aria-label="Close" class="close outline-none rounded-circle" data-dismiss="modal">×</button>
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

            <form method="POST" id="sendApplicationForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editThoughtValidationErrorsBox"></div>
                    <input type="hidden" name="application_id" id="IdSendApplication">
                    <input type="hidden" name="is_active" value="1">
                    <input type="hidden" name="what_service" value="" id="what_service">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="sendName">Nombre:</label><span class="required">*</span>
                            <input type="text" name="sendName" id="sendName" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="sendEmail">Correo:</label><span class="required">*</span>
                            <input type="text" name="sendEmail" id="sendEmail" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="sendPhone">Celular:</label><span class="required">*</span>
                            <input type="text" name="sendPhone" id="sendPhone" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnsendApplicationSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Enviar</button>
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

            const mySendApplication = (document.getElementById('SendApplicationModal'));

            mySendApplication.addEventListener('hidden.bs.modal', function (event) {
			  $("#sendName").val('');
			  $("#sendEmail").val('');
              $("#sendPhone").val('');
              $("#what_service").val('');
			})

            mySendApplication.addEventListener('show.bs.modal', function (event) {
	            var button = $(event.relatedTarget)
	            var sendapplication = button.data('service');
	            $('#what_service').val(sendapplication)
	            $('#sendName').val('')
                $('#sendEmail').val('')
	            $('#sendPhone').val('')
			})

            $(document).on('submit', '#sendApplicationForm', function (event) {
                event.preventDefault();

                var formData = new FormData()

                let userId = $('#editProfileUserId').val();
                var loadingButton = jQuery(this).find('#btnsendApplicationSave');
                loadingButton.button('loading');

                formData.append('service',$('#what_service').val());
                formData.append('name', $("#sendName").val());
                formData.append('email', $("#sendEmail").val());
                formData.append('phone', $("#sendPhone").val());

                $.ajax({
                    url: "{{ route('send-mail') }}",
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
                            console.log(response["mail"]);
                            var successAlert = document.getElementById('successAlertNosotros');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                // Remove the alert element from the DOM
                                successAlert.classList.add('d-none');
                                $('#SendApplicationModal').modal('hide');
                            }, 5000);
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
