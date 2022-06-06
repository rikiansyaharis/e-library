<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Pengguna;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PageController extends Controller {

    public function index() {
        return view('auth.signin');
    }

    public function home() {
        return view('admin.pages.home');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        try{
            $user = User::where('username', $request->username);

            if($user->count() > 0){
                if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
                    $user = $user->first();

                    return redirect()->route('index');
                } else {
                    return redirect()->route('signin')->withErrors(['message' => 'Username atau password tidak sesuai']);
                }
            }
        } catch(Exception $e){
            return redirect()->route('signin')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function register(Request $request){
        // return dd($request->all());
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        try {
            $request->merge(['password' => Hash::make($request->password)]);
            User::create($request->only(['name', 'username', 'email', 'password']));

            return redirect()->route('signin');
        } catch(Exception $e) {
            return restponse()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
