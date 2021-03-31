<page backtop="25mm" backbottom="5mm" backleft="0mm" backright="">
  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br> <p style="FONT-SIZE: 8pt;">Faculty Recruitment(Internal)</p></th>
                    <td style="text-align: right; FONT-SIZE: 8pt;width: 20%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
        <hr  style="border:1;height: 2px;"width="60%">
    </page_header>
    <page_footer>
          <hr  style="border:1;height: 2px;"width="60%">    
        <table style="width: 100%;FONT-SIZE: 8pt;">
            <tr>
                <td style="text-align: left;    width: 50%">Application form for faculty position-NITK</td>
                <td style="text-align: right;    width: 50%">page [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
      
    </page_footer>
<?php 
if(!isset($_SESSION)){
    session_start();
}
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$vapn=$_SESSION['gappn'];
$user_home = new USER();
$addv=$_SESSION['addv'];

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
  
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
      

  $sql =  "SELECT * FROM newrules3 WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row4=$result1->fetch_array();


$sql =  "SELECT * FROM crediteq1 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row5=$result2->fetch_array();


$sql =  "SELECT * FROM eq3page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
$sql =  "SELECT * FROM eq3 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();
 $sql  = "SELECT * FROM  upload WHERE email='$UID'";
        
$result3 =  mysqli_query($link, $sql);
   $row3=$result3->fetch_array();
   $imgpath= substr($row3['up1'], 22);
 //  echo $imgpath;
   $imgpath1= substr($row3['up2'], 22);

$post= substr($vapn, 2, 1);
$branch = substr($vapn, 3, 3);
if($post=="1")
{
    //$post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000";
$post="Assistant Professor(On Contract) Grade II, Level-10 (7CPC)";
    $agp="6000";
}
else if($post=="2")
{
//$post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
$post="Assistant Professor(On Contract) Grade II, Level-11 (7CPC)";
 $agp="7000";
}
else if($post=="3")
{
//$post="Assistant Professor PB-3 with Grade pay of Rs.8000";
$post="Assistant Professor - Grade I, Level 12 (7CPC)";
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

if($branch=="AMH")
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
}
?>
 <table cellspacing="1" style="FONT-SIZE: 8pt;"> 
   <tr>
    <td>
      <b>Application No. : </b>
     </td> 
       <td>
            <?php echo $vapn?>
       </td>
     </tr>
     </table>
<table style="FONT-SIZE: 8pt;">
          <tr>      <td>        <b>Post Applied:</b>       </td>
          <td  style="width: 500px;">    <?php echo $post; ?>                   
          </td>
           <td align="left" rowspan="4"> 
<img style="width:120px;height:120px;" src="<?php echo $imgpath; ?>" alt="Photo Not Found">
  </td></tr>  
          <tr>
       <td align="left">
           <b>AGP :  </b> </td>
       <td align="left" colspan="2"><?php echo $agp; ?></td>
          </tr>
          <tr>
       <td align="left">
           <b>Department:</b>
       </td>
         <td style="width: 400px;">
            <?php echo $branch; ?>
      </td>
    </tr>        
<tr>
     <td align="">
       <b>1. Faculty Name: </b>
     </td>
 
     <td>
         <?php echo $row4['name']; ?>                   
         </td>
</tr>
</table>
    <br>
<table style="FONT-SIZE: 8pt;" cellspacing="3">
    <tr><td>
            <b>Total Credit:</b>
        </td>
        <td> <?php echo $row5['credit1']; ?> </td> 
    </tr>
</table>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
<tr><td colspan="9">
               <b>1. One external sponsored R & D Projects completed or ongoing/patent granted</b>
</td>
    </tr>   
<tr>
    <th style="width:140px" colspan="2">1a. No. of project - <br> Completed or Ongoing as Lone PI <br> ( 8 point per Project) </th>
        <th style="width:140px" colspan="2">1b. No. of project - <br> Completed or Ongoing as Team PI <br> ( 5 points per Project) </th>
        <th style="width:140px" colspan="2">1c. No. of project - <br> Completed or Ongoing as Co-PI <br> ( 3 points per Project) </th>
        <th style="width:100px" colspan="2">1d. No. of  Patent - Granted <br> ( 8 credit per Patent)   </th>
        <th style="width:80px" colspan="1">Total</th>
    </tr>
              <tr>
                    <td style="width: 70">Count</td>
                    <td style="width: 70">Credit</td>
                    <td style="width: 70">Count</td>
                    <td style="width: 70">Credit</td>
                    <td style="width: 70">Count</td>
                    <td style="width: 70">Credit</td>
                    <td style="width: 50">Count</td>
                    <td style="width: 50">Credit</td>
                    <td style="width: 80">Total Credit</td>
                </tr>
    <tr>
        <td style="width:80px"><?php echo $row4['loneproj'];?>  </td>
        <?php $result1=8*$row4['loneproj'] ?>
        <td style="width:80px"><?php echo $result1;?>  </td>
        <td style="width:80px"><?php echo $row4['teamproj'];?>  </td>
        <?php $result3=5*$row4['teamproj'] ?>
        <td style="width:80px"><?php echo $result3;?>  </td>
        <td style="width:80px"><?php echo $row4['coproj'];?> </td>
        <?php $result4=3*$row4['coproj'] ?>
        <td style="width:50px"><?php echo $result4;?>  </td>
        <td style="width:50px"><?php echo $row4['patgrant'];?>  </td>
        <?php $result5=8*$row4['patgrant'] ?>
        <td style="width:80px"><?php echo $result5;?>  </td>
        <?php $result6=$result1+$result3+$result4+$result5; ?>
        <td style="width:80px"><?php echo $result6;?>  </td>
</tr>
</table>
 <br>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2"> 
      <tr><td colspan="2">
          <b> 2. Consultancy Projects  </b>
          </td></tr>
                <tr>
                    <th colspan="2">No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy</th> 
                </tr>
                <tr>
                    <td style="width: 370">Count</td>
                    <td style="width: 370">Total Credit</td>
                </tr>
 <tr>
                    <td style="width: 370"><?php echo $row4['consult']; ?></td> 
                 <?php $result2=2*$row4['consult'];

if($result2>10)
{
    $result3=10;
}
else
{
    $result3= $result2;
}
?>
<td style="width: 370"><?php echo $result3; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2" > 
      <tr><td colspan="5">
          <b>3.Doctorates Guided(including thesis submitted cases) </b>
          </td></tr>
<tr>
    <th style="width:330px" colspan="2">3a. No. of  PhD Completed/  Thesis submitted - <br> Lone supervisor  ( 8 points per Student)  </th>
    <th style="width:330px" colspan="2">3b. No. of  PhD Completed/  Thesis submitted jointly as <br>  Head supervisor ( 5 points per Student ) </th> 
     <th style="width:50px" colspan="1">Total Credit</th> 
</tr>
  <tr>         
                    <td style="width:165px"><?php echo $row4['loneguide']; ?></td> 
                   <?php  $result7=8*$row4['loneguide']; ?>
                    <td style="width:165px"><?php echo $result7; ?></td> 
                    <td style="width:165px"><?php echo $row4['headguide']; ?></td> 
                   <?php  $result8=5*$row4['headguide']; ?>
                    <td style="width:165px"><?php echo $result8; ?></td> 
                     <?php $result9=$result7+$result8; ?>
                     <td style="width:50px"><?php echo $result9; ?></td> 
 </tr>
</table>
        <br>
        
 <table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2" > 
      <tr><td colspan="11">
          <b>3c. No. of PhD Completed/Thesis submitted - Co-supervisor  </b>
          </td>
      </tr>
<tr>
    <th style="width:100px" colspan="2">One Co-supervisor <br> (3 points per Student) </th>
                  <th style="width:120px" colspan="2">Two Co-supervisor <br> (1.5 points per Student) </th> 
                  <th style="width:120px" colspan="2">Three Co-supervisor <br> (1.0 points per Student)</th>   
                 <th style="width:120px" colspan="2">Four Co-supervisor <br> (0.75 points per Student) </th> 
                 <th style="width:120px" colspan="2">Greater than<br> Four Co-supervisor <br> (0.6 points per Student) </th> 
                 <th style="width:70px" colspan="1">Total</th> 
  </tr>
  <tr>
                    <td style="width: 50">Count</td>
                    <td style="width: 50">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 70">Total Credit</td>
 </tr>
<tr>         
                    <td style="width:50px"><?php echo $row4['coguide']; ?></td> 
                    <?php $result10=3*$row4['coguide']; ?> 
                    <td style="width:50px"><?php echo $result10; ?></td> 
                    <td style="width:60px"><?php echo $row4['coguide2']; ?></td> 
                   <?php $result11=1.5*$row4['coguide2']; ?>
                    <td style="width:60px"><?php echo $result11; ?></td> 
                    <td style="width:60px"><?php echo $row4['coguide3']; ?></td> 
                    <?php $result12=1.0*$row4['coguide3']; ?>
                    <td style="width:60px"><?php echo $result12; ?></td> 
                    <td style="width:60px"><?php echo $row4['coguide4']; ?></td> 
                    <?php $result13=0.75*$row4['coguide4']; ?> 
                    <td style="width:60px"><?php echo $result13; ?></td> 
                    <td style="width:60px"><?php echo $row4['coguide5']; ?></td> 
                    <?php $result14=+0.6*$row4['coguide5']; ?>
                    <td style="width:60px"><?php echo $result14; ?></td> 
                    <?php $result15=$result10+$result11+$result12+$result13+$result14; ?>
                    <td style="width:70px"><?php echo $result15; ?></td> 
 </tr>
</table>
<br>
 <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
     <tr> <td colspan="3"> <b>  4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion (Paid Journals not allowed)</b>
     </td>
</tr>
<tr>
    <td style="width:570px"> Journal Papers </td>
    <td style="width:80px">Count</td> 
    <td style="width:80px">Total Credit</td> 
    
</tr>
<tr> <td style="width:570px">  4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers <br> (4 points per paper) </td>
     <td style="width:80px"><?php echo $row4['jsing']; ?></td> 
     <?php $result16=4*$row4['jsing']; ?> 
     <td style="width:80px"><?php echo $result16; ?></td> 
</tr>
<tr>
    <td style="width:570px">  4b. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor  <br> (2 points per paper)</td>
    <td style="width:80px"><?php echo $row4['jmain']; ?></td> 
    <?php $result17=2*$row4['jmain']; ?>
    <td style="width:80px"><?php echo $result17; ?></td> 
</tr>
 </table>
<br>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2" > 
      <tr><td colspan="11">
          <b>4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author  </b>
       </td>
      </tr>
<tr>
    <th style="width:100px" colspan="2">One Co-Author <br> (2 points per paper) </th>
    <th style="width:120px" colspan="2">Two Co-Author <br> (1 points per paper) </th> 
    <th style="width:120px" colspan="2">Three Co-Author <br> (0.67 points per paper) </th>   
    <th style="width:120px" colspan="2">Four Co-Author <br> (0.5 points per paper) </th> 
    <th style="width:120px" colspan="2">Greater than<br> Four Co-Author <br> (0.4 points per paper) </th> 
     <th style="width:70px" colspan="1">Total</th> 
  </tr>
  <tr>
                    <td style="width: 50">Count</td>
                    <td style="width: 50">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 60">Count</td>
                    <td style="width: 60">Credit</td>
                    <td style="width: 70">Total Credit</td>
 </tr>
  <tr>         
                    <td style="width:50px"><?php echo $row4['jother']; ?></td> 
                    <?php $result18=2*$row4['jother']; ?>
                    <td style="width:50px"><?php echo $result18; ?></td> 
                    <td style="width:60px"><?php echo $row4['jother2']; ?></td> 
                    <?php $result19=1*$row4['jother2']; ?> 
                    <td style="width:60px"><?php echo $result19; ?></td> 
                    <td style="width:60px"><?php echo $row4['jother3']; ?></td> 
                    <?php $result20= 0.67*$row4['jother3']; ?> 
                    <td style="width:60px"><?php echo $result20; ?></td> 
                    <td style="width:60px"><?php echo $row4['jother4']; ?></td> 
                    <?php $result21=0.5*$row4['jother4']; ?>
                    <td style="width:60px"><?php echo $result21; ?></td> 
                    <td style="width:60px"><?php echo $row4['jother5']; ?></td> 
                    <?php $result22=0.4*$row4['jother5']; ?>
                    <td style="width:60px"><?php echo $result22; ?></td> 
                    <?php $result23= $result18+$result19+$result20+$result21+$result22; ?>
                    <td style="width:70px"><?php echo $result23; ?></td> 
                    
 </tr>
</table>
 <br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
<tr> <td colspan="3"> <b>5. One Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</b>
     </td>
</tr>

<tr> <td style="width: 590">  5a. No. of Conference paper - Single Author Papers </td>
     <td style="width: 140"><?php echo $row4['csing']; ?></td>
     
</tr>
<tr>
    <td style="width: 590">  5b. No. of Conference paper - First author/Main supervisor </td>
    <td style="width: 140"><?php echo $row4['cmain']; ?></td> 
</tr>
</table>
 <br>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2" > 
      <tr><td colspan="8">
          <b>5c. No. of  Conference paper - Co-author </b>
       </td>
      </tr>
<tr>
                  <th style="width:65px">One Co-Author </th>
                  <th style="width:65px">Two Co-Author</th> 
                  <th style="width:70px">Three Co-Author</th>   
                 <th style="width:70px">Four Co-Author</th> 
                 <th style="width:70px">Five Co-Author </th>
                 <th style="width:70px">Six Co-Author </th> 
                 <th style="width:70px">Seven Co-Author </th> 
                 <th style="width:200px">Greater than  Seven Co-Author </th> 
  </tr>
  <tr>         
                    <td style="width:65px"><?php echo $row4['cother']; ?></td> 
                    <td style="width:65px"><?php echo $row4['cother2']; ?></td> 
                    <td style="width:70px"><?php echo $row4['cother3']; ?></td> 
                    <td style="width:70px"><?php echo $row4['cother4']; ?></td> 
                    <td style="width:70px"><?php echo $row4['cother5']; ?></td>
                    <td style="width:70px"><?php echo $row4['cother6']; ?></td>
                    <td style="width:70px"><?php echo $row4['cother7']; ?></td>
                    <td style="width:200px"><?php echo $row4['cother8']; ?></td>             
 </tr>
</table>
 <br>
 <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
     <tr> <td colspan="3"> <b> Total credit Points of 5a, 5b, 5c(Maximum 10 credit Points)</b>
     </td>
</tr>
<tr>
                    <td style="width: 220">Total Count of 5a, 5b, 5c</td>
                    <td style="width: 220">Total Credit Points of 5a, 5b, 5c</td>
                    <td style="width: 260">Total Credit points of 5a, 5b, 5c(Max 10 credit Points)</td>
</tr>
<tr>
      <?php 
      $creditcount=$row4['csing']+$row4['cmain']+$row4['cother']+$row4['cother2']+$row4['cother3']+$row4['cother4']+$row4['cother5']+$row4['cother6']+$row4['cother7']+$row4['cother8'];
      $result24=1*$row4['csing']+0.6*$row4['cmain']+0.4*$row4['cother']+0.2*$row4['cother2']+0.13*$row4['cother3']+0.1*$row4['cother4']+0.02*$row4['cother5']+0.016*$row4['cother6']+0.014*$row4['cother7']+0.012*$row4['cother8'];
if($result24>10)
{
    $result25=10;
}
else
{
    $result25= $result24;
}
?>
                   <td style="width: 220"><?php echo $creditcount; ?></td>
                   <td style="width: 220"><?php echo $result24; ?></td>
                    <td style="width: 260"><?php echo $result25; ?></td>
</tr>
</table>
 <br>
 <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
<tr> <td colspan="2"> <b> 6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P),
            Advisor(Estate), TEQIP Co-ord) - No. of Semesters as (since last promotion):</b>
     </td>
</tr>
<tr> <td style="width: 110">  Number of semesters the HoD position was held </td>
     <td style="width: 110"><?php echo $row4['sixadmin1']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Dean position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin2']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Chief warden position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin3']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Professor Incharge(T&P) position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin4']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Advisor(Estate) position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin5']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the CVO position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin6']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the PI(Exam) position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin7']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the TEQIP(Coordinator) position was held </td>
    <td style="width: 110"><?php echo $row4['sixadmin8']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Count (2 points per semester) </td>
    <?php $totalcount6=$row4['sixadmin1']+$row4['sixadmin2']+$row4['sixadmin3']+$row4['sixadmin4']+$row4['sixadmin5']+$row4['sixadmin6']+$row4['sixadmin7']+$row4['sixadmin8'];?>
    <td style="width: 110"><?php echo $totalcount6; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Credit Points </td>
    <?php $totalcredit61=2*$totalcount6;?>
    <td style="width: 110"><?php echo $totalcredit61; ?></td> 
</tr>
<tr>
    <td style="width: 110"> Total Credit Points(Maximum 16 Credit Points) </td>
    <?php
 if($totalcount6>8)
{
$result26=16;
}
else
{
$result26=2*$totalcount6;
}
?>
<td style="width: 110"><?php echo $result26; ?></td> 
</tr>
</table>
 <br>
 <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
<tr> <td colspan="2"> <b>7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, 
             Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion):</b>
     </td>
</tr>
<tr> <td style="width: 110"> Number of semesters the Warden positions was held </td>
     <td style="width: 110"><?php echo $row4['sevenadminothers1']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Assstistance warden positions was held</td>
    <td style="width: 110"><?php echo $row4['sevenadminothers2']; ?></td> 
</tr>
<tr>
    <td style="width: 110"> Number of semesters the Associate positions was held </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers3']; ?></td> 
</tr>
<tr>
    <td style="width: 110"> Number of semesters the Chairman/Convener institute academic committees positions was held </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers4']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Faculty In charge Computer Center positions was held </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers5']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the IT Services positions was held  </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers6']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Library positions was held  </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers7']; ?></td> 
</tr>
<tr>
    <td style="width: 110">   Number of semesters the Admission center positions was held</td>
    <td style="width: 110"><?php echo $row4['sevenadminothers8']; ?></td> 
</tr>
<tr>
    <td style="width: 110">   Number of semesters the Student Activity positions was held</td>
    <td style="width: 110"><?php echo $row4['sevenadminothers9']; ?></td> 
</tr>
<tr>
    <td style="width: 110">   Number of semesters the  Other Institutional Activity positions was held </td>
    <td style="width: 110"><?php echo $row4['sevenadminothers10']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Count(1 points per semester) </td>
    <?php $totalcount7= $row4['sevenadminothers1']+ $row4['sevenadminothers2']+ $row4['sevenadminothers3']+ $row4['sevenadminothers4']+ $row4['sevenadminothers5']+$row4['sevenadminothers6']+$row4['sevenadminothers7']+$row4['sevenadminothers8']+$row4['sevenadminothers9']+$row4['sevenadminothers10'];?>
    <td style="width: 110"><?php echo $totalcount7; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Credit Points </td>
    <?php $totalcredit71= $row4['sevenadminothers1']+ $row4['sevenadminothers2']+ $row4['sevenadminothers3']+ $row4['sevenadminothers4']+ $row4['sevenadminothers5']+$row4['sevenadminothers6']+$row4['sevenadminothers7']+$row4['sevenadminothers8']+$row4['sevenadminothers9']+$row4['sevenadminothers10'];?>
    <td style="width: 110"><?php echo $totalcredit71; ?></td> 
</tr>
<tr>
    <td style="width: 110"> Total Credit Points(Maximum 8 Credit Points) </td>
    <?php
 if($totalcredit71>8)
{
$result27=8;
}
else
{
$result27=1*$totalcredit71;
}
?>
<td style="width: 110"><?php echo $result27; ?></td> 
</tr>
 </table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
<tr> <td colspan="2"> <b>8. Additional Responsibilities (Chairman/Convener standing committees, 
            Chairman/Convener special committee, Fac-incharge of different Units)- No. of Semesters as (since last promotion):</b>
     </td>
</tr>
<tr> <td style="width: 110"> Number of semesters the Chairman/Convener standing committees position was held </td>
     <td style="width: 110"><?php echo $row4['eightadminresp1']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Chairman/Convener special committees position was held</td>
    <td style="width: 110"><?php echo $row4['eightadminresp2']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Number of semesters the Fac-incharge of different Units position was held</td>
    <td style="width: 110"><?php echo $row4['eightadminresp3']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Count(0.5 points per semester) </td>
    <?php $totalcount8= $row4['eightadminresp1']+$row4['eightadminresp2']+$row4['eightadminresp3'];?>
    <td style="width: 110"><?php echo $totalcount8; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Credit Points </td>
    <?php $totalcredit81= 0.5*$totalcount8;?>
    <td style="width: 110"><?php echo $totalcredit81; ?></td> 
</tr>
<tr>
    <td style="width: 110"> Total Credit Points(Maximum 3 Credit Points) </td>
    <?php
 if($totalcount8>6)
{
$result28=3;
}
else
{
$result28=0.5*$totalcount8;
}
?>
<td style="width: 110"><?php echo $result28; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>9. Departmental activities 
            identified by HoD(Lab incharge, Dept level committee - min 1 year)- No. of Semesters as (since last promotion):</b>
     </td>
</tr>
<tr> <td style="width: 110"> Number of semesters the Lab incharge positions was held </td>
     <td style="width: 110"><?php echo $row4['nineadminresp1']; ?></td> 
</tr>
<tr>
    <td> Number of semesters the Dept. level committee positions was held</td>
    <td><?php echo $row4['nineadminresp2']; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Count(0.5 points per semester) </td>
    <?php $totalcount9= $row4['nineadminresp1']+$row4['nineadminresp2'];?>
    <td style="width: 110"><?php echo $totalcount9; ?></td> 
</tr>
<tr>
    <td style="width: 110">  Total Credit Points </td>
    <?php $totalcredit91= 0.5*$totalcount9;?>
    <td style="width: 110"><?php echo $totalcredit91; ?></td> 
</tr>
<tr>
 <td style="width: 110"> Total Credit Points(Maximum 3 Credit Points) </td>
<?php
 if($totalcount9>6)
{
$result29=3;
}
else
{
$result29=0.5*$totalcount9;
}
?>
<td style="width: 110"><?php echo $result29; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>10. Workshops/FDP/Short term courses of
            minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 110"> Number of workshops/courses conducted as coordinator or convenor <br> (2 credit points per course) </td>
     <td style="width: 110"><?php echo $row4['workshop']; ?></td>
     <?php $totalcount10= $row4['workshop'];?>
</tr>
<tr>
    <td style="width: 110">  Total Credit Points </td>
    <?php $totalcredit10= 2*$totalcount10;?>
    <td style="width: 110"><?php echo $totalcredit10; ?></td> 
</tr>
<tr>
 <td style="width: 110"> Total Credit Points(Maximum 8 Credit Points) </td>
<?php
 if($totalcount10>4)
{
$result30=8;
}
else
{
$result30=2*$totalcount10;
}
?>
<td style="width: 110"><?php echo $result30; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>11. For conducting National programs like GIAN etc.,
            as course coordinator. Program of 2 / 1 week duration(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 150"> No. of GIAN Course Program Coordinator-2 week <br> (2 credit points per course)  </td>
     <td style="width: 150"><?php echo $row4['gian1']; ?></td> 
     <?php $totalcount11= $row4['gian1'];?>
</tr>
<tr> <td style="width: 150"> Total Credit Points</td>
     <td style="width: 150"><?php echo 2*$totalcount11; ?></td> 
</tr>
<tr> <td style="width: 150"> Total Credit Points(Max 4 Credit Points) </td>
    <?php
    if($totalcount11==1)
{
    $result31=2;
}
else if($totalcount11>1){
    $result31=4;
}
else {
    $result31=0;
}
    ?>
     <td style="width: 150"><?php echo $result31; ?></td> 
</tr>

<tr> <td style="width: 150"> No. of GIAN Course Program Coordinator-1 week <br> (1 credit points per course)  </td>
     <td style="width: 150"><?php echo $row4['gian2']; ?></td> 
     <?php $totalcount11a= $row4['gian2'];?>
</tr>
<tr> <td style="width: 150"> Total Credit Points</td>
     <td style="width: 150"><?php echo $totalcount11a; ?></td> 
</tr>
<tr> <td style="width: 150"> Total Credit Points(Max 2 Credit Points) </td>
    <?php
   if($totalcount11a==1)
{
    $result32=1;
}
else if($totalcount11a>1){
    $result32=2;
}
else
{
$result32=0;
}
    ?>
     <td style="width: 150"><?php echo $result32; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 12. National/International Conference organized as Chairman/Secretary(since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350"> Number of National/International Conference organized as Chairman/Secretary <br> (3 credit points per program) </td>
     <td style="width: 350"><?php echo $row4['national']; ?></td> 
      <?php $totalcount12= $row4['national'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo 3*$totalcount12; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 6 Credit Points) </td>
    <?php
  if($totalcount12==1)
{
    $result33=3;
}
else if($totalcount12>1){
    $result33=6;
}
else
{
   $result33=0; 
}
    ?>
     <td style="width: 350"><?php echo $result33; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 13. Length of service over and above relevant min. teaching experience required for a given cadre
            -number of year(since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 110"> Teaching Experience(In Year) <br> (2 credit points per semester) </td>
     <td style="width: 110"><?php echo $row4['teachexp']; ?></td> 
     <?php $totalcount13= $row4['teachexp'];?>
</tr>
<tr> <td style="width: 110"> Total Credit Points</td>
     <td style="width: 110"><?php echo 2*$totalcount13; ?></td> 
</tr>
<tr> <td style="width: 110"> Total Credit Points(Max 10 Credit Points) </td>
    <?php
if($totalcount13>5)
{
    $result34=10;
}
else{
    $result34=2*$totalcount13;
}
    ?>
     <td style="width: 110"><?php echo $result34; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 14. Establishment of new lab(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350"> No. of new lab establishment (4 credit points) </td>
     <td style="width: 350"><?php echo $row4['eslab']; ?></td> 
     <?php $totalcount14= $row4['eslab'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo 4*$totalcount14; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 4 Credit Points) </td>
    <?php
if($totalcount14>=1)
{
    $result35=4;
}
else{
    $result35=0;
}
    ?>
     <td style="width: 350"><?php echo $result35; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350"> Teaching the course(with credit over and above 6) <br> (1 credit point) </td>
     <td style="width: 350"><?php echo $row4['teach']; ?></td>
      <?php $totalcount15= $row4['teach'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo $totalcount15; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 6 Credit Points) </td>
    <?php
if($totalcount15>6)
{
    $result36=6;
}
else {
    $result36=$totalcount15;
}
    ?>
     <td style="width: 350"><?php echo $result36; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 16. PG Dissertation guided(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350"> Number of PG Dissertation(s) guided <br> (0.5 credit point per project)  </td>
     <td style="width: 350"><?php echo $row4['pg']; ?></td>
     <?php $totalcount16= 0.5*$row4['pg'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo $totalcount16; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 10 Credit Points) </td>
    <?php
if($totalcount16>10)
{
    $result37=10;
}
else {
    $result37=$totalcount16;
}
    ?>
     <td style="width: 350"><?php echo $result37; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 17. UG Project guided(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350"> Number of UG Dissertation(s) guided <br> (0.25 credit point per project) </td>
     <td style="width: 350"><?php echo $row4['ug']; ?></td> 
     <?php $totalcount17= 0.25*$row4['ug'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo $totalcount17; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 4 Credit Points) </td>
    <?php
if($totalcount17>4)
{
    $result38=4;
}
else {
    $result38=$totalcount17;
}
    ?>
     <td style="width: 350"><?php echo $result38; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 18. Text/Reference Book Published on relevant subjects from reputed
            international publishers(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 150"> Number of Text/Reference books published <br> (6 credit points per book)  </td>
     <td style="width: 150"><?php echo $row4['book']; ?></td> 
     <?php $totalcount18= 6*$row4['book'];?>
</tr>
<tr> <td style="width: 150"> Total Credit Points</td>
     <td style="width: 150"><?php echo $totalcount18; ?></td> 
</tr>
<tr> <td style="width: 150"> Total Credit Points(Max 18 Credit Points) </td>
    <?php
if($totalcount18>18)
{
    $result39=18;
}
else {
    $result39=$totalcount18;
}
    ?>
     <td style="width: 150"><?php echo $result39; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> 19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
            in the books published by reputed international publishers(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 110"> Number of Text/Reference books published <br> (2 credit points per unit) </td>
     <td style="width: 110"><?php echo $row4['chapter']; ?></td> 
     <?php $totalcount19= 2*$row4['chapter'];?>
</tr>
<tr> <td style="width: 110"> Total Credit Points</td>
     <td style="width: 110"><?php echo $totalcount19; ?></td> 
</tr>
<tr> <td style="width: 110"> Total Credit Points(Max 6 Credit Points) </td>
    <?php
if($totalcount19>6)
{
    $result40=6;
}
else {
    $result40=$totalcount19;
}
    ?>
     <td style="width: 110"><?php echo $result40; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>20.Significant outreach Institute Activities(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350">  Number of significant outreach Institute activities  <br> (1 credit point per activity)</td>
     <td style="width: 350"><?php echo $row4['outreach']; ?></td> 
     <?php $totalcount20= 2*$row4['outreach'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo $totalcount20; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 4 Credit Points) </td>
    <?php
if($totalcount20>4)
{
    $result41=4;
}
else {
    $result41=$totalcount20;
}
    ?>
     <td style="width: 350"><?php echo $result41; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion)</b>
     </td>
</tr>
<tr> <td style="width: 350">   Fellow IEEE, INA, FNAE, FNSc (10 credit points) </td>
     <td style="width: 350"><?php echo $row4['ina']; ?></td>
     <?php $totalcount21= 2*$row4['ina'];?>
</tr>
<tr> <td style="width: 350"> Total Credit Points</td>
     <td style="width: 350"><?php echo $totalcount21; ?></td> 
</tr>
<tr> <td style="width: 350"> Total Credit Points(Max 10 Credit Points) </td>
    <?php
if($totalcount21>0)
{
    $result42=10;
}
 else {
   $result42=0; 
}
    ?>
     <td style="width: 350"><?php echo $result42; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b>22.Placement percentage(Only for the placement cell officers)-Since last promotion</b>
     </td>
</tr>
<tr> <td style="width: 300">  22a. Number of years placement was above 85% (4 credit points per year) </td>
     <td style="width: 300"><?php echo $row4['placement1']; ?></td>
      <?php $totalcount22= 4*$row4['placement1'];?>
</tr>
<tr> <td style="width: 300"> Total Credit Points</td>
     <td style="width: 300"><?php echo $totalcount22; ?></td> 
</tr>
<tr> <td style="width: 300"> Total Credit Points(Max 20 Credit Points) </td>
    <?php
 if($totalcount22>20)
 {
     $result43=20;
 }
 else {
      $result43=$totalcount22;
 }
    ?>
     <td style="width: 300"><?php echo $result43; ?></td> 
</tr>
<tr> <td style="width: 300">  22b.Number of years placement was from 75 to 84% (2 credit points per year) </td>
     <td style="width: 300"><?php echo $row4['placement2']; ?></td> 
     <?php $totalcount22b= 2*$row4['placement2'];?>
</tr>
<tr> <td style="width: 300"> Total Credit Points</td>
     <td style="width: 300"><?php echo $totalcount22b; ?></td> 
</tr>
<tr> <td style="width: 300"> Total Credit Points(Max 10 Credit Points) </td>
    <?php
 if($totalcount22b>10)
 {
     $result44=10;
 }
 else {
      $result44=$totalcount22b;
 }
    ?>
     <td style="width: 300"><?php echo $result44; ?></td> 
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
    <tr> <td colspan="2"> <b> Teaching Experience  </b>  </td> </tr>
   <tr> <td style="width: 660" colspan="2"> After Masters, not including PhD enrollment period: </td> </tr>
   <tr> <td style="width: 330">Year</td>
       <td style="width: 330"><?php echo $rowexp['nexpg']; ?></td> </tr>
   <tr> <td style="width: 330">Month</td>
       <td style="width: 330"><?php echo $rowexp['nexpg1']; ?></td> </tr>
   <tr> <td style="width: 660" colspan="2"> After Ph.D :</td> </tr>
    <tr> <td style="width: 330">Year</td>
       <td style="width: 330"><?php echo $rowexp['nexphd']; ?></td> </tr>
   <tr> <td style="width: 330">Month</td>
       <td style="width: 330"><?php echo $rowexp['nexphd1']; ?></td> </tr> 
</table>
</page>
    
<page backtop="26mm" backbottom="5mm" backleft="0mm" backright="">
 <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br> <p style="FONT-SIZE: 8pt;"> Faculty Recruitment</p></th>
                <td style="text-align: right; FONT-SIZE: 8pt;width: 20%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
        <hr  style="border:1;height: 2px;"width="60%">
    </page_header>
    <page_footer>
          <hr  style="border:1;height: 2px;"width="60%">    
        <table style="width: 100%;FONT-SIZE: 8pt;">
            <tr>
                <td style="text-align: left;    width: 50%">Application form for faculty position-NITK</td>
                <td style="text-align: right;    width: 50%">page [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
      
    </page_footer>
<table cellspacing="1" style="FONT-SIZE: 8pt;"> 
   <tr>
       <td >
       <b>Advertisement No.: </b>
       </td> 
       
        <td style="width: 200px;">
           <?php echo $addv; ?>
       </td>
       <td>
      <b>Application No. : </b>
       </td> 
       
        <td>
            <?php echo $vapn?>
       </td>
     </tr>
     </table>
<table style="FONT-SIZE: 8pt;">
          <tr>      <td>        <b>Post Applied:</b>       </td>
          <td  style="width: 500px;" >    <?php echo $post; ?>                   
          </td>
           <td align="left" rowspan="4"> 
<img style="width:120px;height:120px;" src="<?php echo $imgpath; ?>" alt="Photo Not Found">
  </td></tr>  
          <tr>
       <td align="left">
           <b>AGP :  </b> </td>
       <td align="left" colspan="2"><?php echo $agp; ?></td>
          </tr>
          <tr>
       <td align="left">
           <b>Department:</b>
       </td>
         <td style="width: 400px;">
            <?php echo $branch; ?>
      </td>
    </tr>        
<tr>
     <td align="">
       <b>1. Name in Full : </b>
     </td>
 
     <td>
         <?php echo $row['Page5']; ?>                   
         </td>
</tr>
</table>
<table style="FONT-SIZE: 8pt;" cellspacing="3">
 <tr>       <td >
         <b>a) Father Name  :     </b></td>
        <td>         <?php echo $row['Page6']; ?></td>
     <td align="center">
         <b>Mother Name :</b>
     </td>
     <td>
         <?php echo $row['Page7']; ?>
         </td>
          </tr>
<tr>
 <td >
  <b>b) Gender :</b>
 </td>

 <td>
    <?php echo $row['Page8']; ?>
 </td>
 <td align="">
    <b>c) Marital Status : </b></td>

 <td>
         <?php echo $row['Page11']; ?> 
 </td>
 
<td>
    <b>d) Category :</b>
             <?php echo $row['Page12']?>
</td>   
</tr>
</table>
<table  style="FONT-SIZE: 8pt;" cellspacing="3">
 <tr>
 <td >
  <b>e) Attested copy certificate enclosed(Yes/No) (only in case of SC/St/OBC) :   <?php echo $row['Page17']; ?></b>
 </td>

 <td>
     <b>f)Percentage of Disability of PWD candidate :</b> <?php echo $row['Page18']; ?>
 </td>
 <td align="">
    <b><?php echo $row['Page19']; ?></b></td>

 </tr>

</table>   
<table style="FONT-SIZE: 8pt;" cellspacing="1" border-collapse: collapse;> 
            <tr>
                <td colspan="4">
                    <b>2. Address:   </b>  
                </td>
            </tr>
            <tr>
                <td colspan="2" >  <b>(a) Permanent: </b></td> <td colspan="2"> <b>(b) Address for Correspondence: </b></td>
            </tr>
            <tr>
                <td>  <b>Address Line1 : </b> </td><td style="width:250px"> <?php echo $row['Page22']; ?> </td><td> <b>Address Line1 :</b> </td><td style="width:250px"> <?php echo $row['Page28']; ?> </td>
            </tr>
            <tr>
               <td> <b>Address Line2 :</b> </td><td style="width:250px"> <?php echo $row['Page23']; ?> </td>   <td> <b>Address Line2 :</b></td><td style="width:250px"><?php echo $row['Page29']?></td> 
            </tr>
            <tr>
               <td> <b>Address Line3 :</b> </td><td style="width:250px"> <?php echo $row['Page24']; ?> </td>   <td> <b>Address Line3 :</b></td><td style="width:250px"><?php echo $row['Page30']?></td> 
            </tr>
            <tr>
                <td> <b>City : </b></td><td style="width:250px"> <?php echo $row['Page25']; ?> </td>   <td><b>City : </b></td><td style="width:250px"><?php echo $row['Page31']?></td> 
            </tr>
            <tr>
                <td> <b>State : </b> </td><td style="width:250px"> <?php echo $row['Page26']; ?> </td>   <td><b>State :</b></td><td style="width:250px"><?php echo $row['Page32']?></td> 
            </tr>
            <tr>
                <td> <b>Pin Code :</b></td><td style="width:250px"> <?php echo $row['Page27']; ?> </td>   <td><b>Pin Code : </b></td><td style="width:250px"><?php echo $row['Page33']?></td> 
            </tr>
            <tr>
               <td><?php echo "" ?></td><td style="width:250px"> <?php echo "" ?> </td>   <th>Mobile :</th><td style="width:250px"><?php echo $row['Page34']?></td> 
            </tr>
            <tr>
               <td><?php echo "" ?></td><td style="width:250px"> <?php echo "" ?> </td>   <th>Telephone (with STD code) office : </th><td style="width:250px"><?php echo $row['Page35']?></td> 
            </tr>
            
            <tr>
               <td><?php echo "" ?></td><td style="width:250px"> <?php echo "" ?> </td>   <th>Telephone (with STD code) Res. No. :</th><td style="width:250px"><?php echo $row['Page36']?></td> 
            </tr>
            
            <tr>
               <td><?php echo "" ?></td><td style="width:250px"> <?php echo "" ?> </td>   <th> Email :</th><td style="width:250px"><?php echo $row['Page37']?></td> 
            </tr>
           
            <tr>
                <td> <b>3. (a) Date of Birth:</b></td><td style="width:250px"> <?php echo $row['Page38'] ?> </td>   <td><b>(b) Nationality : </b> </td><td style="width:250px"><?php echo $row['Page41']; ?></td> 
            </tr>
           
           
        </table>
        <table style="FONT-SIZE: 8pt;">
            <tr>
                <td colspan="6">
                    <b>4. Present Employment:  </b>
                </td>
            </tr>
          <tr>
              <th>Designation:</th><td style="width: 120px"> <?php echo $row['Page42'] ?> </td> <th> Organization:</th><td style="width: 200px"><?php echo $row['Page43'] ?> </td>   <th> Date of Joining to the present post :</th><td  style="width: 120px"><?php echo $row['Page44']?></td> 
          </tr> </table>
        <table style="FONT-SIZE: 8pt;">
          <tr>
              <th>Scale of pay Rs.:</th><td style="width: 80px"><?php echo $row['Page45']; ?> </td> <th> AGP/GP: </th><td style="width: 80px"><?php echo  $row['Page46'] ?> </td>   <th> Current Basic pay Rs.:</th><td  style="width: 80px"><?php echo $row['Page47']?></td>
              <th> Total Emoluments (per month) Rs.:</th><td  style="width: 120px"><?php echo $row['Page48']?></td>
            </tr>
        </table>
      
        <table style="FONT-SIZE: 8pt;">
            <tr> <td> <b>5. Areas of specializations: </b></td> <td style="width: 500px"> <?php echo $row['Page49']; ?></td></tr>
        </table> 
 <br>
 <table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
    <tr><td colspan="9">
               <b>6.Academic Career Record starting with SSLC. Enter individual semester marks where relevant (Diploma/UG/PG/Others). (Upload certificates/marks cards.)</b>
</td>
    </tr>   
<tr>
        <th style="width:100px">Certificate/Degree<br>-Specialization<br></th>
        <th style="width:30px">Year</th>
        <th style="width:130px">School/College</th>
        <th style="width:140px">Board/University </th>
        <th style="width:40px">Class/<br>Division</th>
        <th style="width:40px">Marks /CGPA  Obtained</th>
        <th style="width:40px">Max Marks/ CGPA</th>
        <th style="width:50px">Percentage<br>/CGPA</th>
        <th style="width:50px">Semester- wise <br>  Marks (if relevant, <br>  separated by semi- colon) </th>
    </tr>
    <?php 
    if($row['cer1']!="")
    {
        ?>
    <tr>
        <td style="width:100px"><?php echo $row['cer1'];?>  </td>
        <td style="width:30px"><?php echo $row['year1'];?>  </td>
        <td style="width:130px"><?php echo $row['school1'];?> </td>
        <td style="width:140px"><?php echo $row['board1'];?>  </td>
        <td style="width:40px"><?php echo $row['class1'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks1'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks1'];?> </td>
        <td style="width:50px"><?php echo $row['percentage1'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status1'],12,'<br />', true); ?></td>
</tr>
    <?php
    
    }

     if($row['cer2']!="")
    {
        ?>
    <tr>
          <td style="width:100px"><?php echo $row['cer2'];?>  </td>
        <td style="width:30px"><?php echo $row['year2'];?>  </td>
        <td style="width:130px"><?php echo $row['school2'];?> </td>
        <td style="width:140px"><?php echo $row['board2'];?>  </td>
        <td style="width:40px"><?php echo $row['class2'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks2'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks2'];?> </td>
        <td style="width:50px"><?php echo $row['percentage2'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status2'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer3']!="")
    {
        ?>    <tr>
          <td style="width:100px"><?php echo $row['cer3'];?>  </td>
        <td style="width:30px"><?php echo $row['year3'];?>  </td>
        <td style="width:130px"><?php echo $row['school3'];?> </td>
        <td style="width:140px"><?php echo $row['board3'];?>  </td>
        <td style="width:40px"><?php echo $row['class3'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks3'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks3'];?> </td>
        <td style="width:50px"><?php echo $row['percentage3'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status3'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer4']!="")
    {
        ?>
    <tr>
          <td style="width:100px"><?php echo $row['cer4'];?>  </td>
        <td style="width:30px"><?php echo $row['year4'];?>  </td>
        <td style="width:130px"><?php echo $row['school4'];?> </td>
        <td style="width:140px"><?php echo $row['board4'];?>  </td>
        <td style="width:40px"><?php echo $row['class4'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks4'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks4'];?> </td>
        <td style="width:50px"><?php echo $row['percentage4'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status4'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer5']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer5'];?>  </td>
        <td style="width:30px"><?php echo $row['year5'];?>  </td>
        <td style="width:130px"><?php echo $row['school5'];?> </td>
        <td style="width:140px"><?php echo $row['board5'];?>  </td>
        <td style="width:40px"><?php echo $row['class5'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks5'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks5'];?> </td>
        <td style="width:50px"><?php echo $row['percentage5'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status5'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer6']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer6'];?>  </td>
        <td style="width:30px"><?php echo $row['year6'];?>  </td>
        <td style="width:130px"><?php echo $row['school6'];?> </td>
        <td style="width:150px"><?php echo $row['board6'];?>  </td>
        <td style="width:40px"><?php echo $row['class6'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks6'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks6'];?> </td>
        <td style="width:60px"><?php echo $row['percentage6'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status6'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer7']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer7'];?>  </td>
        <td style="width:30px"><?php echo $row['year7'];?>  </td>
        <td style="width:130px"><?php echo $row['school7'];?> </td>
        <td style="width:140px"><?php echo $row['board7'];?>  </td>
        <td style="width:40px"><?php echo $row['class7'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks7'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks7'];?> </td>
        <td style="width:50px"><?php echo $row['percentage7'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status7'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer8']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer8'];?>  </td>
        <td style="width:30px"><?php echo $row['year8'];?>  </td>
        <td style="width:130px"><?php echo $row['school8'];?> </td>
        <td style="width:140px"><?php echo $row['board8'];?>  </td>
        <td style="width:40px"><?php echo $row['class8'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks8'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks8'];?> </td>
        <td style="width:50px"><?php echo $row['percentage8'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status8'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer9']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer9'];?>  </td>
        <td style="width:30px"><?php echo $row['year9'];?>  </td>
        <td style="width:130px"><?php echo $row['school9'];?> </td>
        <td style="width:140px"><?php echo $row['board9'];?>  </td>
        <td style="width:40px"><?php echo $row['class9'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks9'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks9'];?> </td>
        <td style="width:50px"><?php echo $row['percentage9'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status9'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer10']!="")
    {
        ?>
       <tr>
         <td style="width:100px"><?php echo $row['cer10'];?>  </td>
        <td style="width:40px"><?php echo $row['year10'];?>  </td>
        <td style="width:130px"><?php echo $row['school10'];?> </td>
        <td style="width:140px"><?php echo $row['board10'];?>  </td>
        <td style="width:40px"><?php echo $row['class10'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks10'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks10'];?> </td>
        <td style="width:50px"><?php echo $row['percentage10'];?>  </td>
        <td style="width:50px"><?php echo wordwrap($row['status9'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }
?>
        </table>
        <br>
         <table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2"> 
      <tr><td colspan="8">
          <b>7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
          </td></tr>
                <tr>
                    <th style="width:110">Thesis Title</th>
                   <th style="width: 50">From Date</th>
                  <th style="width: 50">Final Viva <br> Date</th>
                  <th style="width: 130">Institute/<br>University</th>
                    <th style="width: 110">Guide/<br>Mentor</th>
                    <th style="width: 40">Mode</th>
                    <th style="width: 120">Area of Research</th>
                    <th style="width: 50">Award <br>Date</th>
                </tr>
         <?php
                                     if($row1['ph1']!="")
    {
        ?>          
 <tr>
                    <td style="width: 110"><?php echo $row1['ph1']; ?></td> 
                    <td style="width: 50"><?php echo $row1['ph2']; ?></td> 
                    <td style="width: 50"> <?php echo $row1['ph3']; ?>  </td> 
                    <td style="width: 130"><?php echo $row1['ph4']; ?> </td> 
                    <td style="width: 110"><?php echo $row1['ph5']; ?> </td> 
                    <td style="width: 40"> <?php echo $row1['ph6']; ?></td> 
                    <td style="width: 120"><?php echo  $row1['ph7']; ?>  </td> 
                    <td style="width:50"><?php echo $row1['ph8']; ?> </td> 
                </tr>
                    <?php } ?>
        </table>
  <br>
          <table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2" > 
      <tr><td colspan="8">
          <b>8. Post Doctoral Work: (Upload photocopies)   </b>
          </td></tr>
                <tr >
                    <th style="width:150px">Career </th>
                   <th style="width:60px">From Date</th>
                  <th style="width:60px">To Date</th>
                  <th style="width:150px">Institute/Organization</th>
                  <th style="width:130px">Guide/Mentor</th>
                    <th style="width:120px">Field of Research Work</th>
                                    </tr>
                                    <?php
                                     if($row1['pd11']!="")
    {
        ?>
  <tr>         
                    <td style="width:150px"><?php echo $row1['pd11']; ?></td> 
                    <td style="width:60px"><?php echo $row1['pd12']; ?></td> 
                    <td style="width:60px" ><?php echo $row1['pd13']; ?> </td> 
                    <td style="width:150px" ><?php echo $row1['pd14']; ?> </td> 
                    <td style="width:130px"><?php echo $row1['pd15'];?> </td> 
                    <td style="width:120px"><?php echo wordwrap($row1['pd16'],20,'<br />', true); ?></td> 
                      </tr>
                    <?php

    }
     if($row1['pd21']!="")
    {
        ?>
  <tr>         
                    <td style="width:150px"><?php echo $row1['pd21']; ?></td> 
                    <td style="width:60px"><?php echo $row1['pd22']; ?></td> 
                    <td style="width:60px" ><?php echo $row1['pd23']; ?> </td> 
                    <td style="width:150px" ><?php echo $row1['pd24']; ?> </td> 
                    <td style="width:130px"><?php echo $row1['pd25'];?> </td> 
                    <td style="width:120px"><?php echo wordwrap($row1['pd26'],20,'<br />', true); ?></td> 
                      </tr>
                   <?php
    }

    if($row1['pd31']!="")
    {
        ?>
               <tr>         <td style="width:150px"><?php echo $row1['pd31']; ?></td> 
                    <td style="width:60px"><?php echo $row1['pd32']; ?></td> 
                    <td style="width:60px" ><?php echo $row1['pd33']; ?> </td> 
                    <td style="width:150px" ><?php echo $row1['pd34']; ?> </td> 
                    <td style="width:130px"><?php echo $row1['pd35'];?> </td> 
                    <td style="width:120px"><?php echo wordwrap($row1['pd36'],20,'<br />', true); ?></td> 
                      </tr>
                   <?php
    }

    if($row1['pd41']!="")
    {
        ?>
                   <tr>    <td style="width:150px"><?php echo $row1['pd41']; ?></td> 
                    <td style="width:60px"><?php echo $row1['pd42']; ?></td> 
                    <td style="width:60px" ><?php echo $row1['pd43']; ?> </td> 
                    <td style="width:150px" ><?php echo $row1['pd44']; ?> </td> 
                    <td style="width:130px"><?php echo $row1['pd45'];?> </td> 
                    <td style="width:120px"><?php echo wordwrap($row1['pd46'],20,'<br />', true); ?></td> 
                      </tr>
                   <?php
    }

    if($row1['pd51']!="")
    {
        ?>
            <tr>              <td style="width:150px"><?php echo $row1['pd51']; ?></td> 
                    <td style="width:60px"><?php echo $row1['pd52']; ?></td> 
                    <td style="width:60px" ><?php echo $row1['pd53']; ?> </td> 
                    <td style="width:150px" ><?php echo $row1['pd54']; ?> </td> 
                    <td style="width:130px"><?php echo $row1['pd55'];?> </td> 
                    <td style="width:120px"><?php echo wordwrap($row1['pd56'],20,'<br />', true); ?></td> 
                      </tr>
                   <?php
    }
?>                        
          </table>
        <br>
       <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2">
            <tr> <td colspan="6"> <b>9. National/State/Others - Test Scores/Ranks (Upload photocopies)  </b></td></tr>
            <tr><td style="width:180px">Examination </td>
                   <td style="width:60px">Year</td>
                  <td style="width:220px">Branch/Area of Specialization</td>
                  <td style="width:60px">Score</td>
                    <td style="width:60px">Rank</td>
                    <td style="width:60px">Percentile</td></tr>
      <?php
    if($row['percentile1']!=0)   {
        ?>
                <tr>
                    <td style="width:180px"><?php echo $row['examination1']; ?> </td> 
                    <td style="width:60px"> <?php echo $row['testyear1']; ?></td> 
                    <td style="width:220px"><?php echo $row['branch1']; ?></td> 
                    <td style="width:60px"><?php echo $row['score1']; ?></td> 
                    <td style="width:60px"><?php echo $row['rank1']; ?></td> 
                    <td style="width:60px"><?php echo $row['percentile1']; ?></td> 
                    
                </tr>
<?php
    
    }
    if($row['percentile2']!=0)   {
        ?>
                <tr>
                    <td style="width:180px"><?php echo $row['examination2']; ?> </td> 
                    <td style="width:60px"> <?php echo $row['testyear2']; ?></td> 
                    <td style="width:220px"><?php echo $row['branch2']; ?></td> 
                    <td style="width:60px"><?php echo $row['score2']; ?></td> 
                    <td style="width:60px"><?php echo $row['rank2']; ?></td> 
                    <td style="width:60px"><?php echo $row['percentile2']; ?></td> 
                    
                </tr>
<?php
    
    }
    if($row['percentile3']!=0)   {
        ?>
                <tr>
                    <td style="width:180px"><?php echo $row['examination3']; ?> </td> 
                    <td style="width:60px"> <?php echo $row['testyear3']; ?></td> 
                    <td style="width:220px"><?php echo $row['branch3']; ?></td> 
                    <td style="width:60px"><?php echo $row['score3']; ?></td> 
                    <td style="width:60px"><?php echo $row['rank3']; ?></td> 
                    <td style="width:60px"><?php echo $row['percentile3']; ?></td> 
                    
                </tr>
<?php
    
    }
     if($row['percentile4']!=0)   {
        ?>
     <tr>
                    <td style="width:180px"><?php echo $row['examination4']; ?> </td> 
                    <td style="width:60px"> <?php echo $row['testyear4']; ?></td> 
                    <td style="width:220px"><?php echo $row['branch4']; ?></td> 
                    <td style="width:60px"><?php echo $row['score4']; ?></td> 
                    <td style="width:60px"><?php echo $row['rank4']; ?></td> 
                    <td style="width:60px"><?php echo $row['percentile4']; ?></td> 
                    
                </tr>
<?php
    
    }
     if($row['percentile5']!=0)    {
        ?>
  <tr>
                    <td style="width:180px"><?php echo $row['examination5']; ?> </td> 
                    <td style="width:60px"> <?php echo $row['testyear5']; ?></td> 
                    <td style="width:220px"><?php echo $row['branch5']; ?></td> 
                    <td style="width:60px" ><?php echo $row['score5']; ?></td> 
                    <td style="width:60px"><?php echo $row['rank5']; ?></td> 
                    <td style="width:60px"><?php echo $row['percentile5']; ?></td> 
                    
                </tr>
<?php
    
    }
        ?>
               
        </table>
          <br>
          <table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2" cellpadding="2">
            <tr> <td colspan="7"> <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b> </td></tr>   
            <tr><td style="width:220px">Employer</td>
                <td style="width:100px">Position Held</td> 
                <td style="width:50px">Date of Joining</td> 
                <td style="width:50px">Date of Leaving</td> 
                <td style="width:120px">Number of Months/Years</td>
                <td style="width:60px">Scale of Pay & GP/AGP(If applicable)</td> 
                <td style="width:50px">Gross Pay</td> </tr>   
    
       <?php
     if($row1['E11']!="")
    {
        ?>
        <tr>
            <td style="width:220px"><?php echo $row1['E11']; ?></td>
            <td style="width:100px"><?php echo $row1['E12']; ?></td>
            <td style="width:50px"> <?php echo $row1['E13']; ?> </td>
            <td style="width:50px"><?php echo $row1['E14']; ?></td>
            <td style="width:120px"><?php echo $row1['E15']; ?></td>
            <td style="width:60px"><?php echo $row1['E16']; ?></td>
            <td style="width:50px"><?php echo $row1['E17']; ?></td>
            </tr>
<?php
    }

    if($row1['E21']!="")
    {
        ?>
           
        <tr>
            <td style="width:220px"><?php echo $row1['E21']; ?></td>
            <td style="width:100px"><?php echo $row1['E22']; ?></td>
            <td style="width:50px"> <?php echo $row1['E23']; ?> </td>
            <td style="width:50px"><?php echo $row1['E24']; ?></td>
            <td style="width:120px"><?php echo $row1['E25']; ?></td>
            <td style="width:60px"><?php echo $row1['E26']; ?></td>
            <td style="width:50px"><?php echo $row1['E27']; ?></td>
            </tr>
<?php
    }

    if($row1['E31']!="")
    {
        ?>
  <tr>
            <td style="width:220px"><?php echo $row1['E31']; ?></td>
            <td style="width:100px"><?php echo $row1['E32']; ?></td>
            <td style="width:50px"> <?php echo $row1['E33']; ?> </td>
            <td style="width:50px"><?php echo $row1['E34']; ?></td>
            <td style="width:120px"><?php echo $row1['E35']; ?></td>
            <td style="width:60px"><?php echo $row1['E36']; ?></td>
            <td style="width:50px"><?php echo $row1['E37']; ?></td>
            </tr>
<?php
    }

    if($row1['E41']!="")
    {
        ?>
 <tr>
            <td style="width:220px"><?php echo $row1['E41']; ?></td>
            <td style="width:100px"><?php echo $row1['E42']; ?></td>
            <td style="width:50px"> <?php echo $row1['E43']; ?> </td>
            <td style="width:50px"><?php echo $row1['E44']; ?></td>
            <td style="width:120px"><?php echo $row1['E45']; ?></td>
            <td style="width:60px"><?php echo $row1['E46']; ?></td>
            <td style="width:50px"><?php echo $row1['E47']; ?></td>
            </tr>
<?php
    }

    if($row1['E51']!="")
    {
        ?>
             <tr>
            <td style="width:220px"><?php echo $row1['E51']; ?></td>
            <td style="width:100px"><?php echo $row1['E52']; ?></td>
            <td style="width:50px"> <?php echo $row1['E53']; ?> </td>
            <td style="width:50px"><?php echo $row1['E54']; ?></td>
            <td style="width:120px"><?php echo $row1['E55']; ?></td>
            <td style="width:60px"><?php echo $row1['E56']; ?></td>
            <td style="width:50px"><?php echo $row1['E57']; ?></td>
            </tr>
<?php
    }

    if($row1['E61']!="")
    {
        ?>
             <tr>
            <td style="width:220px"><?php echo $row1['E61']; ?></td>
            <td style="width:100px"><?php echo $row1['E62']; ?></td>
            <td style="width:50px"> <?php echo $row1['E63']; ?> </td>
            <td style="width:50px"><?php echo $row1['E64']; ?></td>
            <td style="width:120px"><?php echo $row1['E65']; ?></td>
            <td style="width:60px"><?php echo $row1['E66']; ?></td>
            <td style="width:50px"><?php echo $row1['E67']; ?></td>
            </tr>
<?php
    }

    if($row1['E71']!="")
    {
        ?>
             <tr>
            <td style="width:220px"><?php echo $row1['E71']; ?></td>
            <td style="width:100px"><?php echo $row1['E72']; ?></td>
            <td style="width:50px"> <?php echo $row1['E73']; ?> </td>
            <td style="width:50px"><?php echo $row1['E74']; ?></td>
            <td style="width:120px"><?php echo $row1['E75']; ?></td>
            <td style="width:60px"><?php echo $row1['E76']; ?></td>
            <td style="width:50px"><?php echo $row1['E77']; ?></td>
            </tr>
<?php
    }

    if($row1['E81']!="")
    {
        ?>
             <tr>
            <td style="width:220px"><?php echo $row1['E81']; ?></td>
            <td style="width:100px"><?php echo $row1['E82']; ?></td>
            <td style="width:50px"> <?php echo $row1['E83']; ?> </td>
            <td style="width:50px"><?php echo $row1['E84']; ?></td>
            <td style="width:120px"><?php echo $row1['E85']; ?></td>
            <td style="width:60px"><?php echo $row1['E86']; ?></td>
            <td style="width:50px"><?php echo $row1['E87']; ?></td>
            </tr>
<?php
    }

    if($row1['E91']!="")
    {
        ?>
             <tr>
            <td style="width:220px"><?php echo $row1['E91']; ?></td>
            <td style="width:100px"><?php echo $row1['E92']; ?></td>
            <td style="width:50px"> <?php echo $row1['E93']; ?> </td>
            <td style="width:50px"><?php echo $row1['E94']; ?></td>
            <td style="width:120px"><?php echo $row1['E95']; ?></td>
            <td style="width:60px"><?php echo $row1['E96']; ?></td>
            <td style="width:50px"><?php echo $row1['E97']; ?></td>
            </tr>
<?php
    }

    if($row1['E101']!="")
    {
        ?>
            <tr>
            <td style="width:220px"><?php echo $row1['E101']; ?></td>
            <td style="width:100px"><?php echo $row1['E102']; ?></td>
            <td style="width:50px"> <?php echo $row1['E103']; ?> </td>
            <td style="width:50px"><?php echo $row1['E104']; ?></td>
            <td style="width:120px"><?php echo $row1['E105']; ?></td>
            <td style="width:60px"><?php echo $row1['E106']; ?></td>
            <td style="width:50px"><?php echo $row1['E107']; ?></td>
            </tr>
 <?php
    }
?>
        </table>    <br>
          <table style="FONT-SIZE: 8pt;" >
              <tr>  <td colspan="6"><b>11. Total Experience (Number of Years and/or months) </b> </td></tr>  
            <tr> <th>Teaching Experience:</th> 
<td style="width:120px">
            <?php   echo $row['teachingexp']; ?> </td> 
     
<th>
          Research Experience (Post-PhD):
       </th>      <td style="width:80px">
        <?php
       
        echo $row['researchexp']; 
      
       ?>
        </td> <th>
        Industrial Experience :   
       </th>  <td style="width:80px">
      <?php
      
        echo $row['industryexp']; 
     
       ?>
       </td>
        </tr>
        </table>  
        
        <table style="FONT-SIZE: 8pt;">
            <tr> <td colspan="6">  <b>12. Teaching Experience (Number of Years and/or months) :</b> </td></tr>
        <tr> <th> Assistant Professor or equivalent:</th> <td  style="width:80px"> <?php echo $row['asstprof']; ?></td>
        </tr> </table>

       <table style="FONT-SIZE: 8pt;" border="1" cellspacing="2" cellpadding="2">
             <tr> <td  colspan="5">  <b>13. Subjects Taught (Last 4 years)</b> </td> </tr>
<tr><td style="width:230;">Title of the Course taught </td> 
    <td style="width:40">Year</td> 
    <td style="width:40">U.G. / P.G. </td> 
    <td style="width:90">Approximate no. of students</td> 
    <td style="width:280">Institution/University</td> </tr>
 <?php
        if($row['E2_11']!="")
            {
        ?>
        <tr>
            <td style="width:230;"><?php echo $row['E2_11']; ?></td>
            <td style="width:40"><?php echo $row['E2_12']; ?></td>
            <td style="width:40"><?php echo $row['E2_13']; ?></td>
            <td style="width:40"><?php echo $row['E2_14']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_15']; ?>"</td>
    </tr>
           <?php
            }
             if($row['E2_21']!="")
             {
             ?>
        <tr>
            <td style="width:230;"><?php echo $row['E2_21']; ?></td>
            <td style="width:40"><?php echo $row['E2_22']; ?></td>
            <td style="width:40"><?php echo $row['E2_23']; ?></td>
            <td style="width:40"><?php echo $row['E2_24']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_25']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_31']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row['E2_31']; ?></td>
            <td style="width:40"><?php echo $row['E2_32']; ?></td>
            <td style="width:40"><?php echo $row['E2_33']; ?></td>
            <td style="width:40"><?php echo $row['E2_34']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_35']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_41']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row['E2_41']; ?></td>
            <td style="width:40"><?php echo $row['E2_42']; ?></td>
            <td style="width:40"><?php echo $row['E2_43']; ?></td>
            <td style="width:40"><?php echo $row['E2_44']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_45']; ?>"</td>
        </tr> <?php
            }
             if($row['E2_51']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row['E2_51']; ?></td>
            <td style="width:40"><?php echo $row['E2_52']; ?></td>
            <td style="width:40"><?php echo $row['E2_53']; ?></td>
            <td style="width:40"><?php echo $row['E2_54']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_55']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_61']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row['E2_61']; ?></td>
            <td style="width:40"><?php echo $row['E2_62']; ?></td>
            <td style="width:40"><?php echo $row['E2_63']; ?></td>
            <td style="width:40"><?php echo $row['E2_64']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_65']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_71']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row['E2_71']; ?></td>
            <td style="width:40"><?php echo $row['E2_72']; ?></td>
            <td style="width:40"><?php echo $row['E2_73']; ?></td>
            <td style="width:40"><?php echo $row['E2_74']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_75']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_81']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row['E2_81']; ?></td>
            <td style="width:40"><?php echo $row['E2_82']; ?></td>
            <td style="width:40"><?php echo $row['E2_83']; ?></td>
            <td style="width:40"><?php echo $row['E2_84']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_85']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_91']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row['E2_91']; ?></td>
            <td style="width:40"><?php echo $row['E2_92']; ?></td>
            <td style="width:40"><?php echo $row['E2_93']; ?></td>
            <td style="width:40"><?php echo $row['E2_94']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_95']; ?>"</td>
        </tr>
         <?php
            }
             if($row['E2_101']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row['E2_101']; ?></td>
            <td style="width:40"><?php echo $row['E2_102']; ?></td>
            <td style="width:40"><?php echo $row['E2_103']; ?></td>
            <td style="width:40"><?php echo $row['E2_104']; ?>"</td>
            <td style="width:280"><?php echo $row['E2_105']; ?>"</td>
        </tr>
         <?php
            }
            ?>
   </table>  
            
        <table style="FONT-SIZE: 8pt;" >
    <tr> <td colspan="8"> <b>14. Research guidance (upload relevant document)</b> </td></tr>
   
        <tr>
            <th colspan="2" > Completed (Guided Sole): </th>  
            <th colspan="2" >   Ongoing (Guiding Sole): </th> 
            <th colspan="2" > Completed (Guided Joint): </th>
            <th colspan="2" >   Ongoing (Guiding Joint): </th> 
        </tr>
	<tr> 
          <td ><b>Ph.D.:  </b></td>
          <td style="width:150"><?php echo $row1['phdcomplete'];?></td>
          <td ><b>Ph.D.:</b></td>       
        <td style="width:150"><?php echo $row1['phdongoing']; ?></td>        
        <td ><b>Ph.D.:</b></td>      
        <td style="width:150"><?php echo $row1['cj1']; ?></td>
        <td ><b>Ph.D.:</b></td>
        <td style="width:150"><?php echo $row1['oj1']; ?></td>
        </tr>
   
       <tr> 
       <td ><b>P.G.:</b></td>
       <td style="width:150"><?php echo $row1['pgcomplete']; ?></td>       
       <td ><b>P.G.:</b></td>      
        <td style="width:150"><?php echo $row1['pgongoing']; ?></td>
        <td ><b>P.G.:</b></td>       
        <td style="width:150"><?php echo $row1['cj2']; ?></td>
         <td><b>P.G.:</b></td>
        <td style="width:150"><?php echo $row1['oj2']; ?></td>
        </tr>        
 </table>  
        
<<table style="FONT-SIZE: 8pt;">
    <tr> <td colspan="4"><b>15. a. Publication details - No. of Papers </b> </td></tr>
   
        <tr>
            <td colspan="2" >  <b>Journal papers : </b></td>  
            <td colspan="2" >  <b>Conference Publications:</b> </td> 
            
        </tr>
	<tr> 
          <td><b>International:</b></td>
          <td style="width:280"><?php echo $row1['JInternational']; ?> </td>
          <td ><b>International:</b></td>       
        <td style="width:280"><?php echo $row1['CInternational']; ?></td>        
        </tr>
   <tr> 
          <td><b>National:</b></td>
          <td style="width:280"><?php echo $row1['JNational']; ?> </td>
          <td ><b>National:</b></td>       
        <td style="width:280"><?php echo $row1['CNational']; ?></td>        
        </tr>
</table>
         <table style="FONT-SIZE: 8pt;" border="1" border="1" cellspacing="1" cellpadding="2"> 
            <tr> <td colspan="7"> <b>15. b. Provide details of your 4 best SCI/SCOPUS/SSCI indexed journal papers.</b> </td></tr>
<tr> <td style="width:120px">Author </td> 
    <td style="width:160px" >Title</td>
    <td style="width: 160px">Journal</td> 
    <td style="width:50px">Volume</td>
    <td style="width:50px">Pages </td> 
    <td style="width:55px">Year</td> 
    <td style="width: 70px" >Paper Link</td> </tr>
  <?php
                          if($row1['E3_11']!="")
             {
             ?>         
     <tr>
           <td style="width:120px" ><?php echo $row1['E3_11']; ?></td>
            <td style="width:160px" ><?php echo $row1['E3_12']; ?></td>
            <td  style="width:160px"><?php echo $row1['E3_13']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_14']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_15']; ?> </td>
            <td style="width:55px"><?php echo $row1['E3_16']; ?> </td>
            <td style="width:70px"><?php echo wordwrap($row1['E3_17'],12,'<br />', true); ?> </td>
</tr>
<?php
             }
            if($row1['E3_21']!="")
            {
                ?>
           

       <tr>
           <td style="width:120px"><?php echo $row1['E3_21']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_22']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_23']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_24']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_25']; ?> </td>
            <td style="width:55px"><?php echo $row1['E3_26']; ?> </td>
            <td style="width:70px"><?php echo wordwrap($row1['E3_27'],12,'<br />', true); ?> </td> </tr>
<?php
             }
            if($row1['E3_31']!="")
            {
                ?>
       
         <tr>
             <td style="width:120px"><?php echo $row1['E3_31']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_32']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_33']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_34']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_35']; ?> </td>
            <td style="width:55px"><?php echo $row1['E3_36']; ?> </td>
            <td style="width:70px"><?php echo wordwrap($row1['E3_37'],12,'<br />', true); ?></td>
 </tr>
<?php
             } 
            if($row1['E3_41']!="")
            {
                ?>
       <tr>
            <td style="width:120px"><?php echo $row1['E3_41']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_42']; ?></td>
            <td style="width:160px"><?php echo $row1['E3_43']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_44']; ?> </td>
            <td style="width:50px"><?php echo $row1['E3_45']; ?> </td>
            <td style="width:55px"><?php echo $row1['E3_46']; ?> </td>
            <td style="width:70px"><?php echo wordwrap($row1['E3_47'],12,'<br />', true); ?> </td>
            
 </tr>
<?php
             }
                ?>
    </table>
         
        <table style="FONT-SIZE: 8pt;">
    <tr> <td style="width:620">
            <b>16.  Books / Chapters Published & E-learning materials Developed (last 4 years): </b> </td></tr>
    <tr> <td style="width:620"><?php echo $row['BInternational']; ?> </td>
    </tr>
            <tr> <td style="width:620"><b>17. Patents(Applied or Awarded): </b> </td></tr>
         <tr><td><?php echo $row1['patents']; ?> </td></tr>
</table>
    
        <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2" >
         <tr> <td colspan="6">  <b>18. Sponsored Projects (Project handled as Principal Investigator in last 4 Years)</b> </td> </tr>
            <tr><td style="width:150">Funding Agency</td>
                <td style="width:260">Title of the Project</td>
                <td style="width:65">Project Cost </td> 
                <td style="width:60">Duration</td> 
                <td style="width:60">Current Status</td> 
                 <td style="width:80">Remarks</td> </tr>
            <?php
            if($row1['E4_11']!="")
            {
                ?>          
       
        <tr>
          <td style="width:150"><?php echo $row1['E4_11']; ?>"</td>
            <td style="width:260"><?php echo $row1['E4_12']; ?>" </td>
            <td style="width:65"><?php echo $row1['E4_13']; ?></td>
            <td style="width:60"><?php echo $row1['E4_14']; ?></td>
            <td style="width:60"><?php echo $row1['E4_15']; ?></td>
            <td style="width:80"><?php echo $row1['E4_16']; ?></td>
             </tr>
        <?php
            }
             if($row1['E4_21']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row1['E4_21']; ?>"</td>
            <td style="width:260"><?php echo $row1['E4_22']; ?>" </td>
            <td style="width:65"><?php echo $row1['E4_23']; ?></td>
            <td style="width:60"><?php echo $row1['E4_24']; ?></td>
            <td style="width:60"><?php echo $row1['E4_25']; ?></td>
            <td style="width:80"><?php echo $row1['E4_26']; ?></td>
             </tr>
        <?php
            }
             if($row1['E4_31']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row1['E4_31']; ?>"</td>
            <td style="width:260"><?php echo $row1['E4_32']; ?>" </td>
            <td style="width:65"><?php echo $row1['E4_33']; ?></td>
            <td style="width:60"><?php echo $row1['E4_34']; ?></td>
            <td style="width:60"><?php echo $row1['E4_35']; ?></td>
            <td style="width:80"><?php echo $row1['E4_36']; ?></td>
         </tr>
        <?php
            }
             if($row1['E4_41']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row1['E4_41']; ?>"</td>
            <td style="width:260"><?php echo $row1['E4_42']; ?>" </td>
            <td style="width:65"><?php echo $row1['E4_43']; ?></td>
            <td style="width:60"><?php echo $row1['E4_44']; ?></td>
            <td style="width:60"><?php echo $row1['E4_45']; ?></td>
            <td style="width:100"><?php echo $row1['E4_46']; ?></td>
            </tr>
         <?php
            }
             if($row1['E4_51']!="")
             {
           ?>
        <tr>
           <td style="width:150"><?php echo $row1['E4_51']; ?>"</td>
            <td style="width:260"><?php echo $row1['E4_52']; ?>" </td>
            <td style="width:65"><?php echo $row1['E4_53']; ?></td>
            <td style="width:60"><?php echo $row1['E4_54']; ?></td>
            <td style="width:60"><?php echo $row1['E4_55']; ?></td>
            <td style="width:80"><?php echo $row1['E4_56']; ?></td>
            </tr>
        <?php
            }
          
           ?>
 
   </table>
<br>
        <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2">
  
      <tr> <td colspan="4"> <b>19. Consultancy Project (in last 4 years)</b> </td> </tr>
<tr><td style="width:160">Funding Agency</td> 
    <td style="width:300">Title of the Consultancy <br>Work </td> 
    <td style="width:105">Project Duration </td> 
    <td style="width:105">Project Cost</td> </tr>
<?php
            if($row['F11']!="")
             {
           ?>
        <tr>
            <td style="width:160"><?php echo $row['F11']; ?></td>
            <td style="width:300"><?php echo $row['F12']; ?></td>
            <td style="width:105"><?php echo $row['F13']; ?></td>
            <td style="width:105"><?php echo $row['F14']; ?>"</td>
     
        </tr>
        <?php
             }
            if($row['F21']!="")
             {
           ?>   
         <tr>
            <td style="width:160"><?php echo $row['F21']; ?></td>
            <td style="width:300"><?php echo $row['F22']; ?></td>
            <td style="width:105"><?php echo $row['F23']; ?></td>
            <td style="width:105"><?php echo $row['F24']; ?>"</td>
     
        </tr>
        <?php
             }
            if($row['F31']!="")
             {
           ?>   
         <tr>
            <td style="width:160"><?php echo $row['F31']; ?></td>
            <td style="width:300"><?php echo $row['F32']; ?></td>
            <td style="width:105"><?php echo $row['F33']; ?></td>
            <td style="width:105"><?php echo $row['F34']; ?>"</td>
     
        </tr>
        <?php
             }
            if($row['F41']!="")
             {
           ?>   
         <tr>
            <td style="width:160"><?php echo $row['F41']; ?></td>
            <td style="width:300"><?php echo $row['F42']; ?></td>
            <td style="width:105"><?php echo $row['F43']; ?></td>
            <td style="width:105"><?php echo $row['F44']; ?>"</td>
     
        </tr>
        <?php
             }
            if($row['F51']!="")
             {
           ?>   
         <tr>
            <td style="width:160"><?php echo $row['F51']; ?></td>
            <td style="width:300"><?php echo $row['F52']; ?></td>
            <td style="width:105"><?php echo $row['F53']; ?></td>
            <td style="width:105"><?php echo $row1['F54']; ?>"</td>
     
        </tr>
        <?php
             }
        
           ?>   
        </table>
           <br>
        <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2">
        <tr> <td colspan="4"><b>20. Professional Training Received / Summer / Winter Schools attended(Last 4 years - Upload photocopies)</b> </td></tr>
        <tr><td style="width:60">Year</td> 
            <td style="width:250">Name of Training</td> 
            <td style="width:150">Duration </td>
            <td style="width:260">Organization where training <br>was provided</td>
        </tr>
        <?php
            {
                if($row['T14']!="")
                    ?>
            <tr>
            <td style="width:60"><?php echo $row['T11']; ?></td>
            <td style="width:250"><?php echo $row['T12']; ?></td>
            <td style="width:150"><?php echo $row['T13']; ?></td>
            <td style="width:260"><?php echo $row['T14']; ?></td>
            </tr>
           <?php
            }
            if($row['T24']!="")
            {
                    ?>
   
            <tr>
            <td style="width:60"><?php echo $row['T21']; ?></td>
            <td style="width:250"><?php echo $row['T22']; ?></td>
            <td style="width:150"><?php echo $row['T23']; ?></td>
            <td style="width:260"><?php echo $row['T24']; ?></td>
            </tr>
           <?php
            }
            if($row['T34']!="")
            {
                    ?>
                
            
            <tr>
            <td style="width:60"><?php echo $row['T31']; ?></td>
            <td style="width:250"><?php echo $row['T32']; ?></td>
            <td style="width:150"><?php echo $row['T33']; ?></td>
            <td style="width:260"><?php echo $row['T34']; ?></td>
            </tr>
           <?php
            }
            if($row['T44']!="")
            {
                    ?>
                
            
            <tr>
            <td style="width:60"><?php echo $row['T41']; ?></td>
            <td style="width:250"><?php echo $row['T42']; ?></td>
            <td style="width:150"><?php echo $row['T43']; ?></td>
            <td style="width:260"><?php echo $row['T44']; ?></td>
            </tr>
           <?php
            }
            if($row['T54']!="")
            {
                    ?>
                
            
            <tr>
            <td style="width:60"><?php echo $row['T51']; ?></td>
            <td style="width:250"><?php echo $row['T52']; ?></td>
            <td style="width:150"><?php echo $row['T53']; ?></td>
            <td style="width:260"><?php echo $row['T54']; ?></td>
            </tr>
           <?php
            }
            if($row['T64']!="")
            {
                    ?>
                
            
            <tr>
            <td style="width:60"><?php echo $row['T61']; ?></td>
            <td style="width:250"><?php echo $row['T62']; ?></td>
            <td style="width:150"><?php echo $row['T63']; ?></td>
            <td style="width:260"><?php echo $row['T64']; ?></td>
            </tr>
 <?php
            }
            if($row['T74']!="")
            {
                    ?>
                
            
            <tr>
           <td style="width:60"><?php echo $row['T71']; ?></td>
            <td style="width:250"><?php echo $row['T72']; ?></td>
            <td style="width:150"><?php echo $row['T73']; ?></td>
            <td style="width:260"><?php echo $row['T74']; ?></td>
            </tr>
           <?php
            }
            if($row['T84']!="")
            {
                    ?>
                
           
            <tr>
            <td style="width:60"><?php echo $row['T81']; ?></td>
            <td style="width:250"><?php echo $row['T82']; ?></td>
            <td style="width:150"><?php echo $row['T83']; ?></td>
            <td style="width:260"><?php echo $row['T84']; ?></td>
            </tr>
           <?php
            }
            if($row['T94']!="")
            {
                    ?>
                
           
            <tr>
            <td style="width:60"><?php echo $row['T91']; ?></td>
            <td style="width:250"><?php echo $row['T92']; ?></td>
            <td style="width:150"><?php echo $row['T93']; ?></td>
            <td style="width:260"><?php echo $row['T94']; ?></td>
            </tr>
           <?php
            }
            if($row['T104']!="")
            {
                    ?>
                
            
            <tr>
            <td style="width:60"><?php echo $row['T101']; ?></td>
            <td style="width:250"><?php echo $row['T102']; ?></td>
            <td style="width:150"><?php echo $row['T103']; ?></td>
            <td style="width:260"><?php echo $row['T104']; ?></td>
            </tr>
           <?php
            }
            
                    ?>
    </table>
           <br>
         <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2">
             <tr> <td colspan="3"> <b>21. Conferences/Seminars / Workshops attended (Last 4 year -Upload photocopies of the certificates)</b> </td> </tr>
        <tr>
        <td style="width:60">Year</td>
        <td style="width:335"> Conferences/Seminars / <br> Workshops</td>
        <td style="width:335">Title of paper presented </td>
    </tr>
     <?php
    if($row['cp13']!="")
            {
                    ?>
    
            <tr>
            <td style="width:60"><?php echo $row['cp11']; ?></td>
            <td style="width:335"><?php echo $row['cp12']; ?></td>
            <td style="width:335"><?php echo $row['cp13']; ?></td>
           </tr>
    <?php
            }
            if($row['cp23']!="")
            {
                    ?>
      <tr>
            <td style="width:60"><?php echo $row['cp21']; ?></td>
            <td style="width:335"><?php echo $row['cp22']; ?></td>
            <td style="width:335"><?php echo $row['cp23']; ?></td>
           </tr>
    <?php
            }
            if($row['cp33']!="")
            {
                    ?>
       <tr>
            <td style="width:60"><?php echo $row['cp31']; ?></td>
            <td style="width:335"><?php echo $row['cp32']; ?></td>
            <td style="width:335"><?php echo $row['cp33']; ?></td>
           </tr>
    <?php
            }
            if($row['cp41']!="")
            {
                    ?>
      <tr>
            <td style="width:60"><?php echo $row['cp41']; ?></td>
            <td style="width:335"><?php echo $row['cp42']; ?></td>
            <td style="width:335"><?php echo $row['cp43']; ?></td>
           </tr>
    <?php
            }
            if($row['cp53']!="")
            {
                    ?>
     <tr>
            <td style="width:60"><?php echo $row['cp51']; ?></td>
            <td style="width:335"><?php echo $row['cp52']; ?></td>
            <td style="width:335"><?php echo $row['cp53']; ?></td>
           </tr>
    <?php
            }
            if($row['cp63']!="")
            {
                    ?>
    <tr>
            <td style="width:60"><?php echo $row['cp61']; ?></td>
            <td style="width:335"><?php echo $row['cp62']; ?></td>
            <td style="width:335"><?php echo $row['cp63']; ?></td>
           </tr>
    <?php
            }
            if($row['cp73']!="")
            {
                    ?>
     <tr>
            <td style="width:60"><?php echo $row['cp71']; ?></td>
            <td style="width:335"><?php echo $row['cp72']; ?></td>
            <td style="width:335"><?php echo $row['cp73']; ?></td>
           </tr>
    <?php
            }
            if($row['cp83']!="")
            {
                    ?>
     <tr>
            <td style="width:60"><?php echo $row['cp81']; ?></td>
            <td style="width:335"><?php echo $row['cp82']; ?></td>
            <td style="width:335"><?php echo $row['cp83']; ?></td>
           </tr>
    <?php
            }
            if($row['cp93']!="")
            {
                    ?>
    <tr>
            <td style="width:60"><?php echo $row['cp91']; ?></td>
            <td style="width:335"><?php echo $row['cp92']; ?></td>
            <td style="width:335"><?php echo $row['cp93']; ?></td>
           </tr>
    <?php
            }
            if($row['cp103']!="")
            {
                    ?>
     <tr>
            <td style="width:60"><?php echo $row['cp101']; ?></td>
            <td style="width:335"><?php echo $row['cp102']; ?></td>
            <td style="width:335"><?php echo $row['cp103']; ?></td>
           </tr>
    <?php
            }
 ?>
        </table>
           <br>
         <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2" >
            <tr>
                <td colspan="3">
            <b>22. Industrial Experience/Interaction (Upload photocopies) </b>        
                </td>
            </tr>
             <tr><td style="width:300">Organization</td>
                 <td style="width:300"> Nature of Work </td>
                 <td style="width:130">Period</td></tr>
        <?php
        if($row1['ie11']!="")
            {
                    ?>
            <tr>
            <td style="width:300"><?php echo $row1['ie11']; ?></td>
            <td style="width:300"><?php echo $row1['ie12']; ?></td>
            <td style="width:130"><?php echo $row1['ie13']; ?></td>
           </tr>
   <?php
            }
            if($row1['ie21']!="")
            {
                    ?>
  <tr>
            <td style="width:300"><?php echo $row1['ie21']; ?></td>
            <td style="width:300"><?php echo $row1['ie22']; ?></td>
            <td style="width:130"><?php echo $row1['ie23']; ?></td>
           </tr>
 <?php
            }
            if($row1['ie31']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row1['ie31']; ?></td>
            <td style="width:300"><?php echo $row1['ie32']; ?></td>
            <td style="width:130"><?php echo $row1['ie33']; ?></td>
           </tr>
  <?php
            }
            if($row1['ie41']!="")
            {
                    ?>
     <tr>
             <td style="width:300"><?php echo $row1['ie41']; ?></td>
            <td style="width:300"><?php echo $row1['ie42']; ?></td>
            <td style="width:130"><?php echo $row1['ie43']; ?></td>
           </tr>
  <?php
            }
            if($row1['ie51']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row1['ie51']; ?></td>
            <td style="width:300"><?php echo $row1['ie52']; ?></td>
            <td style="width:130"><?php echo $row1['ie53']; ?></td>
           </tr>
  <?php
            }
            if($row1['ie61']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row1['ie61']; ?></td>
            <td style="width:300"><?php echo $row1['ie62']; ?></td>
            <td style="width:130"><?php echo $row1['ie63']; ?></td>
           </tr>
  <?php
            }
            if($row1['ie71']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row1['ie71']; ?></td>
            <td style="width:300"><?php echo $row1['ie72']; ?></td>
            <td style="width:130"><?php echo $row1['ie73']; ?></td>
           </tr>
  <?php
            }
            if($row1['ie81']!="")
            {
                    ?>
      <tr>
             <td style="width:300"><?php echo $row1['ie81']; ?></td>
            <td style="width:300"><?php echo $row1['ie82']; ?></td>
            <td style="width:130"><?php echo $row1['ie83']; ?></td>
           </tr>
   <?php
            }
            if($row1['ie91']!="")
            {
                    ?>
     <tr>
            <td style="width:300"><?php echo $row1['ie91']; ?></td>
            <td style="width:300"><?php echo $row1['ie92']; ?></td>
            <td style="width:130"><?php echo $row1['ie93']; ?></td>
           </tr>
   <?php
            }
            if($row1['ie101']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row1['ie101']; ?></td>
            <td style="width:300"><?php echo $row1['ie102']; ?></td>
            <td style="width:130"><?php echo $row1['ie103']; ?></td>
           </tr>
            <?php } ?>
        </table>
           <br>
        <table style="FONT-SIZE: 8pt;" border="1" cellspacing="1" cellpadding="2">
            <tr>
                <td colspan="3">  <b>23. Continuing Education Programmes /Short Term Courses/Workshops/Seminars etc. organized (Last 4 years):</b></td>
            </tr>
        
            <tr>
                  <td style="width:300">Title of Programme</td> 
                  <td style="width:130">Period</td>
                   <td style="width:300"> Funding Agency </td> 
            </tr>
              <?php
        if($row['fa11']!="")
            {
                    ?>
            <tr>
        <td style="width:300" ><?php echo $row['fa11']; ?></td>
        <td style="width:130"><?php echo $row['fa12']; ?> </td>
        <td style="width:300"><?php echo $row['fa13']; ?></td>
       </tr>
          <?php
            }
            if($row['fa21']!="")
            {
                    ?>
       <tr>
         <td style="width:300" ><?php echo $row['fa21']; ?></td>
        <td style="width:130"><?php echo $row['fa22']; ?> </td>
        <td style="width:300"><?php echo $row['fa23']; ?></td>
    </tr>
       <?php
            }
            if($row['fa31']!="")
            {
                    ?>
     <tr>
        <td style="width:300" ><?php echo $row['fa31']; ?></td>
        <td style="width:130"><?php echo $row['fa32']; ?> </td>
        <td style="width:300"><?php echo $row['fa33']; ?></td>
    </tr>
       <?php
            }
            if($row['fa41']!="")
            {
                    ?>
    <tr>
        <td style="width:300" ><?php echo $row['fa41']; ?></td>
        <td style="width:130"><?php echo $row['fa42']; ?> </td>
        <td style="width:300"><?php echo $row['fa43']; ?></td>
    </tr>
       <?php
            }
            if($row['fa51']!="")
            {
                    ?>
    <tr>
         <td style="width:300" ><?php echo $row['fa51']; ?></td>
        <td style="width:130"><?php echo $row['fa52']; ?> </td>
        <td style="width:300"><?php echo $row['fa53']; ?></td>
    </tr> 
       <?php
            }
            if($row['fa61']!="")
            {
                    ?>
    <tr>
         <td style="width:300" ><?php echo $row['fa61']; ?></td>
        <td style="width:130"><?php echo $row['fa62']; ?> </td>
        <td style="width:300"><?php echo $row['fa63']; ?></td>
    </tr> 
       <?php
            }
            if($row['fa71']!="")
            {
                    ?>
    <tr>
         <td style="width:300" ><?php echo $row['fa71']; ?></td>
        <td style="width:130"><?php echo $row['fa72']; ?> </td>
        <td style="width:300"><?php echo $row['fa73']; ?></td>
    </tr> 
       <?php
            }
            if($row['fa81']!="")
            {
                    ?>
    <tr>
        <td style="width:300" ><?php echo $row['fa81']; ?></td>
        <td style="width:130"><?php echo $row['fa82']; ?> </td>
        <td style="width:300"><?php echo $row['fa83']; ?></td>
    </tr> 
       <?php
            }
            if($row['fa91']!="")
            {
                    ?>
    <tr>
        <td style="width:300" ><?php echo $row['fa91']; ?></td>
        <td style="width:130"><?php echo $row['fa92']; ?> </td>
        <td style="width:300"><?php echo $row['fa93']; ?></td>
    </tr> 
       <?php
            }
            if($row['fa101']!="")
            {
                    ?>
    <tr>
        <td style="width:300" ><?php echo $row['fa101']; ?></td>
        <td style="width:130"><?php echo $row['fa102']; ?> </td>
        <td style="width:300"><?php echo $row['fa103']; ?></td>
    </tr>
   <?php
            }   ?>
        </table>
           <br>
        <table style="FONT-SIZE: 8pt;">
            <tr>
                <td> <b>24. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities - Non remunerative(upload relevant document(s))</b>  </td>
            </tr>
            <tr> <td style="width:730"><?php echo $row['edp']; ?></td> </tr>
        </table>
             <br>
            <table  style="FONT-SIZE: 8pt;">
                <tr> <td><b>25. Awards and Recognitions (Upload photocopies)</b> </td>
                </tr>
                <tr><td style="width:730"> <?php echo $row['ar']; ?> </td>
            </tr>
            <tr>
                <td><b>26. Any other relevant information you may like to furnish: </b></td>
            </tr>
            <tr>
               <td style="width:730"><?php echo $row['ao']; ?> </td></tr>
            </table>
   <br>
         <table style="FONT-SIZE: 8pt;" > 
            <tr>
                <td colspan="4" >
                  <b>27. Names and addresses of two Professional References (Upload Testimonials of Them) </b>  
                </td>
            </tr>
            <tr>
                <td> Name   1. :</td>
                <td style="width:220px">  <?php echo $row['pr11']; ?></td>
                <td> 2. : </td>
                <td style="width:220px"> <?php echo $row['pr21']; ?> </td>
            </tr>
            <tr>
                <td style="width:120px"> Position/Designation :</td>
                <td style="width:120px"> <?php echo $row['pr12']; ?> </td>
                <td> Position/Designation : </td>
                <td style="width:120px"> <?php echo $row['pr22']; ?> </td>
            </tr>
            <tr>
                <td style="width:70px">  Address(Phone <br> Mobile <br> E-mail) :</td>
                <td style="width:120px">  <?php echo $row['pr13']; ?> </td>
                <td> Address  (Phone  Mobile  E-mail) : </td>
                <td style="width:70px"> <?php echo $row['pr23']; ?> </td>
            </tr>
        </table> 
             <br>
            <table style="FONT-SIZE: 8pt;" >
                
            <tr>
              
                <td> <b>28. Please indicate how in your opinion you can contribute to NITK's growth. (upload relevant document)</b></td> 
              
            </tr>
            <tr>     <td style="width:620"><?php echo $row['ao1']; ?>   </td>          </tr>
            
            <tr>
              
                <td> <b> <label>*</label>Two experiments or computational projects added to teaching laboratories. </b></td> 
              
            </tr>
            <tr>     <td style="width:620"><?php $row1['expcomp'];?>   </td>          </tr>
            
            
            
            <tr>
              
                <td> <b><label>*</label> M.Tech., M..Sc. or B.Tech project supervision on live industrial problems. </b></td> 
              
            </tr>
            <tr>     <td style="width:620"><?php $row1['live'];?>   </td>          </tr>
            
</table>  <br>
       <table style="FONT-SIZE: 8pt;">
            <tr>   <td colspan="4">
     <b>29. I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
            the rules and regulations of the institute and also the directions given to me from time to time. </b></td>
     </tr>
     <tr>
       <td> <b>Date: </b></td> 
       <td> <?php echo $row['date']; ?> </td>
       <td> <b>Place:</b></td>
       <td> <?php echo $row['place']; ?> </td>
     </tr>
            </table>     <br>
   <table align="right" width="80%"> 
        <tr><td width="400px"> <?php echo ""; ?></td> <td> 
<img style="align-self:right;width:100px;height:50px;" src="<?php echo $imgpath1; ?>" alt="">
   </td>
</tr>
<tr>
    <td width="400px"> <?php echo ""; ?> </td><td>Applicant Signature</td>  
</tr>
    </table>
 <hr  style="border:1;height: 1px;"width="60%">
  <table style="FONT-SIZE: 8pt;">
                <tr><th colspan="2"> List of Documents Uploaded</th></tr>
                                              <tr><td><ol>
                                        <?php if($row3['up3']!="") {?>
                                        <li>
                                            <label> Proof of Date of Birth</label>
                                        </li>
                                        <?php }?>
                                       
                                        <?php if($row3['up9']!="") {?>
                                        <li>
                                            <label> Category certificate (SC/ST/OBC)</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up10']!="") {?>
                                        <li>
                                            <label>PWD Certificate:</label>
                                        </li>
                                        <?php }?>
                                     
                                        <?php if($row3['up11']!="") {?>
                                        <li>
                                            <label>Upload Salary certificate/pay slip</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up4']!="" && $row3['up5']!="" && $row3['up6']!="" && $row3['up8']!="") {?>
                                        <li>
                                           <label>Academic Career Record Documents (SSLC to Ph.D.) </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up12']!="") {?>
                                        <li>
                                           <label>Academic Career Record Documents (Postdoctoral)</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up13']!="") {?>
                                        <li>
                                           <label>Experience certificates  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up14']!=""||$row3['up15']!="") {?>
                                        <li>
                                           <label> Proof of completed PhD guidance</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up16']!="") {?>
                                        <li>
                                           <label> External Sponsored R&D Projects  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up17']!="") {?>
                                        <li>
                                           <label> Patent supporting Documents </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up18']!="") {?>
                                        <li>
                                           <label>Upload Sponsored and Consultancy projects supporting Documents </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up19']!=""||$row3['up20']!="") {?>
                                        <li>
                                           <label> Publication Details</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up21']!=""||$row3['up22']!="") {?>
                                        <li>
                                           <label> Conference Publication Details </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up23']!="") {?>
                                        <li>
                                           <label> Details of Administrative Responsibilities  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up24']!="") {?>
                                        <li>
                                           <label>Details of Administrative Responsibilities and other Resposibilities </label>
                                        </li>
                                        <?php }?>
                                        
                                        <?php if($row3['up25']!="") {?>
                                        <li>
                                           <label>Details of Additional Responsilities </label>
                                        </li>
                                        <?php }?>
                                        
                                        <?php if($row3['up26']!="") {?>
                                        <li>
                                           <label>Details of  Departmental activities</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up27']!="") {?>
                                        <li>
                                           <label>Details of Workshops/FDP/Short term courses</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up28']!="") {?>
                                        <li>
                                           <label>Details of National/International conference organized as chairman/Secretary</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up29']!="") {?>
                                        <li>
                                           <label>Details of GIAN program</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up30']!="") {?>
                                        <li>
                                           <label> Details of Establishment of new lab</label>
                                        </li>
                                        <?php }?>
                                       <?php if($row3['up31']!="") {?>
                                        <li>
                                           <label> Teaching of over and above 6 credit hrs</label>
                                        </li>
                                        <?php }?>
                                       <?php if($row3['up32']!="") {?>
                                        <li>
                                           <label> Details of PG Dissertation guided</label>
                                        </li>
                                        <?php }?>
                                      <?php if($row3['up33']!="") {?>
                                        <li>
                                           <label> Details of UG Project guided</label>
                                        </li>
                                        <?php }?>
                                     <?php if($row3['up34']!=""||$row3['up35']!="") {?>
                                        <li>
                                           <label> Details of Text/Reference Book Published</label>
                                        </li>
                                        <?php }?>
                                       <?php if($row3['up36']!="") {?>
                                        <li>
                                           <label> Details of Fellow IEEE, INA, FNAE, FNSc</label>
                                        </li>
                                        <?php }?>
                                      <?php if($row3['up37']!="") {?>
                                        <li>
                                           <label> Other relevant documents to support your candidature</label>
                                        </li>
                                        <?php }?>
                                       <?php if($row3['up38']!="") {?>
                                        <li>
                                           <label> professional training received/summer/winter schools attended</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up39']!="") {?>
                                        <li>
                                           <label>Conference/workshop/seminars attended</label>
                                        </li>
                                        <?php }?>
                                       <?php if($row3['up40']!="") {?>
                                        <li>
                                           <label>No objection certificate</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up41']!="") {?>
                                        <li>
                                           <label>Testimonials from Referees</label>
                                        </li>
                                        <?php }?>
                                        
                        </ol> </td></tr>
            </table>
<?php
 mysqli_close($link);
?>
</page>
