	<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Log in
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Log in</li>
      </ol>

      <!-- Content Row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-6 mb-4" style="margin: 0 auto;">
			<form name="sentMessage" id="contactForm" novalidate method="POST" action="<?=URL?>Login/run">
				<?php
				if(Session::get('login_error')){
					echo '<div class="alert alert-danger" role="alert">'.Session::get('login_error').'</div>';
					
					Session::remove('login_error');
				}
				if(Session::get('success_register')){
					echo '<div class="alert alert-success" role="alert">'.Session::get('success_register').'</div>';
					
					Session::remove('success_register');
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
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your Password.">
				  </div>
				</div>

				<button type="submit" class="btn btn-primary" id="LoginButton">Log in</button>
			</form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
