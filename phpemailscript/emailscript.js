function save_data() {
    var form_element = document.getElementsByClassName('formbold-form-input');
    var form_data = new FormData();

    for (var count = 0; count < form_element.length; count++) {
        form_data.append(form_element[count].name, form_element[count].value);
    }

    document.getElementById('btnSubmit').disabled = true;

    var ajax_request = new XMLHttpRequest();
    ajax_request.open('POST', './smtp.php');
    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
            document.getElementById('btnSubmit').disabled = false;
            document.getElementById('emailform').reset();
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: ajax_request.responseText,
            });

            setTimeout(function () {
                Swal.close();
            }, 2000);
        } else if (ajax_request.readyState == 4) {
            document.getElementById('btnSubmit').disabled = false;
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred while saving the data.',
            });
        }
    }
}