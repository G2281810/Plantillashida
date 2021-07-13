<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
    {
    $faker = Faker::create();
        $gender = $faker->randomElement(['male','female']);
        foreach (range(1,100) as $index){
            DB::table('Usuarios')->insert([
                'numusuario' => $faker->numberBetween($min = 2110000, $max = 2210000),
                //nombre => $faker->name($gender),
                'nombre' => $faker->firstName($gender = 'male'|'female'),
                'apellidop' => $faker->firstName,
                'apellidom' => $faker->lastName,
                'sexo' => $faker->randomElement($array = array('Femenino', 'Masculino')),
                'edad' => $faker->numberBetween($min = 18, $max = 70),
                'telefono' => $faker->numberBetween($min = 7227543596, $max = 7127543596),
                'correo' =>$faker->email,
                'tipou'=> $faker->bothify('usuario##??'), 
                'created_at'=> $faker->dateTime($max='now', $timezone=null),                   
                'updated_at'=> $faker->dateTime($max='now', $timezone=null),                   
            ]);
        }
    }
}
