<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/grav/public/user/themes/gravelizer/blueprints.yaml',
    'modified' => 1495503977,
    'data' => [
        'name' => 'Gravelizer',
        'version' => '0.1.0',
        'description' => 'Grav implementation of Materialize CSS Framework',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Josh DeSherlia',
            'email' => 'josh@thaw.io'
        ],
        'homepage' => 'https://github.com/josh-de-sherlia/grav-theme-gravelizer',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/josh-de-sherlia/grav-theme-gravelizer/issues',
        'readme' => 'https://github.com/josh-de-sherlia/grav-theme-gravelizer/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
