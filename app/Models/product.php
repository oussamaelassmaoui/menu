<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Price',
        'slug',
        'photo',
        'Categorie_id',

    ];

    public function categorie(){ 
        return $this->belongsTo(Categorie::class , 'Categorie_id');
    }
}
