
# GameHub

Este es mi proyecto de fin de grado de Desarrollo de Aplicaciones Web, a continuación explicaré como desplegarlo en local.



## Instrucciones de instalación

Sigue estos pasos para configurar el proyecto en un entorno local:

### Paso 1: Descargar e instalar XAMPP con la versión de PHP 8.2

[XAMPP PHP 8.2](https://www.apachefriends.org/es/index.html)

### Paso 2: Clonar el proyecto y copiar los archivos

1. Clona el proyecto desde el repositorio utilizando el comando `git clone [url del repositorio]`.
2. Copia todos los archivos de la carpeta `htdocs` del directorio del proyecto clonado.

### Paso 3: Limpiar la carpeta `htdocs` de XAMPP y pegar los archivos del paso 2

1. Accede al directorio donde está instalado XAMPP.
2. Busca y elimina todo el contenido dentro de la carpeta `htdocs`.
3. Pega los archivos que copiamos en el paso 2 dentro de la carpeta `htdocs`.

### Paso 4: Importar la base de datos

1. Inicia XAMPP como administrador y asegúrate de que los servicios de Apache y MySQL estén activos.
2. Abre el panel de administración de MySQL desde el botón "Admin" en XAMPP.
3. Ve a la sección de "Importar", selecciona el archivo SQL ubicado dentro de la carpeta `db` del proyecto clonado y haz clic en "Importar".

### Paso 5: Iniciar los servicios

1. En XAMPP, asegúrate de que los servicios de Apache y MySQL estén activos.

### Paso 6: Acceder a la página

1. Abre tu navegador web y accede a `localhost`.
2. Alternativamente, puedes acceder a la página desde el panel de control de XAMPP haciendo clic en el botón "Admin" del servidor Apache.


Con estos pasos, deberías poder acceder y utilizar el proyecto en tu entorno local.
