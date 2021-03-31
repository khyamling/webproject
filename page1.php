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
$user_home = new USER();
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");

$sql =  "SELECT * FROM page2 WHERE email='$UID'";
$result =  mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
        /* numeric array */
if($row > 0 )
    {
    $apn=$row['appn'];
     $apn = preg_replace('/\s+/', '', $apn);
        echo "
		      <div class='alert alert-error'>
                      <form action='home.php' method='post'>
				  <button type='submit'>Back</button>
					<strong>!!</strong>  Application already submitted. Application Number is :<b>$apn </b>
                                         </form>
			  </div>
			  ";


    }
    elseif ($row == 0) {
       
?>

<html>
    <head>
        <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
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
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
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
        
      
        <form action="pins.php" method="post" name="f1" onsubmit="return validateform()" >
           <div class="form1">
                        <hr algn="left" width="88%">  

      <table CELLPADDING=10 cellspacing="10"> 
          <tr>
       <td >
          Advertisement No.
       </td>
        <td>
          <input type="text" size="40" maxlength="100"  name="Page1" value="" />
       </td>
     
         <td >
          Post Applied.
       </td>
         <td>
          <select id="json-one" name="Page2">
              <option value="" > Select Applied post</option>
                            <option value="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments</option>
                            <option  value="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000</option>
                            <option value="Assistant Professor PB-3 with Grade pay of Rs.8000" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor PB-3 with Grade pay of Rs.8000</option>
                            <option value="Associate Professor PB-4 with Grade pay of Rs.9500" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="Professor PB-4 with Grade pay of Rs.10500" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option>
                            <option value="Professor HAG Scale Rs.67000 to 79000" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option>
                        </select>
        </td>
       <td align="left">
            AGP:  </td> <td>  <select id="json-two" name="Page3">
            <option>Please choose from Post Applied</option>
</select>                        
       </td>
       <td align="left">
          Department
       </td>
        <td>
           <select name="Page4">
    <option> - Department - </option>
    <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CH">Chemistry</option>
    <option value="CE">Civil Engineering</option>
    <option value="CS">Computer Science & Engineering</option>
    <option value="EE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="IT"> Information Technology</option>
    <option value="MC">Mathematical And Computational Sciences</option>
    <option value="ME">Mechanical Engineering</option>
    <option value="MM">Metallurgical and Materials Engineering</option>
    <option value="ME">Mining Engineering</option>
        <option value="PH"> Physics</option>
        <option value="SM"> School of  Management</option>
</select>
      </td>
    </tr>        
      </table>
         <hr align="left" width="88%">  
      <table CELLPADDING=10 cellspacing="10" > 

      
 <tr>
     <td align="">
       <b>    1.  Name in Full 
     </td>
     <td>
         <input type="text" size="50" maxlength="120" name="Page5" value="" />
         </td>
 
            <td >
              a) Father Name
       </td>
        <td>
          <input name="Page6" type="text" maxlength="100" size="25" />

       </td>
     <td align="center">
          Spouse Name
     </td>
     <td>
         <input type="text"  size="25" maxlength="100" name="Page7" value="" />
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr >
 <td align="right">
     <b> b) Gender </b>
 </td>

 <td>
     <input type="radio" name="Page8" value="M" /> Male&nbsp;
     <input type="radio" name="Page8" value="F" /> Female &nbsp;
       <input type="radio" name="Page8" value="T" /> Transgender&nbsp;
 </td>
 <td align="">
    <b> c) Marital Status 
 <td>  <input type="radio" name="Page11" value="mr" /> Married&nbsp;
      <input type="radio" name="Page11" value="um"/>Single &nbsp;
</td>
<td align="">
    <b> d) Category 
</td>   
<td>  
    <input type="radio" name="Page12" value="sc"/> SC &nbsp;
   
             <input type="radio" name="Page12" value="st"/>ST &nbsp;
        
   
        <input type="radio" name="Page12" value="obc"/>OBC &nbsp;
        
 
    <input type="radio" name="Page12" value="gm"/>GEN  &nbsp;
        </td>
        </tr>
               </table>   
         
           <table CELLPADDING="5" cellspacing="5">
 <tr>
     <td>  <b>&nbsp;&nbsp;&nbsp;e) Attested copy certificate enclosed(Yes/No) (only in case of SC/St/OBC) </b> <td><select name="Page17">
    <option value="no">No </option>
        <option value="yes">YES </option></select> </td>
                    </td>
    </tr>
 <tr>
     <td> <b> &nbsp;&nbsp; f) Percentage of Disability of PWD candidate  </td>  </b> <td><input type="text" name="Page18" value="" size="5" /> &nbsp;&nbsp;&nbsp;
         <input type="radio" name="Page19" value="" size="5" />VH &nbsp;
         <input type="radio" name="Page19" value="" size="5" />OH &nbsp;
         <input type="radio" name="Page19" value="" size="5" />HH &nbsp;</td>
        </tr>
           </table>
                  <hr align="left" width="88%">  
                  <b>2. Address:  </b> <br>
   <div class="">
<div class="floatLeft">
<table CELLPADDING="5" cellspacing="10">
<tr>
     <td align="">      (a) Permanent:  </td>  </tr>
<tr><td> Address Line1 </td> <td><input type="text" name="Page22" value="" size="40" maxlength="80"/> </td></tr>
<tr> <td>Address Line2 </td><td> <input type="text" name="Page23" value="" size="40" maxlength="80"/> </td>  </tr>
<tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="" size="40" maxlength="80"/> </td></tr>
<tr><td>      City  </td> <td>  <input type="text" name="Page25" value="" size="40" maxlength="80"/>  </td> </tr> 
<tr><td>      Pin Code</td> <td>  <input type="text" name="Page26" value="" size="40" maxlength="20" />  </td> </tr>
<tr><td>     State </td> <td>  <input type="text" name="Page27" value="" size="40" maxlength="60"/></td> </tr>


</table>
</div>

<div class="floatRight">
<table CELLPADDING="5" cellspacing="10">
    <tr><td colspan="2" > (b) Address for Correspondence:  </td></tr>
    <tr> <td > Address Line1 </td> <td><input type="text" name="Page28" value="" size="40" maxlength="80" /> </td>  </tr>
    <tr><td>Address Line2 </td><td> <input type="text" name="Page29" value="" size="40" maxlength="80" /> </td></tr>
    <tr> <td> Address Line3 </td> <td> <input type="text" name="Page30" value="" size="40" maxlength="80"/> </td></tr>
    <tr> <td> City  </td> <td>  <input type="text" name="Page31" value="" size="40" maxlength="80" />  </td></tr>
    <tr>  <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="" size="40" maxlength="80" />  </td>  </tr>
    <tr><td>     State </td> <td>  <input type="text" name="Page33" value="" size="40" maxlength="80" /></td> </tr>
    <tr> <td>Mobile</td> <td><input type="text" name="Page34" value="" size="40" maxlength="80" /> </td></tr>
    <tr><td>Telephone (with <br>STD code)office </td> <td><input type="text" name="Page35" value="" size="40" maxlength="80" /></td></tr>
    <tr> <td>  Telephone (with <br>STD code) Res. No.</td> <td><input type="text" name="Page36" value="" size="40" maxlength="80" /> </td></tr>
    <tr>  <td>   Email</td> <td><input type="text" name="Page37" value="" size="40" maxlength="80"/></td></tr>
 
</table>
</div>
</div>
                  <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
    
                           <hr align="left" width="88%">  

               <table CELLPADDING="5" cellspacing="5" >
         
                   <td>     3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp; </td>
    
            <td>
        
 <input type="text" id="start_dt" class='datepicker' size='15'  name="Page38" />  
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> &nbsp;&nbsp; 3 &nbsp;&nbsp;(b) Nationality  </td>  
    
     <td>
         <input type="text" name="Page41" value="" />
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
         <tr><td> Designation </td><td><input type="text" name="Page42" value=""  size="40" maxlength="40"/> </td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Organization </td><td><input type="text" name="Page43" value="" size="40" maxlength="80" /> </td> 
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Joining to the present post </td><td><input type="text" id="start_dt1" class='datepicker' size='15'  name="Page44" />  </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45" value="" size="40" maxlength="80" /> </td> 
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGP/GP </td><td> <input type="text" name="Page46" value=""  placeholder="AGP/GP:(if applicable)" size="40" maxlength="80"/> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Basic pay Rs. </td><td> <input type="text" name="Page47" value="" size="40" maxlength="80"/> </td> </tr>
       <tr><td> Total Emoluments <br>(per month) Rs. </td><td> <input type="text" name="Page48" value="" size="40" maxlength="80"/> </td></tr> 
       </table>
                                                                   <hr align="left" width="88%">  

                                                 <table>
                                                     <tr>  <td> <b> 5. Areas of specializations: </b>
                                                         </td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" size="40" maxlength="150" name="Page49" value="" style="width:720px;"/> </td>
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
    <tr>
        <td ><input type="text" name="e11" ></td>
        <td ><select name="e12" style="width:100px;" >
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e13" ></td>
        <td ><input type="text" name="e14" ></td>
        <td ><input type="text" name="e15"  style="width:120px;"  ></td>
        <td ><input type="text" name="e16" style="width:80px;" ></td>
        <td ><input type="text" name="e17" style="width:100px;" ></td>
    </tr>
    <tr>
    <td ><input type="text" name="e21" ></td>
        <td ><select name="e22" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
   <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e23" ></td>
        <td ><input type="text" name="e24" ></td>
        <td ><input type="text" name="e25"  style="width:120px;"  ></td>
        <td ><input type="text" name="e26" style="width:80px;"  ></td>
        <td ><input type="text" name="e27" style="width:100px;" ></td>
    </tr>
    <tr>
    <td ><input type="text" name="e31" ></td>
        <td ><select name="e32" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e33" ></td>
        <td ><input type="text" name="e34" ></td>
        <td ><input type="text" name="e35"  style="width:120px;"  ></td>
        <td ><input type="text" name="e36" style="width:80px;"  ></td>
        <td ><input type="text" name="e37"style="width:100px;" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e41" ></td>
        <td ><select name="e42" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e43" ></td>
        <td ><input type="text" name="e44" ></td>
        <td ><input type="text" name="e45" style="width:120px;"></td>
        <td ><input type="text" name="e46" style="width:80px;" ></td>
        <td ><input type="text" name="e47" style="width:100px;"  ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e51" ></td>
        <td ><select name="e52" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e53" ></td>
        <td ><input type="text" name="e54" ></td>
        <td ><input type="text" name="e55" style="width:120px;"></td>
        <td ><input type="text" name="e56" style="width:80px;"  ></td>
        <td ><input type="text" name="e57" style="width:100px;"  ></td>
    </tr>
    <tr>
    <td ><input type="text" name="e61" ></td>
        <td ><select name="e62" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e63" ></td>
        <td ><input type="text" name="e64" ></td>
        <td ><input type="text" name="e65" style="width:120px;"></td>
        <td ><input type="text" name="e66" style="width:80px;" ></td>
        <td ><input type="text" name="e67" style="width:100px;" ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e71" ></td>
        <td ><select name="e72" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
   <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e73" ></td>
        <td ><input type="text" name="e74" ></td>
        <td ><input type="text" name="e75" style="width:120px;" ></td>
        <td ><input type="text" name="e76" style="width:80px;"  ></td>
        <td ><input type="text" name="e77" style="width:100px;"  ></td>
    </tr>
    <tr>
        <td ><input type="text" name="e81" ></td>
        <td ><select name="e82" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e83" ></td>
        <td ><input type="text" name="e84" ></td>
        <td ><input type="text" name="e85" style="width:120px;"></td>
        <td ><input type="text" name="e86" style="width:80px;"  ></td>
        <td ><input type="text" name="e87" style="width:100px;"  ></td>
    </tr>
      <tr>
        <td ><input type="text" name="e91" ></td>
        <td ><select name="e92" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e93" ></td>
        <td ><input type="text" name="e94" ></td>
        <td ><input type="text" name="e95" style="width:120px;" ></td>
        <td ><input type="text" name="e96" style="width:80px;"  ></td>
        <td ><input type="text" name="e97" style="width:100px;"  ></td>
    </tr>
      <tr>
        <td ><input type="text" name="e101" ></td>
        <td ><select name="e102" style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
        <td ><input type="text" name="e103" ></td>
        <td ><input type="text" name="e104" ></td>
        <td ><input type="text" name="e105" style="width:120px;" ></td>
        <td ><input type="text" name="e106" style="width:80px;" ></td>
        <td ><input type="text" name="e107" style="width:100px;"></td>
    </tr>
    </table>
 <hr align="left" width="88%">      
 <b>  7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
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
                </tr> <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="ph1"  id="message" placeholder="Thesis Title"></textarea> </td> 
                    <td>
                       <input type="text" id="datepicker"  name="ph2"  style="width:80px;" >   </td> 
                    <td> 
                       <input type="text" id="datepicker1"  name="ph3" style="width:80px;" />    </td> 
                    <td ><input type="text" name="ph4" class="form-control" size="40"> </td> 
                    <td><input type="text" name="ph5" class="form-control" size="30"> </td> 
                     <td align='center'><select name="ph6" style="width:100px;">
                            <option value="Full Time">Full Time </option>
                                   <option value="Part Time">Part Time </option></select> </td> 
                    <td><input type="text" id="datepicker2"  name="ph7"  style="width:100px;" />  </td> 
                      <td><input type="text" id="datepicker3"  name="ph8"  style="width:100px;" /></td> 
                </tr>
            </table> 
           
       <hr align="left" width="83%">      

      
       <b>    8. Post Doctoral Work: (Upload photocopies)  </b>
            
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
                    
                </tr> <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd11"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" id="datepicker4"  name="pd12"  style="width:100px;"/></td> 
                    <td><input type="text" id="datepicker5"  name="pd13"  style="width:100px;"/> </td> 
                    <td ><input type="text" name="pd14" class="form-control" size="40"> </td> 
                    <td><input type="text" name="pd15" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" name="pd16" class="form-control" size="30"> </td> 
                      </tr>
                      <tr>
                          <td><textarea rows="1" cols="30" val="" input type="text" name="pd21"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" id="datepicker6"  name="pd22"  style="width:100px;" /> </td> 
                    <td><input type="text" id="datepicker7"  name="pd23"  style="width:100px;" /> </td> 
                    <td ><input type="text" name="pd24" class="form-control" size="40"> </td> 
                    <td><input type="text" name="pd25" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" name="pd26" class="form-control" size="30"> </td> 
                    
                      </tr>
                      <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd31"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" id="datepicker8"  name="pd32"  style="width:100px;" /> </td> 
                    <td><input type="text" id="datepicker9"  name="pd33"  style="width:100px;" /> </td> 
                    <td ><input type="text" name="pd34" class="form-control" size="40"> </td> 
                    <td><input type="text" name="pd35" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" name="pd36" class="form-control" size="30"> </td> 
                      </tr>
                       <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd41"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" id="datepicker10"  name="pd42"  style="width:100px;" /> </td> 
                    <td><input type="text" id="datepicker11"  name="pd43"   style="width:100px;" /> </td> 
                    <td ><input type="text" name="pd44" class="form-control" size="40"> </td> 
                    <td><input type="text" name="pd45" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" name="pd46" class="form-control" size="30"> </td> 
                      </tr>
                       <tr>
                    <td><textarea rows="1" cols="30" val="" input type="text" name="pd51"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" id="datepicker12"  name="pd52"  style="width:100px;" /> </td> 
                    <td><input type="text" id="datepicker13"  name="pd53"   style="width:100px;" /> </td> 
                    <td ><input type="text" name="pd54" class="form-control" size="40"> </td> 
                    <td><input type="text" name="pd55" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" name="pd56" class="form-control" size="30"> </td> 
                      </tr>
            </table>
             <hr align="left" width="83%">      

            
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
                   
                </tr> <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt11"  id="message" placeholder="Examination"></textarea> </td> 
                    <td><select name="nt12"  style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt13" class="form-control" size="50"> </td> 
                    <td ><input type="text" name="nt14" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt15" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" name="nt16" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt21"  id="message" placeholder="Examination"></textarea> </td> 
                    <td><select name="nt22"  style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt23" class="form-control" size="50"> </td> 
                    <td ><input type="text" name="nt24" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt25" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" name="nt26" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt31"  id="message" placeholder="Examination"></textarea> </td> 
                    <td><select name="nt32"  style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td> 
                    <td><input type="text" name="nt33" class="form-control" size="50"> </td> 
                    <td ><input type="text" name="nt34" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt35" class="form-control" size="10"  style="width:100px;" > </td> 
                    <td align='center'><input type="text" name="nt36" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt41"  id="message" placeholder="Examination"></textarea> </td> 
                    <td><select name="nt42"  style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt43" class="form-control" size="50" > </td> 
                    <td ><input type="text" name="nt44" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt45" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" name="nt46" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" val="" input type="text" name="nt51"  id="message" placeholder="Examination"></textarea> </td> 
                    <td><select name="nt52"  style="width:100px;">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select> </td> 
                    <td><input type="text" name="nt53" class="form-control" size="50"> </td> 
                    <td ><input type="text" name="nt54" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt55" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" name="nt56" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
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
        <tr>
            <td><input type="text" size="30" name="E11"></td>
            <td><input type="text" size="30" name="E12"></td>
            <td> <input type="text" id="datepicker14"  name="E13" onchange="cal()"  style="width:100px;"/> </td>
            <td><input type="text"  id="datepicker15" name="E14" onchange="cal()" style="width:100px;" /></td>
            <td><input type="text" class="textbox" id="numdays" name="E15" style="width:150px;" /></td>
            <td><input type="text" size="10" name="E16"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E17"  style="width:100px;"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" size="30" name="E21"></td>
            <td><input type="text" size="30" name="E22"></td>
          <td><input type="text"  id="datepicker16" name="E23" onchange="cal1()"  style="width:100px;" /> </td>
            <td><input type="text"  id="datepicker17" name="E24" onchange="cal1()" style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays1" name="E25" style="width:150px;"/></td>
            <td><input type="text" size="10" name="E26"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E27"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

       <tr>
              <tr>
            <td><input type="text" size="30" name="E31"></td>
            <td><input type="text" size="30" name="E32"></td>
            <td> <input type="text" id="datepicker18"  name="E33" onchange="cal2()"  style="width:100px;"/> </td>
            <td><input type="text"  id="datepicker19" name="E34" onchange="cal2()" style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays2" name="E35" style="width:150px;" /></td>
            <td><input type="text" size="10" name="E36"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E37"  style="width:100px;"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>



        <tr>
            <td><input type="text" size="30" name="E41"></td>
            <td><input type="text" size="30" name="E42"></td>
            <td><input type="text" id="datepicker20" name="E43" onchange="cal3()"  style="width:100px;" /></td>
            <td><input type="text" id="datepicker21" name="E44" onchange="cal3()" style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays3" name="E45" style="width:150px;"/></td>
            <td><input type="text" size="10" name="E46"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E47"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" size="30" name="E51"></td>
            <td><input type="text" size="30" name="E52"></td>
            <td><input type="text"  id="datepicker22" name="E53" onchange="cal4()"  style="width:100px;"/></td>
            <td><input type="text"  id="datepicker23" name="E54" onchange="cal4()"  style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays4" name="E55"  style="width:150px;"/></td>
            <td><input type="text" size="10" name="E56"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E57"  style="width:100px;"></td>
  
        </tr>

        <tr>
            <td><input type="text" size="30" name="E61"></td>
            <td><input type="text" size="30" name="E62"></td>
            <td><input type="text" id="datepicker24" name="E63" onchange="cal5()"  style="width:100px;"/></td>
            <td><input type="text" id="datepicker25" name="E64" onchange="cal5()"  style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays5" name="E65"  style="width:150px;"/></td>
            <td><input type="text" size="10" name="E66"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E67"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" size="30" name="E71"></td>
            <td><input type="text" size="30" name="E72"></td>
          <td><input type="text"   id="datepicker26" name="E73" onchange="cal6()"  style="width:100px;"/></td>
            <td><input type="text" id="datepicker27" name="E74" onchange="cal6()"  style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays6" name="E75"  style="width:150px;"/></td>
            <td><input type="text" size="10" name="E76"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E77"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
         <tr>
            <td><input type="text" size="30" name="E81"></td>
            <td><input type="text" size="30" name="E82"></td>
           <td><input type="text"  id="datepicker28" name="E83" onchange="cal7()"  style="width:100px;"/></td>
            <td><input type="text" id="datepicker29" name="E84" onchange="cal7()" style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays7" name="E85" style="width:150px;"/></td>
            <td><input type="text" size="10" name="E86"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E87"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" size="30" name="E91"></td>
            <td><input type="text" size="30" name="E92"></td>
            <td><input type="text" id="datepicker30" name="E93" onchange="cal8()"  style="width:100px;"/></td>
            <td><input type="text" id="datepicker31" name="E94" onchange="cal8()"  style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays8" name="E95" style="width:150px;"/></td>
            <td><input type="text" size="10" name="E96"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E97"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" size="30" name="E101"></td>
            <td><input type="text" size="30" name="E102"></td>
            <td><input type="text" id="datepicker32" name="E103" onchange="cal9()"  style="width:100px;"/></td>
            <td><input type="text" id="datepicker33" name="E104" onchange="cal9()"  style="width:100px;"/></td>
            <td><input type="text" class="textbox" id="numdays9" name="E105"  style="width:150px;"/></td>
            <td><input type="text" size="10" name="E106"  style="width:100px;"></td>
            <td><input type="text" size="10" name="E107"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
         </tbody>
           
</table>
        
                <hr align="left" width="83%">      <p>

     <b>11. Total Experience (Number of Years and/or months)  </b>      
     <br><br>                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="teachingexp" type="text"  size="25" />
       
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post-PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="researchexp" type="text"  size="25" />

       </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="industryexp" type="text" maxlength="100" size="25" />

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
        <td>
          <input name="asstprof" type="text" maxlength="100" size="25" />
         <!--<font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
       <td align="right">
          <p>Associate Professor or equivalent</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="assoprofexp" type="text" maxlength="100" size="25" />

       </td>
   <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Professor</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="profexp" type="text" maxlength="100" size="25" />

       </td>
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
        <tr>
             <td><input type="text" size="10" name="E2_11"></td>
            <td><select name="E2_12">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_13"></td>
            <td><input type="text" size="10" name="E2_14"></td>
            <td><input type="text" size="15" name="E2_15"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
             <td><input type="text" size="10" name="E2_21"></td>
            <td><select name="E2_22">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_23"></td>
            <td><input type="text" size="10" name="E2_24"></td>
            <td><input type="text" size="15" name="E2_25"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text" size="10" name="E2_31"></td>
            <td><select name="E2_32">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_33"></td>
            <td><input type="text" size="10" name="E2_34"></td>
            <td><input type="text" size="15" name="E2_35"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
       
         <tr>
            <td><input type="text" size="10" name="E2_41"></td>
            <td><select name="E2_42">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_43"></td>
            <td><input type="text" size="10" name="E2_44"></td>
            <td><input type="text" size="15" name="E2_45"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text" size="10" name="E2_51"></td>
            <td><select name="E2_52">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_53"></td>
            <td><input type="text" size="10" name="E2_54"></td>
            <td><input type="text" size="15" name="E2_55"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr>
            <td><input type="text" size="10" name="E2_61"></td>
            <td><select name="E2_62">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_63"></td>
            <td><input type="text" size="10" name="E2_64"></td>
            <td><input type="text" size="15" name="E2_65"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" name="E2_71"></td>
            <td><select name="E2_72">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_73"></td>
            <td><input type="text" size="10" name="E2_74"></td>
            <td><input type="text" size="15" name="E2_75"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" name="E2_81"></td>
            <td><select name="E2_82">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_83"></td>
            <td><input type="text" size="10" name="E2_84"></td>
            <td><input type="text" size="15" name="E2_85"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" name="E2_91"></td>
            <td><select name="E2_92">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_93"></td>
            <td><input type="text" size="10" name="E2_94"></td>
            <td><input type="text" size="15" name="E2_95"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" name="E2_101"></td>
            <td><select name="E2_102">
    <option> - Year - </option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
   
</select></td>
            <td><input type="text" size="3" name="E2_103"></td>
            <td><input type="text" size="10" name="E2_104"></td>
            <td><input type="text" size="15" name="E2_105"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
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
        <td>
          <input name="phdcomplete" type="text" maxlength="100" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="phdongoing" type="text" maxlength="100" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    </tr>
        
 
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgcomplete" type="text" maxlength="100" size="25" />

       </td>
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgongoing" type="text" maxlength="100" size="25" />

       </td>
    </tr>    
 
           

          
                 </table>  
    <hr align="left" width="75%">  
    <table align="center" width="40%">
        <tr>
        <td>
        <input  type="submit" formaction="page2.php" value="Save and Submit" name="Save and Submit"></td>
</tr></table>
            </div>
    
</form>
    </body>
</html>
<?php
   }
  ?>