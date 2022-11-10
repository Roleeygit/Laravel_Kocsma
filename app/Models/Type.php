<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kocsma;


class Type extends Model
{
    use HasFactory;

    protected $fillable =
    [
        "nev"
    ];
    public $timestamps = false;

    public function kocsma()
    {
        return $this->hasMany(Kocsma::class);
    }
}
