<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\campBenefit;

class CampBenefitTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Final project certificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'offline course videos'
            ],
            [
                'camp_id' => 2,
                'name' => 'website builder'
            ],
            [
                'camp_id' => 2,
                'name' => 'future jobs'
            ],
        ];

        
    CampBenefit::insert($campBenefits);
    }

}
