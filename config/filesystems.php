<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [
        'tools' => [
            'driver' => 'local',
            'root' => storage_path('app/tools'),
            'url' => env('APP_URL').'/tools',
            'visibility' => 'public',
        ],
        'services' => [
            'driver' => 'local',
            'root' => storage_path('app/services'),
            'url' => env('APP_URL').'/services',
            'visibility' => 'public',
        ],
        'servicesrubro' => [
            'driver' => 'local',
            'root' => storage_path('app/servicesrubro'),
            'url' => env('APP_URL').'/servicesrubro',
            'visibility' => 'public',
        ],
        'banners' => [
            'driver' => 'local',
            'root' => storage_path('app/banners'),
            'url' => env('APP_URL').'/banners',
            'visibility' => 'public',
        ],
        'banners_site' => [
            'driver' => 'local',
            'root' => storage_path('app/banners_site'),
            'url' => env('APP_URL').'/banners_site',
            'visibility' => 'public',
        ],

        'avatars' => [
            'driver' => 'local',
            'root' => storage_path('app/user-avatars'),
            'url' => env('APP_URL').'/fotos-de-usuarios',
            'visibility' => 'public',
        ],

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        //public_path('storage') => storage_path('app/public'),
        public_path('fotos-de-usuarios') => storage_path('app/user-avatars'),
        public_path('banners') => storage_path('app/banners'),
        public_path('banners_site') => storage_path('app/banners_site'),
        public_path('services') => storage_path('app/services'),
        public_path('servicesrubro') => storage_path('app/servicesrubro'),
        public_path('tools') => storage_path('app/tools'),
    ],

];
