@extends('layouts/app')

@section('content')
    <div class="alert alert-warning" role="alert">
        New changes are saved!
    </div>
    <div class="tools text-right">
        @if(isset($_COOKIE['current_page_number']))
            <a class="btn btn-danger" href="{{url('/?page='.$_COOKIE['current_page_number'])}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
        @else
            <a class="btn btn-danger" href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
        @endif
@stop