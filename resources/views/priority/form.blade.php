<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('priority') }}
            {{ Form::text('priority', $priority->priority, ['class' => 'form-control' . ($errors->has('priority') ? ' is-invalid' : ''), 'placeholder' => 'Priority']) }}
            {!! $errors->first('priority', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriptionPriority') }}
            {{ Form::text('descriptionPriority', $priority->descriptionPriority, ['class' => 'form-control' . ($errors->has('descriptionPriority') ? ' is-invalid' : ''), 'placeholder' => 'Descriptionpriority']) }}
            {!! $errors->first('descriptionPriority', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>