<?php

$raw = file_get_contents('data.txt');
$data = explode("\n", $raw);

foreach ($data as $item) {
    $round[] = explode(" ", $item);
}

$lose = 0; // X
$draw = 3; // Y
$win = 6; // Z

$rock = 1;
$paper = 2;
$scissors = 3;

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
var_dump($score);
// ================ Part two ==================

// X = lose
// Y = draw
// Z = win

$scoreV2 = 0;

foreach ($round as $item) {
    if ($item[1] === "X") {
        $scoreV2 += $lose;
        switch ($round) {
            case $item[0] === "A":
                $scoreV2 += $scissors;
                break;
            case $item[0] === "B":
                $scoreV2 += $rock;
                break;
            case $item[0] === "C":
                $scoreV2 += $paper;
                break;
        }
    }
    if ($item[1] === "Y") {
        $scoreV2 += $draw;
        switch ($round) {
            case $item[0] === "A":
                $scoreV2 += $rock;
                break;
            case $item[0] === "B":
                $scoreV2 += $paper;
                break;
            case $item[0] === "C":
                $scoreV2 += $scissors;
                break;
        }
    }
    if ($item[1] === "Z") {
        $scoreV2 += $win;
        switch ($round) {
            case $item[0] === "A":
                $scoreV2 += $paper;
                break;
            case $item[0] === "B":
                $scoreV2 += $scissors;
                break;
            case $item[0] === "C":
                $scoreV2 += $rock;
                break;
        }
    }
}
var_dump($scoreV2);