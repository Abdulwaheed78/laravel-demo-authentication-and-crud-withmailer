@extends('layout')

@section('content')
    <div class="container">
        <div class="card mt-5" width="30%">
            <center>
                <h1 class="h3 mb-3 fw-normal">Register</h1></center>
            <form method="post" action="{{'/save'}}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group form-floating mb-3">
                    <input type="email" class="form-control" name="email"  placeholder="name@example.com" required="required" autofocus>
                    <label for="floatingEmail">Email address</label>

                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="name"  placeholder="name" required="required" autofocus>
                    <label for="floatingName">Username</label>

                </div>

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>

                </div>



                <button class=" btn btn-lg btn-primary" type="submit">Register</button><a href="login">have an account Login Here?</a>


            </form>
        </div>
    </div>
@endsection
