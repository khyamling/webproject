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
//require_once 'class.user.php';
//$UID = $_SESSION['Mid'];
///$user_home = new USER();
$vapn="AP3AMH44";
$_SESSION['gappn']=$vapn;

$qq=$vapn;
$gpath="/opt/lampp/htdocs/lat/DOC/$qq.pdf";
    ob_start();
    include(dirname(__FILE__).'/print1.php');
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
    
   // $url="home.php";
      //header("Location: gpdf.php");
    
    $gpath="/web/DOC/$qq.pdf";
    ?>
<a href="<?php echo $gpath ?>" >getpdf</a>