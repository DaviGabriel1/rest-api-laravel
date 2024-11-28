<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipo = $this->faker->randomElement(["I","E"]);
        $nome = $tipo == "I" ? $this->faker->name() : $this->faker->company();

        return [
            'nome' => $nome,
            "tipo" => $tipo,
            "email" => $this->faker->email(),
            "endereco" => $this->faker->streetAddress(),
            "cidade" => $this->faker->city(),
            "estado" => $this->faker->state(),
            "cep" =>$this->faker->postCode()
        ];
    }
}
