@extends('layouts.app')

@section('content')
<div class= "container">
    <div class="row justify-content-center">
        <div class= "col-md-8">
         <div class = "card">
              <div class="card-header">
                  Listado de productos
                  <a href = "{{ route('create') }}" class = "btn btn-success btn-sm float-right">Nueva aplicacion</a>
            </div>
                     
                     <div class ="card-body">
                       ...
                     </div>
                </div>
            </div>
        </div>
    </div>

</div>
 <!--vamos a listar las tareas que vayamos guardando en la BD-->
@endsection