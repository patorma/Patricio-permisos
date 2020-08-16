<?php

namespace App\PatricioPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    //en: from here
    // esto es porque enviaremos datos en forma masiva
    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    // que cuando se seleccione un rol y se llame a esta funcion
    // esto traera a todos los usuarios que esten relacionados con este rol
    public function users(){
        //belongsToMany() relacion muchos a muchos 
        //se indica con withTimesTamps() que en esta tabla intermedia
        //actualizxamos fechas
        return $this->belongsToMany('App\User')->withTimesTamps();
    }
}
