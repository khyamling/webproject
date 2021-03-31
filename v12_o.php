<page backtop="26mm" backbottom="5mm" backleft="0mm" backright="">
  
  <page_header>
        <table style="width: 100%; ">
            <tr>
                <td style="text-align: left;    width: 20%;FONT-SIZE: 10pt;"><img style="width:80px;height:80px;" src="img/nitk1.png" alt="Photo Not Found"></td>
                <th style="text-align: center;width: 54%">National Institute of Technology Karnataka, Surathkal <br> Mangalure-575025,Karnataka India
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
      
    



$sql =  "SELECT * FROM eq2page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
$sql =  "SELECT * FROM eq2 WHERE appn='$vapn'";
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
        
        
        <table style="FONT-SIZE: 8pt; "  border="1" cellpadding="2" cellspacing="2"> 
    <tr><td colspan="9">
                  <b>6.Academic Career Record starting with SSLC. Enter individual semester marks where relevant (Diploma/UG/PG/Others). (Upload certificates/marks cards.)</b>
</td>
    </tr>   
<tr>
        <th style="width:110px">Certificate/Degree<br>-Specialization<br></th>
        <th style="width:30px">Year</th>
        <th style="width:140px">School/College</th>
        <th style="width:140px">Board/University </th>
        <th style="width:40px">Class/<br>Division</th>
        <th style="width:40px">Marks Obtained</th>
        <th style="width:40px">Total Marks</th>
        <th style="width:50px">Percentage<br>/CGPA</th>
        <th style="width:50px"> Semester- wise <br>  Marks (if relevant, semi-colon separated list ) </th>
    </tr>
    <?php 
    if($row['cer1']!="")
    {
        ?>
    <tr>
        <td style="width:110px"><?php echo $row['cer1'];?>  </td>
        <td style="width:30px"><?php echo $row['year1'];?>  </td>
        <td style="width:140px"><?php echo $row['school1'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer2'];?>  </td>
        <td style="width:30px"><?php echo $row['year2'];?>  </td>
        <td style="width:140px"><?php echo $row['school2'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer3'];?>  </td>
        <td style="width:30px"><?php echo $row['year3'];?>  </td>
        <td style="width:140px"><?php echo $row['school3'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer4'];?>  </td>
        <td style="width:30px"><?php echo $row['year4'];?>  </td>
        <td style="width:140px"><?php echo $row['school4'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer5'];?>  </td>
        <td style="width:30px"><?php echo $row['year5'];?>  </td>
        <td style="width:140px"><?php echo $row['school5'];?> </td>
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
          <td style="width:120px"><?php echo $row['cer6'];?>  </td>
        <td style="width:30px"><?php echo $row['year6'];?>  </td>
        <td style="width:150px"><?php echo $row['school6'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer7'];?>  </td>
        <td style="width:30px"><?php echo $row['year7'];?>  </td>
        <td style="width:140px"><?php echo $row['school7'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer8'];?>  </td>
        <td style="width:30px"><?php echo $row['year8'];?>  </td>
        <td style="width:140px"><?php echo $row['school8'];?> </td>
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
          <td style="width:110px"><?php echo $row['cer9'];?>  </td>
        <td style="width:30px"><?php echo $row['year9'];?>  </td>
        <td style="width:140px"><?php echo $row['school9'];?> </td>
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
         <td style="width:110px"><?php echo $row['cer10'];?>  </td>
        <td style="width:40px"><?php echo $row['year10'];?>  </td>
        <td style="width:140px"><?php echo $row['school10'];?> </td>
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
        </tr>   </table>

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
    <tr> <td colspan="8"> <b>14. Research guidance</b> </td></tr>
   
        <tr>
            <th colspan="2" > Completed (Guided Sole): </th>  
            <th colspan="2" >   Ongoing (Guiding Sole): </th> 
            <th colspan="2" > Completed (Guided Joint): </th>
            <th colspan="2" >   Ongoing (Guiding Joint): </th> 
        </tr>
	<tr> 
          <td ><b>Ph.D.:  </b></td>
          <td style="width:150"><?php echo $row['phdcomplete'];?></td>
          <td ><b>Ph.D.:</b></td>       
        <td style="width:150"><?php echo $row['phdongoing']; ?></td>        
        <td ><b>Ph.D.:</b></td>      
        <td style="width:150"><?php echo $row['cj1']; ?></td>
        <td ><b>Ph.D.:</b></td>
        <td style="width:150"><?php echo $row['oj1']; ?></td>
        </tr>
   
       <tr> 
       <td ><b>P.G.:</b></td>
       <td style="width:150"><?php echo $row['pgcomplete']; ?></td>       
       <td ><b>P.G.:</b></td>      
        <td style="width:150"><?php echo $row['pgongoing']; ?></td>
        <td ><b>P.G.:</b></td>       
        <td style="width:150"><?php echo $row['cj2']; ?></td>
         <td><b>P.G.:</b></td>
        <td style="width:150"><?php echo $row['oj2']; ?></td>
        </tr>        
 </table>  
        
<table style="FONT-SIZE: 8pt;">
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
    <tr> <td style="width:620">         
    <?php echo $row['BInternational']; ?>
        </td>
    </tr>
            <tr> <td style="width:620"><b>17. Patents(Applied or Awarded): </b> </td></tr>
         <tr>  <td>
      
 
            <?php echo $row['patents']; ?>
 </td></tr>
 
 
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
            if($row['E4_11']!="")
            {
                ?>          
       
        <tr>
          <td style="width:150"><?php echo $row['E4_11']; ?>"</td>
            <td style="width:260"><?php echo $row['E4_12']; ?>" </td>
            <td style="width:65"><?php echo $row['E4_13']; ?></td>
            <td style="width:60"><?php echo $row['E4_14']; ?></td>
            <td style="width:60"><?php echo $row['E4_15']; ?></td>
            <td style="width:80"><?php echo $row['E4_16']; ?></td>
             </tr>
        <?php
            }
             if($row['E4_21']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row['E4_21']; ?>"</td>
            <td style="width:260"><?php echo $row['E4_22']; ?>" </td>
            <td style="width:65"><?php echo $row['E4_23']; ?></td>
            <td style="width:60"><?php echo $row['E4_24']; ?></td>
            <td style="width:60"><?php echo $row['E4_25']; ?></td>
            <td style="width:80"><?php echo $row['E4_26']; ?></td>
             </tr>
        <?php
            }
             if($row['E4_31']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row['E4_31']; ?>"</td>
            <td style="width:260"><?php echo $row['E4_32']; ?>" </td>
            <td style="width:65"><?php echo $row['E4_33']; ?></td>
            <td style="width:60"><?php echo $row['E4_34']; ?></td>
            <td style="width:60"><?php echo $row['E4_35']; ?></td>
            <td style="width:80"><?php echo $row['E4_36']; ?></td>
         </tr>
        <?php
            }
             if($row['E4_41']!="")
             {
           ?>
        <tr>
            <td style="width:150"><?php echo $row['E4_41']; ?>"</td>
            <td style="width:260"><?php echo $row['E4_42']; ?>" </td>
            <td style="width:65"><?php echo $row['E4_43']; ?></td>
            <td style="width:60"><?php echo $row['E4_44']; ?></td>
            <td style="width:60"><?php echo $row['E4_45']; ?></td>
            <td style="width:100"><?php echo $row['E4_46']; ?></td>
            </tr>
         <?php
            }
             if($row['E4_51']!="")
             {
           ?>
        <tr>
           <td style="width:150"><?php echo $row['E4_51']; ?>"</td>
            <td style="width:260"><?php echo $row['E4_52']; ?>" </td>
            <td style="width:65"><?php echo $row['E4_53']; ?></td>
            <td style="width:60"><?php echo $row['E4_54']; ?></td>
            <td style="width:60"><?php echo $row['E4_55']; ?></td>
            <td style="width:80"><?php echo $row['E4_56']; ?></td>
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
            <td style="width:105"><?php echo $row['F54']; ?>"</td>
     
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
        if($row['ie11']!="")
            {
                    ?>
            <tr>
            <td style="width:300"><?php echo $row['ie11']; ?></td>
            <td style="width:300"><?php echo $row['ie12']; ?></td>
            <td style="width:130"><?php echo $row['ie13']; ?></td>
           </tr>
   <?php
            }
            if($row['ie21']!="")
            {
                    ?>
  <tr>
            <td style="width:300"><?php echo $row['ie21']; ?></td>
            <td style="width:300"><?php echo $row['ie22']; ?></td>
            <td style="width:130"><?php echo $row['ie23']; ?></td>
           </tr>
 <?php
            }
            if($row['ie31']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row['ie31']; ?></td>
            <td style="width:300"><?php echo $row['ie32']; ?></td>
            <td style="width:130"><?php echo $row['ie33']; ?></td>
           </tr>
  <?php
            }
            if($row['ie41']!="")
            {
                    ?>
     <tr>
             <td style="width:300"><?php echo $row['ie41']; ?></td>
            <td style="width:300"><?php echo $row['ie42']; ?></td>
            <td style="width:130"><?php echo $row['ie43']; ?></td>
           </tr>
  <?php
            }
            if($row['ie51']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row['ie51']; ?></td>
            <td style="width:300"><?php echo $row['ie52']; ?></td>
            <td style="width:130"><?php echo $row['ie53']; ?></td>
           </tr>
  <?php
            }
            if($row['ie61']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row['ie61']; ?></td>
            <td style="width:300"><?php echo $row['ie62']; ?></td>
            <td style="width:130"><?php echo $row['ie63']; ?></td>
           </tr>
  <?php
            }
            if($row['ie71']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row['ie71']; ?></td>
            <td style="width:300"><?php echo $row['ie72']; ?></td>
            <td style="width:130"><?php echo $row['ie73']; ?></td>
           </tr>
  <?php
            }
            if($row['ie81']!="")
            {
                    ?>
      <tr>
             <td style="width:300"><?php echo $row['ie81']; ?></td>
            <td style="width:300"><?php echo $row['ie82']; ?></td>
            <td style="width:130"><?php echo $row['ie83']; ?></td>
           </tr>
   <?php
            }
            if($row['ie91']!="")
            {
                    ?>
     <tr>
            <td style="width:300"><?php echo $row['ie91']; ?></td>
            <td style="width:300"><?php echo $row['ie92']; ?></td>
            <td style="width:130"><?php echo $row['ie93']; ?></td>
           </tr>
   <?php
            }
            if($row['ie101']!="")
            {
                    ?>
      <tr>
            <td style="width:300"><?php echo $row['ie101']; ?></td>
            <td style="width:300"><?php echo $row['ie102']; ?></td>
            <td style="width:130"><?php echo $row['ie103']; ?></td>
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
                <td> <b>24. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities </b>  </td>
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
                <td> Position/Designation :</td>
                <td style="width:120px"> <?php echo $row['pr12']; ?> </td>
                <td> Position/Designation : </td>
                <td style="width:120px"> <?php echo $row['pr22']; ?> </td>
            </tr>
            <tr>
                <td>  Address(Phone <br> Mobile <br> E-mail) :</td>
                <td style="width:120px">  <?php echo $row['pr13']; ?> </td>
                <td> Address  (Phone  Mobile  E-mail) : </td>
                <td style="width:120px"> <?php echo $row['pr23']; ?> </td>
            </tr>
        </table> 
<table style="FONT-SIZE: 8pt;" >
                
            <tr>
              
                <td> <b>28. Please indicate how in your opinion you can contribute to NITK's growth. (Use separate sheet, if required) </b></td>
             
            </tr>
            <tr>     <td style="width:620"><?php echo $row['edp']; ?>   </td>          </tr>
            <tr>
             
                <td> <b>  Two papers in SCI Journals or one patent; may be based on Ph.D. work. </b></td>
             
            </tr>
            <tr>     <td style="width:620"><?php echo $row1['sci']; ?>   </td>          </tr>
           
</table>  <br>
   <table style="FONT-SIZE: 8pt;" >

</table>            
             
             <br>
       <table style="FONT-SIZE: 8pt;">
            <tr>   <td colspan="4">
     <b>29. I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
            the rules and regulations of the institute and also the directions given to me from time to time. </b></td>
     </tr>
     <tr>
       <td> <b>Date: </b></td> 
       <td style="width:220"> <?php echo $row['date']; ?> </td>
       <td> <b>Place:</b></td>
       <td style="width:220"> <?php echo $row['place']; ?> </td>
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
                                       
                                        <?php if($row3['up4']!="") {?>
                                        <li>
                                            <label>Upload Category certificate (SC/ST/OBC/PWD)</label>
                                        </li>
                                        <?php }?>
                                     
                                        <?php if($row3['up5']!="") {?>
                                        <li>
                                            <label>Upload Salary certificate/pay slip</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up6']!="") {?>
                                        <li>
                                           <label>Academic Career Record Documents (SSLC to Ph.D.) </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up11']!="") {?>6
                                        <li>
                                           <label>Academic Career Record Documents (Postdoctoral)</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up12']!="") {?>
                                        <li>
                                           <label>Experience certificates  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up13']!="") {?>
                                        <li>
                                           <label> Professional Training Received / Summer / Winter Schools attended Documents  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up14']!="") {?>
                                        <li>
                                           <label> Upload  Conferences/Seminars / Workshops attended Documents (Last 4 year's )   </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up15']!="") {?>
                                        <li>
                                           <label>Sponsored and consultancy projects   </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up16']!="") {?>
                                        <li>
                                           <label>Workshop /Conferences /Short term Courses organized  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up17']!="") {?>
                                        <li>
                                           <label>Publication and patents details (List and reprints)  </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up18']!="") {?>
                                        <li>
                                           <label>Award and recognitions </label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up19']!="") {?>
                                        <li>
                                           <label> Testimonial</label>
                                        </li>
                                        <?php }?>
                                        <?php if($row3['up20']!="") {?>
                                        <li>
                                           <label> No objection certificate <b style="font-size:5pt">(For Employed Persons only )</b></label>
                                        </li>
                                        <?php }?>
                                        
                        </ol> </td></tr>
            </table>
<?php
 mysqli_close($link);
?>
</page>
             
                
