<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>           
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/user.png" alt="" /> Client </h1>
            <div class="bloc">
                <div class="title">
                    Liste des Clients
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>Société</th>
                                <th>Contact</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $query_client = mysql_query("SELECT * FROM client_site");
                                while($donnee_client = mysql_fetch_array($query_client)){
                            ?>
                                <td><?php echo $donnee_client['raison_social']; ?></td>
                                <td><?php echo $donnee_client['contact']; ?></td>
                                <td><?php echo $donnee_client['adresse1']; ?><br><i><?php echo $donnee_client['adresse2']; ?></i><br><?php echo $donnee_client['cp']; ?> <?php echo $donnee_client['ville']; ?></td>
                                <td><?php echo $donnee_client['tel']; ?></td>
                                <td><?php echo $donnee_client['mail']; ?></td>
                            <?php } ?>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="left input">

                    </div>
                </div>
            </div> 

            <div class="bloc">
                <div class="title">
                    Acces Direct
                </div>
                <div class="content">
                    <a href="<?php echo $rootsite; ?>core/site/client/new.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-add.png" alt="" />
                        Nouveau Client
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/client/modif.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-load.png" alt=""  width="32" height="32"/>
                        Modifier Client
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/client/supp.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-remove.png" alt=""  width="32" height="32"/>
                        Supprimer Client
                    </a>
                    <div class="cb"></div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>