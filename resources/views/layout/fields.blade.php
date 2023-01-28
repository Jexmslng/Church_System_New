<div class="form-group col-sm-6">
    {{ Form::label('Category','Category') }}
    {{ Form::select('category_id',$categories, null, ['class' => 'form-control','id'=>'category']) }}
</div>