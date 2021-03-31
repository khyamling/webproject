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

$sql="UPDATE jadd  SET  j1_11='$j1_11', j1_12='$j1_12', j1_13='$j1_13', j1_14='$j1_14', j1_15='$j1_15',
j2_11='$j2_11', j2_12='$j2_12', j2_13='$j2_13', j2_14='$j2_14', j2_15='$j2_15', 
j3_11='$j3_11', j3_12='$j3_12', j3_13='$j3_13', j3_14='$j3_14', j3_15='$j3_15', 
j4_11='$j4_11', j4_12='$j4_12', j4_13='$j4_13', j4_14='$j4_14', j4_15='$j4_15', 
j5_11='$j5_11', j5_12='$j5_12', j5_13='$j5_13', j5_14='$j5_14', j5_15='$j5_15', 
j6_11='$j6_11', j6_12='$j6_12', j6_13='$j6_13', j6_14='$j6_14', j6_15='$j6_15', 
j7_11='$j7_11', j7_12='$j7_12', j7_13='$j7_13', j7_14='$j7_14', j7_15='$j7_15', 
j8_11='$j8_11', j8_12='$j8_12', j8_13='$j8_13', j8_14='$j8_14', j8_15='$j8_15', 
j9_11='$j9_11', j9_12='$j9_12', j9_13='$j9_13', j9_14='$j9_14', j9_15='$j9_15', 
j10_11='$j10_11', j10_12='$j10_12', j10_13='$j10_13', j10_14='$j10_14', j10_15='$j10_15', 
j11_11='$j11_11', j11_12='$j11_12', j11_13='$j11_13', j11_14='$j11_14', j11_15='$j11_15',  
j12_11='$j12_11', j12_12='$j12_12', j12_13='$j12_13', j12_14='$j12_14', j12_15='$j12_15', 
j13_11='$j13_11', j13_12='$j13_12', j13_13='$j13_13', j13_14='$j13_14', j13_15='$j13_15', 
j14_11='$j14_11', j14_12='$j14_12', j14_13='$j14_13', j14_14='$j14_14', j14_15='$j14_15', 
j15_11='$j15_11', j15_12='$j15_12', j15_13='$j15_13', j15_14='$j15_14', j15_15='$j15_15', 
j16_11='$j16_11', j16_12='$j16_12', j16_13='$j16_13', j16_14='$j16_14', j16_15='$j16_15',  
j17_11='$j17_11', j17_12='$j17_12', j17_13='$j17_13', j17_14='$j17_14', j17_15='$j17_15', 
j18_11='$j18_11', j18_12='$j18_12', j18_13='$j18_13', j18_14='$j18_14', j18_15='$j18_15', 
j19_11='$j19_11', j19_12='$j19_12', j19_13='$j19_13', j19_14='$j19_14', j19_15='$j19_15', 
j20_11='$j20_11', j20_12='$j20_12', j20_13='$j20_13', j20_14='$j20_14', j20_15='$j20_15', 
j21_11='$j21_11', j21_12='$j21_12', j21_13='$j21_13', j21_14='$j21_14', j21_15='$j21_15', 
j22_11='$j22_11', j22_12='$j22_12', j22_13='$j22_13', j22_14='$j22_14', j22_15='$j22_15', 
j23_11='$j23_11', j23_12='$j23_12', j23_13='$j23_13', j23_14='$j23_14', j23_15='$j23_15',  
j24_11='$j24_11', j24_12='$j24_12', j24_13='$j24_13', j24_14='$j24_14', j24_15='$j24_15', 
j25_11='$j25_11', j25_12='$j25_12', j25_13='$j25_13', j25_14='$j25_14', j25_15='$j25_15'
WHERE email='$UID'";

  if(mysqli_query($link, $sql)){

    $xx="Additional journals added successfully. ";        
//echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);
   $_SESSION['msg']=$xx;  $newURL="home.php"; header('Location: '.$newURL); ?>  
<?php
    } else{

    $xx="Error in adding Additional journals !!";  echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);// $newURL="home.php"; header('Location: '.$newURL); 

    }
    
   
    
      mysqli_close($link);
    ?>
