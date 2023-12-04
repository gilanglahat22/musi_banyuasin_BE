<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaslonPutra extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $fillable = [
        'nomor_urut',
        'name', 
        'count_vote', 
        'path', 
        'persentase',
    ];
}