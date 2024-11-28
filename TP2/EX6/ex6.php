<?php
var_dump($_GET);
if (isset($_GET['choix'])){
    $choix = $_GET['choix'];

    if ($choix == 'acheter'){
        header('Location: acheter.html');
    }elseif ($choix == 'vendre'){
        header('Location: vendre.html');
    }elseif ($choix == 'louer'){
        header('Location: louer.html');
    }
}
?>
