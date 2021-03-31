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
    
    <?php
if(!isset($_SESSION)){
    session_start();
}
require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
$pdept=$_SESSION['ppst'];
$user_home = new USER();
//$addv=$_SESSION['addv'];

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

    $dept1=$pdept;
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
   <table  style="FONT-SIZE: 8pt;width:100%;">

    <tr>
        <td colspan="4" align="center">
    <b> List of Application</b>        
    <hr  style="border:1;height: 2px;width:180">
        </td>
       </tr>
        <tr>
        <td colspan="4" align="center">
    <b> Department : </b><?php echo $dept1 ?>        
    <hr  style="border:1;height: 2px;width:180">
        </td>
       </tr>
    <tr>
        <th  style="width:30"> SL.No.</th> 
        <th  style="width:80"> Application No.</th> 
        <th style="width:320">Post Applied </th>
        <th > Email-id  </th> 
        </tr>
    

        <?php
        $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
$dept=$pdept;
//echo $dept;

$sql="SELECT * FROM postapplied where dept='$dept'  ";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 
 $pp=1;
 $cc=1;
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
            <td><?php echo $cc; ?></td>
        <td><?php echo $row['appid']; ?> </td>
       
        <td><?php echo $pp; ?></td>
        <td><?php echo $row['email']; ?></td>
        </tr>
        
    <?php
$cc=$cc+1;}
?>
        </table>


        
</page>
