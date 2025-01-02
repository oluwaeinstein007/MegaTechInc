<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Mobile Devices', 'image' => asset('storage/Categories/mobile_devices.jpg')],
            ['name' => 'TVs, Monitors', 'image' => asset('storage/Categories/tvs_monitors.jpg')],
            ['name' => 'Laptops, Tablets, Computers', 'image' => asset('storage/Categories/laptops_tablets_computers.jpg')],
            ['name' => 'Appliances & White Goods', 'image' => asset('storage/Categories/appliances_white_goods.jpg')],
            ['name' => 'Piano & Keyboard', 'image' => asset('storage/Categories/piano_keyboard.jpg')],
            ['name' => 'Bicycles', 'image' => asset('storage/Categories/bicycles.jpg')],
            ['name' => 'Generators', 'image' => asset('storage/Categories/generators.jpg')],
            ['name' => 'DJ Equipment & Accessories', 'image' => asset('storage/Categories/dj_equipment_accessories.jpg')],
            ['name' => 'Cameras', 'image' => asset('storage/Categories/cameras.jpg')],
            ['name' => 'Drones', 'image' => asset('storage/Categories/drones.jpg')],
            ['name' => 'Others', 'image' => asset('storage/Categories/others.jpg')],
        ];


        // ['name' => "Men’s Clothing", 'image' => url('storage/Categories/men_clothing.jpg')],


        foreach ($categories as $category) {
            $tempPicName = Str::slug($category['name'], '+');
            Category::updateOrCreate(
                ['name' => $category['name']],
                [
                    'name' => $category['name'],
                    'slug' => Str::slug($category['name'], '-'),
                    // 'image' => $category['image'],
                    'image' => 'https://via.placeholder.com/150?text='.$tempPicName,
                ]
            );
        }
    }
}

