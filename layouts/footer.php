<?php defined('_EXEC') or die; ?>

        <footer class="p-20 p-md-40" style="background-color:#000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-b-10 m-b-md-0">
                        <a href="/terminos-y-condiciones" class="d-inline-block m-r-10 m-b-10 m-b-md-5 text-center text-md-left text-light" style="font-size:14px;">{$lang.terms_and_conditions}</a>
                        <a href="/aviso-de-privacidad" class="d-inline-block m-b-10 m-b-md-5 text-center text-md-left text-light" style="font-size:14px;">{$lang.privacy_notice}</a>
                        <p class="text-center text-md-left text-light" style="font-size:14px!important;">Copyright © 2021 <strong><?php echo Configuration::$web_page; ?></strong> <i class="fas fa-heart m-l-5 m-r-5" style="color:#f44336;"></i> {$lang.website} {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank" class="text-light"><strong>Code Monkey</strong></a></p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                        <p class="m-r-10 text-light" style="font-size:14px!important;">{$lang.follow_us}</p>
                        <a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="m-r-10 text-light" style="font-size:14px;"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="text-light" style="font-size:14px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
