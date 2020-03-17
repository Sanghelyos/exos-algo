<meta charset="UTF-8">
<style>
.title{
    background-color: red;
}

</style>

<a href="#1"> exo 1 & 2</a><br>
<a href="#3"> exo 3</a><br>
<a href="#4"> exo 4</a><br>
<a href="#5"> exo 5 & 6</a><br>
<a href="#7"> exo 7</a><br>
<a href="#8"> exo 8</a><br>
<a href="#9"> exo 9 & 10</a><br>
<a href="#11"> exo 11 & 12 & 13</a><br>






<!--Exo 1 & 2-->
<br><br><br><strong class="title" id="1">EXO 1 & 2 </strong><br><br><br>
<?php
$a = rand(1, 5);
$b = rand(1, 5);

if ($a > $b) {
    echo "a est le plus grand car il est égal à <strong>" . $a . "</strong><br>";
    echo "b est le plus petit car il est égal à <strong>" . $b . "</strong><br>";
} else if ($a < $b) {
    echo "b est le plus grand car il est égal à <strong>" . $b . "</strong><br>";
    echo "a est le plus petit car il est égal à <strong>" . $a . "</strong><br>";
} else {
    echo "b et a sont égaux. Ils valent tous les deux <strong>" . $a . "</strong><br>";
}
?>


<!--Exo 3-->
<br><br><br><strong class="title" id="3">EXO 3 </strong><br><br><br>
<?php

$a2 = $a;
$b2 = $b;

$a = $b2;
$b = $a2;

echo "a = <strong>" . $a . "</strong><br>";
echo "b = <strong>" . $b . "</strong><br>";

?>

<!--Exo 4-->
<br><br><br><strong class="title" id="4">EXO 4 </strong><br><br><br>
<?php

$sumab = $a + $b;

echo "a + b = <strong>" . $sumab . "</strong><br>";

?>

<!--Exo 5 & 6-->
<br><br><br><strong class="title" id="5">EXO 5 & 6 </strong><br><br><br>
<?php

$random100 = rand(1, 100);
$random10  = rand(5, 10);

echo "Random 100 = <strong>" . $random100 . "</strong><br>";
echo "Random 10 = <strong>" . $random10 . "</strong><br>";

?>

<!--Exo 7-->
<br><br><br><strong class="title" id="7">EXO 7 </strong><br><br><br>

<?php

$a=rand(1, 10);
$b=rand(1, 10);

function addition($v, $y)
{
    $sumfunc = $v + $y;
    return $sumfunc;   
}

$result = addition($a,$b);
echo "v = <strong>" . $a . "</strong><br>";
echo "y = <strong>" . $b . "</strong><br>";
echo "v + y = <strong>" . $result . "</strong><br>";
?>

<!--Exo 8-->
<br><br><br><strong class="title" id="8">EXO 8 </strong><br><br><br>

<?php


$random100 = rand(1, 100);
if ($random100 < 50) {
    echo "Je suis nul";
} else {
    echo "Je suis bon";
}


?>

<!--Exo 9 & 10-->
<br><br><br><strong class="title" id="9">EXO 9 & 10 </strong><br><br><br>

<?php

echo "<strong>Condition si</strong><br><br>";
function aleatoire($x)
{
    if ($x < 5 && $x > 0) {
        
        if ($x == 1) {
            return $result="AAAAA";
        } else if ($x == 2) {
            return $result="BBBBB";
        } else if ($x == 3) {
            return $result="CCCCC";
        } else if ($x == 4) {
            return $result="DDDDD";
        }
    } else {
        return $result="J'ai pas envie d'être une perruche :'(";
    }
}

$texte = aleatoire(rand(0, 5));
echo $texte;

echo "<br><br><strong>Switch case</strong><br><br>";

function switchtest($x)
{
    switch ($x) {
        case 1:
            return $result="AAAAA";
            break;
        case 2:
            return $result="CCCCC";
            break;
        case 3:
            return $result="BBBBB";
            break;
        case 4:
            return $result="DDDDD";
            break;
        default:
            return $result="J'ai pas envie d'être une perruche :'(";
            break;
    }
}

$texte = switchtest(rand(0, 5));
echo $texte;
?>

<!--Exo 11 & 12-->
<br><br><br><strong class="title" id="11">EXO 11 & 12 & 13 </strong><br><br><br>

<?php

$random = array();
for ($i = 0; $i < 10; $i++) {
    $random[$i] = rand(1, 10);
    echo "<strong>" . $i . "=</strong> " . $random[$i] . "<br>";
    
}

array_push($random);
echo "<strong>tableau :</strong> ";
print_r($random);
echo "<br> <strong>somme des valeurs du tableau :</strong> " . array_sum($random);

?>