<?php

// database/seeders/CoachSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coach;

class CoachSeeder extends Seeder
{
    public function run()
    {
        // Create 10 coaches
        Coach::factory()->count(10)->create();
    }
}
