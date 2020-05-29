class localization {

    constructor(callback) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position => {
                this.latitud = position.coords.latitude;
                this.longitud = position.coords.longitude;
            }))
        } else {
            alert("Navegador no soporta geolocalizacion!")
        }
    }
}






