<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public const CATEGORIES = [
      1 => 'Для котів',
      2 => 'Для собак',
      3 => 'Для гризунів',
      4 => 'Для птахів'
    ];
}
