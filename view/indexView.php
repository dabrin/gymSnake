<?php include_once 'public/header.php';?>

  <!-- Inicio del carusel-->  
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover" style="background-image: url(public/images/3.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Get In Shape &amp; Be <strong>Healthy</strong></h1>
            </div>
          </div>
        </div>
      </div>  
      <div class="site-blocks-cover" style="background-image: url(public/images/4.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
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
            <h2 class="mb-3 text-uppercase">Sobre Nosotros <strong class="text-black font-weight-bold">Gym Snake</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque accusamus, rerum illo facilis reiciendis.</p>
            <p class="mb-4">Iste aut dolorem veritatis saepe nesciunt distinctio voluptas sapiente sunt perspiciatis autem minima, iure provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, quas.</p>
            <ul class="site-block-check">
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
              <li>Nemo, voluptate? Voluptates odit, aperiam nostrum! Ipsa.</li>
              <li>Itaque voluptatum ducimus aliquam, est fuga molestiae?</li>
              <li>Accusamus porro at commodi delectus, nesciunt molestiae.</li>
            </ul>
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
              <a onclick="verRegistro('<?php echo $item[0]?>')" class="btn btn-primary pill px-4 mt-3 mt-md-0" >
              <span ><i class="fas fa-eye"></i></span> Ver horarios</a></div>
          </div>
        </div>
      <?php }?>
          </div>
        </div>
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
</body>
<script src="public/js/script.js"></script>

