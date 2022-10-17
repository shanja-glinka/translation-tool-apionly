<?

return [
    '/' => 'Controllers\Index@Home',

    '/info'  => [
        'GET' => 'Controllers\Index@info',
    ],

    
    '/translations'  => [
        'GET' => 'Controllers\Translate@getTranslationsList',
    ],
    '/translations/languages'  => [
        'GET' => 'Controllers\Translate@info',
    ],
    '/translations/language/:any'  => [
        'GET' => 'Controllers\Translate@translation',
    ],

];