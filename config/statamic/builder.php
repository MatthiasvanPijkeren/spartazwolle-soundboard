<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Register Blueprints
    |--------------------------------------------------------------------------
    |
    | Here you can register the blueprints that you want to use in your
    | Statamic site.
    |
    */
    'blueprints' => [
        /*
        |--------------------------------------------------------------------------
        | Collection Blueprints
        |--------------------------------------------------------------------------
        |
        | Here you can register the blueprints that you want to use for your
        | collections, taxonomies, and globals.
        |
        */
        'collections.pages' => [
            'soundboard' => App\Blueprints\Pages\SoundboardPageBlueprint::class,
        ],
        'collections.sounds' => [
            'sound' => App\Blueprints\Sounds\SoundBlueprint::class,
        ],
        'taxonomies.sound_categories' => [
            'sound_category' => App\Blueprints\Taxonomies\SoundCategoryBlueprint::class,
        ],
        'globals' => [
            // 'footer' => App\Blueprints\Globals\FooterBlueprint::class,
        ],
        'navigation' => [
            // 'main' => App\Blueprints\MainNavigationBlueprint::class,
        ],
        'assets' => [
            // 'assets' => App\Blueprints\AssetsContainerBlueprint::class,
        ],
        'user' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Fieldsets
    |--------------------------------------------------------------------------
    |
    | Here you can register the fieldsets that you want to use in your
    | blueprints.
    |
    */
    'fieldsets' => [
        // \App\Fieldsets\LogoWithIntroductionFieldset::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Collections
    |--------------------------------------------------------------------------
    |
    | Here you can register the collections that you want to use in your
    | Statamic site.
    |
    */
    'collections' => [
        App\Collections\Pages::class,
        App\Collections\Sounds::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you can register the taxonomies that you want to use in your
    | Statamic site.
    |
    */
    'taxonomies' => [
        // App\Taxonomies\SoundCategory::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Globals
    |--------------------------------------------------------------------------
    |
    | Here you can register the globals that you want to use in your
    | Statamic site.
    |
    */
    'globals' => [
        // App\Globals\Footer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Sites
    |--------------------------------------------------------------------------
    |
    | Here you can register the sites that you want to use in your
    | Statamic site.
    |
    */
    'sites' => [
        // App\Sites\Blog::class,
    ],
];
