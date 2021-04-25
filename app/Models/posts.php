<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class posts
 * @package App\Models
 * @version April 24, 2021, 5:56 pm UTC
 *
 * @property string $name
 */
class posts extends Model
{


    public $table = 'posts';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
