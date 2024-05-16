<?php
$strings = ["AHello", "World", "PHP", "Programming"];
foreach($strings as $word){
    $vowel = 0;
    for($i=0; $i < strlen($word); $i++){
        if(in_array(strtolower($word[$i]),["a","e","i","o","u"])){
            $vowel++;
        }
    }
    echo "Original String: $word, Vowel Count: $vowel, Reversed String: ".strrev($word)."\n";
}