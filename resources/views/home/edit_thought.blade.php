<div id="EditThoughtModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Pensamiento</h5>
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

            <form method="POST" id="editThoughtForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editThoughtValidationErrorsBox"></div>
                    <input type="hidden" name="thought_id" id="IdThought">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="tuDescription">Descripcion:</label><span class="required">*</span>
                            <input type="text" name="tuDescription" id="tuDescription" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="tuAuthor">Author:</label><span class="required">*</span>
                            <input type="text" name="tuAuthor" id="tuAuthor" class="form-control" required autofocus tabindex="1" value="">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btntuEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Actualizar</button>
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
            console.log( "listo modal pensamiento!" );

            var myModalThought = (document.getElementById('EditThoughtModal'));

            myModalThought.addEventListener('hidden.bs.modal', function (event) {
			  console.log("aaaaa")
			  $("#tuDescription").val('')
			  $("#tuAuthor").val('')
			})

			myModalThought.addEventListener('show.bs.modal', function (event) {				
				console.log("pensamiento id es")
	            var button = $(event.relatedTarget)
	            var thought = button.data('thought');
	            console.log("pensamiento id es :"+thought)
	            $('#IdThought').val(thought)
	            $('#tuDescription').val(button.data('description'))
	            $('#tuAuthor').val(button.data('author'))
			})

            //document.onreadystatechange = function () {
			  //myModalThought.show();
			//};


            $(document).on('submit', '#editThoughtForm', function (event) {
                event.preventDefault();
                console.log("Pensamiento")

                var formData = new FormData()

                let userId = $('#editProfileUserId').val();
                var loadingButton = jQuery(this).find('#btnTuEditSave');
                loadingButton.button('loading');

                formData.append('thought',$('#IdThought').val());

                formData.append('description', $("#tuDescription").val());
                formData.append('author', $("#tuAuthor").val());

                $.ajax({
                    url: "{{ route('thoughts.update') }}",
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
                            $("#tuDescription_"+response["identity"]).html(response["description"]);
                            $("#tuAuthor_"+response["identity"]).html(response["author"]);

                            $('#thought_edit_'+response["identity"]).attr('data-thought',response["identity"])
                            $('#thought_edit_'+response["identity"]).attr('data-description',response["description"])
                            $('#thought_edit_'+response["identity"]).attr('data-author',response["author"])

                            var successAlert = document.getElementById('successAlertNosotros');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                // Remove the alert element from the DOM
                                successAlert.classList.add('d-none');
                                $('#EditThoughtModal').modal('hide');
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
