<?php

namespace Dovutuan\Lararole\Databases\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = config('lararole.permissions');
        foreach ($permissions as $permission) {
            DB::table(config('lararole.tables.permissions'))
                ->updateOrInsert(['name' => $permission, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
    }
}
