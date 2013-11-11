    <?php
    include ('inc/config.php');
    // on teste si le visiteur a soumis le formulaire de connexion
    if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') { 
       if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) { 
     
          $connect = mysql_connect ("localhost", "root", ""); 
          mysql_select_db ("sigc", $connect); 
          
          // on teste si une entrée de la base contient ce couple login / pass
          $sql = 'SELECT count(*) FROM users WHERE login="'.mysql_escape_string($_POST['login']).'" AND password="'.mysql_escape_string(md5($_POST['pass'])).'"'; 
          $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
          $data = mysql_fetch_array($req); 
          
          mysql_free_result($req); 
          mysql_close(); 
          
          // si on obtient une réponse, alors l'utilisateur est un membre
          if ($data[0] == 1) { 
             session_start(); 
             $_SESSION['login'] = $_POST['login']; 
             header('Location: index.php'); 
             exit(); 
          } 
          // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
          elseif ($data[0] == 0) { 
             $erreur = '
             <div class=message error>
              <h5>Erreur:</h5>
              <p>Compte non reconnu</p>
            </div>
             '; 
          } 
          // sinon, alors la, il y a un gros problème :)
          else { 
             $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.'; 
          } 
       } 
       else { 
          $erreur = 'Au moins un des champs est vide.'; 
       }  
    }  
    ?>
    <!DOCTYPE html>
<html>
<head>
<title>SIGC - Connexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="js/jwysiwyg/jquery.wysiwyg.old-school.css"/>
<!-- jQuery AND jQueryUI -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/min.js"></script>
</head>
<body class="wood dark">
<div id="content" class="login">
  <h1><img src="img/icons/lock-closed.png" alt=""/>Admin panel</h1>
  <div class="notif tip">
     Version: <?php echo $getversion; ?> <a href="http://lsiinformatique.fr/public/sigc/maj/<?php echo $getversion; ?>.php" class="zoombox w450 h700">Changelog</a> <a href="#" class="close"></a>
  </div>
                    <!-- <form action="connexion.php" method="post">
                    <table>
                      <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"></td>
                      </tr>
                      <tr>
                        <td>Mot de Passe:</td>
                        <td><input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"></td>
                      </tr>
                    </table>
                    <input type="submit" name="connexion" value="Connexion">
                  </form> -->

                  <form action="connexion.php" method="post">
                    <div class="input placeholder">
                      <label for="login">Login</label>
                      <input type="text"  name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"/>
                    </div>
                    <div class="input placeholder">
                      <label for="pass">Mot de passe</label>
                      <input type="password"  name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"/>
                    </div>
                    <div class="submit">
                      <input type="submit" name="connexion" value="Connexion"/>
                    </div>
                  </form>
                    <?php
                    if (isset($erreur)) echo '<br /><br />',$erreur;  
                    ?>
                  </center>
                </div>
            </div>
        </div>


    </body>
    </html> 

