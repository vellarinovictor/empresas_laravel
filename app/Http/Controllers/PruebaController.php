<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Empresa;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //
    public function buscaempleado($pempresa, $pempleado) {
        $empresa = Empresa::find($pempresa);
        return ($empresa->empleados[$pempleado]->nombre);
    }
    public function verempleado($pempleado): string
    {
        $empleado = Empleado::find($pempleado);
        return $empleado->nombre . " (" . $empleado->empresa->nombre . ")";
    }
    public function verempresas(): string
    {
        $empresas = Empresa::all();
        $respuesta = "";
        foreach ($empresas as $empresa) {
            $respuesta .= "$empresa->nombre<br>";
        }
        return $respuesta;
    }
    public function verempleados(): string
    {
        $empleados = Empleado::all();
        $respuesta = "";
        foreach ($empleados as $empleado) {
            $respuesta .= "$empleado->nombre<br>";
        }
        return $respuesta;
    }


}
