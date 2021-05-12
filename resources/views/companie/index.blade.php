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
        <div class="col-md-12"></div>
        <br>
        <a href="{{url('companies/create')}}" class="btn btn-primary">ADICIONAR COMPAÑIA</a>
        <br><br>
          <table class="table table-striped table-bordered">
              <thead>
               <tr>
                   <th>ID COMPAÑIA</th>
                   <th>NOMBRE DE LA COMPAÑIA</th>
                   <th>ESLOGAN DE LA COMPAÑIA</th>
                   <th>NIT DE LA COMPAÑIA</th>
                   <th>TELEFONO DE LA COMPAÑIA</th>
                   <th>OPCIONES</th>
               </tr>
              </thead>
              <tbody>
              @foreach($companies as $companie)
              <tr>
                    <td> {{ $companie->id }}</td>
                    <td> {{ $companie->name }}</td>
                    <td> {{ $companie->description }}</td>
                    <td> {{ $companie->nit }}</td>
                    <td> {{ $companie->phone }}</td>
                    <td>
                        <a href="{{ url('companies', $companie->id) }}" class="btn btn-info btn-sm">DETALLES</a>
                        <a href="" class="btn btn-warning btn-sm">EDITAR</a>
                        <a href="" class="btn btn-danger btn-sm">ELIMINAR</a>
                    </td>
              </tr>
              @endforeach

              </tbody>
          </table>
    </div>
</div>

</body>
</html>
