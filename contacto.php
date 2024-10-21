<?php
require 'conexiones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_STRING);
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

    if ($fecha && $nombre && $correo && $asunto && $comentario) {
        
        // Inserto los datos en la base de datos
        $stmt = $pdo->prepare('INSERT INTO contacto (fecha, nombre, correo, asunto, comentario) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$fecha, $nombre, $correo, $asunto, $comentario]);
    }
}

$pdo->exec("ALTER TABLE contacto AUTO_INCREMENT = 1");


// Obtiene los contactos de la base de datos
$stmt = $pdo->query('SELECT * FROM contacto');
$contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online - Contacto</title>
    <link rel="stylesheet" href="styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="favicons/section.ico" type="image/x-icon" >
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">

                <h4 class="text-light">Librería Online - Juliao - Contacto</h4>
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



                        <div class="container form-container">
            <h1> Formulario de contacto </h1>

            <h5>"Tu opinión es de suma importancia para nosotros"</h5>
            
            <form method="POST" action="contacto.php">

                 <div class="form-group">
                    <label for="fecha">  Fecha:  </label>
                    <input type="datetime-local" class="form-control" id="fecha" name="fecha"  required >  
                </div>
                <div class="form-group">
                    <label for="correo"> Correo: </label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="asunto">Asunto:</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingrese su asunto" required>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" name="comentario" placeholder="Ingrese su comentario" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>



<div class="container">

    <table class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Asunto</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactos as $contacto):?>
                <tr>
                    <td><?php echo htmlspecialchars($contacto['id']); ?></td>
                    <td><?php echo htmlspecialchars($contacto['fecha']); ?></td>
                    <td><?php echo htmlspecialchars($contacto['correo']); ?></td>
                    <td><?php echo htmlspecialchars($contacto['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($contacto['asunto']); ?></td>
                    <td><?php echo htmlspecialchars($contacto['comentario']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


<style>

           .barra-lateral .menu a {
            display: block;
            padding: 55px;
            font-family: 'Franklin Gothic Medium';
            font-weight: 100;
            border-bottom: 3px solid rgba(255, 255, 255, .1);
            text-decoration: none;
           }

            .container {
            background: black;
            margin: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 300%;
            text-align: center;
            color: yellow;
            position: relative;
            top: -30px;
            left: -320px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .container h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .container h5 {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 30px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            margin-top: 5px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: blue; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            margin-top: 15px;
            position: relative;
            top: -30px;
            left: -440px;
        }

        .btn:hover {
            background-color: red; 
        }

        .form-group .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

    .table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    background-color: black; 
    color: white; 
    padding: 10px;
    text-align: center;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2; 
}

.table tr:nth-child(odd) {
    background-color: #ffffff; 
}

.table td {
    padding: 10px;
    border: 4px solid black;
    background-color: #ffff00; 
}



.table { 
             
position: relative;
right: -270px;
text-align: justify;
}


</style>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f755550c06.js" crossorigin="anonymous"></script>
    
    
    <script>

    alert("Bienvenidos/a la seccion de contacto, en el que podras decir tu opinión acerca de que te parecio la libreria");

    </script>
</body>

</html>