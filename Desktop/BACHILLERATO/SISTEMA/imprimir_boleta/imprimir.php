<?php
ob_start();
require_once("dompdf/dompdf_config.inc.php");
include_once("../private/conexion.php");
require_once("multi.php");
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City"); 
if (!empty($_GET['nombre']) && !empty($_GET['semestre']) && !empty($_GET['correo']) && !empty($_GET['promediogral'])) {
  $nombre = $_GET['nombre'];
  $semestre = $_GET['semestre'];
  $correo = $_GET['correo'];
  $promediogral_real = $_GET['promediogral'];
  
  setlocale(LC_TIME, 'es_ES', 'esp_esp');
  $fecha = strftime("%d de %B de %Y", strtotime(date('d-m-Y')));

  echo '
  <body>

    <div class="container mt-5">
        <center>
        <img src="3.png" class="w-100">
        </center>
      <div class="row">
        <div class="col-12">
          FECHA: <b>'.$fecha.'</b> 
        </div>
        <div class="col-12">
          Alumno: <b>'.$nombre.'</b>
        </div>
        <div class="col-12">
          Semestre: <b>'.$semestre.' &#176;</b>
        </div>
        <hr>        
      </div>

      <table class="table mt-3" border="1" style="text-align:center;">
        <tr>
            <th scope="col">Materia</th>
            <th scope="col">1ER MOMENTO</th>
            <th scope="col">2DO MOMENTO</th>
            <th scope="col">3ER MOMENTO</th>
            <th scope="col">PROMEDIO</th>
            <th scope="col">ACREDITADO EN:</th>
          </tr>';
  $rdatosalumno = $mysqli->query("SELECT * FROM `semetre_a".$semestre."` WHERE correo='$correo'");
if ($rdatosalumno)
  {
  
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
            }
          echo '
          </tr>';          
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
            }
          echo '
          </tr>';          
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
            }
          echo '
          </tr>';          
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
            }
          echo '
          </tr>';          
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
            }
          echo '
          </tr>';          
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
            }
          echo '
          </tr>';          

      }
      // TERMINA SEMESTRE 6
  }
}

        echo '
        </table>
      <div class="container" align="center">
        <h3>PROMEDIO GENERAL: <b>'.$promediogral_real.'</b><h3>
      </div>

      
    </div>

<br><br><br><br>

  <section style="display: block;">
    <div style="display: inline-block; width: 40%; text-align: center; margin-left: 5%;">
      <p style="border-bottom: 2px solid #000; padding-bottom: 60px;">DIRECTORA DE LA ESCUELA</p>
      <br> L.D.S. HEYDI LAURA MORA BECERRIL
    </div>

    <div style="display: inline-block; width: 40%; text-align: center; margin-left: 5%;">
      <p style="border-bottom: 2px solid #000; padding-bottom: 60px;">ALUMNO</p>
      <br> FIRMA DEL ALUMNO
    </div>
  </section>
  </body>';

  $dompdf = new DOMPDF();
  $dompdf->load_html(ob_get_clean());
  $dompdf->render();
  $pdf = $dompdf->output();
  $filename = "Boleta - ".$nombre.' - '.Date('d-m-Y').".pdf";
  file_put_contents($filename, $pdf);
  $dompdf->stream($filename);
}else{
  echo "NO HAY ALUMNO";
}

?>