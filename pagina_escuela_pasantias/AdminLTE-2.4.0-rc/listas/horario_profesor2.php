<?php
  session_start();
?>
<div class="form-group">
                  
                    <br>
                    <select onchange="mostrarInfo(this.value)" id="grado" name="grado" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona un grado</option>

                        <?php 
                        


                            require_once "../clases/grados.class.php";

                            $_SESSION['area'] = $_POST['cod_banda'];
                            $misGrados = new grado();

                            $grado = $misGrados->cargarGradoasignacion();

                            foreach ($grado as $row) {
                              
                              echo '

                              <option value="'.$row['id'].'">'.$row['grado'].' '.$row['seccion'].'</option>


                              ';

                            }


                            ?>


                  </select>
                </div>


                <div class="form-group">
                    <div id="datos2"></div>
                </div>