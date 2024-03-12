<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //apro il file csv
        $open = fopen(__DIR__ .'/../csv/categories.csv','r');
        $data = fgetcsv($open,1000,",");
        $i = 0;
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
            $new_category = new Category();
            $new_category->name = $data[0];
            $new_category->color = $data[1];
            $new_category->save();
        $i++;

        }
        fclose($open);
    }
}
