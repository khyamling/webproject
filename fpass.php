<?php
session_start();
require_once 'class.user.php';
$user = new USER();
  
if($user->is_logged_in()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-submit']))
{
	$email = $_POST['txtemail'];
          $_SESSION['emai']=$email;
	$seq = $_POST['sec'];
	$sea = $_POST['texseq'];
	
            $stmt = $user->runQuery("SELECT userID FROM tbl_users WHERE userEmail=:email and sq=:seq and sa=:sea LIMIT 1");
	$stmt->execute(array(":email"=>$email,":seq"=>$seq,":sea"=>$sea));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);	
	if($stmt->rowCount() == 1)
	{
		$id = base64_encode($row['userID']);
		$code = md5(uniqid(rand()));
                $_SESSION['setp']="Y";
             
                $newURL="resetpass.php";
		header('Location: '.$newURL);
		$stmt = $user->runQuery("UPDATE tbl_users SET tokenCode=:token WHERE userEmail=:email");
		$stmt->execute(array(":token"=>$code,"email"=>$email));
		
		$message= "
				   Hello , $email
				   <br /><br />
				   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
				   <br /><br />
				   Click Following Link To Reset Your Password 
				   <br /><br />
				   <a href='http://localhost/x/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
				   <br /><br />
				   thank you :)
				   ";
		
		///$user->send_mail($email,$message,$subject);
		
		$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
			  	</div>";
	}
	else
	{
		$msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  Invalid Details!!. 
			    </div>";
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Forgot Password</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="login">
       <div class="container">
          <body id="login">
        <div class="container">
      <table border ="1" style="width: 80%; " align="center" cellspacing="5" cellpadding="5">
            <tr>
                <td style="text-align: left;width: 15%;"><img style="width:100px;height:100px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width:70%;font-size:14pt !important;">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br/> <p style="font-size:16pt !important;">Faculty Recruitment Portal</p></th>
                
            </tr>
        </table>
        </div>
              <br>
              <br>
    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Forgot Password</h2><hr />
        
        	<?php
			if(isset($msg))
			{
				echo $msg;
			}
			else
			{
				?>
              	<div class='alert alert-info'>
				Please enter your email address and answer your security question to set a new password 
				</div>  
                <?php
			}
			?>
        
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
 <b> <p style="font-size:12pt !important; color: red">  Choose a Security Question one which has given at time of registration(Sign-Up)  </p></b>
        <select id="sec" name="sec">
            <option>Select Question </option>
            <option value="How long did your first pet live?">How long did your first pet live?  </option>
            <option value="Who is the person you admire the most?"> Who is the person you admire the most? </option>
            <option value="What was the most memorable day in your life?"> What was the most memorable day in your life? </option>
            <option value="What was the color of your first mobile phone?"> What was the color of your first mobile phone? </option>
            <option value="What is the name of the teacher who gave you the first A grade?"> What is the name of the teacher who gave you the first A grade?</option>
            <option value="What is the farthest from home you have traveled?">What is the farthest from home you have traveled? </option>
            <option value="Whom do you frequently send mail?"> Whom do you frequently send mail? </option>
            <option value="what is your favorite color?">what is your favorite color?</option>
            <option value="What is your favorite  lucky number?"> What is your favorite  lucky number? </option>
            <option value="What car do you wish you owned?">What car do you wish you owned? </option>
        </select>
        <input type="text" class="input-block-level" placeholder="Security Answer" name="texseq" required />     	<hr />
        <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Generate new Password</button>
      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
   <div id="footer">
<left><font color=tomato>|</font> Copyright © 2016 NITK. All Rights Reserved <font color=tomato>|</font></left>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <right>  &nbsp;  <font color=tomato>|</font> &nbsp;<a href=http://www.nitk.ac.in>NITK Surathkal</a> <font color=tomato>|</font></right> </div>

</html>
