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
$br=$_SESSION['br'];
$pos=$_SESSION['pos'];
$addv=$_SESSION['addv'];
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
   


  $sql  = "SELECT * FROM  postapplied WHERE email='$UID' and dept='$br' and post='$pos' ";
	//tmt->execute(array(":emailI=>$email));
	 
$result =  mysqli_query($link, $sql);
$num_rows = mysqli_num_rows($result);
//echo "$num_rows Rows\n";
	if( $num_rows > 0)
	{ 
            ?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <script type="text/javascript">
                alert("Application for this post already exist");
                </script>
                <?php
            $user_home->redirect('index.php');
        }
        else
        {
            $dummy=  uniqid();
           $sql="INSERT INTO applica values ('abcd','$UID')";
           if(mysqli_query($link, $sql)) {

      

    } else{

      

    }
                 $sql="select id from applica   where email='$UID' order by id desc limit 1 ";
                   $result =  mysqli_query($link, $sql);
                   $inc=$result->fetch_object()->id;
                   $appn="AP"."$pos"."$br"."$inc";
                 //  echo"$appn $UID $br $pos ";
                 $rnd1=$_SESSION['rnd1'];
                $sql="INSERT INTO postapplied values('$UID','$appn','$br','$pos','N','$rnd1')";
           if(mysqli_query($link, $sql)) {

       

    } else{

        echo " ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
        
    
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
                         $( "#datepicker34" ).datepicker();
                         $( "#datepicker35" ).datepicker();
                         $( "#datepicker36" ).datepicker();
                         $( "#datepicker37" ).datepicker();
                         $( "#datepicker38" ).datepicker();
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
<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy1() 
{ 
        num11 = document.getElementById("e16").value;
        num12 = document.getElementById("e17").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent1 =  (num11 / num12)*100;
        return  ((percent1));
}    

function perc1(){
        if(document.getElementById("e16")){
            document.getElementById("e18").value=divideBy1();
        }  
    }
</script>    

<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy2() 
{ 
        num21 = document.getElementById("e26").value;
        num22 = document.getElementById("e27").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent2 =  (num21 / num22)*100;
        return  ((percent2));
}    

function perc2(){
        if(document.getElementById("e26")){
            document.getElementById("e28").value=divideBy2();
        }  
    }
</script>    
 
<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy3() 
{ 
        num31 = document.getElementById("e36").value;
        num32 = document.getElementById("e37").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent3 =  (num31 / num32)*100;
        return  ((percent3));
}    

function perc3(){
        if(document.getElementById("e36")){
            document.getElementById("e38").value=divideBy3();
        }  
    }
</script>    

<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy4() 
{ 
        num41 = document.getElementById("e46").value;
        num42 = document.getElementById("e47").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent4 =  (num41 / num42)*100;
        return  ((percent4));
}    

function perc4(){
        if(document.getElementById("e46")){
            document.getElementById("e48").value=divideBy4();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy5() 
{ 
        num51 = document.getElementById("e56").value;
        num52 = document.getElementById("e57").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent5 =  (num51 / num52)*100;
        return  ((percent5));
}    

function perc5(){
        if(document.getElementById("e56")){
            document.getElementById("e58").value=divideBy5();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy6() 
{ 
        num61 = document.getElementById("e66").value;
        num62 = document.getElementById("e67").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent6 =  (num61 / num62)*100;
        return  ((percent6));
}    

function perc6(){
        if(document.getElementById("e66")){
            document.getElementById("e68").value=divideBy6();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy7() 
{ 
        num71 = document.getElementById("e76").value;
        num72 = document.getElementById("e77").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent7 =  (num71 / num72)*100;
        return  ((percent7));
}    

function perc7(){
        if(document.getElementById("e76")){
            document.getElementById("e78").value=divideBy7();
        }  
    }
</script>    



<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy8() 
{ 
        num81 = document.getElementById("e86").value;
        num82 = document.getElementById("e87").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent8 =  (num81 / num82)*100;
        return  ((percent8));
}    

function perc8(){
        if(document.getElementById("e86")){
            document.getElementById("e88").value=divideBy8();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy9() 
{ 
        num91 = document.getElementById("e96").value;
        num92 = document.getElementById("e97").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent9 =  (num91 / num92)*100;
        return  ((percent9));
}    

function perc9(){
        if(document.getElementById("e96")){
            document.getElementById("e98").value=divideBy9();
        }  
    }
</script>    


<script language="JavaScript" type="text/javascript">
//percentage calculation
function divideBy10() 
{ 
        num101 = document.getElementById("e106").value;
        num102 = document.getElementById("e107").value;
        //document.getElementById("e17").innerHTML = (num1 / num2);
         percent10 =  (num101 / num102)*100;
        return  ((percent10));
}    

function perc10(){
        if(document.getElementById("e106")){
            document.getElementById("e108").value=divideBy10();
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

            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
<script>
     $(function() {
      $("#E3_13").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>
    <script>
    $(function() {
      $("#E3_23").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>

    <script>
    $(function() {
      $("#E3_33").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>


    <script>
    $(function() {
      $("#E3_43").autocomplete({
        source: 'search.php',
        minLength: 3,
        focus: function (event, ui) {
            $(event).val(ui.item.label);
        },
        select: function (event, ui) {
            $(event).val(ui.item.label);
            //$("input#FLD_WS_ID").val(ui.item.value);
        },
        change: function (event, ui) {
            if (!ui.item) {
                $(this).val('');
            }
        }
    });
    });
    </script>




    </head>
    <body>
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
                                        <div id="fnt">
                                        <a tabindex="-1" href="logout.php"> <div id="fnt"> Logout </div></a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              <li><a href="post.php">My Application(s)</a></li>

                                                          <li><a href="up.php">Upload Photo/Documents </a></li>
                                                               <li><a href="view1.php">View/Edit Application</a></li>
                                                           
							  <li><a href="jaddd.php">Publication Details</a></li>
 <li><a href="submit.php">Submit/Print Application</a></li>

                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
        
       <form action="eq2pageinsert.php" method="post" name="f1" >
               <hr>
               <p> Your application  No :<input type="text"  name="nappn" value="<?php echo $appn; ?> "  readonly/> </p>
                     
           <div class="form1">
                        
         <hr align="left" width="88%">  
      <table CELLPADDING=10 cellspacing="10" > 
 <tr>
     <td align="">
       <b>    1.  Name in Full 
     </td>
    <td>
         <input type="text" maxlength="150" size="50" maxlength="120" name="Page5" value="" required>
         </td>
 
            <td >
              a) Father's Name
       </td>
        <td>
            <input name="Page6" maxlength="150" type="text" maxlength="100" size="25" required>

       </td>
     <td align="center">
          Mother's Name
     </td>
     <td>
         <input type="text"  size="25" maxlength="150" name="Page7" value="" >
         </td>
          </tr>
           </table>
               <table CELLPADDING="15" cellspacing="25">
 <tr >
 <td align="right">
     <b> b) Gender </b>
 </td>

 <td required>
     <input type="radio" name="Page8" value="Male" /> Male&nbsp;
     <input type="radio" name="Page8" value="Female" /> Female &nbsp;
       <input type="radio" name="Page8" value="Transgender" /> Transgender&nbsp;
 </td>
 <td required>
    <b> c) Marital Status 
 <td>  <input type="radio" name="Page11" value="Married" /> Married&nbsp;
      <input type="radio" name="Page11" value="Single"/>Single &nbsp;
</td>
<td required>
    <b> d) Category 
</td>   
<td required>  
    <input type="radio" name="Page12" value="SC"/> SC &nbsp;
   
             <input type="radio" name="Page12" value="ST"/>ST &nbsp;
        
   
        <input type="radio" name="Page12" value="OBC"/>OBC &nbsp;
        
 
    <input type="radio" name="Page12" value="GEN"/>GEN  &nbsp;
        </td>
        </tr>
               </table>   
         
           <table CELLPADDING="5" cellspacing="5">
 <tr>
     <td>  <b>&nbsp;&nbsp;&nbsp;e) Attested copy certificate enclosed(Yes/No) (only in case of SC/ST/OBC) </b> <td><select name="Page17">
    <option> -Select-  </option>
             <option value="NO">NO </option>
        <option value="YES">YES </option></select> </td>
                    </td>
    </tr>
 <tr>
     <td> <b> &nbsp;&nbsp; f) Percentage of Disability of PWD candidate  </td>  </b> <td><input type="text" maxlength="10" name="Page18" value="" size="5" /> &nbsp;&nbsp;&nbsp;
         <input type="radio" name="Page19" value="None" size="5" />None &nbsp;
         <input type="radio" name="Page19" value="VH" size="5" />VH &nbsp;
         <input type="radio" name="Page19" value="OH" size="5" />OH &nbsp;
         <input type="radio" name="Page19" value="HH" size="5" />HH &nbsp;</td>
        </tr>
           </table>
                  <hr align="left" >  
                  <b>2. Address:  </b> <br>
   <div class="">
<div class="floatLeft">
<table CELLPADDING="5" cellspacing="10">
<tr>
     <td align="">      (a) Permanent:  </td>  </tr>
<tr required><td> Address Line1 </td> <td><input type="text" name="Page22" value="" size="40" maxlength="150" required/> </td></tr>
<tr><td>Address Line2 </td><td> <input type="text" name="Page23" value="" size="40" maxlength="150" /> </td>  </tr>
<tr><td> Address Line3 </td> <td> <input type="text" name="Page24" value="" size="40" maxlength="150"> </td></tr>
<tr><td required>      City  </td> <td>  <input type="text" name="Page25" value="" size="40" maxlength="100" required/>  </td> </tr> 
<tr><td required>      Pin Code</td> <td>  <input type="text" name="Page26" value="" size="40" maxlength="10" required/>  </td> </tr>
<tr><td required>     State </td> <td>  <input type="text" name="Page27" value="" size="40" maxlength="100" required/></td> </tr>


</table>
</div>

<div class="floatRight">
<table CELLPADDING="5" cellspacing="10">
    <tr><td colspan="2" > (b) Address for Correspondence:  </td></tr>
    <tr> <td > Address Line1 </td> <td><input type="text" name="Page28" value="" size="40" maxlength="150"  /> </td>  </tr>
    <tr><td>Address Line2 </td><td> <input type="text" name="Page29" value="" size="40" maxlength="150" /> </td></tr>
    <tr> <td> Address Line3 </td> <td> <input type="text" name="Page30" value="" size="40" maxlength="150"/> </td></tr>
    <tr> <td> City  </td> <td>  <input type="text" name="Page31" value="" size="40" maxlength="100" />  </td></tr>
    <tr>  <td>      Pin Code</td> <td>  <input type="text" name="Page32" value="" size="40" maxlength="10" />  </td>  </tr>
    <tr><td>     State </td> <td>  <input type="text" name="Page33" value="" size="40" maxlength="80" /></td> </tr>
    <tr> <td>Mobile</td> <td><input type="text" name="Page34" value="" size="40" maxlength="12" /> </td></tr>
    <tr><td>Telephone (with <br>STD code)office </td> <td><input type="text" name="Page35" value="" size="40" maxlength="20" /></td></tr>
    <tr> <td>  Telephone (with <br>STD code) Res. No.</td> <td><input type="text" name="Page36" value="" size="40" maxlength="20" /> </td></tr>
    <tr>  <td>   Email</td> <td><input type="text" name="Page37" value="" size="40" maxlength="150"/></td></tr>
 
</table>
</div>
</div>
                  <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
    
                           <hr align="left" >  

               <table CELLPADDING="5" cellspacing="5" >
         
                   <td> <b>    3   &nbsp;&nbsp;(a) Date of Birth: &nbsp;&nbsp;&nbsp; </b></td>
    
            <td>
        
                <input type="text" id="start_dt" class='datepicker' maxlength="20" size='15'  name="Page38" required>  
     </td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td align=""> &nbsp;&nbsp; <b> 3 &nbsp;&nbsp;(b) Nationality  </b></td>  
    
     <td>
         <input type="text" name="Page41" maxlength="20" value="" required>
     </td>
        </tr>
               </table>
                           
                         
                           <hr align="left" >  
     
               <table CELLPADDING="5" cellspacing="5">
         <tr>   
         </tr>
         <tr>
     <td> 
         <b> 4. Present Employment:  </b></td>  </tr>
         <tr><td> Designation </td><td><input type="text" name="Page42" value=""  size="40" maxlength="150"/> </td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Organization </td><td><input type="text" name="Page43" value="" size="40" maxlength="150" /> </td> 
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of Joining to the present post </td><td><input type="text" id="start_dt1" class='datepicker' maxlength="20" size='15'  name="Page44" />  </td>
       </tr>
       <tr><td>Scale of pay Rs. </td><td><input type="text" name="Page45" value="" size="40" maxlength="25" /> </td> 
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGP/GP </td><td> <input type="text" name="Page46" value=""  placeholder="AGP/GP:(if applicable)" size="40" maxlength="25"/> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Basic pay Rs. </td><td> <input type="text" name="Page47" value="" size="40" maxlength="80"/> </td> </tr>
       <tr><td> Total Emoluments <br>(per month) Rs. </td><td> <input type="text" name="Page48" value="" size="40" maxlength="25"/> </td></tr> 
       </table>
                                                                   <hr align="left" >  

                                                 <table>
                                                     <tr>  <td> <b> 5. Areas of specializations: </b>
                                                         </td> <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                             <input type="text" size="40" maxlength="150" name="Page49" value="" style="width:720px;" required/> </td>
        </tr>
               </table>
<hr>      
  <b> 6. Academic Career Record starting with SSLC. Enter individual semester marks where relevant (Diploma/UG/PG/Others). (Upload certificates/marks cards.) </b>
  <br>
  <br>
   
  <table>
        <tr>
         <td>Certificate/Degree<br>-Specialization<br></td>
        <td>year</td>
        <td>School/College</td>
        <td>Board/University <br></td>
        <td>Class/<br>Division</td>
        <td>Marks/CGPA <br> Obtained</td>
        <td>Max Marks <br>/CGPA</td>
        <td>Percentage/<br>    CGPA</td>
        <td> Semester-wise <br>  Marks (if relevant, <br> separated by semi-colon) </td>
    </tr>
    <tr>
        <td><input type="text" maxlength="50" name="e11" value="" ></td>
        <td><select name="e12" style="width:100px;"   value="" >
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
        <td><input type="text" name="e13"  maxlength="150" value=""  ></td>
        <td><input type="text" name="e14" maxlength="150"  value=""  ></td>
        <td><input type="text" name="e15"  maxlength="20"  value=""  style="width:120px;"  ></td>
         <!--for pecentage -->
         <td ><input type="text" id="e16" maxlength="11" name="e16" style="width:100px;" onChange="perc1()"></td>
         <td ><input type="text" id="e17" maxlength="11" name="e17" style="width:100px;" onChange="perc1()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e18"  id="18"  maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e19"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
        
    </tr>
    <tr>
    <td><input type="text"  maxlength="50" name="e21" ></td>
        <td><select name="e22" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e23" ></td>
        <td><input type="text" maxlength="150" name="e24" ></td>
        <td><input type="text" maxlength="20"  name="e25"  style="width:120px;"  ></td>
         <!--for pecentage -->
         <td ><input type="text" id="e26" maxlength="11" name="e26" style="width:100px;" onChange="perc2()"></td>
         <td ><input type="text" id="e27" maxlength="11" name="e27" style="width:100px;" onChange="perc2()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e28"  id="28" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e29"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
</tr>
    <tr>
    <td><input type="text" maxlength="50" name="e31" ></td>
        <td><select name="e32" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e33" ></td>
        <td><input type="text" maxlength="150" name="e34" ></td>
        <td><input type="text" maxlength="20" name="e35"  style="width:120px;"  ></td>
       <!--for pecentage -->
         <td ><input type="text" id="e36" maxlength="11" name="e36" style="width:100px;" onChange="perc3()"></td>
         <td ><input type="text" id="e37" maxlength="11" name="e37" style="width:100px;" onChange="perc3()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e38"  id="38" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e39"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td><input type="text" maxlength="50" name="e41" ></td>
        <td><select name="e42" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e43" ></td>
        <td><input type="text" maxlength="150"  name="e44" ></td>
        <td><input type="text" maxlength="20"  name="e45" style="width:120px;"></td>
         <!--for pecentage -->
         <td ><input type="text" id="e46" maxlength="11" name="e46" style="width:100px;" onChange="perc4()"></td>
         <td ><input type="text" id="e47" maxlength="11" name="e47" style="width:100px;" onChange="perc4()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e48" id="48" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e49"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td><input type="text" maxlength="50" name="e51" ></td>
        <td><select name="e52" style="width:100px;">
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
        <td><input type="text" maxlength="150"  name="e53" ></td>
        <td><input type="text"  maxlength="150" name="e54" ></td>
        <td><input type="text" maxlength="20" name="e55" style="width:120px;"></td>
        <!--for pecentage -->
         <td ><input type="text" id="e56" maxlength="11" name="e56" style="width:100px;" onChange="perc5()"></td>
         <td ><input type="text" id="e57" maxlength="11" name="e57" style="width:100px;" onChange="perc5()"></td>
         <!--for pecentage -->
         <td><input type="text" name="e58" id="58"  maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e59"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
    <td><input type="text" maxlength="50" name="e61" ></td>
        <td><select name="e62" style="width:100px;">
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
        <td><input type="text"  maxlength="150" name="e63" ></td>
        <td><input type="text" maxlength="150" name="e64" ></td>
        <td><input type="text" maxlength="20"  name="e65" style="width:120px;"></td>
         <!--for pecentage -->
         <td ><input type="text" id="e66" maxlength="11" name="e66" style="width:100px;" onChange="perc6()"></td>
         <td ><input type="text" id="e67" maxlength="11" name="e67" style="width:100px;" onChange="perc6()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e68" id="68" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e69"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
    <tr>
        <td><input type="text" maxlength="50" name="e71" ></td>
        <td><select name="e72" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e73" ></td>
        <td><input type="text" maxlength="150" name="e74" ></td>
        <td><input type="text"  maxlength="20" name="e75" style="width:120px;" ></td>
        <!--for pecentage -->
         <td ><input type="text" id="e76" maxlength="11" name="e76" style="width:100px;" onChange="perc7()"></td>
         <td ><input type="text" id="e77" maxlength="11" name="e77" style="width:100px;" onChange="perc7()"></td>
         <!--for pecentage -->
         <td><input type="text" name="e78" id="78" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e79"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on"  ></td>
    </tr>
    <tr>
        <td><input type="text" maxlength="50"  name="e81" ></td>
        <td><select name="e82" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e83" ></td>
        <td><input type="text" maxlength="150" name="e84" ></td>
        <td><input type="text" maxlength="20"  name="e85" style="width:120px;"></td>
       <!--for pecentage -->
         <td ><input type="text" id="e86" maxlength="11" name="e86" style="width:100px;" onChange="perc8()"></td>
         <td ><input type="text" id="e87" maxlength="11" name="e87" style="width:100px;" onChange="perc8()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e88" id="88" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e89"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
      <tr>
        <td><input type="text" maxlength="50" name="e91" ></td>
        <td><select name="e92" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e93" ></td>
        <td><input type="text" maxlength="150" name="e94" ></td>
        <td><input type="text" maxlength="20"  name="e95" style="width:120px;" ></td>
         <!--for pecentage -->
         <td ><input type="text" id="e96" maxlength="11" name="e96" style="width:100px;" onChange="perc9()"></td>
         <td ><input type="text" id="e97" maxlength="11" name="e97" style="width:100px;" onChange="perc9()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e98" id="98" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e99"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on" ></td>
    </tr>
      <tr>
        <td><input type="text" maxlength="50" name="e101" ></td>
        <td><select name="e102" style="width:100px;">
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
        <td><input type="text" maxlength="150" name="e103" ></td>
        <td><input type="text" maxlength="150" name="e104" ></td>
        <td><input type="text" maxlength="20" name="e105" style="width:120px;" ></td>
         <!--for pecentage -->
         <td ><input type="text" id="e106" maxlength="11" name="e106" style="width:100px;" onChange="perc10()"></td>
         <td ><input type="text" id="e107" maxlength="11" name="e107" style="width:100px;" onChange="perc10()"></td>
         <!--for pecentage -->
        <td><input type="text" name="e108" id="108" maxlength="10"  value="" style="width:80px;" ></td>
        <td><input type="text" name="e109"  maxlength="50"  value=""  style="width:100px;" pattern="[0-9]{3}((;)[0-9]{3})*" title="pattern is like this 3-digit followed by semicolon again followed by 3-digit and so on"  ></td>
    </tr>
    </table>
 <hr>
<b> 7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b>
<br>The applicant's PhD final viva should be completed before 11/Feb/2017.
     <br><br>
  
 <table style="table-layout: fixed;" cellpadding="1" cellspacing="" >
                 <tr>
                     <td>Thesis Title</td>
                    <td>From Date <br>(MM/DD/YYYY)</td>
                    <td>Final Viva Date<br>(MM/DD/YYYY)</td>
                  <td>Institute/University</td>
                    <td>Guide/Mentor</td>
                    <td>Mode(Full/<br>Part time)</td>
                    <td>Area of Research</td>
                    <td>Award Date <br>(MM/DD/YYYY)</td>
                </tr>  
              <tr>
                    <td><textarea rows="1" cols="30" maxlength="500" input type="text" name="ph1"  id="message"  >NA</textarea> </td> 
                    <td>
                        <input type="text" maxlength="20" id="datepicker"  name="ph2"  style="width:80px;"  value='NA' >   </td> 
                    <td> 
                        <input type="text" maxlength="20" id="datepicker1"  name="ph3" style="width:80px;" value='NA' >    </td> 
                    <td ><input type="text" maxlength="150" name="ph4" class="form-control" size="40"  value='NA'> </td> 
                    <td><input type="text" maxlength="150" name="ph5" class="form-control" size="30" value='NA' > </td> 
                    <td align='center'><select name="ph6"  style="width:140px;" >
                            <option value='NA'> -Select- </option>
                            <option value="Full Time">Full Time </option>
                                   <option value="Part Time">Part Time </option></select> </td> 
                                   <td><input type="text" maxlength="150"   name="ph7"  style="width:100px;"  value='NA'>  </td> 
                                   <td><input type="text" maxlength="20" id="datepicker3"  name="ph8"  style="width:100px;"  value='NA' ></td> 
                </tr>
</table> 
<hr>
<b>   8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>    
      <table>
               
                <tr >
                    <td>Career </td>
                    <td>From Date <br> (MM/DD/YYYY)</td>
                    <td>To Date <br> (MM/DD/YYYY)</td>
                  <td>Institute/Organization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr> <tr>
                    <td><textarea rows="1" cols="30" val="" maxlength="150" input type="text" name="pd11"  id="message" placeholder="Career" ></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker4"  name="pd12"  style="width:100px;" ></td> 
                    <td><input type="text" maxlength="20" id="datepicker5"  name="pd13"  style="width:100px;" > </td> 
                    <td ><input type="text" maxlength="150" name="pd14" class="form-control" size="40" > </td> 
                    <td><input type="text" name="pd15"  maxlength="150" class="form-control" size="30" > </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd16" class="form-control" size="30" > </td> 
                      </tr>
                      <tr>
                          <td><textarea rows="1" cols="30" val=""  maxlength="150" input type="text" name="pd21"  id="message" placeholder="Career" ></textarea> </td> 
                          <td><input type="text" maxlength="20" id="datepicker6"  name="pd22"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker7"  name="pd23"  style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150" name="pd24" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd25" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd26" class="form-control" size="30"> </td> 
                    
                      </tr>
                      <tr>
                    <td><textarea rows="1" maxlength="150" cols="30" val="" input type="text" name="pd31"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text"  maxlength="20" id="datepicker8"  name="pd32"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker9"  name="pd33"  style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150"  name="pd34" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd35" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150"  name="pd36" class="form-control" size="30"> </td> 
                      </tr>
                       <tr>
                           <td><textarea rows="1" maxlength="150" cols="30" val="" input type="text" name="pd41"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker10"  name="pd42"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker11"  name="pd43"   style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150" name="pd44" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd45" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd46" class="form-control" size="30"> </td> 
                      </tr>
                       <tr>
                    <td><textarea rows="1" maxlength="150" cols="30" val="" input type="text" name="pd51"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker12"  name="pd52"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker13"  name="pd53"   style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150" name="pd54" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd55" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd56" class="form-control" size="30"> </td> 
                      </tr>
             </table>                                 
                
 <hr>      
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
                    <td><textarea rows="1" cols="50" val="" maxlength="150" input type="text" name="nt11"  id="message" placeholder="Examination"></textarea> </td> 
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
<td><input type="text" maxlength="150" name="nt13" class="form-control" size="50"> </td> 
<td ><input type="text" maxlength="10" name="nt14" class="form-control" size="15"  style="width:100px;"> </td> 
<td><input type="text" maxlength="20" name="nt15" class="form-control" size="10"  style="width:100px;"> </td> 
<td align='center'><input type="text" maxlength="10" name="nt16" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" maxlength="150" cols="50" val="" input type="text" name="nt21"  id="message" placeholder="Examination"></textarea> </td> 
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
<td><input type="text" maxlength="150" name="nt23" class="form-control" size="50"> </td> 
<td ><input type="text" maxlength="10" name="nt24" class="form-control" size="15"  style="width:100px;"> </td> 
<td><input type="text" maxlength="20" name="nt25" class="form-control" size="10"  style="width:100px;"> </td> 
<td align='center'><input type="text" maxlength="10" name="nt26" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" maxlength="150" cols="50" val="" input type="text" name="nt31"  id="message" placeholder="Examination"></textarea> </td> 
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
                    <td><input type="text" maxlength="150" name="nt33" class="form-control" size="50"> </td> 
                    <td ><input type="text" maxlength="10" name="nt34" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" name="nt35" maxlength="20" class="form-control" size="10"  style="width:100px;" > </td> 
                    <td align='center'><input type="text" maxlength="10" name="nt36" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" maxlength="150" cols="50" val="" input type="text" name="nt41"  id="message" placeholder="Examination"></textarea> </td> 
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
                    <td><input type="text" maxlength="150" name="nt43" class="form-control" size="50" > </td> 
                    <td ><input type="text" maxlength="10" name="nt44" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" maxlength="20" name="nt45" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" maxlength="10" name="nt46" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                <tr>
                    <td><textarea rows="1" cols="50" maxlength="150" val="" input type="text" name="nt51"  id="message" placeholder="Examination"></textarea> </td> 
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
                    <td><input type="text" maxlength="150"  name="nt53" class="form-control" size="50"> </td> 
                    <td ><input type="text" maxlength="10"  name="nt54" class="form-control" size="15"  style="width:100px;"> </td> 
                    <td><input type="text" maxlength="20" name="nt55" class="form-control" size="10"  style="width:100px;"> </td> 
                    <td align='center'><input type="text" maxlength="10" name="nt56" class="form-control" size="10"  style="width:100px;"> </td> 
                    
                </tr>
                 </table>
 <hr>
<!-- <p align="center"> 
    <input  id="btn1" type="submit" formaction="eq21page.php" value="Save Progress" name="previous">               </p> 
        <hr> -->
  <table>
<tr>
<p>  <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b><p> </tr>
<tr>For the current employed position, please enter Date of Leaving as the last date of the application submission </tr> </table>

         <br>
         <br>
 <table  width="60%" style=" text-align:center;" >
    <thead>
        <tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining <br> MM/DD/YYYY</td> <td>Date of Leaving <br> MM/DD/YYYY</td> <td>Number of Days/Months/Years</td> <td>Scale of Pay & GP/AGP(If applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
   <tr>
            <td><input type="text" maxlength="150" size="30" name="E11"></td>
            <td><input type="text" maxlength="150" size="30" name="E12"></td>
            <td> <input type="text" maxlength="150" id="datepicker14"  name="E13" onchange="cal()"  style="width:100px;"/> </td>
            <td><input type="text" maxlength="150"  id="datepicker15" name="E14" onchange="cal()" style="width:100px;" /></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays" name="E15" style="width:150px;" /></td>
            <td><input type="text" maxlength="150" size="10" name="E16"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E17"  style="width:100px;"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="150" size="30" name="E21"></td>
            <td><input type="text" maxlength="150" size="30" name="E22"></td>
          <td><input type="text"  maxlength="150"  id="datepicker16" name="E23" onchange="cal1()"  style="width:100px;" /> </td>
            <td><input type="text" maxlength="150"  id="datepicker17" name="E24" onchange="cal1()" style="width:100px;"/></td>
            <td><input type="text" maxlength="150"  class="textbox" id="numdays1" name="E25" style="width:150px;"/></td>
            <td><input type="text" maxlength="150"  maxlength="150"  size="10" name="E26"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E27"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

       <tr>
              <tr>
            <td><input type="text" maxlength="150"  size="30" name="E31"></td>
            <td><input type="text" maxlength="150" size="30" name="E32"></td>
            <td> <input type="text" maxlength="150" id="datepicker18"  name="E33" onchange="cal2()"  style="width:100px;"/> </td>
            <td><input type="text"  maxlength="150" id="datepicker19" name="E34" onchange="cal2()" style="width:100px;"/></td>
            <td><input type="text"  maxlength="150" class="textbox" id="numdays2" name="E35" style="width:150px;" /></td>
            <td><input type="text"  maxlength="150" size="10" name="E36"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E37"  style="width:100px;"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>



        <tr>
            <td><input type="text" maxlength="150" size="30" name="E41"></td>
            <td><input type="text" maxlength="150"  size="30" name="E42"></td>
            <td><input type="text" maxlength="150"id="datepicker20" name="E43" onchange="cal3()"  style="width:100px;" /></td>
            <td><input type="text" maxlength="150" id="datepicker21" name="E44" onchange="cal3()" style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays3" name="E45" style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E46"  style="width:100px;"></td>
            <td><input type="text" maxlength="150"  size="10" name="E47"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="150" size="30" name="E51"></td>
            <td><input type="text" maxlength="150" size="30" name="E52"></td>
            <td><input type="text" maxlength="150"  id="datepicker22" name="E53" onchange="cal4()"  style="width:100px;"/></td>
            <td><input type="text"  maxlength="150" id="datepicker23" name="E54" onchange="cal4()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays4" name="E55"  style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E56"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E57"  style="width:100px;"></td>
  
        </tr>

        <tr>
            <td><input type="text" maxlength="150" size="30" name="E61"></td>
            <td><input type="text" maxlength="150" size="30" name="E62"></td>
            <td><input type="text" maxlength="150"  id="datepicker24" name="E63" onchange="cal5()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" id="datepicker25" name="E64" onchange="cal5()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays5" name="E65"  style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E66"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E67"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
            <td><input type="text" maxlength="150"  size="30" name="E71"></td>
            <td><input type="text" maxlength="150" size="30" name="E72"></td>
          <td><input type="text"  maxlength="150"  id="datepicker26" name="E73" onchange="cal6()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" id="datepicker27" name="E74" onchange="cal6()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays6" name="E75"  style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E76"  style="width:100px;"></td>
            <td><input type="text" maxlength="150"  size="10" name="E77"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
         <tr>
            <td><input type="text" maxlength="150" size="30" name="E81"></td>
            <td><input type="text" maxlength="150" size="30" name="E82"></td>
           <td><input type="text" maxlength="150"  id="datepicker28" name="E83" onchange="cal7()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150"  id="datepicker29" name="E84" onchange="cal7()" style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays7" name="E85" style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E86"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E87"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" maxlength="150"  size="30" name="E91"></td>
            <td><input type="text" maxlength="150" size="30" name="E92"></td>
            <td><input type="text" maxlength="150" id="datepicker30" name="E93" onchange="cal8()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" id="datepicker31" name="E94" onchange="cal8()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays8" name="E95" style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E96"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E97"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
         <tr>
            <td><input type="text" maxlength="150"  size="30" name="E101"></td>
            <td><input type="text" maxlength="150" size="30" name="E102"></td>
            <td><input type="text" maxlength="150"id="datepicker32" name="E103" onchange="cal9()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" id="datepicker33" name="E104" onchange="cal9()"  style="width:100px;"/></td>
            <td><input type="text" maxlength="150" class="textbox" id="numdays9" name="E105"  style="width:150px;"/></td>
            <td><input type="text" maxlength="150" size="10" name="E106"  style="width:100px;"></td>
            <td><input type="text" maxlength="150" size="10" name="E107"  style="width:100px;"></td>
            
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

 </tbody>
           
</table>  
<hr> 
<p> <b> 10. a. Experience  </b> </p> 
<table colspan="10"> 
             <tr><td colspan="3"> </td></tr>
             <tr> <td> &nbsp;</td><td> &nbsp;&nbsp;&nbsp; Year&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp; Months</td> </tr>
             <tr><td> After Masters, not including PhD enrollment period:</td><td><input type="text" maxlength="100" size="10" id="nexpg" name="nexpg"  style="width:100px;"></td><td><input type="text" maxlength="100" size="10" id="nexpg1" name="nexpg1"   style="width:100px;"><td> </tr>
         <tr><td>After Ph.D :<td> <input type="text" maxlength="100" size="10"  id="nexphd" name="nexphd"  style="width:100px;" ></td><td> <input type="text" maxlength="100" size="10" id="nexphd1" name="nexphd1"  style="width:100px;"><td> </tr>
         
         </table>  
<hr>
     <b>11. Total Experience (Number of Years and/or months)  </b>      
     <br><br>                      <table>
        <tr>
       <td align="left">
          <p>Teaching Experience</p>
       </td> <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="teachingexp" type="text"  size="25" maxlength="150"/>
       
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
       <td >
          <p>Research Experience (Post-PhD)</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="researchexp" type="text"  size="25" maxlength="150" />

       </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
       <td align="left">
          <p>Industrial Experience</p>
       </td><td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="industryexp" type="text" maxlength="150" size="25" />

       </td>
    </tr>
        
    
  
                  </table>
<hr>  
                     <p>
          <b>12. Teaching Experience (Number of Years and/or months) :</b>
          &nbsp;&nbsp;&nbsp;&nbsp; <br> <br>Academic experience as applicable (month / year) in the posts indicated or equivalent
              
          
    <table border="0" cellpadding="0" cellspacing="5">
     <tr>
       <td align="right">
          <p>Assistant Professor or equivalent</p>
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
        <td>
          <input name="asstprof" type="text" maxlength="150" size="25" />
         <!--<font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
       <td>&nbsp;&nbsp;&nbsp;</td>
       
   
    </tr>
 
    
        
       </table>
<hr>      <p>

   <b>13. Subjects Taught (Last 4 years)</b> 
   <br><br>
                  
                <table  width="60%" style="text-align: center">
                <thead>
                     <tr><td>Title of the Course taught </td> <td>Year</td> <td>U.G. / P.G. </td> <td>Approximate no. of students</td> <td>Institution/University</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
       <tr>
             <td><input type="text" maxlength="150" size="10" name="E2_11"></td>
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
            <td><input type="text" maxlength="150" size="3" name="E2_13"></td>
            <td><input type="text" maxlength="150"  size="10" name="E2_14"></td>
            <td><input type="text" maxlength="150" size="15" name="E2_15"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
             <td><input type="text" maxlength="150" size="10" name="E2_21"></td>
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
            <td><input type="text" maxlength="150" size="3" name="E2_23"></td>
            <td><input type="text" maxlength="150" size="10" name="E2_24"></td>
            <td><input type="text" maxlength="150" size="15" name="E2_25"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text" size="10" maxlength="150"  name="E2_31"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_33"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_34"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_35"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
       
         <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_41"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_43"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_44"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_45"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        
         <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_51"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_53"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_54"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_55"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_61"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_63"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_64"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_65"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_71"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_73"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_74"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_75"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" maxlength="150"  name="E2_81"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_83"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_84"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_85"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_91"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_93"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_94"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_95"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       <tr>
            <td><input type="text" size="10" maxlength="150" name="E2_101"></td>
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
            <td><input type="text" size="3" maxlength="150" name="E2_103"></td>
            <td><input type="text" size="10" maxlength="150" name="E2_104"></td>
            <td><input type="text" size="15" maxlength="150" name="E2_105"></td>
            
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            </table>
 <hr><p><b>14. Research guidance (upload relevant document)</b> 
<table>
 <tr><td> Completed (Guided Sole): </td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing (Guiding Sole): </td> 
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td> Completed (Guided Joint): </td>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>   Ongoing (Guiding Joint): </td> 
        </tr>

            <tr> 
                 <td align="right">
          <p>Ph.D.  </p> 
       </td>
        <td>
          <input name="phdcomplete" type="text" maxlength="150" size="25" value=""/>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="phdongoing" type="text" maxlength="150" size="25" value="" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="cj1" type="text" maxlength="150" size="25" value="" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="oj1" type="text" maxlength="150" size="25"  value=""/>
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    </tr>
   
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgcomplete" type="text" maxlength="150" size="25" value="" />

       </td>
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgongoing" type="text" maxlength="150" size="25" value="" />

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="cj2" type="text" maxlength="150" size="25"  value=""/>

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="oj2" type="text" maxlength="150" size="25"  value=""/>

       </td>
    </tr>   
</table> 
 <hr>      
   <b>15. a.  Publication details - No. of Papers </b> 
        <br>     <br>     
           <table  >
             
                        <tr><td> Journal papers :</td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                        <td> Conference Publications:</td> </tr>
                    
                       </tr>  
 <tr> 
                                <td align="left">
            <p>International</p>
                        </td>    
                        <td>
                        <input name="JInternational" type="text" maxlength="150" size="25" />

                            </td>
                             <td align="left">
            <p>International</p>
                        </td>    
                        <td>
                        <input name="CInternational" type="text" maxlength="150" size="25" />

                            </td>
                            </tr>
        
 
                <tr> 
                        <td align="left">
                        <p>National</p>
                            </td>
                            <td>
                        <input name="JNational" type="text" maxlength="150" size="25" />
  
                       </td>
                       <td align="left">
                        <p>National</p>
                            </td>
                            <td>
                        <input name="CNational" type="text" maxlength="150" size="25" />
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
                       </td>
                    </tr>    
           
           
            </table>
<hr align="left" >  
           <b>15.b. Provide details of your 4 best SCI/SCOPUS/SSCI indexed journal papers.</b> <br><br>
      <table style="text-align: center">
     <thead>
         <tr><td>Author </td> <td>Title</td> <td>Journal</td> <td>Volume</td> <td>Pages </td> <td>Year</td> <td>DOI Link </td><td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
           <td><input  maxlength="150"  type="text" size="20" name="E3_11"></td>
            <td><input   maxlength="150"  type="text" size="30" name="E3_12"></td>
           
            <td>             
            <label for="E3_13"></label>
            <input type="text"  maxlength="150"  size="20"  id="E3_13" name="E3_13"></td>
            <!-- <td><input type="text" size="20" id="E3_13"></td> -->
            <td><input type="text"  maxlength="150"  size="20" name="E3_14"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E3_15"></td>
            <td><input type="text"  maxlength="150"  name="E3_16" /></td>
            <td><input type="text"   maxlength="150"  name="E3_17" /> </td>
          
           
        <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
           <td><input type="text"   maxlength="150"  size="20" name="E3_21"></td>
            <td><input type="text"   maxlength="150"  size="30" name="E3_22"></td>
            <td>             
            <label for="E3_23"></label>
            <input type="text"  maxlength="150"  size="20" id="E3_23" name="E3_23"></td>
            <td><input type="text"  maxlength="150"  size="20" name="E3_24"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E3_25"></td>
            <td><input type="text"   maxlength="150"  name="E3_26" /></td>
             <td><input type="text"  maxlength="150"  name="E3_27" /> </td>
           
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

         <tr>
            <td><input type="text"  maxlength="150"  size="20" name="E3_31"></td>
            <td><input type="text"  maxlength="150"  size="30" name="E3_32"></td>
             <td>             
            <label for="E3_33"></label>
            <input type="text"  maxlength="150"  size="20" id="E3_33" name="E3_33"></td>
          
            <td><input type="text"  maxlength="150"  size="20" name="E3_34"></td>
            <td><input type="text" maxlength="150" size="10" name="E3_35"></td>
            <td><input type="text" maxlength="150"  name="E3_36" /></td>
             <td><input type="text" maxlength="150" name="E3_37" /> </td>
           
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr>
            <td><input type="text"  maxlength="150" size="20" name="E3_41"></td>
            <td><input type="text" maxlength="150"  size="30" name="E3_42"></td>
             <td>             
            <label for="E3_43"></label>
            <input type="text" maxlength="150" size="20" id="E3_43" name="E3_43"></td>
          
            <td><input type="text" maxlength="150" size="20" name="E3_44"></td>
            <td><input type="text"  maxlength="150" size="10" name="E3_45"></td>
            <td><input type="text" maxlength="150"  name="E3_46" /></td>
             <td><input type="text" maxlength="150" name="E3_47" /> </td>
           
        </tr>
         </table> 
<hr>
<table>
  <b>  15. c. Details of all other publications can be added through the 'Publication Details' Tab.  </b>

</table>
 <hr>      

    <b> 16.  Books / Chapters Published & E-learning materials Developed (last 4 years) </b> 
    
    <br><br>
    <textarea name="BInternational" maxlength="1000"  style="width: 800px; height: 50px;" rows="" cols="200"  > </textarea> 
<hr>      

               <b> 17. Patents(applied or awarded) </b> 
    <br><br>
 <textarea  style="width: 800px; height: 50px;"rows="4" cols="100" name="patents" type="text" maxlength="1000" size="25" ></textarea>
                        <hr align="left" width="73%">      
         
    <b>18. Sponsored Projects (Project handled as Principal Investigator in last 4 Years)</b>
    <br><br>

<table  style="text-align: center" cellpadding="1" cellspacing="5" >
                 
               <tr><td>Funding Agency</td> <td>Title of the Project</td> <td>Project Cost </td> <td>Duration</td> <td>Current Status</td> <td>Remarks/Applied<br>(with date)</td>  <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                
        
          <tr>
          <td><input type="text"  maxlength="150" size="20" name="E4_11"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_12"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_13"></td>
            <td><input type="text"  maxlength="150" size="8" name="E4_14"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_15"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_16"></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
           <td><input type="text" maxlength="150" size="20" name="E4_21"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_22"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_23"></td>
            <td><input type="text" maxlength="150"  size="8" name="E4_24"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_25"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_26"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
           <td><input type="text" maxlength="150"  size="20" name="E4_31"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_32"></td>
            <td><input type="text" maxlength="150"  size="10" name="E4_33"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_34"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_35"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_36"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
           <td><input type="text" maxlength="150"  size="20" name="E4_41"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_42"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_43"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_44"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_45"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_46"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
           <td><input type="text" maxlength="150" size="20" name="E4_51"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_52"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_53"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_54"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_55"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_56"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        
      
                    
   </table>
<hr align="left" >      
<b>19. Consultancy Project (in last 4 years)</b> <br> <br>

                <table  style="text-align: center" cellpadding="1" cellspacing="1">
                 <thead>
                <tr><td>Funding Agency</td> <td>Title of the Consultancy <br>Work </td> <td>Duration/Ongoing </td> <td>Project Cost</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
        <tr>
            <td><input type="text" maxlength="150" size="20" name="F11"></td>
            <td><input type="text" maxlength="150" size="20" name="F12"></td>
            <td><input type="text" maxlength="150" size="20" name="F13"></td>
            <td><input type="text" maxlength="150" size="20" name="F14"></td>
           
	    
        </tr>
           
        
         <tr>
            <td><input type="text" maxlength="150" size="20" name="F21"></td>
            <td><input type="text" maxlength="150" size="20" name="F22"></td>
            <td><input type="text" maxlength="150" size="20" name="F23"></td>
            <td><input type="text" maxlength="150" size="20" name="F24"></td>
     
        </tr>
       
         <tr>
            <td><input type="text" maxlength="150" size="20" name="F31"></td>
            <td><input type="text" maxlength="150" size="20" name="F32"></td>
            <td><input type="text" maxlength="150" size="20" name="F33"></td>
            <td><input type="text" maxlength="150" size="20" name="F34"></td>
     
        </tr>
         <tr>
            <td><input type="text" maxlength="150" size="20" name="F41"></td>
            <td><input type="text"  maxlength="150" size="20" name="F42"></td>
            <td><input type="text" maxlength="150"  size="20" name="F43"></td>
            <td><input type="text" maxlength="150"  size="20" name="F44"></td>
     
        </tr>
          <tr>
            <td><input type="text" maxlength="150"  size="20" name="F51"></td>
            <td><input type="text"  maxlength="150" size="20" name="F52"></td>
            <td><input type="text" maxlength="150"  size="20" name="F53"></td>
            <td><input type="text" maxlength="150" size="20" name="F54"></td>
     
        </tr>
        
        
      
         </tbody>
           
   </table>
                 
                   <hr align="left" >      
                   <b>20. Professional Training Received / Summer / Winter Schools attended(Last 4 years - Upload photocopies)</b><br><br>

                                   <table style="text-align: center">
                <thead>
                <tr><td>Year</td> <td>Name of Training</td> <td>Duration </td> <td>Organization where training <br>was provided</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                </thead>
        <tbody>
        <tr>
            <td><select name="T11">
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
            <td><input type="text" maxlength="150"  size="20" name="T12"></td>
            <td><input type="text" maxlength="150"  size="10" name="T13"></td>
            <td><input type="text" maxlength="150" size="30" name="T14"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
            <td><select name="T21">
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
            <td><input type="text" maxlength="150" size="20" name="T22"></td>
            <td><input type="text" maxlength="150" size="10" name="T23"></td>
            <td><input type="text" maxlength="150" size="30" name="T24"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
        <tr>
            <td><select name="T31">
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
            <td><input type="text" maxlength="150"  size="20" name="T32"></td>
            <td><input type="text" maxlength="150"  size="10" name="T33"></td>
            <td><input type="text" maxlength="150" size="30" name="T34"></td>
           
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
       
      
        <tr>
            <td><select name="T41">
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
            <td><input type="text" maxlength="150" size="20" name="T42"></td>
            <td><input type="text" maxlength="150" size="10" name="T43"></td>
            <td><input type="text" maxlength="150" size="30" name="T44"></td>
        </tr>
       
        
        <tr>
            <td><select name="T51">
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
            <td><input type="text" maxlength="150" size="20" name="T52"></td>
            <td><input type="text" maxlength="150" size="10" name="T53"></td>
            <td><input type="text" maxlength="150" size="30" name="T54"></td>
        </tr>
        
        
        <tr>
            <td><select name="T61">
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
            <td><input type="text"  maxlength="150" size="20" name="T62"></td>
            <td><input type="text" maxlength="150" size="10" name="T63"></td>
            <td><input type="text" maxlength="150"  size="30" name="T64"></td>
        </tr>     
        
        <tr>
            <td><select name="T71">
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
            <td><input type="text" maxlength="150" size="20" name="T72"></td>
            <td><input type="text"  maxlength="150" size="10" name="T73"></td>
            <td><input type="text" maxlength="150" size="30" name="T74"></td>
        </tr>  
             
        <tr>
            <td><select name="T81">
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
            <td><input type="text" maxlength="150" size="20" name="T82"></td>
            <td><input type="text" maxlength="150" size="10" name="T83"></td>
            <td><input type="text" maxlength="150" size="30" name="T84"></td>
        </tr>
             
        <tr>
            <td><select name="T91">
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
            <td><input type="text" maxlength="150" size="20" name="T92"></td>
            <td><input type="text" maxlength="150" size="10" name="T93"></td>
            <td><input type="text" maxlength="150" size="30" name="T94"></td>
        </tr>
        
        <tr>
            <td><select name="T101">
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
            <td><input type="text" maxlength="150" size="20" name="T102"></td>
            <td><input type="text" maxlength="150" size="10" name="T103"></td>
            <td><input type="text" maxlength="150" size="30" name="T104"></td>
        </tr>      
        
         </tbody>
           
   </table>
<hr>
<!-- <p align="center"> <input id="btn1" type="submit" formaction="eq22page.php" value="Save Progress" name="previous">             </p>
<hr>       -->  
<b> 21. Conferences/Seminars / Workshops attended (Last 4 year -Upload photocopies of the certificates)</b>    
<table style="text-align: center">
    <tr>
        <td>Year</td>
        <td> Conferences/Seminars / <br> Workshops</td>
        <td>Title of paper presented </td>
    </tr>
    <tr>
        <td><select name="cp11">
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
            <td> <input type="text"  maxlength="150" name="cp12" siz="45" > </td>
        <td> <input type="text"  maxlength="150" name="cp13" ></td>
    </tr>
    <tr>
        <td><select name="cp21">
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
            <td><input type="text" maxlength="150" name="cp22" siz="45" ></td>
        <td><input type="text" maxlength="150"  name="cp23" ></td>
    </tr>
    <tr>
    <td><select name="cp31">
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
            <td ><input type="text" maxlength="150" name="cp32" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp33" ></td>
    </tr>
    <tr>
    <td><select name="cp41">
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
            <td ><input type="text" maxlength="150" name="cp42" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp43" ></td>
    </tr>
    <tr>
        <td><select name="cp51">
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
            <td><input type="text" maxlength="150" name="cp52" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp53" ></td>

    </tr>
    <tr>
        <td><select name="cp61">
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
            <td ><input type="text" maxlength="150" name="cp62" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp63" ></td>

    </tr>
    
    <tr>
        <td><select name="cp71">
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
            <td ><input type="text" maxlength="150" name="cp72" siz="45" ></td>
        <td><input type="text" maxlength="150" name="cp73" ></td>

    </tr>
    
    <tr>
        <td><select name="cp81">
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
            <td ><input type="text" maxlength="150" name="cp82" siz="45" ></td>
        <td><input type="text"  maxlength="150" name="cp83" ></td>

    </tr>
    
    <tr>
        <td><select name="cp91">
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
            <td ><input type="text" maxlength="150" name="cp92" siz="45" ></td>
        <td><input type="text"  maxlength="150" name="cp93" ></td>

    </tr>
    <tr>
        <td><select name="cp101">
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
            <td ><input type="text" maxlength="150" name="cp102" siz="45" ></td>
        <td><input type="text" maxlength="150"  name="cp103" ></td>

    </tr>

    </table>
                   <hr align="left" >   <b>22. Industrial Experience/Interaction (Upload photocopies)  </b> <br><br>
                       <table style="text-align: center">
    <tr>
        <td>Organization</td>
        <td> Nature of Work </td>
        <td>Period</td>
    </tr>
    <tr>
    <tr>
        <td><input type="text" maxlength="150" name="ie11" ></td>
                    <td ><input type="text" maxlength="150" name="ie12"  ></td>
        <td><input type="text" maxlength="150" name="ie13" ></td>

    </tr>
    <tr>
        <td><input type="text"  maxlength="150" name="ie21" ></td>
                    <td ><input type="text" maxlength="150" name="ie22"  ></td>
        <td><input type="text" maxlength="150" name="ie23" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie31" ></td>
                    <td ><input type="text" maxlength="150" name="ie32"  ></td>
        <td ><input type="text" maxlength="150" name="ie33" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie41" ></td>
                    <td ><input type="text" maxlength="150" name="ie42"  ></td>
        <td ><input type="text" maxlength="150" name="ie43" ></td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie51" ></td>
                    <td ><input type="text" maxlength="150" name="ie52"  ></td>
        <td ><input type="text" maxlength="150" name="ie53" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie61" ></td>
                    <td ><input type="text" maxlength="150" name="ie62"  ></td>
        <td ><input type="text" maxlength="150" name="ie63" ></td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie71" ></td>
                    <td ><input type="text" maxlength="150" name="ie72"  ></td>
        <td ><input type="text" maxlength="150" name="ie73" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie81" ></td>
                    <td ><input type="text" maxlength="150" name="ie82"  ></td>
        <td ><input type="text" maxlength="150" name="ie83" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie91" ></td>
                    <td ><input type="text" maxlength="150" name="ie92"  ></td>
        <td ><input type="text" maxlength="150" name="ie93" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="ie101" ></td>
                    <td ><input type="text" maxlength="150"  name="ie102"  ></td>
        <td ><input type="text" maxlength="150" name="ie103" ></td>

    </tr>
    
    </table>
        <hr align="left"> 
        <b>23. Continuing Education Programmes /Short Term Courses/Workshops/Seminars etc. organized (Last 4 years):</b> <br><br>

     <table style="text-align: center">
   <tr>
        <td >Title of Programme</td>
        <td >Period</td>
                <td > Funding Agency </td>
    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa11" ></td>
                    <td ><input type="text" maxlength="150" name="fa12"  ></td>
        <td ><input type="text" maxlength="150" name="fa13" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa21" ></td>
                    <td ><input type="text" maxlength="150" name="fa22"  ></td>
        <td ><input type="text" maxlength="150" name="fa23" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa31" ></td>
                    <td ><input type="text" maxlength="150" name="fa32"  ></td>
        <td ><input type="text" maxlength="150" name="fa33" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa41" ></td>
                    <td ><input type="text"  maxlength="150" name="fa42"  ></td>
        <td ><input type="text"  maxlength="150" name="fa43" ></td>

    </tr>

    <tr>
        <td ><input type="text" maxlength="150" name="fa51" ></td>
                    <td ><input type="text" maxlength="150" name="fa52"  ></td>
        <td ><input type="text" maxlength="150" name="fa53" ></td>

    </tr>
    <tr>
        <td ><input type="text" maxlength="150" name="fa61" ></td>
                    <td ><input type="text" maxlength="150" name="fa62"  ></td>
    <td ><input type="text" maxlength="150" name="fa63" ></td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa71" ></td>
                    <td ><input type="text" maxlength="150" name="fa72"  ></td>
    <td ><input type="text" maxlength="150" name="fa73" ></td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa81" ></td>
                    <td ><input type="text" maxlength="150" name="fa82"  ></td>
    <td ><input type="text" maxlength="150" name="fa83" ></td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa91" ></td>
                    <td ><input type="text" maxlength="150" name="fa92"  ></td>
    <td ><input type="text" maxlength="150" name="fa93" ></td>

    </tr>
     <tr>
        <td ><input type="text" maxlength="150" name="fa101" ></td>
                    <td ><input type="text" maxlength="150" name="fa102"  ></td>
    <td ><input type="text" maxlength="150" name="fa103" ></td>

    </tr>

    </table>
 <hr> 
 <b>24. Experience in Administrative Positions, Curriculum and Lab Development,  Student Welfare, Professional and Outreach Activities - Non remunerative (upload relevant document(s))</b> <br><br>
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="edp">
    </textarea>
         <hr align="left"> 
         <b>25. Awards and Recognitions (Upload photocopies)</b><br><br>
        
    <textarea style="width: 800px; height: 50px;"  maxlength="1000" name="ar">
    </textarea>
     <hr align="left"> 
     <b>26. Any other relevant information you may like to furnish:</b><br><br>
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="ao">
    </textarea>
        <hr align="left"> 
        <b>27. Names and addresses of two Professional References (Upload Testimonials of Them) </b><br><br>
    
        <div class="">
<div class="floatLeft">
<table>
<tr>    <tr>
        <td align="left" >Name</td>
        <td >1.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr11"  ></td>
        </tr>
        <tr> <td > Position/<br>Designation</td><td  > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" style="width: 300px;"  maxlength="200" name="pr12"  > </td></tr>

        <tr>        <td >Address <br> (Phone <br> Mobile <br> E-mail)</td><td >&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<textarea style="width: 300px; height: 100px;"  maxlength="200" name="pr13"></textarea>
</tr>

</table>
</div>

<div class="floatRight">
<table>
<tr><td >2.&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr21"  ></td></tr>
 <tr><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" maxlength="200" name="pr22"  ></td></tr>
 <tr>
     
        
        <td >&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<textarea style="width: 300px; height: 100px;" maxlength="200" name="pr23"></textarea> </td>
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
        <div>
        <hr align="left"> </div>
    <table>
    <tr>     
     <b>28. Please indicate how in your opinion you can contribute to NITK's growth. (upload relevant document)
     </b><br><br>    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="ao1" placeholder="Limited to 200 words" >
    </textarea>
       </tr> 
     <br> <br>
   <p><b>Additional Desirable requirements</b></p>
      <b>  Two papers in SCI Journals or one patent; may be based on Ph.D. work. 
          </b>             
     <br> <br>
      <textarea name="sci" style="width: 800px; height: 50px;"  maxlength="1000" rows="" cols="200"  ></textarea>   
      </table>
<hr> 
<p width="80%" style="width:80%">  
 <b> 29. </b>I hereby declare that the entries in this form are true to the best of my knowledge and belief. I understand that my Candidature will be cancelled if any of the information is found to be false or incorrect. Further, if selected, I will abide by
     the rules and regulations of the institute and also the directions given to me from time to time. </p>
     <br> <br>
     <table> <tr>
             <td> <b>  Date: </b></td> <td> 
                 <td> <input type="text" maxlength="150" id="datepicker38"  name="date"  />  </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><b>Place:</b></td><td> <input type="text" maxlength="150" name="place"  > </td>
    </tr>
    <tr> <td colspan="2">   </tr> </table>
     <hr align="left" width="88%"> 
    <table  align="center" width="40%"> 
        <tr>
      <td align="center"><input id="btn1"  type="submit"  value="Save Application" name="previous"> <td></tr>
   </table>
            

    
            </div>
    
</form>
  
            </body>
</html>

<?php

        }
             ?>
