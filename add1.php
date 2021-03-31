<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('admin.php');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	$stmt = $user_login->runQuery("SELECT * FROM admin WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        if($row['userPass']==md5($upass))
					{
            
            
                                             if($row['userStatus']=="Y")
                                             {
                                                 $_SESSION['userSession'] = $email;
                                                    ('admin.php');
                                             }
                                            else {
                                               $_SESSION['userSession'] = $userRow['userID'];
						$user_login->redirect('adminc.php');

                                            }
						
					}
                                        else
                                            header("Location: aindex.php?error");
						exit;
        
}

?>

<!DOCTYPE html>
  </body>
</html>