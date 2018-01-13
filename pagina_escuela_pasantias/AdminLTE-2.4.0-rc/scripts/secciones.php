<?php
session_start();

?>
 <select onchange="mostrarLista(this.value)" id="estado" name="estado" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona una seccion</option>

                        <?php 
                        


                            require_once "../clases/seccion.class.php";

                            $misSecciones = new seccion();
                            $codigo = $_POST['grado'];
                            $_SESSION['grad'] = $codigo;

                            $seccion = $misSecciones->cargaSeccions();

                            foreach ($seccion as $row) {
                              
                              echo '

                              <option value="'.$row['id_seccion'].'">Seccion '.$row['nombre'].'</option>


                              ';

                            }


                            ?>



</select>

<div class="form-group">
    <div id="datos2">
      




    </div>
</div>