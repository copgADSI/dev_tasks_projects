<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('category') }}
            {{ Form::text('category', $category->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Category']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriptionCategory') }}
            {{ Form::text('descriptionCategory', $category->descriptionCategory, ['class' => 'form-control' . ($errors->has('descriptionCategory') ? ' is-invalid' : ''), 'placeholder' => 'Descriptioncategory']) }}
            {!! $errors->first('descriptionCategory', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>