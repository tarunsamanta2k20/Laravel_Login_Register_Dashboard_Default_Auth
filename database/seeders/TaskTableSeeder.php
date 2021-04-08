<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //
        DB::table('task')->insert([
	    'user_id' => 5,
         'task_details' => 'ytvytcgtytcitt',
          'status'=>'pending'
       ]);
    }
}
