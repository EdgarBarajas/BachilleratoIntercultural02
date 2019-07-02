<?php session_start(); include_once("../private/conexion.php"); ?>
<?php function multiexplode ($delimiters,$string) {
   
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
} ?>
<?php 
if (!empty($_SESSION['nombre_alumno']) && !empty($_SESSION['correo_alumno']) && !empty($_SESSION['semestre_alumno'])) {
  $nombre = $_SESSION['nombre_alumno'];
  $correo = $_SESSION['correo_alumno'];
  $semestre = $_SESSION['semestre_alumno'];

  $semestre1 = 'MATEMÁTICAS I,FISICA I,QUIMICA I,CONTEXTO SOCIAL NAL. REG. COMUNITARIO,CULTURA Y LENGUA INDIGENA I,ESPAÑOL I,INGLES I,TIC I,VINULACIÓN COMUNITARIA';

  $semestre2 = '
  MATEMÁTICAS II
  BIOLOGIA I
  HIST. DE MÉXICO Y C.
  CULTURA Y LENGUA II
  ESPAÑOL II
  INGLES II
  TIC II 
  FORMACION PROF. TEC
  VINCULACION COMUNITARIA II';

  $semestre3 = '
  MATEMATICAS III
  FISICA II
  GEOGRAFIA
  HIST. DE MEXICO Y C. II
  CULTURA Y LENGUA INDIGENA  III 
  ESPAÑOL III
  INGLES III
  FORMACION PROF. TEC  II 
  VINCULACION COMUNITARIA III';

  $semestre4 = '
  MATEMATICAS IV 
  QUIMICA II
  LITERATURA  LOCA Y REG 
  CULTURA Y LENGUA INDIGENA  IV 
  ESPAÑOL IV
  INGLES IV
  FORMACION PROF. TEC  III
  VINCULACION COMUNITARIA IV';

  $semestre5 = '
  MATEMATICAS APLICADAS
  BIOLOGIA II 
  FORMACION ETICA
  CULTURA Y LENGUA INDIGENA V
  ESPAÑOL V
  INGLES V
  TIC III 
  FORMACION PROF. TEC  IV
  VINCULACION COMUNITARIA V
  FORM. PROP. TEMAS CS.';

  $semestre6 = '
  MATEMATICAS APLICADAS II
  ECOLOGIA Y MEDIO AMBIENTE  
  FILOSOFIA
  PROYECTO DISC. DEL CAMPO DE C.
  TIC IV
  FORMACION PROF. TEC. II
  VINCULACION COMUNITARIA VI
  FORM. PROP. LIT.'; 


?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  
  <link rel="icon" type="text/css" href="images/logo.ico">

  <title>Estudiantes</title>
</head>
<body class="">

  <!-- Menu de Navegación -->
  <header class="  bg-blanco">
    <div class="container">
      <div class="row pt-2">
        <div class="col-md-4  offset-md-4 text-center">
          <img width="100 " class="" src="../images/logo2.png">
          <img width="100" class="" src="../images/logo3.png">
        </div>
      </div>
    </div>
  </header>
  <header  class="sticky-top  bg-blanco">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" href="../index.html">
        <img width="50" src="../images/logo.jpeg">
      </a>
      <div class="azul ol"><h6>BACHILLERATO INTERCULTURAL 02</h6></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i style="border-radius: 100%; border:3px solid  #346cc7;" class="fas fa-home azul p-2"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link azul" href="../index.html">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="identidad.html">Identidad</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="mapa.html">Mapa Curricular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Estudiantes
            </a>
            <form>
            <div class="dropdown-menu text-center form-group" aria-labelledby="navbarDropdown">
              <button class="bg-azul btn-block blanco" type="button" data-toggle="collapse" data-target="#collapsea" aria-expanded="false" aria-controls="collapseExample">
              Formatos
              </button>
              <div class="collapse" id="collapsea">
                <div class="card card-body">
                    <a class="dropdown-item" href="../docs/solicitud_estatal_de_preinscripcion_general.xls" target="_blank">Preinscripciones</a>
                    <a class="dropdown-item" href="../docs/formato_inscripcion.doc" target="_blank">Inscripciones</a>
                </div>
              </div>

             
              <button class="bg-azul btn-block blanco" type="button" data-toggle="collapse" data-target="#collapseb" aria-expanded="false" aria-controls="collapseExample">
              Horarios
              </button>
              <div class="collapse" id="collapseb">
                <div class="card card-body">
                    <a class="dropdown-item" href="../docs/h1.pdf" target="_blank">Primer semestre</a>
                    <a class="dropdown-item" href="../docs/h2.pdf" target="_blank">Segundo semestre</a>
                    <a class="dropdown-item" href="../docs/h3.pdf" target="_blank">Tercer semestre</a>
                    <a class="dropdown-item" href="../docs/h4.pdf" target="_blank">Cuarto semestre</a>
                    <a class="dropdown-item" href="../docs/h5.pdf" target="_blank">Quinto semestre</a>
                    <a class="dropdown-item" href="../docs/h6.pdf" target="_blank">Sexto semestre</a>
                </div>
              </div>
              <a class="dropdown-item" href="estudiantes.php">Calificaciones</a>
            </div>
            </form>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="docentes.php">Docentes</a>
          </li>

        </ul>

      </div>
    </nav>
  </header>
  <!-- /Menu de Navegación -->

<?php 
echo '
  <div style="position: fixed; top:150px; right: 30px; z-index: 15000;">
    <a href="cerrar.php">
      <button class="btn btn-outline-success">Cerrar Sesión</button>
    </a>
  </div>';
 ?>

  <!-- contenedor -->
  <div class="container">
    <div class="row">
      <div class=" col-md-3 offset-md-2 offset-1 text-center">
        <img class="mx-auto d-bloc w-100 " src="../images/estudiante.jpg">
      </div>
      <div class=" col-md-5  offset-1 mt-5">
        <h3 class="text-left azul"><?php echo $nombre; ?></h3>
        <h5 class="text-left azul">Datos del alumno</h5>
        <h6><?php echo 'Semestre: <b>'.$semestre; ?></b></h6>
        <h6><?php echo 'Correo Electrónico: <b>'.$correo; ?></b></h6>
      </div>
      <div class="col-md-8 col-12 offset-md-2 mt-5">
        <div class="table-responsive">
          <table class="table table-striped text-center w-100">
            <thead>
              <tr class="bg-azul blanco">
                <th scope="col">Materia</th>
                <th scope="col">1er Momento</th>
                <th scope="col">2er Momento</th>
                <th scope="col">3er Momento</th>
                <th scope="col">Promedio</th>
                <th scope="col">Acreditado en:</th>
              </tr>
            </thead>
            <tbody>
<?php 
$rdatosalumno = $mysqli->query("SELECT * FROM `semetre_a".$semestre."` WHERE correo='$correo'");
if ($rdatosalumno)
  {  
    $pro = 0;
  while($array = $rdatosalumno->fetch_object())
    {
      $promedio_gral = $array->promedio_gral;
      //SEMESTRE 1
      if ($semestre == '1') {
          $matematicas1 = $array->matematicas1;
          $fisica1 = $array->fisica1;  
          $quimica1 = $array->quimica1;  
          $contextosocial1 = $array->contextosocial1;
          $cultura1 = $array->cultura1;
          $espanol1 = $array->espanol1;
          $ingles1 = $array->ingles1;  
          $tic1 = $array->tic1;
          $vinculacion1 = $array->vinculacion1;
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMÁTICAS I</th>';
            $calificaciones_matematicas1 = $matematicas1;
            $exploded_matematicas = multiexplode(array(","),$calificaciones_matematicas1);

            foreach($exploded_matematicas as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas[3])) {
                $prom_mat1 = $exploded_matematicas[3];
              }else{
                $prom_mat1 = 0;
              }
              
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FISICA I</th>';
            $calificaciones_fisica1 = $fisica1;
            $exploded_fisica = multiexplode(array(","),$calificaciones_fisica1);

            foreach($exploded_fisica as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_fisica[3])) {
                $prom_fis1 = $exploded_fisica[3];
              }else{
                $prom_fis1 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">QUIMICA I</th>';
            $calificaciones_quimica1 = $quimica1;
            $exploded_quimica = multiexplode(array(","),$calificaciones_quimica1);

            foreach($exploded_quimica as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_quimica[3])) {
                $prom_quim1 = $exploded_quimica[3];
              }else{
                $prom_quim1 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CONTEXTO SOCIAL NAL. REG. COMUNITARIO</th>';
            $calificaciones_contsocial1 = $contextosocial1;
            $exploded_contsocial = multiexplode(array(","),$calificaciones_contsocial1);

            foreach($exploded_contsocial as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_contsocial[3])) {
                $prom_cont1 = $exploded_contsocial[3];
              }else{
                $prom_cont1 = 0;
              }
            }
          echo '
          </tr>';       

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CULTURA I</th>';
            $calificaciones_cultura1 = $cultura1;
            $exploded_cultura = multiexplode(array(","),$calificaciones_cultura1);

            foreach($exploded_cultura as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_cultura[3])) {
                $prom_cult1 = $exploded_cultura[3];
              }else{
                $prom_cult1 = 0;
              }
            }
          echo '
          </tr>';       

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ESPAÑOL I</th>';
            $calificaciones_espanol1 = $espanol1;
            $exploded_espanol = multiexplode(array(","),$calificaciones_espanol1);

            foreach($exploded_espanol as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_espanol[3])) {
                $prom_esp1 = $exploded_espanol[3];
              }else{
                $prom_esp1 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">INGLES I</th>';
            $calificaciones_ingles1 = $ingles1;
            $exploded_ingles = multiexplode(array(","),$calificaciones_ingles1);

            foreach($exploded_ingles as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ingles[3])) {
                $prom_ing1 = $exploded_ingles[3];
              }else{
                $prom_ing1 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">TIC I</th>';
            $calificaciones_tic1 = $tic1;
            $exploded_tic = multiexplode(array(","),$calificaciones_tic1);

            foreach($exploded_tic as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_tic[3])) {
                $prom_tic1 = $exploded_tic[3];
              }else{
                $prom_tic1 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINULACIÓN COMUNITARIA</th>';
            $calificaciones_vinculacion1 = $vinculacion1;
            $exploded_vincu = multiexplode(array(","),$calificaciones_vinculacion1);

            foreach($exploded_vincu as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu[3])) {
                $prom_vinc1 = $exploded_vincu[3];
              }else{
                $prom_vinc1 = 0;
              }
            }
          echo '
          </tr>';   

          $pro = ($prom_mat1+$prom_fis1+$prom_quim1+$prom_cont1+$prom_cult1+$prom_esp1+$prom_ing1+$prom_tic1+$prom_vinc1)/9;
      }
      //TERMINA SEMESTRE 1

      //SEMESTRE 2
      if ($semestre == '2') {
          $matematicas2 = $array->matematicas2;
          $biologia = $array->biologia1;  
          $historia = $array->historia;  
          $formacion = $array->formacion;
          $cultura2 = $array->cultura2;
          $espanol2 = $array->espanol2;
          $ingles2 = $array->ingles2;  
          $tic2 = $array->tic2;
          $vinculacion2 = $array->vinculacion2;
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMÁTICAS II</th>';
            $calificaciones_matematicas2 = $matematicas2;
            $exploded_matematicas2 = multiexplode(array(","),$calificaciones_matematicas2);

            foreach($exploded_matematicas2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas2[3])) {
                $prom_mat2 = $exploded_matematicas2[3];
              }else{
                $prom_mat2 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">BIOLOGIA I</th>';
            $calificaciones_biologia = $biologia;
            $exploded_biologia = multiexplode(array(","),$calificaciones_biologia);

            foreach($exploded_biologia as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_biologia[3])) {
                $prom_bio2 = $exploded_biologia[3];
              }else{
                $prom_bio2 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">HIST. DE MÉXICO Y C.</th>';
            $calificaciones_historia = $historia;
            $exploded_historia = multiexplode(array(","),$calificaciones_historia);

            foreach($exploded_historia as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_historia[3])) {
                $prom_hist2 = $exploded_historia[3];
              }else{
                $prom_hist2 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CULTURA Y LENGUA II</th>';
            $calificaciones_cultura2 = $cultura2;
            $exploded_cultura2 = multiexplode(array(","),$calificaciones_cultura2);

            foreach($exploded_cultura2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_cultura2[3])) {
                $prom_cult2 = $exploded_cultura2[3];
              }else{
                $prom_cult2 = 0;
              }
            }
          echo '
          </tr>';       

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ESPAÑOL II</th>';
            $calificaciones_espanol2 = $espanol2;
            $exploded_espanol2 = multiexplode(array(","),$calificaciones_espanol2);

            foreach($exploded_espanol2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_espanol2[3])) {
                $prom_mesp2 = $exploded_espanol2[3];
              }else{
                $prom_mesp2 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">INGLES II</th>';
            $calificaciones_ingles2 = $ingles2;
            $exploded_ingles2 = multiexplode(array(","),$calificaciones_ingles2);

            foreach($exploded_ingles2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ingles2[3])) {
                $prom_ing2 = $exploded_ingles2[3];
              }else{
                $prom_ing2 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">TIC II </th>';
            $calificaciones_tic2 = $tic2;
            $exploded_tic2 = multiexplode(array(","),$calificaciones_tic2);

            foreach($exploded_tic2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_tic2[3])) {
                $prom_tic2 = $exploded_tic2[3];
              }else{
                $prom_tic2 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC </th>';
            $calificaciones_formacion = $formacion;
            $exploded_formacion = multiexplode(array(","),$calificaciones_formacion);

            foreach($exploded_formacion as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_formacion[3])) {
                $prom_form2 = $exploded_formacion[3];
              }else{
                $prom_form2 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINCULACION COMUNITARIA II</th>';
            $calificaciones_vinculacion2 = $vinculacion2;
            $exploded_vincu2 = multiexplode(array(","),$calificaciones_vinculacion2);

            foreach($exploded_vincu2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu2[3])) {
                $prom_vinc2 = $exploded_vincu2[3];
              }else{
                $prom_vinc2 = 0;
              }
            }
          echo '
          </tr>';       

          $pro = ($pro_mat2+$prom_bio2+$prom_hist2+$prom_form2+$prom_cult2+$prom_mesp2+$prom_ing2+$prom_tic2+$prom_vinc2)/9;
      }
      // TERMINA SEMESTRE 2

      //SEMESTRE 3
      if ($semestre == '3') {
          $matematicas3 = $array->matematicas3;
          $fisica2 = $array->fisica2;  
          $geografia1 = $array->geografia1;  
          $historia2 = $array->historia2;
          $cultura3 = $array->cultura3;
          $espanol3 = $array->espanol3;
          $ingles3 = $array->ingles3;  
          $formacion2 = $array->formacion2;
          $vinculacion3 = $array->vinculacion3;
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMÁTICAS III</th>';
            $calificaciones_matematicas3 = $matematicas3;
            $exploded_matematicas3 = multiexplode(array(","),$calificaciones_matematicas3);

            foreach($exploded_matematicas3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas3[3])) {
                $prom_mat3 = $exploded_matematicas3[3];
              }else{
                $prom_mat3 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FISICA II</th>';
            $calificaciones_fisica2 = $fisica2;
            $exploded_fisica2 = multiexplode(array(","),$calificaciones_fisica2);

            foreach($exploded_fisica2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_fisica2[3])) {
                $prom_fis3 = $exploded_fisica2[3];
              }else{
                $prom_fis3 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">GEOGRAFIA</th>';
            $calificaciones_gegrafia = $geografia1;
            $exploded_gegrafia = multiexplode(array(","),$calificaciones_gegrafia);

            foreach($exploded_gegrafia as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_gegrafia[3])) {
                $prom_geo3 = $exploded_gegrafia[3];
              }else{
                $prom_geo3 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">HIST. DE MEXICO Y C. II</th>';
            $calificaciones_historia2 = $historia2;
            $exploded_historia2 = multiexplode(array(","),$calificaciones_historia2);

            foreach($exploded_historia2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_historia2[3])) {
                $prom_hist3 = $exploded_historia2[3];
              }else{
                $prom_hist3 = 0;
              }
            }
          echo '
          </tr>';       

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CULTURA Y LENGUA INDIGENA  III </th>';
            $calificaciones_cultura3 = $cultura3;
            $exploded_cultura3 = multiexplode(array(","),$calificaciones_cultura3);

            foreach($exploded_cultura3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_cultura3[3])) {
                $prom_cult3 = $exploded_cultura3[3];
              }else{
                $prom_cult3 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ESPAÑOL III</th>';
            $calificaciones_espanol3 = $espanol3;
            $exploded_espanol3 = multiexplode(array(","),$calificaciones_espanol3);

            foreach($exploded_espanol3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_espanol3[3])) {
                $prom_esp3 = $exploded_espanol3[3];
              }else{
                $prom_esp3 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">INGLES III </th>';
            $calificaciones_ingles3 = $ingles3;
            $exploded_ingles3 = multiexplode(array(","),$calificaciones_ingles3);

            foreach($exploded_ingles3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ingles3[3])) {
                $prom_ing3 = $exploded_ingles3[3];
              }else{
                $prom_ing3 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC  II  </th>';
            $calificaciones_formacion2 = $formacion2;
            $exploded_formacion2 = multiexplode(array(","),$calificaciones_formacion2);

            foreach($exploded_formacion2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_formacion2[3])) {
                $prom_form3 = $exploded_formacion2[3];
              }else{
                $prom_form3 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINCULACION COMUNITARIA III </th>';
            $calificaciones_vinculacion3 = $vinculacion3;
            $exploded_vincu3 = multiexplode(array(","),$calificaciones_vinculacion3);

            foreach($exploded_vincu3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu3[3])) {
                $prom_vinc3 = $exploded_vincu3[3];
              }else{
                $prom_vinc3 = 0;
              }
            }
          echo '
          </tr>';   

          $pro = ($prom_mat3+$prom_fis3+$prom_geo3+$prom_hist3+$prom_cult3+$prom_esp3+$prom_ing3+$prom_form3+$prom_vinc3)/9;       
      }
      // TERMINA SEMESTRE 3

      //SEMESTRE 4
      if ($semestre == '4') {
          $matematicas4 = $array->matematicas4;
          $quimica2 = $array->quimica2;  
          $literatura = $array->literatura;  
          $cultura4 = $array->cultura4;
          $espanol4 = $array->espanol4;
          $ingles4 = $array->ingles4;  
          $formacion3 = $array->formacion3;
          $vinculacion4 = $array->vinculacion4;
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMATICAS IV </th>';
            $calificaciones_matematicas4 = $matematicas4;
            $exploded_matematicas4 = multiexplode(array(","),$calificaciones_matematicas4);

            foreach($exploded_matematicas4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas4[3])) {
                $prom_mat4 = $exploded_matematicas4[3];
              }else{
                $prom_mat4 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">QUIMICA II </th>';
            $calificaciones_quimica2 = $quimica2;
            $exploded_quimica2 = multiexplode(array(","),$calificaciones_quimica2);

            foreach($exploded_quimica2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_quimica2[3])) {
                $prom_quim4 = $exploded_quimica2[3];
              }else{
                $prom_quim4 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">LITERATURA  LOCA Y REG </th>';
            $calificaciones_literatura = $literatura;
            $exploded_literatura = multiexplode(array(","),$calificaciones_literatura);

            foreach($exploded_literatura as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_literatura[3])) {
                $prom_lit4 = $exploded_literatura[3];
              }else{
                $prom_lit4 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CULTURA Y LENGUA INDIGENA  IV </th>';
            $calificaciones_cultura4 = $cultura4;
            $exploded_cultura4 = multiexplode(array(","),$calificaciones_cultura4);

            foreach($exploded_cultura4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_cultura4[3])) {
                $prom_cult4 = $exploded_cultura4[3];
              }else{
                $prom_cult4 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ESPAÑOL IV </th>';
            $calificaciones_espanol4 = $espanol4;
            $exploded_espanol4 = multiexplode(array(","),$calificaciones_espanol4);

            foreach($exploded_espanol4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_espanol4[3])) {
                $prom_esp4 = $exploded_espanol4[3];
              }else{
                $prom_esp4 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">INGLES IV </th>';
            $calificaciones_ingles4 = $ingles4;
            $exploded_ingles4 = multiexplode(array(","),$calificaciones_ingles4);

            foreach($exploded_ingles4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ingles4[3])) {
                $prom_ing4 = $exploded_ingles4[3];
              }else{
                $prom_ing4 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC  III </th>';
            $calificaciones_formacion3 = $formacion3;
            $exploded_formacion3 = multiexplode(array(","),$calificaciones_formacion3);

            foreach($exploded_formacion3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_formacion3[3])) {
                $prom_form4 = $exploded_formacion3[3];
              }else{
                $prom_form4 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINCULACION COMUNITARIA IV </th>';
            $calificaciones_vinculacion4 = $vinculacion4;
            $exploded_vincu4 = multiexplode(array(","),$calificaciones_vinculacion4);

            foreach($exploded_vincu4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu4[3])) {
                $prom_vinc4 = $exploded_vincu4[3];
              }else{
                $prom_vinc4 = 0;
              }
            }
          echo '
          </tr>';      

          $pro = ($prom_mat4+$prom_quim4+$prom_lit4+$prom_cult4+$prom_esp4+$prom_ing4+$prom_form4+$prom_vinc4)/8; 
      }
      // TERMINA SEMESTRE 4

      //SEMESTRE 5
      if ($semestre == '5') {
          $matematicas_aplicadas = $array->matematicas_aplicadas;
          $biologia2 = $array->biologia2;  
          $formacion_etica1 = $array->formacion_etica1;  
          $cultura5 = $array->cultura5;
          $espanol5 = $array->espanol5;
          $ingles5 = $array->ingles5;  
          $tic3 = $array->tic3;  
          $formacion4 = $array->formacion4;
          $vinculacion5 = $array->vinculacion5;
          $form_prop = $array->form_prop;
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMATICAS APLICADAS </th>';
            $calificaciones_matematicas_aplicadas = $matematicas_aplicadas;
            $exploded_matematicas_aplicadas = multiexplode(array(","),$calificaciones_matematicas_aplicadas);

            foreach($exploded_matematicas_aplicadas as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas_aplicadas[3])) {
                $prom_mat5 = $exploded_matematicas_aplicadas[3];
              }else{
                $prom_mat5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">BIOLOGIA II  </th>';
            $calificaciones_biologia2 = $biologia2;
            $exploded_biologia2 = multiexplode(array(","),$calificaciones_biologia2);

            foreach($exploded_biologia2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_biologia2[3])) {
                $prom_bio5 = $exploded_biologia2[3];
              }else{
                $prom_bio5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION ETICA </th>';
            $calificaciones_etica1 = $formacion_etica1;
            $exploded_etica1 = multiexplode(array(","),$calificaciones_etica1);

            foreach($exploded_etica1 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_etica1[3])) {
                $prom_etic5 = $exploded_etica1[3];
              }else{
                $prom_etic5 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">CULTURA Y LENGUA INDIGENA V </th>';
            $calificaciones_cultura5 = $cultura5;
            $exploded_cultura5 = multiexplode(array(","),$calificaciones_cultura5);

            foreach($exploded_cultura5 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_cultura5[3])) {
                $prom_cult5 = $exploded_cultura5[3];
              }else{
                $prom_cult5 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ESPAÑOL V </th>';
            $calificaciones_espanol5 = $espanol5;
            $exploded_espanol5 = multiexplode(array(","),$calificaciones_espanol5);

            foreach($exploded_espanol5 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_espanol5[3])) {
                $prom_esp5 = $exploded_espanol5[3];
              }else{
                $prom_esp5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">INGLES V </th>';
            $calificaciones_ingles5 = $ingles5;
            $exploded_ingles5 = multiexplode(array(","),$calificaciones_ingles5);

            foreach($exploded_ingles5 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ingles5[3])) {
                $prom_ing5 = $exploded_ingles5[3];
              }else{
                $prom_ing5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">TIC III  </th>';
            $calificaciones_tic3 = $tic3;
            $exploded_tic3 = multiexplode(array(","),$calificaciones_tic3);

            foreach($exploded_tic3 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_tic3[3])) {
                $prom_tic5 = $exploded_tic3[3];
              }else{
                $prom_tic5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC  IV </th>';
            $calificaciones_formacion4 = $formacion4;
            $exploded_formacion4 = multiexplode(array(","),$calificaciones_formacion4);

            foreach($exploded_formacion4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_formacion4[3])) {
                $prom_form5 = $exploded_formacion4[3];
              }else{
                $prom_form5 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINCULACION COMUNITARIA V </th>';
            $calificaciones_vinculacion5 = $vinculacion5;
            $exploded_vincu5 = multiexplode(array(","),$calificaciones_vinculacion5);

            foreach($exploded_vincu5 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu5[3])) {
                $prom_vinc5 = $exploded_vincu5[3];
              }else{
                $prom_vinc5 = 0;
              }
            }
          echo '
          </tr>';          

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORM. PROP. TEMAS CS. </th>';
            $calificaciones_form_prop = $form_prop;
            $exploded_form_prop = multiexplode(array(","),$calificaciones_form_prop);

            foreach($exploded_form_prop as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_form_prop[3])) {
                $prom_form_prop_cs5 = $exploded_form_prop[3];
              }else{
                $prom_form_prop_cs5 = 0;
              }
            }
          echo '
          </tr>';    

          $pro = ($prom_mat5+$prom_bio5+$prom_etic5+$prom_cult5+$prom_esp5+$prom_ing5+$prom_tic5+$prom_form5+$prom_vinc5+$prom_form_prop_cs5)/10;
      }
      // TERMINA SEMESTRE 5

      //SEMESTRE 6
      if ($semestre == '6') {
          $matematicas_aplicadas2 = $array->matematicas_aplicadas2;
          $ecologia1 = $array->ecologia1;  
          $filosofia1 = $array->filosofia1;  
          $proyecto_disc_campo = $array->proyecto_disc_campo;
          $tic4 = $array->tic4;
          $form_prop2 = $array->form_prop2;
          $vinculacion6 = $array->vinculacion6;  
          $form_prop_lit = $array->form_prop_lit;  
          
          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">MATEMATICAS APLICADAS II </th>';
            $calificaciones_matematicas_aplicadas2 = $matematicas_aplicadas2;
            $exploded_matematicas_aplicadas2 = multiexplode(array(","),$calificaciones_matematicas_aplicadas2);

            foreach($exploded_matematicas_aplicadas2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_matematicas_aplicadas2[3])) {
                $prom_mat6 = $exploded_matematicas_aplicadas2[3];
              }else{
                $prom_mat6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">ECOLOGIA Y MEDIO AMBIENTE </th>';
            $calificaciones_ecologia = $ecologia1;
            $exploded_ecologia = multiexplode(array(","),$calificaciones_ecologia);

            foreach($exploded_ecologia as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_ecologia[3])) {
                $prom_eco6 = $exploded_ecologia[3];
              }else{
                $prom_eco6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FILOSOFIA </th>';
            $calificaciones_filosofia1 = $filosofia1;
            $exploded_filosofia1 = multiexplode(array(","),$calificaciones_filosofia1);

            foreach($exploded_filosofia1 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_filosofia1[3])) {
                $prom_filo6 = $exploded_filosofia1[3];
              }else{
                $prom_filo6 = 0;
              }
            }
          echo '
          </tr>'; 

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">PROYECTO DISC. DEL CAMPO DE C. </th>';
            $calificaciones_proyecto = $proyecto_disc_campo;
            $exploded_proyecto = multiexplode(array(","),$calificaciones_proyecto);

            foreach($exploded_proyecto as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_proyecto[3])) {
                $prom_proy6 = $exploded_proyecto[3];
              }else{
                $prom_proy6 = 0;
              }
            }
          echo '
          </tr>'; 
         
         echo '
          <tr>
            <th class="bg-azul blanco" scope="row">TIC IV </th>';
            $calificaciones_tic4 = $tic4;
            $exploded_tic4 = multiexplode(array(","),$calificaciones_tic4);

            foreach($exploded_tic4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_tic4[3])) {
                $prom_tic6 = $exploded_tic4[3];
              }else{
                $prom_tic6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC. II </th>';
            $calificaciones_form_prop2 = $form_prop2;
            $exploded_form_prop2 = multiexplode(array(","),$calificaciones_form_prop2);

            foreach($exploded_form_prop2 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_form_prop2[3])) {
                $prom_form6 = $exploded_form_prop2[3];
              }else{
                $prom_form6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">VINCULACION COMUNITARIA VI </th>';
            $calificaciones_vinculacion6= $vinculacion6;
            $exploded_vincu6 = multiexplode(array(","),$calificaciones_vinculacion6);

            foreach($exploded_vincu6 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_vincu6[3])) {
                $prom_vinc6 = $exploded_vincu6[3];
              }else{
                $prom_vinc6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORMACION PROF. TEC  IV </th>';
            $calificaciones_formacion4 = $form_prop2;
            $exploded_formacion4 = multiexplode(array(","),$calificaciones_formacion4);

            foreach($exploded_formacion4 as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_formacion4[3])) {
                $prom_form_prof6 = $exploded_formacion4[3];
              }else{
                $prom_form_prof6 = 0;
              }
            }
          echo '
          </tr>';

          echo '
          <tr>
            <th class="bg-azul blanco" scope="row">FORM. PROP. LIT. </th>';
            $calificaciones_form_prop_lit = $form_prop_lit;
            $exploded_form_prop_lit = multiexplode(array(","),$calificaciones_form_prop_lit);

            foreach($exploded_form_prop_lit as $key=>$value) {
              echo '<td>'.$value.'</td>';
              if (!empty($exploded_form_prop_lit[3])) {
                $prom_form_prop_lit6 = $exploded_form_prop_lit[3];
              }else{
                $prom_form_prop_lit6 = 0;
              }
            }
          echo '
          </tr>';          

          $pro = ($prom_mat6+$prom_eco6+$prom_filo6+$prom_proy6+$prom_tic6+$prom_form6+$prom_vinc6+$prom_form_prop_lit6)/8;
      }
      // TERMINA SEMESTRE 6
      

    }
  }
 ?>

            </tbody>
          </table>
        </div>
          <div class="text-right">
            <h3>Promedio General: 
              <b>
              <?php 
              /*
              if ($promedio_gral != 'sin promediar') {
                $promedio_dos_dec = number_format($promedio_gral, 1, '.', '');
                echo $promedio_dos_dec;
              }else{
                echo 'Sin Promediar';
              }*/
                if(is_float($pro)){
                  $pro_final = number_format($pro, 1, '.', '');  
                }else{
                  $pro_final = $pro;
                }
                
                echo $pro_final;
               ?>                
              </b>
            </h3>
        </div>
      </div>

      <div class="col-md-2 col-12 offset-md-5">
        <a class="btn btn-outline-primary btn-block " href="../imprimir_boleta/imprimir.php?nombre=<?php echo $nombre; ?>&semestre=<?php echo $semestre; ?>&correo=<?php echo $correo; ?>&promediogral=<?php echo $pro_final; ?>"><h6>Descargar boleta</h6></a>
      </div>
    </div>
  </div>
  <!-- contenedor -->

  <!-- footer -->
  <footer class="container-fluid">
    <div class="container-fluid pt-4 pb-5">
      <div class="row ">

        <div class="col-md-3">
          <a href="cultura.html">
            <div class="col-md-10  mt-4 botonfi  ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;"  class="fas fa-guitar"></i>
                <br>
                Cultura
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="oferta.html">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-book-reader"></i>
                <br>
                Oferta educativa
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="galeria.html">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul h pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-images"></i>
                <br>
                Galeria de fotos
              </h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="https://www.google.com/maps/place/Bachillerato+Intercultural+02/@20.0077034,-97.6332923,15z/data=!4m5!3m4!1s0x0:0x6da7347cfcc3b4f8!8m2!3d20.0077034!4d-97.6332923?sa=X&ved=2ahUKEwj-_MrP3-LhAhUGEawKHSncCFsQ_BIwDnoECAwQBg&shorturl=1" target="_blank">
            <div class="col-md-10  mt-4 botonfi ">
              <h4  class="text-center azul pt-3 pb-3 h">
                <i style="font-size: 60px;" class="fas fa-map-marker-alt"></i>
                <br>
                Ubicación
              </h4>
            </div>
          </a>
        </div>

      </div> 
    </div>
  </footer>

  <!-- footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>
<?php 
}else{
  echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- MODAL DATOS DE COMPRA -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicio de sesión</h5>
        <a href="../index.html">
          <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </a>
      </div>
      <div class="modal-body">
        <form action="../process/security/check-alumn.php" method="POST">
          <div class="form-group">
            <label class="col-form-label">Correo Electrónico *:</label>
            <input type="email" class="form-control" name="correo" placeholder="Escribe tu Correo Electrónico" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Contraseña *:</label>
            <input type="password" class="form-control" name="password"  placeholder="Escribe tu numero de teléfono" required>
          </div>
          
      </div>
      <div class="modal-footer">
        <a href="../index.html">
          <button type="button" class="btn btn-secondary">Cancelar</button>
        </a>
        <input type="submit" class="btn btn-primary" value="Iniciar sesión">
      </div>
      </form>
    </div>
  </div>
</div>
<!--/ MODAL DATOS DE COMPRA -->

      <script type="text/javascript">
      $( document ).ready(function() {
          $("#exampleModal").modal("toggle")
      });
      </script>';
} ?>