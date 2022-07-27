<?php include 'includes/header-link.php';
include 'db_connect.php';
?>





<div id="main-wrapper">


	<!-- Start Navigation -->
	<?php include 'includes/header2.php' ?>
	<!-- End Navigation -->
	<section class="gray">
				<div class="container">
					<div class="row align-items-start justify-content-center">
						<div class="col-xl-6 col-lg-8 col-md-12">
							
							<div class="signup-screen-wrap">
								<div class="signup-screen-single light">
									<div class="text-center mb-4">
										<h4 class="m-0 ft-medium">Create An Account</h4>
									</div>
									
									<form class="submit-form">
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Your Name</label>
													<input type="text" class="form-control rounded" placeholder="Amit Kumar">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
												<label class="mb-1">Email ID</label>
												<input type="text" class="form-control rounded" placeholder="kumaramit@gmail.com">
											</div>
											</div>
										</div>
										<div class="form-group">
											<label class="mb-1">User Name</label>
											<input type="text" class="form-control rounded" placeholder="Username*">
										</div>
										
										<div class="form-group">
											<label class="mb-1">Password</label>
											<input type="password" class="form-control rounded" placeholder="Password*">
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-md full-width bg-sky text-light rounded ft-medium">Sign Up</button>
										</div>

										
										<div class="form-group text-center mt-4 mb-0">
											<p class="mb-0">Have You Already An account? <a href="login.php" class="ft-medium text-success">Sign In</a></p>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>

	<section class="space min">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="sec_title position-relative text-center mb-4">
						<h6 class="theme-cl mb-0">Latest Blogs</h6>
						<h2 class="ft-bold">Pickup New Updates</h2>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">

				<?php
				$blog_selt = "SELECT * FROM `blog`";
				$result = mysqli_query($conn, $blog_selt) or die("Query Failed");
				if (mysqli_num_rows($result) > 0) {
					while ($blog = mysqli_fetch_assoc($result)) {
				?>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="gup_blg_grid_box">
								<div class="gup_blg_grid_thumb">
									<a href=""><img src="uploads/blogs/<?php echo 'blog-min.jpg'; ?>" class="img-fluid" alt=""></a>
								</div>
								<div class="gup_blg_grid_caption">

									<div class="blg_title">
										<h4><a href=""><?php echo $blog['blog_name']; ?></a></h4>
									</div>
									<div class="blg_desc">
										<p><?php echo $blog['blog_content']; ?></p>
									</div>
								</div>
								<div class="crs_grid_foot">
									<div class="crs_flex br-top px-3 py-2">
										<div class="crs_fl_last">
											<div class="foot_list_info">
												<ul class="blog_ul">
													<li>
														<div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
														<a href="">Read More</a>
													</li>
													<li class="text-right">
														<div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div>
														<div class="elsio_tx"><?php echo date_format(date_create($blog['created_date']), 'd M ,Y') ?></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>
				<!-- Single Item -->



			</div>

			<div class="flex-box">
				<a href="blog.php" class="btn btn-md rounded hover-theme home_btn">View More<i class="lni lni-arrow-right-circle ms-2"></i></a>
			</div>

		</div>
	</section>

	<?php include 'includes/footer.php' ?>

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<?php include 'includes/footer-link.php' ?>	