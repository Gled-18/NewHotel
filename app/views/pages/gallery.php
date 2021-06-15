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
  <title>Greccia Hotel | Gallery</title>
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
		 <li><a  href="<?php echo URLROOT;?>/pages/rooms">Rooms</a></li>
		 <li><a class="current" href="<?php echo URLROOT;?>/pages/gallery">Gallery</a></li>
        <li><a href="<?php echo URLROOT;?>/pages/contact">Contact</a></li> 
          </ul>
        </div>
      </nav>
    </header>
  
	    <section id="gallery-text" class="bg-light py-3">
      <div class="container">
        <h1 class="l-heading3"><span class="text-primary">Gallery</span></h1>     
      </div>
    </section>
	
		    <section id="gallery-form" class="bg-light ">
      
		  
		  <div class="row">
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH3M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH8M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH2.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH18M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH5M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH24.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH30.png" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH31.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  
     <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH32.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH4M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH9M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH28M.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
			  
   <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH33.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH34.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH35.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo URLROOT;?>/img/GH36.jpg" alt="HTML" style="width: 300px;height: 200px;" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH3M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>1 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH8M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>2 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH2.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>3 / 16</p>
    </div>
    </div>
    
    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH18M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>4 / 16</p>
    </div>
    </div>
    
        <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH5M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>5 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH24.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>6 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH30.png" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>7 / 16</p>
    </div>
    </div>
    
    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH31.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>8 / 16</p>
    </div>
    </div>
    
            <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH32.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>9 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH4M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>10 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH9M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>11 / 16</p>
    </div>
    </div>
    
    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH28M.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>12 / 16</p>
    </div>
    </div>
	  
	<div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH33.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>13 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH34.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>14 / 16</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH35.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>15 / 16</p>
    </div>
    </div>
    
    <div class="mySlides">
      <img src="<?php echo URLROOT;?>/img/GH36.jpg" alt="HTML" style="width:850px; height: 550px;">
          <div class="caption-container">
      <p>16 / 16</p>
    </div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
   
  </div>

		  
      </div>
    </section>
	
	  <footer id="main-footer">
    <p>Greccia Hotel &copy; 2021, All Rights Reserved</p>
  </footer>
	
	<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
	
	</body>
</html>