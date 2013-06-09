<p>
    名前:
    {{ $name }}
</p>
<p>
    メールアドレス:
    {{ $email }}
</p>
<p>
    コメント:
    {{ $comment }}
</p>

{{ Form::open(array('url' => 'form/')) }}

{{ Form::hidden('name', "$name") }}
{{ Form::hidden('email', "$email") }}
{{ Form::hidden('comment', "$comment", array('rows'=> 6, 'cols' => 70)) }}
<div class="action">
    {{ Form::submit('修正') }}
</div>
{{ Form::close() }}

{{ Form::open(array('url' => 'form/send')) }}

{{ Form::hidden('name', "$name") }}
{{ Form::hidden('email', "$email") }}
{{ Form::hidden('comment', "$comment", array('rows'=> 6, 'cols' => 70)) }}
<div class="action">
    {{ Form::submit('送信') }}
</div>
{{ Form::close() }}