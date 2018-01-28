<?php
session_start();
?>
<br>
<select onchange="mostList(this.value)" id="estad" name="estad" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona una materia</option>

                        <?php 
                        


                            require_once "../clases/materia.class.php";

                            $misMaterias = new materia();
                           

                            $grado= $_SESSION["grad"];
                            $seccion = $_POST['cob_banda'];

                            $_SESSION["secc"] = $seccion;


                            $materia = $misMaterias->cargarMaterias2($grado,$seccion);

                            foreach ($materia as $row) {
                              
                              echo '

                              <option value="'.$row['id'].'">'.$row['nombre'].' ('.$row['inicio'].' - '.$row['fin'].')</option>


                              ';

                            }


                            ?>



</select>

<div class="form-group">
    <div id="datos3"></div>
</div>