<?php

namespace App\Exports;

use App\Models\AccountChartTuAcc;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AccChartTuAccExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return AccountChartTuAcc::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Email',
            'Created At',
            'Updated At',
        ];
    }
}
