<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
//

$aid=$_SESSION['userSession'] ;

$user_home = new USER();

$xx="";
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    $sql  = "SELECT * FROM  upload WHERE email='$UID'";
	//tmt->execute(array(":emailI=>$email));
	 
   $result =  mysqli_query($link, $sql);
   $row=$result->fetch_array();
 
   $num_rows = mysqli_num_rows($result);
$folder="/opt/lampp/htdocs/web/DOC/$UID";
$up1=$up2=$up3=$up4=$up5=$up6=$up7=$up8=$up9=$up10=$up11=$up12=$up13=$up14=$up15=$up16=$up17=$up18=$up19=$up20="";
$up21=$up22=$up23=$up24=$up25=$up26=$up27="";
 if( $num_rows > 0)
{

if(isset($_POST['up1'])) 
{
$x=1;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up1='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up1= "!!photo uploaded successfully!!" ;}
		 else{$up1="failed! try again ";} // .mysqli_error($link);}
		}

}

if(isset($_POST['up2'])) 
{
$x=2;
$name_array = $_FILES['file_array']['name'];
$tmp_name_array = $_FILES['file_array']['tmp_name'];
$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
$static_final_name=$UID;
$path="$folder/".$static_final_name.$x.".".$extension;
	if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
          {
          $sql="UPDATE upload SET  up2='$path' where email='$UID'";
          //$xx=$sql;
	    if(mysqli_query($link,$sql)){
	     $up2= "!!Sign uploaded successfully!!" ;}
	     else{$up2="failed! try again ";} // .mysqli_error($link);}
	}
}
if(isset($_POST['up3'])) 
{
$x=3;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up3='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up3= "!! uploaded successfully!!" ;}
		else{$up3="failed! try again ".mysqli_error($link);}
		}

}
if(isset($_POST['up4'])) 
{
$x=4;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up4='$path' where email='$UID'";

	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up4= "!! uploaded successfully!!" ;}
		else{$up4="failed! try again ".mysqli_error($link);}
		}

}
if(isset($_POST['up5'])) 
{
$x=5;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up5='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up5= "!! uploaded successfully!!" ;}
		else{$up5="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up6'])) 
{
$x=6;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up6='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up6= "!! uploaded successfully!!" ;}
		else{$up6="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up7'])) 
{
$x=7;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up7='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up7= "!! uploaded successfully!!" ;}
		else{$up7="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up8'])) 
{
$x=8;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up8='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up8= "!! uploaded successfully!!" ;}
		else{$up8="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up9'])) 
{
$x=9;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up9='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up9= "!! uploaded successfully!!" ;}
		else{$up9="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up10'])) 
{
$x=10;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up10='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up10= "!! uploaded successfully!!" ;}
		else{$up10="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up11'])) 
{
$x=11;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up11='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up11= "!! uploaded successfully!!" ;}
		else{$up11="failed! try again ".mysqli_error($link);}
		}


}
if(isset($_POST['up12'])) 
{
$x=12;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up12='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up12= "!! uploaded successfully!!" ;}
		else{$up12="failed! try again ".mysqli_error($link);}
		}


}
if(isset($_POST['up13'])) 
{
$x=13;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up13='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up13= "!! uploaded successfully!!" ;}
		else{$up13="failed! try again ".mysqli_error($link);}
		}


}
if(isset($_POST['up14'])) 
{
$x=14;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up14='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up14= "!! uploaded successfully!!" ;}
		else{$up14="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up15'])) 
{
$x=15;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up15='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up15= "!! uploaded successfully!!" ;}
		else{$up15="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up16'])) 
{
$x=16;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up16='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up16= "!! uploaded successfully!!" ;}
		else{$up16="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up17'])) 
{
$x=17;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up17='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up17= "!! uploaded successfully!!" ;}
		else{$up17="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up18'])) 
{
$x=18;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up18='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up18= "!! uploaded successfully!!" ;}
		else{$up18="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up19'])) 
{
$x=19;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up19='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up19= "!! uploaded successfully!!" ;}
		else{$up19="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up20'])) 
{
$x=20;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up20='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up20= "!! uploaded successfully!!" ;}
		else{$up20="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up21'])) 
{
$x=21;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up21='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up21= "!! uploaded successfully!!" ;}
		else{$up21="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up22'])) 
{
$x=22;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up22='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up22= "!! uploaded successfully!!" ;}
		else{$up22="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up23'])) 
{
$x=23;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up23='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up23= "!! uploaded successfully!!" ;}
		else{$up23="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up24'])) 
{
$x=24;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up24='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up24= "!! uploaded successfully!!" ;}
		else{$up24="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up25'])) 
{
$x=25;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up25='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up25= "!! uploaded successfully!!" ;}
		else{$up25="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up26'])) 
{
$x=26;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up26='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up26= "!! uploaded successfully!!" ;}
		else{$up26="failed! try again ".mysqli_error($link);}
		}

}

if(isset($_POST['up27'])) 
{
$x=27;
	$name_array = $_FILES['file_array']['name'];
	$tmp_name_array = $_FILES['file_array']['tmp_name'];
	$extension = pathinfo($_FILES['file_array']['name'], PATHINFO_EXTENSION);
	$static_final_name=$UID;
	$path="$folder/".$static_final_name.$x.".".$extension;
	    if(move_uploaded_file($_FILES['file_array']['tmp_name'],$path))
                  {
	          $sql="UPDATE upload SET  up27='$path' where email='$UID'";
	         //$xx=$sql;
		if(mysqli_query($link,$sql)){
		$up27= "!! uploaded successfully!!" ;}
		else{$up27="failed! try again ".mysqli_error($link);}
		}

}
}
else
{
   mkdir($folder);
      $sql="insert into upload values ('$UID','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N')";
mysqli_query($link, $sql);
}
 



?>
<html>
    <head>
        <title><?php echo $UID ?></title>
        <!-- Bootstrap -->
        
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script type="text/javascript ">
                                  function validateFileExtension(fld) {
                               input = document.getElementById('fileinput');
                                file = fld.files[0];
                             //  alert(file.size );
                 msg="Invalid image file type (allowed extension are: jpeg,jpg,png."              
	if(/(\.bmp|\.png|\.jpg|\.jpeg)$/i.test(fld.value)) {
            
       if(file.size<=102400)    		
       {//    alert(fld.files[0].fileSize);
               return true; 
       }
       else {
           msg="file size exceed the maximum size "
           
       }
	}
       
        
     
        alert(msg+fld.value);
    fld.form.reset()
    fld.focus();
		
	return false;
        
        
}

function validateFileExtensions(fld) {
                               input = document.getElementById('fileinput');
                                file = fld.files[0];
                             //  alert(file.size );
                 msg="Invalid file type (allowed extension are: .pdf)"              
	if(/(\.pdf|\.pdf|\.pdf|\.pdf)$/i.test(fld.value)) {
            
       if(file.size<=7340032)    		
       {//    alert(fld.files[0].fileSize);
               return true; 
       }
       else {
           msg="file size exceed the maximum size "
           
       }
	}
       
        
     
        alert(msg);
    fld.form.reset()
    fld.focus();
		
	return false;
        
        
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
                    <a class="brand" href="home.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $UID; ?> <i class="caret"></i>
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
                                                              <li><a href="post.php">My Application(s)</a></li>

                                                          <li><a href="up.php">Upload Photo/Documents </a></li>
                                                               <li><a href="view1.php">View/Edit Application</a></li>
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                               <li><a href="jaddd.php">Publication Details</a></li>

                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
             
             <br>
             <br>
             
         <form  method="post" name="oForm"     enctype="multipart/form-data">
             
 
           
            
             
                <font size="3"  face="Comic sans MS" ><b> <?php  if($xx != "") { echo $xx;  echo "<script type='text/javascript'> </script>";  $_SESSION['up']="";} ?></b>  <font><hr >        
   <table>
            <tr>
				
                <td colspan="2"  bgcolor="#ffff-0f" align="left" height="9"> <font size="9"  face="Comic sans MS" > <b>Instructions </b> </font></td>
              </tr>

			   <tr>
					 <td colspan="2" >							</td>
              </tr>
			  <tr>
					 <td colspan="2" align="right">
					 <span style="font-family: Tahoma; font-size: 11px;color:red">If the uploaded Photo / Signature is not loaded in appropriate place, your application is liable to get rejected</span></td>
               </tr>
			   <tr>
					 <td colspan="2" align="left">
					 <span style="font-family: Tahoma; font-size: 11px;color:red">Allowed Photo Size  : 100 KB</span></td>
               </tr>
			    <tr>
					 <td colspan="2" align="left">
					 <span style="font-family: Tahoma; font-size: 11px;color:red">Allowed Signature Size : 100KB</span></td>
               </tr>
			    <tr>
					 <td colspan="2" align="left">
					 <span style="font-family: Tahoma; font-size: 11px;color:red">Allowed PDF's File Size : 7MB</span></td>
               </tr>
			   
			   
			   	
                                 </table>
<hr >   
  


<table>
    <tr>
        <td style="width:1050px" bgcolor="#ffff-0f" align="left" height="10">
          <font size="3"  face="Comic sans MS" > <b> Upload following Documents </b> <font>
 
        </td>
    </tr>    
</table>
        
             <hr>

<table border="1" cellpadding="5" style="border-collapse: separate !important;">
     <tr>
<th width="600px">List of Documents</th> <th width="200px">Upload/View</th> <th width="200px">Modify/Change documents </th></tr>




<tr> <td><span>1. Upload Proof of Date of Birth  :<span >*</span> :</span> </td><td><?php if($row['up3']==""){ ?>  <input  id="fileinput1" tabindex="146" name="file_array" type="file" onchange="return validateFileExtensions(this)" required=""> <button class="btn btn-large " type="submit" name="up3">Upload</button> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. <br/> <span style="font-family: Tahoma; font-size: 6px;color:red"> <?php if($up3!="") { echo $up3; $up3="";} ?> &nbsp; <p> <?php } ?> </td> 
       <td><?php if($row['up3']==""){ echo "---";?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array"  onchange="return validateFileExtensions(this)"  type="file" title=" "/> <button class="btn btn" type="submit" name="up3">Upload</button> <p> <?php } ?> </td>  </tr>

<tr> <td><span>28. Upload Document - in your opinion you can contribute to NITK's
growth.:</span><span ></span> <br/> <span style="font-family: Tahoma; font-size: 6px;color:red"> <?php if($up25!="") { echo $up25; $up25="";}?> </td><td> <?php if($row['up25']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array" onchange="return validateFileExtensions(this)"> <button class="btn btn" type="submit" name="up25">Upload</button> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up25']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array" onchange="return validateFileExtensions(this)"  type="file">  <button class="btn btn" type="submit" name="up25">Upload</button><p> <?php } ?></td> </tr>
    




   

    
  
</table>
<br>
<br>

<table align="center">
    <tr>
        <td colspan="2">
        <input type="submit" class="btn btn" value="Upload file(s)" > <td></tr> 
</table>
         </form>
    </body>
</html>
