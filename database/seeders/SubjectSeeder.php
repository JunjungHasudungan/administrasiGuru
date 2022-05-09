<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use Carbon\Carbon;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return voi   */
    public function run()
    {
        $lessons =  [
            [
                'id'               => 1,
                'subject_code'     => 'Ag010',
                'subject_name'             => 'AGAMA 1',
            ],
            [
                'id'               => 2,
                'subject_code'     => 'Ag011',
                'subject_name'             => 'AGAMA 2',
            ],
            [
                'id'               => 3,
                'subject_code'     => 'Ag012',
                'subject_name'             => 'AGAMA 3',
            ],
            [
                'id'               => 4,
                'subject_code'     => 'Pkkn010',
                'subject_name'             => 'PPKN 1',
            ],
            [
                'id'               => 5,
                'subject_code'     => 'Pkkn011',
                'subject_name'             => 'PPKN 2',
            ],
            [
                'id'               => 6,
                'subject_code'     => 'Pkkn012',
                'subject_name'             => 'PKKN 3',
            ],
            [
                'id'               => 7,
                'subject_code'     => 'B.Indo010',
                'subject_name'             => 'BAHASA INDONESIA 1',
            ],
            [
                'id'               => 8,
                'subject_code'     => 'B.Indo011',
                'subject_name'             => 'BAHASA INDONESIA 2',
            ],
            [
                'id'                => 9,
                'subject_code'      => 'B.Indo012',
                'subject_name'              => 'BAHASA INDONESIA 3',
            ],
            [
                'id'                => 10,
                'subject_code'      => 'B.Ingg010',
                'subject_name'              => 'BAHASA INGGRIS 1',
            ],
            [
                'id'                => 11,
                'subject_code'      => 'B.Ingg011',
                'subject_name'              => 'BAHASA INGGRIS 2',
            ],
            [
                'id'                => 12,
                'subject_code'      => 'B.Ingg012',
                'subject_name'              => 'BAHASA INGGRIS 3',
            ],
            [
                'id'                => 13,
                'subject_code'      => 'MTK010',
                'subject_name'              => 'MTK 1',
            ],
            [
                'id'                => 14,
                'subject_code'      => 'MTK011',
                'subject_name'              => 'MTK 2',
            ],
            [
                'id'                => 15,
                'subject_code'      => 'MTK012',
                'subject_name'              => 'MTK 3',
            ],
            [
                'id'                => 16,
                'subject_code'      => 'Sej010',
                'subject_name'              => 'SEJARAH',
            ],
            [
                'id'                => 17,
                'subject_code'      => 'SBK010',
                'subject_name'              => 'SBK 1',
            ],
            [
                'id'                => 18,
                'subject_code'      => 'Pen010',
                'subject_name'              => 'PENJAS 1',
            ],
            [
                'id'                => 19,
                'subject_code'      => 'Pen011',
                'subject_name'              => 'PENJAS 2',
            ],
            [
                'id'                => 20,
                'subject_code'      => 'SMD010',
                'subject_name'              => 'SIMULASI DIGITAL DAN KOMUNIKASI',
            ],
            [
                'id'                => 21,
                'subject_code'      => 'IPA010',
                'subject_name'              => 'IPA',
            ],
            [
                'id'                => 22,
                'subject_code'      => 'KIMIA010',
                'subject_name'              => 'KIMIA',
            ],
            [
                'id'                => 23,
                'subject_code'      => 'FISIKA010',
                'subject_name'              => 'FISIKA',
            ],
            [
                'id'                => 51,
                'subject_code'      => 'EkoBis',
                'subject_name'              => 'EKO BISNIS',
            ],
            [
                'id'                => 52,
                'subject_code'      => 'AdmuM',
                'subject_name'              => 'ADMIN UMUM',
            ],
            [
                'id'                => 24,
                'subject_code'      => 'ETK010',
                'subject_name'              => 'ETIKA PROFESI',
            ],
            [
                'id'                => 25,
                'subject_code'      => 'Spreet010',
                'subject_name'              => 'SPREETSHEET',
            ],
            [
                'id'                => 26,
                'subject_code'      => 'Ak010',
                'subject_name'              => 'AK DASAR',
            ],
            [
                'id'                => 27,
                'subject_code'      => 'Per010',
                'subject_name'              => 'PERBANKAN DASAR',
            ],
            [
                'id'                => 28,
                'subject_code'      => 'Pap011',
                'subject_name'              => 'PAP 2',
            ],
            [
                'id'                => 29,
                'subject_code'      => 'Pap012',
                'subject_name'              => 'PAP 3',
            ],
            [
                'id'                => 30,
                'subject_code'      => 'Pal011',
                'subject_name'              => 'PAL 2',
            ],
            [
                'id'                => 31,
                'subject_code'      => 'Pal012',
                'subject_name'              => 'PAL 3',
            ],
            [
                'id'                => 32,
                'subject_code'      => 'Akk011',
                'subject_name'              => 'AK KEUANGAN 2',
            ],
            [
                'id'                => 33,
                'subject_code'      => 'Akk012',
                'subject_name'              => 'AK KEUANGAN 3',
            ],
            [
                'id'                => 34,
                'subject_code'      => 'KomAK011',
                'subject_name'              => 'KOMPUTER AKUTANSI 2',
            ],
            [
                'id'                => 35,
                'subject_code'      => 'KomAK012',
                'subject_name'              => 'KOMPUTER AKUTANSI 3',
            ],
            [
                'id'                => 36,
                'subject_code'      => 'AdmPa011',
                'subject_name'              => 'ADMIN PAJAK 2',
            ],
            [
                'id'                => 37,
                'subject_code'      => 'AdmPa012',
                'subject_name'              => 'ADMIN PAJAK 3',
            ],
            [
                'id'                => 38,
                'subject_code'      => 'Sisk010',
                'subject_name'              => 'SIS-KOM',
            ],
            [
                'id'                => 39,
                'subject_code'      => 'Komjar010',
                'subject_name'              => 'KOMPUTER JARINGAN',
            ],
            [
                'id'                => 40,
                'subject_code'      => 'PD010',
                'subject_name'              => 'PEMOGRAMAN DASAR',
            ],
            [
                'id'                => 41,
                'subject_code'      => 'Ddg010',
                'subject_name'              => 'DDG',
            ],
            [
                'id'                => 42,
                'subject_code'      => 'Pemd011',
                'subject_name'              => 'PEMODELAN',
            ],
            [
                'id'                => 43,
                'subject_code'      => 'BasDa011',
                'subject_name'              => 'BASIS DATA 1',
            ],
            [
                'id'                => 44,
                'subject_code'      => 'BasDa012',
                'subject_name'              => 'BASIS DATA 2',
            ],
            [
                'id'                => 45,
                'subject_code'      => 'PemgObj011',
                'subject_name'              => 'PEMOGRAMAN OBJEK 1',
            ],
            [
                'id'                => 46,
                'subject_code'      => 'PemgObj012',
                'subject_name'              => 'PEMOGRAMAN OBJEK 2',
            ],
            [
                'id'                => 47,
                'subject_code'      => 'PemgWeb011',
                'subject_name'              => 'PEMOGRAMAN WEBSITE 1',
            ],
            [
                'id'                => 48,
                'subject_code'      => 'PemgWeb012',
                'subject_name'              => 'PEMOGRAMAN WEBSITE 2',
            ],
            [
                'id'                => 49,
                'subject_code'      => 'PKK011',
                'subject_name'              => 'PKK 1',
            ],
            [
                'id'                => 50,
                'subject_code'      => 'PKK012',
                'subject_name'              => 'PKK 2',
            ],
        ];

        Subject::insert($lessons);
    }
}
