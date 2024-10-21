<?php
// inclusion con la bd y consulta
require 'conexiones.php';

try {
    
    // Consulta para contar la cantidad de títulos
    $stmtTitulos = $pdo->query('SELECT COUNT(*) AS cantidad_titulos FROM titulos');
    $cantidadTitulos = $stmtTitulos->fetch()['cantidad_titulos'];

    // Consulta para contar la cantidad de autores
    $stmtAutores = $pdo->query('SELECT COUNT(*) AS cantidad_autores FROM autores');
    $cantidadAutores = $stmtAutores->fetch()['cantidad_autores'];
} catch (PDOException $e) {
    die('Error en la consulta a la base de datos: ' . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online - Inicio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="favicons/institution.ico" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Librería Online - Juliao - Inicio</h4>
                <img src="images/flat-book.png" alt="Logo" class="img-fluid">
            </div>
            <div class="col-4 text-right barra">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="barra-lateral col-12 col-sm-auto">
                    <div class="logo-container text-center">
                        <img src="images/logo.png" alt="Logodelabarralateral" class="logo">
                    </div>
                    <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                        <a href="index.php"><i class="fas fa-home"></i><span>Inicio</span></a>
                        <a href="libros.php"><i class="fa-solid fa-book"></i><span>Libros</span></a>
                        <a href="autores.php"><i class="fa-solid fa-person"></i><span>Autores</span></a>
                        <a href="contacto.php"><i class="fa-solid fa-address-book"></i><span>Contacto</span></a>
                    </nav>
                </div>
                <main class="main col">
                    <div class="row justify-content-center align-content-center text-center">
                        <div class="columna col-lg-6">
                            
                            
                            <div class="card-container">
                                <div class="card" id="card1">
                                    <div class="icon blue"><i class="fa-solid fa-book"></i></div>
                                    <div class="text">
                                        <p>Libros</p>
                                        <p><?php echo $cantidadTitulos; ?></p>
                                    </div>
                                </div>
                                <div class="card" id="card2">
                                    <div class="icon yellow"><i class="fa-solid fa-user"></i></div>
                                    <div class="text">
                                        <p>Autores</p>
                                        <p><?php echo $cantidadAutores; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="card-1">
                                <div class="card-body">
                                    <h6 class="card-title" id="titulo1"><strong>¿QUIÉNES SOMOS?</strong></h6>
                                    <p class="card-text">
                                        Nuestra librería, fundada en 1990, ha sido un faro de conocimiento y cultura en nuestra comunidad. 
                                        Con una vasta colección de libros, revistas y recursos digitales, nos esforzamos por proporcionar acceso 
                                        a la información y apoyar el aprendizaje continuo.
                                    </p>
                                </div>
                            </div>
                            <div class="card" id="card-2">
                                <div class="card-body">
                                    <h6 class="card-title" id="titulo2"><strong>NUESTRA MISIÓN</strong></h6>
                                    <p class="card-text">
                                        Nuestra misión es proporcionar una plataforma en línea accesible y fácil de usar que conecte a los amantes de los libros con una amplia selección 
                                        de títulos, autores y géneros. Nos dedicamos a ofrecer una experiencia de compra intuitiva y personalizada, garantizando que cada cliente encuentre 
                                        el libro perfecto.
                                    </p>
                                </div>
                            </div>
                            <div class="card" id="card-3">
                                <div class="card-body">
                                    <h6 class="card-title" id="titulo3"><strong>NUESTRA VISIÓN</strong></h6>
                                    <p class="card-text">
                                        Nuestra visión es convertirnos en la librería web líder a nivel global, reconocida por nuestra diversidad de títulos, 
                                        excelencia en el servicio al cliente y compromiso con la promoción de la lectura. Aspiramos a ser la primera opción para los lectores en busca de  
                                        inspiración, conocimiento, etc.
                                    </p>
                                </div>
                            </div>
                            
                            <img class="lib1" src="images/imglib1.jpg" alt="imagen de una libreria">
                            <img class="lib3" src="images/imglib2.jpg" alt="imagen de una libreria">
                            <img class="lib4" src="images/imglib3.jpg" alt="imagen de una libreria">


                            <h1 class="titulodelfinal">PORTAL WEB  LIBRERIA  <br> 
                            En la que encontraras el listado de todos los autores y libros disponibles en la libreria online Juliao, adelante, explora por ti mismo en la mejor libreria del pais
                            </h1>

                        
                        </div>
                    </div>
                </main>
            </div>
        </div>


        

        <footer class="footer full-reset" id="piedelaweb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Hola, soy Brayan, un desarrollador web apasionado con experiencia en HTML, CSS, JavaScript, PHP y MySQL. Me encanta crear aplicaciones web dinámicas y atractivas que brinden una excelente experiencia de usuario.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-check"></i>&nbsp; Brayan Juliao <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2024 Todos los derechos reservados</div>
        </footer>
    </div>






<style>


.barra-lateral .menu a {
    display: block;
    padding: 80px;
    font-family: 'Franklin Gothic Medium';
    font-weight: 100;
    border-bottom: 3px solid rgba(255, 255, 255, .1);
    text-decoration: none;
}





#card-1 {
  position: relative;
  color: white;
  background-color: #2f3e56;
  text-align: justify;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 1em;
  top: -220px;
  right: -50px;
}

#card-2 {
  color: white;
  background-color: #151c27;
  position: relative;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 1em;
  top: -200px;
  left: -270px;
  text-align: justify;
}

#card-3 {
  color: white;
  background-color: #151c27;
  position: relative;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-size: 1em;
  top: -405px;
  left: 290px;
  text-align: justify;
}



.lib1 {
  position: relative;
  top: -350px;
  left: -40px;
  width: 600px;
  height: 500px;
}



.lib3 {
  position: relative;
  top: -350px;
  left: -305px;
  width: 500px;
  height: 400px;
}


.lib4 {
  position: relative;
  top: -750px;
  left: 220px;
  width: 500px;
  height: 400px;
}


.titulodelfinal {
    position: relative;
    text-align: justify;
    top: -500px;
    right: 300px;
    font-family: 'Times New Roman', Times, serif;
    width: 900px;
    font-size: 3em;
    background-color: #f0f0f0;
}

</style>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f755550c06.js" crossorigin="anonymous"></script>

    <script>

    alert("Bienvenidos/a la página web librería Juliao");

    </script>
</body>

</html>
