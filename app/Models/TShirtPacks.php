<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TShirtPacks extends Model
{
    use HasFactory;

    protected $table = 't_shirt_packs';

    protected $fillable = [
        'pack_size'
    ];
}
