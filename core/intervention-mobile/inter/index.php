<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>           
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/bug.png" alt="" /> Intervention </h1>
            <div class="bloc">
                <div class="title">
                    Liste des Interventions
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>N° Intervention</th>
                                <th>Client</th>
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>Date de fin prévu</th>
                                <th>Etat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $query_inter = mysql_query("SELECT * FROM inter_mobile, client_mobile");
                                while($donnee_inter = mysql_fetch_array($query_inter)){
                            ?>
                                <td>INTM000<?php echo $donnee_inter['idintermob']; ?></td>
                                <td>
                                    <b><?php echo $donnee_inter['nom']; ?> <?php echo $donnee_inter['prenom']; ?></b><br>
                                    <?php echo $donnee_inter['adresse1']; ?><br>
                                    <?php echo $donnee_inter['adresse2']; ?><br>
                                    <?php echo $donnee_inter['cp']; ?> <?php echo $donnee_inter['ville']; ?><br>
                                    <?php echo $donnee_inter['tel']; ?> - <?php echo $donnee_inter['port']; ?>
                                </td>
                                <td><?php echo $donnee_inter['marque']; ?></td>
                                <td><?php echo $donnee_inter['modele']; ?></td>
                                <td>
                                    <?php
                                        if($donnee_inter['date_fin'] >= date("d-m-y")){echo "<font color=red>".$donnee_inter['date_fin']."</font>";}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($donnee_inter['etat'] == 1){echo "<font color=red>Intervention en cour";}
                                        if($donnee_inter['etat'] == 2){echo "<font color=green>Intervention Terminé";}
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
                    <a href="<?php echo $rootsite; ?>core/intervention-mobile/inter
                    /new.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-add.png" alt="" />
                        Nouvelle Intervention
                    </a>
                    <a href="<?php echo $rootsite; ?>core/intervention-mobile/inter
                    /modif.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-load.png" alt=""  width="32" height="32"/>
                        Modifier Intervention
                    </a>
                    <a href="<?php echo $rootsite; ?>core/intervention-mobile/inter
                    /supp.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-remove.png" alt=""  width="32" height="32"/>
                        Supprimer Intervention
                    </a>
                    <div class="cb"></div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>