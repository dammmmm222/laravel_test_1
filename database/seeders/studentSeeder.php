<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $test = [];
        for($i =1 ; $i <= 100; $i++) {
            $test[] = [
                    'name'=>"Trần Hoàng Phi",
                    "email"=>"Phi".$i."@gmail.com",
                    "address"=>"phideptraivc",
                    "status"=> 0
            ];
        }
        DB::table('student')->insert($test);
        //
    }
}
