<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            "name" => "Budi",
            "email" => "budi@gmail.com",
            "password" => encrypt(12341234)
        ]);
        User::create([
            "name" => "Anton",
            "email" => "antonganteng@gmail.com",
            "password" => encrypt(12341234)
        ]);
        User::create([
            "name" => "Wawan",
            "email" => "wawan@gmail.com",
            "password" => encrypt(12341234)
        ]);

        $this->call([CategorySeeder::class]);

        Book::create([
            "title" => "Cintaku terhalang restu",
            "user_id" => 1,
            "category_id" => 1,
            "year" => 2002,
            "publisher" => "Christian Com",
            "synopsis" => "Lsdfkjasjjdfknxvnzc,kajerhquweryashjfasdem."
        ]);
        Book::create([
            "title" => "Pantang menyerah itu baik",
            "user_id" => 3,
            "category_id" => 2,
            "year" => 2022,
            "publisher" => "budi com",
            "synopsis" => "sdfjaksdflknzvmzcv,qwer7qwerhzxcvkzxcjkashdfjxnvzmxcv"
        ]);
        Book::create([
            "title" => "Ketika Tuhan berkehendak lain",
            "user_id" => 1,
            "category_id" => 3,
            "year" => 2022,
            "publisher"=> "anton com",
            "synopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, necessitatibus consequuntur blanditiis tempore tenetur incidunt odit labore, optio ex beatae illo iste, est porro dicta. Suscipit hic itaque accusantium quidem."
        ]);


        Book::create([
            "title" => "Ketika Tuhan berkehendak lain",
            "user_id" => 1,
            "category_id" => 1,
            "year" => 2022,
            "publisher"=> "anton com",
            "synopsis" => "Lorem ipsum dolor sit amet conseodit labore, optio ex beatae illo iste, est porro dicta. Suscipit hic itaque accusantium quidem."
        ]);

        
    }
}
