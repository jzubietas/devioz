$(document).on('click', '.edit-profile', function (event) {
    $('#editProfileUserId').val(loggedInUser.id);
    $('#pfName').val(loggedInUser.name);
    $('#pfEmail').val(loggedInUser.email);
    $('#EditProfileModal').appendTo('body').modal('show');
});

$(document).on('change', '#pfImage', function () {
    let ext = $(this).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        $(this).val('');
        $('#editProfileValidationErrorsBox').
            html(
                'The profile image must be a file of type: jpeg, jpg, png.').
            show();
    } else {
        displayPhoto(this, '#edit_preview_photo');
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


$(document).on('submit', '#editProfileForm1', function (event) {
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
        data: formData,
        processData: false,
        contentType: false,
        success: async function success(result) {

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

/*$(document).on('submit', '#editProfileForm', function (event) {
    event.preventDefault();
    let userId = $('#editProfileUserId').val();
    var loadingButton = jQuery(this).find('#btnPrEditSave');
    loadingButton.button('loading');
    $.ajax({
        url: usersUrl + '/' + userId,
        type: 'post',
        data: new FormData($(this)[0]),
        processData: false,
        contentType: false,
        success: function success(result) {
            if (result.success) {
                $('#EditProfileModal').modal('hide');
                setTimeout(function () {
                    location.reload();
                }, 1500);
            }
        },
        error: function error(result) {
            console.log(result);
        },
        complete: function complete() {
            loadingButton.button('reset');
        }
    });
});*/
