var map;
var directionService;
var directionRenderer;

var waypoints = new Array();

var waypoints1 = [];
waypoints1.push({ location: { lat: 9.9558567, lng: -83.56876 }, stopover: true });
waypoints1.push({ location: { lat: 9.9574271, lng: -83.5738754 }, stopover: true });
waypoints1.push({ location: { lat: 9.9658938, lng: -83.6093094 }, stopover: true });
waypoints.push(waypoints1);

var waypoints2 = [];
waypoints2.push({ location: { lat: 9.9727611, lng: - 83.6929656 }, stopover: true });
waypoints2.push({ location: { lat: 9.9834963, lng: - 83.6572857 }, stopover: true });
waypoints2.push({ location: { lat: 9.9658938, lng: -83.6093094 }, stopover: true });
waypoints.push(waypoints2);

var waypoints3 = [];
waypoints3.push({ location: { lat: 9.9558567, lng: -83.56876 }, stopover: true });
waypoints3.push({ location: { lat: 9.9574271, lng: -83.5738754 }, stopover: true });
waypoints3.push({ location: { lat: 9.9658938, lng: -83.6093094 }, stopover: true });
waypoints.push(waypoints3);

function initMap() {
    directionService = new google.maps.DirectionsService;
    directionRenderer = new google.maps.DirectionsRenderer({
        suppressMarkers: true
    });

    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 9.9558567, lng: -83.56876 },
        zoom: 15
    });

    directionRenderer.setMap(map);
    calculateDisplayRoute(0);
}

function calculateDisplayRoute(index) {
    directionService.route({
        origin: waypoints[index][0].location,
        destination: waypoints[index][2].location,
        waypoints: waypoints[index],
        optimizeWaypoints: false,
        travelMode: 'DRIVING'
    }, function (response, status) {
        if (status === 'OK') {
            directionRenderer.setDirections(response);
        } else { window.alert('Direction request failed to' + status); }
    });

    clearMarkers();
    addMarker({
        coords: waypoints[index][0].location,
        content: '<p>Atractivo</p>' +
            '<a href="#" data-toggle="modal"' +
            'data-target="#atr1">Ver información</a>',
        title: 'A'
    });

    addMarker({
        coords: waypoints[index][1].location,
        content: '<p>Atractivo</p>' +
            '<a href="#" data-toggle="modal"' +
            'data-target="#atr1">Ver información</a>',
        title: 'B'
    });

    addMarker({
        coords: waypoints[index][2].location,
        content: '<p>Atractivo</p>' +
            '<a href="#" data-toggle="modal"' +
            'data-target="#atr1">Ver información</a>',
        title: 'C'
    });
}

var markers = new Array();
function addMarker(props) {
    var marker = new google.maps.Marker({
        position: props.coords,
        map: map,
        title: props.title
    });
    markers.push(marker);
    if (props.content) {
        var infoWindow = new google.maps.InfoWindow(
            { content: props.content }
        );
        marker.addListener('click', function () {
            infoWindow.open(map, marker);
        });
    }
}

function clearMarkers() {
    while (markers.length !== 0) {
        markers.pop().setMap(null);
    }
}