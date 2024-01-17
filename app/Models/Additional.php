<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;

    protected $primaryKey = 'additional_id';

    protected $fillable = [
        'name',
        'description',
    ];
}
