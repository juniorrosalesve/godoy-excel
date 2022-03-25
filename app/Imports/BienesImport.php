<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use App\Models\InvestigacionBienes;

class BienesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $mesesToDate    =   [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ];
        for($i = 1; $i < sizeof($rows); $i++)
        {
            $data   =   $rows[$i];
            if($data[5] == 'POSITIVO')
                $data[5]    =   true;
            else
                $data[5]    =   false;
            $mes    =   '01';
            for($x = 0; $x < sizeof($mesesToDate); $x++) {
                if($data[0] == strtoupper($mesesToDate[$x])) {
                    if(($x+1) < 10)
                        $mes    =   '0'.($x+1);
                    else
                        $mes    =   ($x+1);
                    break;
                }
            }
            $fechaEnvio     =   ($data[2] != null ? '2022-'.$mes.'-'.$data[2] : null);
            InvestigacionBienes::create([
                'fecha' => '2022-'.$mes.'-'.$data[1],
                'fecha_envio' => $fechaEnvio,
                'cedula' => $data[3],
                'asesor' => $data[4],
                'tipificacion' => $data[5],
                'direccion' => $data[6],
                'matricula' => $data[7],
                'referencia_castral' => $data[8],
                'departamento' => $data[9],
                'ciudad' => $data[10]
            ]);
        }
    }
}
