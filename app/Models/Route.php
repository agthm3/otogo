<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'route_code',
        'route_color',
        'description',
    ];

    public function streets()
    {
        return $this->belongsToMany(Street::class, 'route_street')->withPivot('type');
    }
}
