<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$pays=$_POST['pays'];
$style=$_POST['style'];


function ajouter($nom,$prenom,$pays,$style)
        {
          $nom=addslashes($nom);
          $prenom=addslashes($prenom);
          $pays=addslashes($pays);
          $style=addslashes($style);
          $pdo=new PDO('mysql:host=localhost:3306;dbname=music','root','');
          $sql="INSERT INTO artiste (nom,prenom,pays,style) VALUES ('$nom','$prenom','$pays','$style')";
            try {
                $pdo->exec($sql);
                echo "<h3>Ajouter avec succes</h3>";
                echo "<a class='btn btn-success' href='affiche2.php'>Voir la liste des artiste</a>";
            }catch (PDOException $e) {
                echo "<h3>Erreur {$e->getMessage()}</h3>";
            }
        }

       if ($_POST['opp']='ajout'){
            ajouter($nom,$prenom,$pays,$style);
        }elseif ($_POST['opp']='modifier'){

       }elseif ($_POST['opp']='supprimer'){

       }else{
           echo "Erreur";
       }
?>
