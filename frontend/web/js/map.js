/**
 * Created by gev on 1/22/18.
 */



var ll = document.getElementById('ll').value;
var json_ll = JSON.parse(ll);

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(40.780056, 43.914639),
        mapTypeId: 'roadmap'
    });


    var icons = {
        region: {

            icon: './region.png'

        },
        vilage: {
            icon: './village.png'
        }

    };
    var features = [];


    for (var i in json_ll) {
        if (json_ll.hasOwnProperty(i)) {

            features[i] = {
                position: new google.maps.LatLng(parseFloat(json_ll[i].lat), parseFloat(json_ll[i].lng)),

                type: json_ll[i].locality_type,
                name: json_ll[i].name
            };
        }
    }


    features.forEach(function (feature) {


        var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map,
            title: feature.name,

        });


        marker.addListener('click', function () {
            map.setZoom(15);
            map.setCenter(marker.getPosition());
        });


    });
}


