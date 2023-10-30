<?php 

require_once ("connexion.php");

  $id = $_GET['delete'];
  $DelSql = "DELETE FROM `mabase`.`client` WHERE `client`.`numero` =$id";
  $req = $connect->query($DelSql);
  if ($req) {
    header("Location: affichage_clients.php");
  }else{
    echo "Failed to delete";
  }

 ?>

