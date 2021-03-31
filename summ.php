<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}
$aid=$_SESSION['userSession'] ;

if(isset($_POST['search1']))
{
?> 
    <form action="view12.php" method="post" name="f1" >
        
<?php
}
?>
        
        
        <?php
if(isset($_POST['search1']))
{
 ob_start();
    $pp="print1.php";
    include(dirname(__FILE__).'print1.php');
    $content = ob_get_clean();
//SetFont('dejavusans', '', 10);
    // convert to PDF
    require_once(dirname(__FILE__).'/html2pdf-4.5.1/vendor/autoload.php');
    try
    {
         $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple00.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
      
?>
<
   
        <?php
}
if(isset($_POST['search2']))
{
    $dept1=$_POST['s2'];
    if($dept1 =="AMH") $dept1="Applied Mechanics and Hydraulics";
    else if($dept1 =="CHE") $dept1=  "Chemical Engineering"; 
    else if($dept1 =="CHY") $dept1=  "Chemistry"; 
    else if($dept1 =="CVE") $dept1=  "Civil Engineering"; 
    else if($dept1 =="CSE") $dept1=  "Computer Science & Engineering"; 
    
    else if($dept1 =="EEE") $dept1=  " Electrical and Electronics Engineering "; 
    else if($dept1 =="ECE") $dept1=  " Electronics and Communication Engineering"; 
    else if($dept1 =="ITE") $dept1=  " Information Technology"; 
    else if($dept1 =="MCS") $dept1=  " Mathematical And Computational Sciences"; 
    else if($dept1 =="MLE") $dept1=  " Mechanical Engineering"; 
    else if($dept1 =="MME") $dept1=  " Metallurgical and Materials Engineering"; 
    else if($dept1 =="MNE") $dept1=  " Mining Engineering"; 
    else if($dept1 =="PHY") $dept1=  "  Physics"; 
    else if($dept1 =="SOM") $dept1=  "  School of  Management"; 
    
    
    ?>
<form method="post" name="f1" >
             <br>
<div style="width:95%;" id="header">
    <font size="5"> <label> <p align="center">List of Application</p> </label> </font>
</div>
<div id="body">
   
    <hr width="40%">
    <p align="center">Department : <b><?php echo $dept1 ?> </b> </p>
<hr width="40%">
    <table  width="1290" border="1">
        
    <tr>
        <th> Application No.</th> 
    <th>Post Applied </th> 
        <th>E-mail</th>
 <th> Generate pdf </th> 
       </tr> 
        <?php
        $link = mysqli_connect("localhost", "root", "", "employment");
$dept=$_POST['s2'];
//echo $dept;

$sql="SELECT * FROM postapplied where dept='$dept'  ";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 $pp=1;
 
 while($row=$result_set->fetch_array())
 {
if($row['post'] ==1)
      $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
          else if($row['post'] ==2)
                            $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          else if($row['post'] ==3)     $pp="Assistant Professor PB-3 with Grade pay of Rs.8000";
          else if($row['post'] ==4)     $pp="Associate Professor PB-4 with Grade pay of Rs.9500";
          else if($row['post'] ==5)     $pp="Professor PB-4 with Grade pay of Rs.10500";
          else if($row['post'] ==6)     $pp="Professor HAG Scale Rs.67000 to 79000";
       
    
   
    
?>
        <tr>
        <td><input type="radio" name="view" value="<?php echo $row['appid'] ?>" /> <?php echo $row['appid']; ?> </td>
       
        <td><?php echo $pp; ?></td>
        <td><?php echo $row['email']; ?></td>
        
        <td>  <input id="btn1" type="submit" formaction="gpdf.php" value="Get pdf file" name="previous"> </td>
        
    <?php
}
?>
        </tr></table>
 <br>
    <table align="center">
        <tr>
            <td colspan="4" align="center">
            <button class="btn-toolbar " type="submit" formaction="adminc.php" name="search1">Back </button>           
        </td>
        </tr>
    </table>
        
        <?php

}

if(isset($_POST['search3']))
{
    $dept1=$_POST['s3'];
$post=$_POST['s31'];
    
 if($dept1 =="AMH") $dept1="Applied Mechanics and Hydraulics";
    else if($dept1 =="CHE") $dept1=  "Chemical Engineering"; 
    else if($dept1 =="CHY") $dept1=  "Chemistry"; 
    else if($dept1 =="CVE") $dept1=  "Civil Engineering"; 
    else if($dept1 =="CSE") $dept1=  "Computer Science & Engineering"; 
    
    else if($dept1 =="EEE") $dept1=  " Electrical and Electronics Engineering "; 
    else if($dept1 =="ECE") $dept1=  " Electronics and Communication Engineering"; 
    else if($dept1 =="ITE") $dept1=  " Information Technology"; 
    else if($dept1 =="MCS") $dept1=  " Mathematical And Computational Sciences"; 
    else if($dept1 =="MLE") $dept1=  " Mechanical Engineering"; 
    else if($dept1 =="MME") $dept1=  " Metallurgical and Materials Engineering"; 
    else if($dept1 =="MNE") $dept1=  " Mining Engineering"; 
    else if($dept1 =="PHY") $dept1=  "  Physics"; 
    else if($dept1 =="SOM") $dept1=  "  School of  Management"; 
    
     if($post==1)
      $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
          else if($post==2)
                            $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          else if($post==3)     $pp="Assistant Professor PB-3 with Grade pay of Rs.8000";
          else if($post==4)     $pp="Associate Professor PB-4 with Grade pay of Rs.9500";
          else if($post==5)     $pp="Professor PB-4 with Grade pay of Rs.10500";
          else if($post==6)     $pp="Professor HAG Scale Rs.67000 to 79000";
    ?>
 
  <form method="post" name="f1" >
             <br>
<div style="width:95%;" id="header">
    <font size="5"> <label> <p align="center">Essential  Qualification of Applicant </p> </label> </font>
</div>
<div id="body">
   
    <hr width="80%">
    <p align="center">Post : <b><?php echo $pp ?> </b> </p>
      <hr width="80%">
    <p align="center">Department : <b><?php echo $dept1 ?> </b> </p>
<hr width="40%">
    <table  width="1290" border="1">
        
    <tr>
    <th> Sl. No.</th> 
    <th> Application No.</th> 
    <th>Essential qualification </th> 
    <th>Relevant Experience</th> 
    <th>Other Essential qualification </th> 
    <th>additional Desirable Requirements  </th> 
    <th>E-mail</th>
      </tr> 
       
        <?php
        $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
$dept=$_POST['s3'];
$post=$_POST['s31'];
//echo $dept;
$tb="eq".$post;
$sql="SELECT * FROM $tb";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 $pp=1;
 
 while($row=$result_set->fetch_array())
 {
    $appn=  substr($row['appn'],3,3);
    if($appn==$dept)
    {
          $ap=$row['appn'];?>
     
        <tr>
        <td><input type="radio" name="view" value="<?php echo $ap ?>" /> <?php echo $ap; ?> </td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['email']; ?></td>
        
        <td>  <input id="btn1" type="submit" formaction="gpdf.php" value="Get pdf file" name="previous"> </td>
  <?php  }
  
     
 }
 ?>
        </tr></table>
 <br>
    <table align="center">
        <tr>
            <td colspan="4" align="center">
            <button class="btn-toolbar " type="submit" formaction="adminc.php" name="search1">Back </button>           
        </td>
        </tr>
    </table>
        <?php
}

?>