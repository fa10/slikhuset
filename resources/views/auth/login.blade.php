@extends('layout')

@section('page_specific_style')
    <style>
        section.menu {
            background: none;
        }

        #header {
            position: fixed;
            top:0px;
            left: 0px;
            z-index:1001;
            width: 100%;
            height: 90px;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            padding-top: 20px;
        }

        #header .menu-item a {
            color: #818181;
        }

        #header.overflow {
            top:-100px;
            left: 0px;
            background-color: #fff!important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.11);
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -webkit-font-smoothing: antialiased;
        }
    </style>
@endsection

@section('content')
    <section id="login" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="voffset100"></div>
                    <h2 class="section-title">Login</h2>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}
                        <div>
                            Email
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div>
                            Password
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div>
                            <input type="checkbox" name="remember"> Remember Me
                        </div>

                        <div>
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection