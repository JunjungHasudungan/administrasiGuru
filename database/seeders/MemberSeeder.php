<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'name'          => 'Hasudungan',
                'email'         => 'hasudungan05@gmai.com',
                'phone_number'  => 12345678909,
                'status'        => 1,
            ]
        ];
        Member::insert($members);
    }
}
