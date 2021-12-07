<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upacara extends Model
{
    use HasFactory;
    protected $table = 'upacara';
    protected $primaryKey = 'id';
    protected $fillable = ['kegiatan', 'tanggal', 'waktu', 'tempat', 'ketentuan'];

    public function banjar()
    {
        return $this->belongsTo(Posting::class, 'upacara_id');
    }

}
