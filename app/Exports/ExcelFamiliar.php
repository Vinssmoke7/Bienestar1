<?php
namespace App\Exports;

use App\Models\Empleado;
use App\Models\Carga_familiar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExcelFamiliar implements FromView
{
    public function view(): View
    {
        return view('excel.familiar_ex', [
            'f' => Carga_familiar::
            leftJoin('empleado', 'carga_familiar.id_emp', '=', 'empleado.id_empleado')
            ->orderby('id_emp', 'ASC')
            ->get()
        ]);
    }
}