<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name', 'prise','weight','voltage',
        'model','power','color','images',
        'items','category','body','visit',
    ];

    protected $casts = [
        'items' => 'array',
        'images' => 'array',
    ];

    public function limiter($string,$limit)
    {
        $words = explode(" ", $string);
        $output = implode(" ", array_splice($words,0,$limit));
        return $output;
    }
    public function search($key, $array)
    {
        $output = array($key, $array);
        return $output;
    }

}
