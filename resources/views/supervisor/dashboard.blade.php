<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('header')
        <title>Dashboard</title>
    <style>
    
    </style>
    </head>
    <body> 
    <center>   
        @include('navigators.navigatorsup')
    </center>
    <div class="container">
        <div class="row col-lg-12">
        <div class="col-lg-4">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">Informacion General</h5>
                        <p class="card-text">
                            Personal
                            <ul>
                                <li>Cuentas con 4 repartidores</li>
                                <li>Cuentas con 3 almacenistas</li>
                            </ul>
                            Paquetes
                            <ul>
                                <li>Cuentas con 4 paquetes entregados</li>
                                <li>Cuentas con 3 pendientes</li>
                                <li>Cuentas con 5 en almacen</li>
                                <li>Cuentas con 5 devueltos</li>
                            </ul>
                        </p>
                        <a href="#!" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="https://www.gslprevencion.com/wp-content/uploads/2020/03/bigstock-Deliveryman-in-uniform-carton-334257817-scaled.jpg"
                        class="card-img-top"
                        alt="..."/>
                    <div class="card-body">
                        <h5 class="card-title">Repartidores</h5>
                        <p class="card-text">
                        Gente encargada de llevar los paquetes a su destino final.
                        </p>
                        <a href="{{route('repartidores.index')}}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/almacenista-chaleco-protector-escaner-escanea-codigo-barras-paquete-parado-almacen-empresa-transporte-carga_79405-10191.jpg?size=626&ext=jpg"
                        class="card-img-top"
                        alt="..."/>
                    <div class="card-body">
                        <h5 class="card-title">Almacenistas</h5>
                        <p class="card-text">
                        Gente encargada de procesar los paquetes para que los repartidores unicamente los recogan y se dirigan a sus rutas.
                        </p>
                        <a href="{{route('almacenistas.index')}}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
