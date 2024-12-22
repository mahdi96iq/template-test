<?php

// Validate and sanitize inputs
$lat = filter_input(INPUT_GET, 'lat', FILTER_SANITIZE_STRING);
$long = filter_input(INPUT_GET, 'long', FILTER_SANITIZE_STRING);

if (!$lat || !$long) {
    die("Invalid latitude or longitude.");
}

// Get client IP address
$ip = $_SERVER["REMOTE_ADDR"];

// Format the data
$txt = "lat: " . $lat . "\nlong: " . $long . "\nip: " . $ip . "\n---\n";

// Write to file
$myfile = fopen("location.txt", "a");
if (!$myfile) {
    die("Unable to open file!");
}
fwrite($myfile, $txt);
fclose($myfile);

echo "Location logged successfully!";
?>
