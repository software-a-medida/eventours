<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/booknow.js?v=1.0']);

?>

<main>
    <section style="height:90px;background-color:#3f51b5;"></section>
    <section class="d-flex align-items-center p-20 p-md-40" style="height:auto;min-height:600px;">
        <div class="container">
            <form name="booknow">
                <div class="row no-gutters">
                    <div class="col-md-6 m-b-20 m-b-md-0">
                        <div class="row no-gutters">
                            <fieldset class="col-12 p-r-0 p-r-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.tour}</h6>
                                <select name="tour" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                                    <optgroup label="{$lang.our_home_tour}">
                                        <option value="ek" data-url="/book-now/nuestro-tour-de-casa" data-image="{$path.images}ek_bg_1_desktop.jpg" <?php echo (($global['render'] == 'nuestro-tour-de-casa') ? 'selected' : ''); ?>>Ek-Balam + Yalcobá + Santa Rita</option>
                                    </optgroup>
                                    <optgroup label="{$lang.others_tours} (No disponibles)">
                                        <!-- <option value="ch" data-url="/book-now/chichen-itza" data-image="{$path.images}ch_bg_1.jpg" <?php echo (($global['render'] == 'chichen-itza') ? 'selected' : ''); ?>>Chichen Itza</option>
                                        <option value="rl" data-url="/book-now/rio-lagartos" data-image="{$path.images}rl_bg_1.jpg" <?php echo (($global['render'] == 'rio-lagartos') ? 'selected' : ''); ?>>Río Lagartos</option> -->
                                    </optgroup>
                                </select>
                            </fieldset>
                            <fieldset class="col-12 p-r-0 p-r-md-10 m-b-10">
                                <figure style="height:300px;">
                                    <img src="" class="img-cover" style="border-radius:2px;">
                                </figure>
                            </fieldset>
                            <fieldset class="col-md-4 p-r-0 p-r-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.date}</h6>
                                <input type="date" name="date" value="<?php echo Dates::future_date(Dates::current_date(), 1, 'days'); ?>" min="<?php echo Dates::future_date(Dates::current_date(), 1, 'days'); ?>" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-6 col-md-4 p-r-5 p-r-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.adults}</h6>
                                <input type="number" name="adults" value="1" min="1" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-6 col-md-4 p-l-5 p-l-md-0 p-r-0 p-r-md-10 m-b-10">
                                <h6 class="m-b-5">{$lang.childrens}</h6>
                                <input type="number" name="childrens" value="0" min="0" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-12 p-r-0 p-r-md-10">
                                <p style="font-size:12px!important;">{$lang.space_subject_to_availability}</p>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row no-gutters">
                            <fieldset class="col-md-6 p-r-0 p-r-md-5 m-b-10">
                                <h6 class="m-b-5">{$lang.firstname}</h6>
                                <input type="text" name="firstname" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-md-6 p-l-0 p-l-md-5 m-b-10">
                                <h6 class="m-b-5">{$lang.lastname}</h6>
                                <input type="text" name="lastname" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-6 col-md-6 p-r-5 m-b-10">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-6 col-md-6 p-l-5 m-b-10">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-12 m-b-20">
                                <h6 class="m-b-5">{$lang.comments}</h6>
                                <textarea name="comments" placeholder="{$lang.optional}" class="p-20" style="width:100%;height:140px;border:0px;border-radius:2px;background-color:#f5f5f5;"></textarea>
                            </fieldset>
                            <fieldset class="col-12 p-l-0 p-l-md-20 p-r-0 p-r-md-20 m-b-20">
                                <p class="text-justify" style="font-size:12px!important;">{$lang.to_book_with_us_1} <strong><?php echo Configuration::$vars['contact']['phone']; ?></strong>, {$lang.to_book_with_us_2} <strong><?php echo Configuration::$vars['contact']['email']; ?></strong>. {$lang.to_book_with_us_3} <a href="/terminos-y-condiciones" class="text-dark"><strong>{$lang.terms_and_conditions}</strong></a> {$lang.to_book_with_us_4} <a href="/aviso-de-privacidad" class="text-dark"><strong>{$lang.privacy_notice}</strong></a>.</p>
                            </fieldset>
                            <fieldset class="col-12">
                                <button type="submit" class="btn btn-block">{$lang.request_quote}</button>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
