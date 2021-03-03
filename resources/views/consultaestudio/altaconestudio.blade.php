@extends('plantilla')
@section('contenido')
<div class="right_col" role="main">
    <div class="control">
        <h1>ALTA CONSULTA ESTUDIOS</h1>
        <form action = "{{route('guardarconestudio')}}" method = "POST">
         {{csrf_field()}}
         <div class="x_content">
             <!--ID CCONSULTA ESTUDIO -->
             <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5  label-align">Clave consulta estudio:<span
                 class="required">*</span>
              </label>
             <div class="col-md-5 col-sm-5">
                 <input type="text" name="idconestudio" id="idconestudio" value="{{old('idconsestudio')}}" class="form-control" placeholder="Introduce clave de estudio consulta" tabindex="5">
                 @if($errors->first('idconestudio'))
                  <p class='text-danger'>{{$errors->first('idconestudio')}}</p>
                 @endif
              </div>
             </div>
             <!--consulta-->
          <div class="field item form-group">
            <label class="col-form-label col-md-5 col-sm-5 label-align">Consulta:<span
              class="required">*</span></label>
            <div class="col-md-5 col-sm-5 ">
              <select class="select2_group form-control"name="idcon" id="idcon">
                <option disabled="disabled" selected="selected" >Selecciona la consulta</option>
                @foreach($consulta as $consulta)
                  <option value="{{$consulta['idconsulta']}}">{{$consulta['idconsulta']}}</option>
                @endforeach
              </select>
              @if($errors->first('idcon'))
                 <p class='text-danger'>{{$errors->first('idcon')}}</p>
                @endif
            </div>
          </div>
          <!--Estudio-->
          <div class="field item form-group">
            <label class="col-form-label col-md-5 col-sm-5 label-align">Estudio:<span
              class="required">*</span></label>
            <div class="col-md-5 col-sm-5 ">
              <select class="select2_group form-control"name="ides" id="ides">
                <option disabled="disabled" selected="selected" >Selecciona el estudio</option>
                @foreach($estudio as $estudio)
                  <option value="{{$estudio['idestudio']}}">{{$estudio['nombre']}}</option>
                @endforeach
              </select>
              @if($errors->first('ides'))
                 <p class='text-danger'>{{$errors->first('ides')}}</p>
                @endif
            </div>
          </div>
          <!--Observaciones -->
           <div class="field item form-group">
            <label class="col-form-label col-md-5 col-sm-5  label-align">Observaciones:<span
                class="required"></span></label>
            <div class="col-md-5 col-sm-5">
              <input type="text" name="obser" id="obser" value="{{old('obser')}}" class="form-control" placeholder="" tabindex="5">
              @if($errors->first('obser'))
               <p class='text-danger'>{{$errors->first('obser')}}</p>
              @endif
            </div>
          </div>
          <!--archivo -->
           <div class="field item form-group">
            <label class="col-form-label col-md-5 col-sm-5  label-align">Imagen del estudio:<span
                class="required"></span></label>
            <div class="col-md-5 col-sm-5">
              <input type="file" name="img" id="img" class="form-control" placeholder="" tabindex="5">
              @if($errors->first('img'))
               <p class='text-danger'>{{$errors->first('img')}}</p>
              @endif
            </div>
          </div>
           <!--Botones -->
           <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5 label-align"></label>
              <div class="col-md-5 col-sm-5 ">
                  <button type="submit" value="Guardar" class="btn btn-success ">Enviar</button>
              </div>
            </div>

            </div>
        
    </div>
</div>

<style>
    .required
    {
        color: red;
    }
</style>
</form>
@endsection
