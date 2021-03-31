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
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
       $nappn=$_POST['nappn'];
     $loneproj = mysqli_real_escape_string($link, $_POST['loneproj']);
     $teamproj = mysqli_real_escape_string($link, $_POST['teamproj']);
     $coproj = mysqli_real_escape_string($link, $_POST['coproj']);
     $patgrant = mysqli_real_escape_string($link, $_POST['patgrant']);
     $consult = mysqli_real_escape_string($link, $_POST['consult']);
     $loneguide = mysqli_real_escape_string($link, $_POST['loneguide']);
     $headguide = mysqli_real_escape_string($link, $_POST['headguide']);
     $coguide = mysqli_real_escape_string($link, $_POST['coguide']);
     $jmain = mysqli_real_escape_string($link, $_POST['jmain']);
     $jother = mysqli_real_escape_string($link, $_POST['jother']);
     $cmain = mysqli_real_escape_string($link, $_POST['cmain']);
     $cother = mysqli_real_escape_string($link, $_POST['cother']);
     
     $sixadmin1 = mysqli_real_escape_string($link, $_POST['sixadmin1']);
     $sixadmin2 = mysqli_real_escape_string($link, $_POST['sixadmin2']);
     $sixadmin3 = mysqli_real_escape_string($link, $_POST['sixadmin3']);
     $sixadmin4 = mysqli_real_escape_string($link, $_POST['sixadmin4']);
     $sixadmin5 = mysqli_real_escape_string($link, $_POST['sixadmin5']);
     $sixadmin6 = mysqli_real_escape_string($link, $_POST['sixadmin6']);
     $sixadmin7 = mysqli_real_escape_string($link, $_POST['sixadmin7']);
     $sixadmin8 = mysqli_real_escape_string($link, $_POST['sixadmin8']);
     
     $sevenadminothers1 = mysqli_real_escape_string($link, $_POST['sevenadminothers1']);
     $sevenadminothers2 = mysqli_real_escape_string($link, $_POST['sevenadminothers2']);
     $sevenadminothers3 = mysqli_real_escape_string($link, $_POST['sevenadminothers3']);
     $sevenadminothers4 = mysqli_real_escape_string($link, $_POST['sevenadminothers4']);
     $sevenadminothers5 = mysqli_real_escape_string($link, $_POST['sevenadminothers5']);
     $sevenadminothers6 = mysqli_real_escape_string($link, $_POST['sevenadminothers6']);
     $sevenadminothers7 = mysqli_real_escape_string($link, $_POST['sevenadminothers7']);
     $sevenadminothers8 = mysqli_real_escape_string($link, $_POST['sevenadminothers8']);
     $sevenadminothers9 = mysqli_real_escape_string($link, $_POST['sevenadminothers9']);
     $sevenadminothers10 = mysqli_real_escape_string($link, $_POST['sevenadminothers10']);
     
     $eightadminresp1 = mysqli_real_escape_string($link, $_POST['eightadminresp1']);
     $eightadminresp2 = mysqli_real_escape_string($link, $_POST['eightadminresp2']);
     $eightadminresp3 = mysqli_real_escape_string($link, $_POST['eightadminresp3']);
     
     $nineadminresp1 = mysqli_real_escape_string($link, $_POST['nineadminresp1']);
     $nineadminresp2 = mysqli_real_escape_string($link, $_POST['nineadminresp2']);
     
     $workshop = mysqli_real_escape_string($link, $_POST['workshop']);
     
     $gian1 = mysqli_real_escape_string($link, $_POST['gian1']);
     $gian2 = mysqli_real_escape_string($link, $_POST['gian2']);
   //  $gian3 = mysqli_real_escape_string($link, $_POST['gian3']);
  //   $gian4 = mysqli_real_escape_string($link, $_POST['gian4']);
     $national = mysqli_real_escape_string($link, $_POST['national']);
     $teachexp = mysqli_real_escape_string($link, $_POST['teachexp']);
     $eslab = mysqli_real_escape_string($link, $_POST['eslab']);
     $teach = mysqli_real_escape_string($link, $_POST['teach']);
     $pg = mysqli_real_escape_string($link, $_POST['pg']);
     $ug = mysqli_real_escape_string($link, $_POST['ug']);
     $book = mysqli_real_escape_string($link, $_POST['book']);
     $chapter = mysqli_real_escape_string($link, $_POST['chapter']);
     $outreach = mysqli_real_escape_string($link, $_POST['outreach']);
     $ina=mysqli_real_escape_string($link, $_POST['ina']);
     $placement1 = mysqli_real_escape_string($link, $_POST['placement1']);  
     $placement2 = mysqli_real_escape_string($link, $_POST['placement2']);  
     
     $sql="UPDATE newrules2  SET loneproj='$loneproj', teamproj='$teamproj', coproj='$coproj', patgrant='$patgrant', consult='$consult', loneguide='$loneguide',
                                     headguide='$headguide', coguide='$coguide', jmain='$jmain',jother='$jother', cmain='$cmain', cother='$cother', 
                                     sixadmin1='$sixadmin1', sixadmin2='$sixadmin2', sixadmin3='$sixadmin3', sixadmin4='$sixadmin4', sixadmin5='$sixadmin5',   
                                     sixadmin6='$sixadmin6', sixadmin7='$sixadmin7', sixadmin8='$sixadmin8',                                        
                                     sevenadminothers1='$sevenadminothers1', sevenadminothers2='$sevenadminothers2', sevenadminothers3='$sevenadminothers3', 
                                      sevenadminothers4='$sevenadminothers4', sevenadminothers5='$sevenadminothers5', 
                                    sevenadminothers6='$sevenadminothers6', sevenadminothers7='$sevenadminothers7', sevenadminothers8='$sevenadminothers8', 
                                    sevenadminothers9='$sevenadminothers9', sevenadminothers10='$sevenadminothers10',     
                                    eightadminresp1='$eightadminresp1', eightadminresp2='$eightadminresp2', eightadminresp3='$eightadminresp3', 
                                     nineadminresp1='$nineadminresp1', nineadminresp2='$nineadminresp2',
                                     workshop='$workshop', gian1='$gian1', gian2='$gian2', national='$national', teachexp='$teachexp', eslab='$eslab', 
                                     teach='$teach', pg='$pg', ug='$ug', book='$book', chapter='$chapter', outreach='$outreach', ina='$ina', placement1='$placement1', placement2='$placement2' WHERE appn='$nappn'";
     
     
      if(mysqli_query($link, $sql)){

          ?>  <!-- <font size="5"  face="Comic sans MS"  color="red"> Records added successfully. </font> -->
<?php
    } else{

         " ERROR: Could not able to execute $sql. " .mysqli_error($link);

    }
     mysqli_close($link); 
     ?> 
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<style>
             body {
                width: 100%;
                height: 100%;
                
            }
            </style>
            
                       
            
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
                        
                                  <script>
                         $(function() {
                      $( "#datepicker" ).datepicker();
                      $( "#datepicker1" ).datepicker();
                       $( "#datepicker2" ).datepicker();
                       $( "#datepicker3" ).datepicker();
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
                                                               <li><a href="submit.php">Submit/Print Application</a></li>
                                                             
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       

        <form action="eq1page.php" method="post" name="f1" onsubmit="return validateform()" >
           
            <table  rule="rows" >
                <tr> 
                    <th>  <p> Your application  No :<input type="text"  name="nappn" value="<?php echo $nappn; ?> " readonly /> </p></th>
            </tr>
                  
     <hr>
            </table>
              <hr>
            <tr> <table CELLPADDING=10 cellspacing="10">
                <tr> <p><b>Fill in Essential Qualifications Details </b></p> </tr>
                  
     <hr>
            <tr><b>  7. Academic - Doctoral Degree[Ph.D] Details:(Upload photocopies)  </b> <br>
                 The applicant's PhD final viva should be completed before 11/Feb/2017.
              </tr>
                </table> </tr>
                <br>
                <tr>
                     <table style="table-layout: fixed;"  cellpadding="1" cellspacing="" >
                <tr align="center" >
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
     <b>8. Post Doctoral Work: (Upload photocopies)  </b>
            
        <br>
        <br>
      <table   >
               
                <tr >
                    <td>Career </td>
                   <td>From Date</td>
                  <td>Award Date</td>
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
             <hr align="left" >      

      <p><b>Fill Additional Desirable requirements details</b></p>
      <h6>
        Note:  One publication in an SCI Journal.</h6>
           <hr>

        <b> 15. a. Publication details - No. of Papers </b> 
        <br>     <br>     
           <table  >
             
                        <tr><td> Journal papers :</td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                        <td> Conference Publications:</td> </tr>
                        <tr>&nbsp;</tr>
                    
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
 <hr align="left" >  
            <b>15.b. Provide details of your 4 best SCI/SCOPUS/SSCI indexed journal papers.</b> <br><br>
          <table style="text-align: center">
     <thead>
         <tr><td>Author(s) </td> <td>Title</td> <td>Journal</td> <td>Volume</td> <td>Pages </td> <td>Year</td> <td>DOI Link </td><td>&nbsp;</td> <td>&nbsp;</td>  <td>&nbsp;</td> <td>&nbsp;</td> </tr>
    </thead>
    <tbody>
        <tr>
           <td><input  maxlength="150"  type="text" size="20" name="E3_11"></td>
            <td><input   maxlength="150"  type="text" size="30" name="E3_12"></td>
           
            <td>             
            <label for="E3_13"></label>
            <input type="text"  maxlength="150"  size="20"   name="E3_13"></td>
            <!-- <td><input type="text" size="20" id="E3_13"></td> -->
            <td><input type="text"  maxlength="150"  size="20" name="E3_14"></td>
            <td><input type="text"  maxlength="150"  size="10" name="E3_15"></td>
            <td><input type="text"  maxlength="150"   name="E3_16" /></td>
            <td><input type="text"   maxlength="150"  name="E3_17" /> </td>
          
           
        <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
            <!-- <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>


        <tr>
           <td><input type="text"   maxlength="150"  size="20" name="E3_21"></td>
            <td><input type="text"   maxlength="150"  size="30" name="E3_22"></td>
            <td>             
            <label for="E3_23"></label>
            <input type="text"  maxlength="150"  size="20"  name="E3_23"></td>
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
            <input type="text"  maxlength="150"  size="20"  name="E3_33"></td>
          
            <td><input type="text"  maxlength="150"  size="20" name="E3_34"></td>
            <td><input type="text" maxlength="150" size="10" name="E3_35"></td>
            <td><input type="text" maxlength="150"  name="E3_36" /></td>
             <td><input type="text" maxlength="150" name="E3_37" /> </td>
           
            <!-- <td><input type="text> <input type="submit" value="Update" name="submit_update_2"></td> -->
<!--            <td><input type="submit" value="Delete" name="submit_delete_2"></td> -->
        </tr>
        <tr >
            <td><input type="text"  maxlength="150" size="20" name="E3_41"></td>
            <td><input type="text" maxlength="150"  size="30" name="E3_42"></td>
             <td>             
            <label for="E3_43"></label>
            <input type="text" maxlength="150" size="20"  name="E3_43"></td>
          
            <td><input type="text" maxlength="150" size="20" name="E3_44"></td>
            <td><input type="text"  maxlength="150" size="10" name="E3_45"></td>
            <td><input type="text" maxlength="150" name="E3_46" /></td>
             <td><input type="text" maxlength="150" name="E3_47" /> </td>
           
        </tr>
         </table>
<hr>
        <b>  15.c. Details of all other publications can be added through the
'Publication Details' Tab. </b>
       <table>
         </tbody>
          
</table> 
         <hr>
         <table>
             <tr>
         <p align="center"> <input id="btn1" type="submit"value="Save & Next" name="Save & Next"> </p>
         </tr>
           </table>
            </form>
     
        
        
          
    </body>
</html>

