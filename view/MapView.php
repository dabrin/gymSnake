<?php include_once 'public/header.php';?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ_srRNAfggg6OV60H77CUoU82C8ivpZY&callback=initMap"async defer></script>
<script src="public/js/localization.js"></script>
<script type="text/javascript" src="public/js/map.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Rutas</h3>
                </div>
                <div id="map" class="card-body" style="min-height: 400px">
                </div>
                <div class="card-footer text-muted">
                    <ul class="list-group list-group-flush">
                        <h5>Escoja una ruta</h5>
                        <li class="list-group-item"><a href="#" onclick="calculateDisplayRoute(0);">Ruta 1</a></li>
                        <li class="list-group-item"><a href="#" onclick="calculateDisplayRoute(1);">Ruta 2</a></li>
                        <li class="list-group-item"><a href="#" onclick="calculateDisplayRoute(2);">Ruta 3</a></li>
                    </ul>
                </div>
            </div>
        </div>

        

    </div>
</div>

<div id="atr1" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atractivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/public/img/atr.png" style="width: 95%; margin-left: 3%">
                <div class="container">
                    <h4>Información</h4>
                    <label><b>Ubicación:</b> Turrialba</label><br>
                    <label><b>Tipo:</b> Comercial</label><br>
                    <label><b>Tiempo de estancia:</b> Variable</label><br>
                    <label><b>Wifi:</b> Sí</label><br>
                    <label><b>Pago con Tarjeta:</b> Sí</label><br>
                    <label><b>Mascotas:</b> No</label><br>
                    <label><b>Servicios nocturnos:</b> No</label><br>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--<?php include_once 'public/footer.php';
