<?php include_once 'public/header.php';?>


<div class="site-wrap">
<div class="site-section bg-light">

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12" style="max-width: 600px">
            <div class="card card-body justify-content-center">
                <h2>Incio de sesión</h2>
                <form action="?controller=Login&action=login" method="POST">
                    <div class="form-group">
                        <label for="text">Nombre de usuario</label>
                        <input type="text" class="form-control" name="user"id="user" 
                               placeholder="Escriba su usuario">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" name="pass"id="pass" 
                               placeholder="Escriba su contraseña">
                    </div>
                    <button type="submit" id="btn1" class="btn btn-primary">Enviar</button>
                    <button type="submit" id="btn" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

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




<script>


function clear(){
  $('#user').val('');
  $('#pass').val('');

}
 $("#btn").click(function(e){
   e.preventDefault();
   var param={
    user: $('#user').val()
  ,pass: $('#pass').val()
 }
  Swal.fire({
  title: '¿Está seguro que desea iniciar sesión?',
  text: "En caso de haber ingresado los datos de forma incorrecta, presione sobre el botón 'No' !",
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: 'No',
  confirmButtonColor: '#3085d6', 
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, iniciar!'
}).then(function(result){
  
  if (result.value) {
    $.ajax(
      {
        data:param,
        url:'?controller=Login&action=login',
        type:'POST',
        success:function(response){
          Swal.fire({
           html:'Inicio de sesión exitoso!<br>' + 'Bienvenido al apartado de administrador :)',
           type:'success',
           icon:'success'
          }
          );
         // $("#listado").load(location.href + " #listado");
          clear();
        }
      }
    );
  } 
  else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    Swal.fire(
      'Cancelado!',
      'No se ha realizado el inicio de sesión. :(',
      'error'
    )
  }
  
})
  

 });
  // 
</script>