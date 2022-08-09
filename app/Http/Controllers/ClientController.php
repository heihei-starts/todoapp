<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    //
    //register get
    public function registerGet() 
    {
        return view('client.register')
                    ->with('name', 'Laravel');
    }

    //register post
    public function registerPost(ClientRequest $request)
    {
        #clientモデルのインスタンスを生成
        $client = new Client();

        #リクエスト取得&DBに追加
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = $request->input('password');

        #DBに、データを保管
        $client->save();

        #登録後、ホームに飛ばす
        return redirect()->route('home.index');
        


    }
    
}
