<?php include_once 'public/header.php';?>


<div id="container">


<?php
        foreach ($vars['listClases'] as $item){?>



    <div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">   
            <div class="row bg-white p-4 align-items-center ">


            <div class="col-sm-3 col-md-3 col-lg-3">
              <strong> <?php echo $item[1]; ?> </strong>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
              <button type="button" class="btn btn-success" onclick="listarClases('<?php echo $item[0]?>')">Ver programación de clases
              <span ><i style="color: aliceblue;" class="fas fa-eye"></i></span>
            </button>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
            <button type="button" class="btn btn-secondary" style="background-color: darkcyan; color: aliceblue; border-color: darkcyan;" data-toggle="modal" data-target="#myModal" onclick="show_tipoClaseById('<?php echo $item[0]?>','<?php echo $item[1]?>','<?php echo $item[3]?>')">Editar  <i class="fa fa-edit" aria-hidden="true"></i></button>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 text-md-right">
            <a type="button" class="btn btn-danger" style="background-color: tomato; color: aliceblue; border-color: tomato;" onclick="eliminarTipoClase('<?php echo $item[0]?>')">Eliminar <i class="fas fa-trash"></i></a>
            </div>

            </div>
            </div>
        </div>
    </div>
    <?php }?>

</div>

    
    <div class="col-sm-3 col-md-3 col-lg-3">
    <button type="button" class="btn btn-secondary" style="background-color: chocolate; color: aliceblue; border-color: chocolate;" onclick="clear_TipoClaseModal()" data-toggle="modal" data-target="#createClass">Crear  <i class="fas fa-plus"aria-hidden="true"></i></button>
    </div>
    <br>


    <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>


    
<!--
  <table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
              
              <th scope="col">Tipo Clase</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($vars['listClases'] as $item){?>
            <tr>
              <td><?php echo $item[1];?> </td> 
              <td><button type="button" class="btn btn-success" onclick="listarClases('<?php echo $item[0]?>')">Ver programación clases</button></td>
              <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" onclick="show_tipoClaseById('<?php echo $item[0]?>','<?php echo $item[1]?>','<?php echo $item[3]?>')">Editar  <i class="fa fa-edit" aria-hidden="true"></i></button> </td>
              <td><a type="button" class="btn btn-danger">Eliminar <i class="fas fa-trash"></i></a>  </td>
              <?php } ?>
            </tr>
            <td><button type="button" class="btn btn-secondary" onclick="clear_TipoClaseModal()" data-toggle="modal" data-target="#myModal">Crear  <i class="fas fa-plus"aria-hidden="true"></i></button> </td>

        
          </tbody>
        </table>
-->



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




<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tipo Clase</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form id="" class="p-5 bg-white" >
          <div class="row form-group">
            <input hidden type="text" name="id_clase" id="id_clase" class="form-control" placeholder="id_clase" required>
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="icono">Icono</label>
              <input type="text" name="icono" id="icono" class="form-control" placeholder="Icono" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="descricion">Descripcion</label>
              <textarea type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Escriba aquí una descripción..." required></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input class="btn btn-primary pill px-4 mt-3 mt-md-0" onclick="actualizarTipoClase()" value="Guardar" > 
            </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="createClass">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tipo Clase</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form id="" class="p-5 bg-white" >
          <div class="row form-group">
           
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre_" class="form-control" placeholder="Nombre" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="icono">Icono</label>
              <input type="text" name="icono" id="icono_" class="form-control" placeholder="Icono" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="descricion">Descripcion</label>
              <textarea type="text" name="descripcion" id="descripcion_" class="form-control" placeholder="Escriba aquí una descripción..." required></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input class="btn btn-primary pill px-4 mt-3 mt-md-0" onclick="crearTipoClase1()" value="Guardar" > 
            </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>