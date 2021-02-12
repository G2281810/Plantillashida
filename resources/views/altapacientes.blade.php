@extends('plantilla')
@section('contenido')

<div class="right_col" role="main">
    <div class="control">
      <h1>ALTA PACIENTE</h1>
<form action = "{{route('guardarpaciente')}}" method = "POST">
        {{csrf_field()}}
        <div class="x_content">
              <!--ID paciente -->
            <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5  label-align">Clave paciente:<span
                  class="required">*</span>
              </label>
              <div class="col-md-5 col-sm-5">
                <input type="text" name="idpaci" id="idpaci" value="{{old('idpaci')}}" class="form-control" placeholder="Introduce clave paciente PAC-0001" tabindex="5">
                @if($errors->first('idpaci'))
                  <p class='text-danger'>{{$errors->first('idpaci')}}</p>
                @endif
              </div>
            </div>
            <!--nombre -->
            <div class="field item form-group">
                <label class="col-form-label col-md-5 col-sm-5  label-align">Nombre:<span
                    class="required">*</span></label>
                <div class="col-md-5 col-sm-5">
                  <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"
                    placeholder="" required="required" />
                </div>
              </div>
              <!--apellido paterno -->
            <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5  label-align">Apellido Paterno:<span
                  class="required">*</span></label>
              <div class="col-md-5 col-sm-5">
                <input class="form-control" class='optional' name="" data-validate-length-range="5,15"
                  type="text" /></div>
            </div>
            <!--apellido materno-->
            <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5  label-align">Apellido Materno:<span
                  class="required">*</span></label>
              <div class="col-md-5 col-sm-5">
                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"
                  placeholder="" required="required" />
              </div>
            </div>
            <!--sexo-->
            <div class="item form-group">
              <label class="col-form-label col-md-5 col-sm-5 label-align">Sexo:<span
                class="required">*</span></label>
              <div class="col-md-5 col-sm-5 ">
                <div id="gender" class="btn-group" data-toggle="buttons">
                  <p>
                    Masculino
                    <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                    Femenino
                    <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                  </p>
                </div>
              </div>
            </div>
            <!--edad-->
            <div class="field item form-group">
                <label class="col-form-label col-md-5 col-sm-5  label-align">Edad:<span
                    class="required">*</span></label>
                <div class="col-md-5 col-sm-5">
                  <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="edad"
                    placeholder="" />
                </div>
              </div>

            <!--Tipo de sangre-->
            <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5 label-align">Tipo de sangre:<span
                class="required">*</span></label>
              <div class="col-md-5 col-sm-5 ">
                <select class="select2_group form-control">
                  <option disabled="disabled" selected="selected">Selecciona una opcion</option>
                  <option value="">A+</option>
                  <option value="">A-</option>
                  <option value="">B+</option>
                  <option value="">B-</option>
                </select>
              </div>
            </div>
            <!--Telefono-->
            <div class="field item form-group">
                <label class="col-form-label col-md-5 col-sm-5  label-align">Telefono:<span
                    class="required">*</span></label>
                <div class="col-md-5 col-sm-5">
                  <input class="form-control" class='optional' name="" data-validate-length-range="5,15"
                    type="text" /></div>
              </div>
            <!--correo-->
            <div class="field item form-group">
                <label class="col-form-label col-md-5 col-sm-5  label-align">Correo electronico:<span
                    class="required">*</span></label>
                <div class="col-md-5 col-sm-5">
                  <input class="form-control" name="email" class='email' required="required" type="email" /></div>
              </div>
              <!--pregunta-->
              <div class="item form-group">
                <label class="col-form-label col-md-5 col-sm-5 label-align">¿Tiene alergias?:<span
                  class="required">*</span></label>
                <div class="col-md-5 col-sm-5 ">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <p>
                      Si
                      <input type="radio" class="flat" name="genders" id="gendersi" value="Si" checked="" required />
                      No
                      <input type="radio" class="flat" name="genders" id="genderno" value="No"/>
                    </p>
                  </div>
                </div>
              </div>
            <!--Alergias-->
            <div class="field item form-group">
                <label class="col-form-label col-md-5 col-sm-5  label-align">¿Cuales son sus alergias?:</label>
                <div class="col-md-5 col-sm-5">
                  <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="alergias"
                    placeholder="" required="required" />
                </div>
              </div>

            <!--Activo-->
            <div class="item form-group">
                <label class="col-form-label col-md-5 col-sm-5 label-align">Activo:<span
                  class="required">*</span></label>
                <div class="col-md-5 col-sm-5 ">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <p>
                      Si
                      <input type="radio" class="flat" name="genderss" id="gendersia" value="Sia" checked="" required />
                      No
                      <input type="radio" class="flat" name="genderss" id="gendernoa" value="Noa"/>
                    </p>
                  </div>
                </div>
              </div>
              <!--botones-->
              <div class="field item form-group">
              <label class="col-form-label col-md-5 col-sm-5 label-align"></label>
              <div class="col-md-5 col-sm-5 ">
                  <button type="submit" value="Guardar" class="btn btn-success ">Enviar</button>
                  <button type="submit" class="btn btn-danger">Cancelar</button>
              </div>
            </div>


            
          </form>
        </div>

    

    </div>

  </div>
</form>
<style>
    .required
    {
        color: red;
    }
</style>
@endsection