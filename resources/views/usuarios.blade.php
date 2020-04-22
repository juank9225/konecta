@extends('layouts.app')

@section('content')

<table class="table" id='table'>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">controles</th>

    </tr>
  </thead>
  <tbody>
 @foreach ( $users as $user )
     
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
     <td>      
      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#staticBackdrop" onclick="Mostrarbtn('{{$user->id}}')" name="btn_editar" title="Editar"><i class="fas fa-edit"></i></button>
      <button class="btn btn-danger btn-sm" onclick="eliminarbtn('{{$user->id}}')" name="btn_eliminar" title="Eliminar"><i class="fas fa-trash"></i></button>
      <td>
    </tr>
 @endforeach
  </tbody>
</table>
@endsection

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="FormMascotaAdmision">
                {{ csrf_field() }}
                <div class="row">

                  <div class="col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name">
                      </div>
                  </div>


                  <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" class="form-control form-control-sm" name="correo" id="correo">
                      </div>
                  </div>
                </div>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizar('{{$user->id}}')" name="btn_actualizar" title="Actualizar">Actualizar</button>
      </div>
    </div>
  </div>
</div>

@section('scripts')
  <script src="{{url('/js/usuario.js?v=2')}}"></script>
@endsection