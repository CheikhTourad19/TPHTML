<?php

echo<<<HTML
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
 
 a{
 margin-left: 45%;
 }
    center{
    margin-top: 20%;
    }
    table{
    border-collapse: collapse;
    border: 1px solid black;
    width: 50%;
    }
    td{
    border: 1px solid black;
    font-size: 20px;
    }
    th{
    border: 1px solid black;
    font-size: 20px;
    font-weight: bold;
    }
</style>
</head>
<body>
<center>
<table>
<tr>
<th>id</th><th>nom</th><th>prenom</th><th>pays</th><th>style</th>
</tr>

HTML;
try {

    $db=new PDO('mysql:host=localhost:3306;dbname=music;','root','');
    $pdostat=$db->query("SELECT * FROM artiste");
    $pdostat->setFetchMode(PDO::FETCH_ASSOC); {

        foreach($pdostat as $ligne){
            echo"<tr>";
            echo "<td>{$ligne['id']}</td><td>{$ligne['nom']}</td><td>{$ligne['prenom']}</td><td>{$ligne['pays']}</td><td>{$ligne['style']}</td>";
            echo"</tr>";
        }

    }
}catch(PDOException $E){
    echo $E->getMessage();
    die();
}
echo "<tr><td colspan='5' ><a  class='btn btn-primary' href='ajout.html'>Ajouter</a></a></td></tr>";
echo"</table>";
echo"</center>";
echo"</body>";
echo"</html>";
?>
