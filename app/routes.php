<?

return [
    '/' => 'Controllers\Index@Home',

    '/info' => 'Controllers\Index@info',
    '/help/routing' => 'Controllers\Index@HelpRouting',


    '/translations' => [
        'GET' => 'Controllers\Translate@getTranslationsList',
    ],
    '/translations/languages' => [
        'GET' => 'Controllers\Translate@info',
    ],
    '/translations/language/:any' => [
        'GET' => 'Controllers\Translate@translation',
    ],

];
