<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Api\BaseController;

class UserController extends BaseController
{
    public function index(){
        $data=User::get();
        return $this->sendResponse($data,"User Data");
    }
    public function store(Request $request){
        $data=User::create($request->all());
        return $this->sendResponse($data,"User created successfully");
    }
    public function show(User $user){
        return $this->sendResponse($user,"User created successfully");
    }
    public function update(Request $request,$id){
        $data=User::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"User updated successfully");
    }
    
    public function destroy(User $user)
    {
        $user=$user->delete();
        return $this->sendResponse($user,"User deleted successfully");
    }
}