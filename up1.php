<?php
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
    $sql  = "SELECT * FROM  upload WHERE email='$UID'";
	//tmt->execute(array(":emailI=>$email));
	 
   $result =  mysqli_query($link, $sql);
   $row=$result->fetch_array();
   $num_rows = mysqli_num_rows($result);
 if( $num_rows > 0)
{
     
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Validate image on upload @ BitRepository.com</TITLE>
<META NAME="Author" CONTENT="Bit Repository">
<META NAME="Keywords" CONTENT="validate, extensions, file, javascript">
<META NAME="Description" CONTENT="A JavaScript Extension Validator for Images">
<SCRIPT LANGUAGE="JavaScript">

  jQuery("input[type=file]").each(function() {
        jQuery(this).rules("add", {
            accept: "png|jpe?g",
            messages: {
                accept: "Only jpeg, jpg or png images"
            }
        });
    });
    function Validate() {
       var files = document.getElementsByName('file_array[]');
       var files = document.getElementsByName('file_array1[]');
       var _validFileExtensions = [".jpg", ".jpeg", ".pdf"];  
       
for (var i = 0, j = files.length; i < j; i++) {
             var sFileName =  files[i].value;
         
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
          }
    }
</SCRIPT>
</HEAD>
<BODY>
<center>
<form name="form"  enctype="multipart/form-data" method="post" enctype="multipart/form-data"  method="post" onSubmit="return Validate();">
<h2>Validate image on upload</h2>
<br />
<table border="1" cellpadding="5">
    
<tr> <td><span>6. Upload  Professional Training Received / Summer / Winter Schools attended Documents :</span><span ></span> </td><td> <?php if($row['up8']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <p> <?php } ?> </td> </tr>
    <tr> <td><span>7. Upload  Conferences/Seminars / Workshops attended Documents (Last 4 year's ) :</span><span ></span> </td><td> <?php if($row['up9']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <p> <?php } ?></td> </tr>
    <tr> <td><span>8. Sponsored and consultancy projects :</span><span ></span> </td><td> <?php if($row['up10']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <p> <?php } ?> </td> </tr>
    <tr> <td><span>9. Workshop /Conferences /Short term Courses organized :</span><span ></span> </td><td> <?php if($row['up11']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <p> <?php } ?> </td> </tr>
    <tr> <td><span>10. Publication and patents details (List and reprints) :</span><span ></span> </td><td> <?php if($row['up12']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <p> <?php } ?> </td> </tr>
    <tr> <td><span>11. Award and recognitions :</span><span ></span> </td><td> <?php if($row['up13']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"   name="file_array[] onchange="return validateFileExtension1(this)""   type="file"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>12. Testimonial :</span><span ></span> </td><td> <?php if($row['up14']==""){ ?>  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)""> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"   name="file_array[] onchange="return validateFileExtension1(this)""   type="file"> <p> <?php } ?></td> </tr>

    
    
</table>
<table>
    <tr>
        <td>
        <input type="submit" value="Upload all files" > <td></tr> 
</table>
        
</form>
     
<html>
<head>
<script type="text/javascript">
<!--//
function validateFileExtension(fld) {
	if(!/(\.bmp|\.png|\.jpg|\.jpeg)$/i.test(fld.value)) {
		alert("Invalid image file type (allowed extension are: jpeg,jpg,png.");
		fld.form.reset();
		fld.focus();
		return false;
	}
	return true;
}
function validateFileExtension1(fld) {
    //alert(fld);
	if(!/(\.pdf|\.pdf|\.pdf|\.pdf)$/i.test(fld.value)) {
		alert("Invalid pdf file type." +fld.value);

		fld.focus();
		return false;
	}
	return true;
}
//-->
</script>
</head>
<body>
<form 
 onsubmit="return validateFileExtension(this.fileField)">
<p>
    <table border="1" cellpadding="5">
    
    <tr> <td><span>Upload Photo<span >*</span> :</span> </td><td> <?php if($row['up1']==""){ ?> <input id="btn btn-success fileinput-button" tabindex="145" name="file_array[]"   type="file" onchange="return validateFileExtension(this)" ><?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtension(this)"> <p> <?php } ?></td> </tr>
   <tr> <td><span>Upload Signature<span >*</span> :</span></td><td><?php if($row['up2']==""){ ?>  <input tabindex="146" name="file_array[]" type="file" onchange="return validateFileExtension(this)"><?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"  name="file_array[]"  onchange="return validateFileExtension(this)"  type="file"> <p> <?php } ?> </td>  </tr> 
    <tr> <td><span>1. Upload Proof of Date of Birth  :</span><span >*</span> </td><td><?php if($row['up3']==""){ ?><input type="file" name="file_array[]" onchange="return validateFileExtension1(this)"><?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtension1(this)"> <p><?php } ?> </td> </tr>
     <tr> <td><span>2. Upload Category certificate (SC/ST/OBC/PWD):</span><span ></span> </td><td> <?php if($row['up4']==""){ ?>  <input type="file" name="file_array[]" onchange="return validateFileExtension1(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"  name="file_array[]"   type="file"onchange="return validateFileExtension1(this)"> <p><?php } ?> </td> </tr>
    <tr> <td><span>3. Upload Salary certificate/pay slip:</span><span >*</span> </td><td> <?php if($row['up5']==""){ ?>  <input type="file" name="file_array[]" onchange="return validateFileExtension1(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
     <tr> <td><span>4. Upload Academic Career Record Documents (starting with SSLC to Ph.D) :</span><span >*</span> </td><td> <?php if($row['up6']==""){ ?>  <input type="file" name="file_array[]"onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br> To change  <input type="file" name="file_array[]"onchange="return validateFileExtension1(this)"> <p> <?php } ?></td> </tr>
    <tr> <td><span>5. Experience certificates :</span><span ></span> </td><td> <?php if($row['up7']==""){ ?>  <input type="file" name="file_array[]" onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br> To change  <input type="file" name="file_array[]" onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>6. Upload  Professional Training Received / Summer / Winter Schools attended Documents :</span><span ></span> </td><td> <?php if($row['up8']==""){ ?>  <input type="file" name="file_array[]"  onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br> To change  <input type="file" name="file_array[]"  onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>7. Upload  Conferences/Seminars / Workshops attended Documents (Last 4 year's ) :</span><span ></span> </td><td> <?php if($row['up9']==""){ ?>  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <p> <?php } ?></td> </tr>
     <tr> <td><span>8. Sponsored and consultancy projects :</span><span ></span> </td><td> <?php if($row['up10']==""){ ?>  <input type="file"  name="file_array[] " onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[] onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>9. Workshop /Conferences /Short term Courses organized :</span><span ></span> </td><td> <?php if($row['up11']==""){ ?>  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>10. Publication and patents details (List and reprints) :</span><span ></span> </td><td> <?php if($row['up12']==""){ ?>  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>11. Award and recognitions :</span><span ></span> </td><td> <?php if($row['up13']==""){ ?> <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)">  <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtension1(this)"   type="file"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>12. Testimonial :</span><span ></span> </td><td> <?php if($row['up14']==""){ ?>  <input type="file"  name="file_array[]" onchange="return validateFileExtension1(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="red">File Uploaded. &nbsp; <br> To change  <input tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtension1(this)"  type="file"> <p> <?php } ?></td> </tr>

<input type="file" name="fileField"
 onchange="return validateFileExtension(this)">
<input type="submit" value="Submit">
</p>
</form>
</body>
</html>
</center>
</BODY>
</HTML>
