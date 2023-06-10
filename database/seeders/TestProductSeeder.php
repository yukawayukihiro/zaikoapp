<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'company_id' => 1,
            'product_name' => 'ミネラルウォーター',
            'price' => 130,
            'stock' => 20,
            'comment' => '清涼飲料水',
        ];
        DB::table('test_products')->insert($param);

        $param = [
            'company_id' => 2,
            'product_name' => 'コーヒー',
            'price' => 100,
            'stock' => 15,
            'comment' => 'コーヒー飲料',
        ];
        DB::table('test_products')->insert($param);

        $param = [
            'company_id' => 3,
            'product_name' => '緑茶',
            'price' => 120,
            'stock' => 20,
            'comment' => '清涼飲料水',
        ];
        DB::table('test_products')->insert($param);

        $param = [
            'company_id' => 4,
            'product_name' => 'おみくじらソーダ',
            'price' => 110,
            'stock' => 10,
            'comment' => '炭酸飲料',
        ];
        DB::table('test_products')->insert($param);
    }
}
