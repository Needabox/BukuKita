<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $guarded;

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
