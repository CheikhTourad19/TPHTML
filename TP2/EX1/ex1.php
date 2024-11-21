<?php
$html= <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex1</title>
  <link rel="stylesheet" href="styleex1.css">
</head>
<body>
<div id="welcome">
HTML;
//var_dump($_GET);
if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["adresse"]) && isset($_GET["ville"]) && isset($_GET["code"])){
    if (!empty($_GET["ville"])&&!empty($_GET["adresse"])&&!empty($_GET["code"])&&!empty($_GET["nom"])&&!empty($_GET["prenom"])){
        $html.= "<p>Bienvenue ".$_GET["prenom"]." ".$_GET["nom"]."</p>"."<p> Nous Avons Bien noté que vous habitez ".$_GET["adresse"]." a ".$_GET["ville"]."(".$_GET["code"].")"."</p>";
    }else{
        $html.="<p>Vous devez renseigner vos informations</p>";
    }
}else{
    $html.="Error de transmission de données";
}

$html.="</div>";
echo $html."</body>"."</html>";

