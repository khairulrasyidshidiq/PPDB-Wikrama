<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_bank',
        'pemilik',
        'nominal',
        'gambar',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
