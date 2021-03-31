<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
     <form action="btkh.php" method="post" name="f1" >
 <table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>    <h2>1. One external sponsored R & D Projects completed or ongoing/patent granted </h2></b>
 <br> 
       <b>    1a. No. of project - Completed or Ongoing as Lone PI</b>
       <input name="loneproj" type="number" size="50" maxlength="150"  value=""> 
       <br> <br>
 
       <b>    1b. No. of project - Completed or Ongoing as Team PI</b>
        <input name="teamproj" type="number" maxlength="150" size="25" value="">
       <br> <br> 
       
       <b>    1c. No. of project - Completed or Ongoing as Co-PI</b>
        <input name="coproj" type="number" maxlength="150" size="25" value="">
       <br> <br> 
       <b>    1d. No. of  Patent - Granted</b>
       <input name="patgrant" type="number" maxlength="150" size="25" value="" >
       <br>
       
 </tr>
</td>
</table>
        
        
 <table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>    <h2>2. Consultancy Projects </h2></b>
       <b>    Consultancy Projects - 2 per Rs 5 lakhs</b>
        <select name="consult">
             <option value="0">None</option>
            <option value="2">5 lakhs</option>
            <option value="4">6-10 lakhs</option>
            <option value="6">11-15 lakhs</option>
            <option value="8">16-20 lakhs</option>
            <option value="10"> >20 lakhs</option>
            
        </select>
       <!-- <input name="consulproj" type="checkbox" size="50" maxlength="150"  > -->
 </tr>
</td>
</table>
        
<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>   <h2> 3. One PhD Guided(including thesis submitted cases) </h2></b>
 <br> 
       <b>    3a. No. of  PhD Completed/Thesis submitted - Lone supervisor</b>
       <!-- <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select> -->
       <input name="loneguide" type="number" size="50" maxlength="150"  value="">
       <br>
       
       <b>    3b. No. of  PhD Completed/Thesis submitted - Head supervisor</b>
       <!-- <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>-->
       <input name="headguide" type="number" maxlength="150" size="25" value="" >
       <br>
       
       <b>    3c. No. of PhD Completed/Thesis submitted - Co-supervisor</b>
       <!--<select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>-->
       
       <input name="coguide" type="number" maxlength="150" size="25" value="" >
       <br>
       
 </tr>
</td>
</table>
  
        
        
<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>   <h2> 4. One Journal papers in SCI/Scopus(Paid Journal not allowed)</h2></b>
 <br> 
       <b>    4a. No of  Journal - SCI/SCOPUS Indexed - First author/Main supervisor</b>
       <input name="jmain" type="number" size="50" maxlength="150" value="" >
       <br>
 
       <b>    4b. No of Journal - SCI/SCOPUS Indexed - Other author</b>
       <input name="jother" type="number" maxlength="150" size="25" value="" >
       <br>
 </tr>
</td>
</table>

<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>   <h2> 5. One Conference paper indexed in SCI/Scopus/Web of science Conference / any internationally renowned conference</h2></b>
 <br> 

       <b>    5a. No. of Conference paper - First author/Main supervisor</b>
       <input name="cmain" type="number" maxlength="150" size="25" value="" >
       <br>
       
       <b>    5b. No. of  Conference paper - Other author</b>
       <input name="cother" type="number" maxlength="150" size="25" value="">
       <br>
             
 </tr>
</td>
</table>        

<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>    <h2> 6. Administrative Responsibilities (HoD, Dean, Chief Warden,Prof - InCharge (T&P), 
             Advisor(Estate), TEQUIP Co-ord) - No. of Semesters as (since last promotion):</h2></b>
 <br> 
       <b> Number of semesters the HoD position was held </b>
       
        <select name="hod">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
       <br> <br>
         <b> Number of semesters the Dean position was held </b>
       
        <select name="dean">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
            <br> <br>
    <b> Number of semesters the Chief warden position was held </b>
       
        <select name="cwarden">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
          <br> <br>
       <b> Number of semesters the Professor Incharge(T&P) position was held </b>
       
        <select name="tp">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
          <br> <br>
          <b> Number of semesters the Advisor(Estate) position was held </b>
       
        <select name="advisor">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
             <br> <br>
    <b> Number of semesters the CVO position was held </b>
       
        <select name="cvo">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
     <br> <br>
    <b> Number of semesters the PI(Exam) position was held </b>
       
        <select name="pi">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
       <br> <br>
    <b> Number of semesters the TEQIP(Coordinator) position was held </b>
       
        <select name="teqip">
            <option value="0">None</option>
            <option value="2">1 semester</option>
            <option value="4">2 semesters</option>
            <option value="6">3 semesters</option>
            <option value="8">4 semesters</option>
            <option value="10">5 semesters</option>
            <option value="12">6 semesters</option>
            <option value="14">7 semesters</option>
            <option value="16"> >= 8 semesters</option>
        </select>
    
    

<!--<input name="hod" type="checkbox" size="50" maxlength="150"  >
       <br>
 
       <b>    Dean</b>
         <input name="dean" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Chief Warden</b>
         <input name="chiefward" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Prof - InCharge (T&P)</b>
        <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="profin" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Advisor(Estate)</b>
        <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="advisor" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    TEQUIP Co-ord</b>
        <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <input name="tequip" type="checkbox" maxlength="150" size="25" >
       <br>-->
       
 </tr>
</td>
</table>        

<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>    <h2>7. Administrative and Other Responsibilities(Warden/Asst. Warden, Assoc. Dean, Chairman/Convener institute academic communities,  Fac-in-charge Computer Center, Fac-in-charge Library, Fac-in-charge Admission, Fac-in-charge Student Activities) - No. of Semesters as (since last promotion):</h2></b>
 <br> 
 <b> Number of semesters the Warden positions was held </b>
       
        <select name="warden">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
    <br> <br>
 <b> Number of semesters the Assstistance warden positions was held </b>
       
        <select name="asstwarden">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
    <br> <br>
 
  <b> Number of semesters the Associate Dean positions was held </b>
       
        <select name="astdean">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
  
     <br> <br>
  <b> Number of semesters the Chairman/Convener institute academic committees positions was held </b>
       
        <select name="chairman">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
   <br> <br>
   <b> Number of semesters the Faculty In charge Computer Center positions was held </b>
       
        <select name="faculty">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
   <br> <br>
   
   <b> Number of semesters the IT Services positions was held </b>
       
        <select name="it">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
      <br> <br>
    <b> Number of semesters the Library positions was held </b>
       
        <select name="library">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
       <br> <br>
     <b> Number of semesters the Admission center positions was held </b>
       
        <select name="admission">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
        <br> <br>
        <b> Number of semesters the Student Activity positions was held </b>
       
        <select name="student">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
           <br> <br>
    <b> Number of semesters the  Other Institutional Activity positions was held </b>
       
        <select name="other">
            <option value="0">None</option>
            <option value="1">1 semester</option>
            <option value="2">2 semesters</option>
            <option value="3">3 semesters</option>
            <option value="4">4 semesters</option>
            <option value="5">5 semesters</option>
            <option value="6">6 semesters</option>
            <option value="7">7 semesters</option>
            <option value="8"> >= 8 semesters</option>
        </select>
 
       
       <!-- <b>    Warden/Asst. Warden</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="asstward" type="checkbox" size="50" maxlength="150"  >
       <br>
 
       <b>    Assoc. Dean</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="assodean" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Chairman/Convener institte academic communities</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="chirman" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Fac-in-charge Computer Center</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="facincharge" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Fac-in-charge Library</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="faclibrary" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Fac-in-charge Admission</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="facadmission" type="checkbox" maxlength="150" size="25" >
       <br>
       
       <b>    Fac-in-charge Student Activities</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="facstudent" type="checkbox" maxlength="150" size="25" >
       <br>
            --> 
 </tr>
</td>
</table>    
         
 <table CELLPADDING=10 cellspacing="10" >
 <tr>
 <td align="left">
     <b>    <h2>8. Additional Responsibilities (Chairman and Convener different standing committees, Chairman and Convener special committee(Ex officio status will not be considered), Faculty in charges- No. of Semesters as (since last promotion):</h2></b>
 <br>
 
 <b> Number of semesters the  Chairman and Convener different standing committees positions was held </b>
          <select name="converner">
            <option value="0">None</option>
            <option value="0.5">1 semester</option>
            <option value="1">2 semesters</option>
            <option value="1.5">3 semesters</option>
            <option value="2">4 semesters</option>
            <option value="2.5"> 5 semesters</option>
            <option value="3"> >=6 semesters</option>
        </select>
 <br><br>
  <b> Number of semesters the  Chairman and Convener special committee positions was held </b>
          <select name="special">
            <option value="0">None</option>
            <option value="0.5">1 semester</option>
            <option value="1">2 semesters</option>
            <option value="1.5">3 semesters</option>
            <option value="2">4 semesters</option>
            <option value="2.5"> 5 semesters</option>
            <option value="3"> >=6 semesters</option>
        </select>
 <br><br>
  <b> Number of semesters the   Faculty in charges positions was held </b>
          <select name="facincharge">
            <option value="0">None</option>
            <option value="0.5">1 semester</option>
            <option value="1">2 semesters</option>
            <option value="1.5">3 semesters</option>
            <option value="2">4 semesters</option>
            <option value="2.5"> 5 semesters</option>
            <option value="3"> >=6 semesters</option>
        </select>
  
   </tr>
</td>
</table>

<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
 <b><h2>9. Departmental activities identified by HoD like lab in charges, or department level committee for a min. period of one year
         - No. of Semesters as (since last promotion):</h2></b>
 <br> 
 
 <b> Number of semesters the Lab incharge positions was held </b>
       
        <select name="labin">
            <option value="0">None</option>
            <option value="0.5">1 semester</option>
            <option value="1">2 semesters</option>
            <option value="1.5">3 semesters</option>
            <option value="2">4 semesters</option>
            <option value="2.5">5 semesters</option>
            <option value="3"> >=6 semesters</option>
            
        </select>
 <br> <br>
 <b> Number of semesters the other Dept. level committee positions was held </b>
       
        <select name="deptlevel">
             <option value="0">None</option>
            <option value="0.5">1 semester</option>
            <option value="1">2 semesters</option>
            <option value="1.5">3 semesters</option>
            <option value="2">4 semesters</option>
            <option value="2.5">5 semesters</option>
            <option value="3"> >=6 semesters</option>
            
        </select>

 
<!--       <b>    Lab incharge</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="labincharge" type="checkbox" size="50" maxlength="150"  >
       <br>
 
       <b>    Dept level committee - min 1 year</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="deptcommittee" type="checkbox" maxlength="150" size="25" >
       <br>
    -->   
       
 </tr>
</td>
</table>        

<table CELLPADDING=10 cellspacing="10" > 
 <tr>
 <td align="left">
     <b>  <h2>  10. Workshops/FDP/Short term courses of minimum 05 working days duration offered as coordinator or convenor - Number (since last promotion)</h2></b>
 <br> 
 
 <b> Number of workshops/courses conducted as coordinator or convenor </b>
          <select name="workshop">
           <option value="0">None</option>
            <option value="2">1</option>
            <option value="4">2</option>
            <option value="6">3</option>
            <option value="8"> >=4 </option>
        </select>
       <br>
 
       <!--<b>    Arranged 5 days or more - FDP</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="fivefdp" type="checkbox" maxlength="150" size="25" >
       <br>
 
       <b>          Arranged 5 days or more - Short term courses</b>
       <select name="cities">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
       <input name="fiveshort" type="checkbox" maxlength="150" size="25" >
       <br> -->
 
 </tr>
</td>
</table>        
        
<table CELLPADDING=10 cellspacing="10" >
    <tr align="left">
    <b> <h2>11. For conducting National programs like GIAN etc., as course coordinator. Program of 2 / 1 week duration(Since last promotion)</h2> </b>
    <br>
      <b> 11a. GIAN Course Program Coordinator-2 week(Coordinator for only one program) </b>
     <input name="gain1" type="checkbox" size="50" maxlength="150"  value="2" >
     <br>
      <b> 11b. GIAN Course Program Coordinator-2 week(Coordinator for more than one program) </b>
      <input type="checkbox" name="gain2" value="4" size="50" >
      <br>
      <b> 11c. GIAN Course Program Coordinator-1 week(Coordinator for only one program) </b>
      <input type="checkbox" name="gain3"   size="50" maxlength="150" value="1">
      <br>
      <b> 11d. GIAN Course Program Coordinator-1 week(Coordinator for more than one program) </b>
      <input type="checkbox" name="gain4"  size="50" maxlength="150" value="2">
    </tr>
</table>
   
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2>12. National/International Conference organized as Chairman/Secretary </h2></b>
        <br>
     <!-- <b> 12a. Organizing Chairman/Secretary-National Conf. </b>
      <input type="checkbox" name="chair" size="50" maxlength="150" value="3">
      <br>
      <b> 12b. Organizing Chairman/Secretary-International Conf</b>
      <input type="checkbox" name="chair1" size="50" maxlength="150" value="3"> -->     
    <b> Number of National/International Conference organized as Chairman/Secretary</b>
          <select name="national">
               <option value="0">None</option>
            <option value="3">1</option>
            <option value="6"> >=2 </option>
        </select>
       <br>
     </tr>
</table>
<table  CELLPADDING=10 cellspacing="10">
    <tr>
        <b> <h2>13. Length of service over and above relevant min. teaching experience required for a given cadre
                -number of year</h2> </b>
    <br>
     <b> Teaching Experience(In Year)</b>
          <select name="lenght">
              <option value="0">None</option>
            <option value="2">1 year</option>
            <option value="4"> 2 years </option>
            <option value="6"> 3 years </option>
            <option value="8"> 4 years </option>
            <option value="10"> >=5 years </option>
        </select>
    </tr>
</table>
       
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 14. Establishment of new lab(Since last promotion) </h2> </b>
    <br>
    <b> Establishment of new lab </b>
             <input type="checkbox" name="elab" value="4" size="50" maxlength="150">  
    </tr>
</table>
        
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 15. Theory Teaching of over and above 6 credit hrs. course(Since last promotion) </h2> </b>
        
      <br>
     <b> Teaching the course(with credit over and above 6)</b>
          <select name="teach">
               <option value="0">None</option>
            <option value="1"> 1 credit hrs </option>
            <option value="2"> 2 credit hrs </option>
            <option value="3"> 3 credit hrs </option>
            <option value="4"> 4 credit hrs </option>
            <option value="5">  5 credit hrs </option>
            <option value="6"> >=6 credit hrs</option>
        </select>
       
    </tr>
</table> 
        
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 16. PG Dissertation guided(Since last promotion)</h2> </b>
        
             <br>
     <b> Number of PG Dissertation(s) guided </b>
          <select name="pg">
               <option value="0">None</option>
            <option value="0.5"> 1 </option>
            <option value="1"> 2  </option>
            <option value="1.5"> 3  </option>
            <option value="2"> 4  </option>
            <option value="2.5">  5  </option>
            <option value="3"> 6 </option>
            <option value="3.5"> 7 </option>
            <option value="4">8</option>
            <option value="4.5">9</option>
            <option value="5">10</option>
            <option value="5.5">11</option>
            <option value="6">12</option>
            <option value="6.5">13</option>
            <option value="7">14</option>
            <option value="7.5">15</option>
            <option value="8">16</option>
            <option value="8.5">17</option>
            <option value="9">18</option>
            <option value="9.5">19</option>
            <option value="10"> >=20</option>
        </select>
          
    </tr>
</table>
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2>17. UG Project guided(Since last promotion)</h2> </b>
              <br>
     <b> Number of UG Dissertation(s) guided </b>
          <select name="ug">
               <option value="0">None</option>
            <option value="0.25"> 1 </option>
            <option value="0.5"> 2  </option>
            <option value="0.75"> 3  </option>
            <option value="1"> 4  </option>
            <option value="1.25">  5  </option>
            <option value="1.5"> 6 </option>
            <option value="1.75"> 7 </option>
            <option value="2">8</option>
            <option value="2.25">9</option>
            <option value="2.5">10</option>
            <option value="2.75">11</option>
            <option value="3">12</option>
            <option value="3.25">13</option>
            <option value="3.5">14</option>
            <option value="3.75">15</option>
            <option value="4"> >=16</option>
        </select>
          
    </tr>
</table>
       
 <table CELLPADDING=10 cellspacing="10">
    <tr>
        <b> <h2>18. Text/Reference Book Published on relevant subjects from reputed
                international publishers(Since last promotion) </h2> </b>
       
         <br>
     <b> Number of Text/Reference books published</b>
          <select name="book">
               <option value="0">None</option>
            <option value="6"> 1 </option>
            <option value="12"> 2  </option>
            <option value="18"> >=3  </option>
        </select>   
     
    </tr>
</table>
       
       
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 19.Text/Reference book published on relevant subjects from reputed national publishers or book chpatres
             in the books published by reputed international publishers(Since last promotion)</h2> </b>
 <br>
     <b> Number of Text/Reference books published</b>
          <select name="chapter">
               <option value="0">None</option>
            <option value="2"> 1 </option>
            <option value="4"> 2  </option>
            <option value="6"> >=3  </option>
        </select>   
</tr>
</table>

<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 20.Significant outreach institute activies(Since last promotion)</h2> </b>
            <br>
     <b> Number of significant outreach institute activies </b>
          <select name="outreach">
               <option value="0">None</option>
            <option value="1"> 1 </option>
            <option value="2"> 2  </option>
            <option value="3"> 3  </option>
            <option value="4"> >=4  </option>
        </select> 
    </tr>
</table>
 
<table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 21.Fellow IEEE, INA, FNAE, FNSc(Since last promotion)</h2> </b>
    <br>
     <b> Fellow IEEE, INA, FNAE, FNSc </b>
             <input type="checkbox" name="ina" value="10" size="50" maxlength="150"> 
    </tr>
</table>
       
       
 <table CELLPADDING=10 cellspacing="10">
    <tr>
    <b> <h2> 22.Placement percentage(Only for the placement cell officers)-Since last promotion </h2></b>
    <br>
          <b> 22a. Number of years placement was above 85%</b>  
          <select name="place1">
               <option value="0">None</option>
            <option value="4"> 1 year </option>
            <option value="8"> 2 years </option>
            <option value="12"> 3 years </option>
            <option value="16"> 4 years </option>
            <option value="20"> >=5 years  </option>
        </select> 
          <br>
          <br>
          <b> 22b.Number of years placement was from 75 to 84%</b>
          <select name="place">
               <option value="0">None</option>
            <option value="2"> 1 year </option>
            <option value="4"> 2 years </option>
            <option value="6"> 3 years </option>
            <option value="8"> 4 years </option>
            <option value="10"> >=5 years  </option>
        </select> 
    </tr>
</table>   
         <center><input type="submit" name="SubmitButton"/> </center>    
     </form>
    <?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted

$a1 = $_POST['loneproj'];
$b1 = $_POST['teamproj'];
$c1 = $_POST['coproj'];
$d1 = $_POST['patgrant'];
$a2 = $_POST['consult'];
$a3 = $_POST['loneguide'];
$b3 = $_POST['headguide'];
$c3 = $_POST['coguide'];
$a4 = $_POST['jmain'];
$b4 = $_POST['jother'];
$a5 = $_POST['cmain'];
$b5 = $_POST['cother'];
$hod6 = $_POST['hod'];
$dean6 = $_POST['dean'];
$cwaren6 = $_POST['cwarden'];
$tp6 = $_POST['tp'];
$advisor6 = $_POST['advisor'];
$cvo6 = $_POST['cvo'];
$pi6 = $_POST['pi'];
$teqip6 = $_POST['teqip'];
$warden7 = $_POST['warden'];
$asstwarden7 = $_POST['asstwarden'];
$astdean7 = $_POST['astdean'];
$chairman7 = $_POST['chairman'];
$faculty7 = $_POST['faculty'];
$it7= $_POST['it'];
$library7 = $_POST['library'];
$admission7 = $_POST['admission'];
$student7 = $_POST['student'];
$other7 = $_POST['other'];
$converner8 = $_POST['converner'];
$special8 = $_POST['special'];
$facincharge8 = $_POST['facincharge'];
$labin9 = $_POST['labin'];
$deptlevel9 = $_POST['deptlevel'];
$a10 = $_POST['workshop'];
$a11 = $_POST['gain1'];
$b11 = $_POST['gain2'];
$c11 = $_POST['gain3'];
$d11 = $_POST['gain4'];
$a12 = $_POST['national'];
$a13 = $_POST['lenght'];
$a14 = $_POST['elab'];
$a15 = $_POST['teach'];
$a16 = $_POST['pg'];
$a17 = $_POST['ug'];
$a18 = $_POST['book'];
$a19 = $_POST['chapter'];
$a20 = $_POST['outreach'];
$a21 = $_POST['ina'];
$a22 = $_POST['place1'];
$b22 = $_POST['place'];

$result1=8*$a1+5*$b1+3*$c1+8*$d1;
$result2=8*$a3+5*$b3+3*$c3;
$result3=2*$a4+1*$b4;
$result4=0.6*$a5+0.4*$b5;

$result5=$hod6+$dean6+$cwaren6+$tp6+$advisor6+$cvo6+$pi6+$teqip6;

if($result5>8)
{
$result6=16;
}
else
{
$result6=2*$result5;
}

$result7=$warden7+$asstwarden7+$astdean7+$chairman7+$faculty7+$it7+$library7+$admission7+$student7+$other7;

if($result7>8)
{
$result8=8;
}
else
{
$result8=1*$result7;
}

$result9=$converner8+$special8+$facincharge8;
if($result9>6)
{
$result10=3;
}
else
{
$result10=0.5*$result9;
}

$result11=$labin9+$deptlevel9;

if($result11>6)
{
$result12=3;
}
else
{
$result12=0.5*$result11;
}

$result13= $a2+$a10+$a11+$b11+$c11+$d11+$a12+$a13+$a14+$a15+$a16+$a17+$a18+$a19+$a20+$a21+$a22+$b22;


$result14=$result1+$result2+$result3+$result4+$result6+$result8+$result10+$result12+$result13;
echo "Credit earned ".$result14;
}    
?>
    </body>
</html>
