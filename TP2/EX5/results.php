<?php
echo<<<HTML
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>Ex5</title>
             <link rel="stylesheet" href="style.css" >
</head>
<body>
  

HTML;

$file='resultats.txt';
$data=file($file,FILE_IGNORE_NEW_LINES);

$agetotale=0;
$nombre=count($data);
$dontotale=0;

foreach ($data as $line) {
    $part=explode("|",$line);
    $agetotale+=trim($part[1]);
    $dontotale+=trim($part[3]);
}
$agemoy=$agetotale/$nombre;

echo "<div id='content'>
    <h3>Age moyen des participant est de : $agemoy</h3>
    <h3>Le don Totale est de  : $dontotale</h3>
</div>";  
echo"</body>
</html>";
?>
