<<<<<<< HEAD
/**
 * Created by gev on 1/22/18.
 */
var ll = document.getElementById("ll").value;
var json_ll = JSON.parse(ll);
//console.log(jll);
=======
var ll = document.getElementById('ll').value;
var json_ll = JSON.parse(ll);

>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(40.780056, 43.914639),
        mapTypeId: 'roadmap'
    });


    var icons = {
        region: {
<<<<<<< HEAD
            icon:  './region.png'
=======
            icon: './region.png'
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
        },
        village: {
            icon: './village.png'
        }

    };
    var features = [];
<<<<<<< HEAD

    for(var i  in json_ll){
        if(json_ll.hasOwnProperty(i)) {
            console.log(typeof parseFloat(json_ll[i].lat))
            features[i] = {
                position: new google.maps.LatLng(parseFloat(json_ll[i].lat), parseFloat(json_ll[i].lng)),
=======
    for (var i in json_ll) {
        if (json_ll.hasOwnProperty(i)) {

            features[i] = {
                position: new google.maps.LatLng(parseFloat(json_ll[i].localityLat), parseFloat(json_ll[i].localityLong)),
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
                type: json_ll[i].type
            };
        }
    }
<<<<<<< HEAD

console.log(features);
    // Create markers.
    features.forEach(function(feature) {
=======
    features.forEach(function (feature) {
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
        var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
        });
<<<<<<< HEAD
=======

>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
        marker.addListener('click', function () {
            map.setZoom(15);
            map.setCenter(marker.getPosition());
        });
<<<<<<< HEAD

    });
}
=======
    });
}
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
