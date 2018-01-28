 <?php
session_start();
?>
<select onchange="mostrarList(this.value)" id="est" name="est" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona una seccion</option>

                        <?php 
                        


                            require_once "../clases/seccion.class.php";

                            $misSecciones = new seccion();

                            $codigo = $_POST['cod_banda'];
                            $_SESSION["grad"] = $codigo;

                            $seccion = $misSecciones->cargaSeccionNom2($codigo);

                            foreach ($seccion as $row) {
                              
                              echo '

                              <option value="'.$row['id'].'">Seccion '.$row['seccion'].'</option>


                              ';

                            }


                            ?>



</select>

<div class="form-group">
    <div id="datos2"></div>
</div>