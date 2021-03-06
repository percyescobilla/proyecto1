  <div class="form-group">
                            <label for="ojurisdiccional">ojurisdic</label>
                            <select name="ojurisdiccional" class="form-control" id="ojurisdiccional" >
                                <option value="0">General</option>
                                @if (is_array($ojurisdiccionals))
                                @foreach ($ojurisdiccionals as $ojurisdiccional)
                            
                                <option value="{{$ojurisdiccional->id }}"
                                    @if($registrolp->ojurisdic == $ojurisdiccionals->id) selected @endif >{{$ojurisdiccional->nombre}} </option>

                                {{$ojurisdiccional->id}}

                                @endforeach
                                @endif
                               
                                
                            </select>
                              {!! $errors->first('ojurisdic', '<p class="help-block">:message</p>') !!}
    </div>
    
                             


      <div class="form-group">
        <?= $sedes  ?>
        <label for="sede">Sede</label>
        <select name="sede" class="form-control" id="sede" value="{{$sedes}}">
            <option value="0">General</option>
            @foreach ($lista_sedes as $value)
                <option value="{{$value->id}}" {{($value->id === $sedes) ? 'selected' : '' }}>
                    {{$value->nombre}}
                </option>
            @endforeach
        </select>
        {!! $errors->first('lista_sedes', '<p class="help-block">:message</p>') !!}
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
                                 @if (is_array($texpedientes))
                                @foreach ($texpedientes as $texpe)
                                <option value="{{$texpe->id }}"  @if($registrolp->texpe == $texpe) selected @endif >{{$texpe->nombre}} </option>
                                @endforeach
                                @endif
                            </select>
                              {!! $errors->first('texpe', '<p class="help-block">:message</p>') !!}
    </div>


    <div class="form-group">
                            <label for="ojudicial">ojudicial</label>
                            <select name="ojudicial" class="form-control" id="ojudicial" >
                                <option value="0">General</option>
                                  @if (is_array($ojudicials))
                                @foreach ($ojudicials as $ojudicial)
                                <option value="{{$ojudicial->id }}" @if($registrolp->ojudicial == $ojudicial) selected @endif>{{$ojudicial->nombre}} </option>
                                @endforeach
                                @endif
                                
                            </select>
                              {!! $errors->first('ojudicial', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group">
                            <label for="ejcausa">ejcausa</label>
                            <select name="ejcausa" class="form-control" id="ejcausa" >
                                <option value="0">General</option>
                                @if (is_array($ejcausas))
                                @foreach ($ejcausas as $ejcausa)
                                <option value="{{$ejcausa->id }}" @if($registrolp->ejcausa == $ejcausa) selected @endif>{{$ejcausa->nombre}} </option>
                                @endforeach
                                @endif
                                
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

<div class="form-group">
                            <label for="ajudicial">ajudicial</label>
                            <select name="ajudicial" class="form-control" id="ajudicial" >
                                <option value="0">General</option>
                                @if (is_array($ajudicials))
                                @foreach ($ajudicials as $ajudicial)
                                <option value="{{$ajudicial->id }}" @if($registrolp->ajudicial == $ajudicial) selected @endif>{{$ajudicial->nombre}} </option>
                                @endforeach
                                @endif
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
<div class="form-group {{ $errors->has('fechaaudi') ? 'has-error' : ''}}">
    <label for="fechaaudi" class="control-label">{{ 'Fechaaudi' }}</label>
    <input class="form-control" name="fechaaudi" type="date" id="fechaaudi" value="{{ isset($registrolp->fechaaudi) ? $registrolp->fechaaudi : ''}}" >
    {!! $errors->first('fechaaudi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
                            <label for="ejaudiencia">ejaudiencia</label>
                            <select name="ejaudiencia" class="form-control" id="ejaudiencia" >
                                <option value="0">General</option>
                                @if (is_array($ejaudiencias))
                                @foreach ($ejaudiencias as $ejaudiencia)
                                <option value="{{$ejaudiencia->id }}" @if($registrolp->ejaudiencia == $ejaudiencia) selected @endif>{{$ejaudiencia->nombre}} </option>
                                @endforeach
                                @endif
                                
                            </select>
                              {!! $errors->first('ejaudiencia', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
                            <label for="taudiencia">taudiencia</label>
                            <select name="taudiencia" class="form-control" id="taudiencia" >
                                <option value="0">General</option>
                                @if (is_array($taudiencias))
                                @foreach ($taudiencias as $taudiencia)
                                <option value="{{$taudiencia->id }}" @if($registrolp->taudiencia == $taudiencia) selected @endif>{{$taudiencia->nombre}} </option>
                                @endforeach
                                @endif
                                
                            </select>
                              {!! $errors->first('taudiencia', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
                            <label for="raudiencia">raudiencia</label>
                            <select name="raudiencia" class="form-control" id="raudiencia" >
                                <option value="0">General</option>
                                 @if (is_array($taudiencias))
                                @foreach ($raudiencias as $raudiencia)
                                <option value="{{$raudiencia->id }}"  @if($registrolp->raudiencia == $raudiencia) selected @endif>{{$raudiencia->nombre}} </option>
                                @endforeach
                                 @endif
                                
                            </select>
                              {!! $errors->first('raudiencia', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('reproaudien') ? 'has-error' : ''}}">
    <label for="reproaudien" class="control-label">{{ 'Reproaudien' }}</label>
    <input class="form-control" name="reproaudien" type="date" id="reproaudien" value="{{ isset($registrolp->reproaudien) ? $registrolp->reproaudien : ''}}" >
    {!! $errors->first('reproaudien', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
