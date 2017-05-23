<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/Josh/Vagrants/altitudeDev/app/user/plugins/scheduler/blueprints.yaml',
    'modified' => 1495485081,
    'data' => [
        'name' => 'Scheduler',
        'version' => '1.0.0',
        'description' => 'Simple content scheduling',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/perlkonig/grav-plugin-scheduler',
        'demo' => 'https://perlkonig.com/demos/scheduler',
        'keywords' => 'grav, plugin, scheduling',
        'bugs' => 'https://github.com/perlkonig/grav-plugin-scheduler/issues',
        'docs' => 'https://github.com/perlkonig/grav-plugin-scheduler/blob/master/README.md',
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
