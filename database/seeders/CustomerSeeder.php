<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('product')->insert([
        //    'name'=>"Trần Hoàng Phi",
        //    "email"=>"Phi@gmail.com",
        //    "birtday"=>"2003-05-07",
        //    "gender"=>0,
        // ]);
        //
        // theem nhieu
        $test = [];
        for($i =1 ; $i <= 100; $i++) {
            $test[] = [
                    'name'=>"Trần Hoàng Phi",
                    "email"=>"Phi".$i."@gmail.com",
                    "birtday"=>"2003-05-07",
                    "gender"=>0
            ];
        }
        DB::table('product')->insert($test);

    }
}
