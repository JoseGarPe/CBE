<?php
session_start();
?>
<select onchange="mostrarLista(this.value)" id="estado" name="estado" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona una seccion</option>

                        <?php 
                        


                            require_once "../clases/seccion.class.php";

                            $misSecciones = new seccion();
                            $codigo = $_POST['cod_banda'];
                            $_SESSION["grad"] = $codigo;

                            $profesor= $_SESSION["profesor"];

                            $seccion = $misSecciones->cargarSeccion($codigo,$profesor);

                            foreach ($seccion as $row) {
                              
                              echo '

                              <option value="'.$row['id'].'">Seccion '.$row['nombre'].'</option>


                              ';

                            }


                            ?>



</select>

<div class="form-group">
    <div id="datos2"></div>
</div>