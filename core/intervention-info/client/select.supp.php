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
                    Selection du Client à supprimer
                </div>
                <div class="content">
                <h2><center>Etape 1/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 50%"><span></span></span>
                </div>
                     <br>
                    <table>
                        <thead>
                            <tr>
                                <th>ID Client</th>
                                <th>Client</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $query_continfo = mysql_query("SELECT * FROM client_informatique");
                                while($donnee_continfo = mysql_fetch_array($query_continfo)){
                            ?>
                            <tr>
                                <td><?php echo $donnee_continfo['idclientinfo']; ?></td>
                                <td>
                                    <b><?php echo $donnee_continfo['nom']; ?> <?php echo $donnee_continfo['prenom']; ?></b><br>
                                    <?php echo $donnee_continfo['adresse1']; ?><br>
                                    <?php echo $donnee_continfo['adresse2']; ?><br>
                                    <?php echo $donnee_continfo['cp']; ?> <?php echo $donnee_continfo['ville']; ?><br>
                                    <?php echo $donnee_continfo['tel']; ?> - <?php echo $donnee_continfo['port']; ?>
                                </td>
                                <td><a href="supp.php?idclientinfo=<?php echo $donnee_continfo['idclientinfo']; ?>" class="button"><img src="<?php echo $rootsite; ?>img/icons/menu/settings.png"> Suppression du client</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="left input">

                    </div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>