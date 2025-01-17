<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'Nom_Classe',
        'Annee_Formation',
        'Mode_Formation',
        'optimisé'
    ];
   public function filiere()
   {
       return $this->belongsTo(Filiere::class, 'code_filiere');
   }

   public function emploiGroupes()
   {
       return $this->hasMany(EmploiClasse::class, 'ID');
   }
  
}
