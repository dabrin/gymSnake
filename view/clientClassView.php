<?php include_once 'public/header.php';?>
<table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
            <!--  <th scope="col">#</th>-->
              
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
              <!--<td><a type="button" class="btn btn-success" onclick="verRegistro')">Ver clientes de esta clase</a></td>
              --><td><a type="button" class="btn btn-primary" onclick="delete_client('<?php echo $item[2]?>')">Eliminar <i class="fas fa-trash"></i></a></td>

              <?php } ?>
            </tr>
            <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Crear clase</a></td>

        
          </tbody>
        </table>


    
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>
