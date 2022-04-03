<?php

$file = $_GET['file'] .".pdf";

header("content-disposition: attachment; filename=" .urlencode($file));

$fb = fopen($file, "r");

while (!feof($fb)){
    echo fread($fb,10000);
    flush();

}
fclose($fb);


?>