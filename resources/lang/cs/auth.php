<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'    => 'Neplatné přihlašovací údaje',
    'helpers'   => [
        'password'  => 'Zobrazit / skrýt heslo',
    ],
    'login'     => [
        'fields'                => [
            'email'     => 'E-mail',
            'password'  => 'Heslo',
        ],
        'login_with_facebook'   => 'Přihlášení přes Facebook',
        'login_with_google'     => 'Přihlášení přes Google',
        'login_with_twitter'    => 'Přihlášení přes Twitter',
        'new_account'           => 'Registrovat nový účet',
        'or'                    => 'NEBO',
        'password_forgotten'    => 'Zapomenuté heslo',
        'remember_me'           => 'Zapamatuj si mě',
        'submit'                => 'Přihlásit se',
        'title'                 => 'Přihlášení',
    ],
    'register'  => [
        'already_account'           => 'Existující účet?',
        'errors'                    => [
            'email_already_taken'   => 'Účet s tímto emailem již existuje.',
            'general_error'         => 'Při registraci účtu došlo k chybě. Zkuste to, prosím, znovu.',
        ],
        'fields'                    => [
            'email'     => 'E-mail',
            'name'      => 'Uživatelské jméno',
            'password'  => 'Heslo',
            'tos'       => 'Souhlasím se <a href=":privacyUrl" target="_blank">Zásadami ochrany soukromí</a>.',
        ],
        'register_with_facebook'    => 'Registrace přes Facebook',
        'register_with_google'      => 'Registrace přes Google',
        'register_with_twitter'     => 'Registrace přes Twitter',
        'submit'                    => 'Zaregistrovat',
        'title'                     => 'Registrace',
    ],
    'reset'     => [
        'fields'    => [
            'email'                 => 'E-mailová adresa',
            'password'              => 'Heslo',
            'password_confirmation' => 'Potvrzení hesla',
        ],
        'send'      => 'Zaslat odkaz pro obnovu hesla',
        'submit'    => 'Obnovit heslo',
        'title'     => 'Obnovení hesla',
    ],
    'throttle'  => 'Příliš mnoho pokusů o přihlášení. Zkuste to prosím znovu za :seconds vteřin.',
];
