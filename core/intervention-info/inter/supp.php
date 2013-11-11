<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');

$idclientinfo = $_GET['idclientinfo'];

$query = mysql_query("DELETE FROM client_informatique WHERE idclientinfo=".$idclientinfo) or die(mysql_error());
?>   

<div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/user.png" alt="" /> Client Informatique</h1>
            <div class="bloc">
                <div class="title">
                    Suppression du client informatique
                </div>
                <div class="content">
                <h2><center>Etape 2/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 100%"><span></span></span>
                </div>
                     <br>
                     <center><h3>Client Supprimée</h3></center>
                     <meta http-equiv="refresh" content="2; URL=<?php echo $rootsite; ?>/core/intervention-info/cdm/">
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>
   