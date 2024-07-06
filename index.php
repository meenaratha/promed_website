<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promed Appointment Form</title>
    <link rel="stylesheet" href="promedstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <section>
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form action="" method="post" id="promedform">
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input"  />
                        <div class="error" id="name-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input"  />
                        <div class="error" id="email-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label">Phone Number</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input"  />
                        <div class="error" id="phone-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="specialties" class="formbold-form-label">Choose a Speciality</label>
                        <select id="specialties" class="formbold-form-input specialties" name="specialties" >
                            <option value="">Select Speciality</option>
                            <option value="Anaesthesia">Anaesthesia</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Critical Care">Critical Care</option>
                            <!-- Add other options -->
                        </select>
                        <div class="error" id="specialties-error"></div>
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5 w-full">
                                <label for="appointmentdate" class="formbold-form-label">Appointment Date</label>
                                <input type="date" name="appointmentdate" id="appointmentdate" class="formbold-form-input"  />
                                <div class="error" id="appointmentdate-error"></div>
                            </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                                <label for="appointmenttime" class="formbold-form-label">Appointment Time</label>
                                <input type="time" name="appointmenttime" id="appointmenttime" class="formbold-form-input"  />
                                <div class="error" id="appointmenttime-error"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="formbold-btn" id="btnSubmit" type="submit" name="submit">Book Appointment</button>
                        <div id="msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="promedscript.js"></script>
</body>
</html>
