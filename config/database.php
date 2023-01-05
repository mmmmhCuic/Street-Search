<?php

    define('Host','localhost');
    define('DB_NAME','id19878430_street_search');
    define('USER','id19878430_cuic_database');
    define('PASS','V]vGojBkiF98@FNS');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect > OK !";
    } catch(PDOException $e){
        echo $e;
    }
