<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CreateMail;
use App\Http\Controllers\Api\BaseController;

class CreateMailController extends BaseController
{
    public function index(Request $request){
        $data=CreateMail::with('reciver','sender');
        if($request->senderId){
            $data=$data->where('senderId',$request->senderId)->whereNull('status');
        }
        if($request->status){
            $data=$data->where('status',$request->status);
        }
        if($request->receverId){
            $data=$data->where('receverId',$request->receverId)->whereNull('status');
        }
        $data=$data->get();
        return $this->sendResponse($data,"Mail Data");
    }
    public function store(Request $request){
        $data=CreateMail::create($request->all());
        return $this->sendResponse($data,"Mail created successfully");
    }
    public function show(CreateMail $createMail){
        return $this->sendResponse($createMail,"Mail created successfully");
    }
    public function update(Request $request,$id){
        $data=CreateMail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Mail updated successfully");
    }
    
    public function destroy( $id)
    {
        $data['status']=1;
        $data=CreateMail::where('id',$id)->update($data);
        return $this->sendResponse($data,"Mail deleted successfully");
    }
}
