<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();
        foreach ($countries as $country) {
            Note::factory(2)->create([
                'country_id' => $country->id
            ]);
        }
    }
}
