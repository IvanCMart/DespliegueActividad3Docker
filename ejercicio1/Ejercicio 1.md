[TOC]

# 1.1 Servidor web



Arranco contenedor con una instancia de la imagen `php:7.4-apache`

![Captura01](./capturas/Captura01.png)



Elimino el contenedor y creo un nuevo usando *bind mount* para montar mi propio directorio y que persistan los datos

```
ivan@ivan-clienteLinux:~$ docker run -d -p 1234:80 -v /home/ivan/Documentos/tareaDocker/ejercicio1/contenedor1:/var/www/html --name servidor php:7.4-apache
```

![Captura02](./capturas/Captura02.png)



Coloco en el directorio raíz del servicio web un sitio web. Personalizo `index.html` con *Visual Studio Code*

![Captura03](./capturas/Captura03.png)

![Captura04](./capturas/Captura04.png)



Resultado:

![Captura05](./capturas/Captura05.png)



Creo el archivo `cabeceras.php`  en el mismo directorio que contiene el `index.html` y muestro el resultado:

![Captura06](./capturas/Captura06.png)



Detengo y borro el contenedor:

```
ivan@ivan-clienteLinux:~$ docker stop servidor
servidor
ivan@ivan-clienteLinux:~$ docker rm servidor
servidor
```

![Captura07](./capturas/Captura07.png)





# 1.2 Servidor de base de datos



Descargamos la imagen de `mariadb`

![Captura8](./capturas/Captura8.png)



Utilizo un fichero `docker-compose` para la creación y declaración de las variables de entorno requeridas en el enunciado

![Captura09](./capturas/Captura09.png)



Ejecutamos el fichero

![Captura10](./capturas/Captura10.png)



![Captura11](./capturas/Captura11.png)



Accedemos a la consola del contenedor y muestro la base de datos

![Captura12](./capturas/Captura12.png)



Me conecto como usuario *root* y creo la tabla *tabla1*

![Captura13](./capturas/Captura13.png)



Muestro la tabla creada

![Captura14](./capturas/Captura14.png)



Intento borrar la imagen `mariadb` y compruebo que no se permite mientras el contenedor está creado

![Captura15](./capturas/Captura15.png)

Elimino y muestro que no hay ningún contenedor

![Captura16](./capturas/Captura16.png)
