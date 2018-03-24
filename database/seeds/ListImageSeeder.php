<?php

use Illuminate\Database\Seeder;

class ListImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('listimages')->insert([
           [
                'name'=>'1_1.jpeg',
                'product_id'=>1,
           ],
           [
               'name'=>'1_2.jpeg',
               'product_id'=>1,
           ],
           [
               'name'=>'1_3.jpeg',
               'product_id'=>1,
           ],
           [
               'name'=>'1_4.jpeg',
               'product_id'=>1,
           ],
           [
               'name'=>'1_5.jpeg',
               'product_id'=>1,
           ],
           [
               'name'=>'1_6.jpeg',
               'product_id'=>1,
           ],[
               'name'=>'2_1.jpeg',
               'product_id'=>2,
           ],[
               'name'=>'2_2.jpeg',
               'product_id'=>2,
           ],[
               'name'=>'3_1.jpeg',
               'product_id'=>3,
           ],[
               'name'=>'3_2.jpeg',
               'product_id'=>3,
           ],[
               'name'=>'3_3.jpeg',
               'product_id'=>3,
           ],[
               'name'=>'4_1.jpeg',
               'product_id'=>4,
           ],[
               'name'=>'4_2.jpeg',
               'product_id'=>4,
           ],[
               'name'=>'4_3.jpeg',
               'product_id'=>4,
           ],[
               'name'=>'5_1.jpeg',
               'product_id'=>5,
           ],[
               'name'=>'6_1.jpeg',
               'product_id'=>6,
           ],[
               'name'=>'6_2.jpeg',
               'product_id'=>6,
           ],[
               'name'=>'6_3.jpeg',
               'product_id'=>6,
           ],[
               'name'=>'7_1.jpeg',
               'product_id'=>7,
           ],[
               'name'=>'7_2.jpeg',
               'product_id'=>7,
           ],[
               'name'=>'7_3.jpeg',
               'product_id'=>7,
           ],[
               'name'=>'8_1.jpeg',
               'product_id'=>8,
           ],[
               'name'=>'8_2.jpeg',
               'product_id'=>8,
           ],[
               'name'=>'8_3.jpeg',
               'product_id'=>8,
           ],[
               'name'=>'9_1.jpeg',
               'product_id'=>9,
           ],
           [
               'name'=>'9_2.jpeg',
               'product_id'=>9,
           ],[
               'name'=>'9_3.jpeg',
               'product_id'=>9,
           ],[
               'name'=>'9_4.jpeg',
               'product_id'=>9,
           ],
           [
               'name'=>'10_1.jpeg',
               'product_id'=>10,
           ],
           [
               'name'=>'10_2.jpeg',
               'product_id'=>10,
           ],
           [
               'name'=>'11_1.jpeg',
               'product_id'=>11,
           ],
           [
               'name'=>'11_2.jpeg',
               'product_id'=>11,
           ],
           [
               'name'=>'12_1.jpeg',
               'product_id'=>12,
           ],
           [
               'name'=>'12_2.jpeg',
               'product_id'=>12,
           ],
           [
               'name'=>'12_3.jpeg',
               'product_id'=>12,
           ],
           [
               'name'=>'13_1.jpeg',
               'product_id'=>13,
           ],
           [
               'name'=>'13_2.jpeg',
               'product_id'=>13,
           ],
           [
               'name'=>'13_3.jpeg',
               'product_id'=>13,
           ],


       ]);
    }
}






