<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myCategory1 = new Category;
        $myCategory1->name = "Electronicos";
        $myCategory1->save();

        $myCategory2 = new Category;
        $myCategory2->name = "Ropa";
        $myCategory2->save();

        $myCategory3 = new Category;
        $myCategory3->name = "Computadores";
        $myCategory3->save();

        Category::factory(1000)->create();
    }
}
