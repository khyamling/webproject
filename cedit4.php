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
//$br=$_SESSION['br'];
//$pos=$_SESSION['pos'];
$vapn=$_SESSION['vappn'];

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

  $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        

    }
    
       
$sql =  "SELECT * FROM newrules4 WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();

$sql =  "SELECT * FROM profex WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();
#$sql =  "SELECT * FROM newrules2 WHERE appn='$nappn'";
##$result2 =  mysqli_query($link, $sql);
#$row1=$result2->fetch_array();
/*
$sql =  "SELECT * FROM postapplied WHERE appn='$vapn'";
$result3 =  mysqli_query($link, $sql);
 * 
 */
$post= substr($vapn, 2, 1);
#$branch = substr($nappn, 3, 3);



//echo $branch.$post;
if($post=="1")
{
    $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
    $agp="6000";
}
else if($post=="2")
{
$post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
 $agp="7000";
}
else if($post=="3")
{
$post="Assistant Professor PB-3 with Grade pay of Rs.8000";
 $agp="8000";
}
else if($post=="4")
{
 $post="Associate Professor PB-4 with Grade pay of Rs.9500";
  $agp="9500";
}
else if($post=="5")
{     $post="Professor PB-4 with Grade pay of Rs.10500";
 $agp="10500";
}
else if($post=="6")
{$post="Professor HAG Scale Rs.67000 to 79000";
$agp="67000 to 79000";
}


/*if($branch=="AMH")
{   
    $branch="Applied Mechanics and Hydraulics";
}
else if($branch=="CHE")
{   
$branch="Chemical Engineering";}
else if($branch=="CHY")
{   
$branch="Chemistry";}
else if($branch=="CVE")
{   
    $branch="Civil Engineering";
}
else if($branch=="CSE")
{   
    $branch="Computer Science & Engineering";
}
else if($branch=="EEE")
{   
    $branch=" Electrical and Electronics Engineering";
}
else if($branch=="ECE")
{   
    $branch="Electronics and Communication Engineering";
    }
else if($branch=="ITE")
{   
    $branch="Information Technology";
    }
else if($branch=="MCS")
{   
    $branch="Mathematical And Computational Sciences";
    }
else if($branch=="MLE")
{   
    $branch="Mechanical Engineering";
    }
else if($branch=="MME")
{   
    $branch="Metallurgical and Materials Engineering";
    }
else if($branch=="MNE")
{   
    $branch="Mining Engineering";
    }
else if($branch=="PHY")
{   
    $branch=" Physics";
    }
else if($branch=="SOM")
{   
    $branch="School of  Management";
}*/
 


if($result1!=null )
{      
   } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);   
    
    
    ?>
    
<!--echo $result1.$result3.$result4.$result5.$result7.$result9.$result11.$result13.$result15.$result17.$result18.$result19.$result20.$result21.$result22.$result24.$result26.$result28.$result30.$result32.$result34.$result35.$result37.$result39 ?> -->

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
          
       <form action="edit4.php" method="post" name="f1" >
      <hr>
     <table  rule="rows">
          <tr>
              <th>  <p> Your application  No :  <input type="text"  name="nappn" value="<?php echo $vapn ?> "  readonly/> </p> </th>
                 </tr>
      </table>
      <hr>
      <table>
          <tr>
                    <th>  <p> Faculty Name :<input type="text"  name="name" value="<?php echo $row['name']; ?> " /> </p></th>
                    <th>  <p> Department Name :<input type="text"  name="dept" value="<?php echo $row['dept']; ?> "  /> </p></th>
                    <th>  <p>Current Institute Name :<input type="text"  name="Inst" value="<?php echo $row['Inst']; ?> " /> </p></th>
            </tr>
      </table>
 <hr>  
 <!-- <table>
          <tr>
              <th>  <p> <font size="5"  face="Comic sans MS"  color="black" > Credit Earned:  <input type="text"  name="credit1" value="<?php echo $credit1; ?>" readonly /> </font> </p> </th>
          </tr>
           </table> -->
 <table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    1. External sponsored R & D Projects completed or ongoing/patent granted </b> </p> </tr>
 <tr> <td>  1a. No. of project - Completed or Ongoing as Lone PI</td> 
 <td>  <input name="loneproj" type="number" size="50" maxlength="150" value="<?php echo $row['loneproj'] ?>"   > </td> </tr>
 <tr> <td>  1b. No. of project - Completed or Ongoing as Team PI </td> 
     <td>  <input name="teamproj" type="number" maxlength="150" size="25" value="<?php echo $row['teamproj'] ?>" > </td> </tr>
 <tr> <td> 1c. No. of project - Completed or Ongoing as Co-PI </td>
     <td>   <input name="coproj" type="number" maxlength="150" size="25" value="<?php echo $row['coproj'] ?>" > </td> </tr>
 <tr> <td>   1d. No. of  Patent - Granted </td> 
 <td>  <input name="patgrant" type="number" maxlength="150" size="25" value="<?php echo $row['patgrant'] ?>" > </td>
</tr>
</td>
</table>
 <hr>      
       
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p>  <b>    2. Consultancy Projects </b> </p> </tr>
 <tr> <td> Amount Earned from Consultancy Projects (in Lakhs). (2 credit point @ Rs. 5 lakhs of consultancy) </td>
 <td>     <input name="consult" type="number" maxlength="150" size="25"  value="<?php echo $row['consult'] ?>" > </td> </tr>
</table>
   
 <hr>
    <table CELLPADDING=10 cellspacing="10">
 <tr> <p> <b>3.Doctorates Guided(including thesis submitted cases) </b> </p> </tr>
<tr>3a. No. of  PhD Completed/Thesis submitted - Lone supervisor</tr>
<tr>  <td>    <input name="loneguide" type="number" size="50" maxlength="150"  value="<?php echo $row['loneguide'] ?>" > </td> </tr>
</table>
 <table CELLPADDING=10 cellspacing="10">
<tr> 3b. No. of  PhD Completed/Thesis submitted jointly as Head supervisor</tr>
<tr> <td>  <input name="headguide" type="number" maxlength="150" size="25" value="<?php echo $row['headguide'] ?>" > </td> </tr>
</table>
<table CELLPADDING=10 cellspacing="10">
<tr>3c. No. of PhD Completed/Thesis submitted - Co-supervisor </tr> 
<tr>
    <td>One Co-supervisor  <input name="coguide" type="number" maxlength="150" size="25" value="<?php echo $row['coguide'] ?>" > </td> 
    <td>Two Co-supervisor  <input name="coguide2" type="number" maxlength="150" size="25" value="<?php echo $row['coguide2'] ?>" > </td> 
    <td>Three Co-supervisor  <input name="coguide3" type="number" maxlength="150" size="25" value="<?php echo $row['coguide3'] ?>" > </td> 
    <td>Four Co-supervisor  <input name="coguide4" type="number" maxlength="150" size="25" value="<?php echo $row['coguide4'] ?>" > </td> 
    <td>Greater than Four Co-supervisor   <input name="coguide5" type="number" maxlength="150" size="25" value="<?php echo $row['coguide5'] ?>" > </td> 
 </tr>
</table>
 <hr>    
       
<table CELLPADDING=10 cellspacing="10" >
 <tr> <p> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b> </p> </tr>
<tr>  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers </tr>
<tr> <td> <input name="jsing" type="number" size="50" maxlength="150"  value="<?php echo $row['jsing'] ?>"> </td> </tr>
</table>
<table CELLPADDING=10 cellspacing="10" >
<tr> 4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor </tr>
<tr> <td>   <input name="jmain" type="number" size="50" maxlength="150"  value="<?php echo $row['jmain'] ?>"  > </td> </tr>
</table>
    <table CELLPADDING=10 cellspacing="10" >
     <tr> 4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author </tr>
     <tr>  <td>One Co-Author  <input name="jother" type="number" maxlength="150" size="25" value="<?php echo $row['jother'] ?>"  > </td>
         <td>Two Co-Author  <input name="jother2" type="number" maxlength="150" size="25" value="<?php echo $row['jother2'] ?>"  > </td>
         <td>Three Co-Author  <input name="jother3" type="number" maxlength="150" size="25" value="<?php echo $row['jother3'] ?>"  > </td>
         <td>Four Co-Author  <input name="jother4" type="number" maxlength="150" size="25" value="<?php echo $row['jother4'] ?>"  > </td>
         <td>Greater than Four Co-Author  <input name="jother5" type="number" maxlength="150" size="25" value="<?php echo $row['jother5'] ?>"  > </td>
 </tr>
</table>
 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>5. Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b> </p></tr>
<tr> 5a. No. of Conference paper - Single Author Papers</tr>
<tr> <td> <input name="csing" type="number" maxlength="150" size="25" value="<?php echo $row['csing'] ?>" >  </td></tr>
</table>
      <table CELLPADDING=10 cellspacing="10" >
<tr> 5b. No. of Conference paper - First author/Main supervisor </tr>
<tr> <td> <input name="cmain" type="number" maxlength="150" size="25" value="<?php echo $row['cmain'] ?>" >   </td></tr>
</table>
  <table CELLPADDING=10 cellspacing="10" >
<tr> 5c. No. of  Conference paper - Co-author</tr>
<tr>  <td>One Co-Author  <input name="cother" type="number" maxlength="150" size="25" value="<?php echo $row['cother'] ?>" > </td>
     <td>Two Co-Author   <input name="cother2" type="number" maxlength="150" size="25" value="<?php echo $row['cother2'] ?>" > </td>
     <td>Three Co-Author <input name="cother3" type="number" maxlength="150" size="25" value="<?php echo $row['cother3'] ?>" > </td>
     <td>Four Co-Author  <input name="cother4" type="number" maxlength="150" size="25" value="<?php echo $row['cother4'] ?>" > </td>
     <td>Five Co-Author  <input name="cother5" type="number" maxlength="150" size="25" value="<?php echo $row['cother5'] ?>" > </td>
     <td>Six Co-Author   <input name="cother6" type="number" maxlength="150" size="25" value="<?php echo $row['cother6'] ?>" > </td>
     <td>Seven Co-Author <input name="cother7" type="number" maxlength="150" size="25" value="<?php echo $row['cother7'] ?>" > </td>
     <td>Greater than  Seven Co-Author<input name="cother8" type="number" maxlength="150" size="25" value="<?php echo $row['cother8'] ?>" > </td>
 </tr>
</table>       
<hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>     6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>
<tr> <td> Number of semesters the HoD position was held </td>
    <td>  <input name="sixadmin1" type="number" maxlength="150" size="25" value="<?php echo $row ['sixadmin1'] ?>"  > </td> </tr>
<tr> <td> Number of semesters the Dean position was held </td>
    <td> <input name="sixadmin2" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin2'] ?>"  > </td></tr>
<tr> <td> Number of semesters the Chief warden position was held </td> 
    <td>  <input name="sixadmin3" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin3'] ?>"  > </td> </tr>
          
<tr> <td> Number of semesters the Professor Incharge(T&P) position was held </td> 
    <td> <input name="sixadmin4" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin4'] ?>"  > </td> </tr>
          
<tr> <td> Number of semesters the Advisor(Estate) position was held </td> 
    <td>  <input name="sixadmin5" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin5'] ?>"  > </td> </tr>
             
<tr> <td> Number of semesters the CVO position was held </td> 
    <td>  <input name="sixadmin6" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin6'] ?>"  >   </td> </tr>
<tr> <td>
        Number of semesters the PI(Exam) position was held </td> 
    <td> <input name="sixadmin7" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin7'] ?>"  >   </td> </tr>
<tr>
    <td> Number of semesters the TEQIP(Coordinator) position was held </td>
    <td>  <input name="sixadmin8" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin8']?>"  >  </td> </tr>
</table>  
 <hr>

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>

<tr> <td> Number of semesters the Warden positions was held </td>
    <td>  <input name="sevenadminothers1" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers1'] ?>"  >  </td> </tr>

<tr> <td> Number of semesters the Assstistance warden positions was held </td> 
<td>  <input name="sevenadminothers2" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers2'] ?>"  >  </td> </tr>  

<tr> <td>Number of semesters the Associate positions was held </td> 
    <td>   <input name="sevenadminothers3" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers3'] ?>"  > </td></tr>

<tr> <td>  Number of semesters the Chairman/Convener institute academic committees positions was held </td> 
    <td>  <input name="sevenadminothers4" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers4'] ?>"  >  </td> </tr>

<tr> <td> Number of semesters the Faculty In charge Computer Center positions was held </td>
    <td> <input name="sevenadminothers5" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers5'] ?>"  >  </td></tr>

<tr> <td> Number of semesters the IT Services positions was held </td> 
<td>  <input name="sevenadminothers6" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers6'] ?>"  >  </td> </tr>
<tr> <td> Number of semesters the Library positions was held </td>
    <td>     <input name="sevenadminothers7" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers7'] ?>"  >    </td> </tr>
<tr>
    <td> Number of semesters the Admission center positions was held </td>
    <td> <input name="sevenadminothers8" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers8'] ?>"  >  </td> </tr> 
      
<tr> <td> Number of semesters the Student Activity positions was held </td>
    <td>  <input name="sevenadminothers9" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers9'] ?>"  >  </td> </tr>
          
<tr> <td> Number of semesters the  Other Institutional Activity positions was held </td>
    <td> <input name="sevenadminothers10" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers10'] ?>"  >    </td> </tr>
</table>  
            
 <hr>
 
<table CELLPADDING=10 cellspacing="10" > 
    <tr> <p> <b>    8. Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion)(Attach OM issued by institute or university):</b> </p> </tr>
<tr> <td> Number of semesters the Chairman/Convener standing committees position was held </td>
    <td>   <input name="eightadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp1'] ?>"  >  </td> </tr>  
  
<tr> <td> Number of semesters the Chairman/Convener special committees position was held </td>
    <td> <input name="eightadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp2'] ?>"  > </td> </tr>      
 
<tr> <td> Number of semesters the Fac-incharge of different Units position was held </td>
    <td> <input name="eightadminresp3" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp3'] ?>"  >   </td>     
 </tr>
</table>        
            
 <hr>            

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    9. Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion)(Upload Letter as mentioned in the Gazzete
notification NOTE 1(4)):</b> </p> </tr>
<tr> <td> Number of semesters the Lab incharge positions was held </td> 
    <td>  <input name="nineadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp1'] ?>"  >   </td> </tr>   

<tr> <td> Number of semesters the Dept. level committee positions was held </td>
    <td> <input name="nineadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp2'] ?>"  >  </td> </tr>    
</table>       

 <hr>
<table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)(Upload the certificates):</b> </p></tr>

<tr> <td> Number of workshops/courses conducted as coordinator or convenor </td>
    <td> <input name="workshop" type="number" maxlength="150" size="25" value="<?php echo $row['workshop'] ?>"  >  </td>        
 </tr>
</td>
</table>       
  
 <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>
        <b> 11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion)(Upload the letter issued by
sanctioning authority): </b> </p></tr>
<tr> <td> No. of GIAN Course Program Coordinator-2 week </td>
    <td>  <input name="gian1" type="number" maxlength="150" size="25" value="<?php echo $row['gian1'] ?>"  > </td> </tr>
<tr> <td> No. of  GIAN Course Program Coordinator-1 week </td>
    <td> <input name="gian2" type="number" maxlength="150" size="25" value="<?php echo $row['gian2'] ?>"  > </td>
    </tr>
</table>
  
 <hr> 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 12. National/International Conference organized as Chairman/Secretary(since last promotion)(Upload the letter issued by
sanctioning authority): </b> </p> </tr>
<tr> <td> Number of National/International Conference organized as Chairman/Secretary </td> 
    <td> <input name="national" type="number" maxlength="150" size="25" value="<?php echo $row['national'] ?>"  > </td> </tr>
</table>
 <hr>
 
<table  CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b> 13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of year(since last promotion) </b> </p> </tr>
<tr> <td> Teaching Experience(In Semester) </td> 
<td>  <input name="teachexp" type="number" maxlength="150" size="25" value="<?php echo $row['teachexp'] ?>"  > </td> 
    </tr>
</table>
      
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  14. Establishment of new lab(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution):  </b> </p> </tr>
<tr> <td> No. of new lab establishment </td> 
    <td> <input name="eslab" type="number" maxlength="150" size="25" value="<?php echo $row['eslab'] ?>"  > </td></tr>
</table>
       
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)(Upload Time table copy scanned officially issued):  </b> </p> </tr>
<tr> <td> Teaching the course(with credit over and above 6)</td>
    <td> <input name="teach" type="number" maxlength="150" size="25" value="<?php echo $row['teach'] ?>"  >    </td>
    </tr>
</table>
 
 <hr> 
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>  16. PG Dissertation guided(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution):</b> </p> </tr>
 <tr><td> Number of PG Dissertation(s) guided </td>
     <td> <input name="pg" type="number" maxlength="150" size="25" value="<?php echo $row['pg'] ?>"  >  </td>
</tr>
</table>
 
 <hr>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 17. UG Project guided(Since last promotion)(Upload Letter signed by HOD and
duly endorsed by Head of the Institution): </b> </p> </tr>
 <tr> <td> Number of UG Dissertation(s) guided </td> 
     <td> <input name="ug" type="number" maxlength="150" size="25" value="<?php echo $row['ug'] ?>"  > </td> </tr>
 </tr>
</table>
 
 <hr>  
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)(Upload Agreement between author and publisher):  </b> </p> </tr>
 <tr> <td> Number of Text/Reference books published</td>
     <td> <input name="book" type="number" maxlength="150" size="25" value="<?php echo $row['book']?>"  > </td>
</tr>
</table>
      
 <hr>    
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion)(Upload First page containing author name of
the book chapter): </b> </p></tr>
<tr> <td> Number of Text/Reference books published </td>
    <td>  <input name="chapter" type="number" maxlength="150" size="25" value="<?php echo $row['chapter'] ?>"  > </td> 
</tr>
</table>

 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  20.Significant outreach Institute Activities(Since last promotion) </b> </p> </tr>
<tr> <td> Number of significant outreach Institute Activities </td> 
    <td>   <input name="outreach" type="number" maxlength="150" size="25" value="<?php echo $row['outreach'] ?>"  > </td>
    </tr>
</table>
 
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion)(Attach relevant document): </b> </p> </tr>
    
<tr> <td> Fellow IEEE, INA, FNAE, FNSc </td> 
    <td>   <input name="ina" type="number" maxlength="150" size="25" value="<?php echo $row['ina'] ?>"  >  </td>
    </tr>
</table>
      
 <hr>     
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  22.Placement percentage(Only for the placement cell officers)-Since last promotion(Upload Relevant document endorsed by the
Head of the Institution): </b> </p>
    <tr> <td> 22a. Number of years placement was above 85%</td> 
        <td>  <input name="placement1" type="number" maxlength="150" size="25" value="<?php echo $row['placement1'] ?>"  >  </td> </tr>
    <tr> <td> 22b.Number of years placement was from 75 to 84% </td> 
        <td> <input name="placement2" type="number" maxlength="150" size="25" value="<?php echo $row['placement2'] ?>"  >  </td> </tr>
</table>
 <hr>
 <p> <b> Research/Teaching Experience(Mandatory Field)  </b> </p> 
<table colspan="10"> 
             <tr><td colspan="3"> </td></tr>
             <tr> <td> &nbsp;</td><td> &nbsp;&nbsp;&nbsp; Year&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp; Months</td> </tr>
             <tr><td>Total working experience:</td><td><input type="text" maxlength="100" size="10" id="nexpg" name="nexpg"  style="width:100px;"  value="<?php echo $row1['nexpg'] ?>" required></td><td><input type="text" maxlength="100" size="10" id="nexpg1" name="nexpg1" value="<?php echo $row1['nexpg1'] ?>" required  style="width:100px;"><td> </tr>
         <tr><td>After Ph.D :<td> <input type="text" maxlength="100" size="10"  id="nexphd" name="nexphd"  style="width:100px;" value="<?php echo $row1['nexphd'] ?>" required></td><td> <input type="text" maxlength="100" size="10" id="nexphd1" name="nexphd1"  value="<?php echo $row1['nexphd1'] ?>" required style="width:100px;"><td> </tr>
         <tr><td>Experience at the level of Assistant Professor(AGP:8000) or equivalent :
             <td> <input type="text" maxlength="100" size="10"  id="nexap" name="nexap"  value="<?php echo $row1['nexap'] ?>" style="width:100px;" required></td>
             <td> <input type="text" maxlength="100" size="10" id="nexap1" name="nexap1"  value="<?php echo $row1['nexap1'] ?>" required style="width:100px;"><td> </tr>
         </table>  
 <hr>
<!--<br> <b>number of score is </b>: <br>-->
<center>   <input type="submit" id="btn1" formaction="edit4.php" value="Submit Credit Points" name="SubmitButton">  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
   <!-- <input type="submit" id="btn1" formaction="cedit1.php" value="Calculate Credit" name="SubmitButton"> </center>
         -->
        </form>
</body>
</html>
