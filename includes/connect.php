<?php
session_start();
//omittinng login info


$dsd = "host=localhost port=5432 dbname=test";
$username = "postgres";
$password = "haloain";


try
{
     $DB_con = pg_pconnect("$dsd user=$username password=$password") or die('connection failed');
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

?>