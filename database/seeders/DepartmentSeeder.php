<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' =>'women',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        DB::table('departments')->insert([
            'name' =>'men',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        DB::table('departments')->insert([
            'name' =>'kids',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        DB::table('departments')->insert([
            'name' =>'Ethnic wear',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        DB::table('departments')->insert([
            'name' =>'Mother and Baby',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        DB::table('departments')->insert([
            'name' =>'House and hold',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        
        DB::table('departments')->insert([
            'name' =>'Accessories',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);

        
        DB::table('departments')->insert([
            'name' =>'Cosmetic',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now->format('Y-m-d H:i:s')

        ]);
        
    }
}
