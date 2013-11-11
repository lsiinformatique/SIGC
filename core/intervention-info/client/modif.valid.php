<?php
include ('../../../inc/header.php');
include ('../../../inc/menu.php');

$idclientinfo = $_POST['idclientinfo'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$adresse1 =$_POST['adresse1'];
$adresse2 =$_POST['adresse2'];
$cp =$_POST['cp'];
$ville =$_POST['ville'];
$tel =$_POST['tel'];
$port =$_POST['port'];
$mail =$_POST['mail'];

$query = "UPDATE client_informatique SET nom='$nom', prenom='$prenom', adresse1='$adresse1', adresse2='$adresse2', cp='$cp', ville='$ville', tel='$tel', port='$port', mail='$mail' WHERE idclientinfo=".$idclientinfo;
$result = mysql_query($query) or die(mysql_error());
?>   
        
        <!--            
              CONTENT 
                        --> 
        <div id="content" class="black">
                      
            <h1><img src="<?php echo $rootsite; ?>img/icons/user.png" alt="" /> Client Informatique </h1>
            <div class="bloc">
                <div class="title">
                    Nouveau Client
                </div>
                <div class="content">
                <h2><center>Etape 2/2</center></h2>
                 <div class="meter animate">
                    <span style="width: 100%"><span></span></span>
                </div>
                     <br>
                     <center><h3>Modification du client <?php echo $nom; ?><?php echo $prenom; ?> réussi</h3></center>
                     <meta http-equiv="refresh" content="2; URL=<?php echo $rootsite; ?>/core/intervention-info/client/">
                    <div class="left input">

                    </div>
                </div>
            </div> 
          
                            
            
                            
        </div>
        
    </body>
</html>