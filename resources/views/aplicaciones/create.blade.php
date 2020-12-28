@extends('layouts.app')

@section('content')
<div class= "container">
    <div class="row justify-content-center">
       <div class= "col-md-8">
             <div class = "card">
                    <div class="card-header">
                         Crear productos
                    </div>
                     
                     <div class ="card-body">
                        <form action="{{route('store')}}" method = "POST">
                            @csrf
                            <div class="form-group row">
                                <label for="">Categoria</label>
                                <input type="text" class="form-control" name="category_application">
                            </div>

                            <div class="form-group row">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name_application">
                            </div>

                            <div class="form-group row">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" name="sale_price_application">
                            </div>

                            <button type="submit" class= "btn btn-primary"> Guardar</button>
                            <a href="{{route('index')}}" class="btn btn-danger">Cancelar</a>
                        
                        </form>
                       
                     </div>
                </div>
            </div>
        </div>
    </div>

</div>
 <!--vamos a listar las tareas que vayamos guardando en la BD-->
@endsection