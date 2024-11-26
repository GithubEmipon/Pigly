<?php

namespace Database\Seeders;

use App\Models\WeightTarget;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WeightTargetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'target_weight' => '45'
        ];
    }
}
