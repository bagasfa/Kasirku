<?php

namespace App\Exports;

use App\barang;
use Maatwebsite\Excel\Concerns\FromCollection;

class MenuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return barang::all();
    }
}
