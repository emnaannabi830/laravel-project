<?php

// database/seeders/AthleteSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Athlete;

class AthleteSeeder extends Seeder
{
    public function run()
    {
        Athlete::factory()->count(50)->create();
    }
}
