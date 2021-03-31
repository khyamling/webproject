<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('home.php');
}


if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$mkey = trim($_POST['mkey']);
               
	$code = md5(uniqid(rand()));
	$stmt = $reg_user->runQuery("SELECT * FROM mkey ");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
         $mkey1=$row['mkey'];
	$stmt = $reg_user->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$status="Y";
	
        //echo $row['mkey'];
        if($mkey==$mkey1){
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists , Please Try another one
			  </div>
			  ";
	}
	else
	{
		if($reg_user->register1($uname,$email,$upass,$status))
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
						<strong>Registration Success! click login</strong> 
			  		</div>
					";
                        
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	}
}
else
{
 echo "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Invalid M key </strong> 
			  		</div>
					";
}}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
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
        <body id="login">
        <div class="container">
      <table border ="1" style="width: 80%; " align="center" cellspacing="5" cellpadding="5">
            <tr>
                <td style="text-align: left;width: 15%;"><img style="width:100px;height:100px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width:70%;font-size:16pt !important;">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br/> <p style="font-size:16pt !important;"> Faculty Recruitment</p></th>
                
            </tr>
        </table>
        </div>
             <br>
              <br>
    <div class="container">
				<?php if(isset($msg)) echo $msg;  ?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtpass" required />
        <input type="mkey" class="input-block-level" placeholder="Mkey" name="mkey" required />
     	<hr />
        <button class="btn btn-large " type="submit" name="btn-signup">Sign Up</button>
        
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  
</html>
