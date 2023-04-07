# 2 Redes y almacenamiento

## Despliegue de contenedores en red: Adminer y MariaDB

Creamos la red bridge `bdnet`

![Captura21](./capturas2/Captura21.png)

Creamos contenedor `mariaDB` en la red `bdnet`. Se ejecuta en segundo plano, accesible desde el puerto 3306. Definimos contraseña *root* y volumen de datos persistente

![Captura22](./capturas2/Captura22.png)

Creamos contenedor `Adminer` que se pueda conectar al contenedor de la base de datos

![Captura23](./capturas2/Captura23.png)

Utilizo `Adminer` para conectarme a la base de datos

![Captura24](./capturas2/Captura24.png)

Creo la base de datos *despliegue*

![Captura25](./capturas2/Captura25.png)

Muestro los datos generados por el contenedor de base de datos

![Captura26](./capturas2/Captura26.png)

Borrado de contenedores, red y volúmenes utlizados

![Captura27](./capturas2/Captura27.png)
