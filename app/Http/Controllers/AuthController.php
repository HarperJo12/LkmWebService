<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Validator;

/**
 * @Author Marcel 2019 *
 **/

class AuthController extends Controller
{
public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            $user = Auth::user();
            $token =  $user->createToken('MyApp')-> accessToken;
            return response()->json(['token' => $token,
                                    'username' => $user['username'],
                                    'level' => $user['level']], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

	public function logout(Request $request)
    {
        $request->user()->token()->revoke();
		return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function resetPassword(Request $request)
    {
        $user = Auth::user();
        if(Hash::check($request->Old_Password, $user['password'])){
            $tmp['username'] = $user['username'];
            $tmp['password'] = bcrypt($request->Password);
            $tmp['level'] = $user['level'];
            $user->update($tmp);

            $request->user()->token()->revoke();

            return response()->json(['error' => 'false',
                                    'response' => 'Password berhasil diubah!'],
                                    $this-> successStatus);
        }else{
            return response()->json([
                'error' => 'true',
                'response' => 'Current password yang dimasukan salah!'
            ]);
        }
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json($user, $this-> successStatus);
    }
}
