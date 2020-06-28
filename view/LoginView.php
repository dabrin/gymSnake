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
                    <!--<button type="submit" id="btn1" class="btn btn-primary">Enviar</button>-->
                    <button type="submit" id="btn" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<br><br>
      
      <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>
  

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
         /* Swal.fire({
           html:'Inicio de sesión exitoso!<br>' + 'Bienvenido al apartado de administrador :)',
           type:'success',
           icon:'success'
          }
          );*/
          location.href="?controller=Admin&action=showClass"
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

<?php include_once 'public/footer.php';?>


