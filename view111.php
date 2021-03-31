<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
<?php
include_once 'dbconfig.php';
session_start();
require_once 'class.user.php';
$UID = "nynaim";
$user_home = new USER();
//$br=$_SESSION['br'];
//$pos=$_SESSION['pos'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta  content="user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
 <title><?php echo $UID; ?></title>
               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
                <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<link rel="stylesheet" href="style.css" type="text/css" />
<script LANGUAGE="JavaScript">
function ValidateForm(){
ErrorText= "";
aa=form.view.value;

if ( aa=="" || aa==null)
{
alert ( "Please choose your Gender: Male or Female" );
return false;
}

</script>
</head>

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
								<?php  echo $UID; ?> <i class="caret"></i>
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
         <form action="view12.php" method="post" name="f1" onsubmit="return ValidateForm()" >
             <br>
                 <div style="width:80%;" id="header">
<label>List Application </label>
</div>
<div id="body">
   
    

    <table align="left" width="1290" style="border-collapse: separate !important;">

    <tr>
        <th> Application No.</th> 
    <th>Department</th> 
        <th>Post Applied </th>
     <th> View/Edit Application</th>

 
 <th> Submit Application</th>
 <th>Status of Final Submission </th> 
       </tr>
    <?php
    
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

 $link = mysqli_connect("localhost", "root", "123html2pdf", "employment");
 $sql="SELECT * FROM postapplied where email='a@gma.com'";
 $result_set=mysqli_query($link,$sql);
 $num_rows = mysqli_num_rows($result_set);
 $pp=1;

 while($row=$result_set->fetch_array())
 {
  
     if($row['post'] ==1)
      $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.6000+07 additional non-compounded increments";
          else if($row['post'] ==2)
                            $pp="Assistant Professor(On Contract)PB-3 with Grade pay of Rs.7000";
          else if($row['post'] ==3)     $pp="Assistant Professor PB-3 with Grade pay of Rs.8000";
          else if($row['post'] ==4)     $pp="Associate Professor PB-4 with Grade pay of Rs.9500";
          else if($row['post'] ==5)     $pp="Professor PB-4 with Grade pay of Rs.10500";
          else if($row['post'] ==6)     $pp="Professor HAG Scale Rs.67000 to 79000";
       
    if($row['dept'] =="AMH") $dept="Applied Mechanics and Hydraulics";
    else if($row['dept'] =="CHE") $dept=  "Chemical Engineering"; 
    else if($row['dept'] =="CHY") $dept=  "Chemistry"; 
    else if($row['dept'] =="CVE") $dept=  "Civil Engineering"; 
    else if($row['dept'] =="CSE") $dept=  "Computer Science & Engineering"; 
    
    else if($row['dept'] =="EEE") $dept=  " Electrical and Electronics Engineering "; 
    else if($row['dept'] =="ECE") $dept=  " Electronics and Communication Engineering"; 
    else if($row['dept'] =="ITE") $dept=  " Information Technology"; 
    else if($row['dept'] =="MCS") $dept=  " Mathematical And Computational Sciences"; 
    else if($row['dept'] =="MLE") $dept=  " Mechanical Engineering"; 
    else if($row['dept'] =="MME") $dept=  " Metallurgical and Materials Engineering"; 
    else if($row['dept'] =="MNE") $dept=  " Mining Engineering"; 
    else if($row['dept'] =="PHY") $dept=  "  Physics"; 
    else if($row['dept'] =="SOM") $dept=  "  School of  Management"; 
   
    
?>
        <tr>
        <td><input type="radio" name="view" value="<?php echo $row['appid'] ?>" /> <?php echo $row['appid']; ?> </td>
        <td><?php echo $dept; ?></td>
        <td><?php echo $pp; ?></td>
        <td > <input id="btn1" type="submit"  value="View application" name="Save & Next"> <input  id="btn1"  type="submit" formaction="apedit.php"  value="Edit Application" name="edit"></label>
                      </td>      
        <td><input id="btn1" type="submit" value="Submit" style="width: 100px;" ></td> <td> <?php echo "Pending"; ?></td></tr>
      
        <?php
        
 } ?>
    
              
                 
      
     
 
        <tr>  <td colspan="6"> <label><input id="btn1" type="submit"  value="View application" name="Save & Next"> <input  id="btn1"  type="submit" formaction="apedit.php"  value="Edit Application" name="edit"></label>
                      </td>      </tr>  </table>

  
   
</div>
             </form>
</body>
    
</html>
</page>
