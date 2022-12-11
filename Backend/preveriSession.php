<?php

function check_login(){
    include("db.php");
    if(isset($_SESSION['idUporabnik'])){

        $id= $_SESSION['idUporabnik'];

        $poizvedba = $povezava->prepare('SELECT * FROM uporabnik WHERE idUporabnik = '.$id.' LIMIT 1');

        $poizvedba->execute();

        $rezultat = $poizvedba->fetch(\PDO::FETCH_OBJ);

        if($rezultat){

            return $rezultat;
        }
        
    }else{
        header("Location: prijava.php");
        die;
    }
   
}

?>