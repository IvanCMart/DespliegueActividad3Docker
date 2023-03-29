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
