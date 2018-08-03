	<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Sign up
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Sign up</li>
      </ol>

      <!-- Content Row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-6 mb-4" style="margin: 0 auto;">
			<form name="sentMessage" id="contactForm" novalidate method="POST" action="<?=URL?>register/run">
				<?php
				if(Session::get('register_error')){
					echo '<div class="alert alert-danger" role="alert">'.Session::get('register_error').'</div>';
					
					Session::remove('register_error');
				}
				?>
				
				<div class="control-group form-group">
				  <div class="controls">
					<label for="passportId">Passport ID</label>
					<input type="text" class="form-control" id="passportId" name="passportId" required data-validation-required-message="Please enter your Passport number.">
					<p class="help-block"></p>
				  </div>
				</div>
				<div class="control-group form-group">
				  <div class="controls">
					<label for="dateBirth">Date of Birth:</label>
					<input type="date" class="form-control" id="dateBirth" name="dateBirth" required data-validation-required-message="Please enter your Password.">
				  </div>
				</div>
				<!-- For success/fail messages -->
				<button type="submit" class="btn btn-primary" id="SignupButton">Sign up</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
