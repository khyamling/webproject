<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    $url=$_POST['Page2'];
    $pos=$_POST['Page4'];
    $RND=$_POST['indst'];
        $_SESSION['br']=$pos;
        $_SESSION['rnd1']=$RND;
$_SESSION['pos']=$url;
$ed=$_POST['win'];
$edet=$_POST['win1'];
 $sql  = "SELECT * FROM  earlier WHERE email='$UID' and post='$url' and  dept='$pos'   ";

$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
echo "$num_rows Rows\n";
	if( $num_rows > 0)
        { 
            echo "wer";
        }
        else{
    
$sql="insert into earlier values('$UID','$url','$pos','$ed','$edet')";
  
           mysqli_query($link, $sql);
        }   
if($url=="1")
{
    if($RND=="Y")
    {
        $url="indedi1.php";
    }
    else
            $url="newruleeq1.php";
}
else if($url=="2")
{
    if($RND=="Y")
    {
        $url="indedi2.php";
    }
    else
        
    $url="newruleeq2.php";
}
else if($url=="3")
{
    if($RND=="Y")
    {
        $url="indedi3.php";
    }
    else
    $url="newruleeq3.php";
}
else if($url=="4")
{
    if($RND=="Y")
    {
        $url="post.php";
       header("Location: $url");
    }
    else
    $url="newruleeq4.php";
}
else if($url=="5")
{
    if($RND=="Y")
    {
        $url="post.php";
        header("Location: $url");
    }
    else
    $url="newruleeq5.php";
}
else if($url=="6")
{
    if($RND=="Y")
    {
        $url="post.php";
       header("Location: $url");
    }
    else
    $url="newruleeq6.php";
}
else
{
    $url="home.php";
}  

$xx="Application for this post already exist. Kindly check in View Application ";
?>

<input type="text" name="msg" value="<?php echo $xx ?>"   />
<?php
echo $xx ;
$_SESSION['msg']=$xx;
header("Location: $url");
   

?>
