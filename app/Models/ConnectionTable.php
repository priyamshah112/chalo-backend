<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ConnectionTable
 * @package App\Models
 * @version March 23, 2021, 11:19 am UTC
 *
 * @property integer $user_id
 * @property integer $user_id2
 * @property string $send_request
 * @property integer $request_accepted
 */
class ConnectionTable extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'connection_tables';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id1',
        'user_id2',
        'send_request',
        'request_accepted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'user_id2' => 'integer',
        'send_request' => 'string',
        'request_accepted' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}