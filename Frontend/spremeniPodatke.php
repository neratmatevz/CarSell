<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/preveriSession.php');
    include($_SERVER['DOCUMENT_ROOT'].'/Backend/spremeniPodatkeB.php');

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
                                <a href="spremeniPodatke.php?idUporabnik=<?php echo $user_data->idUporabnik ?>">SPREMENI PODATKE</a> |
                                <a href="/Backend/logout.php">LOGOUT</a>
                            </p>
                        </li>
                        			
                    </ul>		  
                </div>
            </div>
        </nav>
        
        <div id="login">
            <h3 class="text-center text-black mb-5 pt-5">SPREMENI PODATKE</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-5 border">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">SPREMEMBA PODATKOV</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input type="text" name="user_name" id="username" class="form-control" value="<?php echo $user_data->username ?>">
                                </div>
                                <div class="form-group">
                                    <label for="telefon" class="text-info">Telefon:</label><br>
                                    <input type="tel" name="telefon" id="telefon" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" value="<?php echo $user_data->telefon ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" >
                                </div>
                                <div class="form-group clearfix">
                                    
                                    <input type="submit" name="submit" class="btn btn-info btn-md m-5 float-start" value="Spremeni">
                                    <div id="register-link" class="text-right float-end">
                                        <a href="prijava.php" class="text-info">Prijava</a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>