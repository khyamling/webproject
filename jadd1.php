  <?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
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

$ex="N";
$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    
  $sql =  "SELECT * FROM jadd WHERE email='$UID'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();


    
    ?>
<!DOCTYPE html>

<html >
    
    <head>
 



          <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script type="text/javascript" src="assets/datepicker.js"></script> 
        <script type="text/javascript" src="assets/timepicker.js"></script> 
        <link rel="stylesheet" type="text/css" href="assets/runnable.css" /> 
        
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#j25_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j1_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  
  $(function() {
    $( "#j2_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j3_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j4_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j5_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j6_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j7_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j8_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j9_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j10_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j11_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j12_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j13_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });


  
  $(function() {
    $( "#j14_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j15_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j16_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j17_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j18_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j19_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j20_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j21_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j22_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j23_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  $(function() {
    $( "#j24_13" ).autocomplete({
      source: 'search.php', minLength: 3
    });
    //$( "#skills" ).autocomplete({ minLength: 0 });
  });
  </script>
 
<style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>

    </head>
    
   <body >
       <br>
       <br>
     
       
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


<form method="post">
<p> <b> 15.c. Enter all other publications Details </b> </p>

    <table>
                <tr><td>Author </td> <td>Title</td> <td>Conference</td> <td>Year</td> <td>Place </td></tr>
    </thead>
        <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j1_11']?>" name="j1_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j1_12']?>"  name="j1_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j1_13"  value="<?php echo $row['j1_13']?>" name="j1_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j1_14']?>" name="j1_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j1_15']?>" name="j1_15"></td>
    
           
        </tr>
         <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j2_11']?>" name="j2_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j2_12']?>"  name="j2_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j2_13"  value="<?php echo $row['j2_13']?>" name="j2_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j2_14']?>" name="j2_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j2_15']?>" name="j2_15"></td>
          
           
        </tr>
         <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j3_11']?>" name="j3_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j3_12']?>"  name="j3_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j3_13"  value="<?php echo $row['j3_13']?>" name="j3_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j3_14']?>" name="j3_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j3_15']?>" name="j3_15"></td>
      
           
        </tr>
        <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j4_11']?>" name="j4_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j4_12']?>"  name="j4_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j4_13"  value="<?php echo $row['j4_13']?>" name="j4_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j4_14']?>" name="j4_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j4_15']?>" name="j4_15"></td>
      
           
        </tr>
        <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j5_11']?>" name="j5_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j5_12']?>"  name="j5_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j5_13"  value="<?php echo $row['j5_13']?>" name="j5_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j5_14']?>" name="j5_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j5_15']?>" name="j5_15"></td>
           
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j6_11']?>" name="j6_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j6_12']?>"  name="j6_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j6_13"  value="<?php echo $row['j6_13']?>" name="j6_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j6_14']?>" name="j6_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j6_15']?>" name="j6_15"></td>
           
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j7_11']?>" name="j7_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j7_12']?>"  name="j7_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j7_13"  value="<?php echo $row['j7_13']?>" name="j7_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j7_14']?>" name="j7_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j7_15']?>" name="j7_15"></td>
            
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j8_11']?>" name="j8_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j8_12']?>"  name="j8_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j8_13"  value="<?php echo $row['j8_13']?>" name="j8_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j8_14']?>" name="j8_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j8_15']?>" name="j8_15"></td>
   
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j9_11']?>" name="j9_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j9_12']?>"  name="j9_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j9_13"  value="<?php echo $row['j9_13']?>" name="j9_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j9_14']?>" name="j9_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j9_15']?>" name="j9_15"></td>
        
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j10_11']?>" name="j10_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j10_12']?>"  name="j10_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j10_13"  value="<?php echo $row['j10_13']?>" name="j10_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j10_14']?>" name="j10_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j10_15']?>" name="j10_15"></td>
    
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j11_11']?>" name="j11_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j11_12']?>"  name="j11_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j11_13"  value="<?php echo $row['j11_13']?>" name="j11_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j11_14']?>" name="j11_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j11_15']?>" name="j11_15"></td>
       
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j12_11']?>" name="j12_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j12_12']?>"  name="j12_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j12_13"  value="<?php echo $row['j12_13']?>" name="j12_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j12_14']?>" name="j12_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j12_15']?>" name="j12_15"></td>
       
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j13_11']?>" name="j13_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j13_12']?>"  name="j13_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j13_13"  value="<?php echo $row['j13_13']?>" name="j13_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j13_14']?>" name="j13_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j13_15']?>" name="j13_15"></td>
         
           
        </tr>
        <tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j14_11']?>" name="j14_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j14_12']?>"  name="j14_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j14_13"  value="<?php echo $row['j14_13']?>" name="j14_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j14_14']?>" name="j14_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j14_15']?>" name="j14_15"></td>
         
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j15_11']?>" name="j15_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j15_12']?>"  name="j15_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j15_13"  value="<?php echo $row['j15_13']?>" name="j15_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j15_14']?>" name="j15_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j15_15']?>" name="j15_15"></td>
        
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j16_11']?>" name="j16_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j16_12']?>"  name="j16_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j16_13"  value="<?php echo $row['j16_13']?>" name="j16_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j16_14']?>" name="j16_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j16_15']?>" name="j16_15"></td>
            
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j17_11']?>" name="j17_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j17_12']?>"  name="j17_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j17_13"  value="<?php echo $row['j17_13']?>" name="j17_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j17_14']?>" name="j17_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j17_15']?>" name="j17_15"></td>
            
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j18_11']?>" name="j18_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j18_12']?>"  name="j18_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j18_13"  value="<?php echo $row['j18_13']?>" name="j18_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j18_14']?>" name="j18_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j18_15']?>" name="j18_15"></td>
           
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j19_11']?>" name="j19_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j19_12']?>"  name="j19_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j19_13"  value="<?php echo $row['j19_13']?>" name="j19_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j19_14']?>" name="j19_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j19_15']?>" name="j19_15"></td>
      
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j20_11']?>" name="j20_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j20_12']?>"  name="j20_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j20_13"  value="<?php echo $row['j20_13']?>" name="j20_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j20_14']?>" name="j20_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j20_15']?>" name="j20_15"></td>
         
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j21_11']?>" name="j21_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j21_12']?>"  name="j21_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j21_13"  value="<?php echo $row['j21_13']?>" name="j21_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j21_14']?>" name="j21_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j21_15']?>" name="j21_15"></td>
           
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j22_11']?>" name="j22_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j22_12']?>"  name="j22_12"></td>
             <td>                         
            <input type="text" maxlength="150" size="20" id="j22_13"  value="<?php echo $row['j22_13']?>" name="j22_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j22_14']?>" name="j22_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j22_15']?>" name="j22_15"></td>
        
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j23_11']?>" name="j23_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j23_12']?>"  name="j23_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j23_13"  value="<?php echo $row['j23_13']?>" name="j23_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j23_14']?>" name="j23_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j23_15']?>" name="j23_15"></td>
    
           
        </tr>
<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j24_11']?>" name="j24_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j24_12']?>"  name="j24_12"></td>
             <td>                       
            <input type="text" maxlength="150" size="20" id="j24_13"  value="<?php echo $row['j24_13']?>" name="j24_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j24_14']?>" name="j24_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j24_15']?>" name="j24_15"></td>
          
           
        </tr>

<tr>
            <td><input type="text"  maxlength="150" size="20" value="<?php echo $row['j25_11']?>" name="j25_11"></td>
            <td><input type="text" maxlength="150"  size="30" value="<?php echo $row['j25_12']?>"  name="j25_12"></td>
             <td>                        
            <input type="text" maxlength="150" size="20" id="j25_13"  value="<?php echo $row['j25_13']?>" name="j25_13"></td>
          
            <td><input type="text" maxlength="150" size="20"  value="<?php echo $row['j25_14']?>" name="j25_14"></td>
            <td><input type="text"  maxlength="150" size="10"  value="<?php echo $row['j25_15']?>" name="j25_15"></td>
           
       
           
        </tr>
        
      

         </tbody>
           
</table>   
<br>
<center>
      <input type="submit" id="btn1" formaction="jadd11.php" value="Save Details" name="previous">              
  </center>
<br><br><br>
</form>
<?php 
?>
            
</body>
</html>
