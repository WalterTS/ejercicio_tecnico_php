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
6. Para generar las tablas correspondientes, tenemos que ejecutar el comando *php bin/console doctrine:schema:update --force*
7. El proyecto está instalado y listo para usarse.

### Ejecutar el proyecto

Existen 3 formas para ejecutar el proyecto:

1. Dar de alta de manera local un virtual host, haciendo referencia a la carpeta *web* del proyecto, donde tomará como index el archivo **app.php**
2. En la URL ubicarnos directamente en el archivo **web/app.php**
3. Ejecutar en consola el comando *symfony server:start* (para esta opción es necesario instalar el ejecutable de symfony) [Download Symfony](https://symfony.com/download)