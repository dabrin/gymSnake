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


    <div class="col-sm-3 col-md-3 col-lg-3"><a href="?controller=Admin&action=claseView" class="btn btn-primary pill px-4 mt-3 mt-md-0"><span ><i class="fas fa-long-arrow-alt-left"></i></span> Volver </a></div>

    
<?php include_once 'public/footer.php';?>


<script src="public/js/jquery-3.3.1.min.js"></script>

<script src="public/js/script.js"></script>
