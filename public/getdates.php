<?php

function getMonthlies() {
    global $startdatum, $einddatum;
    $dates = array();
    for ($i = $startdatum ; $i < $einddatum ; $i += SECONDS_INNA_DAY) {
        if (date('d',$i) == date('d', $startdatum)) {
            $dates[] = $i;
        }
    }
    return $dates;
}

function getTrimonthlies() {
    global $startdatum, $einddatum;
    $dates = array();
    for ($i = $startdatum ; $i < $einddatum ; $i += SECONDS_INNA_DAY) {
        $root = date('m', $startdatum) % 3;
        if (date('d',$i) == date('d', $startdatum) AND date('m', $i) % 3 == $root) {
            $dates[] = $i;
        }
    }
    return $dates;
}

function getYearlies() {
    global $startdatum, $einddatum;
    $dates = array();
    for ($i = $startdatum ; $i < $einddatum ; $i += SECONDS_INNA_DAY) {
        if (date('d',$i) == date('d', $startdatum) AND date('m',$i) == date('m', $startdatum) ) {
            $dates[] = $i;
        }
    }
    return $dates;
}

function getWeeklies() {
    global $startdatum, $einddatum;
    $dates = array();
    for ($i = $startdatum ; $i < $einddatum ; $i += SECONDS_INNA_DAY) {
        if (date('D',$i) == date('D', $startdatum)) {
            $dates[] = $i;
        }
    }
    return $dates;
}
