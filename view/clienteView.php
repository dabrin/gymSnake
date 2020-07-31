
<?php include_once 'public/header.php';?>
  <div class="site-wrap">
    <div class="site-section bg-light">
      <div id="listado" class="container">
         <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-monday-tab" style="margin-left: 0.5em; " onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','1')" aria-controls="pills-monday" aria-selected="true">Lunes</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-tuesday-tab" style="margin-left: 0.5em" onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','2')" aria-controls="pills-tuesday" aria-selected="false">Martes</a>
          </li>
          <li class="nav-item">
            <a class=" btn btn-primary" id="pills-wednesday-tab" style="margin-left: 0.5em"onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','3')" aria-controls="pills-wednesday" aria-selected="false">Miércoles</a>
          </li>
          <li class="nav-item">
            <a class=" btn btn-primary" id="pills-thursday-tab" style="margin-left: 0.5em"onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','4')" role="tab" aria-controls="pills-thursday" aria-selected="false">Jueves</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-friday-tab" style="margin-left: 0.5em"onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','5')"  role="tab" aria-controls="pills-friday" aria-selected="false">Viernes</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-sunday-tab" style="margin-left: 0.5em"onclick="verRegistro('<?php echo $_SESSION['id_clase']?>','6')"  role="tab" aria-controls="pills-saturday" aria-selected="true">Sábado</a>
          </li>  
        </ul>
    <?php
        foreach ($vars['listClases'] as $item){?>
    <div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">             
              <div class="row bg-white p-4 align-items-center ">
                <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $item[9]; ?></div>
                <div class="col-sm-4 col-md-4 col-lg-4"><span class="fas fa-stopwatch"></span> <?php echo $item[3];?> &mdash; <?php echo $item[4];?></div>
                <div class="col-sm-2 col-md-2 col-lg-2"><span ><i class="fas fa-dumbbell"></i></span> <?php echo $item[5];?></div>
                <div class="col-sm-2 col-md-2 col-lg-2"><span ><i class="fas fa-users"></i></span> <?php echo $item[6];?></div>
               
               <?php 
                  if($item[6]==0){ 
                    ?>
                     <div class="col-sm-2 col-md-2 col-lg-2 text-md-right"><button class="btn btn-primary pill px-4 mt-3 mt-md-0" style="background-color: tomato; color: aliceblue; border-color: tomato;" disabled="disabled" onclick="" data-toggle="modal" data-target="#myModal">Sin Cupos   </button></div>
                    <?php }
                    else { ?>
                <div class="col-sm-2 col-md-2 col-lg-2 text-md-right"><button class="btn btn-primary pill px-4 mt-3 mt-md-0"  onclick="add_idClase(<?php echo $item[0]?>)" data-toggle="modal" data-target="#myModal">Inscribirse</button></div>
                <?php }?>
              </div>
            </div> 
        </div>
      </div>  
      <?php }?>

      <br><br>
      
    <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>

    <br><br>
    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

  
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="public/js/jquery-ui.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.stellar.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/bootstrap-datepicker.min.js"></script>
    <script src="public/js/aos.js"></script>

  <script src="public/js/main.js"></script>


  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Realice aquí su inscripción a la clase seleccionada</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body block-schedule">
        <form id="newAccount" class="p-5 bg-white" >
          <div class="row form-group">
            <input hidden type="text" name="id_clase" id="id_clase" class="form-control" placeholder="id_clase" required>
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Nombre Completo</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="phone">Número de Teléfono</label>
              <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Número de Teléfono" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="button" class="btn btn-primary pill px-4 mt-3 mt-md-0" id="btn1" value="Inscribirse" > 
            </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" style="background-color: red; color: aliceblue;" class="btn" data-dismiss="modal">Cerrar</button>
        </div>

        <style>
          .error{
            color: red;
          }
        </style>

      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script src="public/js/script.js"></script>

<?php include_once 'public/footer.php';?>
