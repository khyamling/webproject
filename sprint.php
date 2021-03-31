<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML

session_start();
require_once 'class.user.php';
$user_home = new USER();
//$UID = $_SESSION['Mid'];
///$user_home = new USER();
//$vapn="AP3AMH44";
//$_SESSION['gappn']=$vapn;
if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}
//$qq=$vapn;
//$gpath="/opt/lampp/htdocs/web/DOC/$qq.pdf";
    //$pp="/print1.php";
if(isset($_POST['sear']))
{
   $pp=$_POST['appid'];
    $_SESSION['gappn']=$pp;
$pp = substr($pp, 2, 1);

if($pp=="1")
{
    $pp="/v11.php";
}
else if($pp=="2")
{
    $pp="/v12.php";
}
else if($pp=="3")
{
    $pp="/v13.php";
}
else if($pp=="4")
{
    $pp="/v14.php";
}
else if($pp=="5")
{
    $pp="/v15.php";
}
else if($pp=="6")
{
    $pp="/v16.php";
}
else
{
    $pp="post.php";
}  
}
if(isset($_POST['search1']))
{
    
    $pp="/print11.php";
}
if(isset($_POST['search11']))
{

   $pp="/print1.php";
  // $url="print1.php";
  // header("Location: print1.php");
}

if(isset($_POST['search2']))
{
    $pp=$_POST['s2'];
    $_SESSION['ppst']=$pp;
    $pp="/print3.php";
}
if(isset($_POST['search3']))
{
    $pp=$_POST['s3'];
    $pp1=$_POST['s31'];
    $_SESSION['pdpt']=$pp;
    $_SESSION['ppst']=$pp1;
   $url="print4.php";
   header("Location: print4.php");
        
}

if(isset($_POST['search5']))
{
    $pp=$_POST['s5'];
    $pp1=$_POST['s51'];
    $_SESSION['pdpt']=$pp;
    $_SESSION['ppst']=$pp1;
   $url="print6.php";
   header("Location: print6.php");
        
}

if(isset($_POST['search4']))
{
    $pp=$_POST['s4'];
    $pp1=$_POST['s41'];
    $_SESSION['pdpt']=$pp;
    $_SESSION['ppst']=$pp1;
   $url="print5.php";
   header("Location: print5.php");
        
}

    ob_start();
    include(dirname(__FILE__).$pp);
    $content = ob_get_clean();
//SetFont('dejavusans', '', 10);
    // convert to PDF
    require_once(dirname(__FILE__).'/html2pdf-4.5.1/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont();
        $html2pdf->setTestTdInOnePage(false);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output();
       
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    
   // 
    $gpath="/web/DOC/$qq.pdf";
    ?>
<a href="<?php echo $gpath ?>" >getpdf</a>
