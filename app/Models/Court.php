<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;
    protected $table = 'courts';
    protected $fillable = [
        'name','price', 'court_type_id'
    ];

    public function court_type()
    {
        return $this->belongsTo(CourtType::class, 'court_type_id');
    }
}
