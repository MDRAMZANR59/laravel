<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\JsonResponse;
use Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function _register(Request $r): JsonResponse
    {
        $validate=Validator::make($r->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'c_password'=>'required|same:password'
        ]);

        if($validate->fails()){
            return $this->sendError($validate->errors(),"Validation Error",203);
        }

        $input= $r->all();
        $input['password']=bcrypt($input['password']);
        $input['role_id']=3;
        $user=User::create($input);
        /* add data to user meta */
        $um['user_id']=$user->id;
            UserMeta::create($um);

        $data['token']=$user->createToken('hosp')->plainTextToken;
        $data['data']=$user;
        return $this->sendResponse($data,"User register successfully");

    }

    public function _login(Request $r):JsonResponse
    {
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password])){
            $user=Auth::user();
            $data['token']=$user->createToken('hosp')->plainTextToken;
            $data['data']=$user;
            return $this->sendResponse($data,"User login successfully");
        }else{
            return $this->sendError(['error'=>'email or password is not correct'],"Unauthorized",400);
        }
    }



}
