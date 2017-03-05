<?php
    $name = $_POST["name"]; //You have to get the form data
    $email = $_POST["email"];
    $description = $_POST["description"];
    $jobDesc=$_POST["jobDesc"];
    $number=$_POST["num"];
    $location = $_POST["location"]; 
    $date = $_POST["date"];
    $time = $_POST["time"];

    $finalVar = "unchecked";

    $IorO=$_POST['optionsRadios'];
  if ($IorO== 'option1')
    {
        $finalVar='Individual';


    }
    else if ($IorO=='option2'){
      $finalVar='Organization';
    } 




    $file = fopen('test.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $name. PHP_EOL .$email. PHP_EOL .$description. PHP_EOL .$jobDesc. PHP_EOL .$location. PHP_EOL .$date. PHP_EOL .$time. PHP_EOL .$finalVar;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>