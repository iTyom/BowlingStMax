<?php
$ini_array                   = parse_ini_file ("../sample.ini") ;
$BDD                     = "'mysql:host=".$ini_array ["host"].";dbname=".$ini_array ["dbname"].";charset=utf8', '".$ini_array ["user"]."', '".$ini_array ["pwd"]."'";
echo $BDD;
     try {
        $bdd = new PDO('mysql:host=localhost;dbname=id5237943_bowling2;charset=utf8', 'id5237943_root', 'rootroot');

    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>
