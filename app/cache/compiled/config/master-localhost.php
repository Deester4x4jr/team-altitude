<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1495503602,
    'checksum' => '99007a8fd3bf000b569c147220c3ae37',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1495485095
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1495485095
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1493033682
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1495485095
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1495503582
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1493033682
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1493033682
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1493033682
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1493033682
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1493033682
            ],
            'plugins/backlinks' => [
                'file' => 'user/plugins/backlinks/backlinks.yaml',
                'modified' => 1495485082
            ],
            'plugins/devtools' => [
                'file' => 'user/plugins/devtools/devtools.yaml',
                'modified' => 1495503582
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1495485053
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1493033682
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1495485051
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/ganalytics.yaml',
                'modified' => 1495485073
            ],
            'plugins/google-maps' => [
                'file' => 'user/plugins/google-maps/google-maps.yaml',
                'modified' => 1495485068
            ],
            'plugins/import' => [
                'file' => 'user/plugins/import/import.yaml',
                'modified' => 1495485072
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1495485066
            ],
            'plugins/login-oauth' => [
                'file' => 'user/plugins/login-oauth/login-oauth.yaml',
                'modified' => 1495485070
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1493033682
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1495485162
            ],
            'plugins/scheduler' => [
                'file' => 'user/plugins/scheduler/scheduler.yaml',
                'modified' => 1495485081
            ],
            'plugins/shoppingcart' => [
                'file' => 'user/plugins/shoppingcart/shoppingcart.yaml',
                'modified' => 1495485058
            ],
            'plugins/shoppingcart-stripe' => [
                'file' => 'user/plugins/shoppingcart-stripe/shoppingcart-stripe.yaml',
                'modified' => 1495485074
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1495485049
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1495485064
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'backlinks' => [
                'enabled' => true,
                'datafile' => 'backlinks.yaml'
            ],
            'devtools' => [
                'enabled' => true
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => '',
                'position' => 'head',
                'objectName' => 'ga',
                'forceSsl' => false,
                'async' => false,
                'anonymizeIp' => false,
                'blockedIps' => [
                    
                ],
                'cookieConfig' => false,
                'cookieName' => '_ga',
                'cookieDomain' => '',
                'cookieExpires' => 63072000,
                'debugStatus' => false,
                'debugTrace' => false
            ],
            'google-maps' => [
                'enabled' => true,
                'google_api_key' => NULL
            ],
            'import' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_after_login' => NULL,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2
            ],
            'login-oauth' => [
                'enabled' => true,
                'built_in_css' => true,
                'providers' => [
                    'Facebook' => [
                        'enabled' => false,
                        'enable_email' => false,
                        'credentials' => [
                            'key' => NULL,
                            'secret' => NULL
                        ]
                    ],
                    'Google' => [
                        'enabled' => false,
                        'credentials' => [
                            'key' => NULL,
                            'secret' => NULL
                        ]
                    ],
                    'GitHub' => [
                        'enabled' => false,
                        'credentials' => [
                            'key' => NULL,
                            'secret' => NULL
                        ]
                    ],
                    'Twitter' => [
                        'enabled' => false,
                        'credentials' => [
                            'key' => NULL,
                            'secret' => NULL
                        ]
                    ],
                    'Linkedin' => [
                        'enabled' => false,
                        'credentials' => [
                            'key' => NULL,
                            'secret' => NULL
                        ]
                    ]
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'scheduler' => [
                'enabled' => true,
                'active' => false
            ],
            'shoppingcart' => [
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
            ],
            'shoppingcart-stripe' => [
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
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'regex',
                'custom_shortcodes' => NULL,
                'fontawesome' => [
                    'load' => true,
                    'url' => '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'
                ]
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'changefreq' => 'daily',
                'priority' => 1
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'Grav',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Joe Bloggs',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'antimatter',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => 'ApBKkZjSo1RlUO'
        ]
    ]
];
