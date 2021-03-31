<page backtop="25mm" backbottom="5mm" backleft="0mm" backright="">
  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br> <p style="FONT-SIZE: 8pt;"> Faculty Recruitment(Internal) </p></th>
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
      
$sql =  "SELECT * FROM eq4page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();

$sql =  "SELECT * FROM eq4 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();

$sql =  "SELECT * FROM jadd WHERE email='$UID'";
$result3 =  mysqli_query($link, $sql);
$row3=$result3->fetch_array();

$sql =  "SELECT * FROM cfadd WHERE email='$UID'";
$result4 =  mysqli_query($link, $sql);
$row4=$result4->fetch_array();



$post= substr($vapn, 2, 1);
$branch = substr($vapn, 3, 3);
if($post=="1")
{
    $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000";
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
          <tr>      <td><b>Post Applied:</b> </td>
          <td  style="width: 500px;">    <?php echo $post; ?>                   
          </td>
         </tr>  
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
         <?php echo $row['Page5']; ?>                   
         </td>
</tr>
</table>
<br>
<table style="FONT-SIZE: 8pt;" border="1" cellspacing="2" cellpadding="2">
             <tr> <td  colspan="5">  <b>13.Subjects Taught (Since last promotion)</b> </td> </tr>
<tr><td style="width:230;">Title of the Course taught </td> 
    <td style="width:40">Year</td> 
    <td style="width:40">U.G. / P.G. </td> 
    <td style="width:90">Approximate no. of students</td> 
    <td style="width:280">Institution/University</td> </tr>
 <?php
        if($row4['E2_11']!="")
            {
        ?>
        <tr>
            <td style="width:230;"><?php echo $row4['E2_11']; ?></td>
            <td style="width:40"><?php echo $row4['E2_12']; ?></td>
            <td style="width:40"><?php echo $row4['E2_13']; ?></td>
            <td style="width:40"><?php echo $row4['E2_14']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_15']; ?>"</td>
    </tr>
           <?php
            }
             if($row4['E2_21']!="")
             {
             ?>
        <tr>
            <td style="width:230;"><?php echo $row4['E2_21']; ?></td>
            <td style="width:40"><?php echo $row4['E2_22']; ?></td>
            <td style="width:40"><?php echo $row4['E2_23']; ?></td>
            <td style="width:40"><?php echo $row4['E2_24']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_25']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_31']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row4['E2_31']; ?></td>
            <td style="width:40"><?php echo $row4['E2_32']; ?></td>
            <td style="width:40"><?php echo $row4['E2_33']; ?></td>
            <td style="width:40"><?php echo $row4['E2_34']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_35']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_41']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row4['E2_41']; ?></td>
            <td style="width:40"><?php echo $row4['E2_42']; ?></td>
            <td style="width:40"><?php echo $row4['E2_43']; ?></td>
            <td style="width:40"><?php echo $row4['E2_44']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_45']; ?>"</td>
        </tr> <?php
            }
             if($row4['E2_51']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row4['E2_51']; ?></td>
            <td style="width:40"><?php echo $row4['E2_52']; ?></td>
            <td style="width:40"><?php echo $row4['E2_53']; ?></td>
            <td style="width:40"><?php echo $row4['E2_54']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_55']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_61']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row4['E2_61']; ?></td>
            <td style="width:40"><?php echo $row4['E2_62']; ?></td>
            <td style="width:40"><?php echo $row4['E2_63']; ?></td>
            <td style="width:40"><?php echo $row4['E2_64']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_65']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_71']!="")
             {
             ?>
              <tr>
            <td style="width:230;"><?php echo $row4['E2_71']; ?></td>
            <td style="width:40"><?php echo $row4['E2_72']; ?></td>
            <td style="width:40"><?php echo $row4['E2_73']; ?></td>
            <td style="width:40"><?php echo $row4['E2_74']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_75']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_81']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row4['E2_81']; ?></td>
            <td style="width:40"><?php echo $row4['E2_82']; ?></td>
            <td style="width:40"><?php echo $row4['E2_83']; ?></td>
            <td style="width:40"><?php echo $row4['E2_84']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_85']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_91']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row4['E2_91']; ?></td>
            <td style="width:40"><?php echo $row4['E2_92']; ?></td>
            <td style="width:40"><?php echo $row4['E2_93']; ?></td>
            <td style="width:40"><?php echo $row4['E2_94']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_95']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_101']!="")
             {
             ?>
              <tr>
           <td style="width:230;"><?php echo $row4['E2_101']; ?></td>
            <td style="width:40"><?php echo $row4['E2_102']; ?></td>
            <td style="width:40"><?php echo $row4['E2_103']; ?></td>
            <td style="width:40"><?php echo $row4['E2_104']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_105']; ?>"</td>
        </tr>
         <?php
            }
             if($row4['E2_111']!="")
             {
            ?>
            <tr>
           <td style="width:230;"><?php echo $row4['E2_111']; ?></td>
            <td style="width:40"><?php echo $row4['E2_112']; ?></td>
            <td style="width:40"><?php echo $row4['E2_113']; ?></td>
            <td style="width:40"><?php echo $row4['E2_114']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_115']; ?>"</td>
        </tr>
        <?php
            }
             if($row4['E2_121']!="")
             {
            ?>
             <tr>
           <td style="width:230;"><?php echo $row4['E2_121']; ?></td>
            <td style="width:40"><?php echo $row4['E2_122']; ?></td>
            <td style="width:40"><?php echo $row4['E2_123']; ?></td>
            <td style="width:40"><?php echo $row4['E2_124']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_125']; ?>"</td>
        </tr>
        <?php
            }
             if($row4['E2_131']!="")
             {
            ?>
             <tr>
           <td style="width:230;"><?php echo $row4['E2_131']; ?></td>
            <td style="width:40"><?php echo $row4['E2_132']; ?></td>
            <td style="width:40"><?php echo $row4['E2_133']; ?></td>
            <td style="width:40"><?php echo $row4['E2_134']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_135']; ?>"</td>
        </tr>
     <?php
            }
             if($row4['E2_141']!="")
             {
            ?>
             <tr>
           <td style="width:230;"><?php echo $row4['E2_141']; ?></td>
            <td style="width:40"><?php echo $row4['E2_142']; ?></td>
            <td style="width:40"><?php echo $row4['E2_143']; ?></td>
            <td style="width:40"><?php echo $row4['E2_144']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_145']; ?>"</td>
        </tr>
     <?php
            }
             if($row4['E2_151']!="")
             {
            ?>
             <tr>
           <td style="width:230;"><?php echo $row4['E2_151']; ?></td>
            <td style="width:40"><?php echo $row4['E2_152']; ?></td>
            <td style="width:40"><?php echo $row4['E2_153']; ?></td>
            <td style="width:40"><?php echo $row4['E2_154']; ?>"</td>
            <td style="width:280"><?php echo $row4['E2_155']; ?>"</td>
        </tr>
<?php
}
?>
   </table> 
<br>
<table style="FONT-SIZE: 8pt;" border="1" border="1" cellspacing="1" cellpadding="2"> 
            <tr> <td colspan="5"> <b>15.c.Details of conference papers published</b> </td></tr>
<tr> <td style="width:120px">Author </td> 
    <td style="width:160px" >Title</td>
    <td style="width: 160px">Conference</td> 
    <td style="width:50px">Year</td>
    <td style="width:50px">Place </td></tr>
  <?php
                          if($row3['j1_11']!="")
             {
             ?>         
     <tr>
           <td style="width:120px" ><?php echo $row3['j1_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j1_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j1_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j1_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j1_15']; ?> </td>
</tr>
<?php
             }
            if($row3['j2_11']!="")
            {
                ?>
           

       <tr>
           < <td style="width:120px" ><?php echo $row3['j2_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j2_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j2_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j2_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j2_15']; ?> </td>
</tr>
<?php
             }
            if($row3['j3_11']!="")
            {
                ?>
       
         <tr>
            <td style="width:120px" ><?php echo $row3['j3_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j3_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j3_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j3_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j3_15']; ?> </td>
 </tr>
<?php
             }
            if($row3['j4_11']!="")
            {
                ?>
       <tr>
           <td style="width:120px" ><?php echo $row3['j4_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j4_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j4_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j4_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j4_15']; ?> </td>
         
 </tr>
<?php
             }
     if($row3['j5_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j5_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j5_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j5_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j5_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j5_15']; ?> </td>          
 </tr>
<?php
             }
     if($row3['j6_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j6_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j6_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j6_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j6_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j6_15']; ?> </td>     
 </tr>
<?php
             }
     if($row3['j7_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j7_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j7_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j7_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j7_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j7_15']; ?> </td>         
 </tr>
<?php
             }
     if($row3['j8_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j8_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j8_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j8_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j8_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j8_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j9_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j9_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j9_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j9_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j9_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j9_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j10_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j10_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j10_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j10_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j10_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j10_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j11_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j11_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j11_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j11_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j11_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j11_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j12_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j12_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j12_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j12_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j12_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j12_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j13_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j13_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j13_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j13_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j13_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j13_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j14_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j14_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j14_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j14_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j14_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j14_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j5_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j15_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j15_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j15_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j15_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j15_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j16_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j16_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j16_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j16_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j16_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j16_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j17_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j17_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j17_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j17_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j17_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j17_15']; ?> </td>         
 </tr>
<?php
             }
     if($row3['j18_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j18_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j18_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j18_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j18_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j18_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j19_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j19_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j19_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j19_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j19_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j19_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j20_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j20_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j20_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j20_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j20_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j20_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j21_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j21_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j21_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j21_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j21_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j21_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j22_11']!="")
            {
    ?>
 <tr>
           <td style="width:120px" ><?php echo $row3['j22_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j22_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j22_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j22_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j22_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j23_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j23_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j23_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j23_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j23_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j23_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j24_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j24_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j24_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j24_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j24_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j24_15']; ?> </td>
 </tr>
<?php
             }
     if($row3['j25_11']!="")
            {
    ?>
<tr>
           <td style="width:120px" ><?php echo $row3['j25_11']; ?></td>
            <td style="width:160px" ><?php echo $row3['j25_12']; ?></td>
            <td  style="width:160px"><?php echo $row3['j25_13']; ?> </td>
            <td style="width:50px"><?php echo $row3['j25_14']; ?> </td>
            <td style="width:50px"><?php echo $row3['j25_15']; ?> </td>
 </tr>

<?php
             }
    ?>
</table>
<?php
 mysqli_close($link);
?>
</page>
