<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\quanlynhansu;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quanlynhansu>
 */
class quanlynhansuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = quanlynhansu::class;
    public function definition()
    {
        return [
            'team' => $this -> faker -> name(),
            
          
        ];
    }
}
