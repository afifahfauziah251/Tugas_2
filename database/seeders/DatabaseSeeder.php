<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Afifah Fauziah",
            "body" => "teorem ipsum sitnjsfnoj kjfafoijad"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Afifah Fauziah",
            "body" => "teorem ipsum sitnjsfnoj kjfafoijad"
        ]
        ]);
    }
}
