<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Notifications\EnviarLinkRedefinirSenha;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dt_nasc', 'profissao', 'biografia', 'genero',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Tamanho mínimo da senha do usuário.
     *
     * @var int
     */
    public static $min_password_size = 8;

    /**
     * Notifica o usuário com link para redefinição de senha.
     *
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new EnviarLinkRedefinirSenha($token));
    }
}
