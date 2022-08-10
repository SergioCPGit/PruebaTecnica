# La dona de Pancha 

Para el desarrollo de este proyecto, así como por las limitantes establecidas, se utilizaron 3 lenguajes:  PHP, CSS y HTML; así como de una base de datos funcional en phpMyAdmin.
La base de datos contiene los elementos básicos para el control y registro de nuevos productos en una panadería. Un ID para identificar individualmente cada producto, nombre del producto, Precio unitario, cantidad disponible en el almacén (Stock) y el proveedor.
![image](https://user-images.githubusercontent.com/99307324/184023730-8300a216-ce3d-4813-b8d9-c1cd11b3b172.png)
La aplicación Web cuenta con tres apartados principales:
Home, que funciona como página principal y registro de usuarios (Si bien no se terminó al apartado de usuario, se dejaron las bases establecidas).
![screencapture-localhost-Dona-html-home-html-2022-08-10-15_58_56](https://user-images.githubusercontent.com/99307324/184023880-15606498-2423-4503-af56-5fe38d338e46.png)
Registro de producto, el encargado de dar de alta a todos los artículos registrados por medio de la aplicación (No es necesario el registrar un id para cada nuevo artículo, ya que este es autoincrementado).![screencapture-localhost-Dona-html-registro-html-2022-08-10-16_00_03](https://user-images.githubusercontent.com/99307324/184023932-84f39675-0c39-4e0e-8dac-d7611551bb5e.png)
Y Stock, el cual se conecta al servidor y base de datos por medio del archivo conexión.php, para mostrar en una tabla toda la información recolectada en el apartado registro (registro.php) y por último permite actualizar un producto en específico (actualizar.php y update.php) o borrar un registro de la base de datos (borrar.php).![screencapture-localhost-Dona-php-lista-php-2022-08-10-15_59_30](https://user-images.githubusercontent.com/99307324/184024185-79687626-520c-42a0-8eec-06550fdf9e86.png)
