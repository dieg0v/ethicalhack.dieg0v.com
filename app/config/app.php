<?php

return [

    'siteurl' => 'ethicalhack.dieg0v.com',

    'author' => '@dieg0v',

    'sitename' => 'ethical hack course',

    'app_langs' => ['es'],

    'default_lang' => 'es',

    'admin' => [
        'user' => 'admin',
        'pass' => '*****'
    ],

    'css' => scandir('static/build/css', 1)[0],

    'js' => scandir('static/build/js', 1)[0],

    'analytics' => false, // false or google analytics code as string 'UA-XXXXXXX-X'

    'database' => [

        'default' => [

            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => ''

        ]
    ],

    'cookies' => [

        'active' => false,
        'name' => 'cookie_law',
        'days' => '15',
        'domain' => 'ethicalhack.dieg0v.com',
    ]
];
