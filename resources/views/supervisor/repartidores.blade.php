<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repartidores</title>
    @include('header')
</head>
<body>
@include('navigators.navigatorsup')
<br><br><br><br>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Repartidores') }} <a class="float-right btn btn-primary" href="{{ route('repartidores.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Repartidores</a></div>

                <div class="card-body">
                @include('fragments.notifications')
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
                        @foreach($repartidores as $repartidor)
                            <tr>
                            <td>{!! $repartidor->nombres !!}</td>
                            <td>{!! $repartidor->apellidopaterno !!}</td>
                            <td>{!! $repartidor->apellidomaterno !!}</td>
                            <td>{!! $repartidor->telefono !!}</td>
                            <td>{!! $repartidor->user !!}</td>
                            <td>{!! $repartidor->password !!}</td>
                            <td>
                                <a class="d-inline p-2 btn btn-info" href="{{ route('repartidores.show',$repartidor->idrepartidor) }}">Ver</a>
                                <form action="{{route('repartidores.destroy',$repartidor->idrepartidor)}}" method="POST"  class="d-inline p-2">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button  id="borrar"  class="btn btn-danger" data-nombre="{!!$repartidor->nombres!!} {!!$repartidor->apellidopaterno!!} {!!$repartidor->apellidomaterno!!}">Borrar</button>
                                    
                                </form>
                                            
                            </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{ $repartidores->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
<script>
$( "#borrar" ).click(function( event ) {
    if(confirm('Seguro que quiere borrar: '+$(this).data('nombre'))){}else{
        event.preventDefault();
    }
  
  
});
</script>
</html>