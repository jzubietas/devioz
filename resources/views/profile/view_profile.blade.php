@push('css')
    <style>
        .cards
        {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
            grid-gap: 20px;
        }

    </style>
@endpush

<div id="ViewProfileModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-teal-700">
                <h5 class="modal-title">Perfil</h5>
                <button type="button" aria-label="Close" class="close btn btn-md btn-icon btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i></button>
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

            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#general-tab-viewprofile" data-bs-toggle="tab" class="nav-link active bg-gray-900 text-white">General</a>
                    </li>
                    <li class="nav-item">
                        <a href="#infolaboral-tab-viewprofile" data-bs-toggle="tab" class="nav-link bg-gray-900 text-white">Informacion Laboral</a>
                    </li>
                </ul>
                <div class="tab-content panel p-3 rounded-0 rounded-bottom">
                    <div class="tab-pane fade active show" id="general-tab-viewprofile">

                        <div class ="cards">

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-teal-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-gray-800 text-white">...</div>
                            </div>

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-blue-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-orange text-white">...</div>
                            </div>

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-blue-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-orange text-white">...</div>
                            </div>

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-blue-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-orange text-white">...</div>
                            </div>

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-blue-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-orange text-white">...</div>
                            </div>

                            <div class="panel panel-inverse">
                                <div class="panel-heading bg-blue-700 text-white">
                                    <h4 class="panel-title">
                                        Panel Header with Badge
                                        <span class="badge bg-success ms-1">NEW</span>
                                    </h4>
                                </div>
                                <div class="panel-body bg-orange text-white">...</div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade " id="infolaboral-tab-viewprofile">
                        Info Laboral
                    </div>
                </div>

            </div>
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

@endpush
