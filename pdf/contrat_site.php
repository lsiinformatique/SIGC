
<?php
include ('../inc/config.php');
$idcntsite = $_GET['idcntsite'];
$query_cnt_site = mysql_query("SELECT * FROM cnt_site, client_site, spec_site WHERE idcntsite = $idcntsite");
$donnee_cnt_site = mysql_fetch_array($query_cnt_site) ;
?>
<link rel="stylesheet" type="text/css" href="cntsite.css">

<page id="cnt_site">
    <div id="header">
        <div class="header_left">
            <h2>LSI INFORMATIQUE</h2>
            35Avenue de Bretagne<br>
            85100 Les Sables d'olonne<br>
            Tel: 02 51 23 24 24<br>
            Mail: contact@lsiinformatique.Fr<br>
            Siret: 753 865 229 00011<br>
            APE: 4741Z<br>
        </div>
        <div class="header_right">
            <h2><b><u>CONTRAT</u></b></h2><br>
            N° CNTSI000<?php echo $donnee_cnt_site['idcntsite']; ?><br>
            <barcode type="EAN13">000<?php echo $donnee_cnt_site['idcntsite']; ?></barcode><br>
        </div>
    </div>
    <div id="corps">
        <u><i><b>LE CONTRAT EST ANNEXE A LA SUITE</b></i></u>
        <table width="49%">
            <tr>
                <td colspan="2">LE CLIENT</td>
            </tr>
            <tr>
                <td>Raison social:</td>
                <td><?php echo $donnee_cnt_site['raison_social']; ?></td>
            </tr>
            <tr>
                <td>Adresse:</td>
                <td><?php echo $donnee_cnt_site['adresse1']; ?></td>
            </tr>
    </div>
</page>
<?php
$content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>