<?php

$conts = [
    'Africa' => ['Jaguar', 'Caracal caracal', 'gorilla'],
    'Eurasia' => ['Wolf', 'Sciurus vulgaris', 'Spermophilus parryi'],
    "North America" => ['Alligator', 'Dasypus Novemcinctus'],
    'Asia' => ['Bos javanicus', 'Arctictis binturong', 'Ursus arctos'],
    'Antarctica' => ['Penguin', 'Lobodon carcinophagus'],
];
$two_name = [];
$continent = [];
$one_item = [];
$two_item = [];

echo '<h1>Список животных через запятую</h1>';
foreach ($conts as $cont_key => $animals) {
    $continent[] = $cont_key;
    $animal_imp = implode (', ', $animals);
    echo "<h2>$cont_key</h2>";
    echo $animal_imp;

    foreach ($animals as $two) {
        $name_animal = explode(" ", $two);
        if (count($name_animal) == 2) {
            $two_name[] = $two;
            $one_item[] = $name_animal[0];
            $two_item[] = $name_animal[1];
        }
    }
}

echo '<hr>';
echo '<h1>Список животных из двух слов</h1>';
foreach ($two_name as $item) {
    echo $item, ', ';
}

echo '<hr>';
shuffle($two_item);
echo '<h1>Выдуманные животные</h1>';
foreach ($two_item as $last) {
    $title_cont = array_shift($continent);
    $first = array_shift($one_item);
    echo "<h2>$title_cont</h2>";
    echo $first . ' ' . $last . ', ';
}

