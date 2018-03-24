<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Thời trang nam'=>'fashion_man.jpeg',
            'Thời trang nữ'=>'fashion_women.jpeg',
            'Thời trang trẻ em'=>'fashion_child.jpeg',
            'Phụ kiện'=>'fashion_accessories.jpeg',
        ];
        foreach ($data as $key => $value) {
            Category::create([
                'name' => $key,
                'image' => $value,
                'alias' => str_slug($key, '-'),
            ]);
        }

    }
}
