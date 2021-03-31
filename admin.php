<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('admin.php');
}



$aid=$_SESSION['userSession'] ;

if(isset($_SESSION['msg'])) { $xx=$_SESSION['msg']; }

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $aid,$row['userEmail']; ?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
     
    </head>
    
   <body  >

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
                                                              <li><a href="pen.php">Enable/Disable Post</a></li>
                                                               
                                                        
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
       <?php
      ?>
       <font size="5"  face="Comic sans MS"  color="red"> <p> <?php  if(isset($xx)) { echo $xx; };
       $_SESSION['msg']="";?> </p></font>

<font size="15">
<b> Note.</b><br />

The present application form collects details based on the MHRD 4-tier Guidelines. The web form is divided into 2 pages: Essential Requirements and Full Application Form. The partial application form may be saved and later resumed.
<p>
<br/>
<b>My Application Tab.</b>
<br/>
To start a new application, Click on 'My Application(s)'.
<br/>

In the My Application(s) page, enter/select the following details:
<ol>
<li> Advertisement Number.</li>
<li> Post Applied, AGP and the Department.</li>
<li> Click Next to go to the Essential Requirements form.</li>
</ol>

</p> <p>
<b>Upload Image Tab.</b>
<br />Supporting documents, passport size photograph, and scanned signature to be uploaded in this page. The documents may be uploaded once. The same will be used for multiple applications (if any).

</p> <p>
<b>View Application Tab.</b>
<br />Saved applications and Submitted applications are listed in this tab. The saved application can be viewed or edited through this page.
After submission of the web application form, PDF of the same can be generated.

</p> <p style="color:red" style="font-size:15">
<b>IMPORTANT:</b></p><p> Please take care to fill valid and accurate values in the application.
</p> <p>
</font>


       
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
    </body>

</html>
