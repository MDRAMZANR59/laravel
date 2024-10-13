<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Controllers\Api\BaseController;

class StaffController extends BaseController
{
    public function index(){
        $data=Staff::get();
        return $this->sendResponse($data,"Staff Data");
    }
    public function store(Request $request){
        $data=Staff::create($request->all());
        return $this->sendResponse($data,"Staff created successfully");
    }
    public function show(Staff $staff){
        return $this->sendResponse($staff,"Staff created successfully");
    }
    public function update(Request $request,$id){
        $data=Staff::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Staff updated successfully");
    }
    
    public function destroy(Staff $staff)
    {
        $staff=$staff->delete();
        return $this->sendResponse($staff,"Staff deleted successfully");
    }
}
