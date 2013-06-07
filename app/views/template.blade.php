<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>

<body>

<h1>お問い合わせ</h1>

@if(count($errors)>0)
<ul id="form-errors">
    {{ $errors->first('name', '<li>:message</li>') }}
    {{ $errors->first('email', '<li>:message</li>') }}
    {{ $errors->first('comment', '<li>:message</li>') }}
</ul>
@endif

<div id="wrapper">
    <?php echo $content; ?>
    <hr/>
    <p class="footer">
        Powered by
    </p>
</div>
</body>
</html>