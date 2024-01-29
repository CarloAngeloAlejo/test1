<?php

require_once ("facilitiesdb.php");
require_once ("facilitiescompo.php");

// create instance of Createdb class
$database = new FacilitiesDb(dbname: "Facilitydb", tablename: "Facilitytb");

?>

<!DOCTYPE html>
<html lang="end">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - LCCV</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="lccvFacilitiesStyles.css">
</head>
<body>

<section id="about">
    <h2>FACILITIES</h2>
    <p></p>
</section>

<!--GO BACK-->

<div class="goback">
    <span class="arrow">◄</span>
    <a href="lccvAbout.html" class="goback-link">GO BACK</a>
</div>


<!------ facilities ------>

<section id="facilities" class="facilities">
    <div class="facilities-row">
        <?php
            $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    componentF ($row['facilities_title'], $row['facilities_description'], $row['facilities_img'], $row['id']);
                } 
        ?>
    </div>
  </section>

  <iframe src="footerLCCV.html" frameborder="0" scrolling="no" width="100%" height="360"></iframe>

</body>
</html>