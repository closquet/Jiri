<?php

namespace Jiri;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


/**
 * Jiri\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
