<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'municipio'=>$this->faker->city(),
            'lugar'=>$this->faker->state(),
            'nombre'=>$this->faker->firstNameMale(),
            'direccion'=>$this->faker->streetAddress(),
            'telefono'=>$this->faker->e164PhoneNumber (),
            'correo'=>$this->faker->domainWord(),
            'foto'=>$this->faker->text(),
            'descripcion'=>$this->faker->realText(),
            'tipo_actividad'=>$this->faker->company(),
            'horario_atencion'=>$this->faker->time(),
            'estado'=>$this->faker->buildingNumber(),

        ];
    }
}
