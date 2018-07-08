<div class="form-group">
    {!!Form::label('nick_name', 'Nickname: ')!!}
    {!!Form::text('nick_name', null, ['class'=>'form-control', 'required'=> 'required', 'id'=>'nick_name', 'placeholder'=> 'enter nickname'])!!}
</div>
<div class="form-group">
    {!!Form::label('real_name', 'Real name: ')!!}
    {!!Form::text('real_name', null, ['class'=>'form-control', 'required'=>'required', 'id'=>'real_name', 'placeholder'=> 'enter real name'])!!}
</div>
<div class="form-group">
    {!!Form::label('prehistory', 'Origin description: ')!!}
    {!!Form::textarea('prehistory', null,  ['class'=>'form-control', 'id'=>'prehistory', 'placeholder'=> 'enter description'])!!}
</div>
<div class="form-group">
    {!!Form::label('superpowers', 'Superpowers: ')!!}
    {!!Form::textarea('superpowers', null,  ['class'=>'form-control', 'id'=>'superpowers', 'placeholder'=> 'enter superpowers list'])!!}
</div>
<div class="form-group">
    {!!Form::label('catch_phrase', 'Catch phrase: ')!!}
    {!!Form::text('catch_phrase', null,  ['class'=>'form-control', 'id'=>'catch_phrase',  'placeholder'=> 'enter heroe\'s catch phrase'])!!}
</div>
<div class="form-group">
    {!!Form::label('images', 'Select images: ')!!}
    <input type="file" name="images[]" class="form-control" id = "images" multiple accept="image/*"/>
</div>