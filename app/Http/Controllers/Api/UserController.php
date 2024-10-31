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
        /* for files */
   $input=$request->all();
   $files=[];
   if($request->hasFile('files')){
       foreach($request->file('files') as $f){
           $photoname=time().rand(1111,9999).".".$f->extension();
           $photoPath=public_path().'/adduser';
           if($f->move($photoPath,$photoname)){
               array_push($files,$photoname);
           }
       }
   }
   $input['photo']=implode(',',$files);
   /* /for files */

        $data=User::create($input);
        $input=$request->all();
        $input['user_id']=$data->id;
        $userdata=UserMeta::create($input);
        return $this->sendResponse($userdata,"User created successfully");
    }
    public function show(User $User){
        return $this->sendResponse($User,"SecondaryUser created successfully");
    }
    public function update(Request $request,$id){
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $photoname=time().rand(1111,9999).".".$f->extension();
                $photoPath=public_path().'/adduser';
                if($f->move($photoPath,$photoname)){
                    array_push($files,$photoname);
                }
            }
            $input['photo']=implode(',',$files);
        }
        unset($input['files']);
        $data=User::where('id',$id)->update($input);
        return $this->sendResponse($id,"SecondaryUser updated successfully");
    }
    
    public function destroy(User $User)
    {
        $User=$User->delete();
        return $this->sendResponse($User,"SecondaryUser deleted successfully");
    }
}