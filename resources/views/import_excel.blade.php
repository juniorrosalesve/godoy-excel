@extends('template.base')
@section('titulo', 'Importando excel')

@section('cuerpo')
    <div class="center">
        <div>
            <h1 style="float: left;">Importar excel</h1>
            <form action="{{ route('UploadFileExcel') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <input type="file" name="import_file_excel" required /> <br /><br />
                <center>
                    <button type="submit">Subir</button>
                </center>
            </form>
        </div>
    </div>
@endsection