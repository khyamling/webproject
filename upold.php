<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
//

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
                                                               
 <li><a href="jaddd.php">Publication Details</a></li>
<li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
             
             <br>
             <br>
             
         <form  method="post" name="oForm"     enctype="multipart/form-data">
             
 
           
            
             
                <font size="3"  face="Comic sans MS" ><b> <?php  if(isset($_SESSION['up'])) { $xx=$_SESSION['up']; echo $xx; echo "<script type='text/javascript'>
if($xx) alert($xx);
</script>";  $_SESSION['up']="";} ?></b>  <font>

<hr >        
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
     <tr><th width="600px">List of Documents</th> <th width="200px">Upload/View</th> <th width="200px">Modify/Change documents </th></tr>
     <tr> <td><span>Upload Photo<span >*</span> :</span> </td><td> <?php if($row['up1']==""){ ?> <input  id="fileinput" tabindex="145" name="file_array[]"   type="file" onchange="return validateFileExtension(this)" required="" ><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br>  <p> <?php } ?></td>
     <td> <?php if($row['up1']==""){ echo "---";?> <?php } else { ?>  <input  id="fileinput" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtension(this)" > <p> <?php } ?></td> 
     </tr>
   <tr> <td><span>Upload Signature<span >*</span> :</span></td><td><?php if($row['up2']==""){ ?>  <input  id="fileinput1" tabindex="146" name="file_array[]" type="file" onchange="return validateFileExtension(this)" required=""><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
       <td><?php if($row['up2']==""){ echo "---";?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"  onchange="return validateFileExtension(this)"  type="file" title=" "/> <p> <?php } ?> </td>  </tr>
    
   <tr> <td><span>1. Upload Proof of Date of Birth  :<span >*</span> :</span></td><td><?php if($row['up2']==""){ ?>  <input  id="fileinput1" tabindex="146" name="file_array[]" type="file" onchange="return validateFileExtensions(this)" required=""><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
       <td><?php if($row['up2']==""){ echo "---";?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"  onchange="return validateFileExtensions(this)"  type="file" title=" "/> <p> <?php } ?> </td>  </tr>
    <tr> <td><span>1.d  Upload Category Certificate (SC/ST/OBC):</span><span ></span> </td><td> <?php if($row['up4']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p><?php } ?> </td>
     <td> <?php if($row['up4']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p><?php } ?> </td> </tr>
   <tr> <td><span>1.d  Upload PWD Certificate:</span><span ></span> </td><td> <?php if($row['up5']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p><?php } ?> </td>
     <td> <?php if($row['up5']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p><?php } ?> </td> </tr>
    <tr> <td><span>3. Upload Salary Certificate/pay slip:</span><span ></span> </td><td> <?php if($row['up6']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br><p> <?php } ?> </td>
    <td> <?php if($row['up6']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
     <tr> <td><span>6.1 Upload SSLC/10th Std/Equivalent Certificate :</span><span >*</span> </td><td> <?php if($row['up7']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" required=""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br><p> <?php } ?></td>
    <td> <?php if($row['up7']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>6.2 Upload PUC/12th Std/Equivalent Certificate :</span><span >*</span> </td><td> <?php if($row['up8']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)"required=""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td> 
     <td> <?php if($row['up8']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>6.3 Upload Bachelor Degree Marks Cards and Certificate :</span><span >*</span> </td><td> <?php if($row['up9']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" required=""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <?php } ?></td> 
     <td> <?php if($row['up9']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>6.4 Upload Masters/PG Degree Marks Cards and Certificate :</span><span ></span> </td><td> <?php if($row['up10']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td> 
     <td> <?php if($row['up10']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td>
     </tr>
     <tr> <td><span>7. Upload PhD Degree Certificate :</span><span >*</span> </td><td> <?php if($row['up11']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" required=""> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded.  <p> <?php } ?></td>
     <td> <?php if($row['up11']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
     <tr> <td><span>8. Upload Postdoctoral Degree Certificate :</span><span ></span> </td><td> <?php if($row['up12']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)"  > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;<p> <?php } ?></td>
     <td> <?php if($row['up12']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
    <tr> <td><span>10. Experience Certificates :</span><span ></span> </td><td> <?php if($row['up13']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td> 
    <td> <?php if($row['up13']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span> 14. Upload Proof of completed PhD guidance :</span><span ></span> </td><td> <?php if($row['up14']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up14']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
        
    <tr> <td><span>15. Publication Details (List and reprints) :</span><span ></span> </td><td> <?php if($row['up15']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up15']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
 <tr> <td><span>17. Upload Patent supporting Documents :</span><span ></span> </td><td> <?php if($row['up16']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up16']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
 <tr> <td><span>18, 19.Upload Sponsored and Consultancy projects supporting Documents:</span><span ></span> </td><td> <?php if($row['up17']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td>
   <td> <?php if($row['up17']==""){ ?> <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
 
 <tr> <td><span>20. Upload  Professional Training Received /Summer /Winter Schools attended Documents :</span><span ></span> </td><td> <?php if($row['up18']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"  onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td> 
   <td> <?php if($row['up18']==""){ ?>  <?php }   else { ?>   <input  id="fileinput1" type="file" name="file_array[]"  onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>21. Upload Conferences/Seminars/Workshops attended Documents (Last 4 years ) :</span><span ></span> </td><td> <?php if($row['up19']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td>
   <td> <?php if($row['up19']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
      <tr> <td><span>22.Upload Industry Interaction Documents:</span><span ></span> </td><td> <?php if($row['up20']==""){ ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)">  <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td>  
    <td> <?php if($row['up20']==""){ ?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"   type="file"> <p> <?php } ?> </td> </tr>

     <tr> <td><span>23.Upload  Workshop/Conferences/Short term Courses organized supporting Documents :</span><span ></span> </td><td> <?php if($row['up21']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
<td> <?php if($row['up21']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
    <tr> <td><span>24. Upload supporting Documents for Administrative/Curriculum/Lab Development/Student Welfare/Professional and Outreach Activities :</span><span ></span> </td><td> <?php if($row['up22']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up22']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
    
     <tr> <td><span>25. Awards and Recognitions :</span><span ></span> </td><td> <?php if($row['up23']==""){ ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)">  <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
    <td> <?php if($row['up23']==""){ ?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"   type="file"> <p> <?php } ?> </td> </tr>

<tr> <td><span>27. Testimonial :</span><span ></span> </td><td> <?php if($row['up24']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up24']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
<tr> <td><span>28. Upload Document - in your opinion you can contribute to NITK's
growth.:</span><span ></span> </td><td> <?php if($row['up25']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up25']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
    
    <tr> <td><span> * No Objection Certificate <b style="font-size:5pt">(For Employed Persons only )</b>:</span><span ></span> </td><td> <?php if($row['up26']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up26']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
    
     
    
 <tr> <td><span> Upload any other relevant Documents to support your candidature:</span><span ></span> </td><td> <?php if($row['up27']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up27']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
    
  
</table>
<br>
<br>

<table align="center">
    <tr>
        <td colspan="2">
        <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > <td></tr> 
</table>
         </form>
    </body>
</html>
