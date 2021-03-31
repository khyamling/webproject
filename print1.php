<page backtop="26mm" backbottom="5mm" backleft="0mm" backright="">

  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangalure-575025,Karnataka India
                    <br> <p style="FONT-SIZE: 8pt;"> Recruitment For Filling Up Faculty Positions</p></th>
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
    <table  style="FONT-SIZE: 8pt;width:100%;">

    <tr>
        <td colspan="5" align="center">
    <b> List of Successful submitted Application</b>        
    <hr  style="border:1;height: 2px;width:180px">
        </td>
       </tr>
    <tr>
      <th  style="width:30"> SL.No.</th>
        <th  style="width:80"> Application No.</th> 
     <th style="width:160">Department</th> 
        <th style="width:180">Post Applied </th> 
	 <th style="width:140" > Email-id  </th> 
       <th style="width:50"> status </th> 

        </tr>
    <?php
if(!isset($_SESSION)){
    session_start();
}
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
//$vapn=$_SESSION['gappn'];
$user_home = new USER();
//$addv=$_SESSION['addv'];

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

 $sql="SELECT * FROM postapplied ";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 
 $pp=1;
 $cc=1;
 while($row=$result_set->fetch_array())
 {

//echo $sql;

     if($row['post'] ==1)
      $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
          else if($row['post'] ==2)
                            $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          else if($row['post'] ==3)     $pp="Assistant Professor PB-3 with Grade pay of Rs.8000";
          else if($row['post'] ==4)     $pp="Associate Professor PB-4 with Grade pay of Rs.9500";
          else if($row['post'] ==5)     $pp="Professor PB-4 with Grade pay of Rs.10500";
          else if($row['post'] ==6)     $pp="Professor HAG Scale Rs.67000 to 79000";
       
    if($row['dept'] =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($row['dept'] =="CHE") $dept=  "Chemical Engineering"; 
    else if($row['dept'] =="CHY") $dept=  "Chemistry"; 
    else if($row['dept'] =="CVE") $dept=  "Civil Engineering"; 
    else if($row['dept'] =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($row['dept'] =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($row['dept'] =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($row['dept'] =="ITE") $dept=  " Information Technology"; 
    else if($row['dept'] =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($row['dept'] =="MLE") $dept=  " Mechanical Engineering"; 
    else if($row['dept'] =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($row['dept'] =="MNE") $dept=  " Mining Engineering"; 
    else if($row['dept'] =="PHY") $dept=  "  Physics"; 
    else if($row['dept'] =="SOM") $dept=  "  School of  Management"; 
   
 if($row['status']!="N")
    {    
?>

        <tr>
   <td style="width:30"><?php echo $cc ?> </td> 
        <td style="width:80"><?php echo $row['appid'] ?> </td>
        <td style="width:160"><?php echo $dept; ?></td>
        <td style="width:220"><?php echo $pp; ?></td> 
 	 <td style="width:160"><?php echo $row['email']  ?></td>
           <td style="width:50"><?php echo $row['status']  ?></td>
      
        </tr>
        <?php

 $cc=$cc+1;       
} } 
 
 ?>
      </table>
  
        
                 
     
  
</page>
