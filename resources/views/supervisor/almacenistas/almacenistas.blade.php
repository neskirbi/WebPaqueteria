<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenistas</title>
    @include('header')
</head>
<body>
@include('navigators.navigatorsup')
<br><br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Almacenistas') }} <a class="float-right btn btn-primary" href="{{ route('almacenistas.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Almacenista</a></div>

                <div class="card-body">
                    @include('fragments.notifications')
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Password</th>
                                <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($almacenistas as $almacenista)
                                <tr>
                                <td>{!! $almacenista->nombres !!}</td>
                                <td>{!! $almacenista->apellidopaterno !!}</td>
                                <td>{!! $almacenista->apellidomaterno !!}</td>
                                <td>{!! $almacenista->telefono !!}</td>
                                <td>{!! $almacenista->user !!}</td>
                                <td>{!! $almacenista->password !!}</td>
                                <td>
                                    <a class="d-inline p-2 btn btn-info" href="{{ route('almacenistas.edit',$almacenista->idalmacenista) }}">Editar</a>
                                    <form action="{{route('almacenistas.destroy',$almacenista->idalmacenista)}}" method="POST"  class="d-inline p-2">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button  id="{!!$almacenista->idalmacenista!!}"  class="borrar btn btn-danger" data-nombre="{!!$almacenista->nombres!!} {!!$almacenista->apellidopaterno!!} {!!$almacenista->apellidomaterno!!}">Borrar</button>
                                        
                                    </form>
                                                
                                </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{ $almacenistas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
<script>
$( ".borrar" ).click(function( event ) {
    if(confirm('Seguro que quiere borrar: '+$(this).data('nombre'))){}else{
        event.preventDefault();
    }
  
  
});
</script>
</html>