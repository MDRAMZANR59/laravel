<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\JsonResponse;
use Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function _register(Request $r): JsonResponse
    {
        // $validate=Validator::make($r->all(),[
        //     'name'=>'required',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required',
        //     'c_password'=>'required|same:password'
        // ]);

        // if($validate->fails()){
        //     return $this->sendError($validate->errors(),"Validation Error",203);
        // }
        $input= $r->all();

        $userd['name']=$input['name'];
        $userd['email']=$input['email'];
        $userd['password']=bcrypt($input['password']);
        $userd['role_id']=4;
        $user=User::create($userd);

        $customer['name']=$input['name'];
        $customer['nid']=$input['nid'];
        $customer['email']=$input['email'];
        $customer['phone']=$input['phone'];
        $customer['user_id']=$user->id;

        Customer::create($customer);

        $data['token']=$user->createToken('hosp')->plainTextToken;
        $data['data']=$user;
        return $this->sendResponse($data,"User register successfully");

    }

    public function _login(Request $r)
    {
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password])){
            $user=User::with('role','customer','usermeta')->where('id',Auth::user()->id)->first();
            $data['token']=$user->createToken('hosp')->plainTextToken;
            $data['data']=$user;

            return $this->sendResponse($data,"User login successfully");
        }else{
            return $this->sendError(['error'=>'email or password is not correct'],"Unauthorized",400);
        }
    }



}
