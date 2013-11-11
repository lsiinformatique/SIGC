<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>   
<?php
$idclientinfo = $_GET['idclientinfo'];
$query_client_info = mysql_query("SELECT * FROM client_informatique WHERE idclientinfo=$idclientinfo");
$donnees_client_info = mysql_fetch_array($query_client_info);
?>        
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/user.png" alt="" /> Client Informatique </h1>
            <div class="bloc">
                <div class="title">
                    Nouveau client
                </div>
                <div class="content">
                <h2><center>Etape 1/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 50%"><span></span></span>
                </div>
                     <br>
                     <form action="modif.valid.php" method="post">
                     <!-- Formulaire -->
                     <div class="input">
                        <label for="input1">ID CLIENT</label>
                        <input type="text" id="input1" name="idclientinfo" value="<?php echo $donnees_client_info['idclientinfo']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Nom*</label>
                        <input type="text" id="input1" name="nom" required value="<?php echo $donnees_client_info['nom']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Prénom</label>
                        <input type="text" id="input1" name="prenom" value="<?php echo $donnees_client_info['prenom']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Adresse*</label>
                        <input type="text" id="input1" name="adresse1" required value="<?php echo $donnees_client_info['adresse1']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Complément d'adresse</label>
                        <input type="text" id="input1" name="adresse2" value="<?php echo $donnees_client_info['adresse2']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Code Postal*</label>
                        <input type="text" id="input1" name="cp" required value="<?php echo $donnees_client_info['cp']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Ville*</label>
                        <input type="text" id="input1" name="ville" required value="<?php echo $donnees_client_info['ville']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Téléphone*</label>
                        <input type="text" id="input1" name="tel" required value="<?php echo $donnees_client_info['tel']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Portable</label>
                        <input type="text" id="input1" name="port" value="<?php echo $donnees_client_info['port']; ?>">
                    </div>

                    <div class="input">
                        <label for="input1">Mail</label>
                        <input type="text" id="input1" name="mail" value="<?php echo $donnees_client_info['mail']; ?>">
                    </div>

                    <center>
                        <input type="submit" value="valider">
                        <input type="reset" class="black" value="Reset">
                    </center>

                    </form>
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>