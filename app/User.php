<?php

namespace Jiri;

use Illuminate\Database\Eloquent\SoftDeletes;
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
 * @property string|null $avatar
 * @property string|null $company
 * @property int $is_admin
 * @property int $available
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Jiri\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Jiri\User withoutTrashed()
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'name', 'email', 'password', 'is_admin', 'company', 'available', 'avatar',
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
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];
}
