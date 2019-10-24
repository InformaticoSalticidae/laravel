@extends('layout')

@section('content')

<center><H1>{{$title}}</H1></center>

<br/>
     <div class="container col-lg-10">


      
                                                {{--VALIDACIONES--}}
         @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $error)    
                <div class="alert alert-danger">
                   <li>{{ $error }}</li>
                  </div>
                @endforeach
              </ul>
         @endif

         @foreach (['danger', 'warning', 'success', 'info'] as $msg) @if(Session::has('alert-' . $msg)) 
          <div class="alert alert-success">
              <li>{{ Session::get('alert-' . $msg) }}</li>
          </div>
         @endif @endforeach
     


      <form class="needs-validation" action="{{ route('formulario.store') }}"  method="POST" novalidate>
        {!! csrf_field() !!}



                    <div class="form-row">
                                                   {{--PRIMER NOMBRE--}}
                      <div class="col-md-4 mb-3">
                        <label for="pnombre">Primer Nombre</label>
                      <input type="text" class="form-control" name="pnombre" id="pnombre" placeholder="Primer Nombre" value="{{ old('pnombre')}}" required>
                        <div class="valid-feedback">
                          Muy Bien!
                        </div>
                      </div>



                                                   {{--SEGUNDO NOMBRE--}}
                      <div class="col-md-4 mb-3">
                        <label for="snombre">Segundo Nombre</label>
                        <input type="text" class="form-control" name="snombre" id="snombre" placeholder="Segundo Nombre" value="{{ old('snombre')}}" required>
                        <div class="valid-feedback">
                          Muy Bien!
                        </div>
                      </div>



                                                  {{--NOMBRE DE USUARIO--}}
                      <div class="col-md-4 mb-3">
                        <label for="nom_usuario">Nombre de Usuario</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                          </div>
                          <input type="text" class="form-control" name="nom_usuario" id="nom_usuario" placeholder="Nombre de Usuario" value="{{ old('nom_usuario')}}" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Porfavor escribe un nombre de usuario.
                          </div>
                        </div>
                      </div>

                    </div>



                    <div class="form-row">
                                                     {{--CIUDAD--}}
                      <div class="col-md-6 mb-3">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" value="{{ old('ciudad')}}" required>
                        <div class="invalid-feedback">
                          Por favor escribe una ciudad.
                        </div>
                      </div>


                                                     {{--ESTADO--}}
                      <div class="col-md-3 mb-3">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" value="{{ old('estado')}}" required>
                        <div class="invalid-feedback">
                          Por favor escribe un estado.
                        </div>
                      </div>


                                                      {{--SEXO--}}
                      <div class="col-md-3 mb-3">
                            <label class="mr-sm-2" for="sexo">Sexo</label>
                            <select class="custom-select mr-sm-2" name="sexo" id="sexo" required>
                              <option selected></option>
                              <option value="1">Hombre</option>
                              <option value="2">Mujer</option>
                            </select>
                            <div class="invalid-feedback">
                                    Por favor seleccione un sexo.
                            </div>
                      </div>



                    {{--STATUS DEL FORMULARIO POR DEFECTO ESTA EN 'S'=VISIBLE 'N'= NO VISIBLE--}}
                      <input type="hidden" name="status" id="status" value="S" required>

                    </div>



                                              {{--TERMINOS Y CONDICIONES--}}
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          He leído y acepto los términos y condiciones de uso
                        </label>
                        <div class="invalid-feedback">
                          Debes aceptar antes de registrar.
                        </div>
                      </div>
                    </div>



                                                  {{--BOTON REGISTRAR--}}
                    <button class="btn btn-primary" type="submit">Registrar</button>
                  </form>        

     </div>
   
@endsection