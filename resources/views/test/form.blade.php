<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $test->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('startDate') }}
            {{ Form::text('startDate', $test->startDate, ['class' => 'form-control' . ($errors->has('startDate') ? ' is-invalid' : ''), 'placeholder' => 'Startdate']) }}
            {!! $errors->first('startDate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deliverDate') }}
            {{ Form::text('deliverDate', $test->deliverDate, ['class' => 'form-control' . ($errors->has('deliverDate') ? ' is-invalid' : ''), 'placeholder' => 'Deliverdate']) }}
            {!! $errors->first('deliverDate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('standbyTime') }}
            {{ Form::text('standbyTime', $test->standbyTime, ['class' => 'form-control' . ($errors->has('standbyTime') ? ' is-invalid' : ''), 'placeholder' => 'Standbytime']) }}
            {!! $errors->first('standbyTime', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('member_id') }}
            {{ Form::text('member_id', $test->member_id, ['class' => 'form-control' . ($errors->has('member_id') ? ' is-invalid' : ''), 'placeholder' => 'Member Id']) }}
            {!! $errors->first('member_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_id') }}
            {{ Form::text('state_id', $test->state_id, ['class' => 'form-control' . ($errors->has('state_id') ? ' is-invalid' : ''), 'placeholder' => 'State Id']) }}
            {!! $errors->first('state_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('priority_id') }}
            {{ Form::text('priority_id', $test->priority_id, ['class' => 'form-control' . ($errors->has('priority_id') ? ' is-invalid' : ''), 'placeholder' => 'Priority Id']) }}
            {!! $errors->first('priority_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>