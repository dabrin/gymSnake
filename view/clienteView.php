<?php include_once 'public/header.php';?>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    </div>

       
  

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(public/images/about.jpeg);" >
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h1 class="mb-5">Inscribete en la clase</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="?controller=Cliente&action=clienteRegister" class="p-5 bg-white" method="POST">
              <input hidden type="text" name="id_clase" id="id_clase" class="form-control" value="7" required>
              <div class="row form-group">
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
                  <input type="submit" class="btn btn-primary pill px-4 mt-3 mt-md-0" id="agregar" value="Inscribirse" >
                   
                </div>
              </div>

  
            </form>
          </div>

         
        </div>
        <table class="table table-hover table-sm" id=listado>
          <tr>
              <th scope="col">Nombre Completo</th>
              <th scope="col">Teléfono</th>
            </tr>

            <?php
               foreach ($vars['listRegisterClient'] as $item) {
            ?>

            <tr>

              <td> <?php echo $item[0]; ?> </td>
              <td> <?php echo $item[1]; ?> </td>
              
            </tr>

            <?php
               }
            ?>
           

        </table>
      </div>
      


    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>


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

  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>