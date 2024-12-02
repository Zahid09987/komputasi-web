<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        Feature::create(['title' => 'Feature One', 'description' => 'Description of feature one.']);
        Feature::create(['title' => 'Feature Two', 'description' => 'Description of feature two.']);
        Feature::create(['title' => 'Feature Three', 'description' => 'Description of feature three.']);
    }
}