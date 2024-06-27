<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function routes()
    {
        return $this->belongsToMany(Route::class, 'route_street')->withPivot('type');
    }
}
