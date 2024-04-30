<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_Module',
        'nom_Module',
    ];
    public function professeur()
    {
        return $this->belongsTo('App\Professeur');
    }
}






