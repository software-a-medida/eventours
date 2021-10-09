'use strict';

$(document).ready(function()
{
    $('[data-fancybox]').fancybox({
        padding: 0
    });
});

function map()
{
    var locations = [
        {
            title: '1. Rio Lagartos',
            lat: 21.593373,
            lng: -88.1739313,
            zoom: 8
        },
        {
            title: '2. Santa Rita',
            lat: 20.8660609,
            lng: -88.1450722
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: locations[0].zoom,
        center: {
            lat: locations[0].lat,
            lng: locations[0].lng
        }
    });

    var rl_marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map
    });

    var sr_marker = new google.maps.Marker({
        position: {
            lat: locations[1].lat,
            lng: locations[1].lng
        },
        map: map
    });

    var rl_title = new google.maps.InfoWindow({
        content: locations[0].title
    });

    var sr_title = new google.maps.InfoWindow({
        content: locations[1].title
    });

    rl_title.open(map, rl_marker);
    sr_title.open(map, sr_marker);
}
