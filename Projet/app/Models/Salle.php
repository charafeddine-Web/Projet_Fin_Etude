<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_Salle',
        'type_Salle',
        
    ];
    public function constituer()
    {
        return $this->hasMany(Constituer::class, 'id_Salle');
    }
}
