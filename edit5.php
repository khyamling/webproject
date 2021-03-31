<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$vapn=$_SESSION['vappn'];
$user_home = new USER();
$addv=$_SESSION['addv'];

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
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    
      $nappn=$_POST['nappn'];
     $name=$_POST['name'];
     $dept=$_POST['dept'];
     $Inst=$_POST['Inst'];

     $loneproj = mysqli_real_escape_string($link, $_POST['loneproj']);
     $teamproj = mysqli_real_escape_string($link, $_POST['teamproj']);
     $coproj = mysqli_real_escape_string($link, $_POST['coproj']);
     $patgrant = mysqli_real_escape_string($link, $_POST['patgrant']);
     $consult = mysqli_real_escape_string($link, $_POST['consult']);
     
     //Doctorates Guided
     $loneguide = mysqli_real_escape_string($link, $_POST['loneguide']);
     $headguide = mysqli_real_escape_string($link, $_POST['headguide']);
     $coguide = mysqli_real_escape_string($link, $_POST['coguide']);
     $coguide2 = mysqli_real_escape_string($link, $_POST['coguide2']);
     $coguide3 = mysqli_real_escape_string($link, $_POST['coguide3']);
     $coguide4 = mysqli_real_escape_string($link, $_POST['coguide4']);
     $coguide5 = mysqli_real_escape_string($link, $_POST['coguide5']);
     
     //Journal papers in SCI/SCI-E/SSCI/Scopus 
     $jsing = mysqli_real_escape_string($link, $_POST['jsing']);
     $jmain = mysqli_real_escape_string($link, $_POST['jmain']);
     $jother = mysqli_real_escape_string($link, $_POST['jother']);
     $jother2 = mysqli_real_escape_string($link, $_POST['jother2']);
     $jother3 = mysqli_real_escape_string($link, $_POST['jother3']);
     $jother4 = mysqli_real_escape_string($link, $_POST['jother4']);
     $jother5 = mysqli_real_escape_string($link, $_POST['jother5']);
     
     //One Conference paper indexed in SCI/Scopus/Web of science Conference
     $csing = mysqli_real_escape_string($link, $_POST['csing']);
     $cmain = mysqli_real_escape_string($link, $_POST['cmain']);
     $cother = mysqli_real_escape_string($link, $_POST['cother']);
     $cother2 = mysqli_real_escape_string($link, $_POST['cother2']);
     $cother3 = mysqli_real_escape_string($link, $_POST['cother3']);
     $cother4 = mysqli_real_escape_string($link, $_POST['cother4']);
     $cother5 = mysqli_real_escape_string($link, $_POST['cother5']);
     $cother6 = mysqli_real_escape_string($link, $_POST['cother6']);
     $cother7 = mysqli_real_escape_string($link, $_POST['cother7']);
     $cother8 = mysqli_real_escape_string($link, $_POST['cother8']);
     
     $sixadmin1 = mysqli_real_escape_string($link, $_POST['sixadmin1']);
     $sixadmin2 = mysqli_real_escape_string($link, $_POST['sixadmin2']);
     $sixadmin3 = mysqli_real_escape_string($link, $_POST['sixadmin3']);
     $sixadmin4 = mysqli_real_escape_string($link, $_POST['sixadmin4']);
     $sixadmin5 = mysqli_real_escape_string($link, $_POST['sixadmin5']);
     $sixadmin6 = mysqli_real_escape_string($link, $_POST['sixadmin6']);
     $sixadmin7 = mysqli_real_escape_string($link, $_POST['sixadmin7']);
     $sixadmin8 = mysqli_real_escape_string($link, $_POST['sixadmin8']);
     
     $sevenadminothers1 = mysqli_real_escape_string($link, $_POST['sevenadminothers1']);
     $sevenadminothers2 = mysqli_real_escape_string($link, $_POST['sevenadminothers2']);
     $sevenadminothers3 = mysqli_real_escape_string($link, $_POST['sevenadminothers3']);
     $sevenadminothers4 = mysqli_real_escape_string($link, $_POST['sevenadminothers4']);
     $sevenadminothers5 = mysqli_real_escape_string($link, $_POST['sevenadminothers5']);
     $sevenadminothers6 = mysqli_real_escape_string($link, $_POST['sevenadminothers6']);
     $sevenadminothers7 = mysqli_real_escape_string($link, $_POST['sevenadminothers7']);
     $sevenadminothers8 = mysqli_real_escape_string($link, $_POST['sevenadminothers8']);
     $sevenadminothers9 = mysqli_real_escape_string($link, $_POST['sevenadminothers9']);
     $sevenadminothers10 = mysqli_real_escape_string($link, $_POST['sevenadminothers10']);
     
     $eightadminresp1 = mysqli_real_escape_string($link, $_POST['eightadminresp1']);
     $eightadminresp2 = mysqli_real_escape_string($link, $_POST['eightadminresp2']);
     $eightadminresp3 = mysqli_real_escape_string($link, $_POST['eightadminresp3']);
     
     $nineadminresp1 = mysqli_real_escape_string($link, $_POST['nineadminresp1']);
     $nineadminresp2 = mysqli_real_escape_string($link, $_POST['nineadminresp2']);
     
     $workshop = mysqli_real_escape_string($link, $_POST['workshop']);
     
     $gian1 = mysqli_real_escape_string($link, $_POST['gian1']);
     $gian2 = mysqli_real_escape_string($link, $_POST['gian2']);
   //  $gian3 = mysqli_real_escape_string($link, $_POST['gian3']);
  //   $gian4 = mysqli_real_escape_string($link, $_POST['gian4']);
     $national = mysqli_real_escape_string($link, $_POST['national']);
     $teachexp = mysqli_real_escape_string($link, $_POST['teachexp']);
     $eslab = mysqli_real_escape_string($link, $_POST['eslab']);
     $teach = mysqli_real_escape_string($link, $_POST['teach']);
     $pg = mysqli_real_escape_string($link, $_POST['pg']);
     $ug = mysqli_real_escape_string($link, $_POST['ug']);
     $book = mysqli_real_escape_string($link, $_POST['book']);
     $chapter = mysqli_real_escape_string($link, $_POST['chapter']);
     $outreach = mysqli_real_escape_string($link, $_POST['outreach']);
     $ina=mysqli_real_escape_string($link, $_POST['ina']);
     $placement1 = mysqli_real_escape_string($link, $_POST['placement1']);  
     $placement2 = mysqli_real_escape_string($link, $_POST['placement2']);  
     
     $nexpg = mysqli_real_escape_string($link, $_POST['nexpg']);
    $nexpg1 = mysqli_real_escape_string($link, $_POST['nexpg1']);
    $nexphd1 = mysqli_real_escape_string($link, $_POST['nexphd1']);
    $nexphd = mysqli_real_escape_string($link, $_POST['nexphd']);
    $nexap = mysqli_real_escape_string($link, $_POST['nexap']);
    $nexap1 = mysqli_real_escape_string($link, $_POST['nexap1']);

     
     $sql  = "SELECT * FROM  newrules5 WHERE appn='$nappn' ";
     $result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0)
{
   $sql="UPDATE newrules5  SET name='$name', dept='$dept', Inst='$Inst', loneproj='$loneproj', teamproj='$teamproj', coproj='$coproj', patgrant='$patgrant', consult='$consult', loneguide='$loneguide',
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
                                     teach='$teach', pg='$pg', ug='$ug', book='$book', chapter='$chapter', outreach='$outreach', ina='$ina', placement1='$placement1', placement2='$placement2' WHERE appn='$nappn'";
mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated";
}
else{
echo "fail" .mysqli_error($link);}
}
else
{    
$sql = "insert into newrules5 values('$name', '$dept', '$Inst', '$loneproj', '$teamproj', '$coproj', '$patgrant', '$consult', '$loneguide',
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
                                     '$teach', '$pg', '$ug', '$book', '$chapter', '$outreach', '$ina', '$placement1', '$placement2', '$nappn', '$UID')";   

 
     if(mysqli_query($link, $sql)){

          ?>  <!-- <font size="5"  face="Comic sans MS"  color="red"> Records added successfully. </font> -->
<?php
    } else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}

$sql  = "SELECT * FROM  profex WHERE appn='$nappn' ";
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0)
{
    $sql="UPDATE profex  SET nexpg='$nexpg', nexpg1='$nexpg1', nexphd1='$nexphd1', nexphd='$nexphd', nexap='$nexap', nexap1='$nexap1' WHERE appn='$nappn'";
 if(mysqli_query($link, $sql)){

       //echo "Records added successfully. ";

    } else{

     echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}
else { 
$sql = "insert into profex values('$nappn', '$UID', '$nexpg', '$nexpg1', '$nexphd1', '$nexphd', '$nexap', '$nexap1')";

if(mysqli_query($link, $sql)){

       //echo "Records added successfully. ";

    } else{

     echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 }

//database for 7.academic-dactoral degree(Ph.D details).

$sql  = "SELECT * FROM  profex WHERE appn='$vapn'";
$exp3 =  mysqli_query($link, $sql);
$rowexp=$exp3->fetch_array();


$sql =  "SELECT * FROM eq5page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
$sql =  "SELECT * FROM eq5 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();
/*
$sql =  "SELECT * FROM postapplied WHERE appn='$vapn'";
$result3 =  mysqli_query($link, $sql);
 * 
 */
$post= substr($vapn, 2, 1);
$branch = substr($vapn, 3, 3);



//echo $branch.$post;
if($post=="1")
{
    $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
    $agp="6000";
}
else if($post=="2")
{
$post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
 $agp="7000";
}
else if($post=="3")
{
$post="Assistant Professor PB-3 with Grade pay of Rs.8000";
 $agp="8000";
}
else if($post=="4")
{
 $post="Associate Professor PB-4 with Grade pay of Rs.9500";
  $agp="9500";
}
else if($post=="5")
{     $post="Professor PB-4 with Grade pay of Rs.10500";
 $agp="10500";
}
else if($post=="6")
{$post="Professor HAG Scale Rs.67000 to 79000";
$agp="67000 to 79000";
}


if($branch=="AMH")
{   
    $branch="Applied Mechanics and Hydraulics";
}
else if($branch=="CHE")
{   
$branch="Chemical Engineering";}
else if($branch=="CHY")
{   
$branch="Chemistry";}
else if($branch=="CVE")
{   
    $branch="Civil Engineering";
}
else if($branch=="CSE")
{   
    $branch="Computer Science & Engineering";
}
else if($branch=="EEE")
{   
    $branch=" Electrical and Electronics Engineering";
}
else if($branch=="ECE")
{   
    $branch="Electronics and Communication Engineering";
    }
else if($branch=="ITE")
{   
    $branch="Information Technology";
    }
else if($branch=="MCS")
{   
    $branch="Mathematical And Computational Sciences";
    }
else if($branch=="MLE")
{   
    $branch="Mechanical Engineering";
    }
else if($branch=="MME")
{   
    $branch="Metallurgical and Materials Engineering";
    }
else if($branch=="MNE")
{   
    $branch="Mining Engineering";
    }
else if($branch=="PHY")
{   
    $branch=" Physics";
    }
else if($branch=="SOM")
{   
    $branch="School of  Management";
}
 
 


if($result1!=null && $result2!=null)
{

      

   //     echo "Records added successfully. ";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);

    ?>

   <?php    
 $a1 = $_POST['loneproj'];
$b1 = $_POST['teamproj'];
$c1 = $_POST['coproj'];
$d1 = $_POST['patgrant'];
$a2 = $_POST['consult'];
$a3 = $_POST['loneguide'];
$b3 = $_POST['headguide'];
$c3 = $_POST['coguide'];
$c32 = $_POST['coguide2'];
$c33 = $_POST['coguide3'];
$c34 = $_POST['coguide4'];
$c35 = $_POST['coguide5'];
$a4 = $_POST['jsing'];
$a41 = $_POST['jmain'];
$b4 = $_POST['jother'];
$b42 = $_POST['jother2'];
$b43 = $_POST['jother3'];
$b44 = $_POST['jother4'];
$b45 = $_POST['jother5'];
$a5 = $_POST['csing'];
$a51 = $_POST['cmain'];
$b5 = $_POST['cother'];
$b52 = $_POST['cother2'];
$b53 = $_POST['cother3'];
$b54 = $_POST['cother4'];
$b55 = $_POST['cother5'];
$b56 = $_POST['cother6'];
$b57 = $_POST['cother7'];
$b58 = $_POST['cother8'];

$hod6 = $_POST['sixadmin1'];
$dean6 = $_POST['sixadmin2'];
$cwaren6 = $_POST['sixadmin3'];
$tp6 = $_POST['sixadmin4'];
$advisor6 = $_POST['sixadmin5'];
$cvo6 = $_POST['sixadmin6'];
$pi6 = $_POST['sixadmin7'];
$teqip6 = $_POST['sixadmin8'];

$warden7 = $_POST['sevenadminothers1'];
$asstwarden7 = $_POST['sevenadminothers2'];
$astdean7 = $_POST['sevenadminothers3'];
$chairman7 = $_POST['sevenadminothers4'];
$faculty7 = $_POST['sevenadminothers5'];
$it7= $_POST['sevenadminothers6'];
$library7 = $_POST['sevenadminothers7'];
$admission7 = $_POST['sevenadminothers8'];
$student7 = $_POST['sevenadminothers9'];
$other7 = $_POST['sevenadminothers10'];

$converner8 = $_POST['eightadminresp1'];
$special8 = $_POST['eightadminresp2'];
$facincharge8 = $_POST['eightadminresp3'];

$labin9 = $_POST['nineadminresp1'];
$deptlevel9 = $_POST['nineadminresp2'];

$a10 = $_POST['workshop'];

$a11 = $_POST['gian1'];
$b11 = $_POST['gian2'];
$a12 = $_POST['national'];
$a13 = $_POST['teachexp'];
$a14 = $_POST['eslab'];
$a15 = $_POST['teach'];
$a16 = $_POST['pg'];
$a17 = $_POST['ug'];
$a18 = $_POST['book'];
$a19 = $_POST['chapter'];
$a20 = $_POST['outreach'];
$a21 = $_POST['ina'];
$a22 = $_POST['placement1'];
$b22 = $_POST['placement1'];
    
//question 1    
$result1=8*$a1+5*$b1+3*$c1+8*$d1;
//question 2 consulty
$result2=2*floor($a2/5);

if($result2>10)
{
    $result3=10;
}
else
{
    $result3= $result2;
}
//question no 3  phd guide
$result4=8*$a3+5*$b3+3*$c3+1.5*$c32+1.0*$c33+0.75*$c34+0.6*$c35;
//question no. 4 no of journal
$result5=4*$a4+2*$a41+2*$b4+1*$b42+0.67*$b43+0.5*$b44+0.4*$b45;

//question no. 5 no of conference
$result6=1*$a5+0.6*$a51+0.4*$b5+0.2*$b52+0.13*$b53+0.1*$b54+0.02*$b55+0.016*$b56+0.014*$b57+0.012*$b58;
if($result6>10)
{
    $result7=10;
}
else
{
    $result7= $result6;
}

//question no .6 administrative Responsibilities 

$result8=$hod6+$dean6+$cwaren6+$tp6+$advisor6+$cvo6+$pi6+$teqip6;

if($result8>8)
{
$result9=16;
}
else
{
$result9=2*$result8;
}

//questiojn no. 7 Administrative and Other Responsibilities

$result10=$warden7+$asstwarden7+$astdean7+$chairman7+$faculty7+$it7+$library7+$admission7+$student7+$other7;

if($result10>8)
{
$result11=8;
}
else
{
$result11=1*$result10;
}

//question no. 8.  Additional Responsibilities
$result12=$converner8+$special8+$facincharge8;
if($result12>6)
{
$result13=3;
}
else
{
$result13=0.5*$result12;
}

//question no. 9. Additional Responsibilities (Lab incharge, Dept level committee - min 1 year)
$result14=$labin9+$deptlevel9;

if($result14>6)
{
$result15=3;
}
else
{
$result15=0.5*$result14;
}

//question no. 10. Workshops/FDP/Short term courses
$result16=2*$a10;
if($result16>8)
{
$result17=8;
}
 else {
 $result17=$result16;   
}

//question no. 11.  conducting National programs like GIAN
//2-week
if($a11==1)
{
    $result18=2;
}
else if($a11>1){
    $result18=4;
}
else {
    $result18=0;
}

//1-week
if($b11==1)
{
    $result19=1;
}
else if($b11>1){
    $result19=2;
}
else
{
$result19=0;
}

//12.National/International Conference organized as Chairman/Secretary

if($a12==1)
{
    $result20=3;
}
else if($a12>1){
    $result20=6;
}
else
{
   $result20=0; 
}

//13. Length of service over and above relevant
$result2a=2*$a13;
if($result2a>10)
{
    $result21=10;
}
else{
    $result21=$result2a;
}

//14.Establishment of new lab
if($a14>=1)
{
    $result22=4;
}
else{
    $result22=0;
}

//15.Theory Teaching of over and above 6 credit hrs

$result23=1*$a15;
if($result23>6)
{
    $result24=6;
}
else {
    $result24=$result23;
}

//16.PG Dissertation guided
$result25=0.5*$a16;
if($result25>10)
{
    $result26=10;
}
else {
    $result26=$result25;
}
//17. UG Project guided
$result27=0.25*$a17;
if($result27>4)
{
    $result28=4;
}
else {
    $result28=$result27;
}

//18. Text/Reference Book Published

$result29=6*$a18;
if($result29>18)
{
    $result30=18;
}
else {
    $result30=$result29;
}

//19.Text/Reference book published on relevan

$result31=2*$a19;
if($result31>6)
{
    $result32=6;
}
else {
    $result32=$result31;
}

//20.Significant outreach institute activies
$result33=1*$a20;
if($result33>4)
{
    $result34=4;
}
else {
    $result34=$result33;
}

//21.Fellow IEEE, INA, FNAE, FNSc

if($a21>0)
{
    $result35=10;
}
 else {
   $result35=0; 
}

//21.Fellow IEEE, INA, FNAE, FNSc
//22a. Number of years placement was above 85%
 $result36=4*$a22;
 if($result36>20)
 {
     $result37=20;
 }
 else {
      $result37=$result36;
 }
 
 //22b. Number of years placement was from 75 to 84%
 $result38=2*$b22;
 if($result38>10)
 {
     $result39=10;
 }
 else {
      $result39=$result38;
 }

$credit1=$result1+$result3+$result4+$result5+$result7+$result9+$result11+$result13+$result15+$result17+$result18+$result19+$result20+$result21+$result22+$result24+$result26+$result28+$result30+$result32+$result34+$result35+$result37+$result39;
?>
          
          
<html>
    <head>
        <style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
        <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="assets/datepicker.js"></script> 
        <script type="text/javascript" src="assets/timepicker.js"></script> 
        <link rel="stylesheet" type="text/css" href="assets/runnable.css" /> 
        
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
                       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                         <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                         <link rel="stylesheet" href="assets/resources.css" />
                        <script>
                         $(function() {
                      $( "#datepicker" ).datepicker();
                      $( "#datepicker1" ).datepicker();
                       $( "#datepicker2" ).datepicker();
                        $( "#datepicker3" ).datepicker();
                        $( "#datepicker4" ).datepicker();
                      $( "#datepicker5" ).datepicker();
                       $( "#datepicker6" ).datepicker();
                        $( "#datepicker7" ).datepicker();
                        $( "#datepicker8" ).datepicker();
                      $( "#datepicker9" ).datepicker();
                       $( "#datepicker10" ).datepicker();
                        $( "#datepicker11" ).datepicker();
                         $( "#datepicker12" ).datepicker();
                         $( "#datepicker13" ).datepicker();
                         $( "#datepicker14" ).datepicker();
                         $( "#datepicker15" ).datepicker();
                         $( "#datepicker16" ).datepicker();
                         $( "#datepicker17" ).datepicker();
                         $( "#datepicker18" ).datepicker();
                         $( "#datepicker19" ).datepicker();
                         $( "#datepicker20" ).datepicker();
                         $( "#datepicker21" ).datepicker();
                         $( "#datepicker22" ).datepicker();
                         $( "#datepicker23" ).datepicker();
                         $( "#datepicker24" ).datepicker();
                         $( "#datepicker25" ).datepicker();
                         $( "#datepicker26" ).datepicker();
                         $( "#datepicker27" ).datepicker();
                         $( "#datepicker28" ).datepicker();
                         $( "#datepicker29" ).datepicker();
                         $( "#datepicker30" ).datepicker();
                         $( "#datepicker31" ).datepicker();
                         $( "#datepicker32" ).datepicker();
                         $( "#datepicker33" ).datepicker();
                         $( "#datepicker34" ).datepicker();
                         $( "#datepicker35" ).datepicker();
                         $( "#datepicker36" ).datepicker();
                         $( "#datepicker37" ).datepicker();
                         $( "#datepicker38" ).datepicker();
                          });
                                  </script> 
 
   <script language="JavaScript" type="text/javascript">

        function GetDays(){
                var dropdt = new Date(document.getElementById("datepicker14").value);
                var pickdt = new Date(document.getElementById("datepicker15").value);
                var diff_date =   pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal(){
        if(document.getElementById("datepicker14")){
            document.getElementById("numdays").value=GetDays();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays1(){
                var dropdt = new Date(document.getElementById("datepicker16").value);
                var pickdt = new Date(document.getElementById("datepicker17").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal1(){
        if(document.getElementById("datepicker16")){
            document.getElementById("numdays1").value=GetDays1();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays2(){
                var dropdt = new Date(document.getElementById("datepicker18").value);
                var pickdt = new Date(document.getElementById("datepicker19").value);
                var diff_date =   pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal2(){
        if(document.getElementById("datepicker18")){
            document.getElementById("numdays2").value=GetDays2();
        }  
    }
    </script>
<script language="JavaScript" type="text/javascript">
        function GetDays3(){
                var dropdt = new Date(document.getElementById("datepicker20").value);
                var pickdt = new Date(document.getElementById("datepicker21").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal3(){
        if(document.getElementById("datepicker20")){
            document.getElementById("numdays3").value=GetDays3();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays4(){
                var dropdt = new Date(document.getElementById("datepicker22").value);
                var pickdt = new Date(document.getElementById("datepicker23").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal4(){
        if(document.getElementById("datepicker22")){
            document.getElementById("numdays4").value=GetDays4();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays5(){
                var dropdt = new Date(document.getElementById("datepicker24").value);
                var pickdt = new Date(document.getElementById("datepicker25").value);
                var diff_date = pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal5(){
        if(document.getElementById("datepicker24")){
            document.getElementById("numdays5").value=GetDays5();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays6(){
                var dropdt = new Date(document.getElementById("datepicker26").value);
                var pickdt = new Date(document.getElementById("datepicker27").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal6(){
        if(document.getElementById("datepicker26")){
            document.getElementById("numdays6").value=GetDays6();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays7(){
                var dropdt = new Date(document.getElementById("datepicker28").value);
                var pickdt = new Date(document.getElementById("datepicker29").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal7(){
        if(document.getElementById("datepicker28")){
            document.getElementById("numdays7").value=GetDays7();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays8(){
                var dropdt = new Date(document.getElementById("datepicker30").value);
                var pickdt = new Date(document.getElementById("datepicker31").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal8(){
        if(document.getElementById("datepicker30")){
            document.getElementById("numdays8").value=GetDays8();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays9(){
                var dropdt = new Date(document.getElementById("datepicker32").value);
                var pickdt = new Date(document.getElementById("datepicker33").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal9(){
        if(document.getElementById("datepicker32")){
            document.getElementById("numdays9").value=GetDays9();
        }  
    }      
   
</script>
<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy1() 
{ 
        num11 = document.getElementById("e16").value;
        num12 = document.getElementById("e17").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent1 =  (num11 / num12)*100;
        return  ((percent1));
}    

function perc1(){
        if(document.getElementById("e16")){
            document.getElementById("e18").value=divideBy1();
        }  
    }
</script>    

<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy2() 
{ 
        num21 = document.getElementById("e26").value;
        num22 = document.getElementById("e27").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent2 =  (num21 / num22)*100;
        return  ((percent2));
}    

function perc2(){
        if(document.getElementById("e26")){
            document.getElementById("e28").value=divideBy2();
        }  
    }
</script>    
 
<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy3() 
{ 
        num31 = document.getElementById("e36").value;
        num32 = document.getElementById("e37").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent3 =  (num31 / num32)*100;
        return  ((percent3));
}    

function perc3(){
        if(document.getElementById("e36")){
            document.getElementById("e38").value=divideBy3();
        }  
    }
</script>    

<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy4() 
{ 
        num41 = document.getElementById("e46").value;
        num42 = document.getElementById("e47").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent4 =  (num41 / num42)*100;
        return  ((percent4));
}    

function perc4(){
        if(document.getElementById("e46")){
            document.getElementById("e48").value=divideBy4();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy5() 
{ 
        num51 = document.getElementById("e56").value;
        num52 = document.getElementById("e57").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent5 =  (num51 / num52)*100;
        return  ((percent5));
}    

function perc5(){
        if(document.getElementById("e56")){
            document.getElementById("e58").value=divideBy5();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy6() 
{ 
        num61 = document.getElementById("e66").value;
        num62 = document.getElementById("e67").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent6 =  (num61 / num62)*100;
        return  ((percent6));
}    

function perc6(){
        if(document.getElementById("e66")){
            document.getElementById("e68").value=divideBy6();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy7() 
{ 
        num71 = document.getElementById("e76").value;
        num72 = document.getElementById("e77").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent7 =  (num71 / num72)*100;
        return  ((percent7));
}    

function perc7(){
        if(document.getElementById("e76")){
            document.getElementById("e78").value=divideBy7();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy8() 
{ 
        num81 = document.getElementById("e86").value;
        num82 = document.getElementById("e87").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent8 =  (num81 / num82)*100;
        return  ((percent8));
}    

function perc8(){
        if(document.getElementById("e86")){
            document.getElementById("e88").value=divideBy8();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy9() 
{ 
        num91 = document.getElementById("e96").value;
        num92 = document.getElementById("e97").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent9 =  (num91 / num92)*100;
        return  ((percent9));
}    

function perc9(){
        if(document.getElementById("e96")){
            document.getElementById("e98").value=divideBy9();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy10() 
{ 
        num101 = document.getElementById("e106").value;
        num102 = document.getElementById("e107").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent10 =  (num101 / num102)*100;
        return  ((percent10));
}    

function perc10(){
        if(document.getElementById("e106")){
            document.getElementById("e108").value=divideBy10();
        }  
    }
</script>
<script>
    
        $(function() {
                 
                $("#json-one").change(function() {
           
                var $dropdown = $(this);
           
                $.getJSON("data.json", function(data) {
               
                    var key = $dropdown.val();
                    var vals = [];
                                       
                    switch(key) {
                        case 'Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments':
                            vals = data.P1.split(",");
                            break;
                        case 'Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000':
                            vals = data.P2.split(",");
                            break;
                                                case 'Assistant Professor PB-3 with Grade pay of Rs.8000':
                            vals = data.P3.split(",");
                            break;
                                                case 'Associate Professor PB-4 with Grade pay of Rs.9500':
                            vals = data.P4.split(",");
                            break;   
                                                case 'Professor PB-4 with Grade pay of Rs.10500':
                            vals = data.P5.split(",");
                            break;
                                                case 'Professor HAG Scale Rs.67000 to 79000':
                            vals = data.P6.split(",");
                            break;           
                                                   
                        case 'base':
                            vals = ['Please choose from Post Applied'];
                    }
                   
                    var $jsontwo = $("#json-two");
                    $jsontwo.empty();
                    $.each(vals, function(index, value) {
                        $jsontwo.append("<option>" + value + "</option>");
                    });
           
                });
            });

        });
                </script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
     $(function() {
      $("#E3_13").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>
    <script>
    $(function() {
      $("#E3_23").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>

    <script>
    $(function() {
      $("#E3_33").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>


    <script>
    $(function() {
      $("#E3_43").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>



<script language="JavaScript" type="text/javascript">
    function valid(){
        input = document.getElementById('nexpg').value;
        input1 = document.getElementById('nexpg1').value;
        input2 = document.getElementById('nexphd').value;
        input3 = document.getElementById('nexphd1').value;
         var dayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
         var dayOfYearpg=(dayCount[input1]+(input*365));
         var dayOfYearphd=(dayCount[input3]+(input2*365));
         //alert(dayOfYearpg+dayOfYearphd);
     if(dayOfYearphd<365)               
       {
           fld="Experience after Ph.D should be at least one year or invalid input !!!"
           alert(fld);
           document.f1.reset();
                return false;

               
       }
      
     }
    </script>

    </head>
    <body>
<div class="navbar navbar-fixed-top">
         <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="home.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $UID; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div id="fnt">
                                        <a tabindex="-1" href="logout.php"> <div id="fnt"> Logout </div></a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              <li><a href="post.php">My Application(s)</a></li>

                                                          <li><a href="up.php">Upload Photo/Documents </a></li>
                                                               <li><a href="view1.php">View/Edit Application</a></li>
                                                               
                                                               <li><a href="jaddd.php">Conference Papers</a></li> 
                                                               <li><a href="cfaddd.php">Subjects Taught</a></li> 
 <li><a href="submit.php">Submit/Print Application</a></li>

                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
        
         <form action="eq5pageinsert.php" method="post" name="f1" >
       <!-- <form action="pins.php" method="post" name="f1" onsubmit="return validateform()" > -->
            <hr>  
                                   <table CELLPADDING=10 cellspacing="10" > 
                                        <th>  <p> <font size="5"  face="Comic sans MS"  color="black" > Credit Earned:  <input type="text" name="credit1" value="<?php echo $credit1; ?>" readonly /> </font> </p> </th>
                                   </table>
          <hr>

      <table CELLPADDING=10 cellspacing="10" > 
          
     <tr>
       <td >
           <b>  Advertisement No.      </b> 
       </td> 
       
        <td>
            <input type="text" size="40" maxlength="100"  name="Page1" value="<?php echo $addv ?>"  readonly />
       </td>
       <td >
           <b>     Application No.      </b> 
       </td> 
       
        <td>
            <input type="text" size="40" maxlength="100"  name="nappn" value="<?php echo $vapn?>"  readonly/>
       </td>
     </tr>
          <tr>
         <td >
            <b>    Post Applied.     </b> 
       </td>
          
         <td>
             <input type="text" style="width: 450px;"  name="Page2" value="<?php echo $post; ?>"  readonly />                       
       </td>
       <td align="left">
            <b>      AGP:  </td>      </b> 
       <td><input type="text" style="width: 150px;"  name="Page3" value="<?php echo $agp; ?>"  readonly />                        </td>
       <td align="left">
             <b>   Department      </b> 
       </td>
         <td>
             <input type="text" style="width: 250px;"  name="Page4" value="<?php echo $branch; ?>" readonly />                       
      </td>
    </tr>        
     
      
 <tr>
     <td align="">
         <b>     1.  Name in Full </b>
     </td>
     <td>
         <input type="text" style="width: 450px;"  name="Page5" value="<?php echo $row['Page5']; ?>"  />                       
         </td>
 
            <td >
                <b>    a) Father Name      </b> 
       </td>
        <td>
          <input name="Page6" type="text" value="<?php echo $row['Page6']; ?>"  />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
     <td align="center">
             <b>   Mother  Name      </b> 
     </td>
     <td>
         <input type="text"  size="25" maxlength="100" name="Page7" value="<?php echo $row['Page7']; ?>"  />
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr>
 <td align="right">
         <b>   b) Gender      </b> 
 </td>

 <td>
      <input type="radio" name="Page8" value="Male" <?php if(isset($row['Page8']) && $row['Page8'] == "Male") echo 'checked="checked"'; ?> /> Male&nbsp;
     <input type="radio" name="Page8" value="Female" <?php if(isset($row['Page8']) && $row['Page8'] == "Female") echo 'checked="checked"'; ?> /> Female &nbsp;
       <input type="radio" name="Page8" value="Transgender" <?php if(isset($row['Page8']) && $row['Page8'] == "Transgender") echo 'checked="checked"'; ?> /> Transgender&nbsp;
 </td>
 <td align="">
         <b>  c) Marital Status       </b> 
 </td>
        
       <td>  <input type="radio" name="Page11" value="Married" <?php if(isset($row['Page11']) && $row['Page11'] == "Married") echo 'checked="checked"'; ?>  /> Married&nbsp;
      <input type="radio" name="Page11" value="Single" <?php if(isset($row['Page11']) && $row['Page11'] == "Single") echo 'checked="checked"'; ?> />Single &nbsp;
</td>
 
 
<td align="">
        <b>   d) Category       </b> 
</td>   
<td>  
  <input type="radio" name="Page12" value="SC" <?php if(isset($row['Page12']) && $row['Page12'] == "SC") echo 'checked="checked"'; ?> /> SC &nbsp;
   
             <input type="radio" name="Page12" value="ST" <?php if(isset($row['Page12']) && $row['Page12'] == "ST") echo 'checked="checked"'; ?> />ST &nbsp;
        
   
        <input type="radio" name="Page12" value="OBC" <?php if(isset($row['Page12']) && $row['Page12'] == "OBC") echo 'checked="checked"'; ?> />OBC &nbsp;
        
 
    <input type="radio" name="Page12" value="GEN" <?php if(isset($row['Page12']) && $row['Page12'] == "GEN") echo 'checked="checked"'; ?> />GEN  &nbsp;
        </td>
</tr>
               </table>   
           <table CELLPADDING="5" cellspacing="5">
 <tr>
            <td>  &nbsp;&nbsp;&nbsp;      <b> e) Attested copy certificate enclosed(Yes/No) (only in case of SC/ST/OBC)      </b> 
             
            </td>
             <td> <select name="Page17" >
        <option> <?php  if(!($row['Page17']=="")){ echo $row['Page17'] ?> 
       <?php } else { ?>- Select - <?php } ?>  </option>
        <option value="NO">NO </option>
        <option value="YES" >YES </option></select> </td>
                   
 </tr>
 <tr>
     <td> &nbsp;&nbsp;&nbsp;         <b>    f) Percentage of Disability of PWD candidate      </b>  
         <td><input type="text" name="Page18" value=" <?php echo $row['Page18']; ?>" size="5" /> &nbsp;&nbsp;&nbsp;
         <input type="radio" name="Page19" value="None"  <?php if(isset($row['Page19']) && $row['Page19'] == "None") echo 'checked="checked"'; ?>size="5" />None &nbsp;
         <input type="radio" name="Page19" value="VH"  <?php if(isset($row['Page19']) && $row['Page19'] == "VH") echo 'checked="checked"'; ?>size="5" />VH &nbsp;
         <input type="radio" name="Page19" value="OH"  <?php if(isset($row['Page19']) && $row['Page19'] == "OH") echo 'checked="checked"'; ?> size="5" />OH &nbsp;
         <input type="radio" name="Page19" value="HH"  <?php if(isset($row['Page19']) && $row['Page19'] == "HH") echo 'checked="checked"'; ?> size="5" />HH &nbsp;</td>
        </tr>
           </table>
<hr>
               <table CELLPADDING="5" cellspacing="10">
     <tr>
         <td>
     <b>2. Address:  </b> <br>     </td></tr>
      <tr>
     <td align="">  
         (a) Permanent:  </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp;</td> <td colspan="2"> (b) Address for Correspondence:  </td>   </tr>
      
      <tr>
          <td> Address Line1 </td> <td><input type="text" name="Page22" value="<?php echo $row['Page22']; ?>"  />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td > Address Line1 </td> <td><input type="text" name="Page28" value="<?php echo $row['Page28']; ?>"  />  </td> </tr>
               <tr>
          <td>Address Line2 </td><td> <input type="text" name="Page23" value="<?php echo $row['Page23']; ?>"  /> </td>  <td>&nbsp;&nbsp;&nbsp;</td>  <td>Address Line2 </td><td> <input type="text" name="Page29" value="<?php echo $row['Page29']; ?>"  /> </td> </tr>
               <tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="<?php echo $row['Page24']; ?>"  /> </td> <td>&nbsp;&nbsp;&nbsp;</td>  <td> Address Line3 </td> <td> <input type="text" name="Page30" value="<?php echo $row['Page30']; ?>"  /> </td></tr>
      <tr><td>      City  </td> <td>  <input type="text" name="Page25" value="<?php echo $row['Page25']; ?>"  /> </td>  <td>&nbsp;&nbsp;&nbsp;</td> <td> City  </td> <td>  <input type="text" name="Page31" value="<?php echo $row['Page31']; ?>"  /> </td></tr>
                <tr><td>      Pin Code</td> <td>  <input type="text" name="Page26" value="<?php echo $row['Page26']; ?>"  />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="<?php echo $row['Page32']; ?>"  /> </td>  </tr>
                <tr><td>     State </td> <td>  <input type="text" name="Page27" value="<?php echo $row['Page27']; ?>"  /></td> <td>&nbsp;&nbsp;&nbsp;</td><td>     State </td> <td>  <input type="text" name="Page33" value="<?php echo $row['Page33']; ?>"  /></td> </tr>
                <tr> <td></td> <td></td><td></td><td>Mobile</td> <td><input type="text" name="Page34" value="<?php echo $row['Page34']; ?>"  /> </td></tr>
                <tr><td></td> <td></td><td></td> <td>Telephone(with STD code)office </td> <td><input type="text" name="Page35"value="<?php echo $row['Page35']; ?>"  /></td></tr>
                <tr> <td></td> <td></td><td></td><td>  Telephone(with STD code) Res. No.</td> <td><input type="text" name="Page36" value="<?php echo $row['Page36']; ?>"  /> </td></tr>
           <tr> <td></td> <td></td><td></td>    <td>   Email</td> <td><input type="text" name="Page37" value="<?php echo $row['Page37']; ?>"  /></td></tr>
               </table>
<hr>
               <table >
         
                   <td>    <b> 3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp;  </b> </td>
    
            <td>
        
            <td>  <input type="text" id="start_dt" class='datepicker' size='15'  name="Page38" value="<?php echo $row['Page38']; ?>" /> </td>
            
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> <b> &nbsp;&nbsp; 3 &nbsp;&nbsp;(b) Nationality  &nbsp;&nbsp;&nbsp;  </b> </td>  
    
     <td>
         <input type="text" name="Page41" value="<?php echo $row['Page41']; ?>"  />
     </td>
        </tr>
 
               </table>
                                                 <hr>  
     
               <table CELLPADDING="5" cellspacing="5">
         <tr>
         </tr>
         <tr>
     <td> 
         <b> 4. Present Employment:  </b></td>  </tr>
         <tr><td> Designation </td><td><input type="text" name="Page42"  value="<?php echo $row['Page42']; ?>"   size="40" maxlength="40"/> </td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Organization </td><td><input type="text" name="Page43"  value="<?php echo $row['Page43']; ?>"   size="40" maxlength="80" /> </td> 
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Joining to the present post </td><td><input type="text" id="start_dt1" class='datepicker' size='15'  value="<?php echo $row['Page44']; ?>"    name="Page44" />  </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45"  value="<?php echo $row['Page45']; ?>"  size="40" maxlength="80" /> </td> 
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGP/GP </td><td> <input type="text" name="Page46"  value="<?php echo $row['Page46']; ?>"   placeholder="AGP/GP:(if applicable)" size="40" maxlength="80"/> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Basic pay Rs. </td><td> <input type="text" name="Page47"  value="<?php echo $row['Page47']; ?>"   size="40" maxlength="80"/> </td> </tr>
       <tr><td> Total Emoluments <br>(per month) Rs. </td><td> <input type="text" name="Page48"  value="<?php echo $row['Page48']; ?>"   size="40" maxlength="80"/> </td></tr> 
       </table>
                                                                   <hr>  

                                                 <table>
                                                     <tr>  <td> <b> 5. Areas of specializations: </b>
                                                         </td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" size="40" maxlength="150" name="Page49" value="<?php echo $row['Page49']; ?>" style="width:720px;"/> </td>
        </tr>
               </table>
               <hr>      
               <b> 6. Academic Career Record starting with SSLC. Enter individual semester marks where relevant (Diploma/UG/PG/Others). (Upload certificates/marks cards.)</b>
  <br>
  <br>
   
     <table CELLPADDING=2 cellspacing="5" width="50%">
     <tr>
        <td>Certificate/Degree<br>-Specialization<br></td>
        <td>year</td>
        <td>School/College</td>
        <td>Board/University <br></td>
        <td>Class/<br>Division</td>
        <td>Marks/CGPA <br> Obtained</td>
        <td>Max Marks<br>/CGPA</td>
        <td>Percentage/<br>    CGPA</td>
        <td>Semester-wise <br>  Marks (if relevant, <br> separated by semi-colon) </td>
    </tr>
  <tr>
        <td><input type="text" name="e11" value="<?php echo $row['cer1'];?>" ></td>
         <td><select name="e12"  id="e12" style="width:100px;" >  
   <option> <?php  if(!($row['year1']=="")){ echo $row['year1'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e13"  value="<?php echo $row['school1'] ?>"  ></td>
        <td><input type="text" name="e14"  value="<?php echo $row['board1'] ?>"  ></td>
        <td><input type="text" name="e15"   value="<?php echo $row['class1'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e16" name="e16"  onChange="perc1()"   value="<?php echo $row['omarks1'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e17"  name="e17" onChange="perc1()"   value="<?php echo $row['tmarks1'] ?>"  style="width:100px;" ></td>
        <td><input type="text"   name="e18" id="18" value="<?php echo $row['percentage1'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e19"   value="<?php echo $row['status1'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    
   <tr>
        <td><input type="text" name="e21" value="<?php echo $row['cer2'];?>" ></td>
        <td><select name="e22"  id="e22" style="width:100px;" >  
   <option> <?php  if(!($row['year2']=="")){ echo $row['year2'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e23"  value="<?php echo $row['school2'] ?>"  ></td>
        <td><input type="text" name="e24"  value="<?php echo $row['board2'] ?>"  ></td>
        <td><input type="text" name="e25"   value="<?php echo $row['class2'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e26" name="e26"  onChange="perc2()"   value="<?php echo $row['omarks2'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e27"  name="e27" onChange="perc2()"   value="<?php echo $row['tmarks2'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e28"  id="28"  value="<?php echo $row['percentage2'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e29"   value="<?php echo $row['status2'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    
   <tr>
        <td><input type="text" name="e31" value="<?php echo $row['cer3'];?>" ></td>
         <td><select name="e32"  id="e32" style="width:100px;" >  
   <option> <?php  if(!($row['year3']=="")){ echo $row['year3'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e33"  value="<?php echo $row['school3'] ?>"  ></td>
        <td><input type="text" name="e34"  value="<?php echo $row['board3'] ?>"  ></td>
        <td><input type="text" name="e35"   value="<?php echo $row['class3'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e36" name="e36"  onChange="perc3()"   value="<?php echo $row['omarks3'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e37"  name="e37" onChange="perc3()"   value="<?php echo $row['tmarks3'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e38"  id="38"  value="<?php echo $row['percentage3'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e39"   value="<?php echo $row['status3'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
     
   <tr>
        <td><input type="text" name="e41" value="<?php echo $row['cer4'];?>" ></td>
        <td ><select name="e42"  id="e42" style="width:100px;" >  
   <option> <?php  if(!($row['year4']=="")){ echo $row['year4'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e43"  value="<?php echo $row['school4'] ?>"  ></td>
        <td><input type="text" name="e44"  value="<?php echo $row['board4'] ?>"  ></td>
        <td><input type="text" name="e45"   value="<?php echo $row['class4'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e46" name="e46"  onChange="perc4()"   value="<?php echo $row['omarks4'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e47"  name="e47" onChange="perc4()"   value="<?php echo $row['tmarks4'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e48"  id="48"  value="<?php echo $row['percentage4'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e49"   value="<?php echo $row['status4'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    
   <tr>
        <td><input type="text" name="e51" value="<?php echo $row['cer5'];?>" ></td>
        <td ><select name="e52"  id="e52" style="width:100px;" >  
   <option> <?php  if(!($row['year5']=="")){ echo $row['year5'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e53"  value="<?php echo $row['school5'] ?>"  ></td>
        <td><input type="text" name="e54"  value="<?php echo $row['board5'] ?>"  ></td>
        <td><input type="text" name="e55"   value="<?php echo $row['class5'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e56" name="e56"  onChange="perc5()"   value="<?php echo $row['omarks5'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e57"  name="e57" onChange="perc5()"   value="<?php echo $row['tmarks5'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e58"  id="58"  value="<?php echo $row['percentage5'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e59"   value="<?php echo $row['status5'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    
   <tr>
        <td><input type="text" name="e61" value="<?php echo $row['cer6'];?>" ></td>
       <td ><select name="e62"  id="e62" style="width:100px;" >  
   <option> <?php  if(!($row['year6']=="")){ echo $row['year6'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e63"  value="<?php echo $row['school6'] ?>"  ></td>
        <td><input type="text" name="e64"  value="<?php echo $row['board6'] ?>"  ></td>
        <td><input type="text" name="e65"   value="<?php echo $row['class6'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e66" name="e66"  onChange="perc6()"   value="<?php echo $row['omarks6'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e67"  name="e67" onChange="perc6()"   value="<?php echo $row['tmarks6'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e68" id="68"   value="<?php echo $row['percentage6'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e69"   value="<?php echo $row['status6'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    
   <tr>
        <td><input type="text" name="e71" value="<?php echo $row['cer7'];?>" ></td>
         <td ><select name="e72"  id="e72" style="width:100px;" >  
   <option> <?php  if(!($row['year7']=="")){ echo $row['year7'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e73"  value="<?php echo $row['school7'] ?>"  ></td>
        <td><input type="text" name="e74"  value="<?php echo $row['board7'] ?>"  ></td>
        <td><input type="text" name="e75"   value="<?php echo $row['class7'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e76" name="e76"  onChange="perc7()"   value="<?php echo $row['omarks7'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e77"  name="e77" onChange="perc7()"   value="<?php echo $row['tmarks7'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e78" id="78"   value="<?php echo $row['percentage7'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e79"   value="<?php echo $row['status7'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
     
   <tr>
        <td><input type="text" name="e81" value="<?php echo $row['cer8'];?>" ></td>
         <td ><select name="e82"  id="e82" style="width:100px;" >  
   <option> <?php  if(!($row['year8']=="")){ echo $row['year8'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e83"  value="<?php echo $row['school8'] ?>"  ></td>
        <td><input type="text" name="e84"  value="<?php echo $row['board8'] ?>"  ></td>
        <td><input type="text" name="e85"   value="<?php echo $row['class8'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e86" name="e86"  onChange="perc8()"   value="<?php echo $row['omarks8'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e87"  name="e87" onChange="perc8()"   value="<?php echo $row['tmarks8'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e88"  id="88"  value="<?php echo $row['percentage8'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e89"   value="<?php echo $row['status8'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
     
   <tr>
        <td><input type="text" name="e91" value="<?php echo $row['cer9'];?>" ></td>
         <td ><select name="e92"  id="e92" style="width:100px;" >  
   <option> <?php  if(!($row['year9']=="")){ echo $row['year9'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e93"  value="<?php echo $row['school9'] ?>"  ></td>
        <td><input type="text" name="e94"  value="<?php echo $row['board9'] ?>"  ></td>
        <td><input type="text" name="e95"   value="<?php echo $row['class9'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e96" name="e96"  onChange="perc9()"   value="<?php echo $row['omarks9'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e97"  name="e97" onChange="perc9()"   value="<?php echo $row['tmarks9'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e98"  id="98"  value="<?php echo $row['percentage9'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e99"   value="<?php echo $row['status9'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
     
   <tr>
        <td><input type="text" name="e101" value="<?php echo $row['cer10'];?>" ></td>
         <td ><select name="e102"  id="e102" style="width:100px;" >  
   <option> <?php  if(!($row['year10']=="")){ echo $row['year10'] ?> 
       <?php } else { ?>- Year - <?php } ?>  </option>
    <option value="2017">2017</option>
         <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td><input type="text" name="e103"  value="<?php echo $row['school10'] ?>"  ></td>
        <td><input type="text" name="e104"  value="<?php echo $row['board10'] ?>"  ></td>
        <td><input type="text" name="e105"   value="<?php echo $row['class10'] ?>"  style="width:120px;"  ></td>
        <td><input type="text" id="e106" name="e106"  onChange="perc10()"   value="<?php echo $row['omarks10'] ?>" style="width:80px;" ></td>
        <td><input type="text" id="e107"  name="e107" onChange="perc10()"   value="<?php echo $row['tmarks10'] ?>"  style="width:100px;" ></td>
        <td><input type="text" name="e108"  id="108"  value="<?php echo $row['percentage10'] ?>" style="width:80px;" ></td>
        <td><input type="text" name="e109"   value="<?php echo $row['status10'] ?>"  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    </table>
  <hr>
 <b> 7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
     <br><br>
  
  <table style="table-layout: fixed;" cellpadding="1" cellspacing="" >
                <tr >
                   <tr >
                     <td>Thesis Title</td>
                    <td>From Date <br>(MM/DD/YYYY)</td>
                    <td>Final Viva Date<br>(MM/DD/YYYY)</td>
                  <td>Institute/University</td>
                    <td>Guide/Mentor</td>
                    <td>Mode (Full <br>/Part time)</td>
                    <td>Area of Research</td>
                    <td>Award Date <br>(MM/DD/YYYY)</td>
                </tr>
                
  <tr>
                    <td><textarea name="ph1" rows="1" cols="30" ><?php echo $row1['ph1']; ?></textarea>
                        <!-- <input tyep="text"  rows="1" cols="30" input type="text" name="ph1" value=""  /> -->
                        </td> 
                    <td>
                       <input type="text" id="datepicker"  name="ph2"  style="width:100px;" value="<?php echo $row1['ph2']; ?>"  />   </td> 
                    <td> 
                       <input type="text" id="datepicker1" name="ph3" style="width:100px;" value="<?php echo $row1['ph3']; ?>"  />    </td> 
                    <td ><input type="text" name="ph4" class="form-control" style="width:200px;"  size="40" value="<?php echo $row1['ph4']; ?>"  /> </td> 
                    <td><input type="text" name="ph5" class="form-control" style="width:200px;"  size="30" value="<?php echo $row1['ph5']; ?>"  />  </td> 
  <td><select name="ph6" style="width:120px;" >
        <option> <?php  if(!($row1['ph6']=="")){ echo $row1['ph6'] ?> 
       <?php } else { ?>- Select - <?php } ?>  </option>
         <option value="Full Time">Full Time </option>
         <option value="Part Time">Part Time </option></select> </td> 
                    <td><input type="text"  name="ph7"  style="width:200px;" value="<?php echo  $row1['ph7']; ?>"  />  </td> 
                      <td><input type="text"  id="datepicker3" name="ph8"  style="width:100px;" value="<?php echo $row1['ph8']; ?>"  /> </td> 
                </tr>
            </table> 
 <hr>  
     <b>8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>
      <table   >
               
                <tr >
                    <td>Career </td>
                    <td>From Date <br> MM/DD/YYYY</td>
                  <td>To Date <br> MM/DD/YYYY</td>
                  <td>Institute/Organization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr>

  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" ><?php echo $row1['pd11']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  id="datepicker4" name="pd12"  style="width:100px;" value="<?php echo $row1['pd12']; ?>"  /> </td> 
                    <td><input type="text"   id="datepicker5" name="pd13"  style="width:100px;" value="<?php echo $row1['pd13']; ?>"  />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['pd14']; ?>"  />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['pd15'];?>"  /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['pd16']; ?>"  /> </td> 
                      </tr>
  
  <tr>                    <td> <textarea name="pd21" rows="1" cols="30" ><?php echo $row1['pd21']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  id="datepicker6" name="pd22"  style="width:100px;" value="<?php echo $row1['pd22']; ?>"  /> </td> 
                    <td><input type="text"  id="datepicker7"  name="pd23"  style="width:100px;" value="<?php echo $row1['pd23']; ?>"  />  </td> 
                    <td ><input type="text" name="pd24" class="form-control" size="40" value="<?php echo $row1['pd24']; ?>"  />  </td> 
                    <td><input type="text" name="pd25" class="form-control" size="30" value="<?php echo $row1['pd25'];?>"  /> </td> 
                    <td align='center'><input type="text" name="pd26" class="form-control" size="30" value="<?php echo $row1['pd26']; ?>"  /> </td> 
                      </tr>

  <tr>                    <td> <textarea name="pd31" rows="1" cols="30" ><?php echo $row1['pd31']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  id="datepicker8" name="pd32"  style="width:100px;" value="<?php echo $row1['pd32']; ?>"  /> </td> 
                    <td><input type="text"   id="datepicker9" name="pd33"  style="width:100px;" value="<?php echo $row1['pd33']; ?>"  />  </td> 
                    <td ><input type="text" name="pd34" class="form-control" size="40" value="<?php echo $row1['pd34']; ?>"  />  </td> 
                    <td><input type="text" name="pd35" class="form-control" size="30" value="<?php echo $row1['pd35'];?>"  /> </td> 
                    <td align='center'><input type="text" name="pd36" class="form-control" size="30" value="<?php echo $row1['pd36']; ?>"  /> </td> 
                      </tr>

  <tr>                    <td> <textarea name="pd41" rows="1" cols="30" ><?php echo $row1['pd41']; ?></textarea>                    
                        </td> 
                    <td><input type="text"   id="datepicker10" name="pd42"  style="width:100px;" value="<?php echo $row1['pd42']; ?>"  /> </td> 
                    <td><input type="text"  id="datepicker11" name="pd43"  style="width:100px;" value="<?php echo $row1['pd43']; ?>"  />  </td> 
                    <td ><input type="text" name="pd44" class="form-control" size="40" value="<?php echo $row1['pd44']; ?>"  />  </td> 
                    <td><input type="text" name="pd45" class="form-control" size="30" value="<?php echo $row1['pd45'];?>"  /> </td> 
                    <td align='center'><input type="text" name="pd46" class="form-control" size="30" value="<?php echo $row1['pd46']; ?>"  /> </td> 
                      </tr>
 
  <tr>                    <td> <textarea name="pd51" rows="1" cols="30" ><?php echo $row1['pd51']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  id="datepicker12" name="pd52"  style="width:100px;" value="<?php echo $row1['pd52']; ?>"  /> </td> 
                    <td><input type="text"  id="datepicker13" name="pd53"  style="width:100px;" value="<?php echo $row1['pd53']; ?>"  />  </td> 
                    <td ><input type="text" name="pd54" class="form-control" size="40" value="<?php echo $row1['pd54']; ?>"  />  </td> 
                    <td><input type="text" name="pd55" class="form-control" size="30" value="<?php echo $row1['pd55'];?>"  /> </td> 
                    <td align='center'><input type="text" name="pd56" class="form-control" size="30" value="<?php echo $row1['pd56']; ?>"  /> </td> 
                      </tr>

</table>   
   <hr>                      
     
             <b>   9. National/State/Others - Test Scores/Ranks (Upload photocopies)  </b>
             <br>
             <br>

                 <table style="table-layout: fixed;"border="0.5" cellpadding="1" cellspacing="" >
               <tr >
                    <td>Examination </td>
                   <td>Year</td>
                  <td>Branch/Area of Specialization</td>
                  <td>Score</td>
                    <td>Rank</td>
                    <td>Percentile</td>
                </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination" > <?php echo $row['examination1']; ?> </textarea> </td> 
                     <td><select name="nt12" id="nt12" style="width:100px;">
    <option> <?php if(!($row['testyear1']=="")) { echo $row['testyear1'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch1']; ?>" > </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score1']; ?>" > </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank1']; ?>" > </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile1']; ?>" > </td> 
                    
                </tr>
          
                 </tr> <tr>
                     <td><textarea rows="1" cols="50" val="" input type="text" name="nt21"  id="message" placeholder="Examination" > <?php echo $row['examination2']; ?> </textarea> </td> 
                     <td><select name="nt22" id="nt22"  style="width:100px;">
      <option>  <?php if(!($row['testyear2']=="")) { echo $row['testyear2'] ?> <?php } else { ?> - Year - <?php } ?> </option>
       <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt23" class="form-control" size="50"  value="<?php echo $row['branch2']; ?>" > </td> 
                    <td ><input type="text" name="nt24" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score2']; ?>" > </td> 
                    <td><input type="text" name="nt25" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank2']; ?>" > </td> 
                    <td align='center'><input type="text" name="nt26" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile2']; ?>" > </td> 
                    
                </tr>
                 </tr> <tr>
                     <td><textarea rows="1" cols="50" val="" input type="text" name="nt31"  id="message" placeholder="Examination" > <?php echo $row['examination3']; ?> </textarea> </td> 
                      <td><select name="nt32" id="nt22"  style="width:100px;">
      <option>  <?php if(!($row['testyear3']=="")) { echo $row['testyear3'] ?> <?php } else { ?> - Year - <?php } ?> </option>
       <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt33" class="form-control" size="50"  value="<?php echo $row['branch3']; ?>" > </td> 
                    <td ><input type="text" name="nt34" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score3']; ?>" > </td> 
                    <td><input type="text" name="nt35" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank3']; ?>" > </td> 
                    <td align='center'><input type="text" name="nt36" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile3']; ?>" > </td> 
                    
                </tr>
                
                 </tr> <tr>
                     <td><textarea rows="1" cols="50" val="" input type="text" name="nt41"  id="message" placeholder="Examination" > <?php echo $row['examination4']; ?> </textarea> </td> 
                      <td><select name="nt42" id="nt22"  style="width:100px;">
      <option>  <?php if(!($row['testyear4']=="")) { echo $row['testyear4'] ?> <?php } else { ?> - Year - <?php } ?> </option>
       <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt43" class="form-control" size="50"  value="<?php echo $row['branch4']; ?>" > </td> 
                    <td ><input type="text" name="nt44" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score4']; ?>" > </td> 
                    <td><input type="text" name="nt45" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank4']; ?>" > </td> 
                    <td align='center'><input type="text" name="nt46" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile4']; ?>" > </td> 
                    
                </tr>
                 </tr> <tr>
                     <td><textarea rows="1" cols="50" val="" input type="text" name="nt51"  id="message" placeholder="Examination" > <?php echo $row['examination5']; ?> </textarea> </td> 
                     <td><select name="nt52" id="nt22"  style="width:100px;">
      <option>  <?php if(!($row['testyear5']=="")) { echo $row['testyear5'] ?> <?php } else { ?> - Year - <?php } ?> </option>
       <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt53" class="form-control" size="50"  value="<?php echo $row['branch5']; ?>" > </td> 
                    <td ><input type="text" name="nt54" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score5']; ?>" > </td> 
                    <td><input type="text" name="nt55" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank5']; ?>" > </td> 
                    <td align='center'><input type="text" name="nt56" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile5']; ?>" > </td> 
                    
                </tr>
                
                 </table>
                  
   <hr>  
<table>
<tr>
<p>  <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b><p> </tr>
<tr> For the current employed position, please enter Date of Leaving as the last date of the application submission </tr> </table>
         <br>
                         <table  width="60%" style=" text-align:center;" >
    <thead>
        <tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining <br> MM/DD/YYYY</td> <td>Date of Leaving <br> MM/DD/YYYY</td> <td>Number of Days/Months/Years</td> <td>Scale of Pay & GP/AGP(If applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" size="30" name="E11" value="<?php echo $row1['E11']; ?>" ></td>
            <td><input type="text" size="30" name="E12" value="<?php echo $row1['E12']; ?>" > </td>
            <td> <input type="text" id="datepicker14"  name="E13" onchange="cal()"  style="width:100px;" value="<?php echo $row1['E13']; ?>"  /> </td>
            <td><input type="text"  id="datepicker15" name="E14" onchange="cal()" style="width:100px;" value="<?php echo $row1['E14']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays" name="E15" style="width:150px;" value="<?php echo $row1['E15']; ?>" ></td>
            <td><input type="text" size="10" name="E16"  style="width:100px;" value="<?php echo $row1['E16']; ?>" > </td>
            <td><input type="text" size="10" name="E17"  style="width:100px;" value="<?php echo $row1['E17']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

      <tr>
            <td><input type="text" size="30" name="E21" value="<?php echo $row1['E21']; ?>" ></td>
            <td><input type="text" size="30" name="E22" value="<?php echo $row1['E22']; ?>" > </td>
            <td> <input type="text" id="datepicker16"  name="E23" onchange="cal1()"  style="width:100px;" value="<?php echo $row1['E23']; ?>"  /> </td>
            <td><input type="text"  id="datepicker17" name="E24" onchange="cal1()" style="width:100px;" value="<?php echo $row1['E24']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays1" name="E25" style="width:150px;" value="<?php echo $row1['E25']; ?>" ></td>
            <td><input type="text" size="10" name="E26"  style="width:100px;" value="<?php echo $row1['E26']; ?>" > </td>
            <td><input type="text" size="10" name="E27"  style="width:100px;" value="<?php echo $row1['E27']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E31" value="<?php echo $row1['E31']; ?>" ></td>
            <td><input type="text" size="30" name="E32" value="<?php echo $row1['E32']; ?>" > </td>
            <td> <input type="text" id="datepicker18"  name="E33" onchange="cal2()"  style="width:100px;" value="<?php echo $row1['E33']; ?>"  /> </td>
            <td><input type="text"  id="datepicker19" name="E34" onchange="cal2()" style="width:100px;" value="<?php echo $row1['E34']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays2" name="E35" style="width:150px;" value="<?php echo $row1['E35']; ?>" ></td>
            <td><input type="text" size="10" name="E36"  style="width:100px;" value="<?php echo $row1['E36']; ?>" > </td>
            <td><input type="text" size="10" name="E37"  style="width:100px;" value="<?php echo $row1['E37']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E41" value="<?php echo $row1['E41']; ?>" ></td>
            <td><input type="text" size="30" name="E42" value="<?php echo $row1['E42']; ?>" > </td>
            <td> <input type="text" id="datepicker20"  name="E43" onchange="cal3()"  style="width:100px;" value="<?php echo $row1['E43']; ?>"  /> </td>
            <td><input type="text"  id="datepicker21" name="E44" onchange="cal3()" style="width:100px;" value="<?php echo $row1['E44']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays3" name="E45" style="width:150px;" value="<?php echo $row1['E45']; ?>" ></td>
            <td><input type="text" size="10" name="E46"  style="width:100px;" value="<?php echo $row1['E46']; ?>" > </td>
            <td><input type="text" size="10" name="E47"  style="width:100px;" value="<?php echo $row1['E47']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E51" value="<?php echo $row1['E51']; ?>" ></td>
            <td><input type="text" size="30" name="E52" value="<?php echo $row1['E52']; ?>" > </td>
            <td> <input type="text" id="datepicker22"  name="E53" onchange="cal4()"  style="width:100px;" value="<?php echo $row1['E53']; ?>"  /> </td>
            <td><input type="text"  id="datepicker23" name="E54" onchange="cal4()" style="width:100px;" value="<?php echo $row1['E54']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays4" name="E55" style="width:150px;" value="<?php echo $row1['E55']; ?>" ></td>
            <td><input type="text" size="10" name="E56"  style="width:100px;" value="<?php echo $row1['E56']; ?>" > </td>
            <td><input type="text" size="10" name="E57"  style="width:100px;" value="<?php echo $row1['E57']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E61" value="<?php echo $row1['E61']; ?>" ></td>
            <td><input type="text" size="30" name="E62" value="<?php echo $row1['E62']; ?>" > </td>
            <td> <input type="text" id="datepicker24"  name="E63" onchange="cal5()"  style="width:100px;" value="<?php echo $row1['E63']; ?>"  /> </td>
            <td><input type="text"  id="datepicker25" name="E64" onchange="cal5()" style="width:100px;" value="<?php echo $row1['E64']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays5" name="E65" style="width:150px;" value="<?php echo $row1['E65']; ?>" ></td>
            <td><input type="text" size="10" name="E66"  style="width:100px;" value="<?php echo $row1['E66']; ?>" > </td>
            <td><input type="text" size="10" name="E67"  style="width:100px;" value="<?php echo $row1['E67']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E71" value="<?php echo $row1['E71']; ?>" ></td>
            <td><input type="text" size="30" name="E72" value="<?php echo $row1['E72']; ?>" > </td>
            <td> <input type="text" id="datepicker26"  name="E73" onchange="cal6()"  style="width:100px;" value="<?php echo $row1['E73']; ?>"  /> </td>
            <td><input type="text"  id="datepicker27" name="E74" onchange="cal6()" style="width:100px;" value="<?php echo $row1['E74']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays6" name="E75" style="width:150px;" value="<?php echo $row1['E75']; ?>" ></td>
            <td><input type="text" size="10" name="E76"  style="width:100px;" value="<?php echo $row1['E76']; ?>" > </td>
            <td><input type="text" size="10" name="E77"  style="width:100px;" value="<?php echo $row1['E77']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E81" value="<?php echo $row1['E81']; ?>" ></td>
            <td><input type="text" size="30" name="E82" value="<?php echo $row1['E82']; ?>" > </td>
            <td> <input type="text" id="datepicker28"  name="E83" onchange="cal7()"  style="width:100px;" value="<?php echo $row1['E83']; ?>"  /> </td>
            <td><input type="text"  id="datepicker29" name="E84" onchange="ca7l()" style="width:100px;" value="<?php echo $row1['E84']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays7" name="E85" style="width:150px;" value="<?php echo $row1['E85']; ?>" ></td>
            <td><input type="text" size="10" name="E86"  style="width:100px;" value="<?php echo $row1['E86']; ?>" > </td>
            <td><input type="text" size="10" name="E87"  style="width:100px;" value="<?php echo $row1['E87']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E91" value="<?php echo $row1['E91']; ?>" ></td>
            <td><input type="text" size="30" name="E92" value="<?php echo $row1['E92']; ?>" > </td>
            <td> <input type="text" id="datepicker30"  name="E93" onchange="cal8()"  style="width:100px;" value="<?php echo $row1['E93']; ?>"  /> </td>
            <td><input type="text"  id="datepicker31" name="E94" onchange="cal8()" style="width:100px;" value="<?php echo $row1['E94']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays8" name="E95" style="width:150px;" value="<?php echo $row1['E95']; ?>" ></td>
            <td><input type="text" size="10" name="E96"  style="width:100px;" value="<?php echo $row1['E96']; ?>" > </td>
            <td><input type="text" size="10" name="E97"  style="width:100px;" value="<?php echo $row1['E97']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><input type="text" size="30" name="E101" value="<?php echo $row1['E101']; ?>" ></td>
            <td><input type="text" size="30" name="E102" value="<?php echo $row1['E102']; ?>" > </td>
            <td> <input type="text" id="datepicker32"  name="E103" onchange="cal9()"  style="width:100px;" value="<?php echo $row1['E103']; ?>"  /> </td>
            <td><input type="text"  id="datepicker33" name="E104" onchange="cal9()" style="width:100px;" value="<?php echo $row1['E104']; ?>" ></td>
            <td><input type="text" class="textbox" id="numdays9" name="E105" style="width:150px;" value="<?php echo $row1['E105']; ?>" ></td>
            <td><input type="text" size="10" name="E106"  style="width:100px;" value="<?php echo $row1['E106']; ?>" > </td>
            <td><input type="text" size="10" name="E107"  style="width:100px;" value="<?php echo $row1['E107']; ?>" ></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         </tbody>
           
</table>
 <hr> 
<p> <b> 10.a. Relevant Experience(Mandatory Field) </b></p>
<table colspan="10">
             <tr><td colspan="3"> </td></tr>
             <tr> <td> &nbsp;</td><td> &nbsp;&nbsp;&nbsp; Year&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp; Months</td> </tr>
             <tr><td>Total Working Experience:</td>
<td><input type="text" maxlength="100" size="10" id="nexpg" name="nexpg" value="<?php echo $rowexp['nexpg']; ?>"   style="width:100px;" required>
</td><td><input type="text" maxlength="100" size="10" id="nexpg1" name="nexpg1"  value="<?php echo $rowexp['nexpg1']; ?>"  required  style="width:100px;"><td> </tr>
         <tr><td>Duration after PhD:<td> <input type="text" maxlength="100" size="10"  id="nexphd" name="nexphd"   value="<?php echo $rowexp['nexphd']; ?>"  style="width:100px;" required></td>
<td> <input type="text" maxlength="100" size="10" id="nexphd1" name="nexphd1"  value="<?php echo $rowexp['nexphd1']; ?>" required style="width:100px;"><td> </tr>
         <tr><td>Experience at the level of Associate Professor in an institute of repute:
<td> <input type="text" maxlength="100" size="10"  id="nexap" name="nexap"   value="<?php echo $rowexp['nexap']; ?>" style="width:100px;" required></td>
<td> <input type="text" maxlength="100" size="10" id="nexap1" name="nexap1" value="<?php echo $rowexp['nexap1']; ?>" required style="width:100px;"><td> </tr>

         </table>
<hr>
 <p>

     <b>11. Total Experience (Number of Years and/or months)  </b>      
     <br><br>                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="teachingexp" type="text"  size="25"  value="<?php echo $row['teachingexp']; ?>" >
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post-PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="researchexp" type="text"  size="25" value="<?php echo $row['researchexp']; ?>" >

       </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="industryexp" type="text" maxlength="100" size="25" value="<?php echo $row['industryexp']; ?>" >
       </td>
    </tr>
                  </table>
<hr>      <p>
          <b>12. Teaching Experience (Number of Years and/or months) :</b>
          &nbsp;&nbsp;&nbsp;&nbsp; <br> <br>Academic experience as applicable (month / year) in the posts indicated or equivalent
              
          
    <table border="0" cellpadding="0" cellspacing="5">
     <tr>
       <td align="right">
          <p>Assistant Professor or equivalent</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="asstprof" type="text" maxlength="100" size="25" value="<?php echo $row['asstprof']; ?>" >
         <!--<font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Associate Professor or equivalent</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="assoprofexp" type="text" maxlength="100" size="25" value="<?php echo $row['assoprofexp']; ?>" >

       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Professor or equivalent</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="profexp" type="text" maxlength="100" size="25" value="<?php echo $row['profexp']; ?>" >

       </td>
    </tr>
        
       </table>
<hr>      <p>

   <b>13. Subjects Taught (Since last promotion), Additional Subjects may be added through "Subjects Taught" Tab.</b> 
   <br><br>
                  
                 <table  width="60%" style="text-align: center">
                <thead>
                     <tr><td>Title of the Course taught </td> <td>Year</td> <td>U.G. / P.G. </td> <td>Approximate no. of students</td> <td>Institution/University</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_11" value="<?php echo $row['E2_11']; ?>" ></td>
              <td><select name="E2_12" id="E2_12">
    <option>  <?php if(!($row['E2_12']=="")) { echo $row['E2_12'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_13" value="<?php echo $row['E2_13']; ?>" ></td>
            <td><input type="text" size="10" name="E2_14" value="<?php echo $row['E2_14']; ?>" ></td>
            <td><input type="text" size="15" name="E2_15" value="<?php echo $row['E2_15']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_21" value="<?php echo $row['E2_21']; ?>" ></td>
             <td><select name="E2_22" id="E2_12">
    <option>  <?php if(!($row['E2_22']=="")) { echo $row['E2_22'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_23" value="<?php echo $row['E2_23']; ?>" ></td>
            <td><input type="text" size="10" name="E2_24" value="<?php echo $row['E2_24']; ?>" ></td>
            <td><input type="text" size="15" name="E2_25" value="<?php echo $row['E2_25']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_31" value="<?php echo $row['E2_31']; ?>" ></td>
              <td><select name="E2_32" id="E2_12">
    <option>  <?php if(!($row['E2_32']=="")) { echo $row['E2_32'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_33" value="<?php echo $row['E2_33']; ?>" ></td>
            <td><input type="text" size="10" name="E2_34" value="<?php echo $row['E2_34']; ?>" ></td>
            <td><input type="text" size="15" name="E2_35" value="<?php echo $row['E2_35']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_41" value="<?php echo $row['E2_41']; ?>" ></td>
            <td><select name="E2_42" id="E2_12">
    <option>  <?php if(!($row['E2_42']=="")) { echo $row['E2_42'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_43" value="<?php echo $row['E2_43']; ?>" ></td>
            <td><input type="text" size="10" name="E2_44" value="<?php echo $row['E2_44']; ?>" ></td>
            <td><input type="text" size="15" name="E2_45" value="<?php echo $row['E2_45']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_51" value="<?php echo $row['E2_51']; ?>" ></td>
           <td><select name="E2_52" id="E2_12">
    <option>  <?php if(!($row['E2_52']=="")) { echo $row['E2_52'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_53" value="<?php echo $row['E2_53']; ?>" ></td>
            <td><input type="text" size="10" name="E2_54" value="<?php echo $row['E2_54']; ?>" ></td>
            <td><input type="text" size="15" name="E2_55" value="<?php echo $row['E2_55']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_61" value="<?php echo $row['E2_61']; ?>" ></td>
           <td><select name="E2_62" id="E2_12">
    <option>  <?php if(!($row['E2_62']=="")) { echo $row['E2_62'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_63" value="<?php echo $row['E2_63']; ?>" ></td>
            <td><input type="text" size="10" name="E2_64" value="<?php echo $row['E2_64']; ?>" ></td>
            <td><input type="text" size="15" name="E2_65" value="<?php echo $row['E2_65']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_71" value="<?php echo $row['E2_71']; ?>" ></td>
           <td><select name="E2_72" id="E2_12">
    <option>  <?php if(!($row['E2_72']=="")) { echo $row['E2_72'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_73" value="<?php echo $row['E2_73']; ?>" ></td>
            <td><input type="text" size="10" name="E2_74" value="<?php echo $row['E2_74']; ?>" ></td>
            <td><input type="text" size="15" name="E2_75" value="<?php echo $row['E2_75']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_81" value="<?php echo $row['E2_81']; ?>" ></td>
           <td><select name="E2_82" id="E2_12">
    <option>  <?php if(!($row['E2_82']=="")) { echo $row['E2_82'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_83" value="<?php echo $row['E2_83']; ?>" ></td>
            <td><input type="text" size="10" name="E2_84" value="<?php echo $row['E2_84']; ?>" ></td>
            <td><input type="text" size="15" name="E2_85" value="<?php echo $row['E2_85']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_91" value="<?php echo $row['E2_91']; ?>" ></td>
           <td><select name="E2_92" id="E2_12">
    <option>  <?php if(!($row['E2_92']=="")) { echo $row['E2_92'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_93" value="<?php echo $row['E2_93']; ?>" ></td>
            <td><input type="text" size="10" name="E2_94" value="<?php echo $row['E2_94']; ?>" ></td>
            <td><input type="text" size="15" name="E2_95" value="<?php echo $row['E2_95']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_101" value="<?php echo $row['E2_101']; ?>" ></td>
           <td><select name="E2_102" id="E2_12">
    <option>  <?php if(!($row['E2_102']=="")) { echo $row['E2_102'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_103" value="<?php echo $row['E2_103']; ?>" ></td>
            <td><input type="text" size="10" name="E2_104" value="<?php echo $row['E2_104']; ?>" ></td>
            <td><input type="text" size="15" name="E2_105" value="<?php echo $row['E2_105']; ?>" ></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            </table>
  <hr>
<b> 14. Research guidance (upload relevant document)</b> 
  
    <table>
    
    
        <tr><td> Completed (Guided Sole): </td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing (Guiding Sole): </td> 
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td> Completed (Guided Joint): </td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing (Guiding Joint): </td> 
        </tr>

            <tr> 
                 <td align="right">
          <p>Ph.D.  </p> 
       </td>
        
        <td>
            <input name="phdcomplete" type="text" maxlength="100" size="25" value="<?php echo $row1['phdcomplete']; ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        
        <td align="right">
          <p>Ph.D.</p>
       </td>
        
        <td>
            <input name="phdongoing" type="text" maxlength="100" size="25" value="<?php echo $row1['phdongoing']; ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        
        <td align="right">
          <p>Ph.D.</p>
       </td>
      
        <td>
            <input name="cj1" type="text" maxlength="100" size="25" value="<?php echo $row1['cj1']; ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    
        <td align="right">
          <p>Ph.D.</p>
       </td>
        
        <td>
            <input name="oj1" type="text" maxlength="100" size="25"  value="<?php echo $row1['oj1']; ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
      
    </tr>
   
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
       
        <td>
            <input name="pgcomplete" type="text" maxlength="100" size="25" value="<?php echo $row1['pgcomplete']; ?>" />

       </td>
       
       <td align="right">
          <p>P.G.</p>
       </td>
      
        <td>
            <input name="pgongoing" type="text" maxlength="100" size="25" value="<?php echo $row1['pgongoing']; ?>" />

       </td>
        
        <td align="right">
          <p>P.G.</p>
       </td>
       
        <td>
            <input name="cj2" type="text" maxlength="100" size="25"  value="<?php echo $row1['cj2']; ?>" />

       </td>
         
        <td align="right">
          <p>P.G.</p>
       </td>
           
        <td>
            <input name="oj2" type="text" maxlength="100" size="25"  value="<?php echo $row1['oj2']; ?>" />

       </td>
      
    </tr>        
           
  
  </table>  
  <hr>      
        <b>15. a.  Publication details - No. of Papers </b> 
        <br>     <br>     
           <table  >
             
                        <tr><td> Journal papers :</td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                        <td> Conference Publications:</td> </tr>
                    
                       </tr>  
   <tr> 
                                <td align="left">
            <p>International</p>
                        </td>
                        <td>
                        <input name="JInternational" type="text" maxlength="100" size="25" value="<?php echo $row1['JInternational']; ?>"  />

                            </td>
                             <td align="left">
            <p>International</p>
                        </td>  
                        <td>
                        <input name="CInternational" type="text" maxlength="100" size="25" value="<?php echo $row1['CInternational']; ?>" >

                            </td>
                            </tr>
        
 
                <tr> 
                        <td align="left">
                        <p>National</p>
                            </td>
                            <td>
                        <input name="JNational" type="text" maxlength="100" size="25" value="<?php echo $row1['JNational']; ?>" >
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                       <td align="left">
                        <p>National</p>
                         </td>
                            
                            <td>
                        <input name="CNational" type="text" maxlength="100" size="25" value="<?php echo $row1['CNational']; ?>"  />
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                    </tr>    
            </table>
   <hr>
       <table> 
 <b> 15.b. Details of all publications as per www.scopus.com are to be uploaded. </b>
   
 </table>
<hr>  
       <table> 
 <b> 15.c. 15c. Details of conference papers published are to be added in the "Conference Papers" tab. </b>
   
 </table>
<hr>             
 <b> 16.  Books / Chapters Published & E-learning materials Developed (Since last promotion) </b> 
    <br><br>
    <textarea name="BInternational"  style="width: 800px; height: 50px;" rows="" cols="200"  > <?php echo $row['BInternational']; ?></textarea> 
<hr>      
<b> 17. Patents(Applied or Awarded) </b> 
    <br>
    <textarea  style="width: 800px; height: 50px;"rows="4" cols="100" name="patents" type="text" maxlength="200" size="25"  > <?php echo $row1['patents']; ?></textarea>
   <hr> 
<b>18. Sponsored Projects (Project handled as Principal Investigator Since last promotion)as per Gazette Note 1(4)</b>
    <br><br>

                   <table  style="text-align: center" cellpadding="1" cellspacing="5">
                 
               <tr><td>Funding Agency</td> <td>Title of the Project</td> <td>Project Cost </td> <td>Duration</td> <td>Current Status</td> <td>Remarks/Applied<br>(with date)</td>  <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
          
        
        <tr>
          <td><input type="text" size="20" name="E4_11" value="<?php echo $row1['E4_11']; ?>"  /></td>
            <td><input type="text" size="20" name="E4_12" value="<?php echo $row1['E4_12']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_13" value="<?php echo $row1['E4_13']; ?>"  /> </td>
            <td><input type="text" size="8" name="E4_14" value="<?php echo $row1['E4_14']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_15" value="<?php echo $row1['E4_15']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_16" value="<?php echo $row1['E4_16']; ?>"  /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      
        <tr>
          <td><input type="text" size="20" name="E4_21" value="<?php echo $row1['E4_21']; ?>"  /></td>
            <td><input type="text" size="20" name="E4_22" value="<?php echo $row1['E4_22']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_23" value="<?php echo $row1['E4_23']; ?>"  /> </td>
            <td><input type="text" size="8" name="E4_24" value="<?php echo $row1['E4_24']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_25" value="<?php echo $row1['E4_25']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_26" value="<?php echo $row1['E4_26']; ?>"  /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
     
        <tr>
          <td><input type="text" size="20" name="E4_31" value="<?php echo $row1['E4_31']; ?>"  /></td>
            <td><input type="text" size="20" name="E4_32" value="<?php echo $row1['E4_32']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_33" value="<?php echo $row1['E4_33']; ?>"  /> </td>
            <td><input type="text" size="8" name="E4_34" value="<?php echo $row1['E4_34']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_35" value="<?php echo $row1['E4_35']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_36" value="<?php echo $row1['E4_36']; ?>"  /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
     
        <tr>
          <td><input type="text" size="20" name="E4_41" value="<?php echo $row1['E4_41']; ?>"  /></td>
            <td><input type="text" size="20" name="E4_42" value="<?php echo $row1['E4_42']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_43" value="<?php echo $row1['E4_43']; ?>"  /> </td>
            <td><input type="text" size="8" name="E4_44" value="<?php echo $row1['E4_44']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_45" value="<?php echo $row1['E4_45']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_46" value="<?php echo $row1['E4_46']; ?>"  /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      
        <tr>
          <td><input type="text" size="20" name="E4_51" value="<?php echo $row1['E4_51']; ?>"  /></td>
            <td><input type="text" size="20" name="E4_52" value="<?php echo $row1['E4_52']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_53" value="<?php echo $row1['E4_53']; ?>"  /> </td>
            <td><input type="text" size="8" name="E4_54" value="<?php echo $row1['E4_54']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_55" value="<?php echo $row1['E4_55']; ?>"  /> </td>
            <td><input type="text" size="10" name="E4_56" value="<?php echo $row1['E4_56']; ?>"  /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
     
  
   </table>
<hr>      

<b>19. Consultancy Project (Since last promotion)</b> <br> <br>

                <table  style="text-align: center" cellpadding="1" cellspacing="1">
                 <thead>
                <tr><td>Funding Agency</td> <td>Title of the Consultancy <br>Work </td> <td>Duration/<br>Ongoing </td> <td>Project Cost</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
     
        <tr>
            <td><input type="text" size="20" name="F11" value="<?php echo $row1['F11']; ?>"  /></td>
            <td><input type="text" size="20" name="F12" value="<?php echo $row1['F12']; ?>"  /> </td>
            <td><input type="text" size="20" name="F13" value="<?php echo $row1['F13']; ?>"  /> </td>
            <td><input type="text" size="20" name="F14" value="<?php echo $row1['F14']; ?>"  /> </td>
      
        </tr>
   
     
         <tr>
            <td><input type="text" size="20" name="F21" value="<?php echo $row1['F21']; ?>"  /></td>
            <td><input type="text" size="20" name="F22" value="<?php echo $row1['F22']; ?>"  /> </td>
            <td><input type="text" size="20" name="F23" value="<?php echo $row1['F23']; ?>"  /> </td>
            <td><input type="text" size="20" name="F24" value="<?php echo $row1['F24']; ?>"  /> </td>
      
        </tr>
         
         <tr>
            <td><input type="text" size="20" name="F31" value="<?php echo $row1['F31']; ?>"  /></td>
            <td><input type="text" size="20" name="F32" value="<?php echo $row1['F32']; ?>"  /> </td>
            <td><input type="text" size="20" name="F33" value="<?php echo $row1['F33']; ?>"  /> </td>
            <td><input type="text" size="20" name="F34" value="<?php echo $row1['F34']; ?>"  /> </td>
      
        </tr>
      
         <tr>
            <td><input type="text" size="20" name="F41" value="<?php echo $row1['F41']; ?>"  /></td>
            <td><input type="text" size="20" name="F42" value="<?php echo $row1['F42']; ?>"  /> </td>
            <td><input type="text" size="20" name="F43" value="<?php echo $row1['F43']; ?>"  /> </td>
            <td><input type="text" size="20" name="F44" value="<?php echo $row1['F44']; ?>"  /> </td>
      
        </tr>
     
         <tr>
            <td><input type="text" size="20" name="F51" value="<?php echo $row1['F51']; ?>"  /></td>
            <td><input type="text" size="20" name="F52" value="<?php echo $row1['F52']; ?>"  /> </td>
            <td><input type="text" size="20" name="F53" value="<?php echo $row1['F53']; ?>"  /> </td>
            <td><input type="text" size="20" name="F54" value="<?php echo $row1['F54']; ?>"  /> </td>
      
        </tr>
       
     
         </tbody>
           
   </table>
 <hr>      
                   <b>20. Professional Training / Summer / Winter Schools Conducted(Since last promotion - Upload photocopies)</b><br><br>

                                   <table style="text-align: center">
                <thead>
                <tr><td>Year</td> <td>Name of Training</td> <td>Duration </td> <td>Organization where training <br>was provided</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
            <tr>
                <td><select name="T11" >
    <option>  <?php if(!($row['T11']=="")) { echo $row['T11'] ?> <?php } else { ?> - Year - <?php } ?> </option>
       <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T12" value="<?php echo $row['T12']; ?>"  /> </td>
            <td><input type="text" size="10" name="T13" value="<?php echo $row['T13']; ?>"  /> </td>
            <td><input type="text" size="30" name="T14" value="<?php echo $row['T14']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                 <td><select name="T21" >
    <option>  <?php if(!($row['T21']=="")) { echo $row['T21'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T22" value="<?php echo $row['T22']; ?>"  /> </td>
            <td><input type="text" size="10" name="T23" value="<?php echo $row['T23']; ?>"  /> </td>
            <td><input type="text" size="30" name="T24" value="<?php echo $row['T24']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
              <td><select name="T31" >
    <option>  <?php if(!($row['T31']=="")) { echo $row['T31'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T32" value="<?php echo $row['T32']; ?>"  /> </td>
            <td><input type="text" size="10" name="T33" value="<?php echo $row['T33']; ?>"  /> </td>
            <td><input type="text" size="30" name="T34" value="<?php echo $row['T34']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                  <td><select name="T41" >
    <option>  <?php if(!($row['T41']=="")) { echo $row['T41'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T42" value="<?php echo $row['T42']; ?>"  /> </td>
            <td><input type="text" size="10" name="T43" value="<?php echo $row['T43']; ?>"  /> </td>
            <td><input type="text" size="30" name="T44" value="<?php echo $row['T44']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                  <td><select name="T51" >
    <option>  <?php if(!($row['T51']=="")) { echo $row['T51'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T52" value="<?php echo $row['T52']; ?>"  /> </td>
            <td><input type="text" size="10" name="T53" value="<?php echo $row['T53']; ?>"  /> </td>
            <td><input type="text" size="30" name="T54" value="<?php echo $row['T54']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                  <td><select name="T61" >
    <option>  <?php if(!($row['T61']=="")) { echo $row['T61'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T62" value="<?php echo $row['T62']; ?>"  /> </td>
            <td><input type="text" size="10" name="T63" value="<?php echo $row['T63']; ?>"  /> </td>
            <td><input type="text" size="30" name="T64" value="<?php echo $row['T64']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                  <td><select name="T71" >
    <option>  <?php if(!($row['T71']=="")) { echo $row['T71'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T72" value="<?php echo $row['T72']; ?>"  /> </td>
            <td><input type="text" size="10" name="T73" value="<?php echo $row['T73']; ?>"  /> </td>
            <td><input type="text" size="30" name="T74" value="<?php echo $row['T74']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
                  <td><select name="T81" >
    <option>  <?php if(!($row['T81']=="")) { echo $row['T81'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T82" value="<?php echo $row['T82']; ?>"  /> </td>
            <td><input type="text" size="10" name="T83" value="<?php echo $row['T83']; ?>"  /> </td>
            <td><input type="text" size="30" name="T84" value="<?php echo $row['T84']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
  <td><select name="T91" >
    <option>  <?php if(!($row['T91']=="")) { echo $row['T91'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T92" value="<?php echo $row['T92']; ?>"  /> </td>
            <td><input type="text" size="10" name="T93" value="<?php echo $row['T93']; ?>"  /> </td>
            <td><input type="text" size="30" name="T94" value="<?php echo $row['T94']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
             <td><select name="T101" >
    <option>  <?php if(!($row['T101']=="")) { echo $row['T101'] ?> <?php } else { ?> - Year - <?php } ?> </option>
     <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="20" name="T102" value="<?php echo $row['T102']; ?>"  /> </td>
            <td><input type="text" size="10" name="T103" value="<?php echo $row['T103']; ?>"  /> </td>
            <td><input type="text" size="30" name="T104" value="<?php echo $row['T104']; ?>"  /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         </tbody>
   </table>
<hr>      

    <b> 21. Conferences/Seminars / Workshops Conducted (Since last promotion - Upload photocopies of the certificates)</b>
<table style="text-align: center">
    <tr>
        <td>Year</td>
        <td> Conferences/Seminars / <br> Workshops</td>
<!--        <td>Title of paper presented </td> -->
        <td> </td>
    </tr>
    <tr>
        <td><select name="cp11">
   <option>  <?php if(!($row['cp11']=="")) { echo $row['cp11'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp12" siz="45"  value="<?php echo $row['cp12']; ?>"  /> </td>
        <td> <input type="text" name="cp13"  value="<?php echo $row['cp13']; ?>"  /> </td>
    </tr>
      <tr>
         <td><select name="cp21">
   <option>  <?php if(!($row['cp21']=="")) { echo $row['cp21'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp22" siz="45"  value="<?php echo $row['cp22']; ?>"  /> </td>
        <td> <input type="text" name="cp23"  value="<?php echo $row['cp23']; ?>"  /> </td>
    </tr>
      <tr>
         <td><select name="cp31">
   <option>  <?php if(!($row['cp31']=="")) { echo $row['cp31'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp32" siz="45"  value="<?php echo $row['cp32']; ?>"  /> </td>
        <td> <input type="text" name="cp33"  value="<?php echo $row['cp33']; ?>"  /> </td>
    </tr>
      <tr>
        <td><select name="cp41">
   <option>  <?php if(!($row['cp41']=="")) { echo $row['cp41'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp42" siz="45"  value="<?php echo $row['cp42']; ?>"  /> </td>
        <td> <input type="text" name="cp43"  value="<?php echo $row['cp43']; ?>"  /> </td>
    </tr>
    <tr>
         <td><select name="cp51">
   <option>  <?php if(!($row['cp51']=="")) { echo $row['cp51'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp52" siz="45"  value="<?php echo $row['cp52']; ?>"  /> </td>
        <td> <input type="text" name="cp53"  value="<?php echo $row['cp53']; ?>"  /> </td>
    </tr>
    <tr>
         <td><select name="cp61">
   <option>  <?php if(!($row['cp61']=="")) { echo $row['cp61'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp62" siz="45"  value="<?php echo $row['cp62']; ?>"  /> </td>
        <td> <input type="text" name="cp63"  value="<?php echo $row['cp63']; ?>"  /> </td>
    </tr>
    <tr>
          <td><select name="cp71">
   <option>  <?php if(!($row['cp71']=="")) { echo $row['cp71'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp72" siz="45"  value="<?php echo $row['cp72']; ?>"  /> </td>
        <td> <input type="text" name="cp73"  value="<?php echo $row['cp73']; ?>"  /> </td>
    </tr>
    <tr>
        <td><select name="cp81">
   <option>  <?php if(!($row['cp81']=="")) { echo $row['cp81'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp82" siz="45"  value="<?php echo $row['cp82']; ?>"  /> </td>
        <td> <input type="text" name="cp83"  value="<?php echo $row['cp83']; ?>"  /> </td>
    </tr>
    <tr>
       <td><select name="cp91">
   <option>  <?php if(!($row['cp91']=="")) { echo $row['cp91'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp92" siz="45"  value="<?php echo $row['cp92']; ?>"  /> </td>
        <td> <input type="text" name="cp93"  value="<?php echo $row['cp93']; ?>"  /> </td>
    </tr>
    <tr>
         <td><select name="cp101">
   <option>  <?php if(!($row['cp101']=="")) { echo $row['cp101'] ?> <?php } else { ?> - Year - <?php } ?> </option>
    <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td> <input type="text" name="cp102" siz="45"  value="<?php echo $row['cp102']; ?>"  /> </td>
        <td> <input type="text" name="cp103"  value="<?php echo $row['cp103']; ?>"  /> </td>
    </tr>
    </table>
 <!--   <hr>  
<b>22. Industrial Experience/Interaction (Upload photocopies)  </b> <br><br>
                       <table style="text-align: center">
    <tr>
        <td>Organization</td>
        <td> Nature of Work </td>
        <td>Period</td>
    </tr>
    <tr>
    <tr>
        <td><input type="text" name="ie11" value="<?php echo $row['ie11']; ?>"  /></td>
                    <td ><input type="text" name="ie12"  value="<?php echo $row['ie12']; ?>"  /> </td>
        <td><input type="text" name="ie13" value="<?php echo $row['ie13']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie21" value="<?php echo $row['ie21']; ?>"  /></td>
                    <td ><input type="text" name="ie22"  value="<?php echo $row['ie22']; ?>"  /> </td>
        <td><input type="text" name="ie23" value="<?php echo $row['ie23']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie31" value="<?php echo $row['ie31']; ?>"  /></td>
                    <td ><input type="text" name="ie32"  value="<?php echo $row['ie32']; ?>"  /> </td>
        <td><input type="text" name="ie33" value="<?php echo $row['ie33']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie41" value="<?php echo $row['ie41']; ?>"  /></td>
                    <td ><input type="text" name="ie42"  value="<?php echo $row['ie42']; ?>"  /> </td>
        <td><input type="text" name="ie43" value="<?php echo $row['ie43']; ?>"  /> </td>


    </tr>
    <tr>
        <td><input type="text" name="ie51" value="<?php echo $row['ie51']; ?>"  /></td>
                    <td ><input type="text" name="ie52"  value="<?php echo $row['ie52']; ?>"  /> </td>
        <td><input type="text" name="ie53" value="<?php echo $row['ie53']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie61" value="<?php echo $row['ie61']; ?>"  /></td>
                    <td ><input type="text" name="ie62"  value="<?php echo $row['ie62']; ?>"  /> </td>
        <td><input type="text" name="ie63" value="<?php echo $row['ie63']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie71" value="<?php echo $row['ie71']; ?>"  /></td>
                    <td ><input type="text" name="ie72"  value="<?php echo $row['ie72']; ?>"  /> </td>
        <td><input type="text" name="ie73" value="<?php echo $row['ie73']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie81" value="<?php echo $row['ie81']; ?>"  /></td>
                    <td ><input type="text" name="ie82"  value="<?php echo $row['ie82']; ?>"  /> </td>
        <td><input type="text" name="ie83" value="<?php echo $row['ie83']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie91" value="<?php echo $row['ie91']; ?>"  /></td>
                    <td ><input type="text" name="ie92"  value="<?php echo $row['ie92']; ?>"  /> </td>
        <td><input type="text" name="ie93" value="<?php echo $row['ie93']; ?>"  /> </td>

    </tr>
    <tr>
        <td><input type="text" name="ie101" value="<?php echo $row['ie101']; ?>"  /></td>
                    <td ><input type="text" name="ie102"  value="<?php echo $row['ie102']; ?>"  /> </td>
        <td><input type="text" name="ie103" value="<?php echo $row['ie103']; ?>"  /> </td>


    </tr>
    </table> -->
        <hr> 
        <b>22. Continuing Education Programmes /Short Term Courses/Workshops/Seminars etc. organized (Since last promotion)as per Gazette Note 1(4):</b> <br><br>

     <table style="text-align: center">
   <tr>
        <td >Title of Programme</td>
        <td >Period</td>
                <td > Funding Agency </td>
    </tr>
   
    <tr>
        <td><input type="text" name="fa11" value="<?php echo $row1['fa11']; ?>"  /></td>
                    <td ><input type="text" name="fa12"  value="<?php echo $row1['fa12']; ?>"  /> </td>
        <td><input type="text" name="fa13" value="<?php echo $row1['fa13']; ?>"  /> </td>

    </tr>

    <tr>
        <td><input type="text" name="fa21" value="<?php echo $row1['fa21']; ?>"  /></td>
                    <td ><input type="text" name="fa22"  value="<?php echo $row1['fa22']; ?>"  /> </td>
        <td><input type="text" name="fa23" value="<?php echo $row1['fa23']; ?>"  /> </td>

    </tr>
    
    
    <tr>
        <td><input type="text" name="fa31" value="<?php echo $row1['fa31']; ?>"  /></td>
                    <td ><input type="text" name="fa32"  value="<?php echo $row1['fa32']; ?>"  /> </td>
        <td><input type="text" name="fa33" value="<?php echo $row1['fa33']; ?>"  /> </td>


    </tr>
   
    <tr>
       <td><input type="text" name="fa41" value="<?php echo $row1['fa41']; ?>"  /></td>
                    <td ><input type="text" name="fa42"  value="<?php echo $row1['fa42']; ?>"  /> </td>
        <td><input type="text" name="fa43" value="<?php echo $row1['fa43']; ?>"  /> </td>

    </tr>
 
    <tr>
        <td><input type="text" name="fa51" value="<?php echo $row1['fa51']; ?>"  /></td>
                    <td ><input type="text" name="fa52"  value="<?php echo $row1['fa52']; ?>"  /> </td>
        <td><input type="text" name="fa53" value="<?php echo $row1['fa53']; ?>"  /> </td>

    </tr>

    <tr>
       <td><input type="text" name="fa61" value="<?php echo $row1['fa61']; ?>"  /></td>
                    <td ><input type="text" name="fa62"  value="<?php echo $row1['fa62']; ?>"  /> </td>
        <td><input type="text" name="fa63" value="<?php echo $row1['fa63']; ?>"  /> </td>

    </tr>
   
    <tr>
        <td><input type="text" name="fa71" value="<?php echo $row1['fa71']; ?>"  /></td>
                    <td ><input type="text" name="fa72"  value="<?php echo $row1['fa72']; ?>"  /> </td>
        <td><input type="text" name="fa73" value="<?php echo $row1['fa73']; ?>"  /> </td>


    </tr>

    <tr>
        <td><input type="text" name="fa81" value="<?php echo $row1['fa81']; ?>"  /></td>
                    <td ><input type="text" name="fa82"  value="<?php echo $row1['fa82']; ?>"  /> </td>
        <td><input type="text" name="fa83" value="<?php echo $row1['fa83']; ?>"  /> </td>

    </tr>

    <tr>
       <td><input type="text" name="fa91" value="<?php echo $row1['fa91']; ?>"  /></td>
                    <td ><input type="text" name="fa92"  value="<?php echo $row1['fa92']; ?>"  /> </td>
        <td><input type="text" name="fa93" value="<?php echo $row1['fa93']; ?>"  /> </td>

    </tr>
  
    <tr>
        <td><input type="text" name="fa101" value="<?php echo $row1['fa101']; ?>"  /></td>
                    <td ><input type="text" name="fa102"  value="<?php echo $row1['fa102']; ?>"  /> </td>
        <td><input type="text" name="fa103" value="<?php echo $row1['fa103']; ?>"  /> </td>


    </tr>
 
    </table>
 <hr> 
 <b>23. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities - Non remunerative (upload relevant document)as per Gazette Note 1(4): </b> <br><br>
 <textarea style="width: 800px; height: 50px;" name="edp" ><?php echo $row['edp']; ?>
    </textarea>
         <hr> 
         <b>24. Awards and Recognitions (Upload photocopies)</b><br><br>
        
         <textarea style="width: 800px; height: 50px;" name="ar" > <?php echo $row['ar']; ?>
    </textarea>
     <hr> 
     <b>25. Any other relevant information you may like to furnish:</b><br><br>
     <textarea style="width: 800px; height: 50px;" name="ao" ><?php echo $row['ao']; ?>
    </textarea>
        <hr> 
        <b>26. Names and addresses of two Professional References (Optionally, testimonials may be sent by email to Registrar NITK Surathkal nitkregistrar@gmail.com) </b><br><br>
    
        <div class="">
<div class="floatLeft">
<table>
<tr>    <tr>
        <td align="left" >Name</td>
        <td >1.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr11" value="<?php echo $row['pr11']; ?>"  /></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td  > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr12"  value="<?php echo $row['pr12']; ?>"  /> </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;"  name="pr13" >
            <?php echo $row['pr13']; ?>
                </textarea>
</tr>

</table>
</div>

<div class="floatRight">
<table>
    <tr>     <td></td><td >2.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr21" value="<?php echo $row['pr21']; ?>"  /></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr22"  value="<?php echo $row['pr22']; ?>"  /> </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;"  name="pr23" >
            <?php echo $row['pr23']; ?>
                </textarea>
</tr>
 </tr>
</table>
</div>
</div>
        <br>
        <br>
         <br>
        <br> <br>
        <br> <br>
        <br> <br>
        <br>
        <div>
        <hr> </div>
        
     <b>27. Please indicate how in your opinion you can contribute to NITK's growth. (upload relevant document)
     </b><br><br>    <textarea style="width: 800px; height: 50px;" name="ao1" placeholder="Limited to 250 words"    /><?php echo $row['ao1']; ?>
    </textarea>
     <hr>  
<!-- <b> Two experiments or computational projects added to teaching laboratories.</b><br><br>
     <textarea name="lab" style="width: 800px; height: 50px;" rows="" cols="200"  ><?php echo $row1['lab']; ?></textarea>
    
     <hr> -->
      <b> Strong liaison with industry; Offering courses through application of ICT. </b>             
     <br> <br>
     <textarea name="industry" style="width: 800px; height: 50px;"  rows="" cols="200" ><?php echo $row1['industry']; ?></textarea>
    
     <hr>
<p width="80%" style="width:80%">   <b> 28. </b>I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
     the rules and regulations of the institute and also the directions given to me from time to time. </p>
     <table> <tr>
             <td> <b>  Date: </b></td> <td> 
                 <td> <input type="text" id="datepicker38"  name="date"  value="<?php echo $row['date']; ?>"  />  </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><b>Place:</b></td><td> <input type="text" name="place"   value="<?php echo $row['place']; ?>"  /> </td>
    </tr>
    <tr> <td colspan="2">   </tr> </table>
     <hr align="left" width="80%"> 
    <table  align="center" width="40%"> 
        <tr>
            <td><p align="center"> <input id="btn1" type="submit" value=" Save & Next" name="Save & Next" > </p>
  <td></tr>
   </table>
            
</form>
        <hr>
    </body>
</html>
