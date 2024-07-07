<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- custom style -->
<link rel="stylesheet" href="../../css/crudtable.css">
<link rel="stylesheet" href="../../css/promedstyle.css">

</head>
<body>
<div class="container-xl table-overflow">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
						<td>(171) 555-2222</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>Dominique Perrier</td>
						<td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
						<td>(313) 555-5735</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>Maria Anders</td>
						<td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
						<td>(503) 555-9931</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>Fran Wilson</td>
						<td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
						<td>(204) 619-5731</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>Martin Blank</td>
						<td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
						<td>(480) 631-2097</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addUserModal" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="" method="post" id="emailform">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form action="" method="post" id="emailform">
                    <div id="message"></div>
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
                            <option value="33">Anaesthesia</option>
                            <option value="34">Cardiology</option>
                            <option value="35">Critical Care</option>
                            <option value="36">Dermatology</option>
                            <option value="37">Diabetology</option>
                            <option value="38">ENT</option>
                            <option value="39">Gastroenterology</option>
                            <option value="40">General Medicine</option>
                            <option value="41">Gynecology</option>
                            <option value="42">Nephrology</option>
                            <option value="43">Neurology</option>
                            <option value="44">Oncology</option>
                            <option value="46">Orthopedics</option>
                            <option value="47">Pediatrics</option>
                            <option value="48">Plastic & General Surgery</option>
                            <option value="49">Psychiatry</option>
                            <option value="50">Psychology</option>
                            <option value="51">Pulmonology</option>
                            <option value="52">Sonology</option>
                            <option value="53">Urology</option>
                            <option value="54">Vascular Surgery</option>
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
                        <button class="formbold-btn" id="btnSubmit" type="submit" name="submit" onclick="save_data(); return false;">Book Appointment</button>
                        <div id="msg"></div>
                    </div>
                </form>
            </div>
        </div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="" method="post" id="emailform">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
                <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <form action="" method="post" id="emailform">
                    <div id="message"></div>
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label">Full Name</label>
                        <input type="text" name="editname" id="name" placeholder="Full Name" class="formbold-form-input"  />
                        <div class="error" id="name-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label">Email Address</label>
                        <input type="email" name="editemail" id="email" placeholder="Enter your email" class="formbold-form-input"  />
                        <div class="error" id="email-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label">Phone Number</label>
                        <input type="text" name="editphone" id="phone" placeholder="Enter your phone number" class="formbold-form-input"  />
                        <div class="error" id="phone-error"></div>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="specialties" class="formbold-form-label">Choose a Speciality</label>
                        <select id="specialties" class="formbold-form-input specialties" name="editspecialties" >
                        <option value="">Select Speciality</option>
                            <option value="33">Anaesthesia</option>
                            <option value="34">Cardiology</option>
                            <option value="35">Critical Care</option>
                            <option value="36">Dermatology</option>
                            <option value="37">Diabetology</option>
                            <option value="38">ENT</option>
                            <option value="39">Gastroenterology</option>
                            <option value="40">General Medicine</option>
                            <option value="41">Gynecology</option>
                            <option value="42">Nephrology</option>
                            <option value="43">Neurology</option>
                            <option value="44">Oncology</option>
                            <option value="46">Orthopedics</option>
                            <option value="47">Pediatrics</option>
                            <option value="48">Plastic & General Surgery</option>
                            <option value="49">Psychiatry</option>
                            <option value="50">Psychology</option>
                            <option value="51">Pulmonology</option>
                            <option value="52">Sonology</option>
                            <option value="53">Urology</option>
                            <option value="54">Vascular Surgery</option>
                        </select>
                        <div class="error" id="specialties-error"></div>
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5 w-full">
                                <label for="appointmentdate" class="formbold-form-label">Appointment Date</label>
                                <input type="date" name="editappointmentdate" id="appointmentdate" class="formbold-form-input"  />
                                <div class="error" id="appointmentdate-error"></div>
                            </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                                <label for="appointmenttime" class="formbold-form-label">Appointment Time</label>
                                <input type="time" name="editappointmenttime" id="appointmenttime" class="formbold-form-input"  />
                                <div class="error" id="appointmenttime-error"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="formbold-btn" id="editbtnSubmit" type="submit" name="submit" onclick="save_data(); return false;">Book Appointment</button>
                        <div id="msg"></div>
                    </div>
                </form>
            </div>
        </div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" id="deletebtn" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- custom tsble script -->
 <script src="../../js/tablescript.js"> </script>
</body>
</html>