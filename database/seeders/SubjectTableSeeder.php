<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use Carbon\Carbon;

class SubjectTableSeeder extends Seeder
{
    public function run()
    {
        $lessons =  [
            [
                'id'               => 1,
                'subject_code'     => 'Ag010',
                'name'              => 'AGAMA 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 40,
            ],
            [
                'id'               => 2,
                'subject_code'     => 'Ag011',
                'name'              => 'AGAMA 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 40,
            ],
            [
                'id'               => 3,
                'subject_code'     => 'Ag012',
                'name'              => 'AGAMA 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 40,
            ],
            [
                'id'               => 4,
                'subject_code'     => 'Pkkn010',
                'name'              => 'PPKN 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'               => 5,
                'subject_code'     => 'Pkkn011',
                'name'              => 'PPKN 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'               => 6,
                'subject_code'     => 'Pkkn012',
                'name'              => 'PKKN 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'               => 7,
                'subject_code'     => 'B.Indo010',
                'name'              => 'BAHASA INDONESIA 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 4,
            ],
            [
                'id'               => 8,
                'subject_code'     => 'B.Indo011',
                'name'              => 'BAHASA INDONESIA 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 4,
            ],
            [
                'id'                => 9,
                'subject_code'      => 'B.Indo012',
                'name'              => 'BAHASA INDONESIA 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 4,
            ],
            [
                'id'                => 10,
                'subject_code'      => 'B.Ingg010',
                'name'              => 'BAHASA INGGRIS 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 10,
            ],
            [
                'id'                => 11,
                'subject_code'      => 'B.Ingg011',
                'name'              => 'BAHASA INGGRIS 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 10,
            ],
            [
                'id'                => 12,
                'subject_code'      => 'B.Ingg012',
                'name'              => 'BAHASA INGGRIS 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 10,
            ],
            [
                'id'                => 13,
                'subject_code'      => 'MTK010',
                'name'              => 'MTK 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 6,
            ],
            [
                'id'                => 14,
                'subject_code'      => 'MTK011',
                'name'              => 'MTK 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 6,
            ],
            [
                'id'                => 15,
                'subject_code'      => 'MTK012',
                'name'              => 'MTK 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 39,
            ],
            [
                'id'                => 16,
                'subject_code'      => 'Sej010',
                'name'              => 'SEJARAH',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 8,
            ],
            [
                'id'                => 17,
                'subject_code'      => 'SBK010',
                'name'              => 'SBK 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'                => 18,
                'subject_code'      => 'Pen010',
                'name'              => 'PENJAS 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 11,
            ],
            [
                'id'                => 19,
                'subject_code'      => 'Pen011',
                'name'              => 'PENJAS 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 11,
            ],
            [
                'id'                => 20,
                'subject_code'      => 'SMD010',
                'name'              => 'SIMULASI DIGITAL DAN KOMUNIKASI',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 15,
            ],
            [
                'id'                => 21,
                'subject_code'      => 'IPA010',
                'name'              => 'IPA',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 41,
            ],
            [
                'id'                => 22,
                'subject_code'      => 'KIMIA010',
                'name'              => 'KIMIA',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 41,
            ],
            [
                'id'                => 23,
                'subject_code'      => 'FISIKA010',
                'name'              => 'FISIKA',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 41,
            ],
            [
                'id'                => 51,
                'subject_code'      => 'EkoBis',
                'name'              => 'EKO BISNIS',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 12,
            ],
            [
                'id'                => 52,
                'subject_code'      => 'AdmuM',
                'name'              => 'ADMIN UMUM',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'                => 24,
                'subject_code'      => 'ETK010',
                'name'              => 'ETIKA PROFESI',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'                => 25,
                'subject_code'      => 'Spreet010',
                'name'              => 'SPREETSHEET',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 7,
            ],
            [
                'id'                => 26,
                'subject_code'      => 'Ak010',
                'name'              => 'AK DASAR',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 7,
            ],
            [
                'id'                => 27,
                'subject_code'      => 'Per010',
                'name'              => 'PERBANKAN DASAR',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 12,
            ],
            [
                'id'                => 28,
                'subject_code'      => 'Pap011',
                'name'              => 'PAP 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 29,
                'subject_code'      => 'Pap012',
                'name'              => 'PAP 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 12,
            ],
            [
                'id'                => 30,
                'subject_code'      => 'Pal011',
                'name'              => 'PAL 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 7,
            ],
            [
                'id'                => 31,
                'subject_code'      => 'Pal012',
                'name'              => 'PAL 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 32,
                'subject_code'      => 'Akk011',
                'name'              => 'AK KEUANGAN 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 33,
                'subject_code'      => 'Akk012',
                'name'              => 'AK KEUANGAN 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 34,
                'subject_code'      => 'KomAK011',
                'name'              => 'KOMPUTER AKUTANSI 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 17,
            ],
            [
                'id'                => 35,
                'subject_code'      => 'KomAK012',
                'name'              => 'KOMPUTER AKUTANSI 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 17,
            ],
            [
                'id'                => 36,
                'subject_code'      => 'AdmPa011',
                'name'              => 'ADMIN PAJAK 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 37,
                'subject_code'      => 'AdmPa012',
                'name'              => 'ADMIN PAJAK 3',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 5,
            ],
            [
                'id'                => 38,
                'subject_code'      => 'Sisk010',
                'name'              => 'SIS-KOM',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 15,
            ],
            [
                'id'                => 39,
                'subject_code'      => 'Komjar010',
                'name'              => 'KOMPUTER JARINGAN',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 13,
            ],
            [
                'id'                => 40,
                'subject_code'      => 'PD010',
                'name'              => 'PEMOGRAMAN DASAR',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 58,
            ],
            [
                'id'                => 41,
                'subject_code'      => 'Ddg010',
                'name'              => 'DDG',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 13,
            ],
            [
                'id'                => 42,
                'subject_code'      => 'Pemd011',
                'name'              => 'PEMODELAN',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 15,
            ],
            [
                'id'                => 43,
                'subject_code'      => 'BasDa011',
                'name'              => 'BASIS DATA 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 13,
            ],
            [
                'id'                => 44,
                'subject_code'      => 'BasDa012',
                'name'              => 'BASIS DATA 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 13,
            ],
            [
                'id'                => 45,
                'subject_code'      => 'PemgObj011',
                'name'              => 'PEMOGRAMAN OBJEK 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 15,
            ],
            [
                'id'                => 46,
                'subject_code'      => 'PemgObj012',
                'name'              => 'PEMOGRAMAN OBJEK 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 16,
            ],
            [
                'id'                => 47,
                'subject_code'      => 'PemgWeb011',
                'name'              => 'PEMOGRAMAN WEBSITE 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 13,
            ],
            [
                'id'                => 48,
                'subject_code'      => 'PemgWeb012',
                'name'              => 'PEMOGRAMAN WEBSITE 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 16,
            ],
            [
                'id'                => 49,
                'subject_code'      => 'PKK011',
                'name'              => 'PKK 1',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
            [
                'id'                => 50,
                'subject_code'      => 'PKK012',
                'name'              => 'PKK 2',
                // 'start_time'        => '10:20',
                // 'end_time'          => '12:00',
                'teacher_id'        => 1,
            ],
        ];

        Subject::insert($lessons);
    }
}
