<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Researchers
 * @package App\Models
 * @version June 5, 2019, 10:15 pm +07
 *
 * @property string TitleCode
 * @property string CodeId
 * @property string Name
 * @property string Lastname
 * @property string NameEn
 * @property string LastNameEn
 * @property string SexCode
 * @property string Address
 * @property string PostCodeID
 * @property string UserType
 * @property string TaxID
 * @property string Phone1
 * @property string Phone2
 * @property string AccountName
 * @property string OfficeType
 * @property string OfficeCode
 * @property string officeName
 * @property integer AccChartID
 * @property string|\Carbon\Carbon DateTimeAdd
 * @property integer UserAdd
 * @property string|\Carbon\Carbon DateTimeUpdate
 * @property integer UserUpdate
 * @property string|\Carbon\Carbon tsDateTimeUpdate
 * @property integer tsUserUpdate
 * @property integer OrgID
 * @property integer GrpID
 * @property string Allow
 */
class Researchers extends Model
{

    public $table = 'researcher';

    protected $primaryKey = 'UserID';

    const CREATED_AT = 'DateTimeAdd';
    const UPDATED_AT = 'DateTimeUpdate';

    public $fillable = [
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
        'Allow',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'UserID' => 'integer',
        'TitleCode' => 'string',
        'CodeId' => 'string',
        'Name' => 'string',
        'Lastname' => 'string',
        'NameEn' => 'string',
        'LastNameEn' => 'string',
        'SexCode' => 'string',
        'Address' => 'string',
        'PostCodeID' => 'string',
        'UserType' => 'string',
        'TaxID' => 'string',
        'Phone1' => 'string',
        'Phone2' => 'string',
        'AccountName' => 'string',
        'OfficeType' => 'string',
        'OfficeCode' => 'string',
        'officeName' => 'string',
        'AccChartID' => 'integer',
        'DateTimeAdd' => 'datetime',
        'UserAdd' => 'integer',
        'DateTimeUpdate' => 'datetime',
        'UserUpdate' => 'integer',
        'tsDateTimeUpdate' => 'datetime',
        'tsUserUpdate' => 'integer',
        'OrgID' => 'integer',
        'GrpID' => 'integer',
        'Allow' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'UserID' => 'required',
        'Name' => 'required',
        'PostCodeID' => 'required',
        'UserType' => 'required',
        'TaxID' => 'required',
        'AccChartID' => 'required',
        'DateTimeAdd' => 'required',
        'UserAdd' => 'required',
        'DateTimeUpdate' => 'required',
        'UserUpdate' => 'required',
        'tsDateTimeUpdate' => 'required',
        'tsUserUpdate' => 'required',
    ];

}
