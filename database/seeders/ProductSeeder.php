<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // productsへのデータ挿入
        // $table->string('title');
        //            $table->text('description');
        //            $table->decimal('price');
        //            $table->string('image_path');
        $products = [
            [
                'title' => '商品1',
                'description' => '商品1の説明',
                'price' => 1000,
                'image_path' => 'images/1.jpg',
            ],
            [
                'title' => '商品2',
                'description' => '商品2の説明',
                'price' => 2000,
                'image_path' => 'images/2.jpg',
            ],
            [
                'title' => '商品3',
                'description' => '商品3の説明',
                'price' => 3000,
                'image_path' => 'images/3.jpg',
            ],
            [
                'title' => '商品4',
                'description' => '商品4の説明',
                'price' => 4000,
                'image_path' => 'images/4.jpg',
            ],
            [
                'title' => '商品5',
                'description' => '商品5の説明',
                'price' => 5000,
                'image_path' => 'images/5.jpg',
            ],
        ];
        // 保存
        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
