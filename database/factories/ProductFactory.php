<?php
namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
      
      'sku' => $this->faker->randomNumber(),
                'name' => $this->faker->word(),
                'amount' => $this->faker->numberBetween(1, 20),
                'price' => $this->faker->numberBetween(10, 500),
                'description' => $this->faker->text(),
                'created_at' => '00:00:00',
                'updated_at' => '00:00:00'
            
        ];
    }

    
}
?>