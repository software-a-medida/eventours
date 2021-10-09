<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);
$this->dependencies->add(['js', '{$path.js}Index/ch.js?v=1.0']);

?>

<main>
    <section class="pos-relative" style="height:80vh;min-height:600px;">
        <figure style="height:100%;">
            <img src="{$path.images}ch_bg_1.jpg" data-desktop class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center p-20 p-md-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.4);">
            <div class="container">
                <h1 class="m-b-20 m-b-md-40 text-center text-light">Chichen Itza</h1>
                <p class="m-b-20 m-b-md-40 text-center text-light">{$lang.ch_tt_2}</p>
                <div class="d-flex justify-content-center">
                    <a href="/reserva-ahora/chichen-itza" class="btn" style="width:100%;max-width:200px;">{$lang.book_now}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h2 class="m-b-20 m-b-md-40">1. Chichen Itza</h2>
                    <p class="text-justify">{$lang.ch_tt_3}</p>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters">
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_1.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_1.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_2.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_2.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_3.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_3.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_4.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_4.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_5.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_5.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_6.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_6.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_7.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_7.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_8.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_8.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-l-0 p-l-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}ch_gl_9.jpg" class="img-cover">
                                <a href="{$path.images}ch_gl_9.jpg" rel="ch" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-l-20 p-l-md-40 p-r-20 p-r-md-40 p-b-20 p-b-md-40">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0 order-1 order-md-2">
                    <h2 class="m-b-20 m-b-md-40">2. Santa Rita</h2>
                    <p class="text-justify">{$lang.sr_tt_1}</p>
                </div>
                <div class="col-md-6 order-2 order-md-1">
                    <div class="row no-gutters">
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_1.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_1.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_2.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_2.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_3.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_3.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_4.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_4.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_5.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_5.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10 m-b-0 m-b-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_6.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_6.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_7.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_7.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_8.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_8.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                        <div class="col-4 p-r-0 p-r-md-10">
                            <figure class="pos-relative" style="height:140px;">
                                <img src="{$path.images}sr_gl_9.jpg" class="img-cover">
                                <a href="{$path.images}sr_gl_9.jpg" rel="sr" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map" style="height:400px;"></section>
    <section class="p-20 p-md-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <h4 class="m-b-20"><strong>{$lang.what_include}</strong></h4>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-check m-r-10" style="color:#009688;"></i>{$lang.standard_transportation}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-check m-r-10" style="color:#009688;"></i>{$lang.guide}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-check m-r-10" style="color:#009688;"></i>{$lang.zh_entrance}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-20"><i class="fas fa-check m-r-10" style="color:#009688;"></i>{$lang.eat}</h6>
                    <h4 class="m-b-20"><strong>{$lang.what_not_include}</strong></h4>
                    <h6 class="p-l-20 p-l-md-0"><i class="fas fa-times m-r-10" style="color:#f44336;"></i>{$lang.tips}</h6>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <h4 class="m-b-20"><strong>{$lang.we_recommend_you_take}</strong></h4>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-cookie m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.go_good_breakfast}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-tshirt m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.comfortable_clothes}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-sun m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.sun_protection}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-bug m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.repellent}</h6>
                    <h6 class="p-l-20 p-l-md-0 m-b-5 m-b-md-10"><i class="fas fa-camera m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.camera}</h6>
                    <h6 class="p-l-20 p-l-md-0"><i class="fas fa-money-bill m-r-10 text-left" style="width:18px;color:#bdbdbd;"></i>{$lang.money}</h6>
                </div>
                <div class="col-md-4">
                    <div class="p-20 m-b-20" style="border:1px dashed #bdbdbd;border-radius:5px;">
                        <h4 class="m-b-10"><strong><i class="far fa-clock m-r-10"></i>{$lang.output}</strong></h4>
                        <h6>7:00 AM</h6>
                    </div>
                    <div class="p-20 m-b-20" style="border:1px dashed #bdbdbd;border-radius:5px;">
                        <h4 class="m-b-10"><strong><i class="fas fa-utensils m-r-10"></i>{$lang.eat}</strong></h4>
                        <h6>2:00 PM</h6>
                    </div>
                    <div class="p-20 m-b-20" style="border:1px dashed #bdbdbd;border-radius:5px;">
                        <h4 class="m-b-10"><strong><i class="fas fa-bed m-r-10"></i>{$lang.return}</strong></h4>
                        <h6>5:00 PM</h6>
                    </div>
                    <div>
                        <a href="/reserva-ahora/chichen-itza" class="btn btn-block">{$lang.book_now}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
