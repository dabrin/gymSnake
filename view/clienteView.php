<?php include_once 'public/header.php';?>

  <div class="site-wrap">

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            <h3>¡Ingresá tus datos, da click sobre el botón <b>Inscribirse</b> y tu espacio quedará reservado!
            <img src="https://img.icons8.com/fluent/48/000000/ok.png"/>
          </h3>
          
            <form action="?controller=Cliente&action=clienteRegister" class="p-5 bg-white" method="POST">
              <input  hidden type="text" name="id_clase" id="id_clase" class="form-control" value="<?php echo $_SESSION['id_clase'] ?>" required>
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
                  <input type="submit" class="btn btn-primary pill px-4 mt-3 mt-md-0" id="btn1" value="Inscribirse" >


                  <!--<button id="btn1">Básico</button>
-->
                   
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
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


<script>


function clear(){
  $('#nombre').val('');
  $('#telefono').val('');

}
 $("#btn1").click(function(e){
   e.preventDefault();
   var param={
  id_clase: $('#id_clase').val()
  ,nombre: $('#nombre').val()
  ,telefono: $('#telefono').val()
 }
  Swal.fire({
  title: '¿Está seguro que desea inscribirse en esta clase?',
  text: "En caso de querer cancelar su inscripción después de confirmada, debe de comunicarse al gimnasio!",
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: 'No',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, inscribirme!'
}).then(function(result){
  
  if (result.value) {
    $.ajax(
      {
        data:param,
        url:'?controller=Cliente&action=clienteRegister',
        type:'POST',
        success:function(response){
          Swal.fire({
           html:'Inscrito!<br>' + 'Lo estaremos esperando :)',
           type:'success',
           icon:'success'
          }
          );
          $("#listado").load(location.href + " #listado");
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
      'Su inscripción no se ha realizado :(',
      'error'
    )
  }
  
})
  

 });
  // 
</script>