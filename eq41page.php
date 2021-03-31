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
    $credit1=$_POST['credit1'];
   $nappn=$_POST['nappn'];
//database from advertisement no to areas of specialization
    $Page5 = mysqli_real_escape_string($link, $_POST['Page5']);
    $Page6 = mysqli_real_escape_string($link, $_POST['Page6']);
    $Page7 = mysqli_real_escape_string($link, $_POST['Page7']);
    $Page8 = mysqli_real_escape_string($link, $_POST['Page8']);
    $Page11 = mysqli_real_escape_string($link, $_POST['Page11']);
    $Page12 = mysqli_real_escape_string($link, $_POST['Page12']);
    $Page17 = mysqli_real_escape_string($link, $_POST['Page17']);
    $Page18 = mysqli_real_escape_string($link, $_POST['Page18']);
    $Page19 = mysqli_real_escape_string($link, $_POST['Page19']);
    $Page22 = mysqli_real_escape_string($link, $_POST['Page22']);
    $Page23 = mysqli_real_escape_string($link, $_POST['Page23']);
    $Page24 = mysqli_real_escape_string($link, $_POST['Page24']);
    $Page25 = mysqli_real_escape_string($link, $_POST['Page25']);
    $Page26 = mysqli_real_escape_string($link, $_POST['Page26']);
    $Page27 = mysqli_real_escape_string($link, $_POST['Page27']);
    $Page28 = mysqli_real_escape_string($link, $_POST['Page28']);
    $Page29 = mysqli_real_escape_string($link, $_POST['Page29']);
    $Page30 = mysqli_real_escape_string($link, $_POST['Page30']);
    $Page31 = mysqli_real_escape_string($link, $_POST['Page31']);
    $Page32 = mysqli_real_escape_string($link, $_POST['Page32']);
    $Page33 = mysqli_real_escape_string($link, $_POST['Page33']);
    $Page34 = mysqli_real_escape_string($link, $_POST['Page34']);
    $Page35 = mysqli_real_escape_string($link, $_POST['Page35']);
    $Page36 = mysqli_real_escape_string($link, $_POST['Page36']);
    $Page37 = mysqli_real_escape_string($link, $_POST['Page37']);
    $Page38 = mysqli_real_escape_string($link, $_POST['Page38']);
    $Page41 = mysqli_real_escape_string($link, $_POST['Page41']);
    $Page42 = mysqli_real_escape_string($link, $_POST['Page42']);
    $Page43 = mysqli_real_escape_string($link, $_POST['Page43']);
    $Page44 = mysqli_real_escape_string($link, $_POST['Page44']);
    $Page45 = mysqli_real_escape_string($link, $_POST['Page45']);
    $Page46 = mysqli_real_escape_string($link, $_POST['Page46']);
    $Page47 = mysqli_real_escape_string($link, $_POST['Page47']);
    $Page48 = mysqli_real_escape_string($link, $_POST['Page48']);
    $Page49 = mysqli_real_escape_string($link, $_POST['Page49']);
   /////////page2 db
    
    
    
    //database for 6.academic career record starting with SSLC
    
     $cer1 = mysqli_real_escape_string($link, $_POST['e11']);
    $year1 = mysqli_real_escape_string($link, $_POST['e12']);
    $school1 = mysqli_real_escape_string($link, $_POST['e13']);
    $Board1 = mysqli_real_escape_string($link, $_POST['e14']);
    $class1 = mysqli_real_escape_string($link, $_POST['e15']);
    $omarks1 = mysqli_real_escape_string($link, $_POST['e16']);
    $tmarks1 = mysqli_real_escape_string($link, $_POST['e17']);
    $percentage1 = mysqli_real_escape_string($link, $_POST['e18']);
    $status1 = mysqli_real_escape_string($link, $_POST['e19']);
  
    $cer2 = mysqli_real_escape_string($link, $_POST['e21']);
    $year2 = mysqli_real_escape_string($link, $_POST['e22']);
    $school2 = mysqli_real_escape_string($link, $_POST['e23']);
    $Board2 = mysqli_real_escape_string($link, $_POST['e24']);
    $class2 = mysqli_real_escape_string($link, $_POST['e25']);
    $omarks2 = mysqli_real_escape_string($link, $_POST['e26']);
    $tmarks2 = mysqli_real_escape_string($link, $_POST['e27']);
    $percentage2 = mysqli_real_escape_string($link, $_POST['e28']);
    $status2 = mysqli_real_escape_string($link, $_POST['e29']);
  
    $cer3 = mysqli_real_escape_string($link, $_POST['e31']);
    $year3 = mysqli_real_escape_string($link, $_POST['e32']);
    $school3 = mysqli_real_escape_string($link, $_POST['e33']);
    $Board3 = mysqli_real_escape_string($link, $_POST['e34']);
    $class3 = mysqli_real_escape_string($link, $_POST['e35']);
    $omarks3 = mysqli_real_escape_string($link, $_POST['e36']);
    $tmarks3 = mysqli_real_escape_string($link, $_POST['e37']);
    $percentage3 = mysqli_real_escape_string($link, $_POST['e38']);
    $status3 = mysqli_real_escape_string($link, $_POST['e39']);
  
    $cer4 = mysqli_real_escape_string($link, $_POST['e41']);
    $year4 = mysqli_real_escape_string($link, $_POST['e42']);
    $school4 = mysqli_real_escape_string($link, $_POST['e43']);
    $Board4 = mysqli_real_escape_string($link, $_POST['e44']);
    $class4 = mysqli_real_escape_string($link, $_POST['e45']);
    $omarks4 = mysqli_real_escape_string($link, $_POST['e46']);
    $tmarks4 = mysqli_real_escape_string($link, $_POST['e47']);
    $percentage4 = mysqli_real_escape_string($link, $_POST['e48']);
    $status4 = mysqli_real_escape_string($link, $_POST['e49']);
  
    $cer5 = mysqli_real_escape_string($link, $_POST['e51']);
    $year5 = mysqli_real_escape_string($link, $_POST['e52']);
    $school5 = mysqli_real_escape_string($link, $_POST['e53']);
    $Board5 = mysqli_real_escape_string($link, $_POST['e54']);
    $class5 = mysqli_real_escape_string($link, $_POST['e55']);
    $omarks5 = mysqli_real_escape_string($link, $_POST['e56']);
    $tmarks5 = mysqli_real_escape_string($link, $_POST['e57']);
    $percentage5 = mysqli_real_escape_string($link, $_POST['e58']);
    $status5 = mysqli_real_escape_string($link, $_POST['e59']);
  
    $cer6 = mysqli_real_escape_string($link, $_POST['e61']);
    $year6 = mysqli_real_escape_string($link, $_POST['e62']);
    $school6 = mysqli_real_escape_string($link, $_POST['e63']);
    $Board6 = mysqli_real_escape_string($link, $_POST['e64']);
    $class6 = mysqli_real_escape_string($link, $_POST['e65']);
    $omarks6 = mysqli_real_escape_string($link, $_POST['e66']);
    $tmarks6 = mysqli_real_escape_string($link, $_POST['e67']);
    $percentage6 = mysqli_real_escape_string($link, $_POST['e68']);
    $status6 = mysqli_real_escape_string($link, $_POST['e69']);
  
    $cer7 = mysqli_real_escape_string($link, $_POST['e71']);
    $year7 = mysqli_real_escape_string($link, $_POST['e72']);
    $school7 = mysqli_real_escape_string($link, $_POST['e73']);
    $Board7 = mysqli_real_escape_string($link, $_POST['e74']);
    $class7 = mysqli_real_escape_string($link, $_POST['e75']);
    $omarks7 = mysqli_real_escape_string($link, $_POST['e76']);
    $tmarks7 = mysqli_real_escape_string($link, $_POST['e77']);
    $percentage7 = mysqli_real_escape_string($link, $_POST['e78']);
    $status7 = mysqli_real_escape_string($link, $_POST['e79']);
  
    $cer8 = mysqli_real_escape_string($link, $_POST['e81']);
    $year8 = mysqli_real_escape_string($link, $_POST['e82']);
    $school8 = mysqli_real_escape_string($link, $_POST['e83']);
    $Board8 = mysqli_real_escape_string($link, $_POST['e84']);
    $class8 = mysqli_real_escape_string($link, $_POST['e85']);
    $omarks8 = mysqli_real_escape_string($link, $_POST['e86']);
    $tmarks8 = mysqli_real_escape_string($link, $_POST['e87']);
    $percentage8 = mysqli_real_escape_string($link, $_POST['e88']);
    $status8 = mysqli_real_escape_string($link, $_POST['e89']);
  
    
    $cer9 = mysqli_real_escape_string($link, $_POST['e91']);
    $year9 = mysqli_real_escape_string($link, $_POST['e92']);
    $school9 = mysqli_real_escape_string($link, $_POST['e93']);
    $Board9 = mysqli_real_escape_string($link, $_POST['e94']);
    $class9 = mysqli_real_escape_string($link, $_POST['e95']);
    $omarks9 = mysqli_real_escape_string($link, $_POST['e96']);
    $tmarks9 = mysqli_real_escape_string($link, $_POST['e97']);
    $percentage9 = mysqli_real_escape_string($link, $_POST['e98']);
    $status9 = mysqli_real_escape_string($link, $_POST['e99']);
   
    
    $cer10 = mysqli_real_escape_string($link, $_POST['e101']);
    $year10 = mysqli_real_escape_string($link, $_POST['e102']);
    $school10 = mysqli_real_escape_string($link, $_POST['e103']);
    $Board10 = mysqli_real_escape_string($link, $_POST['e104']);
    $class10 = mysqli_real_escape_string($link, $_POST['e105']);
    $omarks10 = mysqli_real_escape_string($link, $_POST['e106']);
    $tmarks10 = mysqli_real_escape_string($link, $_POST['e107']);
    $percentage10 = mysqli_real_escape_string($link, $_POST['e108']);
    $status10 = mysqli_real_escape_string($link, $_POST['e109']);

//database for 7.academic-dactoral degree(Ph.D details).

     $ph1 = mysqli_real_escape_string($link, $_POST['ph1']);
     $ph2 = mysqli_real_escape_string($link, $_POST['ph2']);
     $ph3 = mysqli_real_escape_string($link, $_POST['ph3']);
     $ph4 = mysqli_real_escape_string($link, $_POST['ph4']);
     $ph5 = mysqli_real_escape_string($link, $_POST['ph5']);
     $ph6 = mysqli_real_escape_string($link, $_POST['ph6']);
     $ph7 = mysqli_real_escape_string($link, $_POST['ph7']);
     $ph8 = mysqli_real_escape_string($link, $_POST['ph8']);
   
  
  //database for 8. post doctoral work

     $pd11 = mysqli_real_escape_string($link, $_POST['pd11']);
     $pd12 = mysqli_real_escape_string($link, $_POST['pd12']);
     $pd13 = mysqli_real_escape_string($link, $_POST['pd13']);
     $pd14 = mysqli_real_escape_string($link, $_POST['pd14']);
     $pd15 = mysqli_real_escape_string($link, $_POST['pd15']);
     $pd16 = mysqli_real_escape_string($link, $_POST['pd16']);
   
     $pd21 = mysqli_real_escape_string($link, $_POST['pd21']);
     $pd22 = mysqli_real_escape_string($link, $_POST['pd22']);
     $pd23 = mysqli_real_escape_string($link, $_POST['pd23']);
     $pd24 = mysqli_real_escape_string($link, $_POST['pd24']);
     $pd25 = mysqli_real_escape_string($link, $_POST['pd25']);
     $pd26 = mysqli_real_escape_string($link, $_POST['pd26']);
     
     $pd31 = mysqli_real_escape_string($link, $_POST['pd31']);
     $pd32 = mysqli_real_escape_string($link, $_POST['pd32']);
     $pd33 = mysqli_real_escape_string($link, $_POST['pd33']);
     $pd34 = mysqli_real_escape_string($link, $_POST['pd34']);
     $pd35 = mysqli_real_escape_string($link, $_POST['pd35']);
     $pd36 = mysqli_real_escape_string($link, $_POST['pd36']);
     
     $pd41 = mysqli_real_escape_string($link, $_POST['pd41']);
     $pd42 = mysqli_real_escape_string($link, $_POST['pd42']);
     $pd43 = mysqli_real_escape_string($link, $_POST['pd43']);
     $pd44 = mysqli_real_escape_string($link, $_POST['pd44']);
     $pd45 = mysqli_real_escape_string($link, $_POST['pd45']);
     $pd46 = mysqli_real_escape_string($link, $_POST['pd46']);
     
     $pd51 = mysqli_real_escape_string($link, $_POST['pd51']);
     $pd52 = mysqli_real_escape_string($link, $_POST['pd52']);
     $pd53 = mysqli_real_escape_string($link, $_POST['pd53']);
     $pd54 = mysqli_real_escape_string($link, $_POST['pd54']);
     $pd55 = mysqli_real_escape_string($link, $_POST['pd55']);
     $pd56 = mysqli_real_escape_string($link, $_POST['pd56']);
  
    
//database for 9. national test scores/ranks

     $examination1 = mysqli_real_escape_string($link, $_POST['nt11']);
     $Testyear1 = mysqli_real_escape_string($link, $_POST['nt12']);
     $Branch1 = mysqli_real_escape_string($link, $_POST['nt13']);
     $score1= mysqli_real_escape_string($link, $_POST['nt14']);
     $rank1 = mysqli_real_escape_string($link, $_POST['nt15']);
     $percentile1 = mysqli_real_escape_string($link, $_POST['nt16']);
   
     $examination2 = mysqli_real_escape_string($link, $_POST['nt21']);
     $Testyear2 = mysqli_real_escape_string($link, $_POST['nt22']);
     $Branch2 = mysqli_real_escape_string($link, $_POST['nt23']);
     $score2= mysqli_real_escape_string($link, $_POST['nt24']);
     $rank2 = mysqli_real_escape_string($link, $_POST['nt25']);
     $percentile2 = mysqli_real_escape_string($link, $_POST['nt26']);

     $examination3 = mysqli_real_escape_string($link, $_POST['nt31']);
     $Testyear3 = mysqli_real_escape_string($link, $_POST['nt32']);
     $Branch3 = mysqli_real_escape_string($link, $_POST['nt33']);
     $score3= mysqli_real_escape_string($link, $_POST['nt34']);
     $rank3 = mysqli_real_escape_string($link, $_POST['nt35']);
     $percentile3 = mysqli_real_escape_string($link, $_POST['nt36']);

     
     $examination4 = mysqli_real_escape_string($link, $_POST['nt41']);
     $Testyear4 = mysqli_real_escape_string($link, $_POST['nt42']);
     $Branch4 = mysqli_real_escape_string($link, $_POST['nt43']);
     $score4= mysqli_real_escape_string($link, $_POST['nt44']);
     $rank4 = mysqli_real_escape_string($link, $_POST['nt45']);
     $percentile4 = mysqli_real_escape_string($link, $_POST['nt46']);

 
     $examination5 = mysqli_real_escape_string($link, $_POST['nt51']);
     $Testyear5 = mysqli_real_escape_string($link, $_POST['nt52']);
     $Branch5 = mysqli_real_escape_string($link, $_POST['nt53']);
     $score5= mysqli_real_escape_string($link, $_POST['nt54']);
     $rank5 = mysqli_real_escape_string($link, $_POST['nt55']);
     $percentile5 = mysqli_real_escape_string($link, $_POST['nt56']);

       //database for 10. employement details

        $E11 = mysqli_real_escape_string($link, $_POST['E11']);
        $E12 = mysqli_real_escape_string($link, $_POST['E12']);
        $E13 = mysqli_real_escape_string($link, $_POST['E13']);
        $E14 = mysqli_real_escape_string($link, $_POST['E14']);
        $E15 = mysqli_real_escape_string($link, $_POST['E15']);
        $E16 = mysqli_real_escape_string($link, $_POST['E16']);
        $E17 = mysqli_real_escape_string($link, $_POST['E17']);
        
        
        $E21 = mysqli_real_escape_string($link, $_POST['E21']);
        $E22 = mysqli_real_escape_string($link, $_POST['E22']);
        $E23 = mysqli_real_escape_string($link, $_POST['E23']);
        $E24 = mysqli_real_escape_string($link, $_POST['E24']);
        $E25 = mysqli_real_escape_string($link, $_POST['E25']);
        $E26 = mysqli_real_escape_string($link, $_POST['E26']);
        $E27 = mysqli_real_escape_string($link, $_POST['E27']);
        
        
        $E31 = mysqli_real_escape_string($link, $_POST['E31']);
        $E32 = mysqli_real_escape_string($link, $_POST['E32']);
        $E33 = mysqli_real_escape_string($link, $_POST['E33']);
        $E34 = mysqli_real_escape_string($link, $_POST['E34']);
        $E35 = mysqli_real_escape_string($link, $_POST['E35']);
        $E36 = mysqli_real_escape_string($link, $_POST['E36']);
        $E37 = mysqli_real_escape_string($link, $_POST['E37']);
        
        $E41 = mysqli_real_escape_string($link, $_POST['E41']);
        $E42 = mysqli_real_escape_string($link, $_POST['E42']);
        $E43 = mysqli_real_escape_string($link, $_POST['E43']);
        $E44 = mysqli_real_escape_string($link, $_POST['E44']);
        $E45 = mysqli_real_escape_string($link, $_POST['E45']);
        $E46 = mysqli_real_escape_string($link, $_POST['E46']);
        $E47 = mysqli_real_escape_string($link, $_POST['E47']);
        
        $E51 = mysqli_real_escape_string($link, $_POST['E51']);
        $E52 = mysqli_real_escape_string($link, $_POST['E52']);
        $E53 = mysqli_real_escape_string($link, $_POST['E53']);
        $E54 = mysqli_real_escape_string($link, $_POST['E54']);
        $E55 = mysqli_real_escape_string($link, $_POST['E55']);
        $E56 = mysqli_real_escape_string($link, $_POST['E56']);
        $E57 = mysqli_real_escape_string($link, $_POST['E57']);
        
        $E61 = mysqli_real_escape_string($link, $_POST['E61']);
        $E62 = mysqli_real_escape_string($link, $_POST['E62']);
        $E63 = mysqli_real_escape_string($link, $_POST['E63']);
        $E64 = mysqli_real_escape_string($link, $_POST['E64']);
        $E65 = mysqli_real_escape_string($link, $_POST['E65']);
        $E66 = mysqli_real_escape_string($link, $_POST['E66']);
        $E67 = mysqli_real_escape_string($link, $_POST['E67']);
        
        $E71 = mysqli_real_escape_string($link, $_POST['E71']);
        $E72 = mysqli_real_escape_string($link, $_POST['E72']);
        $E73 = mysqli_real_escape_string($link, $_POST['E73']);
        $E74 = mysqli_real_escape_string($link, $_POST['E74']);
        $E75 = mysqli_real_escape_string($link, $_POST['E75']);
        $E76 = mysqli_real_escape_string($link, $_POST['E76']);
        $E77 = mysqli_real_escape_string($link, $_POST['E77']);

        $E81 = mysqli_real_escape_string($link, $_POST['E81']);
        $E82 = mysqli_real_escape_string($link, $_POST['E82']);
        $E83 = mysqli_real_escape_string($link, $_POST['E83']);
        $E84 = mysqli_real_escape_string($link, $_POST['E84']);
        $E85 = mysqli_real_escape_string($link, $_POST['E85']);
        $E86 = mysqli_real_escape_string($link, $_POST['E86']);
        $E87 = mysqli_real_escape_string($link, $_POST['E87']);


        $E91 = mysqli_real_escape_string($link, $_POST['E91']);
        $E92 = mysqli_real_escape_string($link, $_POST['E92']);
        $E93 = mysqli_real_escape_string($link, $_POST['E93']);
        $E94 = mysqli_real_escape_string($link, $_POST['E94']);
        $E95 = mysqli_real_escape_string($link, $_POST['E95']);
        $E96 = mysqli_real_escape_string($link, $_POST['E96']);
        $E97 = mysqli_real_escape_string($link, $_POST['E97']);


        $E101 = mysqli_real_escape_string($link, $_POST['E101']);
        $E102 = mysqli_real_escape_string($link, $_POST['E102']);
        $E103 = mysqli_real_escape_string($link, $_POST['E103']);
        $E104 = mysqli_real_escape_string($link, $_POST['E104']);
        $E105 = mysqli_real_escape_string($link, $_POST['E105']);
        $E106 = mysqli_real_escape_string($link, $_POST['E106']);
        $E107 = mysqli_real_escape_string($link, $_POST['E107']);

//database for 11. total experience          

        $teachingexp=mysqli_real_escape_string($link, $_POST['teachingexp']);
        $researchexp=mysqli_real_escape_string($link, $_POST['researchexp']);
        $industryexp=mysqli_real_escape_string($link, $_POST['industryexp']);
           
 //database for 12. teaching experience

     $asstprof=mysqli_real_escape_string($link, $_POST['asstprof']);
     $assoprofexp=mysqli_real_escape_string($link, $_POST['assoprofexp']);
     
// database for 13. subject taught

        $E2_11 = mysqli_real_escape_string($link, $_POST['E2_11']);
        $E2_12 = mysqli_real_escape_string($link, $_POST['E2_12']);
        $E2_13 = mysqli_real_escape_string($link, $_POST['E2_13']);
        $E2_14 = mysqli_real_escape_string($link, $_POST['E2_14']);
        $E2_15 = mysqli_real_escape_string($link, $_POST['E2_15']);
        
        
        $E2_21 = mysqli_real_escape_string($link, $_POST['E2_21']);
        $E2_22 = mysqli_real_escape_string($link, $_POST['E2_22']);
        $E2_23 = mysqli_real_escape_string($link, $_POST['E2_23']);
        $E2_24 = mysqli_real_escape_string($link, $_POST['E2_24']);
        $E2_25 = mysqli_real_escape_string($link, $_POST['E2_25']);
        
        $E2_31 = mysqli_real_escape_string($link, $_POST['E2_31']);
        $E2_32 = mysqli_real_escape_string($link, $_POST['E2_32']);
        $E2_33 = mysqli_real_escape_string($link, $_POST['E2_33']);
        $E2_34 = mysqli_real_escape_string($link, $_POST['E2_34']);
        $E2_35 = mysqli_real_escape_string($link, $_POST['E2_35']);
        
        $E2_41 = mysqli_real_escape_string($link, $_POST['E2_41']);
        $E2_42 = mysqli_real_escape_string($link, $_POST['E2_42']);
        $E2_43 = mysqli_real_escape_string($link, $_POST['E2_43']);
        $E2_44 = mysqli_real_escape_string($link, $_POST['E2_44']);
        $E2_45 = mysqli_real_escape_string($link, $_POST['E2_45']);
        
        $E2_51 = mysqli_real_escape_string($link, $_POST['E2_51']);
        $E2_52 = mysqli_real_escape_string($link, $_POST['E2_52']);
        $E2_53 = mysqli_real_escape_string($link, $_POST['E2_53']);
        $E2_54 = mysqli_real_escape_string($link, $_POST['E2_54']);
        $E2_55 = mysqli_real_escape_string($link, $_POST['E2_55']);

        $E2_61 = mysqli_real_escape_string($link, $_POST['E2_61']);
        $E2_62 = mysqli_real_escape_string($link, $_POST['E2_62']);
        $E2_63 = mysqli_real_escape_string($link, $_POST['E2_63']);
        $E2_64 = mysqli_real_escape_string($link, $_POST['E2_64']);
        $E2_65 = mysqli_real_escape_string($link, $_POST['E2_65']);

        $E2_71 = mysqli_real_escape_string($link, $_POST['E2_71']);
        $E2_72 = mysqli_real_escape_string($link, $_POST['E2_72']);
        $E2_73 = mysqli_real_escape_string($link, $_POST['E2_73']);
        $E2_74 = mysqli_real_escape_string($link, $_POST['E2_74']);
        $E2_75 = mysqli_real_escape_string($link, $_POST['E2_75']);
 
        $E2_81 = mysqli_real_escape_string($link, $_POST['E2_81']);
        $E2_82 = mysqli_real_escape_string($link, $_POST['E2_82']);
        $E2_83 = mysqli_real_escape_string($link, $_POST['E2_83']);
        $E2_84 = mysqli_real_escape_string($link, $_POST['E2_84']);
        $E2_85 = mysqli_real_escape_string($link, $_POST['E2_85']);

        $E2_91 = mysqli_real_escape_string($link, $_POST['E2_91']);
        $E2_92 = mysqli_real_escape_string($link, $_POST['E2_92']);
        $E2_93 = mysqli_real_escape_string($link, $_POST['E2_93']);
        $E2_94 = mysqli_real_escape_string($link, $_POST['E2_94']);
        $E2_95 = mysqli_real_escape_string($link, $_POST['E2_95']);

           
        $E2_101 = mysqli_real_escape_string($link, $_POST['E2_101']);
        $E2_102 = mysqli_real_escape_string($link, $_POST['E2_102']);
        $E2_103 = mysqli_real_escape_string($link, $_POST['E2_103']);
        $E2_104 = mysqli_real_escape_string($link, $_POST['E2_104']);
        $E2_105 = mysqli_real_escape_string($link, $_POST['E2_105']);
   
 //database for 14. research guidance
        
        $phdcomplete=mysqli_real_escape_string($link, $_POST['phdcomplete']);
        $pgcomplete=mysqli_real_escape_string($link, $_POST['pgcomplete']);
        $phdongoing=mysqli_real_escape_string($link, $_POST['phdongoing']);
        $pgongoing=mysqli_real_escape_string($link, $_POST['pgongoing']);
        $cj1=mysqli_real_escape_string($link, $_POST['cj1']);
        $cj2=mysqli_real_escape_string($link, $_POST['cj2']);
        $oj1=mysqli_real_escape_string($link, $_POST['oj1']);
        $oj2=mysqli_real_escape_string($link, $_POST['oj2']);


// database of 15. a. publication details
        $JInternational=mysqli_real_escape_string($link, $_POST['JInternational']);
        $JNational=mysqli_real_escape_string($link, $_POST['JNational']);
        $CInternational=mysqli_real_escape_string($link, $_POST['CInternational']);
        $CNational=mysqli_real_escape_string($link, $_POST['CNational']);
       
// database of 15. b. best paper details
    /*    $E3_11 = mysqli_real_escape_string($link, $_POST['E3_11']);
        $E3_12 = mysqli_real_escape_string($link, $_POST['E3_12']);
        $E3_13 = mysqli_real_escape_string($link, $_POST['E3_13']);
        $E3_14 = mysqli_real_escape_string($link, $_POST['E3_14']);
        $E3_15 = mysqli_real_escape_string($link, $_POST['E3_15']);
        $E3_16 = mysqli_real_escape_string($link, $_POST['E3_16']);
        $E3_17 = mysqli_real_escape_string($link, $_POST['E3_17']);
        
        $E3_21 = mysqli_real_escape_string($link, $_POST['E3_21']);
        $E3_22 = mysqli_real_escape_string($link, $_POST['E3_22']);
        $E3_23 = mysqli_real_escape_string($link, $_POST['E3_23']);
        $E3_24 = mysqli_real_escape_string($link, $_POST['E3_24']);
        $E3_25 = mysqli_real_escape_string($link, $_POST['E3_25']);
        $E3_26 = mysqli_real_escape_string($link, $_POST['E3_26']);
        $E3_27 = mysqli_real_escape_string($link, $_POST['E3_27']);
         
        $E3_31 = mysqli_real_escape_string($link, $_POST['E3_31']);
        $E3_32 = mysqli_real_escape_string($link, $_POST['E3_32']);
        $E3_33 = mysqli_real_escape_string($link, $_POST['E3_33']);
        $E3_34 = mysqli_real_escape_string($link, $_POST['E3_34']);
        $E3_35 = mysqli_real_escape_string($link, $_POST['E3_35']);
        $E3_36 = mysqli_real_escape_string($link, $_POST['E3_36']);
        $E3_37 = mysqli_real_escape_string($link, $_POST['E3_37']);
         
        $E3_41 = mysqli_real_escape_string($link, $_POST['E3_41']);
        $E3_42 = mysqli_real_escape_string($link, $_POST['E3_42']);
        $E3_43 = mysqli_real_escape_string($link, $_POST['E3_43']);
        $E3_44 = mysqli_real_escape_string($link, $_POST['E3_44']);
        $E3_45 = mysqli_real_escape_string($link, $_POST['E3_45']);
        $E3_46 = mysqli_real_escape_string($link, $_POST['E3_46']);
        $E3_47 = mysqli_real_escape_string($link, $_POST['E3_47']); */

        
// database of 16. Books/chapter

       $BInternational=mysqli_real_escape_string($link, $_POST['BInternational']);

// database of 17. patents

        $patents=mysqli_real_escape_string($link, $_POST['patents']);

 // database of 18. sponsored projects.

        $E4_11 = mysqli_real_escape_string($link, $_POST['E4_11']);
        $E4_12 = mysqli_real_escape_string($link, $_POST['E4_12']);
        $E4_13 = mysqli_real_escape_string($link, $_POST['E4_13']);
        $E4_14 = mysqli_real_escape_string($link, $_POST['E4_14']);
        $E4_15 = mysqli_real_escape_string($link, $_POST['E4_15']);
        $E4_16 = mysqli_real_escape_string($link, $_POST['E4_16']);
        
        
        $E4_21 = mysqli_real_escape_string($link, $_POST['E4_21']);
        $E4_22 = mysqli_real_escape_string($link, $_POST['E4_22']);
        $E4_23 = mysqli_real_escape_string($link, $_POST['E4_23']);
        $E4_24 = mysqli_real_escape_string($link, $_POST['E4_24']);
        $E4_25 = mysqli_real_escape_string($link, $_POST['E4_25']);
        $E4_26 = mysqli_real_escape_string($link, $_POST['E4_26']);

        $E4_31 = mysqli_real_escape_string($link, $_POST['E4_31']);
        $E4_32 = mysqli_real_escape_string($link, $_POST['E4_32']);
        $E4_33 = mysqli_real_escape_string($link, $_POST['E4_33']);
        $E4_34 = mysqli_real_escape_string($link, $_POST['E4_34']);
        $E4_35 = mysqli_real_escape_string($link, $_POST['E4_35']);
        $E4_36 = mysqli_real_escape_string($link, $_POST['E4_36']);
 
        $E4_41 = mysqli_real_escape_string($link, $_POST['E4_41']);
        $E4_42 = mysqli_real_escape_string($link, $_POST['E4_42']);
        $E4_43 = mysqli_real_escape_string($link, $_POST['E4_43']);
        $E4_44 = mysqli_real_escape_string($link, $_POST['E4_44']);
        $E4_45 = mysqli_real_escape_string($link, $_POST['E4_45']);
        $E4_46 = mysqli_real_escape_string($link, $_POST['E4_46']);

        $E4_51 = mysqli_real_escape_string($link, $_POST['E4_51']);
        $E4_52 = mysqli_real_escape_string($link, $_POST['E4_52']);
        $E4_53 = mysqli_real_escape_string($link, $_POST['E4_53']);
        $E4_54 = mysqli_real_escape_string($link, $_POST['E4_54']);
        $E4_55 = mysqli_real_escape_string($link, $_POST['E4_55']);
        $E4_56 = mysqli_real_escape_string($link, $_POST['E4_56']);
 

// database of 19. consultancy project

        $F11 = mysqli_real_escape_string($link, $_POST['F11']);
        $F12 = mysqli_real_escape_string($link, $_POST['F12']);
        $F13 = mysqli_real_escape_string($link, $_POST['F13']);
        $F14 = mysqli_real_escape_string($link, $_POST['F14']);
        
        $F21 = mysqli_real_escape_string($link, $_POST['F21']);
        $F22 = mysqli_real_escape_string($link, $_POST['F22']);
        $F23 = mysqli_real_escape_string($link, $_POST['F23']);
        $F24 = mysqli_real_escape_string($link, $_POST['F24']);
        
        $F31 = mysqli_real_escape_string($link, $_POST['F31']);
        $F32 = mysqli_real_escape_string($link, $_POST['F32']);
        $F33 = mysqli_real_escape_string($link, $_POST['F33']);
        $F34 = mysqli_real_escape_string($link, $_POST['F34']);

        $F41 = mysqli_real_escape_string($link, $_POST['F41']);
        $F42 = mysqli_real_escape_string($link, $_POST['F42']);
        $F43 = mysqli_real_escape_string($link, $_POST['F43']);
        $F44 = mysqli_real_escape_string($link, $_POST['F44']);

        $F51 = mysqli_real_escape_string($link, $_POST['F51']);
        $F52 = mysqli_real_escape_string($link, $_POST['F52']);
        $F53 = mysqli_real_escape_string($link, $_POST['F53']);
        $F54 = mysqli_real_escape_string($link, $_POST['F54']);
        

 // database of 20. Professional Training received

      $T11 = mysqli_real_escape_string($link, $_POST['T11']);
        $T12 = mysqli_real_escape_string($link, $_POST['T12']);
        $T13 = mysqli_real_escape_string($link, $_POST['T13']);
        $T14 = mysqli_real_escape_string($link, $_POST['T14']);
        
        $T21 = mysqli_real_escape_string($link, $_POST['T21']);
        $T22 = mysqli_real_escape_string($link, $_POST['T22']);
        $T23 = mysqli_real_escape_string($link, $_POST['T23']);
        $T24 = mysqli_real_escape_string($link, $_POST['T24']);
        
        $T31 = mysqli_real_escape_string($link, $_POST['T31']);
        $T32 = mysqli_real_escape_string($link, $_POST['T32']);
        $T33 = mysqli_real_escape_string($link, $_POST['T33']);
        $T34 = mysqli_real_escape_string($link, $_POST['T34']);
        
        $T41 = mysqli_real_escape_string($link, $_POST['T41']);
        $T42 = mysqli_real_escape_string($link, $_POST['T42']);
        $T43 = mysqli_real_escape_string($link, $_POST['T43']);
        $T44 = mysqli_real_escape_string($link, $_POST['T44']);
        
        $T51 = mysqli_real_escape_string($link, $_POST['T51']);
        $T52 = mysqli_real_escape_string($link, $_POST['T52']);
        $T53 = mysqli_real_escape_string($link, $_POST['T53']);
        $T54 = mysqli_real_escape_string($link, $_POST['T54']);
        
        $T61 = mysqli_real_escape_string($link, $_POST['T61']);
        $T62 = mysqli_real_escape_string($link, $_POST['T62']);
        $T63 = mysqli_real_escape_string($link, $_POST['T63']);
        $T64 = mysqli_real_escape_string($link, $_POST['T64']);
        
  
        $T71 = mysqli_real_escape_string($link, $_POST['T71']);
        $T72 = mysqli_real_escape_string($link, $_POST['T72']);
        $T73 = mysqli_real_escape_string($link, $_POST['T73']);
        $T74 = mysqli_real_escape_string($link, $_POST['T74']);
        
        $T81 = mysqli_real_escape_string($link, $_POST['T81']);
        $T82 = mysqli_real_escape_string($link, $_POST['T82']);
        $T83 = mysqli_real_escape_string($link, $_POST['T83']);
        $T84 = mysqli_real_escape_string($link, $_POST['T84']);
        

        $T91 = mysqli_real_escape_string($link, $_POST['T91']);
        $T92 = mysqli_real_escape_string($link, $_POST['T92']);
        $T93 = mysqli_real_escape_string($link, $_POST['T93']);
        $T94 = mysqli_real_escape_string($link, $_POST['T94']);
        

        $T101 = mysqli_real_escape_string($link, $_POST['T101']);
        $T102 = mysqli_real_escape_string($link, $_POST['T102']);
        $T103 = mysqli_real_escape_string($link, $_POST['T103']);
        $T104 = mysqli_real_escape_string($link, $_POST['T104']); 
        
//database of 21. conference/seminars/workshops

        $cp11 = mysqli_real_escape_string($link, $_POST['cp11']);
        $cp12 = mysqli_real_escape_string($link, $_POST['cp12']);
        $cp13 = mysqli_real_escape_string($link, $_POST['cp13']);
        
        $cp21 = mysqli_real_escape_string($link, $_POST['cp21']);
        $cp22 = mysqli_real_escape_string($link, $_POST['cp22']);
        $cp23 = mysqli_real_escape_string($link, $_POST['cp23']);
        
        
        $cp31 = mysqli_real_escape_string($link, $_POST['cp31']);
        $cp32 = mysqli_real_escape_string($link, $_POST['cp32']);
        $cp33 = mysqli_real_escape_string($link, $_POST['cp33']);
        
        
        $cp41 = mysqli_real_escape_string($link, $_POST['cp41']);
        $cp42 = mysqli_real_escape_string($link, $_POST['cp42']);
        $cp43 = mysqli_real_escape_string($link, $_POST['cp43']);
        
        
        $cp51 = mysqli_real_escape_string($link, $_POST['cp51']);
        $cp52 = mysqli_real_escape_string($link, $_POST['cp52']);
        $cp53 = mysqli_real_escape_string($link, $_POST['cp53']);
        
        $cp61 = mysqli_real_escape_string($link, $_POST['cp61']);
        $cp62 = mysqli_real_escape_string($link, $_POST['cp62']);
        $cp63 = mysqli_real_escape_string($link, $_POST['cp63']);

        $cp71 = mysqli_real_escape_string($link, $_POST['cp71']);
        $cp72 = mysqli_real_escape_string($link, $_POST['cp72']);
        $cp73 = mysqli_real_escape_string($link, $_POST['cp73']);

        $cp81 = mysqli_real_escape_string($link, $_POST['cp81']);
        $cp82 = mysqli_real_escape_string($link, $_POST['cp82']);
        $cp83 = mysqli_real_escape_string($link, $_POST['cp83']);

          
        $cp91 = mysqli_real_escape_string($link, $_POST['cp91']);
        $cp92 = mysqli_real_escape_string($link, $_POST['cp92']);
        $cp93 = mysqli_real_escape_string($link, $_POST['cp93']);

        $cp101 = mysqli_real_escape_string($link, $_POST['cp101']);
        $cp102 = mysqli_real_escape_string($link, $_POST['cp102']);
        $cp103 = mysqli_real_escape_string($link, $_POST['cp103']);

//database of 22. industrial experience/interaction.

   /*     $ie11 = mysqli_real_escape_string($link, $_POST['ie11']);
        $ie12 = mysqli_real_escape_string($link, $_POST['ie12']);
        $ie13 = mysqli_real_escape_string($link, $_POST['ie13']);
        
        
        $ie21 = mysqli_real_escape_string($link, $_POST['ie21']);
        $ie22 = mysqli_real_escape_string($link, $_POST['ie22']);
        $ie23 = mysqli_real_escape_string($link, $_POST['ie23']);
        
        
        $ie31 = mysqli_real_escape_string($link, $_POST['ie31']);
        $ie32 = mysqli_real_escape_string($link, $_POST['ie32']);
        $ie33 = mysqli_real_escape_string($link, $_POST['ie33']);
        
        
        $ie41 = mysqli_real_escape_string($link, $_POST['ie41']);
        $ie42 = mysqli_real_escape_string($link, $_POST['ie42']);
        $ie43 = mysqli_real_escape_string($link, $_POST['ie43']);
        
        
        $ie51 = mysqli_real_escape_string($link, $_POST['ie51']);
        $ie52 = mysqli_real_escape_string($link, $_POST['ie52']);
        $ie53 = mysqli_real_escape_string($link, $_POST['ie53']);
        
        
        $ie61 = mysqli_real_escape_string($link, $_POST['ie61']);
        $ie62 = mysqli_real_escape_string($link, $_POST['ie62']);
        $ie63 = mysqli_real_escape_string($link, $_POST['ie63']);
        
        
        $ie71 = mysqli_real_escape_string($link, $_POST['ie71']);
        $ie72 = mysqli_real_escape_string($link, $_POST['ie72']);
        $ie73 = mysqli_real_escape_string($link, $_POST['ie73']);

        $ie81 = mysqli_real_escape_string($link, $_POST['ie81']);
        $ie82 = mysqli_real_escape_string($link, $_POST['ie82']);
        $ie83 = mysqli_real_escape_string($link, $_POST['ie83']);

        $ie91 = mysqli_real_escape_string($link, $_POST['ie91']);
        $ie92 = mysqli_real_escape_string($link, $_POST['ie92']);
        $ie93 = mysqli_real_escape_string($link, $_POST['ie93']);

        $ie101 = mysqli_real_escape_string($link, $_POST['ie101']);
        $ie102 = mysqli_real_escape_string($link, $_POST['ie102']);
        $ie103 = mysqli_real_escape_string($link, $_POST['ie103']); */

//database of 23. continuing education programmes
        
        $fa11 = mysqli_real_escape_string($link, $_POST['fa11']);
        $fa12 = mysqli_real_escape_string($link, $_POST['fa12']);
        $fa13 = mysqli_real_escape_string($link, $_POST['fa13']);
        
        
        $fa21 = mysqli_real_escape_string($link, $_POST['fa21']);
        $fa22 = mysqli_real_escape_string($link, $_POST['fa22']);
        $fa23 = mysqli_real_escape_string($link, $_POST['fa23']);
        
        
        $fa31 = mysqli_real_escape_string($link, $_POST['fa31']);
        $fa32 = mysqli_real_escape_string($link, $_POST['fa32']);
        $fa33 = mysqli_real_escape_string($link, $_POST['fa33']);
        
        
        
        $fa41 = mysqli_real_escape_string($link, $_POST['fa41']);
        $fa42 = mysqli_real_escape_string($link, $_POST['fa42']);
        $fa43 = mysqli_real_escape_string($link, $_POST['fa43']);
        
        
        
        
        $fa51 = mysqli_real_escape_string($link, $_POST['fa51']);
        $fa52 = mysqli_real_escape_string($link, $_POST['fa52']);
        $fa53 = mysqli_real_escape_string($link, $_POST['fa53']);
        
        
        
        $fa61 = mysqli_real_escape_string($link, $_POST['fa61']);
        $fa62 = mysqli_real_escape_string($link, $_POST['fa62']);
        $fa63 = mysqli_real_escape_string($link, $_POST['fa63']);

        $fa71 = mysqli_real_escape_string($link, $_POST['fa71']);
        $fa72 = mysqli_real_escape_string($link, $_POST['fa72']);
        $fa73 = mysqli_real_escape_string($link, $_POST['fa73']);
        

        $fa81 = mysqli_real_escape_string($link, $_POST['fa81']);
        $fa82 = mysqli_real_escape_string($link, $_POST['fa82']);
        $fa83 = mysqli_real_escape_string($link, $_POST['fa83']);
        

        $fa91 = mysqli_real_escape_string($link, $_POST['fa91']);
        $fa92 = mysqli_real_escape_string($link, $_POST['fa92']);
        $fa93 = mysqli_real_escape_string($link, $_POST['fa93']);
        

        $fa101 = mysqli_real_escape_string($link, $_POST['fa101']);
        $fa102 = mysqli_real_escape_string($link, $_POST['fa102']);
        $fa103 = mysqli_real_escape_string($link, $_POST['fa103']);
        
 //database of 24. experience in administrative positions.

        $edp = mysqli_real_escape_string($link, $_POST['edp']);

 //database of 25. award and recognitions

        $ar = mysqli_real_escape_string($link, $_POST['ar']);

//database of 26. any other relevant information

        $ao = mysqli_real_escape_string($link, $_POST['ao']);
        $phdcomplete=mysqli_real_escape_string($link, $_POST['phdcomplete']);
        $pgcomplete=mysqli_real_escape_string($link, $_POST['pgcomplete']);
        $phdongoing=mysqli_real_escape_string($link, $_POST['phdongoing']);
        $pgongoing=mysqli_real_escape_string($link, $_POST['pgongoing']);
        
//database of 27. names and addresses of two professional references

        $pr11 = mysqli_real_escape_string($link, $_POST['pr11']);
        $pr21 = mysqli_real_escape_string($link, $_POST['pr21']);
                
        $pr12 = mysqli_real_escape_string($link, $_POST['pr12']);
        $pr22 = mysqli_real_escape_string($link, $_POST['pr22']);
        
        $pr13 = mysqli_real_escape_string($link, $_POST['pr13']);
        $pr23 = mysqli_real_escape_string($link, $_POST['pr23']);
        
//database of 28. please indicate how in your opinion 

        $ao1 = mysqli_real_escape_string($link, $_POST['ao1']);

// database of 29. date and place

        $date = mysqli_real_escape_string($link, $_POST['date']);
        $place = mysqli_real_escape_string($link, $_POST['place']);


//Two experiments or computational projects added to teaching laboratories.
      // $lab = mysqli_real_escape_string($link, $_POST['lab']);


//Strong liaison with industry; Offering courses through application of ICT. 

        $industry = mysqli_real_escape_string($link, $_POST['industry']);

 $sql  = "SELECT * FROM  eq4page WHERE email='$UID' and appn='$nappn' ";
	//tmt->execute(array(":emailI=>$email));
	 
   $result =  mysqli_query($link, $sql);
   $num_rows = mysqli_num_rows($result);
 if( $num_rows > 0)
  {
  $sql="UPDATE eq4page SET  Page5= '$Page5', Page6='$Page6', Page7='$Page7',
          Page8='$Page8',Page11='$Page11', Page12='$Page12', Page17='$Page17', Page18='$Page18',
          Page19='$Page19', Page22='$Page22', Page23='$Page23', Page24='$Page24', Page25='$Page25',
          Page26='$Page26', Page27='$Page27', Page28='$Page28', Page29='$Page29', Page30='$Page30', Page31='$Page31',
          Page32='$Page32', Page33='$Page33', Page34='$Page34', Page35='$Page35', Page36='$Page36', Page37='$Page37',
          Page38='$Page38', Page41='$Page41', Page42='$Page42', Page43='$Page43', Page44='$Page44', Page45='$Page45', 
          Page46='$Page46', Page47='$Page47', Page48='$Page48', Page49='$Page49',

cer1='$cer1', year1='$year1', school1='$school1', board1='$Board1', class1='$class1', omarks1='$omarks1', tmarks1='$tmarks1', percentage1='$percentage1', status1='$status1',
cer2='$cer2', year2='$year2', school2='$school2', board2='$Board2', class2='$class2', omarks2='$omarks2', tmarks2='$tmarks2', percentage2='$percentage2', status2='$status2', 
cer3='$cer3', year3='$year3', school3='$school3', board3='$Board3', class3='$class3', omarks3='$omarks3', tmarks3='$tmarks3', percentage3='$percentage3', status3='$status3', 
cer4='$cer4', year4='$year4', school4='$school4', board4='$Board4', class4='$class4', omarks4='$omarks4', tmarks4='$tmarks4', percentage4='$percentage4', status4='$status4', 
cer5='$cer5', year5='$year5', school5='$school5', board5='$Board5', class5='$class5', omarks5='$omarks5', tmarks5='$tmarks5', percentage5='$percentage5', status5='$status5', 
cer6='$cer6', year6='$year6', school6='$school6', board6='$Board6', class6='$class6', omarks6='$omarks6', tmarks6='$tmarks6', percentage6='$percentage6', status6='$status6', 
cer7='$cer7', year7='$year7', school7='$school7', board7='$Board7', class7='$class7', omarks7='$omarks7', tmarks7='$tmarks7', percentage7='$percentage7', status7='$status7',
cer8='$cer8', year8='$year8', school8='$school8', board8='$Board8', class8='$class8', omarks8='$omarks8', tmarks8='$tmarks8', percentage8='$percentage8', status8='$status8',
cer9='$cer9', year9='$year9', school9='$school9', board9='$Board9', class9='$class9', omarks9='$omarks9', tmarks9='$tmarks9', percentage9='$percentage9', status9='$status9',
cer10='$cer10',year10='$year10', school10='$school10', board10='$Board10', class9='$class10', omarks10='$omarks10', tmarks10='$tmarks10', percentage10='$percentage10', status10='$status10',
 

examination1='$examination1', testyear1='$Testyear1', branch1='$Branch1', score1='$score1' , rank1='$rank1', percentile1='$percentile1', 
examination2='$examination2', testyear2='$Testyear2', branch2='$Branch2', score2='$score2' , rank2='$rank2', percentile2='$percentile2',
examination3='$examination3', testyear3='$Testyear3', branch3='$Branch3', score3='$score3' , rank3='$rank3', percentile3='$percentile3', 
examination4='$examination4', testyear4='$Testyear4', branch4='$Branch4', score4='$score4' , rank4='$rank4', percentile4='$percentile4', 
examination5='$examination5', testyear5='$Testyear5', branch5='$Branch5', score5='$score5' , rank5='$rank5', percentile5='$percentile5' , assoprofexp='$assoprofexp' WHERE appn='$nappn' ";
mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
//echo "updated";
    }
else{
echo "fail" .mysqli_error($link);}
}
else
{
$sql = "insert into eq4page values('$Page5', '$Page6', '$Page7', '$Page8','$Page11', '$Page12', '$Page17', 
        '$Page18', '$Page19','$Page22', '$Page23', '$Page24', '$Page25', '$Page26', '$Page27',
         '$Page28', '$Page29','$Page30', '$Page31', '$Page32', '$Page33', '$Page34', '$Page35',
         '$Page36', '$Page37', '$Page38', '$Page41', '$Page42', '$Page43', '$Page44', '$Page45',
         '$Page46', '$Page47', '$Page48', '$Page49',

'$cer1', '$year1', '$school1', '$Board1', '$class1', '$omarks1', '$tmarks1', '$percentage1', '$status1',
'$cer2', '$year2', '$school2', '$Board2', '$class2', '$omarks2', '$tmarks2', '$percentage2', '$status2', 
'$cer3', '$year3', '$school3', '$Board3', '$class3', '$omarks3', '$tmarks3', '$percentage3', '$status3', 
'$cer4', '$year4', '$school4', '$Board4', '$class4', '$omarks4', '$tmarks4', '$percentage4', '$status4', 
'$cer5', '$year5', '$school5', '$Board5', '$class5', '$omarks5', '$tmarks5', '$percentage5', '$status5', 
'$cer6', '$year6', '$school6', '$Board6', '$class6', '$omarks6', '$tmarks6', '$percentage6', '$status6', 
'$cer7', '$year7', '$school7', '$Board7', '$class7', '$omarks7', '$tmarks7', '$percentage7', '$status7',
'$cer8', '$year8', '$school8', '$Board8', '$class8', '$omarks8', '$tmarks8', '$percentage8', '$status8',
'$cer9', '$year9', '$school9', '$Board9', '$class9', '$omarks9', '$tmarks9', '$percentage9', '$status9',
'$cer10', '$year10', '$school10', '$Board10', '$class10', '$omarks10', '$tmarks10', '$percentage10', '$status10',

 
'$examination1', '$Testyear1', '$Branch1', '$score1' , '$rank1', '$percentile1', 
'$examination2', '$Testyear2', '$Branch2', '$score2' , '$rank2', '$percentile2',
'$examination3', '$Testyear3', '$Branch3', '$score3' , '$rank3', '$percentile3', 
'$examination4', '$Testyear4', '$Branch4', '$score4' , '$rank4', '$percentile4', 
'$examination5', '$Testyear5', '$Branch5', '$score5' , '$rank5', '$percentile5', 

'$teachingexp', '$researchexp', '$industryexp', '$asstprof', '$assoprofexp',


'$E2_11', '$E2_12', '$E2_13', '$E2_14', '$E2_15',
'$E2_21', '$E2_22', '$E2_23', '$E2_24', '$E2_25',
'$E2_31', '$E2_32', '$E2_33', '$E2_34', '$E2_35',    
'$E2_41', '$E2_42', '$E2_43', '$E2_44', '$E2_45',
'$E2_51', '$E2_52', '$E2_53', '$E2_54', '$E2_55',
'$E2_61', '$E2_62', '$E2_63', '$E2_64', '$E2_65',
'$E2_71', '$E2_72', '$E2_73', '$E2_74', '$E2_75',
'$E2_81', '$E2_82', '$E2_83', '$E2_84', '$E2_85',    
'$E2_91', '$E2_92', '$E2_93', '$E2_94', '$E2_95',
'$E2_101', '$E2_102', '$E2_103', '$E2_104', '$E2_105',

'$BInternational', 


'$T11', '$T12', '$T13', '$T14',
'$T21', '$T22', '$T23', '$T24',
'$T31', '$T32', '$T33', '$T34', 
'$T41', '$T42', '$T43', '$T44', 
'$T51', '$T52', '$T53', '$T54',
'$T61', '$T62', '$T63', '$T64',
'$T71', '$T72', '$T73', '$T74',
'$T81', '$T82', '$T83', '$T84',
'$T91', '$T92', '$T93', '$T94',
'$T101', '$T102', '$T103', '$T104',


'$cp11', '$cp12', '$cp13',
'$cp21', '$cp22', '$cp23',
'$cp31', '$cp32', '$cp33',    
'$cp41', '$cp42', '$cp43',    
'$cp51', '$cp52', '$cp53',   
'$cp61', '$cp62', '$cp63',
'$cp71', '$cp72', '$cp73',
'$cp81', '$cp82', '$cp83',
'$cp91', '$cp92', '$cp93',
'$cp101', '$cp102', '$cp103',

'$edp',  '$ar',  '$ao', 

'$pr11', '$pr21',
'$pr12', '$pr22',   
'$pr13', '$pr23',   

'$ao1', '$date', '$place','$nappn', '$UID')";

 
  if(mysqli_query($link, $sql)){

     // echo "Records added successfully eq1page. Eq page 11111";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }

} 

$sql  = "SELECT * FROM  eq4 WHERE email='$UID' and appn='$nappn' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if( $num_rows > 0)
{
///updating eq4 table 
 $sql="UPDATE eq4  SET  ph1='$ph1', ph2='$ph2', ph3='$ph3', ph4='$ph4', ph5='$ph5', ph6='$ph6', ph7='$ph7', ph8='$ph8',
pd11='$pd11', pd12='$pd12', pd13='$pd13', pd14='$pd14', pd15='$pd15', pd16='$pd16',
pd21='$pd21', pd22='$pd22', pd23='$pd23', pd24='$pd24', pd25='$pd25', pd26='$pd26',
pd31='$pd31', pd32='$pd32', pd33='$pd33', pd34='$pd34', pd35='$pd35', pd36='$pd36',
pd41='$pd41', pd42='$pd42', pd43='$pd43', pd44='$pd44', pd45='$pd45', pd46='$pd46',
    pd51='$pd51', pd52='$pd52', pd53='$pd53', pd54='$pd54', pd55='$pd55', pd56='$pd56' WHERE appn='$nappn' ";

if(mysqli_query($link, $sql)){

     //  echo "Records updated successfully. Eq page 11111";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);
        $qwe= " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}
 else
{
 $sql = "INSERT INTO eq4 VALUES(
'$ph1', '$ph2', '$ph3', '$ph4', '$ph5', '$ph6', '$ph7', '$ph8',

'$pd11' , '$pd12', '$pd13', '$pd14', '$pd15', '$pd16', 
'$pd21' , '$pd22', '$pd23', '$pd24', '$pd25', '$pd26', 
'$pd31' , '$pd32', '$pd33', '$pd34', '$pd35', '$pd36', 
'$pd41' , '$pd42', '$pd43', '$pd44', '$pd45', '$pd46',  
'$pd51' , '$pd52', '$pd53', '$pd54', '$pd55', '$pd56', 

'$E11', '$E12', '$E13', '$E14', '$E15', '$E16', '$E17',
'$E21', '$E22', '$E23', '$E24', '$E25', '$E26', '$E27',
'$E31', '$E32', '$E33', '$E34', '$E35', '$E36', '$E37',    
'$E41', '$E42', '$E43', '$E44', '$E45', '$E46', '$E47',
'$E51', '$E52', '$E53', '$E54', '$E55', '$E56', '$E57',
'$E61', '$E62', '$E63', '$E64', '$E65', '$E66', '$E67',
'$E71', '$E72', '$E73', '$E74', '$E75', '$E76', '$E77',
'$E81', '$E82', '$E83', '$E84', '$E85', '$E86', '$E87',
'$E91', '$E92', '$E93', '$E94', '$E95', '$E96', '$E97',
'$E101', '$E102', '$E103', '$E104', '$E105', '$E106', '$E107',

'$phdcomplete', '$pgcomplete', '$phdongoing', '$pgongoing', '$cj1', '$cj2', '$oj1', '$oj2',

'$JInternational', '$JNational', '$CInternational', '$CNational',

'$patents', 

'$E4_11', '$E4_12', '$E4_13', '$E4_14', '$E4_15', '$E4_16',
'$E4_21', '$E4_22', '$E4_23', '$E4_24', '$E4_25', '$E4_26',
'$E4_31', '$E4_32', '$E4_33', '$E4_34', '$E4_35', '$E4_36',
'$E4_41', '$E4_42', '$E4_43', '$E4_44', '$E4_45', '$E4_46',
'$E4_51', '$E4_52', '$E4_53', '$E4_54', '$E4_55', '$E4_56',

'$F11', '$F12', '$F13', '$F14',
'$F21', '$F22', '$F23', '$F24',
'$F31', '$F32', '$F33', '$F34',
'$F41', '$F42', '$F43', '$F44',
'$F51', '$F52', '$F53', '$F54',
 
'$fa11', '$fa12', '$fa13',
'$fa21', '$fa22', '$fa23',
'$fa31', '$fa32', '$fa33',
'$fa41', '$fa42', '$fa43',    
'$fa51', '$fa52', '$fa53',
'$fa61', '$fa62', '$fa63',
'$fa71', '$fa72', '$fa73',
'$fa81', '$fa82', '$fa83',
'$fa91', '$fa92', '$fa93',
'$fa101', '$fa102', '$fa103',

'$industry','$nappn', '$UID')";
if(mysqli_query($link, $sql)){

      //echo "Records added successfully. Eq page 11111";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);
        $qwe= " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}

    // close connection

    mysqli_close($link);

 

    // close connection



    ?>


<html>
    <head>
        <style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
        <title><?php echo $UID;?>.com</title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen"> 
        <script type="text/javascript" src="assets/datepicker.js"></script> 
        <script type="text/javascript" src="assets/timepicker.js"></script> 
        <link rel="stylesheet" type="text/css" href="assets/runnable.css" /> 
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
        
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

    </head>
    
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
                                                                <li><a href="jaddd.php">Conference Papers</a></li> 
                                                                <li><a href="cfaddd.php">Subjects Taught</a></li> 
  <li><a href="submit.php">Submit/Print Application</a></li>


                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
        
        <form action="eq4pageinsert.php" method="post" name="f1" >
         <hr>
       <table>
          <tr>
              <th>  <p> <font size="5"  face="Comic sans MS"  color="black" > Credit Earned:  <input type="text"  name="credit1" value="<?php echo $credit1; ?>" readonly /> </font> </p> </th>
          </tr>
           </table>     
       <hr>
            <table>
            <p> Your application  No :<input type="text"  name="nappn" value="<?php echo $nappn; ?> "  readonly/> </p>
               </table>
                        <hr>  
<table CELLPADDING="5" cellspacing="5" > 
 <tr>
     <td align="">
       <b>    1.  Name in Full 
     </td>
     <td>
         <input type="text" size="50" maxlength="150" name="Page5" value="<?php echo $Page5; ?> "  >
         </td>
 
            <td >
              a) Father's Name
       </td>
        <td>
            <input name="Page6" type="text" maxlength="150" size="25" value="<?php echo $Page6; ?> "  >

       </td>
     <td align="center">
         Mother's Name
     </td>
     <td>
         <input type="text"  size="25" maxlength="150" name="Page7" value="<?php echo $Page7; ?> " >
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr >
 <td align="right">
       <b> b) Gender </b>
 </td>

 <td>
     <input type="radio" name="Page8" value="Male" <?php if(isset($_REQUEST['Page8']) && $_REQUEST['Page8'] == "Male") echo 'checked="checked"'; ?> /> Male&nbsp;
     <input type="radio" name="Page8" value="Female" <?php if(isset($_REQUEST['Page8']) && $_REQUEST['Page8'] == "Female") echo 'checked="checked"'; ?> /> Female &nbsp;
       <input type="radio" name="Page8" value="Transgender" <?php if(isset($_REQUEST['Page8']) && $_REQUEST['Page8'] == "Transgender") echo 'checked="checked"'; ?> /> Transgender&nbsp;
 </td>
 <td>
    <b> c) Marital Status 
 <td>  <input type="radio" name="Page11" value="Married" <?php if(isset($_REQUEST['Page11']) && $_REQUEST['Page11'] == "Married") echo 'checked="checked"'; ?>  /> Married&nbsp;
      <input type="radio" name="Page11" value="Single" <?php if(isset($_REQUEST['Page11']) && $_REQUEST['Page11'] == "Single") echo 'checked="checked"'; ?> />Single &nbsp;
</td>
<td>
    <b> d) Category 
</td>   
<td >  
    <input type="radio" name="Page12" value="SC" <?php if(isset($_REQUEST['Page12']) && $_REQUEST['Page12'] == "SC") echo 'checked="checked"'; ?> /> SC &nbsp;
   
             <input type="radio" name="Page12" value="ST" <?php if(isset($_REQUEST['Page12']) && $_REQUEST['Page12'] == "ST") echo 'checked="checked"'; ?> />ST &nbsp;
        
   
        <input type="radio" name="Page12" value="OBC" <?php if(isset($_REQUEST['Page12']) && $_REQUEST['Page12'] == "OBC") echo 'checked="checked"'; ?> />OBC &nbsp;
        
 
    <input type="radio" name="Page12" value="GEN" <?php if(isset($_REQUEST['Page12']) && $_REQUEST['Page12'] == "GEN") echo 'checked="checked"'; ?> />GEN  &nbsp;
        </td>
        </tr>
               </table>   
         
           <table CELLPADDING="5" cellspacing="5">
 <tr>
     <td>  <b>&nbsp;&nbsp;&nbsp;e) Attested copy certificate enclosed(Yes/No) (only in case of SC/ST/OBC) </b> <td><select name="Page17" >
        <option> <?php  if(!($_POST['Page17']=="")){ echo $_POST['Page17'] ?> 
       <?php } else { ?>- Select - <?php } ?>  </option>
        <option value="NO">NO </option>
        <option value="YES" >YES </option></select> </td>
                    </td>
    </tr>
 <tr>
     <td> <b> &nbsp;&nbsp; f) Percentage of Disability of PWD candidate  </td>  </b> <td><input type="text" maxlength="10"  name="Page18" value=" <?php echo $Page18; ?>" size="5" /> &nbsp;&nbsp;&nbsp;
       
         <input type="radio" name="Page19" value="None"  <?php if(isset($_REQUEST['Page19']) && $_REQUEST['Page19'] == "None") echo 'checked="checked"'; ?>size="5" />None &nbsp;
         <input type="radio" name="Page19" value="VH"  <?php if(isset($_REQUEST['Page19']) && $_REQUEST['Page19'] == "VH") echo 'checked="checked"'; ?>size="5" />VH &nbsp;
         <input type="radio" name="Page19" value="OH"  <?php if(isset($_REQUEST['Page19']) && $_REQUEST['Page19'] == "OH") echo 'checked="checked"'; ?> size="5" />OH &nbsp;
         <input type="radio" name="Page19" value="HH"  <?php if(isset($_REQUEST['Page19']) && $_REQUEST['Page19'] == "HH") echo 'checked="checked"'; ?> size="5" />HH &nbsp;</td>
        </tr>
           </table>
                  <hr align="left" >  
                  <b>2. Address:  </b> <br>
   <div class="">
<div class="floatLeft">
<table CELLPADDING="5" cellspacing="10">
<tr>
     <td align="">      (a) Permanent:  </td>  </tr>
<tr><td> Address Line1 </td> <td><input type="text" name="Page22" value="<?php echo $Page22; ?>" size="40" maxlength="150" > </td></tr>
<tr> <td>Address Line2 </td><td> <input type="text" name="Page23" value="<?php echo $Page23; ?>" size="40" maxlength="150" > </td>  </tr>
<tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="<?php echo $Page24; ?>" size="40" maxlength="150"> </td></tr>
<tr><td>      City  </td> <td>  <input type="text" name="Page25" value="<?php echo $Page25; ?>" size="40" maxlength="100" >  </td> </tr> 
<tr><td>      Pin Code</td> <td>  <input type="text" name="Page26" value="<?php echo $Page26; ?>" size="40" maxlength="10"  >  </td> </tr>
<tr><td>     State </td> <td>  <input type="text" name="Page27" value="<?php echo $Page27; ?>" size="40" maxlength="100" ></td> </tr>


</table>
</div>

<div class="floatRight">
<table CELLPADDING="5" cellspacing="10">
    <tr><td colspan="2" > (b) Address for Correspondence:  </td></tr>
    <tr> <td > Address Line1 </td> <td><input type="text" name="Page28" value="<?php echo $Page28; ?>" size="40" maxlength="150" /> </td>  </tr>
    <tr><td>Address Line2 </td><td> <input type="text" name="Page29" value="<?php echo $Page29; ?>" size="40" maxlength="150" /> </td></tr>
    <tr> <td> Address Line3 </td> <td> <input type="text" name="Page30" value="<?php echo $Page30; ?>" size="40" maxlength="150"/> </td></tr>
    <tr> <td> City  </td> <td>  <input type="text" name="Page31" value="<?php echo $Page31; ?>" size="40" maxlength="100" />  </td></tr>
    <tr>  <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="<?php echo $Page32; ?>" size="40" maxlength="10" />  </td>  </tr>
    <tr><td>     State </td> <td>  <input type="text" name="Page33" value="<?php echo $Page33; ?>" size="40" maxlength="100" /></td> </tr>
    <tr> <td>Mobile</td> <td><input type="text" name="Page34" value="<?php echo $Page34; ?>" size="40" maxlength="12" /> </td></tr>
    <tr><td>Telephone (with <br>STD code)office </td> <td><input type="text" name="Page35" value="<?php echo $Page35; ?>" size="40" maxlength="20" /></td></tr>
    <tr> <td>  Telephone (with <br>STD code) Res. No.</td> <td><input type="text" name="Page36" value="<?php echo $Page36; ?>" size="40" maxlength="20" /> </td></tr>
    <tr>  <td>   Email</td> <td><input type="text" name="Page37" value="<?php echo $Page37; ?>" size="40" maxlength="150"/></td></tr>
 
</table>
</div>
</div>
                  <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
    
                           <hr align="left" >  

               <table CELLPADDING="5" cellspacing="5" >
         
                   <td> <b>    3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp; </b></td>
    
            <td>
        
                <input type="text" maxlength="20" id="start_dt" class='datepicker' size='15'  name="Page38" value="<?php echo $Page38; ?>" >  
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> &nbsp;&nbsp; <b> 3 &nbsp;&nbsp;(b) Nationality  </b></td>  
    
     <td>
         <input type="text" maxlength="20" name="Page41" value="<?php echo $Page41; ?>"  >
     </td>
        </tr>
               </table>
                           
                         
                           <hr align="left" >  
     
               <table CELLPADDING="5" cellspacing="5">
         <tr>   
         </tr>
         <tr>
     <td> 
         <b> 4. Present Employment:  </b></td>  </tr>
         <tr><td> Designation </td><td><input type="text" name="Page42" value="<?php echo $Page42; ?>"  size="40" maxlength="150"/> </td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Organization </td><td><input type="text" name="Page43" value="<?php echo $Page43; ?>" size="40" maxlength="150" /> </td> 
             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Joining to the present post </td><td><input type="text" id="start_dt1" class='datepicker' size='15'  name="Page44" value="<?php echo $Page44; ?>"  maxlength="20" >  </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45" value="<?php echo $Page45; ?>" size="40" maxlength="25" /> </td> 
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGP/GP </td><td> <input type="text" name="Page46" value="<?php echo $Page46; ?>" placeholder="AGP/GP:(if applicable)" size="40" maxlength="25"/> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Current Basic pay Rs. </td><td> <input type="text" name="Page47" value="<?php echo $Page47; ?>" size="40" maxlength="25"/> </td> </tr>
       <tr><td> Total Emoluments <br>(per month) Rs. </td><td> <input type="text" name="Page48" value="<?php echo $Page48; ?>" size="40" maxlength="25"/> </td></tr> 
       </table>
                                                                   <hr align="left" >  

                                                 <table>
                                                     <tr>  <td> <b> 5. Areas of specializations: </b>
                                                         </td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                             <input type="text" size="40" maxlength="150" name="Page49" value="<?php echo $Page49; ?>" style="width:720px;" > </td>
        </tr>
               </table>
               <hr>      
               <b> 6.Academic Career Record starting with SSLC. Enter individual semester marks where relevant (Diploma/UG/PG/Others). (Upload certificates/marks cards.)</b>
  <br>
  <br>
   
    <table CELLPADDING=2 cellspacing="5" width="50%">
   <tr>
         <td>Certificate/Degree<br>-Specialization<br></td>
        <td>year</td>
        <td>School/College</td>
        <td>Board/University <br></td>
        <td>Class/<br>Division</td>
        <td>Marks/CPGA<br> Obtained</td>
        <td>Max Marks<br>/CGPA</td>
        <td>Percentage/<br>    CGPA</td>
        <td>Semester-wise  Marks (if relevant, <br>  semi-colon separated list) </td>
    </tr>
      <tr>
        <td ><input type="text" name="e11" maxlength="50" value="<?php echo $_POST['e11']; ?>"></td>      
  <td ><select name="e12" id="e12" style="width:100px;" >  
   <option> <?php  if(!($_POST['e12']=="")){ echo $_POST['e12'] ?> 
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
        <td ><input type="text" name="e13" value="<?php echo $_POST['e13']; ?>" maxlength="150" ></td>
        <td ><input type="text" name="e14"  value="<?php echo $_POST['e14']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e15"  style="width:120px;"  value="<?php echo $_POST['e15']; ?>" maxlength="20"></td>
         <!--for pecentage -->
<td><input type="text" id="e16" maxlength="11" name="e16" onChange="perc1()" value="<?php echo $_POST['e16']; ?>"></td>
<td><input type="text" id="e17" maxlength="11" name="e17" onChange="perc1()" value="<?php echo $_POST['e17']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e18" id="18" maxlength="10"  value="<?php echo $_POST['e18']; ?>" ></td>
        <td><input type="text" name="e19"  maxlength="50"  value="<?php echo $_POST['e19']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
</tr>
    <tr>
    <td ><input type="text" name="e21" maxlength="50" value="<?php echo $_POST['e21']; ?>" ></td>
        <td ><select name="e22" id="e22" style="width:100px;">
    <option> <?php if(!($_POST['e22']=="")) { echo $_POST['e22'] ?> <?php  }  else { ?> -Year- <?php } ?> </option>
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
        <td ><input type="text" name="e23" value="<?php echo $_POST['e23']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e24" value="<?php echo $_POST['e24']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e25"  style="width:120px;" value="<?php echo $_POST['e25']; ?>" maxlength="20" ></td>
         <!--for pecentage -->
<td><input type="text" id="e26" maxlength="11" name="e26" onChange="perc2()" value="<?php echo $_POST['e26']; ?>"></td>
<td><input type="text" id="e27" maxlength="11" name="e27" onChange="perc2()" value="<?php echo $_POST['e27']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e28" id="28" maxlength="10"  value="<?php echo $_POST['e28']; ?>" ></td>
        <td><input type="text" name="e29"  maxlength="50"  value="<?php echo $_POST['e29']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
    <td ><input type="text" name="e31" value="<?php echo $_POST['e31']; ?>" maxlength="50"></td>
        <td ><select name="e32" id="e32" style="width:100px;">
  <option> <?php  if(!($_POST['e32']=="")){ echo $_POST['e32'] ?> 
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
        <td ><input type="text" name="e33" value="<?php echo $_POST['e33']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e34" value="<?php echo $_POST['e34']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e35"  style="width:120px;"  value="<?php echo $_POST['e35']; ?>" maxlength="20"></td>
        <!--for pecentage -->
<td><input type="text" id="e36" maxlength="11" name="e36" onChange="perc3()" value="<?php echo $_POST['e36']; ?>"></td>
<td><input type="text" id="e37" maxlength="11" name="e37" onChange="perc3()" value="<?php echo $_POST['e37']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e38" id="38"  maxlength="10"  value="<?php echo $_POST['e38']; ?>" ></td>
        <td><input type="text" name="e39"  maxlength="50"  value="<?php echo $_POST['e39']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e41" value="<?php echo $_POST['e41']; ?>" maxlength="50"></td>
        <td ><select name="e42" id="e42" style="width:100px;">
    <option> <?php  if(!($_POST['e42']=="")){ echo $_POST['e42'] ?> 
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
        <td ><input type="text" name="e43" value="<?php echo $_POST['e43']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e44" value="<?php echo $_POST['e44']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e45" style="width:120px;" value="<?php echo $_POST['e45']; ?>" maxlength="20"></td>
        <!--for pecentage -->
<td><input type="text" id="e46" maxlength="11" name="e46" onChange="perc4()" value="<?php echo $_POST['e46']; ?>"></td>
<td><input type="text" id="e47" maxlength="11" name="e47" onChange="perc4()" value="<?php echo $_POST['e47']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e48" id="48" maxlength="10"  value="<?php echo $_POST['e48']; ?>" ></td>
        <td><input type="text" name="e49"  maxlength="50"  value="<?php echo $_POST['e49']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e51"  value="<?php echo $_POST['e51']; ?>" maxlength="50"></td>
        <td ><select name="e52" style="width:100px;">
                 <option> <?php  if(!($_POST['e52']=="")){ echo $_POST['e52'] ?> 
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
        <td ><input type="text" name="e53" value="<?php echo $_POST['e53']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e54"  value="<?php echo $_POST['e54']; ?>" maxlength="150" ></td>
        <td ><input type="text" name="e55" style="width:120px;" value="<?php echo $_POST['e55']; ?>" maxlength="20"></td>
         <!--for pecentage -->
<td><input type="text" id="e56" maxlength="11" name="e56" onChange="perc5()" value="<?php echo $_POST['e56']; ?>"></td>
<td><input type="text" id="e57" maxlength="11" name="e57" onChange="perc5()" value="<?php echo $_POST['e57']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e58" id="58" maxlength="10"  value="<?php echo $_POST['e58']; ?>" ></td>
        <td><input type="text" name="e59"  maxlength="50"  value="<?php echo $_POST['e59']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
    <td ><input type="text" name="e61" value="<?php echo $_POST['e61']; ?>" maxlength="50"></td>
        <td ><select name="e62" style="width:100px;">
    <option> <?php if(!($_POST['e62']=="")) { echo $_POST['e62'] ?> <?php  }  else { ?> -Year- <?php } ?> </option>
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
        <td ><input type="text" name="e63" value="<?php echo $_POST['e63']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e64" value="<?php echo $_POST['e64']; ?>"  maxlength="150"></td>
        <td ><input type="text" name="e65" style="width:120px;" value="<?php echo $_POST['e65']; ?>" maxlength="20"></td>
        <!--for pecentage -->
<td><input type="text" id="e66" maxlength="11" name="e66" onChange="perc6()" value="<?php echo $_POST['e66']; ?>"></td>
<td><input type="text" id="e67" maxlength="11" name="e67" onChange="perc6()" value="<?php echo $_POST['e67']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e68" id="68" maxlength="10"  value="<?php echo $_POST['e68']; ?>" ></td>
        <td><input type="text" name="e69"  maxlength="50"  value="<?php echo $_POST['e69']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e71" value="<?php echo $_POST['e71']; ?>" maxlength="50"></td>
        <td ><select name="e72" style="width:100px;">
    <option> <?php if(!($_POST['e72']=="")) { echo $_POST['e72']; ?>  <?php } else { ?> - Year - <?php } ?> </option>
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
        <td ><input type="text" name="e73" value="<?php echo $_POST['e73']; ?>" maxlength="150" ></td>
        <td ><input type="text" name="e74"  value="<?php echo $_POST['e74']; ?>" maxlength="150" maxlength="150" ></td>
        <td ><input type="text" name="e75" style="width:120px;"  value="<?php echo $_POST['e75']; ?>" maxlength="20"></td>
         <!--for pecentage -->
<td><input type="text" id="e76" maxlength="11"  name="e76" onChange="perc7()" value="<?php echo $_POST['e76']; ?>"></td>
<td><input type="text" id="e77" maxlength="11" name="e77" onChange="perc7()" value="<?php echo $_POST['e77']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e78" id="78" maxlength="10"  value="<?php echo $_POST['e78']; ?>" ></td>
        <td><input type="text" name="e79"  maxlength="50"  value="<?php echo $_POST['e79']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e81" value="<?php echo $_POST['e81']; ?>" maxlength="50"></td>
        <td ><select name="e82" style="width:100px;">
    <option> <?php if(!($_POST['e82']=="")) { echo $_POST['e82']; ?>  <?php } else { ?> - Year - <?php } ?> </option>
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
        <td ><input type="text" name="e83" value="<?php echo $_POST['e83']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e84" value="<?php echo $_POST['e84']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e85" style="width:120px;" value="<?php echo $_POST['e85']; ?>" maxlength="20"></td>
        <!--for pecentage -->
<td><input type="text" id="e86" maxlength="11" name="e86" onChange="perc8()" value="<?php echo $_POST['e86']; ?>"></td>
<td><input type="text" id="e87" maxlength="11" name="e87" onChange="perc8()" value="<?php echo $_POST['e87']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e88" id="88" maxlength="10"  value="<?php echo $_POST['e88']; ?>" ></td>
        <td><input type="text" name="e89"  maxlength="50"  value="<?php echo $_POST['e89']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
      <tr>
        <td ><input type="text" name="e91" value="<?php echo $_POST['e93']; ?>" maxlength="50"></td>
        <td ><select name="e92" style="width:100px;">
     <option> <?php if(!($_POST['e92']=="")) { echo $_POST['e92']; ?>  <?php } else { ?> - Year - <?php } ?> </option>
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
        <td ><input type="text" name="e93" value="<?php echo $_POST['e93']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e94" value="<?php echo $_POST['e94']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e95" style="width:120px;" value="<?php echo $_POST['e95']; ?>" maxlength="20"></td>
        <!--for pecentage -->
<td><input type="text" id="e96" maxlength="11" name="e96" onChange="perc9()" value="<?php echo $_POST['e96']; ?>"></td>
<td><input type="text" id="e97" maxlength="11" name="e97" onChange="perc9()" value="<?php echo $_POST['e97']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e98" id="98" maxlength="10"  value="<?php echo $_POST['e98']; ?>" ></td>
        <td><input type="text" name="e99"  maxlength="50"  value="<?php echo $_POST['e99']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
      <tr>
        <td ><input type="text" name="e101" value="<?php echo $_POST['e101']; ?>" maxlength="50"></td>
        <td ><select name="e102" style="width:100px;">
    <option> <?php if(!($_POST['e102']=="")) { echo $_POST['e102']; ?>  <?php } else { ?> - Year - <?php } ?> </option>
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
        <td ><input type="text" name="e103" value="<?php echo $_POST['e103']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e104" value="<?php echo $_POST['e104']; ?>" maxlength="150"></td>
        <td ><input type="text" name="e105" style="width:120px;" value="<?php echo $_POST['e105']; ?>" maxlength="20"></td>
       <!--for pecentage -->
<td><input type="text" id="e106" maxlength="11" name="e106" onChange="perc10()" value="<?php echo $_POST['e106']; ?>"></td>
<td><input type="text" id="e107" maxlength="11" name="e107" onChange="perc10()" value="<?php echo $_POST['e107']; ?>" ></td>
         <!--for pecentage -->
        <td><input type="text" name="e108"  id="108" maxlength="10"  value="<?php echo $_POST['e108']; ?>" ></td>
        <td><input type="text" name="e109"  maxlength="50"  value="<?php echo $_POST['e109']; ?>" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    </table>
      
        <hr>
            <table CELLPADDING="5" cellspacing="5"> 
    
 <b>  7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
<br>
  
  <table style="table-layout: fixed;" cellpadding="1" cellspacing="" >
                <tr >
                     <td>Thesis Title</td>
                    <td>From Date <br>(MM/DD/YYYY)</td>
                    <td>Final Viva Date<br>(MM/DD/YYYY)</td>
                  <td>Institute/<br>University</td>
                    <td>Guide/<br>Mentor</td>
                    <td>Mode(Full <br> /Part time)</td>
                    <td>Area of <br> Research</td>
                    <td>Award Date <br>(MM/DD/YYYY)</td>
                </tr> 
                <tr >
                    <td><textarea name="ph1" maxlength="500" rows="1" cols="30" ><?php echo $_POST['ph1']; ?></textarea>
                        <!-- <input tyep="text"  rows="1" cols="30" input type="text" name="ph1" value=""  /> -->
                        </td> 
                    <td>
                       <input type="text" maxlength="20" id="datepicker" name="ph2"  style="width:100px;" value="<?php echo $_POST["ph2"]; ?>"  />   </td> 
                    <td> 
                       <input type="text" maxlength="20" id="datepicker1" name="ph3" style="width:100px;" value="<?php echo $_POST["ph3"]; ?>"  />    </td> 
                    <td ><input type="text" maxlength="150" name="ph4" style="width:200px;" class="form-control" size="40" value="<?php echo $_POST["ph4"]; ?>"  /> </td> 
                    <td><input type="text"  maxlength="150" name="ph5" style="width:200px;" class="form-control" size="30" value="<?php echo $_POST["ph5"]; ?>"  />  </td> 
                       <td><select name="ph6"  style="width:120px;">
        <option> <?php  if(!($_POST['ph6']=="")){ echo $_POST['ph6'] ?> 
       <?php } else { ?>- Select - <?php } ?>  </option>
         <option value="Full Time">Full Time </option>
         <option value="Part Time">Part Time </option></select> </td> 
 <td><input type="text" maxlength="150"  name="ph7"  style="width:200px;" value="<?php echo  $_POST["ph7"]; ?>"  />  </td> 
 <td><input type="text" maxlength="20"  id="datepicker3" name="ph8"  style="width:100px;" value="<?php echo $_POST["ph8"]; ?>"  /> </td> 
</tr>
            </table> 
     
    <hr>
     <table>   
<b>   8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>    
      <table>
               
                <tr >
                    <td>Career </td>
                    <td>From Date <br> (MM/DD/YYYY)</td>
                    <td>To Date <br> (MM/DD/YYYY)</td>
                  <td>Institute/Organization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr> <tr>
                    <td> <textarea name="pd11" maxlength="150" rows="1" cols="30" ><?php echo $_POST['pd11']; ?></textarea>
                        <!-- <input tyep="text" rows="1" cols="30" input type="text" name="pd11"  id="message" placeholder="Career" value=""  /> -->
                        </td> 
                        <td><input type="text"  maxlength="20" id="datepicker4"  name="pd12"  style="width:100px;" value="<?php echo $_POST["pd12"]; ?>"  /> </td> 
                        <td><input type="text" maxlength="20" id="datepicker5"  name="pd13"  style="width:100px;" value="<?php echo $_POST["pd13"]; ?>"  />  </td> 
                        <td ><input type="text" name="pd14" maxlength="150" class="form-control" size="40" value="<?php echo $_POST["pd14"]; ?>"  />  </td> 
                        <td><input type="text" name="pd15" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd15"]; ?>"  /> </td> 
                        <td align='center'><input type="text" maxlength="150" name="pd16" class="form-control" size="30" value="<?php echo $_POST["pd16"]; ?>"  /> </td> 
                      </tr>
                      <tr>
                          <td><textarea name="pd21" maxlength="150" rows="1" cols="30" ><?php echo $_POST['pd21']; ?> </textarea>
                           <!--   <input tyep="text"  rows="1" cols="30" val="" input type="text" name="pd21"  id="message" placeholder="Career" value=""  /> -->
                          </td> 
                    <td><input type="text"  id="datepicker6" maxlength="20" name="pd22"  style="width:100px;" value="<?php echo$_POST["pd22"]; ?>"  />  </td> 
                    <td><input type="text"  id="datepicker7" maxlength="20" name="pd23"  style="width:100px;" value="<?php echo $_POST["pd23"]; ?>"  /> </td> 
                    <td ><input type="text" name="pd24" maxlength="150" class="form-control" size="40" value="<?php echo $_POST["pd24"]; ?>"  />  </td> 
                    <td><input type="text" name="pd25" maxlength="150" class="form-control" size="30" value="<?php echo$_POST["pd25"]; ?>"  />  </td> 
                    <td align='center'><input type="text" name="pd26" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd26"]; ?>"  />  </td> 
                    
                      </tr>
                      <tr>
                          <td> <textarea name="pd31" maxlength="150" rows="1" cols="30" ><?php echo $_POST['pd31']; ?></textarea>
                      <!--  <input tyep="text"  rows="1" cols="30"  input type="text" name="pd31"  id="message" placeholder="Career" value=""  />  -->
                    </td> 
                    <td><input type="text"    id="datepicker8" maxlength="20" name="pd32"  style="width:100px;" value="<?php echo $_POST["pd32"]; ?>"  />  </td> 
                    <td><input type="text"   id="datepicker9" maxlength="20" name="pd33"  style="width:100px;" value="<?php echo $_POST["pd33"]; ?>"  />   </td> 
                    <td ><input type="text" name="pd34" maxlength="150" class="form-control" size="40" value="<?php echo $_POST["pd34"]; ?>"  />  </td> 
                    <td><input type="text" name="pd35" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd35"]; ?>"  />  </td> 
                    <td align='center'><input type="text" name="pd36" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd36"]; ?>"  />  </td> 
                      </tr>
                       <tr>
                           <td> <textarea name="pd41" maxlength="150" rows="1" cols="30" ><?php echo $_POST['pd41']; ?></textarea>
                      <!--  <input tyep="text"  rows="1" cols="30"  input type="text" name="pd41"  id="message" placeholder="Career" value=""  /> -->
                    </td> 
                    <td><input type="text"  id="datepicker10"  maxlength="20"   name="pd42"  style="width:100px;" value="<?php echo $_POST["pd42"]; ?>"  />  </td> 
                    <td><input type="text"  id="datepicker11"  name="pd43"  maxlength="20"  style="width:100px;" value="<?php echo $_POST["pd43"]; ?>"  />  </td> 
                    <td ><input type="text" name="pd44" maxlength="150" class="form-control" size="40" value="<?php echo $_POST["pd44"]; ?>"  />  </td> 
                    <td><input type="text" name="pd45" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd45"]; ?>"  />  </td> 
                    <td align='center'><input type="text" name="pd46" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd46"]; ?>"  />  </td> 
                      </tr>
                       <tr>
                           <td> <textarea name="pd51" rows="1" maxlength="150" cols="30" ><?php echo $_POST['pd51']; ?></textarea>
                        <!-- <input tyep="text" rows="1" cols="30"  input type="text" name="pd51"  id="message" placeholder="Career" value=""  />  -->
                    </td> 
                    <td><input type="text"  id="datepicker12" name="pd52"  maxlength="20"  style="width:100px;" value="<?php echo $_POST["pd52"]; ?>"  />   </td> 
                    <td><input type="text" id="datepicker13"  name="pd53" maxlength="20"  style="width:100px;" value="<?php echo $_POST["pd53"]; ?>"  />  </td> 
                    <td ><input type="text" name="pd54" maxlength="150" class="form-control" size="40" value="<?php echo $_POST["pd54"]; ?>"  />  </td> 
                    <td><input type="text" name="pd55" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd55"]; ?>"  />  </td> 
                    <td align='center'><input type="text" name="pd56" maxlength="150" class="form-control" size="30" value="<?php echo $_POST["pd56"]; ?>"  />  </td> 
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
                    <td><textarea rows="1" cols="50" maxlength="150" input type="text" name="nt11"  id="message" placeholder="Examination"><?php echo $_POST['nt11']; ?></textarea> </td> 
                    <td><select name="nt12" id="nt12" style="width:100px;">
    <option> <?php if(!($_POST['nt12']=="")) { echo $_POST['nt12'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
<td><input type="text" name="nt13" class="form-control" size="50" value="<?php echo $_POST['nt13']; ?>" maxlength="150"> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;" value="<?php echo $_POST['nt14']; ?>"  maxlength="10"> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt15']; ?>"  maxlength="20"> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt16']; ?>"  maxlength="10"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" maxlength="150"input type="text" name="nt21"  id="message" placeholder="Examination">
                      <?php echo $_POST['nt21']; ?>
                        </textarea> </td> 
                    <td><select name="nt22"  id="nt22"  style="width:100px;">
      <option>  <?php if(!($_POST['nt22']=="")) { echo $_POST['nt22'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
                    <td><input type="text" name="nt23"   maxlength="150" class="form-control" size="50" value="<?php echo $_POST['nt23']; ?>"> </td> 
                    <td ><input type="text" name="nt24"  maxlength="10" class="form-control" size="15"  style="width:100px;" value="<?php echo $_POST['nt24']; ?>"> </td> 
                    <td><input type="text" name="nt25"  maxlength="20" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt25']; ?>"> </td> 
                    <td align='center'><input type="text" name="nt26"  maxlength="10" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt26']; ?>"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50"  maxlength="150" input type="text" name="nt31"  id="message" placeholder="Examination">
                        <?php echo $_POST['nt31']; ?>
                        </textarea> </td> 
                    <td><select name="nt32" id="nt32" style="width:100px;">
 <option>  <?php if(!($_POST['nt32']=="")) { echo $_POST['nt32'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
                    <td><input type="text" name="nt33"  maxlength="150" class="form-control" size="50" value="<?php echo $_POST['nt33']; ?>"> </td> 
                    <td ><input type="text" name="nt34"  maxlength="10" class="form-control" size="15"  style="width:100px;" value="<?php echo $_POST['nt34']; ?>"> </td> 
                    <td><input type="text" name="nt35"  maxlength="20" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt35']; ?>"> </td> 
                    <td align='center'><input type="text" name="nt36"  maxlength="10" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt36']; ?>"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50"  maxlength="150" input type="text" name="nt41"  id="message" placeholder="Examination">
                        <?php echo $_POST['nt41']; ?>
                        </textarea> </td> 
                    <td><select name="nt42" id="nt42"  style="width:100px;">
 <option>  <?php if(!($_POST['nt42']=="")) { echo $_POST['nt42'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
                    <td><input type="text" name="nt43"  maxlength="150" class="form-control" size="50" value="<?php echo $_POST['nt43']; ?>"> </td> 
                    <td ><input type="text" name="nt44"  maxlength="10" class="form-control" size="15"  style="width:100px;" value="<?php echo $_POST['nt44']; ?>"> </td> 
                    <td><input type="text" name="nt45"  maxlength="20" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt45']; ?>"> </td> 
                    <td align='center'><input type="text" name="nt46"  maxlength="10" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt46']; ?>"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50"  maxlength="150" input type="text" name="nt51"  id="message" placeholder="Examination">
                        <?php echo $_POST['nt51']; ?>
                        </textarea> </td> 
                    <td><select name="nt52" id="nt52" style="width:100px;">
 <option>  <?php if(!($_POST['nt52']=="")) { echo $_POST['nt52'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
                    <td><input type="text" name="nt53"  maxlength="150" class="form-control" size="50" value="<?php echo $_POST['nt53']; ?>"> </td> 
                    <td ><input type="text" name="nt54"  maxlength="10"  class="form-control" size="15"  style="width:100px;" value="<?php echo $_POST['nt54']; ?>"> </td> 
                    <td><input type="text" name="nt55"  maxlength="20" class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt55']; ?>"> </td> 
                    <td align='center'><input type="text" name="nt56"  maxlength="10"  class="form-control" size="10"  style="width:100px;" value="<?php echo $_POST['nt53']; ?>"> </td> 
                    
                </tr>
                 </table>
  <hr>      

          
                       <p align="center" width="80%">        <input id="btn1" type="submit" formaction="eq41page.php" value="Save Progress" name="previous">               </p>    
               
 <hr>      <p>
    
          <table>
<tr>
<p>  <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b><p> </tr>
<tr> For the current employed position, please enter Date of Leaving as the last date of the application submission </tr> </table>
<br>
 <table  width="60%" style=" text-align:center;" >
    <thead>
        <tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining<br>(MM/DD/YYYY)</td> <td>Date of Leaving <br>(MM/DD/YYYY)</td> <td>Number of Days/Months/Years</td> <td>Scale of Pay & GP/AGP(If applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" maxlength="100" size="30" name="E11" value="<?php echo $E11; ?>"  /></td>
            <td><input type="text" maxlength="100" size="30" name="E12" value="<?php echo $E12; ?>"  /></td>
            <td> <input type="text" maxlength="100" id="datepicker14"  name="E13" onchange="cal()"  style="width:100px;" value="<?php echo $E13; ?>"  /> </td>
            <td><input type="text"  maxlength="100" id="datepicker15" name="E14" onchange="cal()" style="width:100px;" value="<?php echo $E14; ?>"  /></td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays" name="E15" style="width:150px;" value="<?php echo $E15; ?>"  /></td>
            <td><input type="text" maxlength="100" size="10" name="E16"  style="width:100px;" value="<?php echo $E16 ?>"  /></td>
            <td><input type="text" maxlength="100" size="10" name="E17"  style="width:100px;" value="<?php echo $E17; ?>"  /></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="100" size="30" name="E21" value="<?php echo $E21; ?>"  /></td>
            <td><input type="text" maxlength="100" size="30" name="E22" value="<?php echo $E22; ?>"  /></td>
          <td><input type="text"  maxlength="100" id="datepicker16" name="E23" onchange="cal1()"  style="width:100px;" value="<?php echo $E23; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker17"  name="E24" onchange="cal1()" style="width:100px;" value="<?php echo $E24; ?>"  /></td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays1" name="E25" style="width:150px;" value="<?php echo $E25; ?>"  /></td>
            <td><input type="text" maxlength="100" size="10" name="E26"  style="width:100px;" value="<?php echo $E26; ?>"  /></td>
            <td><input type="text" maxlength="100" size="10" name="E27"  style="width:100px;" value="<?php echo $E27; ?>"  /></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

       <tr>
              <tr>
            <td><input type="text" maxlength="100" size="30" name="E31" value="<?php echo $E31; ?>"  /></td>
            <td><input type="text" maxlength="100" size="30" name="E32" value="<?php echo $E32; ?>"  /></td>
            <td> <input type="text" maxlength="100" id="datepicker18"  name="E33" onchange="cal2()"  style="width:100px;" value="<?php echo $E33; ?>"  /> </td>
            <td><input type="text"  maxlength="100" id="datepicker19" name="E34" onchange="cal2()" style="width:100px;" value="<?php echo $E34; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays2" name="E35" style="width:150px;" value="<?php echo $E35; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E36"  style="width:100px;" value="<?php echo $E36; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E37"  style="width:100px;" value="<?php echo $E37; ?>"  /> </td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>



        <tr>
            <td><input type="text" maxlength="100" size="30" name="E41" value="<?php echo $E41; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E42" value="<?php echo $E42; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker20" name="E43" onchange="cal3()"  style="width:100px;"value="<?php echo $E43 ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker21" name="E44" onchange="cal3()" style="width:100px;" value="<?php echo $E44; ?>"  /></td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays3" name="E45" style="width:150px;" value="<?php echo $E45; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E46"  style="width:100px;" value="<?php echo $E46; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E47"  style="width:100px;" value="<?php echo $E47; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="100" size="30" name="E51" value="<?php echo $E51; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E52" value="<?php echo $E52; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker22"  name="E53" onchange="cal4()"  style="width:100px;" value="<?php echo $E53; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker23"  name="E54" onchange="cal4()"  style="width:100px;" value="<?php echo $E54; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays4" name="E55"  style="width:150px;" value="<?php echo $E55; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E56"  style="width:100px;" value="<?php echo $E56; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E57"  style="width:100px;" value="<?php echo $E57; ?>"  /> </td>
  
        </tr>

        <tr>
            <td><input type="text" maxlength="100" size="30" name="E61" value="<?php echo $E61; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E62" value="<?php echo $E62; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker24" name="E63" onchange="cal5()"  style="width:100px;" value="<?php echo $E63; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker25" name="E64" onchange="cal5()"  style="width:100px;" value="<?php echo $E64; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays5" name="E65"  style="width:150px;" value="<?php echo $E65; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E66"  style="width:100px;" value="<?php echo $E66; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E67"  style="width:100px;" value="<?php echo $E67; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="100" size="30" name="E71" value="<?php echo $E71; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E72" value="<?php echo $E72; ?>"  /> </td>
          <td><input type="text"   maxlength="100" id="datepicker26" name="E73" onchange="cal6()"  style="width:100px;"  value="<?php echo $E73; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker27"  name="E74" onchange="cal6()"  style="width:100px;" value="<?php echo $E74; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays6" name="E75"  style="width:150px;" value="<?php echo $E75; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E76"  style="width:100px;" value="<?php echo $E76; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E77"  style="width:100px;" value="<?php echo $E77; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
         <tr>
            <td><input type="text" maxlength="100" size="30" name="E81" value="<?php echo $E81; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E82" value="<?php echo $E82; ?>"  /> </td>
           <td><input type="text"  maxlength="100" id="datepicker28" name="E83" onchange="cal7()"  style="width:100px;" value="<?php echo $E83; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker29" name="E84" onchange="cal7()" style="width:100px;" value="<?php echo $E84; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays7" name="E85" style="width:150px;" value="<?php echo $E85; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E86"  style="width:100px;" value="<?php echo $E86; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E87"  style="width:100px;" value="<?php echo $E87; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" maxlength="100" size="30" name="E91" value="<?php echo $E91; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E92" value="<?php echo $E92; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker30" name="E93" onchange="cal8()"  style="width:100px;" value="<?php echo $E93; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker31"  name="E94" onchange="cal8()"  style="width:100px;" value="<?php echo $E94; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays8" name="E95" style="width:150px;" value="<?php echo $E95; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E96"  style="width:100px;" value="<?php echo $E96; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E97"  style="width:100px;" value="<?php echo $E97; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" maxlength="100" size="30" name="E101" value="<?php echo $E101; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="30" name="E102" value="<?php echo $E102; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker32" name="E103" onchange="cal9()"  style="width:100px;" value="<?php echo $E103; ?>"  /> </td>
            <td><input type="text" maxlength="100" id="datepicker33" name="E104" onchange="cal9()"  style="width:100px;" value="<?php echo $E104; ?>"  /> </td>
            <td><input type="text" maxlength="100" class="textbox" id="numdays9" name="E105"  style="width:150px;" value="<?php echo $E105; ?>"  /></td>
            <td><input type="text" maxlength="100" size="10" name="E106"  style="width:100px;" value="<?php echo $E106; ?>"  /> </td>
            <td><input type="text" maxlength="100" size="10" name="E107"  style="width:100px;" value="<?php echo $E107; ?>"  /> </td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

        
         </tbody>
           
</table>
 <hr>      <p>

     <b>11. Total Experience (Number of Years and/or months)  </b>      
     <br><br>                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
            <input name="teachingexp" type="text" maxlength="150" size="25"  value="<?php echo $teachingexp; ?>"/>
       
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post-PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="researchexp" type="text"  maxlength="150" size="25" value="<?php echo $researchexp; ?>" />

       </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="industryexp" type="text" maxlength="150" size="25" value="<?php echo $industryexp; ?>" />

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
          <input name="asstprof" type="text" maxlength="150" size="25" value="<?php echo $asstprof; ?>" />
         <!--<font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Associate Professor or equivalent</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="assoprofexp" type="text" maxlength="150" size="25" value="<?php echo $assoprofexp; ?>" />

       </td>
  
    </tr>
 
       </table>
 <hr>      <p>

   <b>13. Subjects Taught (Since last promotion), Additional Subjects may be
added through "Subjects Taught" Tab.</b> 
   <br><br>
                  
                <table  width="60%" style="text-align: center">
                <thead>
                     <tr><td>Title of the Course taught </td> <td>Year</td> <td>U.G. / P.G. </td> <td>Approximate no. of students</td> <td>Institution/University</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
       <tr>
             <td><input type="text" size="10" name="E2_11" value="<?php echo $E2_11; ?>"  maxlength="150"></td>
            <td><select name="E2_12" id="E2_12">
    <option>  <?php if(!($_POST['nt52']=="")) { echo $_POST['E2_12'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="3" name="E2_13" value="<?php echo $E2_13; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_14" value="<?php echo $E2_14; ?>"></td>
            <td><input type="text"  maxlength="150"  size="15" name="E2_15" value="<?php echo $E2_15; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
             <td><input type="text"  maxlength="150" size="10" name="E2_21" value="<?php echo $E2_21; ?>"></td>
            <td><select name="E2_22">
   <option>  <?php if(!($_POST['E2_22']=="")) { echo $_POST['E2_22'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="3" name="E2_23" value="<?php echo $E2_23; ?>"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E2_24" value="<?php echo $E2_24; ?>"></td>
            <td><input type="text"  maxlength="150"  size="15" name="E2_25" value="<?php echo $E2_25; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text"  maxlength="150" size="10" name="E2_31" value="<?php echo $E2_31; ?>"></td>
            <td><select name="E2_32">
   <option>  <?php if(!($_POST['E2_32']=="")) { echo $_POST['E2_32'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="3" name="E2_33" value="<?php echo $E2_33; ?>"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E2_34" value="<?php echo $E2_34; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_35" value="<?php echo $E2_35; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
       
         <tr>
            <td><input type="text"   maxlength="150" size="10" name="E2_41" value="<?php echo $E2_41; ?>"></td>
            <td><select name="E2_42" >
    <option>  <?php if(!($_POST['E2_42']=="")) { echo $_POST['E2_42'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="3" name="E2_43" value="<?php echo $E2_43; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_44" value="<?php echo $E2_44; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_45" value="<?php echo $E2_45; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text"  maxlength="150"  size="10" name="E2_51" value="<?php echo $E2_51; ?>"></td>
            <td><select name="E2_52">
   <option>  <?php if(!($_POST['E2_52']=="")) { echo $_POST['E2_52'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="3" name="E2_53"  value="<?php echo $E2_53; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_54" value="<?php echo $E2_54; ?>"></td>
            <td><input type="text"   maxlength="150" size="15" name="E2_55" value="<?php echo $E2_55; ?>"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr>
            <td><input type="text"  maxlength="150" size="10" name="E2_61" value="<?php echo $E2_61; ?>"></td>
            <td><select name="E2_62">
    <option>  <?php if(!($_POST['E2_62']=="")) { echo $_POST['E2_62'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="3" name="E2_63" value="<?php echo $E2_63; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_64" value="<?php echo $E2_64; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_65" value="<?php echo $E2_65; ?>"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text"  maxlength="150" size="10" name="E2_71" value="<?php echo $E2_71; ?>"></td>
            <td><select name="E2_72">
    <option>  <?php if(!($_POST['E2_72']=="")) { echo $_POST['E2_72'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="3" name="E2_73" value="<?php echo $E2_73; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_74" value="<?php echo $E2_74; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_75" value="<?php echo $E2_75; ?>"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text"  maxlength="150" size="10" name="E2_81" value="<?php echo $E2_81; ?>"></td>
            <td><select name="E2_82">
    <option>  <?php if(!($_POST['E2_82']=="")) { echo $_POST['E2_82'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="3" name="E2_83" value="<?php echo $E2_83; ?>"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E2_84" value="<?php echo $E2_84; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_85" value="<?php echo $E2_85; ?>"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text"  maxlength="150"  size="10" name="E2_91" value="<?php echo $E2_91; ?>"></td>
            <td><select name="E2_92">
   <option>  <?php if(!($_POST['E2_92']=="")) { echo $_POST['E2_92'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="3" name="E2_93" value="<?php echo $E2_93; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_94" value="<?php echo $E2_94; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_95" value="<?php echo $E2_95; ?>"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text"  maxlength="150" size="10" name="E2_101" value="<?php echo $E2_101; ?>"></td>
            <td><select name="E2_102">
   <option>  <?php if(!($_POST['E2_102']=="")) { echo $_POST['E2_102'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="3" name="E2_103" value="<?php echo $E2_103; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="E2_104" value="<?php echo $E2_104; ?>"></td>
            <td><input type="text"  maxlength="150" size="15" name="E2_105" value="<?php echo $E2_105; ?>"></td>
            
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
          <input name="phdcomplete" type="text" maxlength="150" size="25" value="<?php echo $phdcomplete ?>"/>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="phdongoing" type="text" maxlength="150" size="25" value="<?php echo $phdongoing ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="cj1" type="text" maxlength="150" size="25" value="<?php echo $cj1 ?>" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="oj1" type="text" maxlength="150" size="25"  value="<?php echo $oj1 ?>"/>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    </tr>
   
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgcomplete" type="text" maxlength="150" size="25" value="<?php echo $pgcomplete ?>" />

       </td>
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgongoing" type="text" maxlength="150" size="25" value="<?php echo $pgongoing ?>" />

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="cj2" type="text" maxlength="150" size="25"  value="<?php echo $cj2 ?>"/>

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="oj2" type="text" maxlength="150" size="25"  value="<?php echo $oj2 ?>"/>

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
                        <input name="JInternational" type="text" maxlength="150" size="25" value="<?php echo $JInternational; ?>"  />

                            </td>
                             <td align="left">
            <p>International</p>
                        </td>    
                        <td>
                        <input name="CInternational" type="text" maxlength="150" size="25" value="<?php echo $CInternational; ?>"  />

                            </td>
                            </tr>
        
 
                <tr> 
                        <td align="left">
                        <p>National</p>
                            </td>
                            <td>
                        <input name="JNational" type="text" maxlength="150" size="25" value="<?php echo $JNational; ?>"  />
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                       <td align="left">
                        <p>National</p>
                            </td>
                            <td>
                        <input name="CNational" type="text" maxlength="150" size="25" value="<?php echo $CNational; ?>"  />
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                    </tr>    
           
           
            </table>
   
         <hr >   
       <table>  
 <b> 15.b. Details of all publications as per www.scopus.com are to be uploaded. </b>
   
</table> 
<hr>
<table>  
<b>  15c. Details of conference papers published are to be added in the
"Conference Papers" tab.  </b>         
</table>           
<hr>      

    <b> 16.  Books / Chapters Published & E-learning materials Developed (Since last promotion) </b> 
    
    <br><br>
<textarea name="BInternational"  maxlength="1000" style="width: 800px; height: 50px;" rows="" cols="200"  > <?php echo $BInternational; ?> </textarea> 

              <hr>    

               <b> 17. Patents(applied or awarded) </b> 
    <br>
    
    <textarea  style="width: 800px; height: 50px;"rows="4" cols="100" name="patents" type="text" maxlength="1000" size="25" >
         <?php echo $patents; ?>
    </textarea>
<hr>      
         
    <b>18. Sponsored Projects (Project handled as Principal Investigator Since last promotion) as per Gazette Note 1(4)</b>
    <br><br>

                   <table  style="text-align: center" cellpadding="1" cellspacing="5" >
                 
               <tr><td>Funding Agency</td> <td>Title of the Project</td> <td>Project Cost </td> <td>Duration</td> <td>Current Status</td> <td>Remarks/Applied<br>(with date)</td>  <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                
        
      
        <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_11" value="<?php echo $E4_11; ?>" > </td>
            <td><input type="text" maxlength="150" size="20" name="E4_12" value="<?php echo $E4_12; ?>" > </td>
            <td><input type="text" maxlength="150" size="10" name="E4_13" value="<?php echo $E4_13; ?>" ></td>
            <td><input type="text" maxlength="150" size="8" name="E4_14" value="<?php echo $E4_14; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_15" value="<?php echo $E4_15; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_16" value="<?php echo $E4_16; ?>" ></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
        <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_21" value="<?php echo $E4_21; ?>" > </td>
            <td><input type="text" maxlength="150" size="20" name="E4_22" value="<?php echo $E4_22; ?>" > </td>
            <td><input type="text" maxlength="150" size="10" name="E4_23" value="<?php echo $E4_23; ?>" ></td>
            <td><input type="text" maxlength="150" size="8" name="E4_24" value="<?php echo $E4_24; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_25" value="<?php echo $E4_25; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_26" value="<?php echo $E4_26; ?>" ></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
             <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_31" value="<?php echo $E4_31; ?>" > </td>
            <td><input type="text" maxlength="150" size="20" name="E4_32" value="<?php echo $E4_32; ?>" > </td>
            <td><input type="text" maxlength="150" size="10" name="E4_33" value="<?php echo $E4_33; ?>" ></td>
            <td><input type="text" maxlength="150" size="8" name="E4_34" value="<?php echo $E4_34; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_35" value="<?php echo $E4_35; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_36" value="<?php echo $E4_36; ?>" ></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
             <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_41" value="<?php echo $E4_41; ?>" > </td>
            <td><input type="text" maxlength="150" size="20" name="E4_42" value="<?php echo $E4_42; ?>" > </td>
            <td><input type="text" maxlength="150" size="10" name="E4_43" value="<?php echo $E4_43; ?>" ></td>
            <td><input type="text" maxlength="150" size="8" name="E4_44" value="<?php echo $E4_44; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_45" value="<?php echo $E4_45; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_46" value="<?php echo $E4_46; ?>" ></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_51" value="<?php echo $E4_51; ?>" > </td>
            <td><input type="text" maxlength="150" size="20" name="E4_52" value="<?php echo $E4_52; ?>" > </td>
            <td><input type="text" maxlength="150" size="10" name="E4_53" value="<?php echo $E4_53; ?>" ></td>
            <td><input type="text" maxlength="150" size="8" name="E4_54" value="<?php echo $E4_54; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_55" value="<?php echo $E4_55; ?>" ></td>
            <td><input type="text" maxlength="150" size="10" name="E4_56" value="<?php echo $E4_56; ?>" ></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      
                    
   </table>
<hr>      

<b>19. Consultancy Project (Since last promotion)</b> <br> <br>

<table  style="text-align: center" cellpadding="1" cellspacing="1">
                 <thead>
                <tr><td>Funding Agency</td> <td>Title of the Consultancy <br>Work </td> <td>Duration<br>/Ongoing </td> <td>Project Cost</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
         <tr>
            <td><input type="text" maxlength="150" size="20" name="F11" value="<?php echo $F11; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F12" value="<?php echo $F12; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F13" value="<?php echo $F14; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F14" value="<?php echo $F14; ?>" ></td>
           
	    
        </tr>
           
        
         <tr>
            <td><input type="text" maxlength="150" size="20" name="F21" value="<?php echo $F21; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F22" value="<?php echo $F22; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F23" value="<?php echo $F24; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F24" value="<?php echo $F24; ?>" ></td>
           
	    
        </tr>
       
        <tr>
            <td><input type="text" maxlength="150" size="20" name="F31" value="<?php echo $F31; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F32" value="<?php echo $F32; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F33" value="<?php echo $F34; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F34" value="<?php echo $F34; ?>" ></td>
           
	    
        </tr>
        <tr>
            <td><input type="text" maxlength="150" size="20" name="F41" value="<?php echo $F41; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F42" value="<?php echo $F42; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F43" value="<?php echo $F44; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F44" value="<?php echo $F44; ?>" ></td>
           
	    
        </tr>
          <tr>
            <td><input type="text" maxlength="150" size="20" name="F51" value="<?php echo $F51; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F52" value="<?php echo $F52; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F53" value="<?php echo $F54; ?>" ></td>
            <td><input type="text" maxlength="150" size="20" name="F54" value="<?php echo $F54; ?>" ></td>
           
	    
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
    <option>  <?php if(!($_POST['T11']=="")) { echo $_POST['T11'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="20" name="T12" value="<?php echo $T12; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T13" value="<?php echo $T13; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T14" value="<?php echo $T14; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
       <tr>
            <td><select name="T21" >
    <option>  <?php if(!($_POST['T21']=="")) { echo $_POST['T21'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T22" value="<?php echo $T22; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T23" value="<?php echo $T23; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T24" value="<?php echo $T24; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
      <tr>
            <td><select name="T31" >
    <option>  <?php if(!($_POST['T31']=="")) { echo $_POST['T31'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T32" value="<?php echo $T32; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T33" value="<?php echo $T33; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T34" value="<?php echo $T34; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
      
       <tr>
            <td><select name="T41" >
    <option>  <?php if(!($_POST['T41']=="")) { echo $_POST['T41'] ?> <?php } else { ?> - Year - <?php } ?> </option>

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
            <td><input type="text"  maxlength="150" size="20" name="T42" value="<?php echo $T42; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T43" value="<?php echo $T43; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T44" value="<?php echo $T44; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
    <tr>
            <td><select name="T51" >
    <option>  <?php if(!($_POST['T51']=="")) { echo $_POST['T51'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T52" value="<?php echo $T52; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T53" value="<?php echo $T53; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T54" value="<?php echo $T54; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
       <tr>
            <td><select name="T61" >
    <option>  <?php if(!($_POST['T61']=="")) { echo $_POST['T61'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T62" value="<?php echo $T62; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T63" value="<?php echo $T63; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T64" value="<?php echo $T64; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
        <tr>
            <td><select name="T71" >
    <option>  <?php if(!($_POST['T71']=="")) { echo $_POST['T71'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T72" value="<?php echo $T72; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T73" value="<?php echo $T73; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T74" value="<?php echo $T74; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
             
     <tr>
            <td><select name="T81" >
    <option>  <?php if(!($_POST['T81']=="")) { echo $_POST['T81'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150"  size="20" name="T82" value="<?php echo $T82; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T83" value="<?php echo $T83; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T84" value="<?php echo $T84; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
         <tr>
            <td><select name="T91" >
    <option>  <?php if(!($_POST['T91']=="")) { echo $_POST['T91'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T92" value="<?php echo $T92; ?>"></td>
            <td><input type="text"  maxlength="150" size="10" name="T93" value="<?php echo $T93; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T94" value="<?php echo $T94; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
        <tr>
            <td><select name="T101" >
    <option>  <?php if(!($_POST['T101']=="")) { echo $_POST['T101'] ?> <?php } else { ?> - Year - <?php } ?> </option>
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
            <td><input type="text"  maxlength="150" size="20" name="T102" value="<?php echo $T102; ?>"></td>
            <td><input type="text"  maxlength="150"  size="10" name="T103" value="<?php echo $T103; ?>"></td>
            <td><input type="text"  maxlength="150" size="30" name="T104" value="<?php echo $T104; ?>"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr> 
        
         </tbody>
           
   </table>
<hr>   
<p align="center" width="80%">        <input id="btn1" type="submit" formaction="eq42page.php" value="Save Progress" name="previous"> </p>   
               
<hr>      

  <b> 21. Conferences/Seminars / Workshops Conducted (Last 4 year -Upload photocopies of the certificates) as per Gazette Note 1(4)</b>
 <table style="text-align: center">
    <tr>
        <td>Year</td>
        <td> Conferences/Seminars / <br> Workshops</td>
        <td>Title of paper presented </td>
    </tr>
    <tr>
        <td><select name="cp11">
    <option> - Year - </option>
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
            <td> <input type="text"  maxlength="150" name="cp12" siz="45" > </td>
        <td> <input type="text"  maxlength="150" name="cp13" ></td>
    </tr>
    <tr>
        <td><select name="cp21">
    <option> - Year - </option>
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
            <td><input type="text" maxlength="150" name="cp22" siz="45" ></td>
        <td><input type="text" maxlength="150"  name="cp23" ></td>
    </tr>
    <tr>
    <td><select name="cp31">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp32" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp33" ></td>
    </tr>
    <tr>
    <td><select name="cp41">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp42" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp43" ></td>
    </tr>
    <tr>
        <td><select name="cp51">
    <option> - Year - </option>
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
            <td><input type="text" maxlength="150" name="cp52" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp53" ></td>

    </tr>
    <tr>
        <td><select name="cp61">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp62" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp63" ></td>

    </tr>
    
    <tr>
        <td><select name="cp71">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp72" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp73" ></td>

    </tr>
    
    <tr>
        <td><select name="cp81">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp82" siz="45" ></td>
        <td><input type="text"  maxlength="150" name="cp83" ></td>

    </tr>
    
    <tr>
        <td><select name="cp91">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp92" siz="45" ></td>
        <td><input type="text"  maxlength="150" name="cp93" ></td>

    </tr>
    <tr>
        <td><select name="cp101">
    <option> - Year - </option>
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
            <td ><input type="text" maxlength="150" name="cp102" siz="45" ></td>
        <td><input type="text" maxlength="150"  name="cp103" ></td>

    </tr>

    </table> 
 <!-- <hr>
<b>22. Industrial Experience/Interaction (Upload photocopies)  </b> <br><br>
                       <table style="text-align: center">
    <tr>
        <td>Organization</td>
        <td> Nature of Work </td>
        <td>Period</td>
    </tr>
    <tr>
    <tr>
        <td><input type="text" maxlength="150" name="ie11" ></td>
        <td ><input type="text" maxlength="150" name="ie12"  ></td>
        <td><input type="text" maxlength="150" name="ie13" ></td>

    </tr>
    <tr>
        <td><input type="text" maxlength="150" name="ie21" ></td>
        <td ><input type="text" maxlength="150" name="ie22"  ></td>
        <td><input type="text" maxlength="150" name="ie23" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie31" ></td>
        <td ><input type="text" maxlength="150" name="ie32"  ></td>
        <td ><input type="text" maxlength="150" name="ie33" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie41" ></td>
        <td ><input type="text" maxlength="150" name="ie42"  ></td>
        <td ><input type="text" maxlength="150" name="ie43" ></td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie51" ></td>
        <td ><input type="text" maxlength="150" name="ie52"  ></td>
        <td ><input type="text" maxlength="150" name="ie53" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie61" ></td>
        <td ><input type="text" maxlength="150" name="ie62"  ></td>
        <td ><input type="text" maxlength="150" name="ie63" ></td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie71" ></td>
        <td ><input type="text" maxlength="150" name="ie72"  ></td>
        <td ><input type="text" maxlength="150" name="ie73" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie81" ></td>
        <td ><input type="text" maxlength="150" name="ie82"  ></td>
        <td ><input type="text" maxlength="150" name="ie83" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie91" ></td>
        <td ><input type="text"  maxlength="150" name="ie92"  ></td>
        <td ><input type="text" maxlength="150" name="ie93" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie101" ></td>
        <td ><input type="text" maxlength="150" name="ie102"  ></td>
        <td ><input type="text" maxlength="150" name="ie103" ></td>

    </tr>
    
    </table>    -->
 <hr> 
        <b>22. Continuing Education Programmes /Short Term Courses/Workshops/Seminars etc. organized (Since last promotion)(Attach relevant documents): as per Gazette Note 1(4)</b> <br><br>

     <table style="text-align: center">
   <tr>
        <td >Title of Programme</td>
        <td >Period</td>
                <td > Funding Agency </td>
    </tr>
   <tr>
        <td ><input type="text" maxlength="150" name="fa11" value="<?php echo $fa11; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa12" value="<?php echo $fa12; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa13" value="<?php echo $fa13; ?>"  /> </td>

    </tr>
    <tr>
         <td ><input type="text" maxlength="150" name="fa21" value="<?php echo $fa21; ?>"  /></td>
         <td ><input type="text" maxlength="150" name="fa22" value="<?php echo $fa22; ?>"  /> </td>
         <td ><input type="text" maxlength="150" name="fa23" value="<?php echo $fa23; ?>"  /> </td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa31" value="<?php echo $fa31; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa32" value="<?php echo $fa32; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa33" value="<?php echo $fa33; ?>"  /> </td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa41" value="<?php echo $fa41; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa42" value="<?php echo $fa42; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa43" value="<?php echo $fa43; ?>"  /> </td>

    </tr>

    <tr>
         <td ><input type="text" maxlength="150" name="fa51" value="<?php echo $fa51; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa52" value="<?php echo $fa52; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa53" value="<?php echo $fa53; ?>"  /> </td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa61" value="<?php echo $fa61; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa62" value="<?php echo $fa62; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa63" value="<?php echo $fa63; ?>"  /> </td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa71" value="<?php echo $fa71; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa72" value="<?php echo $fa72; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa73" value="<?php echo $fa73; ?>"  /> </td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa81" value="<?php echo $fa81; ?>"  /></td>
        <td ><input type="text" maxlength="150" name="fa82" value="<?php echo $fa82; ?>"  /> </td>
        <td ><input type="text" maxlength="150" name="fa83" value="<?php echo $fa83; ?>"  /> </td>

    </tr>
     <tr>
         <td ><input type="text" maxlength="150" name="fa91" value="<?php echo $fa91; ?>"  /></td>
         <td ><input type="text" maxlength="150" name="fa92" value="<?php echo $fa92; ?>"  /> </td>
         <td ><input type="text" maxlength="150" name="fa93" value="<?php echo $fa93; ?>"  /> </td>

    </tr>
     <tr>
        <td><input type="text" maxlength="150" name="fa101" value="<?php echo $fa101; ?>"  /></td>
        <td><input type="text" maxlength="150" name="fa102" value="<?php echo $fa102; ?>"  /> </td>
        <td><input type="text" maxlength="150" name="fa103" value="<?php echo $fa103; ?>"  /> </td>
    </tr>

    </table>
 <hr> 
 <b>23. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities -Non remunerative (upload relevant document(s)) as per Gazette Note 1(4)</b> <br><br>
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="edp">
    </textarea>
         <hr> 
          <b>24. Awards and Recognitions (Upload photocopies)</b><br><br>
        
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="ar">
    </textarea>
          <hr> 
     <b>25. Any other relevant information you may like to furnish:</b><br><br>
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="ao">
    </textarea>
        <hr> 
        <b>26. Names and addresses of two Professional References (Upload Testimonials of Them): </b><br><br>
    
        <div class="">
<div class="floatLeft">
<table>
<tr>    <tr>
        <td align="left" >Name</td>
        <td >1.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr11"  ></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td  > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr12"  > </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;" maxlength="200"  name="pr13"></textarea>
</tr>

</table>
</div>

<div class="floatRight">
<table>
<tr><td >2.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr21"  ></td></tr>
 <tr><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr22"  ></td></tr>
 <tr>
     
        
        <td >&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<textarea style="width: 300px; height: 100px;" maxlength="200" name="pr23"></textarea> </td>
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
        
     <b>27. Please indicate how in your opinion you can contribute to NITK's growth. ((Optionally, testimonials may be sent by email to Registrar NITK Surathkal nitkregistrar@gmail.com)
     </b><br><br>    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="ao1" placeholder="Limited to 250 words" >
    </textarea>
<p width="80%" style="width:80%">   <b>
        
         <tr> <td colspan="2">   </tr> </table>
  
    <table  align="center" width="40%"> 
        <tr>
 <hr>    
   <!--  <b> Two experiments or computational projects added to teaching laboratories.</b><br><br>
    <textarea name="lab" style="width: 800px; height: 50px;"  maxlength="1000" rows="" cols="500"  ><?php echo $_POST['lab']; ?></textarea>
    
     <hr> -->
      <b> Strong liaison with industry; Offering courses through application of ICT. </b>             
     <br> <br>
     <textarea name="industry" style="width: 800px; height: 50px;"  maxlength="1000" rows="" cols="500"  ><?php echo $_POST['industry']; ?></textarea>
                 
     <hr>
        
        28. </b>I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
     the rules and regulations of the institute and also the directions given to me from time to time. </p>
     <br> <br>
     <table> <tr>
             <td> <b>  Date: </b></td> <td> 
             <td> <input type="text" id="datepicker38"  maxlength="150" name="date"  />  </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><b>Place:</b></td><td> <input type="text" maxlength="150" name="place"  > </td>
    </tr>
             </table>
     <hr>
     <table  align="center" width="40%"> 
    <tr>
         
        <p align="center" width="80%">  <input id="btn1" type="submit"  value="Save & Next" name="previous"> </p>
                
    </tr>   
     </table>
   
</form>
    <hr>
    </body>
</html>


