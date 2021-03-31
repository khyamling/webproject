<page backtop="26mm" backbottom="5mm" backleft="0mm" backright="">
  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br> <p style="FONT-SIZE: 8pt;"> Faculty Recruitment - Credits Verification Form</p></th>
                <td style="text-align: right; FONT-SIZE: 8pt;width: 20%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
        <hr  style="border:1;height: 2px;"width="60%">
    </page_header>
    <page_footer>
          <hr  style="border:1;height: 2px;"width="60%">    
        <table style="width: 100%;FONT-SIZE: 8pt;">
            <tr>
                <td style="text-align: left;    width: 50%">Application Form</td>
                <td style="text-align: right;    width: 50%">page [[page_cu]]/[[page_nb]]</td>
            </tr>
	 <tr> <td style="text-align: left;    width: 50%"> Credits Verification</td> </tr>
        </table>
      
    </page_footer>
        <?php 
if(!isset($_SESSION)){
    session_start();
}
require_once 'class.user.php';

$user_home = new USER();
//$addv=$_SESSION['addv'];
$vapn=$_POST["nappn"]; 

//$vapn="AP1AMH170";
//$UID=$_POST["UID11"]; 
if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
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
      
  

 $sql =  "SELECT * FROM newrules1 WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row4=$result1->fetch_array();

 $sql =  "SELECT * FROM newrules1src WHERE appn='$vapn'";
$result1c =  mysqli_query($link, $sql);
$rowc=$result1c->fetch_array();

$sql =  "SELECT * FROM crediteq1 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row5=$result2->fetch_array();

$sql =  "SELECT * FROM vcrediteq1 WHERE appn='$vapn'";
$result4 =  mysqli_query($link, $sql);
$rowv=$result4->fetch_array();

$sql =  "SELECT * FROM remarkeli WHERE appn='$vapn'";
$result7 =  mysqli_query($link, $sql);
$rowre=$result7->fetch_array();
    

$sql =  "SELECT * FROM eq1page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
 //$UID=$row['Page37'];

$sqlem =  "SELECT * FROM postapplied WHERE appid='$vapn'";
$resultem =  mysqli_query($link, $sqlem);
$rowem=$resultem->fetch_array();
$UID=$rowem['email'];

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
    $post="Assistant Professor(On Contract) Grade II, Level-10 (7CPC)";
//    $agp="6000";
    $agp=" ";
}
else if($post=="2")
{
$post="Assistant Professor(On Contract) Grade II, Level-11 (7CPC)";
// $agp="7000";
    $agp=" ";
}
else if($post=="3")
{
$post="Assistant Professor - Grade I, Level 12 (7CPC)";
	$agp=" ";
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

 <table cellspacing="1" style="FONT-SIZE: 8pt;" style="width: 100%;> 
   <tr>
    <td>
      <b>Application No. : </b>
     </td> 
       <td>
            <?php echo $vapn?>
       </td>
     </tr>
     </table>
<hr>
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
<hr>

<table style="FONT-SIZE: 8pt;" cellspacing="2" >
    <tr><td style="width: 150">
            <b>Total Credit:</b>
        </td>
        <td style="width: 70"> <?php echo $row5['credit1']; ?> </td>   <th style="width: 150">  <b>Verified Credits:</b>  </th>      <td style="width: 70px"> <?php echo $rowv['credit1']; ?> </td> 
    </tr>
</table>
<hr>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
<tr>
<th style="width:300px" align="left">       <b>1. One external sponsored R & D Projects completed or ongoing/patent granted</b></th> 
<th style="width: 45px">Count</th> 
<th style="width: 45px">Credit</th>
<th style="width: 45px">Count</th>  
<th style="width: 70px">Verified Credit</th>
    </tr>   
<tr>
<td style="width:300px" align="left"> <p>(a). No. of project - Completed or  <br> Ongoing as Lone PI  (8-point per Project) </p></td>  
<td style="width:45px"><?php echo $row4['loneproj'];?>  </td>
<?php $result1=8*$row4['loneproj'] ?> 
<td style="width:45px"><?php echo $result1;?></td> 
<td style="width:45px"><?php echo $rowc['loneproj'];?>  </td> 
<?php $result1c=8*$rowc['loneproj'] ?> 
<td style="width:70px"><?php echo $result1c;?>  </td> 
</tr>
<tr> 
<td style="width:300px" align="left" > (b). No. of project Completed or  <br> Ongoing as Team PI ( 5 points per Project) </td>
<td style="width:45px"><?php echo $row4['teamproj'];?>  </td>
        <?php $result3=5*$row4['teamproj'] ?>
        <td style="width:45px"><?php echo $result3;?>  </td>
<td style="width:45px"><?php echo $rowc['teamproj'];?>  </td>
<?php $result3c=5*$rowc['teamproj'] ?>
        <td style="width:70px"><?php echo $result3c;?>  </td>
</tr>

<tr>

 <td style="width:420px" align="left">(c). No. of project  Completed or Ongoing as Co-PI ( 3 points per Project) </td>
<td style="width:55px"><?php echo $row4['coproj'];?> </td>
        <?php $result4=3*$row4['coproj'] ?>
        <td style="width:70px"><?php echo $result4;?>  </td>
<td style="width:55px"><?php echo $rowc['coproj'];?> </td>
 <?php $result4c=3*$rowc['coproj'] ?>
        <td style="width:70px"><?php echo $result4c;?>  </td>
</tr>
<tr> 
<td style="width:420px" colspan="1" align="left">(d). No. of  Patent - Granted  ( 8 credit per Patent)  </td>
<td style="width:55px"><?php echo $row4['patgrant'];?>  </td>
        <?php $result5=8*$row4['patgrant'] ?>
        <td style="width:70px"><?php echo $result5;?>  </td> 
<td style="width:55px"><?php echo $rowc['patgrant'];?>  </td>
<?php $result5c=8*$rowc['patgrant'] ?>
        <td style="width:70px"><?php echo $result5c;?>  </td>
</tr>

<tr><th style="width:420px">Total Credit</th>
       <td style="width:55px">User </td>
       <?php $result6=$result1+$result3+$result4+$result5; ?>
        <td style="width:70px"><?php echo $result6;?>  </td>
        <td style="width:55px"> Verfied</td>
        <?php $result6c=$result1c+$result3c+$result4c+$result5c; ?>
        <td style="width:70px"><?php echo $result6c;?>  </td>
</tr>

<tr><th style="width:420px" align="left"> <b> 2. Consultancy Projects </b> 
<br> (No. of consultancy Projects - 2 credit point @ Rs. 5 lakhs of consultancy) </th>
 <td style="width: 55"><?php echo $row4['consult']; ?> </td>  
 <?php $result2=2*$row4['consult'];  if($result2>10){    $result3=10; } else {     $result3= $result2; } ?>
 <td style="width: 70"><?php echo $result3; ?></td>
<td style="width: 55"><?php echo $rowc['consult']; ?> </td> 
 <?php $result2c=2*$rowc['consult'];  if($result2c>10){    $result3c=10; } else {     $result3c= $result2c; } ?>
 <td style="width: 70"><?php echo $result3; ?></td>
</tr>
<tr><th style="width:420px">Total Credit</th>
       <td style="width:55px">User </td>
        <td style="width:70px"><?php echo $result3;?>  </td>
        <td style="width:55px"> Verfied</td>
        <td style="width:70px"><?php echo $result3c;?>  </td>
</tr>


<tr> <th style="width:420px" align="left" >3.Doctorates Guided(including thesis submitted cases)
</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th> 
</tr>
<tr> 
<td style="width:420px" align="left">3a. No. of  PhD Completed/  Thesis submitted Lone supervisor <br>  ( 8 points per Student)  </td>  
<td style="width:55px"><?php echo $row4['loneguide']; ?></td> 
<?php  $result7=8*$row4['loneguide']; ?>
<td style="width:70px"><?php echo $result7; ?></td>
<td style="width:55px"><?php echo $rowc['loneguide']; ?></td>  
 <?php  $result7c=8*$rowc['loneguide']; ?>
<td style="width:70px"><?php echo $result7c; ?></td>  
</tr> 
<tr> 
<td style="width:420px" align="left">3b. No. of  PhD Completed/  Thesis submitted jointly as Head supervisor <br>  ( 5 points per Student ) </td> 
<td style="width:55px"><?php echo $row4['headguide']; ?></td> 
<?php  $result8=5*$row4['headguide']; ?>
<td style="width:70px"><?php echo $result8; ?></td>
<td style="width:55px"><?php echo $rowc['headguide']; ?></td>  
 <?php  $result8=5*$rowc['headguide']; ?>
<td style="width:70px"><?php echo $result8; ?></td>  
</tr>
<tr>
<th style="width:420px" align="left" >3c. No. of PhD Completed/Thesis submitted - Co-supervisor </th> 
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> 
<td style="width:420px" align="left">3c1. One Co-supervisor (3 points per Student) </td>
<td style="width:55px"><?php echo $row4['coguide']; ?></td> 
<?php $result10=3*$row4['coguide']; ?> 
<td style="width:70px"><?php echo $result10; ?></td> 
<td style="width:55px"><?php echo $rowc['coguide']; ?></td>  
<?php $result10c=3*$rowc['coguide']; ?> 
<td style="width:50px"><?php echo $result10c; ?></td> 
</tr>
<tr> 
<td style="width:420px" align="left">3c2. Two Co-supervisor (1.5 points per Student)  </td>
<td style="width:55px"><?php echo $row4['coguide2']; ?></td> 
<?php $result11=1.5*$row4['coguide2']; ?>
<td style="width:70px"><?php echo $result11; ?></td> 
<td style="width:55px"><?php echo $rowc['coguide2']; ?></td>    
<?php $result11c=1.5*$rowc['coguide2']; ?>
<td style="width:70px"><?php echo $result11c; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">3c3. Three Co-supervisor (1.0 points per Student) </td>
<td style="width:55px"><?php echo $row4['coguide3']; ?></td> 
<?php $result12=1.5*$row4['coguide3']; ?>
<td style="width:70px"><?php echo $result12; ?></td>
<td style="width:55px"><?php echo $rowc['coguide3']; ?></td>     
<?php $result12c=1.5*$rowc['coguide3']; ?>
<td style="width:70px"><?php echo $result12c; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">3c4.Four Co-supervisor (0.75 points per Student) </td>
<td style="width:55px"><?php echo $row4['coguide4']; ?></td> 
<?php $result13=1.5*$row4['coguide4']; ?>
<td style="width:70px"><?php echo $result13; ?></td>
<td style="width:55px"><?php echo $rowc['coguide4']; ?></td>     
<?php $result13c=1.5*$rowc['coguide4']; ?>
<td style="width:70px"><?php echo $result13c; ?></td> 
</tr> 

<tr> 
<td style="width:420px" align="left">3c5. Greater than Four Co-supervisor (0.6 points per Student)</td>
<td style="width:55px"><?php echo $row4['coguide5']; ?></td> 
<?php $result14=1.5*$row4['coguide5']; ?>
<td style="width:70px"><?php echo $result14; ?></td>  
<td style="width:55px"><?php echo $rowc['coguide5']; ?></td> 
<?php $result14c=1.5*$rowc['coguide5']; ?>
<td style="width:70px"><?php echo $result14c; ?></td> 
 </tr>

<tr><th style="width: 440">Total Credit</th>  
<td style="width:55px"> User </td>
<?php $result15=$result10+$result11+$result12+$result13+$result14; ?> 
<td style="width:70px"><?php echo $result15; ?></td> 
<td style="width:55px"> Verfied</td>
<?php $result15c=$result10c+$result11c+$result12c+$result13c+$result14c; ?>
<td style="width:70px"><?php echo $result15c; ?></td> 
 </tr> 


<tr> 
<th style="width:420px"  align="left">4. Journal papers in SCI/SCI-E/SSCI/Scopus since last promotion <br> (Paid Journals not allowed)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr>
<td style="width:420px" align="left">4a. No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - Single Author Papers <br> (4 points per paper)  </td>
<td style="width:55px"><?php echo $row4['jsing']; ?></td> 
<?php $result16=4*$row4['jsing']; ?> 
<td style="width:70px"><?php echo $result16; ?></td>      
<td style="width:55px"><?php echo $rowc['jsing']; ?></td> 
<?php $result16c=4*$rowc['jsing']; ?> 
<td style="width:70px"><?php echo $result16c; ?></td> 
</tr>
<tr>
<td style="width:450px" align="left">4b.No of  Journal - SCI/SCI-E/SSCI/Scopus Indexed - First author/Main supervisor <br>(2 points per paper)  </td>
<td style="width:55px"><?php echo $row4['jmain']; ?></td> 
<?php $result17=2*$row4['jmain']; ?>
<td style="width:70px"><?php echo $result17; ?></td>
<td style="width:55px"><?php echo $rowc['jmain']; ?></td> 
<?php $result17c=2*$rowc['jmain']; ?>
<td style="width:70px"><?php echo $result17c; ?></td>
</tr>
<tr> 
<th style="width:420px" align="left" >4c. No of Journal -  SCI/SCI-E/SSCI/Scopus Indexed - Co-Author
</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> 
<td style="width:420px" align="left">4c1. One Co-Author (2 points per paper) </td> 
<td style="width:55px"><?php echo $row4['jother']; ?></td> 
<?php $result18=2*$row4['jother']; ?>
<td style="width:70px"><?php echo $result18; ?></td> 
<td style="width:55px"><?php echo $rowc['jother']; ?></td> 
<?php $result18c=2*$rowc['jother']; ?>
<td style="width:70px"><?php echo $result18c; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">4c2. Two Co-Author (1 points per paper) </td> 
<td style="width:55px"><?php echo $row4['jother2']; ?></td> 
<?php $result19=1*$row4['jother2']; ?>
<td style="width:70px"><?php echo $result19; ?></td>
<td style="width:55px"><?php echo $rowc['jother2']; ?></td>
<?php $result19c=1*$rowc['jother2']; ?>
<td style="width:50px"><?php echo $result19c; ?></td> 
</tr> 
<tr>
<td style="width:420px" align="left">4c3. Three Co-Author (0.67 points per paper)  </td> 
<td style="width:55px"><?php echo $row4['jother3']; ?></td> 
<?php $result20=0.67*$row4['jother3']; ?>
<td style="width:70px"><?php echo $result20; ?></td> 
<td style="width:55px"><?php echo $rowc['jother3']; ?></td> 
<?php $result20c=0.67*$rowc['jother3']; ?>
<td style="width:50px"><?php echo $result20c; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">4c4. Four Co-Author (0.5 points per paper)  </td> 
<td style="width:55px"><?php echo $row4['jother4']; ?></td> 
<?php $result21=0.5*$row4['jother4']; ?>
<td style="width:70px"><?php echo $result21; ?></td>
<td style="width:55px"><?php echo $rowc['jother4']; ?></td>
<?php $result21c=0.5*$rowc['jother4']; ?>
<td style="width:70px"><?php echo $result21c; ?></td> 
</tr> 

<tr>
<td style="width:420px" align="left">4c5. Greater than Four Co-Author (0.4 points per paper) </td> 
<td style="width:55px"><?php echo $row4['jother5']; ?></td> 
<?php $result22=0.4*$row4['jother5']; ?>
<td style="width:70px"><?php echo $result22; ?></td> 
<td style="width:55px"><?php echo $rowc['jother5']; ?></td> 
<?php $result22c=0.4*$rowc['jother5']; ?>
<td style="width:70px"><?php echo $result22c; ?></td> 
</tr> 
<tr> 
<th style="width: 420px">Total Credit</th>  
<td style="width: 55"> User </td>
<?php $result23= $result16+$result17+$result18+$result19+$result20+$result21+$result22; ?>
<td style="width:70px"><?php echo $result23; ?></td>
<td style="width: 55"> Verified </td> 
<?php $result23c= $result16c+$result17c+$result18c+$result19c+$result20c+$result21c+$result22c; ?>
<td style="width:70px"><?php echo $result23c; ?></td> 
</tr>

<tr> 
<th style="width:420px" align="left">5. One Conference paper indexed in SCI/Scopus/Web of science <br>  Conference / any internationally renowned conference</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 420px" align="left">  5a. No. of Conference paper - Single Author Papers </td>
     <td style="width: 55"><?php echo $row4['csing']; ?></td>
     <?php $resultconf=1*$row4['csing']; ?>
     <td style="width: 70"><?php echo $resultconf; ?></td>
     <td style="width: 55"><?php echo $rowc['csing']; ?></td>
       <?php $resultconfc=1*$rowc['csing']; ?>
     <td style="width: 70"><?php echo $resultconfc; ?></td>
</tr>
<tr>
<td style="width: 420px" align="left">  5b. No. of Conference paper - First author/Main supervisor </td>
<td style="width: 55"><?php echo $row4['cmain']; ?></td>
<?php $resultconfm=0.6*$row4['cmain']; ?>
<td style="width: 70"><?php echo $resultconfm; ?></td>
<td style="width: 55"><?php echo $rowc['cmain']; ?></td>
<?php $resultconfcm=0.6*$rowc['cmain']; ?>
<td style="width: 70"><?php echo $resultconfcm; ?></td> 
</tr>
</table>
<br>
<br>
<br>
<br>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
<tr> 
<th style="width:450px" align="left" >5c. No. of  Conference paper - Co-author</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> 
<td style="width:420px" align="left">5c1.One Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother']; ?></td> 
<?php $result18co=0.4*$row4['cother']; ?>
<td style="width:70px"><?php echo $result18co; ?></td> 
<td style="width:55px"><?php echo $rowc['cother']; ?></td> 
<?php $result18cco=0.4*$rowc['cother']; ?>
<td style="width:70px"><?php echo $result18cco; ?></td> 
</tr>
<tr> 
<td style="width:420px" align="left">5c2.Two Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother2']; ?></td> 
<?php $result18co2=0.2*$row4['cother2']; ?>
<td style="width:70px"><?php echo $result18co2; ?></td> 
<td style="width:55px"><?php echo $rowc['cother2']; ?></td> 
<?php $result18cco2=0.2*$rowc['cother']; ?>
<td style="width:70px"><?php echo $result18cco2; ?></td> 
</tr>
<tr> 
<td style="width:420px" align="left">5c3.Three Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother3']; ?></td> 
<?php $result18co3=0.13*$row4['cother3']; ?>
<td style="width:70px"><?php echo $result18co3; ?></td> 
<td style="width:55px"><?php echo $rowc['cother3']; ?></td> 
<?php $result18cco3=0.13*$rowc['cother3']; ?>
<td style="width:70px"><?php echo $result18cco3; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">5c4.Four Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother4']; ?></td> 
<?php $result18co4=0.1*$row4['cother4']; ?>
<td style="width:70px"><?php echo $result18co4; ?></td> 
<td style="width:55px"><?php echo $rowc['cother4']; ?></td> 
<?php $result18cco4=0.1*$rowc['cother4']; ?>
<td style="width:70px"><?php echo $result18cco4; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">5c5.Five Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother5']; ?></td> 
<?php $result18co5=0.02*$row4['cother5']; ?>
<td style="width:70px"><?php echo $result18co5; ?></td> 
<td style="width:55px"><?php echo $rowc['cother5']; ?></td> 
<?php $result18cco5=0.02*$rowc['cother5']; ?>
<td style="width:70px"><?php echo $result18cco5; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">5c6.Six Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother6']; ?></td> 
<?php $result18co6=0.016*$row4['cother6']; ?>
<td style="width:70px"><?php echo $result18co6; ?></td> 
<td style="width:55px"><?php echo $rowc['cother6']; ?></td> 
<?php $result18cco6=0.016*$rowc['cother6']; ?>
<td style="width:70px"><?php echo $result18cco6; ?></td> 
</tr> 
<tr> 
<td style="width:420px" align="left">5c7.Seven Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother7']; ?></td> 
<?php $result18co7=0.014*$row4['cother7']; ?>
<td style="width:70px"><?php echo $result18co7; ?></td> 
<td style="width:55px"><?php echo $rowc['cother7']; ?></td> 
<?php $result18cco7=0.014*$rowc['cother7']; ?>
<td style="width:70px"><?php echo $result18cco7; ?></td> 
</tr>  
<tr> 
<td style="width:420px" align="left">5c8.Greater than seven Co-Author</td> 
<td style="width:55px"><?php echo $row4['cother8']; ?></td> 
<?php $result18co8=0.012*$row4['cother8']; ?>
<td style="width:70px"><?php echo $result18co8; ?></td> 
<td style="width:55px"><?php echo $rowc['cother8']; ?></td> 
<?php $result18cco8=0.012*$rowc['cother8']; ?>
<td style="width:70px"><?php echo $result18cco8; ?></td> 
</tr>  
<tr> 
<th style="width: 420">Total Credit(Max 10 credit Points)</th>  
<td style="width: 55"> User </td>
<?php 
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
<td style="width:70px"><?php echo $result25; ?></td>
<td style="width: 55"> Verified </td> 
<?php 
$result24c=1*$rowc['csing']+0.6*$rowc['cmain']+0.4*$rowc['cother']+0.2*$rowc['cother2']+0.13*$rowc['cother3']+0.1*$rowc['cother4']+0.02*$rowc['cother5']+0.016*$rowc['cother6']+0.014*$rowc['cother7']+0.012*$rowc['cother8'];
if($result24c>10)
{
    $result25c=10;
}
else
{
    $result25c= $result24c;
}
?>
<td style="width:70px"><?php echo $result25c; ?></td> 
</tr>


<tr> 
<th style="width:420px" align="left" >6. Administrative Responsibilities (HoD, Dean, Chief Warden,  Prof - InCharge (T&P), <br> Advisor(Estate), TEQIP Co-ord) -  <br>  No. of Semesters as (since last promotion):</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 420" align="left">  Number of semesters the HoD position was held </td>
     <td style="width: 55"><?php echo $row4['sixadmin1']; ?></td>
     <?php $resultad1=2*$row4['sixadmin1']; ?>
     <td style="width: 70"><?php echo $resultad1; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin1']; ?></td>
       <?php $resultad1c=2*$rowc['sixadmin1']; ?>
     <td style="width: 70"><?php echo $resultad1c; ?></td>
</tr>
<tr> <td style="width: 420" align="left">  Number of semesters the Dean position was held  </td>
     <td style="width: 55"><?php echo $row4['sixadmin2']; ?></td>
     <?php $resultad2=2*$row4['sixadmin2']; ?>
     <td style="width: 70"><?php echo $resultad2; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin2']; ?></td>
       <?php $resultad2c=2*$rowc['sixadmin2']; ?>
     <td style="width: 70"><?php echo $resultad2c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Chief warden position was held  </td>
     <td style="width: 55"><?php echo $row4['sixadmin3']; ?></td>
     <?php $resultad3=2*$row4['sixadmin3']; ?>
     <td style="width: 70"><?php echo $resultad3; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin3']; ?></td>
       <?php $resultad3c=2*$rowc['sixadmin3']; ?>
     <td style="width: 70"><?php echo $resultad3c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Professor Incharge(T&P) position <br>  was held  </td>
     <td style="width: 55"><?php echo $row4['sixadmin4']; ?></td>
     <?php $resultad4=2*$row4['sixadmin4']; ?>
     <td style="width: 70"><?php echo $resultad4; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin4']; ?></td>
       <?php $resultad4c=2*$rowc['sixadmin4']; ?>
     <td style="width: 70"><?php echo $resultad4c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Advisor(Estate) position <br>  was held</td>
     <td style="width: 55"><?php echo $row4['sixadmin5']; ?></td>
     <?php $resultad5=2*$row4['sixadmin5']; ?>
     <td style="width: 70"><?php echo $resultad5; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin5']; ?></td>
       <?php $resultad5c=2*$rowc['sixadmin5']; ?>
     <td style="width: 70"><?php echo $resultad5c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the CVO position was held </td>
     <td style="width: 55"><?php echo $row4['sixadmin6']; ?></td>
     <?php $resultad6=2*$row4['sixadmin6']; ?>
     <td style="width: 70"><?php echo $resultad6; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin6']; ?></td>
       <?php $resultad6c=2*$rowc['sixadmin6']; ?>
     <td style="width: 70"><?php echo $resultad6c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the PI(Exam) position was held</td>
     <td style="width: 55"><?php echo $row4['sixadmin7']; ?></td>
     <?php $resultad7=2*$row4['sixadmin7']; ?>
     <td style="width: 70"><?php echo $resultad7; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin7']; ?></td>
       <?php $resultad7c=2*$rowc['sixadmin7']; ?>
     <td style="width: 70"><?php echo $resultad7c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the TEQIP(Coordinator) position<br>  was held</td>
     <td style="width: 55"><?php echo $row4['sixadmin8']; ?></td>
     <?php $resultad8=2*$row4['sixadmin8']; ?>
     <td style="width: 70"><?php echo $resultad8; ?></td>
     <td style="width: 55"><?php echo $rowc['sixadmin8']; ?></td>
       <?php $resultad8c=2*$rowc['sixadmin8']; ?>
     <td style="width: 70"><?php echo $resultad8c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit(Maximum 16 Credit Points) 2 points per semester</th>  
<td style="width: 55"> User </td>
<?php $totalcount6=$row4['sixadmin1']+$row4['sixadmin2']+$row4['sixadmin3']+$row4['sixadmin4']+$row4['sixadmin5']+$row4['sixadmin6']+$row4['sixadmin7']+$row4['sixadmin8'];?>
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
<td style="width:70px"><?php echo $result26; ?></td>
<td style="width: 55"> Verified </td>
<?php $totalcount6c=$rowc['sixadmin1']+$rowc['sixadmin2']+$rowc['sixadmin3']+$rowc['sixadmin4']+$rowc['sixadmin5']+$rowc['sixadmin6']+$rowc['sixadmin7']+$rowc['sixadmin8'];?>
<?php
 if($totalcount6c>8)
{
$result26c=16;
}
else
{
$result26c=2*$totalcount6c;
}
?>
<td style="width:70px"><?php echo $result26c; ?></td>
</tr>
<tr> 
<th style="width:420px" align="left" >7.Administrative and Other Responsibilities (Warden/Asst. Warden,  Assoc. <br> Dean,   Chairman/Convener institute academic communities,   Fac-in-charge  <br>  Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge  <br> Student Activities) -  No. of Semesters  as (since last promotion) 
</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Warden positions was held </td>
     <td style="width: 55"><?php echo $row4['sevenadminothers1']; ?></td>
     <?php $result7ad1=1*$row4['sevenadminothers1']; ?>
     <td style="width: 70"><?php echo $result7ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers1']; ?></td>
       <?php $result7ad1c=1*$rowc['sevenadminothers1']; ?>
     <td style="width: 70"><?php echo $result7ad1c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Assstistance warden positions was held  </td>
     <td style="width: 55"><?php echo $row4['sevenadminothers2']; ?></td>
     <?php $result7ad2=1*$row4['sevenadminothers2']; ?>
     <td style="width: 70"><?php echo $result7ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers2']; ?></td>
       <?php $result7ad2c=1*$rowc['sevenadminothers2']; ?>
     <td style="width: 70"><?php echo $result7ad2c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Associate Dean positions was held </td>
     <td style="width: 55"><?php echo $row4['sevenadminothers4']; ?></td>
     <?php $result7ad3=1*$row4['sevenadminothers4']; ?>
     <td style="width: 70"><?php echo $result7ad3; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers4']; ?></td>
       <?php $result7ad3c=1*$rowc['sevenadminothers4']; ?>
     <td style="width: 70"><?php echo $result7ad3c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Chairman/Convener institute academic <br>  committees  positions was held   </td>
     <td style="width: 55"><?php echo $row4['sevenadminothers4']; ?></td>
     <?php $result7ad4=1*$row4['sevenadminothers4']; ?>
     <td style="width: 70"><?php echo $result7ad4; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers4']; ?></td>
       <?php $result7ad4c=1*$rowc['sevenadminothers4']; ?>
     <td style="width: 70"><?php echo $result7ad4c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Faculty In charge Computer  <br> Center positions was held</td>
     <td style="width: 55"><?php echo $row4['sevenadminothers5']; ?></td>
     <?php $result7ad5=1*$row4['sevenadminothers5']; ?>
     <td style="width: 70"><?php echo $result7ad5; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers5']; ?></td>
       <?php $result7ad5c=1*$rowc['sevenadminothers5']; ?>
     <td style="width: 70"><?php echo $result7ad5c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the IT Services positions was held </td>
     <td style="width: 55"><?php echo $row4['sevenadminothers6']; ?></td>
     <?php $result7ad6=1*$row4['sevenadminothers6']; ?>
     <td style="width: 70"><?php echo $result7ad6; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers6']; ?></td>
       <?php $result7ad6c=1*$rowc['sevenadminothers6']; ?>
     <td style="width: 70"><?php echo $result7ad6c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the Library positions was held</td>
     <td style="width: 55"><?php echo $row4['sevenadminothers7']; ?></td>
     <?php $result7ad7=1*$row4['sevenadminothers7']; ?>
     <td style="width: 70"><?php echo $result7ad7; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers7']; ?></td>
       <?php $result7ad7c=1*$rowc['sevenadminothers7']; ?>
     <td style="width: 70"><?php echo $result7ad7c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the Admission center positions was held</td>
     <td style="width: 55"><?php echo $row4['sevenadminothers8']; ?></td>
     <?php $result7ad8=1*$row4['sevenadminothers8']; ?>
     <td style="width: 70"><?php echo $result7ad8; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers8']; ?></td>
       <?php $result7ad8c=1*$rowc['sevenadminothers8']; ?>
     <td style="width: 70"><?php echo $result7ad8c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">Number of semesters the Student Activity positions was held</td>
     <td style="width: 55"><?php echo $row4['sevenadminothers9']; ?></td>
     <?php $result7ad9=1*$row4['sevenadminothers9']; ?>
     <td style="width: 70"><?php echo $result7ad9; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers9']; ?></td>
       <?php $result7ad9c=1*$rowc['sevenadminothers9']; ?>
     <td style="width: 70"><?php echo $result7ad9c; ?></td>
</tr>
<tr> <td style="width: 440" align="left"> Number of semesters the  Other Institutional Activity <br>  positions was held</td>
     <td style="width: 55"><?php echo $row4['sevenadminothers10']; ?></td>
     <?php $result7ad10=1*$row4['sevenadminothers10']; ?>
     <td style="width: 70"><?php echo $result7ad10; ?></td>
     <td style="width: 55"><?php echo $rowc['sevenadminothers10']; ?></td>
       <?php $result7ad10c=1*$rowc['sevenadminothers10']; ?>
     <td style="width: 70"><?php echo $result7ad10c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit(Maximum 8 Credit Points) 1 points per semester</th>  
<td style="width: 55"> User </td>
<?php $totalcredit71= $row4['sevenadminothers1']+ $row4['sevenadminothers2']+ $row4['sevenadminothers3']+ $row4['sevenadminothers4']+ $row4['sevenadminothers5']+$row4['sevenadminothers6']+$row4['sevenadminothers7']+$row4['sevenadminothers8']+$row4['sevenadminothers9']+$row4['sevenadminothers10'];?>
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
<td style="width:70px"><?php echo $result27; ?></td>
<td style="width: 55"> Verified </td>
<?php $totalcredit71c= $rowc['sevenadminothers1']+ $rowc['sevenadminothers2']+ $rowc['sevenadminothers3']+ $rowc['sevenadminothers4']+ $rowc['sevenadminothers5']+$rowc['sevenadminothers6']+$rowc['sevenadminothers7']+$rowc['sevenadminothers8']+$rowc['sevenadminothers9']+$rowc['sevenadminothers10'];?>
<?php
if($totalcredit71c>8)
{
$result27c=8;
}
else
{
$result27c=1*$totalcredit71c;
}
?>
<td style="width:70px"><?php echo $result27c; ?></td>
</tr>

<tr> 
<th style="width:420px" align="left" >8. Additional Responsibilities (Chairman/Convener standing committees, <br> Chairman/Convener special committee, Fac-incharge of different <br> Units)- No. of Semesters as (since last promotion)
</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Chairman/Convener standing committees <br> position was held </td>
     <td style="width: 55"><?php echo $row4['eightadminresp1']; ?></td>
     <?php $result8ad1=0.5*$row4['eightadminresp1']; ?>
     <td style="width: 70"><?php echo $result8ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['eightadminresp1']; ?></td>
       <?php $result8ad1c=0.5*$rowc['eightadminresp1']; ?>
     <td style="width: 70"><?php echo $result8ad1c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Chairman/Convener special committees <br> position was held </td>
     <td style="width: 55"><?php echo $row4['eightadminresp2']; ?></td>
     <?php $result8ad2=0.5*$row4['eightadminresp2']; ?>
     <td style="width: 70"><?php echo $result8ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['eightadminresp2']; ?></td>
       <?php $result8ad2c=0.5*$rowc['eightadminresp2']; ?>
     <td style="width: 70"><?php echo $result8ad2c; ?></td>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Fac-incharge of different Units position <br> was held </td>
     <td style="width: 55"><?php echo $row4['eightadminresp3']; ?></td>
     <?php $result8ad3=0.5*$row4['eightadminresp3']; ?>
     <td style="width: 70"><?php echo $result8ad3; ?></td>
     <td style="width: 55"><?php echo $rowc['eightadminresp3']; ?></td>
       <?php $result8ad3c=0.5*$rowc['eightadminresp3']; ?>
     <td style="width: 70"><?php echo $result8ad3c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit(Maximum 3 Credit Points) 0.5 points per semester</th>  
<td style="width: 55"> User </td>
<?php $totalcount8= $row4['eightadminresp1']+$row4['eightadminresp2']+$row4['eightadminresp3'];?>
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
<td style="width: 70"><?php echo $result28; ?></td> 
<td style="width: 55"> Verified </td>
<?php $totalcount8c= $rowc['eightadminresp1']+$rowc['eightadminresp2']+$rowc['eightadminresp3'];?>
<?php
if($totalcount8c>6)
{
$result28c=3;
}
else
{
$result28c=0.5*$totalcount8c;
}
?>
<td style="width: 70"><?php echo $result28c; ?></td> 
</tr>
<tr>
<th style="width:420px" align="left" >9. A Departmental activities  identified by HoD(Lab incharge, Dept <br> level committee - min 1 year)- No. of Semesters  <br>as (since last promotion):
</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">  Number of semesters the Lab incharge positions was held </td>
     <td style="width: 55"><?php echo $row4['nineadminresp1']; ?></td>
     <?php $result9ad1=0.5*$row4['nineadminresp1']; ?>
     <td style="width: 70"><?php echo $result9ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['nineadminresp1']; ?></td>
       <?php $result9ad1c=0.5*$rowc['nineadminresp1']; ?>
     <td style="width: 70"><?php echo $result9ad1c; ?></td>
</tr>
<tr> <td style="width: 440" align="left"> Number of semesters the Dept. level committee positions was held </td>
     <td style="width: 55"><?php echo $row4['nineadminresp2']; ?></td>
     <?php $result9ad2=0.5*$row4['nineadminresp2']; ?>
     <td style="width: 70"><?php echo $result9ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['nineadminresp2']; ?></td>
       <?php $result9ad2c=0.5*$rowc['nineadminresp2']; ?>
     <td style="width: 70"><?php echo $result9ad2c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit(Maximum 3 Credit Points) 0.5 points per semester</th>  
<td style="width: 55"> User </td>
<?php $totalcount9= $row4['nineadminresp1']+$row4['nineadminresp2'];?>
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
<td style="width: 70"><?php echo $result29; ?></td> 
<td style="width: 55"> Verified</td>
<?php $totalcount9c= $rowc['nineadminresp1']+$rowc['nineadminresp2'];?>
<?php
 if($totalcount9c>6)
{
$result29c=3;
}
else
{
$result29c=0.5*$totalcount9c;
}
?>
<td style="width: 70"><?php echo $result29c; ?></td> 
</tr>
</table>
<br>
<br>
<br>
<br>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
<tr> <td style="width: 440" align="left"><b>10. Workshops/FDP/Short term courses of minimum 05 working days <br> duration  offered as coordinator or convenor - Number (since <br>  last promotion)</b></td>
     <th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 

<tr> <td style="width: 450" align="left"> Number of workshops/courses conducted as coordinator or <br>  convenor (2 credit points per course) </td>
     <td style="width: 55"><?php echo $row4['workshop']; ?></td>
     <?php $result10ad2=2*$row4['workshop']; ?>
     <td style="width: 70"><?php echo $result10ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['workshop']; ?></td>
       <?php $result10ad2c=2*$rowc['workshop']; ?>
     <td style="width: 70"><?php echo $result10ad2c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Maximum 8 Credit Points)  2 points per semester</th>  
<td style="width: 55"> User </td>
<?php $totalcount10= $row4['workshop'];?>
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
<td style="width: 70"><?php echo $result30; ?></td> 
<td style="width: 55"> Verified</td>
<?php $totalcount10c= $rowc['workshop'];?>
<?php
 if($totalcount10c>4)
{
$result30c=8;
}
else
{
$result30c=2*$totalcount10c;
}
?>
<td style="width: 70"><?php echo $result30c; ?></td> 
</tr>

<tr> <th style="width: 440" align="left">11. For conducting National programs like GIAN etc.,<br>  as course coordinator. Program of 2 / 1 week duration (Since last promotion)</th>
     <th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 

<tr> <td style="width: 440" align="left"> No. of GIAN Course Program Coordinator-2 week (2 credit points per course) </td>
     <td style="width: 55"><?php echo $row4['gian1']; ?></td>
     <?php $result11ad1=2*$row4['gian1']; ?>
     <td style="width: 70"><?php echo $result11ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['gian1']; ?></td>
       <?php $result11ad1c=2*$rowc['gian1']; ?>
     <td style="width: 70"><?php echo $result11ad1c; ?></td>
</tr>

<tr> 
<th style="width: 440">Total Credit Points(Max 4 Credit Points)  </th>  
<td style="width: 55"> User </td>
<?php $totalcount11= $row4['gian1'];?>
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
<td style="width: 70"><?php echo $result31; ?></td> 
<td style="width: 55"> Verified</td>
<?php $totalcount11c= $rowc['gian1'];?>
<?php
    if($totalcount11c==1)
{
    $result31c=2;
}
else if($totalcount11c>1){
    $result31c=4;
}
else {
    $result31c=0;
}
?>
<td style="width: 70"><?php echo $result31c; ?></td> 
</tr>

<tr> <td style="width: 440" align="left"> No. of GIAN Course Program Coordinator-1 week (1 credit points per course) </td>
     <td style="width: 55"><?php echo $row4['gian2']; ?></td>
     <?php $result11ad2=1*$row4['gian2']; ?>
     <td style="width: 70"><?php echo $result11ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['gian2']; ?></td>
       <?php $result11ad2c=1*$rowc['gian2']; ?>
     <td style="width: 70"><?php echo $result11ad2c; ?></td>
</tr>

<tr> 
<th style="width: 440">Total Credit Points(Max 2 Credit Points)  </th>  
<td style="width: 55"> User </td>
<?php $totalcount11a= $row4['gian2'];?>
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
<td style="width: 70"><?php echo $result32; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount11ac= $rowc['gian2'];?>
 <?php
   if($totalcount11ac==1)
{
    $result32c=1;
}
else if($totalcount11ac>1){
    $result32c=2;
}
else
{
$result32c=0;
}
?>
<td style="width: 70"><?php echo $result32c; ?></td> 
</tr>

<tr> <th style="width: 440" align="left">12. National/International Conference organized <br> as Chairman/Secretary(since last promotion)</th>
     <th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 
<tr> <td style="width: 440" align="left"> Number of National/International Conference organized <br> as Chairman/Secretary  (3 credit points per program) </td>
     <td style="width: 55"><?php echo $row4['national']; ?></td>
     <?php $result12ad1=3*$row4['national']; ?>
     <td style="width: 70"><?php echo $result12ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['national']; ?></td>
       <?php $result12ad1c=3*$rowc['national']; ?>
     <td style="width: 70"><?php echo $result12ad1c; ?></td>
</tr>

<tr> 
<th style="width: 440">Total Credit Points(Max 6 Credit Points)  </th>  
<td style="width: 55"> User </td>
<?php $totalcount12= $row4['national'];?>
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
<td style="width: 70"><?php echo $result33; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount12c= $rowc['national'];?>
 <?php
  if($totalcount12c==1)
{
    $result33c=3;
}
else if($totalcount12c>1){
    $result33c=6;
}
else
{
   $result33c=0; 
}
?>
<td style="width: 70"><?php echo $result33c; ?></td> 
</tr>

<tr> <th style="width: 440" align="left">13. Length of service over and above relevant <br> min. teaching experience required for a given cadre number of <br> year(since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 
<tr> <td style="width: 440" align="left"> Teaching Experience(In Year) <br> (2 credit points per semester) </td>
     <td style="width: 55"><?php echo $row4['teachexp']; ?></td>
     <?php $result13ad1=2*$row4['teachexp']; ?>
     <td style="width: 70"><?php echo $result13ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['teachexp']; ?></td>
       <?php $result13ad1c=2*$rowc['teachexp']; ?>
     <td style="width: 70"><?php echo $result13ad1c; ?></td>
</tr>

<tr> 
<th style="width: 440">Total Credit Points(Max 10 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount13= $row4['teachexp'];?>
 <?php
if($totalcount13>5)
{
    $result34=10;
}
else{
    $result34=2*$totalcount13;
}
    ?>
<td style="width: 70"><?php echo $result34; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount13c= $rowc['teachexp'];?>
 <?php
if($totalcount13c>5)
{
    $result34c=10;
}
else{
    $result34c=2*$totalcount13c;
}
    ?>
<td style="width: 70"><?php echo $result34c; ?></td> 
</tr>

<tr> <th style="width: 440" align="left">14. Establishment of new lab(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 
<tr> <td style="width: 440" align="left"> No. of new lab establishment (4 credit points)  </td>
     <td style="width: 55"><?php echo $row4['eslab']; ?></td>
     <?php $result14ad1=4*$row4['eslab']; ?>
     <td style="width: 70"><?php echo $result14ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['eslab']; ?></td>
       <?php $result14ad1c=4*$rowc['eslab']; ?>
     <td style="width: 70"><?php echo $result14ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 4 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount14= $row4['eslab'];?>
<?php
if($totalcount14>=1)
{
    $result35=4;
}
else{
    $result35=0;
}
?>
<td style="width: 70"><?php echo $result35; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount14c= $rowc['eslab'];?>
<?php
if($totalcount14c>=1)
{
    $result35c=4;
}
else{
    $result35c=0;
}
?>
<td style="width: 70"><?php echo $result35c; ?></td> 
</tr>
<tr> <th style="width: 440" align="left">15. Theory Teaching of over and above 6 <br> credit hrs. course(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 
<tr> <td style="width: 440" align="left"> Teaching the course(with credit over and above 6) <br> (1 credit point)   </td>
     <td style="width: 55"><?php echo $row4['teach']; ?></td>
     <?php $result15ad1=1*$row4['teach']; ?>
     <td style="width: 70"><?php echo $result15ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['teach']; ?></td>
       <?php $result15ad1c=1*$rowc['teach']; ?>
     <td style="width: 70"><?php echo $result15ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 6 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount15= $row4['teach'];?>
<?php
if($totalcount15>6)
{
    $result36=6;
}
else {
    $result36=$totalcount15;
}
?>
<td style="width: 70"><?php echo $result36; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount15c= $rowc['teach'];?>
<?php
if($totalcount15c>6)
{
    $result36c=6;
}
else {
    $result36c=$totalcount15c;
}
?>
<td style="width: 70"><?php echo $result36c; ?></td> 
</tr>
<tr> <th style="width: 440" align="left">16. PG Dissertation guided(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr> 
<tr> <td style="width: 440" align="left"> Number of PG Dissertation(s) guided <br> (0.5 credit point per project)  </td>
     <td style="width: 55"><?php echo $row4['pg']; ?></td>
     <?php $result16ad1=0.5*$row4['pg']; ?>
     <td style="width: 70"><?php echo $result16ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['pg']; ?></td>
       <?php $result16ad1c=0.5*$rowc['pg']; ?>
     <td style="width: 70"><?php echo $result16ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 10 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount16= 0.5*$row4['pg'];?>
<?php
if($totalcount16>10)
{
    $result37=10;
}
else {
    $result37=$totalcount16;
}
?>
<td style="width: 70"><?php echo $result37; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount16c= 0.5*$rowc['pg'];?>
<?php
if($totalcount16c>10)
{
    $result37c=10;
}
else {
    $result37c=$totalcount16c;
}
?>
<td style="width: 70"><?php echo $result37c; ?></td> 
</tr> 

<tr> <th style="width: 440" align="left">17. UG Project guided(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">Number of UG Dissertation(s) guided <br> (0.25 credit point per project) </td>
     <td style="width: 55"><?php echo $row4['ug']; ?></td>
     <?php $result17ad1=0.25*$row4['ug']; ?>
     <td style="width: 70"><?php echo $result17ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['ug']; ?></td>
       <?php $result17ad1c=0.25*$rowc['ug']; ?>
     <td style="width: 70"><?php echo $result17ad1c; ?></td>
</tr> 
<tr> 
<th style="width: 440">Total Credit Points(Max 4 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount17= 0.25*$row4['ug'];?>
<?php
if($totalcount17>4)
{
    $result38=4;
}
else {
    $result38=$totalcount17;
}
?>
<td style="width: 70"><?php echo $result38; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount17c= 0.25*$rowc['ug'];?>
<?php
if($totalcount17c>4)
{
    $result38c=4;
}
else {
    $result38c=$totalcount17c;
}
?>
<td style="width: 70"><?php echo $result38c; ?></td> 
</tr> 
</table>
<br>
<br>
<br>
<br>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2">
<tr> <th style="width: 440" align="left">18. Text/Reference Book Published on <br> relevant subjects from reputed
            international <br> publishers(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">Number of Text/Reference books published <br> (6 credit points per book)  </td>
     <td style="width: 55"><?php echo $row4['book']; ?></td>
     <?php $result18ad1=6*$row4['book']; ?>
     <td style="width: 70"><?php echo $result18ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['book']; ?></td>
       <?php $result18ad1c=6*$rowc['book']; ?>
     <td style="width: 70"><?php echo $result18ad1c; ?></td>
</tr> 
<tr> 
<th style="width: 440">Total Credit Points(Max 18 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount18= 6*$row4['book'];?>
 <?php
if($totalcount18>18)
{
    $result39=18;
}
else {
    $result39=$totalcount18;
}
?>
<td style="width: 70"><?php echo $result39; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount18c= 6*$rowc['book'];?>
 <?php
if($totalcount18c>18)
{
    $result39c=18;
}
else {
    $result39c=$totalcount18c;
}
?>
<td style="width: 70"><?php echo $result39c; ?></td> 
</tr> 
<tr> 
<th style="width: 440" align="left">19.Text/Reference book published on <br> relevant subjects from reputed national publishers <br> or book chpatres
            in the books published by <br> reputed international publishers(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">Number of Text/Reference books published <br> (2 credit points per unit)</td>
     <td style="width: 55"><?php echo $row4['chapter']; ?></td>
     <?php $result19ad1=2*$row4['chapter']; ?>
     <td style="width: 70"><?php echo $result19ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['chapter']; ?></td>
       <?php $result19ad1c=2*$rowc['chapter']; ?>
     <td style="width: 70"><?php echo $result19ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 6 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount19= 2*$row4['chapter'];?>
<?php
if($totalcount19>6)
{
    $result40=6;
}
else {
    $result40=$totalcount19;
}
?>
<td style="width: 70"><?php echo $result40; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount19c= 2*$rowc['chapter'];?>
<?php
if($totalcount19c>6)
{
    $result40c=6;
}
else {
    $result40c=$totalcount19c;
}
?>
<td style="width: 70"><?php echo $result40c; ?></td> 
</tr> 
<tr> 
<th style="width: 440" align="left">20.Significant outreach Institute Activities(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left">Number of significant outreach Institute activities  <br> (1 credit point per activity)</td>
     <td style="width: 55"><?php echo $row4['outreach']; ?></td>
     <?php $result20ad1=1*$row4['outreach']; ?>
     <td style="width: 70"><?php echo $result20ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['outreach']; ?></td>
       <?php $result20ad1c=1*$rowc['outreach']; ?>
     <td style="width: 70"><?php echo $result20ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 4 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount20= 1*$row4['outreach'];?>
<?php
if($totalcount20>4)
{
$result41=4;
}
else {
$result41=$totalcount20;
}
?>
<td style="width: 70"><?php echo $result41; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount20c= 1*$rowc['outreach'];?>
<?php
if($totalcount20c>4)
{
$result41c=4;
}
else {
$result41c=$totalcount20c;
}
?>
<td style="width: 70"><?php echo $result41c; ?></td> 
</tr> 
<tr> 
<th style="width: 440" align="left">21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion)</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left"> Fellow IEEE, INA, FNAE, FNSc (10 credit points)</td>
     <td style="width: 55"><?php echo $row4['ina']; ?></td>
     <?php $result21ad1=10*$row4['ina']; ?>
     <td style="width: 70"><?php echo $result21ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['ina']; ?></td>
       <?php $result21ad1c=10*$rowc['ina']; ?>
     <td style="width: 70"><?php echo $result21ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 10 Credit Points) </th>  
<td style="width: 55"> User </td>
<?php $totalcount21= $row4['ina'];?>
<?php
if($totalcount21>0)
{
    $result42=10;
}
 else {
   $result42=0; 
}
?>
<td style="width: 70"><?php echo $result42; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount21c= $rowc['ina'];?>
<?php
if($totalcount21c>0)
{
    $result42c=10;
}
 else {
   $result42c=0; 
}
    ?>
<td style="width: 70"><?php echo $result42c; ?></td> 
</tr>
<tr> 
<th style="width: 440" align="left">22.Placement percentage(Only for the placement <br> cell officers)-Since last promotion</th>
<th style="width: 55">Count</th> 
<th style="width: 70">Credit</th>
<th style="width: 55">Count</th>  
<th style="width: 70">Verified Credit</th>
</tr>
<tr> <td style="width: 440" align="left"> 22a. Number of years placement was <br> above 85% (4 credit points per year)</td>
     <td style="width: 55"><?php echo $row4['placement1']; ?></td>
     <?php $result22ad1=4*$row4['placement1']; ?>
     <td style="width: 70"><?php echo $result22ad1; ?></td>
     <td style="width: 55"><?php echo $rowc['placement1']; ?></td>
       <?php $result22ad1c=4*$rowc['placement1']; ?>
     <td style="width: 70"><?php echo $result22ad1c; ?></td>
</tr>
<tr> 
<th style="width: 440">Total Credit Points(Max 20 Credit Points)</th>  
<td style="width: 55"> User </td>
<?php $totalcount22= 4*$row4['placement1'];?>
 <?php
if($totalcount22>20)
 {
     $result43=20;
 }
else {
      $result43=$totalcount22;
 }
?>
<td style="width: 70"><?php echo $result43; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount22c= 4*$rowc['placement1'];?>
 <?php
if($totalcount22c>20)
 {
     $result43c=20;
 }
else {
      $result43c=$totalcount22c;
 }
?>
<td style="width: 70"><?php echo $result43c; ?></td> 
</tr>
<tr> <td style="width: 440" align="left"> 22b.Number of years placement <br> was from 75 to 84% (2 credit points per year)</td>
     <td style="width: 55"><?php echo $row4['placement2']; ?></td>
     <?php $result22ad2=2*$row4['placement2']; ?>
     <td style="width: 70"><?php echo $result22ad2; ?></td>
     <td style="width: 55"><?php echo $rowc['placement2']; ?></td>
       <?php $result22ad2c=2*$rowc['placement2']; ?>
     <td style="width: 70"><?php echo $result22ad2c; ?></td>
</tr>  
<tr> 
<th style="width: 440">Total Credit Points(Max 10 Credit Points)</th>  
<td style="width: 55"> User </td>
<?php $totalcount22b= 2*$row4['placement2'];?>
<?php
if($totalcount22b>10)
 {
     $result44=10;
 }
 else {
      $result44=$totalcount22b;
 }
?>
<td style="width: 70"><?php echo $result44; ?></td>  
<td style="width: 55"> Verified</td>
<?php $totalcount22bc= 2*$rowc['placement2'];?>
<?php
if($totalcount22bc>10)
 {
     $result44c=10;
 }
 else {
      $result44c=$totalcount22bc;
 }
?>
<td style="width: 70"><?php echo $result44c; ?></td> 
</tr>
</table>
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2">
<tr>
<th style="width: 440" align="left">Eligible/Not Eligible</th>
<td style="width: 220"><?php echo $rowre['eligible']; ?></td>
</tr>
<tr>
<th style="width: 150" align="left">Remark</th>
<td style="width: 600"><?php echo $rowre['remark']; ?></td>
</tr>
</table>

</page>
