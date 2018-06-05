<?php
  $ini_array                   = parse_ini_file ("../sample.ini") ;
  try {
        $bdd = new PDO(sprintf('mysql:host=%s;dbname=%s', $ini_array ['host'], $ini_array ['dbname']), $ini_array ['user'], $ini_array ['pwd']);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>
