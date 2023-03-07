<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='employes';
    protected $guarded=[];

    public function position() {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
   
}
