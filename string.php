<?php
$strings = ["Hello", "World", "PHP", "Programming"];

$vowels = ["a","e","i","o","u"];
foreach($strings as $word){
    $vowel = 0;
    for($i=0; $i < strlen($word); $i++){
        if(in_array($word[$i],$vowels)){
            $vowel++;
        }
    }
    $rev = strrev($word);
    echo "Original String: $word, Vowel Count: $vowel, Reversed String: $rev\n";
}