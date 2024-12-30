<?php
class Athlete extends Model
{
    protected $fillable = ['name', 'age', 'coach_id'];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}