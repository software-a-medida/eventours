<?php

defined('_EXEC') or die;

$this->dependencies->add(['js', '{$path.js}Index/contactus.js?v=1.0']);

?>

<main>
    <section style="height:90px;background-color:#3f51b5;"></section>
    <section class="d-flex align-items-center p-20 p-md-40" style="height:auto;min-height:600px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure class="d-flex justify-content-center m-b-20" style="height:160px;">
                        <img src="{$path.images}logotype.png" style="height:100%;">
                    </figure>
                    <a href="mailto:<?php echo Configuration::$vars['contact']['email'] ?>" target="_blank" class="d-block m-b-5 text-center text-dark"><i class="fas fa-envelope m-r-5"></i><?php echo Configuration::$vars['contact']['email'] ?></a>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo Configuration::$vars['contact']['phone'] ?>" target="_blank" class="d-block text-center text-dark"><i class="fab fa-whatsapp m-r-5"></i><?php echo Configuration::$vars['contact']['phone'] ?></a>
                </div>
                <div class="col-md-6">
                    <form name="contactus">
                        <div class="row no-gutters">
                            <fieldset class="col-12 m-b-10">
                                <h6 class="m-b-5">{$lang.name}</h6>
                                <input type="text" name="name" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-md-6 p-r-0 p-r-md-5 m-b-10">
                                <h6 class="m-b-5">{$lang.email}</h6>
                                <input type="email" name="email" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-md-6 p-l-0 p-l-md-5 m-b-10">
                                <h6 class="m-b-5">{$lang.phone}</h6>
                                <input type="text" name="phone" class="p-l-20 p-r-20" style="width:100%;height:50px;border:0px;border-radius:2px;background-color:#f5f5f5;">
                            </fieldset>
                            <fieldset class="col-12 m-b-10">
                                <h6 class="m-b-5">{$lang.message}</h6>
                                <textarea name="message" class="p-20" style="width:100%;height:140px;border:0px;border-radius:2px;background-color:#f5f5f5;"></textarea>
                            </fieldset>
                            <fieldset class="col-12">
                                <button type="submit" class="btn btn-block">{$lang.contact_us}</button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
