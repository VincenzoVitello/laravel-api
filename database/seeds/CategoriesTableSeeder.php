<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $categories = ['cinema', 'tv shows', 'video', 'podcast', 'radio'];
         foreach($categories as $category_name){
             $newCategory = new Category;
             $newCategory->name = $category_name;
             $newCategory ->save(); 
         }
    }
}
