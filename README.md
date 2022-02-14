#  PRUEBA PROIMPO 
Este proyecto se realiza para dar continuidad al proceso de selección de la empresa PROIMPO, en donde se genera una aplicación en la que el usuario se puede loguear, registrar, rellenar un formulario de contacto y poder ver la consulta del mismo. Se realiza conforme a los requerimientos del cliente en donde se implementa PHP(Version 8.1.2), HTML, CSS, Javascript, Ajax, Jquery. Para el desarrollo de la aplicación se utiliza el servidor local XAMPP.
## Instalación
### 1 Paso
- **1 forma**. Dar clic en Code y luego en Donwload Zip, para que posteriormente sea colocado el repositorio en la ruta **"C:\xampp\htdocs"**
- **2 forma.** Crear una carpeta(Preferiblemente en la ruta **"C:\xampp\htdocs"**), ingresar a git bash y ejecutar
```
git clone https://github.com/Logicainformatica18/bodegainformatica.git
```
### 2 Paso
- Ingresar al servidor y posterior a phpMyAdmin
- Crear una base de datos con el nombre **pruebaproimpo**
![](https://github.com/fandres1112/pruebaproimpo/blob/main/images/crearbdphpmyadmin.png?raw=true)
- Luego restaurar o importar la base de datos **"pruebaproimpo.sql"**
### 3 Paso
- Configurar la contraseña en el archivo **modelo/conexionbd.php**
- Configurar el usuario en el archivo **modelo/conexionbd.php**
## Vista previa de la aplicación
- Formulario de Login
- ![](https://github.com/fandres1112/pruebaproimpo/blob/main/images/login.png?raw=true)
- Formulario de Registro
- ![](https://github.com/fandres1112/pruebaproimpo/blob/main/images/registro.png?raw=true)
- Cuando el usuario inicie sesión accederá a la pagina de "inicio" en la que se encuentra el formulario de Contacto
- ![](https://github.com/fandres1112/pruebaproimpo/blob/main/images/contacto.png?raw=true)
- En la parte superior el usuario podrá navegar, debe seleccionar la opción **"Consulta"**
- ![](https://github.com/fandres1112/pruebaproimpo/blob/main/images/consulta.png?raw=true)
#### Fabian Jaramillo
