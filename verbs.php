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
                        "a", "taa", "a",
                        "i", "i"),
  "aallottaa" =>  array("taa",
                        "a", "taa", "ta",
                        "i", "ti"),
  "aavistaa" =>   array("aa",
                        "a", "aa", "a",
                        "i", "i"),
  "haistaa" =>   array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "ajaa" =>   array("aa",
                        "a", "aa", "a",
                        "oi", "oi"),
  "ahtaa" =>      array("taa",
                        "da", "taa", "taa",
                        "tasi", "tasi"),
  "tietää" =>      array("tää",
                        "dä", "tää", "tä",
                        "si", "si"),
  "alustaa" =>    array("taa",
                        "ta", "taa", "ta",
                        "ti", "ti"),
  "ammentaa" =>   array("taa",
                        "na", "taa", "ta",
                        "si", "si"),
  "soutaa" =>     array("taa",
                        "da", "taa", "ta",
                        "di", "ti"),
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
  "yltää" =>   array("tää",
                        "tä", "tä", "ttä",
                        "ti", "tti"),
  "auttaa" =>   array("taa",
                        "a", "taa", "ta",
                        "oi", "toi"),
  // -- ea
  "imeä" =>  array("eä",
                        "e", "ee", "e",
                       "i", "i"),
  "kitkeä" =>  array("eä",
                        "e", "ee", "e",
                       "i", "i"),
  "tuntea" =>  array("tea",
                        "ne", "tee", "te",
                       "si", "si"),
  "kokea" =>  array("kea",
                        "e", "ee", "e",
                       "i", "i"),
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
  "chatata" =>    array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
  "delata" =>     array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
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
                        "tele", "tele", "tele",
                        "teli", "teli"),
  // -- ta
  "erota" =>      array("ota",
                        "oa", "oa", "oa",
                        "osi", "osi"),
  "lotota" =>     array("ota",
                        "toa", "toaa", "toa",
                        "tosi", "tosi"),
  "aallota" =>    array("lota",
                        "toa", "lottaa", "toa",
                        "tosi", "tosi"),
  "aplodeerata" => array("ata",
                        "aa", "aa", "aa",
                        "asi", "asi"),
  "ahdata" =>     array("data",
                        "taa", "taa", "taa",
                        "tasi", "tasi"),
  "haista" =>     array("ta",
                        "e", "taa", "e",
                        "i", "i"),
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
  "haaleta" =>   array("ta",
                        "ne", "nee", "ne",
                        "si", "si"),
  "harkita" =>   array("ta",
                        "tse", "tsee", "tse",
                        "tsi", "tsi"),
  "hillota" =>   array("ta",
                        "a", "aa", "a",
                        "si", "si"),
  "aueta" =>   array("eta",
                        "kea", "kea", "kea",
                        "kesi", "kesi"),
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
  "avartua" =>    array("tua",
                        "ru", "tuu", "tu",
                        "si", "si"),
  // -- ee
  "erkanee" =>    array("ee",
                        "e", "e", "e",
                        "i", "i"),
);
