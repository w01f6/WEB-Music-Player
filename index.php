<?php
include "./library/DBClass.php";
include "./library/getid3/getid3.php";
global $rootFolder;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LAN Player</title>
        <link rel ="stylesheet" type = "text/css" href = "library/css/bootstrap.min.css">
        <link rel ="stylesheet" type = "text/css" href = "library/css/style.css">
    <script type = "text/javascript" src = "library/js/jQuery.js"></script>
    <script type = "text/javascript" src = "library/js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "library/js/script.js"></script>
      <?php
    echo " <script type = 'text/javascript'>"
    . 'var _ROOT_FOLDER="'.$rootFolder.'";'
        .'</script>';
    ?>
    </head>
    <body class="hero-unit" style="text-align: center;">
        <div class="container">
            <span class="row" id="titlu-melodie">
            </span>
            <div id="container-player">
                <audio  id="main-player" class="row" controls="controls">
                    <source src="<?php echo $rootFolder.
                            $rows[0]["path"]?>" 
                            type="audio/mpeg"
                            >
                  Your browser does not support the audio element.
                  </audio>
            </div>
            <div class='container' id="container-album-arts">
<!--                <div class=' span4 prev-button pull-left' onclick="prev();">
                </div>-->
                <div class="  container  container-album-art center selected-song" id="album-art" style="
                     background-image: url('./library/img/default.jpg');
                     ">
                    <div class="control-album-art-top">
                        <span>top info</span>
                    </div>
                    <div class="control-album-art-bottom" >
                        <div id="action-album-art-pp" id_to_play="-1" class="cursor-pointer action-album-art-play pull-left"></div>
                        
                    </div>
                </div>
<!--                <div class=' span4 next-button pull-right' onclick="next();">
                </div>-->
            </div>
            
        </div>
    </body>
</html>
