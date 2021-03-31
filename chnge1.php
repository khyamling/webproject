

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
  $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
$email=$UID;
$o=  ($_POST['opwd1']);
$n1=$_POST['pwd1'];
$n2=$_POST['pwd2'];
if($n1==$n2)
{
    
$o=  md5($o);



$sql =  "SELECT * FROM tbl_users WHERE userEmail='$UID' and userPass='$o'";

$result =  mysqli_query($link, $sql);
echo mysqli_error($link);
$num_rows = mysqli_num_rows($result);
echo $num_rows.$o;
if( $num_rows > 0)
{   
            $password=md5($n1);
                    $sql= "UPDATE tbl_users SET userPass='$password' WHERE userEmail='$UID'";
		if(mysqli_query($link, $sql))
                {
                    $mm="Reset Password Success!! try Login Now";
                    $_SESSION['msg']=$mm;
                    $newURL="home.php"; header('Location: '.$newURL);
                }
 else {
        $mm="";
                 $_SESSION['msg']=$mm;
       }
                
}
else { 
    echo mysqli_error($link);
    $mm="Reset Password Failed! old password is wrong!";
                    $_SESSION['smsg']=$mm;   $newURL="chnge.php"; header('Location: '.$newURL);

}

}
        

?>


