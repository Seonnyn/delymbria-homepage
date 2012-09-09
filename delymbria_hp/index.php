<?php
    $iniarray = parse_ini_file("config.ini", TRUE);
    
    // Include DelymbriaCore
    $inifile = $iniarray["basics"]["libpath"]."/DelymbriaCore.php";
    require_once($inifile);
    
    $del_core = new DelymbriaCore();
    
    $hp_version = $del_core->getHomepageData();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Delymbria Homepage</h1>
        <p>Aktuell befindet sich diese Seite im Aufbau</p>
        <footer>Aktuelle Version: <?php echo $hp_version["version"]; ?></footer>
    </body>
</html>