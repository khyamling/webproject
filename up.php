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
            
       if(file.size<=31311552)    		
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
<li><a href="jaddd.php">Conference Papers</a></li> 
                                                                      <li><a href="cfaddd.php">Subjects Taught</a></li> 
                                                               <li><a href="view1.php">View/Edit Application</a></li>
                                                               
 <!--<li><a href="jaddd.php">Publication Details</a></li> -->
<li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
             
             <br>
             <br>
             
         <form  method="post" name="oForm"     enctype="multipart/form-data">
             
 
           
            
             
                
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
<center> <p style="text-align: center;font-size:20pt !important;"> <font size="3" color="green" face="Comic sans MS" ><b> <?php  if(isset($_SESSION['up'])) { $xx=$_SESSION['up']; echo $xx; echo "<script type='text/javascript'> 
if($xx) alert($xx);
    </script>";  $_SESSION['up']="";} ?></b>  <font> </p> </center>
             <br />
             <br />
<table border="1" cellpadding="5" style="border-collapse: separate !important;">
     <tr><th width="600px">List of Documents</th> <th width="200px">Upload/View</th> <th width="200px">Modify/Change documents </th></tr>
     <tr> <td><span>Upload Photo<span >*</span> :</span> </td><td> <?php if($row['up1']==""){ ?> <input  id="fileinput" tabindex="145" name="file_array[]"   type="file" onchange="return validateFileExtension(this)" required="" ><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br>  <p> <?php } ?></td>
     <td> <?php if($row['up1']==""){ echo "---";?> <?php } else { ?>  <input  id="fileinput" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtension(this)" > <p> <?php } ?></td> 
     </tr>
   <tr> <td><span>Upload Signature<span >*</span> :</span></td><td><?php if($row['up2']==""){ ?>  <input  id="fileinput1" tabindex="146" name="file_array[]" type="file" onchange="return validateFileExtension(this)" required=""><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
       <td><?php if($row['up2']==""){ echo "---";?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"  onchange="return validateFileExtension(this)"  type="file" title=" "/> <p> <?php } ?> </td>  </tr>
   
 </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
               <table border="1" cellpadding="5" style="border-collapse: separate !important;">
   
   <tr> <td><span>Upload Proof of Date of Birth  :<span ></span> :</span></td><td><?php if($row['up3']==""){ ?>  <input  id="fileinput1" tabindex="146" name="file_array[]" type="file" onchange="return validateFileExtensions(this)" ><?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
       <td><?php if($row['up3']==""){ echo "---";?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"  onchange="return validateFileExtensions(this)"  type="file" title=" "/> <p> <?php } ?> </td>  </tr>
   
   
    <tr> <td><span> Upload SSLC/10th Std/Equivalent Certificate :</span><span ></span> </td><td> <?php if($row['up4']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br><p> <?php } ?></td>
    <td> <?php if($row['up4']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>Upload PUC/12th Std/Equivalent Certificate :</span><span ></span> </td><td> <?php if($row['up5']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td> 
     <td> <?php if($row['up5']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>Upload Bachelor Degree Marks Cards and Certificate :</span><span ></span> </td><td> <?php if($row['up6']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <?php } ?></td> 
     <td> <?php if($row['up6']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> 
     </tr>
     <tr> <td><span>Upload Masters/PG Degree Marks Cards and Certificate :</span><span ></span> </td><td> <?php if($row['up7']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)" > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td> 
     <td> <?php if($row['up7']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td>
     </tr>
      <tr> <td><span>Upload PhD Degree Certificate :</span><span ></span> </td><td> <?php if($row['up8']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded.  <p> <?php } ?></td>
     <td> <?php if($row['up8']==""){ ?>  <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
   
     </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
               <table border="1" cellpadding="5" style="border-collapse: separate !important;">
           <tr> <td><span>Upload Category Certificate (SC/ST/OBC):</span><span ></span> </td><td> <?php if($row['up9']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p><?php } ?> </td>
     <td> <?php if($row['up9']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p><?php } ?> </td> </tr>
   <tr> <td><span>Upload PWD Certificate:</span><span ></span> </td><td> <?php if($row['up10']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p><?php } ?> </td>
     <td> <?php if($row['up10']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p><?php } ?> </td> </tr>
    <tr> <td><span>Upload Salary Certificate/pay slip:</span><span ></span> </td><td> <?php if($row['up11']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <br><p> <?php } ?> </td>
    <td> <?php if($row['up11']==""){ ?>  <?php } else { ?>  <input  id="fileinput1" tabindex="145" id="choose-file"  name="file_array[]"   type="file" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
    
    </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
           
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">
   
      <tr> <td><span>Upload Postdoctoral Degree Certificate :</span><span ></span> </td><td> <?php if($row['up12']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)"  > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;<p> <?php } ?></td>
     <td> <?php if($row['up12']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
    <tr> <td><span>Experience Certificates :</span><span ></span> </td><td> <?php if($row['up13']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td> 
    <td> <?php if($row['up13']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>


 <tr> <td><span> 3(a). Upload proof of completed PhD guidance as Lone/Head Supervisor (OM provided by the Institute):</span><span ></span> </td><td> <?php if($row['up14']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up14']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>


    <tr> <td><span> 3(b)(c). Upload proof of completed PhD guidance as Co-Supervisor (OM provided by the Institute):</span><span ></span> </td><td> <?php if($row['up15']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up15']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>

        </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">
    
 <tr> <td><span>1(a). Upload Proof of External sponsored R & D Projects completed or ongoing</span><span ></span> </td><td> <?php if($row['up16']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"  onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td> 
   <td> <?php if($row['up16']==""){ ?>  <?php }   else { ?>   <input  id="fileinput1" type="file" name="file_array[]"  onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
 

<tr> <td><span>1(b)(c). Upload Proof of Granted Patent supporting Documents :</span><span ></span> </td><td> <?php if($row['up17']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up17']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
 <tr> <td><span>2. Upload Consultancy projects supporting Documents:</span><span ></span> </td><td> <?php if($row['up18']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td>
   <td> <?php if($row['up18']==""){ ?> <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>


    <tr> <td><span>4(a). Journal Publication Details As Main Author (List and First page of reprints) :</span><span ></span> </td><td> <?php if($row['up19']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up19']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
<!-- Added -->
    <tr> <td><span>4(b)(c). Journal Publication Details  As Co-Author (List and First page of reprints) :</span><span ></span> </td><td> <?php if($row['up20']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up20']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
<!-- Added -->

       </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">


 <tr> <td><span>5(a). Conferences Publication Details As Main Author(List and First page of reprints) :</span><span ></span> </td><td> <?php if($row['up21']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td>
   <td> <?php if($row['up21']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
<!-- Added -->
 <tr> <td><span>5(b)(c). Conferences Publication Details As Co-Author(List and First page of reprints) :</span><span ></span> </td><td> <?php if($row['up22']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?></td>
   <td> <?php if($row['up22']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
<!-- Added -->


 <tr> <td><span>6. Upload Details of Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P), Advisor(Estate), TEQIP Co-ord) -  (since last promotion):</span><span ></span> </td><td> <?php if($row['up23']==""){ ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)">  <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
    <td> <?php if($row['up23']==""){ ?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"   type="file"> <p> <?php } ?> </td> </tr>

<tr> <td><span>7. Upload Details of Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities, Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - (since last promotion):</span><span ></span> </td><td> <?php if($row['up24']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up24']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>


</table>

             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">

<tr> <td><span>8. Upload Details of Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- (since last promotion): </span><span ></span> </td><td> <?php if($row['up25']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up25']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>     
    <tr> <td><span> 9. Upload Details of Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- (since last promotion): </span><span ></span> </td><td> <?php if($row['up26']==""){ ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)">  <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td>  
    <td> <?php if($row['up26']==""){ ?><?php } else { ?> <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"   type="file"> <p> <?php } ?> </td> </tr>

     <tr> <td><span> 10. Upload Details of Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - (since last promotion)
</span><span ></span> </td><td> <?php if($row['up27']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?> </td> 
<td> <?php if($row['up27']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>
    

<tr> <td><span>12. Upload Details of National/International Conference organized as Chairman/Secretary(since last promotion)</span><span ></span> </td><td> <?php if($row['up28']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up28']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
    </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">
   
    
    
    <tr> <td><span>  11. Upload Details of conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion) <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up29']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up29']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>

<tr> <td><span> 14. Upload Details of Establishment of new lab(Since last promotion)   <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up30']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up30']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>  


<tr> <td><span>  15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)(Time Table approved by the HoD) <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up31']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up31']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>  

<tr> <td><span>  16. Upload Details of PG Dissertation guided(Since last promotion) 
<b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up32']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up32']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr> 

 </table>
             <br>
             <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
             <br>
          
             <br>
          
             <table border="1" cellpadding="5" style="border-collapse: separate !important;">


<tr> <td><span>   17. Upload Details of UG Project guided(Since last promotion) <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up33']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up33']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>


<tr> <td><span> 18. Upload Details of Text/Reference Book Published on relevant subjects from reputed international publishers(Since last promotion) <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up34']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up34']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
 

<tr> <td><span>  19. Upload Details of Text/Reference book published on relevant subjects from reputed national publishers or book chpatres in the books published by reputed international publishers(Since last promotion) 
 <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up35']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up35']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
 

<tr> <td><span> 21. Upload Details of Fellow IEEE, INA, FNAE, FNSc(Since last promotion) 
 <b style="font-size:5pt"></b>:</span><span ></span> </td><td> <?php if($row['up36']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up36']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>


 <tr> <td><span> Upload the proof of the online transaction including the Unique Transaction Reference (UTR) number (PwD candidates are exempted from application fees. Please upload PWD Certificate here again.):</span><span ></span> </td><td> <?php if($row['up37']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td> 
   <td> <?php if($row['up37']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>
     
</table>
<br>
<br>
 <br>
   <center> <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > </center>
 <br>
       

<!-- NEWLY ADDED FROM ------>
  <table border="1" cellpadding="5" style="border-collapse: separate !important;">

      <tr> <td><span>Contribution to NITK's growth / Any other relevant documents to support your candidature(Merge and Upload as a single copy)</span><span ></span> </td><td> <?php if($row['up38']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]"onchange="return validateFileExtensions(this)"  > <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;<p> <?php } ?></td>
     <td> <?php if($row['up38']==""){ ?>  <?php }   else { ?> <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?></td> </tr>
    <tr> <td><span> Conference/Workshops/Seminars attended (Last 4 years)</span><span ></span> </td><td> <?php if($row['up39']==""){ ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <?php }   else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp;  <p> <?php } ?> </td>
    <td> <?php if($row['up39']==""){ ?>   <?php }   else { ?>  <input  id="fileinput1" type="file" name="file_array[]" onchange="return validateFileExtensions(this)"> <p> <?php } ?> </td> </tr>


 <tr> <td><span>  No objection certificate</span><span ></span> </td><td> <?php if($row['up40']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td>
   <td> <?php if($row['up40']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>


    <tr> <td><span>Testimonials from Referees (if available)(Note: Testimonials from the referees may be sent over email to facrecruit@nitk.edu.in with a CC to registrar@nitk.ac.in. Please put
the subject of the email as "Recommendation Letter for Candidate Name,APPLICATIONID".)</span><span ></span> </td><td> <?php if($row['up41']==""){ ?>  <input  id="fileinput1" type="file"  name="file_array[]" onchange="return validateFileExtensions(this)"> <?php } else { ?> <font size="5"  face="Comic sans MS"  color="green">File Uploaded. &nbsp; <p> <?php } ?></td>
   <td> <?php if($row['up41']==""){ ?>  <?php } else { ?>   <input  id="fileinput1" tabindex="145" id="choose-file"   name="file_array[]" onchange="return validateFileExtensions(this)"  type="file"> <p> <?php } ?></td> </tr>

<table align="center">
    <tr>
        <td colspan="2">
        <input type="submit" class="btn btn" value="Upload file(s)" formaction="upl.php" > <td></tr> 
</table>
         </form>
    </body>
</html>

