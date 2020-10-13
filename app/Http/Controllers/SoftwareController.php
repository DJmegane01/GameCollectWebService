<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;
use App\Software;

/**
 * ソフトウェア関連ページのコントローラクラス
 *
 * @version 1.0
 * @author DJmegane
 *
 */
class SoftwareController extends Controller
{
    protected function index(){
        $softwares = Software::all();
        return view('software/softwareIndex',compact('softwares'));
    }

    protected function edit($id){
        $software = Software::findOrFail($id);
        return view('software/SoftwareEdit',compact('software'));
    }

    protected function update(Request $request,$id){
        $software = Software::findOrFail($id);
        $software->software_id = $request->software_id;
        $software->software_name = $request->software_name;
        $software->genre = $request->genre;
        $software->corresponding_hardware = $request->corresponding_hardware;
        $software->save();
        return redirect("/software");
    }

    protected  function destroy($id){
        $software = Software::findOrFail($id);
        $software->delete();
        return redirect("/software");
    }

    //ソフトウェア検索関数 検索欄に入力することでそれぞれの検索
    protected function softwareSearch(Request $request){
        Log::info($request->software_name);
        $search_software = Software::query();
        if(!empty($request->software_name)){
            $search_name = $request->software_name;
            $search_software->where('software_name','like',"%{$search_name}%");
        }

        if(!empty($request->corresponding_hardware)){
            $search_hardware = $request->corresponding_hardware;
            $search_software->where('corresponding_hardware',$search_hardware);
        }

        if(!empty($request->genre)){
            $search_genre = $request->genre;
            $search_software->where('genre',$search_genre);
        }
        $softwares = $search_software->get();
        return view('software/softwareIndex',compact('softwares'));
    }


    protected function create(){
        $software = new Software();
        return view('software/softwareCreate',compact('software'));
    }

    protected function softwareCreate(Request $request){
        $software = new Software();
        $software->software_id = $request->software_id;
        $software->software_name = $request->software_name;
        $software->genre = $request->genre;
        $software->corresponding_hardware = $request->corresponding_hardware;
        $software->save();
        return redirect("/software");
    }
}
