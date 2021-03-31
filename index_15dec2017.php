<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	
        if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
       {
            $email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
      //   echo "Correct Code Entered";
//Do you stuff
         
if($user_login->login($email,$upass))
	{
		$user_login->redirect('home.php');
	}
        }
        else
        {
        header("Location: index.php?error");
        			exit; }
        
}
$lmsg="";
if(isset($_SESSION['lmsg']))
{
$lmsg=$_SESSION['lmsg'];
}
if(isset($_SESSION['psmsg']))
{
$lmsg=$_SESSION['psmsg'];
    
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> NITK Faculty Recruitment Form | Login Page </title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
<body id="login">
        <div class="container">
      <table border ="1" style="width: 80%; " align="center" cellspacing="5" cellpadding="5">
            <tr>
                <td style="text-align: left;width: 15%;"><a href="http://www.nitk.ac.in"><img style="width:100px;height:100px;" src="img/nitk1.png" alt="Photo Not Found"></a></td>
                <th style="text-align: center; width:70%;font-size:16pt !important;">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka India
                    <br/> <p style="font-size:16pt !important;"> Recruitment For Filling Up Faculty Positions</p></th>
                
            </tr>
        </table>
        </div>
      <br>
<br/>
<br/>

    <div class="container">
		<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>
<form>
<table style="width: 80%; " align="center" >
<tr> 
<td> <font> <strong>Important: Last date for the Application Submission has been moved to December, 15, 2017. </strong> </font></td> </tr>
<tr>
<tr> 
<td> <font> <strong><a href="noti.pdf">Important: Recruitment Notification and Official instructions.</a> </strong> </font></td> </tr>
<tr>
<td>
  <p> <font ><strong> User Guide to fill the Faculty Recruitment Application : </strong> </font><input type="submit"  formaction="FRR.pdf" value="Click here" name="usergx">               </p> </td><tr>
<tr> <td>  <strong>The Model Recruitment
Rules For Faculty Posts In NITs by the MHRD :</strong>
<p> <font ><strong> <a href="gazette.pdf"> Gazette of India,17th July 2017</a>. </strong></font > </td> </tr>

<tr><td> <font ><strong>  <a href="anom.pdf">Recommendations of the Anomaly Committee on new RR</a>.</strong> </font> </td></tr>
<!--<a href="mhrd1.pdf">Recommendations of the Oversight Committee, 17th June, 2015.</a> -->

<tr><td><p> <font ><strong> <a href="FAQ1.pdf"> The FAQ contains the procedure to download the SCOPUS profile.</a> </td></tr>

</table>

</form>

        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
			</div>
            <?php
		}
		?>
        
<?php if($lmsg!=""){?>
<div class='alert-success'>  <button class='close' data-dismiss='alert'>&times;</button> <?php echo $lmsg; $_SESSION['psmsg']=""; ?> </div> <?php } ?> 

        <h2 class="form-signin-heading">Sign In.</h2><hr />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter correct email id"/>
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required />
        Enter Image Text
           <input name="captcha" type="text">
           <img src="capt.php" /><br>
     	<hr />
        <button class="btn btn-large " type="submit" name="btn-login">Sign in</button>
<br />
 <hr/>
<a href="signup.php" style="float:left;" >Create a New Account </a>
<br />
<hr />
        <a href="fpass.php">Lost your Password ? </a>
      </form>
     <?php $lmsg="";?>
    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
   <div id="footer">
<left><font color=tomato>|</font> For any queries regarding the use of the faculty recruitment portal, please contact <a href="mailto:facrecruit@nitk.edu.in">facrecruit@nitk.edu.in</a>|<br />
<left><font color=tomato>|</font> This site is best viewed in Google Chrome or Mozilla Firefox  browsers. Copyright © 2017 NITK. All Rights Reserved <font color=tomato>|</font></left>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <right>  &nbsp;  <font color=tomato>|</font> &nbsp;<a href=http://www.nitk.ac.in>NITK Surathkal</a> <font color=tomato>|</font></right> </div>

</html>
   
