<page backtop="26mm"  backbottom="5mm" backleft="0mm" backright="">

  
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
    <b> List of Application</b>        
    <hr  style="border:1;height: 2px;width:180">
        </td>
       </tr>
    <tr>
        <th  style="width:30"> SL.No</th> 
        <th style="width:220">Full Name </th>
        <th  style="width:80"> Application No.</th> 
        <th style="width:180">Department</th> 
        <th style="width:110"> Email-id  </th> 
    
</tr>
    <?php 
if(!isset($_SESSION)){
    session_start();
}
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
//$vapn=$_SESSION['appn'];
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
      
    

$sql =  "SELECT * FROM eq5page";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 
 $pp=1;
 $cc=1;


//echo $sql;
  while($row=$result_set->fetch_array())
 { 
   
      $vapn=$row['appn'];
$post= substr($vapn, 2, 1);
$branch = substr($vapn, 3, 3); 
 if($post ==1)
      $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
          else if($post ==2)
        $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
         
       
    if($branch =="AMH") $branch="Applied Mechanics and Hydraulics";
    else if($branch =="CHE") $branch=  "Chemical Engineering"; 
    else if($branch =="CHY") $branch=  "Chemistry"; 
    else if($branch =="CVE") $branch=  "Civil Engineering"; 
    else if($branch =="CSE") $branch=  "Computer Science & Engineering"; 
    
    else if($branch =="EEE") $branch=  " Electrical and Electronics Engineering "; 
    else if($branch =="ECE") $branch=  " Electronics and Communication Engineering"; 
    else if($branch =="ITE") $branch=  " Information Technology"; 
    else if($branch =="MCS") $branch=  " Mathematical And Computational Sciences"; 
    else if($branch =="MLE") $branch=  " Mechanical Engineering"; 
    else if($branch =="MME") $branch=  " Metallurgical and Materials Engineering"; 
    else if($branch =="MNE") $branch=  " Mining Engineering"; 
    else if($branch =="PHY") $branch=  "  Physics"; 
    else if($branch =="SOM") $branch=  "  School of  Management"; 
   
if($row['email']=="")
    {    
?>


     <tr>
          
        <td style="width:30"><?php echo $cc ?> </td>
        <td style="width:220"><?php echo $row['Page5']; ?></td>
        <td style="width:80" > <?php echo $row['appn'];?> </td>
        <td style="width:180"><?php echo $branch; ?></td>
        <td style="width:110"><?php echo $row['email']; ?></td>

        </tr>
        <?php
 
        
 $cc=$cc+1; 

        
 } 
 }
 ?>
</table>
</page>
