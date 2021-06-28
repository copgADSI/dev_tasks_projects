<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $project->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phoneClient') }}
            {{ Form::text('phoneClient', $project->phoneClient, ['class' => 'form-control' . ($errors->has('phoneClient') ? ' is-invalid' : ''), 'placeholder' => 'Phoneclient']) }}
            {!! $errors->first('phoneClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameClient') }}
            {{ Form::text('nameClient', $project->nameClient, ['class' => 'form-control' . ($errors->has('nameClient') ? ' is-invalid' : ''), 'placeholder' => 'Nameclient']) }}
            {!! $errors->first('nameClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documentClient') }}
            {{ Form::text('documentClient', $project->documentClient, ['class' => 'form-control' . ($errors->has('documentClient') ? ' is-invalid' : ''), 'placeholder' => 'Documentclient']) }}
            {!! $errors->first('documentClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $project->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $project->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>