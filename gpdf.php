<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$UID = $_SESSION['Mid'];
require_once 'class.user.php';
$gappn="";
$user_home = new USER();
$gappn=$_POST["view"]; 
//$vapn=$_SESSION['gappn'];
$gpath="/opt/lampp/htdocs/web/khybheeappalingam819ew/".$gappn.".pdf";
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");

@readfile($gpath);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
