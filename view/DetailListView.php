<?php include_once 'public/header.php';?>


<div id="container">

<?php
        foreach ($vars['listClases'] as $item){?>

<div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">   
            <div class="row bg-white p-4 align-items-center ">

            <div class="col-sm-2 col-md-2 col-lg-2">
              <Strong><span><i class="fas fa-calendar-day"></i></span></strong>
              
              <?php 
              
              switch ($item[2]) {
                
                case 1:
                    echo "Lunes";
                    break;
                case 2:
                    echo "Martes";
                    break;
                    case 3:
                    echo "Miércoles";
                    break;
                    case 4:
                    echo "Jueves";
                    break;
                    case 5:
                    echo "Viernes";
                    break;
                    case 6:
                    echo "Sábado";
                    break;
                    case 7:
                    echo "Domingo";
                   break;
            }
              
              ?>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2">
            <strong> <span class="fas fa-stopwatch"></span></strong>
              <?php echo $item[3]; ?>
              -
              <?php echo $item[4]; ?>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2">
            <strong> <span ><i class="fas fa-dumbbell"></i></span></strong>
              <?php echo $item[5]; ?>
            </div>

            <div class="col-sm-1 col-md-1 col-lg-1">
            <strong><span ><i class="fas fa-users"></i></span></strong>
              <?php echo $item[6]; ?>
            </div>


            <div class="col-sm-2 col-md-2 col-lg-2">
            <a type="button" style="color: aliceblue;"  class="btn btn-success" onclick="listarClienteClases('<?php echo $item[0]?>')">Ver clientes 
            <span ><i style="color: aliceblue;"  class="fas fa-eye"></i></span>
          </a>
            </div>

            <div class="col-sm-1 col-md-1 col-lg-1">
            <a type="button" class="btn btn-secondary" style="background-color: darkcyan; color: aliceblue; border-color: darkcyan;" 
            data-toggle="modal" data-target="#myModal"
            onclick="showClaseById('<?php echo $item[0]?>','<?php echo $item[1]?>','<?php echo $item[2]?>','<?php echo $item[3]?>'
            ,'<?php echo $item[4]?>','<?php echo $item[5]?>','<?php echo $item[6]?>')">Editar  
              <i class="fa fa-edit" aria-hidden="true"></i> 
            </a>

            </div>

            <div class="col-sm-2 col-md-2 col-lg-2">
            <a type="button" class="btn btn-primary" style="background-color: tomato; color: aliceblue; border-color: tomato;" onclick="eliminarClase('<?php echo $item[0]?>')">Eliminar 
               <i class="fas fa-trash"></i>
              </a>
            </div>

            </div>
            </div>
        </div>
</div>
<?php }?>

</div>

<div class="col-sm-3 col-md-3 col-lg-3">
<a type="button" style="background-color: chocolate; color: aliceblue; border-color: chocolate;" class="btn btn-success" 
 onclick="clear_ClaseModal()" data-toggle="modal" data-target="#createClass">Crear clase
 <i class="fas fa-plus"aria-hidden="true"></i>
</a>

    </div>
    <br>


 <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=Admin&action=showClass" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>



<!--
  
<table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
              
            <th scope="col">Nombre</th>
              <th scope="col">Tipo de Clase</th>
              <th scope="col">Ver</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($vars['listClases'] as $item){?>
            <tr>
              <td><?php echo $item[0];?> </td> 
              <td><?php echo $item[1];?></td>
              <td><a type="button" class="btn btn-success" onclick="listarClienteClases('<?php echo $item[0]?>')">Ver clientes <span ><i class="fas fa-eye"></i></span></a></td>
              <td><a type="button" class="btn btn-secondary" onclick="verRegistro('<?php echo $item[0]?>')">Editar  <i class="fa fa-edit" aria-hidden="true"></i> </a>
              <a type="button" class="btn btn-primary" onclick="verRegistro('<?php echo $item[0]?>')">Eliminar  <i class="fas fa-trash"></i></a></td>
              <?php } ?>
            </tr>
            <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Crear clase</a></td>
        
          </tbody>
        </table>
-->



    
<?php include_once 'public/footer.php';?>


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









<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actualizar clase</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form id="" class="p-5 bg-white" >
          <div class="row form-group">
          <input hidden type="text" name="id_clase" id="id_clase" class="form-control" placeholder="id_clase" required>
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="id_tipo_clase">Tipo de Clase</label>
             <input type="number" name="id_tipo_clase" id="id_tipo_clase_" class="form-control" placeholder="Tipo de Clase" required>
           </div> 
         </div>
         <div class="row form-group">
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="dia_">Día</label>
             <input type="number" name="dia" id="dia" class="form-control" placeholder="Día" required>
           </div>
         </div>
         <div class="row form-group">
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="hora_ini">Hora de Inicio</label>
             <input type="text" name="hora_ini" id="hora_ini" class="form-control" placeholder="Hora de Inicio" required></input>
           </div>
         </div>
         <div class="row form-group">
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="hora_fin">Hora de Finalización</label>
             <input type="text" name="hora_fin" id="hora_fin" class="form-control" placeholder="Hora de Finalización" required></input>
           </div>
         </div>
         <div class="row form-group">
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="instructor">Instructor</label>
             <input type="text" name="instructor" id="instructor" class="form-control" placeholder="Instructor" required></input>
           </div>
         </div>
         <div class="row form-group">
           <div class="col-md-12 mb-3 mb-md-0">
             <label class="font-weight-bold" for="cupos">Cupos</label>
             <input type="number" name="cupos" id="cupos" class="form-control" placeholder="Cupos" required></input>
           </div>
         </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input class="btn btn-primary pill px-4 mt-3 mt-md-0" onclick="actualizarClase()" value="Guardar" > 
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


<!--            -->

<div class="modal" id="createClass">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Nueva clase</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form id="" class="p-5 bg-white" >
          <div class="row form-group">
           
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="id_tipo_clase">Tipo de Clase</label>
              <input type="number" name="id_tipo_clase" id="id_tipo_clase1_" class="form-control" placeholder="Tipo de Clase" required>
            </div> 
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="dia">Día</label>
              <input type="number" name="dia" id="dia_" class="form-control" placeholder="Día" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="hora_ini">Hora de Inicio</label>
              <input type="text" name="hora_ini" id="hora_ini_" class="form-control" placeholder="Hora de Inicio" required></input>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="hora_fin">Hora de Finalización</label>
              <input type="text" name="hora_fin" id="hora_fin_" class="form-control" placeholder="Hora de Finalización" required></input>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="instructor">Instructor</label>
              <input type="text" name="instructor" id="instructor_" class="form-control" placeholder="Instructor" required></input>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="cupos">Cupos</label>
              <input type="number" name="cupos" id="cupos_" class="form-control" placeholder="Cupos" required></input>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input class="btn btn-primary pill px-4 mt-3 mt-md-0" onclick="crearClase1()" value="Guardar" > 
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