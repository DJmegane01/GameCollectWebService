@extends('software/layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
        	@if($target == 'softwareCreate')
            	<h2>ソフトウェア情報登録</h2>
            @elseif($target == 'update')
            	<h2>ソフトウェア情報編集</h2>
            @endif
        </div>
    </div>
    <div id="app" class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'softwareCreate')
            <form action="/software" method="post">
            @elseif($target == 'update')
            <form action="/software/{{ $software->software_id }}" method="post">
            	<input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="software_id">ソフトウェアＩＤ</label>
                    <input type="text" class="form-control" name="software_id" value="{{ $software->software_id }}">
                    <example-component></example-component>
                </div>
                <div class="form-group">
                    <label for="name">ソフトウェア名</label>
                    <input type="text" class="form-control" name="software_name" value="{{ $software->software_name }}">
                </div>
                <div class="form-group">
                    <label for="corresponding_hardware">対応ハードウェア</label>
                	<select class="form-control" name="corresponding_hardware" value="{{ $software->corresponding_hardware }}">
                		<option value="" >対応ハード</option>
                		<option value="PS"  <?php echo $software->corresponding_hardware == 'PS' ? 'selected' : ""?>>PlayStation</option>
                		<option value="PS2" <?php echo $software->corresponding_hardware == 'PS2' ? 'selected' : ""?>>PlayStation2</option>
                		<option value="PS3" <?php echo $software->corresponding_hardware == 'PS3' ? 'selected' : ""?>>PlayStation3</option>
                		<option value="PS4" <?php echo $software->corresponding_hardware == 'PS4' ? 'selected' : ""?>>PlayStation</option>
                		<option value="PSP" <?php echo $software->corresponding_hardware == 'PSP' ? 'selected' : ""?>>PlayStationPortable</option>
                		<option value="FC" <?php echo $software->corresponding_hardware == 'FC' ? 'selected' : ""?>>ファミコン</option>
                		<option value="SFC" <?php echo $software->corresponding_hardware == 'SFC' ? 'selected' : ""?>>スーパーファミコン</option>
                		<option value="VB" <?php echo $software->corresponding_hardware == 'VB' ? 'selected' : ""?>>バーチャルボーイ</option>
                		<option value="N64" <?php echo $software->corresponding_hardware == 'N64' ? 'selected' : ""?>>NINTENDO64</option>
                		<option value="GC" <?php echo $software->corresponding_hardware == 'GC' ? 'selected' : ""?>>GAMECUBE</option>
                		<option value="Wii" <?php echo $software->corresponding_hardware == 'Wii' ? 'selected' : ""?>>Wii</option>
                		<option value="WiiU" <?php echo $software->corresponding_hardware == 'WiiU' ? 'selected' : ""?>>WiiU</option>
                		<option value="NSW" <?php echo $software->corresponding_hardware == 'NSW' ? 'selected' : ""?>>NINTENDO SWITCH</option>
                		<option value="MD" <?php echo $software->corresponding_hardware == 'MD' ? 'selected' : ""?>>メガドライブ</option>
                		<option value="PCE" <?php echo $software->corresponding_hardware == 'PCE' ? 'selected' : ""?>>PCエンジン</option>
                		<option value="SS" <?php echo $software->corresponding_hardware == 'SS' ? 'selected' : ""?>>セガサターン</option>
                		<option value="DC" <?php echo $software->corresponding_hardware == 'DC' ? 'selected' : ""?>>ドリームキャスト</option>
                		<option value="NG" <?php echo $software->corresponding_hardware == 'NG' ? 'selected' : ""?>>NEO・GEO</option>
                		<option value="PC" <?php echo $software->corresponding_hardware == 'PC' ? 'selected' : ""?>>PC</option>
                		<option value="STEAM" <?php echo $software->corresponding_hardware == 'STEAM' ? 'selected' : ""?>>STEAM</option>
                	</select>
                </div>
                <div class="form-group">
                    <label for="genre">ジャンル</label>
                    <select class="form-control" name="genre" value="{{ $software->genre }}">
                    	<option value="">ジャンル</option>
                    	<option value="RPG" <?php echo $software->genre == 'RPG' ? 'selected' : ""?>>RPG</option>
                    	<option value="RCG" <?php echo $software->genre == 'RCG' ? 'selected' : ""?>>レーシング</option>
                    	<option value="ACT" <?php echo $software->genre == 'ACT' ? 'selected' : ""?>>アクション</option>
                    	<option value="AVG" <?php echo $software->genre == 'AVG' ? 'selected' : ""?>>アドベンチャー</option>
                    	<option value="STG" <?php echo $software->genre == 'STG' ? 'selected' : ""?>>シューティング</option>
                    	<option value="SLG" <?php echo $software->genre == 'SLG' ? 'selected' : ""?>>シミュレーション</option>
                    	<option value="MSLG" <?php echo $software->genre == 'MSLG' ? 'selected' : ""?>>音楽シミュレーション</option>
                    	<option value="PZL" <?php echo $software->genre == 'PZL' ? 'selected' : ""?>>パズル</option>
                    	<option value="SPT" <?php echo $software->genre == 'SPT' ? 'selected' : ""?>>スポーツ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/software" class="btn btn-default">戻る</a>
            </form>
        </div>
    </div>
</div>
<script src=" {{ mix('js/app.js') }} "></script>
@endsection