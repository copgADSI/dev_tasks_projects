<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comment') }}
            {{ Form::text('comment', $comment->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Comment']) }}
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('commentable_id') }}
            {{ Form::text('commentable_id', $comment->commentable_id, ['class' => 'form-control' . ($errors->has('commentable_id') ? ' is-invalid' : ''), 'placeholder' => 'Commentable Id']) }}
            {!! $errors->first('commentable_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('commentable_type') }}
            {{ Form::text('commentable_type', $comment->commentable_type, ['class' => 'form-control' . ($errors->has('commentable_type') ? ' is-invalid' : ''), 'placeholder' => 'Commentable Type']) }}
            {!! $errors->first('commentable_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('member_id') }}
            {{ Form::text('member_id', $comment->member_id, ['class' => 'form-control' . ($errors->has('member_id') ? ' is-invalid' : ''), 'placeholder' => 'Member Id']) }}
            {!! $errors->first('member_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>