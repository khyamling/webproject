<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
$user_home = new USER();
//$br=$_SESSION['br'];
//$pos=$_SESSION['pos'];
$aid=$_SESSION['userSession'] ;

$vapn=$_POST["viewsrc"]; 
$_SESSION['scrappn'] =$vapn;

if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}

?>
<html>

<body>
<input type="hidden" name="UID" value="<?php echo $UID; ?>" readonly/>
<input type="text" name="nappn" value="<?php echo $vapn;?> " readonly/>
</body>
</html> <?php

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        

    }
    

  //$nappn=$_POST['nappn'];
     // $name=$_POST['name'];
    // $scrcredit=$_POST['scrcredit'];




    // close connection
$sappn=$vapn;
echo $sappn;
$pp = substr($sappn, 2, 1);
$pp = substr($sappn, 2, 1);
$_SESSION['pp1']=$pp;
echo "\n pp: ".$pp;
if($pp=="1")
{
    $pp1=$pp;
    $pp="/scrform.php";
    $ppx="1";
}
else if($pp=="2")
{
    $pp1=$pp;
    $pp="/scrform2.php";
    
}
else if($pp=="3" )
{
    $pp1=$pp;
    $pp="/scrform3.php";
}

else
{
    
    $pp="adminsrc1.php";
}  
  
    $str = str_replace(' ','',$sappn);
    
    $gpath="/opt/lampp/htdocs/web/125323scrform1564621621655/$str".".pdf";
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
  
$abc="Y";
$xx="0";
$sql1="insert into scrform values('$sappn','$abc')";
echo $sql1;
    if(mysqli_query($link,$sql1))
     {
$srtgn="Application submitted successfully";
 $xx= $sappn.$srtgn.mysqli_error($link);
     }
  
    $_SESSION['msg']=$xx;
     //$_SESSION['msg1']=$xx1;
    // $_SESSION['msg2']=$yy;
echo $xx;
//echo $yy;

$url="adminsrc1.php";
 mysqli_close($link);
header("Location: $url");
    
?>


