<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$aid=$_SESSION['userSession'] ;

$user_home = new USER();


if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
  $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");

  
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
  $Page4 = mysqli_real_escape_string($link, $_POST['Page4']);
    $_SESSION['Br']   = $Page4;

$appn=  uniqid();

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

  
    
    $sql  = "SELECT * FROM  page1 WHERE email='$UID' and Page4='$Page4' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$row_cnt1 = $result->num_rows;
	if($row_cnt1 > 1)
	{ 
            $user_home->redirect('page2.php');
        }
        else
        {

    // Escape user inputs for security


   //database from advertisement no to areas of specialization
    $Page1 = mysqli_real_escape_string($link, $_POST['Page1']);
    $Page2 = mysqli_real_escape_string($link, $_POST['Page2']);
    $Page3 = mysqli_real_escape_string($link, $_POST['Page3']);
  
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
   // $Page39 = mysqli_real_escape_string($link, $_POST['Page39']);
   //  $Page40 = mysqli_real_escape_string($link, $_POST['Page40']);
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
    $percentage1 = mysqli_real_escape_string($link, $_POST['e16']);
    $status1 = mysqli_real_escape_string($link, $_POST['e17']);
  
    $cer2 = mysqli_real_escape_string($link, $_POST['e21']);
    $year2 = mysqli_real_escape_string($link, $_POST['e22']);
    $school2 = mysqli_real_escape_string($link, $_POST['e23']);
    $Board2 = mysqli_real_escape_string($link, $_POST['e24']);
    $class2 = mysqli_real_escape_string($link, $_POST['e25']);
    $percentage2 = mysqli_real_escape_string($link, $_POST['e26']);
    $status2 = mysqli_real_escape_string($link, $_POST['e27']);
  
    $cer3 = mysqli_real_escape_string($link, $_POST['e31']);
    $year3 = mysqli_real_escape_string($link, $_POST['e32']);
    $school3 = mysqli_real_escape_string($link, $_POST['e33']);
    $Board3 = mysqli_real_escape_string($link, $_POST['e34']);
    $class3 = mysqli_real_escape_string($link, $_POST['e35']);
    $percentage3 = mysqli_real_escape_string($link, $_POST['e36']);
    $status3 = mysqli_real_escape_string($link, $_POST['e37']);
  
    $cer4 = mysqli_real_escape_string($link, $_POST['e41']);
    $year4 = mysqli_real_escape_string($link, $_POST['e42']);
    $school4 = mysqli_real_escape_string($link, $_POST['e43']);
    $Board4 = mysqli_real_escape_string($link, $_POST['e44']);
    $class4 = mysqli_real_escape_string($link, $_POST['e45']);
    $percentage4 = mysqli_real_escape_string($link, $_POST['e46']);
    $status4 = mysqli_real_escape_string($link, $_POST['e47']);
  
    $cer5 = mysqli_real_escape_string($link, $_POST['e51']);
    $year5 = mysqli_real_escape_string($link, $_POST['e52']);
    $school5 = mysqli_real_escape_string($link, $_POST['e53']);
    $Board5 = mysqli_real_escape_string($link, $_POST['e54']);
    $class5 = mysqli_real_escape_string($link, $_POST['e55']);
    $percentage5 = mysqli_real_escape_string($link, $_POST['e56']);
    $status5 = mysqli_real_escape_string($link, $_POST['e57']);
  
    $cer6 = mysqli_real_escape_string($link, $_POST['e61']);
    $year6 = mysqli_real_escape_string($link, $_POST['e62']);
    $school6 = mysqli_real_escape_string($link, $_POST['e63']);
    $Board6 = mysqli_real_escape_string($link, $_POST['e64']);
    $class6 = mysqli_real_escape_string($link, $_POST['e65']);
    $percentage6 = mysqli_real_escape_string($link, $_POST['e66']);
    $status6 = mysqli_real_escape_string($link, $_POST['e67']);
  
    $cer7 = mysqli_real_escape_string($link, $_POST['e71']);
    $year7 = mysqli_real_escape_string($link, $_POST['e72']);
    $school7 = mysqli_real_escape_string($link, $_POST['e73']);
    $Board7 = mysqli_real_escape_string($link, $_POST['e74']);
    $class7 = mysqli_real_escape_string($link, $_POST['e75']);
    $percentage7 = mysqli_real_escape_string($link, $_POST['e76']);
    $status7 = mysqli_real_escape_string($link, $_POST['e77']);
  
    $cer8 = mysqli_real_escape_string($link, $_POST['e81']);
    $year8 = mysqli_real_escape_string($link, $_POST['e82']);
    $school8 = mysqli_real_escape_string($link, $_POST['e83']);
    $Board8 = mysqli_real_escape_string($link, $_POST['e84']);
    $class8 = mysqli_real_escape_string($link, $_POST['e85']);
    $percentage8 = mysqli_real_escape_string($link, $_POST['e86']);
    $status8 = mysqli_real_escape_string($link, $_POST['e87']);
  
    
    $cer9 = mysqli_real_escape_string($link, $_POST['e91']);
    $year9 = mysqli_real_escape_string($link, $_POST['e92']);
    $school9 = mysqli_real_escape_string($link, $_POST['e93']);
    $Board9 = mysqli_real_escape_string($link, $_POST['e94']);
    $class9 = mysqli_real_escape_string($link, $_POST['e95']);
    $percentage9 = mysqli_real_escape_string($link, $_POST['e96']);
    $status9 = mysqli_real_escape_string($link, $_POST['e97']);
   
    
    $cer10 = mysqli_real_escape_string($link, $_POST['e101']);
    $year10 = mysqli_real_escape_string($link, $_POST['e102']);
    $school10 = mysqli_real_escape_string($link, $_POST['e103']);
    $Board10 = mysqli_real_escape_string($link, $_POST['e104']);
    $class10 = mysqli_real_escape_string($link, $_POST['e105']);
    $percentage10 = mysqli_real_escape_string($link, $_POST['e106']);
    $status10 = mysqli_real_escape_string($link, $_POST['e107']);


      //database for 7.academic-dactoral degree(Ph.D details).

     $thesistitle = mysqli_real_escape_string($link, $_POST['ph1']);
     $fromdate = mysqli_real_escape_string($link, $_POST['ph2']);
     $todate = mysqli_real_escape_string($link, $_POST['ph3']);
     $institute = mysqli_real_escape_string($link, $_POST['ph4']);
     $guide = mysqli_real_escape_string($link, $_POST['ph5']);
     $mode = mysqli_real_escape_string($link, $_POST['ph6']);
     $viva = mysqli_real_escape_string($link, $_POST['ph7']);
     $awarddate = mysqli_real_escape_string($link, $_POST['ph8']);
   
  
  //database for 8. post doctoral work

     $career1 = mysqli_real_escape_string($link, $_POST['pd11']);
     $fromdate1 = mysqli_real_escape_string($link, $_POST['pd12']);
     $todate1 = mysqli_real_escape_string($link, $_POST['pd13']);
     $institute1 = mysqli_real_escape_string($link, $_POST['pd14']);
     $guide1 = mysqli_real_escape_string($link, $_POST['pd15']);
     $researchwork1 = mysqli_real_escape_string($link, $_POST['pd16']);
   
     $career2= mysqli_real_escape_string($link, $_POST['pd21']);
     $fromdate2 = mysqli_real_escape_string($link, $_POST['pd22']);   
     $todate2 = mysqli_real_escape_string($link, $_POST['pd23']);
     $institute2 = mysqli_real_escape_string($link, $_POST['pd24']);
     $guide2 = mysqli_real_escape_string($link, $_POST['pd25']);
     $researchwork2 = mysqli_real_escape_string($link, $_POST['pd26']);
   
     $career3 = mysqli_real_escape_string($link, $_POST['pd31']);
     $fromdate3 = mysqli_real_escape_string($link, $_POST['pd32']);
     $todate3 = mysqli_real_escape_string($link, $_POST['pd33']);
     $institute3 = mysqli_real_escape_string($link, $_POST['pd34']);
     $guide3 = mysqli_real_escape_string($link, $_POST['pd35']);
     $researchwork3 = mysqli_real_escape_string($link, $_POST['pd36']);
   
     $career4 = mysqli_real_escape_string($link, $_POST['pd41']);
     $fromdate4 = mysqli_real_escape_string($link, $_POST['pd42']);
     $todate4 = mysqli_real_escape_string($link, $_POST['pd43']);
     $institute4 = mysqli_real_escape_string($link, $_POST['pd44']);
     $guide4 = mysqli_real_escape_string($link, $_POST['pd45']);
     $researchwork4 = mysqli_real_escape_string($link, $_POST['pd46']);

     $career5 = mysqli_real_escape_string($link, $_POST['pd51']);
     $fromdate5 = mysqli_real_escape_string($link, $_POST['pd52']);
     $todate5 = mysqli_real_escape_string($link, $_POST['pd53']);
     $institute5 = mysqli_real_escape_string($link, $_POST['pd54']);
     $guide5 = mysqli_real_escape_string($link, $_POST['pd55']);
     $researchwork5 = mysqli_real_escape_string($link, $_POST['pd56']);
   
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
   
/////////////page3 db 
//
//
//
//
//
//
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
        $profexp=mysqli_real_escape_string($link, $_POST['profexp']);
        
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
        
        
        
        
  // attempt insert query execution

    $sql = "insert into page1 values('$Page1',  '$Page2', '$Page3', '$Page4', '$Page5', '$Page6', '$Page7', '$Page8','$Page11', '$Page12', '$Page17', '$Page18', '$Page19','$Page22', '$Page23', '$Page24', '$Page25', '$Page26', '$Page27', '$Page28', '$Page29','$Page30', '$Page31', '$Page32', '$Page33', '$Page34', '$Page35', '$Page36', '$Page37', '$Page38', '$Page41', '$Page42', '$Page43', '$Page44', '$Page45', '$Page46', '$Page47', '$Page48', '$Page49', 

'$cer1', '$year1', '$school1', '$Board1', '$class1', '$percentage1', '$status1',
'$cer2', '$year2', '$school2', '$Board2', '$class2', '$percentage2', '$status2', 
'$cer3', '$year3', '$school3', '$Board3', '$class3', '$percentage3', '$status3', 
'$cer4', '$year4', '$school4', '$Board4', '$class4', '$percentage4', '$status4', 
'$cer5', '$year5', '$school5', '$Board5', '$class5', '$percentage5', '$status5', 
'$cer6', '$year6', '$school6', '$Board6', '$class6', '$percentage6', '$status6', 
'$cer7', '$year7', '$school7', '$Board7', '$class7', '$percentage7', '$status7',
'$cer8', '$year8', '$school8', '$Board8', '$class8', '$percentage8', '$status8',
'$cer9', '$year9', '$school9', '$Board9', '$class9', '$percentage9', '$status9',
'$cer10', '$year10', '$school10', '$Board10', '$class10', '$percentage10', '$status10',



'$thesistitle', '$fromdate', '$todate', '$institute', '$guide', '$mode', '$viva', '$awarddate',

'$career1' , '$fromdate1', '$todate1', '$institute1', '$guide1', '$researchwork1', 
'$career2' , '$fromdate2', '$todate2', '$institute2', '$guide2', '$researchwork2',
'$career3' , '$fromdate3', '$todate3', '$institute3', '$guide3', '$researchwork3',
'$career4' , '$fromdate4', '$todate4', '$institute4', '$guide4', '$researchwork4', 
'$career5' , '$fromdate5', '$todate5', '$institute5', '$guide5', '$researchwork5',

'$examination1', '$Testyear1', '$Branch1', '$score1' , '$rank1', '$percentile1', 
'$examination2', '$Testyear2', '$Branch2', '$score2' , '$rank2', '$percentile2',
'$examination3', '$Testyear3', '$Branch3', '$score3' , '$rank3', '$percentile3', 
'$examination4', '$Testyear4', '$Branch4', '$score4' , '$rank4', '$percentile4', 
'$examination5', '$Testyear5', '$Branch5', '$score5' , '$rank5', '$percentile5', 

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

'$teachingexp', '$researchexp', '$industryexp','$asstprof', '$assoprofexp', '$profexp', 

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

'$phdcomplete', '$pgcomplete', '$phdongoing', '$pgongoing','$UID','$appn' )";                                                   
       if(mysqli_query($link, $sql)){

       // echo "Records added successfully.";
        header("Location: page2.php");

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
        }
    mysqli_close($link);
    
    // close connection

    

    ?>
