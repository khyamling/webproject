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
$addv=$_SESSION['addv'];
//$UID=$_POST['lid'];
if(empty($_SESSION['Mid']) )
{
  $user_home->redirect('logout.php');
  //die( "Login required." );
}  

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   
 $sql="select * from penable where advno='$addv'";
 $result =  mysqli_query($link, $sql);
 $row=$result->fetch_array();
 $num_rows = mysqli_num_rows($result);
//$xxs=$sql.$row['p1'];

    
?>

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
                         <script>
    
        $(function() {
                 
                $("#json-one").change(function() {
           
                var $dropdown = $(this);
           
                $.getJSON("data.json", function(data) {
               
                    var key = $dropdown.val();
                    var vals = [];
                                       
                    switch(key) {
                        case '1':
                            vals = data.P1.split(",");
                            break;
                        case '2':
                            vals = data.P2.split(",");
                            break;
                                                case '3':
                            vals = data.P3.split(",");
                            break;
                                                case '4':
                            vals = data.P4.split(",");
                            break;   
                                                case '5':
                            vals = data.P5.split(",");
                            break;
                                                case '6':
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
<script type="text/javascript">
 window.onload = function() {
    document.getElementById('ifYes').style.display = 'none';
    document.getElementById('ifNo').style.display = 'none';
}
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifNo').style.display = 'none';
       
    } 
    else if(document.getElementById('noCheck').checked) {
        document.getElementById('ifNo').style.display = 'block';
        document.getElementById('ifYes').style.display = 'none';
        document.getElementById("win").removeAttribute("required");
        document.getElementById("win1").removeAttribute("required");

   }
}
</script>
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
                                                                <li><a href="jaddd.php">Conference Papers</a></li> 
                                                                      <li><a href="cfaddd.php">Subjects Taught</a></li> 
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
                        
                            
                        
                        <form method="post" action="post1.php" name="f1" onsubmit="return validateform()" >
                         
                           <br /> 
       <hr  align="center" style="width: 250px;" >
       <p style="font-size:17pt !important; color:tomato;"><b> &nbsp;&nbsp;My Application(s)</b> </p> 
       <hr style="width: 250px;" >        
            <table  align="left" CELLPADDING="5" cellspacing="" align="center"  > 
                <tr>&nbsp;<br></tr><tr><br> &nbsp;</tr><tr>&nbsp;</tr><tr>&nbsp;</tr<tr>&nbsp;</tr><tr>&nbsp;</tr>
       <td >
              Advertisement No. </font> 
       </td>
        <td>
            <input type="text" size="40" maxlength="100"  name="Page1" value="<?php echo $addv ?>" readonly/>
       </td>
          </tr><tr>
         <td >
          Post Applied.
       </td>
          <td>
          <select id="json-one" name="Page2" required>
              <option value="" > Select Applied post</option>

         <?php if($row['p1']!="N") {?>
              <option value="1" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000">
                  Assistant Professor(on contract)- Grade- II, level 10 (7CPC)
              </option>
              <?php } 
              if($row['p2']!="N") {?>
               <option  value="2" name="Assistant Professor(On Contract)PB-3,Rs.7000">Assistant Professor(on contract)- Grade- II, level 11 (7CPC)</option>
           <?php } 
              if($row['p3']!="N") {?>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor- Grade- I, level 12 (7CPC)</option>
                   <?php } ?> -->

             <?php  if($row['p4']!="N") {?>
                            <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                       <?php } 
              if($row['p5']!="N") {?>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option>
              <?php } ?> 
                        </select>
        </td>
                  </tr><tr>

       <td align="left">
            AGP:  </td> <td>  <select id="json-two" name="Page3">
            <option>Please choose from Post Applied</option>
</select>                        
       </td>
                 </tr><tr>
 
       <td align="left">
          Department
       </td>
        <td>
       <select name="Page4" required>
  <option value="">Department</option>
   <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CHY">Chemistry</option>
    <option value="CVE">Civil Engineering</option>
    <option value="CSE">Computer Science & Engineering</option>
    <option value="EEE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="ITE"> Information Technology</option>
    <option value="MCS">Mathematical And Computational Sciences</option>
    <option value="MLE">Mechanical Engineering</option>
    <option value="MME">Metallurgical and Materials Engineering</option>
    <option value="MNE">Mining Engineering</option>
    <option value="PHY"> Physics</option>
    <option value="SOM"> School of  Management</option>
</select>   

      </td>
    </tr>  
    <!-- <tr><td> Have you applied for this post earlier? <br/>  (Please check Yes only if interview completed and post not offered)    </td> <td> Yes&nbsp;<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" required/>&nbsp;&nbsp;No
            &nbsp;&nbsp;<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" required/>
            <div id="ifYes" style="display:none">
 Earlier applied date:<input type="text" name="win" id="win" value="" placeholder="MM/DD/YYYY" required/> <br/>
<!-- Mention the additional achievements from the time of previous application? <br> 
<textarea style="width: 800px; height: 50px;" name="win1" id="win1" value="" maxlength="1000" required> </textarea>
<texarea /></textarea> -->
</div>
            
<div id="ifNo" style="display:none">




</div>
</tr>
<!--
 <tr><td> Faculty from industry without <br/> Ph.D Degree (RRs-14 From MHRD Guidelines)</td> <td> Yes&nbsp;<input type="radio" name="indst" value="Y" required/>&nbsp;&nbsp;No
            &nbsp;&nbsp;<input type="radio" name="indst" value="N" required/>
    
    </tr>  -->
    
   
     <tr colspan="2" style="align-items: center">
         <td>&nbsp;</td>  <td >
             <input  type="submit"   value="Next" name="Save and Submit"></td>
</tr>
      </table>
             
            </form>
     
  <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
                    </table>
    </body>
</html>
