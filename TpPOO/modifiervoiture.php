<?php
$id=$_GET["id"];
$pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
$stmt = $pdo->prepare("SELECT * FROM voiture WHERE id=:id");
$stmt->execute(
    [':id' => $id]
);
$v = $stmt->fetchAll(PDO::FETCH_ASSOC);
$voiture = $v[0];
echo<<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<center><h1>Modifier Voiture</h1></center>
<form action="modifier.php" method="post">
    <input type="hidden" name="type" id="" value="voiture">
    <input type="hidden" name="id" id="" value="{$voiture['id']}">
    <div class="form-group">
        <label >Marque</label>
        <input name="marque" type="text" class="form-control" required placeholder="Enter marque" value="{$voiture['marque']}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Date Achat</label>
        <input name="dateAchat" type="date" class="form-control" required id="exampleInputPassword1" value="{$voiture['dateAchat']}"> 
    </div>
    <div class="form-group form-check">
        <label  >prix achat</label>
        <input name="prixAchat" type="number" class="form-control" required  placeholder="" value="{$voiture['prixAchat']}">

    </div>
    <div class="form-group form-check">
        <label class="form-check-label" >prix courant</label>
        <input name="prixCourant" type="number" class="form-control" required placeholder="" value="{$voiture['prixCourant']}">

    </div>
    <div class="form-group form-check">
        <label  class="form-check-label" >Cylindres</label>
        <input name="cylindres" type="number" class="form-control" required  placeholder="" value="{$voiture['cylindres']}">

    </div><div class="form-group form-check">
    <label class="form-check-label" >nombres de portes</label>
    <input name="nbPortes" type="number" class="form-control" required placeholder="" value="{$voiture['nbPortes']}">

</div><div class="form-group form-check">
    <label class="form-check-label" >puissance</label>
    <input name="puissance" type="number" class="form-control" required placeholder="" value="{$voiture['puissance']}"> 

</div>
    <div class="form-group form-check">
        <label class="form-check-label" >kilometrage</label>
        <input name="killometrage" type="number" class="form-control" required  placeholder="" value="{$voiture['killometrage']}">

    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</body>
</html>
HTML;

?>
