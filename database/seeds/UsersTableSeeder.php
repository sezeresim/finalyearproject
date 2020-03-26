<?php


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 200; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
                'birtdate' => Carbon::parse('2000-01-01'),
                'country' => Str::random(10),
            ]);
        }
    }
}
