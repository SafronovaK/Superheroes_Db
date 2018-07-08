@extends('layouts/app')
@section('content')

<h1>Edit hero ({{$hero->nick_name}})</h1>

{!! Form::model($hero, ['route'=>['hero.update', $hero->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
    @include('partials/form_fields')

    @foreach($hero->images as $img)
        <div class="gallery-img">
            <img class="h-100" src="{{URL::asset('storage/'.$img->path)}}"/>
            <div class="btn btn-danger delete-button" data-img = "{{$img->id}}"><i class="fa fa-trash"></i></div>
            <div class="overlay" style="visibility: hidden;">this image will be deleted<br/>
                <div class="btn btn-outline-dark cancel-button" data-img = "{{$img->id}}">Cancel</div>
            </div>
        </div>
    @endforeach


    <input type="hidden" name="images_to_delete" id="images_to_delete"/>

    <div class="tools text-right">
        {!! Form::submit('Save', ['class'=> 'btn btn-success']) !!}

        @if(isset($_COOKIE['current_page_number']))
            <a href="{{url('/?page='.$_COOKIE['current_page_number'])}}" class="btn btn-warning">Cancel</a>
        @else
            <a href="{{action('HeroController@showAll')}}" class="btn btn-warning">Cancel</a>
        @endif
    </div>
    
{!! Form::close() !!}


@stop

@section('scripts')
    @parent
    <script>
        $(function() {

            var to_delete = [];

            $('.delete-button').on('click', function() {
                $(this).css('visibility', 'hidden');
                $(this).next().css('visibility', 'visible');
                to_delete.push( $(this).attr('data-img') );
                $('#images_to_delete').val(to_delete,toString());
            });

            $('.overlay .cancel-button').on('click', function() {
                $(this).parent().css('visibility', 'hidden');
                $(this).parent().prev().css('visibility', 'visible');
                to_delete.splice(to_delete.indexOf($(this).attr('data-img')), 1);
                $('#images_to_delete').val(to_delete,toString());
            });
        });
    </script>
@stop