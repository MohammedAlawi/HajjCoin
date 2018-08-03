<?php
$passportId = Session::get('PID_completeregister');
$jdb = new Jquerydb();
$getFromGovrment = $jdb->jSelectW('people', array( "PID" => $passportId ))[0]; // get data from the goverment to check the Hajj aleredy register at Database
?>

	<!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Complete Registration
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?URL?>Home">Home</a>
        </li>
		<li class="breadcrumb-item">
          <a href="<?URL?>Register">Register</a>
        </li>
        <li class="breadcrumb-item active">Complete Registration</li>
      </ol>

      <!-- Content Row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
		
		<!-- presonal information -->
		<div class="col-lg-4 mb-4">
          <h3>Presonal Information</h3>
			<p>
				<b>Name:</b>
				<?=$getFromGovrment['name']?>
			</p>
			<p>
				<b>Nationality:</b> 
				<?=$getFromGovrment['from']?>
			</p>
			<p>
				<b>Hamla Name:</b>
				<?=$getFromGovrment['hamlaName']?>
			</p>
			<p>
				<b>Date of Birth:</b>
				<?=$getFromGovrment['dateBirth']?>
			</p>
			<p>
				<b>Date of Issue:</b>
				<?=$getFromGovrment['dateIssue']?>
			</p>
        </div>
		<!-- / .presonal information -->
		
        <div class="col-lg-6 mb-4" style="">
			<form name="sentMessage" id="contactForm" novalidate method="POST" action="<?=URL?>CompleteRegistration/confirm">
				
				<?php
				if(Session::get('confirmreg_error')){
					echo '<div class="alert alert-danger" role="alert">'.Session::get('confirmreg_error').'</div>';
					
					Session::remove('confirmreg_error');
				}
				?>
				<div class="control-group form-group">
				  <div class="controls">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your Password.">
				  </div>
				</div>
				
				<div class="control-group form-group">
				  <div class="controls">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your Passport number.">
					<p class="help-block"></p>
				  </div>
				</div>

				<div class="control-group form-group">
				  <div class="controls">
					<label for="re_password">Confirm password</label>
					<input type="password" class="form-control" id="re_password" name="re_password" required data-validation-required-message="Please enter your Password.">
				  </div>
				</div>

				<button type="submit" class="btn btn-primary" id="SignupButton">Sign up</button>
			</form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
