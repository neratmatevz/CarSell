<?php

include('db.php');

$idObjave = $_GET["idObjave"];

$poizvedba = $povezava->prepare('SELECT o.ime,o.letnik,o.kilometri,o.cena,o.slika,o.motor,o.menjalnik,o.barva,o.opis,o.gorivo,u.username,u.telefon,z.znamka  FROM objava o JOIN uporabnik AS u ON o.idUporabnik = u.idUporabnik JOIN znamka AS z ON o.idZnamka = z.idZnamka WHERE o.idObjava = :objava' );

$poizvedba->bindValue(':objava',$idObjave);
$poizvedba->execute();
$rezultat = $poizvedba->fetchObject();

 
echo'<div class="row  d-flex justify-content-center mb-1">
<div class="col-md-6  mt-4 rounded bg-white shadow-lg" >
    <h2 class="mt-1">'.$rezultat->ime.'</h2>
</div>
</div>
<div class="row d-flex justify-content-center mb-5 ">
<div class="col-md-4  rounded bg-white shadow-lg " >
    <div >
        <img src="data:image/jpeg;base64,'.base64_encode($rezultat->slika).'" class="img-rounded mt-2 mb-2" style="max-height: 465px;max-width: 615px;min-width: 615px;">
    </div>
    
    <p class="border-top border-bottom"><b>Osnovni podatki:</b></p>
    <ul class="border-bottom">
        <li>Znamka: <b>'.$rezultat->znamka.'</b></li>
        <li>Letnik: <b>'.$rezultat->letnik.'</b></li>
        <li>Kilometri: <b>'.$rezultat->kilometri.' kilometrov</b></li>
        <li>Motor: <b>'.$rezultat->motor.' KM(konjev)</b></li>
        <li>Menjalnik: <b>'.$rezultat->menjalnik.'</b></li>
        <li>Barva: <b>'.$rezultat->barva.'</b></li>
        <li>Gorivo: <b>'.$rezultat->gorivo.'</b></li>

    </ul>
    <h5>Opis</h5>
    <div>
        <p>'.$rezultat->opis.'</p>
    </div>
    
</div>
<div class="col-md-2  rounded ">
    <div class="row d-flex justify-content-center mb-2">
        <div class="col-11 border rounded bg-white shadow-lg text-center">
            <p class="m-4 h2">'.$rezultat->cena.' €</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-2">
        <div class="col-11 border rounded bg-white shadow-lg text-center">
            <p class="mt-3 h4  bg-info rounded"><b>PRODAJALEC</b></p>
            <p class=" h5 border-top mt-3 ">'.$rezultat->username.'</p>
            <p class=" h5 border-top mt-3 ">Telefon: '.$rezultat->telefon.'</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-2">
        <div class="col-11 border rounded bg-white shadow-lg text-center">
            <img src="\Slike\CarSellLogo.png" alt="logo" class="m-2">
            <p>Priporočajte nas!</p>
        </div>
    </div>
</div>
</div>';


?>