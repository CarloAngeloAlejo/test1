<?php

function component($anntitle, $anndate, $annimg) {
    $element = '

    
    <div class="mySlides">
        <img src="' . $annimg . '" alt="Slide 1">
    </div>

    ';
    echo $element;
}


?>
