# API de Oficialía Mayor

Una API RESTful de sistemas web para Oficialía Mayor.

> Basado en la arquitectura de micro servicios.

[Documentación oficial.](https://ricardogj08.notion.site/API-de-Oficial-a-Mayor-d6f94be08d7f4e738418a0f13ee98216)

## Servicios

* Registro y consulta de empleados (`admin`).
* Clima Laboral y Cultura Organizacional (`clima`).

## Dependencias

* [Lumen 9.x - Un micro framework de PHP por Laravel.](https://lumen.laravel.com/docs/9.x)
* [MySQL](https://www.mysql.com/) o [MariaDB](https://mariadb.com/) - Un sistema gestor de bases de datos relacionales.

Instala todas las dependencias del proyecto con [composer](https://getcomposer.org/):

```console
$ cd api
$ composer install
```

Copia el archivo `.env.example` (contiene todas las opciones de configuración del proyecto):

```console
$ cp .env.example .env
```

## Configuración de las bases de datos

Crea las bases de datos del proyecto:

```sql
CREATE DATABASE IF NOT EXISTS admin
  CHARACTER SET = 'utf8mb4'
  COLLATE       = 'utf8mb4_spanish_ci';
```

```sql
CREATE DATABASE IF NOT EXISTS clima
  CHARACTER SET = 'utf8mb4'
  COLLATE       = 'utf8mb4_spanish_ci';
```

Construye e inicializa todas las tablas de las bases de datos:

```console
$ php artisan migrate
$ php artisan db:seed
```

## Autenticación

Genera los certificados para firmar e identificar los tokens:

```console
$ php artisan jwt:secret
$ php artisan jwt:generate-certs
$ php -S localhost:8000 -t public/
```

> Utiliza [jwt-auth](https://github.com/PHP-Open-Source-Saver/jwt-auth).

Administrador inicial:

* Email: `root@celaya.gob.mx`
* Contraseña: `12345678`

## Referencias

* [Cómo elegir una licencia para su obra.](https://www.gnu.org/licenses/license-recommendations.es.html)
* [¿Qué es el copyleft?](https://www.gnu.org/licenses/copyleft.html)
* [Por qué es necesaria la GPL Affero.](https://www.gnu.org/licenses/why-affero-gpl.html)
* [Cómo utilizar las licencias de GNU para su propio software.](https://www.gnu.org/licenses/gpl-howto.es.html)
* [Documentación oficial de Lumen.](https://lumen.laravel.com/docs/9.x)
* [Documentación oficial de Laravel.](https://laravel.com/docs/9.x/)
* [Configuración de Lumen.](https://lumen.laravel.com/docs/9.x/configuration)
* [Configuración de Laravel.](https://laravel.com/docs/9.x/configuration)
* [Instalación de Lumen.](https://lumen.laravel.com/docs/9.x/installation)
* [Estructura de directorios de Laravel.](https://laravel.com/docs/9.x/structure)
* [Despliegue de aplicaciones Laravel.](https://laravel.com/docs/9.x/deployment)
* [Ciclo de vida de las peticiones con Laravel.](https://laravel.com/docs/9.x/lifecycle)
* [Contenedor de servicios de Lumen.](https://lumen.laravel.com/docs/9.x/container)
* [Contenedor de servicios de Laravel.](https://laravel.com/docs/9.x/container)
* [Proveedor de servicios de Lumen.](https://lumen.laravel.com/docs/9.x/providers)
* [Proveedor de servicios de Laravel.](https://laravel.com/docs/9.x/providers)
* [Facades de Laravel](https://laravel.com/docs/9.x/facades)
* [Rutas con Lumen.](https://lumen.laravel.com/docs/9.x/routing)
* [Rutas con Laravel.](https://laravel.com/docs/9.x/routing)
* [Control de acceso HTTP (CORS).](https://developer.mozilla.org/es/docs/Web/HTTP/CORS)
* [Middlewares con Lumen.](https://lumen.laravel.com/docs/9.x/middleware)
* [Middlewares con Laravel.](https://laravel.com/docs/9.x/middleware)
* [Protección contra ataques CSRF con Laravel.](https://laravel.com/docs/9.x/csrf)
* [PROTECCIÓN CSRF EN MI API REST.](https://youtu.be/N08q_zQlolo)
* [Cómo hacer un Ataque CSRF.](https://youtu.be/CXSE89JGnek)
* [Controladores con Lumen.](https://lumen.laravel.com/docs/9.x/controllers)
* [Controladores con Laravel.](https://laravel.com/docs/9.x/controllers)
* [Peticiones HTTP con Lumen.](https://lumen.laravel.com/docs/9.x/requests)
* [Peticiones HTTP con Laravel.](https://laravel.com/docs/9.x/requests)
* [Respuestas HTTP con Lumen.](https://lumen.laravel.com/docs/9.x/responses)
* [Respuestas HTTP con Laravel.](https://laravel.com/docs/9.x/responses)
* [Generador de URLs con Laravel.](https://laravel.com/docs/9.x/urls)
* [Sesiones HTTP con Laravel.](https://laravel.com/docs/9.x/session)
* [Validaciones con Lumen.](https://lumen.laravel.com/docs/9.x/validation)
* [Validaciones con Laravel.](https://laravel.com/docs/9.x/validation)
* [Manejo de errores con Laravel.](https://laravel.com/docs/9.x/errors)
* [Logs con Laravel](https://laravel.com/docs/9.x/logging)
* [Artisan de Laravel.](https://laravel.com/docs/9.x/artisan)
* [Uso de caché con Lumen.](https://lumen.laravel.com/docs/9.x/cache)
* [Uso de caché con Laravel.](https://laravel.com/docs/9.x/cache)
* [Colección de datos con Laravel.](https://laravel.com/docs/9.x/collections)
* [Contratos de Laravel](https://laravel.com/docs/9.x/contracts)
* [Eventos con Lumen.](https://lumen.laravel.com/docs/9.x/events)
* [Eventos con Laravel.](https://laravel.com/docs/9.x/events)
* [Almacenamiento de archivos con Laravel.](https://laravel.com/docs/9.x/filesystem)
* [Herramientas de ayuda de Laravel.](https://laravel.com/docs/9.x/helpers)
* [Cliente HTTP de Laravel.](https://laravel.com/docs/9.x/http-client)
* [Localización de idiomas con Laravel.](https://laravel.com/docs/9.x/localization)
* [Tareas en segundo plano con Lumen.](https://lumen.laravel.com/docs/9.x/queues)
* [Tareas en segundo plano con Laravel.](https://laravel.com/docs/9.x/queues)
* [Limitador de velocidad de acciones con Laravel.](https://laravel.com/docs/9.x/rate-limiting)
* [Programación de tareas con Laravel.](https://laravel.com/docs/9.x/scheduling)
* [Autenticación con Lumen.](https://lumen.laravel.com/docs/9.x/authentication)
* [Autenticación con Laravel.](https://laravel.com/docs/9.x/authentication)
* [JSON Web Tokens.](https://jwt.io/)
* [JSON Web Token en Wikipedia.](https://es.wikipedia.org/wiki/JSON_Web_Token)
* [Autenticación con JSON Web Tokens para Laravel y Lumen.](https://github.com/PHP-Open-Source-Saver/jwt-auth)
* [Autorizaciones con Lumen.](https://lumen.laravel.com/docs/9.x/authorization)
* [Autorizaciones con Laravel.](https://laravel.com/docs/9.x/authorization)
* [Cifrado de contraseñas con Laravel.](https://laravel.com/docs/9.x/hashing)
* [Bases de datos con Lumen.](https://lumen.laravel.com/docs/9.x/database)
* [Bases de datos con Laravel.](https://laravel.com/docs/9.x/database)
* [Constructor de consultas de Laravel.](https://laravel.com/docs/9.x/queries)
* [Paginación de resultados con Laravel.](https://laravel.com/docs/9.x/pagination)
* [Migración de bases de datos con Laravel.](https://laravel.com/docs/9.x/migrations)
* [Inicialización de bases de datos.](https://laravel.com/docs/9.x/seeding)
* [Eloquent ORM de Laravel.](https://laravel.com/docs/9.x/eloquent)
* [Relaciones con Eloquent de Laravel.](https://laravel.com/docs/9.x/eloquent-relationships)
* [Relación muchos a muchos para tablas pivote.](https://youtu.be/07HRysMPaKY)
* [Colecciones de datos de Eloquent con Laravel.](https://laravel.com/docs/9.x/eloquent-collections)
* [Representación de recursos para APIs con Laravel.](https://laravel.com/docs/9.x/eloquent-resources)
* [Conversión de modelos y relaciones a JSON con Laravel.](https://laravel.com/docs/9.x/eloquent-serialization)
* [Pruebas con Lumen.](https://lumen.laravel.com/docs/9.x/testing)
* [Pruebas con Laravel.](https://laravel.com/docs/9.x/testing)
* [Pruebas HTTP con Laravel.](https://laravel.com/docs/9.x/http-tests)
* [Pruebas a bases de datos con Laravel.](https://laravel.com/docs/9.x/database-testing)

## Licencia

```
API de Oficialía Mayor - Una API RESTful de sistemas web para Oficialía Mayor.

Copyright (C) 2022 - Ricardo García Jiménez <ricardogj08@riseup.net>,
                     Oficialía Mayor Celaya,Guanajuato,México <maria.ramirez@celaya.gob.mx>

Este programa es software libre: puedes redistribuirlo y/o modificarlo
bajo los términos de la Licencia Pública General de GNU Affero publicada por
la Free Software Foundation, ya sea la versión 3 de la Licencia, o
(a su elección) cualquier versión posterior.

Este programa se distribuye con la esperanza de que sea de utilidad,
pero SIN NINGUNA GARANTÍA; incluso sin la garantía implícita de
COMERCIABILIDAD o APTITUD PARA UN PROPÓSITO PARTICULAR. Consulte la
Licencia Pública General de GNU Affero para obtener más detalles.

Debería haber recibido una copia de la Licencia Pública General de GNU Affero
junto con este programa. De lo contrario, consulte <https://www.gnu.org/licenses/>.
```
