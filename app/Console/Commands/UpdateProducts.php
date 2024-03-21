<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class UpdateProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:update-featured {--random}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Featured Products changing price from 19.99 to 59.99. Category will be use all.
    --random option will update featured products in random price and category  
    ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //prendo i prodotti sponsorizzati
        $featured = Product::where('sponsored',1)->get();
        //dd($featured);
        //dd($this->option('random'));
        //vedo se c'è l'opzione --random
        if($this->option('random')){
            foreach($featured as $key => $product){
                $newprice =rand(1,100) - 0.01;
                $product->price = $newprice ;
                $product->category_id = rand(1, count($featured));
                $product->save();
            };
        }else{
            $newprice = 1 - 0.01;
            foreach($featured as $key => $product){
            $newprice +=10;
            $product->price = $newprice ;
            $product->category_id = $key+1;
            $product->save();
        };
        }
        
        
         //dd($featured);
         
        $this->line('Featured Products has been updates');
         $this->table(
             ['Name', 'Price'],
             Product::where('sponsored',1)->get(['name','price'])->toArray()
         );
        return Command::SUCCESS;
    }
}
