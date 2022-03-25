<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}" />
    <style>
        .lol {
            padding:20px;
        }
        .center {
            position: absolute;
            top:100px;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        input, textarea, select {
            display: block;
            width: 300px;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom:5px;
        }
    </style>
</head>
<body>
    @yield('cuerpo')

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ],
                ordering:false
            });
        });
    </script>
</body>
</html>