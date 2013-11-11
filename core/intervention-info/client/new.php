<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>   
<?php
$query_client_info = mysql_query("SELECT * FROM client_informatique");
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
                     <form action="new.valid.php" method="post">
                     <!-- Formulaire -->
                    <div class="input">
                        <label for="input1">Nom*</label>
                        <input type="text" id="input1" name="nom" required>
                    </div>

                    <div class="input">
                        <label for="input1">Prénom</label>
                        <input type="text" id="input1" name="prenom">
                    </div>

                    <div class="input">
                        <label for="input1">Adresse*</label>
                        <input type="text" id="input1" name="adresse1" required>
                    </div>

                    <div class="input">
                        <label for="input1">Complément d'adresse</label>
                        <input type="text" id="input1" name="adresse2">
                    </div>

                    <div class="input">
                        <label for="input1">Code Postal*</label>
                        <input type="text" id="input1" name="cp" required>
                    </div>

                    <div class="input">
                        <label for="input1">Ville*</label>
                        <input type="text" id="input1" name="ville" required>
                    </div>

                    <div class="input">
                        <label for="input1">Téléphone*</label>
                        <input type="text" id="input1" name="tel" required>
                    </div>

                    <div class="input">
                        <label for="input1">Portable</label>
                        <input type="text" id="input1" name="port">
                    </div>

                    <div class="input">
                        <label for="input1">Mail</label>
                        <input type="text" id="input1" name="mail">
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