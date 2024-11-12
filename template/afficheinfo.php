<?php
$username=$_POST["username"];
$password=$_POST["password"];
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "Commerciale";
try {
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) {
        echo "Erreur de connexion";

    } else {
        $query = mysqli_query($conn, "SELECT * FROM user WHERE login = '" . $username . "' AND password = '" . $password . "'");
        if (mysqli_num_rows($query) == 1) {
            echo "succes \n";
            echo "username: " . $username . "\n";
            echo "password: " . $password . "\n";


        }else{
            header("Location:loginpage.php");
        }

    }
}catch (Exception $e){
    echo $e->getMessage();
}


?>
