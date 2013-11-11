<?php
session_start();  
if (!isset($_SESSION['login'])) { 
   header ('Location: '.$rootsite.'connexion.php'); 
   exit();  
}  
?>
<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGC - GESTION COMMERCIAL & INTERVENTION - LSI</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <!-- Main stylesheed  (EDIT THIS ONE) -->
        <link rel="stylesheet" href="<?php echo $rootsite; ?>css/style.css" />

        <link rel="stylesheet" href="<?php echo $rootsite; ?>js/jwysiwyg/jquery.wysiwyg.old-school.css" />
        
        <!-- jQuery AND jQueryUI -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
        
        <!-- jQuery Cookie - https://github.com/carhartl/jquery-cookie -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/cookie/jquery.cookie.js"></script>
        
        <!-- jWysiwyg - https://github.com/akzhan/jwysiwyg/ -->
        <link rel="stylesheet" href="<?php echo $rootsite; ?>js/jwysiwyg/jquery.wysiwyg.old-school.css" />
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/jwysiwyg/jquery.wysiwyg.js"></script>
        
        
        <!-- Tooltipsy - http://tooltipsy.com/ -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/tooltipsy.min.js"></script>
        
        <!-- iPhone checkboxes - http://awardwinningfjords.com/2009/06/16/iphone-style-checkboxes.html -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/iphone-style-checkboxes.js"></script>
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/excanvas.js"></script>
        
        <!-- Load zoombox (lightbox effect) - http://www.grafikart.fr/zoombox -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/zoombox/zoombox.js"></script>
        
        <!-- Charts - http://www.filamentgroup.com/lab/update_to_jquery_visualize_accessible_charts_with_html5_from_designing_with/ -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/visualize.jQuery.js"></script>
        
        <!-- Uniform - http://uniformjs.com/ -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/jquery.uniform.js"></script>
        
        
        <!-- Main Javascript that do the magic part (EDIT THIS ONE) -->
        <script type="text/javascript" src="<?php echo $rootsite; ?>js/main.js"></script>
    </head>
    <body class="wood dark">
        
        <!--              
                HEAD
                        --> 
        <div id="head">
            <div class="left">
                <a href="#" class="button profile"><img src="<?php echo $rootsite; ?>img/icons/top/huser.png" alt="" /></a>
                Bonjour, 
                <a href="<?php echo $rootsite; ?>core/agent/index.php"><?php echo $_SESSION['login']; ?></a>
                |
                <a href="<?php echo $rootsite; ?>deconnexion.php">Se déconnecter</a>
            </div>
            <div class="right">
                <!-- <form action="#" id="search" class="search placeholder">
                    <label>Vous recherchez un truc ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form> -->
                <div class="version">
                    Version:
                        <?php
                            if($getversion != $currentversion_server){
                        ?>
                        <div class="error_maj"><?php echo $getversion; ?><span>Votre version est obselete <?php echo $getversion; ?> --> <?php echo $currentversion_server; ?>, une mise à jour est nécéssaire</span></div>
                        <?php
                            }else{
                        ?>
                        <div class="success_maj"><?php echo $getversion; ?></div>
                        <?php } ?>
                </div>

            </div>
        </div>