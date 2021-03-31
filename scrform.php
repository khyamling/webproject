<page backtop="26mm" backbottom="4mm" backleft="0mm" backright="">
  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center; width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangaluru-575025, Karnataka, India
                    <br> <p style="FONT-SIZE: 8pt;"> Faculty Recruitment - Application Form(scrutiny)</p></th>
                <td style="text-align: right; FONT-SIZE: 8pt;width: 20%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
        <hr  style="border:1;height: 2px;"width="60%">
    </page_header>
    <page_footer>
          <hr  style="border:1;height: 2px;"width="60%">    
        <table style="width: 100%;FONT-SIZE: 8pt;">
            <tr>
                <td style="text-align: left;    width: 50%">Application Form(scrutiny)</td>
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

//$vapn=$_POST["nappn"]; 

$user_home = new USER();
$vapn=$_SESSION['scrappn'];
//$addv=$_SESSION['addv'];

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


$sql =  "SELECT * FROM crediteq1 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row5=$result2->fetch_array();

$sql =  "SELECT * FROM vcrediteq1 WHERE appn='$vapn'";
$result6 =  mysqli_query($link, $sql);
$row6=$result6->fetch_array();

$sql =  "SELECT * FROM remarkeli WHERE appn='$vapn'";
$result7 =  mysqli_query($link, $sql);
$rowre=$result7->fetch_array();
    

$sql =  "SELECT * FROM eq1page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
//$UID=$row['Page37'];
$sql =  "SELECT * FROM eq1 WHERE appn='$vapn'";
$result2 =  mysqli_query($link, $sql);
$row1=$result2->fetch_array();

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
    $agp="    ";
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
<table style="FONT-SIZE: 8pt;" border="0">
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
<table style="FONT-SIZE: 8pt;" cellspacing="3" >

<tr>
 <td >
  <b> Gender :</b>
 </td>
 <td>
    <?php echo $row['Page8']; ?>
 </td>
</tr>
<tr>
<td>
    <b>Category :</b>
             <?php echo $row['Page12']?>
</td>   
</tr>
</table>
<table  style="FONT-SIZE: 8pt;" cellspacing="3">
 <tr>
 <td><b>Attested copy certificate enclosed(Yes/No) (only in case of SC/St/OBC) : </b>   
<?php echo $row['Page17']; ?>
 </td>
</tr>
<tr>
<td>
<b>Percentage of Disability of PWD candidate :</b>
 <?php echo $row['Page18']; ?>
 </td>
 <td><?php echo $row['Page19']; ?></td>
 </tr>
</table>   
<table style="FONT-SIZE: 8pt;" cellspacing="1"> 
                <tr>
                <td> <b>2. (a) Date of Birth:</b></td><td style="width:250px"> <?php echo $row['Page38'] ?> </td>   <td><b>(b) Nationality : </b> </td><td style="width:250px"><?php echo $row['Page41']; ?></td> 
            </tr>
        </table>
 <hr>
<table style="FONT-SIZE: 8pt;"  border="0" cellspacing="2"> 
<tr> 
<td style="width: 300px"> 
<b>3. Academic Details :</b> </td>   <td>  </td> </tr>
</table>             
<table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
    <tr><td colspan="9">
               <b>PhD in relevant area and 60%/6.5 CGPA from Bachelor's degree <br> onwords essential for new entrant </b> </td> 
    </tr>   
<tr>
        <th style="width:100px">Certificate/Degree<br>-Specialization<br></th>
        <th style="width:30px">Year</th>
        <th style="width:140px">School/College</th>
        <th style="width:140px">Board/University </th>
        <th style="width:40px">Class/<br>Division</th>
        <th style="width:40px">Marks/ CGPA Obtained</th>
        <th style="width:40px">Max  <br>Marks/ CGPA</th>
        <th style="width:50px">Percentage<br>/CGPA</th>
        <th style="width:60px"> Semester- wise <br>  Marks (if relevant, <br>  separated by semi- colon) </th>
    </tr>
    <?php 
    if($row['cer1']!="")
    {
        ?>
    <tr>
        <td style="width:100px"><?php echo $row['cer1'];?>  </td>
        <td style="width:30px"><?php echo $row['year1'];?>  </td>
        <td style="width:140px"><?php echo $row['school1'];?> </td>
        <td style="width:140px"><?php echo $row['board1'];?>  </td>
        <td style="width:40px"><?php echo $row['class1'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks1'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks1'];?> </td>
        <td style="width:50px"><?php echo $row['percentage1'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status1'],12,'<br />', true); ?></td>
</tr>
    <?php
    
    }


     if($row['cer2']!="")
    {
        ?>
    <tr>
          <td style="width:100px"><?php echo $row['cer2'];?>  </td>
        <td style="width:30px"><?php echo $row['year2'];?>  </td>
        <td style="width:140px"><?php echo $row['school2'];?> </td>
        <td style="width:140px"><?php echo $row['board2'];?>  </td>
        <td style="width:40px"><?php echo $row['class2'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks2'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks2'];?> </td>
        <td style="width:50px"><?php echo $row['percentage2'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status2'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer3']!="")
    {
        ?>    <tr>
          <td style="width:100px"><?php echo $row['cer3'];?>  </td>
        <td style="width:30px"><?php echo $row['year3'];?>  </td>
        <td style="width:140px"><?php echo $row['school3'];?> </td>
        <td style="width:140px"><?php echo $row['board3'];?>  </td>
        <td style="width:40px"><?php echo $row['class3'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks3'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks3'];?> </td>
        <td style="width:50px"><?php echo $row['percentage3'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status3'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer4']!="")
    {
        ?>
    <tr>
          <td style="width:100px"><?php echo $row['cer4'];?>  </td>
        <td style="width:30px"><?php echo $row['year4'];?>  </td>
        <td style="width:140px"><?php echo $row['school4'];?> </td>
        <td style="width:140px"><?php echo $row['board4'];?>  </td>
        <td style="width:40px"><?php echo $row['class4'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks4'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks4'];?> </td>
        <td style="width:50px"><?php echo $row['percentage4'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status4'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }

     if($row['cer5']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer5'];?>  </td>
        <td style="width:30px"><?php echo $row['year5'];?>  </td>
        <td style="width:140px"><?php echo $row['school5'];?> </td>
        <td style="width:140px"><?php echo $row['board5'];?>  </td>
        <td style="width:40px"><?php echo $row['class5'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks5'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks5'];?> </td>
        <td style="width:50px"><?php echo $row['percentage5'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status5'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer6']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer6'];?>  </td>
        <td style="width:30px"><?php echo $row['year6'];?>  </td>
        <td style="width:150px"><?php echo $row['school6'];?> </td>
        <td style="width:150px"><?php echo $row['board6'];?>  </td>
        <td style="width:40px"><?php echo $row['class6'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks6'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks6'];?> </td>
        <td style="width:60px"><?php echo $row['percentage6'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status6'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer7']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer7'];?>  </td>
        <td style="width:30px"><?php echo $row['year7'];?>  </td>
        <td style="width:140px"><?php echo $row['school7'];?> </td>
        <td style="width:140px"><?php echo $row['board7'];?>  </td>
        <td style="width:40px"><?php echo $row['class7'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks7'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks7'];?> </td>
        <td style="width:50px"><?php echo $row['percentage7'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status7'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer8']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer8'];?>  </td>
        <td style="width:30px"><?php echo $row['year8'];?>  </td>
        <td style="width:140px"><?php echo $row['school8'];?> </td>
        <td style="width:140px"><?php echo $row['board8'];?>  </td>
        <td style="width:40px"><?php echo $row['class8'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks8'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks8'];?> </td>
        <td style="width:50px"><?php echo $row['percentage8'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status8'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer9']!="")
    {
        ?>
       <tr>
          <td style="width:100px"><?php echo $row['cer9'];?>  </td>
        <td style="width:30px"><?php echo $row['year9'];?>  </td>
        <td style="width:140px"><?php echo $row['school9'];?> </td>
        <td style="width:140px"><?php echo $row['board9'];?>  </td>
        <td style="width:40px"><?php echo $row['class9'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks9'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks9'];?> </td>
        <td style="width:50px"><?php echo $row['percentage9'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status9'],12,'<br />', true); ?></td>
    </tr>
     <?php
    
    }

     if($row['cer10']!="")
    {
        ?>
       <tr>
         <td style="width:100px"><?php echo $row['cer10'];?>  </td>
        <td style="width:40px"><?php echo $row['year10'];?>  </td>
        <td style="width:140px"><?php echo $row['school10'];?> </td>
        <td style="width:140px"><?php echo $row['board10'];?>  </td>
        <td style="width:40px"><?php echo $row['class10'];?>   </td>
        <td style="width:40px"><?php echo $row['omarks10'];?>  </td>
        <td style="width:40px"><?php echo $row['tmarks10'];?> </td>
        <td style="width:50px"><?php echo $row['percentage10'];?>  </td>
        <td style="width:60px"><?php echo wordwrap($row['status9'],12,'<br />', true); ?></td>
    </tr>
      <?php
    
    }
?>
        </table> 
<hr>
        <table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2" cellpadding="2"> 
      <tr><td colspan="8">
          <b>Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
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
<hr>
        <table style="FONT-SIZE: 8pt;" border="1" cellspacing="2"  cellpadding="2">
            <tr> <td style="width: 200px"> <b> Areas of specializations: </b></td> <td style="width: 520px"> <?php echo $row['Page49']; ?></td></tr>
        </table> 
<hr>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 200px"> 
<b> Academic Requirements :</b> </td>   
<td style="width: 520px">Satisfied / Not Satisfied </td> </tr>

<tr><td>
	Comments if Academic <br>Requirements Not satisfied</td>
	<td>
		<textarea rows="6" cols="60">
</textarea> 
	</td>
</tr>	

</table>
 
<hr>
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 720px" colspan="2"> 
<b>Professional Experience Details</b> </td>    </tr>   
<tr>  <td colspan="2" style="width: 720px"><b> Total Experience (Number of Years and/or months) </b> </td></tr>  
<tr> <th>Teaching Experience:</th> <td style="width:220px"> <?php   echo $row['teachingexp']; ?> </td> 
</tr>
<tr>
<th>
Research Experience (Post-PhD):</th>      
<td style="width:180px">
        <?php
       
        echo $row['researchexp']; 
      
       ?>
        </td>  </tr> 

        <tr> 
        <th>
        Industrial Experience :   
       </th>  <td style="width:180px">
      <?php
      
        echo $row['industryexp']; 
     
       ?>
       </td>
        </tr>
        </table> 
<table style="FONT-SIZE: 8pt;"  border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 200px"> 
<b> Professional Experience Requirements :</b> </td>   <td style="width: 520px">Satisfied / Not Satisfied </td> </tr>

<tr><td>
	Comments if Academic <br>Requirements Not satisfied</td>
	<td>
		<textarea rows="6" cols="50">
</textarea> 
	</td>
</tr>	

</table>
 
<hr>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 720px" colspan="2" > 
<b> Credit Points Details :</b> </td> </tr> <tr> <th> Applicant credit </th><td style="width:90px"><?php echo $row5['credit1'];?></td> </tr>
<tr><th> Verified Credit</th> <td style="width:90px"> <?php echo $row6['credit1'];; ?></td> </tr>
<tr>
<th style="width: 440" align="left">Eligible/Not Eligible</th>
<td style="width: 220"><?php echo $rowre['eligible']; ?></td>
</tr>
<tr>
<th style="width: 150" align="left">Remark</th>
<td style="width: 600"><?php echo $rowre['remark']; ?></td>
</tr>
<tr><td>
	Any other Comments </td>
	<td>
		<textarea rows="4" cols="60">
</textarea> 
	</td>
</tr>	

</table> 
<hr>
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 300px" colspan="2" > <b> Meets Essential requirements for position <br> applied Points Details : (Yes /No)</b> </td>
<td colspan="2" style="width:380px"> </td> </tr> 

<tr><td colspan="1" >
	Additional Comments if any </td>
	<td colspan="3">
		<textarea rows="4" cols="60">
</textarea> 
	</td>
</tr>	
<tr> <th> Signature of Department Scrutiny <br> Committee Members </th> 
		<td style="width:100px"></td>      <td style="width:100px"></td> 
                <td style="width:100px"></td> 
	

 </tr>

</table>
<hr> 
<table style="FONT-SIZE: 8pt;"   border="1" cellspacing="2"  cellpadding="2"> 
<tr> 
<td style="width: 720px" colspan="5" > <b> Eligible for interview : (Yes /No)</b> </td>
<td colspan="3" style="width:250px"> </td> </tr> 

<tr><td colspan="1" >
	If No specify reason </td>
<td colspan="3">
<textarea rows="4" cols="60"> i. Does not meet Essential requirments 
ii. Does not meet the following short listing criteria
</textarea>
</td> 
</tr> 

	<tr> <th style="width:200px"> Signature of <br> Committee Members </th> 
		<td style="width:130px"></td>      <td style="width:130px"></td> 
                <td style="width:130px"></td> 
	

 </tr> 
</table>
<?php
unset ($_SESSION["scrappn"]);
?>
</page>
