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

          <style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
            
                <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
      
                       
            
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
                          });
                                  </script> <script>
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
    function valid(){
        input = document.getElementById('nexpg').value;
        input1 = document.getElementById('nexpg1').value;
        input2 = document.getElementById('nexphd').value;
        input3 = document.getElementById('nexphd1').value;
        input4 = document.getElementById('nexap').value;
        input5 = document.getElementById('nexap1').value;
         var dayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
         var dayOfYearpg=(dayCount[input1]+(input*365));
         var dayOfYearphd=(dayCount[input3]+(input2*365));
         var total=dayOfYearphd+dayOfYearpg;
         var daysOfYearap= (dayCount[input5]+(input4*365));
         //alert(dayOfYearpg+dayOfYearphd);2190
   
     if( daysOfYearap > 1094)
     {
         if(dayOfYearphd >2018)    		
       {
        
        
       }
       else
       {
            if(dayOfYearphd > 1094  )
           {
            if(total > 3284) {
                }
                else
                {
                    fld=" Relevant Experience not met for this Post) !!!"
           alert(fld);
           document.f1.reset();
           	return false;
                }
            }
   else{
                   
           fld=" Relevant Experience not met for this Post) !!!"
           alert(fld);
           document.f1.reset();
           	return false;
            }
           
       
         
       }
   }
      else
     {
      fld=" Relevant Experience not met for this Post) !!!"
           alert(fld);
           document.f1.reset();
           	return false;
     }
     }</script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top ">
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
								<?php echo $UID;?> <i class="caret"></i>
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
        
        <form action="eq4page.php" method="post" name="f1" onsubmit="return validateform()" >
           <hr>
            <p> Your application  No :<input type="text"  name="nappn" value="<?php echo $appn; ?> " readonly /> </p>
            <hr>
            <table CELLPADDING=10 cellspacing="10"> 
            
                <tr> <p><b>Fill in Essential Qualification Details </b></p>
                
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
                    <td>Mode(Full/Part time)</td>
                    <td>Area of Research</td>
                    <td>Award Date <br>(MM/DD/YYYY)</td>
                </tr> <tr>
                    <td><textarea rows="1" cols="30" maxlength="500" input type="text" name="ph1"  id="message" placeholder="Thesis Title" required></textarea> </td> 
                    <td>
                        <input type="text" maxlength="20" id="datepicker"  name="ph2"  style="width:80px;"  required>   </td> 
                    <td> 
                        <input type="text" maxlength="20" id="datepicker1"  name="ph3" style="width:80px;" required>    </td> 
                    <td ><input type="text" maxlength="150" name="ph4" class="form-control" size="40" required> </td> 
                    <td><input type="text" maxlength="150" name="ph5" class="form-control" size="30" required> </td> 
                    <td align='center'><select name="ph6"  style="width:140px;" required>
                            <option> -Select- </option>
                            <option value="Full Time">Full Time </option>
                                   <option value="Part Time">Part Time </option></select> </td> 
                                   <td><input type="text" maxlength="150"   name="ph7"  style="width:100px;"  required>  </td> 
                                   <td><input type="text" maxlength="20" id="datepicker3"  name="ph8"  style="width:100px;"  required></td> 
                </tr>
   </table> 
     
     <hr>
     <table>
         <tr> <p><b>Fill in Relevant Experience Deatails </b></p>
         <h6><p style="width:980px"> Note:06 years after Ph.D. or 09 years total (not counting Ph.D. enrolment period), out of which 03 years should be after Ph.D. Three years at the level of Assistant Professor with AGP of Rs.8000/- or equivalent in a reputed university, R & D Lab. or relevant industry.  </p></h6>
     </tr>
         <hr>      

       <b>8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>    
      <table   >
               
                <tr >
                    <td>Career </td>
                    <td>From Date<br>(MM/DD/YYYY)</td>
                    <td>To Date <br>(MM/DD/YYYY)</td>
                  <td>Institute/Organization</td>
                    <td>Guide/Mentor</td>
                    <td>Field of Research Work</td>
                    
                </tr> <tr>
                    <td><textarea rows="1"  maxlength="150" cols="30"  val="" input type="text" name="pd11"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker4"  name="pd12"  style="width:100px;"/></td> 
                    <td><input type="text" maxlength="20" id="datepicker5"  name="pd13"  style="width:100px;"/> </td> 
                    <td ><input type="text" maxlength="150" name="pd14" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd15" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd16" class="form-control" size="30"> </td> 
                      </tr>
                      <tr>
                          <td><textarea rows="1" cols="30" maxlength="150" val="" input type="text" name="pd21"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker6"  name="pd22"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker7"  name="pd23"  style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150" name="pd24" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd25" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd26" class="form-control" size="30"> </td> 
                    
                      </tr>
                      <tr>
                    <td><textarea rows="1" maxlength="150" cols="30" val="" input type="text" name="pd31"  id="message" placeholder="Career"></textarea> </td> 
                    <td><input type="text" maxlength="20" id="datepicker8"  name="pd32"  style="width:100px;" /> </td> 
                    <td><input type="text" maxlength="20" id="datepicker9"  name="pd33"  style="width:100px;" /> </td> 
                    <td ><input type="text" maxlength="150" name="pd34" class="form-control" size="40"> </td> 
                    <td><input type="text" maxlength="150" name="pd35" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd36" class="form-control" size="30"> </td> 
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
                    <td><input type="text"  maxlength="150" name="pd55" class="form-control" size="30"> </td> 
                    <td align='center'><input type="text" maxlength="150" name="pd56" class="form-control" size="30"> </td> 
                      </tr>
            </table>
             
 <hr>      
   <table>
<tr>
<p>  <b>10. Employment Details (Particulars of your past employment in Chronological order starting with current employment - Upload photocopies) </b><p> </tr>
<tr> For the current employment, please enter the "Date of leaving" field as the faculty recruitment application form submission deadline date. </tr> </table>
<br>
<table  width="60%" style=" text-align:center;" >
<thead>
<tr><td>Employer</td> <td>Position Held</td> <td>Date of Joining <br>(MM/DD/YYYY)</td> <td>Date of Leaving<br>(MM/DD/YYYY)</td> <td>Number of Days/Months/Years</td> <td>Scale of Pay & GP/AGP(If applicable)</td> <td>Gross Pay</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
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
<table> 
<hr>
<p> <b>10. a. Relevant Experience </b> </p>    
<table colspan="10"> 
             <tr><td colspan="3"> </td></tr>
             <tr> <td> &nbsp;</td><td> &nbsp;&nbsp;&nbsp; Year&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;&nbsp; Months</td> </tr>
             <tr><td>Duration after Masters' Degree (Not counting Ph.D enrolment period):</td><td><input type="text" maxlength="100" size="10" id="nexpg" name="nexpg"  style="width:100px;" required></td><td><input type="text" maxlength="100" size="10" id="nexpg1" name="nexpg1" required  style="width:100px;"><td> </tr>
         <tr><td>Duration after PhD:<td> <input type="text" maxlength="100" size="10"  id="nexphd" name="nexphd"  style="width:100px;" required></td><td> <input type="text" maxlength="100" size="10" id="nexphd1" name="nexphd1" required style="width:100px;"><td> </tr>
         <tr><td>Experience at the level of Assistant Professor(AGP:8000) or equivalent :<td> <input type="text" maxlength="100" size="10"  id="nexap" name="nexap"  style="width:100px;" required></td><td> <input type="text" maxlength="100" size="10" id="nexap1" name="nexap1" required style="width:100px;"><td> </tr>
         
         </table> 
 <hr>
 <b> Fill in Other essential requirements Details </b>
 <h6><p style='width:900px'>Note: 04 papers in SCI journals after Ph.D.; One Ph.D. guided as sole or principal supervisor plus one continuing. Two projetcs ongoing or one ongoing plus one completed. Two experiments or computational projects added to teaching laboratories where appropriate. Academic outreach activity equivalent to two self-financed short term courses. </p></h6>
    <hr>      
       
    <b> 14. Research guidance (upload relevant document)</b> 

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
          <input name="phdcomplete" type="text" maxlength="150" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="phdongoing" type="text" maxlength="150" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="cj1" type="text" maxlength="150" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
        <td align="right">
          <p>Ph.D.</p>
       </td>
        <td>
          <input name="oj1" type="text" maxlength="150" size="25" />
<!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
       </td>
    </tr>
   
       <tr> 
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgcomplete" type="text" maxlength="150" size="25" />

       </td>
       <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="pgongoing" type="text" maxlength="150" size="25" />

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="cj2" type="text" maxlength="150" size="25" />

       </td>
        <td align="right">
          <p>P.G.</p>
       </td>
        <td>
          <input name="oj2" type="text" maxlength="150" size="25" />

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
    <!--         <font color="orangered" size="+1"><tt>*</tt></font>-->
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
   
             
         

   
         <hr>  
         <b>15.b. Provide details of your 4 best SCI/SCOPUS/SSCI indexed journal papers.</b> <br><br>
          <table style="text-align: center">
     <thead>
         <tr><td>Author </td> <td>Title</td> <td>Journal</td> <td>Volume</td> <td>Pages </td> <td>Year</td> <td>DOI Link </td><td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
           <td><input type="text" maxlength="150" size="20" name="E3_11"></td>
            <td><input type="text" maxlength="150" size="30" name="E3_12"></td>
           
            <td>             
            <label for="E3_13"></label>
            <input type="text" size="20"  maxlength="150" id="E3_13" name="E3_13"></td>
            <!-- <td><input type="text" size="20" id="E3_13"></td> -->
            <td><input type="text" maxlength="150" size="20" name="E3_14"></td>
            <td><input type="text" maxlength="150" size="10" name="E3_15"></td>
            <td><input type="text" maxlength="150"  name="E3_16" /></td>
            <td><input type="text" maxlength="150" name="E3_17" /> </td>
          
           
        <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
           <td><input type="text" maxlength="150" size="20" name="E3_21"></td>
            <td><input type="text" maxlength="150" size="30" name="E3_22"></td>
            <td>             
            <label for="E3_23"></label>
            <input type="text" size="20" maxlength="150" id="E3_23" name="E3_23"></td>
            <td><input type="text" size="20" maxlength="150" name="E3_24"></td>
            <td><input type="text" size="10" maxlength="150" name="E3_25"></td>
            <td><input type="text" maxlength="150"  name="E3_26" /></td>
             <td><input type="text" maxlength="150" name="E3_27" /> </td>
           
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>

       
        <tr>
            <td><input type="text" maxlength="150" size="20" name="E3_31"></td>
            <td><input type="text" maxlength="150" size="30" name="E3_32"></td>
             <td>             
            <label for="E3_33"></label>
            <input type="text" size="20" maxlength="150" id="E3_33" name="E3_33"></td>
          
            <td><input type="text" maxlength="150" size="20" name="E3_34"></td>
            <td><input type="text" maxlength="150" size="10" name="E3_35"></td>
            <td><input type="text" maxlength="150"  name="E3_36" /></td>
             <td><input type="text" maxlength="150" name="E3_37" /> </td>
           
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr >
            <td><input type="text" maxlength="150" size="20" name="E3_41"></td>
            <td><input type="text" maxlength="150" size="30" name="E3_42"></td>
             <td>             
            <label for="E3_43"></label>
            <input type="text" maxlength="150" size="20" id="E3_43" name="E3_43"></td>
          
            <td><input type="text" maxlength="150" size="20" name="E3_44"></td>
            <td><input type="text" maxlength="150" size="10" name="E3_45"></td>
            <td><input type="text" maxlength="150"  name="E3_46" /></td>
             <td><input type="text" maxlength="150" name="E3_47" /> </td>
          
        </tr>
</table>
<hr>
<table>
<p>      15.c. Details of all other publications can be added through the 'Publication Details' Tab. </p>
                 
</table>
          
         <hr>      

      <b>18. Sponsored Projects (Project handled as Principal Investigator in last 4 Years)</b>
    <br><br>

                   <table  style="text-align: center" cellpadding="1" cellspacing="5" >
                 
               <tr><td>Funding Agency</td> <td>Title of the Project</td> <td>Project Cost </td> <td>Duration</td> <td>Current Status</td> <td>Remarks/Applied<br>(with date)</td>  <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
                
        
        <tr>
          <td><input type="text" maxlength="150" size="20" name="E4_11"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_12"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_13"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_14"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_15"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_16"></td>
             
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
           
        
         <tr>
           <td><input type="text" maxlength="150" size="20" name="E4_21"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_22"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_23"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_24"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_25"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_26"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
           <td><input type="text" maxlength="150" size="20" name="E4_31"></td>
            <td><input type="text" maxlength="150" size="20" name="E4_32"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_33"></td>
            <td><input type="text" maxlength="150" size="8" name="E4_34"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_35"></td>
            <td><input type="text" maxlength="150" size="10" name="E4_36"></td> 
	    <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
            <tr>
           <td><input type="text" maxlength="150" size="20" name="E4_41"></td>
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
 
                
 <hr>      

<b>19. Consultancy Project (in last 4 years)</b> <br> <br>

                <table  style="text-align: center" cellpadding="1" cellspacing="1">
                 <thead>
                <tr><td>Funding Agency</td> <td>Title of the Consultancy <br>Work </td> <td>Duration<br>/Ongoing </td> <td>Project Cost</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
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
            <td><input type="text" maxlength="150" size="20" name="F42"></td>
            <td><input type="text" maxlength="150" size="20" name="F43"></td>
            <td><input type="text" maxlength="150" size="20" name="F44"></td>
     
        </tr>
          <tr>
            <td><input type="text" maxlength="150" size="20" name="F51"></td>
            <td><input type="text" maxlength="150" size="20" name="F52"></td>
            <td><input type="text" maxlength="150" size="20" name="F53"></td>
            <td><input type="text" maxlength="150" size="20" name="F54"></td>
     
        </tr>
</tbody>
           
   </table>
 <hr> 
     <b> Two experiments or computational projects added to teaching laboratories.</b><br><br>
    <textarea style="width: 800px; height: 50px;" maxlength="1000" name="lab">
    </textarea>
     <hr> 
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
       <td ><input type="text" maxlength="150" name="fa42"  ></td>
        <td ><input type="text" maxlength="150" name="fa43" ></td>

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
     <p><b>Additional Desirable requirements</b></p>
<hr>   
  <b> 17. Patents </b> 
    <br>
<textarea  style="width: 800px; height: 50px;"rows="4" cols="100" name="patents" type="text" maxlength="1000" size="25" ></textarea>
<hr>   
      <b> <br> Strong liaison with industry; Offering courses through application of ICT. </b>             
     <br> <br>
                 <textarea name="industry" maxlength="1000" style="width: 800px; height: 50px;" rows="" cols="200"  > </textarea> 

<br>
<hr>
  <p align="center"> <input id="btn1" type="submit" value=" Save & Next" name="Save & Next" onclick="valid()"> </p>

</form>
            <hr>
    </body>
</html>
<?php
        }
        
