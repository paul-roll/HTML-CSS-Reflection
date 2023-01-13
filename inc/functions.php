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

function validateString($string, $token)
{
    if (empty($string)) {
        return $token . " is required.";
      //Must use only letters and hyphens
      } else if (!preg_match("/^[a-zA-Z-]*$/", $string)) {
        return $token . " contains invalid characters.";
      //Must be at most 35 characters (DB limit)
      } else if (strlen($string) > 35) {
        return $token . " is too long.";
      //Must be at least 2 characters
      } else if (strlen($string) < 2) {
        return $token . " is too short.";
      //Must start and end with a letter, Must not contain two hyphens in a row
      } else if (!preg_match("/^(?!.*--)[a-zA-Z]{1}[a-zA-Z-]*[a-zA-Z]{1}$/", $string)) {
        return $token . " is invalid.";
      } else {
        return false;
      }
}

function validateEmail($email)
{
    if (empty($email)) {
        return "Your Email is required.";
        //Keeping "a-zA-Z" instead of "a-z" in-case strtolower() is removed
        //Only alphanumeric, hyphen, period and AT characters
    } else if (!preg_match("/^[a-zA-Z0-9-.@]*$/", $email)) {
        return "Your Email contains invalid characters.";
        //At most 254 characters (DB limit)
    } else if (strlen($email) > 254) {
        return "Your Email is invalid.";
        //Far from perfect, catches the general format of emails but does not prevent weird input such as "-@..ab"
    } else if (!preg_match("/^[a-zA-Z0-9-.]+@[a-zA-Z0-9-.]+\.[a-zA-Z]{2,4}$/", $email)) {
        //} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //Instructed to use REGEX instead
            return "Your Email is invalid.";
    } else {
        return false;
    }
}

function validatePhone($phone)
{
    if (empty($phone)) {
        return "Your Telephone Number is required.";
    //Only numbers
    } else if (!preg_match("/^[0-9]*$/", $phone)) {
        return "Your Telephone Number contains invalid characters.";
    //At most 11 characters (change to 12 to support country code) (12 = DB limit)
    } else if (strlen($phone) > 11) {
        return "Your Telephone Number is too long.";
    //At least 11 characters
    } else if (strlen($phone) < 11) {
        return "Your Telephone Number is too short.";
    } else {
        return false;
    }
}

function validateMessage($message)
{
    if (empty($message)) {
        return "Message is required.";
    } else if (strlen($message) < 5) {
        return "Message is too short.";
    } else {
        return false;
    }
}

//function to build a simple table out of a sql SELECT query
function array_to_table($array)
{
	$table = "<table align=\"center\" border=1>";
	foreach($array[0] as $key=> $val){
		$table .= "<th>$key</th>";
	}
	foreach($array as $row) {
		$table .= "<tr>";
		foreach($row as $value) {
			$table .= "<td>$value</td>";
		}
		$table .= "</tr>";
	}
	$table .= "</table></div>";
	return $table;
}

function getUTC()
{
    $now = new DateTime('now', new DateTimeZone('UTC'));
    return $now->format(DateTimeInterface::W3C);
}
