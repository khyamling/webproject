<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123html2pdf";
$dbname = "employment";
//mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

//mysqli_select_db($dbname) or die('database selection problem');
?>