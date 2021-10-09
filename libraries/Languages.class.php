<?php

defined('_EXEC') or die;

class Languages
{
    static public function email($key)
    {
        $langs = [
            'thanks_for_book_with_us' => [
                'es' => 'Gracias por reservar con nosotros',
                'en' => 'Thanks for book with us'
            ],
            'a_one_of_our_representatives' => [
                'es' => 'Uno de nuestros representantes de ventas se pondrá en contacto con usted, a través de nuestro Whatsapp ' . Configuration::$vars['contact']['phone'] . ', para concluir su proceso de reservación. Por favor, antes de confirmar o realizar cualquier pago, solicite su cotización escrita, la cual deberá llegar a través de nuestro correo electrónico ' . Configuration::$vars['contact']['email'],
                'en' => 'One of our sales representatives will contact you through our WhatsApp ' . Configuration::$vars['contact']['phone'] . ', to finalize your reservation process. Please, before confirming or making any payment, request your quote in writing, which should arrive through our email ' . Configuration::$vars['contact']['email']
            ],
            'tour' => [
                'es' => 'Tour',
                'en' => 'Tour'
            ],
            'date' => [
                'es' => 'Fecha',
                'en' => 'Date'
            ],
            'adults' => [
                'es' => 'Adultos',
                'en' => 'Adults'
            ],
            'childrens' => [
                'es' => 'Niños',
                'en' => 'Childrens'
            ],
            'ek' => [
                'es' => 'Ek-Balam + Yalcobá + Santa Rita',
                'en' => 'Ek-Balam + Yalcobá + Santa Rita'
            ],
            'ch' => [
                'es' => 'Chichen Itza',
                'en' => 'Chichen Itza'
            ],
            'rl' => [
                'es' => 'Rio Lagartos',
                'en' => 'Rio Lagartos'
            ],
            'to_book_with_us_1' => [
                'es' => 'Al reservar con nosotros usted está aceptando nuestros',
                'en' => 'By booking with us you are accepting our'
            ],
            'to_book_with_us_2' => [
                'es' => 'y nuestro',
                'en' => 'and our'
            ],
            'terms_and_conditions' => [
                'es' => 'Términos y condiciones',
                'en' => 'Terms and conditions'
            ],
            'privacy_notice' => [
                'es' => 'Aviso de privacidad',
                'en' => 'Privacy notice'
            ],
            'contact_us_whatsapp' => [
                'es' => 'Contáctanos por Whatsapp',
                'en' => 'Contact us by Whatsapp'
            ],
            'website_development_by' => [
                'es' => 'Sitio web desarrollado por',
                'en' => 'Website development by'
            ]
        ];

        return $langs[$key][Session::get_value('lang')];
    }
}
