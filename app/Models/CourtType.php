<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtType extends Model
{
    use HasFactory;
    protected $table = 'court_types';
    protected $fillable = [
        'name',
    ];

    public function court()
    {
        return $this->hasMany(Court::class);
    }
}
