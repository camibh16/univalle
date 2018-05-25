

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estados_id', 'Estado:') !!}
    {!! Form::select('estados_id',$estados, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.pedidos.index') !!}" class="btn btn-default">Cancel</a>
</div>