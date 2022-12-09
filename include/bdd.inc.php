<?php 
try 
{
    $dbname = "veille_informatique";
    $user = "root";
    $pass = "";

    $db = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
}
catch(PDOException $e)
{
    print "ERROR : ".$e->getMessage();
}

?>