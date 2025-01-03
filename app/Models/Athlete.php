<?php
// app/Models/Athlete.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'coach_id'];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
