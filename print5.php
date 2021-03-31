<?php
session_start();
$pp=$_SESSION['pdpt'];
$pp1=$_SESSION['ppst'];

require_once 'class.user.php';
   // echo $pp."__".$pp1;
//  echo $pp."__".$pp1;
$link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
  //./   $sql="select * from postapplied";
 //$res =  mysqli_query($link, $sql);
    
    if($pp1==1){
      $pop="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000";
        $eq="eq1page";
        $eq2="newrules1";
        $eq1="eq1";}
          else if($pp1==2)
          {                    
     $pop="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          $eq="eq2page";
          $eq2="newrules2";
          $eq1="eq2";}
              else if($pp1==3)   
              {
         $pop="Assistant Professor PB-3 with Grade pay of Rs.8000";
        $eq="eq3page";
          $eq2="newrules3";
         $eq1="eq3";
        }
              
          else if($pp1==4)
          {
              $pop="Associate Professor PB-4 with Grade pay of Rs.9500";
              $eq="eq4page";
             $eq2="newrules4";
              $eq1="eq4";
          }
          else if($pp1==5) 
          {$pop="Professor PB-4 with Grade pay of Rs.10500";
          $eq="eq5page";
          $eq2="newrules5";
    $eq1="eq5";
          }
          else if($pp1==6) 
          {
              $eq="eq6page";
              $eq2="newrules6";
               $eq1="eq6";
              $pop="Professor HAG Scale Rs.67000 to 79000";
          }
    if( $pp=="AMH") $dept="Applied Mechanics and Hydraulics";
    else if( $pp=="CHE") $dept=  "Chemical Engineering"; 
    else if( $pp=="CHY") $dept=  "Chemistry"; 
    else if( $pp=="CVE") $dept=  "Civil Engineering"; 
    else if( $pp=="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if( $pp=="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if( $pp=="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if( $pp=="ITE") $dept=  " Information Technology"; 
    else if( $pp=="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if( $pp=="MLE") $dept=  " Mechanical Engineering"; 
    else if( $pp=="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if( $pp=="MNE") $dept=  " Mining Engineering"; 
    else if( $pp=="PHY") $dept=  "  Physics"; 
    else if( $pp=="SOM") $dept=  "  School of  Management"; 
   
    //write your query      
    if($pp1==1){
        
        
        
         $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='26'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;
    $msg=" <tr><th colspan='26'><b> Dept. of ".$dept." </b> <br/><b>Credit ponts MHRD Rules <br>".$pop." </b></th ></tr>";
    echo $msg;
   $msg="<tr>  <b><th>Sl. No.</th > <th> Appn. No. </th ><th> Candidate Name </th ><th>Email </th ><th>1. External sponsored R & D</th > <th>2. Consultancy Projects</th><th>3.Doctorates Guided</th ><th>4. Journal papers in <br> SCI/SCI-E/SSCI/Scopus</th ><th>5. One Conference paper indexed in SCI/Scopus/Web of science Conference</th ><th >6. Administrative Responsibilities</th ><th>7. Administrative and <br> Other Responsibilities</th ><th>8. Additional Responsibilities</th><th>9. Departmental activities <br> identified by HoD</th > <th>10.Workshops/FDP/Short term courses</th ><th>11. Conducting National programs like GIAN</th> <th>12. National/International <br> Conference organized</th>
<th>13. Length of service over and above</th><th>14. Establishment of new lab</th><th>15. Theory Teaching of over <br> and above 6 credit hrs</th><th>16. PG Dissertation guided </th><th>17. UG Dissertation guided </th><th>18.Text/Reference Book Published</th><th>19.Text/Reference Book Published</th><th>20.Significant outreach <br> Institute Activities</th><th>21.Fellow IEEE,  <br> INA, FNAE, FNSc</th><th>22.Placement percentage</th><th>Total Credit</th></b></tr>";
echo $msg;
 //  $msg="<tr>  <b><th rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th ><th rowspan='2'>Email </th ><th rowspan='2'>Mobile No.</th > <th rowspan='2'>Category</th ><th rowspan='2'>PWD</th ><th colspan='2'> % of Ag  </th ><th colspan='4'>Specialization</th ><th >Esss Req</th ><th >Add Req</th > </b></tr>";
   // echo $msg;
 
 //   $msg="<tr> <th >B.Tech</th > <th >M.Tech</th ><th >B.Tech</th > <th >M.Tech</th ><th >Ph.D</th ><th >Ph.D Viva Date</th ><th >Credit Points</th > <th > No. of Journals</th ></tr>";
          
 //   echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq2 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn ";
   // $res = mysql_query($sql);
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); //will fetch number of field in table
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
         $n="N";
        if($pp==$b && $pp1==$p && $row['status']!=$n){
            
            $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td></tr>";
        }
    /*$msg="<table><tr><td>Sl No</td>";
    for ( $i = 0; $i < $numcolumn; $i++ ) {
        $msg.="";
        $msg.= mysqli_field_name($res, $i);  //will store column name of the table to msg variable
        $msg.="</td>";

    }
    $msg.="</tr>";
    $i=0;
    $count=1; //used to print sl.no
     */
    echo $msg;
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        
       //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;

 if($pp==$b && $pp1==$p && $row['status']!=$n){
         $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;      
        $cc=$cc+1;
        }
        
    }
    echo "</table>";

    }
       if($pp1==2){
           $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='26'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='26'><b> Dept. of ".$dept." </b> <br/><b>Credit ponts MHRD Rules <br>".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr>  <b><th>Sl. No.</th > <th> Appn. No. </th ><th> Candidate Name </th ><th>Email </th ><th>1. External sponsored R & D</th > <th>2. Consultancy Projects</th><th>3.Doctorates Guided</th ><th>4. Journal papers in <br> SCI/SCI-E/SSCI/Scopus</th ><th>5. One Conference paper indexed in SCI/Scopus/Web of science Conference</th ><th >6. Administrative Responsibilities</th ><th>7. Administrative and <br> Other Responsibilities</th ><th>8. Additional Responsibilities</th><th>9. Departmental activities <br> identified by HoD</th > <th>10.Workshops/FDP/Short term courses</th ><th>11. Conducting National programs like GIAN</th> <th>12. National/International <br> Conference organized</th>
<th>13. Length of service over and above</th><th>14. Establishment of new lab</th><th>15. Theory Teaching of over <br> and above 6 credit hrs</th><th>16. PG Dissertation guided </th><th>17. UG Dissertation guided </th><th>18.Text/Reference Book Published</th><th>19.Text/Reference Book Published</th><th>20.Significant outreach <br> Institute Activities</th><th>21.Fellow IEEE,  <br> INA, FNAE, FNSc</th><th>22.Placement percentage</th><th>Total Credit</th></b></tr>";
echo $msg;
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq2 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn ";
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
    $cc=1;
    $numcolumn = mysqli_num_fields($res); //will fetch number of field in table
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        $n="N";
        if($pp==$b && $pp1==$p && $row['status']!=$n){
      
   //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
       
    


   echo $year."-".$month."-".$days;
       $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;     }
 
  
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p && $row['status']!=$n){

   //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;    
        $cc=$cc+1;
        }
        
    }

    }
       if($pp1==3){
           $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='26'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='26'><b> Dept. of ".$dept." </b> <br/><b>Credit ponts MHRD Rules <br>".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr>  <b><th>Sl. No.</th > <th> Appn. No. </th ><th> Candidate Name </th ><th>Email </th ><th>1. External sponsored R & D</th > <th>2. Consultancy Projects</th><th>3.Doctorates Guided</th ><th>4. Journal papers in <br> SCI/SCI-E/SSCI/Scopus</th ><th>5. One Conference paper indexed in SCI/Scopus/Web of science Conference</th ><th >6. Administrative Responsibilities</th ><th>7. Administrative and <br> Other Responsibilities</th ><th>8. Additional Responsibilities</th><th>9. Departmental activities <br> identified by HoD</th > <th>10.Workshops/FDP/Short term courses</th ><th>11. Conducting National programs like GIAN</th> <th>12. National/International <br> Conference organized</th>
<th>13. Length of service over and above</th><th>14. Establishment of new lab</th><th>15. Theory Teaching of over <br> and above 6 credit hrs</th><th>16. PG Dissertation guided </th><th>17. UG Dissertation guided </th><th>18.Text/Reference Book Published</th><th>19.Text/Reference Book Published</th><th>20.Significant outreach <br> Institute Activities</th><th>21.Fellow IEEE,  <br> INA, FNAE, FNSc</th><th>22.Placement percentage</th><th>Total Credit</th></b></tr>";
echo $msg;
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq2 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn ";
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); 
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        $n="N";
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 

  //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg; }

  //  echo $msg;
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
      //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;    
        $cc=$cc+1;
        }
        
    }

    echo "</table>";
    }
       if($pp1==4){
           $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='26'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='26'><b> Dept. of ".$dept." </b> <br/><b>Credit ponts MHRD Rules <br>".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr>  <b><th>Sl. No.</th > <th> Appn. No. </th ><th> Candidate Name </th ><th>Email </th ><th>1. External sponsored R & D</th > <th>2. Consultancy Projects</th><th>3.Doctorates Guided</th ><th>4. Journal papers in <br> SCI/SCI-E/SSCI/Scopus</th ><th>5. One Conference paper indexed in SCI/Scopus/Web of science Conference</th ><th >6. Administrative Responsibilities</th ><th>7. Administrative and <br> Other Responsibilities</th ><th>8. Additional Responsibilities</th><th>9. Departmental activities <br> identified by HoD</th > <th>10.Workshops/FDP/Short term courses</th ><th>11. Conducting National programs like GIAN</th> <th>12. National/International <br> Conference organized</th>
<th>13. Length of service over and above</th><th>14. Establishment of new lab</th><th>15. Theory Teaching of over <br> and above 6 credit hrs</th><th>16. PG Dissertation guided </th><th>17. UG Dissertation guided </th><th>18.Text/Reference Book Published</th><th>19.Text/Reference Book Published</th><th>20.Significant outreach <br> Institute Activities</th><th>21.Fellow IEEE,  <br> INA, FNAE, FNSc</th><th>22.Placement percentage</th><th>Total Credit</th></b></tr>";
echo $msg;
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq2 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn ";
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); 
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        $n="N";
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 

  //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg; }

  //  echo $msg;
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
      //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;    
        $cc=$cc+1;
        }
        
    }

    echo "</table>";
    }
       if($pp1==5){
           $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='26'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='26'><b> Dept. of ".$dept." </b> <br/><b>Credit ponts MHRD Rules <br>".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr>  <b><th>Sl. No.</th > <th> Appn. No. </th ><th> Candidate Name </th ><th>Email </th ><th>1. External sponsored R & D</th > <th>2. Consultancy Projects</th><th>3.Doctorates Guided</th ><th>4. Journal papers in <br> SCI/SCI-E/SSCI/Scopus</th ><th>5. One Conference paper indexed in SCI/Scopus/Web of science Conference</th ><th >6. Administrative Responsibilities</th ><th>7. Administrative and <br> Other Responsibilities</th ><th>8. Additional Responsibilities</th><th>9. Departmental activities <br> identified by HoD</th > <th>10.Workshops/FDP/Short term courses</th ><th>11. Conducting National programs like GIAN</th> <th>12. National/International <br> Conference organized</th>
<th>13. Length of service over and above</th><th>14. Establishment of new lab</th><th>15. Theory Teaching of over <br> and above 6 credit hrs</th><th>16. PG Dissertation guided </th><th>17. UG Dissertation guided </th><th>18.Text/Reference Book Published</th><th>19.Text/Reference Book Published</th><th>20.Significant outreach <br> Institute Activities</th><th>21.Fellow IEEE,  <br> INA, FNAE, FNSc</th><th>22.Placement percentage</th><th>Total Credit</th></b></tr>";
echo $msg;
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq2 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn ";
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); 
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        $n="N";
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 

  //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg; }

  //  echo $msg;
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
      //1. R&d
        $result1=8*$row['loneproj'];
        $result3=5*$row['teamproj'];
        $result4=3*$row['coproj'];
        $result5=8*$row['patgrant'];
        $result6=$result1+$result3+$result4+$result5;  
//2 cons        
 $result7=2*$row['consult'];
if($result7>10)
{
    $result8=10;
}
else
{
    $result8= $result7;
}

//3. Doctorates Guided
$result9=8*$row['loneguide'];
$result10=5*$row['headguide'];
$result11=3*$row['coguide'];
$result12=1.5*$row['coguide2'];
$result13=1.0*$row['coguide3'];
$result14=0.75*$row['coguide4'];
$result15=+0.6*$row['coguide5'];
$result16=$result9+$result10+$result11+$result12+$result13+$result14+$result15;

//4.journal

$result17=4*$row['jsing'];
$result18=2*$row['jmain'];
$result19=2*$row['jother']; 
$result20=1*$row['jother2'];
$result21= 0.67*$row['jother3']; 
$result22=0.5*$row['jother4'];
$result23=0.4*$row['jother5'];
$result24= $result17+$result18+$result19+$result20+$result21+$result22+$result23;

//5.Conference paper

$result25=1*$row['csing']+0.6*$row['cmain']+0.4*$row['cother']+0.2*$row['cother2']+0.13*$row['cother3']+0.1*$row['cother4']+0.02*$row['cother5']+0.016*$row['cother6']+0.014*$row['cother7']+0.012*$row['cother8'];
if($result25>10)
{
    $result26=10;
}
else
{
    $result26= $result25;
}

//6.Administrative Responsibilities

$result27=$row['sixadmin1']+$row['sixadmin2']+$row['sixadmin3']+$row['sixadmin4']+$row['sixadmin5']+$row['sixadmin6']+$row['sixadmin7']+$row['sixadmin8'];


if($result27>8)
{
$result28=16;
}
else
{
$result28=2*$result27;
}
 
//7. Administrative and Other Responsibilities

$result29= $row['sevenadminothers1']+ $row['sevenadminothers2']+ $row['sevenadminothers3']+ $row['sevenadminothers4']+ $row['sevenadminothers5']+$row['sevenadminothers6']+$row['sevenadminothers7']+$row['sevenadminothers8']+$row['sevenadminothers9']+$row['sevenadminothers10'];

if($result29>8)
{
$result30=8;
}
else
{
$result30=1*$result29;
}

//8.Additional Responsibilities

$result31= $row['eightadminresp1']+$row['eightadminresp2']+$row['eightadminresp3'];
 if($result31>6)
{
$result32=3;
}
else
{
$result32=0.5*$result31;
}

//9. Departmental activities identified by HoD

$result33= $row['nineadminresp1']+$row['nineadminresp2'];
if($result33>6)
{
$result34=3;
}
else
{
$result34=0.5*$result33;
}

//10. Workshops/FDP/Short term courses

$result35= $row['workshop'];
 if($result35>4)
{
$result36=8;
}
else
{
$result36=2*$result35;
}

//11. GIAN Program
$totalcount11= $row['gian1'];

if($totalcount11==1)
{
    $result37=2;
}
else if($totalcount11>1){
    $result37=4;
}
else {
    $result37=0;
}

$totalcount11a= $row['gian2'];

if($totalcount11a==1)
{
    $result38=1;
}
else if($totalcount11a>1){
    $result38=2;
}
else
{
$result38=0;
}
$result39=$result37+$result38;

//12.National/International Conference organized
$totalcount12= $row['national'];
if($totalcount12==1)
{
    $result40=3;
}
else if($totalcount12>1){
    $result40=6;
}
else
{
   $result40=0; 
}

//13.Length of service over and above

$totalcount13= $row['teachexp'];
if($totalcount13>5)
{
    $result41=10;
}
else{
    $result41=2*$totalcount13;
}

//14.Establishment of new lab

$totalcount14= $row['eslab'];
if($totalcount14>=1)
{
    $result42=4;
}
else{
    $result42=0;
}

//15. Theory Teaching of over and above 6 credit
$totalcount15= $row['teach'];
if($totalcount15>6)
{
    $result43=6;
}
else {
    $result43=$totalcount15;
}

//16.PG Dissertation guided
$totalcount16= 0.5*$row['pg'];
if($totalcount16>10)
{
    $result44=10;
}
else {
    $result44=$totalcount16;
}

//17.UG Project guided
$totalcount17= 0.25*$row['ug'];
if($totalcount17>4)
{
    $result45=4;
}
else {
    $result45=$totalcount17;
}

//18.Text/Reference Book Published
$totalcount18= 6*$row['book'];
if($totalcount18>18)
{
    $result46=18;
}
else {
    $result46=$totalcount18;
}

//19.Text/Reference book published
$totalcount19= 2*$row['chapter'];
if($totalcount19>6)
{
    $result47=6;
}
else {
    $result47=$totalcount19;
}

//20. Significant outreach Institute Activities
$totalcount20= 2*$row['outreach'];
if($totalcount20>4)
{
    $result48=4;
}
else {
    $result48=$totalcount20;
}

//21. Fellow IEEE, INA, FNAE, FNSc
$totalcount21= 2*$row['ina'];
if($totalcount21>0)
{
    $result49=10;
}
 else {
   $result49=0; 
}

//22. .Placement percentage
$totalcount22= 4*$row['placement1'];
if($totalcount22>20)
 {
     $result50=20;
 }
 else {
      $result50=$totalcount22;
 }
$totalcount22b= 2*$row['placement2'];
 if($totalcount22b>10)
 {
     $result51=10;
 }
 else {
      $result51=$totalcount22b;
 }

$result52=$result50+$result51;
   
$msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>$result6</td><td>$result8</td><td>$result16</td><td>$result24</td><td>$result26</td><td>$result28</td><td>$result30</td><td>$result32</td><td>$result34</td><td>$result36</td><td>$result39</td><td>$result40</td><td>$result41</td><td>$result42</td><td>$result43</td><td>$result44</td><td>$result45</td><td>$result46</td><td>$result47</td><td>$result48</td><td>$result49</td><td>$result52</td><td>".$row['credit1']."</td></tr>";
        echo $msg;    
        $cc=$cc+1;
        }
        
    }

    echo "</table>";
    }

//$msg.="</table>";
//will print the content in the exel page

?>

<?php
//index.php page
//ime="any file name";
//echo "<a href='download.php?name=".$name."'>Click to download</a>"; //link to download file
?>

