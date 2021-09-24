<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'Iphone 13',
            'price' => '1200',
            'description' => 'The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface. The iPhone runs the iOS operating system, and in 2020 when the iPhone 12 was introduced, it offered up to 256 GB of storage and a 12-megapixel camera.',  
            'category' => 'mobile',
            'gallery' => 'iphoneth.jpg',
            ],
            [
            'name' => 'Iphone 12',
            'price' => '999',
            'description' => 'The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface. The iPhone runs the iOS operating system, and in 2020 when the iPhone 12 was introduced, it offered up to 256 GB of storage and a 12-megapixel camera.',  
            'category' => 'mobile',
            'gallery' => 'iphoneel.jpeg',
            ],
            [
            'name' => 'Iphone 11',
            'price' => '899',
            'description' => 'The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface. The iPhone runs the iOS operating system, and in 2020 when the iPhone 12 was introduced, it offered up to 256 GB of storage and a 12-megapixel camera.',  
            'category' => 'mobile',
            'gallery' => 'iphone.jpeg',
            ],
            [
            'name' => 'Iphone 10',
            'price' => '799',
            'description' => 'The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface. The iPhone runs the iOS operating system, and in 2020 when the iPhone 12 was introduced, it offered up to 256 GB of storage and a 12-megapixel camera.',  
            'category' => 'mobile',
            'gallery' => 'photo.jpeg',
            ],
        ]);
    }
}
