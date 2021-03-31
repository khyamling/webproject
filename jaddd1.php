<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$email=$UID;
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   
    $j1_11 = mysqli_real_escape_string($link, $_POST['j1_11']);
    $j1_12 = mysqli_real_escape_string($link, $_POST['j1_12']);
    $j1_13 = mysqli_real_escape_string($link, $_POST['j1_13']);
    $j1_14 = mysqli_real_escape_string($link, $_POST['j1_14']);
    $j1_15 = mysqli_real_escape_string($link, $_POST['j1_15']);
   // $j1_16 = mysqli_real_escape_string($link, $_POST['j1_16']);
   // $j1_17 = mysqli_real_escape_string($link, $_POST['j1_17']);
    $j2_11 = mysqli_real_escape_string($link, $_POST['j2_11']);
    $j2_12 = mysqli_real_escape_string($link, $_POST['j2_12']);
    $j2_13 = mysqli_real_escape_string($link, $_POST['j2_13']);
    $j2_14 = mysqli_real_escape_string($link, $_POST['j2_14']);
    $j2_15 = mysqli_real_escape_string($link, $_POST['j2_15']);
   // $j2_16 = mysqli_real_escape_string($link, $_POST['j2_16']);
   // $j2_17 = mysqli_real_escape_string($link, $_POST['j2_17']);
    $j3_11 = mysqli_real_escape_string($link, $_POST['j3_11']);
    $j3_12 = mysqli_real_escape_string($link, $_POST['j3_12']);
    $j3_13 = mysqli_real_escape_string($link, $_POST['j3_13']);
    $j3_14 = mysqli_real_escape_string($link, $_POST['j3_14']);
    $j3_15 = mysqli_real_escape_string($link, $_POST['j3_15']);
   // $j3_16 = mysqli_real_escape_string($link, $_POST['j3_16']);
   // $j3_17 = mysqli_real_escape_string($link, $_POST['j3_17']);
    $j4_11 = mysqli_real_escape_string($link, $_POST['j4_11']);
    $j4_12 = mysqli_real_escape_string($link, $_POST['j4_12']);
    $j4_13 = mysqli_real_escape_string($link, $_POST['j4_13']);
    $j4_14 = mysqli_real_escape_string($link, $_POST['j4_14']);
    $j4_15 = mysqli_real_escape_string($link, $_POST['j4_15']);
   // $j4_16 = mysqli_real_escape_string($link, $_POST['j4_16']);
   // $j4_17 = mysqli_real_escape_string($link, $_POST['j4_17']);
    $j5_11 = mysqli_real_escape_string($link, $_POST['j5_11']);
    $j5_12 = mysqli_real_escape_string($link, $_POST['j5_12']);
    $j5_13 = mysqli_real_escape_string($link, $_POST['j5_13']);
    $j5_14 = mysqli_real_escape_string($link, $_POST['j5_14']);
    $j5_15 = mysqli_real_escape_string($link, $_POST['j5_15']);
   // $j5_16 = mysqli_real_escape_string($link, $_POST['j5_16']);
   // $j5_17 = mysqli_real_escape_string($link, $_POST['j5_17']);
    $j6_11 = mysqli_real_escape_string($link, $_POST['j6_11']);
    $j6_12 = mysqli_real_escape_string($link, $_POST['j6_12']);
    $j6_13 = mysqli_real_escape_string($link, $_POST['j6_13']);
    $j6_14 = mysqli_real_escape_string($link, $_POST['j6_14']);
    $j6_15 = mysqli_real_escape_string($link, $_POST['j6_15']);
  //  $j6_16 = mysqli_real_escape_string($link, $_POST['j6_16']);
  //  $j6_17 = mysqli_real_escape_string($link, $_POST['j6_17']);
    $j7_11 = mysqli_real_escape_string($link, $_POST['j7_11']);
    $j7_12 = mysqli_real_escape_string($link, $_POST['j7_12']);
    $j7_13 = mysqli_real_escape_string($link, $_POST['j7_13']);
    $j7_14 = mysqli_real_escape_string($link, $_POST['j7_14']);
    $j7_15 = mysqli_real_escape_string($link, $_POST['j7_15']);
   // $j7_16 = mysqli_real_escape_string($link, $_POST['j7_16']);
   // $j7_17 = mysqli_real_escape_string($link, $_POST['j7_17']);
    $j8_11 = mysqli_real_escape_string($link, $_POST['j8_11']);
    $j8_12 = mysqli_real_escape_string($link, $_POST['j8_12']);
    $j8_13 = mysqli_real_escape_string($link, $_POST['j8_13']);
    $j8_14 = mysqli_real_escape_string($link, $_POST['j8_14']);
    $j8_15 = mysqli_real_escape_string($link, $_POST['j8_15']);
  //  $j8_16 = mysqli_real_escape_string($link, $_POST['j8_16']);
  //  $j8_17 = mysqli_real_escape_string($link, $_POST['j8_17']);
    $j9_11 = mysqli_real_escape_string($link, $_POST['j9_11']);
    $j9_12 = mysqli_real_escape_string($link, $_POST['j9_12']);
    $j9_13 = mysqli_real_escape_string($link, $_POST['j9_13']);
    $j9_14 = mysqli_real_escape_string($link, $_POST['j9_14']);
    $j9_15 = mysqli_real_escape_string($link, $_POST['j9_15']);
   // $j9_16 = mysqli_real_escape_string($link, $_POST['j9_16']);
    //$j9_17 = mysqli_real_escape_string($link, $_POST['j9_17']);
    $j10_11 = mysqli_real_escape_string($link, $_POST['j10_11']);
    $j10_12 = mysqli_real_escape_string($link, $_POST['j10_12']);
    $j10_13 = mysqli_real_escape_string($link, $_POST['j10_13']);
    $j10_14 = mysqli_real_escape_string($link, $_POST['j10_14']);
    $j10_15 = mysqli_real_escape_string($link, $_POST['j10_15']);
   // $j10_16 = mysqli_real_escape_string($link, $_POST['j10_16']);
   // $j10_17 = mysqli_real_escape_string($link, $_POST['j10_17']);
    $j11_11 = mysqli_real_escape_string($link, $_POST['j11_11']);
    $j11_12 = mysqli_real_escape_string($link, $_POST['j11_12']);
    $j11_13 = mysqli_real_escape_string($link, $_POST['j11_13']);
    $j11_14 = mysqli_real_escape_string($link, $_POST['j11_14']);
    $j11_15 = mysqli_real_escape_string($link, $_POST['j11_15']);
  //  $j11_16 = mysqli_real_escape_string($link, $_POST['j11_16']);
  //  $j11_17 = mysqli_real_escape_string($link, $_POST['j11_17']);
    $j12_11 = mysqli_real_escape_string($link, $_POST['j12_11']);
    $j12_12 = mysqli_real_escape_string($link, $_POST['j12_12']);
    $j12_13 = mysqli_real_escape_string($link, $_POST['j12_13']);
    $j12_14 = mysqli_real_escape_string($link, $_POST['j12_14']);
    $j12_15 = mysqli_real_escape_string($link, $_POST['j12_15']);
    //$j12_16 = mysqli_real_escape_string($link, $_POST['j12_16']);
   // $j12_17 = mysqli_real_escape_string($link, $_POST['j12_17']);
    $j13_11 = mysqli_real_escape_string($link, $_POST['j13_11']);
    $j13_12 = mysqli_real_escape_string($link, $_POST['j13_12']);
    $j13_13 = mysqli_real_escape_string($link, $_POST['j13_13']);
    $j13_14 = mysqli_real_escape_string($link, $_POST['j13_14']);
    $j13_15 = mysqli_real_escape_string($link, $_POST['j13_15']);
   // $j13_16 = mysqli_real_escape_string($link, $_POST['j13_16']);
   // $j13_17 = mysqli_real_escape_string($link, $_POST['j13_17']);
    $j14_11 = mysqli_real_escape_string($link, $_POST['j14_11']);
    $j14_12 = mysqli_real_escape_string($link, $_POST['j14_12']);
    $j14_13 = mysqli_real_escape_string($link, $_POST['j14_13']);
    $j14_14 = mysqli_real_escape_string($link, $_POST['j14_14']);
    $j14_15 = mysqli_real_escape_string($link, $_POST['j14_15']);
   // $j14_16 = mysqli_real_escape_string($link, $_POST['j14_16']);
   // $j14_17 = mysqli_real_escape_string($link, $_POST['j14_17']);
    $j15_11 = mysqli_real_escape_string($link, $_POST['j15_11']);
    $j15_12 = mysqli_real_escape_string($link, $_POST['j15_12']);
    $j15_13 = mysqli_real_escape_string($link, $_POST['j15_13']);
    $j15_14 = mysqli_real_escape_string($link, $_POST['j15_14']);
    $j15_15 = mysqli_real_escape_string($link, $_POST['j15_15']);
   // $j15_16 = mysqli_real_escape_string($link, $_POST['j15_16']);
   // $j15_17 = mysqli_real_escape_string($link, $_POST['j15_17']);
    $j16_11 = mysqli_real_escape_string($link, $_POST['j16_11']);
    $j16_12 = mysqli_real_escape_string($link, $_POST['j16_12']);
    $j16_13 = mysqli_real_escape_string($link, $_POST['j16_13']);
    $j16_14 = mysqli_real_escape_string($link, $_POST['j16_14']);
    $j16_15 = mysqli_real_escape_string($link, $_POST['j16_15']);
  //  $j16_16 = mysqli_real_escape_string($link, $_POST['j16_16']);
   // $j16_17 = mysqli_real_escape_string($link, $_POST['j16_17']);
    $j17_11 = mysqli_real_escape_string($link, $_POST['j17_11']);
    $j17_12 = mysqli_real_escape_string($link, $_POST['j17_12']);
    $j17_13 = mysqli_real_escape_string($link, $_POST['j17_13']);
    $j17_14 = mysqli_real_escape_string($link, $_POST['j17_14']);
    $j17_15 = mysqli_real_escape_string($link, $_POST['j17_15']);
   // $j17_16 = mysqli_real_escape_string($link, $_POST['j17_16']);
  //  $j17_17 = mysqli_real_escape_string($link, $_POST['j17_17']);
    $j18_11 = mysqli_real_escape_string($link, $_POST['j18_11']);
    $j18_12 = mysqli_real_escape_string($link, $_POST['j18_12']);
    $j18_13 = mysqli_real_escape_string($link, $_POST['j18_13']);
    $j18_14 = mysqli_real_escape_string($link, $_POST['j18_14']);
    $j18_15 = mysqli_real_escape_string($link, $_POST['j18_15']);
   // $j18_16 = mysqli_real_escape_string($link, $_POST['j18_16']);
  //  $j18_17 = mysqli_real_escape_string($link, $_POST['j18_17']);
    $j19_11 = mysqli_real_escape_string($link, $_POST['j19_11']);
    $j19_12 = mysqli_real_escape_string($link, $_POST['j19_12']);
    $j19_13 = mysqli_real_escape_string($link, $_POST['j19_13']);
    $j19_14 = mysqli_real_escape_string($link, $_POST['j19_14']);
    $j19_15 = mysqli_real_escape_string($link, $_POST['j19_15']);
  //  $j19_16 = mysqli_real_escape_string($link, $_POST['j19_16']);
   // $j19_17 = mysqli_real_escape_string($link, $_POST['j19_17']);
    $j20_11 = mysqli_real_escape_string($link, $_POST['j20_11']);
    $j20_12 = mysqli_real_escape_string($link, $_POST['j20_12']);
    $j20_13 = mysqli_real_escape_string($link, $_POST['j20_13']);
    $j20_14 = mysqli_real_escape_string($link, $_POST['j20_14']); 
    $j20_15 = mysqli_real_escape_string($link, $_POST['j20_15']);
   // $j20_16 = mysqli_real_escape_string($link, $_POST['j20_16']);
   // $j20_17 = mysqli_real_escape_string($link, $_POST['j20_17']);
    $j21_11 = mysqli_real_escape_string($link, $_POST['j21_11']);
    $j21_12 = mysqli_real_escape_string($link, $_POST['j21_12']);
    $j21_13 = mysqli_real_escape_string($link, $_POST['j21_13']);
    $j21_14 = mysqli_real_escape_string($link, $_POST['j21_14']);
    $j21_15 = mysqli_real_escape_string($link, $_POST['j21_15']);
   // $j21_16 = mysqli_real_escape_string($link, $_POST['j21_16']);
   // $j21_17 = mysqli_real_escape_string($link, $_POST['j21_17']);
    $j22_11 = mysqli_real_escape_string($link, $_POST['j22_11']);
    $j22_12 = mysqli_real_escape_string($link, $_POST['j22_12']);
    $j22_13 = mysqli_real_escape_string($link, $_POST['j22_13']);
    $j22_14 = mysqli_real_escape_string($link, $_POST['j22_14']);
    $j22_15 = mysqli_real_escape_string($link, $_POST['j22_15']);
   // $j22_16 = mysqli_real_escape_string($link, $_POST['j22_16']);
   // $j22_17 = mysqli_real_escape_string($link, $_POST['j22_17']);
    $j23_11 = mysqli_real_escape_string($link, $_POST['j23_11']);
    $j23_12 = mysqli_real_escape_string($link, $_POST['j23_12']);
    $j23_13 = mysqli_real_escape_string($link, $_POST['j23_13']);
    $j23_14 = mysqli_real_escape_string($link, $_POST['j23_14']);
    $j23_15 = mysqli_real_escape_string($link, $_POST['j23_15']);
   // $j23_16 = mysqli_real_escape_string($link, $_POST['j23_16']);
   // $j23_17 = mysqli_real_escape_string($link, $_POST['j23_17']);
    $j24_11 = mysqli_real_escape_string($link, $_POST['j24_11']);
    $j24_12 = mysqli_real_escape_string($link, $_POST['j24_12']);
    $j24_13 = mysqli_real_escape_string($link, $_POST['j24_13']);
    $j24_14 = mysqli_real_escape_string($link, $_POST['j24_14']);
    $j24_15 = mysqli_real_escape_string($link, $_POST['j24_15']);
   // $j24_16 = mysqli_real_escape_string($link, $_POST['j24_16']);
   // $j24_17 = mysqli_real_escape_string($link, $_POST['j24_17']);
    $j25_11 = mysqli_real_escape_string($link, $_POST['j25_11']);
    $j25_12 = mysqli_real_escape_string($link, $_POST['j25_12']);
    $j25_13 = mysqli_real_escape_string($link, $_POST['j25_13']);
    $j25_14 = mysqli_real_escape_string($link, $_POST['j25_14']);
    $j25_15 = mysqli_real_escape_string($link, $_POST['j25_15']);
   // $j25_16 = mysqli_real_escape_string($link, $_POST['j25_16']);
   // $j25_17 = mysqli_real_escape_string($link, $_POST['j25_17']);
    
  /*  $j26_11 = mysqli_real_escape_string($link, $_POST['j26_11']);
    $j26_12 = mysqli_real_escape_string($link, $_POST['j26_12']);
    $j26_13 = mysqli_real_escape_string($link, $_POST['j26_13']);
    $j26_14 = mysqli_real_escape_string($link, $_POST['j26_14']);
    $j26_15 = mysqli_real_escape_string($link, $_POST['j26_15']);
    $j26_16 = mysqli_real_escape_string($link, $_POST['j26_16']);
    $j26_17 = mysqli_real_escape_string($link, $_POST['j26_17']);
    
    $j27_11 = mysqli_real_escape_string($link, $_POST['j27_11']);
    $j27_12 = mysqli_real_escape_string($link, $_POST['j27_12']);
    $j27_13 = mysqli_real_escape_string($link, $_POST['j27_13']);
    $j27_14 = mysqli_real_escape_string($link, $_POST['j27_14']);
    $j27_15 = mysqli_real_escape_string($link, $_POST['j27_15']);
    $j27_16 = mysqli_real_escape_string($link, $_POST['j27_16']);
    $j27_17 = mysqli_real_escape_string($link, $_POST['j27_17']);
    
    $j28_11 = mysqli_real_escape_string($link, $_POST['j28_11']);
    $j28_12 = mysqli_real_escape_string($link, $_POST['j28_12']);
    $j28_13 = mysqli_real_escape_string($link, $_POST['j28_13']);
    $j28_14 = mysqli_real_escape_string($link, $_POST['j28_14']);
    $j28_15 = mysqli_real_escape_string($link, $_POST['j28_15']);
    $j28_16 = mysqli_real_escape_string($link, $_POST['j28_16']);
    $j28_17 = mysqli_real_escape_string($link, $_POST['j28_17']);
    

    $j29_11 = mysqli_real_escape_string($link, $_POST['j29_11']);
    $j29_12 = mysqli_real_escape_string($link, $_POST['j29_12']);
    $j29_13 = mysqli_real_escape_string($link, $_POST['j29_13']);
    $j29_14 = mysqli_real_escape_string($link, $_POST['j29_14']);
    $j29_15 = mysqli_real_escape_string($link, $_POST['j29_15']);
    $j29_16 = mysqli_real_escape_string($link, $_POST['j29_16']);
    $j29_17 = mysqli_real_escape_string($link, $_POST['j29_17']);
    
    $j30_11 = mysqli_real_escape_string($link, $_POST['j30_11']);
    $j30_12 = mysqli_real_escape_string($link, $_POST['j30_12']);
    $j30_13 = mysqli_real_escape_string($link, $_POST['j30_13']);
    $j30_14 = mysqli_real_escape_string($link, $_POST['j30_14']);
    $j30_15 = mysqli_real_escape_string($link, $_POST['j30_15']);
    $j30_16 = mysqli_real_escape_string($link, $_POST['j30_16']);
    $j30_17 = mysqli_real_escape_string($link, $_POST['j30_17']);
    
    $j31_11 = mysqli_real_escape_string($link, $_POST['j31_11']);
    $j31_12 = mysqli_real_escape_string($link, $_POST['j31_12']);
    $j31_13 = mysqli_real_escape_string($link, $_POST['j31_13']);
    $j31_14 = mysqli_real_escape_string($link, $_POST['j31_14']);
    $j31_15 = mysqli_real_escape_string($link, $_POST['j31_15']);
    $j31_16 = mysqli_real_escape_string($link, $_POST['j31_16']);
    $j31_17 = mysqli_real_escape_string($link, $_POST['j31_17']);
    
    $j32_11 = mysqli_real_escape_string($link, $_POST['j32_11']);
    $j32_12 = mysqli_real_escape_string($link, $_POST['j32_12']);
    $j32_13 = mysqli_real_escape_string($link, $_POST['j32_13']);
    $j32_14 = mysqli_real_escape_string($link, $_POST['j32_14']);
    $j32_15 = mysqli_real_escape_string($link, $_POST['j32_15']);
    $j32_16 = mysqli_real_escape_string($link, $_POST['j32_16']);
    $j32_17 = mysqli_real_escape_string($link, $_POST['j32_17']);
    
    
    $j33_11 = mysqli_real_escape_string($link, $_POST['j33_11']);
    $j33_12 = mysqli_real_escape_string($link, $_POST['j33_12']);
    $j33_13 = mysqli_real_escape_string($link, $_POST['j33_13']);
    $j33_14 = mysqli_real_escape_string($link, $_POST['j33_14']);
    $j33_15 = mysqli_real_escape_string($link, $_POST['j33_15']);
    $j33_16 = mysqli_real_escape_string($link, $_POST['j33_16']);
    $j33_17 = mysqli_real_escape_string($link, $_POST['j33_17']);
    
    $j34_11 = mysqli_real_escape_string($link, $_POST['j34_11']);
    $j34_12 = mysqli_real_escape_string($link, $_POST['j34_12']);
    $j34_13 = mysqli_real_escape_string($link, $_POST['j34_13']);
    $j34_14 = mysqli_real_escape_string($link, $_POST['j34_14']);
    $j34_15 = mysqli_real_escape_string($link, $_POST['j34_15']);
    $j34_16 = mysqli_real_escape_string($link, $_POST['j34_16']);
    $j34_17 = mysqli_real_escape_string($link, $_POST['j34_17']);
    
    $j35_11 = mysqli_real_escape_string($link, $_POST['j35_11']);
    $j35_12 = mysqli_real_escape_string($link, $_POST['j35_12']);
    $j35_13 = mysqli_real_escape_string($link, $_POST['j35_13']);
    $j35_14 = mysqli_real_escape_string($link, $_POST['j35_14']);
    $j35_15 = mysqli_real_escape_string($link, $_POST['j35_15']);
    $j35_16 = mysqli_real_escape_string($link, $_POST['j35_16']);
    $j35_17 = mysqli_real_escape_string($link, $_POST['j35_17']);
    
    $j36_11 = mysqli_real_escape_string($link, $_POST['j36_11']);
    $j36_12 = mysqli_real_escape_string($link, $_POST['j36_12']);
    $j36_13 = mysqli_real_escape_string($link, $_POST['j36_13']);
    $j36_14 = mysqli_real_escape_string($link, $_POST['j36_14']);
    $j36_15 = mysqli_real_escape_string($link, $_POST['j36_15']);
    $j36_16 = mysqli_real_escape_string($link, $_POST['j36_16']);
    $j36_17 = mysqli_real_escape_string($link, $_POST['j36_17']);
    
    $j37_11 = mysqli_real_escape_string($link, $_POST['j37_11']);
    $j37_12 = mysqli_real_escape_string($link, $_POST['j37_12']);
    $j37_13 = mysqli_real_escape_string($link, $_POST['j37_13']);
    $j37_14 = mysqli_real_escape_string($link, $_POST['j37_14']);
    $j37_15 = mysqli_real_escape_string($link, $_POST['j37_15']);
    $j37_16 = mysqli_real_escape_string($link, $_POST['j37_16']);
    $j37_17 = mysqli_real_escape_string($link, $_POST['j37_17']);
    
    $j38_11 = mysqli_real_escape_string($link, $_POST['j38_11']);
    $j38_12 = mysqli_real_escape_string($link, $_POST['j38_12']);
    $j38_13 = mysqli_real_escape_string($link, $_POST['j38_13']);
    $j38_14 = mysqli_real_escape_string($link, $_POST['j38_14']);
    $j38_15 = mysqli_real_escape_string($link, $_POST['j38_15']);
    $j38_16 = mysqli_real_escape_string($link, $_POST['j38_16']);
    $j38_17 = mysqli_real_escape_string($link, $_POST['j38_17']);
    
    $j39_11 = mysqli_real_escape_string($link, $_POST['j39_11']);
    $j39_12 = mysqli_real_escape_string($link, $_POST['j39_12']);
    $j39_13 = mysqli_real_escape_string($link, $_POST['j39_13']);
    $j39_14 = mysqli_real_escape_string($link, $_POST['j39_14']);
    $j39_15 = mysqli_real_escape_string($link, $_POST['j39_15']);
    $j39_16 = mysqli_real_escape_string($link, $_POST['j39_16']);
    $j39_17 = mysqli_real_escape_string($link, $_POST['j39_17']);
    
    
    $j40_11 = mysqli_real_escape_string($link, $_POST['j40_11']);
    $j40_12 = mysqli_real_escape_string($link, $_POST['j40_12']);
    $j40_13 = mysqli_real_escape_string($link, $_POST['j40_13']);
    $j40_14 = mysqli_real_escape_string($link, $_POST['j40_14']);
    $j40_15 = mysqli_real_escape_string($link, $_POST['j40_15']);
    $j40_16 = mysqli_real_escape_string($link, $_POST['j40_16']);
    $j40_17 = mysqli_real_escape_string($link, $_POST['j40_17']);
    
    
    $j41_11 = mysqli_real_escape_string($link, $_POST['j41_11']);
    $j41_12 = mysqli_real_escape_string($link, $_POST['j41_12']);
    $j41_13 = mysqli_real_escape_string($link, $_POST['j41_13']);
    $j41_14 = mysqli_real_escape_string($link, $_POST['j41_14']);
    $j41_15 = mysqli_real_escape_string($link, $_POST['j41_15']);
    $j41_16 = mysqli_real_escape_string($link, $_POST['j41_16']);
    $j41_17 = mysqli_real_escape_string($link, $_POST['j41_17']);
    
    
    $j42_11 = mysqli_real_escape_string($link, $_POST['j42_11']);
    $j42_12 = mysqli_real_escape_string($link, $_POST['j42_12']);
    $j42_13 = mysqli_real_escape_string($link, $_POST['j42_13']);
    $j42_14 = mysqli_real_escape_string($link, $_POST['j42_14']);
    $j42_15 = mysqli_real_escape_string($link, $_POST['j42_15']);
    $j42_16 = mysqli_real_escape_string($link, $_POST['j42_16']);
    $j42_17 = mysqli_real_escape_string($link, $_POST['j42_17']);
    
    $j43_11 = mysqli_real_escape_string($link, $_POST['j43_11']);
    $j43_12 = mysqli_real_escape_string($link, $_POST['j43_12']);
    $j43_13 = mysqli_real_escape_string($link, $_POST['j43_13']);
    $j43_14 = mysqli_real_escape_string($link, $_POST['j43_14']);
    $j43_15 = mysqli_real_escape_string($link, $_POST['j43_15']);
    $j43_16 = mysqli_real_escape_string($link, $_POST['j43_16']);
    $j43_17 = mysqli_real_escape_string($link, $_POST['j43_17']);
    
    $j44_11 = mysqli_real_escape_string($link, $_POST['j44_11']);
    $j44_12 = mysqli_real_escape_string($link, $_POST['j44_12']);
    $j44_13 = mysqli_real_escape_string($link, $_POST['j44_13']);
    $j44_14 = mysqli_real_escape_string($link, $_POST['j44_14']);
    $j44_15 = mysqli_real_escape_string($link, $_POST['j44_15']);
    $j44_16 = mysqli_real_escape_string($link, $_POST['j44_16']);
    $j44_17 = mysqli_real_escape_string($link, $_POST['j44_17']);
    
    $j45_11 = mysqli_real_escape_string($link, $_POST['j45_11']);
    $j45_12 = mysqli_real_escape_string($link, $_POST['j45_12']);
    $j45_13 = mysqli_real_escape_string($link, $_POST['j45_13']);
    $j45_14 = mysqli_real_escape_string($link, $_POST['j45_14']);
    $j45_15 = mysqli_real_escape_string($link, $_POST['j45_15']);
    $j45_16 = mysqli_real_escape_string($link, $_POST['j45_16']);
    $j45_17 = mysqli_real_escape_string($link, $_POST['j45_17']);
    

    $j46_11 = mysqli_real_escape_string($link, $_POST['j46_11']);
    $j46_12 = mysqli_real_escape_string($link, $_POST['j46_12']);
    $j46_13 = mysqli_real_escape_string($link, $_POST['j46_13']);
    $j46_14 = mysqli_real_escape_string($link, $_POST['j46_14']);
    $j46_15 = mysqli_real_escape_string($link, $_POST['j46_15']);
    $j46_16 = mysqli_real_escape_string($link, $_POST['j46_16']);
    $j46_17 = mysqli_real_escape_string($link, $_POST['j46_17']);
    

    $j47_11 = mysqli_real_escape_string($link, $_POST['j47_11']);
    $j47_12 = mysqli_real_escape_string($link, $_POST['j47_12']);
    $j47_13 = mysqli_real_escape_string($link, $_POST['j47_13']);
    $j47_14 = mysqli_real_escape_string($link, $_POST['j47_14']);
    $j47_15 = mysqli_real_escape_string($link, $_POST['j47_15']);
    $j47_16 = mysqli_real_escape_string($link, $_POST['j47_16']);
    $j47_17 = mysqli_real_escape_string($link, $_POST['j47_17']);
    

    $j48_11 = mysqli_real_escape_string($link, $_POST['j48_11']);
    $j48_12 = mysqli_real_escape_string($link, $_POST['j48_12']);
    $j48_13 = mysqli_real_escape_string($link, $_POST['j48_13']);
    $j48_14 = mysqli_real_escape_string($link, $_POST['j48_14']);
    $j48_15 = mysqli_real_escape_string($link, $_POST['j48_15']);
    $j48_16 = mysqli_real_escape_string($link, $_POST['j48_16']);
    $j48_17 = mysqli_real_escape_string($link, $_POST['j48_17']);
    
    $j49_11 = mysqli_real_escape_string($link, $_POST['j49_11']);
    $j49_12 = mysqli_real_escape_string($link, $_POST['j49_12']);
    $j49_13 = mysqli_real_escape_string($link, $_POST['j49_13']);
    $j49_14 = mysqli_real_escape_string($link, $_POST['j49_14']);
    $j49_15 = mysqli_real_escape_string($link, $_POST['j49_15']);
    $j49_16 = mysqli_real_escape_string($link, $_POST['j49_16']);
    $j49_17 = mysqli_real_escape_string($link, $_POST['j49_17']);
    
    $j50_11 = mysqli_real_escape_string($link, $_POST['j50_11']);
    $j50_12 = mysqli_real_escape_string($link, $_POST['j50_12']);
    $j50_13 = mysqli_real_escape_string($link, $_POST['j50_13']);
    $j50_14 = mysqli_real_escape_string($link, $_POST['j50_14']);
    $j50_15 = mysqli_real_escape_string($link, $_POST['j50_15']);
    $j50_16 = mysqli_real_escape_string($link, $_POST['j50_16']);
    $j50_17 = mysqli_real_escape_string($link, $_POST['j50_17']); */
        
    
    
    
    
  $sql = "insert into jadd values( '$j1_11', '$j1_12', '$j1_13', '$j1_14', '$j1_15', 
                                   '$j2_11', '$j2_12', '$j2_13', '$j2_14', '$j2_15',
                                  '$j3_11', '$j3_12', '$j3_13', '$j3_14', '$j3_15', 
                                  '$j4_11', '$j4_12', '$j4_13', '$j4_14', '$j4_15', 
                                  '$j5_11', '$j5_12', '$j5_13', '$j5_14', '$j5_15', 
                                  '$j6_11', '$j6_12', '$j6_13', '$j6_14', '$j6_15', 
                                  '$j7_11', '$j7_12', '$j7_13', '$j7_14', '$j7_15', 
                                  '$j8_11', '$j8_12', '$j8_13', '$j8_14', '$j8_15', 
                                  '$j9_11', '$j9_12', '$j9_13', '$j9_14', '$j9_15', 
                                  '$j10_11', '$j10_12', '$j10_13', '$j10_14', '$j10_15', 
                                  '$j11_11', '$j11_12', '$j11_13', '$j11_14', '$j11_15', 
                                  '$j12_11', '$j12_12', '$j12_13', '$j12_14', '$j12_15', 
                                  '$j13_11', '$j13_12', '$j13_13', '$j13_14', '$j13_15', 
                                  '$j14_11', '$j14_12', '$j14_13', '$j14_14', '$j14_15', 
                                  '$j15_11', '$j15_12', '$j15_13', '$j15_14', '$j15_15', 
                                  '$j16_11', '$j16_12', '$j16_13', '$j16_14', '$j16_15', 
                                  '$j17_11', '$j17_12', '$j17_13', '$j17_14', '$j17_15', 
                                  '$j18_11', '$j18_12', '$j18_13', '$j18_14', '$j18_15', 
                                   '$j19_11', '$j19_12', '$j19_13', '$j19_14', '$j19_15', 
                                  '$j20_11', '$j20_12', '$j20_13', '$j20_14', '$j20_15', 
                                  '$j21_11', '$j21_12', '$j21_13', '$j21_14', '$j21_15', 
                                  '$j22_11', '$j22_12', '$j22_13', '$j22_14', '$j22_15', 
                                  '$j23_11', '$j23_12', '$j23_13', '$j23_14', '$j23_15', 
                                  '$j24_11', '$j24_12', '$j24_13', '$j24_14', '$j24_15', 
                                  '$j25_11', '$j25_12', '$j25_13', '$j25_14', '$j25_15', 
                                  '$email' )";

     if(mysqli_query($link, $sql)){

    $xx="Additional journals added successfully. ";         $_SESSION['msg']=$xx;  $newURL="home.php"; header('Location: '.$newURL); ?>  
<?php
    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
   
    
      mysqli_close($link);
    ?>
