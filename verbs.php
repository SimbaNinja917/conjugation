<?php
/**
* what gets replaced with what in what conjugation
*
* first is the base that gets removed
* second is I and you
* third is he/she/we/you
* fourth is they
*/

$words = array(
  // -- aa
  "aakkostaa" =>  array("aa", 
                        "a", "aa", "a",
                        "i", "i"),
  "taitaa" =>  array("taa", 
                        "da", "taa", "ta",
                        "si", "si"),
  "aavistaa" =>   array("aa",
                        "a", "aa", "a",
                        "i", "i"),
  "haistaa" =>   array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "jaksaa" =>   array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "ajaa" =>   array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "ahtaa" =>      array("taa",
                        "da", "taa", "taa",
                        "tasi", "tasi"),
  "johtaa" =>      array("taa",
                        "da", "taa", "taa",
                        "di", "ti"),
  "hiihtää" =>      array("tää",
                        "dä", "tää", "tä",
                        "di", "ti"),
  "tietää" =>      array("tää",
                        "dä", "tää", "tä",
                        "si", "si"),
  "kaataa" =>  array("taa",
                        "da", "taa", "ta",
                        "doi", "toi"),
  "häätää" =>  array("tää", 
                        "dä", "tää", "tä",
                        "di", "ti"),
  "alustaa" =>    array("taa",
                        "ta", "taa", "ta",
                        "ti", "ti"),
  "ammentaa" =>   array("taa",
                        "na", "taa", "ta",
                        "si", "si"),
  "soutaa" =>     array("taa",
                        "da", "taa", "ta",
                        "di", "ti"),
  "huutaa" =>     array("taa",
                        "da", "taa", "ta",
                        "si", "si"),
  "askeltaa" =>     array("taa",
                        "la", "taa", "ta",
                        "si", "si"),
  "avartaa" =>     array("taa",
                        "ra", "taa", "ta",
                        "si", "si"),
  "alkaa" =>   array("kaa",
                        "a", "kaa", "ka",
                        "oi", "koi"),
  "antaa" =>   array("taa",
                        "na", "taa", "ta",
                        "noi", "toi"),
  "abstraktistaa" =>   array("taa",
                        "ta", "taa", "ta",
                        "tui", "tui"),
  "yltää" =>   array("tää",
                        "tä", "tä", "ttä",
                        "ti", "tti"),
  "istuttaa" =>   array("taa",
                        "a", "taa", "ta",
                        "i", "ti"),
  "huomauttaa" => array("taa",
                        "a", "taa", "ta",
                        "i", "ti"),
  "auttaa" =>   array("taa",
                        "a", "taa", "ta",
                        "oi", "toi"),
  "ennättää" =>   array("tää",
                        "ä", "tää", "tä",
                        "i", "ti"),
  "taivuttaa" =>   array("taa",
                        "a", "taa", "ta",
                        "i", "i"),
  "kattaa" =>   array("taa",
                        "a", "taa", "ta",
                        "oi", "toi"),
  "aallottaa" =>  array("taa",
                        "a", "taa", "ta",
                        "i", "ti"),
  "haastaa" =>  array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "harrastaa" =>  array("aa",
                        "a", "aa", "a",
                        "i", "i"),
  "aiheuttaa" =>  array("taa",
                        "a", "taa", "a",
                        "i", "i"),
  "kirjoittaa" =>  array("taa",
                        "a", "taa", "ta",
                        "i", "ti"),
  "asettaa" =>  array("taa",
                        "a", "a", "a",
                        "i", "ti"),
  "edellyttää" =>  array("tää",
                        "ä", "tää", "tä",
                        "i", "ti"),
  "hoitaa" =>  array("taa", 
                        "da", "taa", "ta",
                        "di", "ti"),
  "kaivaa" =>  array("aa", 
                        "a", "aa", "a",
                        "oi", "oi"),
  "kylvää" =>  array("ää", 
                        "ä", "ää", "ä",
                        "i", "i"),
  // -- ea
  "imeä" =>  array("eä",
                        "e", "ee", "e",
                       "i", "i"),
  "kitkeä" =>  array("eä",
                        "e", "ee", "e",
                       "i", "i"),
  "hakea" =>  array("kea",
                        "e", "kee", "ke",
                       "i", "ki"),
  "tuntea" =>  array("tea",
                        "ne", "tee", "te",
                       "si", "si"),
  "kokea" =>  array("kea",
                        "e", "kee", "ke",
                       "i", "ki"),
  // -- da
  "aateloida" =>  array("da",
                        "", "", "",
                       "", ""),
  "käydä" =>  array("ydä",
                        "y", "y", "y",
                       "vi", "vi"),
  "myydä" =>  array("ydä",
                        "y", "y", "y",
                       "i", "i"),
  "tehdä" =>  array("hdä",
                        "e", "kee", "ke",
                        "i", "ki"),
  "tuoda" =>  array("uoda",
                        "uo", "uo", "uo",
                        "oi", "oi"),
  "viedä" =>  array("iedä",
                        "ie", "ie", "ie",
                        "ei", "ei"),
  "syödä" =>  array("yödä",
                        "yö", "yö", "yö",
                        "öi", "öi"),
  "saada" =>  array("ada",
                        "a", "a", "a",
                       "i", "i"),
  "aisata" =>    array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "kammata" =>    array("mata",
                        "paa", "paa", "paa",
                        "pasi", "pasi"),
  "kuivata" =>    array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "kuvata" =>    array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "kaivata" =>    array("vata",
                        "paa", "paa", "paa",
                        "pasi", "pasi"),
  "korvata" =>    array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "hangata" =>    array("gata",
                        "kaa", "kaa", "kaa",
                        "kasi", "kasi"),
  "hypätä" =>    array("ätä",
                        "pää", "pää", "pää",
                        "päsi", "päsi"),
  "hapata" =>    array("ata",
                        "pane", "penee", "pane",
                        "pani", "pani"),
  "chatata" =>    array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
  "delata" =>     array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
  "hylätä" =>     array("ätä",
                        "kää", "kää", "kää",
                        "käsi", "käsi"),
  "buukata" =>    array("ata",
                        "kaa", "kaa", "kaa",
                        "kasi", "kasi"),
  // -- ia
  "ahnehtia" =>   array("tia",
                        "di", "tii", "ti",
                        "di", "ti"),
  "ahmia" =>      array("a",
                        "", "i", "",
                        "", ""),
  "hankkia" =>      array("kia",
                        "i", "ki", "ki",
                        "i", "ki"),
  "aistia" =>      array("a",
                        "", "i", "",
                        "", ""),
  "empiä" =>      array("piä",
                        "mi", "pii", "pi",
                        "mi", "mi"),
  "etsiä" =>      array("iä",
                        "i", "ii", "i",
                        "i", "i"),
  // -- la
  "aavistella" => array("la",
                        "e", "ee", "e",
                        "i", "i"),
  "anella" =>     array("la",
                        "e", "ee", "e",
                        "i", "i"),
  "ajatella" =>     array("ella", // TODO
                        "tele", "tele", "tele",
                        "teli", "teli"),
  "annella" =>    array("nella",
                        "tele", "tele", "tele",
                        "teli", "teli"),
  "aloitella" =>    array("ella",
                        "tele", "telee", "tele",
                        "teli", "teli"),
  "askarrella" =>    array("rella",
                        "tele", "telee", "tele",
                        "teli", "teli"),
  "houkutella" =>    array("ella",
                        "tele", "telee", "tele",
                        "teli", "teli"),
  "ihmetellä" => array("ellä",
                        "tele", "telee", "tele",
                        "teli", "teli"),
  "olla" => array("lla",
                        "le", "n", "",
                        "li", "li"),
  // -- nä
  "mennä" => array("nä",
                        "e", "ee", "e",
                        "i", "i"),
  // -- oa
  "aikoa" => array("koa",
                        "o", "koo", "ko",
                        "oi", "koi"),
  "anoa" => array("a",
                        "", "o", "",
                        "i", "i"),
  "kertoa" => array("toa",
                        "ro", "too", "to",
                        "roi", "toi"),
  "harppoa" => array("poa",
                        "o", "poo", "po",
                        "oi", "poi"),
  // -- ta
  "erota" =>      array("ota",
                        "oa", "oaa", "oa",
                        "osi", "osi"),
  "koota" =>      array("ota",
                        "koa", "koaa", "koa",
                        "kosi", "kosi"),
  "kadota" =>      array("dota",
                        "toa", "toaa", "toa",
                        "tosi", "tosi"),
  "hiota" =>      array("ota",
                        "o", "oo", "o",
                        "oi", "oi"),
  "lotota" =>     array("ota",
                        "toa", "toaa", "toa",
                        "tosi", "tosi"),
  "aallota" =>    array("lota",
                        "toa", "lottaa", "toa",
                        "tosi", "tosi"),
  "aplodeerata" => array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
  "karata" => array("ata",
                        "kaa", "kaa", "kaa",
                        "kasi", "kasi"),
  "kerrata" => array("rata",
                        "taa", "taa", "taa",
                        "tasi", "tasi"),
  "ahdata" =>     array("data",
                        "taa", "taa", "taa",
                        "tasi", "tasi"),
  "haista" =>     array("ta",
                        "e", "ee", "e",
                        "i", "i"),
  "haluta" =>     array("ta",
                        "a", "aa", "a",
                        "si", "si"),
  "syöstä" =>     array("stä",
                        "kse", "ksee", "kse",
                        "ksi", "ksi"),
  "poista" =>     array("a",
                        "a", "aa", "a",
                        "i", "i"),
  "bluffata" =>   array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "blondata" =>   array("ta",
                        "a", "a", "a",
                        "si", "si"),
  "edetä" =>      array("detä",
                        "tene", "tenee", "tene",
                        "teni", "teni"),
  "enetä" =>      array("tä",
                        "ne", "ne", "ne",
                        "ni", "ni"),
  "kyetä" =>      array("etä",
                        "kene", "kene", "kene",
                        "keni", "keni"),
  "halveta" =>      array("veta",
                        "pene", "penee", "pene",
                        "peni", "peni"),
  "kiivetä" =>      array("vetä",
                        "peä", "peää", "peä",
                        "pesi", "pesi"),
  "harveta" =>      array("ta",
                        "ne", "nee", "ne",
                        "ni", "ni"),
  "haaleta" =>   array("ta",
                        "ne", "nee", "ne",
                        "ni", "ni"),
  "harkita" =>   array("ta",
                        "tse", "tsee", "tse",
                        "tsi", "tsi"),
  "hävitä" =>   array("tä",
                        "ä", "ää", "ä",
                        "si", "si"),
  "huolita" =>   array("ita",
                        "i", "ii", "i",
                        "i", "i"),
  "hillitä" =>   array("ä",
                        "se", "see", "se",
                        "si", "si"),
  "hillota" =>   array("ta",
                        "a", "aa", "a",
                        "si", "si"),
  "aueta" =>   array("eta",
                        "kea", "kea", "kea",
                        "kesi", "kesi"),
  "haljeta" =>   array("jeta",
                        "kea", "keaa", "kea",
                        "kesi", "kesi"),
  "irrota" =>      array("rota",
                        "toa", "toaa", "toa",
                        "tosi", "tosi"),
  // -- ua
  "aavikoitua" => array("tua",
                        "du", "tuu", "tu",
                        "dui", "tui"),
  "ahdistua" =>   array("a",
                        "", "u", "",
                        "i", "i"),
  "ampua" =>      array("pua",
                        "mu", "muu", "pu",
                        "mui", "mui"),
  "alentua" =>    array("tua",
                        "nu", "tuu", "tu",
                        "si", "si"),
  "alittua" =>    array("tua",
                        "a", "taa", "tu",
                        "ti", "ti"),
  "haavoittua" =>    array("tua",
                        "a", "taa", "ta",
                        "i", "ti"),
  "avartua" =>    array("tua",
                        "ru", "tuu", "tu",
                        "si", "si"),
  "asettua" =>    array("tua",
                        "u", "tuu", "tu",
                        "ui", "tui"),
  // -- yä
  "edistyä" =>    array("yä",
                        "y", "yy", "y",
                        "yi", "yi"),
  "käyttäytyä" =>    array("tyä",
                        "dy", "tyy", "ty",
                        "dyi", "tyi"),
  "esiintyä" =>    array("tyä",
                        "ny", "tyy", "ty",
                        "nyi", "tyi"),
  "erehtyä" =>    array("tyä",
                        "dy", "tyy", "ty",
                        "dyi", "tyi"),
  "jäätyä" =>    array("tyä",
                        "dy", "tyy", "ty",
                        "dyi", "tyi"),
  // -- ee
  "erkanee" =>    array("ee",
                        "e", "e", "e",
                        "i", "i"),
);
