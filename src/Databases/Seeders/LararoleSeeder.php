<?php

namespace Dovutuan\Lararole\Databases\Seeders;

use Illuminate\Database\Seeder;

class LararoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            ScreenSeeder::class,
        ]);
    }
}
