<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Students
 * @package App\Models
<<<<<<< HEAD
 * @version September 12, 2021, 8:53 pm UTC
=======
 * @version September 11, 2021, 8:50 pm UTC
>>>>>>> 810bf2e8175d9fcb844ff96a3312b410414f8540
 *
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Lastname
 * @property string $Birthday
 * @property string $Gender
 * @property string $Address
 * @property string $Citizenship
 * @property string $Relagion
 */
class Students extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'students';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthday',
        'Gender',
        'Address',
        'Citizenship',
        'Relagion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Lastname' => 'string',
        'Birthday' => 'date',
        'Gender' => 'string',
        'Address' => 'string',
        'Citizenship' => 'string',
        'Relagion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'nullable|string|max:25',
        'Middlename' => 'nullable|string|max:25',
        'Lastname' => 'nullable|string|max:25',
        'Birthday' => 'nullable',
        'Gender' => 'nullable|string|max:5',
        'Address' => 'nullable|string|max:50',
        'Citizenship' => 'nullable|string|max:50',
        'Relagion' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}