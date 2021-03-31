<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

$addv="Adv. No. XYZABCD";
$UID = $_SESSION['Mid'];
$_SESSION['addv'] =$addv;
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
$msg="";
if(isset( $_SESSION['smsg']))
{
$msg=$_SESSION['smsg'];
}

?>
<html>
    <head>
        <script type="text/javascript">

  function checkForm(form)
  {
    if(form.opwd1.value == "") {
      alert("Error: old cannot be blank!");
      form.opwd1.focus();
      return false;
    }
    

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: New Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.opwd1.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
   
  
 
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

   /// alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>

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
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
     <br><br><br>

    <div class="container">
        
    	
       
  <form  action="chnge1.php" class="form-signin" onsubmit="return checkForm(this);" method="post">
 <h3>Change Password </h3><?php if($msg!="") {?>
      <div class='alert alert-success'>
			<strong></strong>  <?php echo $msg ?>
                        <?php $_SESSION['msg']="";?>
		</div>
<?php } ?>
<p>Old Password: <input type="text" name="opwd1"></p>
<p>New Password: <input type="password" name="pwd1" placeholder="At least 6 character"></p>
<p>Confirm New Password: <input type="password" name="pwd2"></p>
<p><input name="btn-submit" type="submit" value="Submit"></p>
      
</form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
