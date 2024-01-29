
    <?php

    require_once ("anndb.php");
    require_once ("annslidescompo.php");
    require_once ("anncardscompo.php");
    
    // create instance of Createdb class
    $database = new CreateDb("Productdb", "Producttb");
    
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Announcment - LCCV</title>
    
        <link rel="stylesheet" href="lccvAnnouncementStyles.css">
        <link rel="stylesheet" href="lccvFooterStyle1.css">
    
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    </head>
    <body>
        <!------Nav------>
        <nav id="main-nav">
            <div class="logo-toggle-container">
            <a href="lccvWeb.html"><img src="navlogo2.jpg" alt=""></a>
                <div id="nav-toggle">☰</div>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="lccvWeb.html">HOME</a></li>
                    <li><a href="lccvAbout.html">ABOUT</a></li>
                    <li><a href="lccvAnnouncenent.php">ANNOUNCEMENT</a></li>
                    <li><a href="lccvPrograms.html">ADMISSION</a></li>
                    <li><a href="lccvContact.html">CONTACT</a></li>
                </ul>
            </div>
        </nav>

    
        <!---Slides--->
    
        <section id="about" style="font-family: 'Poppins', sans-serif;">
            <h2 style="font-size: 2.2rem; letter-spacing: 1px; color: #fff; font-weight: 700;">ANNOUNCEMENT</h2>
            <p style="font-size: 0.9rem; line-height: 25px; color: #fff;"></p>
        </section>

        <section id="ann" class="ann" style="font-family: 'Poppins', sans-serif;">
            <h1 style="font-size: 36px; font-weight: 600; color: rgb(35, 35, 85);">Latest Updates</h1>
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
        </div><br><br>
    
    <!---blog--->
    
    <div class="blog-section">
        <div class="title" style="text-align: center; font-family: 'Poppins', sans-serif;">
            <h2 style="font-size: 35px; color: rgb(35, 35, 85);">Previous Articles</h2>
            <p style="font-size: 18px; color: black;">Look the previous announcements here in case you missed out!</p>
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
    
    
    <iframe src="footerLCCV.html" frameborder="0" scrolling="no" width="100%" height="360"></iframe>

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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navToggle = document.getElementById('nav-toggle');
            var navList = document.querySelector('#main-nav .navigation ul');

            navToggle.addEventListener('click', function () {
                navList.classList.toggle('active');
            });
        });
    </script>
</body>
</html>