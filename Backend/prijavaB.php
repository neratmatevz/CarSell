<?php
    session_start();
    
    include("db.php");

    if(isset($_POST['submit'])){
        $username = !empty($_POST['user_name']) ? ($_POST['user_name']) :null;
        $password = !empty($_POST['password']) ? ($_POST['password']) :null;

        $poizvedba = $povezava->prepare("SELECT * FROM uporabnik WHERE username = :username");
        $poizvedba->bindValue("username",$username);
        $poizvedba->execute();
        $uporabnik = $poizvedba->fetch(PDO::FETCH_OBJ);

        if(!$uporabnik){
            echo '<script>alert("Napacno uporabnisko ime ali geslo!");</script>';
        }else{
            if($uporabnik->admin == "TRUE"){
                $validPassword = password_verify($password,$uporabnik->password);
                
                if($validPassword){
                    $_SESSION['idUporabnik'] = $uporabnik->idUporabnik;
                    header("Location: admin.php");
                }else{
                    echo '<script>alert("Napacno uporabnisko ime ali geslo!");</script>';
                }

            }else{
                $validPassword = password_verify($password,$uporabnik->password);

                if($validPassword){
                    $_SESSION['idUporabnik'] = $uporabnik->idUporabnik;
                    header("Location: index.php");
                }else{
                    echo '<script>alert("Napacno uporabnisko ime ali geslo!");</script>';
                }
            }
            
        }
    }     

    


?>