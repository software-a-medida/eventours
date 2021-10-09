<?php defined('_EXEC') or die; ?>

<main>
    <section class="p-20 p-md-40 d-flex align-items-end justify-content-center" style="height:200px;background-color:#3f51b5;">
        <h1 class="text-center text-light">{$lang.terms_and_conditions}</h1>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <p class="m-b-20 m-b-md-40 text-justify"><strong><?php echo Configuration::$web_page; ?></strong> {$lang.tc_tt_1} <strong><?php echo Configuration::$vars['sat']['social_reason']; ?></strong> {$lang.tc_tt_2} <strong><?php echo Configuration::$vars['sat']['rfc']; ?></strong> {$lang.tc_tt_3} <strong><?php echo Configuration::$vars['sat']['regime']; ?></strong> {$lang.tc_tt_4} <strong><?php echo Configuration::$vars['sectur']['rnt']; ?></strong>.</p>
            <figure>
                <img src="" alt="">
            </figure>
            <h4 class="m-b-20 m-b-md-40"><strong>{$lang.tc_tt_5}</strong></h4>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_6}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_7} <strong><?php echo Configuration::$vars['contact']['email']; ?></strong> {$lang.tc_tt_8}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_9}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_10}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_11} <strong><?php echo Configuration::$web_page; ?></strong> {$lang.tc_tt_12}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_13} <strong><?php echo Configuration::$vars['contact']['email']; ?></strong> {$lang.tc_tt_14}</p>
            <h4 class="m-b-20 m-b-md-40"><strong>{$lang.tc_tt_15}</strong></h4>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_16} <strong><?php echo Configuration::$vars['bank']['clave']; ?></strong> {$lang.tc_tt_17} <strong><?php echo Configuration::$vars['bank']['name']; ?></strong> {$lang.tc_tt_18} <strong><?php echo Configuration::$vars['sat']['social_reason']; ?></strong> ({$lang.tc_tt_19} <strong><?php echo Configuration::$web_page; ?></strong>) {$lang.tc_tt_20} <strong><?php echo Configuration::$vars['sat']['rfc']; ?></strong> {$lang.tc_tt_21} <strong><?php echo Configuration::$vars['sectur']['rnt']; ?></strong>.</p>
            <h4 class="m-b-20 m-b-md-40"><strong>{$lang.tc_tt_22}</strong></h4>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_23} <strong><?php echo Configuration::$vars['contact']['email']; ?></strong> {$lang.tc_tt_24} <strong><?php echo Configuration::$vars['contact']['phone']; ?></strong>. {$lang.tc_tt_25}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_26}</p>
            <p class="m-b-20 m-b-md-40 text-justify">{$lang.tc_tt_27} <strong><?php echo Configuration::$web_page; ?></strong> {$lang.tc_tt_28}</p>
            <h4 class="m-b-20 m-b-md-40"><strong>{$lang.tc_tt_29}</strong></h4>
            <p class="text-justify">{$lang.tc_tt_30} <strong><?php echo Configuration::$vars['contact']['email']; ?></strong> {$lang.tc_tt_31} <strong><?php echo Configuration::$web_page; ?></strong> {$lang.tc_tt_32}</p>
        </div>
    </section>
</main>
