<?php

use Illuminate\Database\Seeder;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [   'user_id' => 1,
                'type' => 1,
                'facility_name' => 'Informatics school',
                'formation_name' => 'Informatics',
                'year' => 2010
            ],
            [   'user_id' => 1,
                'type' => 2,
                'facility_name' => 'Physics scool',
                'formation_name' => 'math',
                'year' => 2006
            ]
        ];

        foreach($data as $e) {
            DB::table('formations')->insert($e);
        }
    }
}
