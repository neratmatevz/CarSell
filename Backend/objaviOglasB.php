<?php
    include("db.php");

    if(isset($_POST["submit"])){  
        
        if(!empty($_FILES["slika"]["name"])) { 
             
                $image = $_FILES['slika']['tmp_name']; 
                
                $ime = $_POST['ime'];
                $letnik = $_POST['letnik'];
                $kilometri = $_POST['kilometri'];
                $cena = (int)$_POST['cena'];
                $slika = file_get_contents($image);
                $motor = $_POST['motor'];
                $menjalnik = $_POST['menjalnik'];
                $barva = $_POST['barva'];
                $opis = $_POST['opis'];
                $gorivo = $_POST['gorivo'];
                $znamka = (int)$_POST['znamka'];
                $uporabnik = (int)$_SESSION['idUporabnik'];

                $poizvedba= $povezava->prepare("INSERT INTO objava (ime, letnik, kilometri, cena, slika, motor, menjalnik,barva,opis,gorivo,idZnamka,idUporabnik) VALUES (:ime, :letnik, :kilometri, :cena, :slika, :motor, :menjalnik,:barva,:opis,:gorivo,:idZnamka,:idUporabnik)");
                $poizvedba->bindValue(':ime',$ime);
                $poizvedba->bindValue(':letnik',$letnik);
                $poizvedba->bindValue(':kilometri',$kilometri);
                $poizvedba->bindValue(':cena',$cena);
                $poizvedba->bindValue(':slika',$slika);
                $poizvedba->bindValue(':motor',$motor);
                $poizvedba->bindValue(':menjalnik',$menjalnik);
                $poizvedba->bindValue(':barva',$barva);
                $poizvedba->bindValue(':opis',$opis);
                $poizvedba->bindValue(':gorivo', $gorivo);
                $poizvedba->bindValue(':idZnamka', $znamka);
                $poizvedba->bindValue(':idUporabnik',$uporabnik);
                $poizvedba->execute(); 
                
                echo '<script>alert("Uspesno dodano!");</script>';
                
             
        }else{ 
            echo '<script>alert("Please select an image file to upload.");</script>';
        } 
        

    } 
    


?>