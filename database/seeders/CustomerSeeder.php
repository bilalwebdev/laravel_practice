<?php

namespace Database\Seeders;
use App\Models\Customers;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<100; $i++)
        {
            $customer = new Customers;
            $customer->first_name = $faker->name;
            $customer->last_name = $faker->name;
            $customer->email = $faker->email;
            $customer->address = $faker->address;
            $customer->country = $faker->country;
            $customer->state= $faker->state;
            $customer->gender = "M";
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }

    }
}
