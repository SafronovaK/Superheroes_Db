@extends('layouts/app')

@section('content')
    <div class="alert alert-success" role="alert">
       New hero successfully added to database! =)
    </div>
    <div class="tools text-right">
        <a class="btn btn-success" href="{{url('hero/add')}}">Add one more</a>
        @if(isset($_COOKIE['current_page_number']))
            <a class="btn btn-danger" href="{{url('/?page='.$_COOKIE['current_page_number'])}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
        @else
            <a class="btn btn-danger" href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
        @endif
@stop