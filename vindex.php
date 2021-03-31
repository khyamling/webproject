<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('logoutadmin.php');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	$stmt = $user_login->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
       $_SESSION['deptscr'] = $row['dept'];
        if($row['userPass']==md5($upass))
					{
            
                                             if($row['userStatus']=="N")
                                             {
 						if($row['dept']=="S")
				                  {        $_SESSION['userSession'] = $email;
                                                   $user_login->redirect('adminc.php');
						}
						else
				                  {     
                                                   $_SESSION['userSession'] = $email;
                                                   $user_login->redirect('adminsrc.php');
						}
                                             }
	
	                                       
                                            else {
                                          $_SESSION['userSession'] = $email;
						$user_login->redirect('admin.php');

                                            }
						
					}
                                        else
                                        {
                                            header("Location: aindex.php?error");
                                        }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login | Coding Cage</title>
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
            <br />
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
        <h2 class="form-signin-heading"></h2><hr />
        <h2 class="form-signin-heading">Admin Page</h2><hr />
        <h2 class="form-signin-heading">Sign In.</h2><hr />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required />
     	<hr />
        <button class="btn btn-large " type="submit" name="btn-login">Sign in</button>
        
      </form>
 <form class="form-signin" method="post">
<input  type="submit"   formaction="aindex.php" value="Home" name="previous">      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
