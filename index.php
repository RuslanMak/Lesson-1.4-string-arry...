<?php

$countrys = [
    'Canada' => ['Canadian horse', 'American beaver'],
    'Finland' => ['Brown bear', 'Holly blue'],
    'Iraq' => ['Chukar partridge', 'Goat'],
    'Japan' => ['Green pheasant', 'Carp'],
    'Mexico' => ['Golden eagle', 'Jaguar', 'Vaquita'],
];

echo '<pre>';
print_r($countrys);

$animals_2 = array();

foreach ($countrys as $country => $animals) {
    foreach ($animals as $animal) {
        if (strpos($animal, ' ')) {
//            echo "<h2>$country</h2>";
//            echo $animal;
            echo "<h2>$country</h2>";
            $a = list($word1[], $word2[]) = explode(' ', $animal);
                shuffle($word2);
            foreach ($word1 as $key => $word) {
                array_shift($word1);
                echo $word . " " . $word2[$key] . "\n";
            }
        }
    }
}
//print_r($countrys);
print_r($word2);
//echo $word1 . "\n";
//for ($i=0; $i<count($word1); $i++ ) {
//    echo $word1[$i] . " ";
//}
//for ($i=0; $i<count($word2); $i++ ) {
//    echo $word2[$i] . " ";
//}
?>


