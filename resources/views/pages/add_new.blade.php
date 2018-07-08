@extends('layouts/app')

@section('content')
    <h1>New hero</h1>

    {!! Form::open(['url' => 'save', 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}   
        @include('partials/form_fields') 

        <div class="tools text-right">
            {!! Form::submit('Save', ['class'=> 'btn btn-success']) !!}

            @if(isset($_COOKIE['current_page_number']))
                <a href="{{url('/?page='.$_COOKIE['current_page_number'])}}" class="btn btn-warning">Cancel</a>
            @else
                <a href="{{url('/')}}" class="btn btn-warning">Cancel</a>
            @endif
        </div>
    {!! Form::close() !!}
@stop