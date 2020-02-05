<?php

return [
    'Photobooth\\Model\\Photobooth' => [
        'fields' => [
            'event' => [
                'type' => 'INT',
                'attrs' => [
                	'unsigned' => true
                ],
                'index' => 4500
            ]
        ],
        'indexes' => [
        	'by_event' => [
        		'fields' => [
        			'event' => []
        		]
        	]
        ]
    ]
];