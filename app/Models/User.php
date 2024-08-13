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
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $user, $image, $imageName, $directory, $imageUrl;

    public static function imageUpload($request){
        self::$image = $request->file('image');
        self::$imageName =  rand(1,999).'.'.self::$image->getClientOriginalName();
        self::$directory = 'uploads/user-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newUser($request){
        self::$user = new User();
        self::$user->name       = $request->name;
        self::$user->email      = $request->email;
        self::$user->mobile     = $request->mobile;
        self::$user->password   = bcrypt($request->password);
        self::$user->role       = $request->role;
        if ($request->file('image'))
        {
            self::$user->profile_photo_path = self::imageUpload($request);
        }
        self::$user->save();
    }

    public static function updateUser($request, $id) {
        self::$user                =  User::find($id);
        if($request->file('image')){
            if (file_exists(self::$user->profile_photo_path)){
                unlink(self::$user->profile_photo_path);
            }
            self::$user->profile_photo_path = self::imageUpload($request);
        }
        self::$user->name       = $request->name;
        self::$user->email      = $request->email;
        self::$user->mobile     = $request->mobile;
        if ($request->password)
        {
            self::$user->password   = bcrypt($request->password);
        }
        self::$user->role       = $request->role;
        self::$user->save();
    }

    public static function deleteUser($id){
        self::$user =  User::find($id);

        if (file_exists(self::$user->profile_photo_path)){
            unlink( self::$user->profile_photo_path);
        }
        self::$user->delete();
    }
}
