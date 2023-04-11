<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Propuestos Lab03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <script src="script.js"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 mt-2">
                <form action="index.html" method="post">

                    <?php
                    echo "<h1>Ejercicio 1</h1>";
                    $nombre = $_POST['nombre'];
                    $email = $_POST['email'];
                    // Validar nombre y email
                    if ($nombre && $email)
                        if ($nombre == 'jorge' && $email == 'jsalas@gmail.com') {
                            echo "<h3>Nombre: " . $nombre . "</h3>";
                            echo "<h3>Email: " . $email . "</h3>";
                        } else {
                            echo "<h2>Usuario No Válido</h2>";
                            echo '<a href="index.html" class="btn btn-danger">Regresar al inicio</a>';
                        }
                    else {
                        echo "<h3>Los campos no pueden estar vacíos</h3>";
                    }
                    ?>

                    <hr>

                    <?php
                    echo "<h1>Ejercicio 2</h1>";
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];
                    if ($num1 && $num2 && $num3 && $num4) {
                        // Validar los números recibidos
                        $suma = $num1 + $num2;
                        $producto = $num3 * $num4;
                        echo "<h3>Suma: " . $suma . "</h3>";
                        echo "<h3>Producto: " . $producto . "</h3>";
                    } else {
                        echo "<h3>Todos los campos deben estar rellenados</h3>";
                    }
                    ?>

                    <hr>

                    <?php
                    echo "<h1>Ejercicio 3</h1>";
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    if ($number1 + $number2)
                        if ($number2 == 0) {
                            echo "<h3>El segundo número no puede ser cero.</h3>";
                        } else {
                            if ($number1 > $number2) {
                                $suma = $number1 + $number2;
                                $diferencia = $number1 - $number2;
                                echo "<h3>La suma es: " . $suma . "<br></h3>";
                                echo "<h3>La diferencia es: " . $diferencia . "<br></h3>";
                            } else {
                                $multiplicacion = $number1 * $number2;
                                $division = $number1 / $number2;
                                echo "<h3>Producto: " . $multiplicacion . "</h3>";
                                echo "<h3>División: " . $division . "</h3>";
                            }
                        }
                    else {
                        echo "<h3>Rellenar todos los campos</h3>";
                    }
                    ?>

                    <hr>

                    <?php
                    echo "<h1>Ejercicio 4</h1>";
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];
                    $promedio = Round(($nota1 + $nota2 + $nota3) / 3,2);
                    if ($nota1 && $nota2 && $nota3)
                        if ($promedio >= 4) {
                            echo "<h3>El promedio es: " . $promedio . " por lo tanto es regular</h3>";
                        } else {
                            echo "<h3>El promedio es: " . $promedio . " por lo tanto está reprobado</h3>";
                        }
                    else {
                        echo "<h3>Los campos no pueden estar vacíos</h3>";
                    }
                    ?>

                    <hr>

                    <?php
                    echo "<h1>Ejercicio 5</h1>";
                    $numA = $_POST['numA'];
                    $numB = $_POST['numB'];
                    $numC = $_POST['numC'];
                    if ($numA !== $numB && $numA !== $numC && $numB !== $numC) {
                        $mayor = $numA;
                        if ($numB > $mayor) {
                            $mayor = $numB;
                        }
                        if ($numC > $mayor) {
                            $mayor = $numC;
                        }
                        echo "<h3>El mayor número es: " . $mayor . "</h3>";
                    } else {
                        echo "<h3>Completar todos los campos</h3>";
                    }
                    ?>

                    <hr>

                    <button type="submit" class="btn btn-primary">Regresar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Agregamos el script de bootstrap al final del body -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>