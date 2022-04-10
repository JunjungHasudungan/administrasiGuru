<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use Carbon\Carbon;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return voi   */
    public function run()
    {
        $lessons =  [
            [
                'id'                => 1,
                'subject_code'       => 'Ag010',
                'name'              => 'AGAMA-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 2,
                'subject_code'      => 'Ag011',
                'name'              => 'AGAMA-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 3,
                'subject_code'      => 'Ag012',
                'name'              => 'AGAMA-3',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 4,
                'subject_code'      => 'Pkkn010',
                'name'              => 'PPKN-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 5,
                'subject_code'      => 'Pkkn011',
                'name'              => 'PPKN-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 6,
                'subject_code'      => 'Pkkn012',
                'name'              => 'PKKN-3',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 7,
                'subject_code'      => 'B.Indo010',
                'name'              => 'BAHASA INDONESIA-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 8,
                'subject_code'       => 'B.Indo011',
                'name'              => 'BAHASA INDONESIA-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 9,
                'subject_code'      => 'B.Indo012',
                'name'              => 'BAHASA INDONESIA-3',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 10,
                'subject_code'       => 'B.Ingg010',
                'name'              => 'BAHASA INGGRIS-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 11,
                'subject_code'      => 'B.Ingg011',
                'name'              => 'BAHASA INGGRIS-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 12,
                'subject_code'       => 'B.Ingg012',
                'name'              => 'BAHASA INGGRIS-3',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 13,
                'subject_code'      => 'MTK010',
                'name'              => 'MTK-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 14,
                'subject_code'      => 'MTK011',
                'name'              => 'MTK-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 15,
                'subject_code'      => 'MTK012',
                'name'              => 'MTK-3',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 16,
                'subject_code'      => 'Sej010',
                'name'              => 'SEJARAH-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 17,
                'subject_code'      => 'SBK010',
                'name'              => 'SBK-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 18,
                'subject_code'      => 'Pen010',
                'name'              => 'PENJAS-1',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 19,
                'subject_code'      => 'Pen011',
                'name'              => 'PENJAS-2',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 20,
                'subject_code'      => 'SDK010',
                'name'              => 'SimDig',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 21,
                'subject_code'      => 'IPA010',
                'name'              => 'IPA',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 22,
                'subject_code'      => 'KIMIA010',
                'name'              => 'KIMIA',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 23,
                'subject_code'      => 'FISIKA010',
                'name'              => 'FISIKA',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 24,
                'subject_code'      => 'ETK010',
                'name'              => 'ETIKA PROFESI',
                'category_id'       => 2,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 25,
                'subject_code'      => 'Spreet010',
                'name'              => 'SPREETSHEET',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 26,
                'subject_code'      => 'Ak010',
                'name'              => 'AK DASAR',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 27,
                'subject_code'      => 'Per010',
                'name'              => 'PERBANKAN DASAR',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 28,
                'subject_code'      => 'Pap011',
                'name'              => 'PAP-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 29,
                'subject_code'      => 'Pap012',
                'name'              => 'PAP-3',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 30,
                'subject_code'      => 'Pal011',
                'name'              => 'PAL-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 31,
                'subject_code'      => 'Pal012',
                'name'              => 'PAL-3',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 32,
                'subject_code'      => 'Akk011',
                'name'              => 'AK KEUANGAN-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 33,
                'subject_code'      => 'Akk012',
                'name'              => 'AK KEUANGAN-3',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 34,
                'subject_code'      => 'KomAK011',
                'name'              => 'KOMPUTER AKUTANSI-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 35,
                'subject_code'      => 'KomAK012',
                'name'              => 'KOMPUTER AKUTANSI-3',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 36,
                'subject_code'      => 'AdmPa011',
                'name'              => 'ADMIN PAJAK-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 37,
                'subject_code'      => 'AdmPa012',
                'name'              => 'ADMIN PAJAK-3',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 38,
                'subject_code'      => 'Sisk010',
                'name'              => 'SIS-KOM',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 39,
                'subject_code'      => 'Komjar010',
                'name'              => 'KOMPUTER JARINGAN',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 40,
                'subject_code'      => 'PD010',
                'name'              => 'PEMOGRAMAN DASAR',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 41,
                'subject_code'      => 'Ddg010',
                'name'              => 'DDG',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 42,
                'subject_code'      => 'Pemd011',
                'name'              => 'PEMODELAN',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 43,
                'subject_code'      => 'BasDa011',
                'name'              => 'BASIS DATA-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 44,
                'subject_code'      => 'BasDa012',
                'name'              => 'BASIS DATA-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 45,
                'subject_code'      => 'PemgObj011',
                'name'              => 'PEMOGRAMAN OBJEK-1',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 46,
                'subject_code'      => 'PemgObj012',
                'name'              => 'PEMOGRAMAN OBJEK-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 47,
                'subject_code'      => 'PemgWeb011',
                'name'              => 'PEMOGRAMAN WEBSITE-1',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 48,
                'subject_code'      => 'PemgWeb012',
                'name'              => 'PEMOGRAMAN WEBSITE-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 49,
                'subject_code'      => 'PKK011',
                'name'              => 'PKK-1',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
            [
                'id'                => 50,
                'subject_code'      => 'PKK012',
                'name'              => 'PKK-2',
                'category_id'       => 1,
                'created_at'        => Carbon::now()
            ],
        ];

        Subject::insert($lessons);
    }
}
