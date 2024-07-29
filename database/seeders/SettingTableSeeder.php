<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Eco-Service, société spécialisée dans le recyclage
                (appareils électriques et électroniques usagés, outils industriels, déchets organiques…)",
            'short_des'=>"Recyclage ecolo, outils industriels, déchets  tinciilisis luctus, metus.",
            'photo'=>"image.jpg",
            'logo'=>'/storage/photos/1/logo1(133x133).png',
            'address'=>"NO. 10 - Place Sablon, 1000 Bruxelles",
            'email'=>"Support@eco-services.com",
            'phone'=>"+032 4991-9910",
        );
        DB::table('settings')->updateOrInsert($data);
    }
}
