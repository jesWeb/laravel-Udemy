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

        //para llaves foraneas usamos
        /**
         *
         *DB::statement('SET FOREING_KEY_CHECKS=0;')
         */

        // el truncate formatea la base de datos para las pruebas
        Category::truncate();
        for ($i=0; $i <25 ; $i++) {
           Category::create(
            [
                'title'=> "Categoria $i",
                'slug'=>"categoria-$i"
            ]
           );
        }

    }
}
