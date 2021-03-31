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

        
    
         <script language="JavaScript" type="text/javascript">
    function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays").value=GetDays();
        }  
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                var diff_date =  dropdt - pickdt;
                var num_years = diff_date/31536000000;
                var num_months = (diff_date % 31536000000)/2628000000;
                var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
                return  ("days:"+Math.floor(num_days)+"Months:"+Math.floor(num_months)+"Years:"+Math.floor(num_years));
        }
         
    }      
    </script>
    
    </head>
    <body>
         <input type="date" class="textbox" id="pick_date1" name="E23" onchange="cal1()"</p>
            <input type="date" class="textbox" id="drop_date1" name="E24" onchange="cal1()"/>
            <input type="text" class="textbox" id="numdays1" name="E25"/>
    </body>
</html>
