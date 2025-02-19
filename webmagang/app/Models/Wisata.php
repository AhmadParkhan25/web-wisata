<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisatas';
    protected $fillable = [
        'image',
        'judul',
        'descrip',
        'istimewa',
        'tips',
        'harga',
        'lokasi',
    ];

    public function recomendation(): HasOne
    {
        return $this->hasOne(Recomendation::class);
    }
}
