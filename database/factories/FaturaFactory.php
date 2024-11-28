<?php

namespace Database\Factories;

use App\Models\Fatura;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fatura>
 */
class FaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['C','P','V']);
        return [
            "cliente_id" => Cliente::factory(),
            "quantidade" =>$this->faker->numberBetween(100,20000),
            "status" => $status,
            "fatura_data" => $this->faker->dateTimeThisDecade(),
            "pagamento_data" => $status == 'P' ? $this->faker->dateTimeThisDecade() : NULL
        ];
    }
}
