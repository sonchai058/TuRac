<?php

namespace App\Repositories;

use App\Models\Researchers;
use App\Repositories\BaseRepository;

/**
 * Class ResearchersRepository
 * @package App\Repositories
 * @version June 5, 2019, 10:15 pm +07
*/

class ResearchersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TitleCode',
        'CodeId',
        'Name',
        'Lastname',
        'NameEn',
        'LastNameEn',
        'SexCode',
        'Address',
        'PostCodeID',
        'UserType',
        'TaxID',
        'Phone1',
        'Phone2',
        'AccountName',
        'OfficeType',
        'OfficeCode',
        'officeName',
        'AccChartID',
        'DateTimeAdd',
        'UserAdd',
        'DateTimeUpdate',
        'UserUpdate',
        'tsDateTimeUpdate',
        'tsUserUpdate',
        'OrgID',
        'GrpID',
        'Allow'
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
        return Researchers::class;
    }
}
