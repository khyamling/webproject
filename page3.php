<?php

session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$br=$_SESSION['Br'];
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

    $sql  = "SELECT * FROM  page2 WHERE email='$UID' and br='$br' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$row_cnt1 = $result->num_rows;
	if($row_cnt1 > 0)
	{ 
            $user_home->redirect('index.php');
        }
        else
        {
    $sql1 =  "SELECT * FROM page2";
$result =  mysqli_query($link, $sql1);
$row_cnt = $result->num_rows;
$inc=$row_cnt+1;
$row = mysqli_fetch_assoc($result);


  //  printf("Result set has %d rows.\n", $row_cnt);
 //   echo 'Result set has %d rows.\n", $row_cnt';


  // $Page4 = mysqli_real_escape_string($link, $_POST['Page4']);
     $appn="AP"."$aid"."$br"."$inc";
     $appn = preg_replace('/\s+/', '', $appn);
     //  echo "Result set has %d rows.\n, $appn";
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
        
        
        $E3_21 = mysqli_real_escape_string($link, $_POST['E3_21']);
        $E3_22 = mysqli_real_escape_string($link, $_POST['E3_22']);
        $E3_23 = mysqli_real_escape_string($link, $_POST['E3_23']);
        $E3_24 = mysqli_real_escape_string($link, $_POST['E3_24']);
        $E3_25 = mysqli_real_escape_string($link, $_POST['E3_25']);
        $E3_26 = mysqli_real_escape_string($link, $_POST['E3_26']);
        
        $E3_31 = mysqli_real_escape_string($link, $_POST['E3_31']);
        $E3_32 = mysqli_real_escape_string($link, $_POST['E3_32']);
        $E3_33 = mysqli_real_escape_string($link, $_POST['E3_33']);
        $E3_34 = mysqli_real_escape_string($link, $_POST['E3_34']);
        $E3_35 = mysqli_real_escape_string($link, $_POST['E3_35']);
        $E3_36 = mysqli_real_escape_string($link, $_POST['E3_36']);
        
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
        //// pag3 db 
        
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

        
        $sql = "INSERT INTO page2 VALUES('$JInternational', '$JNational', '$CInternational', '$CNational',
'$E3_11', '$E3_12', '$E3_13', '$E3_14', '$E3_15', '$E3_16',
'$E3_21', '$E3_22', '$E3_23', '$E3_24', '$E3_25', '$E3_26',
'$E3_31', '$E3_32', '$E3_33', '$E3_34', '$E3_35', '$E3_36', 
  
'$BInternational', '$patents',

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

'$ao1', '$date', '$place','$UID','$appn','$br')";

        

  if(mysqli_query($link, $sql)){

        echo " Your application submitted successfully. <br> <dive> Application Number is : <b>$appn <b> </div> ";

    } else{

        echo " ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
     
        }

    // close connection

    mysqli_close($link);

    ?>
<head>
        <title><?php echo $aid,$row['userEmail']; ?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>
    
   <body  >

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="home.php">Member Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $UID; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              <li><a href="page1.php">MY Application</a></li>

                                                              <li><a href="up.php">Upload Image</a></li>
                                                               <li><a href="view.php">View Application</a></li>
                                                        
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <!--/.fluid-container-->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
    </body>

</html>