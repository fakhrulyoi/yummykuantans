<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cake;

class CakeSeeder extends Seeder
{
    public function run()
    {
        $cakes = [
            [
                'name' => 'Chocolate Fudge Cake',
                'description' => 'Rich and moist chocolate cake with creamy fudge frosting. Perfect for chocolate lovers!',
                'price' => 45.00,
                'category' => 'chocolate'
            ],
            [
                'name' => 'Red Velvet Cake',
                'description' => 'Classic red velvet cake with smooth cream cheese frosting. A timeless favorite!',
                'price' => 50.00,
                'category' => 'specialty'
            ],
            [
                'name' => 'Vanilla Sponge Cake',
                'description' => 'Light and fluffy vanilla sponge cake with fresh whipped cream and berries.',
                'price' => 35.00,
                'category' => 'vanilla'
            ],
            [
                'name' => 'Strawberry Cheesecake',
                'description' => 'Creamy cheesecake topped with fresh strawberries and strawberry sauce.',
                'price' => 55.00,
                'category' => 'cheesecake'
            ],
            [
                'name' => 'Tiramisu Cake',
                'description' => 'Italian-inspired tiramisu cake with coffee-soaked ladyfingers and mascarpone.',
                'price' => 48.00,
                'category' => 'specialty'
            ],
            [
                'name' => 'Lemon Drizzle Cake',
                'description' => 'Zesty lemon cake with sweet lemon glaze. Refreshing and delightful!',
                'price' => 38.00,
                'category' => 'fruit'
            ]
        ];

        foreach ($cakes as $cake) {
            Cake::create($cake);
        }
    }
}
