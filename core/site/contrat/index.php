<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');
?>           
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/document-2.png" alt="" /> Contrat de Site Internet </h1>
            <div class="bloc">
                <div class="title">
                    Liste des Contrats de Site Internet
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Date d'ouverture</th>
                                <th>Date de Fin</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $query_client = mysql_query("SELECT * FROM cnt_site, client_site");
                                while($donnee_client = mysql_fetch_array($query_client)){
                            ?>
                                <td>
                                    <?php echo $donnee_client['raison_social']; ?><br>
                                    <?php echo $donnee_client['adresse1']; ?><br>
                                    <?php echo $donnee_client['adresse2']; ?><br>
                                    <?php echo $donnee_client['cp']; ?> <?php echo $donnee_client['ville']; ?>
                                </td>
                                <td><?php echo $donnee_client['date_ouverture']; ?></td>
                                <td><?php echo $donnee_client['date_fin']; ?></td>
                                <td>
                                    <?php
                                        $date_fin = $donnee_client['date_fin'];
                                        switch($date_fin)
                                        {

                                            case $date_fin > date("d-m-y")+15:
                                            echo "<a href=cloture.php><img src=../../img/icons/warning.png />Cloture Obligatoire</a>";
                                            break;

                                            case $date_fin > date("d-m-y")+1:
                                            echo "<a href=renouvel.php><blink>Renouvellement Impératif</blink></a>";
                                            break;

                                            case $date_fin >= date("d-m-y"):
                                            echo "<a href=renouvel.php>Renouvellement Aujourd'hui</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-5:
                                            echo "<a href=renouvel.php>Renouvellement J-5</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-10:
                                            echo "<a href=renouvel.php>Renouvellement J-10</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-15:
                                            echo "<a href=renouvel.php>Renouvellement J-15</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-20:
                                            echo "<a href=renouvel.php>Renouvellement J-20</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-25:
                                            echo "<a href=renouvel.php>Renouvellement J-25</a>";
                                            break;

                                            case $date_fin >= date("d-m-y")-30:
                                            echo "<a href=renouvel.php>Renouvellement J-30</a>";
                                            break;

                                            case $date_fin > date("d-m-y")+1:
                                            echo "<a href=renouvel.php><blink>Renouvellement Impératif</blink></a>";
                                            break;

                                            case $date_fin > date("d-m-y")+15:
                                            echo "<a href=cloture.php><img src=../../img/icons/warning.png />Cloture Obligatoire</a>";
                                            break;

                                            default:
                                            echo "<font color=green>OK</font>";
                                        }
                                       
                                    ?>
                                </td>

                                <td><a href="<?php echo $rootsite; ?>/pdf/contrat_site.php?idcntsite=<?php echo $donnee_client['idcntsite']; ?>" class="button"><img src="<?php echo $rootsite; ?>img/icons/menu/print.png"> Impression du contrat</a></td>
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
                    <a href="<?php echo $rootsite; ?>core/site/contrat/new.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-add.png" alt="" />
                        Nouveau Contrat
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/contrat/modif.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-load.png" alt=""  width="32" height="32"/>
                        Modifier Contrat
                    </a>
                    <a href="<?php echo $rootsite; ?>core/site/contrat/supp.php" class="shortcut">
                        <img src="<?php echo $rootsite; ?>img/icons/button-remove.png" alt=""  width="32" height="32"/>
                        Supprimer Contrat
                    </a>
                    <div class="cb"></div>
                </div>
            </div>           
                            
            
                            
        </div>
        
    </body>
</html>