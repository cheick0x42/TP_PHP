<?php 

				 
require_once("connexion.php");

// $selSql ="SELECT * FROM 'client' WHERE mod=$id1";
$req = $connect->prepare('SELECT * FROM client WHERE mod=?');
$req->execute(array($_GET['mod']));
// $req = $connect->query($selSql);
$donne=$req->fetch();

if(isset($_POST) & !empty($_POST))
{
  $nom=$_POST['nom'];
  $adresse=$_POST['adresse'];
  $telephone=$_POST['numero_tel'];
  $req = $connect->prepare('UPDATE client SET nom=?, adresse= ?, numero_telephone=? WHERE numero=?');
  $req->execute(array($_POST['nom'],$_POST['adresse'],$_POST['numero_telephone'], $_GET['mod']));
  if ($req) {
    header("Location: affichage_clients.php");
  }else{
    echo "Failed to delete";
  }
}




	   
     

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<form id="monform" name="form1" method="post" action="#">
  <p>
    <label>Nom :
      <input type="text" name="nom" value=<?php echo $donne['nom']; ?> />
    </label>
  </p>
  <p>
    <label>Adresse : 
      <input type="text" name="adresse"  value=<?php echo $donne['adresse']; ?>  />
    </label>
  </p>
  <p>
    <label>Telephone :
      <input type="number" name="numero_telephone" value=<?php echo $donne['numero_telephone']; ?>  />
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="bouton"  value="Envoyer" />
    </label>
  </p>
</form>
</body>
</html>
