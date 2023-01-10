<?php

function echoList($array)
{
    foreach ($array as $line) {
        echo "<li>" . $line . "</li>\n";
    }
}