<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    use HasFactory;

    /**
     * The table associated with the HomeSetting model
     * @var string
     */
    protected $table = 'stack';
}
