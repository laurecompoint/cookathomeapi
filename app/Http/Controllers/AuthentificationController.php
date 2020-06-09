<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class AuthentificationController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        $userexist = User::where('email', $request->email)->exists();
        if(!$userexist){
            return response('Cette
            adresse e-mail est inconnue', 422);
        }
    
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    
        $token = $user->createToken('token-login')->plainTextToken;
        $response = [
            'user' =>  $user,
            'authorization' => $token,
        ];
        return response($response, 201);
      
    }

    public function register(Request $request, User $user){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
           
            $errors = $validator->errors();

            return response(null, 422);
            
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $token = $user->createToken('token-register')->plainTextToken;
        
        $response = [
            'user' => $user->select('email'),
            'authorization' => $token
        ];
        return response($response, 201);
    }

}

