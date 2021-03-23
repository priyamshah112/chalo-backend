<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserCoin
 * @package App\Models
 * @version March 23, 2021, 11:23 am UTC
 *
 * @property integer $user_id
 * @property integer $coins
 */
class UserCoin extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'user_coins';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'coins'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'coins' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
