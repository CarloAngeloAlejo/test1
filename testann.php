<?php

require_once ("anndb.php");
require_once ("annslidescompo.php");
require_once ("anncardscompo.php");

// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

?>

<!DOCTYPE html>
<html lang="end">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcment</title>

    <link rel="stylesheet" href="lccvAnnouncementStyle1.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <!------Nav------>
    <nav id="main-nav">
    <img src="navlogo2.jpg" alt="">
    <div class="navigation">
        <ul>
            <li><a href="lccvWeb.html">Home</a></li>
          <li><a href="lccvAbout.html">About</a></li>
          <li><a href="lccvAnnouncenent.html">Announcment</a></li>
          <li><a href="lccvPrograms.html">Admission</a></li>
          <li><a href="lccvContact.html">Contact</a></li>
        </ul>
    </div>
    </nav>

    <!---Slides--->

    <section id="about">
        <h2>ANNOUNCEMENT</h2>
        <p>sample text here</p>
    </section>

    <section id="ann" class="ann">
        <h1>Announcements</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <div class="slideshow-container">
        <?php
           $result = $database->getData();
           while ($row = mysqli_fetch_assoc($result)){
               component($row['announcement_title'], $row['announcement_date'], $row['announcement_image'], $row['id']);
           } 
        ?>
        <div class="prev" onclick="changeSlide(-1)">&lt;</div> <!-- Use &lt; for < symbol -->
        <div class="next" onclick="changeSlide(1)">&gt;</div> <!-- Use &gt; for > symbol -->
    </div><br>

<!---blog--->

<div class="blog-section">
            <div class="title">
                <h2 style="text-align: center;">Previous Articles</h2>
                <p style="text-align: center;">Look the previous announcements here incase you missed out!</p>
            </div>

                <div class="container">
                    <div class="row text-center py-5">
                        <?php
                            $result = $database->getData();
                            while ($row = mysqli_fetch_assoc($result)){
                                componentC($row['announcement_title'], $row['announcement_date'], $row['announcement_image'], $row['id']);
                            } 
                        ?>
                    </div>
                </div>
</div>







    <iframe src="footerLCCV.html" frameborder="0" scrolling="no" width="100%" height="350"></iframe>

    <script>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>