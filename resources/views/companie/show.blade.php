<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <table class="table table-striped-border">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS COMPAÑIA</strong></td>
                    <tr>
                    </tr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{ $companie->name }}</td>
                </tr>
                <tr>
                    <td><strong>ESLOGAN</strong></td>
                    <td>{{ $companie->description }}</td>
                </tr>
                <tr>
                    <td><strong>NIT</strong></td>
                    <td>{{ $companie->nit }}</td>
                </tr>
                <tr>
                    <td><strong>TELEFONO</strong></td>
                    <td>{{ $companie->phone }}</td>
                </tr>
            </table>
            <a href="{{ url('companies') }}">VOLVER AL INICIO</a>
        </div>
    </div>
</div>
</body>
</html>
