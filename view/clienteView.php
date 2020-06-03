<?php include_once 'public/header.php';?>
  <div class="site-wrap">
    <div class="site-section bg-light">
      <div id="listado" class="container">
         <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-monday-tab" style="margin-left: 0.5em; " data-toggle="modal" data-target="#myModal" href="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Lunes</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-tuesday-tab" style="margin-left: 0.5em" data-toggle="modal" data-target="#myModal" href="#pills-tuesday" role="tab" aria-controls="pills-tuesday" aria-selected="false">Martes</a>
          </li>
          <li class="nav-item">
            <a class=" btn btn-primary" id="pills-wednesday-tab" style="margin-left: 0.5em" data-toggle="modal" data-target="#myModal" href="#pills-wednesday" role="tab" aria-controls="pills-wednesday" aria-selected="false">Miércoles</a>
          </li>
          <li class="nav-item">
            <a class=" btn btn-primary" id="pills-thursday-tab" style="margin-left: 0.5em" data-toggle="modal" data-target="#myModal" href="#pills-thursday" role="tab" aria-controls="pills-thursday" aria-selected="false">Jueves</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-friday-tab" style="margin-left: 0.5em" data-toggle="modal" data-target="#myModal" href="#pills-friday" role="tab" aria-controls="pills-friday" aria-selected="false">Viernes</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" id="pills-sunday-tab" style="margin-left: 0.5em" data-toggle="modal" data-target="#myModal" href="#pills-sunday" role="tab" aria-controls="pills-saturday" aria-selected="true">Sábado</a>
          </li>  
        </ul>
    <?php
        foreach ($vars['listClases'] as $item){?>
    <div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">             
              <div class="row bg-white p-4 align-items-center ">
                <div class="col-sm-2 col-md-2 col-lg-2"><?php echo $item[8]; ?></div>
                <div class="col-sm-4 col-md-4 col-lg-4"><span class="fas fa-stopwatch"></span> <?php echo $item[3];?> &mdash; <?php echo $item[4];?></div>
                <div class="col-sm-2 col-md-2 col-lg-2"><span ><i class="fas fa-dumbbell"></i></span> <?php echo $item[5];?></div>
                <div class="col-sm-2 col-md-2 col-lg-2"><span ><i class="fas fa-users"></i></span> <?php echo $item[6];?></div>
                <div class="col-sm-2 col-md-2 col-lg-2 text-md-right"><a class="btn btn-primary pill px-4 mt-3 mt-md-0"  onclick="add_idClase(<?php echo $item[0]?>)" data-toggle="modal" data-target="#myModal">Inscribirse</a></div>
              </div>
            </div> 
        </div>
      </div>  
      <?php }?>
      
    <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
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
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Contáctenos </h3></div>
              <div class="col-md-6">
                <p>San Rafael <br> Turrialba</p>    
              </div>
              <div class="col-md-6">
                Tel. + (506) 88888888 <br>
                Mail. gymsnake@gmail.com
              </div>
            </div>
            <div class="row">
              <div class="col-md-12"><h3 class="footer-heading mb-4 text-primary">Redes Sociales </h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="p-2 pl-0"><span target="_blank" class="icon-twitter"></span></a>
              <a href="https://www.facebook.com/GymSnake/" target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span target="_blank" class="icon-linkedin"></span></a>
              <a href="https://www.instagram.com/gym_snake_turrialba/"  target="_blank" class="p-2 pl-0"><span target="_blank" class="icon-instagram"></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This web page is made by Pablo Rojas 
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
</body>
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Realice aquí su inscripción a la clase seleccionada</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body block-schedule">
        <form class="p-5 bg-white" >
          <div class="row form-group">
            <input type="text" name="id_clase" id="id_clase" class="form-control" placeholder="id_clase" required>
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Nombre Completo</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="phone">Número de Teléfono</label>
              <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Número de Teléfono">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary pill px-4 mt-3 mt-md-0" id="btn1" value="Inscribirse" > 
            </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<script src="public/js/script.js"></script>