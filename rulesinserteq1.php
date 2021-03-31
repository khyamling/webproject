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
$user_home = new USER();
$br=$_SESSION['br'];
$pos=$_SESSION['pos'];


if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

  $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
       $nappn=$_POST['nappn'];
       $name=$_POST['name'];
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
    // $usercredit1= mysqli_real_escape_string($link, $_POST['usercredit1']);
     
     $sql  = "SELECT * FROM  newrules1 WHERE email='$UID' and appn='$nappn' ";
     $result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0)
{
    $sql="UPDATE newrules1  SET name='$name', loneproj='$loneproj', teamproj='$teamproj', coproj='$coproj', patgrant='$patgrant', consult='$consult', loneguide='$loneguide',
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
$sql = "insert into newrules1 values('$name', '$loneproj', '$teamproj', '$coproj', '$patgrant', '$consult', '$loneguide',
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
$result2=2*$a2;

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

<?php 
//echo $result1;
 //echo $result3;
//echo $result4;
//echo $result5;
/*echo $result7;
echo $result9;
echo $result11;
echo $result13;
echo $result15;
echo $result17;
echo $result18;
echo $result19;
echo $result20;
echo $result21;
echo $result22;
echo $result24;
echo $result26;
echo $result28;
echo $result30;
echo $result32;
echo $result34;
echo $result35;
echo $result37;
echo $result39;  */
//echo $result1.$result3.$result4.$result5.$result7.$result9.$result11.$result13.$result15.$result17.$result18.$result19.$result20.$result21.$result22.$result24.$result26.$result28.$result30.$result32.$result34.$result35.$result37.$result39 ?> 
 <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
       </head>
       
    <body>
   <div class="navbar navbar-fixed-top ">
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
								<li><a href="jaddd.php">Publication Details</a></li>
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                         
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
          
       <form action="eq1page.php" method="post" name="f1" >
           <hr>
            <table>
          <tr>
              <th>  <p> <font size="5"  face="Comic sans MS"  color="black" > Credit Earned:(System Calculated)  <input type="text"  name="credit1" value="<?php echo $credit1; ?>" readonly /> </font> </p> </th>
    <?php $_SESSION['credit1']=$credit1; ?>     
          </tr>
           </table>
      <hr>
      <table  rule="rows">
          <tr>
              <th>  <p> Your application  No :  <input type="text"  name="nappn" value="<?php echo $nappn; ?> "  readonly/> </p> </th>
                 </tr>
      </table>
      <hr>
      <table>
          <tr>
                    <th>  <p> Faculty Name :<input type="text"  name="name" value="<?php echo $name; ?> " /> </p></th>
            </tr>
      </table>
 <hr>  
 <table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    1. One external sponsored R & D Projects completed or ongoing/patent granted </b> </p> </tr>
 <tr> <td>  1a. No. of project - Completed or Ongoing as Lone PI</td> 
 <td>  <input name="loneproj" type="number" size="50" maxlength="150" value="<?php echo $loneproj ?>"   > </td> </tr>
 <tr> <td>  1b. No. of project - Completed or Ongoing as Team PI </td> 
     <td>  <input name="teamproj" type="number" maxlength="150" size="25" value="<?php echo $teamproj ?>" > </td> </tr>
 <tr> <td> 1c. No. of project - Completed or Ongoing as Co-PI </td>
     <td>   <input name="coproj" type="number" maxlength="150" size="25" value="<?php echo $coproj ?>" > </td> </tr>
 <tr> <td>   1d. No. of  Patent - Granted </td> 
 <td>  <input name="patgrant" type="number" maxlength="150" size="25" value="<?php echo $patgrant ?>" > </td>
</tr>
</td>
</table>
 <hr>      
       
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p>  <b>    2. Consultancy Projects </b> </p> </tr>
 <tr> <td> No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy </td>
 <td>     <input name="consult" type="number" maxlength="150" size="25"  value="<?php echo $consult ?>" > </td> </tr>
</table>
   
 <hr>
<table CELLPADDING=10 cellspacing="10">
 <tr> <p> <b>3.Doctorates Guided(including thesis submitted cases) </b> </p> </tr>
<tr>3a. No. of  PhD Completed/Thesis submitted - Lone supervisor</tr>
<tr>  <td><input name="loneguide" type="number" size="50" maxlength="150"  value="<?php echo $loneguide ?>" > </td> </tr>
</table>
 <table CELLPADDING=10 cellspacing="10">
<tr> 3b. No. of  PhD Completed/Thesis submitted jointly as Head supervisor</tr>
<tr><td><input name="headguide" type="number" maxlength="150" size="25" value="<?php echo $headguide ?>" > </td> </tr>
</table>
<table CELLPADDING=10 cellspacing="10">
<tr>3c. No. of PhD Completed/Thesis submitted - Co-supervisor </tr> 
<tr>
     <td>One Co-supervisor <input name="coguide" type="number" maxlength="150" size="25" value="<?php echo $coguide ?>" > </td>
     <td>Two Co-supervisor <input name="coguide2" type="number" maxlength="150" size="25" value="<?php echo $coguide2 ?>" > </td>
     <td>Three Co-supervisor <input name="coguide3" type="number" maxlength="150" size="25" value="<?php echo $coguide3 ?>" > </td>
     <td>Four Co-supervisor <input name="coguide4" type="number" maxlength="150" size="25" value="<?php echo $coguide4 ?>" > </td>
     <td>Greater than Five Co-supervisor <input name="coguide5" type="number" maxlength="150" size="25" value="<?php echo $coguide5 ?>" > </td>
</tr>
</table>
 <hr>    
       
<table CELLPADDING=10 cellspacing="10" >
 <tr> <p> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b> </p> </tr>
<tr>  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers </tr>
<tr> <td> <input name="jsing" type="number" size="50" maxlength="150"  value="<?php echo $jsing ?>"> </td> </tr>
</table>
<table CELLPADDING=10 cellspacing="10" >
 <tr> 4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor </tr>
 <tr> <td>   <input name="jmain" type="number" size="50" maxlength="150"  value="<?php echo $jmain ?>"  > </td> </tr>
</table>
    <table CELLPADDING=10 cellspacing="10" >
     <tr> 4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author </tr>
     <tr> 
          <td>One Co-Author <input name="jother" type="number" maxlength="150" size="25" value="<?php echo $jother ?>" > </td>
         <td>Two Co-Author <input name="jother2" type="number" maxlength="150" size="25"  value="<?php echo $jother2 ?>"  > </td>
         <td>Three Co-Author <input name="jother3" type="number" maxlength="150" size="25" value="<?php echo $jother3 ?>"   > </td>
         <td>Four Co-Author <input name="jother4" type="number" maxlength="150" size="25"  value="<?php echo $jother4 ?>"  > </td>
         <td>Greater than Five Co-Author <input name="jother5" type="number" maxlength="150" size="25" value="<?php echo $jother5 ?>"   > </td>
 </tr>
</table>
 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>5. One Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b> </p></tr>
<tr> 5a. No. of Conference paper - Single Author Papers</tr>
<tr> <td> <input name="csing" type="number" maxlength="150" size="25" value="<?php echo $csing ?>"   </td></tr>
</table>
      <table CELLPADDING=10 cellspacing="10" >
<tr> 5b. No. of Conference paper - First author/Main supervisor </tr>
<tr> <td>   <input name="cmain" type="number" maxlength="150" size="25" value="<?php echo $cmain ?>"  </td></tr>
</table>
  <table CELLPADDING=10 cellspacing="10" >
<tr> 5c. No. of  Conference paper - Co-author</tr>
<tr> <td>One Co-Author <input name="cother" type="number" maxlength="150" size="25" value="<?php echo $cother ?>" > </td>
    <td>Two Co-Author <input name="cother2" type="number" maxlength="150" size="25" value="<?php echo $cother2 ?>" > </td>
    <td>Three Co-Author <input name="cother3" type="number" maxlength="150" size="25" value="<?php echo $cother3 ?>"> </td>
    <td>Four Co-Author <input name="cother4" type="number" maxlength="150" size="25" value="<?php echo $cother4 ?>"> </td>
    <td>Five Co-Author <input name="cother5" type="number" maxlength="150" size="25" value="<?php echo $cother5 ?>"> </td>
    <td>Six Co-Author <input name="cother6" type="number" maxlength="150" size="25" value="<?php echo $cother6 ?>"> </td>
    <td>Seven Co-Author <input name="cother7" type="number" maxlength="150" size="25" value="<?php echo $cother7 ?>" > </td>
    <td>Greater than  Eight Co-Author <input name="cother8" type="number" maxlength="150" size="25" value="<?php echo $cother8 ?>" > </td>
</tr>
</table>        
 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>     6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the HoD position was held </td>
    <td>  <input name="sixadmin1" type="number" maxlength="150" size="25" value="<?php echo $sixadmin1 ?>"  > </td> </tr>
<tr> <td> Number of semesters the Dean position was held </td>
    <td> <input name="sixadmin2" type="number" maxlength="150" size="25" value="<?php echo $sixadmin2 ?>"  > </td></tr>
<tr> <td> Number of semesters the Chief warden position was held </td> 
    <td>  <input name="sixadmin3" type="number" maxlength="150" size="25" value="<?php echo $sixadmin3 ?>"  > </td> </tr>
          
<tr> <td> Number of semesters the Professor Incharge(T&P) position was held </td> 
    <td> <input name="sixadmin4" type="number" maxlength="150" size="25" value="<?php echo $sixadmin4 ?>"  > </td> </tr>
          
<tr> <td> Number of semesters the Advisor(Estate) position was held </td> 
    <td>  <input name="sixadmin5" type="number" maxlength="150" size="25" value="<?php echo $sixadmin5 ?>"  > </td> </tr>
             
<tr> <td> Number of semesters the CVO position was held </td> 
    <td>  <input name="sixadmin6" type="number" maxlength="150" size="25" value="<?php echo $sixadmin6 ?>"  >   </td> </tr>
<tr> <td>
        Number of semesters the PI(Exam) position was held </td> 
    <td> <input name="sixadmin7" type="number" maxlength="150" size="25" value="<?php echo $sixadmin7 ?>"  >   </td> </tr>
<tr>
    <td> Number of semesters the TEQIP(Coordinator) position was held </td>
    <td>  <input name="sixadmin8" type="number" maxlength="150" size="25" value="<?php echo $sixadmin8 ?>"  >  </td> </tr>
</table>  
 <hr>

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion):</b> </p> </tr>

<tr> <td> Number of semesters the Warden positions was held </td>
    <td>  <input name="sevenadminothers1" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers1 ?>"  >  </td> </tr>

<tr> <td> Number of semesters the Assstistance warden positions was held </td> 
<td>  <input name="sevenadminothers2" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers2 ?>"  >  </td> </tr>  

<tr> <td> Number of semesters the Associate positions was held </td> 
    <td>   <input name="sevenadminothers3" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers3 ?>"  > </td></tr>

<tr> <td>  Number of semesters the Chairman/Convener institute academic committees positions was held </td> 
    <td>  <input name="sevenadminothers4" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers4 ?>"  >  </td> </tr>

<tr> <td> Number of semesters the Faculty In charge Computer Center positions was held </td>
    <td> <input name="sevenadminothers5" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers5 ?>"  >  </td></tr>

<tr> <td> Number of semesters the IT Services positions was held </td> 
<td>  <input name="sevenadminothers6" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers6 ?>"  >  </td> </tr>
<tr> <td> Number of semesters the Library positions was held </td>
    <td>     <input name="sevenadminothers7" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers7 ?>"  >    </td> </tr>
<tr>
    <td> Number of semesters the Admission center positions was held </td>
    <td> <input name="sevenadminothers8" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers8 ?>"  >  </td> </tr> 
      
<tr> <td> Number of semesters the Student Activity positions was held </td>
    <td>  <input name="sevenadminothers9" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers9 ?>"  >  </td> </tr>
          
<tr> <td> Number of semesters the  Other Institutional Activity positions was held </td>
    <td> <input name="sevenadminothers10" type="number" maxlength="150" size="25" value="<?php echo $sevenadminothers10 ?>"  >    </td> </tr>
</table>  
            
 <hr>
 
<table CELLPADDING=10 cellspacing="10" > 
    <tr> <p> <b>    8. Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Chairman/Convener standing committees position was held </td>
    <td>   <input name="eightadminresp1" type="number" maxlength="150" size="25" value="<?php echo $eightadminresp1 ?>"  >  </td> </tr>  
  
<tr> <td> Number of semesters the Chairman/Convener special committees position was held </td>
    <td> <input name="eightadminresp2" type="number" maxlength="150" size="25" value="<?php echo $eightadminresp2 ?>"  > </td> </tr>      
 
<tr> <td> Number of semesters the Fac-incharge of different Units position was held </td>
    <td> <input name="eightadminresp3" type="number" maxlength="150" size="25" value="<?php echo $eightadminresp3 ?>"  >   </td>     
 </tr>
</table>        
            
 <hr>            

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    9. Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Lab incharge positions was held </td> 
    <td>  <input name="nineadminresp1" type="number" maxlength="150" size="25" value="<?php echo $nineadminresp1 ?>"  >   </td> </tr>   

<tr> <td> Number of semesters the Dept. level committee positions was held </td>
    <td> <input name="nineadminresp2" type="number" maxlength="150" size="25" value="<?php echo $nineadminresp2 ?>"  >  </td> </tr>    
</table>       

 <hr>
<table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)</b> </p></tr>

<tr> <td> Number of workshops/courses conducted as coordinator or convenor </td>
    <td> <input name="workshop" type="number" maxlength="150" size="25" value="<?php echo $workshop ?>"  >  </td>        
 </tr>
</td>
</table>       
  
 <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>
        <b> 11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion) </b> </p></tr>
<tr> <td> No. of GIAN Course Program Coordinator-2 week </td>
    <td>  <input name="gian1" type="number" maxlength="150" size="25" value="<?php echo $gian1 ?>"  > </td> </tr>
<tr> <td> No. of  GIAN Course Program Coordinator-1 week </td>
    <td> <input name="gian2" type="number" maxlength="150" size="25" value="<?php echo $gian2 ?>"  > </td>
    </tr>
</table>
  
 <hr> 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 12. National/International Conference organized as Chairman/Secretary(since last promotion) </b> </p> </tr>
<tr> <td> Number of National/International Conference organized as Chairman/Secretary </td> 
    <td> <input name="national" type="number" maxlength="150" size="25" value="<?php echo $national ?>"  > </td> </tr>
</table>
 <hr>
 
<table  CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b> 13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of semesters (since last promotion) </b> </p> </tr>
<tr> <td> Teaching Experience(In Semester) </td> 
<td>  <input name="teachexp" type="number" maxlength="150" size="25" value="<?php echo $teachexp ?>"  > </td> 
    </tr>
</table>
      
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  14. Establishment of new lab(Since last promotion)  </b> </p> </tr>
<tr> <td> No. of new lab establishment </td> 
    <td> <input name="eslab" type="number" maxlength="150" size="25" value="<?php echo $eslab ?>"  > </td></tr>
</table>
       
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)  </b> </p> </tr>
<tr> <td> Teaching the course(with credit over and above 6)</td>
    <td> <input name="teach" type="number" maxlength="150" size="25" value="<?php echo $teach ?>"  >    </td>
    </tr>
</table>
 
 <hr> 
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>  16. PG Dissertation guided(Since last promotion) </b> </p> </tr>
 <tr><td> Number of PG Dissertation(s) guided </td>
     <td> <input name="pg" type="number" maxlength="150" size="25" value="<?php echo $pg ?>"  >  </td>
</tr>
</table>
 
 <hr>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 17. UG Project guided(Since last promotion) </b> </p> </tr>
 <tr> <td> Number of UG Dissertation(s) guided </td> 
     <td> <input name="ug" type="number" maxlength="150" size="25" value="<?php echo $ug ?>"  > </td> </tr>
 </tr>
</table>
 
 <hr>  
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)  </b> </p> </tr>
 <tr> <td> Number of Text/Reference books published</td>
     <td> <input name="book" type="number" maxlength="150" size="25" value="<?php echo $book?>"  > </td>
</tr>
</table>
      
 <hr>    
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion) </b> </p></tr>
<tr> <td> Number of Text/Reference books published </td>
    <td>  <input name="chapter" type="number" maxlength="150" size="25" value="<?php echo $chapter ?>"  > </td> 
</tr>
</table>

 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  20.Significant outreach Institute Activities(Since last promotion) </b> </p> </tr>
<tr> <td> Number of significant outreach institute activies </td> 
    <td>   <input name="outreach" type="number" maxlength="150" size="25" value="<?php echo $outreach ?>"  > </td>
    </tr>
</table>
 
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion) </b> </p> </tr>
    
<tr> <td> Fellow IEEE, INA, FNAE, FNSc </td> 
    <td>   <input name="ina" type="number" maxlength="150" size="25" value="<?php echo $ina ?>"  >  </td>
    </tr>
</table>
      
 <hr>     
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  22.Placement percentage(Only for the placement cell officers)-Since last promotion </b> </p>
    <tr> <td> 22a. Number of years placement was above 85%</td> 
        <td>  <input name="placement1" type="number" maxlength="150" size="25" value="<?php echo $placement1 ?>"  >  </td> </tr>
    <tr> <td> 22b.Number of years placement was from 75 to 84% </td> 
        <td> <input name="placement2" type="number" maxlength="150" size="25" value="<?php echo $placement2 ?>"  >  </td> </tr>
</table>
 <hr>
<!--<br> <b>number of score is </b>: <br>-->
<center>   <input type="submit" id="btn1" formaction="eq1page.php" value="Submit" name="save">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" id="btn1" formaction="rulesinserteq1.php" value="Calculate Credit" name="SubmitButton"> </center>
         
        </form>
          
 <?php  
if(isset($_POST['SubmitButton'])){  
 $a1 = $_POST['loneproj'];
$b1 = $_POST['teamproj'];
$c1 = $_POST['coproj'];
$d1 = $_POST['patgrant'];
$a2 = $_POST['consult'];
$a3 = $_POST['loneguide'];
$b3 = $_POST['headguide'];
$c3 = $_POST['coguide'];
$a4 = $_POST['jmain'];
$b4 = $_POST['jother'];
$a5 = $_POST['cmain'];
$b5 = $_POST['cother'];

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
$result2=2*$a2;

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
$resultk=$a16;
$result25=0.5*$resultk;
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


 }
?>
    </body>
</html>

