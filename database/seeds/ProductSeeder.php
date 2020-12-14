<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Earphone

        $product = new Product;
        $product->name="SoundPEATS TrueFree Plus";
        $product->category_id=1;
        $product->description="TRUEFREE+ EXTRA FREE WITH BETTER BATTERY
        Larger capacity charging case supports 9-10 full charge for both earbuds.";
        $product->price=389000;
        $product->image="imgs/Earphone/1";
        $product->save();

        $product = new Product;
        $product->name="SoundPEATS Truengine SE";
        $product->category_id=1;
        $product->description="Powerful Sound & Unique Design with DUAL DRIVERS CROSSOVERS
        that creates a immersive and melodious listening experience for you.";
        $product->price=589000;
        $product->image="imgs/Earphone/2";
        $product->save();
        
        $product = new Product;
        $product->name="SoundPEATS TrueFree";
        $product->category_id=1;
        $product->description="SOUNDPEATS Truefree is One of the Bestsellers on Amazon.";
        $product->price=279000;
        $product->image="imgs/Earphone/3";
        $product->save();

        $product = new Product;
        $product->name="SoundPEATS True Air";
        $product->category_id=1;
        $product->description="High-end Configuration, Zero Pressure Operation,Super Easy Pairing.";
        $product->price=479000;
        $product->image="imgs/Earphone/4";
        $product->save();

        // Laptop

        $product = new Product;
        $product->name="MSI Summit E15 A11SCST";
        $product->category_id=2;
        $product->description="MSI Summit E14 A11SCST [9S7-14C424-229].";
        $product->price=25999000;
        $product->image="imgs/Laptop/1";
        $product->save();

        $product = new Product;
        $product->name="MSI PRESTIGE 15 A11SCX";
        $product->category_id=2;
        $product->description="MSI PRESTIGE 15 A11SCX [9S7-16S612-234] URBAN SILVER.";
        $product->price=21999000;
        $product->image="imgs/Laptop/2";
        $product->save();
        
        $product = new Product;
        $product->name="MSI GF75 9SC";
        $product->category_id=2;
        $product->description="MSI Notebook GF75 9SC.";
        $product->price=14999000;
        $product->image="imgs/Laptop/3";
        $product->save();

        $product = new Product;
        $product->name="LAPTOP MSI GF63 9SCXR ";
        $product->category_id=2;
        $product->description="MSI Notebook GF63 9SCXR [9S7-16R412-838] - Black.";
        $product->price=10999000;
        $product->image="imgs/Laptop/4";
        $product->save();

    }
}
