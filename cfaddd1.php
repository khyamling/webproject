<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$email=$UID;
$user_home = new USER();
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


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

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

        $E2_111 = mysqli_real_escape_string($link, $_POST['E2_111']);
        $E2_112 = mysqli_real_escape_string($link, $_POST['E2_112']);
        $E2_113 = mysqli_real_escape_string($link, $_POST['E2_113']);
        $E2_114 = mysqli_real_escape_string($link, $_POST['E2_114']);
        $E2_115 = mysqli_real_escape_string($link, $_POST['E2_115']);


        $E2_121 = mysqli_real_escape_string($link, $_POST['E2_121']);
        $E2_122 = mysqli_real_escape_string($link, $_POST['E2_122']);
        $E2_123 = mysqli_real_escape_string($link, $_POST['E2_123']);
        $E2_124 = mysqli_real_escape_string($link, $_POST['E2_124']);
        $E2_125 = mysqli_real_escape_string($link, $_POST['E2_125']);


        $E2_131 = mysqli_real_escape_string($link, $_POST['E2_131']);
        $E2_132 = mysqli_real_escape_string($link, $_POST['E2_132']);
        $E2_133 = mysqli_real_escape_string($link, $_POST['E2_133']);
        $E2_134 = mysqli_real_escape_string($link, $_POST['E2_134']);
        $E2_135 = mysqli_real_escape_string($link, $_POST['E2_135']);


        $E2_141 = mysqli_real_escape_string($link, $_POST['E2_141']);
        $E2_142 = mysqli_real_escape_string($link, $_POST['E2_142']);
        $E2_143 = mysqli_real_escape_string($link, $_POST['E2_143']);
        $E2_144 = mysqli_real_escape_string($link, $_POST['E2_144']);
        $E2_145 = mysqli_real_escape_string($link, $_POST['E2_145']);

        $E2_151 = mysqli_real_escape_string($link, $_POST['E2_151']);
        $E2_152 = mysqli_real_escape_string($link, $_POST['E2_152']);
        $E2_153 = mysqli_real_escape_string($link, $_POST['E2_153']);
        $E2_154 = mysqli_real_escape_string($link, $_POST['E2_154']);
        $E2_155 = mysqli_real_escape_string($link, $_POST['E2_155']);

 $sql = "insert into cfadd values( '$E2_11', '$E2_12', '$E2_13', '$E2_14', '$E2_15',
'$E2_21', '$E2_22', '$E2_23', '$E2_24', '$E2_25',
'$E2_31', '$E2_32', '$E2_33', '$E2_34', '$E2_35',    
'$E2_41', '$E2_42', '$E2_43', '$E2_44', '$E2_45',
'$E2_51', '$E2_52', '$E2_53', '$E2_54', '$E2_55',
'$E2_61', '$E2_62', '$E2_63', '$E2_64', '$E2_65',
'$E2_71', '$E2_72', '$E2_73', '$E2_74', '$E2_75',
'$E2_81', '$E2_82', '$E2_83', '$E2_84', '$E2_85',    
'$E2_91', '$E2_92', '$E2_93', '$E2_94', '$E2_95',
'$E2_101', '$E2_102', '$E2_103', '$E2_104', '$E2_105',
'$E2_111', '$E2_112', '$E2_113', '$E2_114', '$E2_115',
'$E2_121', '$E2_122', '$E2_123', '$E2_124', '$E2_125',
'$E2_131', '$E2_132', '$E2_133', '$E2_134', '$E2_135',
'$E2_141', '$E2_142', '$E2_143', '$E2_144', '$E2_145',
'$E2_151', '$E2_152', '$E2_153', '$E2_154', '$E2_155',
'$email' )";

     if(mysqli_query($link, $sql)){

    $xx="Subjects Taught Details added successfully. ";         $_SESSION['msg']=$xx;  $newURL="home.php"; header('Location: '.$newURL); ?>  
<?php
    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
    
   
    
      mysqli_close($link);
    ?>


