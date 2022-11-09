<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSkillsSeeder extends Seeder
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
                "user_id" => 1,
                "skill_id" => 403
            ],
            [
                "user_id" => 1,
                "skill_id" => 407
            ],
            [
                "user_id" => 1,
                "skill_id" => 408
            ],
            [
                "user_id" => 1,
                "skill_id" => 444
            ],
            [
                "user_id" => 1,
                "skill_id" => 448
            ],
            [
                "user_id" => 1,
                "skill_id" => 453
            ],
            [
                "user_id" => 1,
                "skill_id" => 466
            ],
            [
                "user_id" => 1,
                "skill_id" => 473
            ],
            [
                "user_id" => 1,
                "skill_id" => 479
            ],
            [
                "user_id" => 1,
                "skill_id" => 483
            ]
        ];

        foreach ($data as $e) {
            DB::table('skill_user')->insert($e);
        }

    }
}
