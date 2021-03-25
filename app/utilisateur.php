<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class utilisateur extends Model implements Authenticatable 
{
    use Notifiable;
    use  BasicAuthenticatable;
    protected $fillable = [ // $fillable permet de signifier les champs modifiables il est le contraire de $guarded
        'nom', 'prenom', 'email','password','password_confirmation',
       
    ];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

      /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return'';
    }

   
}
