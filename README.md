Proyecto ABP -EMERGENCY MESH-

# Como ejecutar

(1 Forma)
1. Revisar requerimientos.txt
2. Encender/Abrir WampServer
3. Ejecutar datos.sql (Copiar y pegar codigo)
4. Mover carpeta Pagina_web a (C:\wamp64\www)
5. Abrir localhost
6. redireccionar a localhost/Pagina_web
7. Explorar web. (F12 o inspeccinar para ver codigo)

(2. Forma)
1. Visitar sitio 'mauri-dev.com'
2. Explorar web. (F12 o inspeccinar para ver codigo)
# EXPLICACIÓN

Tecnologias utilizadas:
-HTML 5
-CSS
-PhP
-MySQL

Fuentes externas utilizadas:
-Google Fonts

# HTML
Estrcutura Utilizada {
    <!DOCTYPE html>: Indica tipo de documento
    <html>: Raiz del documento
    <head>: Cabeza de html
    <meta>: Metadatos logicos de uso en la web
    <link>: Enlaces externos para su aplicación en el html
    <body>: Cuerpo de pagina
    <header>: Encabezado de la pagina web
    <nav>: Barra de navegación
    <section>: Secciones de la pagina WEB
    <div>: caja de uso estructural
    <footer>: Pie de pagina
    <a>: Enlaces de redirección dentro de la web.
    <img>: Añadir imagenes a la web.
    <p>:Parrafos de texto
    <h1>: Titulado o Subtitulado
    <table>: Indica inicio y inicio de una tabla
    <thead>:
    <tr>:
    <th>:
    <td>:
}

# PhP

Estructura Utilizada {
    <?php: Indica inicio de codigo PhP. (>: indica cierre)
    mysqli_connect(parametros): Se usa para conectar Base de datos a PhP.
    include {}; : Importa archivos externos al codigo PhP.
    ${nombre}; : Declara o crea una variable.
    if (condición) {} : Declaración condicional.
    (!{variable}): No se cumple la condición.
    "SELECT nombre, precio FROM componentes" -> Valor asignado a variable $consulta para consultar MySQL.
    ->query($consulta): realiza la consultado con comando query().
    echo(): Imprime en pantalla.
    foreach (char as cadena) {: Recorre en bucle una variable. por ej: cada caracter de una cadena de texto.
    htmlspecialchars(variable): convierte PhP en entidades legibles en HTML.
    endforeach };: finaliza el bucle.
}

# conexion.php
<?php -> empieza

$host = "localhost"; -> host base de datos
$user = "root"; -> usuario 
$pass = ""; -> contraseña
$db = "robot"; -> nombre base de datos

$conexion = mysqli_connect($host, $user, $pass, $db); -> Variable almacena conexión a Base de datos con las variables definidas.

if (!$conexion) { -> consulta si se cumple la condición.
    echo("No se a podido realizar la conexión"); -> imprime si se cumple
}
?> -> termina

# index.php
<?php -> empieza
include 'conexion.php'; -> importa conexion.php

$consulta = "SELECT nombre, precio FROM componentes"; -> guarda la consulta
$componentes = $conexion->query($consulta); -> consulta y almacena.

?> -> termina

# index.php
<?php foreach ($componentes as $componente): ?> -> inicia bucle for each en componentes para sacar cada componente.
<tr>
    <td><?= htmlspecialchars($componente['nombre']) ?></td> -> imprime el nombre del componente
    <td>$<?= htmlspecialchars($componente['precio']) ?></td> -> imprime el precio del componente
</tr>
<?php endforeach; ?> -> finaliza el bucle

# CSS

estructura utilizada {
    @import : importa contenido externo al .css
    * {}: Define parametros generales
    :hover: Vizualisación con Cursor por encima del objeto.
}
