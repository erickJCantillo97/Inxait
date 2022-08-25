<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function ciudades(){
        return $this->hasMany(\App\Models\Ciudad::class, 'ciudad_id');
    }
}