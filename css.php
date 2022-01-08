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

        <div id="css" class="row justify-content-center py-3">
          <h3 class="text-center fw-bold fuente1 text-color2 pt-5 pb-2">
            CSS 3 <img width="40px" style="margin-left: 14px" src="img/icons/css-3.svg" />
          </h3>
          <div class="col-sm-12 col-xl-6 p-5">
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Propiedades%2520Genericas%2520o%2520de%2520reseteo%2520del%2520body%252C%2520para%2520que%2520no%2520tenga%2520propiedades%2520que%2520afecten%2520el%2520frontend%2520*%252F%250A%250A*%2520%257B%250A%2520%2520%2520%2520margin%253A%25200px%253B%250A%2520%2520%2520%2520padding%253A%25200px%253B%250A%2520%2520%2520%2520font-family%253A%2520%2522Quicksand-Regular%2522%253B%250A%2520%2520%2520%2520font-size%253A%252018px%253B%250A%2520%2520%2520%2520text-decoration%253A%2520none%253B%250A%2520%2520%2520%2520list-style-type%253A%2520none%253B%250A%257D" style="width: 100%; height: 427px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>

            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Importar%2520una%2520fuente%2520de%2520local%2520en%2520formato%2520.ttf%252C%2520se%2520usa%2520cuando%2520la%2520fuente%2520que%2520necesitamos%2520no%2520esta%2520en%2520google%2520fonts%2520*%252F%250A%250A%2540font-face%2520%257B%250A%2520%2520%2520%2520font-family%253A%2520%2522Quicksand-Regular%2522%253B%250A%2520%2520%2520%2520src%253A%2520url%28Quicksand-Regular.ttf%29%253B%250A%257D" style="width: 100%; height: 320px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>

            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Variable%2520CSS%2520en%2520Root%2520para%2520estandarizar%2520propiedades%2520genericas*%252F%250A%250A%253Aroot%2520%257B%250A%2520%2520--color%253A%2520%2523ff2d20%253B%250A%257D%250A%250A.text-color%2520%257B%250A%2520%2520color%253A%2520var%28--color%29%253B%250A%257D" style="width: 100%; height: 400px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>

            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520MEDIDAS%2520DE%2520PANTALLA%2520CON%2520MEDIAQUERYS%2520PARA%2520EL%2520WEB%2520RESPONSIVE%2520*%252F%250A%252F*%2520SE%2520TRABAJA%2520DESDE%2520LA%2520MEDIDA%2520MAS%2520PEQUE%25C3%2591A%2520A%2520LA%2520MAS%2520GRANDE%2520*%252F%250A%252F*%2520PANTALLA%2520SMARTHPHONE%2520MINIMA%2520150px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A150px%29%2520%257B%257D%250A%250A%252F*%2520PANTALLA%2520TABLET%2520DE%2520910px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A910px%29%2520%257B%257D%250A%250A%252F*%2520PANTALLA%2520MEDIANA%2520DE%25201170px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A1170px%29%2520%257B%257D%250A%250A%252F*%2520PANTALLA%2520ESTANDAR%2520DE%25201300px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A1300px%29%2520%257B%257D%250A%250A%252F*%2520PANTALLA%2520GRANDE%2520XL%2520DE%25201450px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A1450px%29%2520%257B%257D%250A%250A%252F*%2520PANTALLA%2520GRANDE%2520XXL%2520DE%25201650px%2520*%252F%250A%2540media%2520only%2520screen%2520and%2520%28min-width%253A1650px%29%2520%257B%257D" style="width: 100%; height: 670px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>
          </div>
          <div class="col-sm-12 col-xl-6 px-sm-2 p-5">
            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Scroll%2520Personalizado%2520*%252F%250A%252F*%2520Definimos%2520ancho%2520del%2520scrollbar%252C%2520en%2520este%2520caso%2520se%2520pone%2520body%2520para%2520que%2520aplique%2520al%2520scroll%2520principal%252C%2520si%2520va%2520a%2520haber%2520scroll%2520en%2520un%2520div%2520en%2520vez%2520de%2520body%2520se%2520pone%2520la%2520clase%2520o%2520el%2520id%2520*%252F%250A%250Abody%253A%253A-webkit-scrollbar%2520%257B%250A%2520%2520%2520%2520width%253A%252010px%253B%250A%257D%250A%250Abody%253A%253A-webkit-scrollbar-thumb%2520%257B%250A%2520%2520%2520%2520background%253A%2520%2523616161%253B%250A%2520%2520%2520%2520border-radius%253A%25203px%253B%250A%257D" style="width: 100%; height: 480px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>

            <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Propiedades%2520de%2520las%2520casillas%2520del%2520formulario%2520*%252F%250A%250Ainput%252C%2520textarea%2520%257B%250A%2520%2520%2520%2520height%253A%252030px%253B%250A%2520%2520%2520%2520width%253A%2520250px%253B%250A%2520%2520%2520%2520font-size%253A%252016px%253B%250A%2520%2520%2520%2520color%253A%2520%25234c4c4c%253B%250A%2520%2520%2520%2520font-weight%253A%2520bold%253B%250A%2520%2520%2520%2520text-align%253A%2520center%253B%250A%2520%2520%2520%2520border-radius%253A%25204px%253B%250A%2520%2520%2520%2520background-color%253A%2520%2523fff%253B%250A%2520%2520%2520%2520border%253A%25202px%2520solid%2520%2523fff%253B%250A%2520%2520%2520%2520padding%253A%25207px%253B%250A%257D%250A%250A%252F*%2520La%2520propiedad%2520focus%2520quita%2520esa%2520sombra%2520azul%2520en%2520el%2520borde%2520de%2520la%2520caja%2520de%2520texto*%252F%250Ainput%253Afocus%2520%257B%250A%2520%2520%2520%2520outline%253A%2520none%253B%250A%257D%250A%250Aselect%2520%257B%250A%2520%2520%2520%2520height%253A%252047px%253B%250A%2520%2520%2520%2520width%253A%2520268px%253B%250A%2520%2520%2520%2520font-size%253A%252017px%253B%250A%2520%2520%2520%2520text-align%253A%2520center%253B%250A%2520%2520%2520%2520color%253A%2520%2523757575%253B%250A%2520%2520%2520%2520font-weight%253A%2520bold%253B%250A%2520%2520%2520%2520border-radius%253A%25204px%253B%250A%2520%2520%2520%2520background-color%253A%2520%2523fff%253B%250A%2520%2520%2520%2520border%253A%25202px%2520solid%2520%2523fff%253B%250A%257D%250A%250Aselect%253Afocus%2520%257B%250A%2520%2520%2520%2520outline%253A%2520none%253B%250A%257D" style="width: 100%; height: 1086px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin" class="py-sm-5 py-xl-0">
            </iframe>
          </div>
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
          <div id="tabla" class="col-sm-12 col-xl-10 py-5">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-tabla1-tab" data-bs-toggle="tab" data-bs-target="#nav-tabla1" type="button" role="tab" aria-controls="nav-tabla1" aria-selected="true">
                  Tabla HTML
                </button>
                <button class="nav-link" id="nav-tabla2-tab" data-bs-toggle="tab" data-bs-target="#nav-tabla2" type="button" role="tab" aria-controls="nav-tabla2" aria-selected="false">
                  Tabla CSS
                </button>
              </div>
            </nav>
            <div class="tab-content px-sm-0 p-xl-4 py-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-tabla1" role="tabpanel" aria-labelledby="nav-tabla1-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Propiedades%2520de%2520las%2520tablas%252C%2520estas%2520contienen%2520estado%2520hover%2520en%2520las%2520filas%252C%2520y%2520tambien%2520alternan%2520los%2520colores%2520*%252F%250A%250A%253Ctable%253E%250A%2520%2520%253Cthead%253E%250A%2520%2520%2520%2520%253Ctr%253E%250A%2520%2520%2520%2520%2520%2520%253Cth%253ETitulo%25201%253C%252Fth%253E%250A%2520%2520%2520%2520%2520%2520%253Cth%253ETitulo%25202%253C%252Fth%253E%250A%2520%2520%2520%2520%2520%2520%253Cth%253ETitulo%25203%253C%252Fth%253E%250A%2520%2520%2520%2520%253C%252Ftr%253E%250A%2520%2520%253C%252Fthead%253E%250A%2520%2520%253Ctr%253E%250A%2520%2520%2520%2520%253Ctd%253ETexto%25201%253C%252Ftd%253E%250A%2520%2520%2520%2520%253Ctd%253ETexto%25202%253C%252Ftd%253E%250A%2520%2520%2520%2520%253Ctd%253ETexto%25203%253C%252Ftd%253E%250A%2520%2520%253C%252Ftr%253E%250A%253C%252Ftable%253E" style="width: 100%; height: 537px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>

              <div class="tab-pane fade" id="nav-tabla2" role="tabpanel" aria-labelledby="nav-tabla2-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Propiedades%2520de%2520las%2520tablas%252C%2520estas%2520contienen%2520estado%2520hover%2520en%2520las%2520filas%252C%2520y%2520tambien%2520alternan%2520los%2520colores%2520*%252F%250A%250Atable%2520%257B%250A%2520%2520%2520%2520margin%253A%2520auto%253B%250A%2520%2520%2520%2520background-color%253A%2520white%253B%250A%2520%2520%2520%2520text-align%253A%2520left%253B%250A%2520%2520%2520%2520border-collapse%253A%2520collapse%253B%250A%2520%2520%2520%2520width%253A%2520910px%253B%250A%2520%2520%2520%2520left%253A%25200%2525%253B%250A%257D%250Ath%252C%2520td%2520%257B%250A%2520%2520%2520%2520padding%253A%252010px%253B%250A%2520%2520%2520%2520border-right%253A%2520solid%25201px%2520%2523F5F5F5%253B%250A%257D%250Athead%2520%257B%250A%2520%2520%2520%2520background-color%253A%2520%252352BAD5%253B%250A%2520%2520%2520%2520border-bottom%253A%2520solid%25201px%2520%2523fff%253B%250A%2520%2520%2520%2520color%253A%2520white%253B%250A%2520%2520%2520%2520text-align%253A%2520center%253B%250A%257D%250Atr%253Anth-child%28even%29%2520%257B%250A%2520%2520%2520%2520background-color%253A%2520%2523E0E0E0%253B%250A%257D%250Atr%253Ahover%2520td%2520%257B%250A%2520%2520%2520%2520background-color%253A%2520%252352BAD5%253B%250A%2520%2520%2520%2520color%253A%2520white%253B%250A%257D" style="width: 100%; height: 830px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>
            </div>
          </div>

          <div id="fantasma" class="col-sm-12 col-xl-10 py-5">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-boton1-tab" data-bs-toggle="tab" data-bs-target="#nav-boton1" type="button" role="tab" aria-controls="nav-boton1" aria-selected="true">
                  Boton fantasma HTML
                </button>
                <button class="nav-link" id="nav-boton2-tab" data-bs-toggle="tab" data-bs-target="#nav-boton2" type="button" role="tab" aria-controls="nav-boton2" aria-selected="false">
                  Boton fantasma CSS
                </button>
              </div>
            </nav>

            <div class="tab-content px-sm-0 p-xl-4 py-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-boton1" role="tabpanel" aria-labelledby="nav-boton1-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%253Ca%2520class%253D%2522buttom_2%2522%2520href%253D%2522%2523link_servicio%2522%253EBoton%2520fantasma%253C%252Fa%253E" style="width: 100%; height: 141px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>

              <div class="tab-pane fade" id="nav-boton2" role="tabpanel" aria-labelledby="nav-boton2-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Propiedades%2520de%2520un%2520estilo%2520de%2520boton%2520llamado%2520boton%2520fantasma%2520el%2520cual%2520no%2520tiene%2520color%2520de%2520fondo%252C%2520muy%2520util%2520para%2520ubicarlo%2520sobre%2520imagenes%2520con%2520propiedad%2520blur%2520*%252F%250A.buttom_2%2520%257B%250A%2520%2520%2520%2520border%253A%25202px%2520solid%2520%2523757575%253B%250A%2520%2520%2520%2520color%253A%2520%2523757575%253B%250A%2520%2520%2520%2520font-family%253A%2520%2522Quicksand-Regular%2522%253B%250A%2520%2520%2520%2520text-align%253A%2520center%253B%250A%2520%2520%2520%2520font-weight%253A%2520bold%253B%250A%2520%2520%2520%2520padding%253A%252020px%253B%250A%2520%2520%2520%2520margin%253A%25204px%253B%250A%2520%2520%2520%2520cursor%253A%2520pointer%253B%250A%2520%2520%2520%2520border-radius%253A%25205px%253B%250A%2520%2520%2520%2520text-decoration%253A%2520none%253B%250A%257D%250A.buttom_2%253Ahover%2520%257B%250A%2520%2520%2520%2520border%253A%25202px%2520solid%2520%252352bad5%253B%250A%2520%2520%2520%2520color%253A%2520%252352bad5%253B%250A%2520%2520%2520%2520transition%253A%25200.4s%253B%250A%257D" style="width: 100%; height: 630px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>
            </div>
          </div>

          <div id="link" class="col-sm-12 col-xl-10 py-5">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-boton3-tab" data-bs-toggle="tab" data-bs-target="#nav-boton3" type="button" role="tab" aria-controls="nav-boton3" aria-selected="true">
                  Boton HTML
                </button>
                <button class="nav-link" id="nav-boton4-tab" data-bs-toggle="tab" data-bs-target="#nav-boton4" type="button" role="tab" aria-controls="nav-boton4" aria-selected="false">
                  Boton CSS
                </button>
              </div>
            </nav>

            <div class="tab-content px-sm-0 p-xl-4 py-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-boton3" role="tabpanel" aria-labelledby="nav-boton3-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%253C%21--%2520Boton%2520sencillo%252C%2520se%2520usa%2520para%2520etiquetas%2520a%252C%2520intercambia%2520el%2520color%2520segun%2520la%2520intension%2520que%2520desees%2520en%2520el%2520crud%2520--%253E%250A%250A%253Ca%2520class%253D%2522buttom_create%2522%2520href%253D%2522%2522%253EBoton%2520link%253C%252Fa%253E" style="width: 100%; height: 221px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>

              <div class="tab-pane fade" id="nav-boton4" role="tabpanel" aria-labelledby="nav-boton4-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Boton%2520sencillo%252C%2520se%2520usa%2520para%2520etiquetas%2520a%252C%2520intercambia%2520el%2520color%2520segun%2520la%2520intension%2520que%2520desees%2520en%2520el%2520crud%2520*%252F%250A%252F*%2520Boton%2520azul%2520normal%253A%2520%252303a9f4%252C%2520hover%253A%2520%25230277bd%2520*%252F%250A%252F*%2520Boton%2520verde%2520normal%253A%2520%25234CAF50%252C%2520hover%253A%2520%2523388E3C%2520*%252F%250A%252F*%2520Boton%2520rojo%2520normal%253A%2520%2523ff4444%252C%2520hover%253A%2523CC0000%2520*%252F%250A.buttom_create%2520%257B%2520%2520%2520%2520%2520%2520%250A%2520%2520%2520%2520font-size%253A%252016px%253B%250A%2520%2520%2520%2520border-radius%253A%25205px%253B%250A%2520%2520%2520%2520color%253A%2520%2523fff%253B%250A%2520%2520%2520%2520font-weight%253A%2520bold%253B%250A%2520%2520%2520%2520text-decoration%253A%2520none%253B%250A%2520%2520%2520%2520background-color%253A%2520%252303a9f4%253B%250A%2520%2520%2520%2520padding%253A%252015px%253B%250A%2520%2520%2520%2520cursor%253A%2520pointer%253B%250A%257D%250A.buttom_create%253Ahover%2520%257B%250A%2520%2520%2520%2520background-color%253A%2520%25230277bd%253B%250A%2520%2520%2520%2520color%253A%2520%2523fff%253B%250A%2520%2520%2520%2520transition%253A%25200.5s%253B%250A%257D" style="width: 100%; height: 650px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>
            </div>
          </div>

          <div id="paginador" class="col-sm-12 col-xl-10 py-5">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-boton5-tab" data-bs-toggle="tab" data-bs-target="#nav-boton5" type="button" role="tab" aria-controls="nav-boton5" aria-selected="true">
                  Boton paginador HTML
                </button>
                <button class="nav-link" id="nav-boton6-tab" data-bs-toggle="tab" data-bs-target="#nav-boton6" type="button" role="tab" aria-controls="nav-boton6" aria-selected="false">
                  Boton paginador CSS
                </button>
              </div>
            </nav>

            <div class="tab-content px-sm-0 p-xl-4 py-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-boton5" role="tabpanel" aria-labelledby="nav-boton5-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=htmlmixed&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Esta%2520es%2520una%2520clase%2520para%2520crear%2520botones%2520que%2520sirven%2520de%2520paginador%2520para%2520tablas%2520que%2520contengan%2520muchos%2520registros%2520paginados%2520*%252F%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253EPrimera%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E1%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E2%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E3%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E4%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E5%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253E6%253C%252Fa%253E%250A%253Ca%2520class%253D%2522buttom_page%2522%2520href%253D%2522%2523%2522%253EUltima%253C%252Fa%253E" style="width: 100%; height: 500px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>

              <div class="tab-pane fade" id="nav-boton6" role="tabpanel" aria-labelledby="nav-boton6-tab">
                <iframe src="https://carbon.now.sh/embed?bg=rgba%28255%2C255%2C255%2C0%29&t=monokai&wt=none&l=css&ds=false&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=5px&ph=4px&ln=false&fl=1&fm=MonoLisa&fs=18px&lh=148%25&si=false&es=4x&wm=false&code=%252F*%2520Esta%2520es%2520una%2520clase%2520para%2520crear%2520botones%2520que%2520sirven%2520de%2520paginador%2520para%2520tablas%2520que%2520contengan%2520muchos%2520registros%2520paginados%2520*%252F%250A.buttom_page%2520%257B%250A%2520%2520%2520%2520font-size%253A%252016px%253B%250A%2520%2520%2520%2520color%253A%2520%25234c4c4c%253B%250A%2520%2520%2520%2520font-weight%253A%2520bold%253B%250A%2520%2520%2520%2520text-decoration%253A%2520none%253B%250A%2520%2520%2520%2520background-color%253A%2520%2523fff%253B%250A%2520%2520%2520%2520padding%253A%25208px%253B%250A%2520%2520%2520%2520border-radius%253A%252020px%253B%250A%2520%2520%2520%2520border%253A%2520solid%25201px%2520%2523e0e0e0%253B%250A%2520%2520%2520%2520cursor%253A%2520pointer%253B%250A%257D%250A.buttom_page%253Ahover%2520%257B%250A%2520%2520%2520%2520background-color%253A%2520%2523e0e0e0%253B%250A%2520%2520%2520%2520color%253A%2520%25234c4c4c%253B%250A%2520%2520%2520%2520transition%253A%25200.5s%253B%250A%257D" style="width: 100%; height: 600px; border: 0; transform: scale(1); overflow: hidden" sandbox="allow-scripts allow-same-origin">
                </iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>