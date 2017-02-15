<?php

require 'vendor/autoload.php';

// Configure the data store

$dir = __DIR__.'/data';

$config = new \JamesMoss\Flywheel\Config($dir, array(
    'formatter' => new \JamesMoss\Flywheel\Formatter\JSON,
));

$repo = new \JamesMoss\Flywheel\Repository('shouts', $config);
    
// Store the posted shout data to the data store

if(isset($_POST["name"]) && isset($_POST["comment"])) {
    $volni = "Вольный";
    $tolik = "Толик";
    $sasha = "Саня";
    $egor = "Егор";
    $bandit = "Бандит";
    $dolg = "Долг";
    $svoboda = "Свобода";
    $sidor = "Сидорович";
    $barmen = "Бармен";
    $strelok = "Стрелок";
    $andrey = "Андрей";
    $monolit = "Монолит";
    $zombie = "Зомби";
    $sciens = "Учёный";
    $doc = "Доктор";

    $name = htmlspecialchars($_POST["name"]);
    $name = str_replace(array("\n", "\r"), '', $name);
    if ($name == $volni) {
        $icon = "1";
    }
    elseif ($name == $tolik) {
        $icon = "2";
    }
    elseif ($name == $sasha) {
        $icon = "3";
    }
    elseif ($name == $egor) {
        $icon = "4";
    }
    elseif ($name == $bandit) {
        $icon = "5";
    }
    elseif ($name == $dolg) {
        $icon = "6";
    }
    elseif ($name == $svoboda) {
        $icon = "7";
    }
    elseif ($name == $sidor) {
        $icon = "8";
    }
    elseif ($name == $barmen) {
        $icon = "9";
    }
    elseif ($name == $strelok) {
        $icon = "10";
    }
    elseif ($name == $andrey) {
        $icon = "11";
    }
    elseif ($name == $monolit) {
        $icon = "12";
    }
    elseif ($name == $zombie) {
        $icon = "13";
    }
    elseif ($name == $sciens) {
        $icon = "14";
    }
    elseif ($name == $doc) {
        $icon = "15";
    }
    else {
        $icon = "0";
    }

    $comment = htmlspecialchars($_POST["comment"]);
    $comment = str_replace(array("\n", "\r"), '', $comment);
    
    // Storing a new shout

    $shout = new \JamesMoss\Flywheel\Document(array(
        'text' => $comment,
        'name' => $name,
        'icon' => $icon,
        'createdAt' => time()
    ));
    
    $repo->store($shout);
    
}
