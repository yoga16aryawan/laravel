@extends('layout.master')

@section('title','Projek-Login')

@section('content')
<section class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    @include('notification')
                    <form method="POST" action="{{ route('proses.login') }}" class="box">
                        @csrf
                        <div class="column">
                            <img src="images/cash_drawer.jpg" alt="">
                        </div>
                        <div class="field">
                            <label for="" class="label">Username</label>
                            <div class="control has-icons-left">
                                <input type="text" id="username" name="username" placeholder="username anda" class="input" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control has-icons-left">
                                <input type="password" id="password" name="password" placeholder="*******" class="input" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="checkbox">
                                <input type="checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="field">
                            <button type="submit" class="button is-success">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection