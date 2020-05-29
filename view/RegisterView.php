<?php include_once 'public/header.php';?>

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12" style="max-width: 600px">
            <div class="card card-body justify-content-center">
                <h2>Registrarse</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="name" class="form-control" id="email" 
                               placeholder="Escriba su nombre completo">
                    </div>
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
                    <div class="form-group">
                        <h5>Aspectos favoritos</h5>
                        <p>Por favor, seleccione las características 
                            de sus lugares favoritos</p>
                        <div class="alert alert-info" role="alert">
                            Este apartado es opcional. Podrá modificar esta información más tarde.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="place">Ubicación</label>
                        <select class="form-control" id="place">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Turrialba</option>
                            <option value="2">La Suiza</option>
                            <option value="3">Peralta</option>
                            <option value="4">Santa Cruz</option>
                            <option value="5">Santa Teresita</option>
                            <option value="6">Pavones</option>
                            <option value="7">Tuis</option>
                            <option value="8">Santa Rosa</option>
                            <option value="9">Tres Equis</option>
                            <option value="10">La Isabel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="class">Tipo de lugar</label>
                        <select class="form-control" id="class">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Natural</option>
                            <option value="2">Patrimonial</option>
                            <option value="2">Comercial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wifi">Tiempo de instancia</label>
                        <select class="form-control" id="wifi">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Poco</option>
                            <option value="2">Medio</option>
                            <option value="3">Mucho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wifi">De preferencia con WIFI</label>
                        <select class="form-control" id="wifi">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="card">Opción de pago con tarjeta</label>
                        <select class="form-control" id="card">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="peets">Permiten mascotas</label>
                        <select class="form-control" id="peets">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="night">Poseen servicios nocturnos</label>
                        <select class="form-control" id="night">
                            <option selected disabled>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary">Registarse</button>
                    <div><a href="?controller=Login&action=defaultAction">Login</a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--<?php include_once 'public/footer.php';