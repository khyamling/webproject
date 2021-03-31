<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();



if(!$reg_user->is_logged_in())
{
	$reg_user->redirect('adminsrc.php');
}

$vapn=$_POST["nappn"]; 
    $str = str_replace(' ','',$vapn);
?>
<!DOCTYPE html>
<html>
  <head>
    <title> |  Validate, Verify & Check Credits </title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<link rel="stylesheet" href="style.css" type="text/css" />
<script LANGUAGE="JavaScript">

function val(fld) {
    //alert(fld);
    confirm("Are you sure you want submit??. once submitted further changes not allowed.");
		
		

}
</script>
</head>
    <body>
      <div class="navbar navbar-fixed-top ">
           <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="adminsrc.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php  echo $aid; ?> <i class="caret"></i>
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
                                                            

                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
            </div>
        </div>
   

</div>

    
      
     
<iframe src='verifiedcredits/".$str.".pdf' width='600' height='100' frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen scrolling='no'></iframe>
  </table>

  
   
</div>
             </form>
   <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
</body>
    
</html>
