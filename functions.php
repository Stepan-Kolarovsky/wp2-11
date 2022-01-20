<?php
// functions.php
// název funkce - fight
// datový typ vstupního parametru - int
// název vstupního parametru1 - hp
// název vstupního parametru2 - attack
function fight($fighterA, $fighterB){
    while ($fighterA['hp'] <= 0) {
        $fighterB['hp']=$fighterB['hp']-$fighterA['attack'];
    }
    $winner1 = $fighterB['hp'];
    while ($fighterB['hp'] <= 0) {
        $fighterA['hp']=$fighterA['hp']-$fighterB['attack'];
    }
    $winner1 = $fighterA['hp'];
    return $winner1;
} // konec těla funkce