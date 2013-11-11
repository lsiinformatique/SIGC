<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>   
<?php
$query_inter_info = mysql_query("SELECT * FROM inter_informatique, client_informatique");
$donnee_inter_info = mysql_fetch_array($query_inter_info);
?>        
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/bug.png" alt="" /> Intervention Informatique </h1>
            <div class="bloc">
                <div class="title">
                    Nouvelle Intervention
                </div>
                <div class="content">
                <h2><center>Etape 1/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 50%"><span></span></span>
                </div>
                     <br>
                     <form action="new.valid.php" method="post">
                     <!-- Formulaire -->
                    <div class="input">
                        <label for="select">Selection du client</label>
                        <select name="idclientinfo" id="select">
                            <option value="<?php echo $donnee_inter_info['idclientinfo']; ?>"><?php echo $donnee_inter_info['nom']; ?> <?php echo $donnee_inter_info['prenom']; ?></option>
                        </select>
                    </div>

                    <div class="input">
                        <label for="input1">Matériel</label>
                        <input type="text" id="input1" name="materiel">
                        Type + Marque + Modele
                    </div>

                    <div class="input">
                        <label for="input4">Date de Fin</label>
                        <input type="text" class="datepicker" id="input4" name="date_fin">
                    </div>

                    <div class="input textarea">
                        <label for="textarea1">Description Problème</label>
                        <textarea name="desc_probleme" id="textarea1" rows="7" cols="4"></textarea>
                    </div>

                    <div class="input">
                        <label for="select">Chargeur Fournis</label>
                        <select name="chargeur" id="select">
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="input">
                        <label for="select">Périphérique Fournis</label>
                        <select name="peripherique" id="select">
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="input textarea">
                        <label for="textarea1">Liste des Périphériques</label>
                        <textarea name="desc_peripherique" id="textarea1" rows="7" cols="4"></textarea>
                    </div>

                    <div class="input">
                        <label for="select">Logiciel fournis</label>
                        <select name="logiciel" id="select">
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="input textarea">
                        <label for="textarea1">Liste des Logiciel</label>
                        <textarea name="desc_logiciel" id="textarea1" rows="7" cols="4"></textarea>
                    </div>

                    <div class="input">
                        <label for="input1">Mot de passe</label>
                        <input type="text" id="input1" name="mdp">
                    </div>

                    <center>
                        <div class="submit">
                            <input type="submit" value="valider">
                            <input type="reset" class="black" value="Reset">
                        </div>
                    </center>

                    </form>
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>