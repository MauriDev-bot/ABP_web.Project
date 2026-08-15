# 🤖 EMERGENCYMESH - Robot de Emergencia e Innovación

> **Proyecto educativo** del Liceo Politécnico Andes | Equipo: 18

---

## 📋 Contenido

1. [Descripción del Proyecto](#descripción-del-proyecto)
2. [Tecnologías Utilizadas](#tecnologías-utilizadas)
3. [Estructura del Proyecto](#estructura-del-proyecto)
4. [Requisitos Previos](#requisitos-previos)
5. [Instalación](#instalación)
6. [Cómo Ejecutar](#cómo-ejecutar)
7. [Funcionalidades](#funcionalidades)
8. [Base de Datos](#base-de-datos)
9. [Archivos Principales](#archivos-principales)
10. [Contribuciones](#contribuciones)

---

## 📝 Descripción del Proyecto

**EMERGENCYMESH** es un proyecto educativo que presenta un **robot de emergencia multifuncional** diseñado como solución innovadora para situaciones de desastre y emergencia.

### Objetivo Principal
- Documentar y presentar un robot versátil capaz de responder a diferentes tipos de emergencias
- Aplicar conocimientos de **Telecomunicaciones**, **Electrónica** y **Mecánica**
- Desarrollar una plataforma web interactiva para visualizar toda la información técnica

### ¿Qué es EmergencyBot?
Un robot autónomo e innovador que combina:
- 🔧 **Sistemas mecánicos** avanzados (orugas, suspensiones, estabilizadores)
- ⚡ **Componentes electrónicos** de última generación (ESP32, sensores, drivers)
- 📡 **Conectividad** 4G, LoRa y Ethernet
- 🔋 **Energía limpia**: Baterías LiFePO4 + paneles solares
- 📊 **Sensores**: GPS, ultrasónicos, temperatura, gases, cámara

---

## 🛠️ Tecnologías Utilizadas

### Backend
- **PHP 7.x+**: Lenguaje de programación del servidor
- **MySQL/MariaDB**: Base de datos relacional para almacenar información de componentes

### Frontend
- **HTML5**: Estructura semántica de las páginas
- **CSS3**: Estilos visuales y diseño responsivo

### Base de Datos
- Almacenamiento de datos de componentes y precios
- Gestión de información del robot
- Consultas SQL para obtener datos dinámicos

### Servidor Web
- **Apache** (incluido en WAMP)
- **WAMP Stack**: Windows + Apache + MySQL + PHP

---

## 📁 Estructura del Proyecto

```
pagina_abp/
├── 📄 README.md                      ← Este archivo
├── 📄 index.php                      ← Página principal (inicio)
├── 📄 infografia.html                ← Sección de infografía
├── 📄 canvas.html                    ← Canvas interactivo
├── 📄 Telecomunicaciones.html        ← Información telecomunicaciones
├── 📄 electronica.html               ← Componentes electrónicos
├── 📄 mecanica.html                  ← Sistemas mecánicos
├── 📄 conexion.php                   ← Configuración de conexión a BD
├── 📄 datos.sql                      ← Script SQL inicial
├── 📄 estilo1.css                    ← Estilos generales del sitio
├── 📁 recursos/
│   ├── robot.avif                    ← Imagen del robot
│   ├── lpa.jpg                       ← Logo Liceo Politécnico Andes
│   └── favicon.ico                   ← Ícono del sitio (favicon)
```

### Explicación de cada carpeta:

| Carpeta/Archivo | Propósito |
|---|---|
| **index.php** | Página principal que carga datos de la BD y muestra el inicio |
| **infografia.html** | Infografía visual del robot y sus componentes |
| **canvas.html** | Elemento canvas para interacción visual (puede incluir diagramas) |
| **Telecomunicaciones.html** | Detalle de sistemas de comunicación (4G, LoRa, Ethernet) |
| **electronica.html** | Especificaciones de componentes electrónicos |
| **mecanica.html** | Información de sistemas mecánicos (orugas, suspensiones) |
| **conexion.php** | Archivo que establece conexión con MySQL |
| **datos.sql** | Script con estructura de BD y datos iniciales |
| **estilo1.css** | Hoja de estilos CSS centralizada |
| **recursos/** | Carpeta con imágenes y recursos multimedia |

---

## 📦 Requisitos Previos

Antes de iniciar, necesitas tener instalados:

### Software Obligatorio
- ✅ **WAMP Stack** (Windows Apache MySQL PHP)
  - Descarga desde: https://www.wampserver.com/
  - O alternativamente: XAMPP, Laragon, etc.

- ✅ **Servidor Apache** activo
- ✅ **MySQL** ejecutándose
- ✅ **PHP 7.x o superior**

### Navegador Web
- ✅ Chrome, Firefox, Edge o cualquier navegador moderno
- ✅ JavaScript habilitado

### Verificación de Requisitos
```bash
# Abre una terminal/CMD y ejecuta:
php -v              # Verifica versión de PHP
mysql -u root -p    # Verifica MySQL (te pedirá contraseña)
```

---

## 📥 Instalación

### Paso 1: Copiar archivos al servidor
```bash
# Copia toda la carpeta "pagina_abp" a la carpeta WWW de WAMP
Ubicación: C:\wamp64\www\pagina_abp\
```

### Paso 2: Crear la base de datos
```bash
# Opción A: Usando phpMyAdmin (GUI)
1. Abre http://localhost/phpmyadmin/
2. Ve a "SQL" en la parte superior
3. Copia todo el contenido de datos.sql
4. Pégalo en la ventana de SQL y haz clic en "Ejecutar"

# Opción B: Usando MySQL desde CMD
1. Abre CMD
2. mysql -u root -p
3. Copia y pega el contenido completo de datos.sql
```

### Paso 3: Configurar conexión (si es necesario)
Edita **conexion.php** si tus credenciales son diferentes:

```php
<?php
$host = "localhost";      // Servidor (generalmente localhost)
$user = "root";           // Usuario MySQL (por defecto: root)
$pass = "";               // Contraseña (por defecto vacía en WAMP)
$db = "robot";            // Nombre de la base de datos
?>
```

### Paso 4: Verificar permisos
Asegúrate de que la carpeta tiene permisos de lectura/escritura:
```bash
# En Windows, generalmente es automático
# Si tienes problemas, haz clic derecho > Propiedades > Seguridad
```

---

## 🚀 Cómo Ejecutar

### Método 1: Abrir en el navegador (Más común)
```
1. Inicia WAMP (haz clic en el ícono en la bandeja)
2. Asegúrate de que Apache y MySQL estén en verde (activos)
3. Abre tu navegador web
4. Escribe en la barra de direcciones:
   
   http://localhost/pagina_abp/
   
5. ¡Listo! Deberías ver la página principal
```

### Método 2: Desde VS Code (Si tienes Live Server)
```
1. Abre la carpeta en VS Code
2. Haz clic derecho en index.php
3. Selecciona "Open with Live Server"
⚠️ Nota: Esto solo funciona para archivos HTML puros
```

---

## ✨ Funcionalidades

### 🏠 Página Principal (index.php)
- **Presentación del proyecto** con diseño atractivo
- **Conexión a la base de datos** que carga datos dinámicamente
- **Tabla de componentes** con información de:
  - Nombre del componente
  - Cantidad
  - Precio neto
  - IVA (Impuesto al Valor Agregado)
  - Precio de venta
  - Subtotal

### 📊 Secciones Disponibles
- **Infografía**: Visualización gráfica del robot y sus sistemas
- **Canvas**: Elementos interactivos (diagramas, animaciones)
- **Telecomunicaciones**: Sistema de comunicación (4G, LoRa, WiFi)
- **Electrónica**: Componentes y sistemas de control
- **Mecánica**: Estructura y sistemas de movimiento

### 🎨 Características de Diseño
- Diseño **responsivo** (adapta a dispositivos móviles)
- Paleta de colores profesional
- Navegación intuitiva entre secciones
- Imágenes optimizadas (formato .avif)
- Favicon personalizado

---

## 🗄️ Base de Datos

### Estructura de BD: `robot`

#### Tabla 1: `robot`
Información general del robot principal.

```sql
CREATE TABLE robot (
    nombre VARCHAR(20) NOT NULL,    -- Nombre del robot
    precio INT NOT NULL             -- Precio total
);
```

**Datos en la tabla:**
| nombre | precio |
|---|---|
| EmergencyBot | 1151601 |

#### Tabla 2: `componentes`
Detalle de todos los componentes del robot.

```sql
CREATE TABLE componentes (
    nombre VARCHAR(60) NOT NULL,    -- Nombre del componente
    cantidad INT NOT NULL,          -- Cantidad utilizada
    precio_n INT NOT NULL,          -- Precio neto unitario
    iva INT NOT NULL,               -- Impuesto calculado
    precio_v INT NOT NULL,          -- Precio de venta
    subtotal INT NOT NULL           -- Subtotal (cantidad × precio_v)
);
```

### Categorías de Componentes en la BD

#### 🚗 Sistema de Movimiento (Mecánica)
- Motorreductores DC
- Orugas de caucho reforzado
- Ruedas motrices
- Rodamientos
- Suspensiones y amortiguadores
- Chasis de aluminio

#### ⚡ Sistema Eléctrico
- Batería LiFePO4 25.6V / 50Ah
- Cargadores solares
- Paneles solares monocristalinos
- Convertidores DC-DC
- Drivers de motor BTS7960
- Fusibles y interruptores

#### 📡 Sistema de Comunicación
- Router 4G Teltonika RUT200
- Módulo LoRa EBYTE E22-900T30D
- Switch Ethernet industrial
- Gateway (Raspberry Pi 4)
- Antenas especializadas

#### 📊 Sistema de Sensores
- ESP32 DevKit V1 (controlador principal)
- GPS u-blox NEO-6M
- Sensores ultrasónicos HC-SR04
- Acelerómetro/Giroscopio MPU6050
- Sensor barométrico BME280
- Sensores de gases (MQ-2, MQ-135)
- Monitor de corriente INA219
- Encoder incremental

#### 📸 Sistema de Percepción
- Cámara ESP32-CAM
- Actuadores visuales (LEDs, sirena, buzzer)

### Consultas útiles en la BD

```php
// Obtener todos los componentes
$consulta = "SELECT nombre, cantidad, precio_n, iva, precio_v, subtotal FROM componentes";

// Obtener el precio total del robot
$consulta = "SELECT precio FROM robot WHERE nombre='EmergencyBot'";

// Obtener componentes por categoría (usando LIKE)
$consulta = "SELECT * FROM componentes WHERE nombre LIKE '%Motor%'";

// Calcular el costo total de componentes
$consulta = "SELECT SUM(subtotal) as costo_total FROM componentes";
```

---

## 📄 Archivos Principales Explicados

### 1️⃣ **index.php** - La Página Principal

Este archivo es el corazón del sitio. Hace lo siguiente:

```php
<?php
// Incluye la conexión a la base de datos
include 'conexion.php';

// Realiza una consulta para obtener todos los componentes
$consulta = "SELECT nombre, cantidad, precio_n, iva, precio_v, subtotal FROM componentes";

// Ejecuta la consulta
$componentes = $conexion->query($consulta);
?>
```

**Lo que ves en la página:**
- Header con título "EMERGENCYMESH"
- Menú de navegación a todas las secciones
- Sección de bienvenida con título atractivo
- Tabla dinámica de componentes cargada desde BD

### 2️⃣ **conexion.php** - Conexión a la Base de Datos

Este archivo es esencial para toda comunicación con MySQL:

```php
<?php
$host = "localhost";      // Donde está el servidor MySQL
$user = "root";           // Usuario de MySQL
$pass = "";               // Contraseña (vacía por defecto en WAMP)
$db = "robot";            // Nombre de la base de datos

// Crea la conexión
$conexion = mysqli_connect($host, $user, $pass, $db);

// Verifica si la conexión fue exitosa
if (!$conexion) {
    echo("No se ha podido realizar la conexión");
}
?>
```

**Importancia:** Se incluye en `index.php` con `include 'conexion.php';`

### 3️⃣ **estilo1.css** - Hojas de Estilo

Define el aspecto visual de todo el sitio:

```css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;        /* Modelo de caja CSS moderno */
    font-family: 'Arial', cursive;
}

body {
    background-color: #0b1718;     /* Fondo oscuro futurista */
}

.tarjeta {
    background-color: #122425;     /* Tarjetas con fondo oscuro */
    font-size: 30px;
    color: #a7f3d0;                /* Texto verde menta */
    height: 330px;
    width: 800px;
    border-radius: 10px;           /* Esquinas redondeadas */
}
```

**Paleta de colores:**
- 🌑 Fondo: #0b1718 (Gris muy oscuro/casi negro)
- 🟦 Elementos: #122425 (Azul oscuro)
- 🟢 Texto principal: #a7f3d0 (Verde menta)

### 4️⃣ **datos.sql** - Script de Base de Datos

Contiene:
- ✅ Creación de la base de datos `robot`
- ✅ Creación de tablas `robot` y `componentes`
- ✅ Inserción de 74 componentes detallados
- ✅ Información de precios con IVA

**Costo total del robot:** $1,151,601 CLP (aprox.)

### 5️⃣ **Archivos HTML Complementarios**

Cada archivo tiene estructura similar:
```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMERGENCYMESH - [Sección]</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <!-- Encabezado y navegación -->
    <!-- Contenido específico de cada sección -->
</body>
</html>
```

---

## 🤝 Contribuciones

### Cómo contribuir al proyecto

#### 1. Reportar problemas
```
Si encuentras un error:
1. Anota exactamente qué pasó
2. Describe los pasos para reproducirlo
3. Comunica al equipo
```

#### 2. Sugerir mejoras
- Mejor diseño visual
- Funcionalidades adicionales
- Optimización de código
- Documentación mejorada

#### 3. Agregar contenido
- Nuevas secciones temáticas
- Más detalles técnicos
- Galería de imágenes del robot
- Vídeos de funcionamiento

#### 4. Mejorar el código
```php
// Ejemplo: Mejora de legibilidad en consultas

// ❌ Anterior (sin comentarios)
$c = "SELECT * FROM componentes";
$r = $conexion->query($c);

// ✅ Mejorado (con nombres descriptivos y comentarios)
// Obtiene todos los componentes con sus detalles de precio
$consultaComponentes = "SELECT nombre, cantidad, precio_n, iva, precio_v, subtotal FROM componentes";
$resultadoComponentes = $conexion->query($consultaComponentes);
```

---

## 🔍 Solución de Problemas

### ❌ "No se puede conectar a la base de datos"

**Soluciones:**
1. Verifica que MySQL esté activo (ícono verde en WAMP)
2. Revisa que la contraseña en `conexion.php` sea correcta
3. Asegúrate de que la BD `robot` existe:
   ```sql
   SHOW DATABASES;
   ```

### ❌ "Página no encontrada (404)"

**Soluciones:**
1. Verifica que Apache esté activo en WAMP
2. Asegúrate de que copié los archivos en `C:\wamp64\www\pagina_abp\`
3. Accede a `http://localhost/` para ver si funciona WAMP

### ❌ "Error de sintaxis en SQL"

**Soluciones:**
1. En phpMyAdmin, copia y pega línea por línea
2. Asegúrate de no tener caracteres especiales
3. Verifica las mayúsculas/minúsculas en nombres de BD

### ⚠️ "Las imágenes no se cargan"

**Soluciones:**
1. Verifica que la carpeta `recursos/` existe
2. Comprueba que los archivos tienen la extensión correcta
3. Revisa la ruta en el HTML: `<img src="recursos/robot.avif">`

---

## 📚 Recursos de Aprendizaje

### PHP y MySQL
- 📖 [PHP Official Documentation](https://www.php.net/manual/es/)
- 📖 [MySQL Tutorial W3Schools](https://www.w3schools.com/sql/)

### HTML y CSS
- 📖 [MDN Web Docs](https://developer.mozilla.org/es/)
- 📖 [CSS-Tricks](https://css-tricks.com/)

### Robotics y Electrónica
- 📖 [Arduino Official](https://www.arduino.cc/)
- 📖 [Raspberry Pi Foundation](https://www.raspberrypi.org/)

---

## 📊 Estadísticas del Proyecto

| Métrica | Valor |
|---|---|
| **Total de archivos** | 10 |
| **Líneas de código aprox.** | 2,000+ |
| **Componentes en BD** | 74 |
| **Costo total robot** | $1,151,601 CLP |
| **Secciones del sitio** | 6 |
| **Tecnologías usadas** | 4 (PHP, MySQL, HTML5, CSS3) |
| **Base de datos** | 2 tablas |

---

## 📞 Información de Contacto

**Proyecto:** EMERGENCYMESH  
**Institución:** Liceo Politécnico Andes  
**Equipo:** 18  
**Año:** 2026

---

## 📝 Notas Finales

Este proyecto es una **iniciativa educativa** que demuestra:
- ✅ Integración de tecnologías web modernas
- ✅ Gestión de bases de datos relacionales
- ✅ Diseño web responsivo
- ✅ Trabajo en equipo multidisciplinario
- ✅ Documentación técnica clara

**Recordatorio importante:**
> "La tecnología es una herramienta. Su uso depende de nosotros." - Equipo EMERGENCYMESH

---

**Última actualización:** 15 de agosto de 2026  
**Versión:** 1.0  
**Estado:** ✅ Completo y documentado
