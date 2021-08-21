<!DOCTYPE htms>
<htms lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login/Signup</title>

		<?php

		$this->load->view('website/link_import');
		?>


		<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-signup.css">
		<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-signup-form.css">
		<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-nav-footer.css">

		<script>
			function get_branches(e) {
				if (e.value === "B.Tech") {
					$('#branch').empty();
					$('#branch').html('<option value="Computer Science & Engineering">Computer Science & Engineering</option><option value="Computer Science & Technology">Computer Science & Technology</option><option value="Computer Science & IT">Computer Science & IT</option><option value="Computer Science Engineering & Artificial Intelligence">Computer Science Engineering & Artificial Intelligence</option><option value="Computer Science Engineering & Data Science">Computer Science Engineering & Data Science</option><option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option><option value="Electrical Engineering">Electrical Engineering</option><option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option><option value="Mechanical Engineering">Mechanical Engineering</option><option value="Civil Engineering">Civil Engineering</option>');
					$('#branch').prop('disabled', false);
				} else if (e.value === "M.Tech") {
					$('#branch').html('<option value="Electrical Engineering (Power System)">Electrical Engineering (Power System)</option><option value="Computer Sc Engg/Tech/IT">Computer Sc Engg/Tech/IT</option><option value="Mechanical Engineering (Thermal)">Mechanical Engineering (Thermal)</option><option value="Mechanical Engineering (Production Engineering)">Mechanical Engineering (Production Engineering)</option>');
					$('#branch').prop('disabled', false);
				} else if (e.value === "MBA") {
					$('#branch').html('<option value="MBA">MBA</option>');
					$('#branch').prop('disabled', 'disabled');
				} else if (e.value === "MCA") {
					$('#branch').html('<option value="MCA">MCA</option>');
					$('#branch').prop('disabled', 'disabled');
				}
			}
		</script>


	</head>

	<body>

		<!-- navbar -->
		<?php

		$this->load->view('website/nav_bar');
		?>
		<!-- Navbar End -->

		<div class="container-custom">
			<div class="content color-light">
				<div class="page-wrap">

					<!-- page-1 -->
					<div class="page" id="page-0">
						<div class="page-title d-flex flex-column flex-md-row align-items-center align-items-md-start">
							<img src="<?= base_url(); ?>assets/images/personal-information.svg" class="me-5" width="64px" alt="personal-information-icon">
							<span class="d-flex flex-column align-items-center">
								<h1>&nbspPersonal Information</h1>
								<h6 class="fw-light text-center">&nbsp; Fill the following personal information & click on Next.</h6>
							</span>
						</div>
						<div class="page-content">
							<form action="">

								<!-- name-field -->
								<div class="mt-3 mt-md-5">
									<h4>Name*</h4>
									<div class="row">
										<div class="input-wrap col-12 col-md-4">
											<input class="input-field" type="text" name="First_Name" placeholder="First Name" id="first_name">
										</div>
										<div class="input-wrap col-12 col-md-4 mt-2 mt-md-0">
											<input class="input-field col-12 col-md-2" type="text" name="Middle_Name" placeholder="Middle Name" id="middle_name">
										</div>
										<div class="input-wrap col-12 col-md-4 mt-2 mt-md-0">
											<input class="input-field col-12 col-md-2" type="text" name="Last_Name" placeholder="Last Name" id="last_name">
										</div>
									</div>
								</div>

								<!-- dob & gender-field -->

								<div class="row mt-4">
									<div class="input-wrap col-12 col-md-4">
										<h4>Date of Birth*</h4>
										<input class="input-field" type="date" name="First_Name" placeholder="First Name" id="dob">
									</div>

									<div class="input-wrap col-12 col-md-4 mt-4">
										<h4>Gender*</h4>
										<div class="input-field d-flex">
											<select class="select-custom" name="" id="gender">
												<option value="">Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="Others">Others</option>
											</select>
										</div>
									</div>
								</div>

								<!-- <div class="row mt-4">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Date of Birth</h4>
                                    <input class="input-field" type="date" name="First_Name" placeholder="Date of Birth" id="dob">
                                </div>
    
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Gender</h4>
                                    <div class="input-field d-flex">
                                        <select class="select-custom" name="" id="gender">
                                            <option value="">Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                            <option value="o">Others</option>
                                        </select>
                                    </div>   
                                </div>
                            </div> -->

								<!-- photo-field -->
								<div class="input-wrap mt-4">
									<h4>Photo</h4>
									<input type="file" class="image-upload">
								</div>
							</form>
						</div>
						<div class="nav-bar">
							<button class="right" id="next1" style="color: black;background-color: #6ab7b5;font-family: 'Inter', sans-serif;font-weight: 510;border: 5px solid #6ab7b5;width: 100;height: 45;cursor: pointer;border-radius: 7px;transition: 1.5s;box-shadow:0 5px 50px #f5ebeb00 inset;margin-bottom:15px;position:relative; top: 15px;">Next</button>
						</div>
					</div>

					<!-- page 2 -->
					<div class="page page1" id="page-1">
						<!-- <div class="page-title d-flex flex-row align-items-start"> -->
						<div class="page-title d-flex flex-column flex-md-row align-items-center align-items-md-start">
							<img src="<?= base_url(); ?>assets/images/personal-information.svg" class="me-5" width="64px" alt="personal-information-icon">
							<span class="">
								<h1>&nbspPersonal Information</h1>
								<h6 class="fw-light">&nbsp; Fill the following personal information & click on Next.</h6>
							</span>
						</div>
						<div class="page-content">
							<form action="">
								<!-- registration roll room -->
								<div class="row mt-5">
									<div class="input-wrap mt-4 col-12 col-md-6">
										<h4>Registration No.*</h4>
										<input class="input-field" type="number" name="reg_no" placeholder="University Registration No." id="reg_no">
									</div>
									<div class="input-wrap mt-4 col-12 col-md-6">
										<h4>Roll No.*</h4>
										<input class="input-field" type="number" name="roll_no" placeholder="College Roll No." id="roll_no">
									</div>
								</div>
								<!-- dob & gender-field -->
								<div class="row mt-4 ">
									<div class="input-wrap col-12 col-md-6">
										<h4>University*</h4>
										<input class="input-field" type="text" name="uni_name" placeholder="Name of University" id="university">
									</div>
									<div class="input-wrap mt-4 col-12 col-md-6">
										<h4>College*</h4>
										<input class="input-field" type="text" name="college_name" placeholder="Name of College" id="college">
									</div>
								</div>
								<!-- branch course -->
								<div class="row mt-4">
									<div class="input-wrap col-12 col-md-6">
										<h4>Course*</h4>
										<div class="input-field d-flex">
											<select class="select-custom" name="" id="course" onchange="get_branches(this)">
												<option value="B.Tech">B.Tech</option>
												<option value="M.Tech">M.Tech</option>
												<option value="MBA">MBA</option>
												<option value="MCA">MCA</option>
											</select>
										</div>
									</div>
									<div class="input-wrap mt-4 col-12 col-md-6">
										<h4>Branch*</h4>
										<div class="input-field d-flex">
											<select class="select-custom" name="" id="branch">
												<option value="Computer Science & Engineering">Computer Science & Engineering</option>
												<option value="Computer Science & Technology">Computer Science & Technology</option>
												<option value="Computer Science & IT">Computer Science & IT</option>
												<option value="Computer Science Engineering & Artificial Intelligence">Computer Science Engineering & Artificial Intelligence</option>
												<option value="Computer Science Engineering & Data Science">Computer Science Engineering & Data Science</option>
												<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
												<option value="Electrical Engineering">Electrical Engineering</option>
												<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
												<option value="Mechanical Engineering">Mechanical Engineering</option>
												<option value="Civil Engineering">Civil Engineering</option>
											</select>
										</div>
									</div>
								</div>
								<!-- hostel room -->
								<div class="row mt-4">
									<div class="input-wrap col-12 col-md-6">
										<h4>Hostel No.</h4>
										<!-- <input class="input-field" type="number" name="hostel_no" placeholder="Hostel No." id="hostel_no"> -->
										<div class="input-field d-flex">
											<select class="select-custom" name="hostel_no" id="hostel_no">
												<optgroup label="Girls">
													<option value="GH 1">GH 1</option>
													<option value="GH 2">GH 2</option>
													<option value="GH 3">GH 3</option>
													<option value="GH 4">GH 4</option>
													<option value="GH 5">GH 5</option>
												</optgroup>
												<optgroup label="Boys">
													<option value="BH 1">BH 1</option>
													<option value="BH 2">BH 2</option>
													<option value="BH 3">BH 3</option>
													<option value="BH 4">BH 4</option>
													<option value="BH 5">BH 5</option>
													<option value="BH 6">BH 6</option>
													<option value="BH 7">BH 7</option>
													<option value="BH 8">BH 8</option>
													<option value="BH 9">BH 9</option>
													<option value="BH 10">BH 10</option>
													<option value="BH 11">BH 11</option>
													<option value="BH 12">BH 12</option>
													<option value="BH 13">BH 13</option>
													<option value="BH 14">BH 14</option>
													<option value="BH 15">BH 15</option>
													<option value="BH 16">BH 16</option>
													<option value="BH 17">BH 17</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="input-wrap mt-4 col-12 col-md-6">
										<h4>Room No.</h4>
										<input class="input-field" type="number" name="room_no" placeholder="Room No." id="room_no">
									</div>
								</div>
							</form>
						</div>
						<div class="nav-bar">
							<div class="left" id="prev2" onclick="prev_page()" style="color: black;background-color: #6ab7b5;font-family: 'Inter', sans-serif;font-weight: 510;position: relative; top:20px; border: 5px solid #6ab7b5;width: 130;height: 45;cursor: pointer;border-radius: 7px;transition: 1.5s;box-shadow:0 5px 50px #f5ebeb00 inset;margin-bottom:15px; text-align: center;padding: 5px">Previous</div>
							<div class="right" id="next2" style="color: black;background-color: #6ab7b5;font-family: 'Inter', sans-serif;font-weight: 510;border: 5px solid #6ab7b5;width: 100;height: 45;cursor: pointer;border-radius: 7px;transition: 1.5s;box-shadow:0 5px 50px #f5ebeb00 inset;margin-bottom:15px; text-align: center; position: relative; top: 22px;padding: 5px;">Next</div>
						</div>
					</div>

					<!-- page-3 -->
					<div class="page" id="page-2">
						<div class="page-title d-flex flex-column flex-md-row align-items-center align-items-md-start">
							<!-- <div class="page-title d-flex flex-row  align-items-start"> -->
							<img src="<?= base_url(); ?>assets/images/personal-information.svg" class="me-5" width="64px" alt="personal-information-icon">
							<span class="">
								<h1>&nbsp;Personal Information</h1>
								<h6 class="fw-light">&nbspFill the following personal information & click on Sumbit.</h6>
							</span>
						</div>
						<div class="page-content">
							<form action="">
								<!-- registration roll room -->
								<div class="row mt-5">
									<div class="input-wrap col-12 col-md-6">
										<h4>Phone No.</h4>
										<input class="input-field" type="number" name="phone_no" placeholder="Phone No." id="phone_no">
									</div>
									<div class="input-wrap col-12 col-md-6">
										<h4>Alternate Phone No.</h4>
										<input class="input-field" type="number" name="alt_phone_no" placeholder="Alternate Phone No." id="alt_phone_no">
									</div>
								</div>
								<!-- dob & gender-field -->

								<div class="row mt-4">
									<div class="address-input">
										<div class="input-wrap col-12 col-md-6">
											<h4>Address</h4>

											<input class="input-field input-field-address" type="text" name="address_line_1" placeholder="Street/Locality" id="add1">
										</div>
									</div>
									<div class="row mt-4">
										<div class="input-wrap col-12 col-md-6">
											<input class="input-field" type="text" name="city" placeholder="City" id="city">
										</div>
										<div class="input-wrap col-12 mt-2 col-md-6">
											<!-- <input class="input-field" type="text" name="state" placeholder="State" id="state"> -->
											<div class="input-field d-flex">
												<select class="select-custom" name="state" placeholder="State" id="state">
													<option value="Andhra Pradesh">Andhra Pradesh</option>
													<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
													<option value="Arunachal Pradesh">Arunachal Pradesh</option>
													<option value="Assam">Assam</option>
													<option value="Bihar">Bihar</option>
													<option value="Chandigarh">Chandigarh</option>
													<option value="Chhattisgarh">Chhattisgarh</option>
													<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
													<option value="Daman and Diu">Daman and Diu</option>
													<option value="Delhi">Delhi</option>
													<option value="Lakshadweep">Lakshadweep</option>
													<option value="Puducherry">Puducherry</option>
													<option value="Goa">Goa</option>
													<option value="Gujarat">Gujarat</option>
													<option value="Haryana">Haryana</option>
													<option value="Himachal Pradesh">Himachal Pradesh</option>
													<option value="Jammu and Kashmir">Jammu and Kashmir</option>
													<option value="Jharkhand">Jharkhand</option>
													<option value="Karnataka">Karnataka</option>
													<option value="Kerala">Kerala</option>
													<option value="Madhya Pradesh">Madhya Pradesh</option>
													<option value="Maharashtra">Maharashtra</option>
													<option value="Manipur">Manipur</option>
													<option value="Meghalaya">Meghalaya</option>
													<option value="Mizoram">Mizoram</option>
													<option value="Nagaland">Nagaland</option>
													<option value="Odisha">Odisha</option>
													<option value="Punjab">Punjab</option>
													<option value="Rajasthan">Rajasthan</option>
													<option value="Sikkim">Sikkim</option>
													<option value="Tamil Nadu">Tamil Nadu</option>
													<option value="Telangana">Telangana</option>
													<option value="Tripura">Tripura</option>
													<option value="Uttar Pradesh">Uttar Pradesh</option>
													<option value="Uttarakhand">Uttarakhand</option>
													<option value="West Bengal">West Bengal</option>
												</select>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>
						<div class="nav-bar">
							<div class="left" id="prev3" onclick="prev_page() " style="color: black;background-color: #6ab7b5;font-family: 'Inter', sans-serif;font-weight: 510;position: relative; top:20px; border: 5px solid #6ab7b5;width: 130;height: 45;cursor: pointer;border-radius: 7px;transition: 1.5s;box-shadow:0 5px 50px #f5ebeb00 inset;margin-bottom:15px; text-align: center;padding: 5px">Previous</div>
							<!-- <div class="right"> -->
							<button id="final_submit" style="color: black;background-color: #6ab7b5;font-family: 'Inter', sans-serif;font-weight: 510;position: relative; right: 5px; top:23px; border: 5px solid #6ab7b5;width: 100;height: 45;cursor: pointer;border-radius: 7px;transition: 1.5s;box-shadow:0 5px 50px #f5ebeb00 inset;margin-bottom:15px; text-align: center;float: right;">Submit</button></i>
						</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="<?= base_url(); ?>assets/js/script-slider-form.js"></script>


		<script type="text/javascript">
			var key = "<?php echo $this->security->get_csrf_hash(); ?>";
			alert("<?= $opt_session_id; ?>");
			//page 1 script
			var first_name;
			var middle_name;
			var last_name;
			var dob;
			var gender;

			function page1_data() {
				first_name = $("#first_name").val();
				middle_name = $("#middle_name").val();
				last_name = $("#last_name").val();
				// var dob_ob=new Date($("#dob").val());
				// dob_d=dob_ob.getDate();
				// dob_m=dob_ob.getMonth()+1;
				// dob_y=dob_ob.getFullYear();
				// dob=[dob_d,dob_m,dob_y].join('/');

				dob = $("#dob").val();

				gender = $("#gender").val();

			}

			$("#next1").click(function() {
				// next_page();
				if (check_page1_data()) {
					next_page()
				} else {
					alert("Fill all required fields");
				}
				// console.log("name: "+first_name+" "+middle_name+" "+last_name+" | dob: "+dob+" | gender: "+gender);
			});

			function check_page1_data() {
				page1_data();
				if (first_name == "" || dob == "" || gender == "") {
					// $("#next1").attr('disabled', '');
					return false;
				} else {
					// $("#next1").removeAttr('disabled');
					return true;
				}
			}

			//page 2

			var reg_no;
			var roll_no;
			var university;
			var college;
			var course;
			var branch;
			var hostel_no;
			var room_no;

			function page2_data() {
				reg_no = $("#reg_no").val();
				roll_no = $("#roll_no").val();
				university = $("#university").val();
				college = $("#college").val();
				course = $("#course").val();
				branch = $("#branch").val();
				hostel_no = $("#hostel_no").val();
				room_no = $("#room_no").val();

				console.log(reg_no + "," + roll_no + "," + university + "," + college + "," + course + "," + branch + "," + hostel_no + "," + room_no);

			}

			function check_page2_data() {
				page2_data();
				if (reg_no == "" || roll_no == "" | university == "" || college == "" || course == "" || branch == "") {
					return false;
				} else {
					return true;
				}
			}

			$("#next2").click(function() {
				if (check_page2_data()) {
					next_page();
				} else {
					alert("fill all required Fields");
				}
			});

			//page 3

			var phone_no;
			var alt_phone_no;
			var add1;
			var city;
			var state;

			function page3_data() {
				phone_no = $("#phone_no").val();
				alt_phone_no = $("#alt_phone_no").val();
				add1 = $("#add1").val();
				city = $("#city").val();
				state = $("#state").val();
			}

			$("#final_submit").click(function() {
				page3_data();
				$.ajax({
					type: "post",
					url: "<?= base_url('main_helper/submit_addon_data'); ?>",
					dataType: "json",
					async: false,
					data: {
						"<?php echo $this->security->get_csrf_token_name(); ?>": key,
						user_id: <?= $opt_session_id; ?>,
						first_name: first_name,
						middle_name: middle_name,
						last_name: last_name,
						dob: dob,
						gender: gender,
						reg_no: reg_no,
						roll_no: roll_no,
						university: university,
						college: college,
						branch: branch,
						course: course,
						hostel_no: hostel_no,
						room_no: room_no,
						phone_no: phone_no,
						alt_phone_no: alt_phone_no,
						add1: add1,
						city: city,
						state: state
					},
					success: function(data) {
						console.log(data);
						key = data.key;
						if (data.data) {
							window.location.href = "<?= base_url('main/search') ?>";
						}

					},
					error: function(data) {
						console.log(data);
						key = "<?php echo $this->security->get_csrf_hash(); ?>";
					}

				});
			});
		</script>

	</body>

	</html>
