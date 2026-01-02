# Simple CRUD (Create, Read, Update, Delete) con PHP + MySQL (sin PDO)

Este repositorio es un ejemplo didáctico de CRUD en PHP usando **MySQLi** (no PDO).
El objetivo es que puedas explicar paso a paso cómo funciona un CRUD clásico con MySQL.

## Requisitos

- PHP
- MySQL
- Un servidor web (Apache, Nginx, etc.)

## Instalación rápida

1. Importa `database.sql` para crear la base de datos y la tabla `users`.
2. Edita `dbConnection.php` y actualiza:
   - `$databaseHost`: host de MySQL
   - `$databaseName`: nombre de la base de datos
   - `$databaseUsername`: usuario
   - `$databasePassword`: contraseña
3. Copia los archivos al directorio público de tu servidor web.

## Flujo del CRUD (sin PDO)

1. **Create**  
   - `add.php` muestra el formulario.  
   - `addAction.php` recibe el `POST`, valida y ejecuta el `INSERT`.
2. **Read**  
   - `index.php` consulta la tabla `users` con `SELECT` y muestra la lista.
3. **Update**  
   - `edit.php` carga el registro actual por `id` y llena el formulario.  
   - `editAction.php` actualiza los datos con `UPDATE`.
4. **Delete**  
   - `delete.php` toma el `id` y ejecuta el `DELETE`.

## Archivos principales

- `dbConnection.php`: conexión MySQLi.
- `index.php`: listado (Read).
- `add.php` / `addAction.php`: formulario y acción de creación (Create).
- `edit.php` / `editAction.php`: formulario y acción de actualización (Update).
- `delete.php`: eliminación (Delete).

## Notas de seguridad y aprendizaje

- El proyecto usa `mysqli_*` para mostrar el flujo clásico de PHP con MySQL.
- Se aplican validaciones y escapes básicos (`mysqli_real_escape_string`), pero para producción se recomienda:
  - Validar con reglas más estrictas.
  - Usar consultas preparadas.
  - Manejar errores y respuestas HTTP de forma más robusta.

## Cómo probar

1. Abre `index.php` en el navegador.
2. Agrega, edita y elimina registros para ver cada etapa del CRUD.

Si quieres explicar el funcionamiento, revisa los comentarios dentro de cada archivo PHP: están pensados como guía pedagógica.
