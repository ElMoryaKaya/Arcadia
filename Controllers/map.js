let map = new google.maps.Map(document.getElementById("googleMap"), {
  center: { lat: 48.8534951, lng: 2.3483915 },
  zoom: 12,
});

let directionsService = new google.maps.DirectionsService();
let directionsDisplay = new google.maps.DirectionsRenderer();

directionsDisplay.setMap(map);

function calcRoute() {
  let selectedMode = document.getElementById("mode").value;

  let request = {
    origin: document.getElementById("from").value,
    destination: document.getElementById("to").value,
    travelMode: google.maps.TravelMode[selectedMode],
    unitSystem: google.maps.UnitSystem.METRIC
  };

  directionsService.route(request, function(result, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      const output = document.getElementById("output");
      output.innerHTML = "<div class='alert alert-info'> De : " + document.getElementById("from").value + ".<br />À : " + document.getElementById("to").value + 
      ". <br /> Mode de transport : " + getTransportModeInFrench(selectedMode) + 
      ".<br /> Distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + 
      ".<br />Durée <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ". </div>";

      directionsDisplay.setDirections(result);
    } else {
      directionsDisplay.setDirections({ routes: [] });
      map.setCenter({ lat: 48.8534951, lng: 2.3483915 });

      const output = document.getElementById("output");
      output.innerHTML = "<div class='alert alert-danger'><i class='fas fa-exclamation-triangle'></i> Impossible de récupérer la distance </div>";
    }
  });
}

function getTransportModeInFrench(mode) {
  switch(mode) {
    case 'DRIVING':
      return 'Voiture';
    case 'WALKING':
      return 'À pied';
    case 'BICYCLING':
      return 'Vélo';
    case 'TRANSIT':
      return 'Transport en commun';
    default:
      return mode;
  }
}

let input1 = document.getElementById("from");
let autocomplete1 = new google.maps.places.Autocomplete(input1);

let input2 = document.getElementById("to");
let autocomplete2 = new google.maps.places.Autocomplete(input2);
