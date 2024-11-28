<?php
$elem=0;
$file='contacts.txt';
$num=1;
$data=file($file, FILE_IGNORE_NEW_LINES);
echo"<h1>Liste des contacts</h1>";

echo"<p>Contact :$num</p>";
echo"<ul>";
foreach($data as $key=> $valiue){

    echo"<li>".$valiue."</li>";
    $elem++;
    if ($elem%3==0){
        $num++;
        echo"</ul>";
        echo"<p>Contact :$num<p>";
        echo "<ul>";
    }
}
echo"</ul>";
?>
