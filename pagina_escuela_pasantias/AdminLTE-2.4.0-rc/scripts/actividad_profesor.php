<?php
session_start();
?>
<br>
<select onchange="mtList(this.value)" id="estad" name="estad" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona una materia</option>

                        <?php 
                        


                            require_once "../clases/actividad.class.php";

                            $misactividad = new actividad();
                           

                            $profesor= $_SESSION["profesor"];
                            $grado= $_SESSION["grad"];
                            $seccion = $_SESSION["secc"];
                            $materia = $_POST['cob_banda'];

                             $_SESSION["mat"] = $materia;

                            $actividad = $misactividad->cargarnotaActividad($seccion,$grado,$materia);

                            foreach ($actividad as $row) {
                              
                              echo '

                              <option value="'.$row['id'].'">'.$row['nombre'].' </option>


                              ';

                            }


                            ?>



</select>

<div class="form-group">
    <div id="datos4"></div>
</div>