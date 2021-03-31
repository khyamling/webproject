<?php

session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$user_home = new USER();
$br=$_SESSION['br'];
$pos=$_SESSION['pos'];
$nappn=$_POST['nappn'];
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
//database from advertisement no to areas of specialization

if(isset($_POST['nexpg']))
{
$nexpg = mysqli_real_escape_string($link, $_POST['nexpg']);
    $nexpg1 = mysqli_real_escape_string($link, $_POST['nexpg1']);
    $nexphd1 = mysqli_real_escape_string($link, $_POST['nexphd1']);
    $nexphd = mysqli_real_escape_string($link, $_POST['nexphd']);
    $nexap = "";
    $nexap1 = "";
$sql  = "SELECT * FROM  profex WHERE appn='$nappn'";
$exp3 =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($exp3);
if( $num_rows > 0 )
{

//echo $nexpg.$nexpg1.$nexphd.$nexphd1;
$sql="UPDATE profex  SET  nexpg='$nexpg', nexpg1='$nexpg1', nexphd1='$nexphd1', nexphd='$nexphd', nexap='$nexap', nexap1='$nexap1'
WHERE appn='$nappn' ";
if(mysqli_query($link, $sql)){

       // echo "Records added successfully. ";

    } else{

       echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }

}
else
{
$sql = "insert into profex values('$nappn', '$UID', '$nexpg', '$nexpg1', '$nexphd1', '$nexphd', '$nexap', '$nexap1')";

if(mysqli_query($link, $sql)){
// echo "Records added successfully. ";

    } else{

     echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}

}

     $credit1=$_POST['credit1'];
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
    // $assoprofexp=mysqli_real_escape_string($link, $_POST['assoprofexp']);
      //  $profexp=mysqli_real_escape_string($link, $_POST['profexp']);

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
        $E3_11 = mysqli_real_escape_string($link, $_POST['E3_11']);
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
        $E3_47 = mysqli_real_escape_string($link, $_POST['E3_47']);

        
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

        $ie11 = mysqli_real_escape_string($link, $_POST['ie11']);
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
        $ie103 = mysqli_real_escape_string($link, $_POST['ie103']);

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
        $expcomp = mysqli_real_escape_string($link, $_POST['expcomp']);

//M.Tech., M..Sc. or B.Tech project supervision on live industrial problems.
       $live = mysqli_real_escape_string($link, $_POST['live']);


$sql  = "SELECT * FROM  eq3page WHERE appn='$nappn' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if( $num_rows > 0)
{
$sql="UPDATE eq3page SET  Page5= '$Page5', Page6='$Page6', Page7='$Page7', Page8='$Page8',Page11='$Page11', Page12='$Page12', Page17='$Page17', Page18='$Page18', Page19='$Page19', Page22='$Page22', Page23='$Page23', Page24='$Page24', Page25='$Page25', Page26='$Page26', Page27='$Page27', Page28='$Page28', Page29='$Page29', Page30='$Page30', Page31='$Page31', Page32='$Page32', Page33='$Page33', Page34='$Page34', Page35='$Page35', Page36='$Page36', Page37='$Page37', Page38='$Page38', Page41='$Page41', Page42='$Page42', Page43='$Page43', Page44='$Page44', Page45='$Page45', Page46='$Page46', Page47='$Page47', Page48='$Page48', Page49='$Page49',

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
examination5='$examination5', testyear5='$Testyear5', branch5='$Branch5', score5='$score5' , rank5='$rank5', percentile5='$percentile5',

teachingexp='$teachingexp', researchexp='$researchexp', industryexp='$industryexp', asstprof='$asstprof',  

E2_11='$E2_11', E2_12='$E2_12', E2_13='$E2_13', E2_14='$E2_14', E2_15='$E2_15', 
E2_21='$E2_21', E2_22='$E2_22', E2_23='$E2_23', E2_24='$E2_24', E2_25='$E2_25', 
E2_31='$E2_31', E2_32='$E2_32', E2_33='$E2_33', E2_34='$E2_34', E2_35='$E2_35', 
E2_41='$E2_41', E2_42='$E2_42', E2_43='$E2_43', E2_44='$E2_44', E2_45='$E2_45', 
E2_51='$E2_51', E2_52='$E2_52', E2_53='$E2_53', E2_54='$E2_54', E2_55='$E2_55', 
E2_61='$E2_61', E2_62='$E2_62', E2_63='$E2_63', E2_64='$E2_64', E2_65='$E2_65', 
E2_71='$E2_71', E2_72='$E2_72', E2_73='$E2_73', E2_74='$E2_74', E2_75='$E2_75', 
E2_81='$E2_81', E2_82='$E2_82', E2_83='$E2_83', E2_84='$E2_84', E2_85='$E2_85', 
E2_91='$E2_91', E2_92='$E2_92', E2_93='$E2_93', E2_94='$E2_94', E2_95='$E2_95', 
E2_101='$E2_101', E2_102='$E2_102', E2_103='$E2_103',E2_104= '$E2_104', E2_105='$E2_105',

BInternational='$BInternational', 

F11='$F11', F12='$F12', F13='$F13', F14='$F14',
F21='$F21', F22='$F22', F23='$F23', F24='$F24',
F31='$F31', F32='$F32', F33='$F33', F34='$F34',
F41='$F41', F42='$F42', F43='$F43', F44='$F44',
F51='$F51', F52='$F52', F53='$F53', F54='$F54',


T11='$T11', T12='$T12', T13='$T13', T14='$T14', 
T21='$T21', T22='$T22', T23='$T23', T24='$T24', 
T31='$T31', T32='$T32', T33='$T33', T34='$T34', 
T41='$T41', T42='$T42', T43='$T43', T44='$T44', 
T51='$T51', T52='$T52', T53='$T53', T54='$T54', 
T61='$T61', T62='$T62', T63='$T63', T64='$T64', 
T71='$T71', T72='$T72', T73='$T73', T74='$T74',
T81='$T81', T82='$T82', T83='$T83', T84='$T84',
T91='$T91', T92='$T92', T93='$T93', T94='$T94',
T101='$T101', T102='$T102', T103='$T103',T104= '$T104',

cp11='$cp11', cp12='$cp12', cp13='$cp13',
cp21='$cp21', cp22='$cp22', cp23='$cp23',
cp31='$cp31', cp32='$cp32', cp33='$cp33',
cp41='$cp41', cp42='$cp42', cp43='$cp43',
cp51='$cp51', cp52='$cp52', cp53='$cp53',
cp61='$cp61', cp62='$cp62', cp63='$cp63', 
cp71='$cp71', cp72='$cp72', cp73='$cp73', 
cp81='$cp81', cp82='$cp82', cp83='$cp83', 
cp91='$cp91', cp92='$cp92', cp93='$cp93', 
cp101='$cp101', cp102='$cp102', cp103='$cp103',

fa11='$fa11', fa12='$fa12', fa13='$fa13',
fa21='$fa21', fa22='$fa22', fa23='$fa23',
fa31='$fa31', fa32='$fa32', fa33='$fa33',
fa41='$fa41', fa42='$fa42', fa43='$fa43',
fa51='$fa51', fa52='$fa52', fa53='$fa53',
fa61='$fa61', fa62='$fa62', fa63='$fa63', 
fa71='$fa71', fa72='$fa72', fa73='$fa73', 
fa81='$fa81', fa82='$fa82', fa83='$fa83', 
fa91='$fa91', fa92='$fa92', fa93='$fa93', 
fa101='$fa101', fa102='$fa102', fa103='$fa103',


edp='$edp',  ar='$ar',  ao='$ao', 

pr11='$pr11', pr21='$pr21',
pr12='$pr12', pr22='$pr22',   
pr13='$pr13', pr23='$pr23',   

ao1='$ao1', date='$date', place='$place' WHERE appn = '$nappn' ";
    
if(mysqli_query($link,$sql)){
      $xx= "Application Saved successfully. To view application check in view application menu and Application No:" .$nappn;

            } else{

                $xx= " ERROR: Could not able to Save. Try again in View Application. Application No:" .$nappn  .mysqli_error($link);

            }
}
else
{
$sql = "insert into eq3page values('$Page5', '$Page6', '$Page7', '$Page8','$Page11', '$Page12', '$Page17', '$Page18', '$Page19','$Page22', '$Page23', '$Page24', '$Page25', '$Page26', '$Page27', '$Page28', '$Page29','$Page30', '$Page31', '$Page32', '$Page33', '$Page34', '$Page35', '$Page36', '$Page37', '$Page38', '$Page41', '$Page42', '$Page43', '$Page44', '$Page45', '$Page46', '$Page47', '$Page48', '$Page49', 

'$cer1', '$year1', '$school1', '$Board1', '$class1', '$omarks1', '$tmarks1', '$percentage1', '$status1',
'$cer2', '$year2', '$school2', '$Board2', '$class2', '$omarks2', '$tmarks2', '$percentage2', '$status2', 
'$cer3', '$year3', '$school3', '$Board3', '$class3', '$omarks3', '$tmarks3', '$percentage3', '$status3', 
'$cer4', '$year4', '$school4', '$Board4', '$class4', '$omarks4', '$tmarks4', '$percentage4', '$status4', 
'$cer5', '$year5', '$school5', '$Board5', '$class5', '$omarks5', '$tmarks5', '$percentage5', '$status5', 
'$cer6', '$year6', '$school6', '$Board6', '$class6', '$omarks6', '$tmarks6', '$percentage6', '$status6', 
'$cer7', '$year7', '$school7', '$Board7', '$class7', '$omarks7', '$tmarks7', '$percentage7', '$status7',
'$cer8', '$year8', '$school8', '$Board8', '$class8', '$omarks8', '$tmarks8', '$percentage8', '$status8',
'$cer9', '$year9', '$school9', '$Board9', '$class9', '$omarks9', '$tmarks9', '$percentage9', '$status9',
'$cer10', '$year10', '$school10', '$Board10', '$class10', '$omarks10`', '$tmarks10', '$percentage10', '$status10',

'$examination1', '$Testyear1', '$Branch1', '$score1' , '$rank1', '$percentile1', 
'$examination2', '$Testyear2', '$Branch2', '$score2' , '$rank2', '$percentile2',
'$examination3', '$Testyear3', '$Branch3', '$score3' , '$rank3', '$percentile3', 
'$examination4', '$Testyear4', '$Branch4', '$score4' , '$rank4', '$percentile4', 
'$examination5', '$Testyear5', '$Branch5', '$score5' , '$rank5', '$percentile5', 

'$teachingexp', '$researchexp', '$industryexp','$asstprof', 

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

'$F11', '$F12', '$F13', '$F14',
'$F21', '$F22', '$F23', '$F24',
'$F31', '$F32', '$F33', '$F34',
'$F41', '$F42', '$F43', '$F44',
'$F51', '$F52', '$F53', '$F54',

'$T11', '$T12', '$T13', '$T14',
'$T21', '$T22', '$T23', '$T24',
'$T31', '$T32', '$T33', '$T34', 
'$T41', '$T42', '$T43','$T44', 
'$T51', '$T52', '$T53','$T54',
'$T61', '$T62', '$T63','$T64',
'$T71', '$T72', '$T73','$T74',
'$T81', '$T82', '$T83','$T84',
'$T91', '$T92', '$T93','$T94',
'$T101', '$T102', '$T103','$T104',


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


'$edp',  '$ar',  '$ao', 

'$pr11', '$pr21',
'$pr12', '$pr22',   
'$pr13', '$pr23',   

'$ao1', '$date', '$place','$nappn', '$UID' )";

 if(mysqli_query($link, $sql)){

                 $xx= "Application Saved successfully. To view application, check in View Application menu and Application No:".$nappn;

            } else{

                $xx= " ERROR: Could not able to Save. Try again in View Application. Application No:" .$nappn  .mysqli_error($link);

            }


}

$sql  = "SELECT * FROM  crediteq1 WHERE appn='$nappn' ";

 $result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0)
{
 $sql="UPDATE crediteq1  SET credit1='$credit1' WHERE appn='$nappn'";
 
 mysqli_query($link,$sql);
    if(mysqli_query($link,$sql)){
echo "updated1222";
}
else{
echo "fail" .mysqli_error($link);}
}
else
{    
$sql = "insert into crediteq1 values('$credit1', '$nappn', '$UID')"; 
if(mysqli_query($link, $sql)){
  echo "inserted";  
}
else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
}


$sql  = "SELECT * FROM  eq3 WHERE appn='$nappn' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
if( $num_rows > 0)
{
$sql="UPDATE eq3  SET  ph1='$ph1', ph2='$ph2', ph3='$ph3', ph4='$ph4', ph5='$ph5', ph6='$ph6', ph7='$ph7', ph8='$ph8',
pd11='$pd11', pd12='$pd12', pd13='$pd13', pd14='$pd14', pd15='$pd15', pd16='$pd16',
pd21='$pd21', pd22='$pd22', pd23='$pd23', pd24='$pd24', pd25='$pd25', pd26='$pd26',
pd31='$pd31', pd32='$pd32', pd33='$pd33', pd34='$pd34', pd35='$pd35', pd36='$pd36',
pd41='$pd41', pd42='$pd42', pd43='$pd43', pd44='$pd44', pd45='$pd45', pd46='$pd46',
    pd51='$pd51', pd52='$pd52', pd53='$pd53', pd54='$pd54', pd55='$pd55', pd56='$pd56',
E11='$E11', E12='$E12', E13='$E13', E14='$E14', E15='$E15', E16='$E16', E17='$E17',
E21='$E21', E22='$E22', E23='$E23', E24='$E24', E25='$E25', E26='$E26', E27='$E27',
E31='$E31', E32='$E32', E33='$E33', E34='$E34', E35='$E35', E36='$E36', E37='$E37',    
E41='$E41', E42='$E42', E43='$E43', E44='$E44', E45='$E45', E46='$E46', E47='$E47',
E51='$E51', E52='$E52', E53='$E53', E54='$E54', E55='$E55', E56='$E56', E57='$E57',
E61='$E61', E62='$E62', E63='$E63', E64='$E64', E65='$E65', E66='$E66', E67='$E67',
E71='$E71', E72='$E72', E73='$E73', E74='$E74', E75='$E75', E76='$E76', E77='$E77',
E81='$E81', E82='$E82', E83='$E83', E84='$E84', E85='$E85', E86='$E86', E87='$E87',
E91='$E91', E92='$E92', E93='$E93', E94='$E94', E95='$E95', E96='$E96', E97='$E97',
E101='$E101', E102='$E102', E103='$E103',E104= '$E104', E105='$E105', E106='$E106', E107='$E107',
phdcomplete='$phdcomplete', pgcomplete='$pgcomplete', phdongoing='$phdongoing', pgongoing='$pgongoing',
cj1='$cj1', cj2='$cj2',oj1='$oj1',oj2='$oj2',
JInternational='$JInternational', JNational='$JNational', CInternational='$CInternational', CNational='$CNational',
E3_11='$E3_11',E3_12='$E3_12',E3_13='$E3_13',E3_14='$E3_14',E3_15='$E3_15',E3_16='$E3_16',E3_17='$E3_17',
E3_21='$E3_21',E3_22='$E3_22',E3_23='$E3_23',E3_24='$E3_24',E3_25='$E3_25',E3_26='$E3_26',E3_27='$E3_27',
E3_31='$E3_31',E3_32='$E3_32',E3_33='$E3_33',E3_34='$E3_34',E3_35='$E3_35',E3_36='$E3_36',E3_37='$E3_37',
E3_41='$E3_41',E3_42='$E3_42',E3_43='$E3_43',E3_44='$E3_44',E3_45='$E3_45',E3_46='$E3_46',E3_47='$E3_47',
    patents='$patents',
 E4_11='$E4_11', E4_12='$E4_12', E4_13='$E4_13', E4_14='$E4_14', E4_15='$E4_15', E4_16='$E4_16',
E4_21='$E4_21', E4_22='$E4_22', E4_23='$E4_23', E4_24='$E4_24', E4_25='$E4_25', E4_26='$E4_26',
E4_31='$E4_31', E4_32='$E4_32', E4_33='$E4_33', E4_34='$E4_34', E4_35='$E4_35', E4_36='$E4_36',
E4_41='$E4_41', E4_42='$E4_42', E4_43='$E4_43', E4_44='$E4_44', E4_45='$E4_45', E4_46='$E4_46',
E4_51='$E4_51', E4_52='$E4_52', E4_53='$E4_53', E4_54='$E4_54', E4_55='$E4_55', E4_56='$E4_56',
        ie11='$ie11', ie12='$ie12', ie13='$ie13', 
ie21='$ie21', ie22='$ie22', ie23='$ie23', 
ie31='$ie31', ie32='$ie32', ie33='$ie33', 
ie41='$ie41', ie42='$ie42', ie43='$ie43', 
ie51='$ie51', ie52='$ie52', ie53='$ie53', 
ie61='$ie61', ie62='$ie62', ie63='$ie63', 
ie71='$ie71', ie72='$ie72', ie73='$ie73', 
ie81='$ie81', ie82='$ie82', ie83='$ie83', 
ie91='$ie91', ie92='$ie92', ie93='$ie93', 
ie101='$ie101', ie102='$ie102', ie103='$ie103',expcomp='$expcomp', live='$live'  WHERE appn='$nappn' ";

if(mysqli_query($link, $sql)){

       echo "Records added successfully. Eq page 11111";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);
        $qwe= " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
}
 else {
     
$sql = "INSERT INTO eq3 VALUES(
'$ph1', '$ph2', '$ph3', '$ph4', '$ph5', '$ph6', '$ph7', '$ph8',

'$pd11' , '$pd12', '$pd13', '$pd14', '$pd15', '$pd16', 
'$pd21' , '$pd22', '$pd23', '$pd24', '$pd25', '$pd26', 
'$pd31' , '$pd32', '$pd33', '$pd34', '$pd35', '$pd36', 
'$pd41' , '$pd42', '$pd43', '$pd44', '$pd45', '$pd46',  
'$pd51' , '$pd52', '$pd53', '$pd54', '$pd55', '$pd56', 


'$E11', '$E12', '$E13', '$E14', '$E15', '$E16','$E17',
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

'$E3_11', '$E3_12', '$E3_13', '$E3_14', '$E3_15', '$E3_16', '$E3_17',
'$E3_21', '$E3_22', '$E3_23', '$E3_24', '$E3_25', '$E3_26', '$E3_27',
'$E3_31', '$E3_32', '$E3_33', '$E3_34', '$E3_35', '$E3_36', '$E3_37',
'$E3_41', '$E3_42', '$E3_43', '$E3_44', '$E3_45', '$E3_46', '$E3_47',
'$patents',

'$E4_11', '$E4_12', '$E4_13', '$E4_14', '$E4_15', '$E4_16',
'$E4_21', '$E4_22', '$E4_23', '$E4_24', '$E4_25', '$E4_26',
'$E4_31', '$E4_32', '$E4_33', '$E4_34', '$E4_35', '$E4_36',
'$E4_41', '$E4_42', '$E4_43', '$E4_44', '$E4_45', '$E4_46',
'$E4_51', '$E4_52', '$E4_53', '$E4_54', '$E4_55', '$E4_56',
'$ie11', '$ie12', '$ie13', 
'$ie21', '$ie22', '$ie23', 
'$ie31', '$ie32', '$ie33',
'$ie41', '$ie42', '$ie43',
'$ie51', '$ie52', '$ie53',
'$ie61', '$ie62', '$ie63',    
'$ie71', '$ie72', '$ie73', 
'$ie81', '$ie82', '$ie83', 
'$ie91', '$ie92', '$ie93', 
'$ie101', '$ie102', '$ie103', 
'$expcomp',  '$live', '$nappn', 
'$UID')";
 
 if(mysqli_query($link, $sql)){

        echo "Records added successfully. ";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
}
    // close connection // close connection

            // close connection

            mysqli_close($link);
$_SESSION['msg']=$xx;

$url="home.php";
header("Location: $url");
    ?>



