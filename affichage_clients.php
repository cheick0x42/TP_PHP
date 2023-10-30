<?php 

require_once('connexion.php');
$requete= 'SELECT * FROM client';
$req = $connect->query($requete);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Affiche Clients</title>
</head>

<body>
<center>
<table  width="600" border="5" solid >

<tr><font color="red">
<th><h3>Numero_Client</h3></th>
<th><h3>Nom</h3></th>
<th><h3>Adresse</h3></th>
<th><h3>Telephone</h3></th>
<th><h3>Supprimer</h3></th>
<th><h3>Modifier</h3></th>
</font>
</tr>
<?php
while($donne=$req->fetch())
{  ?> 
 <tr>
 <td><?php echo $donne['numero'];?></td>
 <td><?php echo $donne['nom']; ?> </td>
 <td><?php echo $donne['adresse']; ?> </td>
 <td><?php echo $donne['numero_telephone']; ?> <br/></td>
 <td><a href='supp_clients.php?delete=<?php echo $donne['numero'] ?>'>Supprimer</a></td>
 <td><a href="mod_clients.php?mod=<?php echo $donne['numero'] ?>">Modifier</a></td>
 </tr>
 <?php } $req->closeCursor();?>
 
</table>
 </center>


 
 
 
 
 
 
</body>
</html>


