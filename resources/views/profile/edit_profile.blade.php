<div id="EditProfileModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>

            <div class="alert alert-primary d-none" role="alert">
                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-secondary d-none" role="alert">
                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div id="successAlert" class="alert alert-success d-none" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div id="errorAlert" class="alert alert-danger d-none" role="alert">
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

            <form method="POST" id="editProfileForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editProfileValidationErrorsBox"></div>
                    <input type="hidden" name="user_id" id="pfUserId">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Name:</label><span class="required">*</span>
                            <input type="text" name="name" id="pfName" class="form-control" required autofocus tabindex="1">
                        </div>
                        <div class="form-group col-sm-6 d-flex">
                            <div class="col-sm-4 col-md-6 pl-0 form-group">
                                <label>Profile Image:</label>
                                <br>
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> Choose
                                    <input type="file" name="photo" id="pfImage" class="d-none" >
                                </label>
                            </div>
                            <div class="col-sm-3 preview-image-video-container float-right mt-1">
                                <img id='edit_preview_photo_pf' class="img-thumbnail user-img user-profile-img profilePicture"
                                     src="{{ $user->profile_picture_url }}" alt="{{ $user->name }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Email:</label><span class="required">*</span>
                            <input type="text" name="email" id="pfEmail" class="form-control" required tabindex="3">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnPrEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Save</button>
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

            //$.ajaxSetup({
              //  headers: {
                    //'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                //},
            //});

            $(document).on('submit', '#editProfileForm', function (event) {
                event.preventDefault();
                console.log("profile")

                var formData = new FormData()
                const fileField = document.getElementById('pfImage');
                formData.append('name', document.querySelector('#pfName').value);
                if (fileField.files[0]) {
                    formData.append('photo', fileField.files[0]);
                }
                formData.append('email', document.querySelector('#pfEmail').value);


                let userId = $('#editProfileUserId').val();
                var loadingButton = jQuery(this).find('#btnPrEditSave');
                loadingButton.button('loading');
                $.ajax({
                    url: "{{ route('usuarios.storePerfil') }}",
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        //'Accept': 'application/json',
                        //'Content-Type': 'application/json'
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: async function success(response) {

                        console.log(response);

                        if (Object.keys(response).indexOf('errors') !== -1) {
                            console.log(" existe erroes");
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
                            console.log(" existe success");
                            console.log(response);
                            console.log(response["avatar"]);
                            document.getElementById("edit_preview_photo_pf").src = response["avatar"];

                            var successAlert = document.getElementById('successAlert');
                            successAlert.innerHTML = response["success"]
                            successAlert.classList.remove('d-none');
                            setTimeout(function () {
                                // Remove the alert element from the DOM
                                successAlert.classList.add('d-none');
                            }, 5000);
                        }


                        //${event.timeStamp}


                        //if (result.success) {
                        //$('#EditProfileModal').modal('hide');
                        /*setTimeout(function () {
                            location.reload();
                        }, 1500);*/
                        //}
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
    <script type="text/javascript">


        const form = document.getElementById("editProfileForm123");
        const log = document.getElementById("log");
        form.addEventListener("submit", logSubmit);

        function logSubmit(event) {
            log.textContent = `Form Submitted! Timestamp: ${event.timeStamp}`;
            event.preventDefault();


            //var input = document.querySelector('input[type="file"]')
            var formData = new FormData()
            //const fileField = document.querySelector('input[type="file"]');
            const fileField = document.getElementById('pfImage');

            formData.append('name', document.querySelector('#pfName').value);

            if (fileField.files[0]) {
                formData.append('photo', fileField.files[0]);
            }


            /*multiple file*/
            /*for (const file of fileField.files) {
                data.append('files',file,file.name)
            }*/
            /**/

            formData.append('email', document.querySelector('#pfEmail').value);

            var fetch_status;
            //envio fetch
            fetch("{{ route('usuarios.storePerfil') }}", {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    //'Accept': 'application/json',
                    //'Content-Type': 'application/json'
                },
                method: "POST",
                body: formData
            })
            .then(r => r.json())
            .then(async response => {
                console.log(response);

                if(Object.keys(response).indexOf('errors')!== -1)
                {
                    console.log(" existe erroes");
                    var errorAlert = document.querySelector('#errorAlert');

                    var html_text='<ul>';

                    for await (const $error of response["errors"])
                    {
                        html_text+='<li>'+$error+'</li>';
                        break;
                    }
                    html_text+='</ul>';

                    errorAlert.innerHTML =html_text;

                    errorAlert.classList.remove('d-none');

                    setTimeout(function() {
                        // Remove the alert element from the DOM
                        errorAlert.classList.add('d-none');
                    }, 5000);
                }

                if(Object.keys(response).indexOf('success')!== -1)
                {
                    console.log(" existe success");
                    console.log(response);
                    console.log(response["avatar"]);
                    document.getElementById("edit_preview_photo_pf").src = response["avatar"];



                    var successAlert = document.getElementById('successAlert');
                    successAlert.innerHTML=response["success"]
                    successAlert.classList.remove('d-none');
                    setTimeout(function() {
                        // Remove the alert element from the DOM
                        successAlert.classList.add('d-none');
                    }, 5000);
                }

            })
            .catch(function (error){
                // Catch errors
                console.log(error);
            });

        }

/*
* var tooltipElement = document.getElementById('tooltip');
var tooltip = new bootstrap.Tooltip(tooltipElement);
*
* var collapsableCard = new bootstrap.Collapse(card, {toggle: false});
*
* toggleButton.addEventListener('click', function () {
    // do something when the button is being clicked
});
* */

    </script>
@endpush
