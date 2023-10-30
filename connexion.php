<?php
try{$connect=new pdo('mysql:host=localhost;dbname=mabase','root','');
   }
   catch(Exeption $e)
   {die('Erreur:'.$e->getMessage());
   }
?>
