<?php
namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, SoftDeletes;
    use Authenticatable, CanResetPassword;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
}
