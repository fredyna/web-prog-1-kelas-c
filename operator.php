<?php
    $a = 5;
    $b = 3;
    $c = 5;
    $d = "5";
    
    echo "$a + $b = "; echo $a + $b; echo "<br>";
    echo "$a / $b = "; echo $a / $b; echo "<br>";
    echo "$a > $b : "; echo $a > $b; echo "<br>";
    echo "$a == $c : "; var_dump($a == $c); echo "<br>";
    echo "$a == $d : "; var_dump($a == $d); echo "<br>";
    echo "$a === $d :"; echo var_dump($a === $d); echo "<br>";

    echo $a++; echo "<br>";
    echo ++$a; echo "<br>";
?>