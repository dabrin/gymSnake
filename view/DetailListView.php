<?php include_once 'public/header.php';?>



<table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
            <!--  <th scope="col">#</th>-->
              
              <th scope="col">Nombre</th>
              <th scope="col">Tipo de Clase</th>
              <th scope="col">Horario</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($vars['listClases'] as $item){?>
            <tr>
              <td><?php echo $item[0];?> </td> 
              <td><?php echo $item[1];?></td>
              <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Ver clientes de esta clase</a></td>
              <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Editar</a></td>

              <?php } ?>
            </tr>
            <td><a type="button" class="btn btn-success" onclick="verRegistro('<?php echo $item[0]?>')">Crear clase</a></td>

        
          </tbody>
        </table>


    
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>






