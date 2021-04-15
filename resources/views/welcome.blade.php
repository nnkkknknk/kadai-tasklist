@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <!--<div class="row">-->
        <!--    <aside class="col-sm-4">-->
        <!--        <div class="card">-->
        <!--            <div class="card-header">-->
        <!--                <h3 class="card-title">{{ Auth::user()->name }}</h3>-->
        <!--            </div>-->
                    <!--<div class="card-body">-->
                    <!--    {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}-->
                    <!--    <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="">-->
                    <!--</div>-->
        <!--        </div>-->
        <!--    </aside>-->
        <!--    <div class="col-sm-8">-->
        <!--        {{-- 投稿フォーム --}}-->
        <!--        @include('tasks.form')-->
        <!--        {{-- 投稿一覧 --}}-->
        <!--        @include('tasks.tasks')-->
        <!--    </div>-->
        <!--</div>-->
        
         @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステイタス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        
         {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklists</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection


<!--<!DOCTYPE html>-->
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->

<!--        <title>Laravel</title>-->

        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->

        <!-- Styles -->
<!--        <style>-->
<!--            html, body {-->
<!--                background-color: #fff;-->
<!--                color: #636b6f;-->
<!--                font-family: 'Nunito', sans-serif;-->
<!--                font-weight: 200;-->
<!--                height: 100vh;-->
<!--                margin: 0;-->
<!--            }-->

<!--            .full-height {-->
<!--                height: 100vh;-->
<!--            }-->

<!--            .flex-center {-->
<!--                align-items: center;-->
<!--                display: flex;-->
<!--                justify-content: center;-->
<!--            }-->

<!--            .position-ref {-->
<!--                position: relative;-->
<!--            }-->

<!--            .top-right {-->
<!--                position: absolute;-->
<!--                right: 10px;-->
<!--                top: 18px;-->
<!--            }-->

<!--            .content {-->
<!--                text-align: center;-->
<!--            }-->

<!--            .title {-->
<!--                font-size: 84px;-->
<!--            }-->

<!--            .links > a {-->
<!--                color: #636b6f;-->
<!--                padding: 0 25px;-->
<!--                font-size: 13px;-->
<!--                font-weight: 600;-->
<!--                letter-spacing: .1rem;-->
<!--                text-decoration: none;-->
<!--                text-transform: uppercase;-->
<!--            }-->

<!--            .m-b-md {-->
<!--                margin-bottom: 30px;-->
<!--            }-->
<!--        </style>-->
<!--    </head>-->
<!--    <body>-->
<!--        <div class="flex-center position-ref full-height">-->
<!--            @if (Route::has('login'))-->
<!--                <div class="top-right links">-->
<!--                    @auth-->
<!--                        <a href="{{ url('/home') }}">Home</a>-->
<!--                    @else-->
<!--                        <a href="{{ route('login') }}">Login</a>-->

<!--                        @if (Route::has('register'))-->
<!--                            <a href="{{ route('register') }}">Register</a>-->
<!--                        @endif-->
<!--                    @endauth-->
<!--                </div>-->
<!--            @endif-->

<!--            <div class="content">-->
<!--                <div class="title m-b-md">-->
<!--                    Laravel-->
<!--                </div>-->

<!--                <div class="links">-->
<!--                    <a href="https://laravel.com/docs">Docs</a>-->
<!--                    <a href="https://laracasts.com">Laracasts</a>-->
<!--                    <a href="https://laravel-news.com">News</a>-->
<!--                    <a href="https://blog.laravel.com">Blog</a>-->
<!--                    <a href="https://nova.laravel.com">Nova</a>-->
<!--                    <a href="https://forge.laravel.com">Forge</a>-->
<!--                    <a href="https://vapor.laravel.com">Vapor</a>-->
<!--                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </body>-->
<!--</html>-->
