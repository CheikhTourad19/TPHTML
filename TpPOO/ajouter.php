<?php
if ($_GET['type']=='car'){
    header('location:ajoutervoiture.html');
}else if ($_GET['type']=='avion'){
    header('location:ajouteravion.html');
}else{
    echo "Erreur";
}


?>
