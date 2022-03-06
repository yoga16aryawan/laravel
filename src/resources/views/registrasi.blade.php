@extends('layout.master')

@section('title','Registrasi User')

@section('content')
<section class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-5-widescreen">
                    @include('notification')
                    <form method="POST" action="{{ route('proses.registrasi') }}" class="box">
                        @csrf
                        <div class="field">
                            <label for="" class="label">Nama</label>
                            <div class="control has-icons-left">
                                <input type="text" id="name" name="name" placeholder="nama anda" class="input" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Username</label>
                            <div class="control has-icons-left">
                                <input type="text" id="username" name="username" placeholder="username yang ada inginkan" class="input" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control has-icons-left">
                                <input type="text" id="email" name="email" placeholder="ex. youremail@gmail.com" class="input" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
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
                            <button type="submit" class="button is-success">
                                Registrasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection