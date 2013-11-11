<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>           
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/devis.png" alt="" /> Devis </h1>
            <div class="bloc">
                <div class="title">
                    Liste des Devis
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>N° devis</th>
                                <th>N° Contrat</th>
                                <th>Client</th>
                                <th>Date d'édition</th>
                                <th>Date de fin de devis</th>
                                <th>Prix TTC</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $query_client = mysql_query("SELECT * FROM dev_site, cnt_site, client_site");
                                while($donnee_client = mysql_fetch_array($query_client)){
                            ?>
                                <td>DESI000<?php echo $donnee_client['iddevsite']; ?></td>
                                <td>CNTSIT000<?php echo $donnee_client['idcntsite']; ?></td>
                                <td>
                                    <?php echo $donnee_client['raison_social']; ?><br>
                                    <?php echo $donnee_client['adresse1']; ?><br>
                                    <?php echo $donnee_client['adresse2']; ?><br>
                                    <?php echo $donnee_client['cp']; ?> <?php echo $donnee_client['ville']; ?><br>
                                    Tel: <?php echo $donnee_client['tel']; ?>
                                </td>
                                <td><?php echo $donnee_client['date_devis']; ?></td>
                                <td><?php echo $donnee_client['date_fin_devis']; ?></td>
                                <td><?php echo $donnee_client['prix_ttc']; ?></td>
                                <td>
                                    <?php
                                        if($donnee_client['etat'] == 1){echo "Editer";}
                                        if($donnee_client['etat'] == 2){echo "Signer";}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($donnee_client['etat'] == 1){echo "<a href=# class=button><img src=".$rootsite."img/icons/menu/print.png> Impression du devis</a><br>
                                        <a href=# class=button><img src=".$rootsite."img/icons/menu/pen.png> Signature</a>
                                        ";}
                                        if($donnee_client['etat'] == 2){echo "<a href=# class=button><img src=".$rootsite."img/icons/menu/print.png> Impression du contrat</a>";}
                                    ?>
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
                    <a href="<?php echo $rootsite; ?>core/site/devis/new.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-add.png" alt="" />
                        Nouveau Client
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/devis/modif.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-load.png" alt=""  width="32" height="32"/>
                        Modifier Client
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/devis/supp.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-remove.png" alt=""  width="32" height="32"/>
                        Supprimer Client
                    </a>
                    <div class="cb"></div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>