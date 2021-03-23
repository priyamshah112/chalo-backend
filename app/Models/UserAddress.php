<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserAddress
 * @package App\Models
 * @version March 23, 2021, 11:25 am UTC
 *
 * @property string $city
 * @property string $address_line
 * @property string $pincode
 * @property string $state
 * @property string $country
 */
class UserAddress extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'user_addresses';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'city',
        'address_line',
        'pincode',
        'state',
        'country', 'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city' => 'string',
        'address_line' => 'string',
        'pincode' => 'string',
        'state' => 'string',
        'country' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}