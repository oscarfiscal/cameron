El repositorio contiene:

-   **_Laravel_** - RESTFULL
    <br/><br/>

# Descripción del proyecto 🚀

\_La finalidad de este proyecto es un sistema que permita ingresar los hoteles con los que cuenta la compañía,
además de los nombres básicos del hotel, se deben ingresar los datos tributarios básicos.

# Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu entorno local._

# Funcionalidades 📋

_1. Registro de hoteles_ <br>
_2. Modificar los hoteles_ <br>
_3. Visualizar Habitaciones asignadas a cada hotel_ <br>
_4. Visualizar Hoteles Existentes_ <br>

# Validaciones 📋

_1.Para la parte de los hoteles contiene una validación donde el nombre (unico), ciudad, dirección, y número de habitaciónes son campos requeridos_ <br>
_2.Tiene una validacion donde que no dejara asignar habitaciones si el hotel ya no tiene dispiniblidad_ <br>


# Base de datos 🔩

_La base de datos, esta ubicada en la raiz del proyecto con el nombre de DB.sql, anexo a esto, en el archivo .env.example se encuentra la configuracion para dicha conexión, ya es a consideracion si se pone contraseña o no, de igual manera un vez tengamos el proyecto corriendo solo seria correr migraciones (php artisan migrate)._

# Instalación 🔧

_Paso a paso que te dice lo que debes ejecutar para tener el proyecto ejecutandose_

-   ## Clonar proyecto

    ```shell
    git clone https://github.com/oscarfiscal/cameron.git
    ```

-   ## Instalar Paquetes en un solo workspace
    ```shell
    composer install
    ```
-   ## Generar la API KEY
    ```shell
    php artisan key:generate
    ```

-   ## Generar archivo .env

    ```shell
    copy .env.example .env
    ```

-   ## Ejecutar migraciones

    ```shell
    php artisan migrate
    ```

-   ## Correr el proyecto en local

    ```shell
    php artisan serve
    ```

    # Observaciones 📋
_Para que sea de conocimiento para ustedes para cada metodo aplique TDD para que fueran testeados por phpunit los test se encuentran en tests/Feature/Http/Controllers/Api para la ejecucion de estos los comandos son los siguientes_ <br>

-  ## Se ejecutaran todos los test
   ```shell
   ./vendor/bin/phpunit  o php artisan test 
   ...
 
-  ## Para ejecutar uno por uno seria algo asi
   ```shell
   ./vendor/bin/phpunit  --filter test_hotel_can_be_created
    ```

   


