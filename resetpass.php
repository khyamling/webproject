<?php
session_start();
require_once 'class.user.php';
$user = new USER();
$email="NUll";
if(isset($_SESSION['emai'])){
$email=$_SESSION['emai'];}
if(isset($_SESSION['setp'])){
$key=$_SESSION['setp'];}
  $x="";
if(isset($_POST['btn-submit']))
{
    
    if(($_POST['pass']== $_POST['confirmpass']))
	{
    if($key=="Y")
{
    $upass=$_POST['pass'];
    $password = md5($upass);
 $stmt = $user->runQuery("UPDATE tbl_users SET userPass=:upass WHERE userEmail=:email");
		if($stmt->execute(array(":upass"=>$password,"email"=>$email)))
                {
                    $mm="Reset Password Success!! try Login Now";
                    $_SESSION['psmsg']=$mm;
                    $newURL="index.php"; header('Location: '.$newURL);
                }
                
}
else { $newURL="index.php"; header('Location: '.$newURL); }



}
 else {
     $x="1";
 $msg1=  "Entered Password didnt match try again";
}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Password Reset</title>
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
    	<div class='alert alert-success'>
			<strong>Hello !</strong>  <?php echo $email ?> you are here to reset your forgotten password.
		</div>
        <form class="form-signin" method="post">
          
            
        <h3 class="form-signin-heading">Password Reset.</h3><hr />
        <?php
        if($x=="1")
		{ ?>
        <div class='alert alert-success'> <?php	echo $msg1; ?> </div> <?php
		}		?>
        <input type="password" class="input-block-level" placeholder="New Password" name="pass" required />
        <input type="password" class="input-block-level" placeholder="Confirm New Password" name="confirmpass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit" name="btn-submit">Reset Your Password</button>
        
   
      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
