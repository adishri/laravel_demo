

<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','body:') !!}

    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','publish on:') !!}

    {!! Form::input('date','published_at',date('y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText ,null,['class'=>'btn btn-primary form-control']) !!}

</div>