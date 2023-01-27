<?php
namespace App\Exports;

use App\Models\Empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExcelEmpleados implements FromView
{
    public function view(): View
    {
        return view('excel.empleado_ex', [
            'empleado' => Empleado::all()
        ]);
    }
}