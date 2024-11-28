<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ex7</title>
    <style>
        td{
            text-align: end;
        }
        tbody tr th{
            text-align: end;
        }
        thead tr th{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div>
    <form action="ex7.php" method="post">
    <table class="table">
        <thead>
            <tr >
                <th colspan="4">Relevé de notes</th>

            </tr>
            <tr >
                <th colspan="4">No Etudiant 7</th>

            </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">N Matiere</th>
            <th scope="col">Nom Matiere</th>
            <th scope="col">Coefficient</th>
            <th scope="col">Note sur 20</th>
        </tr>
       <tr>
           <th scope="row">1</th>
           <td>Programmation</td>
           <td>3</td>
           <td><input type="number" value="12" name="noteprog" id=""></td>
       </tr>
        <tr>
            <th scope="row">2</th>
            <td>Base de donnée</td>
            <td>2</td>
            <td><input type="number" value="11.5" name="notebase" id=""></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>G.P.A.O</td>
            <td>2</td>
            <td><input type="number" value="9" name="notegpao" id=""></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Logic</td>
            <td>1</td>
            <td><input type="number" value="8" name="notelogic" id=""></td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Statistique</td>
            <td>1</td>
            <td><input type="number" value="0" name="notestat" id=""></td>
        </tr>
        <tr>
            <th colspan="3" >Moyenne</th>
            <td></td>
        </tr>
        </tbody>
    </table>
        <input type="submit" class="btn btn-primary" value="calcul">
        <input type="submit" class="btn btn-success" value="ajouter">
    </form>
</div>


</body>
</html>