<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['name', 'email'];

    public function athletes()
    {
        return $this->hasMany(Athlete::class);
    }
}