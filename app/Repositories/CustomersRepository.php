<?php

namespace App\Repositories;

use App\Models\Customers;
use App\Repositories\BaseRepository;

/**
 * Class CustomersRepository
 * @package App\Repositories
 * @version June 5, 2019, 10:14 pm +07
*/

class CustomersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TitleCode',
        'CodeId',
        'NameEn',
        'LastNameEn',
        'NameTh',
        'LastNameTh',
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
        return Customers::class;
    }
}
