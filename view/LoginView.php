<?php include_once 'public/header.php';?>

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12" style="max-width: 600px">
            <div class="card card-body justify-content-center">
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" 
                               placeholder="Escriba su correo">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" 
                               placeholder="Escriba su contraseña">
                    </div>
                    <button type="button" class="btn btn-primary">Enviar</button>
                    <div><a href="?controller=Register&action=defaultAction">Registrarse</a></div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="">
<footer class="site-footer">
      <div  class="container">
        <div class="row">
       
          <div id=Contactenos class="col-lg-5">
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
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | This web page is made by Pablo Rojas and Dabrin Nájera 
            </p>
          </div>
          
        </div>
      </div>
    </footer>
    </div>
</body>