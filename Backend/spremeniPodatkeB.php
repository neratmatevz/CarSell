<?php
include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $id = $_GET['idUporabnik'];
        $username = $_POST['user_name'];
        $telefon = $_POST['telefon'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){

            $password = password_hash($password, PASSWORD_BCRYPT ,array("cost" =>12));

            $poizvedba = $povezava->prepare("SELECT COUNT(username) AS num FROM uporabnik WHERE username = :username");
            $poizvedba->bindValue(':username',$username);
            $poizvedba->execute();
            $rezultat= $poizvedba->fetch(\PDO::FETCH_ASSOC);
    
            if($rezultat["num"] >0){
                echo '<script>alert("Uporabnik z tem imenom že obstaja");</script>';
            }else{
                $poizvedba= $povezava->prepare("UPDATE uporabnik SET username = :username, telefon = :telefon, password = :password WHERE idUporabnik=:id");
                $poizvedba->bindValue(':username',$username);
                $poizvedba->bindValue(':telefon',$telefon);
                $poizvedba->bindValue(':password',$password);
                $poizvedba->bindValue(':id',$id);
                if($poizvedba->execute()){
                    echo'<script>alert("Uspešno spremenjeni podatki!");</script>';
                }else{
                    echo'<script>alert("Neuspešna sprememba podatkov!");</script>';
                }
                
            }
        }else{
            echo '<script>alert("Vnesite vse podatke");</script>';
        }
        

        
    }
?>