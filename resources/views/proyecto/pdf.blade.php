<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>REPORTE PDF</title>

    <style>
        .header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 200px;
        }

    </style>
</head>

<body>
    <div class="header">
        <img src="{{ asset('src/logo.jpeg') }}" alt="Logo" />
        <h2>Gobierno de El Salvador</h2>
        <h3>Secretaria de Innovación</h3>
        <p>Fecha: {{ date('Y-m-d') }}</p>
    </div>
    <hr>
    <h3>Reporte de proyectos.</h3>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Nombre</th>
                <th>Fuente de fondos</th>
                <th>Monto planificado</th>
                <th>Monto patrocinado</th>
                <th>Monto fondos propios</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>{{ $proyecto->MontoPlanificado }}</td>
                    <td>{{ $proyecto->MontoPatrocinado }}</td>
                    <td>{{ $proyecto->MontoFondosPropios }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
