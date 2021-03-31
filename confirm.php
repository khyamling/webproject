<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'dbconfig.php';
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$sappn=$_POST["view"]; 
 $_SESSION['gappn']=$sappn;
//echo $sappn;
//$_SESSION['vappn']=$sppn;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta  content="user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
 <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
                <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



<script LANGUAGE="JavaScript">

function val(fld) {
    //alert(fld);
    confirm("Are you sure you want submit??. once submitted further changes not allowed.");
		
		

}
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
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
          <form method="post">
              
          <br>
<br>
             <br>
<br>      <table   style="border:none;" align="center" cellspacing="10" cellpadding="10">
              <tr>
                  
                 
                      <td>
                          Application Number :&nbsp;&nbsp;&nbsp;<?php  echo $sappn;?>
                      </td>
                      <td align="left">
                        

                      </td>
              </tr>
                      <tr>
                          <td colspan="2">
                      <font size="2"  face="Comic sans MS" color="green"><b> Are you sure you want to submit the application ? (Once submitted no more changes  are allowed)
                  </td>
              </tr>
  
              <tr> 
                  <td colspan="2" > <font size="2"  face="Comic sans MS" color="green"><input name="agree" type="radio" value="agree" required> I Agree   </font></td>
    </tr>
              <tr>
                  <td colspan="2">  <input id="btn1" type="submit"  onchange="return val(this)" formaction="fsubmit.php" value="Submit" name="previous">
                          </td>
              </tr>
          </table>
          </form>
          
          <form name="f1" method="post">
              <table style="border:none;" align="left"  cellpadding="10">
                  <tr>
                      <td  align="left">
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <font size="4" color="red"> OR </font> <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input id="btn1" type="submit"   formaction="view1.php" value="Preview Applicattion" name="previous">
                  
                      </td>
                  </tr>
              </table>  
              </form>
        <?php  if(isset($_SESSION['up'])) { $xx=$_SESSION['up']; echo $xx ;  $_SESSION['up']="";} ?></b>  <font>

<?php ?>
