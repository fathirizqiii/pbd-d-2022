<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    DB::table('criterion')->insert([
        'title' => 'Excellent',
        'description' => 'Mampu menjelaskan konsep yang ditanyakan dengan benar dan terperinci. Sangat menguasai materi',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Proficient',
        'description' => 'Mampu menelaskan konsep yang ditanyakan dengan benar, tetapi masih ada bagian-bagia yang kurang dijabarkan',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Satisfactory',
        'description' => 'Hanya menjelaskan secara garis besar saja, masih belum menguasai materi tentang konsep yang ditanyakan',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Poor',
        'description' => 'Berusaha menjawab pertanyaan yang ditanyakan dengan konsep yang tidak ada hubungannya dengan pertanyaan',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Incomplete',
        'description' => 'Tidak bisa menjawab dan terlihat sangat tidak menguasai konsep yang ditanyakan',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Excellent',
        'description' => 'Mampu mengimplementsikan tugas yang diberikan dengan sangat baik dan lancar. Sangat menguasai tools atau framework yang digunakan.',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Proficient',
        'description' => 'Mampu mengimplementasikan tugas yang diberikan dengan baik walaupun ada yang sedikit belum tuntas. Pemahaman tentang tools dan framework yang digunakan masih bisa ditingkatkan.',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Satisfactory',
        'description' => 'Setengah jalan atau lebih dalam mengimplementasikan tugas yang diberikan. Menunjukkan arah pengerjaan yang benar',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Poor',
        'description' => 'Belum selesai mengimplementasikan tugas yang diberikan, tetapi ada progress yang cukup. Menunjukkan pemahaman yang kurang',
    ]);

    DB::table('criterion')->insert([
        'title' => 'Incomplete',
        'description' => 'Hampir tidak ada progress sama sekali dalam mengerjakan tugas yang diberikan',
    ]);

   }
}