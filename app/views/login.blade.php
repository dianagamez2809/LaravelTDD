<h1>Login</h1>
 {{ Form::open(['route' => 'sessions.store']) }}
 {{Form::label('email', 'Email: ')}}
 {{Form::text('email')}} </br>
 {{Form::label('password', 'Password: ')}}
 {{Form::password('password')}}</br>
 {{Form::submit('Login')}}
 {{ Form::close() }}