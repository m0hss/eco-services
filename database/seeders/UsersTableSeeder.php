<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@eco.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'Chakib',
                'email'=>'user@eco.com',
                'password'=>Hash::make('user'),
                'role'=>'user',
                'status'=>'active'
            ),
            array(
                'name'=>'Obione',
                'email'=>'user2@eco.com',
                'password'=>Hash::make('user'),
                'role'=>'user_pro',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
