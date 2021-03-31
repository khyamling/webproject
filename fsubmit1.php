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

$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

//$sappn=$_SESSION['gappn'];
 //$_SESSION['gappn']=$sappn;

$sappn="AP4EEE74";
 $_SESSION['gappn']=$sappn;
 
echo $sappn;
//$_SESSION['vappn']=$sppn;

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$kap=N;
$sql="SELECT * FROM postapplied WHERE status!='$kap'";
$result_set=mysqli_query($link,$sql);
 while($row=$result_set->fetch_array())
{
$UID =$row['email'];
$_SESSION['Mid']=$UID;
$sappn=$row['appid'] ;
$_SESSION['gappn']=$sappn;
   
$pp = substr($sappn, 2, 1);
$_SESSION['pp1']=$pp;
//echo $pp;
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

}
     
?>
