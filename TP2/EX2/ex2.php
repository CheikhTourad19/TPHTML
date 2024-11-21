<?php

function minimum($tab)
{
    $min = $tab[0];
    foreach ($tab as $key => $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

function maximum($tab)
{
    $max = $tab[0];
    foreach ($tab as $key => $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
}
//
////function trier(&$tab)
////{
////    $tab2=$tab;
////    $i=0;
////    var_dump($tab);
////    foreach ($tab2 as $key => $value) {
////        $key=$i;
////        $i++;
////    }
////    var_dump($tab2);
////    for ($j = 0; $j < count($tab2)-1; $j++) {
////        for ($k = $i; $k < count($tab2); $k++) {
////            if ($tab2[$k]  > $tab[$k+1]) {
////                $tmp=$tab2[$k];
////                $tab2[$k]=$tab[$k+1];
////                $tab[$k+1]=$tmp;
////            }
////        }
////    }
////    var_dump($tab2);
////    $i=0;
////    foreach ($tab as $key => $value) {
////        $value=$tab2[$i];
////        $i++;
////    }
//
//}

$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ex2</title>
  <link rel="stylesheet" href="styleex2.css">
</head>
<body>
<div id="content">
HTML;

if (isset($_GET['traitement']) && isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['num5'])) {
    if (!empty($_GET['traitement']) && !empty($_GET['num1']) && !empty($_GET['num2']) && !empty($_GET['num3']) && !empty($_GET['num4']) && !empty($_GET['num5'])) {
        $tab = [$_GET['num1'], $_GET['num2'], $_GET['num3'], $_GET['num4'], $_GET['num5']];
        if ($_GET['traitement'] == 'tri') {

            sort($tab);
            $html .= "<h1>Voici le tableau trie</h1><table>";
            foreach ($tab as $key => $value) {
                $key++;
                $html .= "<tr><td>$key</td><td>$value</td></tr>";
            }
            $html .= "</table>";
        } elseif ($_GET['traitement'] == 'min') {
            $min = minimum($tab);
            $html .= "<h1>le minimum est :  $min</h1>";
        } else {
            $max = maximum($tab);
            $html .= "<h1>le maximum est :  $max</h1>";
        }
    } else {
        $html .= "<h1>Nombres Manquants Verifier votre Choix</h1>";
    }
} else {
    $html .= "<h1>Erreur de transmission</h1>";
}
echo $html . "</div></body></html>";