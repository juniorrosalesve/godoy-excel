@extends('template.base')
@section('titulo', 'Listado')

@section('cuerpo')
    <div class="lol">
        <h2 style="float: left;">Investigación de Bienes</h2>
        <div style="float: right;margin-top:10px;">
            <button type="button" onclick="location.href='{{ route('ImportExcel') }}'">Importar excel</button>
            <button type="button" onclick="location.href='{{ route('Register') }}'">Nuevo registro</button>
        </div>
        <table id="table" class="display nowrap dataTable dtr-inline">
            <thead>
                <tr>
                    <td>Fecha</td>
                    <td>Mes</td>
                    <td>Fecha de llegada</td>
                    <td>Fecha de envío</td>
                    <td>Cédula</td>
                    <td>Asesor</td>
                    <td>Tipificación</td>
                    <td>Dirección</td>
                    <td>Número de matricula</td>
                    <td>Referencia catastral</td>
                    <td>Departamento</td>
                    <td>Ciudad</td>
                </tr>
            </thead>
            <tbody>
                @if (!empty($rows))
                    @foreach ($rows as $item)
                        @php
                            $nameMes    =   explode('-', $item->fecha);
                            $nameMes    =   $meses[(int)$nameMes[1]];
                        @endphp
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($item->fecha)) }}</td>
                            <td>{{ $nameMes }}</td>
                            <td>{{ explode('-', $item->fecha)[2] }}</td>
                            <td>{{ $item->fecha_envio }}</td>
                            <td>{{ $item->cedula }}</td>
                            <td>{{ $item->asesor }}</td>
                            <td>
                                @if ($item->tipificacion)
                                    POSITIVO
                                @else
                                    NEGATIVO
                                @endif
                            </td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->matricula }}</td>
                            <td>{{ $item->referencia_castral }}</td>
                            <td>{{ $item->departamento }}</td>
                            <td>{{ $item->ciudad }}</td>
                        </tr>
                    @endforeach 
                @endif
            </tbody>
        </table>
    </div>
@endsection