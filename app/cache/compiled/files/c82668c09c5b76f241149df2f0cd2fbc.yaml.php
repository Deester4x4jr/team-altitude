<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/Josh/Vagrants/altitudeDev/app/user/plugins/shoppingcart/shoppingcart.yaml',
    'modified' => 1495485058,
    'data' => [
        'enabled' => true,
        'general' => [
            'currency' => 'USD',
            'default_country' => 'US',
            'product_taxes' => 'excluded',
            'load_js_globally' => true
        ],
        'shipping' => [
            'methods' => [
                0 => [
                    'name' => 'All countries',
                    'allowed_countries' => [
                        0 => '*'
                    ],
                    'price' => '0'
                ]
            ]
        ],
        'urls' => [
            'checkout_url' => '/checkout',
            'save_order_url' => '/save_order',
            'order_url' => '/order'
        ],
        'ui' => [
            'currency_symbol_position' => 'before',
            'remove_cents_if_zero' => true,
            'use_own_css' => true,
            'image_size_product' => 400,
            'image_size_cart' => 50
        ],
        'cart' => [
            'allow_editing_quantity_from_cart' => true,
            'timeout' => 180,
            'add_shipping_and_taxes_cost_to_total' => true,
            'maximum_total_quantity_value' => NULL,
            'add_product_thumbnail' => true
        ],
        'countries' => [
            0 => [
                'name' => 'US',
                'allow' => '1',
                'tax_percentage' => '10'
            ],
            1 => [
                'name' => '*',
                'allow' => '1'
            ]
        ],
        'checkout_form' => [
            'name' => 'checkout',
            'fields' => [
                0 => [
                    'type' => 'display',
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_HEADLINE_YOUR_PERSONAL_DETAILS',
                    'markdown' => true
                ],
                1 => [
                    'name' => 'firstname',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_FIRST_NAME',
                    'classes' => 'js__billing__firstname',
                    'validate' => [
                        'required' => true
                    ]
                ],
                2 => [
                    'name' => 'lastname',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_LAST_NAME',
                    'classes' => 'js__billing__lastname',
                    'validate' => [
                        'required' => true
                    ]
                ],
                3 => [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_EMAIL',
                    'classes' => 'js__billing__email',
                    'validate' => [
                        'required' => true
                    ]
                ],
                4 => [
                    'type' => 'display',
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_HEADLINE_YOUR_ADDRESS',
                    'markdown' => true
                ],
                5 => [
                    'name' => 'address',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_ADDRESS',
                    'classes' => 'js__billing__address',
                    'validate' => [
                        'required' => true
                    ]
                ],
                6 => [
                    'name' => 'telephone',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PHONE',
                    'classes' => 'js__billing__telephone',
                    'validate' => [
                        'required' => true
                    ]
                ],
                7 => [
                    'name' => 'city',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CITY',
                    'classes' => 'js__billing__city',
                    'validate' => [
                        'required' => true
                    ]
                ],
                8 => [
                    'name' => 'zip',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_ZIP',
                    'classes' => 'js__billing__zip',
                    'validate' => [
                        'required' => true
                    ]
                ],
                9 => [
                    'name' => 'country',
                    'type' => 'select',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_COUNTRY',
                    'classes' => 'js__billing__country',
                    'id' => 'js__billing__country',
                    'validate' => [
                        'required' => true
                    ]
                ],
                10 => [
                    'name' => 'state',
                    'type' => 'select',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_STATE',
                    'classes' => 'js__billing__state',
                    'outerclasses' => 'js__billing__state__control',
                    'id' => 'js__billing__state'
                ],
                11 => [
                    'name' => 'province',
                    'type' => 'text',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PROVINCE',
                    'classes' => 'js__billing__province',
                    'outerclasses' => 'js__billing__province__control'
                ],
                12 => [
                    'type' => 'display',
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_SHIPPING_METHOD',
                    'ignore' => true,
                    'markdown' => true
                ],
                13 => [
                    'name' => 'shipping_method',
                    'type' => 'select',
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CHOOSE_SHIPPING_METHOD_DESC',
                    'classes' => 'js__shipping__method',
                    'outerclasses' => 'js__checkout-choose-shipping-block',
                    'id' => 'js__shipping__method'
                ],
                14 => [
                    'type' => 'display',
                    'content' => 'PLUGIN_SHOPPINGCART.CHECKOUT_PAYMENT_METHOD',
                    'markdown' => true,
                    'ignore' => true,
                    'outerclasses' => 'js__checkout-choose-payment-block-title'
                ],
                15 => [
                    'name' => 'payment_method',
                    'type' => 'select',
                    'ignore' => true,
                    'label' => 'PLUGIN_SHOPPINGCART.CHECKOUT_CHOOSE_PAYMENT_METHOD_DESC',
                    'classes' => 'js__payment__method',
                    'outerclasses' => 'js__checkout-choose-payment-block',
                    'id' => 'js__payment__method'
                ],
                16 => [
                    'name' => 'agree_to_terms',
                    'type' => 'checkbox',
                    'ignore' => true,
                    'label' => 'PLUGIN_SHOPPINGCART.TERMS_AND_CONDITIONS',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'value' => 'PLUGIN_SHOPPINGCART.CHECKOUT_BUTTON_PAY'
                ]
            ]
        ]
    ]
];
