    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Exchange
        <small>HC</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?URL?>Home">Home</a>
        </li>
        <li class="breadcrumb-item active">Exchange to HC</li>
      </ol>
      

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
			<h3>Exchange to HC</h3>
			<form name="sentMessage" id="contactForm" novalidate method="POST" action="#contactForm">
				<?php
				if(isset($_POST['go'])){
					$from = security::clean($_POST['from']);
					$amount = security::clean($_POST['amount']);
					$text = "$amount $from = ".ExchangeCurrency::change($from, $amount)." HC";
					echo '<div class="alert alert-info" role="alert">'.$text.'</div>';
				}
				?>
				<div class="control-group form-group">
				  <div class="controls">
					<label for="from">Change From:</label>
					<select class="form-control" id="from" name="from" required>
						<option  value="DZD">Algerian Dinar (DZD)</option>
						<option  value="ARS">Argentine Peso (ARS)</option>
						<option  value="AUD">Australian D'r (AUD)</option>
						<option  value="BHD">Bahraini Dinar (BHD)</option>
						<option  value="BDT">Bangladeshi T' (BDT)</option>
						<option  value="BOB">Bolivian Boli' (BOB)</option>
						<option  value="BWP">Botswanan Pula (BWP)</option>
						<option  value="BRL">Brazilian Real (BRL)</option>
						<option  value="GBP">British Pound (GBP)</option>
						<option  value="BND">Brunei Dollar (BND)</option>
						<option  value="BGN">Bulgarian Lev (BGN)</option>
						<option  value="CAD">Canadian D'r (CAD)</option>
						<option  value="KYD">Cayman Islands (KYD)</option>
						<option  value="CLP">Chilean Peso (CLP)</option>
						<option  value="CNY">Chinese Yuan (CNY)</option>
						<option  value="COP">Colombian Peso (COP)</option>
						<option  value="CRC">Costa Rican C' (CRC)</option>
						<option  value="DKK">Danish Krone (DKK)</option>
						<option  value="HRK">Croatian Kuna (HRK)</option>
						<option  value="CZK">Czech Republic (CZK)</option>
						<option  value="DOP">Dominican Peso (DOP)</option>
						<option  value="EGP">Egyptian Pound (EGP)</option>
						<option  value="EEK">Estonian Kroon (EEK)</option>
						<option  value="EUR">Euro (EUR)</option>
						<option  value="FJD">Fijian Dollar (FJD)</option>
						<option  value="HNL">Honduran Lemp' (HNL)</option>
						<option  value="HKD">Hong Kong D'r (HKD)</option>
						<option  value="HUF">Hungarian Fo' (HUF)</option>
						<option  value="ISK">Iceland Krona (ISK)</option>
						<option  value="INR">Indian Rupee (INR)</option>
						<option  value="IDR">Indonesian R' (IDR)</option>
						<option  value="JMD">Jamaican D'r (JMD)</option>
						<option  value="JPY">Japanese Yen (JPY)</option>
						<option  value="JOD">Jordanian D'r (JOD)</option>
						<option  value="KZT">Kazakhstan T' (KZT)</option>
						<option  value="KES">Kenyan Shil'g (KES)</option>
						<option  value="KWD">Kuwaiti Dinar (KWD)</option>
						<option  value="LVL">Latvian Lats (LVL)</option>
						<option  value="LBP">Lebanese Pou' (LBP)</option>
						<option  value="LTL">Lithuanian L' (LTL)</option>
						<option  value="MKD">Macedonian D' (MKD)</option>
						<option  value="MYR">Malaysian R' (MYR)</option>
						<option  value="MVR">Maldivian R' (MVR)</option>
						<option  value="MUR">Mauritian R' (MUR)</option>
						<option  value="MXN">Mexican Peso (MXN)</option>
						<option  value="MDL">Moldovan Leu (MDL)</option>
						<option  value="MAD">Moroccan D' (MAD)</option>
						<option  value="NAD">Namibian D'r (NAD)</option>
						<option  value="NPR">Nepalese R' (NPR)</option>
						<option  value="ANG">Netherlands (ANG)</option>
						<option  value="NZD">New Zealand (NZD)</option>
						<option  value="NIO">Nicaraguan (NIO)</option>
						<option  value="NGN">Nigerian N' (NGN)</option>
						<option  value="NOK">Norwegian K' (NOK)</option>
						<option  value="OMR">Omani Rial (OMR)</option>
						<option  value="PKR">Pakistani R' (PKR)</option>
						<option  value="PGK">Papua New G' (PGK)</option>
						<option  value="PYG">Paraguay G' (PYG)</option>
						<option  value="PEN">Peruvian Sol (PEN)</option>
						<option  value="PHP">Philippine P' (PHP)</option>
						<option  value="PLN">Polish Zloty (PLN)</option>
						<option  value="QAR">Qatari Rial (QAR)</option>
						<option  value="RON">Romanian Leu (RON)</option>
						<option  value="RUB">Russian Ruble (RUB)</option>
						<option  value="SVC">Salvadoran C' (SVC)</option>
						<option  value="SAR">Saudi Riyal (SAR)</option>
						<option  value="RSD">Serbian Dinar (RSD)</option>
						<option  value="SCR">Seychelle R' (SCR)</option>
						<option  value="LKR">Sri Lanka R' (LKR)</option>
						<option  value="SLL">Sierra Leone (SLL)</option>
						<option  value="SGD">Singapore D'r (SGD)</option>
						<option  value="SKK">Slovak Koruna (SKK)</option>
						<option  value="ZAR">South Africa (ZAR)</option>
						<option  value="KRW">South Korea (KRW)</option>
						<option  value="SEK">Swedish Krona (SEK)</option>
						<option  value="CHF">Swiss Franc (CHF)</option>
						<option  value="TWD">Taiwan Dollar (TWD)</option>
						<option  value="TZS">Tanzania Shi' (TZS)</option>
						<option  value="THB">Thai Baht (THB)</option>
						<option  value="TTD">Trin'd Tobago (TTD)</option>
						<option  value="TND">Tunisian Dinar (TND)</option>
						<option  value="TRY">Turkish Lira (TRY)</option>
						<option  value="UGX">Ugandan Shi'g (UGX)</option>
						<option  value="UAH">Ukraine H' (UAH)</option>
						<option  value="AED">United Arab E (AED)</option>
						<option  value="UYU">Uruguayan Peso (UYU)</option>
						<option  value="USD">US Dollar (USD)</option>
						<option  value="UZS">Uzbekistan Som (UZS)</option>
						<option  value="VEF">Venezuelan F' (VEF)</option>
						<option  value="VND">Vietnamese Dong (VND)</option>
						<option  value="YER">Yemeni Rial (YER)</option>
						<option  value="ZMK">Zambian Kwacha (ZMK)</option>
					</select>
				  </div>
				</div>
				<div class="control-group form-group">
				  <div class="controls">
					<label for="amount">Amount:</label>
					<input type="text" class="form-control" id="amount" name="amount" required data-validation-required-message="Please enter your amount.">
				  </div>
				</div>
				
				<button type="submit" class="btn btn-primary" id="sendMessageButton" name="go">Calculate</button>
			</form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->