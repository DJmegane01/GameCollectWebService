@extends('user/layout')
@section('content')
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>ユーザー登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'userCreate')
            <form action="/user" method="post">
            @elseif($target == 'update')
            <form action="/user/{{ $user->id }}" method="post">
            	<input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="id">ユーザーＩＤ</label>
                    <input type="text" class="form-control" name="id" value="{{ $user->id }}">
                </div>
                <div class="form-group">
                    <label for="name">ユーザー名</label>
                    <input type="text" class="form-control" name="user_name" value="{{ $user->user_name }}">
                </div>
                <div class="form-group">
                    <label for="pasword">パスワード</label>
                    <input type="text" class="form-control" name="password" value="{{ $user->password }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/user">戻る</a>
            </form>
        </div>
    </div>
</div>
@endsection