<?php
echo<<<HTML
<!DOCTYPE html>
<html>
<head>
 <style>
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
    $ligne=$db->query("SELECT * FROM artiste");
    while ($r=$ligne->fetch(PDO::FETCH_NUM)) {
        echo"<tr>";
        foreach($r as $colonne){
            echo "<td>$colonne</td>";
        }
        echo"</tr>";
    }
}catch(PDOException $E){
    echo $E->getMessage();
    die();
}
echo"</table>";
echo"</center>";
echo"</body>";
echo"</html>";
?>
