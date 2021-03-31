<?php
// Script written by Adam Khoury for the following video exercise:
// http://www.yo
// utube.com/watch?v=7fTsf80RJ5w
//include_once 'dbconfig1.php';

session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$aid=$_SESSION['userSession'] ;

$user_home = new USER();


if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    
    
    
    
  
       
        
  $folder="/opt/lampp/htdocs/web/khybheeappalingam819ew/$UID";

     mkdir($folder);
        
        if(isset($_FILES['file_array'])){
 ?>
<table> 
    <tr><label> List of documents uploaded </label> </tr>
<tr></tr>
<?php
    
     $name_array = $_FILES['file_array']['name'];
     $tmp_name_array = $_FILES['file_array']['tmp_name'];
     // Number of files
     $count_tmp_name_array = count($tmp_name_array);
//echo "$count_tmp_name_array";
     // We define the static final name for uploaded files (in the loop we will add an number to the end)
     $static_final_name = $UID;
//echo $static_final_name;
     
      $sql  = "SELECT * FROM  upload WHERE email='$UID'";
	//tmt->execute(array(":emailI=>$email));
	 
   $result =  mysqli_query($link, $sql);
  // $row=$result1->fetch_array();
   $num_rows = mysqli_num_rows($result);
 if( $num_rows > 0)
{
 //$xx= "uploading file failed !!!!<br>";
     for($i = 0; $i < $count_tmp_name_array; $i++){
          // Get extension of current file
         $x=$i+1;
          $extension = pathinfo($name_array[$i] , PATHINFO_EXTENSION);
         
          // Pay attention to $static_final_name 
          if(move_uploaded_file($tmp_name_array[$i],"$folder/".$static_final_name.$x.".".$extension))
                  {
          $path[$x]= "$folder/".$static_final_name.$x.".".$extension;   
          $sql="UPDATE upload SET  up".$x."= '$path[$x]' where email='$UID'";
          //$xx=$sql;
    if(mysqli_query($link,$sql)){
         $xx= "Documents uploaded successfully:" ;}
else{
$qq="fail" .mysqli_error($link);}

///         $xx=$qq.",";

          } else {
            //$xx= "move_uploaded_file function failed for ".$name_array[$i]."<br>";
          }

     }
 
 
 
}
 
 else {
    

     
     
     
     $xx= "uploading file failed !!!!<br>";
     for($i = 0; $i < $count_tmp_name_array; $i++){
          // Get extension of current file
         $x=$i+1;
          $extension = pathinfo($name_array[$i] , PATHINFO_EXTENSION);
          $path[$i]="";
          // Pay attention to $static_final_name 
          if(move_uploaded_file($tmp_name_array[$i],"$folder/".$static_final_name.$x.".".$extension))
                  {
          $path[$i]= "$folder/".$static_final_name.$x.".".$extension;   
         $xx= "Photo/Documents uploaded successfully:" ;

          } else {
            //$xx= "move_uploaded_file function failed for ".$name_array[$i]."<br>";
          }

     }
     
  //   echo $i;
 $sep="','";
      $sql = implode($sep, $path);
      $sql="insert into upload values ('$UID','".$sql."')";
      echo $sql;
     // $result1 =  mysqli_query($link, $sql);
if(mysqli_query($link, $sql)){

                echo $sql;
               // $xx= "Application Saved successfully. To view application check in view application menu and Application No:" .$nappn;


            } else{
                echo $i."error".mysqli_error($link);
               // $xx= " ERROR: Could not able to Save. Try again in View Application. Application No:" .$nappn;

            }

     
     
}
}
?>

        
<?php
   
  $_SESSION['up']=$xx;  header("Location:up.php");

?>
