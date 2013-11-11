<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>   
<?php
$query_cnt_info = mysql_query("SELECT * FROM client_informatique");
?>        
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/document-2.png" alt="" /> Contrat de Maintenance </h1>
            <div class="bloc">
                <div class="title">
                    Nouveau contrat de Maintenance
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
                        <?php
                            while($donnee_cnt_info = mysql_fetch_array($query_cnt_info))
                            {
                        ?>
                            <option value="<?php echo $donnee_cnt_info['idclientinfo']; ?>"><?php echo $donnee_cnt_info['nom']; ?> <?php echo $donnee_cnt_info['prenom']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>

                    <div class="input">
                        <label for="input5">Date de Fin</label>
                        <input type="text" class="datepicker" id="input4" name="date_fin">
                    </div>


                    <div class="input">
                        <label for="select">Type de Contrat</label>
                        <select name="type" id="select">
                            <option value="1">First</option>
                            <option value="2">Premium</option>
                            <option value="3">Performance</option>
                            <option value="4">Professionnel</option>
                        </select>
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