<?php
    $name = $_POST["organization"]; //You have to get the form data
    $description = $_POST["description"];
    $contact = $_POST["contactz"];
    $job = $_POST["job"]; //You have to get the form data
    $number = $_POST["number"];
    $location = $_POST["location"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $file = fopen('test.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $name. PHP_EOL .$description. PHP_EOL .$contact. PHP_EOL .$job. PHP_EOL .$number. PHP_EOL .$location. PHP_EOL .$date. PHP_EOL .$time;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>