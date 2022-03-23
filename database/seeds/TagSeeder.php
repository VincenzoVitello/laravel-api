<?php

use Illuminate\Database\Seeder;
use App\Tag; 
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['divertente', 'drammatico', 'brillante', 'breve', 'con Pier Francesco Favino'];
         foreach($tags as $tag_name){
             $newTag = new Tag();
             $newTag->name = $tag_name;
             $newTag ->save(); 
         }
    }
}
