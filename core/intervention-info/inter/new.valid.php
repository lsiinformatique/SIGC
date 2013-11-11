<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');

$idclientinfo = $_POST['idclientinfo'];
$materiel = $_POST['materiel'];
$date_fin = $_POST['date_fin'];
$desc_probleme = $_POST['desc_probleme'];
$chargeur = $_POST['chargeur'];
$peripherique = $_POST['peripherique'];
$desc_peripherique = $_POST['desc_peripherique'];
$logiciel = $_POST['logiciel'];
$desc_logiciel = $_POST['desc_logiciel'];
$mdp = $_POST['mdp'];



$query = "INSERT INTO inter_informatique (idinterinfo, idclientinfo, materiel, date_fin, desc_probleme, chargeur, peripherique, desc_peripherique, logiciel, desc_logiciel, mdp) VALUES ('', '$idclientinfo','$materiel', '$date_fin', '$desc_probleme', '$chargeur', '$peripherique', '$desc_peripherique', '$logiciel', '$desc_logiciel', '$mdp')";
$result = mysql_query($query) or die(mysql_error());
?>   
        
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/user.png" alt="" /> Intervention Informatique </h1>
            <div class="bloc">
                <div class="title">
                    Nouvelle Intervention
                </div>
                <div class="content">
                <h2><center>Etape 2/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 100%"><span></span></span>
                </div>
                     <br>
                     <center><h3>Ajout de l'intervention pour <?php echo $materiel; ?> à rendre à <?php echo $date_fin; ?>, réussi</h3></center>
                     <meta http-equiv="refresh" content="2; URL=<?php echo $rootsite; ?>/core/intervention-info/inter/">
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>