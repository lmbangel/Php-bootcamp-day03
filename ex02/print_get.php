<?php
    $url_params = $_GET;
    // print_r($url_params);
    foreach ($url_params as $key => $value)
         echo $key.": ".$value."\n";
?>