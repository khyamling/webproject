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
<a href="#top"> Click here to generate XSL sheet list of applicant after credit verifications</a>
             <br>
             <br>

                 <div width="1800px" >
                      <p align="center" p>

</div>
  <table align="center"  style="width:1280px; border-collapse: separate !important;">

            <tr>
				<?php  if($deptscr =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($deptscr=="CHE") $dept=  "Chemical Engineering"; 
    else if($deptscr =="CHY") $dept=  "Chemistry"; 
    else if($deptscr =="CVE") $dept=  "Civil Engineering"; 
    else if($deptscr =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($deptscr =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($deptscr =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($deptscr =="ITE") $dept=  " Information Technology"; 
    else if($deptscr =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($deptscr =="MLE") $dept=  " Mechanical Engineering"; 
    else if($deptscr =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($deptscr =="MNE") $dept=  " Mining Engineering"; 
    else if($deptscr =="PHY") $dept=  "  Physics"; 
    else if($deptscr =="SOM") $dept=  "  School of  Management"; ?>
                <td align="center" colspan="10"  style="color:#fdfbfb" bgcolor="#00a2d1" align="left" height="6"> <label></p><b>List of Applications ( <?php echo $dept; ?> )</b></label></td>
              </tr>

   
    

  
    <tr>
<th> Sr.<br>No.</th> 
        <th> Application No.</th> 
    <th style="width:10px;">Name</th> 
        <th>Post Applied </th>  <th> Total <br>  Credits</th> 

 <th>Verified <br> credit <br> points </th> 
  <th>Validate, Verify & Check Credit  </th> 
 <th> Print Verified  <br>  Credits<br>/Scrutiny Form </th> 
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
 $sql1="SELECT * FROM newrules1src  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];

  $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1sc=mysqli_query($link,$sql1);
$row1sc=$result_set1sc->fetch_array();
  $srcstatus1= $row1sc['status'];
 
    
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
       <td><?php echo $scrrow['Page5'];  ?> <input type="hidden" name="UID" value=" <?php echo $scrrowx['email']; ?>  " readonly/></td>
        <td><?php echo $pp; ?></td>
   <?php $sql11 =  "SELECT * FROM crediteq1 WHERE appn='$vapnid'";

$result111 =  mysqli_query($link, $sql11);

 $scrrow1=$result111->fetch_array();
 $sql =  "SELECT * FROM vcrediteq1 WHERE appn='$vapnid'";
$result6 =  mysqli_query($link, $sql);
if(($row6=$result6->fetch_array()))
{
$vcredit1=$row6['credit1'];
$xxxx=1;
}
else
{
$xxxx=0;
}

 ?> 
<td> <input type="hidden" name="usercredit" value="   <?php echo $scrrow1['credit1']; ?> " readonly/> <?php echo $scrrow1['credit1']; ?>  </td>
       
       <td> <?php if($xxxx==1) {echo $vcredit1;} else {echo "Credits Not Verified";} ?> </td> <td> 
             <?php  $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input style="  font-size: 10px;"  id="btn4"  type="submit" formaction="creditverify1.php"  value="Verify Credits" name="edit"></label>
                  <?php } else { echo "Verified";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn4" type="submit"   formaction="Verifypdf.php" value="View credit" name="previous"> 

                <font size="5"  face="Comic sans MS"  color="red"> <?php }  ?>  </font>   
        <?php $status=""; $N="Y";if($srcstatus1==$N) {  ?>    <input  id="btn4"  type="submit" formaction="scrpdf.php"  value="View Scrutiny" name="edit"></label>
                  <?php } else { echo " Not Generated";  } ?>  </font>   </td>
                 </tr>
      
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
 $sql1="SELECT * FROM newrules2src  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];
    $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1sc=mysqli_query($link,$sql1);
$row1sc=$result_set1sc->fetch_array();
  $srcstatus1= $row1sc['status'];

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

 $sql =  "SELECT * FROM vcrediteq1 WHERE appn='$vapnid'";
$result6 =  mysqli_query($link, $sql);
if(($row6=$result6->fetch_array()))
{
$vcredit1=$row6['credit1'];
$xxxx=1;
}
else
{
$xxxx=0;
}
 ?> 
       <td><?php echo $scrrow['Page5'];?> <input type="hidden" name="UID" value=" <?php echo $scrrowx['email']; ?> " readonly/></td>
        <td><?php echo $pp; ?></td>


<input type="hidden" name="back" value="0" readonly/>
<input type="hidden" name="eligible" value=" " readonly/>
<input type="hidden" name="remark" value=" " readonly/>
<td><input type="hidden" name="usercredit" value="   <?php echo $scrrow1['credit1']; ?> " readonly/>  <?php echo $scrrow1['credit1']; ?> </td>
     
        <td> <?php if($xxxx==1) {echo $vcredit1;} else {echo "Credits Not Verified";} ?> </td> <td> 
             <?php $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input  id="btn4"  type="submit" formaction="creditverify2.php"  value="Verify Credits" name="edit"></label>   <font size="5"  face="Comic sans MS"  color="red">             <?php } else { echo "Verified";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn4" type="submit"   formaction="Verifypdf.php" value="View credit" name="previous">
       
        
                <font size="5"  face="Comic sans MS"  color="red"> <?php }  ?>  </font>   <br>      
        <?php $status=""; $N="Y";if($srcstatus1==$N) {  ?>    <input  id="btn4"  type="submit" formaction="scrpdf.php"  value="View Scrutiny" name="edit"></label>
                  <?php } else { echo " Not Generated";  } ?>  </font>   </td> </tr>
      
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
 $sql1="SELECT * FROM newrules3src  where appn='$ap11' ";
//echo $sql1;
 $result_set1=mysqli_query($link,$sql1);
$row1=$result_set1->fetch_array();
  $srcstatus= $row1['status'];
    $sql1="SELECT * FROM scrform  where appn='$ap11' ";
//echo $sql1;
 $result_set1sc=mysqli_query($link,$sql1);
$row1sc=$result_set1sc->fetch_array();
  $srcstatus1= $row1sc['status'];
 
    
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

  $sql =  "SELECT * FROM vcrediteq1 WHERE appn='$vapnid'";
$result6 =  mysqli_query($link, $sql);
if(($row6=$result6->fetch_array()))
{
$vcredit1=$row6['credit1'];
$xxxx=1;
}
else
{
$xxxx=0;
}
 ?> 
<td><input type="hidden" name="usercredit" value="<?php echo $scrrow1['credit1']; ?> " readonly/> <?php echo $scrrow1['credit1']; ?> </td>
       
 <td> <?php if($xxxx==1) {echo $vcredit1;} else {echo "Credits Not Verified";} ?> </td>
          <td> 
             <?php $status=""; $N="Y";if($srcstatus!=$N) {  ?>    <input  id="btn4"  type="submit" formaction="creditverify3.php"  value="Verify Credits" name="edit"></label>
                  <?php } else { echo "Verified";  } ?>  </font>   </td>    
        
        <td> <?php $status=""; $N="Y";if($srcstatus==$N) {  ?> <input id="btn4" type="submit"   formaction="Verifypdf.php" value="View credit" name="previous">
        <br>
                       <font size="5"  face="Comic sans MS"  color="red"> <?php } ?>  </font> 
    
        <?php $status=""; $N="Y";if($srcstatus1==$N) {  ?>    <input  id="btn4"  type="submit" formaction="scrpdf.php"  value="View Scrutiny" name="edit"></label>
                  <?php } else { echo " Not Generated";  } ?>  </font>   </td>
                       </tr>
      
        <?php
        
 } }
 }
 ?>
    
      
     
  </table>
  
   
</div>
             </form>

 <form class="form-signin" method="post" action="sprint.php">
       <font size="5"  face="Comic sans MS"  color="red"> <p> <?php  if(isset($xx)) { echo $xx; };
       $_SESSION['msg']="";?> </p></font>
       <hr>
<br>
             <br>

                 <div width="1800px" >
                      <p align="center" p>
<table>
  <b id="top">Generate XSL sheet list of applicant after credit verifications </b>
       <hr>

 <br>
<table> <tr>
        <td>
    Department
       </td>
        <td>
  <!--         <select name="s5">
    <option> - Department - </option>
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
</select>-->
<?php 
 if($deptscr =="AMH") { $dept1="AMH";
                        $dept2="Applied Mechanics and Hydraulics"; }
    else if($deptscr =="CHE"){ $dept1=  "CHE"; 
                             $dept2="Chemical Engineering"; }
    else if($deptscr =="CHY"){ $dept1=  "CHY";
                              $dept2="Chemistry"; }
    else if($deptscr =="CVE"){ $dept1=  "CVE"; 
                               $dept2="Civil Engineering"; }
    else if($deptscr =="CSE"){ $dept1=  "CSE"; 
                             $dept2="Computer Science & Engineering"; }
    else if($deptscr =="EEE"){ $dept1=  "EEE"; 
                              $dept2="Electrical and Electronics Engineering"; }
    else if($deptscr =="ECE"){ $dept1=  "ECE"; 
                              $dept2="Electronics and Communication Engineering"; }
    else if($deptscr =="ITE") { $dept1=  "ITE"; 
                              $dept2="Information Technology"; }
    else if($deptscr =="MCS") { $dept1=  "MCS"; 
                              $dept2="Mathematical And Computational Sciences"; }
    else if($deptscr =="MLE") { $dept1=  "MLE"; 
                              $dept2="Mechanical Engineering"; }
    else if($deptscr =="MME") { $dept1=  "MME"; 
                                 $dept2="Metallurgical and Materials Engineering"; }
    else if($deptscr =="MNE") { $dept1=  "MNE";
                     $dept2="Mining Engineering"; }
    else if($deptscr =="PHY"){ $dept1=  "PHY"; 
                             $dept2="Physics"; }
    else if($deptscr =="SOM") { $dept1=  "SOM"; 
                              $dept2="School of  Management"; }
?>
<input type="hidden" name="s5" value="<?php echo $dept1; ?>" required readonly/>
<input type="text" name="s51" value="<?php echo $dept2; ?>" required readonly/>    
</td>
    </tr>        
    
 
 
<tr>
         <td >
        Post
         </td>
         <td>
          <select id="json-one" name="s51" required>
              <option value="" > Select Applied post</option>
                           <option value="1">Assistant Professor(On Contract) Grade II, Level-10 (7CPC) with AGP 6000</option>
                    <option  value="2" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract) Grade II, Level-11 (7CPC) with AGP 7000</option>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor - Grade I, Level 12 (7CPC) with AGP 8000</option> 
                     <!--     <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option> -->
                         <!--   <option value="6" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option>  -->
                        </select>
        </td>
                  </tr>
                  <tr> <td></td><td>
                                   <button class="btn-toolbar" type="submit" name="search5">Search</button>
                                   </td></tr> </table>
</font>
</table>
<hr>

</form>


   <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
</body>
    
</html>
