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

if($pp == "") {
	header("Location: post.php");
}
else {
	
	$pp1="cedit".$pp.".php";
	header("Location: $pp1");
}

?>
