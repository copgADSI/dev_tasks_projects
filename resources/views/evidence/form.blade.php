<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('information') }}
            {{ Form::text('information', $evidence->information, ['class' => 'form-control' . ($errors->has('information') ? ' is-invalid' : ''), 'placeholder' => 'Information']) }}
            {!! $errors->first('information', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evidenceable_id') }}
            {{ Form::text('evidenceable_id', $evidence->evidenceable_id, ['class' => 'form-control' . ($errors->has('evidenceable_id') ? ' is-invalid' : ''), 'placeholder' => 'Evidenceable Id']) }}
            {!! $errors->first('evidenceable_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evidenceable_type') }}
            {{ Form::text('evidenceable_type', $evidence->evidenceable_type, ['class' => 'form-control' . ($errors->has('evidenceable_type') ? ' is-invalid' : ''), 'placeholder' => 'Evidenceable Type']) }}
            {!! $errors->first('evidenceable_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $evidence->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>