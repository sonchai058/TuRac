<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AccountCharts
 * @package App\Models
 * @version June 4, 2019, 7:33 pm +07
 *
 * @property integer AccChartParentrtID
 * @property integer AccGroupID
 * @property string AccChartNumber
 * @property string NameTh
 * @property string NameEn
 * @property string Detail
 * @property string Type
 * @property string ChartType
 * @property string Format
 * @property string|\Carbon\Carbon DateTimeAdd
 * @property integer UserAdd
 * @property string|\Carbon\Carbon DateTimeUpdate
 * @property integer UserUpdate
 * @property string Allow
 */
class AccountCharts extends Model
{

    public $table = 'account_chart';

    protected $primaryKey = 'AccChartID';

    const CREATED_AT = 'DateTimeAdd';
    const UPDATED_AT = 'DateTimeUpdate';

    public $fillable = [
        'AccChartParentrtID',
        'AccGroupID',
        'AccChartNumber',
        'NameTh',
        'NameEn',
        'Detail',
        'Type',
        'ChartType',
        'Format',
        'DateTimeAdd',
        'UserAdd',
        'DateTimeUpdate',
        'UserUpdate',
        'Allow',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'AccChartID' => 'integer',
        'AccChartParentrtID' => 'integer',
        'AccGroupID' => 'integer',
        'AccChartNumber' => 'string',
        'NameTh' => 'string',
        'NameEn' => 'string',
        'Detail' => 'string',
        'Type' => 'string',
        'ChartType' => 'string',
        'Format' => 'string',
        'DateTimeAdd' => 'datetime',
        'UserAdd' => 'integer',
        'DateTimeUpdate' => 'datetime',
        'UserUpdate' => 'integer',
        'Allow' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'AccGroupID' => 'required',
        'AccChartNumber' => 'required',
        'DateTimeAdd' => 'required',
        'UserAdd' => 'required',
        'DateTimeUpdate' => 'required',
        'UserUpdate' => 'required',
    ];

}
