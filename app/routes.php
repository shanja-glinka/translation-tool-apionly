<?

return [
    '/' => 'Controllers\UI\Index@home',
    '/home'  => 'Controllers\UI\Index@home',

    '/api/info'  => [
        'GET' => 'Controllers\API\Index@info',
        'POST' => 'Controllers\API\Index@infoPost',
    ]

];