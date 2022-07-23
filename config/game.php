<?php


return [
    'name' => 'Name game creator',

    'incubatorService' => [
        'incubators' => [
            'MainIncubator' => [
                'className' => 'App\\Game\\Classes\\Incubator\\MainIncubator',
            ]
        ],
        'default_incubator' => 'MainIncubator',
    ],

    'storageService' => [
        'storages'=> [
            'storage' => [
                'className' => 'App\\Game\\Classes\\Storage\\Storage'
            ],
        ],

        'default_storage' => 'storage'
    ],




];
