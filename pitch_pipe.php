<?php

$query = trim($argv[1]);
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

$xml = "<?xml version=\"1.0\"?>\n<items>\n";

foreach ($items as $key => $value) {
  if ( !$query ) {
    $xml .= "<item arg=\"$key\">\n";
    $xml .= "<title>$value</title>\n";
    $xml .= "<subtitle>Shortcut: type \"$key\"</subtitle>\n";
    $xml .= "<icon>icon.png</icon>\n";
    $xml .= "</item>\n";
  } elseif ( stripos($key, $query) !== false ) {
    $xml .= "<item arg=\"$key\">\n";
    $xml .= "<title>$value</title>\n";
    $xml .= "<subtitle>Shortcut: type \"$key\"</subtitle>\n";
    $xml .= "<icon>icon.png</icon>\n";
    $xml .= "</item>\n";
  }
}

$xml .= "</items>";
echo $xml;