<?php


return [
    'name' => 'Name game creator',

    'incubatorService' => [
        'incubators' => [
            'MainIncubator' => [
                'className' => 'App\\Game\\Classes\\Incubator\\MainIncubator',
            ]
        ],

        'default_incubator' => 'MainIncubator'
    ],


];
