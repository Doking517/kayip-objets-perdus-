<?php
require_once './functions.php';

$query = getAllImages();
foreach ($query as $q) {
    $imageUrl = 'uploads/' . $q[$q->id];
    var_dump($imageUrl);
}
