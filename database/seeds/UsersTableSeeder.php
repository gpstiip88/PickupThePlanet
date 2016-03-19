<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
         DB::table('users')->insert([
            'username' => str_random(10),
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'city' => str_random(10),
            'description' => str_random(10),
            'level' => 1,
            'password' => bcrypt('secret'),
        ]);
    }

}