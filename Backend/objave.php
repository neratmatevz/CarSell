<?php 

require_once('db.php');

// PRIPRAVA POIZVEDBE
$poizvedba = $povezava->prepare('SELECT * FROM objava'); //SPREMENI POIZVEDBO GLEDE NA PODATKOVNO BAZO

// DEJANSKA IZVEDBA POIZVEDBE
$poizvedba->execute();

// PRIDOBIVANJE REZULTATOV
$rezultat = $poizvedba->fetchAll(\PDO::FETCH_OBJ);


// IZPIS REZULTATOV
foreach ($rezultat as $vrstica){
    echo '<a href="objava.php?idObjave=';
    echo $vrstica->idObjava;
    echo '" style="cursor:pointer;"><div class="col mb-5"><div class="card h-100" >';
    echo '<img class="card-img-top" src="data:image/jpeg;base64,'; 
    echo base64_encode($vrstica->slika);
    echo '"/><div class="card-body p-4">
    <div class="text-center">
    <h5 class="fw-bolder">';
    echo $vrstica->ime;
    echo '</h5><br>';
    echo $vrstica->cena  . "€";

    echo '</div>
        </div>
    </div>
    </div></a>';
}
?>