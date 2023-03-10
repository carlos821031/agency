<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Relacion 1:M
    public function assistances(){
        return $this->hasMany('App\Models\Assistance');
    }

    /*Adminlte imagen de perfil en el menu si esta abilitada esa opcion*/
    public function adminlte_image(){
        return 'http://picsum.photos/300/300';//url a la imagen
       }

       /*Adminlte mostrar el rolo q pertenece el usuario en el menu superior derecho si esta abilitado*/
       public function adminlte_desc(){
        return 'Rol';//Rol q pertenece
       }

       /*Adminlte boton de perfil en el menu superior derecho si esta abilitada la opcion si esta abilitada esa opcion*/
    public function adminlte_profile_url(){
        return 'user/profile';//url al perfil
       }
}
