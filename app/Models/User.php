<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);
    //     self::created(function (User $user) {
    //         if (!$user->roles()->get()->contains(ROLE::DEFAULT_ROLE)) {
    //             $user->roles()->attach(ROLE::DEFAULT_ROLE);
    //         }
    //     });
    // }

    public function roles()
    {
        // A user can have multiple roles
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    //   /**
    //  * The "booted" method of the model.
    //  *
    //  * @return void
    //  */
    // protected static function booted()
    // {
    //     parent::boot();
    //     // attach default role to the user when created for registered users
    //     static::created(function ($user)
    //     {

    //         // if user uses register form they will not have any role and when seeding dev we don`t want to give it guest role
    //         if (!$user->roles()->get()->contains(ROLE::DEFAULT_ROLE)) {
    //             // if it does not then add the default role to the user
    //             if($user->roles()->get()->contains(ROLE::SUPER_ADMIN)){
    //                 $user->roles()->attach(ROLE::DEFAULT_ROLE);
    //             }
    //         }
    //     });
    // }
}
