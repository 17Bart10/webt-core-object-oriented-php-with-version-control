<?php
namespace Htlw3r\Bootube;
require('vendor/autoload.php');

$myYoutbe1 = new YouTubeVideo('SUS TIKTOKS für D4DDY REZO und B4BY MEXI! 😳', '80uklabAqQs');
$myYoutbe2 = new YouTubeVideo('50 Genius Animals Caught On Camera', 'mRsNPxff54c');
$myYoutbe3 = new YouTubeVideo('Nazi-Bücher: Liefert „Der Schelm“ (einfach) weiter? | STRG_F', 'rG9sui3GgzI');
$myYoutbe4 = new YouTubeVideo('NIE WIEDER FIFA', 'vt6tzHwpL-E');
$myYoutbe5 = new YouTubeVideo('Owiwi - My World (Official Music Video)', 'Mz60uGfNRGU');

echo '<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="src/css/index.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>';

echo '
<div class="container text-center">
        <div class="row row-cols-4">';

echo '<div class="col mt-3">' . $myYoutbe1->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe2->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe3->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe4->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe5->getVideoEmbedCode() . '</div>';
echo '<div></div>';
echo '<div></div>';
echo '<div></div>';


echo '</div>
</div>';