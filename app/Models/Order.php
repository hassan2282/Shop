<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'user_id',
        'card',
        'firstName',
        'lastName',
        'country',
        'state',
        'city',
        'postalCode',
        'phone',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
      'card' => 'array'
    ];
}
