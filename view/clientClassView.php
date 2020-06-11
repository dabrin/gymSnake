<?php include_once 'public/header.php';?>


 <?php foreach($vars['listClientes'] as $item){?>




    <div id="list"class="block-schedule">
        <div class="fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">  
            <div class="row-wrap">   
            <div class="row bg-white p-4 align-items-center ">

            <div class="col-sm-4 col-md-4 col-lg-4">
              <strong> Cliente:  </strong>
              <?php echo $item[0]; ?>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
              <strong> Teléfono:   </strong>
              <?php echo $item[1]; ?>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
            <a type="button" style="background-color: tomato; color: aliceblue; border-color: tomato;" class="btn btn-primary" onclick="delete_client('<?php echo $item[2]?>')">Eliminar Cliente
            <i class="fas fa-trash"></i>
          </a>
            </div>

            </div>
            </div>
        </div>
    </div>

    <?php }?>

    <br>


    <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=index&action=defaultAction" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>



<!--
  <table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
              
            <th scope="col">Nombre</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Opción</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($vars['listClientes'] as $item){?>
            <tr>
              <td><?php echo $item[0];?> </td> 
              <td><?php echo $item[1];?></td>
              -<td><a type="button" class="btn btn-primary" onclick="delete_client('<?php echo $item[2]?>')">Eliminar <i class="fas fa-trash"></i></a></td>

              <?php } ?>
            </tr>
            <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Crear clase</a></td>

        
          </tbody>
        </table
-->


    
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>
