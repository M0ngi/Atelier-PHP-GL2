<html>
 <head>
  <title>Recap</title>
 </head>
 <body>
  <?php
  if(!empty($_POST['nom']) && 
     !empty($_POST['prenom']) && 
     !empty($_POST['nbSand']) && 
     !empty($_POST['adr']) && 
     !empty($_POST['type']) &&
     isset($_FILES['cin']) ){
   
   $QTY_AVAILABLE = 20; // Can be loaded from DB later on
   $nbSand = intval($_POST['nbSand'], 10);
   
   if($nbSand > $QTY_AVAILABLE){
   ?>
    <script>
     alert("La quantité disponible est insuffisante!");
     window.location.href = "resa.html";
    </script>
   <?php
    die();
   }
   $prix = 4*$_POST['nbSand'];
   if($_POST['nbSand'] > 10){
    $prix *= 0.9;
   }

   move_uploaded_file($_FILES['cin']['tmp_name'], './uploads/'.uniqid());
  ?>
  <table>
   <tr>
    <td>Nom</td><td>:</td>
    <td><?=$_POST['nom']?></td>
   </tr>
   <tr>
    <td>Prenom</td><td>:</td>
    <td><?=$_POST['prenom']?></td>
   </tr>
   <tr>
    <td>Nombre Sandwitch</td><td>:</td>
    <td><?=$_POST['nbSand']?></td>
   </tr>
   <tr>
    <td>Adresse</td><td>:</td>
    <td><?=$_POST['adr']?></td>
   </tr>
   <tr>
    <td>Type</td><td>:</td>
    <td><?=$_POST['type']?></td>
   </tr>
   <tr>
    <td>Ingreds</td><td>:</td>
    <td><?="Harissa --> " . ($_POST['harissa'] ? "Oui" : "Non")?></td>
   </tr>
   <tr>
    <td></td><td></td>
    <td><?="Salade --> " . ($_POST['salade'] ? "Oui" : "Non")?></td>
   </tr>
   <tr>
    <td></td><td></td>
    <td><?="Mayo --> " . ($_POST['mayo'] ? "Oui" : "Non")?></td>
   </tr>
   <tr>
    <td>Prix</td><td>:</td>
    <td><?=$prix?>TND</td>
   </tr>
   <?php
   }else{
   ?>
    <b>Pas de commande</b>
   <?php } ?>
 </body>
</html>
