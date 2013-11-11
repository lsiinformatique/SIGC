<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');

$idcntinfo = $_GET['idcntinfo'];

$query = mysql_query("DELETE FROM cnt_informatique WHERE idcntinfo=$idcntinfo") or die(mysql_error());
?>   

<div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/document-2.png" alt="" /> Contrat de Maintenance </h1>
            <div class="bloc">
                <div class="title">
                    Suppression du contrat de Maintenance
                </div>
                <div class="content">
                <h2><center>Etape 2/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 100%"><span></span></span>
                </div>
                     <br>
                     <center><h3>Contrat Supprimée</h3></center>
                     <meta http-equiv="refresh" content="2; URL=<?php echo $rootsite; ?>/core/intervention-info/cdm/">
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>
   