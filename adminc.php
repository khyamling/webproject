<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('aindex.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$aid=$_SESSION['userSession'] ;

if(isset($_SESSION['msg'])) { $xx=$_SESSION['msg']; }

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $aid?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
     
    </head>
    
   <body  >

        <div class="navbar navbar-fixed-top ">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="adminc.php">Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $aid ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div id="fnt">
                                        <a tabindex="-1" href="logoutadmin.php"> <div id="fnt"> Logout </div></a>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                                                              
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
       
            <form class="form-signin" method="post" action="sprint.php">
       <font size="5"  face="Comic sans MS"  color="red"> <p> <?php  if(isset($xx)) { echo $xx; };
       $_SESSION['msg']="";?> </p></font>

       <hr>
 
       
<table><tr>
 
       <td align="left">
           <b>1. Search by Application number:</b>
           <input type="text" name="appid" value="">
         <button class="btn-toolbar " type="submit" name="sear">Search</button>
       </td> </tr> </table>
       <hr>
   <table>
<tr>    <td align="left">
           <b>2. List of Application:</b>
         <button class="btn-toolbar " type="submit" name="search1">Search</button>
       </td> </tr> </table>
   

    <hr>
<table>    
<tr>    <td align="left">
           <b>3. List of Successful submitted Application:</b>
         <button class="btn-toolbar " type="submit" name="search11">Search</button>
       </td> </tr> </table>
<hr>
 <b>   4.Sort Application By Department </b>
      
       <hr>
<table><tr>
 
       <td align="left">
           Department
       </td>
        <td>
           <select name="s2">
    <option> - Department - </option>
    <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CHY">Chemistry</option>
    <option value="CVE">Civil Engineering</option>
    <option value="CSE">Computer Science & Engineering</option>
    <option value="EEE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="ITE"> Information Technology</option>
    <option value="MCS">Mathematical And Computational Sciences</option>
    <option value="MLE">Mechanical Engineering</option>
    <option value="MME">Metallurgical and Materials Engineering</option>
    <option value="MNE">Mining Engineering</option>
        <option value="PHY"> Physics</option>
        <option value="SOM"> School of  Management</option>
</select>
      </td>
    </tr>        
     <tr colspan="2" style="align-items: center">
           <td ></td><td> 
                                   <button class="btn-toolbar " type="submit" name="search2">Search</button>
         </td></tr>
</table>
 
 <hr>
    <b>5.View essential requirement By Department by Post Applied. </b>
       <hr>

 <br>
<table> <tr>
        <td>
    Department
       </td>
        <td>
           <select name="s3">
    <option> - Department - </option>
    <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CHY">Chemistry</option>
    <option value="CVE">Civil Engineering</option>
    <option value="CSE">Computer Science & Engineering</option>
    <option value="EEE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="ITE"> Information Technology</option>
    <option value="MCS">Mathematical And Computational Sciences</option>
    <option value="MLE">Mechanical Engineering</option>
    <option value="MME">Metallurgical and Materials Engineering</option>
    <option value="MNE">Mining Engineering</option>
        <option value="PHY"> Physics</option>
        <option value="SOM"> School of  Management</option>
</select>
      </td>
    </tr>        
     <tr colspan="2" style="align-items: center">
         <td>&nbsp;</td>  <td >
</tr>
 
 
<tr>
         <td >
        Post
         </td>
         <td>
          <select id="json-one" name="s31">
              <option value="" > Select Applied post</option>
                           <option value="1">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000</option>
                    <option  value="2" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000</option>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor PB-3 with Grade pay of Rs.8000</option> 
                     <!--     <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option> -->
                         <!--   <option value="6" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option>  -->
                        </select>
        </td>
                  </tr>
                  <tr> <td></td><td>
                                   <button class="btn-toolbar" type="submit" name="search3">Search</button>
                                   </td></tr> </table>
</font>
<hr>


 <hr>
    <b>6.ACULTY RECRUITMENT UNDER 4-TIER FLEXIBLE FACULTY STRUCTURE </b>
       <hr>

 <br>
<table> <tr>
        <td>
    Department
       </td>
        <td>
           <select name="s5">
    <option> - Department - </option>
    <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CHY">Chemistry</option>
    <option value="CVE">Civil Engineering</option>
    <option value="CSE">Computer Science & Engineering</option>
    <option value="EEE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="ITE"> Information Technology</option>
    <option value="MCS">Mathematical And Computational Sciences</option>
    <option value="MLE">Mechanical Engineering</option>
    <option value="MME">Metallurgical and Materials Engineering</option>
    <option value="MNE">Mining Engineering</option>
        <option value="PHY"> Physics</option>
        <option value="SOM"> School of  Management</option>
</select>
      </td>
    </tr>        
     <tr colspan="2" style="align-items: center">
         <td>&nbsp;</td>  <td >
</tr>
 
 
<tr>
         <td >
        Post
         </td>
         <td>
          <select id="json-one" name="s51">
              <option value="" > Select Applied post</option>
                           <option value="1">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000</option>
                    <option  value="2" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000</option>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor PB-3 with Grade pay of Rs.8000</option> 
                     <!--     <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option> -->
                         <!--   <option value="6" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option>  -->
                        </select>
        </td>
                  </tr>
                  <tr> <td></td><td>
                                   <button class="btn-toolbar" type="submit" name="search5">Search</button>
                                   </td></tr> </table>
</font>
<hr>


       <b>7.Credit for each for each individual questions. </b>
       <hr>

 <br>
<table> <tr>
        <td>
    Department
       </td>
        <td>
           <select name="s4">
    <option> - Department - </option>
    <option value="AMH">Applied Mechanics and Hydraulics </option>
    <option value="CHE"> Chemical Engineering</option>
    <option value="CHY">Chemistry</option>
    <option value="CVE">Civil Engineering</option>
    <option value="CSE">Computer Science & Engineering</option>
    <option value="EEE"> Electrical and Electronics Engineering </option>
    <option value="ECE">Electronics and Communication Engineering</option>
    <option value="ITE"> Information Technology</option>
    <option value="MCS">Mathematical And Computational Sciences</option>
    <option value="MLE">Mechanical Engineering</option>
    <option value="MME">Metallurgical and Materials Engineering</option>
    <option value="MNE">Mining Engineering</option>
        <option value="PHY"> Physics</option>
        <option value="SOM"> School of  Management</option>
</select>
      </td>
    </tr>        
     <tr colspan="2" style="align-items: center">
         <td>&nbsp;</td>  <td >
</tr>
 
 
<tr>
         <td >
        Post
         </td>
         <td>
          <select id="json-one" name="s41">
              <option value="" > Select Applied post</option>
                    <option value="1">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000</option>
                   <option  value="2" name="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000">Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000</option>
                            <option value="3" name="Assistant Professor PB-3 with Grade pay of Rs.8000">Assistant Professor PB-3 with Grade pay of Rs.8000</option>  
                     <!--     <option value="4" name="Associate Professor PB-4 with Grade pay of Rs.9500">Associate Professor PB-4 with Grade pay of Rs.9500</option>
                            <option value="5" name="Professor PB-4 with Grade pay of Rs.10500">Professor PB-4 with Grade pay of Rs.10500</option> -->
                         <!--   <option value="6" name="Professor HAG Scale Rs.67000 to 79000">Professor HAG Scale Rs.67000 to 79000</option> -->
                        </select>
        </td>
                  </tr>
                  <tr> <td></td><td>
                                   <button class="btn-toolbar" type="submit" name="search4">Search</button>
                                   </td></tr> </table>
</font>
<hr>


       
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        </form>
    </body>

</html>
