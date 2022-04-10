<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'            => 1,
                'name'          => 'Ervina Galih', // guru mata pelajarn // GURU KELAS UMUM
                'email'         => 'ervina@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 2,
                'name'          => 'Verna Manoppo', // Kepala sekolah
                'email'         => 'VernaManoppo@gmail.com',
                'password'      => bcrypt('guru_smk_03'),
                'role_id'       => 1,
                'classroom_id'  => null,
            ],
            [
                'id'            => 3,
                'name'          => 'Mega Sinambela', // Kurikulum
                'email'         => 'MegaSinambela@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 1,
                'classroom_id'  => null,
            ],
            [
                'id'            => 4,
                'name'          => 'Sumitro Simamora',  // Wali kelas XII RPL // GURU KELAS UMUM
                'email'         => 'SumitroSimamora@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 5,
                'name'          => 'Dani Harianja', // Wali kelas XII Ak // guru kejurusan
                'email'         => 'DaniHarianja@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 6,
                'name'          => 'Feri Situmorang', // wali kelas XI-2-AK // GURU KELAS UMUM
                'email'         => 'FeriSitumorang@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 7,
                'name'          => 'Nasib Situmorang', // guru kejurusan
                'email'         => 'NasibSitumorang@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 8,
                'name'          => 'Ernes Simanjuntak', // GURU KELAS UMUM
                'email'         => 'ErnesSimanjuntak@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 9,
                'name'          => 'Fitri', // guru kejurusan
                'email'         => 'Fitri@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 10,
                'name'          => 'Angelina', // wali kelas XI RPL // GURU KELAS UMUM
                'email'         => 'AnjelinaG@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 11,
                'name'          => 'Yesaya Sihotang',  // wali kelas XI-A // GURU KELAS UMUM
                'email'         => 'YesayaSihotang@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 12,
                'name'          => 'Iskandar', // guru kejurusan
                'email'         => 'Iskandar@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 13,
                'name'          => 'Tabita Sihaan', // wali kelas X RPL // guru kejurusan
                'email'         => 'TabitaSihaan@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 14,
                'name'          => 'Sehati Laia', // GURU KELAS UMUM
                'email'         => 'SehatiLaia@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 15,
                'name'          => 'Hasudungan Sitorus', // guru kejurusan
                'email'         => 'HasudunganSitorus@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 16,
                'name'          => 'Berman Naibaho', // guru kejurusan
                'email'         => 'BermanNaibaho@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 17,
                'name'          => 'Argo', // guru kejurusan
                'email'         => 'Argo@gmail.com',
                'password'      => bcrypt('guru_smk_01'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 18,
                'name'          => 'Adventist Simamora', // SISWA XII RPL
                'email'         => 'advent@gmail.com',
                'password'      => bcrypt('siswa_smk_02'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 19,
                'name'          => 'Alvina', // SISWA XII RPL
                'email'         => 'alvina@gmail.com',
                'password'      => bcrypt('siswa_smk_03'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 20,
                'name'          => 'Angelina', // SISWA XII RPL
                'email'         => 'angelinjollia@gmail.com',
                'password'      => bcrypt('siswa_smk_03'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 21,
                'name'          => 'Tasya',
                'email'         => 'tasya@gmail.com',  // SISWA XII RPL
                'password'      => bcrypt('siswa_smk_03'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 22,
                'name'          => 'Ricardo Lim', // SISWA XII RPL
                'email'         => 'ricardoLim@gmail.com',
                'password'      => bcrypt('siswa_smk_04'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 23,
                'name'          => 'Steven', // SISWA XII RPL
                'email'         => 'stevent@gmail.com',
                'password'      => bcrypt('siswa_smk_05'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 24,
                'name'          => 'Stenly', // SISWA XII RPL
                'email'         => 'stenly@gmail.com',
                'password'      => bcrypt('siswa_smk_06'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 25,
                'name'          => 'Sukarta', // SISWA XII RPL
                'email'         => 'sukarta@gmail.com',
                'password'      => bcrypt('siswa_smk_07'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 26,
                'name'          => 'Suryanto', // SISWA XII RPL
                'email'         => 'suryanto@gmail.com',
                'password'      => bcrypt('siswa_smk_08'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 27,
                'name'          => 'Ferdiansya', // SISWA XII RPL
                'email'         => 'ferdiansyah@gmail.com',
                'password'      => bcrypt('siswa_smk_09'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 28,
                'name'          => 'Kelmi', // SISWA XII RPL
                'email'         => 'kelmi@gmail.com',
                'password'      => bcrypt('siswa_smk_10'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 29,
                'name'          => 'Ricy Ricardo', // SISWA X RPL
                'email'         => 'riccy@gmail.com',
                'password'      => bcrypt('siswa_smk_11'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 30,
                'name'          => 'Michael Widjaya', // SISWA X RPL
                'email'         => 'michael@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 31,
                'name'          => 'Yosua Miko', // SISWA XI RPL
                'email'         => 'yosuaM@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 32,
                'name'          => 'Vivien', // SISWA X Ak
                'email'         => 'vivien@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 33,
                'name'          => 'Nicholas Valentino Tjhia', // SISWA X  RPL
                'email'         => 'nicholas@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 34,
                'name'          => 'Jeje', // XI-1 Ak
                'email'         => 'jeje@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 35,
                'name'          => 'Jojo', // XI-2 Ak
                'email'         => 'jojo@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 36,
                'name'          => 'Anjelina', // XII Ak
                'email'         => 'anjelinaL@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 37,
                'name'          => 'Renaldi', // XII Ak
                'email'         => 'renaldi@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 38,
                'name'          => 'Hizki Addrianto', // SISWA XI RPL
                'email'         => 'hizki@gmail.com',
                'password'      => bcrypt('siswa_smk_12'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 39,
                'name'          => 'Yesika Sitinja', // GURU KELAS UMUM
                'email'         => 'yesika@gmail.com',
                'password'      => bcrypt('guru_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 40,
                'name'          => 'Jekhin', // GURU KELAS UMUM
                'email'         => 'jekhin@gmail.com',
                'password'      => bcrypt('guru_smk'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 41,
                'name'          => 'Susi Simatupang', // GURU KELAS UMUM
                'email'         => 'SusiSimatupang@gmail.com',
                'password'      => bcrypt('guru_smk'),
                'role_id'       => 3,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 42,
                'name'          => 'Agus Angry Liem', // SISWA X RPL
                'email'         => 'agusanggry@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 43,
                'name'          => 'Anggaresta', // SISWA X RPL
                'email'         => 'anggaresta@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 44,
                'name'          => 'Charles Ronal Tan', // SISWA X RPL
                'email'         => 'charlesR@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 45,
                'name'          => 'Andrew Asido Norman Pakpahan', // SISWA Xl RPL
                'email'         => 'AndrewA@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 46,
                'name'          => 'David Chandra', // SISWA Xi RPL
                'email'         => 'DavidC@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 47,
                'name'          => 'Dedi Sun', // SISWA Xi RPL
                'email'         => 'DediS@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 48,
                'name'          => 'Denis', // SISWA Xi RPL
                'email'         => 'Denis@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 49,
                'name'          => 'Agustin Aurelia Indira', // SISWA X Ak
                'email'         => 'AgustinA@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 50,
                'name'          => 'Angellina Jolin', // SISWA X Ak
                'email'         => 'AngellinaJo@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 51,
                'name'          => 'Candra', // SISWA X Ak
                'email'         => 'Candra@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 52,
                'name'          => 'Chelsea Agatha Lamvincy', // SISWA XI Ak
                'email'         => 'ChelsiaA@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 53,
                'name'          => 'Chong Siew Wei', // SISWA XI Ak
                'email'         => 'ChongSiew@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 54,
                'name'          => 'Christin Helnina', // SISWA XI Ak
                'email'         => 'ChristinH@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 55,
                'name'          => 'Angeli', // SISWA XII Ak
                'email'         => 'Angeli@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],
            [
                'id'            => 56,
                'name'          => 'Catalina Lim', // SISWA XII Ak
                'email'         => 'CatalinaL@gmail.com',
                'password'      => bcrypt('siswa_smk'),
                'role_id'       => 2,
                'classroom_id'  => 1,
            ],

        ];
        User::insert($users);
    }
}
