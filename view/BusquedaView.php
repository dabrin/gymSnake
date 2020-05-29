<?php include_once 'public/header.php';?>





<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12" style="max-width: 600px">
            <div class="card card-body justify-content-center">
                <h2>Busqueda de ruta</h2>
                <form action="">
                  <div class="form-group">
                        <label for="place">Ubicación</label>
                        <select class="form-control" id="place">
                            <option hidden>Seleccione</option>
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
                            <option hidden>Seleccione</option>
                            <option value="1">Natural</option>
                            <option value="2">Patrimonial</option>
                            <option value="2">Comercial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wifi">Tiempo de instancia</label>
                        <select class="form-control" id="wifi">
                            <option hidden>Seleccione</option>
                            <option value="1">Poco</option>
                            <option value="2">Medio</option>
                            <option value="3">Mucho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wifi">De preferencia con WIFI</label>
                        <select class="form-control" id="wifi">
                            <option hidden>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="card">Opción de pago con tarjeta</label>
                        <select class="form-control" id="card">
                            <option hidden>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="peets">Permiten mascotas</label>
                        <select class="form-control" id="peets">
                            <option hidden>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="night">Poseen servicios nocturnos</label>
                        <select class="form-control" id="night">
                            <option hidden>Seleccione</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </form>

                <a class="btn" href="?controller=Map&action=defaultAction">Busqueda</a>
            </div>
        </div>
    </div>
</div>



<div>

<!--<?php include_once 'public/footer.php';