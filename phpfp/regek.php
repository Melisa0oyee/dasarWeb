<?php
$pattern = '/[0-9]+/';
$text = 'there are 123 apples.';

if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada huruf kecil";
}
 
echo "<br><br>";


$pattern = '/[a-z]+/';
$text = 'This is a Simple Text.';

if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil";
}

$pattern2 = '/apple/';
$replacement ='banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern2, $replacement, $text);
echo $new_text;

echo "<br><br>";

$pattern = '/go*d/';
    $text = 'god is good.';

    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }
echo "<br><br>";
    $pattern = '/go?d/';
    $text = 'god is good.';

    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

    echo "<br><br>";

    $pattern = '/go{2,4}d/';
    $text = 'god is good.';

    if (preg_match($pattern, $text, $matches)){
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }




?>