<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
$appn=$_POST["view"]; 
$pp = substr($appn, 2, 1);
echo $pp;
 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");

$sql =  "SELECT * FROM eq1page WHERE email='$appn'";
$result =  mysqli_query($link, $sql);
if($result!=null)
{

$row = mysqli_fetch_assoc($result);
 $re1 = $row['Page1'];$re2 = $row['Page2'];  $re3 = $row['Page3'];  $re4 = $row['Page4'];$re5 = $row['Page5'];
 $re6 = $row['Page6'];$re7 = $row['Page7'];$re8 = $row['Page8'];
 $re11 = $row['Page11'];$re12 = $row['Page12'];$re17 = $row['Page17'];$re18 = $row['Page18'];
 $re19 = $row['Page19'];$re22 = $row['Page22'];$re23 = $row['Page23'];$re24 = $row['Page24'];
 $re25 = $row['Page25'];$re26 = $row['Page26'];$re27 = $row['Page27'];$re28 = $row['Page28'];
  $re29 = $row['Page29'];$re30 = $row['Page30'];$re31 = $row['Page31'];$re32 = $row['Page32'];
 $re33 = $row['Page33'];$re34 = $row['Page34'];$re35 = $row['Page35'];$re36 = $row['Page36'];
 $re38 = $row['Page38'];$re39 = $row['Page39'];$re40 = $row['Page40'];$re41 = $row['Page41'];
 $re42 = $row['Page42'];$re43 = $row['Page43'];$re44 = $row['Page44'];$re45 = $row['Page45'];
 $re46 = $row['Page46'];$re47 = $row['Page47'];$re48 = $row['Page48'];$re49 = $row['Page49'];
 $re50 = $row['cer1'];$re51 = $row['year1'];$re52 = $row['school1'];$re53 = $row['board1'];$re54 = $row['class1'];$re55 = $row['percentage1'];$re56 = $row['status1'];
 $re57 = $row['cer2'];$re58 = $row['year2'];$re59 = $row['school2'];$re60 = $row['board2'];$re61 = $row['class2'];$re62 = $row['percentage2'];$re63 = $row['status2'];
 $re64 = $row['cer3'];$re65 = $row['year3'];$re66 = $row['school3'];$re67 = $row['board3'];$re68 = $row['class3'];$re69 = $row['percentage3'];$re70 = $row['status3'];
 $re71 = $row['cer4'];$re72 = $row['year4'];$re73 = $row['school4'];$re74 = $row['board4'];$re75 = $row['class4'];$re76 = $row['percentage4'];$re77 = $row['status4'];
 $re78 = $row['cer5'];$re79 = $row['year5'];$re80 = $row['school5'];$re81 = $row['board5'];$re82 = $row['class5'];$re83 = $row['percentage5'];$re84 = $row['status5'];
 $re85 = $row['cer6'];$re86 = $row['year6'];$re87 = $row['school6'];$re88 = $row['board6'];$re89 = $row['class6'];$re90 = $row['percentage6'];$re91 = $row['status6'];
 $re92 = $row['cer7'];$re93 = $row['year7'];$re94 = $row['school7'];$re95 = $row['board7'];$re96 = $row['class7'];$re97 = $row['percentage7'];$re98 = $row['status7'];
 $re99 = $row['cer8'];$re100 = $row['year8'];$re101 = $row['school8'];$re102 = $row['board8'];$re103 = $row['class8'];$re104 = $row['percentage8'];$re105= $row['status8'];
 $re106 = $row['thesistitle'];$re107 = $row['phdfromdate'];$re108 = $row['phdtodate'];$re109 = $row['phdinstitute'];$re110 = $row['phdguide'];$re111 = $row['phdmode'];$re112 = $row['phdfinalvivadate'];$re113 = $row['phdawarddate'];
 $re114 = $row['career1'];$re115 = $row['phdfromdate'];$re108 = $row['phdtodate'];$re109 = $row['phdinstitute'];$re110 = $row['phdguide'];$re111 = $row['phdmode'];$re112 = $row['phdfinalvivadate'];$re113 = $row['phdawarddate'];
 
 



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <html>
    <head>
        
        <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


    </head>
    <body>
       <div class="navbar navbar-fixed-top">
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
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
        
      
     <form action="page2.php" method="post" name="f1" onsubmit="return validateform()" >
           <div class="form1">
      <table CELLPADDING=10 cellspacing="10"> 
          <tr>
       <td >
          Advertisement No.
       </td>
        <td>
            <input type="text" size="40" maxlength="100"  name="Page1" value="<?php echo $row['Page1']; ?>" readonly />
       </td>
     </tr>
          <tr>
         <td >
          Post Applied.
       </td>
          
         <td>
          <input type="text" style="width: 450px;"  name="Page2" value="<?php echo $row['Page2']; ?>" readonly />                       
       </td>
       <td align="left">
            AGP:  </td>
       <td><input type="text" style="width: 150px;"  name="Page3" value="<?php echo $row['Page3']; ?>" readonly />                        </td>
       <td align="left">
          Department
       </td>
         <td>
          <input type="text" style="width: 250px;"  name="Page4" value="<?php echo $row['Page4']; ?>" readonly />                       
      </td>
    </tr>        
     
      
 <tr>
     <td align="">
           1.  Name in Full 
     </td>
     <td>
         <input type="text" style="width: 450px;"  name="Page5" value="<?php echo $row['Page5']; ?>" readonly />                       
         </td>
 
            <td >
              a) Father Name
       </td>
        <td>
          <input name="Page6" type="text" value="<?php echo $row['Page6']; ?>" readonly />

       </td>
     <td align="center">
          Spouse Name
     </td>
     <td>
         <input type="text"  size="25" maxlength="100" name="Page7" value="<?php echo $row['Page7']; ?>" readonly />
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr>
 <td align="right">
      b) Gender
 </td>

 <td>
     <input type="text"  style="width:70px" maxlength="100" name="Page8" value="<?php echo $row['Page8']; ?>" readonly />
 </td>
 <td align="">
     c) Marital Status 
         <input type="text"  size="25" maxlength="100" name="Page11" value="<?php echo $row['Page11']; ?>" readonly />
 </td>
 
<td align="">
     d) Category 
              <input type="text"  size="25" maxlength="100" name="Page12" value="<?php echo $row['Page12']; ?>" readonly />
</td>   
        </td>
        </tr>
               </table>   
           <table CELLPADDING="5" cellspacing="5">
 <tr>
            <td>  &nbsp;&nbsp;&nbsp;e) Attested copy certificate enclosed(Yes/No) (only in case of SC/St/OBC)           <input type="text"  size="25" style="width: 50px;" name="Page17" value="<?php echo $row['Page17']; ?>" readonly /><td>
    
 
     <td>        f) Percentage of Disability of PWD candidate  <input type="text" name="Page18" style="width: 75px;" value="<?php echo $row['Page18']; ?>" readonly />
         <input type="text" name="Page19" style="width: 75px;" value="<?php echo $row['Page19']; ?>" readonly /> </td>
        </tr>
           </table>
               <table CELLPADDING="5" cellspacing="10">
     <tr>
         <td>
      2. Address:       </td></tr>
      <tr>
     <td align="">  
         (a) Permanent:  </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp;</td> <td colspan="2"> (b) Address for Correspondence:  </td>   </tr>
      
      <tr>
          <td> Address Line1 </td> <td><input type="text" name="Page22" value="<?php echo $row['Page22']; ?>" readonly />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td > Address Line1 </td> <td><input type="text" name="Page28" value="<?php echo $row['Page28']; ?>" readonly />  </td> </tr>
               <tr>
          <td>Address Line2 </td><td> <input type="text" name="Page23" value="<?php echo $row['Page23']; ?>" readonly /> </td>  <td>&nbsp;&nbsp;&nbsp;</td>  <td>Address Line2 </td><td> <input type="text" name="Page29" value="<?php echo $row['Page29']; ?>" readonly /> </td> </tr>
               <tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="<?php echo $row['Page24']; ?>" readonly /> </td> <td>&nbsp;&nbsp;&nbsp;</td>  <td> Address Line3 </td> <td> <input type="text" name="Page30" value="<?php echo $row['Page30']; ?>" readonly /> </td></tr>
      <tr><td>      City  </td> <td>  <input type="text" name="Page25" value="<?php echo $row['Page25']; ?>" readonly /> </td>  <td>&nbsp;&nbsp;&nbsp;</td> <td> City  </td> <td>  <input type="text" name="Page31" value="<?php echo $row['Page31']; ?>" readonly /> </td></tr>
                <tr><td>      Pin Code</td> <td>  <input type="text" name="Page26" value="<?php echo $row['Page26']; ?>" readonly />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="<?php echo $row['Page32']; ?>" readonly /> </td>  </tr>
                <tr><td>     State </td> <td>  <input type="text" name="Page27" value="<?php echo $row['Page27']; ?>" readonly /></td> <td>&nbsp;&nbsp;&nbsp;</td><td>     State </td> <td>  <input type="text" name="Page33" value="<?php echo $row['Page33']; ?>" readonly /></td> </tr>
                <tr> <td></td> <td></td><td></td><td>Mobile</td> <td><input type="text" name="Page34" value="<?php echo $row['Page34']; ?>" readonly /> </td></tr>
                <tr><td></td> <td></td><td></td> <td>Telephone(with STD code)office </td> <td><input type="text" name="Page35"value="<?php echo $row['Page35']; ?>" readonly /></td></tr>
                <tr> <td></td> <td></td><td></td><td>  Telephone(with STD code) Res. No.</td> <td><input type="text" name="Page36" value="<?php echo $row['Page36']; ?>" readonly /> </td></tr>
           <tr> <td></td> <td></td><td></td>    <td>   Email</td> <td><input type="text" name="Page37" value="<?php echo $row['Page37']; ?>" readonly /></td></tr>
               </table>
               <table >
         
                   <td>     3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp; </td>
    
            <td>
        
            <td>  <input style="width: 40px;" type="text" name="Page38" value="<?php echo $row['Page38']; ?>" readonly /> </td>
            <td>  <input style="width: 60px;"type="text" name="Page39" value="<?php echo $row['Page39']; ?>" readonly /> </td>
            <td>  <input style="width: 40px;"type="text" name="Page40" value="<?php echo $row['Page40']; ?>" readonly /> </td>
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> &nbsp;&nbsp; 3 &nbsp;&nbsp;(b) Nationality  </td>  
    
     <td>
         <input type="text" name="Page41" value="<?php echo $row['Page41']; ?>" readonly />
     </td>
        </tr>
               </table>
               <table CELLPADDING="1" cellspacing="10">
         <tr>
         </tr>
         <tr>
     <td> 
           4. Present Employment:  </td>  </tr>
     <tr><td>             Designation </td><td><input type="text" name="Page42" value="<?php echo $row['Page42']; ?>" readonly /></td><td>        Organization </td><td><input type="text" name="Page43" value="<?php echo $row['Page43']; ?>" readonly /> </td> 
       <td> Date of Joining to the present post </td><td><input type="text" name="Page44"  value="<?php echo $row['Page44']; ?>" readonly /> </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45"  value="<?php echo $row['Page45']; ?>" readonly /></td> 
         <td>AGP/GP </td><td> <input type="text" name="Page46"  value="<?php echo $row['Page46']; ?>" readonly/> <td>Current Basic pay Rs. </td><td> <input type="text" name="Page47"  value="<?php echo $row['Page47']; ?>" readonly /> </td> </tr>
        <tr><td> Total Emoluments(per month) Rs. </td><td> <input type="text" name="Page48"  value="<?php echo $row['Page48']; ?>" readonly /></td>  <td >5. Areas of specializations: 
            </td> <td>
                <input type="text" size="40" maxlength="100" name="Page49"  value="<?php echo $row['Page49']; ?>" readonly /></td>
        </tr>
               </table>
               <hr align="left" width="90%">      
  6. Academic Career Record satrting with SSLC:  (attach photocopies)
   <hr align="left" width="90%">      
    <table CELLPADDING=2 cellspacing="5" width="50%">
    <tr>
        <th >Certificate/Degree<br>[UG/PG]<br></td>
        <th >year</td>
        <th >School/College</td>
        <th >Board/University <br></td>
        <th >Class/<br>Division</td>
        <th >Percentage/CGPA</td>
        <th >Remarks/<br>Status</td>
    </tr>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer1']; ?>" readonly /></td>
        <td ><input type="text" name="e12"   value="<?php echo $row['year1']; ?>" readonly /></td>
        <td ><input type="text" name="e13"  value="<?php echo $row['school1']; ?>" readonly /></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board1']; ?>" readonly /></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class1']; ?>" readonly /></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage1']; ?>" readonly /></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status1']; ?>" readonly /></td>
    </tr>
    <tr>
    <td ><input type="text" name="e21" value="<?php echo $row['cer2']; ?>" readonly /></td>
        <td ><input type="text" name="e22"   value="<?php echo $row['year2']; ?>" readonly /></td>
        <td ><input type="text" name="e23"  value="<?php echo $row['school2']; ?>" readonly /></td>
        <td ><input type="text" name="e24" value="<?php echo $row['board2']; ?>" readonly /></td>
        <td ><input type="text" name="e25" value="<?php echo $row['class2']; ?>" readonly /></td>
        <td ><input type="text" name="e26" value="<?php echo $row['percentage2']; ?>" readonly /></td>
        <td ><input type="text" name="e27" value="<?php echo $row['status2']; ?>" readonly /></td></tr>
    <tr>
    <td ><input type="text" name="e31" value="<?php echo $row['cer3']; ?>" readonly /></td>
        <td ><input type="text" name="e32"   value="<?php echo $row['year3']; ?>" readonly /></td>
        <td ><input type="text" name="e33"  value="<?php echo $row['school3']; ?>" readonly /></td>
        <td ><input type="text" name="e34" value="<?php echo $row['board3']; ?>" readonly /></td>
        <td ><input type="text" name="e35" value="<?php echo $row['class3']; ?>" readonly /></td>
        <td ><input type="text" name="e36" value="<?php echo $row['percentage3']; ?>" readonly /></td>
        <td ><input type="text" name="e37" value="<?php echo $row['status3']; ?>" readonly /></td></tr> 
    <tr>
        <td ><input type="text" name="e41" value="<?php echo $row['cer4']; ?>" readonly /></td>
        <td ><input type="text" name="e42"   value="<?php echo $row['year4']; ?>" readonly /></td>
        <td ><input type="text" name="e43"  value="<?php echo $row['school4']; ?>" readonly /></td>
        <td ><input type="text" name="e44" value="<?php echo $row['board4']; ?>" readonly /></td>
        <td ><input type="text" name="e45" value="<?php echo $row['class4']; ?>" readonly /></td>
        <td ><input type="text" name="e46" value="<?php echo $row['percentage4']; ?>" readonly /></td>
        <td ><input type="text" name="e47" value="<?php echo $row['status4']; ?>" readonly /></td>
    </tr>
    <tr>
       <td ><input type="text" name="e51" value="<?php echo $row['cer5']; ?>" readonly /></td>
        <td ><input type="text" name="e52"   value="<?php echo $row['year5']; ?>" readonly /></td>
        <td ><input type="text" name="e53"  value="<?php echo $row['school5']; ?>" readonly /></td>
        <td ><input type="text" name="e54" value="<?php echo $row['board5']; ?>" readonly /></td>
        <td ><input type="text" name="e55" value="<?php echo $row['class5']; ?>" readonly /></td>
        <td ><input type="text" name="e56" value="<?php echo $row['percentage5']; ?>" readonly /></td>
        <td ><input type="text" name="e57" value="<?php echo $row['status5']; ?>" readonly /></td>
    </tr>
    <tr>
     <td ><input type="text" name="e61" value="<?php echo $row['cer6']; ?>" readonly /></td>
        <td ><input type="text" name="e62"   value="<?php echo $row['year6']; ?>" readonly /></td>
        <td ><input type="text" name="e63"  value="<?php echo $row['school6']; ?>" readonly /></td>
        <td ><input type="text" name="e64" value="<?php echo $row['board6']; ?>" readonly /></td>
        <td ><input type="text" name="e65" value="<?php echo $row['class6']; ?>" readonly /></td>
        <td ><input type="text" name="e66" value="<?php echo $row['percentage6']; ?>" readonly /></td>
        <td ><input type="text" name="e67" value="<?php echo $row['status6']; ?>" readonly /> </td>
    </tr>
    <tr>
         <td ><input type="text" name="e71" value="<?php echo $row['cer7']; ?>" readonly /></td>
        <td ><input type="text" name="e72"   value="<?php echo $row['year7']; ?>" readonly /></td>
        <td ><input type="text" name="e73"  value="<?php echo $row['school7']; ?>" readonly /></td>
        <td ><input type="text" name="e74" value="<?php echo $row['board7']; ?>" readonly /></td>
        <td ><input type="text" name="e75" value="<?php echo $row['class7']; ?>" readonly /></td>
        <td ><input type="text" name="e76" value="<?php echo $row['percentage7']; ?>" readonly /></td>
        <td ><input type="text" name="e77" value="<?php echo $row['status7']; ?>" readonly /></td>
    </tr>
    <tr>
         <td ><input type="text" name="e81" value="<?php echo $row['cer8']; ?>" readonly /></td>
        <td ><input type="text" name="e82"   value="<?php echo $row['year8']; ?>" readonly /></td>
        <td ><input type="text" name="e83"  value="<?php echo $row['school8']; ?>" readonly /></td>
        <td ><input type="text" name="e84" value="<?php echo $row['board8']; ?>" readonly /></td>
        <td ><input type="text" name="e85" value="<?php echo $row['class8']; ?>" readonly /></td>
        <td ><input type="text" name="e86" value="<?php echo $row['percentage8']; ?>" readonly /></td>
        <td ><input type="text" name="e87" value="<?php echo $row['status8']; ?>" readonly /></td>
    </tr>
    </table>
 <hr align="left" width="90%">      
     7. Academic - Doctaral Degree[Ph.D] Details:(Attach photocopy)  
              
  <hr align="left" width="90%"> 
  <table style="table-layout: fixed;" cellpadding="1" cellspacing="" >
                <tr >
                    <td>Thesis Title</td>
                   <td>From Data</td>
                  <td>To Date</td>
                  <td>Institute/University</td>
                    <td>Guide/Mentor</td>
                    <td>Mode(Full/Part time)</td>
                    <td>Final Viva Date</td>
                    <td>Award Date</td>
                </tr> <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="ph1"  value="<?php echo $row['thesistitle']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="ph2" class="form-control" value="<?php echo $row['phffromdate']; ?>" readonly /> </td> 
                    <td><input type="text" name="ph3" class="form-control" value="<?php echo $row['phdtodate']; ?>" readonly /></td> 
                    <td ><input type="text" name="ph4" class="form-control" value="<?php echo $row['phdinstitute']; ?>" readonly /></td> 
                    <td><input type="text" name="ph5" class="form-control" value="<?php echo $row['phdguide']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="ph6" class="form-control" value="<?php echo $row['phdmode']; ?>" readonly /> </td> 
                    <td><input type="text" name="ph7" class="form-control" value="<?php echo $row['phdfinalvivadate']; ?>" readonly /> </td> 
                      <td><input type="text" name="ph8" class="form-control" value="<?php echo $row['phdawarddate']; ?>" readonly /> </td> 
                </tr>
            </table> 
           
       <hr align="left" width="90%">      

      
        8. Post Doctoral Work: (Attach photocopy) 
            
            <hr align="left" width="80%">      

      <table   >
               
                <tr >
                    <td>Career </td>
                   <td>From Data</td>
                  <td>To Date</td>
                  <td>Institute/Orgranization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr> <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd11"  value="<?php echo $row['career1']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="pd12" class="form-control" value="<?php echo $row['postdocfromdate1']; ?>" readonly /> </td> 
                    <td><input type="text" name="pd13" class="form-control" value="<?php echo $row['postdoctodate1']; ?>" readonly /> </td> 
                    <td ><input type="text" name="pd14" class="form-control" value="<?php echo $row['postdocinstitute1']; ?>" readonly /></td> 
                    <td><input type="text" name="pd15" class="form-control" value="<?php echo $row['postdocguide1']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" value="<?php echo $row['postdocresearch1']; ?>" readonly /> </td> 
                      </tr>
                      <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd21"  value="<?php echo $row['career2']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="pd22" class="form-control" value="<?php echo $row['postdocfromdate2']; ?>" readonly /> </td> 
                    <td><input type="text" name="pd23" class="form-control" value="<?php echo $row['postdoctodate2']; ?>" readonly /> </td> 
                    <td ><input type="text" name="pd24" class="form-control" value="<?php echo $row['postdocinstitute2']; ?>" readonly /></td> 
                    <td><input type="text" name="pd25" class="form-control" value="<?php echo $row['postdocguide2']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd26" class="form-control" value="<?php echo $row['postdocresearch2']; ?>" readonly /> </td> 
                    
                      </tr>
                      <tr>
                   <td><textarea rows="1" cols="30" val="" input type="text" name="pd31"  value="<?php echo $row['career3']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="pd32" class="form-control" value="<?php echo $row['postdocfromdate3']; ?>" readonly /> </td> 
                    <td><input type="text" name="pd33" class="form-control" value="<?php echo $row['postdoctodate3']; ?>" readonly /> </td> 
                    <td ><input type="text" name="pd34" class="form-control" value="<?php echo $row['postdocinstitute3']; ?>" readonly /></td> 
                    <td><input type="text" name="pd35" class="form-control" value="<?php echo $row['postdocguide3']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd36" class="form-control" value="<?php echo $row['postdocresearch3']; ?>" readonly /> </td> 
                    
                      </tr>
            </table>
             <hr align="left" width="80%">      

            
         9. National/State/Others - Test Scores/Ranks (Attach photocopy) 
           
                  <hr align="left" width="80%">      

                 <table style="table-layout: fixed;"border="0.5" cellpadding="1" cellspacing="" >
                <tr >
                    <td>Examinations </td>
                   <td>Year</td>
                  <td>Branch/Area of Specialization</td>
                  <td>Score</td>
                    <td>Rank</td>
                    <td>Percentile</td>
                   
                </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  value="<?php echo $row['examination1']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="nt12" value="<?php echo $row['testyear1']; ?>" readonly /> </td> 
                    <td><input type="text" name="nt13" class="form-control" value="<?php echo $row['branch1']; ?>" readonly /> </td> 
                    <td ><input type="text" name="nt14" class="form-control" value="<?php echo $row['score1']; ?>" readonly /></td> 
                    <td><input type="text" name="nt15" class="form-control" value="<?php echo $row['rank1']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" value="<?php echo $row['percentile1']; ?>" readonly /></td> 
                    
                </tr>
                <tr>
                   <td><textarea rows="1" cols="50" val="" input type="text" name="nt21"  value="<?php echo $row['examination2']; ?>" readonly /></textarea> </td> 
                    <td><input type="text" name="nt22" value="<?php echo $row['testyear2']; ?>" readonly /> </td> 
                    <td><input type="text" name="nt23" class="form-control" value="<?php echo $row['branch2']; ?>" readonly /> </td> 
                    <td ><input type="text" name="nt24" class="form-control" value="<?php echo $row['score2']; ?>" readonly /></td> 
                    <td><input type="text" name="nt25" class="form-control" value="<?php echo $row['rank2']; ?>" readonly /> </td> 
                    <td align='center'><input type="text" name="nt26" class="form-control" value="<?php echo $row['percentile2']; ?>" readonly /></td> 
                    
                </tr>
                 </table>
                  
                   <hr align="left" width="100%">      <p>
    
         <p>10. Employment Details (Particulars of your past employment in Chronlogical order starting with current employment) </p>
                         <hr align="left" width="100%">      <p>
           
                         <table  width="60%" style=" text-align:center;" >
    <thead>
        <tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining</td> <td>Date of Leaving</td> <td>Number of Months/Years</td> <td>Scale of Pay & GPA(As applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" size="30" name="E11" value="<?php echo $row['E11']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E12" value="<?php echo $row['E12']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E13" value="<?php echo $row['E13']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E14" value="<?php echo $row['E14']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E15" value="<?php echo $row['E15']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E16" value="<?php echo $row['E16']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E17" value="<?php echo $row['E17']; ?>" readonly /></td>
            
	    
        </tr>


        <tr>
            <td><input type="text" size="30" name="E21" value="<?php echo $row['E21']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E22" value="<?php echo $row['E22']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E23" value="<?php echo $row['E23']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E24" value="<?php echo $row['E24']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E25" value="<?php echo $row['E25']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E26" value="<?php echo $row['E26']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E27" value="<?php echo $row['E27']; ?>" readonly /></td>
            
        </tr>

        <tr>
            <td><input type="text" size="30" name="E31" value="<?php echo $row['E31']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E32" value="<?php echo $row['E32']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E33" value="<?php echo $row['E33']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E34" value="<?php echo $row['E34']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E35" value="<?php echo $row['E35']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E36" value="<?php echo $row['E36']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E36" value="<?php echo $row['E37']; ?>" readonly /></td>
         
        </tr>
<tr>
            <td><input type="text" size="30" name="E41" value="<?php echo $row['E41']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E42" value="<?php echo $row['E42']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E43" value="<?php echo $row['E43']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E44" value="<?php echo $row['E44']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E45" value="<?php echo $row['E45']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E46" value="<?php echo $row['E46']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E46" value="<?php echo $row['E47']; ?>" readonly /></td>
                    </tr>


        <tr>
          <td><input type="text" size="30" name="E51" value="<?php echo $row['E51']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E52" value="<?php echo $row['E52']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E53" value="<?php echo $row['E53']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E54" value="<?php echo $row['E54']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E55" value="<?php echo $row['E55']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E56" value="<?php echo $row['E56']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E56" value="<?php echo $row['E57']; ?>" readonly /></td>  
        </tr>

        <tr>
            <td><input type="text" size="30" name="E61" value="<?php echo $row['E61']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E62" value="<?php echo $row['E62']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E63" value="<?php echo $row['E63']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E64" value="<?php echo $row['E64']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E65" value="<?php echo $row['E65']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E66" value="<?php echo $row['E66']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E66" value="<?php echo $row['E67']; ?>" readonly /></td>
        </tr>


        <tr>
            <td><input type="text" size="30" name="E71" value="<?php echo $row['E71']; ?>" readonly /></td>
            <td><input type="text" size="30" name="E72" value="<?php echo $row['E72']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E73" value="<?php echo $row['E73']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E74" value="<?php echo $row['E74']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E75" value="<?php echo $row['E75']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E76" value="<?php echo $row['E76']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E76" value="<?php echo $row['E77']; ?>" readonly /></td> </tr>
        
         </tbody>
           
</table>
        
                <hr align="left" width="80%">      <p>

     <p>11. Total experience (Number of Years and/or months)  </p>      
                  <hr align="left" width="80%">      <p>
                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="teachingexp" type="text" value="<?php echo $row['teachingexp']; ?>" readonly />
        
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="researchexp" type="text" value="<?php echo $row['researchexp']; ?>" readonly />

       </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="industryexp" type="text"  value="<?php echo $row['industryexp']; ?>" readonly />
       </td>
    </tr>
        
    
  
                  </table>
           
      
                     <hr align="left" width="80%">      <p>
          <p>12. Teaching Experience (Number of Years and/or Months) </p>
       &nbsp;&nbsp;&nbsp;&nbsp;  Academic Experience as applicable (month/year) in the posts indicated or equivalent
               <hr align="left" width="80%">      <p>
          
    <table border="0" cellpadding="0" cellspacing="5">
     <tr>
       <td align="right">
          <p>Assistant Professor or equivalnet</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="asstprof" type="text"  value="<?php echo $row['asstprof']; ?>" readonly />
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Associate Professor or equivalnet</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="assoprofexp" type="text"  value="<?php echo $row['assoprofexp']; ?>" readonly />
       </td>
   <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Professor</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="profexp" type="text"  value="<?php echo $row['profexp']; ?>" readonly />
       </td>
    </tr>
 
    
        
       </table>
            
            
                         <hr align="left" width="80%">      <p>

   <p>13. Subjects taught (Last 4 years)</p> 
                <hr align="left" width="80%">      <p>

                <table  width="60%" style="text-align: center">
                 <thead>
                     <tr><td>Title of the course taught </td> <td>Year</td> <td>U.G. / P.G. </td> <td>Approximate No. of students</td> <td>Institution/University</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_11"  value="<?php echo $row['E2_11']; ?>" readonly /></td>
            <td><input type="text" size="5" name="E2_12"   value="<?php echo $row['E2_12']; ?>" readonly /></td>
            <td><input type="text" size="3" name="E2_13"  value="<?php echo $row['E2_13']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E2_14"  value="<?php echo $row['E2_14']; ?>" readonly /></td>
            <td><input type="text" size="15" name="E2_15"  value="<?php echo $row['E2_15']; ?>" readonly /></td>
        </tr>
           
        
         <tr>
              <td><input type="text" size="10" name="E2_21"  value="<?php echo $row['E2_21']; ?>" readonly /></td>
            <td><input type="text" size="5" name="E2_22"   value="<?php echo $row['E2_22']; ?>" readonly /></td>
            <td><input type="text" size="3" name="E2_23"  value="<?php echo $row['E2_23']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E2_24"  value="<?php echo $row['E2_24']; ?>" readonly /></td>
            <td><input type="text" size="15" name="E2_25"  value="<?php echo $row['E2_25']; ?>" readonly /></td>
        </tr>
       
        
         <tr>
            <td><input type="text" size="10" name="E2_31"  value="<?php echo $row['E2_31']; ?>" readonly /></td>
            <td><input type="text" size="5" name="E2_32"   value="<?php echo $row['E2_32']; ?>" readonly /></td>
            <td><input type="text" size="3" name="E2_33"  value="<?php echo $row['E2_33']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E2_34"  value="<?php echo $row['E2_34']; ?>" readonly /></td>
            <td><input type="text" size="15" name="E2_35"  value="<?php echo $row['E2_35']; ?>" readonly /></td>
        </tr>
       
       
         <tr>
             <td><input type="text" size="10" name="E2_41"  value="<?php echo $row['E2_41']; ?>" readonly /></td>
            <td><input type="text" size="5" name="E2_42"   value="<?php echo $row['E2_42']; ?>" readonly /></td>
            <td><input type="text" size="3" name="E2_43"  value="<?php echo $row['E2_43']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E2_44"  value="<?php echo $row['E2_44']; ?>" readonly /></td>
            <td><input type="text" size="15" name="E2_45"  value="<?php echo $row['E2_45']; ?>" readonly /></td>
        </tr>
       
        
         <tr>
              <td><input type="text" size="10" name="E2_51"  value="<?php echo $row['E2_51']; ?>" readonly /></td>
            <td><input type="text" size="5" name="E2_52"   value="<?php echo $row['E2_52']; ?>" readonly /></td>
            <td><input type="text" size="3" name="E2_53"  value="<?php echo $row['E2_53']; ?>" readonly /></td>
            <td><input type="text" size="10" name="E2_54"  value="<?php echo $row['E2_54']; ?>" readonly /></td>
            <td><input type="text" size="15" name="E2_55"  value="<?php echo $row['E2_55']; ?>" readonly /></td>
        </tr>
       
        
            </tbody>
           
            </table>
            
     
           
               <hr align="left" width="80%">      <p>
         
            
    <p>14. Guidance</p> 
                       <hr align="left" width="80%">      <p>

  <table>
    <thead>
    
        <tr><td> Completed :</td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing :</td> </tr>
      </thead>
        <tbody>
         </tr>
            <tr> 
                 <td align="right">
          <p>PhD</p>
       </td>
        <td>
          <input name="phdcomplete" type="text" value="<?php echo $row['phdcomplete']; ?>" readonly /></td>

       </td>
        <td align="right">
          <p>PhD</p>
       </td>
        <td>
          <input name="phdongoing" type="text" value="<?php echo $row['phdongoing']; ?>" readonly /></td>

       </td>
    </tr>
        
 
       <tr> 
       <td align="right">
          <p>PG</p>
       </td>
        <td>
          <input name="pgcomplete" type="text" value="<?php echo $row['phdcomplete']; ?>" readonly /></td>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <td align="right">
          <p>PG</p>
       </td>
        <td>
          <input name="pgongoing" type="text" value="<?php echo $row['phdongoing']; ?>" readonly /></td>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    </tr>    
 </tbody>
           

          
                <hr align="left" width="80%">      <p>
                <tr>
                    <td></td> <td></td><td align="left" rowspan="6" > <br>
   <input type="submit" formaction="page2.php" value="Save and Submit" name="Save and Submit">
                    </td></tr></table>  
       
    </body>
</html>
<?php
}
else
     echo "
		      <div class='alert alert-error'>
                      <form action='home.php' method='post'>
				  <button type='submit'>Back</button>
					<strong>Sorry !</strong>  Application Not Yet submitted
                                         </form>
			  </div>
			  ";
?>