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
                    Liste des Contrats
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>N° Contrat</th>
                                <th>Client</th>
                                <th>Date de départ</th>
                                <th>Date de Fin</th>
                                <th>Type de Contrat</th>
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
                                <td><?php echo $donnee_continfo['date_creation']; ?></td>
                                <td>
                                    <?php
                                        if($donnee_continfo['date_fin'] >= date("d-m-y"-30)){echo "<font color=green>".$donnee_continfo['date_fin']."</font>";}
                                        if($donnee_continfo['date_fin'] >= date("d-m-y")){echo "<font color=red>".$donnee_continfo['date_fin']."</font>";}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($donnee_continfo['type'] == 1){echo "Contrat First";}
                                        if($donnee_continfo['type'] == 2){echo "Contrat Premium";}
                                        if($donnee_continfo['type'] == 3){echo "Contrat Performance";}
                                        if($donnee_continfo['type'] == 4){echo "Contrat professionnel";}
                                    ?>
                                </td>
                                    
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