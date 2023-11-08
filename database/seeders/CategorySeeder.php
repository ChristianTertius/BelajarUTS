<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Romance",
            "slug" => "romance"
        ]);

        Category::create([
            "name" => "Slice of Life",
            "slug" => "slice-of-life"
        ]);

        Category::create([
            "name" => "Action",
            "slug" => "action"
        ]);
    }
}
