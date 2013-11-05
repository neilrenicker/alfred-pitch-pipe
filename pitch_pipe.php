<?php

$xml = "<?xml version=\"1.0\"?>\n<items>\n";
$items = array(
  "ab" => "A♭",
  "a" => "A",
  "bb" => "B♭",
  "b" => "B",
  "c" => "C",
  "c#" => "C♯",
  "d" => "D",
  "eb" => "E♭",
  "e-lo" => "E - Low",
  "e" => "E",
  "f#" => "F♯",
  "f" => "F",
  "g" => "G"
);

foreach ($items as $key => $value) {
  if ( !$query ) {
    $xml .= "<item>\n";
    $xml .= "<title>$item</title>\n";
    $xml .= "<subtitle>Play this key</subtitle>\n";
    $xml .= "<icon>icons/add.png</icon>\n";
    $xml .= "</item>\n";
  } elseif ( stripos($name . $client, $query) !== false ) {
    $xml .= "<item uid=\"harvestnew-$id\" autocomplete=\"$name → \">\n";
    $xml .= "<title>$name, $client</title>\n";
    $xml .= "<subtitle>View available tasks...</subtitle>\n";
    $xml .= "<icon>icons/add.png</icon>\n";
    $xml .= "</item>\n";
  }
}

$xml .= "</items>";
echo $xml;