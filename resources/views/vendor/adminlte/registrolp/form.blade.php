   <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Mesa de Partes</a></li>
              <li><a href="#tab_2" data-toggle="tab">Pool de Causas</a></li>
              <li><a href="#tab_3" data-toggle="tab">Poll de Asistentes</a></li>
               <li><a href="#tab_4" data-toggle="tab">Pool de Audiencias</a></li>
               <li><input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}"></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                    <div class="col-md-8">
             
                        <br>


                <div class="form-group {{ $errors->has('fechain') ? 'has-error' : ''}}">
                <label for="fechain" class="control-label">{{ 'fechain' }}</label>
                <input class="form-control" name="fechain" type="date" id="fechain" value="{{ isset($registrolp->fechain) ? $registrolp->fechain : ''}}" >
                {!! $errors->first('fechain', '<p class="help-block">:message</p>') !!}
            </div>



                <div class="form-group">
                            <label for="ojurisdiccional">ojurisdic</label>
                            <select name="ojurisdiccional" class="form-control" id="ojurisdiccional" >
                              
                                @foreach ($ojurisdiccionals as $ojurisdiccional)
                                <option value="{{$ojurisdiccional->id }}">{{$ojurisdiccional->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('ojurisdic', '<p class="help-block">:message</p>') !!}
    </div>

      <div class="form-group">
                            <label for="sede">Sede</label>
                            <select name="sede" class="form-control" id="sede" >
                                <option value="0">General</option>
                                @foreach ($sedes as $sede)
                                <option value="{{$sede->id }}">{{$sede->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('sede', '<p class="help-block">:message</p>') !!}
    </div>



<div class="form-group {{ $errors->has('nroexpe') ? 'has-error' : ''}}">
    <label for="nroexpe" class="control-label">{{ 'Nroexpe' }}</label>
    <input class="form-control" name="nroexpe" type="text" id="nroexpe" value="{{ isset($registrolp->nroexpe) ? $registrolp->nroexpe : ''}}" >
    {!! $errors->first('nroexpe', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
                            <label for="texpe">texpe</label>
                            <select name="texpe" class="form-control" id="texpe" >
                                <option value="0">General</option>
                                @foreach ($texpedientes as $texpe)
                                <option value="{{$texpe->id }}">{{$texpe->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('texpe', '<p class="help-block">:message</p>') !!}
    </div>


    <div class="form-group">
                            <label for="ojudicial">ojudicial</label>
                            <select name="ojudicial" class="form-control" id="ojudicial" >
                                <option value="0">General</option>
                                @foreach ($ojudicials as $ojudicial)
                                <option value="{{$ojudicial->id }}">{{$ojudicial->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('ojudicial', '<p class="help-block">:message</p>') !!}
    </div>


                

        </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

               <div class="col-md-8">

                <div class="form-group">
                            <label for="ejcausa">ejcausa</label>
                            <select name="ejcausa" class="form-control" id="ejcausa" >
                                <option value="0">General</option>
                                @foreach ($ejcausas as $ejcausa)
                                <option value="{{$ejcausa->id }}">{{$ejcausa->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('ejcausa', '<p class="help-block">:message</p>') !!}
    </div>




<div class="form-group {{ $errors->has('fechareq') ? 'has-error' : ''}}">
    <label for="fechareq" class="control-label">{{ 'Fechareq' }}</label>
    <input class="form-control" name="fechareq" type="date" id="fechareq" value="{{ isset($registrolp->fechareq) ? $registrolp->fechareq : ''}}" >
    {!! $errors->first('fechareq', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechateq') ? 'has-error' : ''}}">
    <label for="fechateq" class="control-label">{{ 'Fechateq' }}</label>
    <input class="form-control" name="fechateq" type="date" id="fechateq" value="{{ isset($registrolp->fechateq) ? $registrolp->fechateq : ''}}" >
    {!! $errors->first('fechateq', '<p class="help-block">:message</p>') !!}
</div>




               </div>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">


               <div class="col-md-8">



<div class="form-group">
                            <label for="ajudicial">ajudicial</label>
                            <select name="ajudicial" class="form-control" id="ajudicial" >
                                <option value="0">General</option>
                                @foreach ($ajudicials as $ajudicial)
                                <option value="{{$ajudicial->id }}">{{$ajudicial->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('ajudicial', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('fechagc') ? 'has-error' : ''}}">
    <label for="fechagc" class="control-label">{{ 'Fechagc' }}</label>
    <input class="form-control" name="fechagc" type="date" id="fechagc" value="{{ isset($registrolp->fechagc) ? $registrolp->fechagc : ''}}" >
    {!! $errors->first('fechagc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechacd') ? 'has-error' : ''}}">
    <label for="fechacd" class="control-label">{{ 'Fechacd' }}</label>
    <input class="form-control" name="fechacd" type="date" id="fechacd" value="{{ isset($registrolp->fechacd) ? $registrolp->fechacd : ''}}" >
    {!! $errors->first('fechacd', '<p class="help-block">:message</p>') !!}
</div>


               </div>

              </div>

              <div class="tab-pane" id="tab_4">
                
                   <div class="col-md-8">


  

<div class="form-group {{ $errors->has('fechareaudiencia') ? 'has-error' : ''}}">
    <label for="fechareaudiencia" class="control-label">{{ 'fechareaudiencia' }}</label>
    <input class="form-control" name="fechareaudiencia" type="date" id="fechareaudiencia" value="{{ isset($registrolp->fechareaudiencia) ? $registrolp->fechareaudiencia : ''}}" >
    {!! $errors->first('fechareaudiencia', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('fechaaudi') ? 'has-error' : ''}}">
    <label for="fechaaudi" class="control-label">{{ 'Fechaaudi' }}</label>
    <input class="form-control" name="fechaaudi" type="date" id="fechaaudi" value="{{ isset($registrolp->fechaaudi) ? $registrolp->fechaaudi : ''}}" >
    {!! $errors->first('fechaaudi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
                            <label for="ejaudiencia">ejaudiencia</label>
                            <select name="ejaudiencia" class="form-control" id="ejaudiencia" >
                                <option value="0">General</option>
                                @foreach ($ejaudiencias as $ejaudiencia)
                                <option value="{{$ejaudiencia->id }}">{{$ejaudiencia->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('ejaudiencia', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
                            <label for="taudiencia">taudiencia</label>
                            <select name="taudiencia" class="form-control" id="taudiencia" >
                                <option value="0">General</option>
                                @foreach ($taudiencias as $taudiencia)
                                <option value="{{$taudiencia->id }}">{{$taudiencia->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('taudiencia', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
                            <label for="raudiencia">raudiencia</label>
                            <select name="raudiencia" class="form-control" id="raudiencia" >
                                <option value="0">General</option>
                                @foreach ($raudiencias as $raudiencia)
                                <option value="{{$raudiencia->id }}">{{$raudiencia->nombre}} </option>
                                @endforeach
                                
                            </select>
                              {!! $errors->first('raudiencia', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('reproaudien') ? 'has-error' : ''}}">
    <label for="reproaudien" class="control-label">{{ 'Reproaudien' }}</label>
    <input class="form-control" name="reproaudien" type="date" id="reproaudien" value="{{ isset($registrolp->reproaudien) ? $registrolp->reproaudien : ''}}" >
    {!! $errors->first('reproaudien', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('fechadevol') ? 'has-error' : ''}}">
    <label for="fechadevol" class="control-label">{{ 'fechadevol' }}</label>
    <input class="form-control" name="fechadevol" type="date" id="fechadevol" value="{{ isset($registrolp->fechadevol) ? $registrolp->fechadevol : ''}}" >
    {!! $errors->first('fechadevol', '<p class="help-block">:message</p>') !!}
</div>


                   </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>



