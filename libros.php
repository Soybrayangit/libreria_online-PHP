<?php
// inclusion con la bd y consulta
require 'conexiones.php';


    $stmt = $pdo->query('SELECT * FROM titulos');
    $titulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online - Libros</title>

    <!-- Estilos con el css -->
    <link rel="stylesheet" href="styles/styles1.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <link rel="icon" href="favicons/checklist.ico" type="image/x-icon">

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">

                <h4 class="text-light">Librería Online - Juliao - Libros</h4>
                <img src="images/flat-book.png" alt="Logo" class="img-fluid">


            </div>
            <div class="col-4 text-right barra">
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="barra-lateral col-12 col-sm-auto">

                    <div class="logo-container text-center">
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

                        <table class="table" id="tabla_libros">

  <thead>
    <tr>
      <th>Id_Titulo</th>
      <th>Titulo</th>
      <th>Tipo</th>
      <th>Id_Pub</th>
      <th>Precio</th>
      <th>Avance</th>
      <th>total_ventas</th>
      <th>Contrato</th>
    </tr>
  </thead>
  <tbody>
       <?php foreach ($titulos as $titulo): ?>
                <tr>
                    <td><?php echo htmlspecialchars($titulo['id_titulo']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['tipo']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['id_pub']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['precio']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['avance']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['total_ventas']); ?></td>
                    <td><?php echo htmlspecialchars($titulo['contrato']); ?></td>
                </tr>
        <?php endforeach; ?>
</table>





<!-- codigo css porque no se porque razon no me funcionan los estilos y todo esta bien -->


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
       

        #tabla_libros thead {
            background-color: #3f51b5; 
            color: white; 
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        
        #tabla_libros td {
            padding-top: 12px;
            padding-bottom: 12px;
            
        }

        #tabla_libros th {
            background-color: black;
            color: white
            
        }

        #tabla_libros tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #tabla_libros tr:hover {
            background-color: black;
        }

        #tabla_libros td {
            vertical-align: top;
        }


         #tabla_libros th, #tabla_libros td {
            border: 3px solid grey;
        }  
</style>
        


                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>                         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f755550c06.js" crossorigin="anonymous"></script>
    
    
    <script>

    alert("Bienvenidos/a la sección de libros");

    </script>
</body>

</html>