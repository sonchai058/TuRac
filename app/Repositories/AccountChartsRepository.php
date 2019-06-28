<?php

namespace App\Repositories;

use App\Models\AccountCharts;
use App\Repositories\BaseRepository;

/**
 * Class AccountChartsRepository
 * @package App\Repositories
 * @version June 4, 2019, 7:33 pm +07
 */

class AccountChartsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return AccountCharts::class;
    }

    public function getTree()
    {
        $data = [];
        $charts = AccountCharts::All();
        $data['total'] = count($charts);

        foreach ($charts as $key => $value) {
            $data['rows'][$key]['id'] = $value->AccChartID;
            $data['rows'][$key]['budget'] = $value->NameTh;
            $data['rows'][$key]['name'] = $value->AccChartNumber;
            $data['rows'][$key]['iconCls'] = 'treenode-no-icon';

            $data['rows'][$key]['_parentId'] = ($value->AccChartParentrtID == 0) ? null : $value->AccChartParentrtID;

        }
        // $data['name'] = "iconCls";
        // $data['type'] = "string";
        // $data['defaultValue'] = "treenode-no-icon";

        return $data;
    }
}
