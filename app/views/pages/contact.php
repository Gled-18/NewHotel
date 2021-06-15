<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston">
  <meta name="keywords" content="hotel,boston hotel, new england hotel">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/stlb.css">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php echo URLROOT; ?>/css/stlbm.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Greccia Hotel | Contact</title>
  <link rel="icon" href="ghotel1.ico">
</head>
<body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="<?php echo URLROOT;?>/pages/index"><img src="<?php echo URLROOT;?>/img/ghotel.png" alt="HTML5 Icon" width="85" height="60"></a></h1>
          <ul>
        <li><a href="<?php echo URLROOT;?>/pages/index">Home</a></li>
        <li><a href="<?php echo URLROOT;?>/pages/about">About</a></li>
		 <li><a href="<?php echo URLROOT;?>/pages/rooms">Rooms</a></li>
		 <li><a href="<?php echo URLROOT;?>/pages/gallery">Gallery</a></li>
        <li><a class="current" href="<?php echo URLROOT;?>/pages/contact">Contact</a></li> 
          </ul>
        </div>
      </nav>
    </header>
  
    <section id="contact-form" class="py-3">
      <div class="container">
        <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
        <p>Please fill out the form below to contact us</p>
        <form action="<?php echo URLROOT;?>/pages/contact" method='post'>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" name="message" id="message"></textarea>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </section>

    <section id="contact-info" class="bg-dark">
      <div class="container">
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Location</h3>
          <p>Ish Kampi SH8, Dhermi Plazh, Dhërmi, Vlorë, Albania</p>
        </div>
        <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Phone Number</h3>
          <p>+355 69 38 72 028</p>
		  <p>+355 69 91 09 222</p>
		  <p>+44 775 233 2016</p>
        </div>
        <div class="box">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>Email Adress</h3>
          <p>grecciahotel@gmail.com</p>
        </div>
      </div>
    </section>
    
  <footer id="main-footer">
    <p>Greccia Hotel &copy; 2021, All Rights Reserved</p>
  </footer>
</body>
</html>