<?php include 'includes/header-link.php';
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: {$hostname}login.php");
}
?>

<div id="main-wrapper">


	<?php include 'includes/header2.php' ?>

	<!-- =============================== Dashboard Header ========================== -->
	<?php include 'includes/dash-top-header.php' ?>
	<!-- ======================= dashboard sidebar ======================== -->

	<div class="goodup-dashboard-wrap gray px-4 py-5">
		<?php include 'includes/dash-side-header.php' ?>

		<!-- ======dashboard wrapper======== -->

		<div class="goodup-dashboard-content">
			<div class="dashboard-tlbar d-block mb-5">
				<div class="row">
					<div class="colxl-12 col-lg-12 col-md-12">
						<h1 class="ft-medium">Add Listing</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
								<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#" class="theme-cl">Add Listing</a></li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<div class="dashboard-widg-bar d-block">
				<div class="row">
					<div class="col-xl-12 col-lg-2 col-md-12 col-sm-12">
						<div class="submit-form">

							<!-- Listing Info -->
							<div class="dashboard-list-wraps bg-white rounded mb-4">
								<div class="dashboard-list-wraps-head br-bottom py-3 px-3">
									<div class="dashboard-list-wraps-flx">
										<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file me-2 theme-cl fs-sm"></i>Listing Info</h4>
									</div>
								</div>

								<div class="dashboard-list-wraps-body py-3 px-3">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Company Name</label>
												<input type="text" class="form-control rounded" placeholder="enter your company name" name="company-name" />
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Company Tagline</label>
												<input type="text" class="form-control rounded" placeholder="Enter Your company tagline " name="company-tagline" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Your Name</label>
												<input type="text" class="form-control rounded" placeholder="Enter your name " name="your-name" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Your Designation</label>
												<input type="text" class="form-control rounded" placeholder="Enter your destignation my " />
											</div>
										</div>
									</div>
								</div>
							</div>


							<!-- Image & Gallery Option -->
							<div class="dashboard-list-wraps bg-white rounded mb-4">
								<div class="dashboard-list-wraps-head br-bottom py-3 px-3">
									<div class="dashboard-list-wraps-flx">
										<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-camera me-2 theme-cl fs-sm"></i>Image</h4>
									</div>
								</div>

								<div class="dashboard-list-wraps-body py-3 px-3">
									<div class="row">
										<!-- Logo -->
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="formFileLg" class="form-label">Upload Company Logo</label>
												<input class="form-control rounded" type="file" name="company_logo">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label for="formFileLg" class="form-label">Upload Company Banner</label>
												<input class="form-control rounded" type="file" name="company_banner">
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- Location Info -->
							<div class="dashboard-list-wraps bg-white rounded mb-4">
								<div class="dashboard-list-wraps-head br-bottom py-3 px-3">
									<div class="dashboard-list-wraps-flx">
										<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-map-marker-alt me-2 theme-cl fs-sm"></i>Location Info</h4>
									</div>
								</div>

								<div class="dashboard-list-wraps-body py-3 px-3">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">State</label>
												<select class="form-control" name="state">
													<option>Uttar Pradesh</option>
													<option>Uttrakhand</option>
													<option>Gujrat</option>
													<option>Mumbai</option>
													<option>Karnatak</option>
													<option>Goa</option>
													<option>Punjab</option>
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">City</label>
												<select class="form-control" name="city">
													<option>Aligarh</option>
													<option>Allahabad</option>
													<option>Agra</option>
													<option>Gonda</option>
													<option>Lucknow</option>
													<option>Meeruth</option>
													<option>Gaziabad</option>
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Address</label>
												<input type="text" class="form-control rounded" placeholder="Enter Your address here" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Pin Code</label>
												<input type="text" class="form-control rounded" placeholder="Pin code" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Mobile</label>
												<input type="text" class="form-control rounded" placeholder="91 256 584 7895" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Email</label>
												<input type="text" class="form-control rounded" placeholder="kumarsrikan@gmail.com" />
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1">Website</label>
												<input type="text" class="form-control rounded" placeholder="https://www.kuamrsrikant.com/" />
											</div>
										</div>
									</div>
								</div>
							</div>



							<!-- Social Links -->
							<div class="dashboard-list-wraps bg-white rounded mb-4">
								<div class="dashboard-list-wraps-head br-bottom py-3 px-3">
									<div class="dashboard-list-wraps-flx">
										<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user-friends me-2 theme-cl fs-sm"></i>Social Links</h4>
									</div>
								</div>

								<div class="dashboard-list-wraps-body py-3 px-3">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1"><i class="ti-facebook theme-cl me-1"></i>Facebook</label>
												<input type="text" class="form-control rounded" placeholder="https://facebook.com/" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1"><i class="ti-twitter theme-cl me-1"></i>Twitter</label>
												<input type="text" class="form-control rounded" placeholder="https://twitter.com/" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1"><i class="ti-instagram theme-cl me-1"></i>Instagram</label>
												<input type="text" class="form-control rounded" placeholder="https://instagram.com/" />
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="mb-1"><i class="ti-linkedin theme-cl me-1"></i>Linkedin</label>
												<input type="text" class="form-control rounded" placeholder="https://linkedin.com/" />
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<button class="btn theme-bg rounded text-light">Submit & Preview</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- footer -->


		</div>



	</div>


	<a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>



	<?php include 'includes/footer-bottom.php' ?>

</div>
<!-- All Jquery -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/counterup.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/jQuery.style.switcher.js"></script>
<script src="assets/js/custom.js"></script>

<!-- Date Booking Script -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
	Dropzone.options.singleLogo = {
		maxFiles: 1,
		accept: function(file, done) {
			console.log("uploaded");
			done();
		},
		init: function() {
			this.on("maxfilesexceeded", function(file) {
				alert("No more files please!");
			});
		}
	};
</script>
<script>
	Dropzone.options.featuredImage = {
		maxFiles: 1,
		accept: function(file, done) {
			console.log("uploaded");
			done();
		},
		init: function() {
			this.on("maxfilesexceeded", function(file) {
				alert("No more files please!");
			});
		}
	};
</script>
<script>
	Dropzone.options.gallery = {
		accept: function(file, done) {
			console.log("uploaded");
			done();
		},
		init: function() {
			this.on("maxfilesexceeded", function(file) {
				alert("No more files please!");
			});
		}
	};
</script>
<?php include 'includes/footer-link.php' ?>