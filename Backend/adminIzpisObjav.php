<?php

require_once('db.php');


$poizvedba = $povezava->prepare('SELECT o.idObjava,o.ime,o.letnik,o.kilometri,o.cena,o.slika,o.motor,o.menjalnik,o.barva,o.opis,o.gorivo,u.username,u.idUporabnik,z.znamka  FROM objava o JOIN uporabnik AS u ON o.idUporabnik = u.idUporabnik JOIN znamka AS z ON o.idZnamka = z.idZnamka' );

$poizvedba->execute();
$rezultat = $poizvedba->fetchObject();


$poizvedba->execute();
$rezultat = $poizvedba->fetchAll(\PDO::FETCH_OBJ);


// IZPIS REZULTATOV
foreach ($rezultat as $vrstica){
    echo '
        <tr>
            <th scope="row">'.$vrstica->idObjava.'</th>
            <td>'.$vrstica->ime.'</td>
            <td>'.$vrstica->letnik.', '.$vrstica->kilometri.'km, '.$vrstica->cena.'€, '.$vrstica->motor.' konjev, '.$vrstica->menjalnik.', '.$vrstica->barva.', '.$vrstica->gorivo.', '.$vrstica->znamka.'</td>
            <td><img style="max-height:150px;" src="data:image/jpeg;base64,'.base64_encode($vrstica->slika).'"/>.</td>
            <td>'.$vrstica->opis.'</td>
            <td><b>ID:</b> '.$vrstica->idUporabnik.' <br><b>Username</b>: '.$vrstica->username.'</td>
            <td colspan="2">
					<form method="get">
						<input type="hidden" name="delete" value="yes" />
						<input type="hidden" name="id" value= '.$vrstica->idObjava.' />
						<div class="text-center mt-3"><input type="submit" class="btn btn-danger" value="Izbrisi objavo" /></div></form>
					</td>
        </tr>
    ';
}



?>