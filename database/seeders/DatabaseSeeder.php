<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@gmail.com',
            'phone' => '012345678',
            'role' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678'),
        ]);
        \App\Models\SiteSetting::truncate();
        \App\Models\SiteSetting::create([
            "type" => "general",
            "content" => json_encode([
                "title" => "",
                "author" => "",
                "keyword" => "",
                "description" => "",
                "image" => "",
                "logo_header" => "",
                "logo_footer" => ""
            ])
        ]);
        \App\Models\SiteSetting::create([
            "type" => "contact",
            "content" => json_encode([
                "address" => "",
                "address_kh" => "",
                "telephone1" => "",
                "telephone2" => "",
                "email1" => "",
                "email2" => "",
                "facebook" => "",
                "instagram" => "",
                "twitter" => "",
                "youtube" => "",
                "map_embed_link" => ""
            ])
        ]);
        \App\Models\SiteSetting::create([
            "type" => "about",
            "content" => json_encode([
                "title_eng" => "",
                "title_kh" => "",
                "description_eng" => "",
                "description_kh" => "",
                "image" => "",
                "image2" => "",
                "image3" => "",
                "image4" => "",
                "image5" => "",
                "image6" => "",
                "vision_eng" => "",
                "vision_kh" => "",
                "ourvalues_eng" => "",
                "ourvalues_kh" => "",
                "ourmission_eng" => "",
                "ourmission_kh" => "",
            ])
        ]);
    }
}
