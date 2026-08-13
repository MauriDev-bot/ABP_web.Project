# Proyecto ABP --- EMERGENCY MESH

## 1. Descripción del proyecto

**EMERGENCY MESH** es un proyecto web desarrollado para el ABP,
utilizando tecnologías web básicas y una base de datos MySQL.

El proyecto permite presentar información mediante una página web y
obtener datos almacenados en una base de datos, utilizando **HTML5, CSS,
PHP y MySQL**.

------------------------------------------------------------------------

## 2. Cómo ejecutar el proyecto

### Forma 1 --- Ejecución local con WampServer

1.  Revisar el archivo `requerimientos.txt`.

2.  Encender o abrir **WampServer**.

3.  Abrir el archivo `datos.sql`.

4.  Copiar y ejecutar el código SQL en MySQL/phpMyAdmin.

5.  Mover la carpeta `Pagina_web` a:

    `C:\wamp64\www`

6.  Abrir el navegador y entrar a:

    `http://localhost`

7.  Redireccionar a:

    `http://localhost/Pagina_web`

8.  Explorar la página web.

9.  Para revisar el código utilizado, se puede abrir las herramientas de
    desarrollador del navegador con **F12** o mediante la opción
    **Inspeccionar**.

### Forma 2 --- Ejecución mediante sitio web

1.  Visitar el sitio:

    `mauri-dev.com`

2.  Explorar la página web.

3.  Para revisar el código utilizado, abrir las herramientas de
    desarrollador con **F12** o mediante **Inspeccionar**.

> **Nota:** La ejecución local requiere tener correctamente configurado
> WampServer, PHP, MySQL y la base de datos utilizada por el proyecto.

------------------------------------------------------------------------

# 3. Tecnologías utilizadas

-   **HTML5:** estructura y contenido de la página.
-   **CSS3:** diseño visual, distribución, colores, tipografías y
    efectos.
-   **PHP:** procesamiento del lado del servidor y conexión con la base
    de datos.
-   **MySQL:** almacenamiento y consulta de información.
-   **Google Fonts:** utilización de fuentes externas para el diseño
    tipográfico.

------------------------------------------------------------------------

# 4. Estructura HTML utilizada

HTML se utiliza para definir la estructura y el contenido de la página
web.

  -----------------------------------------------------------------------
  Elemento                            Función
  ----------------------------------- -----------------------------------
  `<!DOCTYPE html>`                   Indica que el documento utiliza
                                      HTML5.

  `<html>`                            Elemento raíz que contiene todo el
                                      documento HTML.

  `<head>`                            Contiene información y
                                      configuraciones del documento que
                                      no se muestran directamente en la
                                      página.

  `<meta>`                            Define metadatos del documento,
                                      como la codificación de caracteres
                                      y la configuración de
                                      visualización.

  `<link>`                            Permite enlazar recursos externos,
                                      como hojas de estilos o fuentes.

  `<body>`                            Contiene todo el contenido visible
                                      de la página.

  `<header>`                          Define el encabezado de la página.

  `<nav>`                             Contiene la barra o menú de
                                      navegación.

  `<section>`                         Permite dividir la página en
                                      diferentes secciones.

  `<div>`                             Contenedor genérico utilizado para
                                      organizar elementos.

  `<footer>`                          Define el pie de página.

  `<a>`                               Crea enlaces para navegar hacia
                                      otras páginas o secciones.

  `<img>`                             Permite insertar imágenes.

  `<p>`                               Define párrafos de texto.

  `<h1>`                              Define un título principal o
                                      encabezado de nivel 1.

  `<table>`                           Define una tabla.

  `<thead>`                           Define el encabezado de una tabla.

  `<tr>`                              Define una fila de una tabla.

  `<th>`                              Define una celda de encabezado.

  `<td>`                              Define una celda normal de una
                                      tabla.
  -----------------------------------------------------------------------

------------------------------------------------------------------------

# 5. PHP

PHP se utiliza para ejecutar código del lado del servidor, conectarse
con MySQL y mostrar información obtenida desde la base de datos.

## Estructuras y funciones utilizadas

  -----------------------------------------------------------------------
  Elemento                            Función
  ----------------------------------- -----------------------------------
  `<?php`                             Indica el inicio de un bloque de
                                      código PHP.

  `?>`                                Indica el cierre de un bloque PHP.

  `mysqli_connect()`                  Permite establecer una conexión con
                                      una base de datos MySQL.

  `include`                           Incluye otro archivo PHP dentro del
                                      archivo actual.

  `$variable`                         Sintaxis utilizada para declarar y
                                      utilizar variables en PHP.

  `if (condición)`                    Ejecuta un bloque de código cuando
                                      se cumple una condición.

  `!`                                 Operador lógico de negación.

  `$conexion->query()`                Ejecuta una consulta SQL mediante
                                      la conexión establecida.

  `echo`                              Muestra contenido en la salida de
                                      PHP.

  `foreach`                           Recorre los elementos de una
                                      colección o resultado.

  `htmlspecialchars()`                Convierte caracteres especiales en
                                      entidades HTML para mostrar texto
                                      de forma segura.

  `endforeach`                        Indica el final de un bloque
                                      `foreach` cuando se utiliza la
                                      sintaxis alternativa de PHP.
  -----------------------------------------------------------------------

------------------------------------------------------------------------

# 6. `conexion.php`

El archivo `conexion.php` establece la conexión entre PHP y la base de
datos MySQL.

``` php
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "robot";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo("No se ha podido realizar la conexión");
}

?>
```

## Explicación

-   `$host = "localhost";` define el servidor donde se encuentra MySQL.
-   `$user = "root";` define el usuario utilizado para conectarse.
-   `$pass = "";` define la contraseña del usuario.
-   `$db = "robot";` indica el nombre de la base de datos.
-   `mysqli_connect()` utiliza estos datos para establecer la conexión.
-   `if (!$conexion)` comprueba si la conexión no se realizó
    correctamente.
-   `echo()` muestra un mensaje en caso de error.

> En un entorno real, no se recomienda dejar credenciales de base de
> datos expuestas en el código ni utilizar el usuario `root` para una
> aplicación en producción.

------------------------------------------------------------------------

# 7. `index.php`

El archivo `index.php` utiliza la conexión creada anteriormente para
realizar una consulta a la base de datos.

## Conexión y consulta

``` php
<?php

include 'conexion.php';

$consulta = "SELECT nombre, precio FROM componentes";
$componentes = $conexion->query($consulta);

?>
```

## Explicación

### `include 'conexion.php';`

Importa el archivo `conexion.php`, permitiendo utilizar la conexión
almacenada en `$conexion`.

### `$consulta`

``` php
$consulta = "SELECT nombre, precio FROM componentes";
```

Guarda en una variable una consulta SQL que solicita las columnas
`nombre` y `precio` de la tabla `componentes`.

### `$componentes`

``` php
$componentes = $conexion->query($consulta);
```

Ejecuta la consulta SQL y almacena el resultado.

------------------------------------------------------------------------

# 8. Mostrar los componentes

Para mostrar los resultados obtenidos desde MySQL se utiliza un ciclo
`foreach`.

``` php
<?php foreach ($componentes as $componente): ?>
<tr>
    <td><?= htmlspecialchars($componente['nombre']) ?></td>
    <td>$<?= htmlspecialchars($componente['precio']) ?></td>
</tr>
<?php endforeach; ?>
```

## Explicación

-   `foreach` recorre cada componente obtenido desde la base de datos.
-   `$componente['nombre']` obtiene el nombre del componente actual.
-   `$componente['precio']` obtiene el precio del componente actual.
-   `<?= ... ?>` es una forma abreviada de utilizar `echo`.
-   `htmlspecialchars()` convierte caracteres especiales para que el
    contenido pueda mostrarse correctamente en HTML y reducir riesgos al
    imprimir datos provenientes de fuentes externas.
-   `<tr>` crea una fila de la tabla.
-   `<td>` crea las celdas donde se muestran el nombre y el precio.
-   `endforeach` indica el final del ciclo.

------------------------------------------------------------------------

# 9. CSS

CSS se utiliza para definir la apariencia visual de la página,
incluyendo colores, tamaños, espacios, distribución de elementos, bordes
y efectos.

## Estructuras utilizadas

  -----------------------------------------------------------------------
  Elemento                            Función
  ----------------------------------- -----------------------------------
  `@import`                           Importa recursos externos, en este
                                      caso fuentes de Google Fonts.

  `*`                                 Selector universal que permite
                                      aplicar estilos generales a todos
                                      los elementos.

  `:hover`                            Pseudoclase que permite cambiar el
                                      estilo de un elemento cuando el
                                      cursor pasa sobre él.

  `.clase`                            Selector utilizado para aplicar
                                      estilos a elementos que poseen una
                                      determinada clase.

  `elemento`                          Selector que permite aplicar
                                      estilos directamente a un tipo de
                                      elemento HTML.
  -----------------------------------------------------------------------

------------------------------------------------------------------------

# 10. Fuentes externas

El proyecto utiliza **Google Fonts** mediante `@import`.

Las fuentes incluidas son:

-   **Bitcount Grid Double Ink**
-   **DM Sans**
-   **Geist**
-   **Silkscreen**

El código utilizado es:

``` css
@import url('https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double+Ink:wght@100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Geist:ital,wght@0,100..900;1,100..900&family=Silkscreen:wght@400;700&display=swap');
```

------------------------------------------------------------------------

# 11. Configuración general del CSS

``` css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'DM Sans', sans-serif;
}
```

El selector universal `*` establece valores generales para los elementos
de la página:

-   `margin: 0;` elimina los márgenes predeterminados.
-   `padding: 0;` elimina los espacios internos predeterminados.
-   `box-sizing: border-box;` hace que el ancho y alto de los elementos
    incluyan su contenido, padding y borde.
-   `font-family` establece **DM Sans** como fuente principal.

------------------------------------------------------------------------

# 12. Fondo y texto

``` css
body {
    background-color: #0b1718;
}

.fuente_pequeña {
    font-size: 16px;
    color: aliceblue;
}
```

-   `body` establece un fondo oscuro para toda la página.
-   `.fuente_pequeña` define un tamaño de texto de `16px` y un color
    claro.

------------------------------------------------------------------------

# 13. Encabezado

``` css
header {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 120px;
    min-height: 160px;
    padding: 20px 40px;
    color: aqua;
    font-size: 30px;
}
```

El encabezado utiliza **Flexbox** para distribuir sus elementos.

-   `display: flex;` activa Flexbox.
-   `justify-content: center;` centra los elementos horizontalmente.
-   `align-items: center;` los centra verticalmente.
-   `gap: 120px;` establece separación entre elementos.
-   `min-height: 160px;` define una altura mínima.
-   `padding` agrega espacio interior.
-   `color: aqua;` establece el color del texto.
-   `font-size: 30px;` establece el tamaño de la fuente.

------------------------------------------------------------------------

# 14. Logo

``` css
.logo {
    max-width: 120px;
    border-radius: 50%;
}
```

-   `max-width` limita el ancho máximo del logo.
-   `border-radius: 50%` permite darle una forma circular.

------------------------------------------------------------------------

# 15. Barra de navegación

``` css
nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
    min-height: 40px;
    padding: 8px 24px;
    background-color: #a7f3d0;
}

nav a {
    color: #122425;
    text-decoration: none;
}

nav a:hover {
    color: azure;
}
```

La barra de navegación utiliza Flexbox para centrar y separar sus
enlaces.

El selector `nav a` modifica los enlaces dentro del menú y elimina el
subrayado mediante `text-decoration: none`.

`nav a:hover` cambia el color de los enlaces cuando el cursor pasa sobre
ellos.

------------------------------------------------------------------------

# 16. Secciones

``` css
section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 600px;
    padding: 28px 24px;
    color: white;
    text-align: center;
}
```

Las secciones se organizan mediante Flexbox y tienen:

-   contenido centrado;
-   una altura mínima de `600px`;
-   espacio interior;
-   texto de color blanco;
-   texto centrado.

------------------------------------------------------------------------

# 17. Contenedores de contenido

``` css
.quien,
.texto,
.tabla {
    padding: 20px;
    background-color: #0b1718;
    border-radius: 5px;
}
```

Estas clases comparten propiedades para crear bloques de contenido con:

-   `padding`;
-   fondo oscuro;
-   bordes redondeados.

------------------------------------------------------------------------

# 18. Sección `.quien`

``` css
.quien {
    width: 300px;
}

.quien h1 {
    font-size: 80px;
    line-height: 1;
}

.quien .acento {
    font-size: 100px;
}
```

La clase `.quien` establece un ancho de `300px`.

Los títulos dentro de esta sección tienen un tamaño grande y el elemento
con clase `.acento` utiliza un tamaño todavía mayor.

------------------------------------------------------------------------

# 19. Sección de inicio

``` css
.inicio h1 {
    font-size: 110px;
    line-height: 1;
}

.inicio .acento {
    font-size: 120px;
}

.inicio p {
    margin-top: 16px;
}
```

Esta sección utiliza títulos de gran tamaño para destacar el contenido
principal.

El párrafo posee un margen superior de `16px`.

------------------------------------------------------------------------

# 20. Fila de contenido

``` css
.fila {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 420px;
    gap: 80px;
    width: 90%;
}
```

`.fila` organiza los elementos horizontalmente utilizando Flexbox y
mantiene una separación de `80px` entre ellos.

------------------------------------------------------------------------

# 21. Tarjeta bordeada

``` css
.tarjeta_bordeada {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 420px;
    gap: 80px;
    width: 90%;
    border: 3px solid aqua;
    border-radius: 10px;
    background-color: #122425;
}
```

Esta clase crea una tarjeta con:

-   borde de `3px`;
-   color aqua;
-   esquinas redondeadas;
-   fondo oscuro;
-   contenido centrado mediante Flexbox.

También se define el estilo del texto contenido dentro de la tarjeta:

``` css
.tarjeta_bordeada .texto {
    background-color: #122425;
    width: 600px;
}
```

------------------------------------------------------------------------

# 22. Colores de acento

``` css
.acento,
.marca,
.titulo {
    color: aqua;
}
```

Estas clases utilizan el color **aqua** para destacar elementos
importantes de la interfaz.

------------------------------------------------------------------------

# 23. Texto

``` css
.texto {
    width: 400px;
    min-height: 260px;
    font-size: 25px;
    line-height: 1.2;
}

.marca {
    font-size: 105%;
}
```

`.texto` establece un ancho de `400px`, una altura mínima de `260px` y
un tamaño de fuente de `25px`.

`line-height: 1.2` controla la separación vertical entre líneas.

------------------------------------------------------------------------

# 24. Tabla

``` css
.tabla {
    width: 900px;
    max-width: 100%;
    min-height: 480px;
}

.titulo {
    margin-bottom: 12px;
    font-size: 60px;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 20px;
    background-color: #122425;
    color: #00eaff;
}
```

La clase `.tabla` define el contenedor de la tabla.

-   `width: 900px` establece un ancho máximo previsto.
-   `max-width: 100%` evita que el elemento supere el ancho disponible.
-   `min-height: 480px` establece una altura mínima.

En la tabla:

-   `width: 100%` utiliza todo el ancho disponible.
-   `border-collapse: collapse` une los bordes de las celdas.
-   `background-color` establece el fondo.
-   `color` establece el color del contenido.

### Celdas

``` css
th,
td {
    padding: 8px;
    border: 2px solid #0d1819;
    text-align: center;
}

th {
    color: #c6c7c7;
    background-color: #0d1819;
}
```

`th` y `td` reciben espacio interior, bordes y alineación centrada.

`th` tiene un fondo más oscuro para diferenciar los encabezados.

------------------------------------------------------------------------

# 25. Sección de servicios

``` css
.servicio {
    flex-direction: column;
    gap: 24px;
}

.servicio h1 {
    font-size: 60px;
    line-height: 1;
}
```

`.servicio` cambia la dirección de los elementos de Flexbox a columna y
establece una separación de `24px`.

El título utiliza un tamaño de `60px`.

------------------------------------------------------------------------

# 26. Elemento robot

``` css
.robot {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background-color: rgb(0, 241, 253);
}
```

La clase `.robot` crea un elemento de `300px × 300px`.

`border-radius: 50%` hace que el elemento sea circular.

------------------------------------------------------------------------

# 27. Pie de página

``` css
footer {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 120px;
    min-height: 90px;
    padding: 16px 24px;
    background-color: #122425;
    color: white;
}

footer div {
    display: grid;
    gap: 4px;
}

footer a {
    color: white;
    text-decoration: none;
}
```

El `footer` utiliza Flexbox para distribuir su contenido.

Los elementos `div` internos utilizan CSS Grid para organizar su
contenido verticalmente.

Los enlaces del pie de página tienen color blanco y no poseen subrayado.

------------------------------------------------------------------------

# 28. Conceptos de CSS utilizados

El proyecto aplica varios conceptos importantes de CSS:

### Flexbox

Se utiliza principalmente para distribuir y centrar elementos:

``` css
display: flex;
justify-content: center;
align-items: center;
gap: 80px;
```

### CSS Grid

Se utiliza dentro del pie de página:

``` css
display: grid;
gap: 4px;
```

### Selectores de clase

Permiten aplicar estilos específicos:

``` css
.texto { ... }
.robot { ... }
.titulo { ... }
```

### Pseudoclase `:hover`

Permite modificar un elemento cuando el cursor se encuentra sobre él:

``` css
nav a:hover {
    color: azure;
}
```

### Box Model

El proyecto utiliza propiedades como:

-   `margin`
-   `padding`
-   `border`
-   `width`
-   `height`
-   `box-sizing`

Estas propiedades controlan el tamaño y distribución de los elementos.

------------------------------------------------------------------------

# 29. Flujo general del proyecto

El funcionamiento básico del proyecto puede resumirse de la siguiente
manera:

``` text
Usuario
   ↓
Navegador
   ↓
index.php
   ↓
include → conexion.php
   ↓
PHP conecta con MySQL
   ↓
Consulta SQL
   ↓
Tabla "componentes"
   ↓
Resultado almacenado en $componentes
   ↓
foreach recorre los resultados
   ↓
HTML muestra nombre y precio
   ↓
CSS aplica el diseño visual
```

------------------------------------------------------------------------

# 30. Base de datos

La aplicación utiliza una base de datos llamada:

``` text
robot
```

Dentro de ella se utiliza la tabla:

``` text
componentes
```

La consulta principal utilizada por `index.php` es:

``` sql
SELECT nombre, precio FROM componentes;
```

Esta consulta obtiene el **nombre** y el **precio** de los componentes
almacenados.

------------------------------------------------------------------------

# 31. Requisitos

Para ejecutar el proyecto localmente se necesita:

-   WampServer.
-   Apache.
-   MySQL.
-   PHP.
-   Un navegador web.
-   Los archivos del proyecto.
-   El archivo `datos.sql`.
-   El archivo `requerimientos.txt`.

------------------------------------------------------------------------

# 32. Estructura recomendada del proyecto

Una estructura básica del proyecto puede ser:

``` text
Pagina_web/
├── index.php
├── conexion.php
├── datos.sql
├── requerimientos.txt
├── css/
│   └── estilo.css
├── img/
│   └── ...
└── ...
```

Los nombres exactos de carpetas y archivos pueden variar según la
estructura original del proyecto.

------------------------------------------------------------------------

# 33. Resumen

**EMERGENCY MESH** utiliza una arquitectura web sencilla basada en PHP y
MySQL.

HTML5 se encarga de la estructura, CSS del diseño visual, PHP del
procesamiento y conexión con la base de datos, y MySQL del
almacenamiento de información.

La página obtiene los componentes mediante una consulta SQL y los
muestra dinámicamente en una tabla HTML utilizando un ciclo `foreach`.

El proyecto puede ejecutarse localmente mediante WampServer o
visualizarse mediante el sitio web indicado en la documentación.

------------------------------------------------------------------------

## 34. Autores

**Proyecto ABP --- EMERGENCY MESH**

Tecnologías principales:

`HTML5` · `CSS3` · `PHP` · `MySQL` · `Google Fonts`
