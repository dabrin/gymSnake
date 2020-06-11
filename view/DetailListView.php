<?php include_once 'public/header.php';?>


<?php
        foreach ($vars['listClases'] as $item){?>

<div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">   
            <div class="row bg-white p-4 align-items-center ">

            <div class="col-sm-2 col-md-2 col-lg-2">
              <Strong>Fecha:</strong>
              <?php echo $item[2]; ?>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
            <strong> Horario:</strong>
              <?php echo $item[3]; ?>
              -
              <?php echo $item[4]; ?>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
            <a type="button" style="color: aliceblue;"  class="btn btn-success" onclick="listarClienteClases('<?php echo $item[0]?>')">Ver clientes 
            <span ><i style="color: aliceblue;"  class="fas fa-eye"></i></span>
          </a>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2">
            <a type="button" class="btn btn-secondary" style="background-color: darkcyan; color: aliceblue; border-color: darkcyan;" onclick="verRegistro('<?php echo $item[0]?>')">Editar
              <i class="fa fa-edit" aria-hidden="true"></i> 
            </a>
            </div>

            <div class="col-sm-2 col-md-2 col-lg-2">
            <a type="button" class="btn btn-primary" style="background-color: tomato; color: aliceblue; border-color: tomato;" onclick="verRegistro('<?php echo $item[0]?>')">Eliminar 
               <i class="fas fa-trash"></i>
              </a>
            </div>

            </div>
            </div>
        </div>
</div>
<?php }?>

<div class="col-sm-3 col-md-3 col-lg-3">
<a type="button" style="background-color: chocolate; color: aliceblue; border-color: chocolate;" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Crear clase
 <i class="fas fa-plus"aria-hidden="true"></i>
</a>
    </div>
    <br>


 <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>



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

<script src="public/js/script.js"></script>






