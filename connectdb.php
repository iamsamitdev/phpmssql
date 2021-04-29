<?php

$host   = 'SAMITPCGENIUS\SQLEXPRESS';
$user   = 'sa';
$pass   = '377040';
$dbname = 'mydb';

try {

    $connect = new PDO(
        'sqlsrv:Server=' . $host . ';Database=' . $dbname,
        $user,
        $pass
    );

    $connect->exec("SET NAMES 'utf8'");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // echo "connect database success";

}
catch (Exception $e)
{
    die(print_r($e->getMessage()));
}
