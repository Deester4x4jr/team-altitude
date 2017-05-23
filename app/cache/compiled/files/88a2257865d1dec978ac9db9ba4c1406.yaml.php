<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/grav/public/user/plugins/google-maps/blueprints.yaml',
    'modified' => 1495485068,
    'data' => [
        'name' => 'Google Maps',
        'version' => '1.0.7',
        'description' => 'Google Maps plugin for Grav',
        'icon' => 'code',
        'author' => [
            'name' => 'Salvatore Guarino',
            'email' => 'sg@deved.it'
        ],
        'homepage' => 'https://github.com/deved-it/grav-plugin-google-maps',
        'demo' => 'https://github.com/deved-it/grav-plugin-google-maps',
        'keywords' => 'grav, plugin, google maps',
        'bugs' => 'https://github.com/deved-it/grav-plugin-google-maps/issues',
        'readme' => 'https://github.com/deved-it/grav-plugin-google-maps/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'google_api_key' => [
                    'type' => 'text',
                    'label' => 'Google Maps API Key',
                    'help' => 'Type your google maps API Key'
                ]
            ]
        ]
    ]
];
