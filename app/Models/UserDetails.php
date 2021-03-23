<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetails extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'user_details';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'profile_picture',
        'language',
        'gender',
        'dob',
        'profession','user_id',
        'facebook',
        'instagram',
        'linkedin',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'profile_picture' => 'string',
        'language' => 'string',
        'gender' => 'string',
        'dob' => 'string',
        'profession' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}