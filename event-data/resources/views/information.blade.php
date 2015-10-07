@extends('app')
@section('content')
    {{--<button type="button" onclick="window.location='{{ route("info") }}'">Button</button>--}}
    {{--{!! Form::open(['url'=> 'info'])   !!}--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::submit('Click Here',null,['class'=>'btn btn-primary form-control']) !!}--}}
    {{--{!! Form::close()   !!}--}}
    {{--@include('list');--}}
    {{--</div>--}}
    {{--<form>--}}
    {{--<a href="info.blade.php"><button>Click Here</button></a>--}}
    {{--</form>--}}
    <a href="{{url('new-info')}}"><button>Click Here</button></a>
    {{--@foreach($data as $info)--}}
        {{--<article>--}}
            {{--<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>--}}
            {{--<h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a></h2>--}}
            {{--<h2><a href="{{url('/articles',$article->id)}}">{{$article->title}}</a></h2>--}}
            {{--<h2>{{"Title:-".$info->title}}</h2>--}}
            {{--<h4>{{"venue:-".$info->venue}}</h4>--}}
            {{--<h4>{{"Event Start Time:-".$info->event_start_time}}</h4>--}}
            {{--<h4>{{"Duration Of The Event:-".$info->duration}}</h4>--}}
            {{--<h4>{{"Date And Time:-".$info->date}}</h4>--}}
        {{--</article>--}}
    {{--@endforeach--}}
@stop
