'use strict';

$(document).ready(function()
{
    $('[data-fancybox]').fancybox({
        padding: 0
    });

    var slideshow = $('#slideshow .owl-carousel').owlCarousel({
        stagePadding: 0,
        items: 1,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        rewind: true,
        loop: true
    });

    $('#slideshow [data-action="prev_slideshow"]').on('click', function()
    {
        slideshow.trigger('prev.owl.carousel');
        slideshow.trigger('stop.owl.autoplay');

        setTimeout(function() { slideshow.trigger('play.owl.autoplay'); }, '60000');
    });

    $('#slideshow [data-action="next_slideshow"]').on('click', function()
    {
        slideshow.trigger('next.owl.carousel');
        slideshow.trigger('stop.owl.autoplay');

        setTimeout(function() { slideshow.trigger('play.owl.autoplay'); }, '60000');
    });

    $('form[name="contact_us"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=contact_us',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);

                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i] + '\n';

                    alert(errors);
                }
            }
        });
    });
});

function map()
{
    var title = $('#map').data('title');
    var lat = $('#map').data('lat');
    var lng = $('#map').data('lng');
    var zoom = $('#map').data('zoom');

    var locations = [
        {
            title: title,
            lat: lat,
            lng: lng,
            zoom: zoom
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: locations[0].zoom,
        center: {
            lat: locations[0].lat,
            lng: locations[0].lng
        }
    });

    var marker = new google.maps.Marker({
        position: {
            lat: locations[0].lat,
            lng: locations[0].lng
        },
        map: map,
        icon: '/assets/images/marker.png',
        title: locations[0].title
    });

    // var title = new google.maps.InfoWindow({
    //     content: locations[0].title
    // });
    //
    // title.open(map, marker);
}
