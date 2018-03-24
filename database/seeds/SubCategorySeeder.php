<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            [
                'name' => 'Quần kaki nam',
                'alias' => 'quan-kaki-nam',
                'cate_id' => 1,
            ],
            [
                'name' => 'Quần jean nam',
                'alias' => 'quan-jean-nam',
                'cate_id' => 1,
            ],
            [
                'name' => 'Áo thun nam',
                'alias' => 'ao-thun-nam',
                'cate_id' => 1,
            ],
            [
                'name' => 'Áo sơ mi nam',
                'alias' => 'ao-so-mi-nam',
                'cate_id' => 1,
            ],
            [
                'name' => 'Áo khoác nam',
                'alias' => 'ao-khoac-nam',
                'cate_id' => 1,
            ],
            [

                'name' => 'Giày thể thao nam',
                'alias' => 'giay-the-thao-nam',
                'cate_id' => 1,
            ],
            [

                'name' => 'Giày lười nam',
                'alias' => 'giay-luoi-nam',
                'cate_id' => 1,
            ],
            [

                'name' => 'Giày da nam',
                'alias' => 'giay-da-nam',
                'cate_id' => 1,
            ],
            [

                'name' => 'Quần jean nữ',
                'alias' => 'quan-jean-nu',
                'cate_id' => 2,
            ],

            [
                'name' => 'Áo thun nữ',
                'alias' => 'ao-thun-nu',
                'cate_id' => 2,
            ],
            [
                'name' => 'Áo sơ mi nữ',
                'alias' => 'ao-so-mi-nu',
                'cate_id' => 2,
            ],
            [
                'name' => 'Áo khoác nữ',
                'alias' => 'ao-khoac-nu',
                'cate_id' => 2,
            ],
            [

                'name' => 'Đầm váy',
                'alias' => 'dam-vay',
                'cate_id' => 2,
            ],
            [
                'name' => 'Giày cao gót',
                'alias' => 'giay-cao-got',
                'cate_id' => 2,
            ],
            [
                'name' => 'Giày thể thao nữ',
                'alias' => 'giay-the-thao-nu',
                'cate_id' =>2,
            ],
            [
                'name' => 'Mắt kính',
                'alias' => 'mat-kinh',
                'cate_id' => 4,
            ], [
                'name' => 'Đồng hồ',
                'alias' => 'dong-ho',
                'cate_id' => 4,
            ],
            [
                'name' => 'Thắt lưng',
                'alias' => 'that-lung',
                'cate_id' => 4,
            ],
        ]);
    }
}

