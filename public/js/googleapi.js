//  var map;
//  var infowindow;
//  console.log(window.location.search);
// //initMap();
// //Starting Position of Map
// function initMap(){
//     var pyrmont = {lat: -33.867, lng: 151.195};
//     //var pyrmont = {lat: this.geocode_details.geometry.location.lat, lng: this.geocode_details.geometry.location.lng};
//
//     map = new google.maps.Map(document.getElementById('map'), {
//         center: pyrmont,
//         zoom: 15
//     });
//
//     infowindow = new google.maps.InfoWindow();
//
//     //NearBy Search Function
//     const service = new google.maps.places.PlacesService(map);
//     service.nearbySearch({
//         location: pyrmont,
//         radius: 500,
//         type: ['restaurant'],
//         openNow: false
//     }, callback);
// }
//
// //Show Results
// function callback(results, status) {
//     if (status === google.maps.places.PlacesServiceStatus.OK) {
//         for (var i = 0; i < results.length; i++) {
//             createMarker(results[i]);
//         }
//     }
// }
//
// //Marker Settings
// function createMarker(place){
//     console.log(place);
//     var placeLoc = place.geometry.location;
//     var marker = new google.maps.Marker({
//         map: map,
//         position: place.geometry.location
//     });
//
//     google.maps.event.addListener(marker, 'click', function() {
//         infowindow.setContent(place.name);
//         infowindow.open(map, this);
//     });
// }