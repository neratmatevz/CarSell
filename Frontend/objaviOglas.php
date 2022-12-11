<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/preveriSession.php');
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/objaviOglasB.php');
    

    $user_data = check_login();

    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CarSell</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><b>CarSell</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="objaviOglas.php">Objavi</a></li>
                        
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <p>
                                <?php 
                                    echo "Dobrodošel, <b>".$user_data->username."</b>";
                                ?>
                                <br>
                                <a href="/Backend/logout.php">LOGOUT</a>
                            </p>
                        </li>
                        			
                    </ul>		  
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-7">
                    <form class="mt-3 border p-3 rounded shadow-lg" enctype="multipart/form-data" method="post">
                        <p class="h3">
                            Objavite svoj oglas!
                        </p>
                        <div class="form-group">
                            <label for="ime">Ime objave</label>
                            <input type="text" class="form-control" id="ime" name="ime">
                        </div>
                        <div class="form-group">
                            <label for="letnik">Letnik</label>
                            <input type="text" class="form-control" id="letnik" name="letnik">
                        </div>
                        <div class="form-group">
                            <label for="kilometri">Prevoženi kilometri</label>
                            <input type="text" class="form-control" id="kilometri" name="kilometri">
                        </div>
                        <div class="form-group">
                            <label for="cena">Cena</label>
                            <input type="number" class="form-control" id="cena" name="cena">
                        </div>
                        <div class="form-group">
                            <label for="motor">Motor(konjska moč)</label>
                            <input type="text" class="form-control" id="motor" name="motor">
                        </div>
                        <div class="form-group">
                            <label for="menjalnik">Menjalnik</label>
                            <select class="form-control" id="menjalnik" name="menjalnik">
                                <option value="Ročni menjalnik">Ročni menjalnik</option>
                                <option value="Avtomatski menjalnik">Avtomatski menjalnik</option>
                                <option value="Polavtomatski menjalnik">Polavtomatski menjalnik</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gorivo">Gorivo</label>
                            <select class="form-control" id="gorivo" name="gorivo">
                                <option value="Diesel">Diesel</option>
                                <option value="Bencin">Bencin</option>
                                <option value="Elektrika">Elektrika</option>
                                <option value="Hybrid">Hybrid</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="znamka">Znamka</label>
                            <select class="form-control" id="znamka" name="znamka">
                                <option value="1">Audi</option>
                                <option value="2">BMW</option>
                                <option value="3">Skoda</option>
                                <option value="4">Mercedes</option>
                                <option value="5">Opel</option>
                                <option value="6">Volkswagen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="barva">Barva</label>
                            <input type="text" class="form-control" id="barva" name="barva">
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis</label>
                            <textarea class="form-control" id="opis" rows="3" name="opis"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="slika">Slika</label> <br>
                            <input type="file" class="form-control-file" id="slika" name="slika">
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-info btn-md m-5 float-end" value="Objavi">
                    </form>
                </div>

            </div>

        </div>
            
        
        <footer class="py-5 bg-dark ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; CarSell 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>