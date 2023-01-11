<?php

function echoList($array)
{
    foreach ($array as $line) {
        echo "<li>" . $line . "</li>\n";
    }
}

function echoValidation($array)
{
    foreach ($array as $message) {


        if ($message[0]) {
            echo "<div class='message success'>\n";
        } else {
            echo "<div class='message error'>\n";
        }
        echo "<p>" . $message[1] . "<i class='fa-solid fa-xmark'></i></p>\n";
        echo "</div>\n";
    }
}