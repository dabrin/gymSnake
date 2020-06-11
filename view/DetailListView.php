<?php include_once 'public/header.php';?>



<table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
            <!--  <th scope="col">#</th>-->
              
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


    
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>






