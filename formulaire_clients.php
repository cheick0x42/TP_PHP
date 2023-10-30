<?php 

				 
require("connexion.php");
if (isset($_POST['bouton']) and $_POST['bouton']=='Envoyer')
{ $req = $connect->prepare('INSERT INTO client VALUES(?,?,?,?)');
$req->execute(array('',$_POST['nom'],$_POST['adresse'],
$_POST['numero_tel']));
$message= '<h3><font color=\"red\">inscription validee</font></h3>';
echo $message; 
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
      <input type="text" name="nom"  />
    </label>
  </p>
  <p>
    <label>Adresse :
      <input type="text" name="adresse"  />
    </label>
  </p>
  <p>
    <label>Telephone :
      <input type="number" name="numero_tel"  />
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
