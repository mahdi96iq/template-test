<?php

$myfile = fopen("location.txt", "w");
$txt = "lat : " . $_GET["lat"] . "\n long: " . $_GET["long"] . "\n ip: " . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);

?>