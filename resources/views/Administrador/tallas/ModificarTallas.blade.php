@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="container">

    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Editar Talla</strong></h3>
                    @if(Session::has("success"))
                            <script>
                       Swal.fire(
                        'Operación éxitosa!',
                        'Se ha modificado la talla exitosamente.',
                        'success'
                        )
                        </script>
                      @elseif(Session::has("failed"))
                      <script>
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ocurrió un error, ya existe la talla, ingrese una talla diferente.',
                        })
                      </script>
                        @endif
                </div>

            </div>
         
            

        </div>
         <div class="col-lg-12">
             <form action="{{route('EditarTalla')}}" method="POST" class="form-group-lg">
              @csrf
              
              <input type="hidden" name="idTalla" value="{{$tallaB->id}}"/>
              <label>Talla</label>
              <input clase="form-control" type="text" name="tallaN" value="{{$tallaB->talla}}"/>
              <button type="submit" class="btn btn-success">Enviar</button>
             </form>
         </div>
         
    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@stop

@section('js')

  <script>
    $(document).ready(function () {
        $('#usuarios').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

            }

        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@stop