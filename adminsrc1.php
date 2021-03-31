<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();



if(!$reg_user->is_logged_in())
{
	$reg_user->redirect('adminsrc.php');
}

$aid=$_SESSION['userSession'] ;
$deptscr=$_SESSION['deptscr'] ;
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
          <form action="viewsrc.php" method="post" name="f1" >
             <br>
             <br>

                 <div width="1800px" >
                      <p align="center" p>

</div>
  <table align="center"  style="width:1280px; border-collapse: separate !important;">

            <tr>
				
                <td align="center" colspan="6"  style="color:#fdfbfb" bgcolor="#00a2d1" align="left" height="6"> <label></p><b>List of Application </b></label></td>
              </tr>

   
    

  
    <tr>
<th> Sr.No.</th> 
        <th> Application No.</th> 
    <th>Name</th> 
        <th>Post Applied </th>  
 <th>Generate Scrutiny Form  </th> 
 <th> Print Scrutiny Form </th> 
       </tr>
    <?php
    


 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 $sql="SELECT * FROM postapplied    where dept='$deptscr'";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 $inc=1;
 $pp=1;
 
 while($row=$result_set->fetch_array())
 {

//echo $sql;
if($row['status']!="N") {
     if($row['post'] ==1)
{
      $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
         
     
    if($row['dept'] =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($row['dept'] =="CHE") $dept=  "Chemical Engineering"; 
    else if($row['dept'] =="CHY") $dept=  "Chemistry"; 
    else if($row['dept'] =="CVE") $dept=  "Civil Engineering"; 
    else if($row['dept'] =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($row['dept'] =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($row['dept'] =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($row['dept'] =="ITE") $dept=  " Information Technology"; 
    else if($row['dept'] =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($row['dept'] =="MLE") $dept=  " Mechanical Engineering"; 
    else if($row['dept'] =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($row['dept'] =="MNE") $dept=  " Mining Engineering"; 
    else if($row['dept'] =="PHY") $dept=  "  Physics"; 
    else if($row['dept'] =="SOM") $dept=  "  School of  Management"; 
   
    $ap11=$row['appid'];
//	echo $ap11;
 $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];
 
    
?>
        <tr>
<td> <?php echo $inc; $inc=$inc+1;?></td>
            <td><input type="radio" name="viewsrc" value="<?php echo $row['appid']; $vapnid=$row['appid']?>" required/>   <?php echo $row['appid']; ?> </td>
   <?php $sql1 =  "SELECT * FROM eq1page WHERE appn='$vapnid'";
$result11 =  mysqli_query($link, $sql1);

 $scrrow=$result11->fetch_array();
 ?> 
 <?php $sqlx =  "SELECT * FROM postapplied WHERE appid='$vapnid'";

$resultx =  mysqli_query($link, $sqlx);

 $scrrowx=$resultx->fetch_array();
 ?>
       <td><?php echo $scrrow['Page5']; ?> <input type="hidden" name="UID" value=" <?php echo $scrrowx['email']; ?> " readonly/></td>
        <td><?php echo $pp; ?></td>
   <?php $sql11 =  "SELECT * FROM crediteq1 WHERE appn='$vapnid'";

$result111 =  mysqli_query($link, $sql11);

 $scrrow1=$result111->fetch_array();
 ?> 

      <td> 
             <?php $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input  id="btn1"  type="submit" formaction="scrformpdf1.php"  value="Generate Scrutiny Form" name="edit"></label>
                  <?php } else { echo "Generated";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn1" type="submit"   formaction="scrpdf.php" value="Scrutiny Form" name="previous">
        
                <font size="5"  face="Comic sans MS"  color="red"> <?php } else { echo "Get.pdf";  } ?>  </font>   </td> </tr>
      
        <?php
        
 } 
}
 }
 ?>
 <?php
    


 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 $sql="SELECT * FROM postapplied    where dept='$deptscr'";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 
 $pp=1;
 
 while($row=$result_set->fetch_array())
 {

//echo $sql;
if($row['status']!="N") {
     if($row['post'] ==2)
{
                           $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
      
       
    if($row['dept'] =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($row['dept'] =="CHE") $dept=  "Chemical Engineering"; 
    else if($row['dept'] =="CHY") $dept=  "Chemistry"; 
    else if($row['dept'] =="CVE") $dept=  "Civil Engineering"; 
    else if($row['dept'] =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($row['dept'] =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($row['dept'] =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($row['dept'] =="ITE") $dept=  " Information Technology"; 
    else if($row['dept'] =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($row['dept'] =="MLE") $dept=  " Mechanical Engineering"; 
    else if($row['dept'] =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($row['dept'] =="MNE") $dept=  " Mining Engineering"; 
    else if($row['dept'] =="PHY") $dept=  "  Physics"; 
    else if($row['dept'] =="SOM") $dept=  "  School of  Management"; 
   
      $ap11=$row['appid'];
//	echo $ap11;
 $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];
 
    
?>
        <tr>
<td> <?php echo $inc; $inc=$inc+1;?></td>
            <td><input type="radio" name="viewsrc" value="<?php echo $row['appid']; $vapnid=$row['appid'] ?>" required/> <?php echo $row['appid']; ?> </td>
      <?php $sql1 =  "SELECT * FROM eq2page WHERE appn='$vapnid'";
$result11 =  mysqli_query($link, $sql1);

 $scrrow=$result11->fetch_array();
 ?> 
 <?php $sql11 =  "SELECT * FROM crediteq1 WHERE appn='$vapnid'";

$result111 =  mysqli_query($link, $sql11);

 $scrrow1=$result111->fetch_array();
 ?> 
 <?php $sqlx =  "SELECT * FROM postapplied WHERE appid='$vapnid'";

$resultx =  mysqli_query($link, $sqlx);

 $scrrowx=$resultx->fetch_array();
 ?> 
       <td><?php echo $scrrow['Page5'];?> <input type="hidden" name="UID" value=" <?php echo $scrrowx['email']; ?> " readonly/></td>
        <td><?php echo $pp; ?></td>


<input type="hidden" name="back" value="0" readonly/>
 <td> 
             <?php $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input  id="btn1"  type="submit" formaction="scrformpdf2.php"  value="Generate Scrutiny Form" name="edit"></label>
                  <?php } else { echo "Generated";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn1" type="submit"   formaction="scrpdf.php" value="Scrutiny Form" name="previous">
        
                <font size="5"  face="Comic sans MS"  color="red"> <?php } else { echo "Get.pdf";  } ?>  </font>   </td> </tr>
      
        <?php
        
 } 
}
 }
 ?>
 <?php
    


 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 $sql="SELECT * FROM postapplied    where dept='$deptscr'";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 
 $pp=1;
 
 while($row=$result_set->fetch_array())
 {

//echo $sql;
if($row['status']!="N") {

    
          if($row['post'] ==3)  
{   $pp="Assistant Professor PB-3 with Grade pay of Rs.8000";
          
       
    if($row['dept'] =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($row['dept'] =="CHE") $dept=  "Chemical Engineering"; 
    else if($row['dept'] =="CHY") $dept=  "Chemistry"; 
    else if($row['dept'] =="CVE") $dept=  "Civil Engineering"; 
    else if($row['dept'] =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($row['dept'] =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($row['dept'] =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($row['dept'] =="ITE") $dept=  " Information Technology"; 
    else if($row['dept'] =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($row['dept'] =="MLE") $dept=  " Mechanical Engineering"; 
    else if($row['dept'] =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($row['dept'] =="MNE") $dept=  " Mining Engineering"; 
    else if($row['dept'] =="PHY") $dept=  "  Physics"; 
    else if($row['dept'] =="SOM") $dept=  "  School of  Management"; 
     $ap11=$row['appid'];
//	echo $ap11;
 $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];
 
    
?>
        <tr>
<td> <?php echo $inc; $inc=$inc+1;?></td>
            <td><input type="radio" name="viewsrc" value="<?php echo $row['appid']; $vapnid=$row['appid'] ?>" required/> <?php echo $row['appid']; ?> </td>
       <?php $sql1 =  "SELECT * FROM eq3page WHERE appn='$vapnid'";
$result11 =  mysqli_query($link, $sql1);

 $scrrow=$result11->fetch_array();
 ?> 
       <td><?php echo $scrrow['Page5']; ?></td>
        <td><?php echo $pp; ?></td>
 <?php $sql11 =  "SELECT * FROM crediteq1 WHERE appn='$vapnid'";

$result111 =  mysqli_query($link, $sql11);

 $scrrow1=$result111->fetch_array();
 ?> 
 <td> 
             <?php $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input  id="btn1"  type="submit" formaction="scrformpdf3.php"  value="Generate Scrutiny Form" name="edit"></label>
                  <?php } else { echo "Generated";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn1" type="submit"   formaction="scrpdf.php" value="Scrutiny Form" name="previous">
        
                <font size="5"  face="Comic sans MS"  color="red"> <?php } else { echo "Get.pdf";  } ?>  </font>   </td> </tr>
      
        <?php
        
 } }
 }
 ?>
    
      
     
  </table>

  
   
</div>
             </form>
   <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
</body>
    
</html>
