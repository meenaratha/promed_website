const scriptURL = 'https://script.google.com/macros/s/AKfycbz0v5ZM9AQ6RLjNt9a7zILt1iUlZl2ZopXM9X5uRr7CuYCWGq9dekfl7yVO835QNTsm/exec';
const phpURL = 'mail.php';
const form = document.getElementById('promedform');

var btnSubmit = document.getElementById('btnSubmit');

form.addEventListener('submit', e => {
    e.preventDefault();

    // Validate form before submission
    if (validateForm()) {
        btnSubmit.innerHTML = "Processing...";
        // Disable submit button to prevent multiple submissions
        btnSubmit.disabled = true;

        fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.result === 'success') {
                // After successful submission to Google Sheets, send data to PHP backend
                sendDataToPHP(form);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred. Please try again. ' + data.error,
                });
                btnSubmit.innerHTML = "Book Appointment";
                btnSubmit.disabled = false;
            }
        })
        .catch(error => {
            console.error('Fetch Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred. Please try again.',
            });
            btnSubmit.innerHTML = "Book Appointment";
            btnSubmit.disabled = false;
        });
    }
});

function validateForm() {
    let isValid = true;

    // Reset previous error messages
    resetErrors();

    // Validation for name
    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('name-error');
    if (nameInput.value.trim() === '') {
        nameError.textContent = 'Please enter your name';
        isValid = false;
    }

    // Validation for email
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    if (emailInput.value.trim() === '') {
        emailError.textContent = 'Please enter your email';
        isValid = false;
    } else if (!isValidEmail(emailInput.value.trim())) {
        emailError.textContent = 'Please enter a valid email address';
        isValid = false;
    }

    // Validation for phone number
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');
    if (phoneInput.value.trim() === '') {
        phoneError.textContent = 'Please enter your phone number';
        isValid = false;
    } else if (!isValidPhone(phoneInput.value.trim())) {
        phoneError.textContent = 'Please enter a valid phone number';
        isValid = false;
    }

    // Validation for specialties
    const specialtiesInput = document.getElementById('specialties');
    const specialtiesError = document.getElementById('specialties-error');
    if (specialtiesInput.value === '') {
        specialtiesError.textContent = 'Please select a speciality';
        isValid = false;
    }

    // Validation for appointment date
    const appointmentDateInput = document.getElementById('appointmentdate');
    const appointmentDateError = document.getElementById('appointmentdate-error');
    if (appointmentDateInput.value.trim() === '') {
        appointmentDateError.textContent = 'Please select an appointment date';
        isValid = false;
    }

    // Validation for appointment time
    const appointmentTimeInput = document.getElementById('appointmenttime');
    const appointmentTimeError = document.getElementById('appointmenttime-error');
    if (appointmentTimeInput.value.trim() === '') {
        appointmentTimeError.textContent = 'Please select an appointment time';
        isValid = false;
    }

    return isValid;
}

function resetErrors() {
    const errorElements = document.querySelectorAll('.error');
    errorElements.forEach(error => {
        error.textContent = '';
    });
}

function isValidEmail(email) {
    // Basic email validation
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function isValidPhone(phone) {
    // Basic phone validation
    return /^\d{10}$/.test(phone);
}

function sendDataToPHP(form) {
    const formData = new FormData(form);
    fetch(phpURL, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        if (data.result === 'success') {
            btnSubmit.innerHTML = "Submitted";
            // Display success message and redirect
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Your appointment has been booked successfully!',
            }).then(() => {
                 // Reset form
                 form.reset();
                 btnSubmit.innerHTML = "Book Appointment";
                // Redirect to thank you page
                window.location.href = 'https://promedhospital.com/thank-you.php';
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred while sending data. Please try again. ' + data.error,
            });
            btnSubmit.innerHTML = "Book Appointment";
            btnSubmit.disabled = false;
        }
    })
    .catch(error => {
        console.error('Fetch Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred while sending data. Please try again.',
        });
        btnSubmit.innerHTML = "Book Appointment";
        btnSubmit.disabled = false;
    });
}