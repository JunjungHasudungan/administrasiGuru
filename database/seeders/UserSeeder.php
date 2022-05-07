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
                'id'                    => 1,
                'name'                  => 'Ervina Galih', // guru mata pelajarn // GURU KELAS UMUM
                'email'                 => 'ervina@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 2,
                'name'                  => 'Verna Manoppo', // Kepala sekolah
                'email'                 => 'VernaManoppo@gmail.com',
                'password'              => bcrypt('guru_smk_03'),
                'role_id'               => 4,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 3,
                'name'                  => 'Mega Sinambela', // Kurikulum
                'email'                 => 'MegaSinambela@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 1,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 4,
                'name'                  => 'Sumitro Simamora',   // GURU KELAS UMUM
                'email'                 => 'SumitroSimamora@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 3, // Wali kelas XII RPL
            ],
            [
                'id'                    => 5,
                'name'                  => 'Dani Harianja',  // guru kejurusan
                'email'                 => 'DaniHarianja@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 2,
                'teacher_major'         => 2,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 8, // Wali kelas XII Ak
            ],
            [
                'id'                    => 6,
                'name'                  => 'Feri Situmorang', // wali kelas XI-2-AK // GURU KELAS UMUM
                'email'                 => 'FeriSitumorang@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 7, // wali kelas XII 1 AK
            ],
            [
                'id'                    => 7,
                'name'                  => 'Nasib Situmorang', // guru kejurusan
                'email'                 => 'NasibSitumorang@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 2,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 5, // wali kelas XI 1
            ],
            [
                'id'                    => 8,
                'name'                  => 'Ernes Simanjuntak', // GURU KELAS UMUM
                'email'                 => 'ErnesSimanjuntak@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 9,
                'name'                  => 'Fitri', // guru kejurusan
                'email'                 => 'Fitri@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 1,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 10,
                'name'                  => 'Angelina', // GURU KELAS UMUM
                'email'                 => 'AnjelinaG@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 2, // wali kelas XI RPL
            ],
            [
                'id'                    => 11,
                'name'                  => 'Yesaya Sihotang',   // GURU KELAS UMUM
                'email'                 => 'YesayaSihotang@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 4, // wali kelas XI 1 AK
            ],
            [
                'id'                    => 12,
                'name'                  => 'Iskandar', // guru kejurusan
                'email'                 => 'Iskandar@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 2,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 6, // wali kelas XI 2 AK
            ],
            [
                'id'                    => 13,
                'name'                  => 'Tabita Sihaan', // wali kelas X RPL // guru kejurusan
                'email'                 => 'TabitaSihaan@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 1,
                'teacher_major'         => 1,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => 1,
            ],
            [
                'id'                    => 14,
                'name'                  => 'Sehati Laia', // GURU KELAS UMUM
                'email'                 => 'SehatiLaia@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 15,
                'name'                  => 'Hasudungan Sitorus', // guru kejurusan
                'email'                 => 'HasudunganSitorus@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 1,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 16,
                'name'                  => 'Berman Naibaho', // guru kejurusan
                'email'                 => 'BermanNaibaho@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 1,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 17,
                'name'                  => 'Argo', // guru kejurusan
                'email'                 => 'Argo@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 2,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,
            ],
            [
                'id'                    => 18,
                'name'                  => 'Adventist Simamora', // SISWA XII RPL
                'email'                 => 'advent@gmail.com',
                'password'              => bcrypt('siswa_smk_02'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'        => null,          
            ],
            [
                'id'                    => 19,
                'name'                  => 'Alvina', // SISWA XII RPL
                'email'                 => 'alvina@gmail.com',
                'password'              => bcrypt('siswa_smk_03'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'        => null,          
            ],
            [
                'id'                    => 20,
                'name'                  => 'Angelina', // SISWA XII RPL
                'email'                 => 'angelinjollia@gmail.com',
                'password'              => bcrypt('siswa_smk_03'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 21,
                'name'                  => 'Tasya',
                'email'                 => 'tasya@gmail.com',  // SISWA XII RPL
                'password'              => bcrypt('siswa_smk_03'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 22,
                'name'                  => 'Ricardo Lim', // SISWA XII RPL
                'email'                 => 'ricardoLim@gmail.com',
                'password'              => bcrypt('siswa_smk_04'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 23,
                'name'                  => 'Steven', // SISWA XII RPL
                'email'                 => 'stevent@gmail.com',
                'password'              => bcrypt('siswa_smk_05'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 24,
                'name'                  => 'Stenly', // SISWA XII RPL
                'email'                 => 'stenly@gmail.com',
                'password'              => bcrypt('siswa_smk_06'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 25,
                'name'                  => 'Sukarta', // SISWA XII RPL
                'email'                 => 'sukarta@gmail.com',
                'password'              => bcrypt('siswa_smk_07'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 26,
                'name'                  => 'Suryanto', // SISWA XII RPL
                'email'                 => 'suryanto@gmail.com',
                'password'              => bcrypt('siswa_smk_08'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 27,
                'name'                  => 'Ferdiansya', // SISWA XII RPL
                'email'                 => 'ferdiansyah@gmail.com',
                'password'              => bcrypt('siswa_smk_09'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 28,
                'name'                  => 'Kelmi', // SISWA XII RPL
                'email'                 => 'kelmi@gmail.com',
                'password'              => bcrypt('siswa_smk_10'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 29,
                'name'                  => 'Ricy Ricardo', // SISWA X RPL
                'email'                 => 'riccy@gmail.com',
                'password'              => bcrypt('siswa_smk_11'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 1,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 30,
                'name'                  => 'Michael Widjaya', // SISWA X RPL
                'email'                 => 'michael@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 1,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 31,
                'name'                  => 'Yosua Miko', // SISWA XI RPL
                'email'                 => 'yosuaM@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 32,
                'name'                  => 'Vivien', // SISWA X Ak
                'email'                 => 'vivien@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 4,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 33,
                'name'                  => 'Nicholas Valentino Tjhia', // SISWA X  RPL
                'email'                 => 'nicholas@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 4,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 34,
                'name'                  => 'Jeje', // XI-1 Ak
                'email'                 => 'jeje@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 5,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 35,
                'name'                  => 'Jojo', // XI-2 Ak
                'email'                 => 'jojo@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 6,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 36,
                'name'                  => 'Anjelina', // XII 1 Ak
                'email'                 => 'anjelinaL@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 1,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 7,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 37,
                'name'                  => 'Renaldi', // XII 2 Ak
                'email'                 => 'renaldi@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 8,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 38,
                'name'                  => 'Hizki Addrianto', // SISWA XI RPL
                'email'                 => 'hizki@gmail.com',
                'password'              => bcrypt('siswa_smk_12'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 39,
                'name'                  => 'Yesika Sitinja', // GURU KELAS UMUM
                'email'                 => 'yesika@gmail.com',
                'password'              => bcrypt('guru_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => 0,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 40,
                'name'                  => 'Jekhin', // GURU KELAS UMUM
                'email'                 => 'jekhin@gmail.com',
                'password'              => bcrypt('guru_smk'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => 0,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 41,
                'name'                  => 'Susi Simatupang', // GURU KELAS UMUM
                'email'                 => 'SusiSimatupang@gmail.com',
                'password'              => bcrypt('guru_smk'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => 0,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 42,
                'name'                  => 'Agus Angry Liem', // SISWA X RPL
                'email'                 => 'agusanggry@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 1,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 43,
                'name'                  => 'Anggaresta', // SISWA X RPL
                'email'                 => 'anggaresta@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 1,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 1,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 44,
                'name'                  => 'Charles Ronal Tan', // SISWA X RPL
                'email'                 => 'charlesR@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 1,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 1,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 45,
                'name'                  => 'Andrew Asido Norman Pakpahan', // SISWA Xl RPL
                'email'                 => 'AndrewA@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 1,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 46,
                'name'                  => 'David Chandra', // SISWA XI RPL
                'email'                 => 'DavidC@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 47,
                'name'                  => 'Dedi Sun', // SISWA XI RPL
                'email'                 => 'DediS@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 48,
                'name'                  => 'Denis', // SISWA Xi RPL
                'email'                 => 'Denis@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => 2,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 49,
                'name'                  => 'Agustin Aurelia Indira', // SISWA X Ak
                'email'                 => 'AgustinA@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 4,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 50,
                'name'                  => 'Angellina Jolin', // SISWA X Ak
                'email'                 => 'AngellinaJo@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 4,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 51,
                'name'                  => 'Candra', // SISWA X Ak
                'email'                 => 'Candra@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 4,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 52,
                'name'                  => 'Chelsea Agatha Lamvincy', // SISWA XI 2 Ak
                'email'                 => 'ChelsiaA@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 6,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 53,
                'name'                  => 'Chong Siew Wei', // SISWA XI 2 Ak
                'email'                 => 'ChongSiew@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 6,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 54,
                'name'                  => 'Christin Helnina', // SISWA XI 1 Ak
                'email'                 => 'ChristinH@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 5,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 55,
                'name'                  => 'Angeli', // SISWA XII 1 Ak
                'email'                 => 'Angeli@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 7,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 56,
                'name'                  => 'Catalina Lim', // SISWA XII 1 Ak
                'email'                 => 'CatalinaL@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 2,
                'classroom_id'          => 7,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 57,
                'name'                  => 'Sefryanto Valentinus', // SISWA XII  RPL
                'email'                 => 'Sefryanto@gmail.com',
                'password'              => bcrypt('siswa_smk'),
                'role_id'               => 2,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => 1,
                'classroom_id'          => 3,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 58,
                'name'                  => 'New Teacher', // NEW TEACHER
                'email'                 => 'newTeacher@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 3,
                'major_id'              => 0,
                'teacher_major'         => 2,
                'student_major'         => 0,
                'classroom_id'          => 0,
                // 'homework_teacher'      => null,          
            ],
            [
                'id'                    => 59,
                'name'                  => 'William Chrisman', // NEW TEACHER
                'email'                 => 'williamChrisman@gmail.com',
                'password'              => bcrypt('guru_smk_01'),
                'role_id'               => 1,
                'major_id'              => 0,
                'teacher_major'         => null,
                'student_major'         => null,
                'classroom_id'          => null,
                // 'homework_teacher'      => null,        
            ],

        ];
        User::insert($users);
    }
}
