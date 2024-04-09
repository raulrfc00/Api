<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'ID'; //por defecto coge la columna que se llame id

    // public $incrementing = true; por defecto es true

    // protected $keyType = 'INT'; pordefecto se considera INT

    public $timestamps = false;

    /**
     * Get all of the collections for the Rider
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     
}
