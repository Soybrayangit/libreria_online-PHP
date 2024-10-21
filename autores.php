<?php
// inclusión con la bd y consulta
require 'conexiones.php';

try {
    // Consulta para obtener todos los detalles de los autores
    $stmt = $pdo->query('SELECT * FROM autores');
    $autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Error en la consulta a la base de datos: ' . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online - Autores</title>
    <link rel="stylesheet" href="styles\styles2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="favicons/user01.ico" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">

                <h4 class="text-light">Librería Online - Juliao - Autores</h4>
                <img src="images/flat-book.png" alt="Logo" class="img-fluid">

        
            </div>
            <div class="col-4 text-right barra">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="barra-lateral col-12 col-sm-auto">

                <div class="logo-container text-center" >
                <img src="images\logo.png" alt="Logodelabarralateral" class="logo">
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


                        <div class="container">

                        <table class="table" id="tabla_autores">
    
  <thead>
    <tr>
      <th>Id_Autor</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Ciudad</th>
      <th>Estado</th>
      <th>Pais</th>
    </tr>
  </thead>
  <tbody>
       <?php foreach ($autores as $autore): ?>
                <tr>
                    <td><?php echo htmlspecialchars($autore['id_autor']); ?></td>
                    <td><?php echo htmlspecialchars($autore['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($autore['apellido']); ?></td>
                    <td><?php echo htmlspecialchars($autore['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($autore['ciudad']); ?></td>
                    <td><?php echo htmlspecialchars($autore['estado']); ?></td>
                    <td><?php echo htmlspecialchars($autore['pais']); ?></td>
                    <td><?php echo htmlspecialchars($autore['cod_postal']); ?></td>
                </tr>
        <?php endforeach; ?>
</table>

        


                                </div>

                            </div>
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
           padding: 70px;
           font-family: 'Franklin Gothic Medium';
           font-weight: 100;
           border-bottom: 3px solid rgba(255, 255, 255, .1);
           text-decoration: none;
        }
        .container {
            display: flex;
            justify-content: center;
            position: relative;
            left: -230px;
            margin-top: -35px;
            width: 945px;

        }


        #tabla_autores thead {
            background-color: #3f51b5; 
            color: white; 
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        
        #tabla_autores td {
            padding-top: 12px;
            padding-bottom: 12px;
            
        }

        #tabla_autores th {
            background-color: black;
            color: white
            
        }

        #tabla_autores tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #tabla_autores tr:hover {
            background-color: black;
        }

        #tabla_autores td {
            vertical-align: top;
        }


         #tabla_autores th, #tabla_autores td {
            border: 3px solid grey;
        }     

</style>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f755550c06.js" crossorigin="anonymous"></script>
    
    
    <script>

    alert("Bienvenidos/a la seccion de autores");

    </script>
</body>

</html>