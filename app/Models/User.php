<?php

namespace App\Models;

use DateTime;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
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
        'name', 'email', 'password', 'profession', 'biography', 'gender', 'dt_birth', 'locked',
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
     * Envia o e-mail para troca de senha.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Converte para maiúsculas o primeiro caractere de cada palavra do nome do usuário.
     *
     * @param $name
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = mb_convert_case($name, MB_CASE_TITLE);
    }

    /**
     * Insere o e-mail considerando somente caixa baixa.
     *
     * @param $email
     */
    public function setEmailAttribute($email)
    {
        $this->attributes['email'] = strtolower($email);
    }

    /**
     * Transforma a data de nascimento de entrada.
     *
     * @param $date
     */
    public function setDtBirthAttribute($date)
    {
        if ($date && strpos($date, '/')) {
            $this->attributes['dt_birth'] = DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        }
    }

    /**
     * Transforma a data de nascimento de saída.
     *
     * @param $date
     * @return string
     */
    public function getDtBirthAttribute($date)
    {
        if ($date) {
            return DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');
        }
    }

    /**
     * Transforma a saída de data de criação.
     *
     * @param $dateTime
     * @return string
     */
    public function getCreatedAtAttribute($dateTime)
    {
        if ($dateTime) {
            return DateTime::createFromFormat('Y-m-d H:i:s', $dateTime)->format('d/m/Y à\s H:i:s');
        }
    }
}
