<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banjar extends Model
{
    use HasFactory;
    protected $table = 'banjar';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'gambar', 'deskripsi'];

    public function agenda()
    {
        return $this->hasMany(Posting::class, 'banjar_id');
    }

    public function upacara()
    {
        return $this->hasMany(Posting::class, 'banjar_id');
    }

    public function anggota()
    {
        return $this->hasMany(Posting::class, 'banjar_id');
    }
}
