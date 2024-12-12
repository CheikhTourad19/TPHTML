<?php

echo<<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehiclue Selling</title>
   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

HTML;


        $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
        $stmt1 = $pdo->prepare("SELECT * FROM voiture ");
        $stmt2=$pdo->prepare("SELECT * FROM avion ");
        echo "<center><h1>Liste des vehicules</h1></center>";
        try {
            $stmt1->execute();
            $liste = $stmt1->fetchAll(PDO::FETCH_ASSOC);

            echo "<div>";
            echo "<h2>Liste des voiture</h2>";
            echo "<a href='ajouter.php?type=car' class='btn btn-primary'>Ajouter Voiture</a>";
            echo "</div>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>id</th><th>marque</th><th>prix Achat</th><th>date Achat</th><th>Cylindre</th><th>nombres de protes</th><th>puissance</th><th>kilometrage</th><th>prix courant</th><th>Action</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            foreach ($liste as $value) {
                echo "<tr>";
                foreach ($value as $value2) {
                    echo "<td>" . htmlspecialchars($value2) . "</td>";
                }
                $msg="etes vous sure?";
                echo"<td><a class='btn btn-danger' onclick='alert(\"$msg\")' href='supprimer.php?id={$value['id']}&&type=voiture'>Supprimer</a></td>";
                echo"<td><a class='btn btn-success' href='modifiervoiture.php?id={$value['id']}'>Modifier</a></td>";
                echo "<form action='calculprix.php' method='post'>";
                echo"<td><input type='hidden' name='type' value='car'/><input type='hidden' name='id' value={$value['id']}>
                        <input type='number' name='annee'>
                        <input class='btn btn-primary' type='submit' value='Calcul prix' required>
                        </td>";
                echo "</form>";
                echo "</tr>\n";
            }

            echo"</tbody>";
            echo "</table>";

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        try {
            $stmt2->execute();
            $liste = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            echo "<div>";
            echo "<h2>Liste des Avions</h2>";
            echo "<a href='ajouter.php?type=avion' class='btn btn-primary'>Ajouter Avions</a>";
            echo "</div>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>id</th><th>marque</th><th>prix Achat</th><th>date Achat</th><th>Moteur</th><th>Heure de vols</th><th>prix courant</th><th>Action</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            foreach ($liste as $value) {
                echo "<tr>";
                foreach ($value as $value2) {
                    echo "<td>" . htmlspecialchars($value2) . "</td>";
                }
                $msg="etes vous sure?";
                echo"<td><a class='btn btn-danger' onclick='alert(\"$msg\")' href='supprimer.php?id={$value['id']}&&type=avion'>Supprimer</a></td>";
                echo"<td><a class='btn btn-success' href='modifieravion.php?id={$value['id']}'>Modifier</a></td>";
                echo "<form action='calculprix.php' method='post'>";
                echo"<td><input type='hidden' name='type' value='avion'/><input type='hidden' name='id' value={$value['id']}>
                        <input type='number' name='annee'>
                        <input class='btn btn-primary' type='submit' value='Calcul prix' required>
                        </td>";
                echo "</form>";
                echo "</tr>\n";
            }

            echo"</tbody>";
            echo "</table>";

        }catch (PDOException $e){
            echo $e->getMessage();
        }


echo "</body></html>";
?>
