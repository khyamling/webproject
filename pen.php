<?php
session_start();
require_once 'class.user.php';
$user_home =new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('admin.php');
}


$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
 // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   $sql="select * from penable ";
 $result =  mysqli_query($link, $sql);
// $name=$result->fetch_array();
$aid=$_SESSION['userSession'] ;


//	$stmt->execute(array(":email_id"=>$email));

?>
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
                                        <a tabindex="-1" href="logout.php"> <div id="fnt"> Logout </div></a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              <li><a href="abc.php">Add Admin User</a></li>

                                                              <li><a href="rm.php">Remove User</a></li>
                                                              <li><a href=".php">Remove User</a></li>
                                                              <li><a href="pen.php">Enable/Disable Post</a></li>
                                                               
                                                        
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
<form method="post" action="pes1.php" name="f1" onsubmit="return validateform()" >
    <table>
        
    <tr> 
<p>Select Advertisement Number and enable respective post </p>
    </tr> 
    <tr>
        
    
<select name="addv" id="addv">
<?php echo $name['advno'] ?>
  <option selected="selected">Choose one</option>

  <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <option value="<?php echo $row['advno'] ?>"><?php echo $row['advno'] ?></option>
  <?php
    }} ?>
      
      
</select> 
    </tr> <tr>
<input type="checkbox" name="check_list1" value="Y" ><label>Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments </label><br/> </tr> <tr>
<input type="checkbox" name="check_list2" value="Y"><label> Assistant Professor(On Contract)PB-3,Rs.15,600+07 additional non-compounded increments</label><br/></tr> <tr>
<input type="checkbox" name="check_list3" value="Y"><label> Assistant Professor PB-3 with Grade pay of Rs.8000</label><br/></tr> <tr>
<input type="checkbox" name="check_list4" value="Y"><label> Associate Professor PB-4 with Grade pay of Rs.9500</label><br/></tr> <tr>
<input type="checkbox" name="check_list5" value="Y"><label> Professor PB-4 with Grade pay of Rs.10500</label><br/></tr> <tr>
<input type="checkbox" name="check_list6" value="Y"><label>Professor HAG Scale Rs.67000 to 79000</label><br/></tr> <tr>
    </tr> <tr>
<input  type="submit"   value="Next" name="Save and Submit">
</tr> </table>
</form>
?>

