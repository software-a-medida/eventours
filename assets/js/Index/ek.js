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
            title: '1. Lorem Ipsum',
            lat: 20.8922935,
            lng: -88.1381227,
            zoom: 12
        },
        {
            title: '2. Lorem Ipsum',
            lat: 20.8342697,
            lng: -88.081149
        },
        {
            title: '3. Lorem Ipsum',
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

    var ek_marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map
    });

    var yc_marker = new google.maps.Marker({
        position: {
            lat: locations[1].lat,
            lng: locations[1].lng
        },
        map: map
    });

    var sr_marker = new google.maps.Marker({
        position: {
            lat: locations[2].lat,
            lng: locations[2].lng
        },
        map: map
    });

    var ek_title = new google.maps.InfoWindow({
        content: locations[0].title
    });

    var yc_title = new google.maps.InfoWindow({
        content: locations[1].title
    });

    var sr_title = new google.maps.InfoWindow({
        content: locations[2].title
    });

    ek_title.open(map, ek_marker);
    yc_title.open(map, yc_marker);
    sr_title.open(map, sr_marker);
}
