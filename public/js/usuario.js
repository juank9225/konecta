function eliminarbtn(dato){//funcion eliminar 

    var id = dato;

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'post',
        url: 'EliminarUsuarios',
        data: {'id':id},
        success: function(res){
          $("#table").load(location.reload());
        },
        error: function(error){
        },
		complete : function(){
          
        }
    });
}

$('#myModal').on('shown.bs.modal', function () {//query que dispara el modal
    $('#myInput').trigger('focus')
  })

//..funcion editar ...........
function Mostrarbtn(dato){
    var id = dato;
    var url = 'MostrarUsuarios'
    $.ajax({
        url : url,
        data:{id:id},
        type : 'GET',
        success: function(res){
        var nombreCombpleto; //para cargar el nombre completo
          for (var i = 0; i < res.length; i++) {

          toastr.error("No podras editar el campo de contraseña.");
          $('#name').val(res[i].name);
          $('#correo').val(res[i].email);
        }
        },
        error: function (request, status, error) {
  
        }
    });
  
  }
  
//...funcion actualizar..................
function actualizar(dato){//funcion eliminar 
   var id = dato;
   var name = $('#name').val();
   var correo = $('#correo').val();

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'post',
        url: 'ActualizarUsuarios',
        data: {'name':name, 'correo':correo, 'id':id},
        success: function(res){
          $("#table").load(location.reload());
        },
        error: function(error){
        },
		complete : function(){
          
        }
    });
}
