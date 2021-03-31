<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
$user_home = new USER();
//$br=$_SESSION['br'];
//$pos=$_SESSION['pos'];
$aid=$_SESSION['userSession'] ;

$back=$_POST["back"];
if($back==1){
$vapn=$_SESSION['vapn'];
$eligible=$_POST["eligible"];
//$eligible=$_SESSION['eligible'];
$remark=$_POST["remark"];
//$remark=$_SESSION['remark']; 
}
else
{
$vapn=$_POST["viewsrc"]; 
$_SESSION['vapn']=$vapn;
$eligible=$_POST["eligible"];
$remark=$_POST["remark"];
//$_SESSION['eligible']=$eligible;
//$_SESSION['remark']=$remark;

}
 
$UID=$_POST["UID"];



if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        

    }
    
$sql =  "SELECT * FROM newrules2 WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();

$sql =  "SELECT * FROM profex WHERE appn='$vapn'";
$result21 =  mysqli_query($link, $sql);
$row2=$result21->fetch_array();

$sqlem =  "SELECT * FROM postapplied WHERE appid='$vapn'";
$resultem =  mysqli_query($link, $sqlem);
$rowem=$resultem->fetch_array();
$UID=$rowem['email'];
$_SESSION['Aemail']=$UID;

#$sql =  "SELECT * FROM newrules2 WHERE appn='$nappn'";
##$result2 =  mysqli_query($link, $sql);
#$row1=$result2->fetch_array();
/*
$sql =  "SELECT * FROM postapplied WHERE appn='$vapn'";
$result3 =  mysqli_query($link, $sql);
 * 
 */
$sql1 =  "SELECT * FROM newrules2src WHERE appn='$vapn'";
$result11 =  mysqli_query($link, $sql1);

if(($scrrow=$result11->fetch_array()))
{
$row1=$scrrow;
$xxxx=1;
}
else
{
$xxxx=0;
$row1=$row;
}

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
 
 $sql111 =  "SELECT * FROM crediteq1 WHERE appn='$vapn'";
	$result111 =  mysqli_query($link, $sql111);
	 $scrrow1=$result111->fetch_array();

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
                    <a class="brand" href="adminsrc.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $aid; ?> <i class="caret"></i>
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
                                                             
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
          
       <form action="veq2.php" method="post" name="f1" >
      <hr>
      <table  rule="rows">
          <tr>
              <th>  <p> Your application  No :  <input type="text"  name="nappn" value="<?php echo $vapn ; ?> "  readonly/> </p> </th> </td>
                 </tr>

      </table>
      <hr>
<input type="hidden" name="UID" value=" <?php echo $UID; ?> " readonly/>
      <table>
          <tr>
              <th> <p> Faculty Name : </th> <td> <input type="text"  name="name"  masize="200" value="<?php echo $row['name'];  ?> " readonly/> </p>
 </td>
         
    </tr>
<tr> <th> Credits (based user details) </th> <td><input type="text" name="usercredit" value="   <?php echo $scrrow1['credit1']; ?> " readonly/></td> </tr>
</table>
 <hr>  
 <table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    1. One external sponsored R & D Projects completed or ongoing/patent granted </b> </p> </tr>
 <tr> <td>  1a. No. of project - Completed or Ongoing as Lone PI</td> 
 <td>  <input name="loneproj" type="number" size="50" maxlength="150" value="<?php echo $row['loneproj'] ?>"   readonly> </td> <td>  <input name="loneprojscr" type="number" size="50" maxlength="150" value="<?php echo $row1['loneproj'] ?>"  > </td> </tr>
 <tr> <td>  1b. No. of project - Completed or Ongoing as Team PI </td> 
     <td>  <input name="teamproj" type="number" maxlength="150" size="25" value="<?php echo $row['teamproj'] ?>" readonly> </td> <td>  <input name="teamprojscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teamproj'] ?>" > </td> </tr>
 <tr> <td> 1c. No. of project - Completed or Ongoing as Co-PI </td>
     <td>   <input name="coproj" type="number" maxlength="150" size="25" value="<?php echo $row['coproj'] ?>" readonly> </td> <td>   <input name="coprojscr" type="number" maxlength="150" size="25" value="<?php echo $row1['coproj'] ?>"> </td> </tr>
 <tr> <td>   1d. No. of  Patent - Granted </td> 
 <td>  <input name="patgrant" type="number" maxlength="150" size="25" value="<?php echo $row['patgrant'] ?>" readonly> </td>
 <td>  <input name="patgrantscr" type="number" maxlength="150" size="25" value="<?php echo $row1['patgrantscr'] ?>" > </td>
</tr>
</td>
</table>
 <hr>      
       
 <table CELLPADDING=10 cellspacing="10" >
     <tr> <p>  <b>    2. Consultancy Projects </b> </p> </tr>
 <tr> <td> No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy </td>
 <td>     <input name="consult" type="number" maxlength="150" size="25"  value="<?php echo $row['consult'] ?>" readonly> </td> 
<td>     <input name="consultscr" type="number" maxlength="150" size="25"  value="<?php echo $row1['consult'] ?>"> </td> 
</tr>
</table>
   
 <hr>
 <table CELLPADDING=10 cellspacing="10">
 <tr> <p> <b>3.Doctorates Guided(including thesis submitted cases) </b> </p> </tr>
<tr>3a. No. of  PhD Completed/Thesis submitted - Lone supervisor</tr>
<tr>  <td>    <input name="loneguide" type="number" size="50" maxlength="150"  value="<?php echo $row['loneguide'] ?>"  readonly> </td> <td>    <input name="loneguidescr" type="number" size="50" maxlength="150"  value="<?php echo $row1['loneguide'] ?>"> </td> </tr>
</table>
 <table CELLPADDING=10 cellspacing="10">
<tr> 3b. No. of  PhD Completed/Thesis submitted jointly as Head supervisor</tr>
<tr> <td>  <input name="headguide" type="number" maxlength="150" size="25" value="<?php echo $row['headguide'] ?>"  readonly> </td> <td>  <input name="headguidescr" type="number" maxlength="150" size="25" value="<?php echo $row1['headguide'] ?>"  > </td></tr>
</table>
<table CELLPADDING=10 cellspacing="10">
<tr>3c. No. of PhD Completed/Thesis submitted - Co-supervisor </tr> 
<tr>
    <td>One Co-supervisor  <input name="coguide" type="number" maxlength="150" size="25" value="<?php echo $row['coguide'] ?>" readonly > </td> 
    <td>Two Co-supervisor  <input name="coguide2" type="number" maxlength="150" size="25" value="<?php echo $row['coguide2'] ?>"  readonly> </td> 
    <td>Three Co-supervisor  <input name="coguide3" type="number" maxlength="150" size="25" value="<?php echo $row['coguide3'] ?>" readonly> </td> 
    <td>Four Co-supervisor  <input name="coguide4" type="number" maxlength="150" size="25" value="<?php echo $row['coguide4'] ?>" readonly > </td> 
    <td>Greater than Five Co-supervisor   <input name="coguide5" type="number" maxlength="150" size="25" value="<?php echo $row['coguide5'] ?>" readonly> </td> 
 </tr>
<tr>
<td>One Co-supervisor  <input name="coguidescr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide'] ?>"  > </td> 
    <td>Two Co-supervisor  <input name="coguide2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide2'] ?>"  > </td> 
    <td>Three Co-supervisor  <input name="coguide3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide3'] ?>" > </td> 
    <td>Four Co-supervisor  <input name="coguide4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide4'] ?>"  > </td> 
    <td>Greater than Five Co-supervisor   <input name="coguide5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['coguide5'] ?>" > </td> 
 </tr>
</table>
 <hr>    
       
<table CELLPADDING=10 cellspacing="10" >
 <tr> <p> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b> </p> </tr>
<tr>  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers </tr>
<tr> <td> <input name="jsing" type="number" size="50" maxlength="150"  value="<?php echo $row['jsing'] ?>" readonly> </td> <td> <input name="jsingscr" type="number" size="50" maxlength="150"  value="<?php echo $row1['jsing'] ?>" > </td> </tr>


</table>
<table CELLPADDING=10 cellspacing="10" >
<tr> 4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor </tr>
<tr> <td>   <input name="jmain" type="number" size="50" maxlength="150"  value="<?php echo $row['jmain'] ?>" readonly > </td> <td>   <input name="jmainscr" type="number" size="50" maxlength="150"  value="<?php echo $row1['jmain'] ?>"  > </td>  </tr>
</table>
    <table CELLPADDING=10 cellspacing="10" >
     <tr> 4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author </tr>
     <tr>  <td>One Co-Author  <input name="jother" type="number" maxlength="150" size="25" value="<?php echo $row['jother'] ?>"  readonly> </td>
         <td>Two Co-Author  <input name="jother2" type="number" maxlength="150" size="25" value="<?php echo $row['jother2'] ?>"  readonly> </td>
         <td>Three Co-Author  <input name="jother3" type="number" maxlength="150" size="25" value="<?php echo $row['jother3'] ?>"  readonly> </td>
         <td>Four Co-Author  <input name="jother4" type="number" maxlength="150" size="25" value="<?php echo $row['jother4'] ?>"  readonly> </td>
         <td>Greater than Five Co-Author  <input name="jother5" type="number" maxlength="150" size="25" value="<?php echo $row['jother5'] ?>" readonly> </td>
 </tr>

 <tr>  <td>One Co-Author  <input name="jotherscr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother'] ?>"  > </td>
         <td>Two Co-Author  <input name="jother2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother2'] ?>"  > </td>
         <td>Three Co-Author  <input name="jother3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother3'] ?>"  > </td>
         <td>Four Co-Author  <input name="jother4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother4'] ?>"  > </td>
         <td>Greater than Five Co-Author  <input name="jother5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['jother5'] ?>" > </td>
 </tr>
</table>
 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>5. One Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b> </p></tr>
<tr> 5a. No. of Conference paper - Single Author Papers</tr>
<tr> <td> <input name="csing" type="number" maxlength="150" size="25" value="<?php echo $row['csing'] ?>" readonly >   </td> <td> <input name="csingscr" type="number" maxlength="150" size="25" value="<?php echo $row1['csing'] ?>"  >   </td></tr>
</table>
      <table CELLPADDING=10 cellspacing="10" >
<tr> 5b. No. of Conference paper - First author/Main supervisor </tr>
<tr> <td> <input name="cmain" type="number" maxlength="150" size="25" value="<?php echo $row['cmain'] ?>" readonly >  </td> <td> <input name="cmainscr" type="number" maxlength="150" size="25" value="<?php echo $row1['cmain'] ?>"  >  </td></tr>
</table>
  <table CELLPADDING=10 cellspacing="10" >
<tr> 5c. No. of  Conference paper - Co-author</tr>
<tr>  <td>One Co-Author  <input name="cother" type="number" maxlength="150" size="25" value="<?php echo $row['cother'] ?>" readonly> </td>
    <td>Two Co-Author   <input name="cother2" type="number" maxlength="150" size="25" value="<?php echo $row['cother2'] ?>" readonly> </td>
     <td>Three Co-Author <input name="cother3" type="number" maxlength="150" size="25" value="<?php echo $row['cother3'] ?>" readonly> </td>
     <td>Four Co-Author  <input name="cother4" type="number" maxlength="150" size="25" value="<?php echo $row['cother4'] ?>" readonly> </td>
     <td>Five Co-Author  <input name="cother5" type="number" maxlength="150" size="25" value="<?php echo $row['cother5'] ?>" readonly> </td>
     <td>Six Co-Author   <input name="cother6" type="number" maxlength="150" size="25" value="<?php echo $row['cother6'] ?>" readonly> </td>
     <td>Seven Co-Author <input name="cother7" type="number" maxlength="150" size="25" value="<?php echo $row['cother7'] ?>" readonly>  </td>
     <td>Greater than  Eight Co-Author<input name="cother8" type="number" maxlength="150" size="25" value="<?php echo $row['cother8'] ?>" readonly> </td>
 </tr>

<tr>  <td>One Co-Author  <input name="cotherscr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother'] ?>" > </td>
    <td>Two Co-Author   <input name="cother2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother2'] ?>" > </td>
     <td>Three Co-Author <input name="cother3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother3'] ?>" > </td>
     <td>Four Co-Author  <input name="cother4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother4'] ?>" > </td>
     <td>Five Co-Author  <input name="cother5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother5'] ?>" > </td>
     <td>Six Co-Author   <input name="cother6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother6'] ?>" > </td>
     <td>Seven Co-Author <input name="cother7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother7'] ?>" >  </td>
     <td>Greater than  Eight Co-Author<input name="cother8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['cother8'] ?>" > </td>
 </tr>
</table>       

 <hr>
 
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>     6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the HoD position was held </td>
    <td>  <input name="sixadmin1" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin1'] ?>"  readonly> </td>
    <td>  <input name="sixadmin1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin1'] ?>"  > </td>
</tr>
<tr> <td> Number of semesters the Dean position was held </td>
    <td> <input name="sixadmin2" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin2'] ?>"  readonly> </td>
    <td> <input name="sixadmin2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin2'] ?>"  > </td>
</tr>
<tr> <td> Number of semesters the Chief warden position was held </td> 
    <td>  <input name="sixadmin3" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin3'] ?>"  readonly> </td> 
  <td>  <input name="sixadmin3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin3'] ?>"  > </td> </tr>
          
<tr> <td> Number of semesters the Professor Incharge(T&P) position was held </td> 
    <td> <input name="sixadmin4" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin4'] ?>"  readonly> </td> 
   <td> <input name="sixadmin4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin4'] ?>"> </td> </tr>
          
<tr> <td> Number of semesters the Advisor(Estate) position was held </td> 
    <td>  <input name="sixadmin5" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin5'] ?>"  readonly> </td> 
   <td>  <input name="sixadmin5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin5'] ?>"  > </td> </tr>           
<tr> <td> Number of semesters the CVO position was held </td> 
    <td>  <input name="sixadmin6" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin6'] ?>"  readonly>   </td>
 <td>  <input name="sixadmin6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin6'] ?>"  >   </td>
 </tr>
<tr> <td>
        Number of semesters the PI(Exam) position was held </td> 
    <td> <input name="sixadmin7" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin7'] ?>"  readonly>   </td> 
<td> <input name="sixadmin7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin7'] ?>"  >   </td>
</tr>
<tr>
    <td> Number of semesters the TEQIP(Coordinator) position was held </td>
    <td>  <input name="sixadmin8" type="number" maxlength="150" size="25" value="<?php echo $row['sixadmin8']?>"  readonly>  </td> 
<td>  <input name="sixadmin8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sixadmin8']?>"  >  </td>
</tr>
</table>  
 <hr>

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion):</b> </p> </tr>

<tr> <td> Number of semesters the Warden positions was held </td>
    <td>  <input name="sevenadminothers1" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers1'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers1'] ?>"  >  </td>
</tr>

<tr> <td> Number of semesters the Assstistance warden positions was held </td> 
<td>  <input name="sevenadminothers2" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers2'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers2'] ?>"  >  </td> 
</tr>  

<tr> <td> Number of semesters the Associate positions was held </td> 
    <td>   <input name="sevenadminothers3" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers3'] ?>" readonly > </td>
<td>   <input name="sevenadminothers3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers3'] ?>"  > </td>
</tr>

<tr> <td>  Number of semesters the Chairman/Convener institute academic committees positions was held </td> 
    <td>  <input name="sevenadminothers4" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers4'] ?>"  readonly>  </td>
<td>  <input name="sevenadminothers4scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers4'] ?>"  >  </td>
 </tr>

<tr> <td> Number of semesters the Faculty In charge Computer Center positions was held </td>
    <td> <input name="sevenadminothers5" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers5'] ?>"  readonly>  </td>
 <td> <input name="sevenadminothers5scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers5'] ?>"  >  </td>
</tr>

<tr> <td> Number of semesters the IT Services positions was held </td> 
<td>  <input name="sevenadminothers6" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers6'] ?>"  readonly>  </td> 
<td>  <input name="sevenadminothers6scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers6'] ?>"  >  </td>
</tr>
<tr> <td> Number of semesters the Library positions was held </td>
    <td>     <input name="sevenadminothers7" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers7'] ?>"  readonly>    </td>
<td>     <input name="sevenadminothers7scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers7'] ?>"  >    </td>
 </tr>
<tr>
    <td> Number of semesters the Admission center positions was held </td>
    <td> <input name="sevenadminothers8" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers8'] ?>"  readonly>  </td> 
<td> <input name="sevenadminothers8scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers8'] ?>"  >  </td> 
</tr> 
      
<tr> <td> Number of semesters the Student Activity positions was held </td>
    <td>  <input name="sevenadminothers9" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers9'] ?>"  readonly>  </td> 
 <td>  <input name="sevenadminothers9scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers9'] ?>"  >  </td> 
</tr>
          
<tr> <td> Number of semesters the  Other Institutional Activity positions was held </td>
    <td> <input name="sevenadminothers10" type="number" maxlength="150" size="25" value="<?php echo $row['sevenadminothers10'] ?>"  readonly>    </td> 
<td> <input name="sevenadminothers10scr" type="number" maxlength="150" size="25" value="<?php echo $row1['sevenadminothers10'] ?>"  >    </td>
</tr>
</table>  
            
 <hr>
 
<table CELLPADDING=10 cellspacing="10" > 
    <tr> <p> <b>    8. Additional Responsibilities (Chairman/Convener standing committees, Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Chairman/Convener standing committees position was held </td>
    <td>   <input name="eightadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp1'] ?>"  readonly>  </td> 
<td>   <input name="eightadminresp1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp1'] ?>"  >  </td>
</tr>  
  
<tr> <td> Number of semesters the Chairman/Convener special committees position was held </td>
    <td> <input name="eightadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp2'] ?>"  readonly> </td> 
<td> <input name="eightadminresp2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp2'] ?>"  > </td>
</tr>      
 
<tr> <td> Number of semesters the Fac-incharge of different Units position was held </td>
    <td> <input name="eightadminresp3" type="number" maxlength="150" size="25" value="<?php echo $row['eightadminresp3'] ?>"  readonly>   </td>
<td> <input name="eightadminresp3scr" type="number" maxlength="150" size="25" value="<?php echo $row1['eightadminresp3'] ?>"  >   </td>      
 </tr>
</table>        
            
 <hr>            

<table CELLPADDING=10 cellspacing="10" >
    <tr> <p> <b>    9. Departmental activities identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion):</b> </p> </tr>
<tr> <td> Number of semesters the Lab incharge positions was held </td> 
    <td>  <input name="nineadminresp1" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp1'] ?>"  readonly>   </td> 
<td>  <input name="nineadminresp1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['nineadminresp1'] ?>"  >   </td> </tr>   

<tr> <td> Number of semesters the Dept. level committee positions was held </td>
    <td> <input name="nineadminresp2" type="number" maxlength="150" size="25" value="<?php echo $row['nineadminresp2'] ?>"  readonly>  </td>     
<td> <input name="nineadminresp2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['nineadminresp2'] ?>"  >  </td> </tr>    
</table>       

 <hr>
<table CELLPADDING=10 cellspacing="10" >
 <tr>
 <p> <b>    10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)</b> </p></tr>

<tr> <td> Number of workshops/courses conducted as coordinator or convenor </td>
    <td> <input name="workshop" type="number" maxlength="150" size="25" value="<?php echo $row['workshop'] ?>"  readonly>  </td>        
    <td> <input name="workshopscr" type="number" maxlength="150" size="25" value="<?php echo $row1['workshop'] ?>"  >  </td>        
 </tr>
</td>
</table>       
  
 <hr>
<table CELLPADDING=10 cellspacing="10" >
    <tr> <p>
        <b> 11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion) </b> </p></tr>
<tr> <td> No. of GIAN Course Program Coordinator-2 week </td>
    <td>  <input name="gian1" type="number" maxlength="150" size="25" value="<?php echo $row['gian1'] ?>"  readonly> </td> 
 <td>  <input name="gian1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['gian1'] ?>"  > </td> </tr>
<tr> <td> No. of  GIAN Course Program Coordinator-1 week </td>
    <td> <input name="gian2" type="number" maxlength="150" size="25" value="<?php echo $row['gian2'] ?>"  readonly> </td>
   <td> <input name="gian2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['gian2'] ?>"  > </td>
    </tr>
</table>
  
 <hr> 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 12. National/International Conference organized as Chairman/Secretary(since last promotion) </b> </p> </tr>
<tr> <td> Number of National/International Conference organized as Chairman/Secretary </td> 
    <td> <input name="national" type="number" maxlength="150" size="25" value="<?php echo $row['national'] ?>"  readonly> </td> 
   <td> <input name="nationalscr" type="number" maxlength="150" size="25" value="<?php echo $row1['national'] ?>"  > </td> </tr>
</table>
 <hr>
 
<table  CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b> 13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of year(since last promotion) </b> </p> </tr>
<tr> <td> Teaching Experience(In Year) </td> 
<td>  <input name="teachexp" type="number" maxlength="150" size="25" value="<?php echo $row['teachexp'] ?>"  readonly> </td> 
<td>  <input name="teachexpscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teachexp'] ?>" > </td> 
    </tr>
</table>
      
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  14. Establishment of new lab(Since last promotion)  </b> </p> </tr>
<tr> <td> No. of new lab establishment </td> 
    <td> <input name="eslab" type="number" maxlength="150" size="25" value="<?php echo $row['eslab'] ?>"  readonly> </td>
 <td> <input name="eslabscr" type="number" maxlength="150" size="25" value="<?php echo $row1['eslab'] ?>"  > </td></tr>
</table>
       
 <hr>
 
<table CELLPADDING=10 cellspacing="10">
    <tr> <p>
        <b>  15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)  </b> </p> </tr>
<tr> <td> Teaching the course(with credit over and above 6)</td>
    <td> <input name="teach" type="number" maxlength="150" size="25" value="<?php echo $row['teach'] ?>"  readonly>    </td>
<td> <input name="teachscr" type="number" maxlength="150" size="25" value="<?php echo $row1['teach'] ?>" >    </td>
    </tr>
</table>
 
 <hr> 
 <table CELLPADDING=10 cellspacing="10">
     <tr> <p>
         <b>  16. PG Dissertation guided(Since last promotion) </b> </p> </tr>
 <tr><td> Number of PG Dissertation(s) guided </td>
     <td> <input name="pg" type="number" maxlength="150" size="25" value="<?php echo $row['pg'] ?>"  readonly>  </td>
<td> <input name="pgscr" type="number" maxlength="150" size="25" value="<?php echo $row1['pg'] ?>" >  </td>
</tr>
</table>
 
 <hr>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 17. UG Project guided(Since last promotion) </b> </p> </tr>
 <tr> <td> Number of UG Dissertation(s) guided </td> 
     <td> <input name="ug" type="number" maxlength="150" size="25" value="<?php echo $row['ug'] ?>"  readonly> </td> 
    <td> <input name="ugscr" type="number" maxlength="150" size="25" value="<?php echo $row1['ug'] ?>"   </td> </tr>
 </tr>

</table>
 
 <hr>  
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>  <b> 18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)  </b> </p> </tr>
 <tr> <td> Number of Text/Reference books published</td>
     <td> <input name="book" type="number" maxlength="150" size="25" value="<?php echo $row['book']?>"  readonly> </td>
    <td> <input name="bookscr" type="number" maxlength="150" size="25" value="<?php echo $row1['book']?>" > </td>
</tr>
</table>
      
 <hr>    
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion) </b> </p></tr>
<tr> <td> Number of Text/Reference books published </td>
    <td>  <input name="chapter" type="number" maxlength="150" size="25" value="<?php echo $row['chapter'] ?>" readonly > </td> 
 <td>  <input name="chapterscr" type="number" maxlength="150" size="25" value="<?php echo $row1['chapter'] ?>"  > </td> 
</tr>
</table>

 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  20.Significant outreach Institute Activities(Since last promotion) </b> </p> </tr>
<tr> <td> Number of significant outreach institute activies </td> 
    <td>   <input name="outreach" type="number" maxlength="150" size="25" value="<?php echo $row['outreach'] ?>"  readonly> </td>
	<td>   <input name="outreachscr" type="number" maxlength="150" size="25" value="<?php echo $row1['outreach'] ?>" > </td>
    </tr>
</table>
 
 <hr>
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <p> <b>  21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion) </b> </p> </tr>
    
<tr> <td> Fellow IEEE, INA, FNAE, FNSc </td> 
    <td>   <input name="ina" type="number" maxlength="150" size="25" value="<?php echo $row['ina'] ?>"  readonly>  </td>
    <td>   <input name="inascr" type="number" maxlength="150" size="25" value="<?php echo $row1['ina'] ?>"  >  </td>
    </tr>
</table>
      
 <hr>     
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <p>   <b>  22.Placement percentage(Only for the placement cell officers)-Since last promotion </b> </p>
    <tr> <td> 22a. Number of years placement was above 85%</td> 
        <td>  <input name="placement1" type="number" maxlength="150" size="25" value="<?php echo $row['placement1'] ?>"  readonly>  </td>
	 <td>  <input name="placement1scr" type="number" maxlength="150" size="25" value="<?php echo $row1['placement1'] ?>"  >  </td> </tr>
    <tr> <td> 22b.Number of years placement was from 75 to 84% </td> 
        <td> <input name="placement2" type="number" maxlength="150" size="25" value="<?php echo $row['placement2'] ?>"  readonly>  </td> 
        <td> <input name="placement2scr" type="number" maxlength="150" size="25" value="<?php echo $row1['placement2'] ?>"  >  </td>
 </tr>
</table>
 <hr>
<?php if($back==1)
{
?>
<table CELLPADDING=10 cellspacing="10" > 
<!--<th>Eligible/Not Eligible1</th> -->
<td>
<input type="hidden" name="eligible" value="<?php echo $eligible; ?> ">
</td>
<!--<td><?php echo $eligible; ?></td>
<tr><th> Remark</th> -->
 <td><input type="hidden" name="remark" value="<?php echo $remark; ?>"  ></td> 
<!--<td><?php echo $remark; ?></td>-->
  </tr>
</table>
<!--<br> <b>number of score is </b>: <br>-->
 <?php
}
else
{
?>
<table CELLPADDING=10 cellspacing="10" > 
<!--<th>Eligible/Not Eligible</th>--> 
<td>
<input type="hidden" name="eligible" value="<?php echo $eligible; ?> ">

</td>
<!--<td><?php echo $eligible; ?></td>
<tr><th> Remark</th>  -->
<td><input type="hidden" name="remark" value="<?php echo $remark; ?>"></td>
<!--<td><?php echo $remark; ?></td>-->
   </tr>

</table>
<?php
}
?>  
<hr>
<!--<br> <b>number of score is </b>: <br>-->
<center>   
   <input type="submit" id="btn1" formaction="verifiedit2.php" value="Calculate Credit" name="SubmitButton"> </center>
 
         
</form>
   <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
   </body>
   </html>
