@extends('layout')

@section('content')

<center><H1>{{$title}}</H1></center>

<br/>        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">



                                      {{--TABLA QUE CONTIENE DOS TABLAS--}}
<table>
  <tr>
    <th>



                                                 {{--TABLA 1--}}
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                      <tr>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Nombre de Usuario</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Sexo</th>
                      </tr>

                    </thead>

                    <tbody>

                    <tr>
                            @forelse ($forms as $form){{--SHOW RESULTADOS--}}
                                <td>{{ $form->pnombre }}</td>
                                <td>{{ $form->snombre }}</td>
                                <td>{{ $form->nom_usuario }}</td>
                                <td>{{ $form->ciudad }}</td>
                                <td>{{ $form->estado }}</td>
                                <td>{{ $form->descripcion }}</td>
                    </tr>
                            @empty
                            <li>No hay formularios registrados.</li>{{--SI NO ENCUENTRA DATOS--}}
                            @endforelse 

                    </tbody>
                  </table>



    </th>
    <th>



                                                    {{--TABLA 2--}}
                         <table id="dataTable" width="100%" cellspacing="0">

                            <tr>
                                <th> &nbsp;</th>
                            </tr>

                            <tr>
                                @forelse ($formsid as $formid){{--SHOW BOTON EDITAR--}}
                                <td height="50"> <a href="{{ route('formulario.edit', $formid->id) }}" class="btn btn-info" role="button">Editar</a> </td>
                            </tr>
                                @empty   @endforelse 
                            
                         </table>

    </th>
  </tr>
</table>  



              </div>
            </div>
          </div>

@endsection