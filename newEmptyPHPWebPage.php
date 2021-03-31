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
        $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
        //$sql1="SELECT * FROM profex where appn=$vapn";
      //$res1 =  mysqli_query($link, $sql1);
     //$row1=$res1->fetch_array();
$dayCount[] = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
          
      //  $p= substr($vapn, 2, 1);
      //  $b= substr($vapn, 3, 3);
       
       $sql1="SELECT * FROM profex where appn='AP2CSE6' ";
      $res1 =  mysqli_query($link, $sql1);
     $row1=$res1->fetch_array();
     $input= intval($row1['nexpg']);
      $input1=  intval($row1['nexpg1']);
      $input2= intval($row1['nexphd1']);
      $input3=  intval($row1['nexphd']);
      echo $input1.$input2.$input3;
      $x= intval($dayCount[$input1]);
      echo $x;
      $xx=intval($dayCount[$input2]);
      $dayOfYearpg=($x)+($input*365);
      $dayOfYearphd=($xx)+($input3*365);
     $total=$dayOfYearphd+$dayOfYearpg;          
     echo $total?>
        
    </body>
</html>
