# Ejercicio técnico php para polygon

### Instrucciones:

**Debe tener instalado composer para poder instalar las librerías necesarias para el proyecto**

1. Clonar el repositorio
2. Nos situamos en el path del proyecto
3. Ejecutamos el comando *composer install*
4. Para este punto tenemos 2 opciones:
	* Creamos una base de datos manualmente donde se ejecutarán los querys, y le indicamos al wizard nuestra base destino.
	* Generamos una base de datos con el comando *php bin/console doctrine:database:create*
5. A continuación la consola nos preguntará los datos de conexión para generar el archivo **parameters.yml** (en caso de no haber creado una base de datos previo al composer install, podemos completar la información de conexión manualmente en el archivo **parameters.yml** ubicado en app/config)
	* Para evitar un posible error con el bundle preinstalado *SwiftMailer* (que para este demo no se usará), es necesario no dejar en blanco las opciones de **mailer_user** y **mailer_password**
6. Para generar las tablas correspondientes, tenemos que ejecutar el comando *php bin/console doctrine:schema:update --force*
7. El proyecto está instalado y listo para usarse.


### Instalar assets, caché, etc.
Para un correcto uso del demo, es necesario ejecutar los siguientes comandos en consola, en la raíz del proyecto.

1. php bin/console cache:clear --env=prod
2. php bin/console assets:install --env=prod
3. php bin/console assetic:dump --env=prod
4. php bin/console cache:warmup --env=prod


### Ejecutar el proyecto

Existen 3 formas para ejecutar el proyecto:

1. Dar de alta de manera local un virtual host, haciendo referencia a la carpeta *web* del proyecto, donde tomará como index el archivo **app.php**
2. En la URL ubicarnos directamente en el archivo **web/app.php**
3. Ejecutar en consola el comando *symfony server:start* (para esta opción es necesario instalar el ejecutable de symfony) [Download Symfony](https://symfony.com/download)
