<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'state' => \App\Enums\AssistanceState::class,
    ];

    /*
    public function getTableColumns() {//funcion para obtener las columnas de la tabla utilizada en el exportar para los titulos de sus columnas. Aun no la utilizo
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    */  
    
    //Relacion Inversa 1:M
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
