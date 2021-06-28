<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('file') }}
            {{ Form::text('file', $file->file, ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File']) }}
            {!! $errors->first('file', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fileable_id') }}
            {{ Form::text('fileable_id', $file->fileable_id, ['class' => 'form-control' . ($errors->has('fileable_id') ? ' is-invalid' : ''), 'placeholder' => 'Fileable Id']) }}
            {!! $errors->first('fileable_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fileable_type') }}
            {{ Form::text('fileable_type', $file->fileable_type, ['class' => 'form-control' . ($errors->has('fileable_type') ? ' is-invalid' : ''), 'placeholder' => 'Fileable Type']) }}
            {!! $errors->first('fileable_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>