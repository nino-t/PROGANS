var map;
var mark = [];
var info = [];
var marker_icon;

function setMapOnAll(map) {
  for (var i = 0; i < mark.length; i++) {
    mark[i].setMap(map);
  }
}

function placeMarker(location) {
  marker = new google.maps.Marker({
    position: location,
    map: map,
    animation:google.maps.Animation.BOUNCE
  });
  mark.push(marker);
}


function addMarker(location) {

  marker = new google.maps.Marker({
    position: location,
    map: map,
    icon:'uploads/map_icon/book.png'
  });
  markers.push(marker);
}

function clearMarkers() {
  setMapOnAll(null);
}

function deleteMarkers() {
  clearMarkers()
  mark = [];
}

function getLocation(func) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(func, showError);
    } else {
        console.log("Geolocation is not supported by this browser.");
    }
}
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            console.log("User denied the request for Geolocation.")
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Location information is unavailable.")
            break;
        case error.TIMEOUT:
            console.log("The request to get user location timed out.")
            break;
        case error.UNKNOWN_ERROR:
            console.log("An unknown error occurred.")
            break;
    }
}

function centerMap(lat,lng,zoom)
{
  var coordinate = new google.maps.LatLng(lat,lng);
  map.setZoom(zoom);
  map.setCenter(coordinate);
}


