<?php


class dbController
{

//define database

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'produkte';

    public function__construct()

{
$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}


    echo $e->getMessage();
}
}


$db = new dbController();
