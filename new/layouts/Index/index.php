<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);

?>

<main>
    <section>
        <figure>
            <img src="{$path.images}img.jpg">
            <a data-fancybox href="{$path.images}img.jpg" rel="img"></a>
        </figure>
    </section>
    <section id="slideshow">
        <div class="container">
            <div>
                <div class="owl-carousel owl-theme">
                    <div class="item"></div>
                </div>
                <a data-action="prev_slideshow"><i class="fas fa-chevron-left"></i></a>
                <a data-action="next_slideshow"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>
    <section id="map" data-title="<?php echo Configuration::$web_page; ?>" data-lat="<?php echo Configuration::$vars['map']['lat']; ?>" data-lng="<?php echo Configuration::$vars['map']['lng']; ?>" data-zoom="12"></section>
    <form name="contact_us">
        <input type="text" name="name" placeholder="{$lang.name}">
        <input type="email" name="email" placeholder="{$lang.email}">
        <input type="text" name="phone" placeholder="{$lang.phone}">
        <textarea name="message" placeholder="{$lang.message}"></textarea>
        <button type="submit">{$lang.submit}</button>
    </form>
</main>
