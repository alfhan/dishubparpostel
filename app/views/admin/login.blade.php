<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo asset('bootstrap/css/bootstrap.min.css') ?>" />
{{HTML::style('bootstrap/css/bootstrap.min.css')}}
{{HTML::style('bootstrap/css/sb-admin.css')}}
{{HTML::style('bootstrap/font-awesome-4.1.0/css/font-awesome.min.css')}}
</head>
<body>
<p><br><br><br>
    <div class="row">
        <div class="col-lg-4 text-left">
        </div>
        <div class="col-lg-4 text-left">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'login')) }}
                    <h1>Welcome</h1>
                    <p>
                                    {{ $errors->first('username') }}
                                    {{ $errors->first('password') }}
                    </p>
                    <p>
                                    {{ Form::label('username', 'Username') }}
                                    {{ Form::text('username', Input::old('username'), array('class' => 'form-control','placeholder'=>'Masukkan Username')) }}
                    </p>
                    <p>
                                    {{ Form::label('password', 'Password') }}
                                    {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Masukkan Password')) }}
                    </p>
                    <p> {{Form::submit('Login', array('class' => 'btn btn-primary'))}} </p>
                {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
</div>
</body>
</html>
 