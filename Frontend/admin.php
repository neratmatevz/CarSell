<?php

    include($_SERVER['DOCUMENT_ROOT'].'/Backend/preveriSession.php');
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/prijavaB.php');
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/adminBrisanjeObjav.php');

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
                <a class="navbar-brand" ><b>CarSell</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
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
            <div class="row justify-content-center d-flex mt-5">
                <div class="col-3">
                    <p class="h1 text-center rounded shadow-lg border" style="color:maroon;">VALIDACIJA OBJAV</p>
                </div>
            </div>
            <div class="row justify-content-center d-flex mt-2">
                <div class="col-12 ">
                    
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ime objave</th>
                                <th scope="col">Osnovni podatki</th>
                                <th scope="col">Slika</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Objavil</th>
                                <th scope="col">IZBRIS</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once $_SERVER['DOCUMENT_ROOT'].'/Backend/adminIzpisObjav.php';
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        

        
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; CarSell 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>