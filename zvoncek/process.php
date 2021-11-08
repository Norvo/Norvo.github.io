<?php

$json_string = json_encode($_POST);
$menuPerArray = "text/jsonmenutext.json";
$fileHandle = fopen($menuPerArray, "w");
fwrite($fileHandle, $json_string);
fclose($fileHandle);


