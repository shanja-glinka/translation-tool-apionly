<?

return [
    '/' => 'Controllers\Index@Home',

    '/info' => 'Controllers\Index@info',
    '/help/routing' => 'Controllers\Index@HelpRouting',
    '/help/:any' => 'Controllers\Index@HelpSwitch',


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
