<center> <div class="box" style='width: 90%'>
            <div class="box-header">
             <center> <h2 class="box-title">Horarios</h2> </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed" style='text-align:center;'>

                <tr>
                  <th style="width: 100px"><center>Hora</center></th>
                  <th><center>Lunes</center></th>
                  <th><center>Martes</center></th>
                  <th><center>Miercoles</center></th>
                  <th><center>Jueves</center></th>
                  <th><center>Viernes</center></th>
                </tr>



                   <?php 


                            require_once "../clases/horario.class.php";

                            $grado = $_POST['cod_banda'];
                            $mishorarios = new mihorario();

                            $horario = $mishorarios->cargarhorario();

                            $hor = $mishorarios->cargarphorario();

                            $a = 0;
                            $b = 0;
                            $c = 0;
                            $d = 0;
                            $e = 0;

                            foreach ($horario as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["hora_inicio"].' - '.$row["hora_fin"].'</td>
                  <td>
            <form role="form" name="formulario'.$a.'" id="formulario'.$a.'">
                <div class="box-body">
                                    
                                    <input type="text" class="form-control" style="display:none" value="'.$row["id_horario"].'" id="codH" name="codH">
                                    <input type="text" class="form-control" style="display:none" value="Lunes" id="codD" name="codD">
                                    <input type="text" class="form-control" style="display:none" value="'.$grado.'" id="grado" name="grado">
                                    <center><select  id="estado" name="estado" class="form-control select2" style="width: 75%;">
                                          <option value="">Profesores</option>';

                                            foreach ($hor as $raw) {
                                            
                                            echo '

                                            <option value="'.$raw['id'].'">'.$raw['profesor'].'</option>


                                            ';
                                            }
                                          
                                    echo '</center></select>

                  </div>
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:enviar_formulario('.$a.')">Guardr</a>
              </div>
            </form>    
                </td>

                <td>
            <form role="form" name="formulario'.$b.'" id="formulario'.$b.'">
                <div class="box-body">
                                    
                                    <input type="text" class="form-control" style="display:none" value="'.$row["id_horario"].'" id="codH" name="codH">
                                    <input type="text" class="form-control" style="display:none" value="Lunes" id="codD" name="codD">
                                    <input type="text" class="form-control" style="display:none" value="'.$grado.'" id="grado" name="grado">
                                    <center><select  id="estado" name="estado" class="form-control select2" style="width: 75%;">
                                          <option value="">Profesores</option>';

                                            foreach ($hor as $rew) {
                                            
                                            echo '

                                            <option value="'.$rew['id'].'">'.$rew['profesor'].'</option>


                                            ';
                                            }
                                          
                                    echo '</center></select>

                  </div>
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:enviar_formulario('.$b.')">Guardr</a>
              </div>
            </form>    
                </td>

                <td>
            <form role="form" name="formulario'.$c.'" id="formulario'.$c.'">
                <div class="box-body">
                                    
                                    <input type="text" class="form-control" style="display:none" value="'.$row["id_horario"].'" id="codH" name="codH">
                                    <input type="text" class="form-control" style="display:none" value="Lunes" id="codD" name="codD">
                                    <input type="text" class="form-control" style="display:none" value="'.$grado.'" id="grado" name="grado">
                                    <center><select  id="estado" name="estado" class="form-control select2" style="width: 75%;">
                                          <option value="">Profesores</option>';

                                            foreach ($hor as $riw) {
                                            
                                            echo '

                                            <option value="'.$riw['id'].'">'.$riw['profesor'].'</option>


                                            ';
                                            }
                                          
                                    echo '</center></select>

                  </div>
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:enviar_formulario('.$c.')">Guardr</a>
              </div>
            </form>    
                </td>

                <td>
            <form role="form" name="formulario'.$d.'" id="formulario'.$d.'">
                <div class="box-body">
                                    
                                    <input type="text" class="form-control" style="display:none" value="'.$row["id_horario"].'" id="codH" name="codH">
                                    <input type="text" class="form-control" style="display:none" value="Lunes" id="codD" name="codD">
                                    <input type="text" class="form-control" style="display:none" value="'.$grado.'" id="grado" name="grado">
                                    <center><select  id="estado" name="estado" class="form-control select2" style="width: 75%;">
                                          <option value="">Profesores</option>';

                                            foreach ($hor as $row) {
                                            
                                            echo '

                                            <option value="'.$row['id'].'">'.$row['profesor'].'</option>


                                            ';
                                            }
                                          
                                    echo '</center></select>

                  </div>
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:enviar_formulario('.$d.')">Guardr</a>
              </div>
            </form>    
                </td>

                <td>
            <form role="form" name="formulario'.$e.'" id="formulario'.$e.'">
                <div class="box-body">
                                    
                                    <input type="text" class="form-control" style="display:none" value="'.$row["id_horario"].'" id="codH" name="codH">
                                    <input type="text" class="form-control" style="display:none" value="Lunes" id="codD" name="codD">
                                    <input type="text" class="form-control" style="display:none" value="'.$grado.'" id="grado" name="grado">
                                    <center><select  id="estado" name="estado" class="form-control select2" style="width: 75%;">
                                          <option value="">Profesores</option>';

                                            foreach ($hor as $ruw) {
                                            
                                            echo '

                                            <option value="'.$ruw['id'].'">'.$ruw['profesor'].'</option>


                                            ';
                                            }
                                          
                                    echo '</center></select>

                  </div>
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:enviar_formulario('.$e.')">Guardr</a>
              </div>
            </form>    
                </td>
               
                                  

                                <tr>';
                                $a = $a + 1;
                                $b = $b + 1;
                                $c = $c + 1;
                                $d = $d + 1;
                                $e = $e + 1;
                            }

                            ?>

                
              </table>
            </div>
            <!-- /.box-body -->
          </div></center>