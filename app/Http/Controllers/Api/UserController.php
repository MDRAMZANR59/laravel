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
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/user';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
        }
        $input['photo']=implode(',',$files);
        // $input['signature']=implode(',',$files);
        /* /for files */

        $data=User::create($request->all());
        return $this->sendResponse($data,"User created successfully");
    }
    public function show(User $user){
        return $this->sendResponse($user,"User created successfully");
    }
    public function update(Request $request,$id)
    {
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/user';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
            $input['photo']=implode(',',$files);
            $input['signature']=implode(',',$files);
        }
        unset($input['files']);

        /* /for files */
        $data=User::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"User updated successfully");
    }
    
    public function destroy(User $user)
    {
        $user=$user->delete();
        return $this->sendResponse($user,"User deleted successfully");
    }
}