<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $governorates = [
            ['name' => ' حضرموت','is_active'=>1],
            ['name' => ' المهره','is_active'=>1],
            ['name' => ' عدن','is_active'=>1],
        ];
        State::insert($governorates);
    }
}
