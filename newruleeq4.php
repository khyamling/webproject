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
$br=$_SESSION['br'];
$pos=$_SESSION['pos'];
$addv=$_SESSION['addv'];
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
   


  $sql  = "SELECT * FROM  postapplied WHERE email='$UID' and dept='$br' and post='$pos' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
//echo "$num_rows Rows\n";
	if( $num_rows > 0)
	{ 
            ?> 
<html>
    <head>
               <meta charset="UTF-8">
        <title></title>
<style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
            
                       
            
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                <script type="text/javascript">
                alert("Application for this post already exist");
                </script>
                <?php
            $user_home->redirect('index.php');
        }
        else
        {
            $dummy=  uniqid();
           $sql="INSERT INTO applica values ('abcd','$UID')";
           if(mysqli_query($link, $sql)) {

      

    } else{

      

    }
                 $sql="select id from applica   where email='$UID' order by id desc limit 1 ";
                   $result =  mysqli_query($link, $sql);
                   $inc=$result->fetch_object()->id;
                   $appn="AP"."$pos"."$br"."$inc";
                 //  echo"$appn $UID $br $pos ";
                 $rnd1=$_SESSION['rnd1'];
                $sql="INSERT INTO postapplied values('$UID','$appn','$br','$pos','N','$rnd1')";
           if(mysqli_query($link, $sql)) {

       

    } else{

        echo " ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }        
    
                      mysqli_close($link); 
    ?>
    <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="assets/datepicker.js"></script> 
        <script type="text/javascript" src="assets/timepicker.js"></script> 
        <link rel="stylesheet" type="text/css" href="assets/runnable.css" /> 
        
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
                       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                         <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                         <link rel="stylesheet" href="assets/resources.css" />
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
                                                               <li><a href="jaddd.php">Conference Papers</a></li> 
                                                               <li><a href="cfaddd.php">Subjects Taught</a></li> 
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
        <?php
        ?>
             
 <form action="rulesinserteq4.php" method="post" name="f1" >
    <table  rule="rows">
          <tr> <br><br><br>
                    <th>  <p> Your application  No :<input type="text"  name="nappn" value="<?php echo $appn; ?> " readonly /> </p></th>
            </tr>
      </table>
       <hr> 
        <table>
          <tr>
                    <th>  <p> Faculty Name :<input type="text"  name="name" value=" " /> </p></th>
                    <th>  <p> Department Name :<input type="text"  name="dept" value=" " /> </p></th>
                    <th>  <p>Current Institute Name :<input type="text"  name="Inst" value=" " /> </p></th>
            </tr>
      </table>
       <hr>
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p> <b> 1. External sponsored R & D Projects completed or ongoing/patent granted</b> </p></tr>
 <tr> <td>    1a. No. of project - Completed or Ongoing as Lone PI  </td>
     <td>   <input name="loneproj" type="number" size="50" maxlength="150"  > </td>
       
 <tr>
     <td>  1b. No. of project - Completed or Ongoing as Team PI </td>
     <td>  <input name="teamproj" type="number" maxlength="150" size="25" > </td> </tr>
  
 <tr>   
     <td>   1c. No. of project - Completed or Ongoing as Co-PI </td>
     <td> <input name="coproj" type="number" maxlength="150" size="25" > </td> </tr>
 <tr>
     <td>  1d. No. of  Patent - Granted </td>
  
     <td>  <input name="patgrant" type="number" maxlength="150" size="25" > </td>
 </tr>
</table>
      <hr>      
       
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p> <b>    2. Consultancy Projects </b> </p></tr>
     <tr> <td>  No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy </td>
         <td> <input name="consult" type="number" maxlength="150" size="25" > </td>
</tr>
</table>
      <hr>      
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>3.Doctorates Guided (including thesis submitted cases)</b> </p></tr>
 <tr> 3a. No. of  PhD Completed/Thesis submitted - Lone supervisor </tr>
 <tr> <td><input name="loneguide" type="number" size="50" maxlength="150"  value=""> </td> </tr>
 </table>
      <table CELLPADDING=10 cellspacing="10" >
 <tr> 3b. No. of  PhD Completed/Thesis submitted jointly as Head supervisor</tr>
  <tr>   <td> <input name="headguide" type="number" maxlength="150" size="25" value="" > </td> </tr>
      </table>
      <table CELLPADDING=10 cellspacing="10" >
 <tr> 3c. No. of PhD Completed/Thesis submitted jointly as Co-supervisor</tr>
 <tr>   <td>One Co-supervisor <input name="coguide" type="number" maxlength="150" size="25" value="" > </td>
     <td>Two Co-supervisor <input name="coguide2" type="number" maxlength="150" size="25" value="" > </td>
     <td>Three Co-supervisor <input name="coguide3" type="number" maxlength="150" size="25" value="" > </td>
     <td>Four Co-supervisor <input name="coguide4" type="number" maxlength="150" size="25" value="" > </td>
     <td>Greater than Four Co-supervisor <input name="coguide5" type="number" maxlength="150" size="25" value="" > </td>
 </tr>
</table>
      <hr> 
       
       
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b> </p> </tr>
<tr>  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers </tr>
   <tr> <td> <input name="jsing" type="number" size="50" maxlength="150"  > </td> </tr>
   </table>
      <table CELLPADDING=10 cellspacing="10" >
    <tr> 4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor </tr>
    <tr>     <td> <input name="jmain" type="number" size="50" maxlength="150"  > </td> </tr>
    </table>
    <table CELLPADDING=10 cellspacing="10" >
     <tr> 4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author </tr>
     <tr>    <td>One Co-Author <input name="jother" type="number" maxlength="150" size="25"  > </td>
         <td>Two Co-Author <input name="jother2" type="number" maxlength="150" size="25"  > </td>
         <td>Three Co-Author <input name="jother3" type="number" maxlength="150" size="25"  > </td>
         <td>Four Co-Author <input name="jother4" type="number" maxlength="150" size="25"  > </td>
         <td>Greater than Four Co-Author <input name="jother5" type="number" maxlength="150" size="25"  > </td>
 </tr>
</table>
      <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>5. Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b> </p></tr>
<tr> 5a. No. of Conference paper - Single Author Papers</tr>
  <tr>  <td> <input name="csing" type="number" maxlength="150" size="25"  > </td> </tr>
  </table>
      <table CELLPADDING=10 cellspacing="10" >
<tr> 5b. No. of Conference paper - First author/Main supervisor </tr>
  <tr>  <td> <input name="cmain" type="number" maxlength="150" size="25"  > </td> </tr>
  </table>
  <table CELLPADDING=10 cellspacing="10" >
<tr> 5c. No. of  Conference paper - Co-author</tr>
<tr> <td>One Co-Author <input name="cother" type="number" maxlength="150" size="25" > </td>
    <td>Two Co-Author <input name="cother2" type="number" maxlength="150" size="25" > </td>
    <td>Three Co-Author <input name="cother3" type="number" maxlength="150" size="25" > </td>
    <td>Four Co-Author <input name="cother4" type="number" maxlength="150" size="25" > </td>
    <td>Five Co-Author <input name="cother5" type="number" maxlength="150" size="25" > </td>
    <td>Six Co-Author <input name="cother6" type="number" maxlength="150" size="25" > </td>
    <td>Seven Co-Author <input name="cother7" type="number" maxlength="150" size="25" > </td>
    <td>Greater than  Seven Co-Author <input name="cother8" type="number" maxlength="150" size="25" > </td>
    
</tr>
</table>       
<hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>     6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>
<tr> <td>  Number of semesters the HoD position was held  </td>
    <td> <input name="sixadmin1" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td>  Number of semesters the Dean position was held   </td>
    <td> <input name="sixadmin2" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td>   Number of semesters the Chief warden position was held  </td>
    <td> <input name="sixadmin3" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>
        Number of semesters the Professor Incharge(T&P) position was held  </td>
    <td> <input name="sixadmin4" type="number" maxlength="150" size="25" > </td>
<tr> 
    <td>  Number of semesters the Advisor(Estate) position was held  </td>
    <td> <input name="sixadmin5" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>   Number of semesters the CVO position was held  </td>
    <td>   <input name="sixadmin6" type="number" maxlength="150" size="25" > </td> </tr>
 
<tr> <td>  Number of semesters the PI(Exam) position was held </td>
    <td> <input name="sixadmin7" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td>
        Number of semesters the TEQIP(Coordinator) position was held  </td>
    <td> <input name="sixadmin8" type="number" maxlength="150" size="25" > </td> 
 </tr>
</table>       
      <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>  <b> 7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>
<tr> <td>  Number of semesters the Warden positions was held </td>
    <td> <input name="sevenadminothers1" type="number" maxlength="150" size="25" > </td> </tr>
<tr>
    <td>  Number of semesters the Assistant warden positions was held  </td>
    <td> <input name="sevenadminothers2" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td> Number of semesters the Associate positions was held  </td>
    <td> <input name="sevenadminothers3" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td> Number of semesters the Chairman/Convener institute academic committees positions was held  </td>
    <td> <input name="sevenadminothers4" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td>  Number of semesters the Faculty In charge Computer Center positions was held </td> 
    <td> <input name="sevenadminothers5" type="number" maxlength="150" size="25" > </td> </tr>
<tr>  <td> Number of semesters the IT Services positions was held  </td>
<td>  <input name="sevenadminothers6" type="number" maxlength="150" size="25" >  </td></tr>
     
<tr> <td>  Number of semesters the Library positions was held  </td>
    <td> <input name="sevenadminothers7" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>
        Number of semesters the Admission center positions was held </td> 
    <td> <input name="sevenadminothers8" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td>     Number of semesters the Student Activity positions was held  </td>
    <td>  <input name="sevenadminothers9" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>
        Number of semesters the  Other Institutional Activity positions was held  </td>
    <td> <input name="sevenadminothers10" type="number" maxlength="150" size="25" > </td> 
 </tr>
</td>
</table>  
 <hr>         
<table CELLPADDING=10 cellspacing="10" > 
    <tr> <p> <b>8. Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>
<tr> <td> Number of semesters the Chairman/Convener standing committees position was held  </td>
    <td>  <input name="eightadminresp1" type="number" maxlength="150" size="25" > </td></tr>
<tr> <td> Number of semesters the Chairman/Convener special committees position was held  </td>
    <td> <input name="eightadminresp2" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>  Number of semesters the Fac-incharge of different Units position was held  </td>
    <td>   <input name="eightadminresp3" type="number" maxlength="150" size="25" > </td>
 </tr>
</table>        
 <hr>            
            

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>9. Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion) (Upload Letter as mentioned in the Gazzete
notification NOTE 1(4):</b> </p> </tr>
<tr> <td> Number of semesters the Lab incharge positions was held  </td>
    <td>  <input name="nineadminresp1" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>   Number of semesters the Dept. level committee positions was held  </td> 
    <td>   <input name="nineadminresp2" type="number" maxlength="150" size="25" > </td> </tr>
</table>       

 <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>  <b>10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)(Upload the coordinator/convernor certificate):</b> </p></tr>
<tr> <td> Number of workshops/courses conducted as coordinator or convenor  </td>
    <td>   <input name="workshop" type="number" maxlength="150" size="25" >    </td></tr>
</table>       
 <hr>     
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion)(Upload the letter issued by
sanctioning authority): </b> </p></tr>
<tr> <td>   No. of GIAN Course Program Coordinator-2 week  </td>
    <td>  <input name="gian1" type="number" maxlength="150" size="25" > </td> </tr>
<tr> <td>      No. of  GIAN Course Program Coordinator-1 week  </td>
    <td>  <input name="gian2" type="number" maxlength="150" size="25" > </td> </tr>
</table>
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>12. National/International Conference organized as Chairman/Secretary(since last promotion)(Upload the letter issued by
sanctioning authority):</b> </p></tr>
<tr> <td>  Number of National/International Conference organized as Chairman/Secretary </td> 
    <td>  <input name="national" type="number" maxlength="150" size="25" > </td>
     </tr>
</table>
 <hr>
<table  CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of year(since last promotion)</b> </p> </tr>
<tr> <td> Teaching Experience(In Semester) </td>
    <td> <input name="teachexp" type="number" maxlength="150" size="25" >   </td>
    </tr>
</table>
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>14. Establishment of new lab(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution):</b> </p> </tr>

<tr> <td> No. of new lab establishment</td>
    <td>  <input name="eslab" type="number" maxlength="150" size="25"> </td>
    </tr>
</table>
 <hr>   
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)</b> </p> </tr>
<tr> <td>    Teaching the course(with credit over and above 6)(Upload Time table copy scanned officially issued): </td> 
<td>  <input name="teach" type="number" maxlength="150" size="25">  </td>  
    </tr>
</table>
 <hr>     
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>16. PG Dissertation guided(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution):</b> </p> </tr>

 <tr> <td>    Number of PG Dissertation(s) guided  </td>
     <td>   <input name="pg" type="number" maxlength="150" size="25">   </td> 
    </tr>
</table>
 <hr>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b>17. UG Project guided(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution):</b> </p> </tr>
 <tr><td>
         Number of UG Dissertation(s) guided  </td>
     <td> <input name="ug" type="number" maxlength="150" size="25">   </td> </tr>
</table>
 <hr>    
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
        <b>18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)(Upload Agreement between author and publisher):</b> </p> </tr>
 <tr> <td>
         Number of Text/Reference books published </td>
     <td> <input name="book" type="number" maxlength="150" size="25">   </td>     
    </tr>
</table>
      
 <hr>   
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b> 19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion)(Upload First page containing author name of
the book chapter):</b> </p> </tr>
<tr><td>
        Number of Text/Reference books published </td>
    <td> <input name="chapter" type="number" maxlength="150" size="25">   </td>
</tr>
</table>

 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>20.Significant outreach Institute Activities(Since last promotion)</b> </p> </tr>
<tr> <td>
        Number of significant outreach institute activies  </td>
    <td>    <input name="outreach" type="number" maxlength="150" size="25">   </td>
    </tr>
</table>
 
 <hr> 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion)(Attach relevant document): </b> </p> </tr>
<tr> <td>
        Fellow IEEE, INA, FNAE, FNSc </td>
    <td>  <input name="ina" type="number" maxlength="150" size="25">  </td>
    </tr>
</table>
 <hr>  
      
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>  22.Placement percentage(Only for the placement cell officers)-Since last promotion(Upload Relevant document endorsed by the
Head of the Institution): </b> </p> </tr>
 <tr> <td>
         22a. Number of years placement was above 85%  </td>
     <td>   <input name="placement1" type="number" maxlength="150" size="25">  </td> </tr>
 <tr> <td>
         22b.Number of years placement was from 75 to 84% </td>
     <td>   <input name="placement2" type="number" maxlength="150" size="25">   </td> 
    </tr>
</table>      
 <hr>
 <p> <b> Relevant Research/Teaching Experience(Mandatory Field) </b> </p>    
<table colspan="10"> 
             <tr><td colspan="3"> </td></tr>
             <tr> <td> &nbsp;</td><td> &nbsp;&nbsp;&nbsp; Year&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp; Months</td> </tr>
             <tr><td>Total working experience:</td><td><input type="text" maxlength="100" size="10" id="nexpg" name="nexpg"  style="width:100px;" required></td><td><input type="text" maxlength="100" size="10" id="nexpg1" name="nexpg1" required  style="width:100px;"><td> </tr>
         <tr><td>Duration after PhD:<td> <input type="text" maxlength="100" size="10"  id="nexphd" name="nexphd"  style="width:100px;" required></td><td> <input type="text" maxlength="100" size="10" id="nexphd1" name="nexphd1" required style="width:100px;"><td> </tr>
         <tr><td>Experience at the level of Assistant Professor(AGP:8000) or equivalent :<td> <input type="text" maxlength="100" size="10"  id="nexap" name="nexap"  style="width:100px;" required></td><td> <input type="text" maxlength="100" size="10" id="nexap1" name="nexap1" required style="width:100px;"><td> </tr>
         
         </table> 
 <hr>
        <!--<br> <b>number of score is </b>: <br>-->
        <center>  <input type="submit" id="btn1" formaction="rulesinserteq4.php" value="calculate Credit" name="save"> </center>
     <!--   <input type="submit" id="btn1" formaction="nerulesinsert1.php" value="Submit" name="save1"> -->
 </form>
</body>
</html>

<?php

        }
             ?>
