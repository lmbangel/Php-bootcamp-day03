<?php
    $url_params =  $_GET;
    foreach($url_params as $key => $val)
    {
        if ($key == "action")
            $action = $val;
        else if ($key == "name")
            $name = $val;
        else if ($key == "value")
            $value = $val;
    }
    if ($action == "set")
        setcookie($name, $value);
    else if ($action == "get")
        echo $_COOKIE[$name];
    else if ($action == "del")
        setcookie($name, "", time());

?>