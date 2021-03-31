<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();
$addv="Advt./Faculty-NITK/Estt./2019/B1. Dt. 07/02/2019";
$_SESSION['addv'] =$addv;
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['Mid']= $row['userEmail'];
$aid=$_SESSION['userSession'] ;

if(isset($_SESSION['msg'])) { $xx=$_SESSION['msg']; }
//if(isset($_SESSION['msg1'])) { $xx=$_SESSION['msg1'];}
//if(isset($_SESSION['msg2'])) { $yy=$_SESSION['msg2'];}

?>


<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $aid ?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
     
    </head>
    
   <body >
       <form method="post">
           
       
         <input type="hidden" name="lid" value="<?php echo $UID ?>" >
 <table style="width: 100%; " cellspacing="5" cellpadding="5">
            <tr>
                <td style="text-align: left;width: 15%;"><img style="width:100px;height:100px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width:70%;font-size:14pt !important;">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br/> <p style="font-size:16pt !important;"> Faculty Recruitment Portal</p></th>
                <td style="text-align: right; FONT-SIZE: 8pt;width: 15%"></td>
            </tr>
        </table>
       
        <div class="navbar ">
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
								<?php echo $row['userEmail']; ?> <i class="caret"></i>
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
                                                            <!--  <li><a href="post.php">My Application(s)</a></li> -->

                                                          <li><a href="up.php">Upload Photo/Documents </a></li>
                                                               <li><a href="view1.php">View/Edit Application</a></li>
                                                              
                                                                      <li><a href="jaddd.php">Conference Papers</a></li> 
                                                                      <li><a href="cfaddd.php">Subjects Taught</a></li> 
      <li><a href="submit.php">Submit/Print Application</a></li>

                                                                     
 <li><a href="chnge.php">Change Password</a></li>
									   
                                                             
                       </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
       <?php
      ?>
<br/>

       <font  face="Comic sans MS"  color="red"> <p style="text-align: center;font-size:20pt !important;">  <?php  if(isset($xx)) { echo $xx; };
       $_SESSION['msg']="";?> </p></font>
      
	<br /> <br/>
       <hr >
	       <p align="center"><b>Welcome to the NITK faculty application form portal.</b> </p> 
       <hr >
       <table cellspacing="5" cellpadding="5" >
                    
           
           <tr>
<td> <font> <strong>Last date for the Application Submission: March, 08, 2019. </strong> </font></td>
<td align="center">  <b> </b> </td></tr> <tr><td><form> <p style="">   *Note the instructions in this portal carefully. <a href="FRR.pdf">Please follow the step-by-step user guide for a hassle free application form filling experience. Click here!</a></p>
</form>
               </td></tr>
           
           <tr><td><p style="">
                      The Model Recruitment Rules For Faculty Posts In NITs by the MHRD:
                       <a href="gazette.pdf">Gazette of India, July 2017.</a> & <a href="anom.pdf">Recommendations of the Anomaly Committee on new RR</a>.
                           </p>

          <!-- <tr><td> <p style=""> The information for the faculty recruitment application form is
collected in 2 pages: (a) Essential Requirements and (b) Main
Application Form. A partially filled Main application form can be
saved at resumed later. The following tabs are available in this
portal.         </p>  -->

               </td></tr>
           
           <tr><td><font ><p ><b>1. My Application Tab.</b></p></font>  
               </td></tr>
       <!--    <tr><td><font > To start a new application, Click on <a href="post.php"> 'My Application(s)'.</a></font>  -->
                   
               </td></tr>
           <tr><td><font ><b>2. Upload Photo/Documents Tab.</b></font>  
               </td></tr>
           <tr><td><font>Passport size photograph,  scanned signature and all supporting
documents can be uploaded in this page. The documents may be uploaded
once. The same will be used for multiple applications (if any) </font>  
               </td></tr>
           <tr><td><font > <b>3. View/Edit Application Tab.</b></font>  
               </td></tr>
           <tr><td><font >Saved applications may be viewed and edited through this page.

</font>  
               </td></tr>
<!--
<tr><td>
<b> 4. Publication Details Tab. </b></td></tr><tr><td>
A list of up to 25 SCI/SCI-E/SCOPUS/SSCI journals may be added through
this page</td><tr>
</tr> -->

           <tr><td><font > <b>4. Submit/Print Application Tab.</b></font>  
               </td></tr>
           <tr><td><font >Once the application is completely filled, photograph+signature+support documents are uploaded, go to this tab to submit the application. After submission of the web application form, PDF can be generated. The deadline for this step is 8th March 2019, 530pm.

           <tr><td><font > <b>5. Payment of Application Fees.</b></font>  
               </td></tr>
           <tr><td><font> Please remit the appropriate amount (<b>General/OBC: INR 1000, SC/ST: INR 500, PwD candidates are exempt from Applicaiton fees</b>) to the following SBI Current Account. Details are:
Beneficiary Name: The Director, NITK Surathkal
SBI, Surathkal branch.
SBI Current Account No: 37772503911
IFSC Code: SBIN0002273. 
<br > Mention "Faculty Recruitment" as a message along with the online payment. Please record the proof of the online transaction including the Unique Transaction Reference (UTR) number. Upload the proof in the specified field in the "Upload Documents" page. Print out this proof and enclose with the application.
</font>  
</td></tr>

           <tr><td><font > <b>6. Send Application to NITK, Surathkal.</b></font>  
               </td></tr>
           <tr><td><font>
Print out the application PDF, enclose all the supporting documents, including the proof of online application fee payment and post it to: The Registrar, NITK Surathkal, Srinivasnagar, Mangalore - 575025, Karnataka, India. The application should reach NITK on or before 13th March, 2019 by 5.30 p.m.
</font>  
               </td></tr>
           <tr><td><p style="color:red" >
<b>IMPORTANT:</b></p><p> Please take care to fill valid and accurate values in the application.
</p> <p>
               </td></tr>
       </table>
<table>
<tr> <p style="color:blue"> Note: Testimonials from the referees may be sent over email to facrecruit@nitk.edu.in with a CC to registrar@nitk.ac.in. Please put the subject of the email as "Recommendation Letter for Candidate Name, APPLICATIONID".</p> </tr></table>
        <hr >
       <ul>
          <b>Supporting Documents</b>
        </ul>
       <hr>
                       <ul>
                           <li><a href="AP5MNE911.pdf">Click here for Sample Application</a></li>
                  
                                    <li> <a href="noti.pdf"> Click here for Notification</a> </li>
                                     <li> <a href="FAQ1.pdf"> Click here for the FAQ contains the procedure to download the SCOPUS profile.</a> </li>
      
                       </ul>
          
                  
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        <div id="footer">
<left><font color=tomato>|</font> Copyright © 2017 NITK. All Rights Reserved <font color=tomato>|</font></left> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <right>  &nbsp;  <font color=tomato>|</font> &nbsp;<a href=http://www.nitk.ac.in>NITK Surathkal</a> <font color=tomato>|</font></right> </div>

    </form>
        </body>

</html>
