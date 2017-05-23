<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://shoppingcart-stripe/shoppingcart-stripe.yaml',
    'modified' => 1495485074,
    'data' => [
        'enabled' => true,
        'payment' => [
            'methods' => [
                'stripe' => [
                    'name' => 'Stripe',
                    'description' => 'Test description',
                    'secretKey' => '',
                    'publicKey' => ''
                ]
            ]
        ]
    ]
];
