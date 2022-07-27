<?php

return [
    'theme_name' => 'DefaultTheme',

    'sliderGroups' => [
        [
            'group' => 'main_sliders',
            'name'  => 'اسلایدر اصلی',
            'width' => 1780,
            'height' => 890,
            'count' => 2,
            'size'  => '890 * 1780'
        ],
        [
            'group' => 'mobile_sliders',
            'name'  => 'اسلایدر حالت موبایل',
            'width' => 658,
            'height' => 436,
            'count' => 2,
            'size'  => '436 * 658'
        ],
        [
            'group' => 'coworker_sliders',
            'name' => 'اسلایدر لوگو همکاران',
            'width' => 100,
            'height' => 100,
            'count' => 3,
            'size' => '100 * 100'
        ],
        [
            'group' => 'sevices_sliders',
            'name' => 'اسلایدر خدمات',
            'width' => 60,
            'height' => 60,
            'count' => 3,
            'size' => '60 * 60'
        ],
    ],

    'bannerGroups' => [
        [
            'group' => 'index_middle_banners',
            'name'  => 'بنر دوتایی',
            'width' => 820,
            'height' => 300,
            'count' => 2,
            'size'  => '300 * 820'
        ],
        [
            'group' => 'index_slider_banners',
            'name' => 'بنر کنار اسلایدر اصلی',
            'width' => 856,
            'height' => 428,
            'count' => 2,
            'size' => '428 * 856'
        ],
    ],

    'imageSizes' => [
        'productCategoryImage' => '500 * 500',
        'CategoryImage' => '500 * 500',
        'postImage' => '300 * 400',
        'productGalleryImage' => '720 * 1280',
        'productImage' => '600 * 600',
        'logo' => '36 * 128',
        'icon' => '32 * 32',
    ],

    'linkGroups' => [
        [
            'name'  => 'گروه اول',
            'key'   => 1,
        ],
        [
            'name'  => 'گروه دوم',
            'key'   => 2,
        ],
        [
            'name'  => 'گروه سوم',
            'key'   => 3,
        ],
    ],

    'errors' => [
        '404' => 'front::errors.404'
    ],

    'pages' => [
        'login'    => 'front::auth.login',
        'register' => 'front::auth.register',
        'forgot-password' => 'front::auth.forgot-password',
        'login-with-code' => 'front::auth.login-with-code',
        'one-time-login' => 'front::auth.one-time-login',
    ],

    'routes' => [
        'verify'                 => 'front.verify.showVerify',
        'change-password'        => 'front.user.force-change-password',
        'change-password-routes' => ['front.user.force-change-password', 'front.user.force-update-password'],
    ],

    'exceptVerifyCsrfToken' => [
        'orders/payment/callback/*',
        'wallet/payment/callback/*',
    ],

    'asset_path' => 'themes/defaultTheme/',
    'mainfest_path' => 'themes/defaultTheme',
    'demo' => [
        'image' => 'demo/preview.jpg',
        'name'  => 'قالب پیش فرض',
        'description' => 'قالب پیش فرض اسکریپت فروشگاهی لاراول شاپ'
    ],

    'socials' => [
        [
            'name' => 'تلگرام',
            'key' => 'social_telegram',
            'icon' => 'fa fa-telegram',
        ],
        [
            'name' => 'اینستاگرام',
            'key' => 'social_instagram',
            'icon' => 'feather icon-instagram',
        ],
        [
            'name' => 'واتساپ',
            'key' => 'social_whatsapp',
            'icon' => 'fa fa-whatsapp',
        ],
    ],

    'settings' => [
        'fields' => [
            [
                'title'      => 'رنگ بندی قالب',
                'key'        => 'dt_theme_color',
                'input-type' => 'select',
                'class'      => 'col-md-4 col-6',
                'options'    => [
                    [
                        'value' => 'default',
                        'title' => 'پیش فرض'
                    ],
                    [
                        'value' => 'amber-color',
                        'title' => 'کهربایی'
                    ],
                    [
                        'value' => 'blue-color',
                        'title' => 'آبی'
                    ],
                    [
                        'value' => 'blue-grey-color',
                        'title' => 'آبی خاکستری'
                    ],
                    [
                        'value' => 'brown-color',
                        'title' => 'قهوه ای'
                    ],
                    [
                        'value' => 'cyan-color',
                        'title' => 'فیروزه ای'
                    ],
                    [
                        'value' => 'green-color',
                        'title' => 'سبز'
                    ],
                    [
                        'value' => 'indigo-color',
                        'title' => 'نیلی'
                    ],
                    [
                        'value' => 'lime-color',
                        'title' => 'لیمویی'
                    ],
                    [
                        'value' => 'orange-color',
                        'title' => 'نارنجی'
                    ],
                    [
                        'value' => 'purple-color',
                        'title' => 'بنفش'
                    ],
                    [
                        'value' => 'red-color',
                        'title' => 'قرمز'
                    ],
                    [
                        'value' => 'teal-color',
                        'title' => 'سبز پر رنگ'
                    ],
                ],
                'attributes' => 'required'
            ],
            [
                'title'      => 'نمایش نمودار قیمت در صفحه محصول',
                'key'        => 'dt_show_price_change_chart',
                'input-type' => 'select',
                'class'      => 'col-md-4 col-6',
                'options'    => [
                    [
                        'value' => 'yes',
                        'title' => 'بله'
                    ],
                    [
                        'value' => 'no',
                        'title' => 'خیر'
                    ]
                ],
                'attributes' => 'required'
            ]
        ],
        'rules' => [
            'dt_show_price_change_chart' => 'required|in:yes,no'
        ]
    ],

    'links' => [
        public_path('themes/defaultTheme') => base_path('themes/DefaultTheme/src/resources/assets'),
    ],

    'home-widgets' => require __DIR__ . '/../config/widgets.php',

    'cache-forget' => [
        'categories' => [
            'front.productcats',
            'front.index.categories'
        ],
        'products' => [],
        'posts' => [],
        'sliders' => [],
        'banners' => []
    ]
];
