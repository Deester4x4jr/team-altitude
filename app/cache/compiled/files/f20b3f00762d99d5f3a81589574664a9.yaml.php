<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/grav/public/user/plugins/backlinks/blueprints.yaml',
    'modified' => 1495485082,
    'data' => [
        'name' => 'Backlinks',
        'version' => '1.0.0',
        'description' => 'Find pages that point to another page',
        'icon' => 'link',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/perlkonig/grav-plugin-backlinks',
        'demo' => 'https://perlkonig.com/demos/backlinks',
        'keywords' => 'grav, plugin, backlinks, internal, links',
        'bugs' => 'https://github.com/perlkonig/grav-plugin-backlinks/issues',
        'docs' => 'https://github.com/perlkonig/grav-plugin-backlinks/blob/master/README.md',
        'license' => 'MIT',
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
                ]
            ]
        ]
    ]
];
