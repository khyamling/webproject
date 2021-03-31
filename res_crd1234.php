<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        

    }
    

if(isset($_POST['btn-login']))
{
    $post=trim($_POST['s51']);
    $nappn = trim($_POST['txtapn']);
  $upass = trim($_POST['txtapnpass']);
$set="N";
 $msg="";
  $msg1="";
$PASS="nitkdept123";
if( $upass==$PASS) 
{


echo $msg;
$sql="UPDATE scrform  SET status='$set' WHERE appn='$nappn'";
 if(mysqli_query($link,$sql))
    {
$msg1= "Scrutiny form disabled";
  }
else
{
 echo "fail to update".$nappn;
 
}

  if($post==1)
  {
$sql="UPDATE newrules1src  SET status='$set' WHERE appn='$nappn'";
    if(mysqli_query($link,$sql)==1)
    {
 $msg= "Credits form disabled";
  }

else{
echo "fail to update".$nappn;}
}
 if($post==2)
  {
$sql="UPDATE newrules2src  SET status='$set' WHERE appn='$nappn'";
     if(mysqli_query($link,$sql)==1)
    {
 $msg= "Credits form disabled";
  }

else{
echo "fail to update".$nappn;}
}


 if($post==3)
  {
$sql="UPDATE newrules3src  SET status='$set' WHERE appn='$nappn'";
   if(mysqli_query($link,$sql)==1)
    {
 $msg= "Credits form disabled";
  }

else{
echo "fail to update".$nappn;}

}

}
else
{
  $msg="wrong Password!!";
}

echo $msg." and ". $msg1." for :".$nappn;
  

      //$stmt = $user_login->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
  //$stmt->execute(array(":email_id"=>$email));
  //$row = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>
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
  <body id="login"> <a href="res_crd1234.php"> Click here to go back</a>   </body> </html> 
 <?php


}
else
{
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
        <h2 class="form-signin-heading">Disable Credit-submit</h2><hr />
         <select id="json-one" name="s51" required>
              <option value="" > Select Applied post</option>
                           <option value="1">Assistant Professor(On Contract) Grade II, Level-10 (7CPC) with AGP 6000</option>
                    <option  value="2" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract) Grade II, Level-11 (7CPC) with AGP 7000</option>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor - Grade I, Level 12 (7CPC) with AGP 8000</option> 
                     <!--     <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option> -->
                         <!--   <option value="6" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option>  -->
                        </select>
          <input type="text" class="input-block-level" placeholder="Application No" name="txtapn" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtapnpass" required />
         <button class="btn btn-large " type="submit" name="btn-login">Reset</button>
        
      </form>
 

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
}
?>
