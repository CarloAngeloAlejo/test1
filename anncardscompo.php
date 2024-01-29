<?php

function componentC($anntitle, $anndate, $annimg) {
    $element = '

<div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="testann.php" method="post">
        <div class="card shadow">
            <div>
                <img src="' . $annimg . '" alt="Image1" class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">' . $anntitle . '</h5>
                <h5>
                    <span class="price" style="color: #888; font-style: italic; font-size: 14px;">Posted on: ' . $anndate . '</span>
                </h5>



            </div>
        </div>
    </form>
</div>

    ';
    echo $element;
}


?>
