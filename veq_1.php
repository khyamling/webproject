<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

session_start();
require_once 'class.user.php';
$UID = $_SESSION['Mid'];
$vapn=$_SESSION['vappn'];
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
    //database for 7.academic-dactoral degree(Ph.D details).


$sql =  "SELECT * FROM eq1page WHERE appn='$vapn'";
$result1 =  mysqli_query($link, $sql);
$row=$result1->fetch_array();
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
    $post="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000";
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
else if($branch=="CH")
{   
$branch="Chemistry";}
else if($branch=="CE")
{   
    $branch="Civil Engineering";
}
else if($branch=="CS")
{   
    $branch="Computer Science & Engineering";
}
else if($branch=="EE")
{   
    $branch=" Electrical and Electronics Engineering";
}
else if($branch=="ECE")
{   
    $branch="Electronics and Communication Engineering";
    }
else if($branch=="IT")
{   
    $branch="Information Technology";
    }
else if($branch=="MC")
{   
    $branch="Mathematical And Computational Sciences";
    }
else if($branch=="ME")
{   
    $branch="Mechanical Engineering";
    }
else if($branch=="MM")
{   
    $branch="Metallurgical and Materials Engineering";
    }
else if($branch=="MNE")
{   
    $branch="Mining Engineering";
    }
else if($branch=="PH")
{   
    $branch=" Physics";
    }
else if($branch=="SM")
{   
    $branch="School of  Management";
}
 


if($result1!=null && $result2!=null)
{

      

        //echo "Records added successfully. ";

    } else{

        echo " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);

    ?>

<html>
    <head>
        <style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
        <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="assets/datepicker.js"></script> 
        <script type="text/javascript" src="assets/timepicker.js"></script> 
        <link rel="stylesheet" type="text/css" href="assets/runnable.css" /> 
        
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
                       <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                         <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                         <link rel="stylesheet" href="assets/resources.css" />
                        <script>
                         $(function() {
                      $( "#datepicker" ).datepicker();
                      $( "#datepicker1" ).datepicker();
                       $( "#datepicker2" ).datepicker();
                        $( "#datepicker3" ).datepicker();
                        $( "#datepicker4" ).datepicker();
                      $( "#datepicker5" ).datepicker();
                       $( "#datepicker6" ).datepicker();
                        $( "#datepicker7" ).datepicker();
                        $( "#datepicker8" ).datepicker();
                      $( "#datepicker9" ).datepicker();
                       $( "#datepicker10" ).datepicker();
                        $( "#datepicker11" ).datepicker();
                         $( "#datepicker12" ).datepicker();
                         $( "#datepicker13" ).datepicker();
                         $( "#datepicker14" ).datepicker();
                         $( "#datepicker15" ).datepicker();
                         $( "#datepicker16" ).datepicker();
                         $( "#datepicker17" ).datepicker();
                         $( "#datepicker18" ).datepicker();
                         $( "#datepicker19" ).datepicker();
                         $( "#datepicker20" ).datepicker();
                         $( "#datepicker21" ).datepicker();
                         $( "#datepicker22" ).datepicker();
                         $( "#datepicker23" ).datepicker();
                         $( "#datepicker24" ).datepicker();
                         $( "#datepicker25" ).datepicker();
                         $( "#datepicker26" ).datepicker();
                         $( "#datepicker27" ).datepicker();
                         $( "#datepicker28" ).datepicker();
                         $( "#datepicker29" ).datepicker();
                         $( "#datepicker30" ).datepicker();
                         $( "#datepicker31" ).datepicker();
                         $( "#datepicker32" ).datepicker();
                         $( "#datepicker33" ).datepicker();
                          });
                                  </script> 
 
   <script language="JavaScript" type="text/javascript">

        function GetDays(){
                var dropdt = new Date(document.getElementById("datepicker14").value);
                var pickdt = new Date(document.getElementById("datepicker15").value);
                var diff_date =   pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal(){
        if(document.getElementById("datepicker14")){
            document.getElementById("numdays").value=GetDays();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays1(){
                var dropdt = new Date(document.getElementById("datepicker16").value);
                var pickdt = new Date(document.getElementById("datepicker17").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal1(){
        if(document.getElementById("datepicker16")){
            document.getElementById("numdays1").value=GetDays1();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays2(){
                var dropdt = new Date(document.getElementById("datepicker18").value);
                var pickdt = new Date(document.getElementById("datepicker19").value);
                var diff_date =   pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal2(){
        if(document.getElementById("datepicker18")){
            document.getElementById("numdays2").value=GetDays2();
        }  
    }
    </script>
<script language="JavaScript" type="text/javascript">
        function GetDays3(){
                var dropdt = new Date(document.getElementById("datepicker20").value);
                var pickdt = new Date(document.getElementById("datepicker21").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal3(){
        if(document.getElementById("datepicker20")){
            document.getElementById("numdays3").value=GetDays3();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays4(){
                var dropdt = new Date(document.getElementById("datepicker22").value);
                var pickdt = new Date(document.getElementById("datepicker23").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal4(){
        if(document.getElementById("datepicker22")){
            document.getElementById("numdays4").value=GetDays4();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays5(){
                var dropdt = new Date(document.getElementById("datepicker24").value);
                var pickdt = new Date(document.getElementById("datepicker25").value);
                var diff_date = pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal5(){
        if(document.getElementById("datepicker24")){
            document.getElementById("numdays5").value=GetDays5();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays6(){
                var dropdt = new Date(document.getElementById("datepicker26").value);
                var pickdt = new Date(document.getElementById("datepicker27").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal6(){
        if(document.getElementById("datepicker26")){
            document.getElementById("numdays6").value=GetDays6();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays7(){
                var dropdt = new Date(document.getElementById("datepicker28").value);
                var pickdt = new Date(document.getElementById("datepicker29").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal7(){
        if(document.getElementById("datepicker28")){
            document.getElementById("numdays7").value=GetDays7();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays8(){
                var dropdt = new Date(document.getElementById("datepicker30").value);
                var pickdt = new Date(document.getElementById("datepicker31").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal8(){
        if(document.getElementById("datepicker30")){
            document.getElementById("numdays8").value=GetDays8();
        }  
    }      
</script>
<script language="JavaScript" type="text/javascript">

        function GetDays9(){
                var dropdt = new Date(document.getElementById("datepicker32").value);
                var pickdt = new Date(document.getElementById("datepicker33").value);
                var diff_date =  pickdt-dropdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  (Math.floor(num_days)+"days:"+Math.floor(num_months)+"Months:"+Math.floor(num_years)+"Years");
        }
         function cal9(){
        if(document.getElementById("datepicker32")){
            document.getElementById("numdays9").value=GetDays9();
        }  
    }      
    function validateform(){ 
var Page5=document.myform.Page5.value; 
var Page6=document.myform.Page6.value;
var Page7=document.myform.Page7.value;
var Page8=document.myform.Page8.value;
var Page11=document.myform.Page11.value;
var Page12=document.myform.Page12.value;
var Page17=document.myform.Page17.value;
var Page18=document.myform.Page18.value;
var Page19=document.myform.Page19.value;
var Page22=document.myform.Page22.value;
var Page23=document.myform.Page23.value;
var Page24=document.myform.Page24.value;
var Page25=document.myform.Page25.value;
var Page26=document.myform.Page26.value;
var Page27=document.myform.Page27.value;
var Page28=document.myform.Page28.value;
var Page29=document.myform.Page29.value;
var Page30=document.myform.Page30.value;
var Page31=document.myform.Page31.value;
var Page32=document.myform.Page32.value;
var Page33=document.myform.Page33.value;
var Page34=document.myform.Page34.value;
var Page35=document.myform.Page35.value;
var Page36=document.myform.Page36.value;
var Page37=document.myform.Page37.value;
var Page41=document.myform.Page41.value;
var Page42=document.myform.Page42.value;
var Page43=document.myform.Page43.value;
var Page44=document.myform.Page44.value;
var Page45=document.myform.Page45.value;
var Page46=document.myform.Page46.value;
var Page47=document.myform.Page47.value;
var Page48=document.myform.Page48.value;
var Page49=document.myform.Page49.value; 

if (Page5==null || Page5==""){ 
  alert("select applicant name"); 
  return false; 
}else if(Page6==null || Page6==""){ 
  alert("select father name"); 
  return false; 
  } else if(Page7=null || Page7==""){ 
  alert("select Spouse name"); 
  return false; 
  } else if(Page8=null || Page8==""){ 
  alert("select gender checkbox"); 
  return false; 
  }else if(Page11=null || Page11==""){ 
  alert("select Marital status checkbox"); 
  return false; 
  }else if(Page12=null || Page12==""){ 
  alert("select category status checkbox"); 
  return false; 
  } else if(Page17=null || Page17==""){ 
  alert("select attested copy yes/no"); 
  return false; 
  }  else if(Page18=null || Page18==""){ 
  alert("select percentage of disability"); 
  return false; 
  }else if(Page19==null || Page19==""){ 
  alert("select PWD value"); 
  return false; 
  }else if(Page22==null || Page22==""){ 
  alert("input perment Address line1"); 
  return false; 
  }else if(Page23==null || Page23==""){ 
  alert("input perment Address line2"); 
  return false; 
  }else if(Page24==null || Page24==""){ 
  alert("input perment Address line3"); 
  return false; 
  } else if(Page25==null || Page25==""){ 
  alert("input perment Address city"); 
  return false; 
  }else if(Page26==null || Page26==""){ 
  alert("input perment Address pin code"); 
  return false; 
  }else if(Page27==null || Page27==""){ 
  alert("input perment Address pin code"); 
  return false; 
  }else if(Page28==null || Page28==""){ 
  alert("input correspndence Address line1"); 
  return false; 
  } else if(Page29==null || Page29==""){ 
  alert("input correspndence Address line2"); 
  return false; 
  } else if(Page30==null || Page30==""){ 
  alert("input correspndence Address line3"); 
  return false; 
  }else if(Page31==null || Page31==""){ 
  alert("input correspndence Address city"); 
  return false; 
  }else if(Page32==null || Page32==""){ 
  alert("input correspndence Address pin code"); 
  return false; 
  }else if(Page33==null || Page33==""){ 
  alert("input correspndence Address state"); 
  return false; 
  }else if(Page34==null || Page34==""){ 
  alert("input correspndence Address mobiel no"); 
  return false; 
  } else if(Page35==null || Page35==""){ 
  alert("input office no"); 
  return false; 
  } else if(Page35==null || Page35==""){ 
  alert("input  residual no"); 
  return false; 
  }else if(Page37==null || Page37==""){ 
  alert("input email id"); 
  return false; 
  }else if(Page41==null || Page41==""){ 
  alert("input nationality"); 
  return false; 
  }else if(Page42==null || Page42==""){ 
  alert("input Designation"); 
  return false; 
  }else if(Page43==null || Page43==""){ 
  alert("input organization"); 
  return false; 
  }else if(Page44==null || Page44==""){ 
  alert("input Date of Joining"); 
  return false; 
  }else if(Page45==null || Page45==""){ 
  alert("input scale of pay for past post"); 
  return false; 
  }else if(Page46==null || Page46==""){ 
  alert("input scale of AGP/GP for past post"); 
  return false; 
  }else if(Page47==null || Page47==""){ 
  alert("input current basic pay for past post"); 
  return false; 
  }else if(Page48==null || Page48==""){ 
  alert("input Total emolumenets for past post"); 
  return false; 
  }else if(Page49==null || Page49==""){ 
  alert("input area of specialization"); 
  return false; 
  }                                                        
 
}  

</script>
<script>
    
        $(function() {
                 
                $("#json-one").change(function() {
           
                var $dropdown = $(this);
           
                $.getJSON("data.json", function(data) {
               
                    var key = $dropdown.val();
                    var vals = [];
                                       
                    switch(key) {
                        case 'Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments':
                            vals = data.P1.split(",");
                            break;
                        case 'Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000':
                            vals = data.P2.split(",");
                            break;
                                                case 'Assistant Professor PB-3 with Grade pay of Rs.8000':
                            vals = data.P3.split(",");
                            break;
                                                case 'Associate Professor PB-4 with Grade pay of Rs.9500':
                            vals = data.P4.split(",");
                            break;   
                                                case 'Professor PB-4 with Grade pay of Rs.10500':
                            vals = data.P5.split(",");
                            break;
                                                case 'Professor HAG Scale Rs.67000 to 79000':
                            vals = data.P6.split(",");
                            break;           
                                                   
                        case 'base':
                            vals = ['Please choose from Post Applied'];
                    }
                   
                    var $jsontwo = $("#json-two");
                    $jsontwo.empty();
                    $.each(vals, function(index, value) {
                        $jsontwo.append("<option>" + value + "</option>");
                    });
           
                });
            });

        });
                </script>
    </head>
    <body>
       
            <tr>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="home.php">Home</a>
                    <div class="nav-collapse collapse">
                       <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $UID; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">

                                                        
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <form action="home.php" method="post" name="f1" >

           <div class="form1">
                        <hr algn="left" width="88%">  

       
      <table CELLPADDING=10 cellspacing="10" > 
   <tr>
       <td >
          Advertisement No.
       </td> 
       
        <td>
            <input type="text" size="40" maxlength="100"  name="Page1" value="<?php echo $row['Page1']; ?>" readonly />
       </td>
       <td >
          Application No.
       </td> 
       
        <td>
            <input type="text" size="40" maxlength="100"  name="Page1" value="<?php echo $vapn?>" readonly />
       </td>
     </tr>
     </table>
     <table CELLPADDING=10 cellspacing="10">
          <tr>
         <td >
          Post Applied.
       </td>
          
         <td>
          <input type="text" style="width: 450px;"  name="Page2" value="<?php echo $post; ?>" readonly />                       
       </td>
       <td style="border-bottom:1px;border-bottom-left-radius:1px; " rowspan="4"> 
           <?php $thumb_src = "uploads/1.jpeg";
 ?>
  <?php if($thumb_src != ''){ 
 //echo $thumb_src;
      ?>
<img style="width:180px;height:200px;" src="<?php echo $thumb_src; ?>" alt="">
<?php } ?>
  </td>
          </tr>
          <tr>
       <td align="left">
            AGP:  </td>
       <td><input type="text" style="width: 150px;"  name="Page3" value="<?php echo $agp; ?>" readonly />                        </td>
          </tr>
          <tr>
       <td align="left">
          Department
       </td>
         <td>
          <input type="text" style="width: 250px;"  name="Page4" value="<?php echo $branch; ?>" readonly />                       
      </td>
    </tr>        
     
      
 <tr>
     <td align="">
           1.  Name in Full 
     </td>
 
     <td>
         <input type="text" style="width: 450px;"  name="Page5" value="<?php echo $row['Page5']; ?>" readonly />                       
         </td>
     </table>
                        <table CELLPADDING=10 cellspacing="10" >
         </tr>
 <tr>
 
            <td >
              a) Father Name
       </td>
        <td>
          <input name="Page6" type="text" value="<?php echo $row['Page6']; ?>" readonly />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
     <td align="center">
         &nbsp;&nbsp;&nbsp; Spouse Name
     </td>
     <td>
         <input type="text"  size="25" maxlength="100" name="Page7" value="<?php echo $row['Page7']; ?>" readonly />
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr>
 <td align="right">
      b) Gender
 </td>

 <td>
     <input type="text"  style="width:70px" maxlength="100" name="Page8" value="<?php echo $row['Page8']; ?>" readonly />
 </td>
 <td align="">
     c) Marital Status 
         <input type="text"  size="25" maxlength="100" name="Page11" value="<?php echo $row['Page11']; ?>" readonly />
 </td>
 
<td align="">
     d) Category 
              <input type="text"  size="25" maxlength="100" name="Page12" value="<?php echo $row['Page12']; ?>" readonly />
</td>   
</tr>
</table>   

        
               
           <table CELLPADDING="5" cellspacing="5">
 <tr>
            <td>  &nbsp;&nbsp;&nbsp;e) Attested copy certificate enclosed(Yes/No) (only in case of SC/St/OBC)           <input type="text"  size="25" style="width: 50px;" name="Page17" value="<?php echo $row['Page17']; ?>" readonly /><td>
    
 </tr>
 <tr>
     <td>     &nbsp;&nbsp;&nbsp;   f) Percentage of Disability of PWD candidate  <input type="text" name="Page18" style="width: 75px;" value="<?php echo $row['Page18']; ?>" readonly />
         <input type="text" name="Page19" style="width: 75px;" value="<?php echo $row['Page19']; ?>" readonly /> </td>
        </tr>
           </table>
               <table CELLPADDING="5" cellspacing="10">
     <tr>
         <td>
      2. Address:       </td></tr>
      <tr>
     <td align="">  
         (a) Permanent:  </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp;</td> <td colspan="2"> (b) Address for Correspondence:  </td>   </tr>
      
      <tr>
          <td> Address Line1 </td> <td><input type="text" name="Page22" value="<?php echo $row['Page22']; ?>" readonly />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td > Address Line1 </td> <td><input type="text" name="Page28" value="<?php echo $row['Page28']; ?>" readonly />  </td> </tr>
               <tr>
          <td>Address Line2 </td><td> <input type="text" name="Page23" value="<?php echo $row['Page23']; ?>" readonly /> </td>  <td>&nbsp;&nbsp;&nbsp;</td>  <td>Address Line2 </td><td> <input type="text" name="Page29" value="<?php echo $row['Page29']; ?>" readonly /> </td> </tr>
               <tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="<?php echo $row['Page24']; ?>" readonly /> </td> <td>&nbsp;&nbsp;&nbsp;</td>  <td> Address Line3 </td> <td> <input type="text" name="Page30" value="<?php echo $row['Page30']; ?>" readonly /> </td></tr>
      <tr><td>      City  </td> <td>  <input type="text" name="Page25" value="<?php echo $row['Page25']; ?>" readonly /> </td>  <td>&nbsp;&nbsp;&nbsp;</td> <td> City  </td> <td>  <input type="text" name="Page31" value="<?php echo $row['Page31']; ?>" readonly /> </td></tr>
                <tr><td>      Pin Code</td> <td>  <input type="text" name="Page26" value="<?php echo $row['Page26']; ?>" readonly />  </td> <td>&nbsp;&nbsp;&nbsp;</td> <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="<?php echo $row['Page32']; ?>" readonly /> </td>  </tr>
                <tr><td>     State </td> <td>  <input type="text" name="Page27" value="<?php echo $row['Page27']; ?>" readonly /></td> <td>&nbsp;&nbsp;&nbsp;</td><td>     State </td> <td>  <input type="text" name="Page33" value="<?php echo $row['Page33']; ?>" readonly /></td> </tr>
                <tr> <td></td> <td></td><td></td><td>Mobile</td> <td><input type="text" name="Page34" value="<?php echo $row['Page34']; ?>" readonly /> </td></tr>
                <tr><td></td> <td></td><td></td> <td>Telephone(with STD code)office </td> <td><input type="text" name="Page35"value="<?php echo $row['Page35']; ?>" readonly /></td></tr>
                <tr> <td></td> <td></td><td></td><td>  Telephone(with STD code) Res. No.</td> <td><input type="text" name="Page36" value="<?php echo $row['Page36']; ?>" readonly /> </td></tr>
           <tr> <td></td> <td></td><td></td>    <td>   Email</td> <td><input type="text" name="Page37" value="<?php echo $row['Page37']; ?>" readonly /></td></tr>
               </table>
               <table >
         
                   <td>  <b>   3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp; </b></td>
    
            <td>
        
            <td>  <input style="width: 100px;" type="text" name="Page38" value="<?php echo $row['Page38']; ?>" readonly /> </td>
            
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> <b>&nbsp;&nbsp; 3 &nbsp;&nbsp;(b) Nationality  </b></td>  
    
     <td>
         <input type="text" name="Page41" value="<?php echo $row['Page41']; ?>" readonly />
     </td>
        </tr>
 
               </table>
                                                 <hr align="left" width="88%">  
     
               <table CELLPADDING="5" cellspacing="5">
         <tr>
         </tr>
         <tr>
     <td> 
         <b> 4. Present Employment:  </b></td>  </tr>
         <tr><td> Designation </td><td><input type="text" name="Page42"  value="<?php echo $row['Page42']; ?>" readonly  size="40" maxlength="40"/> </td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Organization </td><td><input type="text" name="Page43"  value="<?php echo $row['Page43']; ?>" readonly  size="40" maxlength="80" /> </td> 
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Joining to the present post </td><td><input type="text" id="start_dt1" class='datepicker' size='15'  value="<?php echo $row['Page44']; ?>" readonly   name="Page44" />  </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45"  value="<?php echo $row['Page45']; ?>" readonly size="40" maxlength="80" /> </td> 
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGP/GP </td><td> <input type="text" name="Page46"  value="<?php echo $row['Page46']; ?>" readonly  placeholder="AGP/GP:(if applicable)" size="40" maxlength="80"/> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Basic pay Rs. </td><td> <input type="text" name="Page47"  value="<?php echo $row['Page4']; ?>" readonly  size="40" maxlength="80"/> </td> </tr>
       <tr><td> Total Emoluments <br>(per month) Rs. </td><td> <input type="text" name="Page48"  value="<?php echo $row['Page48']; ?>" readonly  size="40" maxlength="80"/> </td></tr> 
       </table>
                                                                   <hr align="left" width="88%">  

                                                 <table>
                                                     <tr>  <td> <b> 5. Areas of specializations: </b>
                                                         </td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" size="40" maxlength="150" name="Page49" value="<?php echo $row['Page49']; ?>" style="width:720px;"/> </td>
        </tr>
               </table>
               <hr align="left" width="88%" >      
               <b> 6. Academic Career Record starting with SSLC:  (Upload photocopies)</b>
  <br>
  <br>
   
    <table CELLPADDING=2 cellspacing="5" width="50%">
    <tr>
        <th >Certificate/Degree<br>[UG/PG]<br></td>
        <th >year</td>
        <th >School/College</td>
        <th >Board/University <br></td>
        <th >Class/<br>Division</td>
        <th >Percentage/<br>    CGPA</td>
        <th >Remarks/<br>Status</td>
    </tr>
    <?php 
    if($row['cer1']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer1'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="e12" value="<?php echo $row['year1'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school1'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board1'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class1'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage1'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status1'];?> " readonly style="width:100px;" ></td>
    </tr>
    <?php
    
    }

     if($row['cer2']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer2'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year2'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school2'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board2'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class2'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage2'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status2'];?> " readonly style="width:100px;" ></td>
    </tr>
      <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer3'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year3'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school3'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board3'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class3'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage3'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status3'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer4'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year4'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school4'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board4'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class4'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage4'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status4'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer5'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year5'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school5'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board5'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class5'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage5'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status5'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer6'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year6'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school6'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board6'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class6'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage6'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status6'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
   <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer7'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year7'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school7'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['boar7'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class7'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage7'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status7'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer8'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year8'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school8'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board8'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class8'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage8'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status8'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer9'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year9'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school9'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board9'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class9'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage9'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status9'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

     if($row['cer3']!="")
    {
        ?>
    <tr>
        <td ><input type="text" name="e11" value="<?php echo $row['cer10'];?> "readonly/> </td>
        <td >  <input type="text" size="40" name="Page49" value="<?php echo $row['year10'];?> "readonly> </td>
        <td ><input type="text" name="e13" value="<?php echo $row['school10'];?> "readonly ></td>
        <td ><input type="text" name="e14" value="<?php echo $row['board10'];?> "readonly ></td>
        <td ><input type="text" name="e15" value="<?php echo $row['class10'];?> "readonly  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" value="<?php echo $row['percentage10'];?> "readonly style="width:80px;" ></td>
        <td ><input type="text" name="e17" value="<?php echo $row['status10'];?> " readonly style="width:100px;" ></td>
    </tr>
     <?php
    
    }

        ?>
    </table>
  <hr>
            <table CELLPADDING=10 cellspacing="10"> 
            
                <tr> <p><b>Essential Qualification </b></p>
                
            <hr>
 <b> 7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
     <br><br>
  
  <table style="table-layout: fixed;" cellpadding="1" cellspacing="" >
                <tr >
                    <td>Thesis Title</td>
                   <td>From Date</td>
                  <td>To Date</td>
                  <td>Institute/University</td>
                    <td>Guide/Mentor</td>
                    <td>Mode(Full/Part time)</td>
                    <td>Final Viva Date</td>
                    <td>Award Date</td>
                </tr>
                
 <tr>
                    <td><textarea name="ph1" rows="1" cols="30" readonly><?php echo $_POST['ph1']; ?></textarea>
                        <!-- <input tyep="text"  rows="1" cols="30" input type="text" name="ph1" value="<?php echo $row['Page48']; ?>" readonly /> -->
                        </td> 
                    <td>
                       <input type="text" name="ph2"  style="width:80px;" value="<?php echo $_POST["ph2"]; ?>" readonly />   </td> 
                    <td> 
                       <input type="text" name="ph3" style="width:80px;" value="<?php echo $_POST["ph3"]; ?>" readonly />    </td> 
                    <td ><input type="text" name="ph4" class="form-control" size="40" value="<?php echo $_POST["ph4"]; ?>" readonly /> </td> 
                    <td><input type="text" name="ph5" class="form-control" size="30" value="<?php echo $_POST["ph5"]; ?>" readonly />  </td> 
                    <td align='center'> <input tyep="text"  name="ph6" style="width:100px;" value="<?php echo $_POST["ph6"]; ?>" readonly/> 
                          </td> 
                    <td><input type="text" name="ph7"  style="width:100px;" value="<?php echo  $_POST["ph7"]; ?>" readonly />  </td> 
                      <td><input type="text"  name="ph8"  style="width:100px;" value="<?php echo $_POST["ph8"]; ?>" readonly /> </td> 
                </tr>
            </table> 
 <hr>
     <b>8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>
      <table   >
               
                <tr >
                    <td>Career </td>
                   <td>From Date</td>
                  <td>To Date</td>
                  <td>Institute/Organization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr>
                   <?php


     if($row1['career1']!="")
    {
        ?>
  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" readonly><?php echo $row1['career1']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  name="pd12"  style="width:100px;" value="<?php echo $row1['postdocfromdate1']; ?>" readonly /> </td> 
                    <td><input type="text"  name="pd13"  style="width:100px;" value="<?php echo $row1['postdoctodate1']; ?>" readonly />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['postdocinstitute1']; ?>" readonly />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['postdocguide1'];?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['postdocresearch1']; ?>" readonly /> </td> 
                      </tr>
                   <?php
    }

    if($row1['career2']!="")
    {
        ?>
  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" readonly><?php echo $row1['career2']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  name="pd12"  style="width:100px;" value="<?php echo $row1['postdocfromdate2']; ?>" readonly /> </td> 
                    <td><input type="text"  name="pd13"  style="width:100px;" value="<?php echo $row1['postdoctodate2']; ?>" readonly />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['postdocinstitute2']; ?>" readonly />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['postdocguide2'];?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['postdocresearch2']; ?>" readonly /> </td> 
                      </tr>
                   <?php
    }
    if($row1['career3']!="")
    {
        ?>
  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" readonly><?php echo $row1['career3']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  name="pd12"  style="width:100px;" value="<?php echo $row1['postdocfromdate3']; ?>" readonly /> </td> 
                    <td><input type="text"  name="pd13"  style="width:100px;" value="<?php echo $row1['postdoctodate3']; ?>" readonly />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['postdocinstitute3']; ?>" readonly />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['postdocguide3'];?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['postdocresearch3']; ?>" readonly /> </td> 
                      </tr>
                   <?php
    }
    if($row1['career4']!="")
    {
        ?>
  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" readonly><?php echo $row1['career4']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  name="pd12"  style="width:100px;" value="<?php echo $row1['postdocfromdate4']; ?>" readonly /> </td> 
                    <td><input type="text"  name="pd13"  style="width:100px;" value="<?php echo $row1['postdoctodate4']; ?>" readonly />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['postdocinstitute4']; ?>" readonly />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['postdocguide4'];?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['postdocresearch4']; ?>" readonly /> </td> 
                      </tr>
                   <?php
    }if($row1['career5']!="")
    {
        ?>
  <tr>                    <td> <textarea name="pd11" rows="1" cols="30" readonly><?php echo $row1['career5']; ?></textarea>                    
                        </td> 
                    <td><input type="text"  name="pd12"  style="width:100px;" value="<?php echo $row1['postdocfromdate5']; ?>" readonly /> </td> 
                    <td><input type="text"  name="pd13"  style="width:100px;" value="<?php echo $row1['postdoctodate5']; ?>" readonly />  </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40" value="<?php echo $row1['postdocinstitute5']; ?>" readonly />  </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30" value="<?php echo $row1['postdocguide5'];?>" readonly /> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30" value="<?php echo $row1['postdocresearch5']; ?>" readonly /> </td> 
                      </tr>
                   <?php
    }
    ?>
       
            </table>
                 
    <hr align="left" width="88%">                      
     
             <b>   9. National/State/Others - Test Scores/Ranks (Upload photocopies)  </b>
             <br>
             <br>

                 <table style="table-layout: fixed;"border="0.5" cellpadding="1" cellspacing="" >
               <tr >
                    <td>Examination </td>
                   <td>Year</td>
                  <td>Branch/Area of Specialization</td>
                  <td>Score</td>
                    <td>Rank</td>
                    <td>Percentile</td>
                    <?php
    if($row['examination1']!="")    {
        ?>
                </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"> <?php echo $row['examination1']; ?> </textarea> </td> 
                    <td> <input type="text" name="nt13" value="<?php echo $row['testyear1']; ?>" readonly size="50">  </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch1']; ?>" readonly> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score1']; ?>" readonly> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank1']; ?>" readonly> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile1']; ?>" readonly> </td> 
                    
                </tr>
          
    <?php
    
    }
    if($row['examination2']!="")    {
        ?>
                 </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"> <?php echo $row['examination2']; ?> </textarea> </td> 
                    <td> <input type="text" name="nt13" value="<?php echo $row['testyear2']; ?>" readonly size="50">  </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch2']; ?>" readonly> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score2']; ?>" readonly> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank2']; ?>" readonly> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile2']; ?>" readonly> </td> 
                    
                </tr>
    <?php
    
    }
    if($row['examination3']!="")    {
        ?>
                 </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"> <?php echo $row['examination3']; ?> </textarea> </td> 
                    <td> <input type="text" name="nt13" value="<?php echo $row['testyear3']; ?>" readonly size="50">  </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch3']; ?>" readonly> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score3']; ?>" readonly> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank3']; ?>" readonly> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile3']; ?>" readonly> </td> 
                    
                </tr>
                
                 <?php
    
    }
    if($row['examination4']!="")    {
        ?>
                 </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"> <?php echo $row['examination4']; ?> </textarea> </td> 
                    <td> <input type="text" name="nt13" value="<?php echo $row['testyear4']; ?>" readonly size="50">  </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch4']; ?>" readonly> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score4']; ?>" readonly> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank4']; ?>" readonly> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile4']; ?>" readonly> </td> 
                    
                </tr>
                 <?php
    
    }
    if($row['examination5']!="")    {
        ?>
                 </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"> <?php echo $row['examination5']; ?> </textarea> </td> 
                    <td> <input type="text" name="nt13" value="<?php echo $row['testyear5']; ?>" readonly size="50">  </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"  value="<?php echo $row['branch5']; ?>" readonly> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"  value="<?php echo $row['score5']; ?>" readonly> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['rank5']; ?>" readonly> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"  value="<?php echo $row['percentile5']; ?>" readonly> </td> 
                    
                </tr>
                
                <?php
    
    }
    ?>
                
                 </table>
                  
                   <hr align="left" width="83%">      <p>
    
         <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b>
         <br>
         <br>
           
                         <table  width="60%" style=" text-align:center;" >
    <thead>
        <tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining</td> <td>Date of Leaving</td> <td>Number of Months/Years</td> <td>Scale of Pay & GP/AGP(If applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
         <?php
     if($row['E11']!="")
    {
        ?>
        <tr>
            <td><input type="text" size="30" name="E11" value="<?php echo $row['E11']; ?>" readonly></td>
            <td><input type="text" size="30" name="E12" value="<?php echo $row['E12']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E13" onchange="cal()"  style="width:100px;" value="<?php echo $row['E13']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E14" onchange="cal()" style="width:100px;" value="<?php echo $row['E14']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E15" style="width:150px;" value="<?php echo $row['E15']; ?>" readonly></td>
            <td><input type="text" size="10" name="E16"  style="width:100px;" value="<?php echo $row['E16']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E17"  style="width:100px;" value="<?php echo $row['E17']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E21']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E21" value="<?php echo $row['E21']; ?>" readonly></td>
            <td><input type="text" size="30" name="E22" value="<?php echo $row['E22']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E23" onchange="cal()"  style="width:100px;" value="<?php echo $row['E23']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E24" onchange="cal()" style="width:100px;" value="<?php echo $row['E24']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E25" style="width:150px;" value="<?php echo $row['E25']; ?>" readonly></td>
            <td><input type="text" size="10" name="E26"  style="width:100px;" value="<?php echo $row['E26']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E27"  style="width:100px;" value="<?php echo $row['E27']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
    }

    if($row['E31']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E31" value="<?php echo $row['E31']; ?>" readonly></td>
            <td><input type="text" size="30" name="E32" value="<?php echo $row['E32']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E33" onchange="cal()"  style="width:100px;" value="<?php echo $row['E33']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E34" onchange="cal()" style="width:100px;" value="<?php echo $row['E34']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E35" style="width:150px;" value="<?php echo $row['E35']; ?>" readonly></td>
            <td><input type="text" size="10" name="E36"  style="width:100px;" value="<?php echo $row['E36']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E37"  style="width:100px;" value="<?php echo $row['E37']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E41']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E41" value="<?php echo $row['E41']; ?>" readonly></td>
            <td><input type="text" size="30" name="E42" value="<?php echo $row['E42']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E43" onchange="cal()"  style="width:100px;" value="<?php echo $row['E43']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E44" onchange="cal()" style="width:100px;" value="<?php echo $row['E44']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E45" style="width:150px;" value="<?php echo $row['E45']; ?>" readonly></td>
            <td><input type="text" size="10" name="E46"  style="width:100px;" value="<?php echo $row['E46']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E47"  style="width:100px;" value="<?php echo $row['E47']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E51']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E51" value="<?php echo $row['E51']; ?>" readonly></td>
            <td><input type="text" size="30" name="E52" value="<?php echo $row['E52']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E53" onchange="cal()"  style="width:100px;" value="<?php echo $row['E53']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E54" onchange="cal()" style="width:100px;" value="<?php echo $row['E54']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E55" style="width:150px;" value="<?php echo $row['E55']; ?>" readonly></td>
            <td><input type="text" size="10" name="E56"  style="width:100px;" value="<?php echo $row['E56']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E57"  style="width:100px;" value="<?php echo $row['E57']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E61']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E61" value="<?php echo $row['E61']; ?>" readonly></td>
            <td><input type="text" size="30" name="E62" value="<?php echo $row['E62']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E63" onchange="cal()"  style="width:100px;" value="<?php echo $row['E63']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E64" onchange="cal()" style="width:100px;" value="<?php echo $row['E64']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E65" style="width:150px;" value="<?php echo $row['E65']; ?>" readonly></td>
            <td><input type="text" size="10" name="E66"  style="width:100px;" value="<?php echo $row['E66']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E67"  style="width:100px;" value="<?php echo $row['E67']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E71']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E71" value="<?php echo $row['E71']; ?>" readonly></td>
            <td><input type="text" size="30" name="E72" value="<?php echo $row['E72']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E73" onchange="cal()"  style="width:100px;" value="<?php echo $row['E73']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E74" onchange="cal()" style="width:100px;" value="<?php echo $row['E74']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E75" style="width:150px;" value="<?php echo $row['E75']; ?>" readonly></td>
            <td><input type="text" size="10" name="E76"  style="width:100px;" value="<?php echo $row['E76']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E77"  style="width:100px;" value="<?php echo $row['E77']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E81']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E81" value="<?php echo $row['E81']; ?>" readonly></td>
            <td><input type="text" size="30" name="E82" value="<?php echo $row['E82']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E83" onchange="cal()"  style="width:100px;" value="<?php echo $row['E83']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E84" onchange="cal()" style="width:100px;" value="<?php echo $row['E84']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E85" style="width:150px;" value="<?php echo $row['E85']; ?>" readonly></td>
            <td><input type="text" size="10" name="E86"  style="width:100px;" value="<?php echo $row['E86']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E87"  style="width:100px;" value="<?php echo $row['E87']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E91']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E91" value="<?php echo $row['E91']; ?>" readonly></td>
            <td><input type="text" size="30" name="E92" value="<?php echo $row['E92']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E93" onchange="cal()"  style="width:100px;" value="<?php echo $row['E93']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E94" onchange="cal()" style="width:100px;" value="<?php echo $row['E94']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E95" style="width:150px;" value="<?php echo $row['E95']; ?>" readonly></td>
            <td><input type="text" size="10" name="E96"  style="width:100px;" value="<?php echo $row['E96']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E97"  style="width:100px;" value="<?php echo $row['E97']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
    }

    if($row['E101']!="")
    {
        ?>

      <tr>
            <td><input type="text" size="30" name="E101" value="<?php echo $row['E101']; ?>" readonly></td>
            <td><input type="text" size="30" name="E102" value="<?php echo $row['E102']; ?>" readonly> </td>
            <td> <input type="text" id="datepicker14"  name="E103" onchange="cal()"  style="width:100px;" value="<?php echo $row['E103']; ?>" readonly /> </td>
            <td><input type="text"  id="datepicker15" name="E104" onchange="cal()" style="width:100px;" value="<?php echo $row['E104']; ?>" readonly></td>
            <td><input type="text" class="textbox" id="numdays" name="E105" style="width:150px;" value="<?php echo $row['E105']; ?>" readonly></td>
            <td><input type="text" size="10" name="E106"  style="width:100px;" value="<?php echo $row['E106']; ?>" readonly> </td>
            <td><input type="text" size="10" name="E107"  style="width:100px;" value="<?php echo $row['E107']; ?>" readonly></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

  <?php
    
    }
    ?>
         </tbody>
           
</table>
        
                <hr align="left" width="83%">      <p>

     <b>11. Total Experience (Number of Years and/or months)  </b>      
     <br><br>                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
       <?php
       if($row['teachingexp']!="")
       {
        ?>
        <td>
          <input name="teachingexp" type="text"  size="25"  value="<?php echo $row['teachingexp']; ?>" readonly>
       <?php
       }
       ?>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post-PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
         <?php
        if($row['researchexp']!="")
       {
        ?>
        <td>
          <input name="researchexp" type="text"  size="25" value="<?php echo $row['researchexp']; ?>" readonly>

       </td>
        <?php
       }
       ?>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <?php
       if($row['industryexp']!="")
       {
        ?>
        <td>
          <input name="industryexp" type="text" maxlength="100" size="25" value="<?php echo $row['industryexp']; ?>" readonly>
 <?php
       }
       ?>
       </td>
    </tr>
        
    
  
                  </table>
           
       
                     <hr align="left" width="83%">      <p>
          <b>12. Teaching Experience (Number of Years and/or months) :</b>
          &nbsp;&nbsp;&nbsp;&nbsp; <br> <br>Academic experience as applicable (month / year) in the posts indicated or equivalent
              
          
    <table border="0" cellpadding="0" cellspacing="5">
     <tr>
       <td align="right">
          <p>Assistant Professor or equivalent</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <?php
       if($row['asstprof']!="")
       {
        ?>
        <td>
          <input name="asstprof" type="text" maxlength="100" size="25" value="<?php echo $row['asstprof']; ?>" readonly>
         <!--<font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <?php
       }
       ?>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Associate Professor or equivalent</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
       <?php
       if($row['assoprofexp']!="")
       {
        ?>
        <td>
          <input name="assoprofexp" type="text" maxlength="100" size="25" value="<?php echo $row['assoprofexp']; ?>" readonly>

       </td>
       <?php
       }
       ?>
   <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Professor</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
       <?php
        if($row['profexp']!="")
            {
        ?>
        <td>
          <input name="profexp" type="text" maxlength="100" size="25" value="<?php echo $row['profexp']; ?>" readonly>

       </td>
        <?php
       }
       ?>
    </tr>
 
    
        
       </table>
            
            
                         <hr align="left" width="83%">      <p>

   <b>13. Subjects Taught (Last 4 years)</b> 
   <br><br>
                  
                <table  width="60%" style="text-align: center">
                <thead>
                     <tr><td>Title of the Course taught </td> <td>Year</td> <td>U.G. / P.G. </td> <td>Approximate no. of students</td> <td>Institution/University</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
             <?php
        if($row['E2_11']!="")
            {
        ?>
        <tr>
             <td><input type="text" size="10" name="E2_11" value="<?php echo $row['E2_11']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_12" value="<?php echo $row['E2_12']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_13" value="<?php echo $row['E2_13']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_14" value="<?php echo $row['E2_14']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_15" value="<?php echo $row['E2_15']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
             if($row['E2_21']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_21" value="<?php echo $row['E2_21']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_22" value="<?php echo $row['E2_22']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_23" value="<?php echo $row['E2_23']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_24" value="<?php echo $row['E2_24']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_25" value="<?php echo $row['E2_25']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_31']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_31" value="<?php echo $row['E2_31']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_32" value="<?php echo $row['E2_32']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_33" value="<?php echo $row['E2_33']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_34" value="<?php echo $row['E2_34']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_35" value="<?php echo $row['E2_35']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_41']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_41" value="<?php echo $row['E2_41']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_42" value="<?php echo $row['E2_42']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_43" value="<?php echo $row['E2_43']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_44" value="<?php echo $row['E2_44']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_45" value="<?php echo $row['E2_45']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_51']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_51" value="<?php echo $row['E2_51']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_52" value="<?php echo $row['E2_52']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_53" value="<?php echo $row['E2_53']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_54" value="<?php echo $row['E2_54']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_55" value="<?php echo $row['E2_55']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_61']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_61" value="<?php echo $row['E2_61']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_62" value="<?php echo $row['E2_62']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_63" value="<?php echo $row['E2_63']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_64" value="<?php echo $row['E2_64']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_65" value="<?php echo $row['E2_65']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_71']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_71" value="<?php echo $row['E2_71']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_72" value="<?php echo $row['E2_72']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_73" value="<?php echo $row['E2_73']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_74" value="<?php echo $row['E2_74']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_75" value="<?php echo $row['E2_75']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_81']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_81" value="<?php echo $row['E2_81']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_82" value="<?php echo $row['E2_82']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_83" value="<?php echo $row['E2_83']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_84" value="<?php echo $row['E2_84']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_85" value="<?php echo $row['E2_85']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_91']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_91" value="<?php echo $row['E2_91']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_92" value="<?php echo $row['E2_92']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_93" value="<?php echo $row['E2_93']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_94" value="<?php echo $row['E2_94']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_95" value="<?php echo $row['E2_95']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E2_101']!="")
             {
             ?>
        <tbody>
        <tr>
             <td><input type="text" size="10" name="E2_101" value="<?php echo $row['E2_101']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_102" value="<?php echo $row['E2_102']; ?>" readonly> </td>
            <td><input type="text" size="3" name="E2_103" value="<?php echo $row['E2_103']; ?>" readonly></td>
            <td><input type="text" size="10" name="E2_104" value="<?php echo $row['E2_104']; ?>" readonly></td>
            <td><input type="text" size="15" name="E2_105" value="<?php echo $row['E2_105']; ?>" readonly></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
             }
             ?>
              
            </table>
            
     
           
               <hr align="left" width="83%">      <p>
         
            
    <b>14. Research guidance</b> 

  <table>
    
    
        <tr><td> Completed :</td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing :</td> </tr>
    
    
         </tr>
            <tr> 
                 <td align="right">
          <p>Ph.D.</p>
       </td>
        <?php
             if($row['phdcomplete']!="")
             {
             ?>
        <td>
          <input name="phdcomplete" type="text" maxlength="100" size="25" value="<?php echo $row['phdcomplete']; ?>" readonly>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <?php
             }
             ?>
 
        <td align="right">
          <p>Ph.D.</p>
       </td>
       <?php
             if($row['phdongoing']!="")
             {
             ?>
        <td>
          <input name="phdongoing" type="text" maxlength="100" size="25" value="<?php echo $row['phdongoing']; ?>" readonly>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
         <?php
             }
             ?>
    </tr>
        
 
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
       <?php
             if($row['pgcomplete']!="")
             {
             ?>
        <td>
          <input name="pgcomplete" type="text" maxlength="100" size="25" value="<?php echo $row['pgcomplete']; ?>" readonly>

       </td>
        <?php
             }
             ?>
       <td align="right">
          <p>P.G.</p>
       </td>
        <?php
             if($row['pgongoing']!="")
             {
             ?>
        <td>
          <input name="pgongoing" type="text" maxlength="100" size="25" value="<?php echo $row['pgongoing']; ?>" readonly>

       </td>
       <?php
             }
             ?>
    </tr>    
                 </table>  
   <hr align="left" width="83%">      

      <p><b>Additional Desirable requirements</b></p>
      <h6>
        Note:  One publication in an SCI Journal.</h6>
           <hr>

        <b>15. a. Publication details - No. of Papers </b> 
        <br>     <br>     
           <table  >
             
                        <tr><td> Journal papers :</td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                        <td> Conference Publications:</td> </tr>
                    
                       </tr>  
   <tr> 
                                <td align="left">
            <p>International</p>
                        </td>
                        <?php
                          if($row1['JInternational']!="")
             {
             ?>
                        <td>
                        <input name="JInternational" type="text" maxlength="100" size="25" value="<?php echo $row1['JInternational']; ?>" readonly />

                            </td>
                            <?php
             }
             ?>
                             <td align="left">
            <p>International</p>
                        </td>  
                                 <?php
                          if($row1['CInternational']!="")
             {
             ?>  
                        <td>
                        <input name="CInternational" type="text" maxlength="100" size="25" value="<?php echo $row1['CInternational']; ?>" readonly>

                            </td>
  <?php
             }
             ?>
                            </tr>
        
 
                <tr> 
                        <td align="left">
                        <p>National</p>
                            </td>
 <?php
                          if($row1['JNational']!="")
             {
             ?>  
                            <td>
                        <input name="JNational" type="text" maxlength="100" size="25" value="<?php echo $row1['JNational']; ?>" readonly>
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
<?php
             }
             ?>
                       <td align="left">
                        <p>National</p>
    <?php
                          if($row1['CNational']!="")
             {
             ?>                          </td>
                            
                            <td>
                        <input name="CNational" type="text" maxlength="100" size="25" value="<?php echo $row1['CNational']; ?>" readonly />
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                <?php
             }
             ?>      
                    
                    </tr>    
           
           
            </table>
    <hr align="left" width="73%">   
         <b>15. b. Provide best paper details (maximum 3)</b> <br><br> 
          <table style="text-align: center">
     <thead>
        <tr><td>Author </td> <td>Title</td> <td>Journal</td> <td>Voulme</td> <td>Pages </td> <td>Year</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody> 
                              
         <?php
                          if($row1['E3_11']!="")
             {
             ?>          
     <tr>
           <td><input type="text" size="20" name="E3_11" value="<?php echo $row1['E3_11']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="E3_12" value="<?php echo $row1['E3_12']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_13" value="<?php echo $row1['E3_13']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_14" value="<?php echo $row1['E3_14']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E3_15" value="<?php echo $row1['E3_15']; ?>" readonly /> </td>
            <td><input type="text"   name="E3_16" value="<?php echo $row1['E3_16']; ?>" readonly /> </td>
           
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
             }
            if($row1['E3_21']!="")
            {
                ?>
            

       <tr>
           <td><input type="text" size="20" name="E3_21" value="<?php echo $row1['E3_21']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="E3_22" value="<?php echo $row1['E3_22']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_23" value="<?php echo $row1['E3_23']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_24" value="<?php echo $row1['E3_24']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E3_25" value="<?php echo $row1['E3_25']; ?>" readonly /> </td>
            <td><input type="text"   name="E3_16" value="<?php echo $row1['E3_26']; ?>" readonly /> </td>
           
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
             }
            if($row1['E3_31']!="")
            {
                ?>
        
         <tr>
           <td><input type="text" size="20" name="E3_31" value="<?php echo $row1['E3_31']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="E3_32" value="<?php echo $row1['E3_32']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_33" value="<?php echo $row1['E3_33']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_34" value="<?php echo $row1['E3_34']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E3_35" value="<?php echo $row1['E3_35']; ?>" readonly /> </td>
            <td><input type="text"   name="E3_36" value="<?php echo $row1['E3_36']; ?>" readonly /> </td>
           
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
             }
            if($row1['E3_41']!="")
            {
                ?>
       <tr>
           <td><input type="text" size="20" name="E3_41" value="<?php echo $row1['E3_41']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="E3_42" value="<?php echo $row1['E3_42']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_43" value="<?php echo $row1['E3_43']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="E3_44" value="<?php echo $row1['E3_44']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E3_45" value="<?php echo $row1['E3_45']; ?>" readonly /> </td>
            <td><input type="text"   name="E3_46" value="<?php echo $row1['E3_46']; ?>" readonly /> </td>
           
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
<?php
             }
                ?>
         </tbody>
           
</table>           
     
    <hr align="left" width="75%">              
                            <hr align="left" width="73%">      

    <b> 16.  Books / Chapters Published & E-learning materials Developed (last 4 years) </b> 
    <?php
            if($row['BInternational']!="")
            {
                ?>
    <br><br>
              <textarea name="BInternational"  style="width: 800px; height: 50px;" rows="" cols="200"  > <?php echo $row['BInternational']; ?></textarea> 
 <?php  
}
?>
               <hr align="left" width="73%">      

               <b> 17. Patents </b> 
    <br>
     <?php
            if($row['BInternational']!="")
            {
                ?>
                            <textarea  style="width: 800px; height: 50px;"rows="4" cols="100" name="patents" type="text" maxlength="200" size="25" > <?php echo $row['patents']; ?></textarea>
                       <?php  
}
?>
                            
                            <hr align="left" width="73%">      
         
    <b>18. Sponsored Projects (Project handled as Principal Investigator in last 4 Years)</b>
    <br><br>

                   <table  style="text-align: center" cellpadding="1" cellspacing="5" >
                 
               <tr><td>Funding Agency</td> <td>Title of the Project</td> <td>Project Cost </td> <td>Duration</td> <td>Current Status</td> <td>Remarks</td>  <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
     <?php
            if($row['E4_11']!="")
            {
                ?>           
        
        <tr>
          <td><input type="text" size="20" name="E4_11" value="<?php echo $row['E4_11']; ?>" readonly /></td>
            <td><input type="text" size="20" name="E4_12" value="<?php echo $row['E4_12']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_13" value="<?php echo $row['E4_13']; ?>" readonly /> </td>
            <td><input type="text" size="8" name="E4_14" value="<?php echo $row['E4_14']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_15" value="<?php echo $row['E4_15']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_16" value="<?php echo $row['E4_16']; ?>" readonly /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
            }
             if($row['E4_21']!="")
             {
           ?>
        <tr>
          <td><input type="text" size="20" name="E4_21" value="<?php echo $row['E4_21']; ?>" readonly /></td>
            <td><input type="text" size="20" name="E4_22" value="<?php echo $row['E4_22']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_23" value="<?php echo $row['E4_23']; ?>" readonly /> </td>
            <td><input type="text" size="8" name="E4_24" value="<?php echo $row['E4_24']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_25" value="<?php echo $row['E4_25']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_26" value="<?php echo $row['E4_26']; ?>" readonly /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
            }
             if($row['E4_31']!="")
             {
           ?>
        <tr>
          <td><input type="text" size="20" name="E4_31" value="<?php echo $row['E4_31']; ?>" readonly /></td>
            <td><input type="text" size="20" name="E4_32" value="<?php echo $row['E4_32']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_33" value="<?php echo $row['E4_33']; ?>" readonly /> </td>
            <td><input type="text" size="8" name="E4_34" value="<?php echo $row['E4_34']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_35" value="<?php echo $row['E4_35']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_36" value="<?php echo $row['E4_36']; ?>" readonly /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
            }
             if($row['E4_41']!="")
             {
           ?>
        <tr>
          <td><input type="text" size="20" name="E4_41" value="<?php echo $row['E4_41']; ?>" readonly /></td>
            <td><input type="text" size="20" name="E4_42" value="<?php echo $row['E4_42']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_43" value="<?php echo $row['E4_43']; ?>" readonly /> </td>
            <td><input type="text" size="8" name="E4_44" value="<?php echo $row['E4_44']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_45" value="<?php echo $row['E4_45']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_46" value="<?php echo $row['E4_46']; ?>" readonly /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <?php
            }
             if($row['E4_51']!="")
             {
           ?>
        <tr>
          <td><input type="text" size="20" name="E4_51" value="<?php echo $row['E4_51']; ?>" readonly /></td>
            <td><input type="text" size="20" name="E4_52" value="<?php echo $row['E4_52']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_53" value="<?php echo $row['E4_53']; ?>" readonly /> </td>
            <td><input type="text" size="8" name="E4_54" value="<?php echo $row['E4_54']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_55" value="<?php echo $row['E4_55']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="E4_56" value="<?php echo $row['E4_56']; ?>" readonly /></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <?php
            }
           
           ?>
  
   </table>

                               <hr align="left" width="73%">      

                               <b>19. Consultancy Project (in last 4 years)</b> <br> <br>

                <table  style="text-align: center" cellpadding="1" cellspacing="1">
                 <thead>
                <tr><td>Funding Agency</td> <td>Title of the Consultancy <br>Work </td> <td>Project Duration </td> <td>Project Cost</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
            <?php
            if($row['F11']!="")
             {
           ?>
        <tr>
            <td><input type="text" size="20" name="F11" value="<?php echo $row['F11']; ?>" readonly /></td>
            <td><input type="text" size="20" name="F12" value="<?php echo $row['F12']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F13" value="<?php echo $row['F13']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F14" value="<?php echo $row['F14']; ?>" readonly /> </td>
      
        </tr>
        <?php
             }
            if($row['F21']!="")
             {
           ?>    
         <tr>
            <td><input type="text" size="20" name="F21" value="<?php echo $row['F21']; ?>" readonly /></td>
            <td><input type="text" size="20" name="F22" value="<?php echo $row['F22']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F23" value="<?php echo $row['F23']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F24" value="<?php echo $row['F24']; ?>" readonly /> </td>
      
        </tr>
        <?php
             }
            if($row['F31']!="")
             {
           ?>    
         <tr>
            <td><input type="text" size="20" name="F31" value="<?php echo $row['F31']; ?>" readonly /></td>
            <td><input type="text" size="20" name="F32" value="<?php echo $row['F32']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F33" value="<?php echo $row['F33']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F34" value="<?php echo $row['F34']; ?>" readonly /> </td>
      
        </tr>
        <?php
             }
            if($row['F41']!="")
             {
           ?>    
         <tr>
            <td><input type="text" size="20" name="F41" value="<?php echo $row['F41']; ?>" readonly /></td>
            <td><input type="text" size="20" name="F42" value="<?php echo $row['F42']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F43" value="<?php echo $row['F43']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F44" value="<?php echo $row['F44']; ?>" readonly /> </td>
      
        </tr>
        <?php
             }
            if($row['F21']!="")
             {
           ?>    
         <tr>
            <td><input type="text" size="20" name="F51" value="<?php echo $row['F51']; ?>" readonly /></td>
            <td><input type="text" size="20" name="F52" value="<?php echo $row['F52']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F53" value="<?php echo $row['F53']; ?>" readonly /> </td>
            <td><input type="text" size="20" name="F54" value="<?php echo $row['F54']; ?>" readonly /> </td>
      
        </tr>
        <?php
             }
         
           ?>    
     
         </tbody>
           
   </table>
                 
                   <hr align="left" width="73%">      
                   <b>20. Professional Training Received / Summer / Winter Schools attended(Last 4 years - Upload photocopies)</b><br><br>

                                   <table style="text-align: center">
                <thead>
                <tr><td>Year</td> <td>Name of Training</td> <td>Duration </td> <td>Organization where training <br>was provided</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
            <?php
            {
                if($row['T11']!="")
                    ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T12" value="<?php echo $row['T11']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T12" value="<?php echo $row['T12']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T13" value="<?php echo $row['T13']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T14" value="<?php echo $row['T14']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T21']!="")
            {
                    ?>
        
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T21" value="<?php echo $row['T21']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T22" value="<?php echo $row['T22']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T23" value="<?php echo $row['T23']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T24" value="<?php echo $row['T24']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T31']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T31" value="<?php echo $row['T31']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T32" value="<?php echo $row['T32']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T33" value="<?php echo $row['T33']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T34" value="<?php echo $row['T34']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T41']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T41" value="<?php echo $row['T41']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T42" value="<?php echo $row['T42']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T43" value="<?php echo $row['T43']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T44" value="<?php echo $row['T44']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T51']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T52" value="<?php echo $row['T51']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T52" value="<?php echo $row['T52']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T53" value="<?php echo $row['T53']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T54" value="<?php echo $row['T54']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T61']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T61" value="<?php echo $row['T61']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T62" value="<?php echo $row['T62']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T63" value="<?php echo $row['T63']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T64" value="<?php echo $row['T64']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T71']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T71" value="<?php echo $row['T71']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T72" value="<?php echo $row['T72']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T73" value="<?php echo $row['T73']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T74" value="<?php echo $row['T74']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T81']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T81" value="<?php echo $row['T81']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T82" value="<?php echo $row['T82']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T83" value="<?php echo $row['T83']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T84" value="<?php echo $row['T84']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T91']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T91" value="<?php echo $row['T91']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T92" value="<?php echo $row['T92']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T93" value="<?php echo $row['T93']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T94" value="<?php echo $row['T94']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            if($row['T101']!="")
            {
                    ?>
                ?>
            <tr>
                <td>
                    <input type="text" size="20" name="T101" value="<?php echo $row['T101']; ?>" readonly />
           </td>
            <td><input type="text" size="20" name="T102" value="<?php echo $row['T102']; ?>" readonly /> </td>
            <td><input type="text" size="10" name="T103" value="<?php echo $row['T103']; ?>" readonly /> </td>
            <td><input type="text" size="30" name="T104" value="<?php echo $row['T104']; ?>" readonly /> </td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           <?php
            }
            
                    ?>
         </tbody>
           
   </table>
                 
                   <hr align="left" width="70%">      

    <b> 21. Conferences/Seminars / Workshops attended (Last 4 year -Upload photocopies of the certificates)</b>
                      <hr align="left" width="70%">      
                      <table style="text-align: center">
    <tr>
        <td>Year</td>
        <td> Conferences/Seminars / <br> Workshops</td>
        <td>Title of paper presented </td>
    </tr>
    <?php
    if($row['cp11']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp11" siz="45"  value="<?php echo $row['cp11']; ?>" readonly />  </td>
            <td> <input type="text" name="cp12" siz="45"  value="<?php echo $row['cp12']; ?>" readonly /> </td>
        <td> <input type="text" name="cp13"  value="<?php echo $row['cp13']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp21']!="")
            {
                    ?>
      <tr>
        <td> <input type="text" name="cp21" siz="45"  value="<?php echo $row['cp21']; ?>" readonly />  </td>
            <td> <input type="text" name="cp22" siz="45"  value="<?php echo $row['cp22']; ?>" readonly /> </td>
        <td> <input type="text" name="cp23"  value="<?php echo $row['cp23']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp31']!="")
            {
                    ?>
      <tr>
        <td> <input type="text" name="cp31" siz="45"  value="<?php echo $row['cp31']; ?>" readonly />  </td>
            <td> <input type="text" name="cp32" siz="45"  value="<?php echo $row['cp32']; ?>" readonly /> </td>
        <td> <input type="text" name="cp33"  value="<?php echo $row['cp33']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp41']!="")
            {
                    ?>
      <tr>
        <td> <input type="text" name="cp41" siz="45"  value="<?php echo $row['cp41']; ?>" readonly />  </td>
            <td> <input type="text" name="cp42" siz="45"  value="<?php echo $row['cp42']; ?>" readonly /> </td>
        <td> <input type="text" name="cp43"  value="<?php echo $row['cp43']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp51']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp51" siz="45"  value="<?php echo $row['cp51']; ?>" readonly />  </td>
            <td> <input type="text" name="cp52" siz="45"  value="<?php echo $row['cp52']; ?>" readonly /> </td>
        <td> <input type="text" name="cp53"  value="<?php echo $row['cp53']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp61']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp61" siz="45"  value="<?php echo $row['cp61']; ?>" readonly />  </td>
            <td> <input type="text" name="cp62" siz="45"  value="<?php echo $row['cp62']; ?>" readonly /> </td>
        <td> <input type="text" name="cp63"  value="<?php echo $row['cp63']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp71']!="")
            {
                    ?>
    <tr>
         <td> <input type="text" name="cp71" siz="45"  value="<?php echo $row['cp71']; ?>" readonly />  </td>
            <td> <input type="text" name="cp72" siz="45"  value="<?php echo $row['cp72']; ?>" readonly /> </td>
        <td> <input type="text" name="cp73"  value="<?php echo $row['cp73']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp81']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp81" siz="45"  value="<?php echo $row['cp81']; ?>" readonly />  </td>
            <td> <input type="text" name="cp82" siz="45"  value="<?php echo $row['cp82']; ?>" readonly /> </td>
        <td> <input type="text" name="cp83"  value="<?php echo $row['cp83']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp91']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp91" siz="45"  value="<?php echo $row['cp91']; ?>" readonly />  </td>
            <td> <input type="text" name="cp92" siz="45"  value="<?php echo $row['cp92']; ?>" readonly /> </td>
        <td> <input type="text" name="cp93"  value="<?php echo $row['cp93']; ?>" readonly /> </td>
    </tr>
    <?php
            }
            if($row['cp101']!="")
            {
                    ?>
    <tr>
        <td> <input type="text" name="cp101" siz="45"  value="<?php echo $row['cp101']; ?>" readonly />  </td>
            <td> <input type="text" name="cp102" siz="45"  value="<?php echo $row['cp102']; ?>" readonly /> </td>
        <td> <input type="text" name="cp103"  value="<?php echo $row['cp103']; ?>" readonly /> </td>
    </tr>
    <?php
            }
           
                    ?>
  
    </table>
                   <hr align="left" width="73%">   <b>22. Industrial Experience/Interaction (Upload photocopies)  </b> <br><br>
                       <table style="text-align: center">
    <tr>
        <td>Organization</td>
        <td> Nature of Work </td>
        <td>Period</td>
    </tr>
    <tr>
        <?php
        if($row['ie11']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie11" value="<?php echo $row['ie11']; ?>" readonly /></td>
                    <td ><input type="text" name="ie12"  value="<?php echo $row['ie12']; ?>" readonly /> </td>
        <td><input type="text" name="ie13" value="<?php echo $row['ie13']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie21']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie21" value="<?php echo $row['ie21']; ?>" readonly /></td>
                    <td ><input type="text" name="ie22"  value="<?php echo $row['ie22']; ?>" readonly /> </td>
        <td><input type="text" name="ie23" value="<?php echo $row['ie23']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie31']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie31" value="<?php echo $row['ie31']; ?>" readonly /></td>
                    <td ><input type="text" name="ie32"  value="<?php echo $row['ie32']; ?>" readonly /> </td>
        <td><input type="text" name="ie33" value="<?php echo $row['ie33']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie41']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie41" value="<?php echo $row['ie41']; ?>" readonly /></td>
                    <td ><input type="text" name="ie42"  value="<?php echo $row['ie42']; ?>" readonly /> </td>
        <td><input type="text" name="ie43" value="<?php echo $row['ie43']; ?>" readonly /> </td>


    </tr>
    <?php
            }
            if($row['ie51']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie51" value="<?php echo $row['ie51']; ?>" readonly /></td>
                    <td ><input type="text" name="ie52"  value="<?php echo $row['ie52']; ?>" readonly /> </td>
        <td><input type="text" name="ie53" value="<?php echo $row['ie53']; ?>" readonly /> </td>

    </tr>
    
    <?php
            }
            if($row['ie61']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie61" value="<?php echo $row['ie61']; ?>" readonly /></td>
                    <td ><input type="text" name="ie62"  value="<?php echo $row['ie62']; ?>" readonly /> </td>
        <td><input type="text" name="ie63" value="<?php echo $row['ie63']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie71']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie71" value="<?php echo $row['ie71']; ?>" readonly /></td>
                    <td ><input type="text" name="ie72"  value="<?php echo $row['ie72']; ?>" readonly /> </td>
        <td><input type="text" name="ie73" value="<?php echo $row['ie73']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie81']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie81" value="<?php echo $row['ie81']; ?>" readonly /></td>
                    <td ><input type="text" name="ie82"  value="<?php echo $row['ie82']; ?>" readonly /> </td>
        <td><input type="text" name="ie83" value="<?php echo $row['ie83']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['ie91']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie91" value="<?php echo $row['ie91']; ?>" readonly /></td>
                    <td ><input type="text" name="ie92"  value="<?php echo $row['ie92']; ?>" readonly /> </td>
        <td><input type="text" name="ie93" value="<?php echo $row['ie93']; ?>" readonly /> </td>

    </tr>
  
    <?php
            }
            if($row['ie101']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="ie101" value="<?php echo $row['ie101']; ?>" readonly /></td>
                    <td ><input type="text" name="ie102"  value="<?php echo $row['ie102']; ?>" readonly /> </td>
        <td><input type="text" name="ie103" value="<?php echo $row['ie103']; ?>" readonly /> </td>


    </tr>
    <?php
            }
            ?>
    
  
    </table>
        <hr align="left" width="80%"> 
        <b>23. Continuing Education Programmes /Short Term Courses/Workshops/Seminars etc. organized (Last 4 years):</b> <br><br>

     <table style="text-align: center">
   <tr>
        <td >Title of Programme</td>
        <td >Period</td>
                <td > Funding Agency </td>
    </tr>
     <?php
        if($row['fa11']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="fa11" value="<?php echo $row['fa11']; ?>" readonly /></td>
                    <td ><input type="text" name="fa12"  value="<?php echo $row['fa12']; ?>" readonly /> </td>
        <td><input type="text" name="fa13" value="<?php echo $row['fa13']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa21']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="fa21" value="<?php echo $row['fa21']; ?>" readonly /></td>
                    <td ><input type="text" name="fa22"  value="<?php echo $row['fa22']; ?>" readonly /> </td>
        <td><input type="text" name="fa23" value="<?php echo $row['fa23']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa31']!="")
            {
                    ?>
    
    <tr>
        td><input type="text" name="fa31" value="<?php echo $row['fa31']; ?>" readonly /></td>
                    <td ><input type="text" name="fa32"  value="<?php echo $row['fa32']; ?>" readonly /> </td>
        <td><input type="text" name="fa33" value="<?php echo $row['fa33']; ?>" readonly /> </td>


    </tr>
    <?php
            }
            if($row['fa41']!="")
            {
                    ?>
    <tr>
       td><input type="text" name="fa41" value="<?php echo $row['fa41']; ?>" readonly /></td>
                    <td ><input type="text" name="fa42"  value="<?php echo $row['fa42']; ?>" readonly /> </td>
        <td><input type="text" name="fa43" value="<?php echo $row['fa43']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa51']!="")
            {
                    ?>
    <tr>
        td><input type="text" name="fa51" value="<?php echo $row['fa51']; ?>" readonly /></td>
                    <td ><input type="text" name="fa52"  value="<?php echo $row['fa52']; ?>" readonly /> </td>
        <td><input type="text" name="fa53" value="<?php echo $row['fa53']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa61']!="")
            {
                    ?>
    <tr>
       td><input type="text" name="fa61" value="<?php echo $row['fa61']; ?>" readonly /></td>
                    <td ><input type="text" name="fa62"  value="<?php echo $row['fa62']; ?>" readonly /> </td>
        <td><input type="text" name="fa63" value="<?php echo $row['fa63']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa71']!="")
            {
                    ?>
    <tr>
        td><input type="text" name="fa71" value="<?php echo $row['fa71']; ?>" readonly /></td>
                    <td ><input type="text" name="fa72"  value="<?php echo $row['fa72']; ?>" readonly /> </td>
        <td><input type="text" name="fa73" value="<?php echo $row['fa73']; ?>" readonly /> </td>


    </tr>
    <?php
            }
            if($row['fa81']!="")
            {
                    ?>
    <tr>
        td><input type="text" name="fa81" value="<?php echo $row['fa81']; ?>" readonly /></td>
                    <td ><input type="text" name="fa82"  value="<?php echo $row['fa82']; ?>" readonly /> </td>
        <td><input type="text" name="fa83" value="<?php echo $row['fa83']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa91']!="")
            {
                    ?>
    <tr>
       <td><input type="text" name="fa91" value="<?php echo $row['fa91']; ?>" readonly /></td>
                    <td ><input type="text" name="fa92"  value="<?php echo $row['fa92']; ?>" readonly /> </td>
        <td><input type="text" name="fa93" value="<?php echo $row['fa93']; ?>" readonly /> </td>

    </tr>
    <?php
            }
            if($row['fa101']!="")
            {
                    ?>
    <tr>
        <td><input type="text" name="fa101" value="<?php echo $row['fa101']; ?>" readonly /></td>
                    <td ><input type="text" name="fa102"  value="<?php echo $row['fa102']; ?>" readonly /> </td>
        <td><input type="text" name="fa103" value="<?php echo $row['fa103']; ?>" readonly /> </td>


    </tr>
 
    <?php
            }
           
                    ?>
    </table>
 <hr align="left" width="80%"> 
 <b>24. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities </b> <br><br>
 <textarea style="width: 800px; height: 50px;" name="edp" readonly><?php echo $row['edp']; ?>
    </textarea>
         <hr align="left" width="80%"> 
         <b>25. Awards and Recognitions (Upload photocopies)</b><br><br>
        
         <textarea style="width: 800px; height: 50px;" name="ar" readonly> <?php echo $row['ar']; ?>
    </textarea>
     <hr align="left" width="80%"> 
     <b>26. Any other relevant information you may like to furnish:</b><br><br>
     <textarea style="width: 800px; height: 50px;" name="ao" readonly><?php echo $row['ao']; ?>
    </textarea>
        <hr align="left" width="80%"> 
        <b>27. Names and addresses of two Professional References (Upload Testimonials of Them) </b><br><br>
    
        <div class="">
<div class="floatLeft">
<table>
<tr>    <tr>
        <td align="left" >Name</td>
        <td >1.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr11" value="<?php echo $row['pr11']; ?>" readonly /></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td  > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr12"  value="<?php echo $row['pr12']; ?>" readonly /> </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;"  name="pr13" readonly>
            <?php echo $row['pr13']; ?>
                </textarea>
</tr>

</table>
</div>

<div class="floatRight">
<table>
    <tr>     <td></td><td >2.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr21" value="<?php echo $row['pr21']; ?>" readonly /></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;" name="pr22"  value="<?php echo $row['pr22']; ?>" readonly /> </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;"  name="pr23" readonly>
            <?php echo $row['pr23']; ?>
                </textarea>
</tr>
 </tr>
</table>
</div>
</div>
        <br>
        <br>
         <br>
        <br> <br>
        <br> <br>
        <br> <br>
        <br>
           <br> <br>
        <br> <br>
      
        <div>
        <hr align="left" width="80%"> </div>
        
     <b>28. Please indicate how in your opinion you can contribute to NITK's growth. (Use separate sheet, if required) 
     </b><br><br>    <textarea style="width: 800px; height: 50px;" name="ao1" placeholder="Limited to 250 words"   readonly /><?php echo $row['ao1']; ?>
    </textarea>
<hr align="left" width="80%"> 
<p width="80%" style="width:80%">   <b> 29. </b>I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
     the rules and regulations of the institute and also the directions given to me from time to time. </p>
     <br> <br>
     <table > <tr>
             <td> <b>  Date: </b></td> <td> 
                 <td> <input type="text" id="datepicker3"  name="date"  value="<?php echo $row['date']; ?>" readonly />  </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><b>Place:</b></td><td> <input type="text" name="place"   value="<?php echo $row['place']; ?>" readonly /> </td>
    </tr>
     </table>
    <table align="right" width="80%"> 
        <tr> <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>   <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php $thumb_src = "uploads/2.jpeg";
 ?>
  <?php if($thumb_src != ''){ 
 //echo $thumb_src;
      ?>
<img style="align-self:right;width:100px;height:50px;" src="<?php echo $thumb_src; ?>" alt="">
    <?php } ?></td>
</tr>
<tr>
    <td> &nbsp;</td><td>Applicant Signature</td>  
</tr>
    </table>
     <br>
     <br>
      <br>
     <br>
    
     <hr align="left" width="80%"> 
    <table  align="center" width="40%"> 
        <tr>
            <td><input type="submit"  value="Close" name="previous"> <td><td><input type="submit"  value="Edit" name="previous"> <td></tr>
   </table>
            
</form>
            </tr>
        </table>
    </body>
</html>
