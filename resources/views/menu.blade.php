@extends('layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">メニュー</h3>
  </div>
</div>
<div class="row">
<div class="col-md-11 col-md-offset-1">
	<button type="button" class="btn btn-outline-primary btn-lg" onclick="location.href='/software/'">ソフトウェア一覧</button>
	<!-- <button type="button" class="btn btn-outline-primary btn-lg">ハードウェア一覧</button> -->
	<button type="button" class="btn btn-outline-primary btn-lg" onclick="location.href='/manual/'">使い方</button>
</div>
</div>
@endsection