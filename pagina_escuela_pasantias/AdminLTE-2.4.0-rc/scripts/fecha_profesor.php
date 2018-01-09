<?php
session_start();

$_SESSION["secc"] = $_POST['cob_banda'];

?>
<br>

              <div class="form-group">
                <label>Fecha:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" onchange="mostList(this.value)" id="estad" name="estad" class="form-control pull-left" id="datepicker" style="width:250px;">
                </div>
                <!-- /.input group -->
              </div>

<div class="form-group">
    <div id="datos3"></div>
</div>