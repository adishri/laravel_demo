@extends('app')
@section('content')
    {{--<a href="{{ URL::route('information') }}">My button</a>--}}
    {{--<form>--}}
    {{--{!! Form::submit('Click Here',null,['class'=>'btn btn-primary form-control']) !!}--}}
    {{--<form>--}}
    {{--<h2>{{$data}}</h2>--}}
    {{--<a href="{{url('/information')}}"><button>Click Here</button></a>--}}
    {{--<a href="information.blade.php"><button>Click Here</button></a>--}}
    @foreach($data as $info)
        <article>
            {{--<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>--}}
            {{--<h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a></h2>--}}
            {{--<h2><a href="{{url('/articles',$article->id)}}">{{$article->title}}</a></h2>--}}
            <h2>{{"Title:-".$info->title}}</h2>
            <h4>{{"venue:-".$info->venue}}</h4>
            <h4>{{"Event Start Time:-".$info->event_start_time}}</h4>
            <h4>{{"Duration Of The Event:-".$info->duration}}</h4>
            <h4>{{"Date And Time:-".$info->date}}</h4>
        </article>
    @endforeach
@stop