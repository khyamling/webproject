<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$appn=$_POST["view"]; 
$_SESSION['vappn']=$appn;
$pp = substr($appn, 2, 1);
echo $pp;
echo $appn."helooo";
echo $pp."helooo";
if($pp=="1")
{
    $pp="ceq1.php";
}
else if($pp=="2")
{
    $pp="ceq2.php";
}
else if($pp=="3")
{
    $pp="ceq3.php";
}
else if($pp=="4")
{
    $pp="ceq4.php";
}
else if($pp=="5")
{
    $pp="ceq5.php";
}
else if($pp=="6")
{
    $pp="ceq6.php";
}
else
{
    $pp="home.php";
} 
header("Location: $pp");
   

