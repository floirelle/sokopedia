<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cateory = new Category;
        $cateory->name = "Earphone";
        $cateory->save();
        
        $cateory = new Category;
        $cateory->name = "Laptop";
        $cateory->save();
        
    }
}
