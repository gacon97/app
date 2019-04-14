<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $image->id !!}</p>
</div>

<!-- Travel Id Field -->
<div class="form-group">
    {!! Form::label('travel_id', 'Travel Id:') !!}
    <p>{!! $image->travel_id !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $image->image !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $image->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $image->updated_at !!}</p>
</div>

