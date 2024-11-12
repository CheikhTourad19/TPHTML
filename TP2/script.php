<?php
$html=<<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo3</title>
  <link rel="stylesheet" href="styleex3.css">
</head>
<body>
<div id="content">
  <h1>Calculatrice</h1>
HTML;

$num1=$_GET["num1"];
$num2=$_GET["num2"];
$op=$_GET["op"];
$result='';
if (!empty($num1) && !empty($num2) && !empty($op)) {
    switch ($op) {
        case "+":$result=$num1+$num2;break;
        case "-":$result=$num1-$num2;break;
        case "x":$result=$num1*$num2;break;
        case "/":
            if (!$num2==0) {
                $result=$num1/$num2;break;
            }

        default:$result='';break;
    }
    if (!empty($result)) {
        $html.="<h1>$num1 $op $num2 = $result</h1>";
    }else{
        $html.="<h1>Operande n'existe pas ou denominateur est 0</h1>";
    }
}else{
    $html.="<h1>Element vide veillez verifer et reessayer</h1>";
}

echo $html."</div></body></html>";
?>
