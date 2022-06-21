<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\UMSStudent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<200;$i++){
        DB::table('students_info')->insert([
            'name' => Str::random(10),
            'user_id' => Str::random(10),
            'username' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'dob'=>"12.12.12",
            'cgpa'=>2.35,
            'd_id'=>1,
            'pro_pic'=>""
        ]);
    }
        // \App\Models\User::factory(10)->create();
    }
}
