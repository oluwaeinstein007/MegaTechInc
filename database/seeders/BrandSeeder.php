<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            ['name' => 'Samsung', 'image' => asset('storage/Brand/samsung.jpg')],
            ['name' => 'LG', 'image' => asset('storage/Brand/lg.jpg')],
            ['name' => 'TCL', 'image' => asset('storage/Brand/tcl.jpg')],
            ['name' => 'SONY', 'image' => asset('storage/Brand/sony.jpg')],
            ['name' => 'CANON', 'image' => asset('storage/Brand/canon.jpg')],
            ['name' => 'NIKON', 'image' => asset('storage/Brand/nikon.jpg')],
            ['name' => 'APPLE', 'image' => asset('storage/Brand/apple.jpg')],
            ['name' => 'HP', 'image' => asset('storage/Brand/hp.jpg')],
            ['name' => 'ASUS', 'image' => asset('storage/Brand/asus.jpg')],
            ['name' => 'YAMAHA', 'image' => asset('storage/Brand/yamaha.jpg')],
            ['name' => 'JBL', 'image' => asset('storage/Brand/jbl.jpg')],
            ['name' => 'BIANCHI', 'image' => asset('storage/Brand/bianchi.jpg')],
            ['name' => 'Dji Mavic', 'image' => asset('storage/Brand/dji_mavic.jpg')],
            ['name' => 'ROLAND', 'image' => asset('storage/Brand/roland.jpg')],
            ['name' => 'Stumpjumper', 'image' => asset('storage/Brand/stumpjumper.jpg')],
            ['name' => 'Razer Blade', 'image' => asset('storage/Brand/razer_blade.jpg')],
            ['name' => 'Google Pixel', 'image' => asset('storage/Brand/google_pixel.jpg')],
            ['name' => 'Korg', 'image' => asset('storage/Brand/korg.jpg')],
            ['name' => 'DELL', 'image' => asset('storage/Brand/dell.jpg')],
            ['name' => 'Garmin', 'image' => asset('storage/Brand/garmin.jpg')],
            ['name' => 'Nubia', 'image' => asset('storage/Brand/nubia.jpg')],
            ['name' => 'Huawei', 'image' => asset('storage/Brand/huawei.jpg')],
            ['name' => 'TREK', 'image' => asset('storage/Brand/trek.jpg')],
            ['name' => 'SANTA CRUZ', 'image' => asset('storage/Brand/santa_cruz.jpg')],
            ['name' => 'Specialized', 'image' => asset('storage/Brand/specialized.jpg')],
        ];

        foreach ($brands as $brand) {
            $tempPicName = Str::slug($brand['name'], '+');
            Brand::updateOrCreate(
                ['name' => $brand['name']],
                [
                    'name' => $brand['name'],
                    'slug' => Str::slug($brand['name'], '-'),
                    // 'image' => $brand['image'],
                    'image' => 'https://via.placeholder.com/150?text='.$tempPicName,
                ]
            );
        }
    }
}
