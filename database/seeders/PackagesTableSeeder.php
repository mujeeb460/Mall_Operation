<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	DB::table('packages')->insert([
            [
                'package_name' => 'VIP1',
                'commission_rate' => 2.4,
                'minimum_amount' => 800.0,
                'number_of_tasks' => '12',
                'bg_color' => '#800000',
                'status' => 1,  // active
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'VIP2',
                'commission_rate' => 2.6,
                'minimum_amount' => 2800.0,
                'number_of_tasks' => '12',
                'bg_color' => '#F88017',
                'status' => 1,  // active
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'VIP3',
                'commission_rate' => 2.8,
                'minimum_amount' => 4800.0,
                'number_of_tasks' => '24',
                'bg_color' => '#077b8a',
                'status' => 1,  // inactive
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'VIP4',
                'commission_rate' => 3.2,
                'minimum_amount' => 8800.0,
                'number_of_tasks' => '24',
                'bg_color' => '#800080',
                'status' => 1,  // inactive
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'VIP5',
                'commission_rate' => 3.6,
                'minimum_amount' => 18800.0,
                'number_of_tasks' => '24',
                'bg_color' => '#c4a35a',
                'status' => 1,  // inactive
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'package_name' => 'VIP6',
                'commission_rate' => 4.0,
                'minimum_amount' => 48800.0,
                'number_of_tasks' => '24',
                'bg_color' => '#4C4646',
                'status' => 1,  // inactive
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);


        
    }



}
