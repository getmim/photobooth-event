<?php

return [
    '__name' => 'photobooth-event',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/photobooth-event.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/photobooth-event' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'event' => NULL
            ],
            [
                'photobooth' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'photobooth' => [
                'event' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Event\\Model\\Event',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'event'
                ]
            ]
        ]
    ]
];