<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function login_user()
    {
        return view('admin.login');

    }
    public function login_user_post(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return  redirect()->route('admin_index_path');
        }
        else{
            return redirect()->route('login_user_path');
        }
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin','asociacion']);
        return view('admin.index');

    }
    public function crear_usuario(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('admin.crear-usuario');

    }


    public function destroy(){
        return redirect()->route('admin_index_path');
    }
    public function solicitudes_lista()
    {

        return view('admin.index');
    }
}
