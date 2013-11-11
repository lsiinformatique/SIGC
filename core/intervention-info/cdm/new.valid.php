<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');

$idclientinfo = $_POST['idclientinfo'];
$date_creation = date("d-m-y");
$date_fin = $_POST['date_fin'];
$type = $_POST['type'];

$query = "INSERT INTO cnt_informatique (idcntinfo, idclientinfo, date_creation, date_fin, type) VALUES ('', '$idclientinfo', '$date_creation' , '$date_fin', '$type')";
$result = mysql_query($query) or die (mysql_error());

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
                <h2><center>Etape 2/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 100%"><span></span></span>
                </div>
                     <br>
                     <center><h3>Ajout du contrat de maintenance informatique réussi</h3></center>

                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>