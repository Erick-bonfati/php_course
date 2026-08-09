<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Episode extends Model
{
    use HasFactory;

    protected $casts = ['watched' => 'boolean'];

    protected $fillable = ['number'];
    
    public $timestamps = false;

    public function seasons()
    {
        return $this->belongsTo(Season::class);
    }

    public function scopeWatched(Builder $query)
    {
        $query->where('watched', true);
    }
}
