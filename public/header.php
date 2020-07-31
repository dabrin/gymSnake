<!DOCTYPE html>
<html lang="es-LA">
<head>
    <title>Gym Snake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <link rel="stylesheet" href="public/css/jquery-ui.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!--    <link rel="icon" type="image/png" href="public/images/logo.ico"/>-->

<link rel="icon" sizes="192x192" href="public/images/icon1.png">
<link rel="apple-touch-icon" href="public/images/icon1.png ">



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

    
    
    <link rel="stylesheet" href="public/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="public/css/aos.css">
    

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
            <a href="?controller=Login&action=defaultAction" class="p-2 pl-0"><span class="icon-user"></span></a>
            
              <a href="https://www.facebook.com/GymSnake/" target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="https://www.instagram.com/gym_snake_turrialba/"  target="_blank" class="p-2 pl-0"><span class="icon-instagram"></span></a>
              <a href="mailto:fe.gymsnake@gmail.com" target="_blank"><span><i class="fas fa-envelope"></i></span> </a><br><br>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="tel://+50688177225" class="d-flex align-items-center ml-auto mr-4">
                Héctor
                <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">88901565</span>
                </a>

                <a href="tel://+50688177225" class="d-flex align-items-center">
                Randall
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">88177225</span>
                </a>
                
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-navbar-wrap bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="?controller=index&action=defaultAction">Gym<strong>Snake</strong>  </a></h2>
              </div>

              

              <div class="col-10" style="display: flex; justify-content: flex-end">

              <nav class="navbar navbar-expand-lg navbar-dark  site-navigation text-right" role="navigation">
                <div class="container">
                <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                   

                    <div class="collapse navbar-collapse d-lg-none ml-md-0 mr-auto" id="navbarSupportedContent">

                      <ul class="navbar-nav mr-auto site-menu ">
                      <?php
                     if (!isset($_SESSION['nombre'])){?>
                      <li class="nav-item">
                          <a class="nav-link" href="#SobreNosotros">Sobre Nosotros</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Clases">Clases</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Clases">Sala de Pesas</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Tips">Tips de Entrenamiento</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Contactenos">Contáctenos</a>
                      </li> <?php } ?>
                     <?php
                     if (isset($_SESSION['nombre'])){

                  
                     ?>
                      <li class="nav-item">
                          <a class="nav-link" href="?controller=Admin&action=showClass"   >Opciones de Administrador</a>
                      </li>
                      <li>
                      <a class="nav-link" href="?controller=Admin&action=close">Cerrar</a>
                      </li>
                     <?php } ?>
                    
                       </ul>

                       
                    
                        </div>
                        </div>
                    </nav>
            



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    
