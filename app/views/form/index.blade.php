{{ Form::open(array('url' => 'form/confirm')) }}
<p>
    {{ Form::label('name', '名前') }}(*) :
    {{ Form::text('name') }}
</p>
<p>
    {{ Form::label('email', 'メールアドレス') }}(*) :
    {{ Form::text('email') }}
</p>
<p>
    {{ Form::label('', 'コメント') }}(*) :
    {{ Form::textarea('comment', '', array('rows'=> 6, 'cols' => 70)) }}
</p>
<div class="action">
    {{ Form::submit('確認') }}
</div>
{{ Form::close() }}