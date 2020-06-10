<?php include_once 'public/header.php';?>


<table class="table table-hover table-sm" id=listado>
          <thead>
            <tr>
            <!--  <th scope="col">#</th>-->
              
              <th scope="col">Clase</th>
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
          <?php foreach($vars['listClases'] as $item){?>
            <tr>
              <td><?php echo $item[1];?> </td> 
              <td><button type="button" class="btn btn-success" onclick="listarClases('<?php echo $item[0]?>')">Ver programación clases</button></td>
              <td><button type="button" class="btn btn-primary">Editar</button> </td>
              <?php } ?>
            </tr>
            <td><button type="button" class="btn btn-primary">Crear Tipo Clase</button> </td>

        
          </tbody>
        </table>

 
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>