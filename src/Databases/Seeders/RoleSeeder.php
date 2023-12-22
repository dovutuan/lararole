<?php

namespace Dovutuan\Lararole\Databases\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = config('lararole.roles');
        foreach ($roles as $role) {
            DB::table(config('lararole.tables.roles'))
                ->updateOrInsert(['name' => $role, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
    }
}
