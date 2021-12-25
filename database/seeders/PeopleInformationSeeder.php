<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PeopleInformation;

class PeopleInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeopleInformation::factory(10000)->create();
    }
}
