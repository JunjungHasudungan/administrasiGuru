<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'        => 1,
                'title'     => 'kelas kejurusan',
                // 'class_id'  =>
            ],
            [
                'id'        => 2,
                'title'     => 'kelas umnum'
            ],
            [
                'id'        => 3,
                'title'     => 'reguler event'
            ],
            [
                'id'        => 4,
                'title'     => 'big event'
            ],

        ];

        Category::insert($categories);
    }
}
