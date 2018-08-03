    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.card-header .icons .fa-cc-visa{
	color: #FFB85F;	
}
.card-header .icons .fa-cc-discover{
	color: #027878;
}
.card-header .icons .fa-cc-amex{
	color: #EB4960;
}
.card-body label{
	font-size: 14px;
}
</style>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Charge Account
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=URL?>Home">Home</a>
        </li>
        <li class="breadcrumb-item active">Charge</li>
      </ol>
	  
	  <div class="row">
			<div class="col-md-4 offset-md-4 col-10 offset-1 pl-0 pr-0 mb-4">
				<div class="card">
				  	<div class="card-header">
				    	<div class="row">
							<div class="col-md-5 col-12 pt-2">
								<h6 class="m-0"><strong>Payment Details</strong></h6>
							</div>
							<div class="col-md-7 col-12 icons">
								<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-discover fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-amex fa-2x" aria-hidden="true"></i>
							</div>
						</div>
				  	</div>
				  	<div class="card-body">
				    	<form>
							<div class="form-group">
						    	<label for="exampleInputCouponCode"><strong>Amount</strong></label>
						    	<input type="text" class="form-control" id="exampleInputCouponCode" placeholder="Amount">
						  	</div>
						  	<div class="form-group">
						      	<label for="validationTooltipCardNumber"><strong>CARD NUMBER</strong></label>
						      	<div class="input-group">
						        	<input type="text" class="form-control border-right-0" id="validationTooltipCardNumber" placeholder="Card Number">
						        	<div class="input-group-prepend">
						          		<span class="input-group-text rounded-right" id="validationTooltipCardNumber"><i class="fa fa-credit-card"></i></span>
						        	</div>
						      </div>
						  	</div>
						  	<div class="row">
						  		<div class="col-md-8 col-12">
						  			<div class="form-group">
								    	<label for="exampleInputExpirationDate"><strong>EXPIRATION DATE</strong></label>
								    	<input type="text" class="form-control" id="exampleInputExpirationDate" placeholder="MM / YY">
									</div>
						  		</div>
							  	<div class="col-md-4 col-12">
							  		<div class="form-group">
									    <label for="exampleInputCvcCode"><strong>CVC CODE</strong></label>
									    <input type="text" class="form-control" id="exampleInputCvcCode" placeholder="CVC">
									</div>
							  	</div>
						  	</div>
						  	<button class="btn btn-info w-100 pb-2 pt-2" onclick="return false;">Charge</button>
						</form>
				  	</div>
				</div>
			</div>
		</div>
	  
	  
    </div>
    <!-- /.container -->