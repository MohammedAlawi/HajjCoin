<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?=URL?>home">Hajj Coin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
			<li class="nav-item">
              <a class="nav-link" href="<?=URL?>Partners">Our Partners</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?=URL?>Exchange">Exchange</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?=URL?>about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?URL?>contact">Contact</a>
            </li>
			<?php
			
			if(Session::get('LoggenIn')){
				echo 
				'
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Welcome('.Session::get('UserData')['fullName'].')
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="'.URL.'Charge">Charcg</a>
						<a class="dropdown-item" href="'.URL.'Balance">My Balance</a>
						<a class="dropdown-item" href="'.URL.'purchases">Purchases</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="'.URL.'Settings">Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="'.URL.'login/logout">Logout</a>
					</div>
				</li>
				';
			} else {
				echo 
				'<li class="nav-item">
				  <a class="nav-link" href="'.URL.'login#contactForm">Log in</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="'.URL.'register#contactForm">Sign up</a>
				</li>';
			}
			
			?>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?=URL?>public/img/image.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Makkah</h3>
              <p>Direction to which Moslems turn in prayer</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?=URL?>public/img/namerah.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Al-Khayef Mosque</h3>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?=URL?>public/img/minaaraft_0.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Mena</h3>
            </div>
          </div>
		  <!-- Slide Four - Set the background image for this slide in the line below -->
		  <!--
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Fourth Slide</h3>
              <p>This is a description for the fourth slide.</p>
            </div>
          </div>
		  -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>