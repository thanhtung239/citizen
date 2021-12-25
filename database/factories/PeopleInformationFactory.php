<?php

namespace Database\Factories;

use App\Models\PeopleInformation;
use App\Models\Province;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

require_once 'vendor/autoload.php';

class PeopleInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeopleInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('vi_VN');
        $genderRandom = $faker->randomElement(['nam', 'nữ']);
        $province = Province::inRandomOrder()->limit(1)->first();
        $provinceId = $province->id;
        $districtId = $province->random_district;
        $district = District::where('id', $districtId)->first();
        $wardId = $district->random_ward;
        $districtAdminId = $provinceId . $districtId;
        $wardAdminId = $provinceId . $districtId . $wardId;
        
        return [
            'province_id' => $provinceId,
            'district_id' => $districtId,
            'ward_id' => $wardId,
            'province_admin_id' => $provinceId,
            'district_admin_id' => $districtAdminId,
            'ward_admin_id' => $wardAdminId,
            'identification' => $faker->numberBetween(100000000000, 999999999999),
            'name' => $faker->name($gender = null),
            'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => $genderRandom,
            'hamlet' => $faker->words(2, true),
            'job' => $faker->jobTitle,
            'edu_level' => mt_rand(6, 13),
        ];
    }
}
