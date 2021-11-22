<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'banjar', 'kegiatan', 'tanggal', 'waktu', 'tempat'];

    public function banjar()
    {
        return $this->belongsTo(Posting::class, 'id');
    }

}
