<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>           
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/document-2.png" alt="" /> Contrat de Maintenance </h1>
            <div class="bloc">
                <div class="title">
                    Selection du contrat à supprimer
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
                                <th>N° Contrat</th>
                                <th>Client</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $query_continfo = mysql_query("SELECT * FROM cnt_informatique, client_informatique");
                                while($donnee_continfo = mysql_fetch_array($query_continfo)){
                            ?>
                                <td>CNT000<?php echo $donnee_continfo['idcntinfo']; ?></td>
                                <td>
                                    <b><?php echo $donnee_continfo['nom']; ?> <?php echo $donnee_continfo['prenom']; ?></b><br>
                                    <?php echo $donnee_continfo['adresse1']; ?><br>
                                    <?php echo $donnee_continfo['adresse2']; ?><br>
                                    <?php echo $donnee_continfo['cp']; ?> <?php echo $donnee_continfo['ville']; ?><br>
                                    <?php echo $donnee_continfo['tel']; ?> - <?php echo $donnee_continfo['port']; ?>
                                </td>
                                <td><a href="supp.php?idcntinfo=<?php echo $donnee_continfo['idcntinfo']; ?>" class="button"><img src="<?php echo $rootsite; ?>img/icons/menu/settings.png"> Suppression du contrat</a></td>
                                    
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
                    <a href="<?php echo $rootsite; ?>core/intervention-info/cdm/new.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-add.png" alt="" />
                        Nouveau Contrat
                    </a>
                    <a href="<?php echo $rootsite; ?>core/intervention-info/cdm/select.supp.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-remove.png" alt=""  width="32" height="32"/>
                        Supprimer Contrat
                    </a>
                    <div class="cb"></div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>