<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showlogin()
    {
      return view('login.login_form');
    }   

    public function login(LoginFormRequest $request)
    {  logger('リクエスト内容', $request->all()); 
       $credential = $request->only('email', 'password');
       //dd($credential, Auth::attempt($credential));
       if (Auth::attempt($credential)){
        

        $request->session()->regenerate();

        return redirect()->route('home')->with('login_success','ログイン成功しました！');
       }

       return back()->withErrors([
        'login_error' => 'メールアドレスかパスワードが間違っています。'
       ]);
    }

/**
 * ユーザーをアプリケーションからログアウトさせる
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login.show')->with('logout','ログアウトしました！');
}
    
}
