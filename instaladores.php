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

      <div class="col-sm-12 col-lg-9 col-xl-9 col-xxl-10 pt-5 mt-3">        

        <h2 class="text-center fw-bold fuente1 text-color2 py-2">Instaladores</h2>

        <div id="instaladores" class="row d-flex align-items-center py-3 text-center">
          <h3 class="text-color7 fw-bold fuente1 pt-5 pb-2">Instalar y configurar Xampp</h3>

          <div class="col-sm-12 col-xl-3 p-5">
            <a href="https://www.apachefriends.org/es/index.html" target="_blank"><img src="img/icons/xampp.svg" width="220px" /></a>
          </div>
          <div class="col-sm-12 col-xl-3 p-5">
            <h4 class="text-color1">!!! Importante ¡¡¡</h4>
            <p class="text-color5">
              Es importante tener en cuenta que para trabajar Laravel se requiere la última versión de Xampp que
              <strong>tenga PHP 8</strong>, En cambio para trabajar PHP nativo se requiere
              <strong>la última versión de PHP5</strong>.
            </p>
          </div>
          <div class="col-sm-12 col-xl-6 p-0 px-md-5">
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=text&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=7px&ph=0px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=176%25&si=false&es=4x&wm=false&code=short_open_tag%2520en%2520ON%250Amemory_limit%2520%253D%2520256M%250Apost_max_size%2520%253D%25200M%2520%2520%252F%252F%2520cero%2520para%2520desactivar%2520limite%250Aupload_max_filesize%2520%253D%2520150M" style="width: 100%; height: 240px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
            </iframe>
          </div>
        </div>

        <div id="vue2" class="row d-flex align-items-center py-3 text-center bg-color2 text-color8">
          <h3 class="text-color3 fw-bold fuente1 pt-5 pb-2">
            Instalar y configurar Vuejs
            <img width="40px" style="margin-left: 14px" src="img/icons/vue.svg" />
          </h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Antes de comenzar con Vue o Laravel es importante tener NodeJS instalado en el Pc:
            </p>
            <br />
            <a class="btn btn-warning btn-lg" target="_blank" href="https://nodejs.org/es/">Ir a NodeJS <i class="bx bx-exit"></i></a>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Vue.js es un framework de JavaScript de código abierto para la construcción de interfaces de usuario y
              aplicaciones de una sola página:
            </p>
            <br />
            <a class="btn btn-warning btn-lg" target="_blank" href="https://vuejs.org/v2/guide/">Ir a Vue <i class="bx bx-exit"></i></a>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Sin embargo, también tenemos a <strong>Vuex</strong> es una librería creada por Vue, el cual nos permite
              tener datos globales para poder usarlos en cada uno de los componentes, para el uso en mutaciones,
              componentes y estados que se pueden encontrar en el siguiente botón:
            </p>
            <br />
            <a class="btn btn-warning btn-lg" target="_blank" href="https://vuex.vuejs.org/">Ir a Vuex <i class="bx bx-exit"></i></a>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify">
              Vue tiene su vue-cli, es decir la interfaz de línea de comandos de Vue que es una herramienta creada por
              el equipo de Vue para ayudar con la creación del scaffolding y la configuración inicial del proyecto:
            </p>
            <br />
            <a class="btn btn-warning btn-lg" target="_blank" href="https://nodejs.org/es/">Ir a VueCLI <i class="bx bx-exit"></i></a>
          </div>

          <div class="col-sm-12 p-0 px-md-5">
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%253C%21--%2520CDN%2520development%2520version%252C%2520includes%2520helpful%2520console%2520warnings%2520--%253E%250A%253Cscript%2520src%253D%2522https%253A%252F%252Fcdn.jsdelivr.net%252Fnpm%252Fvue%25402%252Fdist%252Fvue.js%2522%253E%253C%252Fscript%253E%250A%250A%253C%21--Instalador%2520de%2520Vuex--%253E%250Anpm%2520install%2520vuex%2520--save%250A%250A%253C%21--Ver%2520que%2520version%2520de%2520Vue%2520tenemos--%253E%250Avue%2520--version%250A%250A%253C%21--Cuando%2520se%2520usa%2520con%2520un%2520sistema%2520de%2520m%25C3%25B3dulos%252C%2520debe%2520instalar%2520expl%25C3%25ADcitamente%2520Vuex%2520como%2520un%2520complemento%253A--%253E%250Aimport%2520Vue%2520from%2520%27vue%27%250Aimport%2520Vuex%2520from%2520%27vuex%27%250A%250AVue.use%28Vuex%29%250A%253C%21--Instalar%2520Vue%2520CLI--%253E%250Anpm%2520install%2520-g%2520%2540vue%252Fcli" style="width: 100%; height: 600px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
            </iframe>
          </div>
        </div>

        <div id="laravel2" class="row text-center d-flex align-items-center py-3">
          <h3 class="text-color1 fw-bold fuente1 pt-5 pb-2">Instalar y configurar Laravel y Composer</h3>
          <div class="col-sm-12 col-xl-6 py-5">
            <a href="https://www.apachefriends.org/es/index.html" target="_blank"><img src="img/icons/composer.svg" width="30%" /></a>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <p style="text-align: justify" class="text-color5">
              Para poder hacer uso de Laravel primero se debe tener instalado:
              <br /><br />
              <center>
                <a class="btn btn-primary btn-lg" target="_blank" href="https://getcomposer.org/download/">Ir a Composer <i class="bx bx-exit"></i></a>
              </center>
              <br /><br />
              La versión de laravel que se instalará corresponderá a la versión de PHP que tenga instalado en el
              Xampp, en este caso
              <strong>deberá ser igual o mayor a 7.3 para que se instale Laravel 8</strong>.
            </p>
          </div>
          <div class="col-sm-12 col-xl-6 p-5">
            <img src="img/icons/laravel.svg" width="30%" />
          </div>
          <div class="col-sm-12 col-xl-6 p-0 px-md-5">
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%253C%21--%2520Instalacion%2520de%2520laravel%2520unica%2520vez%252Cdebera%2520hacerse%2520en%2520la%2520carpeta%2520htdocs%2520--%253E%250Acomposer%2520global%2520require%2520laravel%252Finstaller" style="width: 100%; height: 230px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
            </iframe>
          </div>
        </div>

        <div id="vscode" class="row text-center py-3">
          <h3 class="text-color6 fw-bold fuente1 fw-bold fuente1 pt-5 pb-2">
            Plugins Visual Studio Code
            <img width="40px" style="margin-left: 14px" src="img/icons/visual-studio-code.svg" />
          </h3>
          <div class="col-sm-12 col-xl-4 p-5">
            <img src="img/vsc/plugins1.png" width="100%" />
          </div>
          <div class="col-sm-12 col-xl-4 p-5">
            <img src="img/vsc/plugins2.png" width="100%" />
          </div>
          <div class="col-sm-12 col-xl-4 p-5">
            <img src="img/vsc/plugins3.png" width="100%" />
            <br /><br />
            <h4 class="text-color1">!!! Importante ¡¡¡</h4>
            <p style="text-align: justify" class="text-color5">
              El recomendable asociar la configuración a una cuenta de Girhub o Outlook, ya que guarda la
              configuración de los plugins y settings.json aunque deberá ser necesario revisar y configurar lo poco
              que haga falta.
            </p>
            <br />
            <a class="btn btn-primary btn-lg" href="https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf" target="_blank">Ir a configuración atajos de teclado <i class="bx bx-exit"></i></a><br /><br />
          </div>
          <div class="col-sm-12 p-0 px-md-5">
            <h3 class="text-color6 fw-bold fuente1 p-5">
              Configuración Visual Studio Code
              <img width="40px" style="margin-left: 14px" src="img/icons/visual-studio-code.svg" />
            </h3>
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=text&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=7px&ph=0px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=110%25&si=false&es=4x&wm=false&code=%257B%250A%2520%2520%2520%2520%2522editor.tabSize%2522%253A%25202%252C%250A%2520%2520%2520%2520%2522editor.fontSize%2522%253A%252018%252C%250A%2520%2520%2520%2520%2522workbench.colorTheme%2522%253A%2520%2522One%2520Dark%2520Pro%2522%252C%250A%2520%2520%2520%2520%2522editor.fontFamily%2522%253A%2520%2522Source%2520Code%2520Pro%2522%252C%250A%2520%2520%2520%2520%2522workbench.iconTheme%2522%253A%2520%2522material-icon-theme%2522%252C%250A%2520%2520%2520%2520%2522editor.minimap.maxColumn%2522%253A%252080%252C%250A%2520%2520%2520%2520%2522terminal.integrated.defaultProfile.windows%2522%253A%2520%2522Git%2520Bash%2522%252C%250A%2520%2520%2520%2520%2522terminal.integrated.fontFamily%2522%253A%2520%2522Source%2520Code%2520Pro%2522%252C%250A%2520%2520%2520%2520%2522window.zoomLevel%2522%253A%25201%252C%250A%2520%2520%2520%2520%2522php.executablePath%2522%253A%2520%2522C%253A%252Flaragon%252Fbin%252Fphp%252Fphp-7.4.19-Win32-vc15-x64%252Fphp.exe%2522%252C%250A%2520%2520%2520%2520%2522php.validate.executablePath%2522%253A%2520%2522C%253A%252Flaragon%252Fbin%252Fphp%252Fphp-7.4.19-Win32-vc15-x64%252Fphp.exe%2522%252C%250A%2520%2520%2520%2520%2522security.workspace.trust.untrustedFiles%2522%253A%2520%2522open%2522%252C%250A%2520%2520%2520%2520%2522git.autofetch%2522%253A%2520true%252C%250A%2520%2520%2520%2520%2522git.enableSmartCommit%2522%253A%2520true%252C%250A%2520%2520%2520%2520%2522liveServer.settings.donotShowInfoMsg%2522%253A%2520true%252C%250A%2520%2520%2520%2520%2522html.format.wrapLineLength%2522%253A%2520100%252C%250A%2520%2520%2520%2520%2522terminal.explorerKind%2522%253A%2520%2522external%2522%252C%250A%2520%2520%2520%2520%2522terminal.external.windowsExec%2522%253A%2520%2522C%253A%255C%255CProgram%2520Files%255C%255CGit%255C%255Cgit-bash.exe%2522%252C%250A%2520%2520%2520%2520%2522%255Bhtml%255D%2522%253A%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2522editor.defaultFormatter%2522%253A%2520%2522esbenp.prettier-vscode%2522%250A%2520%2520%2520%2520%257D%252C%250A%2520%2520%2520%2520%2522bladeFormatter.format.indentSize%2522%253A%25202%252C%250A%2520%2520%2520%2520%2522terminal.integrated.fontSize%2522%253A%252013%252C%250A%2520%2520%2520%2520%2522%255Bvue%255D%2522%253A%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2522editor.defaultFormatter%2522%253A%2520%2522octref.vetur%2522%250A%2520%2520%2520%2520%257D%252C%250A%2520%2520%2520%2520%2522%255Bjavascript%255D%2522%253A%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2522editor.defaultFormatter%2522%253A%2520%2522vscode.typescript-language-features%2522%250A%2520%2520%2520%2520%257D%252C%250A%2520%2520%2520%2520%2522prettier.printWidth%2522%253A%2520110%252C%250A%2520%2520%2520%2520%250A%257D" style="width: 100%; height: 900px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
            </iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>