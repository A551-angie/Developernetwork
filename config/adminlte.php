<?php

return [

    'title' => '',
    'title_prefix' => '',
    'title_postfix' => '|Developernetwork',
    ////////////////////////////////////////

    'use_ico_only' => true,
    'use_full_favicon' => false,

    ///////////////////////////////////////

    'logo' => '<b>D</b>eveloperNetWork',
    'logo_img' => 'vendor/adminlte/dist/img/prilik.png',
    'logo_img_class' => 'brand-image w-30',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'DeveloperNetWork',

    ///////////////////////////////////////

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

     ////////////////////////////////////////////

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,

   ///////////////////////////////////////////////

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-info',

   //////////////////////////////////////////

    'classes_body' => '',

    'classes_brand' => 'bg-blue-900',
    'classes_brand_text' => '',
    'classes_content_wrapper' => 'content-center',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => ' elevation-4',
    'classes_sidebar_nav' => '',
    // 'classes_topnav' => 'navbar-primary navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

     /////////////////////////////////////////

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

   ///////////////////////////////////////

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

     ///////////////////////////////////

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /////////////////////////////////

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    //Menu Items

    'menu' => [
        [
            'text' => 'Buscar',
            'search' => false,
            'topnav_right' => true,
        ],
        [
            'text' => '',
            'url' =>'',
            'topnav' => true,
            
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        ['header' => 'OPCIONES'],
        [
            'text' => 'Perfil',
            'url'  => 'user/profile',
            'icon' => 'fas fa-fw fa-user',
            'icon_color' => 'blue',
        ],
        [
            'text' => 'Usuarios',
            'route'  => 'admin.users.index',
            'icon' => 'fas fa-fw fa-lock',
            'can' => 'roleAdmin',
        ],
        [

            'text' => 'ver vacantes',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-clipboard-list',
            'icon_color' => 'green',
            'can' => 'developerpermi',
        ],
        // [

        //     'text' => 'ver vacantes publicadas',
        //     'url'  => 'admin/settings',
        //     'icon' => 'fas fa-fw fa-eye',
        //     'can' => 'recruiterpermi',
        //     'icon_color' => 'green',
        // ],
        // [

        //     'text' => 'Crear Vacante',
        //     'url'  => 'admin/settings',
        //     'icon' => 'fas fa-fw fa-edit',
        //     'can' => 'recruiterpermi',
        //     'icon_color' => 'primary',
        // ],
        // [
        //     'text' => 'tomar vacante',
        //     'url'  => 'dashboard',
        //     'icon' => 'fas fa-fw fa-handshake',
        //     'can' => 'developerpermi',

        //     // 'text' => 'Publica una vacante',
        //     // 'route'  => 'admin.vacancies.index',
        //     // 'icon' => 'fas fa-fw fa-lock',
        //     // 'can' => 'developerpermi',
            
        // ],
        [
            'text' => 'Categorias',
            'route'  => 'admin.categories.index',
            'icon' => 'fab fa-fw fa-buffer',
            'icon_color' => 'red',
            'can' => 'roleAdmin',
            
            
        ],
        [
            'header' => 'vacantes',
            'can' => 'recruiterpermi',
        ],

        [
            'text'       => 'Listado de vacantas',
            'icon_color' => 'yellow',
            'icon' => 'fas fa-clipboard-list',
            'route'        => 'admin.vacancies.index',
            'can' => 'recruiterpermi',
        ],
        [
            'text'       => 'crear nueva vacante',
            'icon' => 'fas fa-fw fa-edit',
            'icon_color' => 'danger',
            'route'        => 'admin.vacancies.create',
            'can' => 'recruiterpermi',

        ],
       
       
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
    'livewire' => true,
];