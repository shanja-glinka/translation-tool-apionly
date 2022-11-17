<?

return [
    '/' => 'Controllers\Index@Home',

    '/info' => 'Controllers\Index@info',
    '/help/routing' => 'Controllers\Index@HelpRouting',
    '/help/:any' => 'Controllers\Index@HelpSwitch',

    '/install' => [
        'POST' => 'Controllers\Install@MVC',
    ],
    '/install/controller' => [
        'POST' => 'Controllers\Install@Controller',
        'DELETE' => 'Controllers\Install@Controller'
    ],
    '/install/model' => [
        'POST' => 'Controllers\Install@Model',
        'DELETE' => 'Controllers\Install@Model'
    ],
    '/install/view' => [
        'POST' => 'Controllers\Install@View',
        'DELETE' => 'Controllers\Install@View'
    ],
    '/install/route' => [
        'PUT' => 'Controllers\Install@Route',
        'DELETE' => 'Controllers\Install@Route'
    ],


    '/translations' => [
        'GET' => 'Controllers\Translate@getTranslationsList',
        'POST' => 'Controllers\Translate@setTranslationsList',
    ],
    '/translations/languages' => [
        'GET' => 'Controllers\Translate@info',
    ],
    '/translations/language/:any' => [
        'GET' => 'Controllers\Translate@translation',
    ],

];
