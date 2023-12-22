<?php

namespace Dovutuan\Lararole\Databases\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ScreenSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $screens = config('lararole.screens');
        foreach ($screens as $screen) {
            dd($screen);
            DB::table(config('lararole.tables.screens'))
                ->updateOrInsert([
                    'name' => $screen['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
        }
    }
}
