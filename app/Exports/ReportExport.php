<?php

namespace App\Exports;

use App\Models\Release;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
    public function collection()
    {
        //return Report::all();
       /*  $query_data = Release::select(
            'id',
            'title',
            'media_type',
            'main_price',
            'created_at')->get();
           return $query_data; */
           $startDate = request()->input('startDate') ;
        $endDate   = request()->input('endDate') ;
        return Release::select(
            'id',
            'title',
            'media_type',
            'main_price',
            'created_at')->whereBetween('created_at', [ $startDate, $endDate ] )->get();
    }
    public function headings(): array{
        return[
            'id',
            'Title',
            'mediaType',
            'Price',
            'Date'
        ];
    }
}
