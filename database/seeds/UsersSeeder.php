<?php

use Illuminate\Database\Seeder;
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
        $data = [
            [
                "id" => "1",
                "name" => "Gogita",
                "last_name" => "Mezurnishvili",
                "address" => "Vazisubani 2",
                "postal_code" => "0152",
                "city" => "Tbilisi",
                "birthday" => "1988-05-29",
                "post" => "Developer",
                "seniority" => "2000-12-12",
                "phone" => "598543167",
                "cellphone" => "2799856",
                "year_of_experience" => 9,
                "english" => 1,
                "other_language" => "Spanish",
                "on_mission" => 1,
                "comments" => "test comment",
                "email" => "m.gogita@gmail.com",
                "password" => bcrypt('touareg'),
                "type" => 1,
                "image_name" => "1.jpg"
            ],
            [
                "id" => "2",
                "name" => "Admin",
                "last_name" => "Mezurnishvili",
                "address" => "Vazisubani 2",
                "postal_code" => "0152",
                "city" => "Tbilisi",
                "birthday" => "1988-05-29",
                "post" => "Developer",
                "seniority" => "2000-12-12",
                "phone" => "598543167",
                "cellphone" => "2799856",
                "year_of_experience" => 9,
                "english" => 1,
                "other_language" => "Spanish",
                "on_mission" => 1,
                "comments" => "test comment",
                "email" => "gogita111@yahoo.com",
                "password" => bcrypt('touareg'),
                "type" => 3
            ],
            [
                "id" => "3",
                "name" => "Entreprise",
                "last_name" => "Mezurnishvili",
                "address" => "Vazisubani 2",
                "postal_code" => "0152",
                "city" => "Tbilisi",
                "birthday" => "1988-05-29",
                "post" => "Developer",
                "seniority" => "2000-12-12",
                "phone" => "598543167",
                "cellphone" => "2799856",
                "year_of_experience" => 9,
                "english" => 1,
                "other_language" => "Spanish",
                "on_mission" => 1,
                "comments" => "test comment",
                "email" => "benjamin169@yahoo.com",
                "password" => bcrypt('touareg'),
                "type" => 4
            ],
            [
                "id" => "4",
                "name" => "Saxeli",
                "last_name" => "Gvari",
                "address" => "Vazisubani 2",
                "postal_code" => "0152",
                "city" => "Tbilisi",
                "birthday" => "1988-05-29",
                "post" => "Developer",
                "seniority" => "2000-12-12",
                "phone" => "598543167",
                "cellphone" => "2799856",
                "year_of_experience" => 9,
                "english" => 1,
                "other_language" => "Spanish",
                "on_mission" => 1,
                "comments" => "test comment",
                "email" => "gogla.mez@gmail.com",
                "password" => bcrypt('touareg'),
                "type" => 2
            ]
        ];
        foreach ($data as $e) {
            DB::table('users')->insert($e);
        }
    }
}
