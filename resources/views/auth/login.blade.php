@extends('layouts.layout')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11">
                    <div class="card box-shadow">
                        <div class="row ">
                            <div class="col-md-6  d-none d-md-block d-lg-block"
                                style="background-image: url('svg/Login 1.jpg');background-size:cover;">
                                <div class="py-5">

                                </div>
                            </div>
                            <div class="col-md-6 py-5"
                                style="background-image: url('svg/Loginbg.png');background-size:cover;">
                                <div class="py-5 px-5 white-text">
                                    <h3 class=" white-text font-weight-bold mb-0 pb-0">
                                        Welcome The Instruflow
                                    </h3>

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div>
                                                <input type="email" name="email" id="defaultLoginFormEmail"
                                                    class="form-control mb-4" placeholder="E-mail">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" name="password" id="defaultLoginFormPassword"
                                                    class="form-control mb-4" placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <button class="btn btn-custom btn-block">
                                                Sign In <i class="fas fa-sign-in-alt"></i></button>
                                        </form>
                                        {{-- <p class="mt-4 text-center">
                                            <a href="{{ route('register') }}" class="white-text ">Not a Member? Create
                                                Account</a>
                                        </p> --}}

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
