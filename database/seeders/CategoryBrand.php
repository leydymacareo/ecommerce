<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryBrand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myBrand1 = new Brand;
        $myBrand1->name = "LG";
        $myBrand1->save();

        $myBrand2 = new Brand;
        $myBrand2->name = "Mabe";
        $myBrand2->save();

        $myBrand3 = new Brand;
        $myBrand3->name = "Intel";
        $myBrand3->save();
    }
}
