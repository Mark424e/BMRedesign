<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 1){
    $DB_SERVER = "localhost";
    $DB_NAME = "bm_cars";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "markphillip.dk.mysql";
    $DB_NAME = "markphillip_dkmy_db";
    $DB_USER = "markphillip_dkmy_db";
    $DB_PASS = "Qwerty123";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);