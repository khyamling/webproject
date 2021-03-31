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

$UID=$_POST["UID"]; 
$UID=$_SESSION['Aemail'];

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
    $eligible=$_POST['eligible'];
    $remark=$_POST['remark'];
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
     
     $sql  = "SELECT * FROM  newrules3src WHERE appn='$vapn' ";
     $result =  mysqli_query($link, $sql);
     $num_rows = mysqli_num_rows($result);
    //echo $num_rows;
if($num_rows > 0)
{
    $sql="UPDATE newrules3src  SET name='$name', loneproj='$loneproj', teamproj='$teamproj', coproj='$coproj', patgrant='$patgrant', consult='$consult', loneguide='$loneguide',
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
                                     teach='$teach', pg='$pg', ug='$ug', book='$book', chapter='$chapter', outreach='$outreach', ina='$ina', placement1='$placement1', placement2='$placement2', email='$UID',status='$status1' WHERE appn='$nappn'";
mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated";
 }

else{
echo "fail" .mysqli_error($link); echo $sql;}

}

else
{    
$sql = "insert into newrules3src values('$name', '$loneproj', '$teamproj', '$coproj', '$patgrant', '$consult', '$loneguide',
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

$sql =  "SELECT * FROM eq3page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
$sql =  "SELECT * FROM eq3 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();

//$sql =  "SELECT * FROM crediteq1 WHERE appn='$vapn'";
//$result3 =  mysqli_query($link, $sql);
//$row2=$result3->fetch_array();
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

      

       // echo "Records added successfully. ";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection



    ?>
 
<?php    
 $a1 = $_POST['loneprojscr'];
$b1 = $_POST['teamprojscr'];
$c1 = $_POST['coprojscr'];
$d1 = $_POST['patgrantscr'];
$a2 = $_POST['consultscr'];
$a3 = $_POST['loneguidescr'];
$b3 = $_POST['headguidescr'];
$c3 = $_POST['coguidescr'];
$c32 = $_POST['coguide2scr'];
$c33 = $_POST['coguide3scr'];
$c34 = $_POST['coguide4scr'];
$c35 = $_POST['coguide5scr'];
$a4 = $_POST['jsingscr'];
$a41 = $_POST['jmainscr'];
$b4 = $_POST['jotherscr'];
$b42 = $_POST['jother2scr'];
$b43 = $_POST['jother3scr'];
$b44 = $_POST['jother4scr'];
$b45 = $_POST['jother5scr'];
$a5 = $_POST['csingscr'];
$a51 = $_POST['cmainscr'];
$b5 = $_POST['cotherscr'];
$b52 = $_POST['cother2scr'];
$b53 = $_POST['cother3scr'];
$b54 = $_POST['cother4scr'];
$b55 = $_POST['cother5scr'];
$b56 = $_POST['cother6scr'];
$b57 = $_POST['cother7scr'];
$b58 = $_POST['cother8scr'];

$hod6 = $_POST['sixadmin1scr'];
$dean6 = $_POST['sixadmin2scr'];
$cwaren6 = $_POST['sixadmin3scr'];
$tp6 = $_POST['sixadmin4scr'];
$advisor6 = $_POST['sixadmin5scr'];
$cvo6 = $_POST['sixadmin6scr'];
$pi6 = $_POST['sixadmin7scr'];
$teqip6 = $_POST['sixadmin8scr'];

$warden7 = $_POST['sevenadminothers1scr'];
$asstwarden7 = $_POST['sevenadminothers2scr'];
$astdean7 = $_POST['sevenadminothers3scr'];
$chairman7 = $_POST['sevenadminothers4scr'];
$faculty7 = $_POST['sevenadminothers5scr'];
$it7= $_POST['sevenadminothers6scr'];
$library7 = $_POST['sevenadminothers7scr'];
$admission7 = $_POST['sevenadminothers8scr'];
$student7 = $_POST['sevenadminothers9scr'];
$other7 = $_POST['sevenadminothers10scr'];

$converner8 = $_POST['eightadminresp1scr'];
$special8 = $_POST['eightadminresp2scr'];
$facincharge8 = $_POST['eightadminresp3scr'];

$labin9 = $_POST['nineadminresp1scr'];
$deptlevel9 = $_POST['nineadminresp2scr'];

$a10 = $_POST['workshopscr'];

$a11 = $_POST['gian1scr'];
$b11 = $_POST['gian2scr'];
$a12 = $_POST['nationalscr'];
$a13 = $_POST['teachexpscr'];
$a14 = $_POST['eslabscr'];
$a15 = $_POST['teachscr'];
$a16 = $_POST['pgscr'];
$a17 = $_POST['ugscr'];
$a18 = $_POST['bookscr'];
$a19 = $_POST['chapterscr'];
$a20 = $_POST['outreachscr'];
$a21 = $_POST['inascr'];
$a22 = $_POST['placement1scr'];
$b22 = $_POST['placement1scr'];
    
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




$sql =  "SELECT * FROM newrules3 WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
#$sql =  "SELECT * FROM newrules2 WHERE appn='$nappn'";
##$result2 =  mysqli_query($link, $sql);
#$row1=$result2->fetch_array();
/*
$sql =  "SELECT * FROM postapplied WHERE appn='$vapn'";
$result3 =  mysqli_query($link, $sql);
 * 
 */
$sql1 =  "SELECT * FROM newrules3src WHERE appn='$vapn'";
$result11 =  mysqli_query($link, $sql1);

if(($scrrow=$result11->fetch_array()))
{
$row1=$scrrow;
$xxxx=1;
}
else
{
$xxxx=0;
$row1=$row;
}
$post= substr($vapn, 2, 1);
#$branch = substr($nappn, 3, 3);



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


/*if($branch=="AMH")
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
}*/
 


if($result1!=null )
{      
   } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);   
    
    
    ?>
    
<!--echo $result1.$result3.$result4.$result5.$result7.$result9.$result11.$result13.$result15.$result17.$result18.$result19.$result20.$result21.$result22.$result24.$result26.$result28.$result30.$result32.$result34.$result35.$result37.$result39 ?> -->

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
                    <a class="brand" href="adminsrc.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $aid; ?> <i class="caret"></i>
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
                                                    
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
          
       <form action="veq1.php" method="post" name="f1" >
      <hr>
      <table  rule="rows">
          <tr>
              <th>  <p> Your application  No :  <input type="text"  name="nappn" value="<?php echo $vapn ; ?> "  readonly/> </p> </th> </td>
                 </tr>

      </table>
      <hr>
<input type="hidden" name="back" value="1" readonly/>
<input type="hidden" name="UID" value="<?php echo $UID ; ?> " readonly/>
      <table>
          <tr>
              <th>  Faculty Name : </th> <td> <input type="text"  name="name"  masize="200" value="<?php echo $row['name'];  ?> " readonly/>
 </td> </tr>
</table>
      <hr>
<table CELLPADDING=10 cellspacing="10" > 
<tr><b>Credits Details: </tr> 
<br>
    <tr> <th> Applicant credit </th><td>  <input type="text" name="usercredit" value="<?php echo $usercredit;  ?> " readonly/></td> </tr>
<tr><th> Verified Credit</th> <td>  <input type="text" name="scrcredit" value="<?php echo $credit1; ?>" readonly /></td> </tr>
</table>
            
</table>
 <hr>  
 <table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    1. One external sponsored R & D Projects completed or ongoing/patent granted </b> </p> </tr>
 <tr> <td>  1a. No. of project - Completed or Ongoing as Lone PI</td> 
 <td>  <input name="loneproj" type="number" size="50" maxlength="150" value="<?php echo $row['loneproj'] ?>"   readonly> </td> <td>  <input name="loneprojscr" type="number" size="50" maxlength="150" value="<?php echo $row1['loneproj'] ?>"  readonly> </td> </tr>
 <tr> <td>  1b. No. of project - Completed or Ongoing as Team PI </td> 
     <td>  <input name="teamproj" type="number" maxlength="150" size="25" value="<?php echo $row['teamproj'] ?>" readonly> </td> <td>  <input name="teamprojscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teamproj'] ?>" readonly> </td> </tr>
 <tr> <td> 1c. No. of project - Completed or Ongoing as Co-PI </td>
     <td>   <input name="coproj" type="number" maxlength="150" size="25" value="<?php echo $row['coproj'] ?>" readonly> </td> <td>   <input name="coprojscr" type="number" maxlength="150" size="25" value="<?php echo $row1['coproj'] ?>" readonly> </td> </tr>
 <tr> <td>   1d. No. of  Patent - Granted </td> 
 <td>  <input name="patgrant" type="number" maxlength="150" size="25" value="<?php echo $row['patgrant'] ?>" readonly> </td>
 <td>  <input name="patgrantscr" type="number" maxlength="150" size="25" value="<?php echo $row1['patgrantscr'] ?>" readonly > </td>
</tr>
</td>
</table>
 <hr>      
       
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p>  <b>    2. Consultancy Projects </b> </p> </tr>
 <tr> <td> No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy </td>
 <td>     <input name="consult" type="number" maxlength="150" size="25"  value="<?php echo $row['consult'] ?>" readonly> </td> 
<td>     <input name="consultscr" type="number" maxlength="150" size="25"  value="<?php echo $row1['consult'] ?>" readonly> </td> 
</tr>
</table>
   
 <hr>
 <table CELLPADDING=10 cellspacing="10">
 <tr> <p> <b>3.Doctorates Guided(including thesis submitted cases) </b> </p> </tr>
<tr>3a. No. of  PhD Completed/Thesis submitted - Lone supervisor</tr>
<tr>  <td>    <input name="loneguide" type="number" size="50" maxlength="150"  value="<?php echo $row['loneguide'] ?>"  readonly> </td> <td>    <input name="loneguidescr" type="number" size="50" maxlength="150"  value="<?php echo $row1['loneguide'] ?>" readonly> </td> </tr>
</table>
 <table CELLPADDING=10 cellspacing="10">
<tr> 3b. No. of  PhD Completed/Thesis submitted jointly as Head supervisor</tr>
<tr> <td>  <input name="headguide" type="number" maxlength="150" size="25" value="<?php echo $row['headguide'] ?>"  readonly> </td> <td>  <input name="headguidescr" type="number" maxlength="150" size="25" value="<?php echo $row1['headguide'] ?>" readonly > </td></tr>
</table>
<table CELLPADDING=10 cellspacing="10">
<tr>3c. No. of PhD Completed/Thesis submitted - Co-supervisor </tr> 
<tr>
    <td>One Co-supervisor  <input name="coguide" type="number" maxlength="150" size="25" value="<?php echo $row['coguide'] ?>" readonly > </td> 
    <td>Two Co-supervisor  <input name="coguide2" type="number" maxlength="150" size="25" value="<?php echo $row['coguide2'] ?>"  readonly> </td> 
    <td>Three Co-supervisor  <input name="coguide3" type="number" maxlength="150" size="25" value="<?php echo $row['coguide3'] ?>" readonly> </td> 
    <td>Four Co-supervisor  <input name="coguide4" type="number" maxlength="150" size="25" value="<?php echo $row['coguide4'] ?>" readonly > </td> 
    <td>Greater than Five Co-supervisor   <input name="coguide5" type="number" maxlength="150" size="25" value="<?php echo $row['coguide5'] ?>" readonly> </td> 
 </tr>
<tr>
<td>One Co-supervisor  <input name="coguidescr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide'] ?>" readonly > </td> 
    <td>Two Co-supervisor  <input name="coguide2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide2'] ?>"  readonly> </td> 
    <td>Three Co-supervisor  <input name="coguide3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide3'] ?>"readonly > </td> 
    <td>Four Co-supervisor  <input name="coguide4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide4'] ?>"  readonly> </td> 
    <td>Greater than Five Co-supervisor   <input name="coguide5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide5'] ?>" readonly> </td> 
 </tr>
</table>
 <hr>    
       
<table CELLPADDING=10 cellspacing="10" >
 <tr> <p> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b> </p> </tr>
<tr>  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers </tr>
<tr> <td> <input name="jsing" type="number" size="50" maxlength="150"  value="<?php echo $row['jsing'] ?>" readonly> </td> <td> <input name="jsingscr" type="number" size="50" maxlength="150"  value="<?php echo $row1['jsing'] ?>" readonly > </td> </tr>


</table>
<table CELLPADDING=10 cellspacing="10" >
<tr> 4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor </tr>
<tr> <td>   <input name="jmain" type="number" size="50" maxlength="150"  value="<?php echo $row['jmain'] ?>" readonly > </td> <td>   <input name="jmainscr" type="number" size="50" maxlength="150"  value="<?php echo $row1['jmain'] ?>" readonly > </td>  </tr>
</table>
    <table CELLPADDING=10 cellspacing="10" >
     <tr> 4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author </tr>
     <tr>  <td>One Co-Author  <input name="jother" type="number" maxlength="150" size="25" value="<?php echo $row['jother'] ?>"  readonly> </td>
         <td>Two Co-Author  <input name="jother2" type="number" maxlength="150" size="25" value="<?php echo $row['jother2'] ?>"  readonly> </td>
         <td>Three Co-Author  <input name="jother3" type="number" maxlength="150" size="25" value="<?php echo $row['jother3'] ?>"  readonly> </td>
         <td>Four Co-Author  <input name="jother4" type="number" maxlength="150" size="25" value="<?php echo $row['jother4'] ?>"  readonly> </td>
         <td>Greater than Five Co-Author  <input name="jother5" type="number" maxlength="150" size="25" value="<?php echo $row['jother5'] ?>" readonly> </td>
 </tr>

 <tr>  <td>One Co-Author  <input name="jotherscr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother'] ?>" readonly > </td>
         <td>Two Co-Author  <input name="jother2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother2'] ?>" readonly > </td>
         <td>Three Co-Author  <input name="jother3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother3'] ?>" readonly > </td>
         <td>Four Co-Author  <input name="jother4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother4'] ?>" readonly > </td>
         <td>Greater than Five Co-Author  <input name="jother5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother5'] ?>" readonly> </td>
 </tr>
</table>
 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>5. One Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b> </p></tr>
<tr> 5a. No. of Conference paper - Single Author Papers</tr>
<tr> <td> <input name="csing" type="number" maxlength="150" size="25" value="<?php echo $row['csing'] ?>" readonly >   </td> <td> <input name="csingscr" type="number" maxlength="150" size="25" value="<?php echo $row1['csing'] ?>" readonly >   </td></tr>
</table>
      <table CELLPADDING=10 cellspacing="10" >
<tr> 5b. No. of Conference paper - First author/Main supervisor </tr>
<tr> <td> <input name="cmain" type="number" maxlength="150" size="25" value="<?php echo $row['cmain'] ?>" readonly >  </td> <td> <input name="cmainscr" type="number" maxlength="150" size="25" value="<?php echo $row1['cmain'] ?>" readonly >  </td></tr>
</table>
  <table CELLPADDING=10 cellspacing="10" >
<tr> 5c. No. of  Conference paper - Co-author</tr>
<tr>  <td>One Co-Author  <input name="cother" type="number" maxlength="150" size="25" value="<?php echo $row['cother'] ?>" readonly> </td>
    <td>Two Co-Author   <input name="cother2" type="number" maxlength="150" size="25" value="<?php echo $row['cother2'] ?>" readonly> </td>
     <td>Three Co-Author <input name="cother3" type="number" maxlength="150" size="25" value="<?php echo $row['cother3'] ?>" readonly> </td>
     <td>Four Co-Author  <input name="cother4" type="number" maxlength="150" size="25" value="<?php echo $row['cother4'] ?>" readonly> </td>
     <td>Five Co-Author  <input name="cother5" type="number" maxlength="150" size="25" value="<?php echo $row['cother5'] ?>" readonly> </td>
     <td>Six Co-Author   <input name="cother6" type="number" maxlength="150" size="25" value="<?php echo $row['cother6'] ?>" readonly> </td>
     <td>Seven Co-Author <input name="cother7" type="number" maxlength="150" size="25" value="<?php echo $row['cother7'] ?>" readonly>  </td>
     <td>Greater than  Eight Co-Author<input name="cother8" type="number" maxlength="150" size="25" value="<?php echo $row['cother8'] ?>" readonly> </td>
 </tr>

<tr>  <td>One Co-Author  <input name="cotherscr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother'] ?>" readonly> </td>
    <td>Two Co-Author   <input name="cother2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother2'] ?>" readonly> </td>
     <td>Three Co-Author <input name="cother3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother3'] ?>" readonly> </td>
     <td>Four Co-Author  <input name="cother4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother4'] ?>" readonly > </td>
     <td>Five Co-Author  <input name="cother5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother5'] ?>" readonly> </td>
     <td>Six Co-Author   <input name="cother6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother6'] ?>" readonly> </td>
     <td>Seven Co-Author <input name="cother7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother7'] ?>" readonly>  </td>
     <td>Greater than  Eight Co-Author<input name="cother8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother8'] ?>" readonly> </td>
 </tr>
</table>       

 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>     6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the HoD position was held </td>
    <td>  <input name="sixadmin1" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin1'] ?>"  readonly> </td>
    <td>  <input name="sixadmin1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin1'] ?>"  readonly> </td>
</tr>
<tr> <td> Number of semesters the Dean position was held </td>
    <td> <input name="sixadmin2" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin2'] ?>"  readonly> </td>
    <td> <input name="sixadmin2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin2'] ?>"  readonly> </td>
</tr>
<tr> <td> Number of semesters the Chief warden position was held </td> 
    <td>  <input name="sixadmin3" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin3'] ?>"  readonly> </td> 
  <td>  <input name="sixadmin3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin3'] ?>"  readonly> </td> </tr>
          
<tr> <td> Number of semesters the Professor Incharge(T&P) position was held </td> 
    <td> <input name="sixadmin4" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin4'] ?>"  readonly> </td> 
   <td> <input name="sixadmin4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin4'] ?>" readonly> </td> </tr>
          
<tr> <td> Number of semesters the Advisor(Estate) position was held </td> 
    <td>  <input name="sixadmin5" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin5'] ?>"  readonly> </td> 
   <td>  <input name="sixadmin5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin5'] ?>"  readonly> </td> </tr>           
<tr> <td> Number of semesters the CVO position was held </td> 
    <td>  <input name="sixadmin6" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin6'] ?>"  readonly>   </td>
 <td>  <input name="sixadmin6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin6'] ?>" readonly >   </td>
 </tr>
<tr> <td>
        Number of semesters the PI(Exam) position was held </td> 
    <td> <input name="sixadmin7" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin7'] ?>"  readonly>   </td> 
<td> <input name="sixadmin7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin7'] ?>"  readonly>   </td>
</tr>
<tr>
    <td> Number of semesters the TEQIP(Coordinator) position was held </td>
    <td>  <input name="sixadmin8" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin8']?>"  readonly>  </td> 
<td>  <input name="sixadmin8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin8']?>" readonly >  </td>
</tr>
</table>  
 <hr>

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion):</b> </p> </tr>

<tr> <td> Number of semesters the Warden positions was held </td>
    <td>  <input name="sevenadminothers1" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers1'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers1'] ?>"  readonly>  </td>
</tr>

<tr> <td> Number of semesters the Assstistance warden positions was held </td> 
<td>  <input name="sevenadminothers2" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers2'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers2'] ?>"  readonly >  </td> 
</tr>  

<tr> <td> Number of semesters the Associate positions was held </td> 
    <td>   <input name="sevenadminothers3" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers3'] ?>" readonly > </td>
<td>   <input name="sevenadminothers3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers3'] ?>" readonly > </td>
</tr>

<tr> <td>  Number of semesters the Chairman/Convener institute academic committees positions was held </td> 
    <td>  <input name="sevenadminothers4" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers4'] ?>"  readonly>  </td>
<td>  <input name="sevenadminothers4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers4'] ?>" readonly >  </td>
 </tr>

<tr> <td> Number of semesters the Faculty In charge Computer Center positions was held </td>
    <td> <input name="sevenadminothers5" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers5'] ?>"  readonly>  </td>
 <td> <input name="sevenadminothers5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers5'] ?>"  readonly>  </td>
</tr>

<tr> <td> Number of semesters the IT Services positions was held </td> 
<td>  <input name="sevenadminothers6" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers6'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers6'] ?>"  readonly>  </td>
</tr>
<tr> <td> Number of semesters the Library positions was held </td>
    <td>     <input name="sevenadminothers7" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers7'] ?>"  readonly>    </td>
<td>     <input name="sevenadminothers7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers7'] ?>" readonly >    </td>
 </tr>
<tr>
    <td> Number of semesters the Admission center positions was held </td>
    <td> <input name="sevenadminothers8" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers8'] ?>"  readonly>  </td> 
<td> <input name="sevenadminothers8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers8'] ?>" readonly >  </td> 
</tr> 
      
<tr> <td> Number of semesters the Student Activity positions was held </td>
    <td>  <input name="sevenadminothers9" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers9'] ?>"  readonly>  </td> 
 <td>  <input name="sevenadminothers9scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers9'] ?>" readonly >  </td> 
</tr>
          
<tr> <td> Number of semesters the  Other Institutional Activity positions was held </td>
    <td> <input name="sevenadminothers10" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers10'] ?>"  readonly>    </td> 
<td> <input name="sevenadminothers10scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers10'] ?>"  readonly>    </td>
</tr>
</table>  
            
 <hr>
 
<table CELLPADDING=10 cellspacing="10" > 
    <tr> <p> <b>    8. Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Chairman/Convener standing committees position was held </td>
    <td>   <input name="eightadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp1'] ?>"  readonly>  </td> 
<td>   <input name="eightadminresp1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp1'] ?>" readonly >  </td>
</tr>  
  
<tr> <td> Number of semesters the Chairman/Convener special committees position was held </td>
    <td> <input name="eightadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp2'] ?>"  readonly> </td> 
<td> <input name="eightadminresp2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp2'] ?>"  readonly> </td>
</tr>      
 
<tr> <td> Number of semesters the Fac-incharge of different Units position was held </td>
    <td> <input name="eightadminresp3" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp3'] ?>"  readonly>   </td>
<td> <input name="eightadminresp3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp3'] ?>" readonly >   </td>      
 </tr>
</table>        
            
 <hr>            

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    9. Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Lab incharge positions was held </td> 
    <td>  <input name="nineadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp1'] ?>"  readonly>   </td> 
<td>  <input name="nineadminresp1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['nineadminresp1'] ?>"  readonly >   </td> </tr>   

<tr> <td> Number of semesters the Dept. level committee positions was held </td>
    <td> <input name="nineadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp2'] ?>"  readonly>  </td>     
<td> <input name="nineadminresp2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['nineadminresp2'] ?>"  readonly>  </td> </tr>    
</table>       

 <hr>
<table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)</b> </p></tr>

<tr> <td> Number of workshops/courses conducted as coordinator or convenor </td>
    <td> <input name="workshop" type="number" maxlength="150" size="25" value="<?php echo $row['workshop'] ?>"  readonly>  </td>        
    <td> <input name="workshopscr" type="number" maxlength="150" size="25" value="<?php echo $row1['workshop'] ?>" readonly >  </td>        
 </tr>
</td>
</table>       
  
 <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>
        <b> 11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion) </b> </p></tr>
<tr> <td> No. of GIAN Course Program Coordinator-2 week </td>
    <td>  <input name="gian1" type="number" maxlength="150" size="25" value="<?php echo $row['gian1'] ?>"  readonly> </td> 
 <td>  <input name="gian1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['gian1'] ?>"  readonly> </td> </tr>
<tr> <td> No. of  GIAN Course Program Coordinator-1 week </td>
    <td> <input name="gian2" type="number" maxlength="150" size="25" value="<?php echo $row['gian2'] ?>"  readonly> </td>
   <td> <input name="gian2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['gian2'] ?>" readonly > </td>
    </tr>
</table>
  
 <hr> 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 12. National/International Conference organized as Chairman/Secretary(since last promotion) </b> </p> </tr>
<tr> <td> Number of National/International Conference organized as Chairman/Secretary </td> 
    <td> <input name="national" type="number" maxlength="150" size="25" value="<?php echo $row['national'] ?>"  readonly> </td> 
   <td> <input name="nationalscr" type="number" maxlength="150" size="25" value="<?php echo $row1['national'] ?>" readonly> </td> </tr>
</table>
 <hr>
 
<table  CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b> 13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of year(since last promotion) </b> </p> </tr>
<tr> <td> Teaching Experience(In Year) </td> 
<td>  <input name="teachexp" type="number" maxlength="150" size="25" value="<?php echo $row['teachexp'] ?>"  readonly> </td> 
<td>  <input name="teachexpscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teachexp'] ?>" readonly> </td> 
    </tr>
</table>
      
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  14. Establishment of new lab(Since last promotion)  </b> </p> </tr>
<tr> <td> No. of new lab establishment </td> 
    <td> <input name="eslab" type="number" maxlength="150" size="25" value="<?php echo $row['eslab'] ?>"  readonly> </td>
 <td> <input name="eslabscr" type="number" maxlength="150" size="25" value="<?php echo $row1['eslab'] ?>"  > </td></tr>
</table>
       
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)  </b> </p> </tr>
<tr> <td> Teaching the course(with credit over and above 6)</td>
    <td> <input name="teach" type="number" maxlength="150" size="25" value="<?php echo $row['teach'] ?>"  readonly>    </td>
<td> <input name="teachscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teach'] ?>" readonly>    </td>
    </tr>
</table>
 
 <hr> 
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>  16. PG Dissertation guided(Since last promotion) </b> </p> </tr>
 <tr><td> Number of PG Dissertation(s) guided </td>
     <td> <input name="pg" type="number" maxlength="150" size="25" value="<?php echo $row['pg'] ?>"  readonly>  </td>
<td> <input name="pgscr" type="number" maxlength="150" size="25" value="<?php echo $row1['pg'] ?>" readonly>  </td>
</tr>
</table>
 
 <hr>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 17. UG Project guided(Since last promotion) </b> </p> </tr>
 <tr> <td> Number of UG Dissertation(s) guided </td> 
     <td> <input name="ug" type="number" maxlength="150" size="25" value="<?php echo $row['ug'] ?>"  readonly> </td> 
    <td> <input name="ugscr" type="number" maxlength="150" size="25" value="<?php echo $row1['ug'] ?>"  readonly> </td> </tr>
 </tr>

</table>
 
 <hr>  
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)  </b> </p> </tr>
 <tr> <td> Number of Text/Reference books published</td>
     <td> <input name="book" type="number" maxlength="150" size="25" value="<?php echo $row['book']?>"  readonly> </td>
    <td> <input name="bookscr" type="number" maxlength="150" size="25" value="<?php echo $row1['book']?>" readonly> </td>
</tr>
</table>
      
 <hr>    
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion) </b> </p></tr>
<tr> <td> Number of Text/Reference books published </td>
    <td>  <input name="chapter" type="number" maxlength="150" size="25" value="<?php echo $row['chapter'] ?>" readonly > </td> 
 <td>  <input name="chapterscr" type="number" maxlength="150" size="25" value="<?php echo $row1['chapter'] ?>"  readonly> </td> 
</tr>
</table>

 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  20.Significant outreach Institute Activities(Since last promotion) </b> </p> </tr>
<tr> <td> Number of significant outreach institute activies </td> 
    <td>   <input name="outreach" type="number" maxlength="150" size="25" value="<?php echo $row['outreach'] ?>"  readonly> </td>
	<td>   <input name="outreachscr" type="number" maxlength="150" size="25" value="<?php echo $row1['outreach'] ?>" readonly > </td>
    </tr>
</table>
 
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion) </b> </p> </tr>
    
<tr> <td> Fellow IEEE, INA, FNAE, FNSc </td> 
    <td>   <input name="ina" type="number" maxlength="150" size="25" value="<?php echo $row['ina'] ?>"  readonly>  </td>
    <td>   <input name="inascr" type="number" maxlength="150" size="25" value="<?php echo $row1['ina'] ?>" readonly >  </td>
    </tr>
</table>
      
 <hr>     
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  22.Placement percentage(Only for the placement cell officers)-Since last promotion </b> </p>
    <tr> <td> 22a. Number of years placement was above 85%</td> 
        <td>  <input name="placement1" type="number" maxlength="150" size="25" value="<?php echo $row['placement1'] ?>"  readonly>  </td>
	 <td>  <input name="placement1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['placement1'] ?>" readonly  >  </td> </tr>
    <tr> <td> 22b.Number of years placement was from 75 to 84% </td> 
        <td> <input name="placement2" type="number" maxlength="150" size="25" value="<?php echo $row['placement2'] ?>"  readonly>  </td> 
        <td> <input name="placement2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['placement2'] ?>" readonly >  </td>
 </tr>
</table>
 <hr>
<!--<br> <b>number of score is </b>: <br>-->
<table CELLPADDING=10 cellspacing="10" > 
<tr><b>Credits Details: </tr> 
<br>
    <tr> <th> Applicant credit </th><td>  <input type="text" name="usercredit" value="<?php echo $usercredit;  ?> " readonly/></td> </tr>
<tr><th> Verified Credit</th> <td>  <input type="text" name="scrcredit" value="<?php echo $credit1; ?>" readonly /></td> </tr>
</table>
<hr>
<table CELLPADDING=10 cellspacing="10" > 
<th>Eligible/Not Eligible</th> 
<td>
<input type="text" name="eligible" value="<?php echo $eligible;  ?> ">
</td>
<tr><th> Remark</th> <td><input type="text" id="btn41" name="remark"   value="<?php echo $remark; ?>" ></td>   </tr>
</table>
</hr>
<center>   <input type="submit" id="btn1" formaction="creditverify3.php" value="Edit" name="Submit">  <input type="submit" id="btn1" formaction="creditsubmit3.php" value="Submit" name="Submit">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <!--<input type="submit" id="btn1" formaction="rulesinserteq1.php" value="Calculate Credit" name="SubmitButton"> </center>-->
         
</form>
   <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
   </body>
   </html>
