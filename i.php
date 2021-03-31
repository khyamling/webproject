<?PHP session_start();
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
      $pop="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
        $eq="eq1page";
    $eq1="eq1";}
          else if($pp1==2)
          {                    $pop="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          $eq="eq2page";
    $eq1="eq2";}
              else if($pp1==3)   
              {$pop="Assistant Professor PB-3 with Grade pay of Rs.8000";
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
    $msg="<table border='1'><tr><th colspan='12'> <center><b>FACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE</b> </center></td></tr>";
    $var="";
    echo $msg;
    $msg=" <tr><th colspan='12'><b> Dept. of ".$dept." </b> <br/><b>  Essential Requirement for The Post of ".$pop." </b></th ></tr>";
    echo $msg;
    $msg="<tr>  <b><th rowspan='2'>Sl. No.</th > <th rowspan='2'> Appn. No. </th ><th  style='width:350px' rowspan='2'> Candidate Name </th ><th rowspan='2'>Email </th ><th rowspan='2'>Mobile No.</th ><th colspan='2'> % of Ag  </th ><th colspan='3'>Specialization</th >"
            ."<th >Esss Req</th ><th >Add Req</th > </b></tr>";
    echo $msg;
 
    $msg="<tr> <th >B.Tech</th > <th >M.Tech</th ><th >B.Tech</th > <th >M.Tech</th ><th >Ph.D</th ><th >Ph.D Viva Date</th > <th > 1 SCi</th ></tr>";
          
    echo $msg;
 
    
    
    //$sql=" SELECT a.*,b.* from postapplied a join ".$eq." b";
    // ECT * FROM table1 a JOIN table2 b ON a.ID = b.ID JOIN table3 c ON a.ID = c.ID
    $sql="SELECT * FROM postapplied a JOIN $eq b ON a.appid=b.appn JOIN $eq1 c ON a.appid=c.appn ";
   // $res = mysql_query($sql);
     $res =  mysqli_query($link, $sql);
     $row=$res->fetch_array();
$cc=1;
    $numcolumn = mysqli_num_fields($res); //will fetch number of field in table
     $vapn=$row['appid'];
     $msg="";
        $p= substr($vapn, 2, 1);
        $b= substr($vapn, 3, 3);
        if($pp==$b && $pp1==$p){
            
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
        if($pp==$b && $pp1==$p){
        $msg="<tr><td>".$cc."</td><td>".$row['appid']."</td><td style='width:350px'>".$row['Page5']."</td><td>".$row['email']."</td><td>".$row['Page34']."</td><td>".$row['percentage3']."</td><td>".$row['percentage4']."</td><td>".$row['cer3']."</td><td>".$row['cer4']."</td><td>".$row['ph7']."</td><td>".$row['ph3']."</td><td>".$row['JInternational']."</td></tr>";
        echo $msg;      
        $cc=$cc+1;
        }
        
    }
    echo "</table>";

    }
    ?>