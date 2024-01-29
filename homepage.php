<?php /* Template Name: HomePage
*/ ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>La Consolacion College Website</title>
	<link rel="stylesheet" href="capdesign.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>
<body>
	<section id="home" class="header">
		<nav>
		  <a href="index.html"><img src="logo.png"></a>
		  <div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()"></i>
			<ul>
			  <li><a href="#home">HOME</a></li>
			  <li class="dropdown">
				<a href="#about">ABOUT</a>
				<ul class="dropdown-menu">
				  <li><a href="#course">Programs</a></li>
				  <li><a href="#facilities">Facilities</a></li>
				  <li><a href="#gallery">Gallery</a></li>
				  <!-- Add more sub-menu items as needed -->
				</ul>
			  </li>
			  <li><a href="#ann">ANNOUNCEMENTS</a></li>
			  <li><a href="#facilities">CALENDAR</a></li>
			  <li><a href="#contact">CONTACT</a></li>
			</ul>
		  </div>
		  <i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>

<div class="text-box">
	<h1>La Consolacion College Valenzuela</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Insert Caption.</p>

	<a href="" class="hero-btn">Visit Us To Know More</a>
</div>
</section>


<!------ About ------>

<section id="about" class="footer">
	<h1>About Us</h1>
	<p>lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br><br><br>lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br><br><br>lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>consectetur adipiscing elit.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br><br><br>
	</p>

</section>

<!------Course------>

<section id="course" class="course">
	<h1>Courses We Offer</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="course-col">
			<h3>Elementary</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
		</div>
		<div class="course-col">
			<h3>High School</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
	</div>
	<div class="course-col">
		<h3>College</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
</section>

<!------ facilities ------>

<section id="facilities" class="facilities">
	<h1>Our facilities</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div id="facilities" class="row">
		<div class="facilities-col">
			<img src="library.png">
			<h3>World Class Library</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="facilities-col">
			<img src="basketball.png">
			<h3>Largest Play Ground</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<div class="facilities-col">
			<img src="cafeteria.png">
			<h3>Tasty and Healthy Food</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
</section>

<!------ campus ------>

<section id="gallery" class="campus">
	<h1>School Gallery</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	<div class="row">
		<div class="campus-col">
			<img src="london.png">
			<div class="layer">
				<h3>Elementary</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="newyork.png">
			<div class="layer">
				<h3>High School</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="washington.png">
			<div class="layer">
				<h3>College</h3>
			</div>
		</div>
	</div>
</section>


<!--- Annoucement --->

<section id="ann" class="ann">
	<h1>Annoucements</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

</section>
<div class="slideshow-container">
    <!-- Slides -->
    <div class="mySlides">
      <img src="an1.jpg" alt="Slide 1">
    </div>

    <div class="mySlides">
      <img src="an2.jpg" alt="Slide 2">
    </div>

    <div class="mySlides">
      <img src="an3.jpg" alt="Slide 3">
    </div>

    <!-- Navigation buttons -->
    <div class="prev" onclick="changeSlide(-1)">&#10094;</div>
    <div class="next" onclick="changeSlide(1)">&#10095;</div>
  </div>


<!------ Call to Action ------>

<section id="contact" class="cta">
	<h1>Enroll for our various online courses<br>Anywhere from the World</h1>
	<a href="" class="hero-btn">CONTACT US</a>
</section>


<script>

	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}



	var slideIndex = 1;
    showSlides(slideIndex);

    function showSlides(n) {
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }

      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slides[slideIndex - 1].style.display = "block";
    }

    function changeSlide(n) {
      showSlides(slideIndex += n);
    }
</script>


</body>
</html>