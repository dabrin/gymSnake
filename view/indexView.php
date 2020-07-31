<?php include_once 'public/header.php';?>

  <!-- Inicio del carusel-->  
    <div class="slide-one-item home-slider owl-carousel">
       
      <div class="site-blocks-cover" style="background-image: url(public/images/4.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Build Your <strong>Body</strong> Strong</h1>
            </div>
          </div>
        </div>
      </div> 
      
     

      <div class="site-blocks-cover" style="background-image: url(public/images/2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Build Your <strong>Body</strong> Strong</h1>
            </div>
          </div>
        </div>
      </div> 


       <div class="site-blocks-cover" style="background-image: url(public/images/4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Build Your <strong>Body</strong> Strong</h1>
            </div>
          </div>
        </div>
      </div> 

       

       <div class="site-blocks-cover" style="background-image: url(public/images/6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Build Your <strong>Body</strong> Strong</h1>
            </div>
          </div>
        </div>
      </div> 

    </div>
    <div id="SobreNosotros" class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
            <h2 style="color:darkgreen;" class="mb-3 text-uppercase">Sobre Nosotros <strong style="color:darkgreen;">Gym Snake</strong></h2>
            <ul class="site-block-check">
            
            <li> <p class="lead">Nuestra misión se enfoca en contribuir al desarrollo integral de los clientes 
              mediante el diseño y la aplicación de un conjunto de servicios que fortalezcan la salud física y mental con 
              la asesoría y acompañamiento de los mejores profesionales.</p> </li>
           
            
            <li><p class="lead">Nuestro gimnasio tiene la visión de ser líder, brindando calidad y bienestar 
              a nuestros miembros, generando valor humano y profesional a nuestra empresa, a nuestros colaboradores y a nuestra comunidad. </p>
              </li>
              </ul>
              <br>
            <p style="color:darkgreen;" class="lead">Extras:</p>
              <dl> 
              <dd><img src="https://img.icons8.com/pastel-glyph/24/000000/certificate.png"/> Entrenadores certificados y preparados.</dd>
              <dd><img src="https://img.icons8.com/pastel-glyph/24/000000/clock.png"/> Variedad de horarios.</dd>
              <dd><img src="https://img.icons8.com/wired/24/000000/building.png"/> Amplio espacio.</dd>
              <dd><img src="https://img.icons8.com/material-outlined/24/000000/trust.png"/>Los valores presentes en nuestro gimnasio son principalmente los siguientes: 
                respeto a la integridad de nuestros usuarios, empleados y proveedores, profesionalismo, ética, excelencia en nuestro trabajo, compromiso social y ambiental.
                
              </dd>
              <dd><img src="https://img.icons8.com/material-outlined/24/000000/ambulance.png"/><b>  Cumplimos con todas las medidas impuestas por el Ministerio
                de Salud para afrontar esta pandemia. Los cuidamos a ustedes y nos cuidamos a nosotros.
                
              </b></dd>
            </dl>
          </div>
          <div class="col-md-12 col-lg-6 ml-auto">
            <img src="public/images/about.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div id="Clases" class="border-bottom">
      <div class="row no-gutters">
      <?php foreach($vars['listTipoClases'] as $item){?>
        <div class="col-md-6 col-lg-3">
          <div class="w-100 h-100 block-feature p-5 bg-light">
            <span class="d-block mb-3">
              <span class="<?php echo $item[3]?> display-4"></span>
            </span>
            <h2> <?php echo $item[1];?></h2>
            <p><?php echo $item[2]?>
            </p>
            <br>
            <br>
            <br>
            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
              <a onclick="verRegistro('<?php echo $item[0]?>','1')" class="btn btn-primary pill px-4 mt-3 mt-md-0" >
              <span ><i class="fas fa-eye"></i></span> Ver horarios</a></div>
          </div>
        </div>
      <?php }?>
          </div>
        </div>

          <!--INICIO TIPS ENTRENAMIENTO QUEMADO-->
         <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="Tips">
            <h2 class="site-section-heading text-center">Datos Informativos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <div class="media-image">
                <img src="public/images/3.jpg" height="360" width="100%">
                <div class="media-image-body">
                  <h2><center>Reglamento</center></h3>
                </div>
              </div>
              
              <div class="media-image">
              <img src="public/images/5.jpg" height="360" width="100%">
                <div class="media-image-body">
                  <h2><center>Tarifas</center></h3>
                  
                </div>
              </div>
              <div class="media-image">
              <img src="public/images/1.jpg" height="360" width="100%">
                <div class="media-image-body">
                  <h2><center>Formas de pago</center></h3>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


          <!--INICIO TIPS ENTRENAMIENTO QUEMADO-->




      </div>
    </div> 
  </div>  
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
<script src="public/js/script.js"></script>


<?php include_once 'public/footer.php';?>
