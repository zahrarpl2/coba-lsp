<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'name','user_id','address','phone','tanggal','court_id','starttime','endtime','duration','costume','shoes','total','grandtotal','paytotal'
    ];
    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
