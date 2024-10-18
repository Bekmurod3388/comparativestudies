<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Locale;

class LocaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'Uzbek',
            'English',
            'Spanish',
            'French',
            'German',
            'Chinese',
            'Japanese',
            'Russian',
            'Arabic',
            'Portuguese',
            'Italian',
            'Dutch',
            'Swedish',
            'Korean',
            'Turkish',
            'Polish',
            'Greek',
            'Vietnamese',
            'Thai',
            'Hindi',
            'Bengali'
            // Add more languages as needed
        ];

        foreach ($languages as $language) {
            Locale::create([
                'name' => $language,
            ]);
        } //
    }
}
