<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Default screens name
     |--------------------------------------------------------------------------
     */
    'screens' => [
        ['name' => 'USER', 'action' => ['INDEX', 'SHOW', 'STORE', 'UPDATE']]
    ],

    /*
     |--------------------------------------------------------------------------
     | Default permissions name
     |--------------------------------------------------------------------------
     */
    'permissions' => [
        'INDEX',
        'SHOW',
        'STORE',
        'UPDATE',
        'DESTROY',
        'IMPORT',
        'EXPORT',
    ],

    /*
     |--------------------------------------------------------------------------
     | Default roles name
     |--------------------------------------------------------------------------
     */
    'roles' => [
        'ADMIN',
        'NORMAL',
    ],

    /*
     |--------------------------------------------------------------------------
     | Default model
     |--------------------------------------------------------------------------
     */
    'models' => [
        'user' => \App\Models\User::class,
        'permission' => \Dovutuan\Lararole\App\Models\Permission::class,
        'role' => \Dovutuan\Lararole\App\Models\Role::class,
        'screen' => \Dovutuan\Lararole\App\Models\Screen::class,
        'screen_permission' => \Dovutuan\Lararole\App\Models\ScreenPermission::class,
        'role_screen' => \Dovutuan\Lararole\App\Models\RoleScreen::class,
        'user_role' => \Dovutuan\Lararole\App\Models\UserRole::class,
    ],

    /*
     |--------------------------------------------------------------------------
     | Default table
     |--------------------------------------------------------------------------
     */
    'tables' => [
        'users' => 'users',
        'permissions' => 'permissions',
        'roles' => 'roles',
        'screens' => 'screens',
        'screen_permissions' => 'screen_permissions',
        'role_screens' => 'role_screens',
        'user_roles' => 'user_roles',
    ]
];
