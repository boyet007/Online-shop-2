<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();

        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();
        
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg', 
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least at child.', 
        	'price' => 10

        ]);
        $product->save();
    }
}
