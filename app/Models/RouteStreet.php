<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteStreet extends Model
{
    use HasFactory;

    protected $table = 'route_street';
    protected $fillable = ['route_id', 'street_id', 'type'];
    
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }
}
