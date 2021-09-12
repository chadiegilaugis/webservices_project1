<?php

namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepository;

/**
 * Class StudentsRepository
 * @package App\Repositories
<<<<<<< HEAD
 * @version September 12, 2021, 8:53 pm UTC
=======
 * @version September 11, 2021, 8:50 pm UTC
>>>>>>> 810bf2e8175d9fcb844ff96a3312b410414f8540
*/

class StudentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Students::class;
    }
}
