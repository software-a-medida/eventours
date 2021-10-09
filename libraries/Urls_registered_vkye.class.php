<?php

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/nuestro-tour-de-casa' => [
                'controller' => 'Index',
                'method' => 'ek'
            ],
            '/chichen-itza' => [
                'controller' => 'Index',
                'method' => 'ch'
            ],
            '/rio-lagartos' => [
                'controller' => 'Index',
                'method' => 'rl'
            ],
            '/otros-tours' => [
                'controller' => 'Index',
                'method' => 'otherstours'
            ],
            '/reserva-ahora/%param%' => [
                'controller' => 'Index',
                'method' => 'booknow'
            ],
            '/contactanos' => [
                'controller' => 'Index',
                'method' => 'contactus'
            ],
            '/terminos-y-condiciones' => [
                'controller' => 'Index',
                'method' => 'termsandconditions'
            ],
            '/aviso-de-privacidad' => [
                'controller' => 'Index',
                'method' => 'privacynotice'
            ]
        ];
    }
}
