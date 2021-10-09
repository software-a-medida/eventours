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
            title: '1. Chichen Itza',
            lat: 20.6787816,
            lng: -88.5728543,
            zoom: 10
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

    var ch_marker = new google.maps.Marker({
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

    var ch_title = new google.maps.InfoWindow({
        content: locations[0].title
    });

    var sr_title = new google.maps.InfoWindow({
        content: locations[1].title
    });

    ch_title.open(map, ch_marker);
    sr_title.open(map, sr_marker);
}
