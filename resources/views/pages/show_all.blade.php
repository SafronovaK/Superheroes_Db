@extends('layouts/app')
@section('content')
    <div class="tools text-right">
        <a class="btn btn-success" href="{{url('hero/add')}}">Add new hero</a>
    </div>
    @foreach($heroes as $hero)
        <div class="row short-hero-info">
            <div class="col-lg-3 col-sm-5 col-xs-6 small-image">
                @if(count($hero->images) === 0)
                    <a href="{{url('hero/'.$hero->id.'/info')}}" class="no-photo text-center h-100">
                            <div>NO</br>PHOTO</div>
                    </a>
                @else
                    <a href="{{url('hero/'.$hero->id.'/info')}}">
                        <div class="h-100" style="background-image: url({{URL::asset('storage/'.$hero->images[0]->path)}}); background-size: cover; background-repeat: no-repeat; background-position: top center;"></div>
                    </a>
                @endif
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-6">
                <a class="nickname" href="{{url('hero/'.$hero->id.'/info')}}">{{$hero->nick_name}}</a>
            </div>
            <div class="col-lg-2 col-sm-2">
                <a class="btn btn-outline-warning" href="{{action('HeroController@edit', $hero->id)}}">Edit</a>
                <button type="button" class="btn btn-outline-danger" data-hero_id = "{{$hero->id}}" data-hero_nick = "{{$hero->nick_name}}" data-toggle="modal" data-target="#confirmDelete">Delete</button>
            </div>
        </div>
    @endforeach
    
     {{ $heroes->links() }}  {{--for pagination --}}

     <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirm Hero Deletion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <span id="heroNick"></span>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {!! Form::open(['method' => 'DELETE', 'id'=> 'delForm']) !!}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @parent
    <script>
        $(function() {
            $('#confirmDelete').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget); //button, which called modal dialog
                var heroId = $(button).data('hero_id');
                var heroNick = $(button).data('hero_nick');
                $("#confirmDelete #heroNick").text( heroNick );
                $("#delForm").attr('action', 'hero/'+heroId+'/delete');
            });
        });
    </script>
@stop