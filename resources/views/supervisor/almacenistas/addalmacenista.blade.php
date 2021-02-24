<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('header')
        <title>Home</title>
               
    </head>
    <body>
        @include('navigators.navigatorsup')
        <br>
        <br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Agregar Almacenista') }}</div>
                        <div class="card-body">
                            <form method="post" action="{{route('almacenistas.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="nombrse">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="emailHelp" placeholder="Nombre(s)">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="apellidomaterno">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" placeholder="Apellido Paterno">
                                </div>

                                <div class="form-group">
                                    <label for="apellidopaterno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" placeholder="Apellido Materno">
                                </div>

                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                                </div>                                
                                
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
                                </div>

                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="text" class="form-control" id="Password" name="password" placeholder="Password">
                                </div>

                                

                                
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
