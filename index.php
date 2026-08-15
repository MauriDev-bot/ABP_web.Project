<?php
include 'conexion.php';

$consulta = "SELECT nombre, cantidad, precio_n, iva, precio_v, subtotal FROM componentes";
$componentes = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulario">
    <title>Emergencymesh</title>
    <link rel="shortcut icon" href="recursos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo1.css">
</head>

<body>
    <header>
        <div class="fuente_pequeña">
            <p>Liceo Politecnico Andes</p>
            <p>Equipo: 18</p>
        </div>
        <h1>EMERGENCYMESH</h1>

        <div class="redes">
            <img class="social" src="recursos/lpa.jpg">
        </div>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="infografia.html">Infografía</a>
        <a href="canvas.html">Canvas</a>
        <a href="Telecomunicaciones.html">Telecomunicaciones</a>
        <a href="electronica.html">Electrónica</a>
        <a href="mecanica.html">Mecánica</a>
    </nav>

    <section>
        <div class="inicio">
            <h1>EMERGENCIA</h1>
            <h1 class="acento">ROBOT</h1>
            <h1>INNOVACIÓN</h1>
            <p>Una solución que llego para quedarse</p>
        </div>
    </section>

    <section id="nosotros">
        <div class="fila">
            <div class="quien">
                <h1>¿Para</h1>
                <h1 class="acento">Quien?</h1>
            </div>

            <div class="texto">
                <p><i class="marca">EMERGENCYMESH</i> esta pensado para empresas publicas y privadas, que operen en situaciones de emergencia, y requieran establecer conexiones inalambricas cuando ocurran catastrofes.</p>
            </div>
        </div>
    </section>
    <section>
        <h1>Proposito</h1>
        <div class="tarjeta">
            <p>
                Emergency Mesh busca que en los momentos más críticos como desastres naturales o emergencias las personas que están incomunicadas y necesitan una atención inmediata, puedan ser escuchadas y atendidas a tiempo sin que la falta de señal decida quien recibe ayuda primero.
            </p>
        </div>
    </section>
    <section id="componentes">
        <div class="tabla">
            <h1 class="titulo">Tabla de Presupuesto</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio Neto</th>
                        <th>IVA</th>
                        <th>Precio Venta</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($componentes as $componente): ?>
                        <tr>
                            <td><?= htmlspecialchars($componente['nombre']) ?></td>
                            <td><?= htmlspecialchars($componente['cantidad']) ?></td>
                            <td>$<?= htmlspecialchars($componente['precio_n']) ?></td>
                            <td>$<?= htmlspecialchars($componente['iva']) ?></td>
                            <td>$<?= htmlspecialchars($componente['precio_v']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <a href="recursos/informe.pdf">Informe Presupuesto</a>
    </section>
    <section class="servicio">
        <div>
            <h1>Servicio</h1>
            <h1>Inmediato</h1>
        </div>
        <img class="robot" src="recursos/robot.avif">
    </section>

    <footer id="contacto">
        <div>
            <p>
                <i>Equipo Conformado por:</i> <br>
                Mauricio Labarrera <i>Telecomunicaciones</i>
                <br>Mery-ann Miranda <i>Mecánica</i><br>
                Darlin Nuñez <i>Telecomunicaciones</i><br>
                Agustin Jara <i>Telecomunicaciones</i><br>
                Leandro León <i>Electrónica</i><br>
                Cesar Molina <i>Mecánica</i><br>
                rancisco Melendez <i>Electrónica</i>
            </p>
        </div>
        <div>
            <a href="mailto:Emergencymesh.support@gmail.com">Emergencymesh.support@gmail.com</a>
            <a href="tel:+56922449900">+56 9 2244 9900</a>
        </div>

        <p>2026 © Derechos reservados a EMERGENCYMESH</p>
    </footer>
</body>
</html>
