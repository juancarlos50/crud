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
            <div class="panel-primary">
                <br><br>
                <div class="panel-heading">
                    REGISTRO NUEVA COMPAÑIA
                </div>
                <div class="panel-body">
                    <form action="{{ url('companies') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">NOMBRE DE LA COMPAÑIA</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="">ESLOGAN DE LA COMPAÑIA</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                        <div class="form-group">
                            <label for="">NIT DE LA COMPAÑIA</label>
                            <input type="text" class="form-control" name="nit" id="nit">
                        </div>
                        <div class="form-group">
                            <label for="">TELEFONO DE LA COMPAÑIA</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">GUARDAR DATOS</button>
                        <a href="{{ url('companies')}}">VOLVER AL INICIO</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
