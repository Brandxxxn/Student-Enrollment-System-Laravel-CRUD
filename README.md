# Sistema de Matrículas para Desarrollo Web con Laravel

Este es un proyecto de sistema de matrículas desarrollado en Laravel, una aplicación web que permite gestionar la matriculación de estudiantes en cursos de Desarrollo Web. El sistema incluye funcionalidades para gestionar usuarios, estudiantes, cursos, matrículas, docentes y horarios.

## Requisitos

Asegúrate de tener los siguientes requisitos instalados en tu entorno de desarrollo:

- PHP >= 7.3
- Composer 2.6.6
- MySQL o cualquier otro sistema de gestión de bases de datos compatible con Laravel

## Configuración del Proyecto

1. **Clonar el Repositorio:**


2. **Instalar Dependencias:**
   ```bash
   composer install
   ```

3. **Configurar el Archivo de Entorno:**
   - Copia el archivo `.env.example` y renómbralo a `.env`:
     ```bash
     cp .env.example .env
     ```
   - Abre el archivo `.env` y configura la conexión a la base de datos y cualquier otra configuración específica de tu entorno.


4. **Ejecutar Migraciones y Semillas:**
   ```bash
   php artisan migrate --seed
   ```

5.. **Iniciar el Servidor de Desarrollo:**
   ```bash
   php artisan serve
   ```

   La aplicación estará disponible en [http://localhost:8000](http://localhost:8000).

## Estructura de la Base de Datos

El sistema utiliza las siguientes tablas en la base de datos:

- `users`: Almacena información de usuarios, incluyendo roles.
- `students`: Información detallada de estudiantes.
- `courses`: Detalles de los cursos disponibles.
- `enrollments`: Matrículas de estudiantes en cursos.
- `teachers`: Información de docentes.
- `schedules`: Horarios de los cursos.

## Uso del Sistema

1. Accede al sistema a través de [http://localhost:8000](http://localhost:8000).
2. Inicia sesión con las credenciales proporcionadas durante la ejecución de las migraciones.
3. Explora las diferentes secciones del sistema para gestionar usuarios, estudiantes, cursos, matrículas, docentes y horarios.

## Notas Adicionales

- Asegúrate de que tu entorno cumple con los requisitos del framework Laravel.
- Personaliza y amplía el sistema según tus necesidades específicas.
- Para entornos de producción, configura adecuadamente las variables de entorno y utiliza un servidor web más robusto que `php artisan serve`.

¡Disfruta construyendo tu sistema de matrículas para Desarrollo Web con Laravel!
