@extends('template.base')
@section('titulo', 'Importando excel')

@section('cuerpo')
    <div class="center" style="top:380px;">
        <h1>Nuevo registro</h1>
        <form action="{{ route('RegisterGo') }}" method="POST" style="margin-bottom: 30px;">
            @csrf
            <label>Fecha <font style="color:red;">*</font></label>
            <input type="date" name="fecha" required>
            
            <label>Fecha de envío</label>
            <input type="date" name="fecha_envio" required>

            <label>Cédula <font style="color:red;">*</font></label>
            <input type="text" name="cedula" required>
            
            <label>Asesor <font style="color:red;">*</font></label>
            <input type="text" name="asesor" required>

            <label>Tipificación</label>
            <select name="referencia_castral">
                <option value="true">POSITIVO</option>
                <option value="false">NEGATIVO</option>
            </select>
            
            <label>Matricula</label>
            <input type="text" name="matricula" required>

            <label>Referencia castral</label>
            <input type="text" name="referencia_castral" required>

            <label>Departamento</label>
            <input type="text" name="departamento" required>

            <label>Ciudad</label>
            <input type="text" name="ciudad" required>

            <label>Dirección</label>
            <textarea name="direccion"  rows="6"></textarea>

            <center style="margin-top: 10px;">
                <button type="submit">Registrar</button>
            </center>
        </form>
    </div>
@endsection