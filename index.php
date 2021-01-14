<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$files = array_reverse(glob("*.txt"));


if ($files == false) {
	$files[0] = "0.txt";
}

$last_file = $files[0];
$last_number = str_replace(".txt", "", $last_file);
$new_file = (string)((int)$last_number + 1) . ".txt";

$content = $name . "\n" . $email . "\n" . $message;

$file = fopen($new_file, 'w');
fwrite($file, $content);
fclose($file);

?>