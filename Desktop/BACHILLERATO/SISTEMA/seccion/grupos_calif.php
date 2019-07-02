<?php session_start();  include_once("../private/conexion.php"); ?>
<?php 
function multiexplode ($delimiters,$string) {
   
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
 ?>
<?php 
if (!empty($_SESSION['docente_correo']) && !empty($_GET['grupo']) && !empty($_GET['materia_semestre'])) {
  $correo_docente = $_SESSION['docente_correo'];
  $grupo = $_GET['grupo'];
  $materia_semestre = $_GET['materia_semestre'];

  //OBTENER SEMESTRE
  $cadena = $materia_semestre;
  $parte1=explode('(',$cadena);
  $parte2=explode(')',$parte1[1]);
  $semestre= $parte2[0];
  
  //OBTENER MATERIA
  $a_materia = preg_replace("/\((.*?)\)/i", "", $materia_semestre);
  
 ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Native CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- FavIcon -->
    <link rel="icon" href="../images/icon.ico" />
    
    <title>Sección Docentes</title>    
  </head>

  <body>
<!-- Menu de Navegación -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href=""><img src="../images/logo22.png" alt="" width="100"></a>
          <div style="color:white;"><?php echo $_SESSION['docente_nombre']; ?></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../secciones/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="section-noticias.php">Todas las noticias</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="materias.php">Mis materias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="process/cerrar.php">Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- /Menu de Navegación -->
<!--BOTON FLOTANTE -->
<div style="position: fixed; top:150px; left: 30px; z-index: 15000;">
  <a href="materias.php">
    <button class="btn btn-info">Regresar</button>
  </a>
</div>
<!--BOTON FLOTANTE -->

<!--BOTON FLOTANTE 
<div style="position: fixed; top:200px; right: 30px; z-index: 15000;">
  <a href="materias.php">
    <button class="btn btn-warning">Agregar Alumno</button>
  </a>
</div>
BOTON FLOTANTE -->

<div class="container">
  <div class="text-right mt-3">
      <button class="btn btn-outline-success">Semestre <b>[<?php echo $semestre; ?>]</b></button>
      <button class="btn btn-outline-success">Materia <b>[<?php echo $a_materia; ?>]</b></button>
      <button class="btn btn-outline-success">Grupo <b>[<?php echo $grupo; ?>]</b></button>
  </div>
</div>

<!-- Seccion Ver Noticias -->
<section id="noticias" class="noticias mt-5 mb-5">
  <div class="container">
    <div class="row">
<?php 
$ralumnos = $mysqli->query("SELECT * FROM semetre_a$semestre");
if ($ralumnos)
{
  while($array = $ralumnos->fetch_object())
    {
      $id = $array->id;
      $alumno = $array->alumno;
      
      echo '
        <div class="col-12 col-md-4 col-lg-3 mb-4">
          Alumno: <b>'.$alumno.'</b>
          <div class="card w-100 p-2 btn">
            <button class="btn btn-outline-info open-AddBookDialog" data-toggle="modal" data-target="#modalCalificaciones" data-id="'.$id.'">
              Calificaciones
            </button>                      
            </div>
        </div>
      ';
    }
}
 ?>
   
    </div>
  </div>
</section>
<!-- Seccion Ver Noticias -->


<!-- Modal Check Alumno Calif -->
<div class="modal fade" id="modalCalificaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Calificaciones</h5>
        <a href="grupos_calif.php">
          <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </a>
      </div>
      <div class="modal-body">
        <h3><?php echo $a_materia; ?></h3>
        <form accept="grupos_calif.php" method="GET">
          <input type="hidden" name="id_alumno_check" id="bookId" value="" readonly required/>
          <input type="hidden" name="grupo" value="<?php echo $grupo; ?>" readonly required/>
          <input type="hidden" name="materia_semestre" value="<?php echo $materia_semestre; ?>" readonly required/>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Cargar Calificaciones del Alumno</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Check Alumno Calif -->

<!-- Modal Alumno Calificaciones -->
<div class="modal fade" id="modalCalificacionesAlumnoCheck" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Calificaciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
<?php 
if (isset($_GET['id_alumno_check']) && !empty($_GET['id_alumno_check'])) {
  $id_alumno_check = $_GET['id_alumno_check'];
  $rcheckalumno = $mysqli->query("SELECT * FROM semetre_a$semestre WHERE id='$id_alumno_check'");
  if ($rcheckalumno)
  {
    while($array = $rcheckalumno->fetch_object())
      {
        $id = $array->id;
        $alumno = $array->alumno;
        $correo = $array->correo;

        $rcalificacionmateria = $mysqli->query("SELECT * FROM semetre_a$semestre WHERE id='$id_alumno_check'");
        if ($rcalificacionmateria)
        {
          $dato_materia_bd_alumno = '';
          $materia_bd_alumno = '';
          $calif1 = '';
          $calif2 = '';
          $calif3 = '';
          $promedio_calif = '';
          while($array_materia = $rcalificacionmateria->fetch_object())
            {
              //MATERIA - SEMESTRE 1
              if ($semestre == '1') {
                if ($a_materia == 'MATEMÁTICAS I ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas1; 
                  $materia_bd_alumno = 'matematicas1';
                }
                if ($a_materia == 'FISICA I ') {
                  $dato_materia_bd_alumno = $array_materia->fisica1; 
                  $materia_bd_alumno = 'fisica1';
                }
                if ($a_materia == 'QUIMICA I ') {
                  $dato_materia_bd_alumno = $array_materia->quimica1;
                  $materia_bd_alumno = 'quimica1'; 
                }
                if ($a_materia == 'CONTEXTO SOCIAL NAL. REG. COMUNITARIO ') {
                  $dato_materia_bd_alumno = $array_materia->contextosocial1;
                  $materia_bd_alumno = 'contextosocial1'; 
                }
                if ($a_materia == 'CULTURA Y LENGUA INDIGENA I ') {
                  $dato_materia_bd_alumno = $array_materia->cultura1;
                  $materia_bd_alumno = 'cultura1';
                }
                if ($a_materia == 'ESPAÑOL I ') {
                  $dato_materia_bd_alumno = $array_materia->espanol1;
                  $materia_bd_alumno = 'espanol1'; 
                }
                if ($a_materia == 'INGLES I ') {
                  $dato_materia_bd_alumno = $array_materia->ingles1;
                  $materia_bd_alumno = 'ingles1'; 
                }
                if ($a_materia == 'TIC I ') {
                  $dato_materia_bd_alumno = $array_materia->tic1;
                  $materia_bd_alumno = 'tic1';
                }
                if ($a_materia == 'VINULACIÓN COMUNITARIA ') {
                  $dato_materia_bd_alumno = $array_materia->vinculacion1;
                  $materia_bd_alumno = 'vinculacion1';
                }
              }
              //FIN MATERIA - SEMESTRE 1

              //MATERIA - SEMESTRE 2
              if ($semestre == '2') {
                if ($a_materia == 'MATEMÁTICAS II ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas2; 
                  $materia_bd_alumno = 'matematicas2';
                }
                if ($a_materia == 'BIOLOGIA I ') {
                  $dato_materia_bd_alumno = $array_materia->biologia1; 
                  $materia_bd_alumno = 'biologia1';
                }
                if ($a_materia == 'HIST. DE MÉXICO Y C. ') {
                  $dato_materia_bd_alumno = $array_materia->historia; 
                  $materia_bd_alumno = 'historia';
                }
                if ($a_materia == 'CULTURA Y LENGUA II ') {
                  $dato_materia_bd_alumno = $array_materia->cultura2; 
                  $materia_bd_alumno = 'cultura2';
                }
                if ($a_materia == 'ESPAÑOL II ') {
                  $dato_materia_bd_alumno = $array_materia->espanol2; 
                  $materia_bd_alumno = 'espanol2';
                }
                if ($a_materia == 'INGLES II ') {
                  $dato_materia_bd_alumno = $array_materia->ingles2; 
                  $materia_bd_alumno = 'ingles2';
                }
                if ($a_materia == 'TIC II ') {
                  $dato_materia_bd_alumno = $array_materia->tic2; 
                  $materia_bd_alumno = 'tic2';
                }
                if ($a_materia == 'FORMACION PROF. TEC ') {
                  $dato_materia_bd_alumno = $array_materia->formacion; 
                  $materia_bd_alumno = 'formacion';
                }
                if ($a_materia == 'VINCULACION COMUNITARIA II ') {
                  $dato_materia_bd_alumno = $array_materia->vinvulacion2; 
                  $materia_bd_alumno = 'vinvulacion2';
                }
              }
              //FIN MATERIA - SEMESTRE 2

              //MATERIA - SEMESTRE 3
              if ($semestre == '3') {
                if ($a_materia == 'MATEMATICAS III ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas3; 
                  $materia_bd_alumno = 'matematicas3';
                }
                if ($a_materia == 'FISICA II ') {
                  $dato_materia_bd_alumno = $array_materia->fisica2; 
                  $materia_bd_alumno = 'fisica2';
                }
                if ($a_materia == 'GEOGRAFIA ') {
                  $dato_materia_bd_alumno = $array_materia->geografia1; 
                  $materia_bd_alumno = 'geografia1';
                }
                if ($a_materia == 'HIST. DE MEXICO Y C. II ') {
                  $dato_materia_bd_alumno = $array_materia->historia2; 
                  $materia_bd_alumno = 'historia2';
                }
                if ($a_materia == 'CULTURA Y LENGUA INDIGENA  III ') {
                  $dato_materia_bd_alumno = $array_materia->cultura3; 
                  $materia_bd_alumno = 'cultura3';
                }
                if ($a_materia == 'ESPAÑOL III ') {
                  $dato_materia_bd_alumno = $array_materia->espanol3; 
                  $materia_bd_alumno = 'espanol3';
                }
                if ($a_materia == 'INGLES III ') {
                  $dato_materia_bd_alumno = $array_materia->ingles3; 
                  $materia_bd_alumno = 'ingles3';
                }
                if ($a_materia == 'FORMACION PROF. TEC  II ') {
                  $dato_materia_bd_alumno = $array_materia->formacion2; 
                  $materia_bd_alumno = 'formacion2';
                }
                if ($a_materia == 'VINCULACION COMUNITARIA III ') {
                  $dato_materia_bd_alumno = $array_materia->vinculacion3; 
                  $materia_bd_alumno = 'vinculacion3';
                }
              }
              //FIN MATERIA - SEMESTRE 3

              //MATERIA - SEMESTRE 4
              if ($semestre == '4') {
                if ($a_materia == 'MATEMATICAS IV ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas4; 
                  $materia_bd_alumno = 'matematicas4';
                }
                if ($a_materia == 'QUIMICA II ') {
                  $dato_materia_bd_alumno = $array_materia->quimica2; 
                  $materia_bd_alumno = 'quimica2';
                }
                if ($a_materia == 'LITERATURA  LOCA Y REG ') {
                  $dato_materia_bd_alumno = $array_materia->literatura; 
                  $materia_bd_alumno = 'literatura';
                }
                if ($a_materia == 'CULTURA Y LENGUA INDIGENA  IV ') {
                  $dato_materia_bd_alumno = $array_materia->cultura4; 
                  $materia_bd_alumno = 'cultura4';
                }
                if ($a_materia == 'ESPAÑOL IV ') {
                  $dato_materia_bd_alumno = $array_materia->espanol4; 
                  $materia_bd_alumno = 'espanol4';
                }
                if ($a_materia == 'INGLES IV ') {
                  $dato_materia_bd_alumno = $array_materia->ingles4; 
                  $materia_bd_alumno = 'ingles4';
                }
                if ($a_materia == 'FORMACION PROF. TEC  III ') {
                  $dato_materia_bd_alumno = $array_materia->formacion4; 
                  $materia_bd_alumno = 'formacion4';
                }
                if ($a_materia == 'VINCULACION COMUNITARIA IV ') {
                  $dato_materia_bd_alumno = $array_materia->vinculacion4; 
                  $materia_bd_alumno = 'vinculacion4';
                }
              }
              //FIN MATERIA - SEMESTRE 4

              //MATERIA - SEMESTRE 5
              if ($semestre == '5') {
                if ($a_materia == 'MATEMATICAS APLICADAS ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas_aplicadas; 
                  $materia_bd_alumno = 'matematicas_aplicadas';
                }
                if ($a_materia == 'BIOLOGIA II ') {
                  $dato_materia_bd_alumno = $array_materia->biologia2 ; 
                  $materia_bd_alumno = 'biologia2';
                }
                if ($a_materia == 'FORMACION ETICA ') {
                  $dato_materia_bd_alumno = $array_materia->formacion_etica1 ; 
                  $materia_bd_alumno = 'formacion_etica1';
                }
                if ($a_materia == 'CULTURA Y LENGUA INDIGENA V ') {
                  $dato_materia_bd_alumno = $array_materia->cultura5; 
                  $materia_bd_alumno = 'cultura5';
                }
                if ($a_materia == 'ESPAÑOL V ') {
                  $dato_materia_bd_alumno = $array_materia->espanol5; 
                  $materia_bd_alumno = 'espanol5';
                }
                if ($a_materia == 'INGLES V ') {
                  $dato_materia_bd_alumno = $array_materia->ingles5; 
                  $materia_bd_alumno = 'ingles5';
                }
                if ($a_materia == 'TIC III ') {
                  $dato_materia_bd_alumno = $array_materia->tic3;
                  $materia_bd_alumno = 'tic3';
                }
                if ($a_materia == 'FORMACION PROF. TEC  IV ') {
                  $dato_materia_bd_alumno = $array_materia->formacion4;
                  $materia_bd_alumno = 'formacion4';
                }
                if ($a_materia == 'VINCULACION COMUNITARIA V ') {
                  $dato_materia_bd_alumno = $array_materia->vinculacion5;
                  $materia_bd_alumno = 'vinculacion5';
                }
                if ($a_materia == 'FORM. PROP. TEMAS CS. ') {
                  $dato_materia_bd_alumno = $array_materia->form_prop;
                  $materia_bd_alumno = 'form_prop';
                }
              }
              //FIN MATERIA - SEMESTRE 5

              //MATERIA - SEMESTRE 6
              if ($semestre == '6') {
                if ($a_materia == 'MATEMATICAS APLICADAS II ') {
                  $dato_materia_bd_alumno = $array_materia->matematicas_aplicadas2; 
                  $materia_bd_alumno = 'matematicas_aplicadas2';
                }
                if ($a_materia == 'ECOLOGIA Y MEDIO AMBIENTE ') {
                  $dato_materia_bd_alumno = $array_materia->ecologia1; 
                  $materia_bd_alumno = 'ecologia1';
                }
                if ($a_materia == 'FILOSOFIA ') {
                  $dato_materia_bd_alumno = $array_materia->filosofia1; 
                  $materia_bd_alumno = 'filosofia1';
                }
                if ($a_materia == 'PROYECTO DISC. DEL CAMPO DE C. ') {
                  $dato_materia_bd_alumno = $array_materia->proyecto_disc_campo; 
                  $materia_bd_alumno = 'proyecto_disc_campo';
                }
                if ($a_materia == 'TIC IV ') {
                  $dato_materia_bd_alumno = $array_materia->tic4; 
                  $materia_bd_alumno = 'tic4';
                }
                if ($a_materia == 'FORMACION PROF. TEC. II ') {
                  $dato_materia_bd_alumno = $array_materia->form_prop2; 
                  $materia_bd_alumno = 'form_prop2';
                }
                if ($a_materia == 'VINCULACION COMUNITARIA VI ') {
                  $dato_materia_bd_alumno = $array_materia->vinculacion6; 
                  $materia_bd_alumno = 'vinculacion6';
                }
                if ($a_materia == 'FORM. PROP. LIT. ') {
                  $dato_materia_bd_alumno = $array_materia->form_prop_lit; 
                  $materia_bd_alumno = 'form_prop_lit';
                }
              }
              //FIN MATERIA - SEMESTRE 6 

              if ($dato_materia_bd_alumno == '' || $dato_materia_bd_alumno == null) {
                $calif_separadas = '0,0,0';
              }else{
                $calif_separadas = $dato_materia_bd_alumno;  
              }
              
              $exploded = multiexplode(array(","),$calif_separadas);
              
              echo '<h3>'.$a_materia.'</h3>
                    Alumno: <b>'.$alumno.' </b><br>
                    Correo: <b>'.$correo.' </b><br>';
                    foreach($exploded as $key=>$value) {
                      if ($exploded[0] == '' || $exploded[0] == null || $exploded[0] == '0') {
                        $calif1 = 'sin cursar';
                      }else{
                        $calif1 = $exploded[0];  
                      }

                      if ($exploded[1] == '' || $exploded[1] == null || $exploded[1] == '0') {
                        $calif2 = 'sin cursar';
                      }else{
                        $calif2 = $exploded[1];  
                      }
                      
                      if ($exploded[2] == '' || $exploded[2] == null || $exploded[2] == '0') {
                        $calif3 = 'sin cursar';
                      }else{
                        $calif3 = $exploded[2];  
                      }

                      if ($exploded[3] == '' || $exploded[3] == null || $exploded[3] == '0') {
                        $promedio_calif = 'sin promediar';
                        $promedio_calif_dos_dig = 'sin promediar';
                      }else{
                        $promedio_calif = $exploded[3];
                        if ($promedio_calif > 0) {
                          $promedio_calif_dos_dig = number_format($promedio_calif, 2, '.', '');
                        }
                      }

                      
                    }
                    echo '<form action="process/edit-calificaciones.php" method="POST">';
                    echo '<h5 class="mt-3">Bimestre 1 (momento 1)</h5>                      
                            <input type="text" class="form-control-file" placeholder="Calificaciones Ej. 10, si es 0 agrega un menos [-] ej. -0" name="calif1" value="'.$calif1.'" required>                        
                          <br><hr>
                          <h5 class="mt-3">Bimestre 2 (momento 2)</h5>                      
                            <input type="text" class="form-control-file" placeholder="Calificaciones Ej. 10, si es 0 agrega un menos [-] ej. -0" name="calif2" value="'.$calif2.'" required>                        
                          <br><hr>
                          <h5 class="mt-3">Bimestre 3 (momento 3)</h5>                      
                            <input type="text" class="form-control-file" placeholder="Calificaciones Ej. 10, si es 0 agrega un menos [-] ej. -0" name="calif3" value="'.$calif3.'" required>                        
                          <br><hr>
                          <h4 class="text-right">Promedio actual: '.$promedio_calif_dos_dig.'</h4>';
                          
                    echo '<h3>Acreditado en:</h3>
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <a href="process/edit-alumno-acreditado.php?id_alumno='.$id_alumno_check.'&materia='.$materia_bd_alumno.'&semestre='.$semestre.'&grupo='.$grupo.'&materia_semestre='.$materia_semestre.'&acreditado=ORD">
                                <button type="button" class="btn btn-block btn-outline-success">ORD</button>
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <a href="process/edit-alumno-acreditado.php?id_alumno='.$id_alumno_check.'&materia='.$materia_bd_alumno.'&semestre='.$semestre.'&grupo='.$grupo.'&materia_semestre='.$materia_semestre.'&acreditado=REG">
                                <button type="button" class="btn btn-block btn-outline-secondary">REG</button>
                              </a>
                            </div>
                          </div>';
                    echo '
                          <input type="hidden" name="id_alumno" value="'.$id_alumno_check.'"/>
                          <input type="hidden" name="materia" value="'.$materia_bd_alumno.'"/>
                          <input type="hidden" name="semestre" value="'.$semestre.'"/>

                          <input type="hidden" name="grupo" value="'.$grupo.'"/>
                          <input type="hidden" name="materia_semestre" value="'.$materia_semestre.'"/>
                      ';
              

            }
        }
      }
  }
  
}
 ?>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cancelar</button>
          <button type="button" class="btn btn-danger open-AddBookDialog" data-toggle="modal" data-target="#modalEliminarAlumno" data-id="<?php echo $id_alumno_check; ?>">
              Eliminar Alumno
          </button>
          <button type="submit" class="btn btn-primary">Actualizar Calificaciones</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Alumno Calificaciones -->

<!-- Modal Eliminar Alumno -->
<div class="modal fade" id="modalEliminarAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Alumno</h5>
        <a href="grupos_calif.php">
          <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </a>
      </div>
      <div class="modal-body">
        <h3>¿Seguro que deseas eliminar este alumno?</h3>
          <form action="process/delete-alumno.php" method="POST">
            <input type="hidden" name="id_alumno_check" id="bookId" value="" readonly required/>
            <input type="hidden" name="materia" value="<?php echo $materia_bd_alumno; ?>"/>
            <input type="hidden" name="semestre" value="<?php echo $semestre; ?>"/>
            <input type="hidden" name="grupo" value="<?php echo $grupo; ?>"/>
            <input type="hidden" name="materia_semestre" value="<?php echo $materia_semestre; ?>"/>            
            <input type="submit" class="btn btn-danger" value="Eliminar Alumno">
          </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Eliminar Alumno -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).on("click", ".open-AddBookDialog", function () {
         var myBookId = $(this).data('id');
         $(".modal-body #bookId").val( myBookId );
         // As pointed out in comments, 
         // it is unnecessary to have to manually call the modal.
         // $('#addBookDialog').modal('show');
    });
    </script>
    <?php 
        if (isset($_GET['id_alumno_check']) && !empty($_GET['id_alumno_check'])) {
        echo '<script type="text/javascript">
        $( document ).ready(function() {
            $("#modalCalificacionesAlumnoCheck").modal("toggle")
        });
        </script>';
      }
    ?>
  </body>
</html>
<?php }else{
  echo '<script type="text/javascript">';
  echo 'window.location="materias.php';
  echo '"</script>';
} ?>