<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nip', 'mapel', 'id_kelas'];

    // N Guru mengajar 1 Kelas sebagai wali kelas (N : 1)
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
