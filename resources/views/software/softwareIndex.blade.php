@extends('software/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ソフトウェア一覧</h3>
  </div>
</div>
<div class="row">
	<div class="col-md-11 col-md-offset-1">
		<label for="search_label">検索</label>
		<form action="/software/softwareSearch" method="get">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">ソフトウェア名</label>
				<input type="text" class="form-control" name="software_name" >
			</div>
			<div class="form-group">
			<label for="corresponding_hardware">対応ハードウェア</label>
               <select class="form-control" name="corresponding_hardware">
               		<option value="" >対応ハード</option>
               		<option value="PS" >PlayStation</option>
               		<option value="PS2" >PlayStation2</option>
               		<option value="PS3" >PlayStation3</option>
               		<option value="PS4" >PlayStation4</option>
               		<option value="PSP" >PlayStationPortable</option>
               		<option value="FC" >ファミコン</option>
               		<option value="SFC" >スーパーファミコン</option>
               		<option value="VB">バーチャルボーイ</option>
               		<option value="N64" >NINTENDO64</option>
               		<option value="GC" >GAMECUBE</option>
               		<option value="Wii" >Wii</option>
               		<option value="WiiU" >WiiU</option>
               		<option value="NSW" >NINTENDO SWITCH</option>
               		<option value="MD" >メガドライブ</option>
               		<option value="PCE" >PCエンジン</option>
               		<option value="SS" >セガサターン</option>
               		<option value="DC" >ドリームキャスト</option>
               		<option value="NG">NEO・GEO</option>
               		<option value="PC" >PC</option>
               		<option value="STEAM" >STEAM</option>
               </select>
            </div>
            <div class="form-group">
                    <label for="genre">ジャンル</label>
                    <select class="form-control" name="genre" >
                    	<option value="">ジャンル</option>
                    	<option value="RPG" >RPG</option>
                    	<option value="RCG" >レーシング</option>
                    	<option value="ACT" >アクション</option>
                    	<option value="AVG" >アドベンチャー</option>
                    	<option value="STG" >シューティング</option>
                    	<option value="SLG" >シミュレーション</option>
                    	<option value="MSLG" >音楽シミュレーション</option>
                    	<option value="PZL" >パズル</option>
                    	<option value="SPT" >スポーツ</option>
                    </select>
             </div>
             <button type="submit" class="btn btn-default">検索</button>
             <a href="/software/" class="btn btn-default" style="margin-left:auto;">全検索</a>
		</form>
	</div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ソフトウェアID</th>
        <th class="text-center">ソフトウェア名</th>
        <th class="text-center">ジャンル</th>
        <th class="text-center">対応ハードウェア</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($softwares as $software)
      <tr>
        <td>
          <a href="/software/{{ $software->software_id }}/edit">{{ $software->software_id }}</a>
        </td>
        <td>{{ $software->software_name }}</td>
        <td>{{ $software->genre }}</td>
        <td>{{ $software->corresponding_hardware }}</td>
        <td>
          <form action="/software/{{ $software->software_id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/software/create" class="btn btn-default">新規作成</a>
    	<a href="/menu/" class="btn btn-default" style="margin-left:auto;">メニュー</a>
    </div>
  </div>
</div>
@endsection