@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
           Modificar producto
         </div>
         <div class="card-body" style="padding:30px">

            <form action="" method="post">
 {{method_field('PUT')}}
               @csrf

            <div class="form-group">
               <label for="title">Nombre:</label>
               <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{$producto->nombre}}">
            </div>

            <div class="form-group">
               <label for="precio">Precio:</label>
           <input class="form-control" type="number" name="precio" id="precio" placeholder="Precio" value="{{$producto->precio}}">
            </div>

            <div class="form-group">
               <label for="categoria">Categoria:</label>
               <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria" value="{{$producto->categoria}}">
            </div>


               <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input class="form-control" type="text" name="imagen" id="imagen" placeholder="Imagen" value="{{$producto->imagen}}">
               </div>

            <div class="form-group">
               <label for="descripcion">Descripción</label>
               <textarea name="descripcion" id="descripcion" dirname="descripcion" class="form-control" rows="3">{{$producto->descripcion}}</textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                  Modificar producto
               </button>
            </div>

            </form>

         </div>
      </div>
   </div>
</div>
@stop