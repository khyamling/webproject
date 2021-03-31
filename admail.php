<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$aid=$_SESSION['userSession'] ;

if(isset($_SESSION['msg'])) { $xx=$_SESSION['msg']; }

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $aid?></title>
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
                    <a class="brand" href="admail.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $aid ?> <i class="caret"></i>
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
                                                              
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
            <form class="form-signin" method="post" action="extracmid.php">
       <font size="5"  face="Comic sans MS"  color="red"> <p> <?php  if(isset($xx)) { echo $xx; };
       $_SESSION['msg']="";?> </p></font>

       <hr>
 
       
   <table>
<tr>    <td align="left">
           <b>1. List of Application:</b>
         <button class="btn-toolbar " type="submit" name="search1">Search</button>
       </td> </tr> </table>
   

    <hr>
</font>
<hr>

       
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        </form>
    </body>

</html>
