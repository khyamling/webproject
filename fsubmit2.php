<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'dbconfig.php';
session_start();
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
$UID ="regupathi@nitk.edu.in";
$_SESSION['Mid']=$UID;
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

//$sappn=$_SESSION['gappn'];
 //$_SESSION['gappn']=$sappn;

$sappn="AP4CHE78";
 $_SESSION['gappn']=$sappn;
 
echo $sappn;
//$_SESSION['vappn']=$sppn;

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   
     $sql  = "SELECT * FROM  crediteq1 WHERE appn='$sappn'";
   $exp4 =  mysqli_query($link, $sql);
   $rowexp1=$exp4->fetch_array();
   $ppp=$rowexp1['credit1'];
$pp = substr($sappn, 2, 1);
$_SESSION['pp1']=$pp;
echo $pp;
$ppx=0;
if($pp=="1")
{
    $pp1=$pp;
    $pp="/v11.php";
    $ppx="1";
}
else if($pp=="2")
{
    $pp1=$pp;
    $pp="/v12.php";
    
}
else if($pp=="3" )
{
    $pp1=$pp;
    $pp="/v13.php";
}
else if($pp=="4")
{
    $pp1=$pp;
    $pp="/v411.php";
}
else if($pp=="5")
{
    $pp1=$pp;
    $pp="/v511.php";
}
else if($pp=="6")
{
    $pp1=$pp;
    $pp="/v611.php";
}
else
{
    
    $pp="post.php";
}  
  
    
$sql  = "SELECT * FROM  profex WHERE appn='$sappn'";
$exp3 =  mysqli_query($link, $sql);
$rowexp=$exp3->fetch_array();
   


if($ppx=="1")
{

$rowexp['nexpg']=$pp;
$rowexp['nexpg1']=$pp;
$rowexp['nexphd']=$pp;
$rowexp['nexph1']=$pp;
$rowexp['nexap']=$pp;
$rowexp['nexap1']=$pp; 

}
//$xx1=$ppp;
$exp=$rowexp['nexpg']+$rowexp['nexphd'];


// ($rowexp['nexpg']!="" || $rowexp['nexpg1']!="" ||$rowexp['nexphd']!="" ||$rowexp['nexph1']!="" ||$rowexp['nexap']!="" ||$rowexp['nexap1']!="") &&
//if(($pp1=="2"&& $ppp>="10" && $rowexp['nexphd']>="1" )||($pp1=="3"&&$ppp>="20"&&($rowexp['nexphd']>="3"||$exp>="6"))||($pp1=="4"&&$ppp>="50" &&($rowexp['nexphd']>="6"||$exp>="9")) ||( $pp1=="5" && $ppp>="80"&&($rowexp['nexphd']>="10"||$exp>="13"))||
//if($pp1=="6"&&$ppp>="150" && $rowexp['nexap']>=6)
//{

$sql  = "SELECT * FROM  upload WHERE email='$UID'";
        
$result3 =  mysqli_query($link, $sql);
   $row3=$result3->fetch_array();
    $imgpath=$row3['up1'];
 //  echo $imgpath;
   $imgpath1=$row3['up2'];
    $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $ddtt= $date->format('d-m-Y H:i:s a');
 
     $sql="update postapplied set status='$ddtt' where email='$UID' and appid='$sappn'";
 //  if($imgpath!="" && $imgpath1!=""){
       
      if(mysqli_query($link, $sql)) {

     $xx= $sappn."Application submitted successfully".mysqli_error($link);
   //  $xx1=$rowexp1[credit1]."credit earned";
    }
    else{
$xx=  $sappn." Application  not submitted Try again".mysqli_error($link);
    }
    
    $gpath="/opt/lampp/htdocs/web/khybheeappalingam819ew/A_$sappn".".pdf";

    ob_start();
    include(dirname(__FILE__).$pp);
    $content = ob_get_clean();
//SetFont('dejavusans', '', 10);
    // convert to PDF
    require_once(dirname(__FILE__).'/html2pdf-4.5.1/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont();
        $html2pdf->setTestTdInOnePage(false);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
       $html2pdf->Output("$gpath",'F');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
  
  // }
  // else
  // {
       //$xx="Photo and Signature has not been uploaded. Please upload photo and signature to submit the application ";

  //}
//}
//else
//{
  //  $xx=$sappn."Application incomplete. Check credit point and enter the Relevant Experience ";
    //$xx1=$ppp;

//$yy=":".$rowexp['nexphd'].":".$rowexp['nexpg'].":".$rowexp['nexpg1'].":".$rowexp['nexphd'].":".$rowexp['nexph1'].
//$yy=":".$rowexp['nexap'].":".$rowexp['nexap1'].":".$ppp.":".$pp; 



//}
    $_SESSION['msg']=$xx;
     //$_SESSION['msg1']=$xx1;
    $_SESSION['msg2']=$yy;
echo $xx;
//echo $xx1;
echo $yy;
$url="home.php";

header("Location: $url");
    
?>
