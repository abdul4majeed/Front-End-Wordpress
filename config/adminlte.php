<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'DreamsTech',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Dreams</b>Tech',

    'logo_mini' => '<b>A</b>LT',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'admin/logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
       
       
        [
            'text'    => 'Users',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add User',
                    'url'  => '/user/create',
                ],
                [
                    'text' => 'View User',
                    'url'  => '/user',
                ],
            ],
        ],
        [
            'text'    => 'Links',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Link',
                //     'url'  => '/link/create',
                // ],
                [
                    'text' => 'View Link',
                    'url'  => '/link',
                ],
            ],
        ],
        // [
        //     'text'    => 'Links Content',
        //     'icon'    => 'share',
        //     'submenu' => [
        //         [
        //             'text' => 'Add Link Content',
        //             'url'  => '/link_content/create',
        //         ],
        //         [
        //             'text' => 'View Link Content',
        //             'url'  => '/link_content',
        //         ],
        //     ],
        // ],
        [
            'text'    => 'Sub Links',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add Sub Link',
                    'url'  => '/sub_link/create',
                ],
                [
                    'text' => 'View SubLink',
                    'url'  => '/sub_link',
                ],
            ],
        ],
        [
            'text'    => 'Sub Links Content',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add Sub Link Content',
                    'url'  => '/sub_link_content/create',
                ],
                [
                    'text' => 'View Sub Link Content',
                    'url'  => '/sub_link_content',
                ],
            ],
        ],
        [
            'text'    => 'Logo',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Logo',
                //     'url'  => '/image/create',
                // ],
                [
                    'text' => 'View Logo',
                    'url'  => '/image',
                ],
            ],
        ],

        [
            'text'    => 'Head Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Head Content',
                //     'url'  => '/home_section/create',
                // ],
                [
                    'text' => 'View Head Content',
                    'url'  => '/home_section',
                ],
            ],
        ],

        [
            'text'    => 'About Head Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add About Head Content',
                //     'url'  => '/about_us_section/create',
                // ],
                [
                    'text' => 'View About Head Content',
                    'url'  => '/about_us_section',
                ],
            ],
        ],

        [
            'text'    => 'About Body Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add About Body Content',
                //     'url'  => '/aboutUsBodySection/create',
                // ],
                [
                    'text' => 'View About Body Content',
                    'url'  => '/aboutUsBodySection',
                ],
            ],
        ],

        [
            'text'    => 'About Experience Left Side Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Experience',
                //     'url'  => '/aboutUsBodyExperienceSection/create',
                // ],
                [
                    'text' => 'View Experience',
                    'url'  => '/aboutUsBodyExperienceSection',
                ],
            ],
        ],

        [
            'text'    => 'About Experience Right Side Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Experience',
                //     'url'  => '/aboutUsExperienceRight/create',
                // ],
                [
                    'text' => 'View Experience',
                    'url'  => '/aboutUsExperienceRight',
                ],
            ],
        ],

        [
            'text'    => 'About Process Header Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Process',
                //     'url'  => '/aboutUsExperienceProcess/create',
                // ],
                [
                    'text' => 'View Process',
                    'url'  => '/aboutUsExperienceProcess',
                ],
            ],
        ],

        [
            'text'    => 'About Process Body Section',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Body',
                //     'url'  => '/aboutUsExperienceProcessBody/create',
                // ],
                [
                    'text' => 'View Body',
                    'url'  => '/aboutUsExperienceProcessBody',
                ],
            ],
        ],

        [
            'text'    => 'Services Header',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Header',
                //     'url'  => '/servicesHeader/create',
                // ],
                [
                    'text' => 'View Header',
                    'url'  => '/servicesHeader',
                ],
            ],
        ],


        [
            'text'    => 'Project Header',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Header',
                //     'url'  => '/projectHeaderSection/create',
                // ],
                [
                    'text' => 'View Header',
                    'url'  => '/projectHeaderSection',
                ],
            ],
        ],

        [
            'text'    => 'Project Body',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add Project',
                    'url'  => '/projectHeaderProjectSection/create',
                ],
                [
                    'text' => 'View Project',
                    'url'  => '/projectHeaderProjectSection',
                ],
            ],
        ],


        [
            'text'    => 'Testimonial Header',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Header',
                //     'url'  => '/testimonialHeaderSection/create',
                // ],
                [
                    'text' => 'View Header',
                    'url'  => '/testimonialHeaderSection',
                ],
            ],
        ],

        [
            'text'    => 'Testimonial Body',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add Testimonial',
                    'url'  => '/testimonialBodySection/create',
                ],
                [
                    'text' => 'View Testimonial',
                    'url'  => '/testimonialBodySection',
                ],
            ],
        ],


        [
            'text'    => 'Career Header',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Header',
                //     'url'  => '/careerHeader/create',
                // ],
                [
                    'text' => 'View Header',
                    'url'  => '/careerHeader',
                ],
            ],
        ],
  
  
        [
            'text'    => 'Footer Content',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Footer',
                //     'url'  => '/footerContect/create',
                // ],
                [
                    'text' => 'View Footer',
                    'url'  => '/footerContect',
                ],
            ],
        ],
  
        [
            'text'    => 'Footer Copy Write',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Footer',
                //     'url'  => '/footerCopyWrite/create',
                // ],
                [
                    'text' => 'View Footer',
                    'url'  => '/footerCopyWrite',
                ],
            ],
        ],

        [
            'text'    => 'Team Header',
            'icon'    => 'share',
            'submenu' => [
                // [
                //     'text' => 'Add Footer',
                //     'url'  => '/footerCopyWrite/create',
                // ],
                [
                    'text' => 'View team',
                    'url'  => '/teamHeader',
                ],
            ],
        ],

        [
            'text'    => 'Team Members',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Add Members',
                    'url'  => '/team/create',
                ],
                [
                    'text' => 'View Members',
                    'url'  => '/team',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
