<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if(preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
}else{
    echo "Tidak ada huruf kecil!";
}

echo "<br>";

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: I like banana pie.

echo "<br>";

$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood:, dll.
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

echo "Hasil soal 5.5 <br>";
$pattern = '/go*?d/'; // ini soal 5.5
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

echo "Hasil soal 5.6 <br>";
$pattern = '/go{1,3}?d/'; // ini soal 5.6
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
?>