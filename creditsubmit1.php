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
$vapn=$_POST["nappn"]; 
$_SESSION['scrappn'] =$vapn;


if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}



 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        

    }
    

  $nappn=$_POST['nappn'];
      $name=$_POST['name'];
     $scrcredit=$_POST['scrcredit'];
      $eligible=$_POST['eligible'];
    $remark=$_POST['remark'];
//  $UID=$_POST['UID'];
$UID=$_SESSION['Aemail'];
?>
<input type="hidden" name="UID" value="   <?php echo $UID; ?> " readonly/>
<input type="hidden" name="nappn" value="   <?php echo $vapn; ?> " readonly/>
 <?php
    $usercredit = mysqli_real_escape_string($link, $_POST['usercredit']);
    $loneproj = mysqli_real_escape_string($link, $_POST['loneprojscr']);
     $teamproj = mysqli_real_escape_string($link, $_POST['teamprojscr']);
     $coproj = mysqli_real_escape_string($link, $_POST['coprojscr']);
     $patgrant = mysqli_real_escape_string($link, $_POST['patgrantscr']);
     $consult = mysqli_real_escape_string($link, $_POST['consultscr']);
     
     //Doctorates Guided
     $loneguide = mysqli_real_escape_string($link, $_POST['loneguidescr']);
     $headguide = mysqli_real_escape_string($link, $_POST['headguidescr']);
     $coguide = mysqli_real_escape_string($link, $_POST['coguidescr']);
     $coguide2 = mysqli_real_escape_string($link, $_POST['coguide2scr']);
     $coguide3 = mysqli_real_escape_string($link, $_POST['coguide3scr']);
     $coguide4 = mysqli_real_escape_string($link, $_POST['coguide4scr']);
     $coguide5 = mysqli_real_escape_string($link, $_POST['coguide5scr']);
     
     //Journal papers in SCI/SCI-E/SSCI/Scopus 
     $jsing = mysqli_real_escape_string($link, $_POST['jsingscr']);
     $jmain = mysqli_real_escape_string($link, $_POST['jmainscr']);
     $jother = mysqli_real_escape_string($link, $_POST['jotherscr']);
     $jother2 = mysqli_real_escape_string($link, $_POST['jother2scr']);
     $jother3 = mysqli_real_escape_string($link, $_POST['jother3scr']);
     $jother4 = mysqli_real_escape_string($link, $_POST['jother4scr']);
     $jother5 = mysqli_real_escape_string($link, $_POST['jother5scr']);
     
     //One Conference paper indexed in SCI/Scopus/Web of science Conference
     $csing = mysqli_real_escape_string($link, $_POST['csingscr']);
     $cmain = mysqli_real_escape_string($link, $_POST['cmainscr']);
     $cother = mysqli_real_escape_string($link, $_POST['cotherscr']);
     $cother2 = mysqli_real_escape_string($link, $_POST['cother2scr']);
     $cother3 = mysqli_real_escape_string($link, $_POST['cother3scr']);
     $cother4 = mysqli_real_escape_string($link, $_POST['cother4scr']);
     $cother5 = mysqli_real_escape_string($link, $_POST['cother5scr']);
     $cother6 = mysqli_real_escape_string($link, $_POST['cother6scr']);
     $cother7 = mysqli_real_escape_string($link, $_POST['cother7scr']);
     $cother8 = mysqli_real_escape_string($link, $_POST['cother8scr']);
     
     $sixadmin1 = mysqli_real_escape_string($link, $_POST['sixadmin1scr']);
     $sixadmin2 = mysqli_real_escape_string($link, $_POST['sixadmin2scr']);
     $sixadmin3 = mysqli_real_escape_string($link, $_POST['sixadmin3scr']);
     $sixadmin4 = mysqli_real_escape_string($link, $_POST['sixadmin4scr']);
     $sixadmin5 = mysqli_real_escape_string($link, $_POST['sixadmin5scr']);
     $sixadmin6 = mysqli_real_escape_string($link, $_POST['sixadmin6scr']);
     $sixadmin7 = mysqli_real_escape_string($link, $_POST['sixadmin7scr']);
     $sixadmin8 = mysqli_real_escape_string($link, $_POST['sixadmin8scr']);
     
     $sevenadminothers1 = mysqli_real_escape_string($link, $_POST['sevenadminothers1scr']);
     $sevenadminothers2 = mysqli_real_escape_string($link, $_POST['sevenadminothers2scr']);
     $sevenadminothers3 = mysqli_real_escape_string($link, $_POST['sevenadminothers3scr']);
     $sevenadminothers4 = mysqli_real_escape_string($link, $_POST['sevenadminothers4scr']);
     $sevenadminothers5 = mysqli_real_escape_string($link, $_POST['sevenadminothers5scr']);
     $sevenadminothers6 = mysqli_real_escape_string($link, $_POST['sevenadminothers6scr']);
     $sevenadminothers7 = mysqli_real_escape_string($link, $_POST['sevenadminothers7scr']);
     $sevenadminothers8 = mysqli_real_escape_string($link, $_POST['sevenadminothers8scr']);
     $sevenadminothers9 = mysqli_real_escape_string($link, $_POST['sevenadminothers9scr']);
     $sevenadminothers10 = mysqli_real_escape_string($link, $_POST['sevenadminothers10scr']);
     
     $eightadminresp1 = mysqli_real_escape_string($link, $_POST['eightadminresp1scr']);
     $eightadminresp2 = mysqli_real_escape_string($link, $_POST['eightadminresp2scr']);
     $eightadminresp3 = mysqli_real_escape_string($link, $_POST['eightadminresp3scr']);
     
     $nineadminresp1 = mysqli_real_escape_string($link, $_POST['nineadminresp1scr']);
     $nineadminresp2 = mysqli_real_escape_string($link, $_POST['nineadminresp2scr']);
     
     $workshop = mysqli_real_escape_string($link, $_POST['workshopscr']);
     
     $gian1 = mysqli_real_escape_string($link, $_POST['gian1scr']);
     $gian2 = mysqli_real_escape_string($link, $_POST['gian2scr']);
   //  $gian3 = mysqli_real_escape_string($link, $_POST['gian3scr']);
  //   $gian4 = mysqli_real_escape_string($link, $_POST['gian4scr']);
     $national = mysqli_real_escape_string($link, $_POST['nationalscr']);
     $teachexp = mysqli_real_escape_string($link, $_POST['teachexpscr']);
     $eslab = mysqli_real_escape_string($link, $_POST['eslabscr']);
     $teach = mysqli_real_escape_string($link, $_POST['teachscr']);
     $pg = mysqli_real_escape_string($link, $_POST['pgscr']);
     $ug = mysqli_real_escape_string($link, $_POST['ugscr']);
     $book = mysqli_real_escape_string($link, $_POST['bookscr']);
     $chapter = mysqli_real_escape_string($link, $_POST['chapterscr']);
     $outreach = mysqli_real_escape_string($link, $_POST['outreachscr']);
     $ina=mysqli_real_escape_string($link, $_POST['inascr']);
     $placement1 = mysqli_real_escape_string($link, $_POST['placement1scr']);  
     $placement2 = mysqli_real_escape_string($link, $_POST['placement2scr']);    
     
    $status1="N";
     
     $sql  = "SELECT * FROM  newrules1src WHERE appn='$vapn' ";
     $result =  mysqli_query($link, $sql);
     $num_rows = mysqli_num_rows($result);
    //echo $num_rows;
if($num_rows > 0)
{
    $sql="UPDATE newrules1src  SET name='$name', loneproj='$loneproj', teamproj='$teamproj', coproj='$coproj', patgrant='$patgrant', consult='$consult', loneguide='$loneguide',
                                    headguide='$headguide', coguide='$coguide', coguide2='$coguide2', coguide3='$coguide3', coguide4='$coguide4', coguide5='$coguide5',
                                     jsing='$jsing', jmain='$jmain',jother='$jother',  jother2='$jother2', jother3='$jother3',  jother4='$jother4',  jother5='$jother5', 
                                     csing='$csing', cmain='$cmain', cother='$cother', cother2='$cother2',  cother3='$cother3', cother4='$cother4', cother5='$cother5', cother6='$cother6', 
                                     cother7='$cother7', cother8='$cother8', 
                                     sixadmin1='$sixadmin1', sixadmin2='$sixadmin2', sixadmin3='$sixadmin3', sixadmin4='$sixadmin4', sixadmin5='$sixadmin5',   
                                     sixadmin6='$sixadmin6', sixadmin7='$sixadmin7', sixadmin8='$sixadmin8',                                        
                                     sevenadminothers1='$sevenadminothers1', sevenadminothers2='$sevenadminothers2', sevenadminothers3='$sevenadminothers3', 
                                      sevenadminothers4='$sevenadminothers4', sevenadminothers5='$sevenadminothers5', 
                                    sevenadminothers6='$sevenadminothers6', sevenadminothers7='$sevenadminothers7', sevenadminothers8='$sevenadminothers8', 
                                    sevenadminothers9='$sevenadminothers9', sevenadminothers10='$sevenadminothers10',     
                                    eightadminresp1='$eightadminresp1', eightadminresp2='$eightadminresp2', eightadminresp3='$eightadminresp3', 
                                     nineadminresp1='$nineadminresp1', nineadminresp2='$nineadminresp2',
                                     workshop='$workshop', gian1='$gian1', gian2='$gian2', national='$national', teachexp='$teachexp', eslab='$eslab', 
                                     teach='$teach', pg='$pg', ug='$ug', book='$book', chapter='$chapter', outreach='$outreach', ina='$ina', placement1='$placement1', placement2='$placement2', status='$status1' WHERE appn='$nappn'";
mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated";
 }

else{
echo "fail" .mysqli_error($link); echo $sql;}

}

else
{    
$sql = "insert into newrules1src values('$name', '$loneproj', '$teamproj', '$coproj', '$patgrant', '$consult', '$loneguide',
                                     '$headguide', '$coguide', '$coguide2', '$coguide3', '$coguide4', '$coguide5',
                                     '$jsing','$jmain','$jother', '$jother2', '$jother3', '$jother4', '$jother5',
                                     '$csing', '$cmain', '$cother', '$cother2',  '$cother3',  '$cother4',  '$cother5',  '$cother6',  '$cother7', '$cother8', 
                                     '$sixadmin1', '$sixadmin2', '$sixadmin3', '$sixadmin4', '$sixadmin5',   
                                     '$sixadmin6', '$sixadmin7', '$sixadmin8',                                        
                                     '$sevenadminothers1', '$sevenadminothers2', '$sevenadminothers3', '$sevenadminothers4', '$sevenadminothers5', 
                                     '$sevenadminothers6', '$sevenadminothers7', '$sevenadminothers8', '$sevenadminothers9', '$sevenadminothers10',     
                                     '$eightadminresp1', '$eightadminresp2', '$eightadminresp3', 
                                     '$nineadminresp1', '$nineadminresp2',
                                     '$workshop', '$gian1', '$gian2', '$national', '$teachexp', '$eslab', 
                                     '$teach', '$pg', '$ug', '$book', '$chapter', '$outreach', '$ina', '$placement1', '$placement2', '$nappn', '$UID','$status1')";   

 
     if(mysqli_query($link, $sql)){

          ?>  <!-- <font size="5"  face="Comic sans MS"  color="red"> Records added successfully. </font> -->
<?php
    } else{

         echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}


$sql  = "SELECT * FROM  vcrediteq1 WHERE appn='$vapn' ";
$result =  mysqli_query($link, $sql);
$num_row = mysqli_num_rows($result);
if($num_row > 0)
{
 $sql="UPDATE vcrediteq1  SET credit1='$scrcredit' WHERE appn='$nappn'";
 
 mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated1222";
}
else{
echo "fail" .mysqli_error($link);}
}
else
{    
$sql = "insert into vcrediteq1 values('$scrcredit', '$nappn', '$UID')"; 
if(mysqli_query($link, $sql)){
  //echo "inserted";  
}
else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
}


$sql  = "SELECT * FROM  remarkeli WHERE appn='$vapn' ";
$result =  mysqli_query($link, $sql);
$num_row = mysqli_num_rows($result);
if($num_row > 0)
{
 $sql="UPDATE remarkeli  SET eligible='$eligible', remark='$remark' WHERE appn='$vapn'";
 //echo $sql;
 mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated1222";
}
else{
echo "fail" .mysqli_error($link);}
}
else
{    
$sql = "insert into remarkeli values('$eligible', '$remark', '$nappn', '$UID')"; 
if(mysqli_query($link, $sql)){
  //echo "inserted";  
}
else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
}




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
    $pp="/scrv11.php";
    $pp3="/scrform.php";
    $ppx="1";
}
else if($pp=="2")
{
    $pp1=$pp;
    $pp="/scrv12.php";
    $pp3="/scrform2.php";
    
}
else if($pp=="3" )
{
    $pp1=$pp;
    $pp="/scrv13.php";
    $pp3="/scrform3.php";
}

else
{
    
    $pp="adminsrc.php";
}  
  
    $str = str_replace(' ','',$sappn);
    
    $gpath="/opt/lampp/htdocs/web/verifiedcredits/$str".".pdf";

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
$sql1="UPDATE newrules1src  SET status='$abc' WHERE appn='$sappn'";
//echo $sql1;
mysqli_query($link,$sql1);
    if(mysqli_query($link,$sql))
     {
$srtgn="Application submitted successfully";
 $xx= $sappn.$srtgn.mysqli_error($link);
     }
  
    $_SESSION['msg']=$xx;
     //$_SESSION['msg1']=$xx1;
    // $_SESSION['msg2']=$yy;
echo $xx;
//echo $yy;

$str = str_replace(' ','',$sappn);
    
    $gpath1="/opt/lampp/htdocs/web/125323scrform1564621621655/$str".".pdf";
    ob_start();
    include(dirname(__FILE__).$pp3);
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
       $html2pdf->Output("$gpath1",'F');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
  
$abc="Y";
$xx="0";

$sql  = "SELECT * FROM  scrform WHERE appn='$vapn' ";
$result =  mysqli_query($link, $sql);
$num_row = mysqli_num_rows($result);
if($num_row > 0)
{
 $sql="UPDATE scrform  SET appn='$sappn', status='$abc' WHERE appn='$sappn'";
 //echo $sql;
 mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated1222";
}
else{
echo "fail" .mysqli_error($link);}
}
else
{    
$sql="insert into scrform values('$sappn','$abc')";
if(mysqli_query($link, $sql)){
$srtgn="Application submitted successfully";
 $xx1= $sappn.$srtgn.mysqli_error($link);
  //echo "inserted";  
}
else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
}

//$sql1="insert into scrform values('$sappn','$abc')";
//echo $sql1;
  //  if(mysqli_query($link,$sql1))
   //  {
//$srtgn="Application submitted successfully";
// $xx1= $sappn.$srtgn.mysqli_error($link);
  //   }
  
    $_SESSION['msg']=$xx;
     //$_SESSION['msg1']=$xx1;
    // $_SESSION['msg2']=$yy;
//echo $xx1;
//echo $yy;
unset ($_SESSION["Aemail"]);
$url="adminsrc.php";
 mysqli_close($link);
header("Location: $url");

?>


