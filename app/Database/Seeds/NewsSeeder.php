<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;


class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $model = model('NewsModel');
        // Seed 10 records

        for ($i = 0; $i < 10; $i++) { 
            $createdDate = $faker->dateTimeBetween('-1 year', 'now');
            $updatedDate = $faker->dateTimeBetween($createdDate, 'now');
            $data = [
                'title' => $faker->sentence(),
                'slug' => $faker->slug(),
                'body' => $faker->paragraph(),
                'status' => $faker->randomElement(['publish', 'pending', 'scraped']),
                'created_at' => $createdDate->format('Y-m-d H:i:s'),
                'updated_at' => $updatedDate->format('Y-m-d H:i:s'),
            ];

            $model->insert($data);
        }
    }
}
