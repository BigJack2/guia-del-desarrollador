<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />

  <title>Guia Jhon Vanegas</title>
  <link rel="shortcut icon" href="img/icons/laravel.ico" />

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!--Fuentes ubuntu de google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/sidebars.css" rel="stylesheet" />

  <!-- Custom styles for this icons -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/estilos.css" rel="stylesheet" />

  <style></style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <?php include 'menu.php'; ?>

      <div class="col-sm-12 col-lg-9 col-xl-9 col-xxl-10 pt-2">
        <h2 class="text-center fw-bold fuente1 text-color2 mt-5 py-5">Bienvenido a la guía del Desarrollador</h2>

        <p style="text-align: justify" class="text-color5 px-lg-5">
          A continuación, encontrará una guía personalizada que le podrá proveer de material como código, comandos de
          terminal para frameworks y librerías, instalaciones y muchas cosas más.
        </p>

        <div id="laravel" class="row text-center py-3">
          <h3 class="text-color1 fw-bold fuente1 pt-5 pb-2">
            Comandos Laravel <img width="40px" style="margin-left: 14px" src="img/icons/laravel.svg" />
          </h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">laravel new my-project</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Crear nuevo proyecto en laravel.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">php artisan serve</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Nos provee del link en IP para acceder al proyecto.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">php artisan make:model NombreSingular -mfc</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Se usa para crear los modelos, <strong>m</strong> es de migración, <strong>f</strong> de factory y
                <strong>c</strong> de controller.
              </figcaption>
            </figure>

            <br />
            <br />
            <a class="btn btn-primary text-end btn-lg" target="_blank" href="https://laravel.com/docs/8.x/installation">Ir a Laravel.com <i class="bx bx-exit"></i></a>
          </div>

          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">php artisan migrate</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Carga las migraciones para crear las tablas.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">npm install</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Instala todas las librerías especificadas en el archivo <strong>package.json</strong> que se encuentra
                en la carpeta raíz del sitio.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">php artisan make:controller NombreController</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Se usa para crear el controlador.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">php artisan route:list</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Muestra el listado de las rutas.
              </figcaption>
            </figure>
          </div>
        </div>

        <div id="vue" class="row text-center bg-color2 py-3 text-color8">
          <h3 class="text-color3 fw-bold fuente1 pt-5 pb-2">
            Comandos Vuejs <img width="40px" style="margin-left: 14px" src="img/icons/vue.svg" />
          </h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm install vue</p>
              </blockquote>
              <figcaption class="blockquote-footerv fst-italic">
                Instalar vue, También se usa para agregar/mesclar o integrar Vue con Laravel, por lo general se
                ejecuta dentro de la carpeta raíz del proyecto de Laravel ya creado.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">vue --version</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                Visualizar la versión de Vue instalada.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm install vue-router</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                Instalar router en vue, es la biblioteca de enrutamiento oficial del lado del cliente que proporciona
                las herramientas necesarias para asignar los componentes de una aplicación a diferentes rutas de URL
                del navegador.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm install vue-axios</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                Instalar axios, Axios es un cliente HTTP basado en Promesas para Javascript.
              </figcaption>
            </figure>
          </div>

          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm run dev</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                Sirve para recargar todos los archivos de la página, sobre todo cuando se han hecho cambios en app.js,
                pero este solo actualiza cuando se ejecuta el comando.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm run watch</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                A diferencia de npm run dev, este se ejecuta constantemente y avisa del estado cuando se guardan
                cambios, suele usarse una terminal exclusivamente para este comando en constante ejecución.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm install vuex --save</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">Instalador de Vuex.</figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="fw-bold">npm install -g @vue/cli</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color8 fst-italic">
                Instalador de Vue CLI <strong>Interfaz gráfica de Vue.</strong>
              </figcaption>
            </figure>

            <br />
            <br />
            <a class="btn btn-warning btn-lg" style="margin-top: 5px; margin-left: 2px" target="_blank" href="https://vuex.vuejs.org/installation.html">Vuex.vuejs.org <i class="bx bx-exit"></i></a>
            <a class="btn btn-warning btn-lg" style="margin-top: 5px; margin-left: 2px" target="_blank" href="https://vuejs.org/v2/guide/">Vuejs.org <i class="bx bx-exit"></i></a>
            <a class="btn btn-warning btn-lg" style="margin-top: 5px; margin-left: 2px" target="_blank" href="https://nodejs.org/es/">Nodejs.org <i class="bx bx-exit"></i></a>
            <a class="btn btn-warning btn-lg" style="margin-top: 5px; margin-left: 2px" target="_blank" href="https://cli.vuejs.org/">Cli.vuejs.org <i class="bx bx-exit"></i></a>
          </div>
        </div>

        <div id="vsc" class="row text-center py-3">
          <h3 class="text-color6 fw-bold fuente1 pt-5 pb-2">
            Atajos de teclado Visual Studio Code
            <img width="40px" style="margin-left: 14px" src="img/icons/visual-studio-code.svg" />
          </h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Shift + Alt + A</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Documentar varias líneas según el lenguaje.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">para ver direcciones.</figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">F12</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Para ir al archivo direccionado.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Alt + F12</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">Ojear definición</figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + Shift + K</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">Borrar línea entera.</figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + Shift + L</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Editar mismos atributos de diferentes líneas.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + SHIFT + P</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">Encapsular</figcaption>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Buscar: Wrap with abbreviation debe de quedar el ng serve así
                <code>ng serve</code> <br />
                ul>li para que quede una dentro de otra Cambiar de archivo abierto.
              </figcaption>
            </figure>
          </div>

          <div class="col-sm-12 col-xl-6 p-5">
            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + TAB</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Posicionar al final de la palabra <strong>Alt</strong> Clonar línea.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Shift + Alt</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Cursor multilínea <strong>Ctrl + Alt+ ↑ / ↓</strong> Seleccionar texto seguido
                <strong>Shift + Alt + <-- /--></strong>
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + Shift + U</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Poner letras en mayúscula "uppercase".
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + Shift + L</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Poner letras en minúscula "lowercase".
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + D</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">
                Ej seleccionar varios li y editarlos.
              </figcaption>
            </figure>

            <figure class="text-start">
              <blockquote class="blockquote">
                <p class="text-color2 fw-bold">Ctrl + G</p>
              </blockquote>
              <figcaption class="blockquote-footer text-color5 fst-italic">Ir a una línea del archivo.</figcaption>
            </figure>

            <br />
            <br />
            <a class="btn btn-primary btn-lg" style="margin-top: 5px" target="_blank" href="https://code.visualstudio.com/">Ir a Visualstudio.com <i class="bx bx-exit"></i></a>
            <a class="btn btn-primary btn-lg" style="margin-top: 5px" target="_blank" href="https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf">Ir a Atajos de teclado VSC <i class="bx bx-exit"></i></a>
          </div>
        </div>

        <hr class="text-color2 my-3" />

        <div id="notas" class="row d-flex align-items-center py-3 text-center">
          <h3 class="text-center fw-bold fuente1 text-color2 pt-5 pb-2">Notas</h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quidem veritatis amet quibusdam
              officiis totam non atque! Voluptatem necessitatibus pariatur obcaecati at, cupiditate nam sit quaerat
              numquam libero ex! Nisi.
            </p>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id hic dicta sunt? Facere corrupti beatae
              omnis qui quasi quibusdam, nihil velit quia magni possimus facilis, repellat sed. Dolor, assumenda nemo?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>