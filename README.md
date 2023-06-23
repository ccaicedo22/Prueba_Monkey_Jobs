
# MONKEY JOBS - API 
## Carlos Andres Balaguera Caicedo -  MONKEY JOBS

## Prueba realizada del 23/06/2023 al 24/06/2023
Bienvenido. Esta es la prueba técnica para validar mis conocimientos y fortalezas en el mundo del Backend utilizando laravel, demostrando así mi capacidad de arquitectura de codigo, patrones de diseño, clean code,  REST y demás para el mundo de  MONKEY JOBS.

# Contenido
* Modelo relacional de mi base de datos.
* Patron de diseño.
* Herramientas de desarrollo utilizadas.
* ¿Deseas probas la api en POSTMAN?
* Un poco sobre mí 😀

## MODELO RELACIONAL DE MI BASE DE DATOS
Para la base de datos llamada apicrud tomé como referencia 2 tablas: una de datos llamada users donde se almacena todos los datos de los usuarios y otra llamada type_documents donde se almacenan los tipos de documentos que hay, en este caso se crearon 4 tipos , donde estas tablas poseen una relación de uno a uno .

![Image text](https://github.com/ccaicedo22/Prueba_Monkey_Jobs/blob/main/public/images/tablas.png)

## Instalación:
1.Crear una base de datos mysql con el nombre "apicrud"

2.Clonar o descargar el proyecto en el directorio de tu servidor web

3.Acceder mediante terminal a la carpeta del proyecto

4.Ejecutar:  Composer install

5.Crear el archivo .env con los comandos:  cp .env.example .env

6.Generar la API key ejecutando:  php artisan key:generate 

7.En el archivo .env colocar el nombre de la base de datos que se va a utilizar en este caso "apicrud"

8.Para ejecutar las migraciones: php artisan migrate --seed


## PATRON DE DISEÑO
se utiliza el patrón MVC en Laravel:

1.Modelo (Model):
El modelo representa la capa de datos de la aplicación. En Laravel, los modelos se encuentran en el directorio "app/Models" y se utilizan para interactuar con la base de datos. 

2.Vista (View):
La vista es la capa de presentación de la aplicación. En Laravel, las vistas se encuentran en el directorio "resources/views" y contienen el código HTML que se envía al navegador del usuario.

3.Controlador (Controller):
El controlador es la capa que maneja las solicitudes y coordina la interacción entre el modelo y la vista. En Laravel, los controladores se encuentran en el directorio "app/Http/Controllers" y son responsables de recibir las solicitudes HTTP, procesar los datos necesarios y devolver una respuesta.

## HERRAMIENTAS DE DESARROLLO UTILIZADAS
* Laravel Framework v - 10.13.5
* PHP 8.2.4 
* visual studio code
* postman
* xampp
* MySQL workbench
* Git
* GitHub

## ¿DESEAS PROBAR LA API EN POSTMAN?
Adjunto la coleccion de postman con la que realice pruebas que se encuentra en un drive para que puedan descargarla e importarla donde la variable ({{DOMAIN}}/ es igual a tener http://127.0.0.1:8000/api ). 
https://drive.google.com/file/d/1YhIh9vzQfShB87k9I-nmKzKZctYcJFK7/view?usp=sharing

## SOBRE MÍ
Espero con ansias ser parte de MONKEY JOBS, aportar mis conocimientos y aptitudes, como también tener la posibilidad de ser un pilar en el engranaje encargado del crecimiento de la empresa. Quiero fortalecerme como profesional y siento que MONKEY JOBS es la oportunidad que necesito. Muchas gracias 😀
