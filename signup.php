<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('home.php');
}
$msg="";
$pf="";
if(isset($_POST['btn-signup']))
{

	if(($_POST['txtpass']== $_POST['txtpass2']))
	{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$seq = trim($_POST['sec']);
	$seqpass= trim($_POST['texseq']);
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists !! go to login !!
			  </div>
			  ";
                 $pf=$msg;
	}
	else
	{
		if($reg_user->register($uname,$email,$upass,$code,$seq,$seqpass))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			
			$message = "					
						Hello $uname,
						<br /><br />
						Welcome to Coding Cage!<br/>
						To complete your registration  please , just click following link<br/>
						<br /><br />
						<a href='http://localhost/x/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
						<br /><br />
						Thanks,";
						
			$subject = "Confirm Registration";
						
			//$reg_user->send_mail($email,$message,$subject);
	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Registration Success!!!  login</strong> 
			  		</div>
					";
			   $_SESSION['lmsg']=$msg;
                           $newURL="index.php"; header('Location: '.$newURL);
					
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	}
}
else
{
   $pf="Oops! Password did not match! Try again. ";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>NITK Faculty Recruitment Form | Signup   </title>
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
      <form class="form-signin" method="post">
<?php if($pf!=""){?>
	<div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'>&times;</button>
                                <strong><?php echo $pf ;?>
</strong>
                        </div>
<?php } ?>
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <input type="text" class="input-block-level" placeholder="Full Name" name="txtuname" required />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter correct email id" required />
        <input type="password" class="input-block-level" placeholder="Choose a Password" name="txtpass" required />
	 <input type="password" class="input-block-level" placeholder="Confirm Password" name="txtpass2" required />
           <b> <p style="font-size:12pt !important; color: red">  Select a Security Question for Password Recovery </p></b>
        <select id="sec" name="sec" required>
            <option value="">Select Question </option>
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
        <input type="text" class="input-block-level" placeholder="Security Answer" name="texseq" required />
      
     	<hr />
        <button class="btn btn-large " type="submit" name="btn-signup">Sign Up</button>
        </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
   <div id="footer">
<left><font color=tomato>|</font> Copyright © 2016 NITK. All Rights Reserved <font color=tomato>|</font></left> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <right>  &nbsp;  <font color=tomato>|</font> &nbsp;<a href=http://www.nitk.ac.in>NITK Surathkal</a> <font color=tomato>|</font></right> </div>

</html>






