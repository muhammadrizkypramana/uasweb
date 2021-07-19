<?php

namespace App\Exports;

use App\Models\Makul;
use Maatwebsite\Excel\Concerns\FromCollection;

class MakulExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Makul::all();
    }
}
