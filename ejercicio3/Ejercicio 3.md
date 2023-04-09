[TOC]

# 3 Imagen en Dockerfile



Arrancamos un contenedor basado en una imagen `php:7.4-apache`. Utilizo la plantilla del *ejercicio 1*

![Captura31](./capturas/Captura31.png)



Entro en el terminal del contenedor y realizo modificaciones. En este caso, solo actualizaciones.

![Captura32](./capturas/Captura32.png)



Accedo al sitio web desde el navegador

![Captura33](./capturas/Captura33.png)



## Archivo Dockerfile y subida a DockerHub

Creamos un archivo `Dockerfile` con los parámetros necesarios para el despliegue de nuestra web

![Captura34](./capturas/Captura34.png)



Creamos la imagen desde el directorio donde tenemos el `Dockerfile`

![Captura35](./capturas/Captura35.png)



Muestro el contenido de la carpeta contenedor3, que contiene los ficheros del sitio web

![Captura36](./capturas/Captura36.png)



Compruebo que tengo la imagen que acabo de crear

![Captura37](./capturas/Captura37.png)



Inicio contenedor y ejecuto imagen que he creado

![Captura38](./capturas/Captura38.png)



Distribuimos nuestra imagen

![Captura39](./capturas/Captura39.png)

![Captura310](./capturas/Captura310.png)



Imagen subida a DockerHub

![Captura311](./capturas/Captura311.png)

![Captura312](./capturas/Captura312.png)
