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
        	'imagePath' => 'https://yt3.ggpht.com/-tSSS2CHTsgc/AAAAAAAAAAI/AAAAAAAAAAA/Oz6w4Mk4Dq0/s900-c-k-no-mo-rj-c0xffffff/photo.jpg', 
        	'title' => 'Donal Duck',
        	'description' => 'Funny duck in the history', 
        	'price' => 11

        ]);
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/d/d4/Mickey_Mouse.png', 
        	'title' => 'Mickey_Mouse',
        	'description' => 'Funny mouse in the history', 
        	'price' => 10

        ]);
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'http://english-draw.salabun.com/img/654_0.jpg', 
        	'title' => 'Gufi',
        	'description' => 'Funny dog in history', 
        	'price' => 7

        ]);
        $product->save();

        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'http://1.bp.blogspot.com/-LEVK4pOvopo/VjPYlDRtEfI/AAAAAAAAFSo/JcVcK-ITNKE/s1600/usro.jpg', 
        	'title' => 'Si Usro',
        	'description' => 'Temen si kinoi.', 
        	'price' => 10

        ]);
        $product->save();
        
        $product->save();
                $product = new \App\Product([
        	'imagePath' => 'https://kemptonexpress.co.za/wp-content/uploads/sites/30/2016/07/tom-and-jerry.jpg', 
        	'title' => 'Tom and Jerry',
        	'description' => 'funny cat.', 
        	'price' => 10

        ]);
        $product->save();
    }
}
