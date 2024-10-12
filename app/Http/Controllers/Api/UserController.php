<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Http\Controllers\Api\BaseController;

class UserController extends BaseController
{
    public function index(){
        $data=User::with('role','usermeta')->get();
        return $this->sendResponse($data,"user Data");
    }
    public function store(Request $request){

        $data=User::create($request->all());
        $input=$request->all();
        $input['user_id']=$data->id;
        $userdata=UserMeta::create($input);
        return $this->sendResponse($userdata,"User created successfully");
    }
    public function show(User $User){
        return $this->sendResponse($User,"SecondaryUser created successfully");
    }
    public function update(Request $request,$id){
        $data=User::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"SecondaryUser updated successfully");
    }
    
    public function destroy(User $User)
    {
        $User=$User->delete();
        return $this->sendResponse($User,"SecondaryUser deleted successfully");
    }
}
