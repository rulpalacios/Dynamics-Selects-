## Instalación

+ Después de descargar el proyecto entramos a este.

        $ cd nombreRepositorio

+ Ejecutamos el siguiente comando.

        $ composer install
    
+ Modificamos el nombre del archivo __.env.example.__ por __.env__ y agregamos nuestras credenciales.


+ Generamos una key para nuestra app.

         $ php artisan key:generate

+ Ejecutamos las migraciones.

         $ php artisan migrate

+ Listo ya podemos ejecutar el proyecto.

        $ php artisan serve
