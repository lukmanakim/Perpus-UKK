<?php
    $fruits = array("apel","pisang","salak","mangga","semangka");
    echo $fruits[0]."<br>";


    foreach ($fruits as $fruit) {
        echo $fruit."<br>";
    }

    for ($i=count($fruits)-1; $i > -0 ; $i--) { 
        echo $fruits[$i]. "<br>";
    }
?>