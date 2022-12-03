<?php

$raw = file_get_contents('data.txt');
$data = explode("\n", $raw);

foreach ($data as $item) {
    $round[] = explode(" ", $item);
}

$lose = 0;
$draw = 3;
$win = 6;

$score = 0;

foreach ($round as $item) {
    if( $item[1] === "X") {
        $score += 1;
        switch ($round) {
            case $item[0] === "A":
                $score += $draw;
                break;
            case $item[0] === "B":
                $score += $lose;
                break;
            case $item[0] === "C":
                $score += $win;
                break;
        }
    }
    if( $item[1] === "Y") {
        $score += 2;
        switch ($round) {
            case $item[0] === "A":
                $score += $win;
                break;
            case $item[0] === "B":
                $score += $draw;
                break;
            case $item[0] === "C":
                $score += $lose;
                break;
        }
    }
    if( $item[1] === "Z") {
        $score += 3;
        switch ($round) {
            case $item[0] === "A":
                $score += $lose;
                break;
            case $item[0] === "B":
                $score += $win;
                break;
            case $item[0] === "C":
                $score += $draw;
                break;
        }
    }
}

