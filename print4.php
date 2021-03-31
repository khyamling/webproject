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
      $pop="Assistant Professor(On Contract) Grade II, Level-10 (7CPC) with AGP 6000";
        $eq="eq1page";
    $eq1="eq1";}
          else if($pp1==2)
          {                    $pop="Assistant Professor(On Contract) Grade II, Level-11 (7CPC) with AGP 7000";
          $eq="eq2page";
    $eq1="eq2";}
              else if($pp1==3)   
              {$pop="Assistant Professor - Grade I, Level 12 (7CPC) with AGP 8000";
              $eq="eq3page";
    $eq1="eq3";}
              
          else if($pp1==4)
          {
              $pop="Associate Professor PB-4 with Grade pay of Rs.9500";
              $eq="eq4page";
    $eq1="eq4";
          }
          else if($pp1==5) 
          {$pop="Professor PB-4 with Grade pay of Rs.10500";
          $eq="eq5page";
    $eq1="eq5";
          }
          else if($pp1==6) 
          {
              $eq="eq6page";
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
    $msg="<table border='1'><tr><th colspan='20'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;
    $msg=" <tr><th colspan='20'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
   $msg="<tr>  <b><th rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th > <th rowspan='2'>Category</th ><th rowspan='2'>PWD</th ><th colspan='2'> % of Ag  </th ><th colspan='4'>Specialization</th ><th  rowspan='2'> No. of Journals</th ><th rowspan='2' >Area of Specialization</th ><th rowspan='2' >Institute</th ><th colspan='3'>Experience  </th ><th rowspan='2'>User Total credits </th > <th rowspan='2'>Eligible </th ><th rowspan='2'>Remark</th ></b></tr>";
    echo $msg;
 
    $msg="<tr> <th >B.Tech</th > <th >M.Tech</th ><th >B.Tech</th > <th >M.Tech</th ><th >Ph.D</th ><th >Ph.D Viva Date</th ><th>Teaching experience  </th ><th>Research experience </th ><th>Industry experience  </th ></tr>";
          
    echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN crediteq1 d ON a.appid=d.appn JOIN remarkeli e ON a.appid=e.appn ";
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
            
            $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td></tr>";
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
        $rm="Not Eligible";
        if($pp==$b && $pp1==$p && $row['status']!=$n && $row['remark']!=$rm){
         $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['JInternational']."</td><td>".$row['Page49']."</td><td>".$row['ph4']."</td><td>".$row['teachingexp']."</td><td>".$row['researchexp']."</td><td>".$row['industryexp']."</td><td>".$row['credit1']."</td><td>".$row['eligible']."</td><td>".$row['remark']."</td></tr>";
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
    $msg="<table border='1'><tr><th colspan='23'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='23'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
     $msg="<tr><b><th style='width: 200px;' rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th ><th rowspan='2'>Category</th ><th rowspan='2'>PWD</th ><th colspan='2'> % of Aggregate  </th ><th colspan='4'>Specialization</th ><th colspan='3'> Essential Requirements <br> Relevant Experience (Year-Months-Days)</th> <th rowspan='2'>No. of Journals</th > <th rowspan='2' >Area of Specialization</th ><th rowspan='2' >Institute</th ><th>Teaching experience  </th ><th rowspan='2'>Research experience </th ><th rowspan='2'>Industry experience  </th ><th rowspan='2'>User Total credits </th ><th rowspan='2'>Eligible </th ><th rowspan='2'>Remark</th >  </b></tr>";
    echo $msg;
 
    $msg="<tr> <th>B.Tech</th > <th>M.Tech</th ><th>B.Tech</th > <th>M.Tech</th ><th>Ph.D</th ><th>Ph.D Viva Date</th><th>After Master </th> <th>After Ph.D </th> <th> Total Experience Met/Not Met </th> </tr>";
          
    echo $msg;
 
 //  $msg="<tr><th colspan='2'>Guided Sole</th><th colspan='2'>Guided Joint</th></tr>";
          
   // echo $msg;
   //$msg="<tr><th>Completed </th><th>Ongoing</th><th>Completed </th><th>Ongoing</th></tr>";
          
   // echo $msg;
    

    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN profex d ON a.appid=d.appn JOIN crediteq1 f ON a.appid=f.appn JOIN remarkeli g ON a.appid=g.appn";
   // $res = mysql_query($sql);
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); //will fetch number of field in table
     $vapn=$row['appid'];
     $msg="";
     
      //$dayCount[] = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
      $dayCount= array(0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334);
          
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
       /// $appq=$row['appid'];
       //$sql1="SELECT * FROM profex where appn=$vapn";
      //$res1 =  mysqli_query($link, $sql1);
     //$row1=$res1->fetch_array();
     
     $n="N";
        if($pp==$b && $pp1==$p && $row['status']!=$n){
    $input=$row['nexpg'];
      $input1=$row['nexpg1'];
      $input2=$row['nexphd1'];
      $input3=$row['nexphd'];
      
     $crinput=$row['credit1'];
   /*   $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      $total=$dayOfYearphd+$dayOfYearpg;
   //  $year= intval(($dayOfYearphd+$dayOfYearpg)/365);
     //$month=intval( ($dayOfYearphd+$dayOfYearpg)- (($dayOfYearphd+$dayOfYearpg)/365));
     
     
   $year = intval($total/365);
   $flag = intval($total%365);
   $month = intval($flag/30);
   $days = $flag%30; */

    
    
  if($input3>=1)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>="10")
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}
    
    
   //echo $year."-".$month."-".$days;
      $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td></tr>";
         echo $msg;  }
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
  
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p && $row['status']!=$n){
            $input=$row['nexpg'];//YEAR
      $input1=$row['nexpg1'];//MONTH
      $input2=$row['nexphd1'];//YY
      $input3=$row['nexphd'];//Mm
      
      $input4=$row['nexap'];//Mm
      
      $input5=$row['nexap1'];//Mm

      $crinput=$row['credit1']; //credits
      
    /*    $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      if(($input4*365)+$dayCount[$input5]>(1095))
              {
          if($phd>10)
          {
              
              met;
          }
         else if($phd>=7 && $total="13")
              {
                 met;
              }
         else 
         {
         }
         }
         
          
               
     $total=($dayOfYearphd+$dayOfYearpg);
  	 $year = intval($total/365);
	 $flag = intval($total%365);
	 $month = intval($flag/30);
	 $days = $flag%30; */
 if($input3>=1)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=10)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}
   
            
           $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$row['Page49']."</td><td>".$row['ph4']."</td><td>".$row['teachingexp']."</td><td>".$row['researchexp']."</td><td>".$row['industryexp']."</td><td>".$row['credit1']."</td><td>".$row['eligible']."</td><td>".$row['remark']."</td></tr>";
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
    $msg="<table border='1'><tr><th colspan='23'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='23'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr><b><th style='width: 200px;' rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th ><th rowspan='2'>Category</th ><th rowspan='2'>PWD</th ><th colspan='2'> % of Aggregate  </th ><th colspan='4'>Specialization</th ><th colspan='3'> Essential Requirements <br> Relevant Experience (Year-Months-Days)</th> <th rowspan='2'>No. of Journals </th> <th rowspan='2' >Area of Specialization</th ><th rowspan='2' >Institute</th ><th>Teaching experience  </th ><th>Research experience </th ><th>Industry experience  </th ><th>User Total credits </th ><th rowspan='2'>Eligible </th ><th rowspan='2'>Remark</th >  </b></tr>";
    echo $msg;
 
    $msg="<tr> <th>B.Tech</th> <th>M.Tech</th ><th>B.Tech</th > <th>M.Tech</th ><th>Ph.D</th ><th>Ph.D Viva Date</th> <th>After Master</th> <th>After Ph.D </th> <th>Total Experience Met/Not Met</th> <th>No. Of Journal </th> </tr>";
          
    echo $msg;
 
//$msg="<tr><th colspan='2'>Guided Sole</th><th colspan='2'>Guided Joint</th></tr>";
          
  //  echo $msg;
  // $msg="<tr><th>Completed </th><th>Ongoing</th><th>Completed </th><th>Ongoing</th></tr>";
          
   // echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN profex d ON a.appid=d.appn JOIN crediteq1 f ON a.appid=f.appn JOIN remarkeli g ON a.appid=g.appn ";
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
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 
             $input=$row['nexpg'];
      $input1=$row['nexpg1'];
      $input2=$row['nexphd1'];
      $input3=$row['nexphd'];
      
       $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
   /*   $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      $total=$dayOfYearphd+$dayOfYearpg;
   //  $year= intval(($dayOfYearphd+$dayOfYearpg)/365);
     //$month=intval( ($dayOfYearphd+$dayOfYearpg)- (($dayOfYearphd+$dayOfYearpg)/365));
     
     
   $year = intval($total/365);
   $flag = intval($total%365);
   $month = intval($flag/30);
   $days = $flag%30;*/
   $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }

 $indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } 


if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}

    //echo $year."-".$month."-".$days;
       $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$row['Page49']."</td><td>".$row['ph4']."</td><td>".$row['teachingexp']."</td><td>".$row['researchexp']."</td><td>".$row['industryexp']."</td><td>".$row['credit1']."</td><td>".$row['eligible']."</td><td>".$row['remark']."</td></tr>";
         echo $msg; }
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
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
              $input=$row['nexpg'];//YEAR
      $input1=$row['nexpg1'];//MONTH
      $input2=$row['nexphd1'];//YY
      $input3=$row['nexphd'];//Mm
      
      $input4=$row['nexap'];//Mm
      
      $input5=$row['nexap1'];//Mm

     $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
      
       /*  $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      if(($input4*365)+$dayCount[$input5]>(1095))
              {
          if($phd>10)
          {
              
              met;
          }
         else if($phd>=7 && $total="13")
              {
                 met;
              }
         else 
         {
         }
         }
         
          
               
     $total=($dayOfYearphd+$dayOfYearpg);
  	 $year = intval($total/365);
	 $flag = intval($total%365);
	 $month = intval($flag/30);
	 $days = $flag%30; */
         $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }
    
     $indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } 

if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}
    
     $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$row['Page49']."</td><td>".$row['ph4']."</td><td>".$row['teachingexp']."</td><td>".$row['researchexp']."</td><td>".$row['industryexp']."</td><td>".$row['credit1']."</td><td>".$row['eligible']."</td><td>".$row['remark']."</td></tr>";
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
    $msg="<table border='1'><tr><th colspan='27'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='27'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr><b><th style='width: 200px;' rowspan='4'>Sl. No.</th > <th rowspan='4'> Appn. No. </th ><th  style='width:350px' rowspan='4'> Candidate Name </th ><th rowspan='4'>Email </th ><th rowspan='4'>Mobile No.</th ><th rowspan='4'>Category</th ><th rowspan='4'>PWD</th ><th colspan='2'> % of Aggregate  </th ><th colspan='4'>Specialization</th >"
            ."<th colspan='2'>Cumulative Essential <br> Credit Points</th><th colspan='3'> Essential Requirements <br> Relevant Experience (Year-Months-Days)</th> <th colspan='2'> Ess. Requirement</th> <th colspan='5'>Additional Desirable Requirements</th > <th colspan='2'>Other Requirements</th > <th rowspan='4'>status</th > </b></tr>";
    echo $msg;
 
    $msg="<tr> <th rowspan='3' >B.Tech</th rowspan='3'> <th rowspan='3'>M.Tech</th ><th rowspan='3'>B.Tech</th > <th rowspan='3'>M.Tech</th ><th rowspan='3'>Ph.D</th ><th rowspan='3'>Ph.D Viva Date</th><th rowspan='3'>credit Points</th><th rowspan='3'>credit Met/Not Met</th> <th rowspan='3' >After Master</th> <th rowspan='3'>After Ph.D </th> <th rowspan='3'>Total Experience Met/Not Met</th> <th rowspan='3'>No. Of Journal </th>  <th rowspan='3'>Sponsored Project</th><th colspan='4'> Ph.D Guidance </th><th rowspan='3'>Patents</th><th rowspan='3'>Books</th><th rowspan='3'>consult. Project</th></tr>";
          
    echo $msg;
 
$msg="<tr><th colspan='2'>Guided Sole</th><th colspan='2'>Guided Joint</th></tr>";
          
    echo $msg;
   $msg="<tr><th>Completed </th><th>Ongoing</th><th>Completed </th><th>Ongoing</th></tr>";
          
    echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN profex d ON a.appid=d.appn JOIN crediteq1 f ON a.appid=f.appn ";
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
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 
             $input=$row['nexpg'];
      $input1=$row['nexpg1'];
      $input2=$row['nexphd1'];
      $input3=$row['nexphd'];
      
       $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
   /*   $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      $total=$dayOfYearphd+$dayOfYearpg;
   //  $year= intval(($dayOfYearphd+$dayOfYearpg)/365);
     //$month=intval( ($dayOfYearphd+$dayOfYearpg)- (($dayOfYearphd+$dayOfYearpg)/365));
     
     
   $year = intval($total/365);
   $flag = intval($total%365);
   $month = intval($flag/30);
   $days = $flag%30;*/
   $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }

 /*$indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } */


if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}

    echo $year."-".$month."-".$days;
       $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['credit1']."</td><td>$crmet</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$spns."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$row['patents']."</td><td>".$row['BInternational']."</td><td>".$cns."</td><td>".$row['status']."</td></tr>";
         echo $msg; }
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
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
              $input=$row['nexpg'];//YEAR
      $input1=$row['nexpg1'];//MONTH
      $input2=$row['nexphd1'];//YY
      $input3=$row['nexphd'];//Mm
      
      $input4=$row['nexap'];//Mm
      
      $input5=$row['nexap1'];//Mm

     $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
      
       /*  $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      if(($input4*365)+$dayCount[$input5]>(1095))
              {
          if($phd>10)
          {
              
              met;
          }
         else if($phd>=7 && $total="13")
              {
                 met;
              }
         else 
         {
         }
         }
         
          
               
     $total=($dayOfYearphd+$dayOfYearpg);
  	 $year = intval($total/365);
	 $flag = intval($total%365);
	 $month = intval($flag/30);
	 $days = $flag%30; */
         $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }
    
 /*    $indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } */

if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}
    
     $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['credit1']."</td><td>$crmet</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$spns."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$row['patents']."</td><td>".$row['BInternational']."</td><td>".$cns."</td><td>".$row['status']."</td></tr>";
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
    $msg="<table border='1'><tr><th colspan='27'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='27'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr><b><th style='width: 200px;' rowspan='4'>Sl. No.</th > <th rowspan='4'> Appn. No. </th ><th  style='width:350px' rowspan='4'> Candidate Name </th ><th rowspan='4'>Email </th ><th rowspan='4'>Mobile No.</th ><th rowspan='4'>Category</th ><th rowspan='4'>PWD</th ><th colspan='2'> % of Aggregate  </th ><th colspan='4'>Specialization</th >"
            ."<th colspan='2'>Cumulative Essential <br> Credit Points</th><th colspan='3'> Essential Requirements <br> Relevant Experience (Year-Months-Days)</th> <th colspan='2'> Ess. Requirement</th> <th colspan='5'>Additional Desirable Requirements</th > <th colspan='2'>Other Requirements</th > <th rowspan='4'>status</th > </b></tr>";
    echo $msg;
 
    $msg="<tr> <th rowspan='3' >B.Tech</th rowspan='3'> <th rowspan='3'>M.Tech</th ><th rowspan='3'>B.Tech</th > <th rowspan='3'>M.Tech</th ><th rowspan='3'>Ph.D</th ><th rowspan='3'>Ph.D Viva Date</th><th rowspan='3'>credit Points</th><th rowspan='3'>credit Met/Not Met</th> <th rowspan='3' >After Master</th> <th rowspan='3'>After Ph.D </th> <th rowspan='3'>Total Experience Met/Not Met</th> <th rowspan='3'>No. Of Journal </th>  <th rowspan='3'>Sponsored Project</th><th colspan='4'> Ph.D Guidance </th><th rowspan='3'>Patents</th><th rowspan='3'>Books</th><th rowspan='3'>consult. Project</th></tr>";
          
    echo $msg;
 
$msg="<tr><th colspan='2'>Guided Sole</th><th colspan='2'>Guided Joint</th></tr>";
          
    echo $msg;
   $msg="<tr><th>Completed </th><th>Ongoing</th><th>Completed </th><th>Ongoing</th></tr>";
          
    echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN profex d ON a.appid=d.appn JOIN crediteq1 f ON a.appid=f.appn ";
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
        if( $pp==$b && $pp1==$p && $row['status']!=$n){ 
             $input=$row['nexpg'];
      $input1=$row['nexpg1'];
      $input2=$row['nexphd1'];
      $input3=$row['nexphd'];
      
       $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
   /*   $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      $total=$dayOfYearphd+$dayOfYearpg;
   //  $year= intval(($dayOfYearphd+$dayOfYearpg)/365);
     //$month=intval( ($dayOfYearphd+$dayOfYearpg)- (($dayOfYearphd+$dayOfYearpg)/365));
     
     
   $year = intval($total/365);
   $flag = intval($total%365);
   $month = intval($flag/30);
   $days = $flag%30;*/
   $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }

 /*$indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } */


if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}

    echo $year."-".$month."-".$days;
       $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['credit1']."</td><td>$crmet</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$spns."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$row['patents']."</td><td>".$row['BInternational']."</td><td>".$cns."</td><td>".$row['status']."</td></tr>";
         echo $msg; }
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
        if($pp==$b && $pp1==$p && $row['status']!=$n){
          
              $input=$row['nexpg'];//YEAR
      $input1=$row['nexpg1'];//MONTH
      $input2=$row['nexphd1'];//YY
      $input3=$row['nexphd'];//Mm
      
      $input4=$row['nexap'];//Mm
      
      $input5=$row['nexap1'];//Mm

     $crinput=$row['credit1']; //credits

$exp=$row['nexpg']+$row['nexphd'];
      
       /*  $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      if(($input4*365)+$dayCount[$input5]>(1095))
              {
          if($phd>10)
          {
              
              met;
          }
         else if($phd>=7 && $total="13")
              {
                 met;
              }
         else 
         {
         }
         }
         
          
               
     $total=($dayOfYearphd+$dayOfYearpg);
  	 $year = intval($total/365);
	 $flag = intval($total%365);
	 $month = intval($flag/30);
	 $days = $flag%30; */
         $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }
    
 /*    $indexp=0;
  for($i=1;$i<=5;$i++){
      $ii="ie".$i."1";
      if($row[$ii]!="")
    {
        $indexp++;
    }
    
    } */

if($row['nexphd']>=3||$exp>=6)
{
$met="Met";
}
else
{
$met="Not Met";
}

if($crinput>=20)
{
$crmet="Met";
}
else
{
$crmet="Not Met";
}
    
     $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['Page12']."</td><td>".$row['Page19']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['credit1']."</td><td>$crmet</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>$met</td><td>".$row['JInternational']."</td><td>".$spns."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$row['patents']."</td><td>".$row['BInternational']."</td><td>".$cns."</td><td>".$row['status']."</td></tr>";
        echo $msg;      
        $cc=$cc+1;
        }
        
    }

    echo "</table>";
    }
    
       
   if($pp1==6){
     $name=$dept."_".$pop;
    header('Content-Disposition: attachment; filename='.$name.'.xls'); 
    header('Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
    header('Content-Type: application/x-msexcel; charset=windows-1251; format=attachment;');
    $msg="<table border='1'><tr><th colspan='19'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;

    $msg=" <tr><th colspan='19'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr><b><th style='width: 200px;' rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th ><th rowspan='2'>Email </th ><th rowspan='2'>Mobile No.</th ><th colspan='2'> % of Aggregate  </th ><th colspan='3'>Specialization</th >"
            ."<th >Esss. quali. </th> <th colspan='4'> Relevant Experience (Year-Months-Days)</th> <th colspan='5'>Other Ess. Req.</th > <th>Add. Desi. Req.</th > </b></tr>";
    echo $msg;
 
    $msg="<tr> <th >B.Tech</th > <th >M.Tech</th ><th >B.Tech</th > <th >M.Tech</th ><th >Ph.D</th ><th >Ph.D Viva Date</th> <th>After Master </th> <th>After Ph.D </th> <th> Total Experience </th> <th>At Associate Professor </th>  <th> No. of Journals</th><th> Ph.D Guidance </th> <th>Consult.Project</th><th> Self Finance Course</th><th> Two Exper. added to techi. labi</th> <th> Patents</th></tr>";
          
    echo $msg;
    

    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn JOIN profex d ON a.appid=d.appn";
   // $res = mysql_query($sql);
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); //will fetch number of field in table
     $vapn=$row['appid'];
     $msg="";
     
      //$dayCount[] = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
      $dayCount= array(0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334);
          
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
       /// $appq=$row['appid'];
       //$sql1="SELECT * FROM profex where appn=$vapn";
      //$res1 =  mysqli_query($link, $sql1);
     //$row1=$res1->fetch_array();
     
     $n="N";
        if($pp==$b && $pp1==$p && $row['status']!=$n){
    $input=$row['nexpg'];
      $input1=$row['nexpg1'];
      $input2=$row['nexphd1'];
      $input3=$row['nexphd'];
      
      $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      $total=$dayOfYearphd+$dayOfYearpg;
   //  $year= intval(($dayOfYearphd+$dayOfYearpg)/365);
     //$month=intval( ($dayOfYearphd+$dayOfYearpg)- (($dayOfYearphd+$dayOfYearpg)/365));
     
     
   $year = intval($total/365);
   $flag = intval($total%365);
   $month = intval($flag/30);
   $days = $flag%30;
   $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row['$ii']!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row['$ii']!="")
    {
        $spns++;
    }
    
    }
   echo $year."-".$month."-".$days;
      $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>Met/NOT MET</td><td>".$row['nexap']."(Y)-".$row['nexap1']."(M)</td><td>".$row['JInternational']."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$cns."</td><td>".$spns."</td><td>".$row['patents']."</td><td>".$row['status']."</td></tr>";
         echo $msg; }
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
  
    while($row=mysqli_fetch_array($res))  //fetch all the row as array
    {
        $vapn=$row['appid'];
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        $n="N";
        if($pp==$b && $pp1==$p && ($row['status']!=$n)){
            $input=$row['nexpg'];//YEAR
      $input1=$row['nexpg1'];//MONTH
      $input2=$row['nexphd1'];//YY
      $input3=$row['nexphd'];//Mm
      
      $input4=$row['nexap'];//Mm
      
      $input5=$row['nexap1'];//Mm
      
         $x=intval($dayCount[$input1]);
      $xx=intval($dayCount[$input2]);
     $dayOfYearpg=$x+($input*365);
      $dayOfYearphd=$xx+($input3*365);
      if(($input4*365)+$dayCount[$input5]>(1095))
              {
          if($phd>10)
          {
              
              met;
          }
         else if($phd>=7 && $total="13")
              {
                 met;
              }
         else 
         {
         }
         }
         
          
               
     $total=($dayOfYearphd+$dayOfYearpg);
  	 $year = intval($total/365);
	 $flag = intval($total%365);
	 $month = intval($flag/30);
	 $days = $flag%30;
         $cns=0;
  for($i=1;$i<=5;$i++){
      $ii="F".$i."1";
    if($row[$ii]!="")
    {
        $cns++;
    }
    
    }
         $spns=0;
  for($i=1;$i<=5;$i++){
      $ii="E4_".$i."1";
      if($row[$ii]!="")
    {
        $spns++;
    }
    
    }
            
      $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['nexpg']."(Y)-".$row['nexpg1']."(M)</td><td>".$row['nexphd']."(Y)-".$row['nexphd1']."(M)</td><td>Met/NOT MET</td><td>".$row['nexap']."(Y)-".$row['nexap1']."(M)</td><td>".$row['JInternational']."</td><td>".$row['phdcomplete']."</td><td>".$row['phdongoing']."</td><td>".$row['cj1']."</td><td>".$row['oj1']."</td><td>".$cns."</td><td>".$spns."</td><td>".$row['lab']."</td><td>".$row['patents']."</td><td>".$row['status']."</td></tr>";
        echo $msg;      
        $cc=$cc+1;
        }
        
    }

    }   
    //$msg.="</table>";
   //will print the content in the exel page

?>

<?php
//index.php page
//ime="any file name";
//echo "<a href='download.php?name=".$name."'>Click to download</a>"; //link to download file
?>

