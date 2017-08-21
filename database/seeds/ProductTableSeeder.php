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
        $product = new App\Product([
            'title' => 'Django web Framework',
            'description' => 'Web development starts in the mind. Sure, it may be done in Python, Ruby, C#, Groovy, or any of the
other myriad programming languages out there these days, but all of them are just tools. The code for
web sites is created in the mind.',
            'price' => 30,
            'imagePath' => 'inspiring.jpg',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Buggatti',
            'description' => 'I’m going to start by writing a quick, very informal functional specification for our e-commerce
project. Take a moment to do the same, and let’s reconvene back here when you’re finished. Done?
Okay, here’s mine:',
            'price' => 50,
            'imagePath' => '01.jpg',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Mercedes',
            'description' => 'An online e-commerce catalog that sells instruments, sheet music, and
music accessories to its customers. When the user first comes to the site, the home page will display
some featured products.',
            'price' => 200,
            'imagePath' => '2.jpg',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Ford',
            'description' => 'Shopify is an online provider of e-commerce web applications. Sign up with them and
you’ll have your own store up online very quickly. It’s very affordable for small businesses, it’s easy to
use, and the interface is quite slick.',
            'price' => 100,
            'imagePath' => '8c3.jpg',
        ]);
        $product->save();

        $product = new App\Product([
            'title' => 'Audi',
            'description' => 'Django is extremely easy to learn and use, and is very lightweight and straightforward, much
like the language in which it’s written. Choosing a technology to use to construct your site is a tough
decision.',
            'price' => 120,
            'imagePath' => '9.jpg',
        ]);
        $product->save();
    }
}
