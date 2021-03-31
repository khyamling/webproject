<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();


$aid=$_SESSION['userSession'] ;

if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$dept  = trim($_POST['deptname']);
               
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$status="N";
	
        //echo $row['mkey'];
        
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
		if($reg_user->register1($uname,$email,$upass,$dept,$status))
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
						<strong>Registration Success! </strong> 
			  		</div>
					";
                        
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	}
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup | Coding Cage</title>
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
              <div class="navbar navbar-fixed-top ">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="admin.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $aid; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div id="fnt">
                                        <a tabindex="-1" href="logoutadmin.php"> <div id="fnt"> Logout </div></a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              <li><a href="abc.php">Add Admin User</a></li>

                                                              <li><a href="rm.php">Remove User</a></li>
                                                              <li><a href=".php">Remove User</a></li>
                                                               
                                                        
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
    <div class="container">
				<?php if(isset($msg)) echo $msg;  ?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Add Admin-User Up</h2><hr />
        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />

 
       <td align="left">
          Department
       </td>
        <td>
       <select  class="input-block-level" placeholder="Dept" name="deptname" required>
  <option value="">Department</option>
   <option value="S"> None</option>
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

        <input type="password" class="input-block-level" placeholder="Password" name="txtpass" required />
        
     	<hr />
        <button class="btn btn-large " type="submit" name="btn-signup">Add User</button>
        
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
       <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
  </body>
  
</html>
