<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $table='banjar';
    protected $fillable=['id', 'name','gambar','keterangan'];

    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'banjar_id');
    }

    public function upacara()
    {
        return $this->hasMany(Upacara::class, 'banjar_id');
    }
}
