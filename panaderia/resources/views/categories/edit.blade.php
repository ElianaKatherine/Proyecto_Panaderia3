@extends("layouts.base")
@section("content")
<div  class=" row p-3 mb-2 bg-secondary">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="" alt="">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-center">
        <h2>Sistema de Gestión Panaderia la
            <br>Macarena      </h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 text-center">
        <h4>Editar Categoria</h4>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-11 col-md-4 col-sm-6 col-xs-12 text-right">
        <a href="/categories" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
        <form action="/categories/{{$category->id}}" method="POST" >
         @csrf
         @method('PUT')
         <div class="form-group row">
                 <label for="inputName" class="col-sm-3 col text-center"><h5>Id Categoria:</h5></label>
                 <div class="col-sm-9">
                     <input type="number" class="form-control" id="id" name="id" value="{{$category->id}}" />
                </div>
             </div>
             <div class="form-group row">
                 <label for="inputName" class="col-sm-3 col text-center"><h5>Categoria:</h5></label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="categoria" name="categoria" value="{{$category->name}}" />
                </div>
             </div>
             <br>
             <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
             </div>
        </form>
    </div>
</div>
@endsection
