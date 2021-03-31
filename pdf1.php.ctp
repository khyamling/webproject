<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');
session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
//$vapn=$_SESSION['vappn'];
$user_home = new USER();

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
  
    $vapn="AP1AMH97";



$sql =  "SELECT * FROM eq1page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();

 $adv=$row['Page5'];


$sql =  "SELECT * FROM eq1 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();
/*
$sql =  "SELECT * FROM postapplied WHERE appn='$vapn'";
$result3 =  mysqli_query($link, $sql);
 * 
 */
$post= substr($vapn, 2, 1);
$branch = substr($vapn, 3, 3);



//echo $branch.$post;
if($post="1")
{
    $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
    $agp="6000";
}
else if($post="2")
{
$post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
 $agp="7000";
}
else if($post="3")
{
$post="Assistant Professor PB-3 with Grade pay of Rs.8000";
 $agp="8000";
}
else if($post="4")
{
 $post="Associate Professor PB-4 with Grade pay of Rs.9500";
  $agp="9500";
}
else if($post="5")
{     $post="Professor PB-4 with Grade pay of Rs.10500";
 $agp="10500";
}
else if($post="6")
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
 


if($result1!=null && $result2!=null)
{

      

//        echo "Records added successfully. ";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection

    //mysqli_close($link);

   
//Connect to your database
//include("conectmysql.php");

//Create new pdf file
$pdf=new FPDF();

//Disable automatic page break
$pdf->SetAutoPageBreak(true);

//Add first page
$pdf->AddPage();
$pdf->Rect(9, 25, 195, 260);
//set initial y axis position per page
$y_axis_initial = 30;

//print column titles
$pdf->SetFillColor(999,999,999);
$pdf->SetFont('Arial','B',8);
$pdf->SetY($y_axis_initial);
$pdf->SetX(10);
$pdf->Cell(30,4,'Advertisement No',1,0,'L',1);
$pdf->Cell(50,4,$adv,1,0,'L',1);
$pdf->SetX(95);
$pdf->Cell(30,4,'Application No.',1,0,'L',1);
$pdf->Cell(18,4,$vapn,1,0,'L',1);
$y_axis = $y_axis_initial + 6;
$pdf->SetY($y_axis);
	//$pdf->SetX(25);
	$pdf->Cell(30,4,'Name of the Post',1,0,'L',1);
	$pdf->Cell(103,4,$post,1,0,'L',1);
        $y_axis=$y_axis+6;
        $pdf->SetY($y_axis);
        
	$pdf->Cell(12,4,'AGP',1,0,'L',1);
    	$pdf->Cell(12,4,$agp,1,0,'L',1);
        $pdf->SetX(40);
	//$pdf->Cell(30,4,'123',1,0,'R',1);
	$pdf->Cell(30,4,'Department',1,0,'L',1);
    	$pdf->Cell(73,4,$branch,1,0,'L',1);
	//$pdf->Cell(30,4,'123',1,0,'R',1);
$y_axis=$y_axis+6;
        $pdf->SetY($y_axis);
        $pdf->Cell(25,4,' 1. Full Name',1,0,'L',1);
    	$pdf->Cell(108,4,$row['Page5'],1,0,'L',1);
        $y_axis=$y_axis+6;
        $pdf->SetY($y_axis);
    	$pdf->Cell(25,4,' (a) Father Name ',1,0,'L',1);
    	$pdf->Cell(108,4,$row['Page6'],1,0,'L',1);
               $y_axis=$y_axis+6;
               $pdf->SetY($y_axis);
    	$pdf->Cell(25,4,' Spouse Name ',1,0,'L',1);
    	$pdf->Cell(108,4,$row['Page7'],1,0,'L',1);
        
               $y_axis=$y_axis+6;
               $pdf->SetY($y_axis);
    	$pdf->Cell(18,4,' (b) Gender ',1,0,'L',1);
    	$pdf->Cell(5,4,$row['Page8'],1,0,'L',1);
        
          $pdf->SetX(36);
    	$pdf->Cell(25,4,' (c) Marital Status ',1,0,'L',1);
    	$pdf->Cell(15,4,$row['Page11'],1,0,'L',1);
  
          $pdf->SetX(79);
    	$pdf->Cell(102,4,' (e) Attested copy certificate enclosed(Yes/No) (only in case of SC/ST/OBC)',1,0,'L',1);
    	$pdf->Cell(15,4,$row['Page17'],1,0,'L',1);
            
          $y_axis=$y_axis+6;
               $pdf->SetY($y_axis);
        
    	$pdf->Cell(23,4,' (d) Category',1,0,'L',1);
    	$pdf->Cell(15,4,$row['Page12'],1,0,'L',1);
                  $pdf->SetX(50);
$pdf->Cell(64,4,' (f) Percentage of Disability of PWD candidate ',1,0,'L',1);
$pdf->Cell(15,4,$row['Page18'],1,0,'L',1);
      $pdf->SetX(132);
$pdf->Cell(21,4,' VH/OH/HH ',1,0,'L',1);
$pdf->Cell(15,4,$row['Page19'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(23,4,' 2. Address :',2,0,'L',1);
$pdf->Cell(15,4,'(a) Permanent: ',2,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 1 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page22'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 2 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page23'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 3 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page24'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' City :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page25'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Pin code:',1,0,'L',1);
$pdf->Cell(50,4,$row['Page26'],1,0,'L',1);
      $pdf->SetX(89);
    $pdf->Cell(25,4,' State',1,0,'L',1);
$pdf->Cell(89,4,$row['Page27'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(23,4,' 2. Address :',2,0,'L',1);
$pdf->Cell(15,4,'(b) Address for Correspondence:  ',2,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 1 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page28'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 2 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page29'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Address Line 3 :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page30'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' City :',1,0,'L',1);
$pdf->Cell(168,4,$row['Page31'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Pin code:',1,0,'L',1);
$pdf->Cell(30,4,$row['Page32'],1,0,'L',1);
      $pdf->SetX(68);
    $pdf->Cell(25,4,' State',1,0,'L',1);
$pdf->Cell(50,4,$row['Page33'],1,0,'L',1);
  $pdf->SetX(145);
$pdf->Cell(25,4,' Mobile :',1,0,'L',1);
$pdf->Cell(33,4,$row['Page34'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4,' Telephone(with STD code)office:',1,0,'L',1);
$pdf->Cell(40,4,$row['Page35'],1,0,'L',1);
 $pdf->SetX(102);
 
$pdf->Cell(55,4,' Telephone(with STD code) Res. No.:',1,0,'L',1);
$pdf->Cell(46,4,$row['Page36'],1,1,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Email :',1,0,'L',1);
$pdf->Cell(60,4,$row['Page37'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(30,4,'3. a) Date of Birth:',1,0,'L',1);
$pdf->Cell(30,4,$row['Page38'],1,0,'L',1);
 $pdf->SetX(74);
 
$pdf->Cell(30,4,'3. (b) Nationality :',1,0,'L',1);
$pdf->Cell(30,4,$row['Page41'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(40,4,'4. Present Employment:',0,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Designation :',1,0,'L',1);
$pdf->Cell(60,4,$row['Page42'],1,0,'L',1);
$pdf->SetX(98);
 
$pdf->Cell(54,4,'Date of Joining to the present post  :',1,0,'L',1);
$pdf->Cell(30,4,$row['Page44'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(30,4,' Organization',1,0,'L',1);
$pdf->Cell(142,4,$row['Page43'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(25,4,' Scale of pay Rs.',1,0,'L',1);
$pdf->Cell(20,4,$row['Page45'],1,0,'L',1);
$pdf->SetX(57);
 $pdf->Cell(33,4,'AGP/GP (If applicable)',1,0,'L',1);
    	$pdf->Cell(15,4,$row['Page46'],1,0,'L',1);
$pdf->SetX(107);
 $pdf->Cell(33,4,'Current Basic pay Rs.',1,0,'L',1);
    	$pdf->Cell(25,4,$row['Page47'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,' Total Emoluments (per month) Rs.',1,0,'L',1);
$pdf->Cell(40,4,$row['Page48'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,' 5. Areas of specializations:',1,0,'L',1);
$pdf->Cell(140,4,$row['Page49'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,' 6. Academic Career Record starting with SSLC:  (Upload photocopies):',2,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4,' 6. Academic Career Record starting with SSLC:  (Upload photocopies):',2,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4,' Certificate/Degree(UG/PG)',1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,'Year',1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,'School/College',1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,'Board/University',1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,'class/Division',1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,'Percentage/CGPA',1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,'Remarks/Status',1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e11'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e12'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e13'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e14'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e15'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e16'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e17'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e21'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e22'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e23'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e24'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e25'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e26'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e27'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e31'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e32'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e33'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e34'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e35'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e36'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e37'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e41'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e42'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e43'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e44'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e45'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e46'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e47'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e51'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e52'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e53'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e54'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e55'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e56'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e57'],1,0,'L',1);
$pdf->AddPage();
$pdf->Rect(9, 13, 195, 260);
$y_axis_initial = 0;
$pdf->SetFillColor(999,999,999);
$pdf->SetFont('Arial','B',8);
$pdf->SetY($y_axis_initial);
$pdf->SetX(10);
$y_axis = $y_axis_initial + 6;
$pdf->SetY($y_axis);
$y_axis=$y_axis+6;
 $pdf->SetY($y_axis);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e61'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e62'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e63'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e64'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e65'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e66'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e67'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e71'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e72'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e73'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e74'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e75'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e76'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e77'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e81'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e82'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e83'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e84'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e85'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e86'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e87'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e91'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e92'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e93'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e94'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e95'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e96'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e97'],1,0,'L',1);
$y_axis=$y_axis+6;
$pdf->SetY($y_axis);
$pdf->Cell(50,4, $row['e101'],1,0,'L',1);
$pdf->SetX(62);
$pdf->Cell(25,4,$row['e102'],1,0,'L',1);
$pdf->SetX(90);
$pdf->Cell(60,4,$row['e103'],1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(45,4,$row['e104'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,$row['e105'],1,0,'L',1);
$pdf->SetX(63);
$pdf->Cell(60,4,$row['e106'],1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(40,4,$row['e107'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(50,4,'7. Academic-Doctoral Degree[Ph.D] details(Attach photocopies):',2,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(70,4,'Thesis Title',1,0,'L',1);
$pdf->SetX(84);
$pdf->Cell(20,4,'From Date',1,0,'L',1);
$pdf->SetX(107);
$pdf->Cell(20,4,'To Date',1,0,'L',1);
$pdf->SetX(130);
$pdf->Cell(70,4,'Institute/University',1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(70,4,'Guide/ Mentor',1,0,'L',1);
$pdf->SetX(84);
$pdf->Cell(40,4,'Mode(full/Part Time',1,0,'L',1);
$pdf->SetX(128);
$pdf->Cell(40,4,'Final Viva Voce Date',1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(20,4,'Award Date',1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(70,4,$row1['ph1'],1,0,'L',1);
$pdf->SetX(84);
$pdf->Cell(20,4,$row1['ph2'],1,0,'L',1);
$pdf->SetX(107);
$pdf->Cell(20,4,$row1['ph3'],1,0,'L',1);
$pdf->SetX(130);
$pdf->Cell(70,4,$row1['ph4'],1,0,'L',1);
$y_axis=$y_axis+6;$pdf->SetY($y_axis);
$pdf->Cell(70,4,$row1['ph5'],1,0,'L',1);
$pdf->SetX(84);
$pdf->Cell(40,4,$row1['ph6'],1,0,'L',1);
$pdf->SetX(128);
$pdf->Cell(40,4,$row1['ph7'],1,0,'L',1);
$pdf->SetX(170);
$pdf->Cell(20,4,$row1['ph8'],1,0,'L',1);


//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;
	//If the current row is the last one, create new page and print column title


	$code = "1";
	$price = "12.4";
	$name = "bheem";

	//$pdf->SetY($y_axis);
	//$pdf->SetX(45);
	//$pdf->Cell(30,6,$code,1,0,'L',1);
	//$pdf->Cell(100,6,$name,1,0,'L',1);
	//$pdf->Cell(30,6,$price,1,0,'R',1);

        $pdf->AddPage();
$pdf->SetAuthor("AUTHOR");
//==========================================================
//SET COLOUMS
//==========================================================
$pdf->Rect(5, 70, 200, 190);
$pdf->Rect(5, 70, 10, 190);
$pdf->Rect(165, 70, 10, 190); //qty
$pdf->Rect(15, 70, 20, 190); // products
$pdf->Rect(160, 265, 40, 20);
$number = 75;
//Send file
$pdf->Output();

?>
