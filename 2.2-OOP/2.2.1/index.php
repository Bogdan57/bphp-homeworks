<?php
    require 'autoload.php';
    require 'config/SystemConfig.php';
    $jsonFileAccessModel = new JsonFileAccessModel('data');
    print_r($jsonFileAccessModel);
?>