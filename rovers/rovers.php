<?php 
    include("conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>tp2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-1.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Central-Aligned-Clear-Nav.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop-1.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>

<body style="height: 1080px;background: url(&quot;assets/img/rover%20wallpaper.jpg&quot;) no-repeat, #000000;">

    <nav class="navbar navbar-light navbar-expand-md nav-main-wrapper" style="height: 100px;">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="#" style="font-size: 30px;padding-bottom: 10px;">RoversMania</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="font-size: 25px;padding: 33px;margin-top: -5px;">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="aindex.php" style="color: rgba(255,255,255,0.9);font-size: 20px;">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="mars.php" style="color: rgb(255,255,255);font-size: 20px;">marte</a></li>
                    <li class="nav-item"><a class="nav-link" href="imagenesRovers.php" style="color: rgb(255,255,255);font-size: 20px;">imagenes rovers</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="team-boxed" style="background: rgba(238,244,247,0);">
        <div class="container">
            <div class="intro"></div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item" style="margin-left: -196px;">
                    
                
                    <div class="box" style="height: 1449px;"><img class="rounded-circle" src="assets/img/sojourney.png">   
                    <h3 class="name">
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=0";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['nombre'];
                            }
                            ?>
                        </h3>
                        <p class="title">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=0";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['mision_rover'];
                            }
                            ?>
<br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=0";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['pais_origen'];
                            }
                            ?>
                            <br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=0";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['agencia'];
                            }
                            ?>                            
                        </p>                       
                        <p class="description">                       
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=0";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['data_rover'];
                            }
                            ?>                       
                        <br></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>                                          
                
                
                
                
                
                
                
                
                
                <div class="col-md-6 col-lg-4 item">
                    <div class="box" style="height: 1449px;"><img class="rounded-circle" src="assets/img/spirit%20and%20opportunity.png">
                        <h3 class="name">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=1";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['nombre'];
                            }
                            ?>
                        </h3>
                        <p class="title">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=1";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['mision_rover'];
                            }
                            ?>
<br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=1";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['pais_origen'];
                            }
                            ?>
                            <br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=1";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['agencia'];
                            }
                            ?>           
                        </p>                       
                        </p>
                        <p class="description">
                                <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=1";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['data_rover'];
                            }
                            ?>                                                
                        <br><br><br><br><br></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/curiosity.png">
                        <h3 class="name">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=2";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['nombre'];
                            }
                            ?>

                        </h3>
                        <p class="title">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=2";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['mision_rover'];
                            }
                            ?>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=2";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['pais_origen'];
                            }
                            ?><br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=2";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['agencia'];
                            }
                            ?>

                        </p>
                        <p class="description">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=2";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['data_rover'];
                            }
                            ?>
                        <br></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                <div class="col-md-6 col-lg-4 item" style="margin-left: 944px;margin-top: -1495px;margin-right: -31px;margin-bottom: 69px;">
                    <div class="box" style="height: 1449px;"><img class="rounded-circle" src="assets/img/perseverance.png">
                        <h3 class="name">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=3";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['nombre'];
                            }
                            ?>

                        </h3>
                        <p class="title">
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=3";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['mision_rover'];
                            }
                            ?><br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=3";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['pais_origen'];
                            }
                            ?><br>
                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=3";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['agencia'];
                            }
                            ?>

                        </p>
                        <p class="description">
                            
                        <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM rover WHERE id=3";
                            $mostrar_informacion = $conexion->query($consulta);
                            while($row = $mostrar_informacion->fetch_assoc()){
                                    echo $row['data_rover'];
                            }
                            ?>
                        <br><br></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Slider-laptop.js"></script>
</body>

</html>