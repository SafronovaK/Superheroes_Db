@extends('layouts/app')
@section('content')
       
        <div class="row row-no-padding">
            <div class="col-md-4">
                @if(count($hero->images) !== 0)
                    <img class="w-100" src = "{{URL::asset('storage/'.$hero->images[0]->path)}}"/>
                @else
                    <div class="no-photo text-center">NO<br/>PHOTO</div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="hero-nickname text-center">{{$hero->nick_name}}</div>
                <div class="properties">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-lg-3 col-md-5 col-sm-6 property-name">Real name :</div>
                            <div class="col-lg-9 col-md-7 col-sm-6">{{$hero->real_name}}</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-lg-3 col-md-5 col-sm-6 property-name" >Origin description :</div>
                            <div class="col-lg-9 col-md-7 col-sm-6">{{$hero->prehistory}}</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-lg-3 col-md-5 col-sm-6 property-name">Superpowers :</div>
                            <div class="col-lg-9 col-md-7 col-sm-6">{{$hero->superpowers}}</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-lg-3 col-md-5 col-sm-6 property-name">Catch phrase :</div>
                            <div class="col-lg-9 col-md-7 col-sm-6">{{$hero->catch_phrase}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="gallery-header">
                <h1>Gallery</h1>
            </div>
            @if(count($hero->images) !== 0)
                @foreach($hero->images as $img)
                    <img class="gallery-img" src = "{{URL::asset('storage/'.$img->path)}}"/>
                @endforeach
            @else
                <div class="no-photo text-center">NO<br/>PHOTO</div>
            @endif

            <div class="tools text-right">
                    <a class="btn btn-warning" href="{{url('hero/'.$hero->id.'/edit')}}">Edit</a>
                    @if(isset($_COOKIE['current_page_number']))
                        <a class="btn btn-danger" href="{{url('/?page='.$_COOKIE['current_page_number'])}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
                    @else
                        <a class="btn btn-danger" href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
                    @endif
            </div>
        
@stop