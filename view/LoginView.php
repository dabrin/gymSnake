<?php include_once 'public/header.php';?>

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12" style="max-width: 600px">
            <div class="card card-body justify-content-center">
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" 
                               placeholder="Escriba su correo">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" 
                               placeholder="Escriba su contraseña">
                    </div>
                    <button type="button" class="btn btn-primary">Enviar</button>
                    <div><a href="?controller=Register&action=defaultAction">Registrarse</a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--<?php include_once 'public/footer.php';
