<?php
function c($var)
{
    if (is_bool($var)) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    } else if (is_array($var)) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    } else {
        echo "<pre>";
        echo $var;
        echo "</pre>";
    }
}