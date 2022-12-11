<?php

// PODATKI ZA POVEZAVO NA PODATKOVNO BAZO
$host = "virtualhost";
$uporabniskoIme = "root";
$geslo = "";
$imePodatkovneBaze = "projektdsr";

// USTVARJANJE NOVE POVEZAVE NA PODATKOVNO BAZO
$povezava = new PDO('mysql:host='.$host.';dbname='.$imePodatkovneBaze.';charset=utf8mb4', $uporabniskoIme, $geslo);

?>