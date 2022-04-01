<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>َAnimated Login Form</title>
    <link rel="stylesheet" href="styleskrter.css">
</head>

<body>

    <form class="box" action="{{ url('loginadmin') }}" method="post">
        @csrf

        <img src="images.jpg" alt="">
        <h1>Login</h1>
        <span style="color: red
        ">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        @if (Session::get('fail'))
        <div class="" style="color: red">
          {{Session::get('fail')}}
        </div>
    @endif
        <input type="text" name="email" placeholder="Email">
        <span style="color: red
        ">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>


</body>

</html>
