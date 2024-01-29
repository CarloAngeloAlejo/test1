<?php

function componentF ($facility_title, $facility_description, $facility_img) {
    $element = '

                <div class="facilities-col">
                    <img src="' . $facility_img . '" alt="Library">
                        <h3>' . $facility_title . '</h3>
                            <p>' . $facility_description . '</p>
                </div>


    ';
    echo $element;
}


?>
