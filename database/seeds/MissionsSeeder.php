<?php

use Illuminate\Database\Seeder;

class MissionsSeeder extends Seeder
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
                'customer' => 'Google Inc.',
                'period_start' => '1999-10-20',
                'period_end' => '2000-09-20',
                'position' => 'Senior Developer',
                'description' => 'test comment',
                'environment' => 'Google+'
            ],
            [   'user_id' => 1,
                'customer' => 'Microsoft',
                'period_start' => '2009-10-20',
                'period_end' => '2010-01-20',
                'position' => 'Senior Developer',
                'description' => 'test comment',
                'environment' => 'Hotmail'
            ],
            [   'user_id' => 1,
                'customer' => 'Yahoo',
                'period_start' => '2016-10-20',
                'period_end' => '2018-09-01',
                'position' => 'Senior Developer',
                'description' => 'test comment',
                'environment' => 'test'
            ],

        ];

        foreach($data as $e) {
            DB::table('missions')->insert($e);
        }

    }
}
